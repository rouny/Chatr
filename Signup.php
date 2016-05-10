<?php
session_start();
$_SESSION['id']=0;
//$host="localhost";
//$username="root";
//$password="";
//$db_name="chatroom";
//$db_table="user_pass";
 require 'const.php';
 require 'Manager.php';


$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$first=$_POST['first'];
$last=$_POST['last'];
$myusername=$_POST['handle'];
$mypassword=$_POST['passwd'];

$sql="SELECT * FROM $userinfo_tablename WHERE $userinfo_handle='$myusername' ";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1){
	$_SESSION['error']="user already exist";
	die(header("location:index.php?SignupFailed=true&reason=user already exist"));
}
else{

	//generate Pass 
	$encPass = Manager::genPass($mypassword);
	//generate Key
	$encKey = Manager::genKey($myusername);
	
	$stmt="INSERT INTO $userinfo_tablename($userinfo_firstname,$userinfo_lastname,$userinfo_handle,$userinfo_password,$userinfo_userkey) VALUES('$first','$last','$myusername','$encPass','$encKey')";
	if(mysqli_query($conn,$stmt))
	{
		$_SESSION["name"]=$myusername;
		header("location:chatwindow.php");
	}
	else{
		echo "Error : ".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>

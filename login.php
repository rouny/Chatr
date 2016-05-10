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

$myusername=$_POST['handle'];
$mypassword=$_POST['passwd'];

$encPass = Manager::genPass($mypassword);

$sql="SELECT * FROM $userinfo_tablename WHERE $userinfo_handle='$myusername' and $userinfo_password='$encPass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1){
	$_SESSION["name"]=$myusername;
	header("location:chatwindow.php");
}
else{
	$_SESSION['error']="Invalid Handle Or Password";
	//session_destroy();
	die(header("location:index.php?loginFailed=true&reason=inavalid handle or password"));
}

?>

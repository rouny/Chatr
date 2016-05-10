<?php
session_start();
//$host="localhost";
///$username="root";
//$password="";
//$db_name="chatroom";
//$db_table="user_list";

require 'const.php';

$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$sql1="SELECT * FROM $userlist_tablename WHERE $userlist_user1='".$_SESSION['name']."'AND $userlist_user2='".$_GET['q']."'";
$result=mysqli_query($conn,$sql1);

if(!$result){
	die(mysqli_error($conn));
}
if(mysqli_num_rows($result)>0){
	echo "User";

}
else{
$sql="INSERT INTO $userlist_tablename($userlist_user1,$userlist_user2) VALUES('".$_SESSION['name']."','".$_GET['q']."')";

if(!mysqli_query($conn,$sql)){
	echo "Error : ".mysqli_error($conn);
}
}
mysqli_close($conn);
?>

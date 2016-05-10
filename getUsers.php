<?php
session_start();
//$host="localhost";
//$username="root";
//$password="";
//$db_name="chatroom";
//$db_table="user_list";

require 'const.php';

$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM $userlist_tablename WHERE $userlist_user1='".$_SESSION['name']."'";
$result=mysqli_query($conn,$sql);

if(!$result){
	die(mysqli_error($conn));
}

$source=array(); 

if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		array_push($source,$row[$userlist_user2]);
	}
}

echo json_encode($source);

?>
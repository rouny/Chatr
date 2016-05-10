<?php
session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

require 'const.php';
require 'getUserKeys.php';
require 'Crypt.php';
require 'Manager.php';


$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$_SESSION['user2']=$_GET['q'];
$me = $_SESSION['name'];
$other = $_GET['q'];

$sql="SELECT * FROM $chatwindow_tablename WHERE ($chatwindow_receiver='".$me."'AND $chatwindow_sender='".$other."') OR ( $chatwindow_receiver='".$other."' AND $chatwindow_sender='".$me."')";
$result=mysqli_query($conn,$sql);
//echo $result;

if(!$result){
die(mysqli_error($conn));
}

if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		//decrypt
		$sender = $row[$chatwindow_sender];
		$receiver = $row[$chatwindow_sender];

		if(strcmp($sender,$me))
		{
		// $senderKey = Manager::genKey($row[$chatwindow_sender]);
		// $receiverKey = Manager::genKey($row[$chatwindow_receiver]);
		$senderKey = Manager::genKey($me);
		$receiverKey = Manager::genKey($other);
		$decMessage = Crypt::Decrypt($row[$chatwindow_message],$senderKey,$receiverKey);
		// $decMessage = $row[$chatwindow_message];
		echo $row[$chatwindow_sender]." : ".$decMessage."<br/>";
		//$_SESSION['id']=$row["id"];			
		}
		else
		{
		// $senderKey = Manager::genKey($row[$chatwindow_sender]);
		// $receiverKey = Manager::genKey($row[$chatwindow_receiver]);
		$senderKey = Manager::genKey($other);
		$receiverKey = Manager::genKey($me);
		$decMessage = Crypt::Decrypt($row[$chatwindow_message],$senderKey,$receiverKey);
		// $decMessage = $row[$chatwindow_message];
		echo $row[$chatwindow_sender]." : ".$decMessage."<br/>";
		//$_SESSION['id']=$row["id"];						
		}
	}
}

mysqli_close($conn);

?>
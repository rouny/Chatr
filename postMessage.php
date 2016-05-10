<?php
session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

require 'const.php';
require 'Crypt.php';
require 'getUserKeys.php';
require 'Manager.php';

$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

//encrypt
$sender = $_SESSION['user2'];
$receiver = $_SESSION['name'];
$message = $_GET['q'];

$senderKey = Manager::genKey($sender);
$receiverKey = Manager::genKey($receiver);
$encMessage = Crypt::Encrypt($message,$senderKey,$receiverKey);
// $encMessage = $message;


$sql="INSERT INTO $chatwindow_tablename($chatwindow_receiver,$chatwindow_sender,$chatwindow_message) VALUES('".$sender."','".$receiver."'".",'".$encMessage."')";
if(!(mysqli_query($conn,$sql))){
	echo "Error : ".mysqli_error($conn);
}

$msg = '{"msg":"'.$encMessage.'","sender":"'.$receiver.'"},';
$sql = "UPDATE ".$chatmobile_tablename." SET ".$chatmobile_message." = CONCAT(".$chatmobile_message.",'".$msg."') WHERE ".$chatmobile_userid." = '".$sender."'";
//$sql = "UPDATE Chat SET msg='Sample' WHERE username = 'mayank';";
echo "<br>".$sql;
$result = $conn->query($sql);

if(!$result)
{
	die('403');
}

if ($result->num_rows > 0) {
    // output data of each row
	echo "YES";
} else {
    echo "NO";
}

mysqli_close($conn);

?>
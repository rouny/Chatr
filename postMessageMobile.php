<?php
// session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

class postMessageMobile
{
	public static function postMessage($sender, $receiver, $message)
	{
		require 'const.php';

		$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}


		$sql="INSERT INTO $chatwindow_tablename($chatwindow_receiver,$chatwindow_sender,$chatwindow_message) VALUES('$receiver','$sender','$message')";
		echo $sql;
		if(!(mysqli_query($conn,$sql))){
			echo "Error : ".mysqli_error($conn);
		}

		mysqli_close($conn);
	}
}

?>
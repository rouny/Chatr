<?php
// session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

class postMessageWindowsUsingMobile
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

	public static function addUser($user1, $user2)
	{
		require 'const.php';

		$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

		$sql1="SELECT * FROM $userlist_tablename WHERE $userlist_user1='".$user1."'AND $userlist_user2='".$user2."'";
		$result=mysqli_query($conn,$sql1);

		if(!$result){
			die(mysqli_error($conn));
		}
		if(mysqli_num_rows($result)>0){
			echo "User";

		}
		else{
		$sql="INSERT INTO $userlist_tablename($userlist_user1,$userlist_user2) VALUES('".$user1."','".$user2."')";

		if(!mysqli_query($conn,$sql)){
			echo "Error : ".mysqli_error($conn);
		}
		}
		mysqli_close($conn);
	}
}

?>
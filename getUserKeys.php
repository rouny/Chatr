<?php
// session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

class getUserKeys
{

	public static function getKey($user)
	{
		require 'const.php';

		$conn= mysqli_connect($db_address,$db_username,$db_pass,$db_name);
		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

		$sql1="SELECT * FROM $userinfo_tablename WHERE $userinfo_handle='".$user;
		$result=mysqli_query($conn,$sql1);

		if(!$result || mysqli_num_rows($result)<=0){
			return '404';
		}
		else{
			$row=mysqli_fetch_assoc($result);
			return $row[$userinfo_userkey];
		}

		mysqli_close($conn);
	}
}

?>
<?php
// session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

class Manager
{
	public static function genKey($key)
	{
		exec('java GenKey '.$key, $output);
		return $output[0];
	}

	public static function genPass($pass)
	{
		exec('java GenPass '.$pass, $output);
		return $output[0];
	}

}

?>
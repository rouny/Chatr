<?php
// session_start();
// $host="localhost";
// $username="root";
// $password="";
// $db_name="chatroom";
// $db_table="message";

class Crypt
{
	public static function Encrypt($message, $sender, $receiver)
	{
		exec('java Encrypt '.$message.' '.$sender.' '.$receiver, $output);
		if($output!=null)
			return $output[0];
		else
			return 'null';
	}

	public static function Decrypt($message, $sender, $receiver)
	{
		exec('java Decrypt '.$message.' '.$receiver.' '.$sender, $output);
		if($output!=null)
			return $output[0];
		else
			return 'null';
	}

}

?>
<?php
require 'Consts.php';
require 'postMessageWindowsUsingMobile.php';
// Create connection
$conn = new mysqli($db_address, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = $_GET['MESSAGE'];
$from = $_GET['MSG_FROM'];
$to = $_GET['MSG_TO'];

echo "INFO : ".$message." ".$from." ".$to;
$msg = '{"msg":"'.$message.'","sender":"'.$from.'"},';
$sql = "UPDATE ".$chatmobile_tablename." SET ".$chatmobile_msg." = CONCAT(".$chatmobile_msg.",'".$msg."') WHERE ".$chatmobile_userhandle." = '".$to."'";
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
/*    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " <br>Pass: " . $row["pass"]. "<br>";
    }*/
} else {
    echo "NO";
}
$conn->close();

if(strcmp($message,'request'))
{
	echo 'Case1';
	postMessageWindowsUsingMobile::postMessage($from,$to,$message);
}
else
{
	echo 'Case2';
	//add user to 
	postMessageWindowsUsingMobile::addUser($from,$to);
}


?>

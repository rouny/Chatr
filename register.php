<?php
$userhandle = $_GET["user_handle"];
$userpass = $_GET["user_pass"];
$userkey = $_GET["user_key"];

require 'Consts.php';

// Create connection
$conn = new mysqli($db_address, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Hello";

//echo "INFO : ".$userhandle." ".$userpass." ".$userkey;

$sql = "SELECT * FROM ".$chatmobile_tablename." WHERE ".$chatmobile_userhandle."='".$userhandle."'";

//$sql = "SELECT name, pass FROM T";
//echo "<br>".$sql;
$result = $conn->query($sql);

if ($result->num_rows == 0) {
	//new-user
    // output data of each row
echo "OK";
/*    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " <br>Pass: " . $row["pass"]. "<br>";
    }*/

$sql2 = "INSERT INTO ".$chatmobile_tablename." (".$chatmobile_userhandle.",".$chatmobile_msg.") VALUES ('".$userhandle."','')";
$sql3 = "INSERT INTO ".$userinfo_tablename." (".$userinfo_userid.", ".$userinfo_userpass.", ".$userinfo_userkey.") VALUES ('".$userhandle."','".$userpass."','".$userkey."')";
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$sqlcheck = "SELECT * FROM ".$chatmobile_tablename." WHERE ".$chatmobile_userhandle."='".$userhandle."'";
$sqlcheck2 = "SELECT * FROM ".$userinfo_tablename." WHERE ".$userinfo_userid."='".$userhandle."'";
$result2 = $conn->query($sqlcheck);
$result3 = $conn->query($sqlcheck2);
if($result2->num_rows > 0 && $result3->num_rows > 0)
{
echo "DONE";
}else
{
echo "FAILED";
}

} else {
    echo "403";
}
$conn->close();

?>

<?php
$userhandle = $_GET["user_handle"];

require 'Consts.php';

// Create connection
$conn = new mysqli($db_address, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "INFO : ".$message." ".$from." ".$to;
$sql = "SELECT ".$userinfo_userpass." FROM ".$userinfo_tablename." WHERE ".$userinfo_userid." = '".$userhandle."'";

//$sql = "SELECT name, pass FROM T";
//echo "<br>".$sql;
$result = $conn->query($sql);
if($result->num_rows>0)
{
while($row = $result->fetch_assoc())
{
echo $row[$userinfo_userpass];
}
}else
{
echo "404";
}
$conn->close();
?>

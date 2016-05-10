<?php
require 'Consts.php';

// Create connection
$conn = new mysqli($db_address, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$from = $_GET['MSG_FROM'];


$sql = "UPDATE ".$chatmobile_tablename." SET ".$chatmobile_msg." = '' WHERE ".$chatmobile_userhandle." = '".$from."'";

//$sql = "SELECT name, pass FROM T";
// echo "<br>".$sql;
$result = $conn->query($sql);

if (isset($result) && $result->num_rows > 0) {
    // output data of each row
echo "YES";
/*    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " <br>Pass: " . $row["pass"]. "<br>";
    }*/
} else {
    echo "NO";
}
$conn->close();
?>

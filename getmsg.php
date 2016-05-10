<?php
require 'Consts.php';

// Create connection
$conn = new mysqli($db_address, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_GET['USRNAME'];

$sql = "SELECT ".$chatmobile_msg." FROM ".$chatmobile_tablename." WHERE ".$chatmobile_userhandle." = '".$username."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row[$chatmobile_msg];
    }
} else {
    echo "NO_MSG";
}
$conn->close();
?>

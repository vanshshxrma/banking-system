<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "tsf_bank";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, name, email, balance FROM users";
$result = mysqli_query($conn, $sql);
?>

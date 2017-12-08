


<?php

$servername = "mydatabasegp.c7xgtid4bjv2.ap-southeast-1.rds.amazonaws.com";
$username = "admin";
$password = "admin1234";
$database = "apiDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "SELECT name FROM users";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);

 echo "id: " . $row["name"];





?>
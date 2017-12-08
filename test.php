


<?php

$servername = "localhost";
$username = "root";
$password = "mysqlapirest123";
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

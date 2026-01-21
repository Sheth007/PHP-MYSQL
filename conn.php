<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "training";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database Connected Successfully";
}

// $sql = "CREATE DATABASE training";

// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
?>
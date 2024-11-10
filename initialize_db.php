<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profute_db";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = file_get_contents('db/initialize_db.sql');

if ($conn->multi_query($sql)) {
    echo "Database and tables created successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

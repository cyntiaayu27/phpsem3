<?php
include 'db_connection.php';

// SQL untuk membuat database
$sql = "CREATE DATABASE IF NOT EXISTS my_database";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat!";
} else {
    echo "Error membuat database: " . $conn->error;
}

$conn->close();
?>

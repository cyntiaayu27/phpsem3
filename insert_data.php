<?php
include 'db_connection.php';

// SQL untuk memasukkan data
$sql = "INSERT INTO Users (fullname, email) VALUES ('John Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error menambahkan data: " . $conn->error;
}

$conn->close();
?>
ss
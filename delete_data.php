<?php
include 'db_connection.php';

// SQL untuk menghapus data
$sql = "DELETE FROM Users WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error menghapus data: " . $conn->error;
}

$conn->close();
?>

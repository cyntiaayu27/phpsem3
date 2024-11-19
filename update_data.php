<?php
include 'db_connection.php';

// SQL untuk update data
$sql = "UPDATE Users SET fullname='Jane Doe' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate!";
} else {
    echo "Error mengupdate data: " . $conn->error;
}

$conn->close();
?>

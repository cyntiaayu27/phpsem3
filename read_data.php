<?php
include 'db_connection.php';

// SQL untuk membaca data
$sql = "SELECT id, fullname, email FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["fullname"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>

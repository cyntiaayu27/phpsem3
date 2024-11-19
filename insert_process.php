<?php
require_once "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    try {
        $connection = getConnection();
        $sql = "INSERT INTO customers (name, email) VALUES (:name, :email)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->execute();
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='view_data.php';</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

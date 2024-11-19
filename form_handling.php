<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];

    $sql = "INSERT INTO Users (fullname, email) VALUES ('$fullname', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Form Input Data</h2>
<form method="post" action="">
    Nama Lengkap: <input type="text" name="fullname"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

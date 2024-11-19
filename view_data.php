<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">Data Pelanggan</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "db_connection.php"; // Memastikan koneksi database tersedia
                try {
                    // Membuka koneksi
                    $connection = getConnection();

                    // Query untuk mengambil data dari tabel pelanggan
                    $sql = "SELECT * FROM pelanggan";
                    $statement = $connection->query($sql);

                    // Menampilkan data
                    foreach ($statement as $row) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['email']}</td>
                              </tr>";
                    }
                } catch (PDOException $e) {
                    // Menangani error
                    echo "<tr><td colspan='3' class='text-center'>Error: {$e->getMessage()}</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

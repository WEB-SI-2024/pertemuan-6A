<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa2";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    echo ("Koneksi database gagal");
    exit;
}

// query
$result = mysqli_query($conn, "SELECT * FROM data_mahasiswa");

// convert ke array assosiative
// $data = mysqli_fetch_assoc($result);

// tampilin data
// var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Hapus</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td>
                    <?= $data['id'] ?>
                </td>
                <td>
                    <a href="delete.php?id=<?= $data['id'] ?>">Hapus</a>
                </td>
                <td>
                    <?= $data['nama'] ?>
                </td>
                <td>
                    <?= $data['nim'] ?>
                </td>
                <td>
                    <?= $data['email'] ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
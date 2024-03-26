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

if (isset ($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id = $id");
}

header("Location: index.php");

?>
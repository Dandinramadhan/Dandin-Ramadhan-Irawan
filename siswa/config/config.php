<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_siswa";
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Koneksi database Gagal: " . mysqli_connect_error());
    }
?>
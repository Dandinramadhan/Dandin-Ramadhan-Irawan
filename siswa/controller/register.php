<?php
session_start();
include '../config/config.php';

if (isset($_SESSION['nama'])) {
   header("Location: ../index.php");
   exit();
}

if (isset($_POST['submit'])) {
   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $password = hash('sha256', $_POST['password']);

   if ($password) {
      $sql = "SELECT * FROM user WHERE username='$username'";
      $result = mysqli_query($conn, $sql);
      if (!$result->num_rows > 0) {
         $sql = "INSERT INTO user (nama, username, password)
         VALUES ('$nama', '$username', '$password')";
         $result = mysqli_query($conn, $sql);
         if ($result) {
               echo "<script>alert('Registrasi Berhasil!')</script>";
               $nama = "";
               $_POST['password'] = "";
         } else {
            echo "<script>alert('Terjadi Kesalahan.')</script>";
         }
      } else {
         echo "<script>alert('User sudah Terdaftar.')</script>";
      }
   } else {
      echo "<script>alert('Password Tidak Sesuai.')</script>";
   }
}
?>
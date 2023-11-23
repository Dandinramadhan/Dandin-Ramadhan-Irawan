<?php
session_start();
include '../config/config.php';

if (isset($_SESSION['nama'])) {
	header("Location: ../siswa.php");
	exit();
}

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	// $password = hash('sha256', $_POST['password']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT *FROM user WHERE username = '$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nama'] = $row['nama'];
		header("Location: ../siswa.php");
		exit();
	} else {
		echo "<script>alert('Login gagal, Coba Lagi')</script>";
	}
}
?>
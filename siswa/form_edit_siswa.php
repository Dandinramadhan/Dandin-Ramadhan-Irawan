<?php
include 'config/config.php';

if (!isset($_GET['id'])) {
    header('Location: siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Siswa</title>
</head>
<body>
    <head>
        <h2>Edit Data Siswa</h2>
    </head>
    <form action="controller/edit_siswa.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $siswa['id'] ?>" />
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama'] ?>" />
        </div>
        <br>
        <div>
            <label for="tplahir">Tempat lahir</label>
            <input type="text" name="tplahir" id="tplahir" required>
        </div>
        <br>
        <div>
            <label for="tglahir">Tanggal lahir</label>
            <input type="date" name="tglahir" id="tglahir" required>
        </div>
        <br>
        <div>
            <label for="alamat">alamat</label>
            <input type="text" name="tplahir" id="alamat" required>
        </div>
        <br>
        <div>
            <label for="hobi">hobi</label>
            <input type="text" name="hobi" id="hobi" required>
        </div>
        <br>
        <div>
            <label for="cita_cita">cita_cita</label>
            <input type="text" name="cita_cita" id="cita_cita" required>
        </div>
        <br>
        <div>
            <label for="idkelas">idkelas</label>
            <input type="text" name="idkelas" id="idkelas" required>
        </div>
        <br>
        <div>
            <label for="idagama">idagama</label>
            <input type="text" name="idagama" id="idagama" required>
        </div>
        <br>
        <br>
        <div>
            <label for="jurusan">Jurusan</label>
            <?php $jurusan = $siswa['jurusan']?>
            <select name="jurusan" id="jurusan">
                <option <?php echo ($jurusan == 'Rekayasa Perangkat Lunak') ? "selected": "" ?>>Rekayasa Perangkat Lunak</option>
                <option <?php echo ($jurusan == 'Teknik Komputer dan Jaringan') ? "selected": "" ?>>Teknik Komputer dan Jaringan</option>
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value="simpan" name="submit">
        </div>
    </form>
</body>
</html>
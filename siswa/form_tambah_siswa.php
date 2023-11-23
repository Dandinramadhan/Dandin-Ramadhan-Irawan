<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Form Tambah Siswa Baru</h2>
    </header>

    <form action="controller/tambah_siswa.php" method="POST">
        <div>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama" required>
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
        <div>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="" required>
                <option value="" disabled selected>Pilih Jurusan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                <option value="Multimedia">Multimedia</option>
                <option value="SIJA">SIJA</option>
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value ="Submit" name="submit" id="">
        </div>
    </form>
</body>
</html>
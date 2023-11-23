-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 00.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nm_agama` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nm_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `namakelas` varchar(225) DEFAULT NULL,
  `kompetensi` varchar(225) DEFAULT NULL,
  `tahun_pelajaran` varchar(225) DEFAULT NULL,
  `keterangan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `namakelas`, `kompetensi`, `tahun_pelajaran`, `keterangan`) VALUES
(1, 'XI RPL 1', 'Rekayasa perangkat lunak', '2023-2024', 'bu suwantini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `tplahir` varchar(225) DEFAULT NULL,
  `tglahir` date DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `hobi` varchar(225) DEFAULT NULL,
  `cita_cita` varchar(225) DEFAULT NULL,
  `jm_saudara` int(11) DEFAULT NULL,
  `idkelas` int(11) DEFAULT NULL,
  `idagama` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `tplahir`, `tglahir`, `alamat`, `hobi`, `cita_cita`, `jm_saudara`, `idkelas`, `idagama`) VALUES
(1, 'erwin', 'malang', '2020-09-07', 'jl.tebo barat', 'makan bakso', 'jadi tukang bakso', 2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL,
  `idsiswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `idsiswa`) VALUES
(1, 'erwin', 'erwin123', 'administrator', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkelas` (`idkelas`),
  ADD KEY `idagama` (`idagama`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsiswa` (`idsiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`idagama`) REFERENCES `agama` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

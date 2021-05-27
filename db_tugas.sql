-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 09.01
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id` int(10) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `jenis_tugas` varchar(25) NOT NULL,
  `nama_tugas` varchar(50) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_file` varchar(50) NOT NULL,
  `pengumpulan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `file_pendukung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tugas`
--

INSERT INTO `tb_tugas` (`id`, `mata_kuliah`, `dosen`, `jenis_tugas`, `nama_tugas`, `deadline`, `nama_file`, `pengumpulan`, `keterangan`, `file_pendukung`) VALUES
(30, 'hbbh', '', 'hbbh', 'hbbh', '2021-05-23 12:42:00', 'hbbh', 'hbbh', 'hbbh', 0),
(33, 'eded', '', 's', 'd', '2021-05-04 12:57:00', 'fdfdf', 'dfdfd', 'dfdfd', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

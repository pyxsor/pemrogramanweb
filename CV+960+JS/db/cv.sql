-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 09.39
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tel` varchar(25) DEFAULT NULL,
  `ig` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `ttl`, `alamat`, `no_tel`, `ig`) VALUES
(1, 'Surabaya, 12 September 2000', 'Jl. Simorejo 102-A, Sukomanunggal, Surabaya, 60181', '081332049634', 'saya_handie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayatpendidikan`
--

CREATE TABLE `riwayatpendidikan` (
  `jenjang_pendidikan` varchar(20) NOT NULL,
  `nama_instansi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayatpendidikan`
--

INSERT INTO `riwayatpendidikan` (`jenjang_pendidikan`, `nama_instansi`) VALUES
('S1 ', 'UPN V JATIM '),
('S2', 'ui'),
('S3', 'HARVARD'),
('S4', 'GALAXY'),
('SD', 'SDN ASEMROWO 1 SURABAYA'),
('SMA', 'SMA MUHAMMADIYAH 10 SURABAYA'),
('SMP', 'SMP MUHAMMADIYAH 2 SURABAYA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayatpendidikan`
--
ALTER TABLE `riwayatpendidikan`
  ADD PRIMARY KEY (`jenjang_pendidikan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

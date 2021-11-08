-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2021 pada 22.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonus_gaji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `level`) VALUES
(1, 'ADMIN', 'admin@gmail.com', '12345678', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus`
--

CREATE TABLE `bonus` (
  `id_bonus` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasilbonus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bonus`
--

INSERT INTO `bonus` (`id_bonus`, `id_user`, `hasilbonus`) VALUES
(3, 11, '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus_2`
--

CREATE TABLE `bonus_2` (
  `id_bonus2` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasilbonus2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bonus_2`
--

INSERT INTO `bonus_2` (`id_bonus2`, `id_user`, `hasilbonus2`) VALUES
(3, 10, '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus_3`
--

CREATE TABLE `bonus_3` (
  `id_bonus3` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasilbonus3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bonus_3`
--

INSERT INTO `bonus_3` (`id_bonus3`, `id_user`, `hasilbonus3`) VALUES
(3, 9, '300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus_4`
--

CREATE TABLE `bonus_4` (
  `id_bonus4` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasilbonus4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bonus_4`
--

INSERT INTO `bonus_4` (`id_bonus4`, `id_user`, `hasilbonus4`) VALUES
(3, 8, '150000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus_5`
--

CREATE TABLE `bonus_5` (
  `id_bonus5` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasilbonus5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bonus_5`
--

INSERT INTO `bonus_5` (`id_bonus5`, `id_user`, `hasilbonus5`) VALUES
(3, 7, '150000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `jabatan`, `status`, `level`) VALUES
(7, 'FAUZI AGUSTIAN', 'fauziagustian68@gmail.com', '12345678', 'PROGRAMMER', 'PEGAWAI AKTIF', 2),
(8, 'UDIN OKE', 'udin@gmail.com', '12345678', 'PROGRAMMER', 'PEGAWAI AKTIF', 2),
(9, 'BUDI', 'budi@gmail.com', '12345678', 'PROGRAMMER', 'PEGAWAI AKTIF', 2),
(10, 'BANU', 'banu@gmail.com', '12345678', 'KONTEN KREATOR', 'PEGAWAI AKTIF', 2),
(11, 'TONO', 'tono@gmail.com', '12345678', 'DIGITAL MARKETING', 'PEGAWAI AKTIF', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id_bonus`);

--
-- Indeks untuk tabel `bonus_2`
--
ALTER TABLE `bonus_2`
  ADD PRIMARY KEY (`id_bonus2`);

--
-- Indeks untuk tabel `bonus_3`
--
ALTER TABLE `bonus_3`
  ADD PRIMARY KEY (`id_bonus3`);

--
-- Indeks untuk tabel `bonus_4`
--
ALTER TABLE `bonus_4`
  ADD PRIMARY KEY (`id_bonus4`);

--
-- Indeks untuk tabel `bonus_5`
--
ALTER TABLE `bonus_5`
  ADD PRIMARY KEY (`id_bonus5`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bonus`
--
ALTER TABLE `bonus`
  MODIFY `id_bonus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bonus_2`
--
ALTER TABLE `bonus_2`
  MODIFY `id_bonus2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bonus_3`
--
ALTER TABLE `bonus_3`
  MODIFY `id_bonus3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bonus_4`
--
ALTER TABLE `bonus_4`
  MODIFY `id_bonus4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bonus_5`
--
ALTER TABLE `bonus_5`
  MODIFY `id_bonus5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

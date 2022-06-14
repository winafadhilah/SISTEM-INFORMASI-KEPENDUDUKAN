-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2022 pada 11.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrasi_kependudukan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kedatangan`
--

CREATE TABLE `data_kedatangan` (
  `idKedatangan` int(11) NOT NULL,
  `tanggalCetak` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `tanggalDatang` date NOT NULL,
  `domisiliAsal` varchar(100) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `idKelahiran` int(11) NOT NULL,
  `tanggal_cetak` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `idKematian` int(11) NOT NULL,
  `tanggalCetak` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggalKematian` date NOT NULL,
  `tempatKematian` varchar(100) NOT NULL,
  `tempatPemakaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kk`
--

CREATE TABLE `data_kk` (
  `no_kk` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `nik_anggota1` varchar(20) DEFAULT NULL,
  `nama_anggota1` varchar(50) DEFAULT NULL,
  `nik_anggota2` varchar(20) DEFAULT NULL,
  `nama_anggota2` varchar(50) DEFAULT NULL,
  `nik_anggota3` varchar(20) DEFAULT NULL,
  `nama_anggota3` varchar(50) DEFAULT NULL,
  `nik_anggota4` varchar(20) DEFAULT NULL,
  `nama_anggota4` varchar(50) DEFAULT NULL,
  `nik_anggota5` varchar(20) DEFAULT NULL,
  `nama_anggota5` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `golDarah` varchar(2) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonanktp`
--

CREATE TABLE `data_permohonanktp` (
  `idPermohonan` varchar(20) NOT NULL,
  `tanggalPermohonan` date NOT NULL,
  `nik` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perpindahan`
--

CREATE TABLE `data_perpindahan` (
  `idPerpindahan` int(11) NOT NULL,
  `tanggalCetak` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggalPindah` date NOT NULL,
  `domisiliTujuan` varchar(50) NOT NULL,
  `alasanPindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kedatangan`
--
ALTER TABLE `data_kedatangan`
  ADD PRIMARY KEY (`idKedatangan`);

--
-- Indeks untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`idKelahiran`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`idKematian`);

--
-- Indeks untuk tabel `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `data_permohonanktp`
--
ALTER TABLE `data_permohonanktp`
  ADD PRIMARY KEY (`idPermohonan`);

--
-- Indeks untuk tabel `data_perpindahan`
--
ALTER TABLE `data_perpindahan`
  ADD PRIMARY KEY (`idPerpindahan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kedatangan`
--
ALTER TABLE `data_kedatangan`
  MODIFY `idKedatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  MODIFY `idKelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `idKematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_perpindahan`
--
ALTER TABLE `data_perpindahan`
  MODIFY `idPerpindahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

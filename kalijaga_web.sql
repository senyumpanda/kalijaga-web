-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2022 pada 06.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalijaga_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_pembayaran`
--

CREATE TABLE `akses_pembayaran` (
  `id_akses_pembayaran` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses_pembayaran`
--

INSERT INTO `akses_pembayaran` (`id_akses_pembayaran`, `id_produk`, `id_pembayaran`) VALUES
(1, 10, 0),
(2, 10, 2),
(3, 10, 0),
(4, 10, 0),
(5, 10, 0),
(6, 10, 0),
(7, 11, 1),
(8, 11, 2),
(9, 11, 3),
(10, 11, 0),
(11, 11, 0),
(12, 11, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_pengiriman`
--

CREATE TABLE `akses_pengiriman` (
  `id_akses_pengiriman` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses_pengiriman`
--

INSERT INTO `akses_pengiriman` (`id_akses_pengiriman`, `id_produk`, `id_pengiriman`) VALUES
(2, 10, 1),
(3, 10, 0),
(4, 10, 0),
(5, 10, 0),
(6, 10, 5),
(7, 10, 0),
(8, 11, 1),
(9, 11, 0),
(10, 11, 3),
(11, 11, 0),
(12, 11, 5),
(13, 11, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `no_telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `keterangan`, `nama_depan`, `nama_belakang`, `no_telepon`) VALUES
(1, 'admin@gmail.com', '123', 'Admin', 'Admin', '1', '9082-1231-4523');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_pengiriman`
--

CREATE TABLE `jasa_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jasa_pengiriman`
--

INSERT INTO `jasa_pengiriman` (`id_pengiriman`, `nama_jasa`) VALUES
(1, 'SICEPAT'),
(2, 'JNE'),
(3, 'Anteraja'),
(4, 'Grab'),
(5, 'J&T'),
(6, 'Gojek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsi_pembayaran`
--

CREATE TABLE `opsi_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `opsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `opsi_pembayaran`
--

INSERT INTO `opsi_pembayaran` (`id_pembayaran`, `opsi`) VALUES
(1, 'BCA'),
(2, 'BRI'),
(3, 'Mandiri'),
(4, 'BNI'),
(5, 'Bank Indonesia'),
(6, 'Panin Bank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `harga_produk` double NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_produk`, `harga_produk`, `deskripsi_produk`, `gambar`) VALUES
(10, 'Parfum Mawar ', 15, 15000, '', '627027ad0b64b.png'),
(11, 'Teh Mawar', 15, 8000, '', '6270895962cb7.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses_pembayaran`
--
ALTER TABLE `akses_pembayaran`
  ADD PRIMARY KEY (`id_akses_pembayaran`),
  ADD KEY `id_produk_fk` (`id_produk`),
  ADD KEY `id_pembayaran_fk` (`id_pembayaran`);

--
-- Indeks untuk tabel `akses_pengiriman`
--
ALTER TABLE `akses_pengiriman`
  ADD PRIMARY KEY (`id_akses_pengiriman`),
  ADD KEY `id_produk_fk_fk` (`id_produk`),
  ADD KEY `id_pengiriman_fk` (`id_pengiriman`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `jasa_pengiriman`
--
ALTER TABLE `jasa_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `opsi_pembayaran`
--
ALTER TABLE `opsi_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses_pembayaran`
--
ALTER TABLE `akses_pembayaran`
  MODIFY `id_akses_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `akses_pengiriman`
--
ALTER TABLE `akses_pengiriman`
  MODIFY `id_akses_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jasa_pengiriman`
--
ALTER TABLE `jasa_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `opsi_pembayaran`
--
ALTER TABLE `opsi_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akses_pembayaran`
--
ALTER TABLE `akses_pembayaran`
  ADD CONSTRAINT `id_produk_fk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `akses_pengiriman`
--
ALTER TABLE `akses_pengiriman`
  ADD CONSTRAINT `id_produk_fk_fk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




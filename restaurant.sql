-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2020 pada 16.28
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idKategori`, `nama`) VALUES
(1, 'BURGERS'),
(2, 'PASTA'),
(3, 'PIZZA'),
(4, 'SUSHI'),
(5, 'DESSERTS'),
(6, 'DRINKS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` double NOT NULL,
  `status` tinyint(4) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idMenu`, `nama`, `harga`, `status`, `kategori_id`) VALUES
(1, 'Beef Burger', 45000, 0, 1),
(2, 'Broccoli Burger', 25000, 0, 1),
(3, 'Chicken Burger', 30000, 0, 1),
(4, 'Creste di Galli', 38000, 0, 2),
(5, 'Funghetto', 55000, 0, 2),
(6, 'Farfalle', 46000, 0, 2),
(7, 'Spaghetti', 40000, 0, 2),
(8, 'Meet Lovers', 140000, 0, 3),
(9, 'Tuna Melt', 124000, 0, 3),
(10, 'Black Pepper Beef', 158000, 0, 3),
(11, 'American Favourite', 145000, 0, 3),
(12, 'Crunchy Lobster Roll', 55000, 0, 4),
(13, 'Salmon Cheese Roll', 92000, 0, 4),
(14, 'Spicy Maguro Roll', 58000, 0, 4),
(15, 'Aburi Salmon Roll', 90000, 0, 4),
(16, 'Mougs Dessert', 29000, 0, 5),
(17, 'Ice Cream Cotton Candy', 42000, 0, 5),
(18, 'Mougs Parfait', 35000, 0, 5),
(19, 'Afogatto Cotton Candy', 45000, 0, 5),
(20, 'Green Tea Late', 25000, 0, 6),
(23, 'Lemon Tea', 20000, 0, 6),
(24, 'Lemon Squash', 22000, 0, 6),
(25, 'Earl Grey Tea', 35000, 0, 6),
(26, 'Aqua', 10000, 0, 6),
(27, 'Seblak', 25000, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_pesanan`
--

DROP TABLE IF EXISTS `menu_pesanan`;
CREATE TABLE `menu_pesanan` (
  `pesanan_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `harga_jual` double NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `idPembayaran` int(11) NOT NULL,
  `metode_bayar` varchar(45) NOT NULL,
  `total` double NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `no_meja` int(3) DEFAULT NULL,
  `sub_total` double NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `idWaiters` int(11) DEFAULT NULL,
  `Status_Pembayaran` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `role` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `role`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'Febrina', 'AdmFeb', '202cb962ac59075b964b07152d234b70'),
(2, 'Admin', 'Levina', 'AdmLev', '202cb962ac59075b964b07152d234b70'),
(3, 'Admin', 'Tiaz', 'AdmTia', '202cb962ac59075b964b07152d234b70'),
(4, 'Dapur', 'Febrina Anastasha', 'Ubin', '202cb962ac59075b964b07152d234b70'),
(5, 'Kasir', 'Levina Anastasia', 'Lele', '202cb962ac59075b964b07152d234b70'),
(6, 'Waiters', 'Tiaz Rizqy', 'Manda', '2fc04d527399d7eb418d276092017f84'),
(8, 'Guest', 'Celine', 'celcel', '202cb962ac59075b964b07152d234b70'),
(9, 'Waiters', 'Binu', 'Binu', '202cb962ac59075b964b07152d234b70'),
(10, 'Dapur', 'cisasa', 'cisasa', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`),
  ADD KEY `fk_menu_kategori1_idx` (`kategori_id`);

--
-- Indeks untuk tabel `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  ADD PRIMARY KEY (`pesanan_id`,`menu_id`),
  ADD KEY `fk_pesanan_has_menu_menu1_idx` (`menu_id`),
  ADD KEY `fk_pesanan_has_menu_pesanan1_idx` (`pesanan_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`) USING BTREE,
  ADD KEY `fk_pembayaran_user1_idx` (`user_id`),
  ADD KEY `fk_pembayaran_menu_pesanan1_idx` (`pesanan_id`,`menu_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `Waiters_Pesananan` (`idWaiters`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`idKategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  ADD CONSTRAINT `fk_pesanan_has_menu_menu1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`idMenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_has_menu_pesanan1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`idPesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_menu_pesanan1` FOREIGN KEY (`pesanan_id`,`menu_id`) REFERENCES `menu_pesanan` (`pesanan_id`, `menu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembayaran_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `Waiters_Pesananan` FOREIGN KEY (`idWaiters`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

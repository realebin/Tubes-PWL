-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2020 pada 17.50
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
DROP DATABASE IF EXISTS `restaurant`;
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
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
  `kategori_idKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idMenu`, `nama`, `harga`, `status`, `kategori_idKategori`) VALUES
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
(19, 'Afogatto Cotton Candy', 45000, 0, 5);

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
  `created` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, 'Admin', 'Febrina', 'AdmFeb', 'd1ceb2f669055dbe7d154a6bf9097dbb'),
(2, 'Admin', 'Levina', 'AdmLev', '1db5098e86b851730a4ee2307471807c'),
(3, 'Admin', 'Tiaz', 'TiaFeb', 'bfe8c5d9db332f9d28491c5b1bf2c006');

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
  ADD KEY `fk_menu_kategori1_idx` (`kategori_idKategori`);

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
  ADD PRIMARY KEY (`idPesanan`);

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
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_kategori1` FOREIGN KEY (`kategori_idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
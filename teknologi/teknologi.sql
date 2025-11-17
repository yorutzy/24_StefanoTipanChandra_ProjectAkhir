-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 01:59 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknologi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` char(100) COLLATE utf8mb4_general_ci NOT NULL,
  `barang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_pesanan` int NOT NULL,
  `kode_diskon` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `username`, `email`, `alamat`, `barang`, `jumlah_pesanan`, `kode_diskon`, `tanggal_pemesanan`) VALUES
(7, 'stef123', 'tes@gmail.com', 'pakal', 'ipad', 12, 'josjisjss', '2025-11-15 06:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `web_teknologi`
--

CREATE TABLE `web_teknologi` (
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` char(100) COLLATE utf8mb4_general_ci NOT NULL,
  `umur` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_teknologi`
--

INSERT INTO `web_teknologi` (`nama`, `username`, `umur`, `email`, `password`) VALUES
('a', 'a', 13, 'halo', '$2y$10$c5ahUS6L/Ccqmc8Y3aoEGuqldAXaDJ5sFIS7PzzsBUlNGNmeg3RWq'),
('a', 'aa', 12, 'sd', '$2y$10$HaXlz27OEGsT.dowKaLsTeS/7ETRd5/b3lFAyNrTpk1xwYm2kKJ8O'),
('Alvin Ezer Hermawan', 'hi', 12, 'vader2110@gmail.com', '$2y$10$sqprBa0l2dRyagdBPiEJIONKMcgtpf.xa8A1pmQOgq85YihEtO6sO'),
('NGATINEM', 'hii', 12, 'vaaader2110@gmail.com', '$2y$10$.6Fn3ib3UiBCkblzKQAhe.dS20tjgbaKW1KUZevCxmrj4hKNVcrxC'),
('stefano', 'idkstef', 12, '2020070600@student.pppkpetra.sch.id', '$2y$10$aXY.PRoP6ojzNhv9wh1T8.5uy08VJ.NRMr.XFNEZ/.D/W0zZe5Aya'),
('tes', 'tess', 12, 'www.com', '$2y$10$KdLj7QqMnpd8YBPQb01gLedlNAZ/WH.Yemvk3.0J7.4hwVHQ/29nO'),
('stefano', 'tessss', 12, 'tipan', '$2y$10$H2v6uIvOR5M6n4HjuJfu6eiOvFrmANlziUmkvmlhjxg9YGXuXPad2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `web_teknologi`
--
ALTER TABLE `web_teknologi`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

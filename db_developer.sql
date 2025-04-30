-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2025 at 12:52 PM
-- Server version: 11.7.2-MariaDB
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_developer`
--

-- --------------------------------------------------------

--
-- Table structure for table `perumahan`
--

CREATE TABLE `perumahan` (
  `id` int(11) NOT NULL,
  `nama_perumahan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `perusahaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perumahan`
--

INSERT INTO `perumahan` (`id`, `nama_perumahan`, `lokasi`, `jumlah_unit`, `perusahaan_id`) VALUES
(6, 'Lingkar Sejahtera', 'Mataram', 300, 1),
(7, 'Lingkar Sejahtera', 'Mataram', 300, 3);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_perusahaan`, `alamat`, `telepon`) VALUES
(1, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(3, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(4, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(5, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(6, 'PT. Muara Dunia', 'Jl. Pejanggik', '08239482'),
(7, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(8, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(9, 'PT. Maju Mundur', 'Jl. Pejanggik', '08239482'),
(10, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(11, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(12, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(13, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(14, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(15, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(16, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482'),
(17, 'PT. Muara Alam', 'Jl. Pejanggik', '08239482');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

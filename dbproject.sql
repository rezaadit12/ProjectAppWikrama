-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 03:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` int(10) NOT NULL,
  `rombel` varchar(50) NOT NULL,
  `rayon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`id`, `nama`, `nis`, `rombel`, `rayon`) VALUES
(1, 'Muhamad Reza Aditya', 12209186, 'PPLG X-1', 'Cisarua 4'),
(2, 'Hendra Rusmana Putra', 12209041, 'TJKT X-1', 'Cibedug 3'),
(9, 'mamah', 1222222, 'pplg x-2', 'cisarua 3'),
(10, 'wir', 12, 'qw', 'er'),
(11, 'a', 0, 'a', 'a'),
(12, 'o', 8, 'i', 'i'),
(13, 'p', 7, 'p', 'p'),
(14, 'mamah', 2147483647, 'hjkghjkghjk', 'ghjkghjk');

-- --------------------------------------------------------

--
-- Table structure for table `datalaptop`
--

CREATE TABLE `datalaptop` (
  `id` int(11) NOT NULL,
  `brandLaptop` varchar(20) NOT NULL,
  `nomberLaptop` int(10) NOT NULL,
  `kondisi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datalaptop`
--

INSERT INTO `datalaptop` (`id`, `brandLaptop`, `nomberLaptop`, `kondisi`) VALUES
(51, 'lenovo', 4, 'baik'),
(52, 'lenovo', 1, 'baik'),
(53, 'Lenovo', 10, 'Rusak'),
(54, 'Lenovo', 9, 'Baik'),
(55, 'lenovo', 3, 'rusak'),
(56, 'lenovo', 2, 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `datapeminjam`
--

CREATE TABLE `datapeminjam` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` int(11) NOT NULL,
  `rombel` varchar(20) NOT NULL,
  `rayon` varchar(20) NOT NULL,
  `Alasan` varchar(200) NOT NULL,
  `noLaptop` int(10) NOT NULL,
  `brandLaptop` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datalaptop`
--
ALTER TABLE `datalaptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapeminjam`
--
ALTER TABLE `datapeminjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadiri`
--
ALTER TABLE `datadiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `datalaptop`
--
ALTER TABLE `datalaptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `datapeminjam`
--
ALTER TABLE `datapeminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

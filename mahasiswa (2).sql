-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 10:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `universitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`id`, `nama`, `nim`, `prodi`, `jenis_kelamin`, `universitas`) VALUES
(5, 'lili', 5, 'teknik industri', 'Perempuan', 'Lainnya'),
(7, 'popo', 12117349, 'teknik informatika', 'Laki-laki', 'ITERA'),
(8, 'sehun', 87, 'Teknik mesin', 'Laki-laki', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `infouser`
--

CREATE TABLE `infouser` (
  `browser` varchar(20) NOT NULL,
  `ip_addres` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infouser`
--

INSERT INTO `infouser` (`browser`, `ip_addres`) VALUES
('Mozilla/5.0 (Windows', ''),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1'),
('Mozilla/5.0 (Windows', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('annisa', 12345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

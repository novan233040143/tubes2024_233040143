-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2024 at 06:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040143`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `culinary`
--

CREATE TABLE `culinary` (
  `id` int NOT NULL,
  `gambar_culinary` varchar(255) NOT NULL,
  `judul_culinary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `culinary`
--

INSERT INTO `culinary` (`id`, `gambar_culinary`, `judul_culinary`) VALUES
(1, 'mie_kocok_persib.jpg', 'Mie Kocok Persib'),
(2, 'cuanki_serayu.jpeg', 'Bakso Cuanki Serayu'),
(3, 'cireng_cipaganti.jpg', 'Cireng Cipaganti'),
(4, 'kupat_tahu_gempol.jpg', 'Kupat Tahu Gempol');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int NOT NULL,
  `gambar_destination` varchar(255) NOT NULL,
  `judul_destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `gambar_destination`, `judul_destination`) VALUES
(1, 'floating_market.jpg', 'Floating Market Lembang'),
(2, 'jalan_braga.jpg', 'Braga Street'),
(3, 'kampung_cai_rancaupas.jpg', 'Kampung Cai Ranca Upas'),
(4, 'kawah_putih_ciwidey.jpg', 'Kawah Putih Ciwidey');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `gambar_event` varchar(255) NOT NULL,
  `tgl_event` varchar(50) NOT NULL,
  `jam_event` varchar(50) NOT NULL,
  `judul_event` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `gambar_event`, `tgl_event`, `jam_event`, `judul_event`) VALUES
(1, 'jobfair.jfif', '16/05/2024', '09.00', 'Maranatha Jobfair'),
(2, 'nyenidibraga.jpg', '04/05/2024', '07.30', 'Nyeni di Braga'),
(3, 'jejaksahabat.jpg', '30/03/2024', '10.00', 'Jejak Sahabat Youth Fest'),
(4, 'shoespainting.jpg', '25/05/2024', '10.00', 'House of Donatello: Shoes Painting'),
(23, 'WhatsApp Image 2023-02-20 at 21.49.54 (1).jpeg', '23233', '23233', '23233');

-- --------------------------------------------------------

--
-- Table structure for table `pw`
--

CREATE TABLE `pw` (
  `id` int NOT NULL,
  `katasandi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culinary`
--
ALTER TABLE `culinary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pw`
--
ALTER TABLE `pw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `culinary`
--
ALTER TABLE `culinary`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pw`
--
ALTER TABLE `pw`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

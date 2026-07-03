-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2026 at 12:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbundi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` varchar(8) NOT NULL,
  `katalaluanadmin` varchar(8) NOT NULL,
  `namaadmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `katalaluanadmin`, `namaadmin`) VALUES
('A001', '123', 'Hasnah');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `idcalon` varchar(8) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `idadmin` varchar(8) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jawatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambarCalon`
--

CREATE TABLE `gambarCalon` (
  `IDGambar` int(11) NOT NULL,
  `nokp` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengundi`
--

CREATE TABLE `pengundi` (
  `nokp` varchar(12) NOT NULL,
  `namapengundi` varchar(50) NOT NULL,
  `katalaluanpengundi` varchar(20) NOT NULL,
  `jantina` varchar(1) DEFAULT NULL,
  `kelas` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `undian`
--

CREATE TABLE `undian` (
  `idundian` int(8) NOT NULL,
  `nokpPengundi` varchar(12) NOT NULL,
  `idcalon` varchar(8) NOT NULL,
  `tarikh` date NOT NULL,
  `masa` time NOT NULL,
  `jawatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`idcalon`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Indexes for table `gambarCalon`
--
ALTER TABLE `gambarCalon`
  ADD PRIMARY KEY (`IDGambar`);

--
-- Indexes for table `pengundi`
--
ALTER TABLE `pengundi`
  ADD PRIMARY KEY (`nokp`);

--
-- Indexes for table `undian`
--
ALTER TABLE `undian`
  ADD PRIMARY KEY (`idundian`),
  ADD KEY `nokp` (`nokpPengundi`),
  ADD KEY `idcalon` (`idcalon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambarCalon`
--
ALTER TABLE `gambarCalon`
  MODIFY `IDGambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undian`
--
ALTER TABLE `undian`
  MODIFY `idundian` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Constraints for table `undian`
--
ALTER TABLE `undian`
  ADD CONSTRAINT `undian_ibfk_2` FOREIGN KEY (`idcalon`) REFERENCES `calon` (`idcalon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

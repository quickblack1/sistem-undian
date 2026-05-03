-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2026 at 02:46 PM
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
  `namacalon` varchar(50) NOT NULL,
  `idadmin` varchar(8) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jawatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`idcalon`, `nokp`, `namacalon`, `idadmin`, `gambar`, `jawatan`) VALUES
('A0001', '091216101035', 'MUHAMMAD IZZAT BIN ADZMAN', 'A001', 'gambarcalon/along.png', 'pengerusi'),
('A0002', '090401102019', 'MUHAMMAD HAZIQ SYABIL BIN HAMDAN', 'A001', 'gambarcalon/angah.png', 'pengerusi'),
('A0003', '090603070107', 'HUZAIFAH AHIIL BIN MUHAMMAD HIDHIR', 'A001', 'gambarcalon/bapa.png', 'setiausaha');

-- --------------------------------------------------------

--
-- Table structure for table `pengundi`
--

CREATE TABLE `pengundi` (
  `nokp` varchar(12) NOT NULL,
  `namapengundi` varchar(50) NOT NULL,
  `katalaluanpengundi` varchar(20) NOT NULL,
  `kelas` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengundi`
--

INSERT INTO `pengundi` (`nokp`, `namapengundi`, `katalaluanpengundi`, `kelas`) VALUES
('090911101905', 'DANIEL AQASHA BIN MOHD SARUL', '123', '5H'),
('1', '1', 'najmee@1987', '5D'),
('123456789012', 'Hasimah', '123', ''),
('760404085402', 'NOOR HIDAYAH', '123', ''),
('760404085403', 'Hasimah', '', ''),
('760404085404', 'husnul', '123', ''),
('870803295105', 'najmee', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `undian`
--

CREATE TABLE `undian` (
  `idundian` int(8) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `idcalon` varchar(8) NOT NULL,
  `tarikh` date NOT NULL,
  `masa` time NOT NULL,
  `jawatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `undian`
--

INSERT INTO `undian` (`idundian`, `nokp`, `idcalon`, `tarikh`, `masa`, `jawatan`) VALUES
(44, '870803295105', 'A0001', '2026-04-27', '00:39:15', 'pengerusi'),
(45, '870803295105', 'A0003', '2026-04-27', '00:55:21', 'setiausaha');

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
-- Indexes for table `pengundi`
--
ALTER TABLE `pengundi`
  ADD PRIMARY KEY (`nokp`);

--
-- Indexes for table `undian`
--
ALTER TABLE `undian`
  ADD PRIMARY KEY (`idundian`),
  ADD KEY `nokp` (`nokp`),
  ADD KEY `idcalon` (`idcalon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `undian`
--
ALTER TABLE `undian`
  MODIFY `idundian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  ADD CONSTRAINT `undian_ibfk_1` FOREIGN KEY (`nokp`) REFERENCES `pengundi` (`nokp`),
  ADD CONSTRAINT `undian_ibfk_2` FOREIGN KEY (`idcalon`) REFERENCES `calon` (`idcalon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2025 at 02:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `namacalon` varchar(50) NOT NULL,
  `idadmin` varchar(8) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`idcalon`, `namacalon`, `idadmin`, `gambar`) VALUES
('A002', 'Hakim Hasim', 'A001', 'images/gambar3.jpeg'),
('A1235', 'Haura', 'A001', 'images/gambar1.jpeg'),
('C001', 'Aina', 'A001', 'images/gambar1.jpeg'),
('I0001', 'HASNAN', 'A001', 'images/gambar3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pengundi`
--

CREATE TABLE `pengundi` (
  `nokp` varchar(12) NOT NULL,
  `namapengundi` varchar(50) NOT NULL,
  `katalaluanpengundi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengundi`
--

INSERT INTO `pengundi` (`nokp`, `namapengundi`, `katalaluanpengundi`) VALUES
('123456789012', 'Hasimah', '123'),
('760404085402', 'NOOR HIDAYAH', '123'),
('760404085403', 'Hasimah', ''),
('760404085404', 'husnul', '123');

-- --------------------------------------------------------

--
-- Table structure for table `undian`
--

CREATE TABLE `undian` (
  `idundian` int(8) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `idcalon` varchar(8) NOT NULL,
  `tarikh` date NOT NULL,
  `masa` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `undian`
--

INSERT INTO `undian` (`idundian`, `nokp`, `idcalon`, `tarikh`, `masa`) VALUES
(22, '760404085402', 'A002', '2025-09-08', '21:11:00'),
(23, '760404085402', 'C001', '2025-09-08', '21:15:00'),
(24, '760404085402', 'C001', '2025-09-08', '21:20:00'),
(25, '760404085402', 'A002', '2025-09-09', '12:41:00'),
(26, '760404085402', 'C001', '2025-09-09', '12:41:00'),
(27, '760404085402', 'C001', '2025-09-09', '12:41:00'),
(28, '760404085402', 'C001', '2025-09-10', '11:16:00'),
(29, '123456789012', 'C001', '2025-09-10', '10:27:00'),
(30, '760404085402', 'A1235', '2025-09-10', '11:35:00'),
(32, '760404085402', 'A002', '2025-09-10', '21:37:00'),
(33, '760404085402', 'A1235', '2025-09-11', '07:49:00'),
(34, '760404085402', 'C001', '2025-09-11', '07:50:00');

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
  MODIFY `idundian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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

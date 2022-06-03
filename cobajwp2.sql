-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 08:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobajwp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `lingkaran`
--

CREATE TABLE `lingkaran` (
  `id_lingkaran` int(11) NOT NULL,
  `jari` int(11) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lingkaran`
--

INSERT INTO `lingkaran` (`id_lingkaran`, `jari`, `hasil`) VALUES
(1, 10, 314),
(2, 7, 153.86);

-- --------------------------------------------------------

--
-- Table structure for table `persegi`
--

CREATE TABLE `persegi` (
  `id_persegi` int(11) NOT NULL,
  `sisi` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persegi`
--

INSERT INTO `persegi` (`id_persegi`, `sisi`, `hasil`) VALUES
(1, 3, 9),
(2, 2, 4),
(3, 7, 49),
(4, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `segitiga`
--

CREATE TABLE `segitiga` (
  `id_segitiga` int(11) NOT NULL,
  `alas` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `segitiga`
--

INSERT INTO `segitiga` (`id_segitiga`, `alas`, `tinggi`, `hasil`) VALUES
(1, 2, 6, 6),
(2, 4, 2, 4),
(3, 6, 1, 3),
(4, 6, 7, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lingkaran`
--
ALTER TABLE `lingkaran`
  ADD PRIMARY KEY (`id_lingkaran`);

--
-- Indexes for table `persegi`
--
ALTER TABLE `persegi`
  ADD PRIMARY KEY (`id_persegi`);

--
-- Indexes for table `segitiga`
--
ALTER TABLE `segitiga`
  ADD PRIMARY KEY (`id_segitiga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lingkaran`
--
ALTER TABLE `lingkaran`
  MODIFY `id_lingkaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persegi`
--
ALTER TABLE `persegi`
  MODIFY `id_persegi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `segitiga`
--
ALTER TABLE `segitiga`
  MODIFY `id_segitiga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

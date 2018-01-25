-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 05:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `ID_CRITERIA` int(11) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `RANK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`ID_CRITERIA`, `DESCRIPTION`, `RANK`) VALUES
(1, 'Jumlah Bug Ditemukan', 1),
(2, 'Lama pengerjaan', 3),
(3, 'Pengalaman Kerja', 4),
(4, 'Training', 1),
(5, 'Jenjang Pendidikan', 6),
(6, 'Kesalahan Identifikasi Bug', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id_result` int(11) NOT NULL,
  `id_tester` int(11) NOT NULL,
  `jumlah_bug_ditemukan` int(11) NOT NULL,
  `lama_pengerjaan` int(11) NOT NULL,
  `pengalaman_kerja` int(11) NOT NULL,
  `training` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(5) NOT NULL,
  `kesalahan_identifikasi_bug` int(11) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id_result`, `id_tester`, `jumlah_bug_ditemukan`, `lama_pengerjaan`, `pengalaman_kerja`, `training`, `jenjang_pendidikan`, `kesalahan_identifikasi_bug`, `score`) VALUES
(2, 89, 10, 90, 0, 0, 'D4', 10, 0.381338),
(3, 90, 12, 94, 0, 0, 'D4', 8, 0.475568),
(4, 91, 11, 112, 0, 0, 'D3', 9, 0.467827);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `ID_CRITERIA` int(11) NOT NULL,
  `ID_TESTER` int(11) NOT NULL,
  `VALUE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`ID_CRITERIA`, `ID_TESTER`, `VALUE`) VALUES
(1, 89, '10'),
(1, 90, '12'),
(1, 91, '11'),
(2, 89, '90'),
(2, 90, '94'),
(2, 91, '112'),
(3, 89, '0'),
(3, 90, '0'),
(3, 91, '0'),
(4, 89, '0'),
(4, 90, '0'),
(4, 91, '0'),
(5, 89, 'D4'),
(5, 90, 'D4'),
(5, 91, 'D3'),
(6, 89, '10'),
(6, 90, '8'),
(6, 91, '9');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `ID_TESTER` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `REPORT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`ID_TESTER`, `NAME`, `REPORT`) VALUES
(89, 'Andrianto Nur Iskandar', ''),
(90, 'Pratama Rizky Kurniawan', ''),
(91, 'Inda Nabila Maulida', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`) VALUES
('admin', '125a82db8adbb90ddfe08218b39b3e57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`ID_CRITERIA`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id_result`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`ID_CRITERIA`,`ID_TESTER`),
  ADD KEY `FK_SCORE2` (`ID_TESTER`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`ID_TESTER`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `ID_CRITERIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `ID_TESTER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `FK_SCORE` FOREIGN KEY (`ID_CRITERIA`) REFERENCES `criteria` (`ID_CRITERIA`),
  ADD CONSTRAINT `FK_SCORE2` FOREIGN KEY (`ID_TESTER`) REFERENCES `tester` (`ID_TESTER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

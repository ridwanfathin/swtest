-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 08:02 AM
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
(4, 'Training', 5),
(5, 'Jenjang Pendidikan', 6),
(6, 'Kesalahan Identifikasi Bug', 2);

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
(1, 76, '14'),
(1, 77, '16'),
(1, 78, '16'),
(1, 79, '16'),
(2, 76, '34'),
(2, 77, '67'),
(2, 78, '67'),
(2, 79, '45'),
(3, 76, '2'),
(3, 77, '1'),
(3, 78, '1'),
(3, 79, '3'),
(4, 76, '1'),
(4, 77, '1'),
(4, 78, '1'),
(4, 79, '1'),
(5, 76, 'S1'),
(5, 77, 'D3'),
(5, 78, 'D3'),
(5, 79, 'D3'),
(6, 76, '6'),
(6, 77, '4'),
(6, 78, '4'),
(6, 79, '4');

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
(76, 'Redion Gray', ''),
(77, 'Muhammad Fathin', ''),
(78, 'Muhammad Erind', ''),
(79, 'Gray', '');

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
  ADD PRIMARY KEY (`ID_CRITERIA`),
  ADD UNIQUE KEY `RANK` (`RANK`);

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
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `ID_TESTER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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

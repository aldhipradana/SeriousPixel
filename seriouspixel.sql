-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 10:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seriouspixel`
--

-- --------------------------------------------------------

--
-- Table structure for table `spcategory`
--

CREATE TABLE `spcategory` (
  `IdCategory` int(11) NOT NULL,
  `NamaCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spgallery`
--

CREATE TABLE `spgallery` (
  `IdGallery` int(11) NOT NULL,
  `IdCategory` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spmail`
--

CREATE TABLE `spmail` (
  `IdMail` int(11) NOT NULL,
  `Pengirim` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sppackage`
--

CREATE TABLE `sppackage` (
  `IdPackage` int(11) NOT NULL,
  `NamaPackage` varchar(100) NOT NULL,
  `DescriptionPackage` text NOT NULL,
  `HargaPackage` double NOT NULL,
  `Level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spuser`
--

CREATE TABLE `spuser` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NoTelp` varchar(100) NOT NULL,
  `FotoUser` varchar(100) NOT NULL,
  `Access` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spuser`
--

INSERT INTO `spuser` (`IdUser`, `Username`, `Password`, `Nama`, `Email`, `NoTelp`, `FotoUser`, `Access`, `Status`) VALUES
(1, 'anthony', '65fbef05e01fac390cb3fa073fb3e8cf', 'Anthony Lee', 'anthonyleembahmo@gmail.com', '087760303967', 'Anthony.png', 'admin', 'aktif'),
(2, 'tolik', '9ae570cb560efa1597205e5145bc6408', 'Ari Wijaya', '', '', 'Tolik.png', 'admin', 'aktif'),
(3, 'dede', 'b4be1c568a6dc02dcaf2849852bdb13e', 'Tirta Mahayana', '', '', 'Dede.png', 'admin', 'aktif'),
(4, 'aksel', '83a459084439c9f5e68189182e85c17c', 'Aksel Pratama', '', '', 'Aksel.png', 'admin', 'aktif'),
(8, 'aldhi', 'ab55425ac87c3e18a8c0f071f1079fd2', 'Aldhi Pradana', '', '', 'Aldhi.png', 'admin', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `spviewcount`
--

CREATE TABLE `spviewcount` (
  `idViewCount` int(11) NOT NULL,
  `userIp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spviewcount`
--

INSERT INTO `spviewcount` (`idViewCount`, `userIp`) VALUES
(3, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spcategory`
--
ALTER TABLE `spcategory`
  ADD PRIMARY KEY (`IdCategory`);

--
-- Indexes for table `spgallery`
--
ALTER TABLE `spgallery`
  ADD PRIMARY KEY (`IdGallery`);

--
-- Indexes for table `spmail`
--
ALTER TABLE `spmail`
  ADD PRIMARY KEY (`IdMail`);

--
-- Indexes for table `sppackage`
--
ALTER TABLE `sppackage`
  ADD PRIMARY KEY (`IdPackage`);

--
-- Indexes for table `spuser`
--
ALTER TABLE `spuser`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indexes for table `spviewcount`
--
ALTER TABLE `spviewcount`
  ADD PRIMARY KEY (`idViewCount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spcategory`
--
ALTER TABLE `spcategory`
  MODIFY `IdCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spgallery`
--
ALTER TABLE `spgallery`
  MODIFY `IdGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spmail`
--
ALTER TABLE `spmail`
  MODIFY `IdMail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sppackage`
--
ALTER TABLE `sppackage`
  MODIFY `IdPackage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spuser`
--
ALTER TABLE `spuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spviewcount`
--
ALTER TABLE `spviewcount`
  MODIFY `idViewCount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

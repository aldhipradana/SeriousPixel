-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 05:06 PM
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spcategory`
--
ALTER TABLE `spcategory`
  MODIFY `IdCategory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spgallery`
--
ALTER TABLE `spgallery`
  MODIFY `IdGallery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spmail`
--
ALTER TABLE `spmail`
  MODIFY `IdMail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sppackage`
--
ALTER TABLE `sppackage`
  MODIFY `IdPackage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spuser`
--
ALTER TABLE `spuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

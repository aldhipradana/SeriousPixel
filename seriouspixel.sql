-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 08:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seriouspixel`
--

-- --------------------------------------------------------

--
-- Table structure for table `spcategory`
--

CREATE TABLE IF NOT EXISTS `spcategory` (
  `IdCategory` int(11) NOT NULL AUTO_INCREMENT,
  `NamaCategory` varchar(100) NOT NULL,
  PRIMARY KEY (`IdCategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `spcategory`
--

INSERT INTO `spcategory` (`IdCategory`, `NamaCategory`) VALUES
(1, 'Kampret');

-- --------------------------------------------------------

--
-- Table structure for table `spgallery`
--

CREATE TABLE IF NOT EXISTS `spgallery` (
  `IdGallery` int(11) NOT NULL AUTO_INCREMENT,
  `IdCategory` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdGallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `spgallery`
--

INSERT INTO `spgallery` (`IdGallery`, `IdCategory`, `Gambar`, `Title`, `Description`, `Date`) VALUES
(1, 0, 'C:xampphtdocsSeriousPixeladminassetsimagesgallery 736431_1.jpg', 'asd', '', '2019-06-16 06:03:29'),
(2, 0, 'C:xampphtdocsSeriousPixeladminassetsimagesgallery 4566234-0851010030-aluca.png', 'asd', '', '2019-06-16 06:05:02'),
(3, 0, '61d9cecb4921245cf999a6a2daca2f2d.jpg', 'asd', 'asd', '2019-06-16 09:07:03'),
(4, 0, 'euy.png', 'asd', 'asd', '2019-06-16 09:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `spmail`
--

CREATE TABLE IF NOT EXISTS `spmail` (
  `IdMail` int(11) NOT NULL AUTO_INCREMENT,
  `Pengirim` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`IdMail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sppackage`
--

CREATE TABLE IF NOT EXISTS `sppackage` (
  `IdPackage` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPackage` varchar(100) NOT NULL,
  `DescriptionPackage` text NOT NULL,
  `HargaPackage` double NOT NULL,
  `Level` varchar(100) NOT NULL,
  PRIMARY KEY (`IdPackage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `spuser`
--

CREATE TABLE IF NOT EXISTS `spuser` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NoTelp` varchar(100) NOT NULL,
  `FotoUser` varchar(100) NOT NULL,
  `Access` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `spuser`
--

INSERT INTO `spuser` (`IdUser`, `Username`, `Password`, `Nama`, `Email`, `NoTelp`, `FotoUser`, `Access`, `Status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Anthony', 'anthonyleembahmo@gmail.com', '087760303967', '', 'admin', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `spviewcount`
--

CREATE TABLE IF NOT EXISTS `spviewcount` (
  `idViewCount` int(11) NOT NULL AUTO_INCREMENT,
  `userIp` varchar(20) NOT NULL,
  PRIMARY KEY (`idViewCount`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `spviewcount`
--

INSERT INTO `spviewcount` (`idViewCount`, `userIp`) VALUES
(1, '192.168.1.1'),
(2, '::1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

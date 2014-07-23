-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2014 at 07:38 AM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penggajianguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
--

CREATE TABLE IF NOT EXISTS `dataguru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` enum('P','W') NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dataguru`
--

INSERT INTO `dataguru` (`id`, `nip`, `nama`, `jk`, `jabatan`, `alamat`, `no_telp`) VALUES
(4, '231', 'IIN', 'P', 'Wakasek', 'Sumbawa', '0893573899'),
(5, '111', 'Aisyah', 'P', 'Guru', 'Loteng', '0877655411'),
(6, '1010', 'Pusna', 'W', 'Guru', 'Mataram', '085937111'),
(7, '1010510062', 'Suaebatul islamiah', 'W', 'sekertaris', 'Mataram', '081909044609'),
(8, '099', 'suadah', 'W', 'guru', 'praya', '081907963422'),
(9, '876', 'Andi', 'P', 'Guru', 'mamben', '098632456472');

-- --------------------------------------------------------

--
-- Table structure for table `datakerja`
--

CREATE TABLE IF NOT EXISTS `datakerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jam_mengajar` varchar(10) NOT NULL,
  `gaji` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `datakerja`
--

INSERT INTO `datakerja` (`id`, `nip`, `status`, `jam_mengajar`, `gaji`) VALUES
(3, '231', 'tetap', '3', '1500000'),
(4, '1010', 'tidak tetap', '2', '200000'),
(5, '1010510062', 'tetap', '8', '900.000');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaangaji`
--

CREATE TABLE IF NOT EXISTS `penerimaangaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datakerja_id` int(11) NOT NULL,
  `dataguru_id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_penerimaangaji_datakerja1_idx` (`datakerja_id`),
  KEY `fk_penerimaangaji_dataguru1_idx` (`dataguru_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `penerimaangaji`
--

INSERT INTO `penerimaangaji` (`id`, `datakerja_id`, `dataguru_id`, `tgl`) VALUES
(6, 4, 6, '2014-07-13'),
(8, 3, 4, '2014-07-15'),
(9, 4, 4, '2014-07-22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penerimaangaji`
--
ALTER TABLE `penerimaangaji`
  ADD CONSTRAINT `fk_penerimaangaji_dataguru1` FOREIGN KEY (`dataguru_id`) REFERENCES `dataguru` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penerimaangaji_datakerja1` FOREIGN KEY (`datakerja_id`) REFERENCES `datakerja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

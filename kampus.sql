-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 10:41 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `latitude`, `longitude`) VALUES
(1, 'Yogyakarta', '111111', '222222'),
(2, 'Semarang', '333333', '444444'),
(3, 'Solo', '5555555', '6666666'),
(4, 'Magelang', '7777777', '8888888');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES
(3333, 'Muhamamad Alfasi', 'Pabuaran Indah'),
(39845, 'Muhammad Naufal', 'Pabuaran Indah');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `siswa_id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_nim` varchar(200) NOT NULL,
  `siswa_nama` varchar(200) NOT NULL,
  `siswa_alamat` text NOT NULL,
  PRIMARY KEY (`siswa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_nim`, `siswa_nama`, `siswa_alamat`) VALUES
(1, '1010001', 'Muhammad Alfasi Syadili', 'Perumahan Pabuaran Indah Blok D3 No 9 Cibinong Bogor Kota\r\n						\r\n						\r\n						\r\n					'),
(2, '1010002', 'Muhamamad Arbi Afif', 'Perumahan Pabuaran Indah Blok C3 No 12\r\n						\r\n					'),
(3, '1010003', 'Muhammad Naufal', 'Perumahan Bukit Rt 03 Rw 17	\r\n						\r\n					'),
(4, '1010004', 'Bimo Harisantyo', 'Bukit Pabuaran Indah Blok C2 No 15'),
(5, '1010005', 'Muhammad Fadhilah', 'Pabuaran Indah J 3 No 12'),
(7, '1010006', 'Romy Ardiansyah', 'Bukit Sentul Rt 04 Rw 15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makanan`
--

CREATE TABLE IF NOT EXISTS `tbl_makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`id`, `nama_makanan`, `harga`) VALUES
(1, 'Ayam Penyet', '12000'),
(2, 'Ikan Bakar', '13000'),
(3, 'Ayam Pedas Manis', '15000'),
(4, 'Nasi Cah Jamur', '25000'),
(5, 'Kakap Lada Hitam', '24000'),
(6, 'Steak Saus Hitam', '15000'),
(7, 'Nasi Kebuli', '25000'),
(8, 'Ayam Geprek Pedas', '18000'),
(9, 'Uni Maguro Temaki', '130000'),
(10, 'Baked Salmon Mayo Roll', '50000'),
(11, 'Nori Ten Salmon', '50000'),
(12, 'Beef Teriyaki Roll', '40000'),
(13, 'Crunchy Salmon Roll', '50000'),
(14, 'Salmon Teriyaki ROll', '60000'),
(15, 'Townhouse Roll', '80000'),
(16, 'Vegetarian Temaki', '160000'),
(17, 'Dragon Roll', '75000'),
(18, 'Rainbow Roll', '80000'),
(19, 'Spicy Maguro Roll', '55000'),
(20, 'Saba Mayonnaise', '80000'),
(21, 'Crunchy tuna', '45000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

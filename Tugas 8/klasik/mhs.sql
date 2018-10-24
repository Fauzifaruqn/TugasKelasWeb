-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 01:03 AM
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
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `npm` varchar(12) NOT NULL DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`npm`, `nama`, `alamat`, `jk`, `tgl_lhr`, `email`) VALUES
('140810160004', 'ahsan', 'Buah Batu Bandung', 'L', NULL, NULL),
('140810160006', 'Fajar', 'Ciseke Jatinangor', 'L', NULL, NULL),
('140810160054', 'Ibnu Ahsani Muhari', 'Kalisari, Pasar Rebo, Jakarta Timur', 'L', '2017-11-03', 'ibnu.muhari@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `level` char(1) DEFAULT NULL,
  `npm` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `npm`) VALUES
('admin', '829b36babd21be519fa5f9353daf5dbdb796993e', '3', '999'),
('ahsan1', '829b36babd21be519fa5f9353daf5dbdb796993e', '1', '140810160004'),
('fajar', '829b36babd21be519fa5f9353daf5dbdb796993e', '1', '140810160006'),
('ibnuahsani', '8cb2237d0679ca88db6464eac60da96345513964', '1', '140810160054'),
('rudi', '829b36babd21be519fa5f9353daf5dbdb796993e', '3', '888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

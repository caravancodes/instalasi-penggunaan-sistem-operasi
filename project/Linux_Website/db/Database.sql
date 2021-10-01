-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 10:37 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xeonranger`
--

-- --------------------------------------------------------

--
-- Table structure for table `harta`
--

CREATE TABLE `harta` (
  `id_harta` varchar(25) NOT NULL,
  `id_profil` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `jumlah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `foto_profil` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `password`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `gender`, `no_telp`, `foto_profil`) VALUES
('1111', '1111', 'Amir', 'probolinggo', 'Probolinggo', '30-05-1997', 'laki - laki', '081357108568', 'g1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harta`
--
ALTER TABLE `harta`
  ADD PRIMARY KEY (`id_harta`),
  ADD KEY `id_profil` (`id_profil`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harta`
--
ALTER TABLE `harta`
  ADD CONSTRAINT `harta_ibfk_1` FOREIGN KEY (`id_profil`) REFERENCES `profil` (`id_profil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

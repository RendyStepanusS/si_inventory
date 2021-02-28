-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 12:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `kode_gedung` varchar(6) NOT NULL,
  `nama_gedung` varchar(50) NOT NULL,
  `jml_ruangan` int(1) NOT NULL,
  `jml_lantai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`kode_gedung`, `nama_gedung`, `jml_ruangan`, `jml_lantai`) VALUES
('G01', 'PERPUSTAKAAN ', 5, 4),
('G02', 'LABORATORIUM', 7, 1),
('G03', 'KELAS', 2, 1),
('G04', 'KANTOR', 6, 1),
('G05', 'KANTOR BAWAH', 4, 1),
('G06', 'MESS DOSEN ATAS', 5, 1),
('G07', 'MESS DOSEN SINGLE', 8, 2),
('G08', 'RUMAH KETUA', 4, 2),
('G09', 'MESS', 3, 1),
('G10', 'MESS DOSEN', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(6) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `kode_gedung` varchar(6) NOT NULL,
  `lantai` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `nama_ruangan`, `kode_gedung`, `lantai`, `status`, `keterangan`) VALUES
('R01', 'Ruangan 1', 'G01', 1, 0, 'Rusak'),
('R02', 'Ruangan 2', 'G02', 4, 0, 'Khusus'),
('R03', 'Ruangan 3', 'G06', 1, 1, ''),
('R04', 'Ruangan 4', 'G04', 1, 0, 'Bocor'),
('R05', 'Ruangan 5', 'G04', 1, 0, 'Plafon Ambruk'),
('R06', 'Ruangan 6', 'G01', 1, 0, 'Rusakkk'),
('R07', 'Ruangan 7', 'G03', 3, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`kode_gedung`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`),
  ADD KEY `kode_gedung` (`kode_gedung`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `ruangan_ibfk_1` FOREIGN KEY (`kode_gedung`) REFERENCES `gedung` (`kode_gedung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

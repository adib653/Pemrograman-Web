-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 07:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbakademik`
--
create database dbakademik;

use dbakademik;
-- --------------------------------------------------------

--
-- Table structure for table `tabel khs`
--

CREATE TABLE `tabel khs` (
  `Periode` varchar(6) NOT NULL,
  `tgl` date NOT NULL,
  `NIM` int(11) NOT NULL,
  `kdmtk` varchar(10) NOT NULL,
  `nilai` varchar(2) NOT NULL,
  `bobot` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel mahasiswa`
--

CREATE TABLE `tabel mahasiswa` (
  `NIM` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel matakuliah`
--

CREATE TABLE `tabel matakuliah` (
  `kdmtk` varchar(10) NOT NULL,
  `namamtk` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel khs`
--
ALTER TABLE `tabel khs`
  ADD PRIMARY KEY (`tgl`);

--
-- Indexes for table `tabel mahasiswa`
--
ALTER TABLE `tabel mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tabel matakuliah`
--
ALTER TABLE `tabel matakuliah`
  ADD PRIMARY KEY (`kdmtk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

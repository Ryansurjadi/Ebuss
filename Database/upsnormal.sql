-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 04:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upsnormal`
--

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `ID_meja` varchar(5) NOT NULL,
  `Jumlah_kursi` int(3) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`ID_meja`, `Jumlah_kursi`, `Status`) VALUES
('1', 2, 'Available'),
('10', 2, 'Available'),
('2', 4, 'Available'),
('3', 6, 'Available'),
('4', 8, 'Available'),
('5', 2, 'Available'),
('6', 4, 'Available'),
('7', 6, 'Available'),
('8', 8, 'Available'),
('9', 2, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `ID_reservasi` varchar(5) NOT NULL,
  `ID_user` varchar(5) NOT NULL,
  `ID_meja` varchar(5) NOT NULL,
  `Tanggal_reservasi` date NOT NULL,
  `Jam_reservasi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int(5) NOT NULL,
  `Nama_user` varchar(20) NOT NULL,
  `Email_user` varchar(30) NOT NULL,
  `NoHp_user` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `Nama_user`, `Email_user`, `NoHp_user`, `Password`) VALUES
(19, 'Juni Handoko', 'junihandoko9@yahoo.com', '12121', '123'),
(20, 'ryan', 'ryan@gmail.com', '08999123123', '123'),
(21, 'Juni Handoko', 'junihandoko97@yahoo.com', '082184755697', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`ID_meja`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`ID_reservasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

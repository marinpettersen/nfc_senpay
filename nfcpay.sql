-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 04:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfcpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_card` varchar(20) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `id_user`, `id_card`, `nim`, `nama`, `alamat`, `telp`, `saldo`, `status`) VALUES
(3, 21, '2122515592', '2012321412', 'gins', 'Tengah BKT', '01241241241', 12000, 1),
(4, 0, '2121991304', '20112312412', 'gondrong', '', '0812414124145', 29000, 1),
(5, 0, '2121467016', '2012231231', 'dono', '', '08131313114', 2147466147, 1),
(6, 0, '2120942728', '2012124124', 'indro', '', '08125124112', 4000, 1),
(7, 0, '2120287368', '20121312412', 'kasino', '', '08124124125', 10000, 1),
(10, 77, '1231231', '123123', 'dfsdfsdf', 'sdgvsdgsd', '123123', 0, 0),
(12, 1, '87489834', '', 'jess', '', '', 0, 0),
(13, 0, '2200435514', '', 'limit', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_seller` varchar(10) NOT NULL,
  `noktp` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `id_user`, `kode_seller`, `noktp`, `nama`, `alamat`, `telp`, `saldo`) VALUES
(1, 11, 'pdgng1', 0, 'pedagang1', 'pondok kelapa', '12312312', 97375);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `trans_from` varchar(20) NOT NULL,
  `trans_to` varchar(20) NOT NULL,
  `trans_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1:top up 2:beli 3:withdraw',
  `nominal` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `trans_from`, `trans_to`, `trans_type`, `nominal`, `waktu`) VALUES
(4, '2122515592', 'pedagang1', 2, 10000, '2018-07-29 06:12:00'),
(5, '2122515592', 'pedagang1', 2, 10000, '2018-07-28 06:49:10'),
(6, '2122515592', 'pedagang1', 2, 10000, '2018-07-27 06:13:30'),
(7, '2120287368', 'pedagang1', 2, 10000, '2018-07-26 07:31:39'),
(8, '2122515592', 'pedagang1', 2, 5000, '2018-07-27 08:11:08'),
(9, '2122515592', 'pedagang1', 2, 10000, '2018-07-24 04:18:45'),
(10, '2122515592', 'pedagang1', 2, 1000, '2018-07-23 08:13:23'),
(11, '2122515592', 'pedagang1', 2, 17000, '2018-07-19 07:33:10'),
(12, 'ADMIN', 'pedagang1', 3, 10000, '2018-07-29 05:24:00'),
(13, '2121467016', 'pedagang1', 2, 20000, '2018-07-31 06:32:52'),
(14, '2121467016', 'pedagang1', 2, 2000, '2018-07-31 06:45:35'),
(15, '2122515592', 'pedagang1', 2, 5000, '2018-07-31 21:10:56'),
(16, '2120942728', 'pedagang1', 2, 1000, '2018-07-31 21:58:12'),
(17, '2120942728', 'pedagang1', 2, 20000, '2018-07-31 21:59:30'),
(18, 'ADMIN', 'pedagang1', 3, 10000, '0000-00-00 00:00:00'),
(19, 'ADMIN', 'pedagang1', 3, 10001, '2018-08-01 00:37:45'),
(20, 'ADMIN', 'pedagang1', 3, 1, '2018-08-01 00:38:18'),
(21, 'ADMIN', 'pedagang1', 3, 123, '2018-08-01 00:40:53'),
(22, 'ADMIN', '2121467016', 1, 2147483647, '2018-08-01 02:15:20'),
(23, 'ADMIN', '2122515592', 1, 10000, '2018-08-01 14:44:51'),
(24, '2120942728', 'pedagang1', 2, 5000, '2018-08-02 03:27:23'),
(25, '2121991304', 'pedagang1', 2, 1000, '2018-08-02 05:51:01'),
(26, '2121991304', 'pedagang1', 2, 10000, '2018-08-02 05:53:36'),
(27, 'ADMIN', '2122515592', 1, 10000, '2018-08-02 18:02:22'),
(28, '2122515592', 'pedagang1', 2, 5000, '2018-08-02 19:03:36'),
(29, '2122515592', 'pedagang1', 2, 10000, '2018-08-02 19:07:40'),
(30, '2120287368', 'pedagang1', 2, 10000, '2018-08-02 19:09:22'),
(31, '2121991304', 'pdgng1', 2, 10000, '2018-08-02 19:15:11'),
(32, '2121467016', 'pdgng1', 2, 17500, '2018-08-02 19:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin'),
(11, 'pedagang1', '193a84dda596ff8b0252a034ff56b43f', 'seller'),
(21, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(78, 'Gordon', 'poweranger', 'seller'),
(79, 'admin2', 'admin2', 'admin'),
(80, 'pedagang2', 'pedagang2', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

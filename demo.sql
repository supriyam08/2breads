-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 08:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_info`
--

CREATE TABLE `contact_form_info` (
  `con_id` int(100) NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form_info`
--

INSERT INTO `contact_form_info` (`con_id`, `time`, `name`, `username`, `email`, `phone`, `message`) VALUES
(1, '2019-10-20 18:02:21', 'supriyam', '', 'dada@fafa', 11231313, 'dada'),
(2, '2019-10-20 18:02:21', 'supriyam', '', 'dada@fafa', 11231313, 'dada'),
(3, '2019-10-20 18:02:21', 'supriyam', '', 'dada@fafa', 2147483647, 'dawdadawdadadadawdwaqdwa'),
(4, '2019-10-20 18:02:21', 'supriyam', '', 'dada@fafa', 2147483647, 'dawdadawdadadadawdwaqdwa'),
(5, '2019-10-20 18:02:21', 'hello', '', 'sfse2@VADSDVD', 23131233, 'VSDFDVSDVSDSC'),
(6, '2019-10-20 18:02:21', 'hello', '', 'sfse2@VADSDVD', 23131233, 'VSDFDVSDVSDSC'),
(7, '2019-10-20 18:02:21', 'supriyam', '', 'dada@fafa', 2147483647, 'ersgdasvdcxz'),
(8, '2019-10-20 23:37:36', 'supriyam', 'one@gmail.com', 'dada@fafa', 11231313, 'dawdawdwadwad'),
(9, '2019-10-20 23:39:01', 'supriyam', 'one@gmail.com', 'dada@fafa', 11231313, 'dawdawdwadwad'),
(10, '2019-10-21 16:34:55', 'Kidaa hal ne', 'one@gmail.com', 'chinkadawd@deadawd', 2147483647, 'ki hal ne baundadadw awdwad aed w da dw dwa daw dw ad wad aw dawdjbweajd e cawhfwehc hdcsdv'),
(11, '2019-10-31 04:45:52', 'dawdwdwa', 'one@gmail.com', 'one@gmail.com', 0, 'edafsdfwaedwaedaw');

-- --------------------------------------------------------

--
-- Table structure for table `demo_set`
--

CREATE TABLE `demo_set` (
  `id` text NOT NULL,
  `name` text NOT NULL,
  `rssi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo_set`
--

INSERT INTO `demo_set` (`id`, `name`, `rssi`) VALUES
('100', '1200', '312');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `confirm_password`, `created_at`) VALUES
(1, 'supriyam', '$2y$10$qxH3TpptKsXg487cNC198uQ59ob1JnOLdqrRQWz8DGedlF.1onTRO', '', '2019-10-17 20:08:56'),
(2, 'lan', '$2y$10$LOk7fxYeazoGs4G4hiV0m.7mEKgcfgS8v4hrvQumBqXU9lmeNFT.i', '', '2019-10-17 20:10:42'),
(3, 'dummy@gmail.com', '$2y$10$SIqcpMom/qp/g7iuij0qy.jmslmzl0hJ1XZDuk/Q.iidfv4A4mB7e', '', '2019-10-17 20:29:06'),
(4, '1@one.com', '$2y$10$HqTDzaAa29HooTTKFT9zjOl3G/AS1o/CZ43RYw1oPWwRGu2zXqqhy', '', '2019-10-17 20:57:00'),
(5, 'one@gmail.com', '$2y$10$QcWZyeAlKq0uDIzVoLu8.u8mBDuepwWmSoqdt0D2uN4fmWiHy6IT.', '', '2019-10-17 21:41:30'),
(6, 'oneone@gmail.com', '$2y$10$vGXtK.CFeHbntbPfXwAfzuZjhrtR8hXZk9tyiycVGhL/mBNsAnvK2', '', '2019-10-17 21:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form_info`
--
ALTER TABLE `contact_form_info`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form_info`
--
ALTER TABLE `contact_form_info`
  MODIFY `con_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

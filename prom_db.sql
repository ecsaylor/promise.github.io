-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 03:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'user1', 'user1@gmail.com', '$2y$10$28YZwEFh1xkqUecunGpffOcq8zLZXQzSgGxgp9SIMBT70U0Ecc1V.', '09012345678'),
(2, 'user2', 'user2@gmail.com', '$2y$10$aec8bGPSLcLcns0k89XCjOKiV3BDnGzYMAWXTr51PoUPymRalnQz2', '08012345678'),
(3, 'user3', 'user3@gmail.com', '$2y$10$zRU28XHA6Fo8O2tMaASGiusFZkcsLhmnv9QXtN1b1hjuCX5yrcIdW', '07012345678'),
(4, 'user4', 'user4@gmail.com', '$2y$10$QzOV8gl9/PZTz4K26VLqOOK0MhrkcHRVF01Lzo03dCy2CLlMGBvv.', '07038613016'),
(5, 'user5', 'user5@gmail.com', '$2y$10$lyQ4Z.Jiw/FXMVCgKElJXOoeYjJgZqLqzsIUC6Z6sxOD2cN3nROI6', '07087471265'),
(6, 'user6', 'user6@gmail.com', '$2y$10$e9Xz1TDy4SH9XGnD5W1SQuI3OKUEc8pxSHWtrTJNR9IqPrdU5gqSm', '68798787767'),
(7, 'user7', 'user7@gmail.com', '$2y$10$c9wDWpK.lJb.APTEMXyAJ.p6E7/mBsSL25IMRdCgpCL5/V/SnYoQi', '8087672367'),
(8, 'user8', 'user8@gmail.com', '$2y$10$uDq/G3eBx6bsE8.Gk4vEm.sVvSivm9MMZADvmTJ.zvf05pbKPwlCq', '08090888989'),
(9, 'user9', 'user9@gmail.com', '$2y$10$6JyEUNg1q70LGe107gULFuqxykNYYRFXNwmPf7Mscn.OGhCD9ykjm', '97764536739'),
(10, 'user10', 'user10@gmail.com', '$2y$10$4D/wFQw3Bh0VFODpjJv0vudFzT0/IirnTghFOKFyaS4rOCj/.KFt.', '08088897755');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

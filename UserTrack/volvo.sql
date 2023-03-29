-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 03:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volvo`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `zone` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `zone`, `image`) VALUES
(3, 'AR zone', '../imgs/avt1.png'),
(4, 'VR zone', '../imgs/avt2.png');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `platform` text NOT NULL,
  `logintime` text NOT NULL,
  `logouttime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id`, `ip`, `platform`, `logintime`, `logouttime`) VALUES
(90, '61.76.198.206', 'using desktop', '2023-03-16 01:21:05pm', '2023-03-16 01:21:09pm'),
(91, '61.76.198.206', 'using desktop', '2023-03-16 01:21:56pm', '2023-03-16 01:22:00pm'),
(92, '61.76.198.206', 'using desktop', '2023-03-16 01:22:07pm', '2023-03-16 01:22:16pm'),
(93, '61.76.198.206', 'using desktop', '2023-03-16 02:12:31pm', '2023-03-16 02:12:32pm'),
(94, '61.76.198.206', 'using desktop', '2023-03-17 10:06:14am', '2023-03-17 10:06:39am'),
(95, '61.76.198.206', 'using desktop', '2023-03-17 10:16:39am', '2023-03-17 10:16:53am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

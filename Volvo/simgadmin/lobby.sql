-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 03:25 AM
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
-- Table structure for table `lobby`
--

CREATE TABLE `lobby` (
  `id` int(11) NOT NULL,
  `vr_img1` text NOT NULL,
  `vr_img2` text NOT NULL,
  `vr_img3` text NOT NULL,
  `vr_vid1` text NOT NULL,
  `mr_img1` text NOT NULL,
  `mr_img2` text NOT NULL,
  `mr_vid1` text NOT NULL,
  `ar_img1` text NOT NULL,
  `ar_img2` text NOT NULL,
  `ar_img3` text NOT NULL,
  `ar_vid1` text NOT NULL,
  `gon_img1` text NOT NULL,
  `gon_img2` text NOT NULL,
  `gon_vid1` text NOT NULL,
  `gon_vid2` text NOT NULL,
  `model1` text NOT NULL,
  `model2` text NOT NULL,
  `model3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lobby`
--

INSERT INTO `lobby` (`id`, `vr_img1`, `vr_img2`, `vr_img3`, `vr_vid1`, `mr_img1`, `mr_img2`, `mr_vid1`, `ar_img1`, `ar_img2`, `ar_img3`, `ar_vid1`, `gon_img1`, `gon_img2`, `gon_vid1`, `gon_vid2`, `model1`, `model2`, `model3`) VALUES
(9, '032907335656_larg.jpg', '032907335656_larg.jpg', '032907335656_larg.jpg', 'https://www.youtube.com/watch?v=jhEfT9YjLcU', '032907335656_larg.jpg', '032907335656_larg.jpg', 'https://www.youtube.com', '032907335656_larg.jpg', '032907335656_larg.jpg', '032907335656_larg.jpg', 'https://www.youtube.com', '033002383333_mobile.png', '032907335656_larg.jpg', 'https://www.youtube.com', 'https://www.youtube.com', '033003201616_Volvo XR Zone.3DS', '033003201616_Volvo XR Zone.3DS', '033003201616_Volvo XR Zone.3DS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lobby`
--
ALTER TABLE `lobby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lobby`
--
ALTER TABLE `lobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

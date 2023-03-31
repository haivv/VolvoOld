-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 10:58 AM
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
(21, '[SDV] APPLICANT INFORMATION.pdf', 'aa.txt'),
(22, '', ''),
(23, 'KakaoTalk_20230315_171124503_01.png', 'mobile.png'),
(24, '', ''),
(25, '', ''),
(26, 'mobile.png', ''),
(27, 'mobile.png', 'usertrack.png'),
(28, '', 'desktop.png'),
(29, '', 'mobile.png'),
(30, '', 'pro2_img01.jpg');

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
(9, '032907335656_larg.jpg', '033104014242_mobile.png', '033104014242_pro2_img01.jpg', 'https://www.youtube.com/watch?v=jhEfT9YjLcU', '032907335656_larg.jpg', '032907335656_larg.jpg', 'gggg', '032907335656_larg.jpg', '032907335656_larg.jpg', '032907335656_larg.jpg', 'https://www.youtube.com/', '033002383333_mobile.png', '032907335656_larg.jpg', 'https://www.youtube.com', 'https://www.youtube.com', '032907335656_larg.jpg', '033002380909_desktop.png', '032909360303_pro2_img01.jpg');

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
-- Indexes for table `lobby`
--
ALTER TABLE `lobby`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lobby`
--
ALTER TABLE `lobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

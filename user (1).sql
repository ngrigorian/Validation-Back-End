-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2023 at 05:19 PM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Register`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fName`, `lName`, `email`, `avatar`, `password`, `role`) VALUES
(1, 'Narek', 'Grigoryan', 'narekgrigoran2169@gmail.com', 'uploads/casino.jpg', 'n', 0),
(2, 'Narek', 'Grigoryan', 'narekgrigoran2169@gmail.com', 'uploads/casino.jpg', 'n', 0),
(3, 'Alen', 'Simonyan', 'alensimonyan@inbox.com', 'uploads/iphone.png', 'nar', 0),
(4, 'Alen', 'Simonyan', 'alensimonyan@inbox.com', 'uploads/iphone.png', 'nar', 0),
(5, 'Narek', 'Simonyan', 'alensimonyan@inbox.com', 'uploads/church.jpg', 'l', 0),
(6, 'Narek', 'Simonyan', 'alensimonyan@inbox.com', 'uploads/arrow-right.png', 'n', 0),
(7, 'Petrosik', 'Petrosyan', 'alensimonyan@inbox.com', 'uploads/statue.jpg', 'haha', 0),
(8, 'John', 'Hamilton', 'narek.grigoryann@inbox.ru', 'uploads//no-img.jpg', 'lol', 0),
(9, 'John', 'Hamilton', 'narekk.grigoryann@inbox.ru', 'uploads/arrow-left.png', 'nn', 0),
(10, 'John', 'Hamilton', 'narekkk.grigoryann@inbox.ru', 'uploads//no-img.jpg', 'gg', 0),
(11, 'Grenik', 'Petrosyan', 'grenikpetr@gmail.com', 'uploads/no-img.jpg', 'loqsh', 0),
(12, 'Grenik', 'Petrosyan', 'grenbikpetr@gmail.com', 'uploads/iphone.png', 'abc', 0),
(13, 'Grenik', 'Petrosyan', 'grenbikpeetr@gmail.com', 'uploads/no-img.jpg', 'helloworld', 0),
(14, 'Grenik', 'Petrosyan', 'grenbikpegietr@gmail.com', 'uploads/no-img.jpg', '111', 0),
(15, 'Grenik', 'Petrosyan', 'grenbikpegifereetr@gmail.com', 'uploads/no-img.jpg', 'hhh', 0),
(16, 'Narek', 'Grenikyan', 'narekkk.grigoryanrn@inbox.ru', 'uploads/no-img.jpg', 'gg', 0),
(17, 'Narekh', 'Grenikyan', 'narekkk.eewgrigoryanrn@inbox.ru', 'uploads/no-img.jpg', 'ee', 0),
(18, 'Narekh', 'Grenikyan', 'narekkk.eewfefgrigoryanrn@inbox.ru', 'uploads/no-img.jpg', 'ww', 0),
(19, 'Paruyr', 'Sevak', 'paruyrseval@gmail.com', 'uploads/no-img.jpg', 'www', 0),
(20, 'bjsdhjsad', '4rrew', 'alensimeeonyan@inbox.com', 'uploads/no-img.jpg', 'fff', 0),
(21, 'Benjamin', 'Mendy', 'narek.grigorddddyann@inbox.ru', 'uploads/no-img.jpg', 'www', 0),
(22, 'Narek', 'Grigoryan', 'narekgrigoran2169@gmail.com222', 'uploads/no-img.jpg', 'helloworld', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 02:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmsteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `addorder`
--

CREATE TABLE `addorder` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addorder`
--

INSERT INTO `addorder` (`id`, `name`, `email`, `address`, `phone`, `item`, `quantity`) VALUES
(1, 'Tashi Lama', 'tashimoktan@gmail.com', 'Boudha', 9847483647, 'Mo:mo', 5),
(3, 'Tsering Lama', 'tseringlama@gmail.com', 'Bhaktapur', 9813224655, 'Newari Snack', 2),
(4, 'Tashi Lama', 'tashilama@gmail.com', 'Lalitpur', 9865432165, 'Thakali', 3);

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `imageName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`id`, `title`, `price`, `imageName`) VALUES
(1, 'Daal Bhaat', 130, 'daalbhaat.jpg'),
(2, 'Maasu Chiura', 130, 'maasuchiura.jpg'),
(3, 'Mo:Mo', 100, 'momo.jpg'),
(4, 'Newari Khana', 130, 'newarikhana.jpg'),
(5, 'Newari Snack', 100, 'newarisnack.jpg'),
(6, 'Phapar ko dhido', 130, 'phapar.jpg'),
(7, 'Potato Salad', 130, 'potatosalad.jpg'),
(8, 'Samaybaji', 130, 'samaybaji.jpg'),
(9, 'Thakali', 150, 'thakali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teamkhajaset`
--

CREATE TABLE `teamkhajaset` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamkhajaset`
--

INSERT INTO `teamkhajaset` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Tashi Lama', 'tashimoktan@gmail.com', 'shakti'),
(2, 'Tsering Lama', 'tseringlama@gmail.com', 'lama'),
(3, 'Tashi Lama', 'tashilama@gmail.com', 'tashilama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addorder`
--
ALTER TABLE `addorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `imagePath` (`imageName`);

--
-- Indexes for table `teamkhajaset`
--
ALTER TABLE `teamkhajaset`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addorder`
--
ALTER TABLE `addorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teamkhajaset`
--
ALTER TABLE `teamkhajaset`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

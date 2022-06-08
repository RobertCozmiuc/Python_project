-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2021 at 06:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodfoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--
-- Error reading structure for table goodfoods.image: #1932 - Table 'goodfoods.image' doesn't exist in engine
-- Error reading data for table goodfoods.image: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `goodfoods`.`image`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `instruction` text NOT NULL,
  `tip` varchar(20) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `idUser`, `name`, `instruction`, `tip`, `likes`) VALUES
(6, 1, 'Cotlet de porc', 'Introduceti cotletul in oala apoi il fierbeti la 100 de grade timp de 10 minIntroduceti cotletul in oala apoi il fierbeti la 100 de grade timp de 10 min', '', 2),
(10, 1, 'Cotlet de porc cu vita', 'dasgafdgfag', 'Friptura', 25),
(13, 1, 'asd', 'asdadadsa', 'Paste', 1),
(14, 1, 'Robert', 'dasd', 'Paste', 1),
(15, 1, 'Cotlet de porc', 'asfdasf', 'fadfsa', 0),
(16, 1, 'Robert', 'fadsfag', 'gfa', 0),
(17, 2, 'Hamburgher', 'carne', 'Friptura', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table goodfoods.users: #1932 - Table 'goodfoods.users' doesn't exist in engine
-- Error reading data for table goodfoods.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `goodfoods`.`users`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `users_good`
--

CREATE TABLE `users_good` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_good`
--

INSERT INTO `users_good` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'roby', '12345'),
(3, 'dasjkdh', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `users_good`
--
ALTER TABLE `users_good`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_good`
--
ALTER TABLE `users_good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users_good` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

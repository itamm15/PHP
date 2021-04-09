-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 10:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklep_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ID` int(50) NOT NULL,
  `Nazwa_produktu` varchar(50) NOT NULL,
  `Cena` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `Nazwa_produktu`, `Cena`) VALUES
(1, 'Bojler', 1250),
(2, 'Grzejnik elektryczny', 650),
(3, 'Pompa ciepła', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `email` varchar(255) NOT NULL,
  `Nazwa_produktu` varchar(50) NOT NULL,
  `Cena` int(20) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `Nazwa_produktu`, `Cena`, `quantity`) VALUES
('marcin@gmail.com', 'Bojler', 1250, 1),
('marcin@gmail.com', 'Grzejnik elektryczny', 650, 22),
('marcin@gmail.com', 'Pompa ciepła', 5500, 10);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `email` varchar(100) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `post_code` varchar(6) NOT NULL,
  `voivodeship` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `home_number` varchar(10) NOT NULL,
  `phone_number` varchar(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`email`, `surname`, `post_code`, `voivodeship`, `city`, `street`, `home_number`, `phone_number`, `name`, `password`) VALUES
('marcin@gmail.com', '', '', '', '', '', '', '', 'Marcin', 'b68abc113e5a655769a1d1afc3614f5d'),
('mateo123@gmail.com', '', '', '', '', '', '', '', 'Mateusz', '3f7fd4cc61dfa2a726a56744782b3393'),
('mati@gmail.com', '', '', '', '', '', '', '', 'Mateusz', 'c63789871eff0492d64c050441a2dc35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `email` (`email`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usertable` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

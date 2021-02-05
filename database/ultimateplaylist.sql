-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2021 at 08:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultimateplaylist`
--

-- --------------------------------------------------------

--
-- Table structure for table `2010playlist`
--

CREATE TABLE `2010playlist` (
  `id` int(11) NOT NULL,
  `songtitle` varchar(120) NOT NULL,
  `artist` varchar(60) NOT NULL,
  `genre` varchar(60) NOT NULL,
  `submittedby` varchar(60) NOT NULL,
  `explanation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2010playlist`
--

INSERT INTO `2010playlist` (`id`, `songtitle`, `artist`, `genre`, `submittedby`, `explanation`) VALUES
(1, 'Teenage Dream', 'Katy Perry', 'pop', 'Anneliese', 'you\'re on aux and need a good throwback for you and your friends to sing poorly'),
(2, 'Baby', 'Justin Bieber', 'pop', 'Jayne', 'you want to sing your heart out and profess your love for Justin'),
(5, 'Beautiful Girls', 'Bruno Mars', 'pop', 'Lucy', 'you\\\'re in your feels');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2010playlist`
--
ALTER TABLE `2010playlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2010playlist`
--
ALTER TABLE `2010playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

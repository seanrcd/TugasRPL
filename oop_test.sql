-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 10:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(55) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created`, `updated`) VALUES
(1, 'qwe', '12313@gmeail.com', 0, 'anjey', '321313', '2021-11-07 05:30:16', '2021-11-07 06:30:16'),
(2, 'arya', 'eqweqe@gmail.com', 123232, '123ddaaada', 'anjay\r\n3123', '2021-11-06 21:45:17', '0000-00-00 00:00:00'),
(3, '123', '12133@gmail', 123, '13', '123', '2021-11-06 22:09:27', '0000-00-00 00:00:00'),
(6, 'arya', '123@gmail.com', 211212, 'der', 'red', '2021-11-06 22:53:14', '0000-00-00 00:00:00'),
(9, 'asdr', '1910817210004@mhs.ulm.ac.id', 312311, 'uytre', 'qwerty', '2021-11-06 23:19:21', '0000-00-00 00:00:00'),
(10, 'asdr', '1910817210004@mhs.ulm.ac.id', 312311, 'uytre', '', '2021-11-06 23:20:45', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

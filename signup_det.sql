-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 07:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup_det`
--

CREATE TABLE `signup_det` (
  `id` int(3) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_det`
--

INSERT INTO `signup_det` (`id`, `name`, `email`, `password`, `address`, `city`, `zip`, `gender`) VALUES
(10, 'Janhvi Dwivedi', 'janhvidwivedi834@gmail.com', '3b29ba53c507b00a745ca7e2cbfd6a', 'Lohegaon, Wagholi Road ,Pune', 'Pune, Maharashtra', 411047, 'Female'),
(11, 'poonam prasadsingh', 'p@gmail.com', '46bf36a7193438f81fccc9c4bcc834', 'Lohegaon, wagholi Road ,Pune', 'Pune, Maharashtra', 411047, 'Female'),
(12, 'manas rao', 'm@gmail.com', '1e2a796539042ca860c3091662aa43', '', 'Pune, Maharashtra', 411047, 'Male'),
(13, 'gaurav hirwani', 'g@gmail.com', 'g123', '', 'Pune, Maharashtra', 411047, 'Male'),
(15, 'sahil shaikh', 's@gmail.com', '7812e8b74f6837fba66f86fe86688a', 'Lohegaon, Wagholi Road ,Pune', 'Pune, Maharashtra', 411047, 'Male'),
(18, 'rutuja', 'r@gmail.com', '1dc90e80c77fe245a82ea7ed30d1f8', '', 'Pune, Maharashtra', 411047, ''),
(19, 'aniket', 'a@gmail.com', '80c9ef0fb86369cd25f90af27ef53a9e', 'Lohegaon, Wagholi Road ,Pune', 'Pune, Maharashtra', 411047, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_det`
--
ALTER TABLE `signup_det`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_det`
--
ALTER TABLE `signup_det`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

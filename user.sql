-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 06:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `study` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `fname`, `age`, `study`) VALUES
(1, 'Islam', 'hamdaoui', 24, 'web development'),
(2, 'mohamed', 'zaidi', 21, 'web development'),
(4, 'John', 'Doe', 22, 'Computer Science'),
(5, 'Jane', 'Smith', 21, 'Mathematics'),
(6, 'Emily', 'Johnson', 23, 'Physics'),
(7, 'Michael', 'Williams', 20, 'Engineering'),
(8, 'Sarah', 'Brown', 22, 'Biology'),
(9, 'David', 'Jones', 24, 'Chemistry'),
(10, 'Laura', 'Garcia', 21, 'History'),
(11, 'James', 'Martinez', 23, 'Economics'),
(12, 'Anna', 'Davis', 20, 'Psychology'),
(13, 'Robert', 'Lopez', 22, 'Sociology'),
(14, 'Linda', 'Gonzalez', 21, 'Philosophy'),
(15, 'Daniel', 'Wilson', 23, 'Art'),
(16, 'Barbara', 'Anderson', 24, 'Political Science'),
(17, 'Paul', 'Thomas', 22, 'Literature'),
(18, 'Jessica', 'Taylor', 21, 'Music'),
(21, 'Thomas', 'Martin', 24, 'Marketing');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

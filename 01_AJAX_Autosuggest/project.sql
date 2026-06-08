-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2026 at 04:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(11) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `mode` enum('Online','Onsite','Hybrid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `stud_name`, `email`, `contact`, `mode`) VALUES
(1, 'Rahul Patel', 'rahul@gmail.com', '9876543210', 'Online'),
(2, 'Priya Shah', 'priya@gmail.com', '9876543211', 'Onsite'),
(3, 'Amit Joshi', 'amit@gmail.com', '9876543212', 'Hybrid'),
(4, 'Neha Mehta', 'neha@gmail.com', '9876543213', 'Online'),
(5, 'Karan Shah', 'karan@gmail.com', '9876543214', 'Onsite'),
(6, 'Pooja Patel', 'pooja@gmail.com', '9876543215', 'Hybrid'),
(7, 'Vivek Joshi', 'vivek@gmail.com', '9876543216', 'Online'),
(8, 'Sneha Trivedi', 'sneha@gmail.com', '9876543217', 'Onsite'),
(9, 'Jay Patel', 'jay@gmail.com', '9876543218', 'Hybrid'),
(10, 'Riya Shah', 'riya@gmail.com', '9876543219', 'Online'),
(11, 'Dhruv Mehta', 'dhruv@gmail.com', '9876543220', 'Onsite'),
(12, 'Kajal Patel', 'kajal@gmail.com', '9876543221', 'Hybrid'),
(13, 'Yash Joshi', 'yash@gmail.com', '9876543222', 'Online'),
(14, 'Krupa Shah', 'krupa@gmail.com', '9876543223', 'Onsite'),
(15, 'Manav Patel', 'manav@gmail.com', '9876543224', 'Hybrid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

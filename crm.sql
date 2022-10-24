-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 06:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `dateofbirth` varchar(300) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `salary` varchar(300) NOT NULL,
  `Department` varchar(300) NOT NULL,
  `jobtitle` varchar(300) NOT NULL,
  `postalCode` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `country`, `phone`, `email`, `image`, `dateofbirth`, `gender`, `status`, `salary`, `Department`, `jobtitle`, `postalCode`, `date`) VALUES
(1, 'Admin', 'Cairo', 'Egypt', '01014803845', 'Admin@gmail.com', '../images/award_PNG81.png', '13-2-2001', 'female', 'Single', '20000', 'IT', 'developer', '1234', '2022-09-18 21:27:50'),
(56, 'shahenda', 'Giza', 'Egypt', '010', 'shahindahemdan132@gmail.com', '../images/body.jpeg', '2022-09-01', 'female', 'Single', '', 'SALES', 'sales', '000', '2022-09-22 02:29:46'),
(57, 'Nata', 'Giza', 'Egypt', '8857', 'superadministrator@app.com', '../images/default.jpg', '2022-09-12', 'male', 'Single', '', 'SALES', 'developer', '000', '2022-09-22 02:31:53'),
(58, 'shahenda', 'Giza', 'Egypt', '8857', 'shahyhkamel@gmail.com', '../images/girl.jpg', '2022-09-22', 'male', 'Single', '', 'HR', 'developer', '1111', '2022-09-22 06:06:01'),
(59, 'Donia Ahmed', 'Giza', 'Egypt', '010', 'shahyhkamel@gmail.com', '../images/200e3dc2efaefce6898922be909aad69d00b946dr1-736-736v2_hq.jpg', '2022-09-22', 'male', 'Single', '', 'HR', 'instructor', '000', '2022-09-22 06:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

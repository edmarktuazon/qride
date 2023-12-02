-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 01:29 AM
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
-- Database: `qride_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `driver_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activity` datetime NOT NULL,
  `mobile_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`driver_id`, `id`, `username`, `email`, `password`, `activity`, `mobile_number`) VALUES
(0, 1, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', '2023-09-10 04:51:49', ''),
(0, 2, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-09-10 04:56:55', ''),
(0, 3, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-09-10 05:00:00', '0970655881'),
(0, 4, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-09-10 05:02:21', '0970655881'),
(0, 5, 'Admin2', 'admin2@gmail.com', '0192023a7bbd73250516f069df18b500', '2023-09-10 05:05:43', '0970655881'),
(0, 6, 'Edmark', 'ed@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-09-10 05:12:46', '0970655881'),
(0, 7, 'Admin3', 'admin3@gmail.com', '7aedb661d1a42a1fb5c23b61269bf207', '2023-09-10 05:45:04', '12345'),
(0, 8, 'admin4', 'admin4@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', '2023-09-10 05:47:46', '0970755671'),
(0, 9, 'DevEd', 'deved@gmail.com', 'e77989ed21758e78331b20e477fc5582', '2023-09-20 04:22:45', '09589001123'),
(0, 19, 'admin5', 'james@gmail.com', 'e102ae3be0d98f830f8636cda5fdad8b', '2023-10-17 08:58:01', '09707655781');

-- --------------------------------------------------------

--
-- Table structure for table `archive_report`
--

CREATE TABLE `archive_report` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `driver_image_url` varchar(255) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `complainant_number` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive_report`
--

INSERT INTO `archive_report` (`id`, `driver_id`, `driver_image_url`, `driver_name`, `plate_number`, `reason`, `email_address`, `complainant_number`, `rating`, `activity`) VALUES
(0, 0, './assets/images/driver-image/rennel/driver-profile-image.jpg', 'Rennel C. Lugtu', 'CO-18376', 'test', '', '09707688781', 1, '2023-11-19 08:33:01'),
(0, 0, './assets/images/driver-image/edgar/driver-profile-image.jpg', 'Edgar F. Gueco', '167CAV', 'sample test', '', '09707688781', 4, '2023-11-19 09:32:24'),
(0, 0, './assets/images/driver-image/charlon/driver-profile-image.jpg', 'Charlon Layug', '436RRB', 'sample', 'edmark@edu.ph', '09707688781', 3, '2023-11-19 09:30:39'),
(0, 0, './assets/images/driver-image/alex/driver-profile-image.jpg', 'Alex P. Baja', '383RED', 'test', 'test@edu.ph', '09707688781', 5, '2023-11-19 09:30:14'),
(0, 0, './assets/images/driver-image/albert/driver-profile-image.jpg', 'Albert Macabali', '436RRB', 'test', '', '09707688781', 1, '2023-11-19 09:31:49'),
(0, 0, './assets/images/driver-image/albert/driver-profile-image.jpg', 'Albert Macabali', '436RRB', 'tewat', 'edmark@gmail.com', '2132113123', 1, '2023-11-19 17:27:22'),
(0, 0, './assets/images/driver-image/jm/driver-profile-image.jpg', 'John Michael T. Vital', '01-0321395', 'testingggg', 'email@gmail.com', '09707688781', 5, '2023-11-19 09:32:54'),
(0, 0, './assets/images/driver-image/albert/driver-profile-image.jpg', 'Albert Macabali', '436RRB', 'tewat', '', '', 1, '2023-11-19 17:28:11'),
(0, 0, './assets/images/driver-image/albert/driver-profile-image.jpg', 'Albert Macabali', '436RRB', '', '', '', 1, '2023-11-19 17:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `non_ua_reports`
--

CREATE TABLE `non_ua_reports` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `driver_image_url` varchar(255) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `complainant_number` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `driver_id` int(11) NOT NULL,
  `driver_image_url` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `complainant_number` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_ua_reports`
--
ALTER TABLE `non_ua_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `non_ua_reports`
--
ALTER TABLE `non_ua_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=758;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2024 at 07:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allpet`
--

CREATE TABLE `allpet` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `age` int(10) NOT NULL,
  `weight` int(20) NOT NULL,
  `rate` int(20) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `petname` varchar(200) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `useraddress` text NOT NULL,
  `userphone` int(11) NOT NULL,
  `userdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `petname`, `breed`, `age`, `weight`, `rate`, `description`, `name`, `phone`, `address`, `email`, `useraddress`, `userphone`, `userdescription`) VALUES
(1, 'loki', 'Labrador Retriever', 1, 19, 13000, 'dhghcfghcfgh', 'malu', 2561661, 'czzc', 'mal@gmail.com', 'gcfgcgfyh', 2147483647, 'rytdryftujy');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `experience` int(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `department`, `qualification`, `experience`, `time`, `date`, `image`, `fees`) VALUES
(17, 'abubucker', 'hair', 'MBBS', 12, '22:36', '2024-10-09', 'uploads/BTS JEON JUNGKOOK WALLPAPER.jpeg', 500);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `pet_type` enum('dog','cat','bird','other') NOT NULL,
  `pet_age` int(3) NOT NULL,
  `pet_weight` float NOT NULL,
  `pet_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `gender`, `password`, `phone`, `address`, `state`, `city`, `country`, `pincode`, `pet_name`, `pet_type`, `pet_age`, `pet_weight`, `pet_photo`, `created_at`) VALUES
(1, 'appu', 'appu@gmail.com', 'male', '$2y$10$DgjhOvx3L0GWT7VZhC1tEe7ZFVFGkxVaHiKENDC3YA1adYpgXRv2i', '1234567892', 'southkorea 2nd street', 'state3', '', 'country1', '680306', 'loki', 'dog', 4, 25, 'uploads/pet_photo_66ec608e85ce77.13084365.png', '2024-09-19 17:34:06'),
(7, 'appu', 'appu123@gmail.com', 'male', '$2y$10$vj6qjCdmNx7mLU5ND9T5jOFSDrmdrNrdRrrl93HZz.a62o2LktGaO', '09876543217', 'ollur', 'state1', 'city1', 'country1', '680306', 'loki', 'dog', 4, 25, 'uploads/pet_photo_66ec625f8d5366.72359556.png', '2024-09-19 17:41:51'),
(8, 'appu', 'appu12345@gmail.com', 'male', '$2y$10$yRSHIyY.I7V.QqUo.WwZAegQ41EPtuIJtksoSc7q57VW3uWFOKd0u', '09876543217', 'ollur', 'state1', 'city1', 'country1', '680306', 'loki', 'dog', 4, 25, 'uploads/pet_photo_66ec643279beb2.97082463.png', '2024-09-19 17:49:38'),
(9, 'SEETHALAKSHMI P S', 'seetha@gmail.com', 'male', 'seetha', '08590761089', 'pullarikkal (H), Konikkara P O, Thalavanikkara, Thalore', '', 'Kasaragod', '', '', 'loki', 'dog', 0, 20, NULL, '2024-09-23 18:07:36'),
(10, 'appu', 'appu12@gmail.com', 'male', 'appu12', '01234567898', 'fffffffffffdgsgsrg', '', 'Kasaragod', '', '', 'loki', 'dog', 0, 20, NULL, '2024-09-28 06:30:46'),
(11, 'Anu', 'anu@gmail.com', 'female', 'anu', '8596895689', 'pullarikkal (H), Konikkara P O, Thalavanikkara, Thalore', '', 'thrissur', '', '', 'loki', 'dog', 0, 23, NULL, '2024-09-29 16:15:26'),
(12, 'nifty', 'nifniftty@gmail.com', 'female', '12345678', '9995225223', 'mattakkal House', '', 'Kannur', '', '', 'julie', 'dog', 0, 50, NULL, '2024-09-30 04:35:16'),
(13, 'malu', 'malu@gmail.com', 'female', 'malu', '09876543217', 'dadf', '', 'thrissur', '', '', 'julie', 'dog', 0, 23, NULL, '2024-09-30 18:28:08'),
(14, 'malu', 'malu12@gmail.com', 'male', 'malu12', '2561661', 'czzc', '', 'thrissur', '', '', 'df', 'dog', 0, 23, NULL, '2024-10-04 05:58:00'),
(15, 'malu', 'malu123@gmail.com', '', '123', '2561661', 'czzc', '', 'thrissur', '', '', 'df', 'dog', 0, 23, NULL, '2024-10-04 05:58:54'),
(16, 'malu', 'mal@gmail.com', '', '123', '2561661', 'czzc', '', 'thrissur', '', '', 'df', 'dog', 0, 23, NULL, '2024-10-04 06:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `description`, `rate`) VALUES
(1, 'Grooming', 'uploads/6.png', 'dsvsdfvsdzf fsadfsdfsd fgsdf sdg fsd gfsd g', 0),
(2, 'groom', 'uploads/Background.p', 'dfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 0),
(3, 'Grooming', 'uploads/bts.jpeg', 'dfafsdfgc w4tdrt xst setde xdr tr xrt xrtgxregt', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `userpet`
--

CREATE TABLE `userpet` (
  `id` int(11) NOT NULL,
  `petname` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `rate` int(200) NOT NULL,
  `useremail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpet`
--

INSERT INTO `userpet` (`id`, `petname`, `age`, `weight`, `breed`, `description`, `image`, `rate`, `useremail`) VALUES
(67, 'loki', 1, 19, 'Labrador Retriever', 'dhghcfghcfgh', 'uploads/Black-Collar-Male-Golden-Retriever.jpg', 13000, 'mal@gmail.com'),
(68, 'loki', 2, 23, 'Beagle', 'good look', 'uploads/download (11).jpeg', 50000, 'mal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allpet`
--
ALTER TABLE `allpet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpet`
--
ALTER TABLE `userpet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allpet`
--
ALTER TABLE `allpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userpet`
--
ALTER TABLE `userpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

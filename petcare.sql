-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 03:17 PM
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
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `petname` varchar(200) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `userphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `petname`, `breed`, `name`, `email`, `userphone`) VALUES
(15, 'loki', 'Labrador Retriever', 'appu', 'appu12@gmail.com', '0123456789'),
(16, 'loki', 'Labrador Retriever', 'Anu', 'anu@gmail.com', '8596895689'),
(18, 'tessa', 'Labrador Retriever', 'Anu', 'anu@gmail.com', '8596895689');

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
(1, 'appu', 'appu@gmail.com', 'male', 'appu123', '1234567892', 'Pleasant  2nd street', 'state3', '', 'country1', '680306', 'loki', 'dog', 4, 25, 'uploads/pet_photo_66ec608e85ce77.13084365.png', '2024-09-19 17:34:06'),
(7, 'Kiran', 'kiran123@gmail.com', 'male', 'kkkk', '09876543217', 'ollur', 'state1', 'city1', 'country1', '680306', 'loki', 'dog', 4, 25, 'uploads/pet_photo_66ec625f8d5366.72359556.png', '2024-09-19 17:41:51'),
(9, 'john', 'john@gmail.com', 'male', 'john', '08590761089', 'pullarikkal (H), Konikkara P O, Thalavanikkara, Thalore', '', 'Kasaragod', '', '', 'loki', 'dog', 0, 20, NULL, '2024-09-23 18:07:36'),
(10, 'appu', 'appu12@gmail.com', 'male', 'appu12', '01234567898', 'Elm 2nd Street', '', 'Kasaragod', '', '', 'loki', 'dog', 0, 20, NULL, '2024-09-28 06:30:46'),
(11, 'Anu', 'anu@gmail.com', 'female', 'anu', '8596895689', 'pullarikkal (H), Konikkara P O, Thalavanikkara, Thalore', '', 'thrissur', '', '', 'loki', 'dog', 0, 23, NULL, '2024-09-29 16:15:26'),
(17, 'George', 'george@gmail.com', 'male', 'gei', '0987654321', 'House no:200,thrissur', '', 'Thrissur', '', '', 'Jacky', 'dog', 0, 15, NULL, '2024-11-09 16:57:03'),
(24, 'alen', 'alen@gmail.com', 'male', 'alen', '8590725305', 'House no:200,Mala', 'kerala', 'Thrissur', 'india', '', 'Julie', 'dog', 2, 19, 'uploads/lab2.jpg', '2024-11-10 09:41:51');

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
(1, 'Grooming', 'uploads/groom.jpg', 'Expert pet grooming services designed to keep your pet clean, comfortable, and looking their best.', 2000),
(2, 'Pet Boarding', 'uploads/board.jpg', 'Pet boarding services offer a range of amenities, including:\r\nBasic care, like food and shelter\r\n• Grooming services\r\n• Group playtimes\r\n• Training classes', 3000),
(3, 'Pet Vaccination', 'uploads/vacc.jpg', 'Protect your pet’s health with essential vaccinations that guard against common diseases and keep them safe year-round.', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `servicebook`
--

CREATE TABLE `servicebook` (
  `id` int(11) NOT NULL,
  `petname` varchar(200) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `userphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicebook`
--

INSERT INTO `servicebook` (`id`, `petname`, `breed`, `service`, `name`, `email`, `userphone`) VALUES
(4, 'Jacky', 'Labrador Retriever', 'Grooming', 'George', 'george@gmail.com', '0987654321');

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
(67, 'loki', 1, 19, 'Labrador Retriever', 'Friendly,loyal,and intelligent companions known for their playful nature and exceptional family-friendly demeanor.', 'uploads/lab.jpg', 13000, 'mal@gmail.com'),
(68, 'Ricky', 2, 23, 'Beagle', 'Curious,and loyal companions known for their playful nature and strong sense of smell,making them wonderful family pets.', 'uploads/beagle.jpg', 25000, 'mal@gmail.com'),
(69, 'Tessa', 1, 4, 'Persian Cat', 'Gentle personalities,and affectionate nature,making them the perfect cuddly companion.', 'uploads/persian.webp', 10000, 'mal@gmail.com'),
(70, 'Ruby', 1, 1, 'Companion parrot', 'A vibrant,intelligent,and affectionate friend who brings life and color into your home.', 'uploads/parrot.jpg', 10000, 'mal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
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
-- Indexes for table `servicebook`
--
ALTER TABLE `servicebook`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicebook`
--
ALTER TABLE `servicebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userpet`
--
ALTER TABLE `userpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

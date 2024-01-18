-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 06:29 AM
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
-- Database: `srsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_student`
--

CREATE TABLE `admin_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `teaching_area` varchar(50) NOT NULL,
  `class_teach` varchar(50) NOT NULL,
  `subject_teach` varchar(50) NOT NULL,
  `emergency` varchar(50) NOT NULL,
  `medical` varchar(50) NOT NULL,
  `special_needs` varchar(50) NOT NULL,
  `birth_certificate` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `transcript` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `fullname`, `age`, `gender`, `address`, `contact`, `email`, `teaching_area`, `class_teach`, `subject_teach`, `emergency`, `medical`, `special_needs`, `birth_certificate`, `passport`, `transcript`) VALUES
(2, 'Mark Bryan Labinay', '21', 'Male', 'San Vicente, Buguey, Cagayan', '0987565222', 'bryan@gmail.com', 'Laboratory', 'Any', 'Web Development', '09876527728', 'None', 'None', 'bdaycertif.webp', 'bryan.jpg', 'academic.webp');

-- --------------------------------------------------------

--
-- Table structure for table `registertbl`
--

CREATE TABLE `registertbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registertbl`
--

INSERT INTO `registertbl` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Roceldi Doniego', 'roceldi@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'Goldwin Doniego', 'goldwin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'Mark Bryan Labinay', 'bryan@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(4, 'Jamelle Raposas', 'jamelle@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `past_school` varchar(50) NOT NULL,
  `grades` varchar(50) NOT NULL,
  `achievement` varchar(50) NOT NULL,
  `emergency_contact` varchar(50) NOT NULL,
  `medical_info` varchar(50) NOT NULL,
  `special_need` varchar(50) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `contact_detail` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `birth_certificate` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `academic_trancript` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`id`, `fullname`, `birthdate`, `gender`, `address`, `contact_number`, `email`, `past_school`, `grades`, `achievement`, `emergency_contact`, `medical_info`, `special_need`, `parent_name`, `contact_detail`, `occupation`, `birth_certificate`, `passport`, `academic_trancript`) VALUES
(1, 'Roceldi Doniego', '2003-10-01', 'Male', 'Buguey, Cagayan', '09636383627', 'roceldi@gmail.com', 'CSU', '2nd Year College', 'None', '09876628368', 'None', 'None', 'Goldwin Doniego', '0973637736', 'None', 'bdaycertif.webp', 'roceldi.jpg', 'academic.webp'),
(2, 'Jamelle Raposas', '2002-07-30', 'Female', 'Toran, Aparri', '0987637522', 'jamelle@gmail.com', 'CSU', '2nd Year', 'Dean Lister', '0986357262', 'None', 'None', 'Marjorie Gumarang', '0973682638', 'Driver', 'bdaycertif.webp', 'roceldi.jpg', 'academic.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_student`
--
ALTER TABLE `admin_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registertbl`
--
ALTER TABLE `registertbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_student`
--
ALTER TABLE `admin_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registertbl`
--
ALTER TABLE `registertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

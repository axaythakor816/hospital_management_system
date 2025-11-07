-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 04:50 AM
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
-- Database: `karn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `file` varchar(200) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(25) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mnumber` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `file`, `admin_name`, `admin_pass`, `lname`, `dob`, `gender`, `address`, `mnumber`, `email`) VALUES
(1, '', 'Axay', '786197', 'Thakor', '07/05/2005', 'male', 'laxmipura, khedbrahma, sabarkantha, gujarat-383275', 8160203165, 'axaythakarda816@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(250) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `doctor` varchar(23) NOT NULL,
  `date` varchar(15) NOT NULL,
  `note` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `gender`, `number`, `email`, `address`, `doctor`, `date`, `note`) VALUES
(19, 'axay thakor', 'male', 2147483647, 'Axay@gmail.com', 'laxmipura', 'Dentist - Bella Smith', '19/03/2025', 'hii'),
(20, 'nikesh shukal', 'male', 2147483647, 'nikesh@gmail.com', 'jagmer', 'skin Specialist - Madel', '20/03/2025', 'thanks'),
(22, 'Axay Thakarda', 'male', 8160203165, 'axaythakarda816@gmail.com', 'Sabarkantha\r\n15', 'Cardiologist - John Smi', '2025/03/29 11:0', 'hhstts');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(250) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `head` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `depart`, `head`) VALUES
(1, 'skin specialist', 'axay');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(250) NOT NULL,
  `dfname` varchar(15) NOT NULL,
  `dlname` varchar(10) NOT NULL,
  `duname` varchar(20) NOT NULL,
  `dnumber` bigint(10) NOT NULL,
  `demail` varchar(20) NOT NULL,
  `dpassword` varchar(12) NOT NULL,
  `ddob` varchar(15) NOT NULL,
  `dgender` varchar(5) NOT NULL,
  `dedu` varchar(15) NOT NULL,
  `ddepart` varchar(20) NOT NULL,
  `daddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dfname`, `dlname`, `duname`, `dnumber`, `demail`, `dpassword`, `ddob`, `dgender`, `dedu`, `ddepart`, `daddress`) VALUES
(1, 'Bella ', 'Smith', 'BS@123', 1122336655, 'bella@gmail.com', '123456', '14/06/1993', 'Femal', 'mbbs', 'Dentist', 'sabarkantha'),
(2, 'savannah ', ' smith', 'SS@123', 1122334455, 'savannah@gmail.com', '123456', '27/12/1985', 'Femal', 'mbbs', 'Psychology', 'himmatnagar, sabarkantha,gujarat'),
(3, 'johnsonh', ' smith', 'js@123', 2147483647, 'johnsonh@gmail.com', '123456', '20/12/1990', 'Male', 'mbbs', 'Neurologist', 'delhi..'),
(4, 'john', ' smith', 'john@12', 2147483647, 'john@gmail.com', '123456', '18/03/1982', 'Male', 'mbbs', 'Cardiologist', 'uttarpradesh'),
(5, 'Ana ', 'Smith', 'As@123', 2147483647, 'ana@gmail.com', '123456', '18/03/1986', 'Femal', 'mbbs', 'Gynecologist', 'ahemdabad'),
(6, 'James ', 'William', 'james@123', 2147483647, 'james@gmail.com', '123456', '18/03/1989', 'Male', 'mbbs', 'Neurologist', 'gandhinagar'),
(7, 'Henry', 'JOnes', 'henry@123', 2147483647, 'henry@gmail.com', '123456', '18/03/1980', 'Male', 'mbbs', 'Orthopedist', 'maharastr'),
(8, 'madeleine ', 'smith', 'M@123', 2147483647, 'modeleine@gmail.com', '123456', '18/03/1988', 'Male', 'mbbs', 'skin Specialist', 'arvalli\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE `jobapply` (
  `id` int(250) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `jobrole` varchar(15) NOT NULL,
  `note` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`id`, `name`, `email`, `number`, `gender`, `jobrole`, `note`, `file`) VALUES
(27, 'Axay Thakarda', 'axaythakarda816@gmail.com', 8160203165, 'male', 'Account Executi', 'hhtts', 'GeM-RA-7658109-4127637.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(250) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `admit` varchar(20) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `amt` int(10) NOT NULL,
  `bstatus` varchar(10) NOT NULL,
  `ddate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `lname`, `admit`, `uname`, `number`, `email`, `password`, `dob`, `gender`, `status`, `doctor`, `address`, `amt`, `bstatus`, `ddate`) VALUES
(1, 'bharat', ' nai', '20/03/2025', 'bharat@123', 1122334455, 'bharat@123', 'jjshhdtt', '10/03/2000', 'male', 'Admit', 'Dentist - Bella Smith', 'laxmipura', 50, 'Paid', ''),
(3, 'Axay', 'thakarda', '12/03/2025', 'sjjyys', 2147483647, 'AXAYTHAKARDa816@GMAI', 'nsjsjj', '06/03/2025', 'male', 'Descharge', 'Neurologist - smith Johnsonh', 'hhststt', 200, 'Un Paid', ''),
(5, 'Axay', 'thakarda', '06/03/2025', 'bharat@123', 2147483647, 'AXAYTHAKARDa816@GMAI', 'shhstt', '10/03/2000', 'male', 'Descharge', 'Neurologist - smith Johnsonh', 'htttgg', 100, 'Paid', ''),
(6, 'kismatben', 'mali', '23/03/2025', 'jjshha', 9933215647, 'shssh@gmail.com', 'hhsyy', '26/03/2025', 'male', 'Admit', 'skin Specialist - Madeleine - Smith', 'hhstts', 400, 'Un Paid', ''),
(7, '', '', '', '', 0, '', '', '', '', '', '', 'jh', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `number`, `email`, `gender`, `password`) VALUES
(12, 'Axay dineshbhai', 2147483647, 'AXAYTHAKARDA816@GMAIL.COM', 'male', '$2y$10$T0REhqUy7IrgBHyT4sxjAuZjMxDA3iXb4ciz2OSgH6xzdiQcOC2a2');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(250) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sdepart` varchar(20) NOT NULL,
  `sdays` varchar(20) NOT NULL,
  `sfrom` varchar(20) NOT NULL,
  `sto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `sname`, `sdepart`, `sdays`, `sfrom`, `sto`) VALUES
(1, 'Henry Jones', 'Orthopedist', 'mon - sun', '8:00 AM', '8:00 PM'),
(2, 'Madeleine Smith', 'skin Specialist', 'Mon, Tue, Sat, Sun', '9:00 AM', '4:00 PM'),
(3, 'Savannah Smith', 'Psychology', 'Monday - Friday', '8:30 AM', '5:30 PM'),
(4, 'Smith Johnsonh', 'Neurologist', 'Monday, Friday, Satu', '9:40 AM', '4:40 PM'),
(5, 'Bella Smith', 'Dentist', 'Monday - Friday', '8:30 AM', '6:30 AM'),
(6, 'John Smith', 'Cardiologist', 'Monday, Friday, Satu', '8:50 AM', '8:50 PM'),
(7, 'Ana Smith', 'Gynecologist', 'Monday - Friday', '9:00 AM', '6:00 PM'),
(8, 'James Williames', 'Neurologist', 'Monday, Friday, Satu', '9:50 AM', '7:50 PM');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(250) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `edu` varchar(20) NOT NULL,
  `job` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `number`, `email`, `dob`, `gender`, `edu`, `job`, `address`) VALUES
(2, 'Ajj', 'Thakardass', 25555, 'vvv@gmail.com', '25/02/2025', 'male', 'm', 'cleaner', 'ggs'),
(3, 'Axay', 'Thakarda', 2147483647, 'hhshh@gmail.com', '07/03/2025', 'male', 'hhstts', 'Nurse', 'Sabarkantha\r\n15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

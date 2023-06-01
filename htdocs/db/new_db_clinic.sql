-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 02:47 PM
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
-- Database: `kaboom`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `activity_id` int(255) NOT NULL,
  `what` varchar(255) NOT NULL,
  `when` varchar(255) NOT NULL,
  `where` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`activity_id`, `what`, `when`, `where`, `description`) VALUES
(9, 'Free medical treatment', '2017-10-03', 'Bicol University Polangui Campus', 'Bring your birth certificates');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `date_sent` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `appointment` text NOT NULL,
  `app_date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `assigned_doctor` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cancel` varchar(300) NOT NULL,
  `doc_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date_sent`, `fullname`, `message`, `appointment`, `app_date`, `time`, `assigned_doctor`, `status`, `cancel`, `doc_id`) VALUES
(16, '2023/06/01 02:32:13 PM', 'Jane Doe', 'aaaaa', 'APPROVAL 1', '2023-06-01', '8:00 A.M. - 9:00 A.M.', 'Dr. DOCTOR A AAA', 'ACCEPTED', 'N/A', '11'),
(17, '2023/06/01 02:32:25 PM', 'Jane Doe', 'bbbbb', 'N/A', '2023-06-02', '8:00 A.M. - 9:00 A.M.', 'N/A', 'N/A', 'N/A', ''),
(18, '2023/06/01 02:32:59 PM', 'Jane Doe', 'ccccc', 'N/A', '2023-06-01', '4:00 P.M. - 5:00 P.M.', 'N/A', 'N/A', 'N/A', ''),
(19, '2023/06/01 02:41:50 PM', 'PATIENT B B', 'pb', 'N/A', '2023-06-30', '8:00 A.M. - 9:00 A.M.', 'N/A', 'N/A', 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(225) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `medicine_quantity` int(225) NOT NULL,
  `medicine_price` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_name`, `medicine_quantity`, `medicine_price`) VALUES
(20, 'tuseran', 234, 12),
(21, 'neozep', 45, 8);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `date_sold` varchar(300) NOT NULL,
  `medicine_name` varchar(300) NOT NULL,
  `medicine_quantity` varchar(300) NOT NULL,
  `medicine_price` int(255) NOT NULL,
  `consultation` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `description` text NOT NULL,
  `patient` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `date_sold`, `medicine_name`, `medicine_quantity`, `medicine_price`, `consultation`, `total`, `description`, `patient`) VALUES
(1, '02/05/2018 05:55:30 PM', 'N/A', 'N/A', 0, 1100, 1100, 'Tubercolosis', 'mark soria sanchez');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE `tbldoctor` (
  `id` int(255) NOT NULL,
  `img` text NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`id`, `img`, `fname`, `mname`, `lname`, `gender`, `contact`, `address`, `specialization`, `schedule`, `username`, `password`) VALUES
(10, '', 'john', 'm', 'doe', 'Male', 'pasig', '098079634546', 'OB', '1:00 P.M. - 2:00 P.M.', 'john', 'john'),
(11, '', 'DOCTOR', 'A', 'AAA', 'Male', '087968543', 'makati', 'Pediatrician', '8:00 A.M. - 9:00 A.M.', 'juan', 'juan'),
(12, '', 'DOCTOR', 'C', 'CCC', 'Male', '09456654332', 'asd', 'SURGERY', '4:00 P.M. - 5:00 P.M.', 'pc', 'pc');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `id` int(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`id`, `fullname`, `age`, `gender`, `address`, `contact`, `email`, `username`, `password`) VALUES
(1, 'Jane Doe', '23', 'male', 'asdfsd', '4534534', 'dfsdg', 'test', 'test'),
(9, 'Cedric A Lee', '25', 'Male', 'taguig', '0909878676', 'ced@yahoo.com', 'cedric', 'cedric'),
(10, 'PATIENT B B', '23', 'Male', 'MANILA', '09453345667', 'qwe@gmail.com', 'pb', 'pb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `activity_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2023 at 01:36 PM
-- Server version: 10.5.22-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mudrafinance_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_business_data`
--

CREATE TABLE `client_business_data` (
  `id` int(6) NOT NULL,
  `client_id` int(6) NOT NULL,
  `enterprise_name` varchar(50) NOT NULL,
  `business_address` varchar(200) NOT NULL,
  `establishment_date` date NOT NULL,
  `business_premises` varchar(50) NOT NULL,
  `type_of_business` varchar(50) NOT NULL,
  `turnover_year` varchar(10) NOT NULL,
  `turnover_month` varchar(10) NOT NULL,
  `gst_no` varchar(20) NOT NULL,
  `msme_certificate` varchar(40) NOT NULL,
  `gumasta_license` varchar(40) NOT NULL,
  `industry_segment` varchar(50) NOT NULL,
  `nature_of_business` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_business_data`
--

INSERT INTO `client_business_data` (`id`, `client_id`, `enterprise_name`, `business_address`, `establishment_date`, `business_premises`, `type_of_business`, `turnover_year`, `turnover_month`, `gst_no`, `msme_certificate`, `gumasta_license`, `industry_segment`, `nature_of_business`, `status`, `dateTime`) VALUES
(1, 1, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'Active', '2023-07-06 08:04:12'),
(2, 2, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'Active', '2023-07-06 08:08:43'),
(3, 3, 'fsdf', 'sadf', '2023-07-04', 'Owned', 'partnership', '3453245', '345', '3245345', '234', '345', 'rga', 'wtewqt', 'Active', '2023-07-06 08:13:23'),
(4, 4, 'unity enterprice', 'mulund 76', '0000-00-00', 'Rental', 'proprietor', '', '', '', '', '', '', '', 'Active', '2023-09-06 12:32:30'),
(5, 5, 'unity enterprice', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'Active', '2023-09-07 08:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE `client_data` (
  `id` int(6) NOT NULL,
  `nominee_id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `alt_mobile` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `map_location_link` varchar(200) NOT NULL,
  `aadhaar_no` varchar(25) NOT NULL,
  `pan_no` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `client_otp` varchar(10) NOT NULL,
  `nominee_otp` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updateTime` datetime NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`id`, `nominee_id`, `name`, `mobile`, `alt_mobile`, `email`, `address`, `map_location_link`, `aadhaar_no`, `pan_no`, `password`, `dob`, `photo`, `client_otp`, `nominee_otp`, `status`, `created_by`, `updateTime`, `dateTime`) VALUES
(1, 11, 'arul', '7895463210', '56489721', '', 'no', 'http://localhost/loan/admin/client-creation.php', '23234', 'saf345', '6e504a76c89b83234a597f5ae6730450', '', 'scale.jpg', 'Verified', 'Verified', 'Active', 1, '2023-07-06 08:04:12', '2023-07-06 08:04:12'),
(2, 12, 'arul', '9876543210', '56489721', '', 'no', 'http://localhost/loan/admin/client-creation.php', '53456', 'saf345', '6e504a76c89b83234a597f5ae6730450', '', 'scale.jpg', '936915', 'Verified', 'Active', 1, '2023-07-06 08:08:43', '2023-07-06 08:08:43'),
(3, 13, 'abdul', '789564320', '87654', '', 'df', '115842', '2534', '32523', '6d758ed54cd5f4395a56c843aa3c5d68', '', 'scale.jpg', 'Verified', 'Verified', 'Active', 1, '2023-07-06 08:13:23', '2023-07-06 08:13:23'),
(4, 14, 'SAGAR MALI', '7304600759', '', 'sagamali7304@gmail.com', 'MUMBAI 78', 'mulund 76', '773663450395', 'DXWPM5247K', 'e74aa3228f373e4da3f66d1e536910dc', '', 'Screenshot 2023-07-05 .png', '295479', '375011', 'OTP', 1, '2023-09-06 12:32:30', '2023-09-06 12:32:30'),
(5, 15, 'akash', '7304600759', '', 'sagamali7304@gmail.com', 'bhandup', 'mulund 76', '773663450398', 'DXPM5247K', 'cd2a9a8fdda69cecfebc42cc234f2c1b', '', 'Screenshot 2023-07-05 .png', '938183', '663652', 'OTP', 1, '2023-09-07 08:26:08', '2023-09-07 08:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `collection_data`
--

CREATE TABLE `collection_data` (
  `id` int(6) NOT NULL,
  `loan_id` int(6) NOT NULL,
  `emp_id` int(6) NOT NULL,
  `paid_amount` varchar(6) NOT NULL,
  `overdue` int(6) NOT NULL DEFAULT 0,
  `payment_date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collection_data`
--

INSERT INTO `collection_data` (`id`, `loan_id`, `emp_id`, `paid_amount`, `overdue`, `payment_date`, `status`, `dateTime`) VALUES
(1, 1, 2, '655', 0, '2023-07-17', 'Unpaid', '2023-07-06 08:04:12'),
(2, 2, 1, '655', 0, '2023-07-17', 'Unpaid', '2023-07-06 08:08:43'),
(3, 3, 1, '120000', 0, '2023-07-06', 'Paid', '2023-07-06 08:13:23'),
(4, 4, 4, '383', 0, '2023-09-06', 'Paid', '2023-09-06 12:32:30'),
(5, 5, 4, '605', 0, '2023-09-07', 'Paid', '2023-09-07 08:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `emp_data`
--

CREATE TABLE `emp_data` (
  `id` int(5) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_co` varchar(50) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_photo` varchar(100) NOT NULL,
  `emp_mobile` varchar(12) NOT NULL,
  `emp_alt_mobile` varchar(12) NOT NULL,
  `emp_address` varchar(150) NOT NULL,
  `emp_join_date` date NOT NULL,
  `emp_username` varchar(30) NOT NULL,
  `emp_password` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updatedTime` datetime NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_data`
--

INSERT INTO `emp_data` (`id`, `emp_name`, `emp_co`, `emp_dob`, `emp_photo`, `emp_mobile`, `emp_alt_mobile`, `emp_address`, `emp_join_date`, `emp_username`, `emp_password`, `status`, `created_by`, `updatedTime`, `dateTime`) VALUES
(1, 'arun pandiyan', 'no', '1998-02-06', 'scale.jpg', '7894561230', '9876543210', 'adress noth street poolangudi tyurchy 13 620025 - chennai india', '2023-06-29', 'arun', '222f67c335f91cccee12581a3fd142ab', 'Active', 1, '2023-07-06 08:16:13', '2023-06-30 09:20:19'),
(2, 'anand', 'no', '2023-07-03', 'scale.jpg', '7894561320', '987654321', 'assaf', '2023-07-05', 'anand', '222f67c335f91cccee12581a3fd142ab', 'Active', 1, '2023-07-06 08:00:02', '2023-07-06 08:00:02'),
(3, 'monika', 'no', '2023-07-03', 'scale.jpg', '9876543210', '987654321', 'assaf', '2023-07-05', 'monika', '222f67c335f91cccee12581a3fd142ab', 'Active', 1, '2023-07-06 08:01:45', '2023-07-06 08:01:45'),
(4, 'emp01', 'Admin', '2000-02-20', 'png-transparent-default-avatar-removebg-preview.png', '1111111111', '2222222222', 'Emp1', '2023-09-06', 'emp01', 'b116d4fb15372966a12f36505df5d047', 'Active', 1, '2023-09-06 11:55:37', '2023-09-06 11:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `loan_data`
--

CREATE TABLE `loan_data` (
  `id` int(6) NOT NULL,
  `client_id` int(6) NOT NULL,
  `emp_id` int(6) NOT NULL,
  `loan_type` int(2) NOT NULL,
  `loan_amount` varchar(10) NOT NULL,
  `loan_date` date NOT NULL,
  `document_charge_percentage` int(3) NOT NULL,
  `document_charge_amount` varchar(6) NOT NULL,
  `duration_days` varchar(5) NOT NULL,
  `interest_percentage` int(3) NOT NULL,
  `2nd_interest_percentage` int(6) NOT NULL,
  `2nd_interest_amount` varchar(10) NOT NULL,
  `interest_amount` varchar(15) NOT NULL,
  `per_day_charge` varchar(5) NOT NULL,
  `debit_amount` varchar(10) NOT NULL,
  `credit_amount` varchar(10) NOT NULL,
  `paid_amount` varchar(6) NOT NULL,
  `due_amount` varchar(6) NOT NULL,
  `next_due_date` date NOT NULL,
  `loan_end_date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updateTime` datetime NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_data`
--

INSERT INTO `loan_data` (`id`, `client_id`, `emp_id`, `loan_type`, `loan_amount`, `loan_date`, `document_charge_percentage`, `document_charge_amount`, `duration_days`, `interest_percentage`, `2nd_interest_percentage`, `2nd_interest_amount`, `interest_amount`, `per_day_charge`, `debit_amount`, `credit_amount`, `paid_amount`, `due_amount`, `next_due_date`, `loan_end_date`, `status`, `created_by`, `updateTime`, `dateTime`) VALUES
(1, 1, 2, 1, '100000', '2023-07-06', 2, '2000', '180', 3, 0, '', '100', '655', '99345', '118000', '655', '117345', '2023-07-07', '2024-01-02', 'Active', 1, '2023-07-06 08:04:12', '2023-07-06 08:04:12'),
(2, 2, 1, 2, '500000', '2023-07-06', 2, '2000', '5', 4, 5, '25000', '100', '655', '99345', '118000', '655', '117345', '2023-08-06', '2023-12-06', 'Active', 1, '2023-07-06 09:58:30', '2023-07-06 08:08:43'),
(3, 3, 3, 2, '500000', '2023-07-06', 2, '10000', '5', 4, 5, '25000', '20000', '12000', '380000', '600000', '120000', '480000', '2023-08-06', '2023-12-06', 'Active', 1, '2023-07-06 09:58:47', '2023-07-06 08:13:23'),
(4, 4, 4, 1, '50000', '2023-09-06', 2, '1000', '150', 3, 0, '', '50', '383', '49617', '57500', '383', '57117', '2023-09-07', '2024-02-03', 'Active', 1, '2023-09-06 12:32:30', '2023-09-06 12:32:30'),
(5, 5, 4, 1, '50000', '2023-09-07', 2, '750', '90', 3, 0, '', '50', '605', '49395', '54500', '605', '53895', '2023-09-08', '2023-12-06', 'Active', 1, '2023-09-07 08:26:08', '2023-09-07 08:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `loan_type_master`
--

CREATE TABLE `loan_type_master` (
  `id` int(2) NOT NULL,
  `loan_type` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_type_master`
--

INSERT INTO `loan_type_master` (`id`, `loan_type`, `status`) VALUES
(1, 'Unsecured Loan', 'Active'),
(2, 'Secured Loan', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `nominee_data`
--

CREATE TABLE `nominee_data` (
  `id` int(6) NOT NULL,
  `nominee_name` varchar(30) NOT NULL,
  `nominee_address` varchar(100) NOT NULL,
  `nominee_aadhaar` varchar(50) NOT NULL,
  `nominee_pan` varchar(20) NOT NULL,
  `nominee_mobile` varchar(15) NOT NULL,
  `nominee_mail` varchar(30) NOT NULL,
  `nominee_photo` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `updateTime` datetime NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nominee_data`
--

INSERT INTO `nominee_data` (`id`, `nominee_name`, `nominee_address`, `nominee_aadhaar`, `nominee_pan`, `nominee_mobile`, `nominee_mail`, `nominee_photo`, `status`, `updateTime`, `dateTime`) VALUES
(1, 'dsfas', 'asdgads', 'ad53425', '345345', '345634', '3asas@edg.ghk', 'Opera Snapshot_2023-06-25_095529_view-source.png', 'Active', '2023-06-30 12:18:42', '2023-06-30 12:18:42'),
(2, 'sfa', '', '', '', '234', '', 'scale.jpg', 'Active', '2023-07-03 12:54:58', '2023-07-03 12:54:58'),
(3, 'sf', '', '', '', 'adf', '', 'scale.jpg', 'Active', '2023-07-03 13:01:44', '2023-07-03 13:01:44'),
(4, 'ers', '', '', '', '345435', '', 'scale.jpg', 'Active', '2023-07-03 13:10:04', '2023-07-03 13:10:04'),
(5, 'sadfg', '', '', '', '345234', '', 'scale.jpg', 'Active', '2023-07-03 13:13:08', '2023-07-03 13:13:08'),
(6, 'grerg', '', '', '', '435345', '', 'scale.jpg', 'Active', '2023-07-03 13:16:55', '2023-07-03 13:16:55'),
(7, 'grerg', '', '', '', '435345', '', 'scale.jpg', 'Active', '2023-07-03 13:23:00', '2023-07-03 13:23:00'),
(8, 'etwet', '', '', '', '43545', '', 'scale.jpg', 'Active', '2023-07-03 13:24:03', '2023-07-03 13:24:03'),
(9, 'nominee name', 'nominee address', 'ashdfaklsh', '232k3l4kl', '345323', 'kfas@JHKF.FG', 'scale.jpg', 'Active', '2023-07-05 15:41:47', '2023-07-05 15:41:47'),
(10, 'sdf', '', '', '', '456', '', 'scale.jpg', 'Active', '2023-07-05 15:58:04', '2023-07-05 15:58:04'),
(11, 'sdf', 'sdf', 'ffffffffffffsa', '34534', '23234234', 'kfas@JHKF.FG', 'scale.jpg', 'Active', '2023-07-06 08:04:12', '2023-07-06 08:04:12'),
(12, 'sdf', 'sdf', 'ffffffffffffsa', '34534', '23234234', 'kfas@JHKF.FG', 'scale.jpg', 'Active', '2023-07-06 08:08:43', '2023-07-06 08:08:43'),
(13, 'asdg', 'arggraegr', '25324', '34w5325', '34532', 'kfas@JHKF.FG', 'scale.jpg', 'Active', '2023-07-06 08:13:23', '2023-07-06 08:13:23'),
(14, 'anand jaiswal', '', '', '', '7738846190', '', 'Screenshot 2023-07-05 .png', 'Active', '2023-09-06 12:32:30', '2023-09-06 12:32:30'),
(15, 'anand jaiswal', '', '', '', '8408814482', '', 'Screenshot 2023-07-05 .png', 'Active', '2023-09-07 08:26:08', '2023-09-07 08:26:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_business_data`
--
ALTER TABLE `client_business_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_data`
--
ALTER TABLE `client_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection_data`
--
ALTER TABLE `collection_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_data`
--
ALTER TABLE `emp_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_data`
--
ALTER TABLE `loan_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_type_master`
--
ALTER TABLE `loan_type_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominee_data`
--
ALTER TABLE `nominee_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_business_data`
--
ALTER TABLE `client_business_data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_data`
--
ALTER TABLE `client_data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `collection_data`
--
ALTER TABLE `collection_data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_data`
--
ALTER TABLE `emp_data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan_data`
--
ALTER TABLE `loan_data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loan_type_master`
--
ALTER TABLE `loan_type_master`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nominee_data`
--
ALTER TABLE `nominee_data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

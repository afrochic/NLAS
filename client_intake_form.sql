-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_intake_form`
--

CREATE TABLE `client_intake_form` (
  `pilot` varchar(255) DEFAULT NULL,
  `nairobi` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `other_contacts` varchar(255) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `level_of_education` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `proficiency_level` varchar(255) DEFAULT NULL,
  `employment_status` varchar(255) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `pay_per_day` varchar(255) DEFAULT NULL,
  `income_per_month` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `vulnerability` varchar(255) DEFAULT NULL,
  `abuse_of_office` varchar(255) DEFAULT NULL,
  `criminal` varchar(255) DEFAULT NULL,
  `civil` varchar(255) DEFAULT NULL,
  `fileToUpload` varchar(1000) DEFAULT NULL,
  `sexual_violence` varchar(255) DEFAULT NULL,
  `summary_of_case` varchar(255) DEFAULT NULL,
  `action_taken` varchar(255) DEFAULT NULL,
  `know_about_us` varchar(255) DEFAULT NULL,
  `legal_aid` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `contacts` varchar(255) DEFAULT NULL,
  `nature_of_assistance` varchar(255) DEFAULT NULL,
  `date_of_case_filed` varchar(255) DEFAULT NULL,
  `court` varchar(255) DEFAULT NULL,
  `court_no` varchar(255) DEFAULT NULL,
  `status_of_case` varchar(255) DEFAULT NULL,
  `times_attended_court` varchar(255) DEFAULT NULL,
  `rep` varchar(255) DEFAULT NULL,
  `results` varchar(255) DEFAULT NULL,
  `recommendation` varchar(255) DEFAULT NULL,
  `officer` varchar(255) DEFAULT NULL,
  `date_today` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_intake_form`
--

INSERT INTO `client_intake_form` (`pilot`, `nairobi`, `date`, `ref`, `client`, `gender`, `age`, `dob`, `email`, `contact_address`, `mobile_number`, `other_contacts`, `residence`, `level_of_education`, `language`, `proficiency_level`, `employment_status`, `occupation`, `pay_per_day`, `income_per_month`, `marital_status`, `vulnerability`, `abuse_of_office`, `criminal`, `civil`, `fileToUpload`, `sexual_violence`, `summary_of_case`, `action_taken`, `know_about_us`, `legal_aid`, `institute`, `contacts`, `nature_of_assistance`, `date_of_case_filed`, `court`, `court_no`, `status_of_case`, `times_attended_court`, `rep`, `results`, `recommendation`, `officer`, `date_today`, `id`) VALUES
(NULL, NULL, '2021-04-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'primary', 'local', 'spoken', 'permanent', NULL, NULL, NULL, 'single', 'woman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tyub', '2021-05-08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_intake_form`
--
ALTER TABLE `client_intake_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_intake_form`
--
ALTER TABLE `client_intake_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

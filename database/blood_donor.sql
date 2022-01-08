-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 11:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_ktgk`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` int(10) UNSIGNED NOT NULL,
  `bd_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bd_sex` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `bd_age` int(3) NOT NULL,
  `bd_bgroup` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'Vương Quyên', 'nữ', 21, 'B', '2012-01-01', '0357193458'),
(2, 'Thanh son', 'nam', 18, 'O', '2022-01-19', '03885737'),
(3, 'Văn Dũng', 'nam', 21, 'AB', '2012-01-01', '0934567'),
(4, 'Khánh Linh', 'nữ', 19, '23', '2022-01-17', '0548387');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bd_id`),
  ADD UNIQUE KEY `bd_phno` (`bd_phno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `bd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

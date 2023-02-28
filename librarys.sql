-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 07:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarys`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(5) NOT NULL,
  `b_id_b` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `b_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `b_author` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `b_publish` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `b_price` int(10) NOT NULL,
  `b_rentstd` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `b_rentlib` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `b_status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_id_b`, `b_name`, `b_author`, `b_publish`, `b_price`, `b_rentstd`, `b_rentlib`, `b_status`) VALUES
(1, '', NULL, NULL, '', 0, '', '', NULL),
(10, '0156011042002', 'การโปรแกรม 1', 'กิตติ เกียรติโกมลวัฒน์', 'ซีเอ็ดบุ๊คซ์เซ็นเตอร์', 455, '7', '120', 'ยืม'),
(9, '0156011042005', 'การโปรแกรม 2 ', 'กิตติ เกียรติโกมลวัฒน์', 'ซีเอ็ดบุ๊คซ์เซ็นเตอร์', 455, '7', '120', 'ว่าง'),
(9, '505050', 'การโปรแกรม 2 ', 'กิตติ เกียรติโกมลวัฒน์', 'ซีเอ็ดบุ๊คซ์เซ็นเตอร์', 455, '7', '120', 'ยืม');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `bor_id` int(5) NOT NULL,
  `mem_std_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `b_id_b` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `lib_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `bor_date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bor_mem` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `re_mem` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `re_date` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`bor_id`, `mem_std_id`, `b_id_b`, `lib_id`, `bor_date`, `bor_mem`, `re_mem`, `re_date`) VALUES
(5, '1234', '505050', '1024', '0000-00-00', '6239010038', '6239010038', '0000-00-00'),
(12, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(13, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(14, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(15, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(16, '2147483647', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(17, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(18, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(19, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(20, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(21, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(22, '1234', '505050', '123456', '0000-00-00', '', '', '0000-00-00'),
(23, '1234', '505050', '123456', '09-03-2021', '', '', '16-03-2021');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id_lib` int(5) NOT NULL,
  `lib_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `lib_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lib_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lib_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lib_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id_lib`, `lib_id`, `lib_password`, `lib_name`, `lib_address`, `lib_phone`, `mem_type`) VALUES
(1, '1024', 'oopassto', 'นางสาวโอบอ้อม eieizaza07', '80 ซอยพัฒนา ถนนสกลราษฏร์ ตำบลในเมือง อำเภอเมือง จังหวัดอุบลราชธานี 340', '045-2673', 'Librarian'),
(2, '123456', '1234', 'วัชระ ใฝ่ใจ', '007', '062-372-5430', 'Librarian');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `mem_std_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mem_group` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mem_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mem_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_std_id`, `mem_password`, `mem_name`, `mem_group`, `mem_address`, `mem_phone`, `mem_type`) VALUES
(1, '505051215', '1234', 'นายขยัน มุ่งมั่นเรียน', '1', '5 ถนนแจ้งสนิท ตำบลในเมือง อำเภอเมือง จังหวัดอุบลราชธานี 34000', '452-55047', 'Student'),
(2, '2147483647', '5590', 'วัชระ ใฝ่ใจsadasdas', '3', '007', '062-372-5430', 'Student'),
(4, '1234', '1234', 'นายขยัน มุ่งมั่นเรียน', '1', '107/5', '62615', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `re_id` int(5) NOT NULL,
  `re_date` date NOT NULL,
  `bor_id` int(5) NOT NULL,
  `mem_std_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `lib_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `b_id_b` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id_b`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`bor_id`),
  ADD KEY `mem_id` (`mem_std_id`),
  ADD KEY `b_id` (`b_id_b`),
  ADD KEY `lib_id` (`lib_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id_lib`),
  ADD KEY `mem_type` (`mem_type`),
  ADD KEY `lib_id` (`lib_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `mem_type` (`mem_type`),
  ADD KEY `mem_std_id` (`mem_std_id`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`re_id`),
  ADD KEY `bor_id` (`bor_id`),
  ADD KEY `mem_id` (`mem_std_id`),
  ADD KEY `lib_id` (`lib_id`),
  ADD KEY `b_id` (`b_id_b`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `bor_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id_lib` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `re_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `fk_rent_book` FOREIGN KEY (`b_id_b`) REFERENCES `book` (`b_id_b`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rent_lib` FOREIGN KEY (`lib_id`) REFERENCES `librarian` (`lib_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rent_mem` FOREIGN KEY (`mem_std_id`) REFERENCES `member` (`mem_std_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

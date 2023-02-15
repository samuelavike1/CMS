-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 06:23 PM
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
-- Database: `cmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `index_number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `submitted_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`id`, `name`, `index_number`, `subject`, `message`, `submitted_date`) VALUES
(1, 'Jhoy Samuel Davidson', '06201090', 'Examination Complaint', 'I am most respectfully writing this letter to inform you about the corrections in my results. I would most humbly inform you that my result as mentioned on the portal/ provisional mark sheet is different from that of the mark sheet. To my knowledge the result mentioned on the mark sheet is incorrect and I request you to kindly get it corrected.', '2023-02-15 16:59:30'),
(2, 'Amolifo Richard', '062012233', 'Food', 'My missing results are causing me immersive difficulties as I cannot proceed to next session without it. Hence, it is humbly requested that my result is provided so that I can continue with my studies. My student information details and contact are', '2023-02-15 17:00:48'),
(3, 'Akapire Dominic', '06201050', 'Class Report', 'I wrote the CA and score a CA Mark of 25/30. My instructor read the mark to my hearing in class before the examination. Furthermore, while writing the exam a class list containing our CA marks was passed around for everyone to confirm his/her mark and to sign that you were present. I did the exercise and saw that a mark was assigned to my name but on checking my exam results, my CA mark was omitted.', '2023-02-15 17:03:05'),
(4, 'Issifu Abdallah Fobur', '06201159', 'Wifi Related Problem', 'There have been a massive drop in the wifi speed on campus in recent time which should be fixed ASAP.', '2023-02-15 17:05:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 05:14 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animation3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `admin_uname` varchar(20) NOT NULL,
  `admin_pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_uname`, `admin_pwd`) VALUES
(001, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `quest_id` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `quest_q` varchar(100) NOT NULL,
  `quest_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`quest_id`, `quest_q`, `quest_a`) VALUES
(01, 'เครื่องกำเนิดรังสีที่ใช้ในบริษัทเป็นเครื่องกำเนิดรังสีชนิดใด ?', 'เครื่องกำเนิดรังสีชนิดรังสี X-Ray'),
(02, 'เรานำเครื่องกำเนิดรังสีมาเพื่อทำอะไร ?', 'ถูกทุกข้อ'),
(03, 'เครื่อง X-Ray มีความพิเศษยังไง ?', 'มีความแม่นยำสูง'),
(04, 'เครื่อง X-Ray ในบริษัทเราจัดอยู่ในเครื่อง X-Ray ประเภทใด ?', 'เครื่อง X-Ray ที่ใช้ในอุตสาหกรรม'),
(05, 'สิ่งที่ควรปฏิบัติก่อนจะเข้าใช้เครื่องX-Ray ?', 'ควรสวมใส่อุปกรณ์ป้องกันอันตรายจากรังสีให้ครบถ้วน'),
(06, 'อุปกรณ์ป้องกันรังสีชนิดใดที่ใช้ป้องกันรังสีจากดวงตา ?', 'แว่นตากันรังสี'),
(07, 'อุปกรณ์ป้องกันรังสีชนิดใดที่ป้องกันอันตรายของอวัยวะภายใน ?', 'ชุดตะกั่ว'),
(08, 'อุปกรณ์ป้องกันรังสีชนิดใดที่ป้องกันอันตรายในการสัมผัสจากมือ ?', 'ถุงมือกันรังสี'),
(09, 'รังสีที่แผ่อออกมาโดนอวัยวะใดที่จะก่อให้เกิดความเสี่ยงเป็นต้อกระจก ?', 'ดวงตา'),
(10, 'ทำไมจึงต้องมีการให้ความรู้เรื่องความปลอกภัยในการใช้เครื่อง X-Ray ?', 'เพื่อให้เกิดความปลอดภัยแก่ผู้ปฏิบัติงาน'),
(11, 'ถ้าเกิดมีความผิดปกติของเครื่อง X-Ray ต้องทำอย่างไร ?', 'แจ้งเจ้าหน้าที่ผู้รับผิดชอบ'),
(12, 'ถ้าเกิดมีรังสีเกินกว่าค่าที่กำหนดควรปฏิบัติอย่างไร ?', 'แจ้งหัวหน้างานหรือเจ้าหน้าที่ที่เกี่ยวข้อง'),
(13, 'อุปกรณ์ป้องกันรังสีชนิดใดที่มีเฉพาะตัวบุคคล ?', 'แถบวัดรังสีประจำตัวบุคคล'),
(14, 'โรงงานทาคาโน๊ะประเทศไทย ผลิต อะไร ?', 'ถูกทุกข้อ'),
(15, 'ควรปฏิบัติอย่างไรกับการใช้งานเครื่อง X-Ray ?', 'ทำตามที่หัวหน้าสั่งและทำตามคู่มือและคำแนะนำในการอบรม');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_dep` varchar(50) NOT NULL,
  `user_pretest` tinyint(1) NOT NULL,
  `user_aftest` tinyint(1) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_dep`, `user_pretest`, `user_aftest`, `user_status`, `user_code`) VALUES
(0029, 'Kanty', 'General', 0, 1, 0, 123456),
(0025, 'Test1 Test1', 'Plating', 0, 0, 0, 10),
(0026, 'Test1 Test1', 'Plating', 0, 0, 0, 10),
(0027, 'กาน กาน', 'Store', 1, 1, 0, 11),
(0028, 'Test1 Test1', 'Technical', 0, 0, 0, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`quest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `quest_id` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

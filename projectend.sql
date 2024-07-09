-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 04:47 PM
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
-- Database: `projectend`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `about_id` int(11) NOT NULL,
  `about_pic` text NOT NULL,
  `about_topic` varchar(200) NOT NULL,
  `about_text` varchar(200) NOT NULL,
  `about_fulltext` varchar(5000) NOT NULL,
  `about_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`about_id`, `about_pic`, `about_topic`, `about_text`, `about_fulltext`, `about_link`) VALUES
(98, 'img167391510420240513_114936.jpg', 'โครงการ Super AI Engineer', 'ขอแสดงความยินดีกับ นายจิระศักดิ์ อนันต๊ะ', '                                       \r\n                  ขอแสดงความยินดี กับ นายจิระศักดิ์ อนันต๊ะ(เกมส์) นักศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ ชั้นปีที่ 2 ที่ผ่านการคัดเลือกเข้าสู่การอบรมปฏิบัติการ ในโครงการ Super AI Engineer Season 4 Level 2   โดยโครงการ Super AI Engineer เป็นโครงการที่จัดขึ้นโดยสมาคมปัญญาประดิษฐ์ประเทศไทย (AIAT) โดยได้รับความร่วมมือและการสนับสนุนจากองค์กรจำนวนมาก เช่น กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม, บพค. , สอวช., NECTEC เป็นต้น โดยโครงการ Super AI Engineer นี้มีจุดมุ่งหมายที่จะพัฒนาเทคโนโลยีปัญญาประดิษฐ์ โดยเฉพาะในการพัฒนาความรู้ สร้างบุคลากรทางด้านปัญญาประดิษฐ์เพื่อเป็นกำลังสำคัญขับเคลื่อนประเทศในอนาคต ซึ่งดำเนินมาถึงปีที่ 4 แล้ว ใน Super AI Engineer Season 4  ', ''),
(99, 'img82893552920240513_115248.jpg', 'อำลารุ่นพี่ (BYE NIOR )', 'อำลารุ่นพี่ (BYE NIOR )', '                                       \r\n                    คณาจารย์และนักศึกษาหลักสูตรวิทยาการคอมพิวเตอร์ ร่วมจัดกิจกรรม อำลารุ่นพี่ (BYE NIOR ) ประจำปีการศึกษา 2556  คำว่า BYE NIOR มาจากคำว่า GoodBYE SeNIOR เป็นกิจกรรมที่พี่ๆและน้องๆ ในหลักสูตร จัดขึ้น เพื่อเป็นการร่วมเลี้ยงอำลา และแสดงความยินดีกับรุ่นพี่ที่กำลังจะสำเร็จการศึกษาในชั้นปีสุดท้าย ทั้งแผนการเรียนแบบ 4 ปีและแบบเทียบโอน ณ โรงแรมเทวราช  ทางหลักสูตรขอแสดงความยินดีแก่นักศึกษาทุกท่านด้วยครับ', ''),
(101, 'img85981778620240706_190001.jpg', 'ปฐมนิเทศ2567', 'ทดสอบ', '                                       \r\n   นักศึกษาวิทยาการคอมพิวเตอร์นั่งตรงไหนกันบ้าง', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `objective` varchar(1000) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `job` varchar(1000) NOT NULL,
  `time_cs` varchar(1000) NOT NULL,
  `pay` varchar(1000) NOT NULL,
  `area` varchar(1000) NOT NULL,
  `file_upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `objective`, `qualification`, `job`, `time_cs`, `pay`, `area`, `file_upload`) VALUES
(1, '1. เพื่อผลิตบัณฑิตนักปฏิบัติที่มีทักษะความรู้ความสามารถด้านวิทยาการคอมพิวเตอร์ คิดแก้ปัญหาอย่างเป็นระบบด้วยเหตุและผล และสอดคล้องกับมาตรฐานคุณวุฒิระดับปริญญาตรี สาขาคอมพิวเตอร์\r\n2. เพื่อผลิตบัณฑิตที่สามารถประยุกต์ ความรู้ด้นริทยาการคอมหิวเตอร์ที่เป็นรากฐานของคอมพิวเตอร์ร่วมกับศาสตร์อื่น ๆ ที่เกี่ยวข้องหรืองานวิจัยและต่อยอดไปพัฒนานวัตกรรมที่เป็นประโยชน์ต่อชุมชนท้องถิ่นภาคเหนือ หรือประเทศชาติ ได้\r\n3. เพื่อผลิตบัณฑิตที่มีเจตคติที่ดีมีคุณธรรม จริยธรรม มีระเบียบวินัย ชยันหมั่นเพียร ใผ่รู้ มีความสำนึกต่อจรรยาบรรณอาชีพ และมีความรับผิดชอบต่อหน้าที่และสังคม\r\n4. เพื่อผลิตบัณฑิตที่สามารถประกอบอาชีพด้านคอมพิวเตอร์ เช่น นักวิทยาการคอมพิวเตอร์นักพัฒนาชอฟต์แวร์ นักวิชาการคอมพิวเตอร์ เจ้าหน้าที่ทำงานเกี่ยวกับคอมพิวเตอร์ และผู้ประกอบการด้านคอมพิวเตอร์ เป็นต้น\r\n', '        1. รับผู้สำเร็จการศึกษาระดับมัธยมศึกษาชั้นปีที่ 6 ทุกแผนการเรียน หรือสำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพ (ปวช.) ทุกสาขาวิชา หรือคุณวุฒิการศึกษาที่สูงกว่าทุกสาขาวิชา \r\n2. รับผู้สำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) สาขาวิชาระบบสารสนเทศคอมพิวเตอร์ธุรกิจ เทคนิคคอมพิวเตอร์ เทคโนโลยีคอมพิวเตอร์ คอมพิวเตอร์โปรแกรมเมอร์ เทคโนโลยีสารสนเทศ เทคโนโลยีธุรกิจดิจิทัล ไฟฟ้า อิเล็กทรอนิกส์ โทรคมนาคม หรือสาขาที่เกี่ยวข้องกับคอมพิวเตอร์ เทคโนโลยี โดยใช้หลักวิธีการเทียบโอนตามข้อบังคับมหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ว่าด้วยการศึกษาระดับปริญญาตรี พ.ศ. 2551 และข้อบังคับที่ประกาศเพิ่มเติม', '        1. นักวิชาการคอมพิวเตอร์ หรือนักวิทยาศาสตร์คอมพิวเตอร์\r\n2. นักวิเคราะห์และออกแบบระบบคอมพิวเตอร์\r\n3. ผู้พัฒนาซอฟต์แวร์หรือโปรแกรมเมอร์\r\n4. ผู้ดูแลระบบเครือข่ายคอมพิวเตอร์\r\n5. ผู้ออกแบบ พัฒนา และดูแลระบบฐานข้อมูล\r\n6. นักพัฒนาเว็บไชต์\r\n7. นักวิทยาศาสตร์ข้อมูล\r\n8. นักนวัตกรด้านปัญญาประดิษฐ์\r\n9. ผู้ประกอบการด้านซอฟต์แวร์\r\n10. นักออกแบบนวัตกรรมและโซลูชั่นอัจฉริยะ\r\n11. นักวิชาชีพในสถานประกอบการที่มีการใช้วิทยาการคอมพิวเตอร์', 'ศึกษาปกติ 4 ปี ไม่เกิน 8 ปี (128 หน่วยกิต)', 'ตลอดหลักสูตรประมาณ 96,000  บาท (เทอมละ 12,000 บาท)', 'มทร.ล้านนา น่าน', 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `date` date NOT NULL,
  `num` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`date`, `num`) VALUES
('2021-03-17', '0'),
('2021-03-18', '1'),
('2021-04-03', '0'),
('2021-04-04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(11) NOT NULL,
  `name_i` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `name_i`, `position`, `qualification`, `email`, `photo`) VALUES
(2, 'ผศ.ดร.นงนุช เกตุ้ย', 'อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์', 'วท.ม. , วท.บ. (วิทยาการคอมพิวเตอร์),ปร.ด. (เทคโนโลยี โปรแกรมวิทยาการคอมพิวเตอร์)', 'nongnuchketui@rmutl.ac.th', 'img101546035320240523_211734.png'),
(3, 'ดร.ปกรณ์ จันทร์อินทร์', 'อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์', 'อส.บ. (วิศวกรรมไฟฟ้า) , วท.ม. (วิทยาการคอมพิวเตอร์),ปร.ด. (วิทยาการคอมพิวเตอร์)', 'pakornc@rmutl.ac.th', 'img96598190820240523_211853.png'),
(4, 'อาจารย์ขนิษฐา หอมจันทร์', 'อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์', 'วท.ม. (เทคโนโลยีสารสนเทศและการจัดการ),วท.ป. (วิทยาการคอมพิวเตอร์)', 'kanithahomjun@rmutl.ac.th', 'img182453680120240523_211953.png'),
(5, 'อาจารย์ปกรณ์ สุนทรเมธ', 'อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์', 'วท.บ. (วิทยาการคอมพิวเตอร์),วท.ม. (เทคโนโลยีสารสนเทศ)', 'pakorns@rmutl.ac.th', 'img23200811420240523_212034.png'),
(6, 'อาจารย์ศิริลักษณ์ แก้วศิริรุ่ง', 'อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์', 'วท.บ. (เทคโนโลยีคอมพิวเตอร์),วท.ม. (เทคโนโลยีสารสนเทศทางคอมพิวเตอร์)', 'siriluxk@rmutl.ac.th', '68614990120240523_213031.png'),
(10, 'อาจารย์วรวิทย์ ฝั้นคำอ้าย', 'หัวหน้าหลักสูตรวิทยาการคอมพิวเตอร์', 'วท.ม. (วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ),วศ.บ. (วิศวกรรมคอมพิวเตอร์)', 'worawit@rmutl.ac.th', 'img86644108320240524_015509.png');

-- --------------------------------------------------------

--
-- Table structure for table `new_video_tbl`
--

CREATE TABLE `new_video_tbl` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `new_video_tbl`
--

INSERT INTO `new_video_tbl` (`video_id`, `video_name`, `video_link`) VALUES
(36, 'test01', ''),
(37, 'test01', 'video200207932620240708_205805.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_name`, `datesave`) VALUES
(126, 'admin', 'YWRtaW4=', 'admin', '2020-10-06 15:52:23'),
(150, 'aun', 'MTIz', 'นฤมล', '2024-05-16 03:16:18'),
(999, 'note', '123456', 'piyawat', '2024-06-26 16:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appeople`
--

CREATE TABLE `tbl_appeople` (
  `no_id` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `alumni_tel` varchar(10) NOT NULL,
  `alumni_mail` varchar(100) NOT NULL,
  `alumni_gd` varchar(100) NOT NULL,
  `alumni_name` varchar(100) NOT NULL,
  `alumni_surname` varchar(100) NOT NULL,
  `education_faculty` varchar(100) NOT NULL,
  `income` varchar(100) NOT NULL,
  `reskill` varchar(100) NOT NULL,
  `education_branch` varchar(100) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alumni_no` int(11) NOT NULL,
  `work_position` varchar(100) NOT NULL,
  `work_workplace` varchar(100) NOT NULL,
  `upskill` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `alumni_year` int(11) DEFAULT NULL,
  `alumni_id` varchar(20) NOT NULL,
  `alumni_pass` text NOT NULL,
  `section` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `village_no` int(11) NOT NULL,
  `sub_district` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postal_code` int(100) NOT NULL,
  `address_numbernw` varchar(50) DEFAULT NULL,
  `moo` varchar(50) DEFAULT NULL,
  `subdistrict` varchar(100) DEFAULT NULL,
  `district_w` varchar(100) DEFAULT NULL,
  `province_w` varchar(100) DEFAULT NULL,
  `postal_codew` varchar(10) DEFAULT NULL,
  `study_university` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `study_Gradelevel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `study_group` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `study_Fieldofstudy` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `No_Businessowner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Village_Businessowner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `district1_Businessowner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `district2_Businessowner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `province_Businessowner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zipcode_Businessowner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel_Businessowner` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name_Businessowner` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_appeople`
--

INSERT INTO `tbl_appeople` (`no_id`, `house_no`, `alumni_tel`, `alumni_mail`, `alumni_gd`, `alumni_name`, `alumni_surname`, `education_faculty`, `income`, `reskill`, `education_branch`, `img`, `alumni_no`, `work_position`, `work_workplace`, `upskill`, `work`, `alumni_year`, `alumni_id`, `alumni_pass`, `section`, `job`, `village_no`, `sub_district`, `district`, `province`, `postal_code`, `address_numbernw`, `moo`, `subdistrict`, `district_w`, `province_w`, `postal_codew`, `study_university`, `study_Gradelevel`, `study_group`, `study_Fieldofstudy`, `No_Businessowner`, `Village_Businessowner`, `district1_Businessowner`, `district2_Businessowner`, `province_Businessowner`, `zipcode_Businessowner`, `tel_Businessowner`, `name_Businessowner`) VALUES
(464, 1, '0888812388', 'asdasd5712257@asdas.asd', 'นาย', 'วราเมธ', 'กันณะสา', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '500', 'e', 'วิทยาการคอมพิวเตอร์', '166528581920240706_140555.jpg', 83, 'a', 'b', 'd', 'ตรงสาขา', 2568, '64342205010-1', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 4, 'PUA', 'PUA', 'NAN', 55120, '', '', '', '', '', '', 'c', 'd                               ', 'e', 'f                        ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
(465, 0, '0', '', 'นางสาว', 'กัญญาภัค', 'กองวี', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '170807302020240630_003218.jpg', 0, '', '', '', 'ตรงสาขา', 0, '64342205011-9', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(466, 0, '0', '', 'นางสาว', 'งามเนตร', 'วงษ์เนียม', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205012-7', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ศึกษาต่อ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(467, 0, '0', '', 'นาย', 'จิรฐา', 'นันทะกมล', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205013-5', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(468, 0, '0', '', 'นางสาว', 'ธัญญารักษ์', 'ดีมูลมั่ง', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205017-6', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(469, 0, '0', '', 'นาย', 'วุฒิชัย', 'สวัสดิ์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205019-2', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ศึกษาต่อ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(470, 0, '0', '', 'นางสาว', 'สินีรัตน์', 'อรินทร์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205021-8', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(471, 0, '0', '', 'นาย', 'นันทวัฒน์', 'งานมูลเขียว', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205033-3', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(472, 0, '0', '', 'นาย', 'พรรษิษฐ์', 'อินต๊ะจักร', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205034-1', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ศึกษาต่อ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(473, 0, '0', '', 'นาย', 'กชมน', 'คำวรรณ์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205036-6', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(474, 0, '0', '', 'นาย', 'วรมน', 'เสารางทอย', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205037-4', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(475, 0, '0', '', 'นาย', 'อธิพงศ์', 'ดีน้อย', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205040-8', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(476, 0, '0', '', 'นาย', 'Dipnarayan', 'Chaudhary', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205001-1', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(477, 0, '0', '', 'นาย', 'จิณณวัตร', 'พรมเกษา', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205002-9', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(478, 0, '0', '', 'นางสาว', 'นิศาชล', 'คำแสน', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205005-2', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(479, 0, '0', '', 'นางสาว', 'ภัทรศยา', 'เทพกอม', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205006-0', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(480, 0, '0', '', 'นางสาว', 'วิลาสินี', 'กันฉาย', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205008-6', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(481, 0, '0', '', 'นาย', 'อนุรัตน์', 'ยานะ', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205010-2', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(482, 0, '0', '', 'นาย', 'จิรภัทร', 'เกษมวัฒน์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205015-1', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(483, 0, '0', '', 'นาย', 'สุภณ', 'อินสุวรรณ', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205016-9', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(484, 0, '0', '', 'นางสาว', 'กัญญารัตน์', 'ศรีพรม', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205026-8', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ศึกษาต่อ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(485, 0, '0', '', 'นางสาว', 'กนกวรรณ', 'ธิสา', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '63342205042-5', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ', 'ไม่มีงานทำ', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(486, 0, '0', '', 'นาย', 'จิตวัต', 'คำเผ่า', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205004-4', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 0, '0', '', 'นางสาว', 'จิราภา', 'แก้วหล้า', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205005-1', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 0, '0', '', 'นาย', 'ฐนพล', 'เกลียวคำ', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205014-3', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(489, 0, '0', '', 'นาย', 'ณรงค์เดช', 'ไชยวงค์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205015-0', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(490, 0, '0', '', 'นาย', 'ปิยะพนธ์', 'กุณาวงศ์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205018-4', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(491, 0, '0', '', 'นาย', 'พีรพัฒน์ ', 'แก้วตัน', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '', '', 'วิทยาการคอมพิวเตอร์', '', 0, '', '', '', '', 0, '64342205035-8', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(492, 143, '65', '', 'นาย', 'กำพล', 'ลีสวัสดิ์วงค์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '15,000', 'การเรียนรู้การบริหารจัดการโปรเจค IT', 'วิทยาการคอมพิวเตอร์', '50253591720240525_234051.jpg', 85, 'เจ้าหน้าที่ที่ให้ความช่วยเหลือและแก้ปัญหาด้านระบบเทคโนโลยีสารสนเทศ', 'TechSpace', 'การเรียนรู้ Cybersecurity', 'ตรงสาขา', 2567, '65342205001-9', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 0, 'ไชยสถาน', 'เมือง', 'น่าน', 55000, '1112', '110', 'แขวงพระโขนง', '', 'กรุงเทพมหานคร', '10110', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(493, 173, '93', 'naruemon200105@gmail.com', 'นางสาว', 'นพรัตน์', 'ขัติยศ', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '15,000', 'การย้ายจากการพัฒนาแอพพลิเคชันไปสู่ DevOps', 'วิทยาการคอมพิวเตอร์', '197105320320240528_171705.jpg', 85, 'ระบบ Web Application', 'บริษัท โตโยต้า แมททีเรียล แฮนด์ลิ่ง แวร์เฮ้าส์ โซลูชั่นส์ (ประเทศไทย) จำกัด', 'การเรียนรู้ Cybersecurity', 'ตรงสาขา', 2567, '65342205026-6', '123', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 4, 'ผาสิงห์', 'เมือง', 'น่าน', 55000, '57', '6', 'ราชาเทวะ', 'บางพลี', 'สมุทรปราการ', '10540', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(494, 49, '63', 'aun@gmail.com', 'นางสาว', 'นฤมล', 'คำมงคล', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '10,000', 'Content Creator', 'วิทยาการคอมพิวเตอร์', '7653205220240606_202900.jpg', 85, 'Content Creator', 'บริษัท ทองมาดิจิทัล จำกัด', 'การเรียนรู้ Cybersecurity', 'ไม่ตรงสาขา', 2567, '65342205027-4', '123', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 8, 'หนองแดง', 'แม่จริม', 'น่าน', 55170, '55', '149', 'แขวงคลองถนน', 'เขตสายไหม', 'กรุงเทพมหานคร', '10220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(495, 263, '82', '', 'นาย', 'ปฏิภาณ', 'มูลชัย', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '15,000', 'การเรียนรู้ Cybersecurity', 'วิทยาการคอมพิวเตอร์', '29045802320240525_231958.jpg', 85, 'แผนกเทคโนโลยีสารสนเทศ', 'โรงพยาบาลสมเด็จยุพราชปัว', 'การเรียนรู้ภาษาโปรแกรมใหม่ๆ', 'ตรงสาขา', 2567, '65342205028-2', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 3, 'ม่วงตึ๊ด', 'ภูเพียง', 'น่าน', 55000, '70', '', 'วรนคร', 'ปัว', 'น่าน', '55120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(496, 37, '98', '', 'นางสาว', 'ภัทรภรณ์', 'จันทร์พล', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '10,000', 'Content Creator', 'วิทยาการคอมพิวเตอร์', '19736438120240525_233143.jpg', 85, 'Content Creator', 'บริษัท ทองมาดิจิทัล จำกัด', 'การเชี่ยวชาญในด้าน Data Science', 'ไม่ตรงสาขา', 2567, '65342205031-6', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 12, 'ฝายแก้ว', 'ภูเพียง', 'น่าน', 55000, '55', '149', 'แขวงคลองถนน', 'เขตสายไหม', 'กรุงเทพมหานคร', '10220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(497, 103, '97', '', 'นางสาว', 'ลักษณสุดา', 'กันภัย', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '15,000', 'การเรียนรู้ Cybersecurity', 'วิทยาการคอมพิวเตอร์', '61347624820240525_232758.jpg', 85, 'Graphic Designer', 'บริษัท เทคซอส มีเดีย จำกัด', 'การเชี่ยวชาญในด้าน Data Science', 'ไม่ตรงสาขา', 2567, '65342205033-2', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 3, 'ผาสิงห์', 'เมือง', 'น่าน', 55000, '101', '', 'แขวงบางจาก', 'เขตพระโขนง', 'กรุงเทพมหานคร', '10260', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 109, '99', '', 'นาย', 'วุฒิพงศ์', 'อินจันทร์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '10,000', 'การเรียนรู้การบริหารจัดการโปรเจค IT', 'วิทยาการคอมพิวเตอร์', '212959539520240525_232333.jpg', 85, 'IT Support', 'บริษัท ยูโฟร์ตี้โฟร์ เทคโนโลยี โซลูชั่นส์ จำกัด', 'การเชี่ยวชาญในด้าน Data Science', 'ตรงสาขา', 2567, '65342205035-7', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 0, 'บัวใหญ่', 'นาน้อย', 'น่าน', 0, '8', '', ' แขวงบางนาเหนือ', 'เขตบางนา', 'กรุงเทพมหานคร', '10260', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(499, 77, '62', '', 'นาย', 'อรรถวิท', 'โพธิ์นอก', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '12,000', 'การย้ายจากการพัฒนาแอพพลิเคชันไปสู่ DevOps', 'วิทยาการคอมพิวเตอร์', '81160541620240525_231436.jpg', 85, 'พัฒนาระบบเว็ปไซต์', 'โรงพยาบาลสมเด็จยุพราชปัว', 'การปรับปรุงทักษะในการพัฒนาเว็บ: การเรียนรู้เฟรมเวิร์กใหม่ๆ เช่น React.js, Angular, หรือ Vue.js', 'ตรงสาขา', 2567, '65342205037-3', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 0, 'ในเวียง', 'เมือง', 'น่าน', 55000, '70', '', 'วรนคร', 'ปัว', 'น่าน', '55120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 208, '0', '', 'นาย', 'อัษดิน', 'รอดเทศน์', 'วิทยาศาสตร์และเทคโนโลยีการเกษตร', '10,000', 'การเรียนรู้การบริหารจัดการโปรเจค IT', 'วิทยาการคอมพิวเตอร์', '55774732220240525_225655.jpg', 85, 'ช่วยดูแลระบบคอมพิวเตอร์ ของหน่วยงาน', 'กองเทคโนโลยีสารสนเทศ องค์การสงเคราะห์ทหารผ่านศึก ฯ ', 'การเรียนรู้ภาษาโปรแกรมเพิ่มเติม เช่น Java, Python , หรือ Go', 'ตรงสาขา', 2567, '65342205038-1', '', 'วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ', 'มีงานทำ', 0, 'ผาสิงห์', 'เมือง', 'น่าน', 55000, '420', '3', 'แขวงทุ่งพญาไท', 'เขตราชเทวี', 'กรุงเทพมหานคร', '10400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `new_video_tbl`
--
ALTER TABLE `new_video_tbl`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_appeople`
--
ALTER TABLE `tbl_appeople`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `gender_id` (`alumni_gd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new_video_tbl`
--
ALTER TABLE `new_video_tbl`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `tbl_appeople`
--
ALTER TABLE `tbl_appeople`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

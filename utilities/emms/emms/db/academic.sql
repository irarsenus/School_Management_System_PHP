-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 02:54 PM
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
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admnistration`
--

CREATE TABLE `admnistration` (
  `id` int(11) NOT NULL,
  `image` varchar(111) NOT NULL,
  `names` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `post` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admnistration`
--

INSERT INTO `admnistration` (`id`, `image`, `names`, `email`, `password`, `post`) VALUES
(1, '', 'NDIZEYE DAVID', 'ndizeye181@gmail.com', '123', 'DOS');

-- --------------------------------------------------------

--
-- Table structure for table `al`
--

CREATE TABLE `al` (
  `id` int(111) NOT NULL,
  `studentId` varchar(111) NOT NULL,
  `firstName` varchar(111) NOT NULL,
  `lastName` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `homeTown` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `admission` varchar(111) NOT NULL,
  `conduct` varchar(111) NOT NULL,
  `position_1` varchar(111) NOT NULL,
  `position_2` varchar(111) NOT NULL,
  `position_3` varchar(111) NOT NULL,
  `total_1` int(111) NOT NULL,
  `total_2` int(111) NOT NULL,
  `total_3` int(111) NOT NULL,
  `WEB_cat_1` varchar(255) NOT NULL,
  `WEB_ex_1` varchar(255) NOT NULL,
  `WEB_tot_1` varchar(255) NOT NULL,
  `ENT_cat_1` varchar(255) NOT NULL,
  `ENT_ex_1` varchar(255) NOT NULL,
  `ENT_tot_1` varchar(255) NOT NULL,
  `JS_cat_1` varchar(255) NOT NULL,
  `JS_ex_1` varchar(255) NOT NULL,
  `JS_tot_1` varchar(255) NOT NULL,
  `GRAPHIC_cat_1` varchar(255) NOT NULL,
  `GRAPHIC_ex_1` varchar(255) NOT NULL,
  `GRAPHIC_tot_1` varchar(255) NOT NULL,
  `MATHS_cat_1` varchar(255) NOT NULL,
  `MATHS_ex_1` varchar(255) NOT NULL,
  `MATHS_tot_1` varchar(255) NOT NULL,
  `COMP_cat_1` varchar(255) NOT NULL,
  `COMP_ex_1` varchar(255) NOT NULL,
  `COMP_tot_1` varchar(255) NOT NULL,
  `KINY_cat_1` varchar(255) NOT NULL,
  `KINY_ex_1` varchar(255) NOT NULL,
  `KINY_tot_1` varchar(255) NOT NULL,
  `SHE_cat_1` varchar(255) NOT NULL,
  `SHE_ex_1` varchar(255) NOT NULL,
  `SHE_tot_1` varchar(255) NOT NULL,
  `CITZ_cat_1` varchar(255) NOT NULL,
  `CITZ_ex_1` varchar(255) NOT NULL,
  `CITZ_tot_1` varchar(255) NOT NULL,
  `ENG_cat_1` varchar(255) NOT NULL,
  `ENG_ex_1` varchar(255) NOT NULL,
  `ENG_tot_1` varchar(255) NOT NULL,
  `COM_cat_1` varchar(255) NOT NULL,
  `COM_ex_1` varchar(255) NOT NULL,
  `COM_tot_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `announcer` varchar(111) NOT NULL,
  `postDate` varchar(111) NOT NULL,
  `content` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `announcer`, `postDate`, `content`) VALUES
(2, 'DOS', '2023-05-16', '<p>You must <b>all</b> go to school on <u>time</u><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(111) NOT NULL,
  `division` varchar(111) NOT NULL,
  `teacher` varchar(111) NOT NULL,
  `monitor` varchar(111) NOT NULL,
  `monitress` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `division`, `teacher`, `monitor`, `monitress`) VALUES
(7, 'L3SOD', 'A\'LEVEL', 'IMANIZABAYO Theogene', 'Mbutoyurukundo Jacques', 'Abayo Ishimwe Placidie');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `documentId` varchar(111) NOT NULL,
  `uploader` varchar(111) NOT NULL,
  `document` varchar(111) NOT NULL,
  `docName` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `type` varchar(111) NOT NULL,
  `uploadDate` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `documentId`, `uploader`, `document`, `docName`, `description`, `type`, `uploadDate`, `image`) VALUES
(10, '152031749', 'THEO gene', '725ppt53.ppt', 'mellow.ppt', 'mellow', 'ppt', '2023-05-15', 'ppt.png'),
(11, '1488074579', 'THEO gene', '946docx76.docx', 'mellow.docx', 'This doc will help you\r\n', 'docx', '2023-05-15', 'docx.jpg'),
(12, '1372095471', 'THEO gene', '746pdf60.pdf', 'list.pdf', 'you pig', 'pdf', '2020-03-24', 'pdf.png'),
(13, '383095709', 'THEO gene', '567pdf83.pdf', 'banner.pdf', 'This is a banner', 'pdf', '2023-05-16', 'pdf.png');

-- --------------------------------------------------------

--
-- Table structure for table `lstsubjects`
--

CREATE TABLE `lstsubjects` (
  `id` int(11) NOT NULL,
  `moduleId` varchar(111) NOT NULL,
  `module` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `abr` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lstsubjects`
--

INSERT INTO `lstsubjects` (`id`, `moduleId`, `module`, `class`, `abr`, `level`) VALUES
(24, '25WEB706', 'DEVELOP WEBSITE', 'L3SOD', 'WEB', 'al'),
(25, '48ENT826', 'CREATE A BUSINESS', 'L3SOD', 'ENT', 'al'),
(26, '15JS276', 'APPLY JAVASCRIPT FUNDAMENTALS', 'L3SOD', 'JS', 'al'),
(27, '42GRAPHIC323', 'APPLY BASIC GRAPHICS DESIGN', 'L3SOD', 'GRAPHIC', 'al'),
(28, '10MATHS955', 'APPLY ALGEBRA AND TRIGONOMETRY', 'L3SOD', 'MATHS', 'al'),
(29, '34COMP484', 'APPLY COMPUTER LITERACY', 'L3SOD', 'COMP', 'al'),
(30, '40KINY422', 'GUKORESHA IKINYARWANDA KIBONEYE', 'L3SOD', 'KINY', 'al'),
(31, '15SHE807', 'MAINTAIN SHE AT WORKPLACE', 'L3SOD', 'SHE', 'al'),
(32, '18CITZ410', 'COMPLY WITH CITIZENSHIP  VALUES', 'L3SOD', 'CITZ', 'al'),
(33, '37ENG542', 'COMMUNICATE EFFECTIVELY AT WORKPLACE', 'L3SOD', 'ENG', 'al'),
(34, '43COM959', 'COMMUNICATE SIMPLY USING ENGLISH IN FAMILIAR SITUATION', 'L3SOD', 'COM', 'al');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(111) NOT NULL,
  `studentId` varchar(111) NOT NULL,
  `moduleId` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `tot` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `moduleId` varchar(111) NOT NULL,
  `module` varchar(111) NOT NULL,
  `abr` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `teacher` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `moduleHours` varchar(111) NOT NULL,
  `term` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `moduleId`, `module`, `abr`, `class`, `teacher`, `level`, `moduleHours`, `term`) VALUES
(56, '25WEB706', 'DEVELOP WEBSITE', 'WEB', 'L3SOD', '19', 'al', '120', '1'),
(57, '48ENT826', 'CREATE A BUSINESS', 'ENT', 'L3SOD', '14', 'al', '60', '1'),
(58, '15JS276', 'APPLY JAVASCRIPT FUNDAMENTALS', 'JS', 'L3SOD', '1', 'al', '120', '1'),
(59, '42GRAPHIC323', 'APPLY BASIC GRAPHICS DESIGN', 'GRAPHIC', 'L3SOD', '1', 'al', '100', '1'),
(60, '10MATHS955', 'APPLY ALGEBRA AND TRIGONOMETRY', 'MATHS', 'L3SOD', '13', 'al', '60', '1'),
(61, '34COMP484', 'APPLY COMPUTER LITERACY', 'COMP', 'L3SOD', '9', 'al', '30', '1'),
(62, '40KINY422', 'GUKORESHA IKINYARWANDA KIBONEYE', 'KINY', 'L3SOD', '3', 'al', '30', '1'),
(63, '15SHE807', 'MAINTAIN SHE AT WORKPLACE', 'SHE', 'L3SOD', '18', 'al', '30', '1'),
(64, '18CITZ410', 'COMPLY WITH CITIZENSHIP  VALUES', 'CITZ', 'L3SOD', '12', 'al', '30', '1'),
(65, '37ENG542', 'COMMUNICATE EFFECTIVELY AT WORKPLACE', 'ENG', 'L3SOD', '15', 'al', '30', '1'),
(66, '43COM959', 'COMMUNICATE SIMPLY USING ENGLISH IN FAMILIAR SITUATION', 'COM', 'L3SOD', '15', 'al', '30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ol`
--

CREATE TABLE `ol` (
  `id` int(111) NOT NULL,
  `studentId` varchar(111) NOT NULL,
  `firstName` varchar(111) NOT NULL,
  `lastName` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `homeTown` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `admission` varchar(111) NOT NULL,
  `conduct` varchar(111) NOT NULL,
  `total` varchar(111) NOT NULL,
  `position` varchar(111) NOT NULL,
  `MATHS_cat_1` varchar(255) NOT NULL,
  `MATHS_ex_1` varchar(255) NOT NULL,
  `MATHS_tot_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `firstName` varchar(111) NOT NULL,
  `lastName` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `diploma` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `department` varchar(111) NOT NULL,
  `img` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `userId`, `firstName`, `lastName`, `email`, `password`, `phone`, `year`, `diploma`, `gender`, `department`, `img`) VALUES
(6, 1, 'IRABA', 'Arsene', 'irarsenal2012@gmail.com', '939arseneESSA@2023', '0785743323', 2023, '', 'Male', 'ICT', 'default.png'),
(7, 2, 'RUBERANZIZA', 'Jean Claude', 'ruberajeanclaude@gmail.com', '235jean claudeESSA@2023', '0784713098', 2023, '', 'Male', 'Department', 'default.png'),
(8, 3, 'NIRAGIRE', 'Prudencienne', 'prudencinnen@gmail.com', '687prudencienneESSA@2023', '0783235162', 2023, '', 'Female', 'LANGUAGES', 'default2.png'),
(9, 4, 'NTIRENGANYA', 'Marcel', 'jesushappy09@gmail.com', '265marcelESSA@2023', '0785507622', 2023, '', 'Male', 'Department', 'default.png'),
(10, 5, 'NSABIMANA', 'Lambert', 'lembertnsabimana1@gmail.com', '884lambertESSA@2023', '0788802871', 2023, '', 'Male', 'Department', 'default.png'),
(11, 6, 'TUYISENGE', 'Theogene', 'tuyisengetheo120@gmail.com', '792theogeneESSA@2023', '0788823595', 2023, '', 'Male', 'Department', 'default.png'),
(12, 7, 'NSHIMIYIMANA', 'Blaise Pascah', 'blaisepas163@gmail.com', '712blaise pascahESSA@2023', '0789618008', 2023, '', 'Male', 'Department', 'default.png'),
(13, 8, 'GASHANGORE', 'Joel', 'jgashongore@gmail.com', '288joelESSA@2023', '0785932965', 2023, '', 'Male', 'Department', 'default.png'),
(14, 9, 'IMANIZABAYO', 'Theogene', 'imatheogene@gmail.com', '730theogeneESSA@2023', '0782661466', 2023, '', 'Male', 'ICT', 'default.png'),
(15, 10, 'IRATUZI', 'Moise', 'iratuzimoise96@gmail.com', '877moiseESSA@2023', '0783624633', 2023, '', 'Male', 'Department', 'default.png'),
(16, 11, 'BUSHALI', 'Jean Claude', 'jbushali@gmail.com', '784jean claudeESSA@2023', '0783624633', 2023, '', 'Male', 'Department', 'default.png'),
(17, 12, 'NIYONGIRA', 'Salomon', 'niyosalo2@gmail.com', '163salomonESSA@2023', '0781943761', 2023, '', 'Male', 'Department', 'default.png'),
(18, 13, 'NDUWAYEZU', 'Charles', 'cduwayezu@gmail.com', '292charlesESSA@2023', '0788211370', 2023, '', 'Male', 'Department', 'default.png'),
(19, 14, 'ZZIMBE', 'Robert', 'rzzimbezo@gmail.com', '344robertESSA@2023', '0787259104', 2023, '', 'Male', 'Department', 'default.png'),
(20, 15, 'TUYIZERE', 'Esther', 'esthertuyizere0@gmail.com', '741estherESSA@2023', '0788871699', 2023, '', 'Female', 'Department', 'default2.png'),
(21, 16, 'NTAGWABIRA', 'Viateur', 'ntagwabiraviateur@gmail.com', '345viateurESSA@2023', '0785169920', 2023, '', 'Male', 'Department', 'default.png'),
(22, 17, 'TUYISHIME', 'Abdoul Varim', 'tuyolvim11@gmail.com', '529abdoul varimESSA@2023', '0788705843', 2023, '', 'Male', 'Department', 'default.png'),
(23, 18, 'UMARARUNGU', 'Scovia', 'mumararunguscovia@gmail.com', '273scoviaESSA@2023', '0788623246', 2023, '', 'Female', 'Department', 'default2.png'),
(24, 19, 'KABUTORE', 'Boniface', 'bkobutore', '495bonifaceESSA@2023', '0788202059', 2023, '', 'Male', 'ICT', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `staffpermissions`
--

CREATE TABLE `staffpermissions` (
  `id` int(11) NOT NULL,
  `teacher` varchar(111) NOT NULL,
  `department` varchar(111) NOT NULL,
  `reason` varchar(111) NOT NULL,
  `depatureDate` varchar(111) NOT NULL,
  `arrivalDate` varchar(111) NOT NULL,
  `approved` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffpermissions`
--

INSERT INTO `staffpermissions` (`id`, `teacher`, `department`, `reason`, `depatureDate`, `arrivalDate`, `approved`) VALUES
(19, '2', 'Department', 'Sickness', '2023-05-16', '2023-05-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstName` varchar(111) NOT NULL,
  `lastName` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `class` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstName`, `lastName`, `gender`, `dob`, `class`) VALUES
(21, 'SHYAKA', 'JOKASH', 'male', '2005-12-04', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(11) NOT NULL,
  `tradeName` varchar(111) NOT NULL,
  `tradeAbr` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `tradeName`, `tradeAbr`) VALUES
(1, 'SOFTWARE DEVELOPMENT', 'SOD'),
(3, 'TOURISM', 'TORS'),
(4, 'CONSTRUCTION', 'CONS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admnistration`
--
ALTER TABLE `admnistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `al`
--
ALTER TABLE `al`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lstsubjects`
--
ALTER TABLE `lstsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ol`
--
ALTER TABLE `ol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffpermissions`
--
ALTER TABLE `staffpermissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admnistration`
--
ALTER TABLE `admnistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `al`
--
ALTER TABLE `al`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lstsubjects`
--
ALTER TABLE `lstsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `ol`
--
ALTER TABLE `ol`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staffpermissions`
--
ALTER TABLE `staffpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

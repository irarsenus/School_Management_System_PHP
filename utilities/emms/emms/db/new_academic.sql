-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql213.infinityfree.com
-- Generation Time: Jun 10, 2025 at 05:44 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_34210512_academic`
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
(1, '', 'Director of studies', 'dos@gmail.com', 'essa@123', 'DOS'),
(2, '', 'Patron', 'mellow@gmail.com', 'essa@123', 'PATRON'),
(3, '', 'bursar', 'bursar@gmail.com', 'essa@123', 'BURSAR');

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
  `paid` varchar(11) NOT NULL,
  `position_1` varchar(111) NOT NULL,
  `position_2` varchar(111) NOT NULL,
  `position_3` varchar(111) NOT NULL,
  `total_1` int(111) NOT NULL,
  `total_2` int(111) NOT NULL,
  `total_3` int(111) NOT NULL,
  `COMP_cat_1` int(255) NOT NULL,
  `COMP_ex_1` int(255) NOT NULL,
  `COMP_tot_1` int(255) NOT NULL,
  `COM_cat_1` int(255) NOT NULL,
  `COM_ex_1` int(255) NOT NULL,
  `COM_tot_1` int(255) NOT NULL,
  `CITZ_cat_1` int(255) NOT NULL,
  `CITZ_ex_1` int(255) NOT NULL,
  `CITZ_tot_1` int(255) NOT NULL,
  `GRAPHIC_cat_1` int(255) NOT NULL,
  `GRAPHIC_ex_1` int(255) NOT NULL,
  `GRAPHIC_tot_1` int(255) NOT NULL,
  `SHE_cat_1` int(255) NOT NULL,
  `SHE_ex_1` int(255) NOT NULL,
  `SHE_tot_1` int(255) NOT NULL,
  `ENG_cat_1` int(255) NOT NULL,
  `ENG_ex_1` int(255) NOT NULL,
  `ENG_tot_1` int(255) NOT NULL,
  `MATHS_cat_1` int(255) NOT NULL,
  `MATHS_ex_1` int(255) NOT NULL,
  `MATHS_tot_1` int(255) NOT NULL,
  `WEB_cat_1` int(255) NOT NULL,
  `WEB_ex_1` int(255) NOT NULL,
  `WEB_tot_1` int(255) NOT NULL,
  `JS_cat_1` int(255) NOT NULL,
  `JS_ex_1` int(255) NOT NULL,
  `JS_tot_1` int(255) NOT NULL,
  `WEB_cat_2` int(255) NOT NULL,
  `WEB_ex_2` int(255) NOT NULL,
  `WEB_tot_2` int(255) NOT NULL,
  `ENT_cat_2` int(255) NOT NULL,
  `ENT_ex_2` int(255) NOT NULL,
  `ENT_tot_2` int(255) NOT NULL,
  `COMP_cat_2` int(255) NOT NULL,
  `COMP_ex_2` int(255) NOT NULL,
  `COMP_tot_2` int(255) NOT NULL,
  `COM_cat_2` int(255) NOT NULL,
  `COM_ex_2` int(255) NOT NULL,
  `COM_tot_2` int(255) NOT NULL,
  `CITZ_cat_2` int(255) NOT NULL,
  `CITZ_ex_2` int(255) NOT NULL,
  `CITZ_tot_2` int(255) NOT NULL,
  `GRAPHIC_cat_2` int(255) NOT NULL,
  `GRAPHIC_ex_2` int(255) NOT NULL,
  `GRAPHIC_tot_2` int(255) NOT NULL,
  `KINY_cat_2` int(255) NOT NULL,
  `KINY_ex_2` int(255) NOT NULL,
  `KINY_tot_2` int(255) NOT NULL,
  `ENG_cat_2` int(255) NOT NULL,
  `ENG_ex_2` int(255) NOT NULL,
  `ENG_tot_2` int(255) NOT NULL,
  `JS_cat_2` int(255) NOT NULL,
  `JS_ex_2` int(255) NOT NULL,
  `JS_tot_2` int(255) NOT NULL,
  `CVC_cat_2` int(255) NOT NULL,
  `CVC_ex_2` int(255) NOT NULL,
  `CVC_tot_2` int(255) NOT NULL,
  `APR_cat_2` int(255) NOT NULL,
  `APR_ex_2` int(255) NOT NULL,
  `APR_tot_2` int(255) NOT NULL,
  `DGV_cat_2` int(255) NOT NULL,
  `DGV_ex_2` int(255) NOT NULL,
  `DGV_tot_2` int(255) NOT NULL,
  `PHY_cat_2` int(255) NOT NULL,
  `PHY_ex_2` int(255) NOT NULL,
  `PHY_tot_2` int(255) NOT NULL,
  `FRANCH_cat_2` int(255) NOT NULL,
  `FRANCH_ex_2` int(255) NOT NULL,
  `FRANCH_tot_2` int(255) NOT NULL,
  `UI_cat_2` int(255) NOT NULL,
  `UI_ex_2` int(255) NOT NULL,
  `UI_tot_2` int(255) NOT NULL,
  `ENT_cat_3` int(255) NOT NULL,
  `ENT_ex_3` int(255) NOT NULL,
  `ENT_tot_3` int(255) NOT NULL,
  `CVC_cat_3` int(255) NOT NULL,
  `CVC_ex_3` int(255) NOT NULL,
  `CVC_tot_3` int(255) NOT NULL,
  `COMP_cat_3` int(255) NOT NULL,
  `COMP_ex_3` int(255) NOT NULL,
  `COMP_tot_3` int(255) NOT NULL,
  `COM_cat_3` int(255) NOT NULL,
  `COM_ex_3` int(255) NOT NULL,
  `COM_tot_3` int(255) NOT NULL,
  `CITZ_cat_3` int(255) NOT NULL,
  `CITZ_ex_3` int(255) NOT NULL,
  `CITZ_tot_3` int(255) NOT NULL,
  `GRAPHIC_cat_3` int(255) NOT NULL,
  `GRAPHIC_ex_3` int(255) NOT NULL,
  `GRAPHIC_tot_3` int(255) NOT NULL,
  `KINY_cat_3` int(255) NOT NULL,
  `KINY_ex_3` int(255) NOT NULL,
  `KINY_tot_3` int(255) NOT NULL,
  `ENG_cat_3` int(255) NOT NULL,
  `ENG_ex_3` int(255) NOT NULL,
  `ENG_tot_3` int(255) NOT NULL,
  `MATHS_cat_3` int(255) NOT NULL,
  `MATHS_ex_3` int(255) NOT NULL,
  `MATHS_tot_3` int(255) NOT NULL,
  `JS_cat_3` int(255) NOT NULL,
  `JS_ex_3` int(255) NOT NULL,
  `JS_tot_3` int(255) NOT NULL,
  `INT_cat_3` int(255) NOT NULL,
  `INT_ex_3` int(255) NOT NULL,
  `INT_tot_3` int(255) NOT NULL,
  `APR_cat_3` int(255) NOT NULL,
  `APR_ex_3` int(255) NOT NULL,
  `APR_tot_3` int(255) NOT NULL,
  `DGV_cat_3` int(255) NOT NULL,
  `DGV_ex_3` int(255) NOT NULL,
  `DGV_tot_3` int(255) NOT NULL,
  `PHY_cat_3` int(255) NOT NULL,
  `PHY_ex_3` int(255) NOT NULL,
  `PHY_tot_3` int(255) NOT NULL,
  `FRANCH_cat_3` int(255) NOT NULL,
  `FRANCH_ex_3` int(255) NOT NULL,
  `FRANCH_tot_3` int(255) NOT NULL,
  `UI_cat_3` int(255) NOT NULL,
  `UI_ex_3` int(255) NOT NULL,
  `UI_tot_3` int(255) NOT NULL,
  `BEC_cat_1` int(255) NOT NULL,
  `BEC_ex_1` int(255) NOT NULL,
  `BEC_tot_1` int(255) NOT NULL,
  `BEC_cat_2` int(255) NOT NULL,
  `BEC_ex_2` int(255) NOT NULL,
  `BEC_tot_2` int(255) NOT NULL,
  `BEC_cat_3` int(255) NOT NULL,
  `BEC_ex_3` int(255) NOT NULL,
  `BEC_tot_3` int(255) NOT NULL,
  `ATD_cat_1` int(255) NOT NULL,
  `ATD_ex_1` int(255) NOT NULL,
  `ATD_tot_1` int(255) NOT NULL,
  `ATD_cat_2` int(255) NOT NULL,
  `ATD_ex_2` int(255) NOT NULL,
  `ATD_tot_2` int(255) NOT NULL,
  `ATD_cat_3` int(255) NOT NULL,
  `ATD_ex_3` int(255) NOT NULL,
  `ATD_tot_3` int(255) NOT NULL,
  `ANF_cat_1` int(255) NOT NULL,
  `ANF_ex_1` int(255) NOT NULL,
  `ANF_tot_1` int(255) NOT NULL,
  `MATHS_cat_2` int(255) NOT NULL,
  `MATHS_ex_2` int(255) NOT NULL,
  `MATHS_tot_2` int(255) NOT NULL,
  `DCS_cat_2` int(255) NOT NULL,
  `DCS_ex_2` int(255) NOT NULL,
  `DCS_tot_2` int(255) NOT NULL,
  `DCS_cat_3` int(255) NOT NULL,
  `DCS_ex_3` int(255) NOT NULL,
  `DCS_tot_3` int(255) NOT NULL,
  `ACS_cat_2` int(255) NOT NULL,
  `ACS_ex_2` int(255) NOT NULL,
  `ACS_tot_2` int(255) NOT NULL,
  `ACS_cat_3` int(255) NOT NULL,
  `ACS_ex_3` int(255) NOT NULL,
  `ACS_tot_3` int(255) NOT NULL,
  `MCS_cat_2` int(255) NOT NULL,
  `MCS_ex_2` int(255) NOT NULL,
  `MCS_tot_2` int(255) NOT NULL,
  `MCS_cat_3` int(255) NOT NULL,
  `MCS_ex_3` int(255) NOT NULL,
  `MCS_tot_3` int(255) NOT NULL,
  `ANF_cat_2` int(255) NOT NULL,
  `ANF_ex_2` int(255) NOT NULL,
  `ANF_tot_2` int(255) NOT NULL,
  `ANF_cat_3` int(255) NOT NULL,
  `ANF_ex_3` int(255) NOT NULL,
  `ANF_tot_3` int(255) NOT NULL,
  `ABE_cat_1` int(255) NOT NULL,
  `ABE_ex_1` int(255) NOT NULL,
  `ABE_tot_1` int(255) NOT NULL,
  `ABE_cat_2` int(255) NOT NULL,
  `ABE_ex_2` int(255) NOT NULL,
  `ABE_tot_2` int(255) NOT NULL,
  `AEF_cat_1` int(255) NOT NULL,
  `AEF_ex_1` int(255) NOT NULL,
  `AEF_tot_1` int(255) NOT NULL,
  `FRANCH_cat_1` int(255) NOT NULL,
  `FRANCH_ex_1` int(255) NOT NULL,
  `FRANCH_tot_1` int(255) NOT NULL,
  `DB_cat_1` int(255) NOT NULL,
  `DB_ex_1` int(255) NOT NULL,
  `DB_tot_1` int(255) NOT NULL,
  `DB_cat_2` int(255) NOT NULL,
  `DB_ex_2` int(255) NOT NULL,
  `DB_tot_2` int(255) NOT NULL,
  `DB_cat_3` int(255) NOT NULL,
  `DB_ex_3` int(255) NOT NULL,
  `DB_tot_3` int(255) NOT NULL,
  `DS_cat_1` int(255) NOT NULL,
  `DS_ex_1` int(255) NOT NULL,
  `DS_tot_1` int(255) NOT NULL,
  `DS_cat_2` int(255) NOT NULL,
  `DS_ex_2` int(255) NOT NULL,
  `DS_tot_2` int(255) NOT NULL,
  `DS_cat_3` int(255) NOT NULL,
  `DS_ex_3` int(255) NOT NULL,
  `DS_tot_3` int(255) NOT NULL,
  `WA_cat_2` int(255) NOT NULL,
  `WA_ex_2` int(255) NOT NULL,
  `WA_tot_2` int(255) NOT NULL,
  `BA_cat_1` int(255) NOT NULL,
  `BA_ex_1` int(255) NOT NULL,
  `BA_tot_1` int(255) NOT NULL,
  `BA_cat_2` int(255) NOT NULL,
  `BA_ex_2` int(255) NOT NULL,
  `BA_tot_2` int(255) NOT NULL,
  `BA_cat_3` int(255) NOT NULL,
  `BA_ex_3` int(255) NOT NULL,
  `BA_tot_3` int(255) NOT NULL,
  `AWBR_cat_1` int(255) NOT NULL,
  `AWBR_ex_1` int(255) NOT NULL,
  `AWBR_tot_1` int(255) NOT NULL,
  `AFMA_cat_1` int(255) NOT NULL,
  `AFMA_ex_1` int(255) NOT NULL,
  `AFMA_tot_1` int(255) NOT NULL,
  `AMM_cat_1` int(255) NOT NULL,
  `AMM_ex_1` int(255) NOT NULL,
  `AMM_tot_1` int(255) NOT NULL,
  `AAF_cat_1` int(255) NOT NULL,
  `AAF_ex_1` int(255) NOT NULL,
  `AAF_tot_1` int(255) NOT NULL,
  `APF_cat_1` int(255) NOT NULL,
  `APF_ex_1` int(255) NOT NULL,
  `APF_tot_1` int(255) NOT NULL,
  `DBD_cat_1` int(255) NOT NULL,
  `DBD_ex_1` int(255) NOT NULL,
  `DBD_tot_1` int(255) NOT NULL,
  `IDW_cat_1` int(255) NOT NULL,
  `IDW_ex_1` int(255) NOT NULL,
  `IDW_tot_1` int(255) NOT NULL,
  `ACS_cat_1` int(255) NOT NULL,
  `ACS_ex_1` int(255) NOT NULL,
  `ACS_tot_1` int(255) NOT NULL,
  `PQCS_cat_1` int(255) NOT NULL,
  `PQCS_ex_1` int(255) NOT NULL,
  `PQCS_tot_1` int(255) NOT NULL,
  `ISHE_cat_1` int(255) NOT NULL,
  `ISHE_ex_1` int(255) NOT NULL,
  `ISHE_tot_1` int(255) NOT NULL,
  `DBP_cat_1` int(255) NOT NULL,
  `DBP_ex_1` int(255) NOT NULL,
  `DBP_tot_1` int(255) NOT NULL,
  `WA_cat_3` int(255) NOT NULL,
  `WA_ex_3` int(255) NOT NULL,
  `WA_tot_3` int(255) NOT NULL,
  `AWBR_cat_2` int(255) NOT NULL,
  `AWBR_ex_2` int(255) NOT NULL,
  `AWBR_tot_2` int(255) NOT NULL,
  `AFMA_cat_2` int(255) NOT NULL,
  `AFMA_ex_2` int(255) NOT NULL,
  `AFMA_tot_2` int(255) NOT NULL,
  `AMM_cat_2` int(255) NOT NULL,
  `AMM_ex_2` int(255) NOT NULL,
  `AMM_tot_2` int(255) NOT NULL,
  `AAF_cat_2` int(255) NOT NULL,
  `AAF_ex_2` int(255) NOT NULL,
  `AAF_tot_2` int(255) NOT NULL,
  `APF_cat_2` int(255) NOT NULL,
  `APF_ex_2` int(255) NOT NULL,
  `APF_tot_2` int(255) NOT NULL,
  `DBD_cat_2` int(255) NOT NULL,
  `DBD_ex_2` int(255) NOT NULL,
  `DBD_tot_2` int(255) NOT NULL,
  `IDW_cat_2` int(255) NOT NULL,
  `IDW_ex_2` int(255) NOT NULL,
  `IDW_tot_2` int(255) NOT NULL,
  `PQCS_cat_2` int(255) NOT NULL,
  `PQCS_ex_2` int(255) NOT NULL,
  `PQCS_tot_2` int(255) NOT NULL,
  `DBP_cat_2` int(255) NOT NULL,
  `DBP_ex_2` int(255) NOT NULL,
  `DBP_tot_2` int(255) NOT NULL,
  `DVW_cat_2` int(255) NOT NULL,
  `DVW_ex_2` int(255) NOT NULL,
  `DVW_tot_2` int(255) NOT NULL,
  `DPW_cat_2` int(255) NOT NULL,
  `DPW_ex_2` int(255) NOT NULL,
  `DPW_tot_2` int(255) NOT NULL,
  `MW_cat_2` int(255) NOT NULL,
  `MW_ex_2` int(255) NOT NULL,
  `MW_tot_2` int(255) NOT NULL,
  `DVW_cat_3` int(255) NOT NULL,
  `DVW_ex_3` int(255) NOT NULL,
  `DVW_tot_3` int(255) NOT NULL,
  `DPW_cat_3` int(255) NOT NULL,
  `DPW_ex_3` int(255) NOT NULL,
  `DPW_tot_3` int(255) NOT NULL,
  `MW_cat_3` int(255) NOT NULL,
  `MW_ex_3` int(255) NOT NULL,
  `MW_tot_3` int(255) NOT NULL,
  `AFMA_cat_3` int(255) NOT NULL,
  `AFMA_ex_3` int(255) NOT NULL,
  `AFMA_tot_3` int(255) NOT NULL,
  `AMM_cat_3` int(255) NOT NULL,
  `AMM_ex_3` int(255) NOT NULL,
  `AMM_tot_3` int(255) NOT NULL,
  `PQCS_cat_3` int(255) NOT NULL,
  `PQCS_ex_3` int(255) NOT NULL,
  `PQCS_tot_3` int(255) NOT NULL,
  `DBP_cat_3` int(255) NOT NULL,
  `DBP_ex_3` int(255) NOT NULL,
  `DBP_tot_3` int(255) NOT NULL,
  `SSI_cat_2` int(255) NOT NULL,
  `SSI_ex_2` int(255) NOT NULL,
  `SSI_tot_2` int(255) NOT NULL,
  `SSI_cat_3` int(255) NOT NULL,
  `SSI_ex_3` int(255) NOT NULL,
  `SSI_tot_3` int(255) NOT NULL,
  `SAD_cat_1` int(255) NOT NULL,
  `SAD_ex_1` int(255) NOT NULL,
  `SAD_tot_1` int(255) NOT NULL,
  `SAD_cat_2` int(255) NOT NULL,
  `SAD_ex_2` int(255) NOT NULL,
  `SAD_tot_2` int(255) NOT NULL,
  `SAD_cat_3` int(255) NOT NULL,
  `SAD_ex_3` int(255) NOT NULL,
  `SAD_tot_3` int(255) NOT NULL,
  `SECUREDB_cat_1` int(255) NOT NULL,
  `SECUREDB_ex_1` int(255) NOT NULL,
  `SECUREDB_tot_1` int(255) NOT NULL,
  `SECUREDB_cat_2` int(255) NOT NULL,
  `SECUREDB_ex_2` int(255) NOT NULL,
  `SECUREDB_tot_2` int(255) NOT NULL,
  `SECUREDB_cat_3` int(255) NOT NULL,
  `SECUREDB_ex_3` int(255) NOT NULL,
  `SECUREDB_tot_3` int(255) NOT NULL,
  `DW_cat_1` int(255) NOT NULL,
  `DW_ex_1` int(255) NOT NULL,
  `DW_tot_1` int(255) NOT NULL,
  `DW_cat_2` int(255) NOT NULL,
  `DW_ex_2` int(255) NOT NULL,
  `DW_tot_2` int(255) NOT NULL,
  `DW_cat_3` int(255) NOT NULL,
  `DW_ex_3` int(255) NOT NULL,
  `DW_tot_3` int(255) NOT NULL,
  `STAT_cat_1` int(255) NOT NULL,
  `STAT_ex_1` int(255) NOT NULL,
  `STAT_tot_1` int(255) NOT NULL,
  `STAT_cat_2` int(255) NOT NULL,
  `STAT_ex_2` int(255) NOT NULL,
  `STAT_tot_2` int(255) NOT NULL,
  `STAT_cat_3` int(255) NOT NULL,
  `STAT_ex_3` int(255) NOT NULL,
  `STAT_tot_3` int(255) NOT NULL,
  `KINY_cat_1` int(255) NOT NULL,
  `KINY_ex_1` int(255) NOT NULL,
  `KINY_tot_1` int(255) NOT NULL,
  `SDE_cat_1` int(255) NOT NULL,
  `SDE_ex_1` int(255) NOT NULL,
  `SDE_tot_1` int(255) NOT NULL,
  `SDE_cat_2` int(255) NOT NULL,
  `SDE_ex_2` int(255) NOT NULL,
  `SDE_tot_2` int(255) NOT NULL,
  `SDE_cat_3` int(255) NOT NULL,
  `SDE_ex_3` int(255) NOT NULL,
  `SDE_tot_3` int(255) NOT NULL,
  `ICT_cat_1` int(255) NOT NULL,
  `ICT_ex_1` int(255) NOT NULL,
  `ICT_tot_1` int(255) NOT NULL,
  `ICT_cat_2` int(255) NOT NULL,
  `ICT_ex_2` int(255) NOT NULL,
  `ICT_tot_2` int(255) NOT NULL,
  `ICT_cat_3` int(255) NOT NULL,
  `ICT_ex_3` int(255) NOT NULL,
  `ICT_tot_3` int(255) NOT NULL,
  `BUSINESS_cat_1` int(255) NOT NULL,
  `BUSINESS_ex_1` int(255) NOT NULL,
  `BUSINESS_tot_1` int(255) NOT NULL,
  `BUSINESS_cat_2` int(255) NOT NULL,
  `BUSINESS_ex_2` int(255) NOT NULL,
  `BUSINESS_tot_2` int(255) NOT NULL,
  `BUSINESS_cat_3` int(255) NOT NULL,
  `BUSINESS_ex_3` int(255) NOT NULL,
  `BUSINESS_tot_3` int(255) NOT NULL,
  `PE_cat_1` int(255) NOT NULL,
  `PE_ex_1` int(255) NOT NULL,
  `PE_tot_1` int(255) NOT NULL,
  `PE_cat_2` int(255) NOT NULL,
  `PE_ex_2` int(255) NOT NULL,
  `PE_tot_2` int(255) NOT NULL,
  `PE_cat_3` int(255) NOT NULL,
  `PE_ex_3` int(255) NOT NULL,
  `PE_tot_3` int(255) NOT NULL,
  `PBPP_cat_1` int(255) NOT NULL,
  `PBPP_ex_1` int(255) NOT NULL,
  `PBPP_tot_1` int(255) NOT NULL,
  `PBCHC_cat_1` int(255) NOT NULL,
  `PBCHC_ex_1` int(255) NOT NULL,
  `PBCHC_tot_1` int(255) NOT NULL,
  `PCHSSS_cat_1` int(255) NOT NULL,
  `PCHSSS_ex_1` int(255) NOT NULL,
  `PCHSSS_tot_1` int(255) NOT NULL,
  `PBMPFS_cat_1` int(255) NOT NULL,
  `PBMPFS_ex_1` int(255) NOT NULL,
  `PBMPFS_tot_1` int(255) NOT NULL,
  `PFVSP_cat_1` int(255) NOT NULL,
  `PFVSP_ex_1` int(255) NOT NULL,
  `PFVSP_tot_1` int(255) NOT NULL,
  `PFHS_cat_1` int(255) NOT NULL,
  `PFHS_ex_1` int(255) NOT NULL,
  `PFHS_tot_1` int(255) NOT NULL,
  `COMM_cat_1` int(255) NOT NULL,
  `COMM_ex_1` int(255) NOT NULL,
  `COMM_tot_1` int(255) NOT NULL,
  `BMA_cat_1` int(255) NOT NULL,
  `BMA_ex_1` int(255) NOT NULL,
  `BMA_tot_1` int(255) NOT NULL,
  `FRENCH_cat_1` int(255) NOT NULL,
  `FRENCH_ex_1` int(255) NOT NULL,
  `FRENCH_tot_1` int(255) NOT NULL,
  `KISWA_cat_1` int(255) NOT NULL,
  `KISWA_ex_1` int(255) NOT NULL,
  `KISWA_tot_1` int(255) NOT NULL,
  `PBPP_cat_2` int(255) NOT NULL,
  `PBPP_ex_2` int(255) NOT NULL,
  `PBPP_tot_2` int(255) NOT NULL,
  `PBCHC_cat_2` int(255) NOT NULL,
  `PBCHC_ex_2` int(255) NOT NULL,
  `PBCHC_tot_2` int(255) NOT NULL,
  `PCHSSS_cat_2` int(255) NOT NULL,
  `PCHSSS_ex_2` int(255) NOT NULL,
  `PCHSSS_tot_2` int(255) NOT NULL,
  `PBMPFS_cat_2` int(255) NOT NULL,
  `PBMPFS_ex_2` int(255) NOT NULL,
  `PBMPFS_tot_2` int(255) NOT NULL,
  `PFVSP_cat_2` int(255) NOT NULL,
  `PFVSP_ex_2` int(255) NOT NULL,
  `PFVSP_tot_2` int(255) NOT NULL,
  `COMM_cat_2` int(255) NOT NULL,
  `COMM_ex_2` int(255) NOT NULL,
  `COMM_tot_2` int(255) NOT NULL,
  `BMA_cat_2` int(255) NOT NULL,
  `BMA_ex_2` int(255) NOT NULL,
  `BMA_tot_2` int(255) NOT NULL,
  `FRENCH_cat_2` int(255) NOT NULL,
  `FRENCH_ex_2` int(255) NOT NULL,
  `FRENCH_tot_2` int(255) NOT NULL,
  `KISWA_cat_2` int(255) NOT NULL,
  `KISWA_ex_2` int(255) NOT NULL,
  `KISWA_tot_2` int(255) NOT NULL,
  `PCHSSS_cat_3` int(255) NOT NULL,
  `PCHSSS_ex_3` int(255) NOT NULL,
  `PCHSSS_tot_3` int(255) NOT NULL,
  `PBMPFS_cat_3` int(255) NOT NULL,
  `PBMPFS_ex_3` int(255) NOT NULL,
  `PBMPFS_tot_3` int(255) NOT NULL,
  `BMA_cat_3` int(255) NOT NULL,
  `BMA_ex_3` int(255) NOT NULL,
  `BMA_tot_3` int(255) NOT NULL,
  `FRENCH_cat_3` int(255) NOT NULL,
  `FRENCH_ex_3` int(255) NOT NULL,
  `FRENCH_tot_3` int(255) NOT NULL,
  `KISWA_cat_3` int(255) NOT NULL,
  `KISWA_ex_3` int(255) NOT NULL,
  `KISWA_tot_3` int(255) NOT NULL,
  `MCA_cat_1` int(255) NOT NULL,
  `MCA_ex_1` int(255) NOT NULL,
  `MCA_tot_1` int(255) NOT NULL,
  `MPCR_cat_1` int(255) NOT NULL,
  `MPCR_ex_1` int(255) NOT NULL,
  `MPCR_tot_1` int(255) NOT NULL,
  `PAPR_cat_1` int(255) NOT NULL,
  `PAPR_ex_1` int(255) NOT NULL,
  `PAPR_tot_1` int(255) NOT NULL,
  `MJ_cat_1` int(255) NOT NULL,
  `MJ_ex_1` int(255) NOT NULL,
  `MJ_tot_1` int(255) NOT NULL,
  `MSRA_cat_1` int(255) NOT NULL,
  `MSRA_ex_1` int(255) NOT NULL,
  `MSRA_tot_1` int(255) NOT NULL,
  `PLT_cat_1` int(255) NOT NULL,
  `PLT_ex_1` int(255) NOT NULL,
  `PLT_tot_1` int(255) NOT NULL,
  `MRFD_cat_1` int(255) NOT NULL,
  `MRFD_ex_1` int(255) NOT NULL,
  `MRFD_tot_1` int(255) NOT NULL,
  `PBR_cat_1` int(255) NOT NULL,
  `PBR_ex_1` int(255) NOT NULL,
  `PBR_tot_1` int(255) NOT NULL,
  `MIS_cat_1` int(255) NOT NULL,
  `MIS_ex_1` int(255) NOT NULL,
  `MIS_tot_1` int(255) NOT NULL,
  `PBCRI_cat_1` int(255) NOT NULL,
  `PBCRI_ex_1` int(255) NOT NULL,
  `PBCRI_tot_1` int(255) NOT NULL,
  `FBP_cat_1` int(255) NOT NULL,
  `FBP_ex_1` int(255) NOT NULL,
  `FBP_tot_1` int(255) NOT NULL,
  `MCAS_cat_1` int(255) NOT NULL,
  `MCAS_ex_1` int(255) NOT NULL,
  `MCAS_tot_1` int(255) NOT NULL,
  `ABPC_cat_1` int(255) NOT NULL,
  `ABPC_ex_1` int(255) NOT NULL,
  `ABPC_tot_1` int(255) NOT NULL,
  `AMAF_cat_1` int(255) NOT NULL,
  `AMAF_ex_1` int(255) NOT NULL,
  `AMAF_tot_1` int(255) NOT NULL,
  `AAP_cat_2` int(255) NOT NULL,
  `AAP_ex_2` int(255) NOT NULL,
  `AAP_tot_2` int(255) NOT NULL,
  `PBR_cat_2` int(255) NOT NULL,
  `PBR_ex_2` int(255) NOT NULL,
  `PBR_tot_2` int(255) NOT NULL,
  `MIS_cat_2` int(255) NOT NULL,
  `MIS_ex_2` int(255) NOT NULL,
  `MIS_tot_2` int(255) NOT NULL,
  `PTBP_cat_2` int(255) NOT NULL,
  `PTBP_ex_2` int(255) NOT NULL,
  `PTBP_tot_2` int(255) NOT NULL,
  `MCAS_cat_2` int(255) NOT NULL,
  `MCAS_ex_2` int(255) NOT NULL,
  `MCAS_tot_2` int(255) NOT NULL,
  `_cat_2` int(255) NOT NULL,
  `_ex_2` int(255) NOT NULL,
  `_tot_2` int(255) NOT NULL,
  `FSP_cat_1` int(255) NOT NULL,
  `FSP_ex_1` int(255) NOT NULL,
  `FSP_tot_1` int(255) NOT NULL,
  `PAS_cat_3` int(255) NOT NULL,
  `PAS_ex_3` int(255) NOT NULL,
  `PAS_tot_3` int(255) NOT NULL,
  `FAP_cat_1` int(255) NOT NULL,
  `FAP_ex_1` int(255) NOT NULL,
  `FAP_tot_1` int(255) NOT NULL,
  `OKS_cat_1` int(255) NOT NULL,
  `OKS_ex_1` int(255) NOT NULL,
  `OKS_tot_1` int(255) NOT NULL,
  `OKS_cat_2` int(255) NOT NULL,
  `OKS_ex_2` int(255) NOT NULL,
  `OKS_tot_2` int(255) NOT NULL,
  `RKS_cat_2` int(255) NOT NULL,
  `RKS_ex_2` int(255) NOT NULL,
  `RKS_tot_2` int(255) NOT NULL,
  `RKS_cat_3` int(255) NOT NULL,
  `RKS_ex_3` int(255) NOT NULL,
  `RKS_tot_3` int(255) NOT NULL,
  `MKS_cat_1` int(255) NOT NULL,
  `MKS_ex_1` int(255) NOT NULL,
  `MKS_tot_1` int(255) NOT NULL,
  `MKS_cat_2` int(255) NOT NULL,
  `MKS_ex_2` int(255) NOT NULL,
  `MKS_tot_2` int(255) NOT NULL,
  `MKS_cat_3` int(255) NOT NULL,
  `MKS_ex_3` int(255) NOT NULL,
  `MKS_tot_3` int(255) NOT NULL,
  `PSD_cat_2` int(255) NOT NULL,
  `PSD_ex_2` int(255) NOT NULL,
  `PSD_tot_2` int(255) NOT NULL,
  `PSD_cat_3` int(255) NOT NULL,
  `PSD_ex_3` int(255) NOT NULL,
  `PSD_tot_3` int(255) NOT NULL,
  `COS_cat_1` int(255) NOT NULL,
  `COS_ex_1` int(255) NOT NULL,
  `COS_tot_1` int(255) NOT NULL,
  `COS_cat_2` int(255) NOT NULL,
  `COS_ex_2` int(255) NOT NULL,
  `COS_tot_2` int(255) NOT NULL,
  `PTD_cat_2` int(255) NOT NULL,
  `PTD_ex_2` int(255) NOT NULL,
  `PTD_tot_2` int(255) NOT NULL,
  `PTD_cat_3` int(255) NOT NULL,
  `PTD_ex_3` int(255) NOT NULL,
  `PTD_tot_3` int(255) NOT NULL,
  `AC_cat_1` int(255) NOT NULL,
  `AC_ex_1` int(255) NOT NULL,
  `AC_tot_1` int(255) NOT NULL,
  `AC_cat_2` int(255) NOT NULL,
  `AC_ex_2` int(255) NOT NULL,
  `AC_tot_2` int(255) NOT NULL,
  `AC_cat_3` int(255) NOT NULL,
  `AC_ex_3` int(255) NOT NULL,
  `AC_tot_3` int(255) NOT NULL,
  `PMS_cat_1` int(255) NOT NULL,
  `PMS_ex_1` int(255) NOT NULL,
  `PMS_tot_1` int(255) NOT NULL,
  `PMS_cat_2` int(255) NOT NULL,
  `PMS_ex_2` int(255) NOT NULL,
  `PMS_tot_2` int(255) NOT NULL,
  `PMS_cat_3` int(255) NOT NULL,
  `PMS_ex_3` int(255) NOT NULL,
  `PMS_tot_3` int(255) NOT NULL,
  `PFT_cat_1` int(255) NOT NULL,
  `PFT_ex_1` int(255) NOT NULL,
  `PFT_tot_1` int(255) NOT NULL,
  `PFT_cat_2` int(255) NOT NULL,
  `PFT_ex_2` int(255) NOT NULL,
  `PFT_tot_2` int(255) NOT NULL,
  `PFT_cat_3` int(255) NOT NULL,
  `PFT_ex_3` int(255) NOT NULL,
  `PFT_tot_3` int(255) NOT NULL,
  `DBK_cat_1` int(255) NOT NULL,
  `DBK_ex_1` int(255) NOT NULL,
  `DBK_tot_1` int(255) NOT NULL,
  `DBK_cat_2` int(255) NOT NULL,
  `DBK_ex_2` int(255) NOT NULL,
  `DBK_tot_2` int(255) NOT NULL,
  `DBK_cat_3` int(255) NOT NULL,
  `DBK_ex_3` int(255) NOT NULL,
  `DBK_tot_3` int(255) NOT NULL,
  `LEE_cat_1` int(255) NOT NULL,
  `LEE_ex_1` int(255) NOT NULL,
  `LEE_tot_1` int(255) NOT NULL,
  `LEE_cat_2` int(255) NOT NULL,
  `LEE_ex_2` int(255) NOT NULL,
  `LEE_tot_2` int(255) NOT NULL,
  `LEE_cat_3` int(255) NOT NULL,
  `LEE_ex_3` int(255) NOT NULL,
  `LEE_tot_3` int(255) NOT NULL,
  `SSD_cat_1` int(255) NOT NULL,
  `SSD_ex_1` int(255) NOT NULL,
  `SSD_tot_1` int(255) NOT NULL,
  `SSD_cat_2` int(255) NOT NULL,
  `SSD_ex_2` int(255) NOT NULL,
  `SSD_tot_2` int(255) NOT NULL,
  `SSD_cat_3` int(255) NOT NULL,
  `SSD_ex_3` int(255) NOT NULL,
  `SSD_tot_3` int(255) NOT NULL,
  `BSS_cat_1` int(255) NOT NULL,
  `BSS_ex_1` int(255) NOT NULL,
  `BSS_tot_1` int(255) NOT NULL,
  `BSS_cat_2` int(255) NOT NULL,
  `BSS_ex_2` int(255) NOT NULL,
  `BSS_tot_2` int(255) NOT NULL,
  `BSS_cat_3` int(255) NOT NULL,
  `BSS_ex_3` int(255) NOT NULL,
  `BSS_tot_3` int(255) NOT NULL,
  `FRA_cat_1` int(255) NOT NULL,
  `FRA_ex_1` int(255) NOT NULL,
  `FRA_tot_1` int(255) NOT NULL,
  `FRA_cat_2` int(255) NOT NULL,
  `FRA_ex_2` int(255) NOT NULL,
  `FRA_tot_2` int(255) NOT NULL,
  `FRA_cat_3` int(255) NOT NULL,
  `FRA_ex_3` int(255) NOT NULL,
  `FRA_tot_3` int(255) NOT NULL,
  `KSW_cat_1` int(255) NOT NULL,
  `KSW_ex_1` int(255) NOT NULL,
  `KSW_tot_1` int(255) NOT NULL,
  `KSW_cat_2` int(255) NOT NULL,
  `KSW_ex_2` int(255) NOT NULL,
  `KSW_tot_2` int(255) NOT NULL,
  `KSW_cat_3` int(255) NOT NULL,
  `KSW_ex_3` int(255) NOT NULL,
  `KSW_tot_3` int(255) NOT NULL,
  `APE_cat_1` int(255) NOT NULL,
  `APE_ex_1` int(255) NOT NULL,
  `APE_tot_1` int(255) NOT NULL,
  `APE_cat_2` int(255) NOT NULL,
  `APE_ex_2` int(255) NOT NULL,
  `APE_tot_2` int(255) NOT NULL,
  `APE_cat_3` int(255) NOT NULL,
  `APE_ex_3` int(255) NOT NULL,
  `APE_tot_3` int(255) NOT NULL,
  `MPS_cat_1` int(255) NOT NULL,
  `MPS_ex_1` int(255) NOT NULL,
  `MPS_tot_1` int(255) NOT NULL,
  `CCA_cat_1` int(255) NOT NULL,
  `CCA_ex_1` int(255) NOT NULL,
  `CCA_tot_1` int(255) NOT NULL,
  `CREDIT_cat_1` int(255) NOT NULL,
  `CREDIT_ex_1` int(255) NOT NULL,
  `CREDIT_tot_1` int(255) NOT NULL,
  `BUDGET_cat_1` int(255) NOT NULL,
  `BUDGET_ex_1` int(255) NOT NULL,
  `BUDGET_tot_1` int(255) NOT NULL,
  `PAY_cat_1` int(255) NOT NULL,
  `PAY_ex_1` int(255) NOT NULL,
  `PAY_tot_1` int(255) NOT NULL,
  `TAX_cat_2` int(255) NOT NULL,
  `TAX_ex_2` int(255) NOT NULL,
  `TAX_tot_2` int(255) NOT NULL,
  `TAX_cat_3` int(255) NOT NULL,
  `TAX_ex_3` int(255) NOT NULL,
  `TAX_tot_3` int(255) NOT NULL,
  `PFS_cat_2` int(255) NOT NULL,
  `PFS_ex_2` int(255) NOT NULL,
  `PFS_tot_2` int(255) NOT NULL,
  `PFS_cat_3` int(255) NOT NULL,
  `PFS_ex_3` int(255) NOT NULL,
  `PFS_tot_3` int(255) NOT NULL,
  `APB_cat_1` int(255) NOT NULL,
  `APB_ex_1` int(255) NOT NULL,
  `APB_tot_1` int(255) NOT NULL,
  `ECO_cat_2` int(255) NOT NULL,
  `ECO_ex_2` int(255) NOT NULL,
  `ECO_tot_2` int(255) NOT NULL,
  `EDO_cat_3` int(255) NOT NULL,
  `EDO_ex_3` int(255) NOT NULL,
  `EDO_tot_3` int(255) NOT NULL,
  `VAT_cat_2` int(255) NOT NULL,
  `VAT_ex_2` int(255) NOT NULL,
  `VAT_tot_2` int(255) NOT NULL,
  `VAT_cat_3` int(255) NOT NULL,
  `VAT_ex_3` int(255) NOT NULL,
  `VAT_tot_3` int(255) NOT NULL,
  `APA_cat_3` int(255) NOT NULL,
  `APA_ex_3` int(255) NOT NULL,
  `APA_tot_3` int(255) NOT NULL,
  `_cat_3` int(255) NOT NULL,
  `_ex_3` int(255) NOT NULL,
  `_tot_3` int(255) NOT NULL,
  `KIS_cat_3` int(255) NOT NULL,
  `KIS_ex_3` int(255) NOT NULL,
  `KIS_tot_3` int(255) NOT NULL,
  `AMAF_cat_3` int(255) NOT NULL,
  `AMAF_ex_3` int(255) NOT NULL,
  `AMAF_tot_3` int(255) NOT NULL,
  `PSP_cat_1` int(255) NOT NULL,
  `PSP_ex_1` int(255) NOT NULL,
  `PSP_tot_1` int(255) NOT NULL,
  `OSI_cat_1` int(255) NOT NULL,
  `OSI_ex_1` int(255) NOT NULL,
  `OSI_tot_1` int(255) NOT NULL,
  `MSR_cat_2` int(255) NOT NULL,
  `MSR_ex_2` int(255) NOT NULL,
  `MSR_tot_2` int(255) NOT NULL,
  `MSR_cat_3` int(255) NOT NULL,
  `MSR_ex_3` int(255) NOT NULL,
  `MSR_tot_3` int(255) NOT NULL,
  `AGC_cat_1` int(255) NOT NULL,
  `AGC_ex_1` int(255) NOT NULL,
  `AGC_tot_1` int(255) NOT NULL,
  `AGC_cat_2` int(255) NOT NULL,
  `AGC_ex_2` int(255) NOT NULL,
  `AGC_tot_2` int(255) NOT NULL,
  `AGC_cat_3` int(255) NOT NULL,
  `AGC_ex_3` int(255) NOT NULL,
  `AGC_tot_3` int(255) NOT NULL,
  `AAS_cat_1` int(255) NOT NULL,
  `AAS_ex_1` int(255) NOT NULL,
  `AAS_tot_1` int(255) NOT NULL,
  `AAS_cat_2` int(255) NOT NULL,
  `AAS_ex_2` int(255) NOT NULL,
  `AAS_tot_2` int(255) NOT NULL,
  `AAS_cat_3` int(255) NOT NULL,
  `AAS_ex_3` int(255) NOT NULL,
  `AAS_tot_3` int(255) NOT NULL,
  `BKE_cat_1` int(255) NOT NULL,
  `BKE_ex_1` int(255) NOT NULL,
  `BKE_tot_1` int(255) NOT NULL,
  `BKE_cat_2` int(255) NOT NULL,
  `BKE_ex_2` int(255) NOT NULL,
  `BKE_tot_2` int(255) NOT NULL,
  `BKE_cat_3` int(255) NOT NULL,
  `BKE_ex_3` int(255) NOT NULL,
  `BKE_tot_3` int(255) NOT NULL,
  `MW_cat_1` int(255) NOT NULL,
  `MW_ex_1` int(255) NOT NULL,
  `MW_tot_1` int(255) NOT NULL,
  `DTP_cat_1` int(255) NOT NULL,
  `DTP_ex_1` int(255) NOT NULL,
  `DTP_tot_1` int(255) NOT NULL,
  `DTP_cat_2` int(255) NOT NULL,
  `DTP_ex_2` int(255) NOT NULL,
  `DTP_tot_2` int(255) NOT NULL,
  `DTP_cat_3` int(255) NOT NULL,
  `DTP_ex_3` int(255) NOT NULL,
  `DTP_tot_3` int(255) NOT NULL,
  `WDG_cat_1` int(255) NOT NULL,
  `WDG_ex_1` int(255) NOT NULL,
  `WDG_tot_1` int(255) NOT NULL,
  `WDG_cat_2` int(255) NOT NULL,
  `WDG_ex_2` int(255) NOT NULL,
  `WDG_tot_2` int(255) NOT NULL,
  `PCT_cat_2` int(255) NOT NULL,
  `PCT_ex_2` int(255) NOT NULL,
  `PCT_tot_2` int(255) NOT NULL,
  `PCT_cat_3` int(255) NOT NULL,
  `PCT_ex_3` int(255) NOT NULL,
  `PCT_tot_3` int(255) NOT NULL,
  `ATA_cat_1` int(255) NOT NULL,
  `ATA_ex_1` int(255) NOT NULL,
  `ATA_tot_1` int(255) NOT NULL,
  `ATA_cat_2` int(255) NOT NULL,
  `ATA_ex_2` int(255) NOT NULL,
  `ATA_tot_2` int(255) NOT NULL,
  `ATA_cat_3` int(255) NOT NULL,
  `ATA_ex_3` int(255) NOT NULL,
  `ATA_tot_3` int(255) NOT NULL,
  `GS_cat_1` int(255) NOT NULL,
  `GS_ex_1` int(255) NOT NULL,
  `GS_tot_1` int(255) NOT NULL,
  `GS_cat_2` int(255) NOT NULL,
  `GS_ex_2` int(255) NOT NULL,
  `GS_tot_2` int(255) NOT NULL,
  `IDR_cat_1` int(255) NOT NULL,
  `IDR_ex_1` int(255) NOT NULL,
  `IDR_tot_1` int(255) NOT NULL,
  `IDR_cat_2` int(255) NOT NULL,
  `IDR_ex_2` int(255) NOT NULL,
  `IDR_tot_2` int(255) NOT NULL,
  `IFFTI_cat_1` int(255) NOT NULL,
  `IFFTI_ex_1` int(255) NOT NULL,
  `IFFTI_tot_1` int(255) NOT NULL,
  `IFFTI_cat_2` int(255) NOT NULL,
  `IFFTI_ex_2` int(255) NOT NULL,
  `IFFTI_tot_2` int(255) NOT NULL,
  `ICHH_cat_1` int(255) NOT NULL,
  `ICHH_ex_1` int(255) NOT NULL,
  `ICHH_tot_1` int(255) NOT NULL,
  `ICHH_cat_2` int(255) NOT NULL,
  `ICHH_ex_2` int(255) NOT NULL,
  `ICHH_tot_2` int(255) NOT NULL,
  `ATP_cat_1` int(255) NOT NULL,
  `ATP_ex_1` int(255) NOT NULL,
  `ATP_tot_1` int(255) NOT NULL,
  `ATP_cat_2` int(255) NOT NULL,
  `ATP_ex_2` int(255) NOT NULL,
  `ATP_tot_2` int(255) NOT NULL,
  `CA_cat_2` int(255) NOT NULL,
  `CA_ex_2` int(255) NOT NULL,
  `CA_tot_2` int(255) NOT NULL,
  `PECC_cat_1` int(255) NOT NULL,
  `PECC_ex_1` int(255) NOT NULL,
  `PECC_tot_1` int(255) NOT NULL,
  `DKGB_cat_1` int(255) NOT NULL,
  `DKGB_ex_1` int(255) NOT NULL,
  `DKGB_tot_1` int(255) NOT NULL,
  `DKGB_cat_2` int(255) NOT NULL,
  `DKGB_ex_2` int(255) NOT NULL,
  `DKGB_tot_2` int(255) NOT NULL,
  `ABMA_cat_1` int(255) NOT NULL,
  `ABMA_ex_1` int(255) NOT NULL,
  `ABMA_tot_1` int(255) NOT NULL,
  `ABMA_cat_2` int(255) NOT NULL,
  `ABMA_ex_2` int(255) NOT NULL,
  `ABMA_tot_2` int(255) NOT NULL,
  `KINYA_cat_1` int(255) NOT NULL,
  `KINYA_ex_1` int(255) NOT NULL,
  `KINYA_tot_1` int(255) NOT NULL,
  `KINYA_cat_2` int(255) NOT NULL,
  `KINYA_ex_2` int(255) NOT NULL,
  `KINYA_tot_2` int(255) NOT NULL,
  `GS_cat_3` int(255) NOT NULL,
  `GS_ex_3` int(255) NOT NULL,
  `GS_tot_3` int(255) NOT NULL,
  `GC_cat_1` int(255) NOT NULL,
  `GC_ex_1` int(255) NOT NULL,
  `GC_tot_1` int(255) NOT NULL,
  `GC_cat_2` int(255) NOT NULL,
  `GC_ex_2` int(255) NOT NULL,
  `GC_tot_2` int(255) NOT NULL,
  `GC_cat_3` int(255) NOT NULL,
  `GC_ex_3` int(255) NOT NULL,
  `GC_tot_3` int(255) NOT NULL,
  `CA_cat_3` int(255) NOT NULL,
  `CA_ex_3` int(255) NOT NULL,
  `CA_tot_3` int(255) NOT NULL,
  `DKGB_cat_3` int(255) NOT NULL,
  `DKGB_ex_3` int(255) NOT NULL,
  `DKGB_tot_3` int(255) NOT NULL,
  `ABMA_cat_3` int(255) NOT NULL,
  `ABMA_ex_3` int(255) NOT NULL,
  `ABMA_tot_3` int(255) NOT NULL,
  `KINYA_cat_3` int(255) NOT NULL,
  `KINYA_ex_3` int(255) NOT NULL,
  `KINYA_tot_3` int(255) NOT NULL,
  `KIS_cat_1` int(255) NOT NULL,
  `KIS_ex_1` int(255) NOT NULL,
  `KIS_tot_1` int(255) NOT NULL,
  `KIS_cat_2` int(255) NOT NULL,
  `KIS_ex_2` int(255) NOT NULL,
  `KIS_tot_2` int(255) NOT NULL,
  `ICHH_cat_3` int(255) NOT NULL,
  `ICHH_ex_3` int(255) NOT NULL,
  `ICHH_tot_3` int(255) NOT NULL,
  `ATP_cat_3` int(255) NOT NULL,
  `ATP_ex_3` int(255) NOT NULL,
  `ATP_tot_3` int(255) NOT NULL,
  `BOOK_cat_1` int(255) NOT NULL,
  `BOOK_ex_1` int(255) NOT NULL,
  `BOOK_tot_1` int(255) NOT NULL,
  `BOOK_cat_2` int(255) NOT NULL,
  `BOOK_ex_2` int(255) NOT NULL,
  `BOOK_tot_2` int(255) NOT NULL,
  `BOOK_cat_3` int(255) NOT NULL,
  `BOOK_ex_3` int(255) NOT NULL,
  `BOOK_tot_3` int(255) NOT NULL,
  `BTS_cat_1` int(255) NOT NULL,
  `BTS_ex_1` int(255) NOT NULL,
  `BTS_tot_1` int(255) NOT NULL,
  `BTS_cat_2` int(255) NOT NULL,
  `BTS_ex_2` int(255) NOT NULL,
  `BTS_tot_2` int(255) NOT NULL,
  `BTS_cat_3` int(255) NOT NULL,
  `BTS_ex_3` int(255) NOT NULL,
  `BTS_tot_3` int(255) NOT NULL,
  `HGS_cat_1` int(255) NOT NULL,
  `HGS_ex_1` int(255) NOT NULL,
  `HGS_tot_1` int(255) NOT NULL,
  `HGS_cat_2` int(255) NOT NULL,
  `HGS_ex_2` int(255) NOT NULL,
  `HGS_tot_2` int(255) NOT NULL,
  `HGS_cat_3` int(255) NOT NULL,
  `HGS_ex_3` int(255) NOT NULL,
  `HGS_tot_3` int(255) NOT NULL,
  `BOR_cat_1` int(255) NOT NULL,
  `BOR_ex_1` int(255) NOT NULL,
  `BOR_tot_1` int(255) NOT NULL,
  `BOR_cat_2` int(255) NOT NULL,
  `BOR_ex_2` int(255) NOT NULL,
  `BOR_tot_2` int(255) NOT NULL,
  `BOR_cat_3` int(255) NOT NULL,
  `BOR_ex_3` int(255) NOT NULL,
  `BOR_tot_3` int(255) NOT NULL,
  `COA_cat_1` int(255) NOT NULL,
  `COA_ex_1` int(255) NOT NULL,
  `COA_tot_1` int(255) NOT NULL,
  `COA_cat_2` int(255) NOT NULL,
  `COA_ex_2` int(255) NOT NULL,
  `COA_tot_2` int(255) NOT NULL,
  `COA_cat_3` int(255) NOT NULL,
  `COA_ex_3` int(255) NOT NULL,
  `COA_tot_3` int(255) NOT NULL,
  `HPE_cat_2` int(255) NOT NULL,
  `HPE_ex_2` int(255) NOT NULL,
  `HPE_tot_2` int(255) NOT NULL,
  `HPE_cat_3` int(255) NOT NULL,
  `HPE_ex_3` int(255) NOT NULL,
  `HPE_tot_3` int(255) NOT NULL,
  `DGF_cat_1` int(255) NOT NULL,
  `DGF_ex_1` int(255) NOT NULL,
  `DGF_tot_1` int(255) NOT NULL,
  `IHT_cat_1` int(255) NOT NULL,
  `IHT_ex_1` int(255) NOT NULL,
  `IHT_tot_1` int(255) NOT NULL,
  `IHT_cat_2` int(255) NOT NULL,
  `IHT_ex_2` int(255) NOT NULL,
  `IHT_tot_2` int(255) NOT NULL,
  `ACC_cat_1` int(255) NOT NULL,
  `ACC_ex_1` int(255) NOT NULL,
  `ACC_tot_1` int(255) NOT NULL,
  `ACC_cat_2` int(255) NOT NULL,
  `ACC_ex_2` int(255) NOT NULL,
  `ACC_tot_2` int(255) NOT NULL,
  `AET_cat_1` int(255) NOT NULL,
  `AET_ex_1` int(255) NOT NULL,
  `AET_tot_1` int(255) NOT NULL,
  `AET_cat_2` int(255) NOT NULL,
  `AET_ex_2` int(255) NOT NULL,
  `AET_tot_2` int(255) NOT NULL,
  `AET_cat_3` int(255) NOT NULL,
  `AET_ex_3` int(255) NOT NULL,
  `AET_tot_3` int(255) NOT NULL,
  `BIO_cat_1` int(255) NOT NULL,
  `BIO_ex_1` int(255) NOT NULL,
  `BIO_tot_1` int(255) NOT NULL,
  `BIO_cat_2` int(255) NOT NULL,
  `BIO_ex_2` int(255) NOT NULL,
  `BIO_tot_2` int(255) NOT NULL,
  `BIO_cat_3` int(255) NOT NULL,
  `BIO_ex_3` int(255) NOT NULL,
  `BIO_tot_3` int(255) NOT NULL,
  `SHE_cat_2` int(255) NOT NULL,
  `SHE_ex_2` int(255) NOT NULL,
  `SHE_tot_2` int(255) NOT NULL,
  `SHE_cat_3` int(255) NOT NULL,
  `SHE_ex_3` int(255) NOT NULL,
  `SHE_tot_3` int(255) NOT NULL,
  `ENTERP_cat_1` int(255) NOT NULL,
  `ENTERP_ex_1` int(255) NOT NULL,
  `ENTERP_tot_1` int(255) NOT NULL,
  `ENTERP_cat_2` int(255) NOT NULL,
  `ENTERP_ex_2` int(255) NOT NULL,
  `ENTERP_tot_2` int(255) NOT NULL,
  `ENTERP_cat_3` int(255) NOT NULL,
  `ENTERP_ex_3` int(255) NOT NULL,
  `ENTERP_tot_3` int(255) NOT NULL,
  `MAC_cat_1` int(255) NOT NULL,
  `MAC_ex_1` int(255) NOT NULL,
  `MAC_tot_1` int(255) NOT NULL,
  `MAC_cat_2` int(255) NOT NULL,
  `MAC_ex_2` int(255) NOT NULL,
  `MAC_tot_2` int(255) NOT NULL,
  `MAC_cat_3` int(255) NOT NULL,
  `MAC_ex_3` int(255) NOT NULL,
  `MAC_tot_3` int(255) NOT NULL,
  `TAX_cat_1` int(255) NOT NULL,
  `TAX_ex_1` int(255) NOT NULL,
  `TAX_tot_1` int(255) NOT NULL,
  `FAC_cat_1` int(255) NOT NULL,
  `FAC_ex_1` int(255) NOT NULL,
  `FAC_tot_1` int(255) NOT NULL,
  `FAC_cat_2` int(255) NOT NULL,
  `FAC_ex_2` int(255) NOT NULL,
  `FAC_tot_2` int(255) NOT NULL,
  `FAC_cat_3` int(255) NOT NULL,
  `FAC_ex_3` int(255) NOT NULL,
  `FAC_tot_3` int(255) NOT NULL,
  `PTP_cat_1` int(255) NOT NULL,
  `PTP_ex_1` int(255) NOT NULL,
  `PTP_tot_1` int(255) NOT NULL,
  `PTP_cat_2` int(255) NOT NULL,
  `SBP_cat_3` int(255) NOT NULL,
  `SET_cat_1` int(255) NOT NULL,
  `SET_ex_1` int(255) NOT NULL,
  `SET_tot_1` int(255) NOT NULL,
  `KINYARW_cat_2` int(255) NOT NULL,
  `KINYARW_ex_2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `al`
--

INSERT INTO `al` (`id`, `studentId`, `firstName`, `lastName`, `class`, `gender`, `homeTown`, `contact`, `admission`, `conduct`, `paid`, `position_1`, `position_2`, `position_3`, `total_1`, `total_2`, `total_3`, `COMP_cat_1`, `COMP_ex_1`, `COMP_tot_1`, `COM_cat_1`, `COM_ex_1`, `COM_tot_1`, `CITZ_cat_1`, `CITZ_ex_1`, `CITZ_tot_1`, `GRAPHIC_cat_1`, `GRAPHIC_ex_1`, `GRAPHIC_tot_1`, `SHE_cat_1`, `SHE_ex_1`, `SHE_tot_1`, `ENG_cat_1`, `ENG_ex_1`, `ENG_tot_1`, `MATHS_cat_1`, `MATHS_ex_1`, `MATHS_tot_1`, `WEB_cat_1`, `WEB_ex_1`, `WEB_tot_1`, `JS_cat_1`, `JS_ex_1`, `JS_tot_1`, `WEB_cat_2`, `WEB_ex_2`, `WEB_tot_2`, `ENT_cat_2`, `ENT_ex_2`, `ENT_tot_2`, `COMP_cat_2`, `COMP_ex_2`, `COMP_tot_2`, `COM_cat_2`, `COM_ex_2`, `COM_tot_2`, `CITZ_cat_2`, `CITZ_ex_2`, `CITZ_tot_2`, `GRAPHIC_cat_2`, `GRAPHIC_ex_2`, `GRAPHIC_tot_2`, `KINY_cat_2`, `KINY_ex_2`, `KINY_tot_2`, `ENG_cat_2`, `ENG_ex_2`, `ENG_tot_2`, `JS_cat_2`, `JS_ex_2`, `JS_tot_2`, `CVC_cat_2`, `CVC_ex_2`, `CVC_tot_2`, `APR_cat_2`, `APR_ex_2`, `APR_tot_2`, `DGV_cat_2`, `DGV_ex_2`, `DGV_tot_2`, `PHY_cat_2`, `PHY_ex_2`, `PHY_tot_2`, `FRANCH_cat_2`, `FRANCH_ex_2`, `FRANCH_tot_2`, `UI_cat_2`, `UI_ex_2`, `UI_tot_2`, `ENT_cat_3`, `ENT_ex_3`, `ENT_tot_3`, `CVC_cat_3`, `CVC_ex_3`, `CVC_tot_3`, `COMP_cat_3`, `COMP_ex_3`, `COMP_tot_3`, `COM_cat_3`, `COM_ex_3`, `COM_tot_3`, `CITZ_cat_3`, `CITZ_ex_3`, `CITZ_tot_3`, `GRAPHIC_cat_3`, `GRAPHIC_ex_3`, `GRAPHIC_tot_3`, `KINY_cat_3`, `KINY_ex_3`, `KINY_tot_3`, `ENG_cat_3`, `ENG_ex_3`, `ENG_tot_3`, `MATHS_cat_3`, `MATHS_ex_3`, `MATHS_tot_3`, `JS_cat_3`, `JS_ex_3`, `JS_tot_3`, `INT_cat_3`, `INT_ex_3`, `INT_tot_3`, `APR_cat_3`, `APR_ex_3`, `APR_tot_3`, `DGV_cat_3`, `DGV_ex_3`, `DGV_tot_3`, `PHY_cat_3`, `PHY_ex_3`, `PHY_tot_3`, `FRANCH_cat_3`, `FRANCH_ex_3`, `FRANCH_tot_3`, `UI_cat_3`, `UI_ex_3`, `UI_tot_3`, `BEC_cat_1`, `BEC_ex_1`, `BEC_tot_1`, `BEC_cat_2`, `BEC_ex_2`, `BEC_tot_2`, `BEC_cat_3`, `BEC_ex_3`, `BEC_tot_3`, `ATD_cat_1`, `ATD_ex_1`, `ATD_tot_1`, `ATD_cat_2`, `ATD_ex_2`, `ATD_tot_2`, `ATD_cat_3`, `ATD_ex_3`, `ATD_tot_3`, `ANF_cat_1`, `ANF_ex_1`, `ANF_tot_1`, `MATHS_cat_2`, `MATHS_ex_2`, `MATHS_tot_2`, `DCS_cat_2`, `DCS_ex_2`, `DCS_tot_2`, `DCS_cat_3`, `DCS_ex_3`, `DCS_tot_3`, `ACS_cat_2`, `ACS_ex_2`, `ACS_tot_2`, `ACS_cat_3`, `ACS_ex_3`, `ACS_tot_3`, `MCS_cat_2`, `MCS_ex_2`, `MCS_tot_2`, `MCS_cat_3`, `MCS_ex_3`, `MCS_tot_3`, `ANF_cat_2`, `ANF_ex_2`, `ANF_tot_2`, `ANF_cat_3`, `ANF_ex_3`, `ANF_tot_3`, `ABE_cat_1`, `ABE_ex_1`, `ABE_tot_1`, `ABE_cat_2`, `ABE_ex_2`, `ABE_tot_2`, `AEF_cat_1`, `AEF_ex_1`, `AEF_tot_1`, `FRANCH_cat_1`, `FRANCH_ex_1`, `FRANCH_tot_1`, `DB_cat_1`, `DB_ex_1`, `DB_tot_1`, `DB_cat_2`, `DB_ex_2`, `DB_tot_2`, `DB_cat_3`, `DB_ex_3`, `DB_tot_3`, `DS_cat_1`, `DS_ex_1`, `DS_tot_1`, `DS_cat_2`, `DS_ex_2`, `DS_tot_2`, `DS_cat_3`, `DS_ex_3`, `DS_tot_3`, `WA_cat_2`, `WA_ex_2`, `WA_tot_2`, `BA_cat_1`, `BA_ex_1`, `BA_tot_1`, `BA_cat_2`, `BA_ex_2`, `BA_tot_2`, `BA_cat_3`, `BA_ex_3`, `BA_tot_3`, `AWBR_cat_1`, `AWBR_ex_1`, `AWBR_tot_1`, `AFMA_cat_1`, `AFMA_ex_1`, `AFMA_tot_1`, `AMM_cat_1`, `AMM_ex_1`, `AMM_tot_1`, `AAF_cat_1`, `AAF_ex_1`, `AAF_tot_1`, `APF_cat_1`, `APF_ex_1`, `APF_tot_1`, `DBD_cat_1`, `DBD_ex_1`, `DBD_tot_1`, `IDW_cat_1`, `IDW_ex_1`, `IDW_tot_1`, `ACS_cat_1`, `ACS_ex_1`, `ACS_tot_1`, `PQCS_cat_1`, `PQCS_ex_1`, `PQCS_tot_1`, `ISHE_cat_1`, `ISHE_ex_1`, `ISHE_tot_1`, `DBP_cat_1`, `DBP_ex_1`, `DBP_tot_1`, `WA_cat_3`, `WA_ex_3`, `WA_tot_3`, `AWBR_cat_2`, `AWBR_ex_2`, `AWBR_tot_2`, `AFMA_cat_2`, `AFMA_ex_2`, `AFMA_tot_2`, `AMM_cat_2`, `AMM_ex_2`, `AMM_tot_2`, `AAF_cat_2`, `AAF_ex_2`, `AAF_tot_2`, `APF_cat_2`, `APF_ex_2`, `APF_tot_2`, `DBD_cat_2`, `DBD_ex_2`, `DBD_tot_2`, `IDW_cat_2`, `IDW_ex_2`, `IDW_tot_2`, `PQCS_cat_2`, `PQCS_ex_2`, `PQCS_tot_2`, `DBP_cat_2`, `DBP_ex_2`, `DBP_tot_2`, `DVW_cat_2`, `DVW_ex_2`, `DVW_tot_2`, `DPW_cat_2`, `DPW_ex_2`, `DPW_tot_2`, `MW_cat_2`, `MW_ex_2`, `MW_tot_2`, `DVW_cat_3`, `DVW_ex_3`, `DVW_tot_3`, `DPW_cat_3`, `DPW_ex_3`, `DPW_tot_3`, `MW_cat_3`, `MW_ex_3`, `MW_tot_3`, `AFMA_cat_3`, `AFMA_ex_3`, `AFMA_tot_3`, `AMM_cat_3`, `AMM_ex_3`, `AMM_tot_3`, `PQCS_cat_3`, `PQCS_ex_3`, `PQCS_tot_3`, `DBP_cat_3`, `DBP_ex_3`, `DBP_tot_3`, `SSI_cat_2`, `SSI_ex_2`, `SSI_tot_2`, `SSI_cat_3`, `SSI_ex_3`, `SSI_tot_3`, `SAD_cat_1`, `SAD_ex_1`, `SAD_tot_1`, `SAD_cat_2`, `SAD_ex_2`, `SAD_tot_2`, `SAD_cat_3`, `SAD_ex_3`, `SAD_tot_3`, `SECUREDB_cat_1`, `SECUREDB_ex_1`, `SECUREDB_tot_1`, `SECUREDB_cat_2`, `SECUREDB_ex_2`, `SECUREDB_tot_2`, `SECUREDB_cat_3`, `SECUREDB_ex_3`, `SECUREDB_tot_3`, `DW_cat_1`, `DW_ex_1`, `DW_tot_1`, `DW_cat_2`, `DW_ex_2`, `DW_tot_2`, `DW_cat_3`, `DW_ex_3`, `DW_tot_3`, `STAT_cat_1`, `STAT_ex_1`, `STAT_tot_1`, `STAT_cat_2`, `STAT_ex_2`, `STAT_tot_2`, `STAT_cat_3`, `STAT_ex_3`, `STAT_tot_3`, `KINY_cat_1`, `KINY_ex_1`, `KINY_tot_1`, `SDE_cat_1`, `SDE_ex_1`, `SDE_tot_1`, `SDE_cat_2`, `SDE_ex_2`, `SDE_tot_2`, `SDE_cat_3`, `SDE_ex_3`, `SDE_tot_3`, `ICT_cat_1`, `ICT_ex_1`, `ICT_tot_1`, `ICT_cat_2`, `ICT_ex_2`, `ICT_tot_2`, `ICT_cat_3`, `ICT_ex_3`, `ICT_tot_3`, `BUSINESS_cat_1`, `BUSINESS_ex_1`, `BUSINESS_tot_1`, `BUSINESS_cat_2`, `BUSINESS_ex_2`, `BUSINESS_tot_2`, `BUSINESS_cat_3`, `BUSINESS_ex_3`, `BUSINESS_tot_3`, `PE_cat_1`, `PE_ex_1`, `PE_tot_1`, `PE_cat_2`, `PE_ex_2`, `PE_tot_2`, `PE_cat_3`, `PE_ex_3`, `PE_tot_3`, `PBPP_cat_1`, `PBPP_ex_1`, `PBPP_tot_1`, `PBCHC_cat_1`, `PBCHC_ex_1`, `PBCHC_tot_1`, `PCHSSS_cat_1`, `PCHSSS_ex_1`, `PCHSSS_tot_1`, `PBMPFS_cat_1`, `PBMPFS_ex_1`, `PBMPFS_tot_1`, `PFVSP_cat_1`, `PFVSP_ex_1`, `PFVSP_tot_1`, `PFHS_cat_1`, `PFHS_ex_1`, `PFHS_tot_1`, `COMM_cat_1`, `COMM_ex_1`, `COMM_tot_1`, `BMA_cat_1`, `BMA_ex_1`, `BMA_tot_1`, `FRENCH_cat_1`, `FRENCH_ex_1`, `FRENCH_tot_1`, `KISWA_cat_1`, `KISWA_ex_1`, `KISWA_tot_1`, `PBPP_cat_2`, `PBPP_ex_2`, `PBPP_tot_2`, `PBCHC_cat_2`, `PBCHC_ex_2`, `PBCHC_tot_2`, `PCHSSS_cat_2`, `PCHSSS_ex_2`, `PCHSSS_tot_2`, `PBMPFS_cat_2`, `PBMPFS_ex_2`, `PBMPFS_tot_2`, `PFVSP_cat_2`, `PFVSP_ex_2`, `PFVSP_tot_2`, `COMM_cat_2`, `COMM_ex_2`, `COMM_tot_2`, `BMA_cat_2`, `BMA_ex_2`, `BMA_tot_2`, `FRENCH_cat_2`, `FRENCH_ex_2`, `FRENCH_tot_2`, `KISWA_cat_2`, `KISWA_ex_2`, `KISWA_tot_2`, `PCHSSS_cat_3`, `PCHSSS_ex_3`, `PCHSSS_tot_3`, `PBMPFS_cat_3`, `PBMPFS_ex_3`, `PBMPFS_tot_3`, `BMA_cat_3`, `BMA_ex_3`, `BMA_tot_3`, `FRENCH_cat_3`, `FRENCH_ex_3`, `FRENCH_tot_3`, `KISWA_cat_3`, `KISWA_ex_3`, `KISWA_tot_3`, `MCA_cat_1`, `MCA_ex_1`, `MCA_tot_1`, `MPCR_cat_1`, `MPCR_ex_1`, `MPCR_tot_1`, `PAPR_cat_1`, `PAPR_ex_1`, `PAPR_tot_1`, `MJ_cat_1`, `MJ_ex_1`, `MJ_tot_1`, `MSRA_cat_1`, `MSRA_ex_1`, `MSRA_tot_1`, `PLT_cat_1`, `PLT_ex_1`, `PLT_tot_1`, `MRFD_cat_1`, `MRFD_ex_1`, `MRFD_tot_1`, `PBR_cat_1`, `PBR_ex_1`, `PBR_tot_1`, `MIS_cat_1`, `MIS_ex_1`, `MIS_tot_1`, `PBCRI_cat_1`, `PBCRI_ex_1`, `PBCRI_tot_1`, `FBP_cat_1`, `FBP_ex_1`, `FBP_tot_1`, `MCAS_cat_1`, `MCAS_ex_1`, `MCAS_tot_1`, `ABPC_cat_1`, `ABPC_ex_1`, `ABPC_tot_1`, `AMAF_cat_1`, `AMAF_ex_1`, `AMAF_tot_1`, `AAP_cat_2`, `AAP_ex_2`, `AAP_tot_2`, `PBR_cat_2`, `PBR_ex_2`, `PBR_tot_2`, `MIS_cat_2`, `MIS_ex_2`, `MIS_tot_2`, `PTBP_cat_2`, `PTBP_ex_2`, `PTBP_tot_2`, `MCAS_cat_2`, `MCAS_ex_2`, `MCAS_tot_2`, `_cat_2`, `_ex_2`, `_tot_2`, `FSP_cat_1`, `FSP_ex_1`, `FSP_tot_1`, `PAS_cat_3`, `PAS_ex_3`, `PAS_tot_3`, `FAP_cat_1`, `FAP_ex_1`, `FAP_tot_1`, `OKS_cat_1`, `OKS_ex_1`, `OKS_tot_1`, `OKS_cat_2`, `OKS_ex_2`, `OKS_tot_2`, `RKS_cat_2`, `RKS_ex_2`, `RKS_tot_2`, `RKS_cat_3`, `RKS_ex_3`, `RKS_tot_3`, `MKS_cat_1`, `MKS_ex_1`, `MKS_tot_1`, `MKS_cat_2`, `MKS_ex_2`, `MKS_tot_2`, `MKS_cat_3`, `MKS_ex_3`, `MKS_tot_3`, `PSD_cat_2`, `PSD_ex_2`, `PSD_tot_2`, `PSD_cat_3`, `PSD_ex_3`, `PSD_tot_3`, `COS_cat_1`, `COS_ex_1`, `COS_tot_1`, `COS_cat_2`, `COS_ex_2`, `COS_tot_2`, `PTD_cat_2`, `PTD_ex_2`, `PTD_tot_2`, `PTD_cat_3`, `PTD_ex_3`, `PTD_tot_3`, `AC_cat_1`, `AC_ex_1`, `AC_tot_1`, `AC_cat_2`, `AC_ex_2`, `AC_tot_2`, `AC_cat_3`, `AC_ex_3`, `AC_tot_3`, `PMS_cat_1`, `PMS_ex_1`, `PMS_tot_1`, `PMS_cat_2`, `PMS_ex_2`, `PMS_tot_2`, `PMS_cat_3`, `PMS_ex_3`, `PMS_tot_3`, `PFT_cat_1`, `PFT_ex_1`, `PFT_tot_1`, `PFT_cat_2`, `PFT_ex_2`, `PFT_tot_2`, `PFT_cat_3`, `PFT_ex_3`, `PFT_tot_3`, `DBK_cat_1`, `DBK_ex_1`, `DBK_tot_1`, `DBK_cat_2`, `DBK_ex_2`, `DBK_tot_2`, `DBK_cat_3`, `DBK_ex_3`, `DBK_tot_3`, `LEE_cat_1`, `LEE_ex_1`, `LEE_tot_1`, `LEE_cat_2`, `LEE_ex_2`, `LEE_tot_2`, `LEE_cat_3`, `LEE_ex_3`, `LEE_tot_3`, `SSD_cat_1`, `SSD_ex_1`, `SSD_tot_1`, `SSD_cat_2`, `SSD_ex_2`, `SSD_tot_2`, `SSD_cat_3`, `SSD_ex_3`, `SSD_tot_3`, `BSS_cat_1`, `BSS_ex_1`, `BSS_tot_1`, `BSS_cat_2`, `BSS_ex_2`, `BSS_tot_2`, `BSS_cat_3`, `BSS_ex_3`, `BSS_tot_3`, `FRA_cat_1`, `FRA_ex_1`, `FRA_tot_1`, `FRA_cat_2`, `FRA_ex_2`, `FRA_tot_2`, `FRA_cat_3`, `FRA_ex_3`, `FRA_tot_3`, `KSW_cat_1`, `KSW_ex_1`, `KSW_tot_1`, `KSW_cat_2`, `KSW_ex_2`, `KSW_tot_2`, `KSW_cat_3`, `KSW_ex_3`, `KSW_tot_3`, `APE_cat_1`, `APE_ex_1`, `APE_tot_1`, `APE_cat_2`, `APE_ex_2`, `APE_tot_2`, `APE_cat_3`, `APE_ex_3`, `APE_tot_3`, `MPS_cat_1`, `MPS_ex_1`, `MPS_tot_1`, `CCA_cat_1`, `CCA_ex_1`, `CCA_tot_1`, `CREDIT_cat_1`, `CREDIT_ex_1`, `CREDIT_tot_1`, `BUDGET_cat_1`, `BUDGET_ex_1`, `BUDGET_tot_1`, `PAY_cat_1`, `PAY_ex_1`, `PAY_tot_1`, `TAX_cat_2`, `TAX_ex_2`, `TAX_tot_2`, `TAX_cat_3`, `TAX_ex_3`, `TAX_tot_3`, `PFS_cat_2`, `PFS_ex_2`, `PFS_tot_2`, `PFS_cat_3`, `PFS_ex_3`, `PFS_tot_3`, `APB_cat_1`, `APB_ex_1`, `APB_tot_1`, `ECO_cat_2`, `ECO_ex_2`, `ECO_tot_2`, `EDO_cat_3`, `EDO_ex_3`, `EDO_tot_3`, `VAT_cat_2`, `VAT_ex_2`, `VAT_tot_2`, `VAT_cat_3`, `VAT_ex_3`, `VAT_tot_3`, `APA_cat_3`, `APA_ex_3`, `APA_tot_3`, `_cat_3`, `_ex_3`, `_tot_3`, `KIS_cat_3`, `KIS_ex_3`, `KIS_tot_3`, `AMAF_cat_3`, `AMAF_ex_3`, `AMAF_tot_3`, `PSP_cat_1`, `PSP_ex_1`, `PSP_tot_1`, `OSI_cat_1`, `OSI_ex_1`, `OSI_tot_1`, `MSR_cat_2`, `MSR_ex_2`, `MSR_tot_2`, `MSR_cat_3`, `MSR_ex_3`, `MSR_tot_3`, `AGC_cat_1`, `AGC_ex_1`, `AGC_tot_1`, `AGC_cat_2`, `AGC_ex_2`, `AGC_tot_2`, `AGC_cat_3`, `AGC_ex_3`, `AGC_tot_3`, `AAS_cat_1`, `AAS_ex_1`, `AAS_tot_1`, `AAS_cat_2`, `AAS_ex_2`, `AAS_tot_2`, `AAS_cat_3`, `AAS_ex_3`, `AAS_tot_3`, `BKE_cat_1`, `BKE_ex_1`, `BKE_tot_1`, `BKE_cat_2`, `BKE_ex_2`, `BKE_tot_2`, `BKE_cat_3`, `BKE_ex_3`, `BKE_tot_3`, `MW_cat_1`, `MW_ex_1`, `MW_tot_1`, `DTP_cat_1`, `DTP_ex_1`, `DTP_tot_1`, `DTP_cat_2`, `DTP_ex_2`, `DTP_tot_2`, `DTP_cat_3`, `DTP_ex_3`, `DTP_tot_3`, `WDG_cat_1`, `WDG_ex_1`, `WDG_tot_1`, `WDG_cat_2`, `WDG_ex_2`, `WDG_tot_2`, `PCT_cat_2`, `PCT_ex_2`, `PCT_tot_2`, `PCT_cat_3`, `PCT_ex_3`, `PCT_tot_3`, `ATA_cat_1`, `ATA_ex_1`, `ATA_tot_1`, `ATA_cat_2`, `ATA_ex_2`, `ATA_tot_2`, `ATA_cat_3`, `ATA_ex_3`, `ATA_tot_3`, `GS_cat_1`, `GS_ex_1`, `GS_tot_1`, `GS_cat_2`, `GS_ex_2`, `GS_tot_2`, `IDR_cat_1`, `IDR_ex_1`, `IDR_tot_1`, `IDR_cat_2`, `IDR_ex_2`, `IDR_tot_2`, `IFFTI_cat_1`, `IFFTI_ex_1`, `IFFTI_tot_1`, `IFFTI_cat_2`, `IFFTI_ex_2`, `IFFTI_tot_2`, `ICHH_cat_1`, `ICHH_ex_1`, `ICHH_tot_1`, `ICHH_cat_2`, `ICHH_ex_2`, `ICHH_tot_2`, `ATP_cat_1`, `ATP_ex_1`, `ATP_tot_1`, `ATP_cat_2`, `ATP_ex_2`, `ATP_tot_2`, `CA_cat_2`, `CA_ex_2`, `CA_tot_2`, `PECC_cat_1`, `PECC_ex_1`, `PECC_tot_1`, `DKGB_cat_1`, `DKGB_ex_1`, `DKGB_tot_1`, `DKGB_cat_2`, `DKGB_ex_2`, `DKGB_tot_2`, `ABMA_cat_1`, `ABMA_ex_1`, `ABMA_tot_1`, `ABMA_cat_2`, `ABMA_ex_2`, `ABMA_tot_2`, `KINYA_cat_1`, `KINYA_ex_1`, `KINYA_tot_1`, `KINYA_cat_2`, `KINYA_ex_2`, `KINYA_tot_2`, `GS_cat_3`, `GS_ex_3`, `GS_tot_3`, `GC_cat_1`, `GC_ex_1`, `GC_tot_1`, `GC_cat_2`, `GC_ex_2`, `GC_tot_2`, `GC_cat_3`, `GC_ex_3`, `GC_tot_3`, `CA_cat_3`, `CA_ex_3`, `CA_tot_3`, `DKGB_cat_3`, `DKGB_ex_3`, `DKGB_tot_3`, `ABMA_cat_3`, `ABMA_ex_3`, `ABMA_tot_3`, `KINYA_cat_3`, `KINYA_ex_3`, `KINYA_tot_3`, `KIS_cat_1`, `KIS_ex_1`, `KIS_tot_1`, `KIS_cat_2`, `KIS_ex_2`, `KIS_tot_2`, `ICHH_cat_3`, `ICHH_ex_3`, `ICHH_tot_3`, `ATP_cat_3`, `ATP_ex_3`, `ATP_tot_3`, `BOOK_cat_1`, `BOOK_ex_1`, `BOOK_tot_1`, `BOOK_cat_2`, `BOOK_ex_2`, `BOOK_tot_2`, `BOOK_cat_3`, `BOOK_ex_3`, `BOOK_tot_3`, `BTS_cat_1`, `BTS_ex_1`, `BTS_tot_1`, `BTS_cat_2`, `BTS_ex_2`, `BTS_tot_2`, `BTS_cat_3`, `BTS_ex_3`, `BTS_tot_3`, `HGS_cat_1`, `HGS_ex_1`, `HGS_tot_1`, `HGS_cat_2`, `HGS_ex_2`, `HGS_tot_2`, `HGS_cat_3`, `HGS_ex_3`, `HGS_tot_3`, `BOR_cat_1`, `BOR_ex_1`, `BOR_tot_1`, `BOR_cat_2`, `BOR_ex_2`, `BOR_tot_2`, `BOR_cat_3`, `BOR_ex_3`, `BOR_tot_3`, `COA_cat_1`, `COA_ex_1`, `COA_tot_1`, `COA_cat_2`, `COA_ex_2`, `COA_tot_2`, `COA_cat_3`, `COA_ex_3`, `COA_tot_3`, `HPE_cat_2`, `HPE_ex_2`, `HPE_tot_2`, `HPE_cat_3`, `HPE_ex_3`, `HPE_tot_3`, `DGF_cat_1`, `DGF_ex_1`, `DGF_tot_1`, `IHT_cat_1`, `IHT_ex_1`, `IHT_tot_1`, `IHT_cat_2`, `IHT_ex_2`, `IHT_tot_2`, `ACC_cat_1`, `ACC_ex_1`, `ACC_tot_1`, `ACC_cat_2`, `ACC_ex_2`, `ACC_tot_2`, `AET_cat_1`, `AET_ex_1`, `AET_tot_1`, `AET_cat_2`, `AET_ex_2`, `AET_tot_2`, `AET_cat_3`, `AET_ex_3`, `AET_tot_3`, `BIO_cat_1`, `BIO_ex_1`, `BIO_tot_1`, `BIO_cat_2`, `BIO_ex_2`, `BIO_tot_2`, `BIO_cat_3`, `BIO_ex_3`, `BIO_tot_3`, `SHE_cat_2`, `SHE_ex_2`, `SHE_tot_2`, `SHE_cat_3`, `SHE_ex_3`, `SHE_tot_3`, `ENTERP_cat_1`, `ENTERP_ex_1`, `ENTERP_tot_1`, `ENTERP_cat_2`, `ENTERP_ex_2`, `ENTERP_tot_2`, `ENTERP_cat_3`, `ENTERP_ex_3`, `ENTERP_tot_3`, `MAC_cat_1`, `MAC_ex_1`, `MAC_tot_1`, `MAC_cat_2`, `MAC_ex_2`, `MAC_tot_2`, `MAC_cat_3`, `MAC_ex_3`, `MAC_tot_3`, `TAX_cat_1`, `TAX_ex_1`, `TAX_tot_1`, `FAC_cat_1`, `FAC_ex_1`, `FAC_tot_1`, `FAC_cat_2`, `FAC_ex_2`, `FAC_tot_2`, `FAC_cat_3`, `FAC_ex_3`, `FAC_tot_3`, `PTP_cat_1`, `PTP_ex_1`, `PTP_tot_1`, `PTP_cat_2`, `SBP_cat_3`, `SET_cat_1`, `SET_ex_1`, `SET_tot_1`, `KINYARW_cat_2`, `KINYARW_ex_2`) VALUES
(1, '313P12024', 'MELLOW', 'Junior', 'P1', 'Male', 'Kigali', '0782627190', '2024', '35', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 32, 52, 84, 0, 0),
(2, '814P22024', 'KWIZERA ', 'Tom', 'P2', 'Male', 'mellow', '079997218', '2024', '35', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
(7, 'DOS', '2023-05-17', '<p>WELCOME to you all teachers and let this system aid you in your <b>career</b><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `budg`
--

CREATE TABLE `budg` (
  `id` int(11) NOT NULL,
  `#` int(2) DEFAULT NULL,
  `studentId` varchar(12) DEFAULT NULL,
  `names` varchar(24) DEFAULT NULL,
  `cat` varchar(2) DEFAULT NULL,
  `ex` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

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
(1, 'P1', '--DIVISION--', '--Teachers--', '', ''),
(2, 'P2', '--DIVISION--', '--Teachers--', '', ''),
(3, 'P3', '--DIVISION--', '--Teachers--', '', ''),
(4, 'P4', '--DIVISION--', '--Teachers--', '', ''),
(5, 'P5', '--DIVISION--', '--Teachers--', '', ''),
(6, 'P6', '--DIVISION--', '--Teachers--', '', ''),
(7, 'S1', 'O\'LEVEL', 'ARSENE Iraba ', 'titi', 'sonia');

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

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(111) NOT NULL,
  `exerciseId` varchar(111) NOT NULL,
  `questions` varchar(111) NOT NULL,
  `teacher` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `subject` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(255) NOT NULL,
  `transactionId` varchar(111) NOT NULL,
  `student` varchar(111) NOT NULL,
  `parentName` varchar(111) NOT NULL,
  `parentContact` varchar(111) NOT NULL,
  `transactionDate` varchar(11) NOT NULL,
  `amount` varchar(111) NOT NULL,
  `evidence` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `bank` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(111) NOT NULL,
  `posterId` varchar(111) NOT NULL,
  `poster` varchar(111) NOT NULL,
  `postDate` varchar(111) NOT NULL,
  `post` varchar(111) NOT NULL,
  `posterImg` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id` int(111) NOT NULL,
  `exercise` varchar(111) NOT NULL,
  `student` varchar(111) NOT NULL,
  `marks` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `level` varchar(111) NOT NULL,
  `term` int(11) NOT NULL,
  `teacher` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lstsubjects`
--

INSERT INTO `lstsubjects` (`id`, `moduleId`, `module`, `class`, `abr`, `level`, `term`, `teacher`) VALUES
(1, '38SET784', 'SCIENCE', 'P1', 'SET', 'al', 0, '0'),
(2, '48LITERARURE254', 'LITERATURE', 'S1', 'LITERARURE', 'ol', 0, '0'),
(3, '32MTH333', 'MATH', 'S1', 'MTH', 'ol', 0, '2147483647'),
(4, '30FRN158', 'FRENCH', 'S1', 'FRN', 'ol', 0, '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(255) NOT NULL,
  `studentId` varchar(111) NOT NULL,
  `moduleId` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `tot` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `studentId`, `moduleId`, `level`, `class`, `term`, `tot`) VALUES
(1, '313P12024', '38SET784', 'al', '', '1', '84');

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
(1, '38SET784', 'SCIENCE', 'SET', 'P1', '0', 'al', '100', '1'),
(2, '48LITERARURE254', 'LITERATURE', 'LITERARURE', 'S1', '0', 'ol', '50', '1'),
(3, '32MTH333', 'MATH', 'MTH', 'S1', '2147483647', 'ol', '50', '1'),
(4, '30FRN158', 'FRENCH', 'FRN', 'S1', '2147483647', 'ol', '50', '1');

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
  `paid` varchar(11) NOT NULL,
  `total` varchar(111) NOT NULL,
  `position` varchar(111) NOT NULL,
  `HIST_cat_1` int(255) NOT NULL,
  `HIST_ex_1` int(255) NOT NULL,
  `HIST_tot_1` int(255) NOT NULL,
  `GEO_cat_1` int(255) NOT NULL,
  `GEO_ex_1` int(255) NOT NULL,
  `GEO_tot_1` int(255) NOT NULL,
  `CRE_cat_1` int(255) NOT NULL,
  `CRE_ex_1` int(255) NOT NULL,
  `CRE_tot_1` int(255) NOT NULL,
  `KINY_cat_1` int(255) NOT NULL,
  `KINY_ex_1` int(255) NOT NULL,
  `KINY_tot_1` int(255) NOT NULL,
  `ENG_cat_1` int(255) NOT NULL,
  `ENG_ex_1` int(255) NOT NULL,
  `ENG_tot_1` int(255) NOT NULL,
  `KISW_cat_1` int(255) NOT NULL,
  `KISW_ex_1` int(255) NOT NULL,
  `KISW_tot_1` int(255) NOT NULL,
  `ICT_cat_1` int(255) NOT NULL,
  `ICT_ex_1` int(255) NOT NULL,
  `ICT_tot_1` int(255) NOT NULL,
  `MATHS_cat_2` int(255) NOT NULL,
  `MATHS_ex_2` int(255) NOT NULL,
  `MATHS_tot_2` int(255) NOT NULL,
  `MATHS_cat_3` int(255) NOT NULL,
  `MATHS_ex_3` int(255) NOT NULL,
  `MATHS_tot_3` int(255) NOT NULL,
  `PHY_cat_2` int(255) NOT NULL,
  `PHY_ex_2` int(255) NOT NULL,
  `PHY_tot_2` int(255) NOT NULL,
  `PHY_cat_3` int(255) NOT NULL,
  `PHY_ex_3` int(255) NOT NULL,
  `PHY_tot_3` int(255) NOT NULL,
  `BIO_cat_2` int(255) NOT NULL,
  `BIO_ex_2` int(255) NOT NULL,
  `BIO_tot_2` int(255) NOT NULL,
  `BIO_cat_3` int(255) NOT NULL,
  `BIO_ex_3` int(255) NOT NULL,
  `BIO_tot_3` int(255) NOT NULL,
  `CHEM_cat_2` int(255) NOT NULL,
  `CHEM_ex_2` int(255) NOT NULL,
  `CHEM_tot_2` int(255) NOT NULL,
  `CHEM_cat_3` int(255) NOT NULL,
  `CHEM_ex_3` int(255) NOT NULL,
  `CHEM_tot_3` int(255) NOT NULL,
  `HIST_cat_2` int(255) NOT NULL,
  `HIST_ex_2` int(255) NOT NULL,
  `HIST_tot_2` int(255) NOT NULL,
  `HIST_cat_3` int(255) NOT NULL,
  `HIST_ex_3` int(255) NOT NULL,
  `HIST_tot_3` int(255) NOT NULL,
  `GEO_cat_2` int(255) NOT NULL,
  `GEO_ex_2` int(255) NOT NULL,
  `GEO_tot_2` int(255) NOT NULL,
  `GEO_cat_3` int(255) NOT NULL,
  `GEO_ex_3` int(255) NOT NULL,
  `GEO_tot_3` int(255) NOT NULL,
  `CRE_cat_2` int(255) NOT NULL,
  `CRE_ex_2` int(255) NOT NULL,
  `CRE_tot_2` int(255) NOT NULL,
  `CRE_cat_3` int(255) NOT NULL,
  `CRE_ex_3` int(255) NOT NULL,
  `CRE_tot_3` int(255) NOT NULL,
  `KINY_cat_2` int(255) NOT NULL,
  `KINY_ex_2` int(255) NOT NULL,
  `KINY_tot_2` int(255) NOT NULL,
  `KINY_cat_3` int(255) NOT NULL,
  `KINY_ex_3` int(255) NOT NULL,
  `KINY_tot_3` int(255) NOT NULL,
  `ENG_cat_2` int(255) NOT NULL,
  `ENG_ex_2` int(255) NOT NULL,
  `ENG_tot_2` int(255) NOT NULL,
  `ENG_cat_3` int(255) NOT NULL,
  `ENG_ex_3` int(255) NOT NULL,
  `ENG_tot_3` int(255) NOT NULL,
  `KISW_cat_2` int(255) NOT NULL,
  `KISW_ex_2` int(255) NOT NULL,
  `KISW_tot_2` int(255) NOT NULL,
  `KISW_cat_3` int(255) NOT NULL,
  `KISW_ex_3` int(255) NOT NULL,
  `KISW_tot_3` int(255) NOT NULL,
  `ICT_cat_2` int(255) NOT NULL,
  `ICT_ex_2` int(255) NOT NULL,
  `ICT_tot_2` int(255) NOT NULL,
  `ICT_cat_3` int(255) NOT NULL,
  `ICT_ex_3` int(255) NOT NULL,
  `ICT_tot_3` int(255) NOT NULL,
  `SSI_cat_1` int(255) NOT NULL,
  `SSI_ex_1` int(255) NOT NULL,
  `SSI_tot_1` int(255) NOT NULL,
  `BIO_cat_1` int(255) NOT NULL,
  `BIO_ex_1` int(255) NOT NULL,
  `BIO_tot_1` int(255) NOT NULL,
  `CHEM_cat_1` int(255) NOT NULL,
  `CHEM_ex_1` int(255) NOT NULL,
  `CHEM_tot_1` int(255) NOT NULL,
  `MATHS_cat_1` int(255) NOT NULL,
  `MATHS_ex_1` int(255) NOT NULL,
  `MATHS_tot_1` int(255) NOT NULL,
  `PHY_cat_1` int(255) NOT NULL,
  `PHY_ex_1` int(255) NOT NULL,
  `PHY_tot_1` int(255) NOT NULL,
  `FRE_cat_1` int(255) NOT NULL,
  `FRE_ex_1` int(255) NOT NULL,
  `FRE_tot_1` int(255) NOT NULL,
  `FRE_cat_2` int(255) NOT NULL,
  `FRE_ex_2` int(255) NOT NULL,
  `FRE_tot_2` int(255) NOT NULL,
  `FRE_cat_3` int(255) NOT NULL,
  `FRE_ex_3` int(255) NOT NULL,
  `FRE_tot_3` int(255) NOT NULL,
  `LITERARURE_cat_1` int(255) NOT NULL,
  `LITERARURE_ex_1` int(255) NOT NULL,
  `LITERARURE_tot_1` int(255) NOT NULL,
  `MTH_cat_1` int(255) NOT NULL,
  `MTH_ex_1` int(255) NOT NULL,
  `MTH_tot_1` int(255) NOT NULL,
  `FRN_cat_1` int(255) NOT NULL,
  `FRN_ex_1` int(255) NOT NULL,
  `FRN_tot_1` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ol`
--

INSERT INTO `ol` (`id`, `studentId`, `firstName`, `lastName`, `class`, `gender`, `homeTown`, `contact`, `admission`, `conduct`, `paid`, `total`, `position`, `HIST_cat_1`, `HIST_ex_1`, `HIST_tot_1`, `GEO_cat_1`, `GEO_ex_1`, `GEO_tot_1`, `CRE_cat_1`, `CRE_ex_1`, `CRE_tot_1`, `KINY_cat_1`, `KINY_ex_1`, `KINY_tot_1`, `ENG_cat_1`, `ENG_ex_1`, `ENG_tot_1`, `KISW_cat_1`, `KISW_ex_1`, `KISW_tot_1`, `ICT_cat_1`, `ICT_ex_1`, `ICT_tot_1`, `MATHS_cat_2`, `MATHS_ex_2`, `MATHS_tot_2`, `MATHS_cat_3`, `MATHS_ex_3`, `MATHS_tot_3`, `PHY_cat_2`, `PHY_ex_2`, `PHY_tot_2`, `PHY_cat_3`, `PHY_ex_3`, `PHY_tot_3`, `BIO_cat_2`, `BIO_ex_2`, `BIO_tot_2`, `BIO_cat_3`, `BIO_ex_3`, `BIO_tot_3`, `CHEM_cat_2`, `CHEM_ex_2`, `CHEM_tot_2`, `CHEM_cat_3`, `CHEM_ex_3`, `CHEM_tot_3`, `HIST_cat_2`, `HIST_ex_2`, `HIST_tot_2`, `HIST_cat_3`, `HIST_ex_3`, `HIST_tot_3`, `GEO_cat_2`, `GEO_ex_2`, `GEO_tot_2`, `GEO_cat_3`, `GEO_ex_3`, `GEO_tot_3`, `CRE_cat_2`, `CRE_ex_2`, `CRE_tot_2`, `CRE_cat_3`, `CRE_ex_3`, `CRE_tot_3`, `KINY_cat_2`, `KINY_ex_2`, `KINY_tot_2`, `KINY_cat_3`, `KINY_ex_3`, `KINY_tot_3`, `ENG_cat_2`, `ENG_ex_2`, `ENG_tot_2`, `ENG_cat_3`, `ENG_ex_3`, `ENG_tot_3`, `KISW_cat_2`, `KISW_ex_2`, `KISW_tot_2`, `KISW_cat_3`, `KISW_ex_3`, `KISW_tot_3`, `ICT_cat_2`, `ICT_ex_2`, `ICT_tot_2`, `ICT_cat_3`, `ICT_ex_3`, `ICT_tot_3`, `SSI_cat_1`, `SSI_ex_1`, `SSI_tot_1`, `BIO_cat_1`, `BIO_ex_1`, `BIO_tot_1`, `CHEM_cat_1`, `CHEM_ex_1`, `CHEM_tot_1`, `MATHS_cat_1`, `MATHS_ex_1`, `MATHS_tot_1`, `PHY_cat_1`, `PHY_ex_1`, `PHY_tot_1`, `FRE_cat_1`, `FRE_ex_1`, `FRE_tot_1`, `FRE_cat_2`, `FRE_ex_2`, `FRE_tot_2`, `FRE_cat_3`, `FRE_ex_3`, `FRE_tot_3`, `LITERARURE_cat_1`, `LITERARURE_ex_1`, `LITERARURE_tot_1`, `MTH_cat_1`, `MTH_ex_1`, `MTH_tot_1`, `FRN_cat_1`, `FRN_ex_1`, `FRN_tot_1`) VALUES
(1, '182S12025', 'KALIZA', 'patience', 'S1', 'Female', 'kabuga', '0785743323', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '440S12025', 'MURENZI', 'yves', 'S1', 'Gender', 'kicukiro', '0788887120', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '381S12025', 'KARAKE', 'fred', 'S1', 'Male', 'nyarugunga', '0788754323', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '348S12025', 'TETA', 'shilla', 'S1', 'Gender', 'rugunga', '', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '252S12025', 'MUVUNYI', 'yves', 'S1', 'Male', 'busanza', '088888888', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '847S12025', 'KEZA', 'shania', 'S1', 'Male', 'kicukiro', '07888888', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '401S12025', 'MURENZI', 'Yves', 'S1', 'Male', 'rugenge', '078888', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '580S12025', 'MASABO', 'jean', 'S1', 'Male', '', '07888888', '2025', '35', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schoolfees`
--

CREATE TABLE `schoolfees` (
  `id` int(255) NOT NULL,
  `student` varchar(111) NOT NULL,
  `amount` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL
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
(1, 2147483647, 'ARSENE', 'Iraba ', 'irarsenal2012@gmail.com', '679iraba ESSA@2024', '0785743323', 2024, 'A0', 'Male', 'ICT', 'default.png'),
(2, 0, 'IRABA', 'jules', 'te@gmail.com', '753julesESSA@2025', '00000000', 2025, 'A0', 'Male', 'ICT', 'default.png'),
(3, 0, 'KALISA', 'richard', 'kalisa@gmail.com', '642richardESSA@2025', '00000000', 2025, 'A0', 'Male', 'ICT', 'default.png');

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

-- --------------------------------------------------------

--
-- Table structure for table `stdpermissions`
--

CREATE TABLE `stdpermissions` (
  `id` int(111) NOT NULL,
  `studentId` varchar(111) NOT NULL,
  `firstName` varchar(111) NOT NULL,
  `lastName` varchar(111) NOT NULL,
  `reason` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `returnDate` varchar(111) NOT NULL,
  `depatureDate` varchar(111) NOT NULL,
  `returned` varchar(111) NOT NULL,
  `provider` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(255) NOT NULL,
  `stime` varchar(111) NOT NULL,
  `etime` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `class` varchar(111) NOT NULL,
  `mon` varchar(111) NOT NULL,
  `tue` varchar(111) NOT NULL,
  `wed` varchar(111) NOT NULL,
  `thur` varchar(111) NOT NULL,
  `fri` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `budg`
--
ALTER TABLE `budg`
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
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
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
-- Indexes for table `schoolfees`
--
ALTER TABLE `schoolfees`
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
-- Indexes for table `stdpermissions`
--
ALTER TABLE `stdpermissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `al`
--
ALTER TABLE `al`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `budg`
--
ALTER TABLE `budg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lstsubjects`
--
ALTER TABLE `lstsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ol`
--
ALTER TABLE `ol`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schoolfees`
--
ALTER TABLE `schoolfees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffpermissions`
--
ALTER TABLE `staffpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stdpermissions`
--
ALTER TABLE `stdpermissions`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

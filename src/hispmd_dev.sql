-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2024 at 05:15 PM
-- Server version: 10.11.8-MariaDB-ubu2204
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hisp_md`
--

-- --------------------------------------------------------

--
-- Table structure for table `AI_Data_Assistant`
--

CREATE TABLE `AI_Data_Assistant` (
  `ID` int(11) NOT NULL,
  `chatbot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DataQuality`
--

CREATE TABLE `DataQuality` (
  `dq_id` int(11) NOT NULL,
  `report_type` varchar(100) DEFAULT NULL,
  `timeliness_percentage` float DEFAULT NULL,
  `completeness_percentage` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DataUse`
--

CREATE TABLE `DataUse` (
  `use_id` int(11) NOT NULL,
  `institution_type` varchar(100) DEFAULT NULL,
  `pmt_active` tinyint(1) DEFAULT 0,
  `baseline_assessment` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DigitalHealth`
--

CREATE TABLE `DigitalHealth` (
  `dh_id` int(11) NOT NULL,
  `site_type` enum('District','HC','Hospital') DEFAULT NULL,
  `dhis2_functional` tinyint(1) DEFAULT 0,
  `dhis2_online` tinyint(1) DEFAULT 0,
  `mfr_updated` tinyint(1) DEFAULT 0,
  `echis_implemented` tinyint(1) DEFAULT 0,
  `emr_status` enum('Partial','Full') DEFAULT NULL,
  `ihris_hra_implemented` tinyint(1) DEFAULT 0,
  `hcmis_implemented` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DigitalHealthApps`
--

CREATE TABLE `DigitalHealthApps` (
  `app_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `standards_met` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `FinancialResources`
--

CREATE TABLE `FinancialResources` (
  `resource_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `utilized` decimal(15,2) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `FinancialResources`
--

INSERT INTO `FinancialResources` (`resource_id`, `year`, `amount`, `utilized`, `region_id`) VALUES
(1, 2024, 100000.00, 65000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `HealthFacilities`
--

CREATE TABLE `HealthFacilities` (
  `hf_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('Public','Private') NOT NULL,
  `his_audit_started` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `HealthUnits`
--

CREATE TABLE `HealthUnits` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('RHB','ZHD','WorHO') NOT NULL,
  `strategic_plan` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `HISGovernance`
--

CREATE TABLE `HISGovernance` (
  `governance_id` int(11) NOT NULL,
  `level` enum('National','Regional') NOT NULL,
  `is_functional` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `HISPartners`
--

CREATE TABLE `HISPartners` (
  `partner_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aligned_plan` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `MFR_Dashboard_Reports`
--

CREATE TABLE `MFR_Dashboard_Reports` (
  `Type` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Count` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `MFR_Dashboard_Reports`
--

INSERT INTO `MFR_Dashboard_Reports` (`Type`, `Name`, `Count`) VALUES
('facility_type', 'Clinic', 11629),
('operational_status', 'Operational', 45997),
('ownership_type', 'Other Government', 325),
('facility_type', '', 74),
('source_of_power', 'Solar-electricity from solar energy\n', 8057),
('ownership_type', 'Private for profit', 23621),
('facility_type', 'Nursing Home', 1),
('ownership_type', '', 3),
('facility_type', 'Health Center', 3926),
('facility_type', 'Home-Based Care Service ', 66),
('facility_type', 'Tele Health Center', 4),
('settlement', 'Rural', 23686),
('source_of_power', '', 18916),
('ownership_type', 'Private Not for profit', 356),
('settlement', 'Urban', 22284),
('facility_type', 'Health Post', 16735),
('total_count', 'Total Count', 45997),
('source_of_power', 'Power grid electricity from the main power line (power grid)\n', 15207),
('facility_type', 'Hospital', 520),
('facility_type', 'Laboratories', 102),
('ownership_type', 'Public/Government', 21692),
('source_of_power', 'No power sources', 6581),
('facility_type', 'Specialty Clinic', 1317),
('source_of_power', 'Generator-electricity from generator\n', 6351),
('facility_type', 'Specialty Center', 199),
('facility_type', 'Pharmacy', 11051),
('facility_type', 'Other', 450),
('source_of_power', 'Biogas', 224),
('facility_type', 'ImagingCenters', 28),
('facility_type', 'Medical Office Practice', 10),
('settlement', '', 27);

-- --------------------------------------------------------

--
-- Table structure for table `MFR_Facilities`
--

CREATE TABLE `MFR_Facilities` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `operationalStatus` varchar(50) DEFAULT NULL,
  `facilityType` varchar(50) DEFAULT NULL,
  `parentFacilityType` varchar(50) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `zone` varchar(100) DEFAULT NULL,
  `woreda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `MFR_Facilities`
--

INSERT INTO `MFR_Facilities` (`id`, `name`, `status`, `operationalStatus`, `facilityType`, `parentFacilityType`, `region`, `zone`, `woreda`) VALUES
(1091050, '                                                                                                                                                                                               ', 'Draft', NULL, NULL, NULL, 'Somali Region', NULL, NULL),
(1091051, '                                                                                                                                                                                               ', 'Draft', 'Operational', 'Drug Store', 'Pharmacy', 'Somali Region', NULL, NULL),
(1091052, '                                                                                                                                                                                               ', 'Draft', 'Operational', 'Drug Store', 'Pharmacy', 'Somali Region', NULL, NULL),
(1091053, '                                                                                                                                                                                               ', 'Draft', 'Operational', 'Drug Store', 'Pharmacy', 'Somali Region', NULL, NULL),
(1075435, '010 Arka Chinga Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1071938, '010 Durka Health Post ', 'Approved', 'Operational', NULL, NULL, 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1075083, '010 Hara Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1073344, '010 Keyamara Health Post', 'Approved', 'Operational', NULL, NULL, 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1074599, '010 Kire gebeya Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1071644, '010 Kombolcha Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'Kombolcha Town Administration', 'Kombolcha Town'),
(1071876, '011 Esola Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1074426, '011 Hardibo Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1071353, '011 Kechinareh health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1074765, '011 Kombolcha Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'Kombolcha Town Administration', 'Kombolcha Town'),
(1073736, '011 Yegodo Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1072764, '012 Gobeya Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1073016, '012 Shikf Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1073754, '012 Wetege Aberkut Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1075792, '012 wogide Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1074780, '013 Denbeya  afaf Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1071354, '013 Jari health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1075210, '013 Kegne Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Wogidi'),
(1075702, '013 Mess health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1073681, '013 Tikurena Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1075930, '014 Baba Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1070990, '014 Degere Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1075621, '014 Dejmach Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legambo'),
(1073880, '014 Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'Dessie Town Administration', 'Dessie Town'),
(1071392, '014 Kachilet Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1075189, '014 Wahilo Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1073340, '014 Yemeka Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1071409, '015 Bakalo Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1077020, '015 Debtera Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1073627, '015 Godigodit Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1075673, '015 Tsigereda Healrh Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legambo'),
(1071833, '015 Wushat Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1073633, '015 Zhita Angorgua Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1074614, '016 Shekol Sembelet Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1072207, '016 Tebisa Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1077167, '016 Tedibabemariyam Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1072310, '016 Telanta Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1071564, '016 Walida Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1072874, '017 Asim Ymara Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1072906, '017 Gulmeda Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1072237, '017 Jejeba Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1071572, '017 Seglen Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1072247, '018 Abatwuha Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1074732, '018 Ambaferit Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1073886, '018 Gedera Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1072298, '018 Keda Mstnkr health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1076502, '019 Awuyukumyu health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Wogidi'),
(1072435, '019 Gedeba Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1072217, '019 Goshmeda Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1074533, '01 Ashenga Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1072710, '01 Bededo Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1076104, '01 Geter Dijer  Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'North Wollo Zone', 'Wadila'),
(1073738, '01 Geter Shola Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'North Wollo Zone', 'Dawunt'),
(1003945, '01 Kebele Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Gambella Region', 'Gambella Town Administration', 'Gambella Town Administration'),
(1082208, '01 Kebele Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'North Wollo Zone', 'Kobo Town'),
(1085311, '01 Kebele Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'Waghimera Zone', 'Sekota Town'),
(1073314, '01 Mahdere selam Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Wogidi'),
(1076058, '01 Majete Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legehida'),
(1075545, '01 Mesnoamba Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1075471, '01 Serto Masaya Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Wogidi'),
(1076942, '01 Worento Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legambo'),
(1074118, '01 Yimery Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1075937, '020 Ferkake Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1076005, '020 Hurmo Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1072202, '020 Makefta Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Wogidi'),
(1072248, '021 Alehuat Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1070914, '021 Endoge Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1074749, '021 Ewa Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1071651, '022 Kobi Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1073091, '022 Tengobalel Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1071357, '022 Wulka Zelhon Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1076535, '023 Eloge Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1071517, '023 Mukeche Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1072625, '023 Weyis Ksat Health post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1070963, '024 Beska Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1073702, '024 Shehot Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1071267, '024 Workinaberi Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1074952, '025 Teltele Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1071944, '025 Tembeko Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1071703, '025 Tie Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1073321, '026 Gore Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1073982, '026 Ksat Kola Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1070807, '026 Nibo health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1070822, '026 wukir Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1071988, '027 Lebet Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1073282, '027 Metibelg Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Tehulederie'),
(1073587, '027 Selit Dima Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1071764, '027 Shinet Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1076955, '027Temu Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Legambo'),
(1073145, '028 Endotie Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint'),
(1074037, '028 Tingne health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Wogidi'),
(1073482, '028 Tkshgn Snat Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1073686, '028 Warja Health Post', 'Approved', 'Closed', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1071616, '029 Berada Health Post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Kelela'),
(1072744, '029 Tima Tkshgn Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Delanta'),
(1077458, '029 Yedegat Health post', 'Approved', 'Operational', 'Basic Health Post', 'Health Post', 'Amhara Region', 'South Wollo Zone', 'Amhara Sayint');

-- --------------------------------------------------------

--
-- Table structure for table `MFR_Operational_Status`
--

CREATE TABLE `MFR_Operational_Status` (
  `OperationalStatus` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Count` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `MFR_Operational_Status`
--

INSERT INTO `MFR_Operational_Status` (`OperationalStatus`, `Status`, `Count`) VALUES
('Closed', 'Approved', 4067),
('Closed', 'Denied', 11),
('Closed', 'Draft', 7),
('Closed', 'Pending', 288),
('Currently Not Operational', 'Approved', 206),
('Currently Not Operational', 'Draft', 7),
('Currently Not Operational', 'Pending', 66),
('Operational', 'Approved', 46034),
('Operational', 'Denied', 64),
('Operational', 'Draft', 243),
('Operational', 'Pending', 1240),
('Pending', 'Approved', 10),
('Pending', 'Draft', 9),
('Suspended', 'Approved', 9),
('', 'Draft', 58),
('', 'Pending', 8);

-- --------------------------------------------------------

--
-- Table structure for table `MFR_Region`
--

CREATE TABLE `MFR_Region` (
  `Region` varchar(255) DEFAULT NULL,
  `Lat` varchar(255) DEFAULT NULL,
  `Lng` varchar(255) DEFAULT NULL,
  `Count` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `MFR_Region`
--

INSERT INTO `MFR_Region` (`Region`, `Lat`, `Lng`, `Count`) VALUES
('Addis Ababa City Administration', '8.9974017660255', '38.765908138832', 2038),
('Afar Region', '11.28934384', '40.416053472041', 490),
('Amhara Region', '11.236881794217', '38.279253610518', 10557),
('Benishangul-Gumuz Region', '10.408082327159', '35.278226170258', 697),
('Central Ethiopia Region', '7.7261605532048', '37.983460676405', 2256),
('Gambella Region', '7.8101266770833', '34.690184779167', 192),
('Oromia Region', '8.2192136075397', '38.427594273241', 13046),
('Sidama Region', '6.752660987013', '38.533107605659', 1078),
('SNNP Region', '6.7250476338584', '37.628520954071', 226),
('Somali Region', '7.8084384760762', '43.171064723359', 1417),
('South Ethiopia Region', '6.2678462761632', '37.423106893832', 2432),
('South West Ethiopia Region', '7.120268309806', '36.044164693215', 1773),
('Tigray Region', '13.615184545185', '38.778737194074', 675);

-- --------------------------------------------------------

--
-- Table structure for table `MFR_Woreda`
--

CREATE TABLE `MFR_Woreda` (
  `Woreda` varchar(255) DEFAULT NULL,
  `Lat` varchar(255) DEFAULT NULL,
  `Lng` varchar(255) DEFAULT NULL,
  `Count` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `MFR_Woreda`
--

INSERT INTO `MFR_Woreda` (`Woreda`, `Lat`, `Lng`, `Count`) VALUES
('Abala Abaya', '6.687875', '37.843953', 1),
('Abala City Administration', '13.354954082913', '39.753166827638', 18),
('Abala Woreda', '13.239007238701', '39.835776921469', 6),
('Abaya', '6.2585044393289', '38.187328119539', 43),
('Abay Chomen', '9.5955383301479', '37.352329426564', 34),
('Abba Gada Sub City', '8.5445428154773', '39.273204681652', 87),
('Abe Dengoro', '9.6081037591812', '36.916010500159', 31),
('Abela abaya woreda', '6.6532037580451', '37.87642458', 25),
('Abergele', '13.047015290566', '38.971657582756', 18),
('Abergele yechila', '13.571874', '38.79568625', 15),
('Abeshegi Woreda', '8.3310109812922', '37.639746117551', 48),
('Abeshge', '8.117493', '38.382304', 1),
('Abi Adi', '13.5804335', '39.0188335', 3),
('Abichu Gna', '9.6349605164757', '39.285318270393', 28),
('Abobo', '7.9046518659167', '34.527350611705', 19),
('Abrahamo Woreda', '9.9831478991624', '34.575556897949', 48),
('Abuna Gindeberet', '9.2261760181818', '38.027201072727', 139),
('Ada', '8.7413189177799', '38.987777861805', 22),
('Adaa Berga', '9.3676571029213', '38.362913798454', 53),
('Adaar Woreda', '11.21816548241', '40.373373830882', 13),
('Adaba', '7.0499491140995', '39.43845330391', 64),
('Adadle', '5.7070114571429', '43.39155755', 14),
('Adagnagere Chako', '12.554654765382', '36.787037948874', 23),
('Adama', '8.4720577209076', '39.257023451682', 37),
('Adami Tulu Jido Kombolcha', '7.7323294148364', '38.586210166061', 59),
('Adasha Walash Sub City', '7.1107946449159', '40.003478826769', 54),
('Addis Ketema Sub City', '7.0701501044397', '38.487401926004', 13),
('Adele Woreda', '9.414823429005', '41.957056801891', 15),
('Adet Woreda', '13.831309208333', '38.55491075', 15),
('Adi Arkay', '13.081207005155', '37.810104667297', 31),
('Adi-Daero Town', '14.17076895', '38.25810085', 11),
('Adigrat Woreda', '14.2859875', '39.46231', 2),
('Adigudem Town', '11.118165', '39.102855', 2),
('Adi Haki', '13.482654', '39.446208', 1),
('Adilo Zuria Woreda', '7.236196685', '37.997655910833', 17),
('Adiyo Woreda', '7.2594336849401', '36.549635517978', 49),
('Adobtele Town Administration', '9.334860741627', '40.180133885252', 8),
('Adola Rede', '6.0279810694125', '38.986712770079', 31),
('Adola Town', '5.8764338295663', '38.9909711095', 32),
('Adwa Town', '14.160461636364', '38.853868090909', 8),
('Adwa Woreda', '13.657011225', '38.607412125', 24),
('Afambo Woreda', '11.520859089894', '41.580827796041', 8),
('Afdam', '9.6117838571429', '40.960983142857', 8),
('Afdera Woreda', '13.191812174286', '40.848464965714', 15),
('Agarfa', '7.3174889299379', '39.766596370652', 42),
('Agaro Town', '7.8535503562987', '36.588538020622', 38),
('Aga Wayyu', '5.5166174572848', '38.808097672517', 4),
('Agena Town', '8.1452523146269', '37.987442439552', 12),
('Ahferom', '14.069085864865', '39.106537432432', 26),
('AhseaWoreda', '14.234384230769', '38.543993230769', 6),
('Akaki Woreda 2', '8.6262404615385', '38.833725230769', 7),
('Akobo', '11.527067', '39.082478', 1),
('Alache Woreda', '7.1951209113074', '38.597418022968', 12),
('Alamata Town', '12.41705135868', '39.558740258292', 31),
('Alamata woreda', '12.4200076', '39.5563868', 5),
('Albuko', '10.822649683031', '39.628027430658', 50),
('Ale', '8.1536682267879', '35.512935493152', 32),
('Alefa', '11.94367884769', '36.822789108663', 71),
('Aleltu', '9.2069082764944', '39.156272687502', 28),
('Aleta Chuko Town', '6.5826380206755', '38.333686140445', 20),
('Aleta Chuko Woreda', '6.5680396443587', '38.323490986982', 27),
('Aleta Wondo Town Administration', '6.6015654615044', '38.414776407812', 22),
('Aleta Wondo Woreda', '6.6149579768275', '38.4348549', 33),
('Alge Sachi', '8.5723978673812', '35.705897001957', 36),
('alicho wiriro woreda', '7.9769438063946', '38.170847305374', 37),
('Amaya', '8.5838005924276', '37.73012593551', 49),
('Ambasel', '11.496335405259', '39.491880920914', 69),
('Ambo', '8.9653325798081', '37.963369467038', 35),
('Ambo Town', '8.9820948573304', '37.852898107209', 106),
('Ameka', '7.8007929736842', '37.803396894737', 2),
('ameka woreda', '7.7909347622028', '37.792758328536', 22),
('Ameya Town', '7.1066300731753', '36.664960200848', 10),
('Ameya Zuriya woreda', '7.0743501139665', '36.663884358101', 16),
('Amhara Sayint', '11.039312444446', '38.780352217872', 78),
('Amibara Woreda', '9.239445361101', '40.197765566867', 22),
('Amigna', '7.7954772318373', '39.906342210237', 22),
('Amuru', '9.9943955623413', '37.026213472214', 31),
('Anchar', '9.022218418805', '40.757113260864', 35),
('Andabet', '11.406209375238', '37.946012299264', 63),
('Anderacha Woreda', '7.6015437211956', '35.337551866527', 34),
('Aneded', '10.234130507216', '37.880307286537', 55),
('Anfilo', '8.9543547387141', '37.632945095759', 27),
('Angacha Town', '7.344719657377', '37.860626159016', 3),
('Angacha Woreda', '7.3476997148779', '37.856746226178', 38),
('Anger Gute Town', '9.5628504221504', '36.629346136783', 7),
('Angolala Tera', '9.4122782522381', '39.427943001033', 42),
('Angot', '11.868184151735', '39.322301316301', 21),
('Ankasha Guagusa', '10.854596782394', '36.873807002877', 53),
('Ankober', '9.574221440186', '39.760018707383', 62),
('Anna Sorra', '6.2538005051781', '38.788688775358', 34),
('ann lemo woreda', '7.6336077160465', '37.985877961395', 38),
('Antsokia Gemza', '10.651183627898', '39.778892914798', 53),
('Ararso', '8.7600846175879', '43.360496049749', 23),
('Arbamich Town', '6.0292137948015', '37.553614199464', 63),
('Arbamich Zuria Woreda', '5.9628617650136', '37.49472713515', 58),
('Arbaminch Town Administration', '6.0297165916129', '37.54968592129', 9),
('Arbaminch Zuria Woreda', '5.961073088196', '37.498485846102', 15),
('Arbegona Woreda', '6.6797631699366', '38.723796473658', 41),
('Arda Jila Me Boko', '6.0987469291139', '38.779988307595', 12),
('Areka Town', '7.0727584018182', '37.705838296753', 20),
('Arero Woreda', '4.7605098429193', '38.815761702397', 17),
('Argoba', '10.946094612395', '39.973356431178', 24),
('Argoba Special', '9.507467884551', '39.879998906212', 14),
('Arkite Town', '7.9397477163772', '38.066178082134', 5),
('Aroresa Woreda', '6.3709590981203', '38.964059776992', 25),
('Arsi Negele Rural', '7.3635087262083', '38.728106822027', 48),
('Arsi Negele Town', '7.357047985427', '38.673017892826', 58),
('Artuma Fursi', '10.551745428592', '39.958717785591', 91),
('Asagirt', '9.3736287993412', '39.600665002715', 42),
('Aseko', '8.4426951034483', '39.981671310345', 17),
('Asella Town', '7.9644696664032', '39.132645364729', 70),
('Asgede Woreda', '13.996787761905', '38.084053666667', 12),
('Assosa Town 2', '10.067728289665', '34.556516112955', 29),
('Assosa Town Woreda 1', '10.066060795416', '34.542708382241', 33),
('Atoti Ulo Woreda', '7.3211016212159', '38.194884376427', 26),
('Atsbi Woreda', '13.890156875', '39.7141409375', 10),
('Awabel', '10.248961793426', '37.955866778123', 87),
('Aware', '8.1475715111111', '44.18770147037', 16),
('Awash City Administration', '8.995013272965', '40.163835390215', 18),
('Awash Fenteale', '9.1705634170384', '39.976520887181', 11),
('Aw-barre', '9.762318493898', '43.194126690359', 70),
('Aweday Woreda', '9.3519728454545', '42.04495862268', 39),
('Awura', '13.389951660181', '37.60309589647', 15),
('Awurada Town', '7.1174334618948', '36.186185722412', 8),
('Axum Town', '14.11913075', '38.7335705', 3),
('Ayder', '12.4144825', '39.2843375', 4),
('Ayehu Guagusa', '10.70105483262', '36.772182047932', 102),
('Ayira', '9.1040353992634', '35.396888589608', 27),
('Ayisha', '10.57541555', '42.60999175', 10),
('Ayssaita City Administration', '11.587027458281', '41.436059728201', 22),
('Ayssaita Woreda', '11.58511584697', '41.403879259091', 5),
('Ayun', '7.1301746', '42.301922', 3),
('Babile', '9.2147512703209', '42.228520020697', 31),
('Babile Town', '9.2248307103778', '42.330390181763', 26),
('Babili', '8.9475224768657', '42.370465509701', 27),
('Babo Gembel', '9.4659351266116', '35.199587567149', 24),
('Bachuma Town', '6.8247768215281', '35.90289536196', 13),
('Bahel Adarash Sub City', '7.0543355914286', '38.476897351429', 6),
('Bahir Dar Town', '11.599267811066', '37.377224484498', 336),
('Bahir Dar Zuria', '11.397167142857', '37.272324857143', 5),
('Bahir dar Zuriya Woreda', '11.632198781724', '37.376721330963', 61),
('Bako Tibe', '9.0834914703075', '37.132945825253', 72),
('Bale Gasgar', '7.7287653495021', '40.002064775166', 38),
('Bambasi Woreda', '9.8168676993002', '34.719654972098', 57),
('Banja', '10.953400161243', '36.868417919269', 62),
('Barak Woreda', '9.2139353214182', '38.956368480732', 14),
('Bare', '4.62369', '42.676385685714', 18),
('Baso Liben', '10.113710690016', '37.747040821059', 69),
('Basona Werana', '9.8187473072901', '39.472406389785', 56),
('Bati', '11.209874706302', '39.999023754809', 76),
('Bati Town', '11.196083687644', '40.008263550323', 33),
('Batu Town', '7.9275252708723', '38.705660438204', 50),
('Bayra koysha woreda', '6.8313743130303', '37.603620517879', 18),
('Becho', '8.6359081131647', '38.091526269328', 70),
('Bedele', '8.4812648375197', '36.385557844226', 47),
('Bedele Town', '8.4508973451423', '36.340787698134', 29),
('Bedeno', '9.1110712580068', '41.635392901299', 60),
('Bedesa', '8.903894938497', '40.774458289453', 13),
('Begi', '9.3831823147164', '34.531048777961', 67),
('Beka dawla woreda', '5.7597554259259', '36.613789396866', 14),
('Bele town', '6.920011885867', '37.527830104845', 14),
('Bena tsemay woreda', '5.4599439512', '36.742722966311', 46),
('Bensa Woreda', '6.5206083871345', '38.833097121404', 26),
('Berahale Woreda', '13.754632', '39.889477', 1),
('Berbere', '6.724926083789', '40.146275324508', 42),
('Bercano', '6.1058268513245', '43.220530967881', 13),
('Berehet', '9.2057995835681', '39.654304037838', 34),
('Bero Woreda', '6.2701810498513', '35.216900136554', 36),
('Beto town', '6.0577894985816', '36.886885084752', 11),
('Beyeda', '13.199545592545', '38.399489776499', 26),
('Bibugn', '10.858185066967', '37.746118891313', 46),
('Bilate Zuria Woreda', '6.9296267316964', '38.24917775744', 22),
('Bilcilbur', '8.2798933060302', '43.302771612563', 9),
('Billo Nopha', '8.4079970465969', '35.587425444797', 19),
('Birbirsa Kojowa', '5.756943891635', '38.568956078707', 26),
('Birbir Town', '6.2893603591346', '37.771088878365', 7),
('Birqod', '7.6006005608696', '43.773911721739', 4),
('Bishan Guracha Woreda', '7.1463012294161', '38.508730692802', 9),
('Bita Woreda', '7.3072760338068', '35.72899667613', 41),
('Bodalay', '7.0876251512821', '44.1661393', 3),
('Boditi town', '6.9505389123775', '37.846859936642', 30),
('Boji Choqorsa', '9.3102799890135', '35.563243813528', 41),
('Boji Dirmeji', '9.3692999246187', '35.598246605664', 21),
('Boke', '8.7096997380569', '40.692495517325', 45),
('Bokeji Town', '7.651225', '39.2013385', 2),
('Bokh', '7.6441805454545', '46.653686484848', 18),
('Bokolmanyo', '4.5190017', '41.5372044', 1),
('Boku Shenen Sub City', '8.4492931737101', '39.309819131511', 44),
('Bole Sub City', '8.5543426532377', '39.277755937814', 133),
('Boloso bombe woreda', '7.1237869039188', '37.594367273286', 36),
('Boloso Sore', '7.164245625', '37.6484167', 2),
('Boloso soro woreda', '7.0630885977863', '37.717136542493', 64),
('Bona Zuria Woreda', '6.5329744749007', '38.711311461486', 37),
('Boneya Bushe', '8.8999828305504', '37.005829594512', 23),
('Bonga Town', '7.2719252355339', '36.242439866725', 45),
('Bonike Woreda', '6.0682818852564', '37.349275517628', 8),
('Bonosha Town', '7.5092014083207', '38.093621002723', 17),
('Bora', '8.2992823248346', '38.867286809692', 32),
('Bora Woreda', '12.882569444444', '39.362576666667', 5),
('Bore', '6.3682481199457', '38.632119285944', 46),
('Borecha', '8.2912606094504', '36.64806115057', 44),
('Boreda Woreda', '6.524256346292', '37.649807050664', 36),
('Borena', '10.743180810434', '38.751072062624', 101),
('Borricha Woreda', '6.9260891056456', '38.36338929514', 23),
('Boset', '8.6523436478986', '39.510325052279', 65),
('Botor Tolay', '8.317428789878', '37.338896557306', 30),
('Buee Town', '8.3256199544715', '38.551885204065', 7),
('Bugina', '12.161740712651', '38.842943421348', 24),
('Buldigilu Woreda', '10.168336458263', '35.077230770318', 32),
('Bule', '6.323167', '38.380453', 1),
('Bule Hora', '5.6983725314919', '38.296428562419', 61),
('Bule Hora Town', '5.6219182393536', '38.260001208503', 82),
('Bulen Woreda', '10.580640777898', '36.070502703065', 35),
('Bule woreda', '6.2988402777053', '38.40766161034', 19),
('Bulki town', '6.2802006808738', '36.808911789223', 10),
('Bura Woreda', '6.6221789690355', '38.835194318782', 10),
('Burayu Sub-City', '9.0736682241065', '38.660686985955', 108),
('Bure', '8.2625993947784', '35.195179748311', 34),
('Buremedaytu', '10.25246904', '40.50811492', 3),
('Bure Town', '10.706779216694', '37.06783767407', 37),
('Bure Zuria', '10.629610288571', '37.067716035409', 58),
('Burji Woreda', '5.56361861', '37.87419574', 2),
('Burka Dhintu', '8.3649452864488', '41.059644212595', 34),
('Bursa Woreda', '6.6174230391697', '38.593714338809', 23),
('Butajira Town Administration', '8.1291676172249', '38.388549861244', 2),
('Butajjra Town', '8.1270067222637', '38.375131788599', 41),
('Central Armacho', '12.923211649097', '37.047039443051', 31),
('Chabe Gambeltu Woreda', '6.4174504975', '38.86583519375', 11),
('Chagni Town', '10.963815698334', '36.508105649779', 47),
('Chaha Woreda', '8.12492356403', '37.872199965854', 46),
('Chancho Town', '9.3058768147603', '38.751435741841', 11),
('Chareti', '5.3278679777778', '41.812305111111', 23),
('Chelelka Woreda', '8.7596503525399', '38.984133752649', 55),
('Chelelkitu town', '6.0121941461538', '38.157476704327', 7),
('Chelia', '9.033632159', '37.432850873667', 28),
('Chena Woreda', '7.1440329124636', '35.797412857306', 38),
('Chencha Town', '6.2557986001278', '37.572980783433', 15),
('Chencha Town Administration', '6.2585653883495', '37.586980035437', 16),
('Chencha Zuria', '6.282857520979', '37.561772695804', 6),
('Chencha Zuria Woreda', '6.2322822437756', '37.54062881026', 31),
('Cheta Woreda', '7.0273877844371', '36.363048283113', 20),
('Chewaka', '8.9174766079162', '36.154764339771', 37),
('Chida Town', '7.1306336741584', '36.734771596832', 9),
('Chifra Woreda', '11.598931253389', '40.021889583281', 23),
('Chila Woreda', '13.490977', '39.063036', 1),
('Chilga', '12.557701086272', '37.070913060179', 63),
('Chinaksen Worda', '9.5063126363462', '42.571550501795', 48),
('Chire Woreda', '6.5068328100125', '39.074084909387', 24),
('Chirone Woreda', '6.4600455777778', '38.63577475625', 10),
('Chiro Town', '9.0923597029972', '40.862609710166', 30),
('Chiro Zurya', '9.0623503267232', '40.813649139959', 43),
('Chobi', '9.3320563690789', '37.950049246711', 10),
('Chole', '8.1536424431877', '39.93700347839', 34),
('Chomen Guduru', '9.38259271425', '37.38726115275', 18),
('Chora', '8.382316159857', '36.123033979761', 56),
('Chora Botor', '8.353136457937', '37.146750925787', 28),
('Choriso woreda', '6.0737606029083', '38.258861842953', 16),
('Chorso', '6.0684111', '38.2440972', 1),
('Chorso ', '6.026542', '38.23644', 1),
('Dabat', '12.999072554198', '37.76854366808', 45),
('Dabe Sub City', '8.5513630159626', '39.295888284492', 50),
('Dabo Hana', '8.6678667293131', '36.287928954792', 21),
('Daela Woreda', '6.5093561877119', '38.97312617161', 7),
('Dale Sadi', '8.9458668043646', '35.199709312975', 50),
('Dale Wabera', '8.9220526519803', '35.049674202307', 35),
('Dale Woreda', '6.7533920663551', '38.422734138364', 51),
('Dalifaghe', '10.616562829457', '40.310148595469', 14),
('dalocha woreda', '7.7551037623384', '38.263505570415', 30),
('Dalol', '14.290665', '39.892017', 5),
('Dama', '6.2587448425371', '38.511708450315', 29),
('Dambela Woreda', '8.48958625', '39.240862428337', 49),
('Dambe woreda', '9.7664423333333', '35.632724133333', 8),
('Dambi Dollo', '8.5322814207399', '34.801422475701', 49),
('Damboya Town', '7.3471106412371', '37.951576818557', 3),
('Damot Gale woreda', '6.9870407528377', '37.87689220008', 37),
('Damot pulusa woreda', '7.0423096426369', '37.857326496685', 39),
('Damot sore woreda', '6.9453995363445', '37.670858203361', 26),
('Damot woyde', '6.8973527055407', '37.912794191421', 34),
('Danbal', '9.8350537327586', '42.360698634483', 17),
('Dangla Town', '11.250843777175', '36.846074529228', 49),
('Dangla Zuria', '11.209835909928', '36.803415779702', 91),
('Dangur Woreda', '11.29475974941', '36.22684075118', 50),
('Dano', '8.7322808412978', '37.270408353971', 34),
('Danot', '7.5872915384615', '45.494752230769', 7),
('Dansha Town', '13.56826577813', '36.972062019339', 18),
('Daramalo Woreda', '6.261126827037', '37.30924047713', 36),
('Dara Otilcho Woreda', '6.4901895218134', '38.424812944678', 23),
('Darara Woreda', '6.8383449505618', '38.291805147994', 23),
('Daratole', '7.2678378833333', '45.2552271', 5),
('Dara Woreda', '6.4599392799708', '38.352534074476', 31),
('Darimu', '8.5899303417523', '35.497768972606', 69),
('Daro Lebu', '8.5689054824082', '40.358797426176', 55),
('Daroor', '8.2388495728261', '44.660025516304', 16),
('Dasenech woreda', '5.0009181777285', '36.307139370896', 30),
('Dawa Chefa', '10.776699816225', '39.845564851998', 84),
('Dawa Harewa', '10.784428636084', '40.00606647994', 30),
('Dawe Kechen', '6.5769102186876', '41.006884992762', 21),
('Dawe Sarar Woreda', '6.1610793147447', '41.679532879387', 24),
('Dawo', '8.7995197090652', '38.147801841876', 36),
('Dawunt', '11.483869177783', '38.880790065465', 30),
('Daya Town Administration Health Office', '6.5247649', '38.8308217', 1),
('Daye Town Administration', '6.5301001270642', '38.822469518578', 23),
('Debark Town', '13.152453774619', '37.898828301179', 27),
('Debark Zuria', '13.158571998106', '37.906605179561', 50),
('Debay Tilatgin', '10.529513909674', '38.002325096851', 46),
('Debere Birhan Town', '9.6727736784762', '39.531608312365', 9),
('Debreberhan Town', '9.6695879483789', '39.528720544533', 114),
('Debre Elias', '10.307135359898', '37.463209250673', 54),
('Debre Libanos', '9.6385785619473', '38.837990212901', 16),
('Debre Markos Town', '10.328459684972', '37.726952198497', 94),
('Debre Tabor town', '11.857294088597', '38.018274895318', 41),
('Decha Woreda', '7.149733734424', '36.193826784597', 59),
('Deder', '9.3133478807737', '41.450889809198', 65),
('Deder Town', '9.3110588086835', '41.44721952465', 17),
('Dedesa', '8.0966536900169', '36.484284683463', 49),
('Dedo', '7.5761820658491', '36.848889692009', 55),
('Dega', '8.5947541885845', '36.127098442922', 20),
('Dega Damot', '10.858790969557', '37.607469748007', 62),
('Degahbur', '8.3094228657303', '43.611176896067', 22),
('Degahbur Town', '8.224280245032', '43.562024049411', 23),
('Degem', '9.8078714389313', '38.625579495878', 11),
('Degua Tembien', '13.50958904', '39.13393188', 14),
('Dehana', '12.433585604057', '38.722810130557', 50),
('Dejen', '10.176492150312', '38.147531460132', 68),
('Dekasuftu', '5.2055929697368', '39.978575254825', 12),
('Deka Town', '7.6049864167139', '35.73272513881', 24),
('Deksis', '8.0449776261698', '39.570611773484', 32),
('Delanta', '11.593140442085', '39.218512015093', 82),
('Dello Menna', '6.4333883711514', '39.870728888799', 37),
('Demba gofa woreda', '6.3801587060951', '36.98035819845', 51),
('Dembecha', '10.580583508566', '37.472069550594', 91),
('Demboya Woreda', '7.3615401696139', '37.957822697711', 33),
('Denba Gofa', '6.384438', '36.999607', 1),
('Dendi', '9.0283690753282', '38.154821213578', 47),
('Dera', '11.699632629632', '37.611407229134', 75),
('Derashe woreda', '5.652945532122', '37.366545422389', 45),
('Dera Town', '8.3302724811867', '39.319175048834', 16),
('Derra', '10.226919766439', '38.692803747119', 40),
('Dessie Town', '11.144486702912', '39.631944166489', 100),
('Dessie Zuriya', '11.026188857014', '39.498533597872', 92),
('Dewe', '10.782910969301', '40.315252086606', 16),
('Dhagahmadaw', '7.9882812689796', '43.031434855102', 12),
('Dhanan', '6.5561381571429', '43.477830118367', 13),
('Dhash Woreda', '4.1693376926546', '38.67635180609', 13),
('Dhoboweyn', '6.0708352727273', '44.413830818182', 6),
('Dibate Woreda', '10.602016154234', '36.181836271397', 54),
('Dibayu Woreda', '8.7462445244263', '38.985768945363', 84),
('Didu', '7.9292054830946', '35.575003337536', 21),
('Dig', '7.762617777551', '44.49442377551', 8),
('Diga', '9.0342406372138', '36.360543312125', 35),
('Digeluna Tijo', '7.7423722048488', '39.216488161176', 58),
('Dila town', '6.4011333845991', '38.311967897176', 37),
('Dilla Town Administration', '6.4145682333333', '38.3097732', 3),
('Dilla Zuria', '6.2970013814433', '38.307500323711', 5),
('Dilla Zuriya woreda', '6.3586357344764', '38.334221860781', 35),
('Dilo', '4.3324488441548', '37.631123728402', 15),
('Dimma', '6.5494996346218', '35.191435929076', 14),
('Dinsho', '7.1080562439742', '39.795514665065', 24),
('Dire', '4.0753038617597', '38.31242872691', 29),
('Dire Enchini', '8.8158155507692', '37.660666544923', 27),
('Disa Woreda', '6.8096105269499', '37.156919029133', 23),
('Dita', '6.5484850875', '37.440197527083', 5),
('Dita Woreda', '6.2881294210817', '37.459099974724', 28),
('Doba', '9.2715160145811', '41.08851829779', 51),
('Dodola Rural', '6.9355589694293', '39.122199372447', 52),
('Dodola Town', '6.9781374613869', '39.186510839103', 48),
('Dodota', '8.3096823461538', '39.294880019231', 13),
('Dollo Bay', '4.5428732432432', '42.044932378378', 18),
('Dolo Ado', '4.1788620222073', '42.050348989815', 25),
('Doranii', '8.439562819359', '35.895938130962', 18),
('Doyo Gena', '7.442037', '37.847972', 1),
('Doyogena Town', '7.3584047748062', '37.785856626744', 6),
('Doyogena Woreda', '7.3579413160077', '37.796073332972', 37),
('Dubluki', '4.4533901516707', '38.162276072554', 23),
('Dubti City Administration', '11.730257908794', '41.084579061445', 19),
('Dubti Woreda', '11.976960893103', '41.297315189655', 2),
('Dugda', '8.1273245705541', '38.70522681066', 41),
('Dugda Dawa', '5.3979789567568', '38.273221681081', 17),
('Duguna fango woreda', '6.9575744142492', '38.045739435342', 38),
('Duhun', '7.19375875', '42.721996', 3),
('Dukem Woreda', '8.7591632840013', '38.949977103516', 59),
('Dulecha', '9.4586417919323', '40.003072194294', 14),
('Duna', '7.3356638', '37.6490678', 1),
('duna woreda', '7.3460981461388', '37.6611168565', 49),
('Durame Town', '7.2567999834065', '37.90569712733', 31),
('Durame Town Administration', '7.2439307', '37.9029411', 1),
('east azernet woreda', '7.7868464393617', '38.020328132689', 31),
('East Badawacho', '7.3581383333333', '37.821867', 3),
('east badawacho woreda', '7.1677477784629', '37.985181687777', 35),
('East Belesa', '12.434066077454', '38.09403076468', 48),
('East Dembia', '12.429746417825', '37.342608853168', 48),
('East Imey', '6.5095797', '42.22007835', 11),
('East Meskan Woreda', '8.0973845733096', '38.474467891815', 24),
('east silti woreda', '7.9457081588832', '38.379658078426', 18),
('Ebantu', '9.9043319722222', '36.824771555556', 18),
('Ebinat', '12.132141017389', '38.056043267318', 51),
('Efratana Gidim', '10.364950464537', '39.935593367288', 56),
('Ejere', '9.0104808706326', '38.371542916471', 40),
('Ejersa Lafo', '8.9762226855705', '38.263347077013', 29),
('Ela Anchano Woreda', '7.270278153886', '36.272795442383', 17),
('Elfata', '9.1586247111212', '37.95742263915', 17),
('Elidar Woreda', '11.961129259961', '41.641562656984', 11),
('Elkari', '5.891213037037', '42.131240814815', 14),
('El-Ogaden', '6.49327', '44.660691', 1),
('Elwaye', '4.885733994798', '37.739047222394', 16),
('Elwayne', '6.5367187272727', '43.071257909091', 6),
('Emba Alaje Woreda', '12.942931714286', '39.477938714286', 5),
('Emdibirr Town', '8.1206226721053', '37.92825663', 11),
('Enarge Enawga', '10.661591464116', '38.168507228649', 96),
('Endabaguna Town', '13.95074', '38.18681', 1),
('Endaba Tsahma', '13.90774184375', '39.0059881875', 25),
('Enda Mekoni Woreda', '13.053412842105', '39.306201105263', 12),
('Endegagn Woreda', '7.8220888965154', '37.855591993823', 27),
('Enderta woreda', '13.506044780488', '39.395242926829', 25),
('Enebse Sar Midir', '10.85466986165', '38.299040586735', 92),
('Enemay', '10.45904947031', '38.192606519404', 106),
('Enemor Ena Enen', '8.333558', '38.069915', 1),
('Enkelo Wabe', '7.4010189694011', '39.42811779306', 20),
('Enor Iner meger Woreda', '7.9037994220016', '37.784732351078', 31),
('Enor Iner WoredA', '8.0393241266069', '37.809614744066', 59),
('Ensaro', '9.8169680126984', '38.906218109714', 40),
('Ensseno Town', '8.0664003938865', '38.487789667249', 12),
('Enticho Town', '14.29204', '39.156058', 1),
('Erabti', '13.257457873121', '40.003500243508', 18),
('Erer', '9.6077717369176', '41.619856229391', 18),
('Erop Woreda', '14.526265375', '39.5446195', 8),
('Essara Woreda', '6.9546138864', '37.0158954168', 44),
('Estie', '11.584657382464', '38.059129517059', 75),
('Ewa', '11.824660725301', '40.000431057631', 12),
('Ezha Woreda', '8.1429131791841', '38.030851587468', 34),
('Fagitalekoma', '11.0923724065', '36.892545336267', 86),
('Farta', '11.819747620397', '38.011496836199', 77),
('Fedis', '9.098124385668', '42.088152208907', 43),
('Fentale', '8.8433739256545', '39.920426853946', 22),
('Ferfer', '5.1980201578947', '44.932674', 11),
('Fik', '8.1437069849417', '42.294876600095', 17),
('Filtu', '5.1176466982001', '40.666845530166', 23),
('Finote Selam Town', '10.67942898194', '37.267103437101', 48),
('Fitche Town', '9.7795484767048', '38.737309467597', 37),
('Fogera', '11.886374459676', '37.763882825336', 88),
('Fondo Town', '7.6499097686131', '37.968494489416', 6),
('Furi Sub -City', '8.9451205300393', '38.675672593442', 99),
('Gachit Woreda', '6.8068646643392', '35.81270108271', 16),
('Gacho Baba', '6.017603504918', '37.485057222951', 3),
('Gacho Baba Woreda', '6.0822479982315', '37.447047924437', 16),
('Galadi', '7.0559945625', '46.5035175625', 9),
('Galalo', '9.8892269174368', '40.506961444239', 7),
('Galhamur', '7.5898961428571', '47.310363142857', 4),
('Gambella Town Administration', '8.2438606191283', '34.592846924576', 37),
('Gambella Zuria', '8.1670913741071', '34.833715611607', 5),
('gambora woreda', '7.5684215025685', '37.666440817894', 38),
('Ganji', '9.0381832855172', '35.620150308966', 18),
('Ganta Afeshum Woreda', '14.10410645', '39.16215185', 12),
('Garbo', '7.2756829090909', '43.323859', 6),
('Garda Martha', '10.368773', '37.015082', 1),
('Garida Marta Woreda', '5.9219041943284', '37.115852196418', 20),
('Gasera', '7.3534101986395', '40.176799378363', 39),
('Gashamo', '8.1197934460301', '45.331601214675', 42),
('Gawo Kebe', '9.0345117294258', '34.891026546053', 48),
('Gazgibla', '12.389221554351', '39.024851167054', 32),
('Gazo', '11.784805056527', '39.14507824909', 27),
('Gechi', '8.332906994694', '36.46626577391', 44),
('Gedeb', '5.8893303333333', '38.335612', 3),
('Gedebano Gutazer Welene', '9.153403', '39.203193', 1),
('Gedebano Gutazer Wolene Woreda', '8.3431802784816', '38.184179631121', 43),
('Gedeb Hasasa', '7.1787111256689', '39.207904855421', 88),
('Gedeb town', '5.9152430392771', '38.249888515904', 3),
('Gedeb woreda', '5.9212971731408', '38.310068292563', 18),
('Gefersa Guje Sub-City', '9.0505166706177', '38.61356903769', 42),
('Gelana', '5.935847032372', '38.163552115056', 26),
('Gelan Guda Sub-City', '8.9284496257145', '38.654199468577', 31),
('Gelan Sub-City', '8.8325170610397', '38.819808464289', 23),
('Gelemso Town', '8.810407982438', '40.509487205992', 4),
('Gelila town', '6.1825990817927', '36.659160310084', 5),
('Gemechis', '8.9107298566704', '40.921179719117', 50),
('Gena Bosa Woreda', '7.2407780409257', '37.270788696468', 20),
('Gendawuha Town', '12.776435785531', '36.412555082932', 22),
('Gera', '7.7189243219325', '36.258314891667', 54),
('Gerba Gurach Town', '9.8141307135458', '38.413970834661', 9),
('Gereni Woreda', '11.63151685', '41.1904338', 2),
('Gerese Town Administration', '6.0697986681159', '37.343694350435', 12),
('Geresia Town', '5.9155519637179', '37.296548124477', 23),
('Geresia Zuria Woreda', '5.8861649666667', '37.27616195206', 12),
('Gesa Town', '7.0145442639048', '37.273307091879', 11),
('Gesha', '7.405703', '36.236018', 1),
('Gesha Woreda', '7.6025363066667', '35.622934449922', 35),
('Gesuba town', '6.7276373120739', '37.564172669799', 15),
('Geta', '8.197598', '38.252383', 1),
('Geto Woreda', '7.9504868867451', '37.961371188048', 25),
('Gewane', '10.103165337205', '40.602451390563', 23),
('Gewata', '7.608587', '35.966087', 1),
('Gewata Woreda', '7.5534121092887', '35.980688287282', 65),
('Geze Gofa', '6.371853', '36.899938', 1),
('Geze gofa woreda', '6.3204163870956', '36.790414906779', 35),
('Gibe', '7.6885182190476', '37.715194321429', 3),
('gibe woreda', '7.7351222895743', '37.700198883493', 30),
('Gida Ayana', '9.7185278549296', '36.636321838028', 24),
('Gidami', '8.989498958021', '34.611077001222', 37),
('Gidan', '12.055401321678', '39.329001298416', 33),
('Gide Bench Woreda', '7.1513825258275', '35.667455362724', 17),
('Gilgelbeles Town', '11.158811425723', '36.344534441763', 19),
('gimbichau town', '7.4548073789474', '37.632323915015', 15),
('Gimbichu', '8.9970232105651', '39.192154576395', 43),
('Gimbi Rural', '9.0468804883201', '35.993557757282', 38),
('Gimbi Town', '9.1758825997906', '35.833762910366', 34),
('Gimbo Woreda', '7.3843444842048', '36.253055270861', 55),
('Gindebert', '9.2308522', '37.5916854', 3),
('Ginir Rural Woreda', '7.2035928024188', '40.654287413934', 61),
('Ginir Town', '7.1322993954845', '40.715197572659', 32),
('Girar Jarso', '9.7762353749202', '38.745020608117', 20),
('Girawa', '9.1299540878808', '41.844317743677', 72),
('Girja', '6.0902293698556', '39.06001272491', 19),
('Gishe', '10.540039307769', '39.583984092542', 33),
('Gnangatom woreda', '5.2287530227723', '36.03551605', 12),
('Goba', '6.932240657617', '39.971106137106', 29),
('Goba Sub City', '7.0152497863825', '39.977346569421', 29),
('Goba woreda', '6.96822462334', '36.176162492555', 21),
('Gobu Seyo', '9.1024744891892', '36.961920887066', 16),
('Godere', '7.2293000618287', '35.316781527689', 32),
('Godey', '6.0783733728469', '43.632938422727', 28),
('Godey City', '5.9591060118222', '43.55069244501', 34),
('God-God', '4.908582', '43.216254', 1),
('Gog', '7.6449148891965', '34.282394173644', 17),
('Goglo', '6.7901114966667', '44.576921175556', 4),
('Gola Oda', '8.7575372143357', '41.514393847702', 23),
('Goljano', '8.8579112307692', '42.695904769231', 7),
('Gololcha', '8.2039687493359', '40.125428100949', 30),
('Gololcha Woreda', '7.4513262440662', '40.54372885227', 49),
('Gombora', '7.5578254', '37.6525068', 1),
('Gomma', '7.8607682154897', '36.584113308749', 69),
('Gomole', '5.104489422044', '38.339857071123', 20),
('Goncha', '10.941180860248', '38.134742732834', 115),
('Goncheri Woreda', '8.0463977115385', '37.802988871429', 10),
('Gondar City Administration', '12.602235621892', '37.447942980839', 179),
('Gondar Zuriya', '12.37674887405', '37.578502011712', 70),
('Gonjikolela Woreda', '11.172026655677', '37.635552262185', 53),
('Gonji Kollela', '10.934846466667', '37.625023866667', 10),
('Gorabaqaqsa', '6.1275886190476', '41.258491333333', 11),
('Gorche Woreda', '6.8371799236382', '38.604289824255', 27),
('Gorigasha Woreda', '6.5917096844933', '35.554067256761', 23),
('Gorka Woreda', '5.8052933945946', '37.890378024324', 6),
('Goro', '7.2280463427983', '40.033028377581', 82),
('Goro Dola Woreda', '5.5126453846154', '39.234906153846', 15),
('Goro Gutu', '9.369274201187', '41.36210069778', 47),
('Goro Muti', '9.2418643972347', '41.565462580419', 23),
('Gota-Biki', '9.62408625', '41.25242825', 4),
('Gozamin', '10.356692909079', '37.728361083094', 66),
('Guagusa Shikuda', '10.807087305912', '37.016501511479', 55),
('Guangua', '10.945666963638', '36.513474755855', 54),
('Guba Lafto', '11.852881429866', '39.571059213157', 62),
('Guba Qoricha', '8.9150057946597', '40.538039026951', 36),
('Guba Woreda', '11.274578456466', '35.2559607102', 21),
('Guchi', '3.8137647107326', '38.900707612404', 14),
('Gudeya Bila', '9.2622319573402', '37.044393864767', 24),
('Guduru', '9.50907196363', '37.465383947155', 37),
('Gulina', '12.147794493571', '39.983709248968', 14),
('Guliso', '9.1664980757225', '35.499022055491', 30),
('Gulomekeda Woreda', '14.317179578947', '39.340982421053', 12),
('Gumay', '7.9793508693446', '36.461430634038', 23),
('Gumbi Bordode', '9.0468970938557', '40.443437806768', 25),
('Gumer Woreda', '8.0019640349167', '38.065824908266', 26),
('Gumi Eldalo', '7.7155', '37.09552', 1),
('Gumi Eldalo Woreda', '5.1925022572368', '39.636697817105', 7),
('Guna', '8.3293791211921', '39.899582882049', 29),
('Guna Begemidir', '11.877635820949', '38.202884085301', 31),
('Gunagado', '7.8045210678756', '43.961575369948', 15),
('Gununo town', '6.9261430312253', '37.653017485573', 13),
('Gununo Town', '6.9771895', '37.6450723', 1),
('Gura Damole', '6.5479225824176', '40.532266940659', 13),
('Guradhamole', '6.7278850183433', '40.428168653393', 21),
('Guraferda', '6.780465', '35.199263', 1),
('Gura Ferda Woreda', '6.8602037941304', '35.26661104751', 70),
('Gursum', '9.3557689889961', '42.416626759009', 91),
('Guto Gida', '9.3474156004454', '36.556582758129', 32),
('Hababo Guduru', '9.6820748886256', '37.534203588784', 20),
('Habro', '8.8103568368575', '40.522105790757', 64),
('Habru', '11.658960895012', '39.684188917579', 151),
('Hadagala', '10.425307138347', '42.238026130579', 11),
('Hadeleala', '10.270911875846', '40.172276282964', 11),
('Hadero Town', '7.1949158051926', '37.668564870687', 17),
('Hadero Tuno Zuria Woreda', '7.2158276768527', '37.657952097804', 33),
('Hadero Tunto Zuriya', '7.239088', '37.639655', 1),
('Hadnet', '13.491529', '39.484349333333', 3),
('Hagere Mariam', '9.2174354224711', '39.406338176373', 54),
('Hagere-Selam Town', '13.63832', '39.17592', 1),
('Halaba Kuleto Town', '7.3181210696742', '38.096106576441', 54),
('Halu', '8.1803025219116', '35.346707421312', 15),
('Hamaro', '7.953546', '42.47458875', 5),
('Hambela Wamena', '5.9461416368528', '38.483231048173', 55),
('Hamer', '5.103', '36.325', 1),
('Hamer woreda', '5.1633553677253', '36.493686517356', 32),
('Hanruka', '9.4291141153915', '40.314087031683', 9),
('Harawo', '9.9723639333333', '42.938001', 15),
('Harena Bulluk', '6.3722121427625', '39.556474239711', 36),
('Hargele', '5.2632997954545', '42.334765022727', 20),
('Haro Limu', '9.8455717395161', '36.310741044624', 23),
('Haromaya', '9.2967443909953', '41.981861704389', 31),
('Haromaya Woreda', '9.4166416938606', '42.030282878324', 51),
('Harorays', '9.4634635578947', '43.107685515789', 3),
('Haro Walabu', '6.1243914275269', '38.363646598784', 22),
('Harshin', '8.84139385', '43.655128925', 21),
('Haru', '8.9678994479354', '35.807324345422', 37),
('Haruf Woreda', '7.1928242894928', '38.585771803261', 18),
('Hawa Gelan', '8.700306027943', '34.919628638042', 60),
('Hawassa Zuria Woreda', '7.0419301506032', '38.349679703485', 35),
('Hawella Woreda', '6.9153010361498', '38.514313821995', 16),
('Hawelti', '13.502349285714', '39.458933428571', 5),
('Hawi Gudina', '8.146369545037', '40.546551778247', 37),
('Hawzien Woreda', '13.787543684211', '39.180627315789', 21),
('Hayik Dar Sub City', '7.0563166202512', '38.474462183834', 7),
('Heben Arsi', '7.4862946136691', '38.808123100262', 30),
('Hidabu Abote', '9.9056161797719', '38.521562033004', 13),
('Higloley', '5.538861', '44.558204', 1),
('Hintalo Woreda', '12.814355555556', '39.461742277778', 10),
('Hirna Towm', '9.2264536', '41.1140687', 1),
('Hitosa', '8.1078520715433', '39.233385032921', 53),
('Hobicha', '6.7640833757576', '37.873054718182', 3),
('Hobicha woreda', '6.7683329442982', '37.874086755702', 15),
('Hoko Woreda', '6.2425406023328', '38.969269620684', 19),
('Holota Town', '9.0621075321663', '38.493790470946', 64),
('Homa', '9.0485048282641', '35.722910475742', 19),
('Homecho Town', '7.6926044487203', '37.728483661015', 8),
('Homosha Woreda', '10.297814319027', '34.618171721773', 26),
('Horashagah', '6.98975', '43.320769', 1),
('Horo', '9.575534020839', '37.097246516373', 14),
('Horo Bulluq', '9.6701805972441', '37.082113165354', 21),
('Hosaena Town Administration', '7.5311569313725', '37.823688527451', 4),
('hosaena town adminstration', '7.5538193349561', '37.851350236231', 135),
('hulbareg woreda', '7.7308031769715', '38.113606949374', 24),
('Hulet Eju Nese', '11.054014629552', '37.893303664032', 85),
('Hulla Woreda', '6.4948073662209', '38.523078992537', 28),
('Humbo', '6.9201313333333', '38.27054', 3),
('Humbo woreda', '6.6982353416938', '37.728015893974', 22),
('Hurrumuu', '8.2883735948718', '35.749537981502', 18),
('Hurta Town', '8.1493801333333', '39.354634133333', 3),
('Ilu', '8.812961136055', '38.353411677787', 37),
('Ilu Galane', '9.0058789999131', '37.295093608968', 30),
('Injibara Town', '10.970261801419', '36.926564884656', 69),
('Itange Woreda', '8.2579556', '34.2328716', 5),
('Jabi Tehinan', '10.692354177064', '37.246572106304', 118),
('jajura town', '7.5265594509091', '37.754133026753', 14),
('Jajura Town', '7.4592385714286', '37.692978614286', 2),
('Jama', '10.415746241689', '39.239728834238', 72),
('Janamora', '13.018249141075', '38.134640440462', 75),
('Jardga Jarte', '9.8831100675381', '37.070054755991', 23),
('Jarso', '9.49041224656', '39.582325754519', 56),
('Jawi', '11.58923313098', '36.49089776139', 135),
('Jeju', '8.3704602199401', '39.634112702027', 51),
('Jeldu', '9.2586410198208', '38.085939454839', 23),
('Jemu Town', '6.6387262438699', '35.785382385034', 15),
('Jibat', '8.706476826566', '37.452441721029', 15),
('Jida', '9.4077760766612', '39.013179194247', 19),
('Jigjiga Town', '9.3587760857903', '42.797676744086', 212),
('Jikawo', '8.2553635', '33.6127335', 2),
('Jile Timuga', '10.254236580923', '39.984084205786', 46),
('Jima Arjo', '8.7438366438363', '36.506443935163', 32),
('Jimma Geneti', '9.4298860172699', '37.114646622791', 24),
('Jimma Horo', '8.9708043407233', '34.80506034717', 28),
('Jimma Rare', '9.2106926054617', '37.342058768224', 39),
('Jimma Town', '7.6702586255243', '36.83662802843', 93),
('Jinka town', '5.7823499350974', '36.562058909758', 39),
('Jor', '7.833656223839', '34.008552341796', 6),
('Kacha Birra', '7.297702', '37.740387', 1),
('Kacha Birra Woreda', '7.2110469952128', '37.782647024216', 33),
('Kafta Humera', '13.966906884698', '36.944596572335', 39),
('Kafta Humera Woreda', '14.02544576', '36.94228612', 25),
('Kallu', '11.083735605995', '39.844654469444', 96),
('Kamashi Town', '9.4866674', '35.853317', 3),
('Kamashi Woreda', '9.6543731481481', '36.161416777778', 11),
('Kamba Town', '6.0522241916983', '37.167888892039', 10),
('Kamba Town Admistration', '6.0611927', '37.1778784', 1),
('Kamba Zuria', '6.1362396255639', '37.217731625815', 12),
('Kamba Zuria Woreda', '6.0986252168094', '37.239352772163', 30),
('Karat city administration', '5.3498471052013', '37.438153602352', 29),
('Karat Twon Administration ', '5.273605', '37.326082', 1),
('Karat zuriya woreda', '5.3645894004888', '37.400686904675', 29),
('Karsasula', '5.796436623494', '39.920807212048', 6),
('Kawo koysha woreda', '6.79137695', '37.46560325', 11),
('Kebena Special', '8.3254713835022', '37.901716552171', 28),
('Kebridahar', '6.7093799448956', '44.230064424362', 18),
('Kebridahar Town', '6.7473498459245', '44.278539706693', 24),
('Kechi Woreda', '7.0451311163957', '36.950833518193', 12),
('Kedida Gamela Woreda', '7.25698614375', '37.905271025', 16),
('Kelela', '10.578287986501', '39.004113685103', 118),
('Kele Town', '5.842949387156', '37.898259185321', 4),
('Kemisie Town', '10.711249680997', '39.879385343317', 66),
('Kena woreda', '5.3180268738582', '37.378014892512', 27),
('Kercha', '5.8089691445822', '38.44136178453', 49),
('Kercha Town', '5.7748445993622', '38.419449660666', 12),
('Kersa', '8.7508391466728', '39.990327911525', 109),
('Kersana Mamila', '8.603625912788', '38.610732819693', 47),
('Kewot', '10.017431740071', '39.921148545833', 60),
('Keyih Tekli Woreda', '13.4756326', '38.805692', 2),
('kibet town adminstration', '8.0283778822065', '38.331068718603', 18),
('Kiltu Kara', '9.6878482390805', '35.264265749425', 27),
('Kimbibit', '9.3407014458333', '39.290423969444', 5),
('Kindo didaye woreda', '6.7717891835681', '37.355753660407', 21),
('Kindo koysha woreda', '6.9200649387417', '37.542470336424', 30),
('Kinfaze Begela', '12.738934759034', '37.958784776424', 26),
('Kiramu', '9.9592107245161', '36.853478187097', 20),
('Klite Awlaelo Woreda', '12.908775', '39.48236875', 5),
('Kobo Town', '12.159645582708', '39.646641544347', 45),
('Kochore', '6.0682092758621', '38.161495568966', 11),
('Kochore woreda', '6.0471039248614', '38.161197722486', 22),
('Kofele', '7.0301085164327', '38.851309243838', 59),
('Kofole Town', '7.0747592327031', '38.785583576026', 35),
('Kogota', '6.3944813809524', '37.549587095238', 2),
('Kogota Woreda', '6.3583609825974', '37.577655403636', 10),
('Kokosa', '6.7598331554035', '38.795168569278', 48),
('Kolango Town Administration', '5.490491385567', '37.218136069072', 3),
('Kolango Zuria Woreda', '5.5050463114085', '37.238906545775', 20),
('Kola Tembien', '13.667634888889', '38.887136111111', 8),
('Kolme woreda', '5.3264942160634', '37.307117666604', 15),
('Kombolcha', '9.4540825933065', '42.131697215775', 54),
('Kombolcha Town', '11.083148267218', '39.736672170618', 116),
('Koneba Woreda', '13.65455525', '39.87959575', 4),
('Konta Koyisha Woreda', '6.7151616819549', '36.570282345113', 6),
('Koran Mula', '8.794336', '43.138353', 1),
('Kore', '7.2982329423333', '38.823385076131', 48),
('Korem Town', '12.516997692857', '39.515102746104', 4),
('Korem Woreda', '12.522815666667', '39.500292', 3),
('Kori Woreda', '12.433094730481', '41.105834837968', 11),
('Koye Fache Sub-City', '8.8928013978975', '38.823600911492', 6),
('Kucha Alfa Woreda', '6.6145865465686', '37.295077090196', 12),
('Kucha Woreda', '6.4941349678', '37.4348861838', 32),
('Kumbi', '8.2820628234146', '41.66736245187', 13),
('Kura Jida-City', '9.1679112545216', '38.927254267497', 16),
('Kurfa Chale', '9.2500551045482', '41.861140572518', 25),
('Kurmuk Woreda', '10.54017346274', '34.410734176986', 35),
('Kutaber', '11.277900146142', '39.503774650785', 56),
('Kutcha Alpha', '6.5636537833333', '37.292760216667', 3),
('Kutcha Zuria', '6.5395342057971', '37.413821693237', 10),
('Kuyu', '9.7768640940438', '38.727229234451', 14),
('Laelay Maychew', '14.100569052632', '38.732235263158', 12),
('Laelay qoraro woreda', '14.123228285714', '38.383571857143', 8),
('Lagahida', '7.3686742', '42.007597', 3),
('Laha town', '6.4907505077751', '36.582338430096', 10),
('Lalibela Town', '12.03895634909', '39.052662740863', 22),
('Lalo Asabi', '9.210215289791', '35.687560853457', 38),
('Lalo Kile', '8.885890523114', '35.333975120546', 37),
('Lanfuro', '7.050611', '38.472694', 1),
('lanfuro woreda', '7.8530816322314', '38.422012444215', 18),
('Lare', '8.3231439413665', '33.99424180795', 5),
('Lasdhankeyre', '6.56794114', '43.816279153333', 5),
('Laska Town', '6.2989847347572', '36.631195752099', 11),
('Laska zuria Woreda', '6.3121907795103', '36.673661371649', 33),
('Lasta', '11.993745038442', '39.063405354212', 41),
('Lay Armacho', '12.698842501882', '37.387359264445', 48),
('Lay Gayint', '11.661724690008', '38.486005225787', 67),
('Legambo', '10.861960975497', '39.174084609791', 94),
('Legehida', '10.691518165305', '39.296975221595', 44),
('Legehidh Woreda', '7.8798458057429', '41.01514900841', 38),
('Lehelyuub', '6.6935838', '44.9540434', 3),
('Leku Town Administration', '6.8748495040529', '38.443876527917', 16),
('Leku Town Administration Health Office', '6.8737692571429', '38.443963714286', 3),
('Lemo', '7.5903316', '37.864539775', 8),
('lemo woreda', '7.5611854879733', '37.866934276726', 61),
('Leqa Dulecha', '8.9264083234295', '36.525443821215', 33),
('Leta Sibu', '9.616347375', '35.313049458333', 13),
('Liban Jawi', '8.9574556061538', '37.535105955385', 17),
('Liben', '8.5341538', '38.929184292498', 25),
('Liben Woreda', '5.3642563661781', '39.658890086359', 16),
('Libo Kemkem', '12.120009089547', '37.761933601287', 99),
('Limu', '9.7358834583333', '36.408210291667', 14),
('Limu Genet Town', '8.0949536838103', '36.948924448832', 18),
('Limu Kosa', '8.008078941689', '36.89858445878', 61),
('Limuna Bilbilo', '7.3602117000953', '39.328065187163', 48),
('Limu Seka', '8.3693375379561', '36.87294449488', 67),
('Lode Hetosa', '8.1468562008635', '39.421775251581', 39),
('Loko Abaya Woreda', '6.694301292301', '38.223277381747', 25),
('Loma Bosa', '6.9776926816377', '37.27744485452', 42),
('Lugo Sub City', '8.5340755616808', '39.271737719275', 51),
('Lume', '8.6207999635125', '39.141913223997', 56),
('Machakel', '10.479464234384', '37.565500873592', 73),
('Machara -Micheta Town', '8.5863324166667', '40.321678466667', 6),
('Mada Walabu', '5.9124851739784', '39.65127192533', 28),
('MaekelAdiabo Woreda', '14.421727333333', '38.0475375', 7),
('Maeso', '9.4124954', '40.810233', 3),
('Magale Woreda', '12.911823981026', '39.905651604615', 22),
('Maichew Woreda', '12.782789333333', '39.5426435', 4),
('Maji Tum Town', '6.1835599572824', '35.581321608092', 9),
('Maji Woreda', '6.2277077862039', '35.544088308829', 22),
('Makuey', '8.2974864669832', '33.682553866788', 13),
('Male woreda', '5.778904949599', '36.803483147784', 36),
('Malka sirbsa woreda', '7.2013224298289', '38.605452764558', 108),
('Mana', '7.7829553692822', '36.749443984574', 49),
('Mana Abicha Sub-City', '9.1126319469835', '38.719638426874', 11),
('Mandura Woreda', '10.982004071429', '36.276438285714', 12),
('Mao Komo Special', '9.4349120714286', '34.391698428571', 21),
('Mareka Woreda', '7.0504094019231', '37.21394779216', 23),
('Mareko Special', '7.9992952699019', '38.514565303326', 39),
('Mari Mansa Woreda', '7.0452258957515', '37.112338835916', 23),
('Marsin', '7.5679640044619', '44.853707654068', 16),
('Masha Town', '7.74581716875', '35.477758655288', 16),
('Masha Woreda', '7.7648679110803', '35.471700002458', 30),
('Mayumuluqo', '13.507533', '39.684828', 1),
('Mehal Saint', '10.905325718574', '38.656913900051', 43),
('Mehal Sub City', '7.0571901166667', '38.482942530392', 7),
('Mekanisa Oromo Woreda', '9.4870443333333', '42.287951', 2),
('Mekdela', '11.230598760049', '39.041369696943', 78),
('Meket', '11.772220522417', '38.733133782122', 72),
('Meki Town', '8.155421009488', '38.822122013398', 42),
('Meko', '8.6884527720117', '36.019500121574', 14),
('Mekoni Town', '12.79983', '39.646398', 1),
('Melga Woreda', '6.9295525660759', '38.650923684979', 31),
('Melkabello', '9.0650973871605', '41.330836161344', 47),
('Melka Nonno Sub-City', '9.0325243068126', '38.671862004285', 61),
('Melka Soda', '5.4930687747839', '38.619393994714', 21),
('Melo gada woredA', '6.5748504027957', '36.820054563082', 7),
('Melo koza woreda', '6.4372723715278', '36.604357048194', 53),
('Mena Meketewa', '12.038916384417', '38.254380449524', 16),
('Mencho', '7.4522303929232', '37.031071548013', 30),
('Mendi Twon', '9.78409525', '35.095797', 3),
('Mene Sibu', '9.73612436', '35.167056386667', 40),
('Mengeshi', '7.3525001376097', '35.129653574008', 26),
('Menge Woreda', '10.349343098678', '34.772502503278', 27),
('Menhariya Sub City', '7.036849112703', '38.489764255717', 65),
('Menit Goldiya Woreda', '6.8008832327619', '35.943838620381', 25),
('Menit Shasha Woreda', '6.5066380295525', '35.873046697276', 16),
('Menz Gera Midir', '10.331934723412', '39.665750824183', 45),
('Menz Keya Gebreal', '10.220167272454', '39.387710333467', 24),
('Menz Lalo Midir', '10.149588782319', '39.550249867876', 20),
('Menz Mama Midir', '10.117592399752', '39.668520412055', 43),
('Merb Leke', '14.171433923077', '38.621960769231', 16),
('Merhabete', '10.065799652164', '39.005537259485', 70),
('Merti', '8.4816682857143', '39.801378428571', 13),
('Mesela', '9.0201885819136', '41.189591353462', 34),
('Meskan Woreda', '8.1275083157131', '38.311779633291', 34),
('Meta', '9.3997278050827', '41.580576586111', 72),
('Meta Robi', '9.333132027082', '38.312073901912', 27),
('Meta Welkite', '9.5308478056676', '38.244764622959', 23),
('Metehara Town', '8.9057364403651', '39.913397657201', 23),
('Metema', '12.859638566176', '36.249896991301', 69),
('Metu Town', '8.301224858224', '35.578688866973', 44),
('Metu Zuriya', '8.3020405200734', '35.505904634027', 36),
('Meye Muluke', '8.7545232771164', '41.896772985492', 22),
('Midaga Tola', '8.8747430971723', '42.13288429704', 25),
('Mida Kegni', '9.1339380483965', '37.519796230904', 14),
('Mida Woremo', '10.223643558358', '39.047487596837', 59),
('Mieso', '9.2036168487448', '40.719802845059', 44),
('Milhurna Aklil', '8.193502', '37.986973', 1),
('milhurna Aklile Woreda', '8.2295065784219', '38.075680181806', 39),
('Mille City Administration', '11.421187956522', '40.762917543478', 4),
('Mille Woreda', '11.479655573129', '40.872503854607', 19),
('Minjarina Shenkora', '8.9147334815245', '39.417042768047', 107),
('Mirab Abaya', '6.2358980842424', '37.604723655152', 7),
('mirab soro', '7.3984796772374', '37.527222040856', 17),
('Misha', '7.67067048', '37.79864226', 2),
('misha woreda', '7.6809519484902', '37.813579347602', 29),
('Misirak Sub City', '7.0517993916944', '38.485955039867', 10),
('mitto woreda', '7.6955094600791', '38.360542189723', 15),
('Miyo', '3.7746932750391', '38.562739230633', 33),
('Mizan Aman Town', '6.9537100990338', '35.550114188375', 95),
('Mizhiga Woreda', '9.2758767272727', '36.162305181818', 6),
('Mojana', '9.9375211738705', '39.530809182021', 41),
('Mojo Town', '8.5928189279842', '39.122618319677', 53),
('Moretna Jiru', '9.907739230936', '39.149813133164', 52),
('Motta Town', '11.077211252962', '37.88192524854', 54),
('Moyale', '3.546607', '39.062353', 1),
('moyale Town', '5.0915553871075', '38.95075302102', 37),
('Moyale Woreda', '3.6433688372491', '38.907617191375', 11),
('Mubarak', '4.310874', '40.0069565', 2),
('Mulo Woreda', '9.2612069045221', '38.600928542446', 15),
('Munesa', '7.546378408073', '38.994752346653', 65),
('Mustahil', '5.2459069285714', '44.664540428571', 15),
('Nansebo', '6.5717754985806', '39.154384208943', 41),
('Nebaru Chilga', '12.46335237249', '37.080101084519', 18),
('Nedhi Gibe', '7.9037914141182', '37.235338052478', 33),
('Nedjo Rural', '9.5267888817616', '35.503586300237', 39),
('Negele Borena Town', '5.3319893117563', '39.57481606882', 32),
('Nejo Town', '9.4938469952217', '35.501400026013', 27),
('Nekemte Town', '9.0836795306829', '36.552814612372', 121),
('Neksege Woreda', '12.958938444444', '38.812046', 5),
('Ngangatom', '5.2670777', '35.8512692', 1),
('Nole Kaba', '8.8405772313883', '35.785851606898', 34),
('Nono Benja', '8.6266157546011', '37.072484080122', 31),
('Nonoo', '8.5223291188696', '37.419193756081', 55),
('North Achefer', '11.875935530864', '37.02898373251', 3),
('North Achefer Woreda', '11.706076269565', '36.964870931768', 62),
('North ari woreda', '6.2097023577586', '36.655248388793', 29),
('North Bench Woreda', '7.0633309407134', '35.641744272894', 49),
('North Mecha', '10.706499141667', '37.359732575', 9),
('North Mecha Woreda', '11.385856422813', '37.141836842519', 106),
('Nunu Kumba', '8.9530217583333', '36.592387953889', 27),
('Oda Bultum', '8.8585418815691', '40.789721298091', 52),
('Odo Shakiso', '5.7627722308966', '38.800287939448', 50),
('Ofa woreda', '6.750110576977', '37.558789316917', 27),
('Offa', '6.8534614175439', '37.590217364912', 9),
('Ofla Woreda', '12.530993785714', '39.410579285714', 28),
('Oflla', '12.516648502892', '39.456221226493', 8),
('Omo Beyem', '7.4897966774341', '37.203019122917', 21),
('Omo Nada', '7.6343855895822', '37.225801155105', 46),
('Oyda woreda', '6.2050740358802', '36.819213265772', 24),
('Oyida', '6.9501196666667', '37.497524333333', 3),
('Pawi Woreda', '11.316319934043', '36.398390107274', 43),
('Qabribayah', '9.1522023597701', '43.348209744271', 41),
('Qabribayah Town', '9.1018957033816', '43.177795135266', 18),
('Qalafo', '5.5747866504348', '44.217873124348', 44),
('Qedamay Woyane', '13.497036666667', '39.470369', 2);
INSERT INTO `MFR_Woreda` (`Woreda`, `Lat`, `Lng`, `Count`) VALUES
('Qondala', '9.3813707218681', '34.64290825871', 27),
('Qooxle', '5.367742', '43.13083125', 3),
('Quara', '12.298415738238', '35.947107942146', 73),
('Quarit', '10.965855347891', '37.433762640362', 70),
('Qubi', '7.898526375', '41.831078375', 5),
('Quiha', '13.471575', '39.541051', 3),
('Rape woreda', '6.1868995352288', '38.321426387656', 17),
('Raso', '6.4935574', '41.796743', 3),
('Raya Alamata', '12.362180838229', '39.470712237934', 26),
('Raya Alamata Woreda', '12.4565908', '39.539058333333', 15),
('Raya Azebo Woreda', '12.425275666667', '39.589502111111', 18),
('Raya Bala', '12.430363215431', '39.693151767735', 12),
('Raya Chercher Woreda', '12.57848775', '39.7547525', 3),
('Raya Kobo', '12.062061280432', '39.617642117126', 81),
('Rayitu Woreda', '6.8514420637745', '41.208081380924', 26),
('Robe', '7.8438279552858', '39.634921900913', 67),
('Saba Boru', '5.43931', '39.029231466667', 17),
('Saden Chanka', '8.7952748531595', '35.07305412001', 33),
('Saden Sodo', '8.4270052249504', '38.291423051024', 35),
('Sagag', '7.608018', '42.836575', 2),
('Saja Town', '7.9595240780327', '37.446604571285', 38),
('Salahad', '7.0936031428571', '41.638389142857', 4),
('Samre Woreda', '13.349816333333', '38.986406888889', 6),
('Sandafa Woreda', '9.1539517867568', '39.038849453354', 38),
('sankura woreda', '7.5682715829849', '38.169044750797', 47),
('Sarmale Woreda', '5.8061102505247', '37.854384898208', 61),
('Sasiga', '9.2312397153756', '36.443236350352', 34),
('Sawla town', '6.3082527119602', '36.902629750955', 32),
('Saya Deberna Wayu', '9.7686657043501', '39.190823734824', 48),
('Saylem Woreda', '7.8032706810158', '35.792527728156', 36),
('Sebamber Town', '6.4783594949464', '37.456220546146', 9),
('Sebeta Hawas', '8.7737053368527', '38.579164759305', 36),
('Sebeta Sub-City', '8.9103597208995', '38.626468062207', 34),
('Sedal Woreda', '10.077398916667', '35.337934666667', 7),
('Sedie', '10.85550896356', '37.866763726444', 35),
('Sedie Muja', '11.409664331517', '38.437897095151', 27),
('Segen zuriya woreda', '5.4995376910097', '37.499350679253', 17),
('Sehala', '12.908431073137', '38.516194724911', 18),
('Seharti Woreda', '12.70315905', '38.7982918', 12),
('Seka Chekorsa', '7.6158664381989', '36.694467733239', 61),
('Sekela', '11.005604787302', '37.201387207448', 70),
('Sekota Town', '12.62304850189', '39.033945285812', 18),
('Sekota Zuria', '12.626264089712', '39.046321357952', 40),
('Selamago woreda', '6.1217826239822', '36.062603892154', 28),
('Selamber Town Adminstration', '6.4706433', '37.4579051', 1),
('Sele Nono', '7.9000248614331', '35.292240301917', 21),
('Selewa Woreda', '13.030658', '39.371486666667', 2),
('Semen', '13.500686285714', '39.479637142857', 7),
('Semera Logia City Administration', '11.740343053535', '40.986745040665', 26),
('Semirobi', '9.9527826333702', '40.060101154586', 14),
('Seru', '7.67599227125', '40.2396465375', 12),
('Setema', '7.9918018789696', '36.212910788436', 35),
('Setit Humera', '14.2827413224', '36.610456883933', 17),
('Setit Humra Woreda', '14.154043428571', '36.725464714286', 5),
('Sewena Woreda', '7.4132827073313', '41.097195748222', 42),
('Seyemti Adiabo woreda', '14.458105692308', '38.217496153846', 7),
('Seyo', '8.5599435628606', '34.837985248317', 33),
('Seyo Nole', '8.9975690203315', '35.730693933812', 42),
('Shabeley', '9.2790115386513', '42.62949584375', 6),
('Shabe Sombo', '7.4771457539013', '36.466873401154', 41),
('Shafambo Woreda', '6.6443302910615', '38.637780926816', 15),
('shakiso Town', '5.7729946216094', '38.909481857193', 24),
('Shakiso Town', '11.079935', '37.885322', 1),
('Shala', '7.3037809922999', '38.37850797619', 62),
('Shambu', '9.5754392110735', '37.119897494299', 35),
('Shanan Kolu', '8.4602925597348', '40.239127571319', 17),
('Shashago', '7.5558875347826', '38.077151286957', 2),
('shashago woreda', '7.5031982984521', '38.035082561024', 51),
('Shashemene Zuria', '7.2721063578779', '38.621563453587', 30),
('Shaykosh', '7.3880553337209', '43.929046108333', 14),
('Shebedino Woreda', '6.8551594434524', '38.45516510129', 30),
('Shebel Berenta', '10.428814247189', '38.350250098621', 39),
('Sheko Woreda', '7.0730140721246', '35.500203593672', 55),
('Sheno Town', '9.3173092089247', '39.270386460366', 15),
('Sheraro', '14.395592', '37.777770666667', 3),
('Sherkole Woreda', '10.664773524782', '34.785338784481', 23),
('Shewarobit Town', '10.007918444996', '39.906714157345', 42),
('Shey Bench Woreda', '6.9054014335123', '35.783305314829', 49),
('Shilabo', '6.1739908', '44.930252666667', 9),
('Shinile', '9.6727925116643', '41.842771413678', 27),
('Shinshicho Town', '7.2071143971831', '37.782438939437', 11),
('Shire Endasilase', '14.155162636364', '38.279564818182', 9),
('Shirka', '7.6082391041634', '39.497492370384', 59),
('Shishinda Town', '7.2602839021248', '35.893808877689', 14),
('Shishoinde Woreda', '7.3120308413898', '35.96085367066', 25),
('Shone Town Administration', '7.1630491882353', '37.936675847059', 2),
('shone town adminstration', '7.146433241098', '37.953564752635', 36),
('Sibaybi Woreda', '10.5233017', '40.7582342', 1),
('Sibu Sire', '9.0384828832765', '36.87805519529', 45),
('Sigmo', '7.8920601118065', '36.096709086344', 35),
('silti woreda', '7.9859247', '38.320252163875', 32),
('Simada', '11.364614549239', '38.2514815212', 49),
('Sinan', '10.535999814885', '37.777796430484', 47),
('Sinana', '7.1381722862809', '40.152610116975', 49),
('Siraro', '7.1142280015147', '38.186907745084', 55),
('siraro badawacho', '7.0897671107126', '38.084577765182', 11),
('Siraro Badewacho', '7.049886826', '38.10609781', 2),
('Sire', '8.2695666364337', '39.492249141043', 30),
('Siz Town', '6.9589203861451', '35.77440082225', 17),
('Sodo', '8.3034295', '38.054396', 2),
('Sodo Dacha', '8.49472975', '38.631744916667', 19),
('Sodo Town', '6.986607768022', '37.72013294531', 112),
('Sodo Town Administration', '6.8725511615854', '37.749078835976', 5),
('Sodo Woreda', '8.3296688604846', '38.556773708434', 49),
('Sodo Zuriya', '6.9375348', '37.7167476', 1),
('Sodo zuriya woreda', '6.8454461343558', '37.753939480456', 45),
('Sokoru', '7.9601431383769', '37.441789161474', 55),
('soro woreda', '7.453472581064', '37.655682387556', 33),
('South Achefer', '11.372061095238', '36.991002619048', 14),
('South achefer Woreda', '11.419640456993', '36.926510299766', 77),
('South ari woreda', '5.9105461236332', '36.557213722399', 30),
('South Bench', '6.833028', '35.562005', 1),
('South Bench Woreda', '6.8701839902944', '35.525718238862', 76),
('South Mecha', '11.282488242424', '37.168546387879', 6),
('South Mecha Woreda', '11.201878067085', '37.179029204002', 30),
('South Sodo Woreda', '8.2360701846914', '38.475611683827', 27),
('Soyama Town', '5.4833729793651', '37.866908435979', 10),
('Soyama zuriya woreda', '5.521393326121', '37.870546156299', 40),
('Sude', '8.0068392498123', '39.775921879873', 38),
('Sulula Fincha', '9.7899387488007', '37.416286241392', 5),
('Sululta Sub-City', '9.1809079045023', '38.759070773756', 35),
('Sululta Woreda', '9.3383336125258', '38.758089017239', 27),
('Surma Woreda', '6.0685317156972', '35.440342144064', 3),
('Suro Barguda', '5.5493067883126', '38.009626027386', 17),
('Tabor Sub City', '7.0303482875395', '38.470783591358', 63),
('Tach Armacho', '12.994377144348', '37.295728510967', 56),
('Tach Gayint', '11.721793089049', '38.480618530785', 29),
('Tahtay Adyabo', '14.385293521739', '37.786668608696', 14),
('Tahtay Maychew', '14.053822125', '38.45311325', 6),
('Tahtay Qoraro', '14.135816210526', '38.341311894737', 12),
('Takusa', '12.186900127865', '37.003056221974', 46),
('Taltale', '5.0532654216759', '37.372117999669', 30),
('Tarcha Town', '7.1504487283826', '37.168855814386', 30),
('Taremaber', '9.8566725684448', '39.794503562338', 69),
('Tebela town', '6.7034900928049', '37.776330035366', 14),
('Tebela Town Administration', '6.7048373', '37.7754947', 1),
('Tegede', '13.348099368487', '37.339744500226', 45),
('Tegedi', '13.423161412249', '37.329121370229', 30),
('Tehulederie', '11.2911038235', '39.691045829234', 93),
('Telalak', '10.922888518361', '40.209671983934', 4),
('Telemt', '13.451097176168', '38.389105782827', 31),
('Tello Woreda', '7.1163135149397', '36.471400057301', 46),
('Tena', '7.7133258395639', '39.522148867134', 23),
('Tenbaro Special', '7.2784816553542', '37.537537143575', 30),
('Tenta', '11.241255187001', '39.24657174956', 69),
('Teppi Town', '7.1983048983161', '35.422834227267', 43),
('Tercha Zuria Woreda', '7.1652842076461', '37.024028660362', 26),
('Teticha Woreda', '6.5800535415061', '38.539588672329', 21),
('Tiyo', '7.8716912490611', '39.119425985546', 32),
('Tocha Woreda', '7.0914796304173', '37.040871438122', 20),
('Togwajale Town', '9.5991787484848', '43.329277156926', 28),
('Toke Kutaye', '8.9596437534507', '37.708993092956', 35),
('Tole', '8.6315465809987', '38.380865819452', 37),
('tora town adminstration', '7.8611222880582', '38.424599255971', 18),
('Tsagibji', '12.713286204013', '39.194601621405', 7),
('Tseada Emba Woreda', '14.191926181818', '39.441546909091', 19),
('Tsegede Woreda', '13.058009631579', '37.568068473684', 19),
('Tselemti', '13.566443125', '38.343406583333', 24),
('Tsimbla woreda', '13.915840230769', '38.139198', 8),
('Tula Woreda', '6.9718197108295', '38.482957515545', 37),
('Tuliguled', '8.9949155', '42.7368518125', 9),
('Tulo', '9.2070146126185', '41.110669186999', 52),
('Turmi town', '4.9739234861057', '36.487977672798', 7),
('Uba Debretsehay', '10.6787', '37.1446', 1),
('Uba debretsehay woreda', '6.0805837966148', '36.862953353339', 29),
('undulu Woreda', '10.180639317255', '34.856324389891', 15),
('Uraga', '6.1012789726155', '38.579419864379', 62),
('Ura Woreda', '10.129231835008', '34.608893420583', 42),
('Waba ari woreda', '6.0573888878049', '36.58135774065', 8),
('Wacha Town', '7.1462543676591', '35.805182379363', 13),
('Wachile Woreda', '4.5136140300395', '38.858234314625', 9),
('Wadara', '5.7780664848485', '39.241094484848', 19),
('Wadila', '11.646141081739', '38.939716380514', 51),
('Wajerat', '13.059305', '39.63365', 2),
('Wajerat Woreda', '13.025143272727', '39.666693636364', 7),
('Walmara Woreda', '9.0595706305918', '38.484074740122', 31),
('Wama Hagalo', '8.8665108461034', '36.85411754858', 34),
('Wanthoa', '8.3574997254438', '33.388181345562', 10),
('Warder', '6.9754351887484', '45.345315690674', 27),
('Wassama Woreda', '13.545074476959', '39.901800129493', 3),
('Wayu Tuqa', '8.9960057317396', '36.638738739115', 25),
('Wembera Woreda', '10.591346102865', '35.727978485263', 34),
('Wenago', '6.2470227', '38.3520971', 1),
('Wenago town', '6.3167972915888', '38.255455528972', 4),
('Wenago woreda', '6.2786538786182', '38.269212347469', 21),
('Wensho Woreda', '6.7517317356635', '38.503461220379', 23),
('Wera Dijo Woreda', '7.4867619462392', '38.248149689964', 34),
('Wera Woreda', '7.3268116890836', '38.087459952022', 25),
('Werebabo', '11.404331242987', '39.838449925114', 86),
('Wereilu', '10.66041918013', '39.44713792614', 67),
('Were Jarso', '9.9852715202128', '38.259311082048', 23),
('West Abaya Woreda', '6.3271272683537', '37.721079477988', 48),
('West Armacho', '13.419898734939', '36.526401105306', 42),
('west azernet woreda', '7.7735496650621', '37.929846040606', 30),
('west badewacho', '7.1524601224755', '37.834309130802', 34),
('West Badewacho', '7.671', '37.623755', 1),
('West Belesa', '12.266805710254', '37.718119138025', 52),
('West Dembia', '12.313589272016', '37.221894970135', 44),
('West Imay', '6.3935045714286', '42.218964857143', 7),
('West Welabu', '6.0628804129412', '39.451432368529', 12),
('Wogera', '12.768965559451', '37.620705299551', 45),
('Wogidi', '10.580808676842', '38.74356146912', 102),
('Woldiya Town', '11.832112775349', '39.598549023261', 60),
('Woliket Town', '8.2152125393652', '37.793245642786', 63),
('Woliso', '8.5459563450964', '37.999732203725', 49),
('Woliso Town', '8.5223030290407', '37.970554852396', 44),
('Wolkait', '13.737781792638', '37.288813468859', 36),
('Wolkayit Woreda', '13.63846948', '37.4742296', 25),
('Womberma', '10.551194405065', '36.937059212537', 70),
('Wonchi', '8.6462370917145', '37.898407815258', 33),
('Wondo', '7.0799520505052', '38.62870834001', 24),
('Wondo Genet Town', '7.0214801230576', '38.603942254904', 19),
('Wondogenet  Town Administration  Health Office', '7.016598', '38.604957', 1),
('Wondogenet Woreda', '7.0346687564964', '38.618986426131', 20),
('worabe town adminstration', '7.8363220804509', '38.17996305115', 35),
('Woreda 08', '9.0130695633016', '38.847272709723', 38),
('Woreda 09', '8.992604174313', '38.829365292812', 37),
('Woreda 1', '9.0292866120614', '38.743010887021', 188),
('Woreda 10', '9.0075766747201', '38.75385898812', 150),
('Woreda 11', '8.9843057763784', '38.791213879838', 55),
('Woreda 12', '8.9729456050196', '38.777368598262', 98),
('Woreda 13', '9.0203370676024', '38.84167318466', 92),
('Woreda 14', '8.9991098702821', '38.809276976245', 52),
('Woreda 2', '9.0088140371971', '38.738133649933', 154),
('Woreda 3', '9.00421089023', '38.76082615418', 172),
('Woreda 4', '9.021336696459', '38.76053567652', 197),
('Woreda 5', '9.0129747336669', '38.754965706332', 140),
('Woreda 6', '9.0119278379423', '38.789518542731', 146),
('Woreda 7', '9.0092995051876', '38.746083850215', 169),
('Woreda 8', '9.0344723677688', '38.731735913546', 159),
('Woreda 9', '9.0081092536767', '38.749007194726', 191),
('Woreta', '11.927940973095', '37.699627583179', 40),
('Wuchale', '9.5819305752962', '38.918411054218', 38),
('Wukro Town', '13.79311', '39.598235', 1),
('Yabelo', '4.8418781844613', '38.189075083245', 21),
('Yabelo Town', '4.8955901150787', '38.092252431032', 25),
('Yahoob', '7.8997656393805', '42.583581630531', 3),
('Yallo', '12.366274421881', '39.886003439795', 12),
('Yaya Gulele', '9.6273906346032', '38.677211764444', 7),
('Yayo', '8.3674927227915', '35.929720078399', 34),
('Yeki Woreda', '7.2365518898896', '35.465607248551', 94),
('Yemalogi Welel', '8.7735992116162', '34.826103988889', 18),
('Yilemana denisa Woreda', '11.21914685873', '37.416235318328', 84),
('Yilmana Densa', '11.289187891071', '37.500039324107', 20),
('Yirgachefe', '6.2120328', '38.239306', 1),
('Yirgachefe town', '6.159147579092', '38.208382827718', 9),
('Yirgachefe Town Administration', '6.16812', '38.25498', 1),
('Yirga chefe woreda', '6.1636710623656', '38.206483153574', 34),
('Yirgalem Town Administration', '6.7502481406381', '38.39431357661', 28),
('Yocale', '8.4257156808696', '43.83050086087', 19),
('Yubdo', '8.9556398891566', '35.452932643976', 25),
('Zaba Gazo Woreda', '7.108625239309', '37.321700604924', 24),
('Zala woreda', '6.2703815275251', '37.046033893178', 58),
('Zana', '14.17839', '37.98762', 1),
('Zana Woreda', '13.606730714286', '38.280447952381', 13),
('Zata', '12.50940305576', '39.285210161751', 3),
('Zay Woreda', '9.8983704615385', '36.006316461538', 6),
('Zebela Walashe Sub City', '7.1239193843342', '39.999510922019', 13),
('Zigem', '10.702293469915', '36.502929487029', 97),
('Ziquala', '12.77370397345', '38.762726730098', 31),
('Ziway Dugda', '7.9698455655993', '38.983083866557', 46);

-- --------------------------------------------------------

--
-- Table structure for table `MFR_Zone`
--

CREATE TABLE `MFR_Zone` (
  `Zone` varchar(255) DEFAULT NULL,
  `Lat` varchar(255) DEFAULT NULL,
  `Lng` varchar(255) DEFAULT NULL,
  `Count` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `MFR_Zone`
--

INSERT INTO `MFR_Zone` (`Zone`, `Lat`, `Lng`, `Count`) VALUES
('Adama Town', '8.5459182193257', '39.277710260458', 414),
('Addis Ketema Sub City', '9.037399804414', '38.721592349966', 118),
('Afder', '5.2295936933962', '42.202602320755', 107),
('Agaro Towm', '7.8535506211654', '36.58853767641', 37),
('Agniwa zone', '7.7744968471324', '34.47377582666', 61),
('Akaki Kality Sub City', '8.8994974055005', '38.780528613444', 210),
('Ale zone', '5.5032968345725', '37.236409970508', 23),
('Ambo Town', '8.9820948573304', '37.852898107209', 106),
('Arada Sub City', '9.036247986458', '38.749388676473', 151),
('Ari zone', '5.8283484185211', '36.573251699274', 125),
('Arsi zone', '7.8698038006316', '39.515933444512', 907),
('Asella Town', '7.9644696664032', '39.132645364729', 70),
('Assosa Town Administration', '10.066108085083', '34.543099965597', 62),
('Assosa Zone', '10.158152831074', '34.701185210311', 305),
('Awi Zone', '11.030352426713', '36.745112962988', 900),
('Bahirdar Town Administration', '11.599267811066', '37.377224484498', 336),
('Bale Zone', '6.8343327391273', '40.128412676145', 367),
('Basketo zone', '6.3019002086486', '36.640570807795', 44),
('Batu Town', '7.9275252708723', '38.705660438204', 50),
('Bench Maji', '6.8067465', '35.380634', 2),
('Bench Sheko Zone', '6.9535253901612', '35.5785988383', 428),
('Bishoftu Town', '8.7560718831266', '38.960260791168', 198),
('Bole Sub City', '9.0043051257437', '38.798302556076', 259),
('Borena Zone', '4.5405653945173', '38.111639488419', 237),
('Bule Hora Town', '5.6219234083925', '38.259980689197', 81),
('Buno Bedele Zone', '8.4400576582969', '36.310609856019', 361),
('Burji Special', '5.56361861', '37.87419574', 2),
('Burji zone', '5.5133329273135', '37.86977495143', 50),
('Central Gondar Zone', '12.597955022363', '37.484684972064', 711),
('Central Sidama Zone', '6.7451143239623', '38.413158819816', 206),
('Central Zone', '13.908575894942', '38.782787898833', 171),
('Dawa', '4.0561183333333', '39.692088666667', 3),
('Dawro Zone', '7.040214810465', '37.160323968641', 298),
('Debreberhan Town Administration', '9.6695879483789', '39.528720544533', 114),
('Debre Markos Town Administration', '10.328455933811', '37.72695072999', 80),
('Debre Tabor town Administration', '11.857294088597', '38.018274895318', 41),
('Dessie Town Administration', '11.144486702912', '39.631944166489', 100),
('Dodola Town', '6.9779110520263', '39.186520384781', 47),
('Dollo', '6.978064434424', '45.349990201818', 73),
('East Bale Zone', '7.1434924381667', '40.972751249896', 293),
('East Borena Zone', '5.2684960272077', '39.418181567982', 149),
('Eastern Zone', '6.5478062744978', '38.739928561921', 272),
('East Gojjam Zone', '10.612874834724', '37.988630828352', 1247),
('East Gurage Zone', '8.151100233252', '38.386362388107', 194),
('East Hararge Zone', '9.2236964511964', '41.854519455627', 894),
('East Shewa Zone', '8.5377550887875', '39.236250898107', 474),
('East Wollega Zone', '8.9603266040437', '36.693754790797', 466),
('Erar', '8.1356098512155', '42.303167058509', 38),
('Fafan', '9.3701412257645', '42.856927939354', 493),
('Gambella Town Administration', '8.2438606191283', '34.592846924576', 37),
('Gamo Gofa', '6.178923', '36.628815', 2),
('gamo zone', '6.167173371083', '37.434159947203', 498),
('Gamo Zone', '6.214226624678', '37.445134189662', 109),
('Gardula zone', '5.652945532122', '37.366545422389', 45),
('gedeo zone', '6.3696929919161', '38.308689840944', 242),
('Gedeo Zone', '6.2042562057143', '38.257150670714', 28),
('Gilgelbeles Town Administration', '11.158811425723', '36.344534441763', 19),
('gofa zone', '6.3180667080555', '36.858309108762', 320),
('Gofa zone', '7.981876', '37.569772', 4),
('Gondar Town Administration', '12.602235621892', '37.447942980839', 179),
('Guji Zone', '6.0976568275075', '38.66988167937', 379),
('Gulele Sub City', '9.0551134195051', '38.732533282897', 113),
('Gurage Zone', '8.1676290483064', '37.877078473728', 488),
('Hadiya Zone', '7.5247253597669', '37.843535746786', 712),
('Halaba Zone', '7.3721471486659', '38.149493279537', 139),
('Hawassa City Administration', '7.0319612083458', '38.478577139931', 208),
('Holota Town', '9.0621075321663', '38.493790470946', 64),
('Horo Gudru Wellega Zone', '9.5918993622123', '37.229135120931', 332),
('Ilu Aba Bora Zone', '8.3401326894193', '35.658618671999', 376),
('Itang Special', '8.2579556', '34.2328716', 5),
('Jarar', '8.1444493831897', '44.825662096748', 209),
('Jimma Town', '7.6702586255243', '36.83662802843', 93),
('Jimma Zone', '7.82847758923', '36.877575238749', 897),
('Kaffa Zone', '7.2851832565372', '36.091525535757', 596),
('KamashI Town Administration', '9.4866674', '35.853317', 3),
('Kamashi Zone', '9.7282943205128', '35.907330794872', 38),
('Kebena Special', '8.3254713835022', '37.901716552171', 28),
('Kelem Wollega Zone', '8.8944026588799', '34.898845656593', 455),
('Kembata Tembaro Zone', '7.2491957478261', '37.886765113043', 4),
('Kembata Zone', '7.2694910746849', '37.846472371724', 278),
('Kirkos Sub City', '9.0052583593687', '38.757946631644', 149),
('Kolfe Sub city', '8.9968206955316', '38.703392044203', 273),
('Kombolcha Town Administration', '11.083133859426', '39.73670618121', 109),
('Konso zone', '5.3656794732728', '37.416654756139', 117),
('Konso Zone', '5.273605', '37.326082', 1),
('Konta Zone', '7.1637066109423', '36.509487975363', 58),
('Koore zone', '5.8070149517697', '37.857398765904', 71),
('Korahay', '7.0510184664647', '44.41743023518', 101),
('Lemi kura Sub city', '9.0079246691327', '38.843134152244', 229),
('Liben', '4.3476879318247', '41.812513451364', 91),
('Lideta Sub City', '9.0068617833943', '38.730593988513', 132),
('Majang Zone', '7.2636051329649', '35.264675733744', 58),
('Mao Komo Special Woreda', '9.4349120714286', '34.391698428571', 21),
('Mareko Special', '7.9992952699019', '38.514565303326', 39),
('Maya Town', '9.4097463371548', '42.017800635333', 105),
('Mekelle Zone', '13.375517611111', '39.459426972222', 25),
('Metekel Zone', '11.224607569555', '36.338382274175', 249),
('Metu Town', '8.301224858224', '35.578688866973', 44),
('Mojo Town', '8.5928189279842', '39.122618319677', 53),
('Moyale Town', '5.0915553871075', '38.95075302102', 37),
('Nejo Town', '9.4938469952217', '35.501400026013', 27),
('Nekemte Town', '9.0836795306829', '36.552814612372', 121),
('Nifas Silk Lafto Sub City', '8.957121112428', '38.740592047523', 213),
('Nogob', '7.0336037142857', '42.987839257143', 21),
('Northern Zone', '6.8920717735653', '38.458386219965', 239),
('North Gojjam Zone', '11.431745575638', '37.140133531978', 473),
('North Gondar Zone', '13.085614837569', '37.912908138195', 285),
('North Shewa Zone', '9.8968259973933', '39.402943507886', 1536),
('North West Zone', '14.05508202551', '38.182638', 130),
('North Wollo Zone', '11.876254257405', '39.277324129791', 729),
('Nuer Zone', '8.306491732185', '33.713401047602', 31),
('Oromia Special Zone', '10.736527304716', '39.928609800554', 426),
('Robe Town', '7.0627869166492', '39.990212703566', 96),
('Sendafa Beke Town', '9.1539517867568', '39.038849453354', 38),
('Shakiso Town', '5.7729946216094', '38.909481857193', 24),
('Shashemene Town', '7.198451209601', '38.600396151329', 147),
('Shebelle', '5.969706535489', '43.55218539419', 183),
('Sheger City', '8.9904201395709', '38.675517497884', 466),
('Sheka Zone', '7.5496296833396', '35.413486080619', 217),
('Sheno Town', '9.3173092089247', '39.270386460366', 15),
('Silte Zone', '7.8432228061325', '38.190249114664', 354),
('Sitti', '9.718413454374', '41.862527483945', 98),
('South East Zone', '13.188900274809', '39.25922119084', 79),
('Southern Zone', '6.554701527238', '38.397125078959', 344),
('South Gondar Zone', '11.676377762041', '38.156485455697', 787),
('South omo zone', '5.5678346840811', '36.566008203591', 191),
('South Omo Zone', '5.2617848709677', '35.86655083871', 2),
('South West Shewa', '8.6161159699779', '38.142644428843', 459),
('South Wollo Zone', '10.893398287528', '39.175151803579', 1521),
('Tembaro Special', '7.2784816553542', '37.537537143575', 30),
('Waghimera Zone', '12.646919402809', '38.869798700415', 229),
('West Arsi Zone', '7.2178541859884', '38.754358561847', 743),
('Western Zone', '13.668136421053', '37.253742723684', 74),
('West Gojam Zone', '10.729329878969', '37.255045503614', 691),
('West Gondar Zone', '12.651708942571', '36.270345420973', 229),
('West Guji Zone', '5.7985935797473', '38.377376576113', 327),
('West Hararge Zone', '8.8971531058844', '40.739695096502', 711),
('West Omo zone', '6.5334393675947', '35.666851656134', 178),
('West Shewa Zone', '9.0811935374439', '37.943612431803', 804),
('West Wollega Zone', '9.1539121652489', '35.480218994065', 663),
('Wolaita zone', '6.9349383914752', '37.697174594827', 706),
('Wolayita Zone', '6.8881276262646', '37.745499688911', 26),
('Woldiya Town Administration', '11.832112775349', '39.598549023261', 60),
('Woliso Town', '8.5223030290407', '37.970554852396', 44),
('Wolkait Tegedi Setiti Humera', '13.821851811906', '37.036320064669', 149),
('Yeka Sub City', '9.0360821919813', '38.785698982746', 191),
('Yem Zone', '7.9595240780327', '37.446604571285', 38),
('Zone 1', '11.645129354237', '40.986283070841', 168),
('Zone 2', '13.309184801369', '39.950321549668', 92),
('Zone 3', '9.2763043805912', '40.151290130106', 129),
('Zone 4', '12.180870050568', '39.963122289234', 44),
('Zone 5', '10.605724787797', '40.252917459155', 59),
('Zone 6', '11.077409275', '40.974334', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Publications`
--

CREATE TABLE `Publications` (
  `publication_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `level` enum('National','Regional') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Regions`
--

CREATE TABLE `Regions` (
  `region_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `his_strategic_plan` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `Regions`
--

INSERT INTO `Regions` (`region_id`, `name`, `his_strategic_plan`) VALUES
(1, 'Addis Ababa', 21);

-- --------------------------------------------------------

--
-- Table structure for table `Research`
--

CREATE TABLE `Research` (
  `research_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `conducted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webreports`
--

CREATE TABLE `webreports` (
  `rpt_id` int(11) NOT NULL,
  `rpt_name` varchar(100) NOT NULL,
  `rpt_title` varchar(200) DEFAULT NULL,
  `rpt_cdate` datetime NOT NULL,
  `rpt_mdate` datetime DEFAULT NULL,
  `rpt_content` mediumtext NOT NULL,
  `rpt_owner` varchar(100) NOT NULL,
  `rpt_status` varchar(10) NOT NULL DEFAULT 'public',
  `rpt_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `webreports`
--

INSERT INTO `webreports` (`rpt_id`, `rpt_name`, `rpt_title`, `rpt_cdate`, `rpt_mdate`, `rpt_content`, `rpt_owner`, `rpt_status`, `rpt_type`) VALUES
(1, 'MFR_Reporting_1', 'MFR_Reporting Report 1', '2024-07-01 18:46:02', '2024-07-01 18:47:43', '<report>\n<attr value=\"table_type\">db</attr>\n<attr value=\"group_fields\"><attr value=\"0\"><attr value=\"name\">MFR_Reporting.Type</attr>\n<attr value=\"int_type\">0</attr>\n<attr value=\"ss\">true</attr>\n<attr value=\"group_order\">1</attr>\n<attr value=\"color1\">FF0000</attr>\n<attr value=\"color2\">CC0000</attr>\n</attr>\n<attr value=\"1\"><attr value=\"name\">Summary</attr>\n<attr value=\"crosstable\">false</attr>\n<attr value=\"sps\">true</attr>\n<attr value=\"sds\">true</attr>\n<attr value=\"sgs\">true</attr>\n<attr value=\"sum_x\">true</attr>\n<attr value=\"sum_y\">true</attr>\n<attr value=\"sum_total\">true</attr>\n</attr>\n</attr>\n<attr value=\"tables\"><attr value=\"0\">MFR_Reporting</attr>\n</attr>\n<attr value=\"totals\"><attr value=\"MFR_Reporting_Type\"><attr value=\"name\">Type</attr>\n<attr value=\"table\">MFR_Reporting</attr>\n<attr value=\"label\">Type</attr>\n<attr value=\"show\">true</attr>\n<attr value=\"min\">false</attr>\n<attr value=\"max\">false</attr>\n<attr value=\"sum\">false</attr>\n<attr value=\"avg\">false</attr>\n<attr value=\"curr\">false</attr>\n<attr value=\"search\"></attr>\n<attr value=\"view_format\"></attr>\n<attr value=\"edit_format\">Text field</attr>\n<attr value=\"display_field\"></attr>\n<attr value=\"linkfield\"></attr>\n<attr value=\"show_thumbnail\"></attr>\n<attr value=\"need_encode\">1</attr>\n<attr value=\"thumbnail\"></attr>\n<attr value=\"listformatobj_imgwidth\">0</attr>\n<attr value=\"listformatobj_imgheight\">0</attr>\n<attr value=\"hlprefix\"></attr>\n<attr value=\"listformatobj_filename\"></attr>\n<attr value=\"lookupobj_lookuptype\">0</attr>\n<attr value=\"editformatobj_lookupobj_customdispaly\"></attr>\n<attr value=\"editformatobj_lookupobj_table\"></attr>\n<attr value=\"editformatobj_lookupobj_where\"></attr>\n</attr>\n<attr value=\"MFR_Reporting_Name\"><attr value=\"name\">Name</attr>\n<attr value=\"table\">MFR_Reporting</attr>\n<attr value=\"label\">Name</attr>\n<attr value=\"show\">true</attr>\n<attr value=\"min\">false</attr>\n<attr value=\"max\">false</attr>\n<attr value=\"sum\">false</attr>\n<attr value=\"avg\">false</attr>\n<attr value=\"curr\">false</attr>\n<attr value=\"search\"></attr>\n<attr value=\"view_format\"></attr>\n<attr value=\"edit_format\">Text field</attr>\n<attr value=\"display_field\"></attr>\n<attr value=\"linkfield\"></attr>\n<attr value=\"show_thumbnail\"></attr>\n<attr value=\"need_encode\">1</attr>\n<attr value=\"thumbnail\"></attr>\n<attr value=\"listformatobj_imgwidth\">0</attr>\n<attr value=\"listformatobj_imgheight\">0</attr>\n<attr value=\"hlprefix\"></attr>\n<attr value=\"listformatobj_filename\"></attr>\n<attr value=\"lookupobj_lookuptype\">0</attr>\n<attr value=\"editformatobj_lookupobj_customdispaly\"></attr>\n<attr value=\"editformatobj_lookupobj_table\"></attr>\n<attr value=\"editformatobj_lookupobj_where\"></attr>\n</attr>\n<attr value=\"MFR_Reporting_Count\"><attr value=\"name\">Count</attr>\n<attr value=\"table\">MFR_Reporting</attr>\n<attr value=\"label\">Count</attr>\n<attr value=\"show\">true</attr>\n<attr value=\"min\">false</attr>\n<attr value=\"max\">false</attr>\n<attr value=\"sum\">false</attr>\n<attr value=\"avg\">false</attr>\n<attr value=\"curr\">false</attr>\n<attr value=\"search\"></attr>\n<attr value=\"view_format\"></attr>\n<attr value=\"edit_format\">Text field</attr>\n<attr value=\"display_field\"></attr>\n<attr value=\"linkfield\"></attr>\n<attr value=\"show_thumbnail\"></attr>\n<attr value=\"need_encode\">1</attr>\n<attr value=\"thumbnail\"></attr>\n<attr value=\"listformatobj_imgwidth\">0</attr>\n<attr value=\"listformatobj_imgheight\">0</attr>\n<attr value=\"hlprefix\"></attr>\n<attr value=\"listformatobj_filename\"></attr>\n<attr value=\"lookupobj_lookuptype\">0</attr>\n<attr value=\"editformatobj_lookupobj_customdispaly\"></attr>\n<attr value=\"editformatobj_lookupobj_table\"></attr>\n<attr value=\"editformatobj_lookupobj_where\"></attr>\n</attr>\n</attr>\n<attr value=\"sort_fields\"><attr value=\"0\"><attr value=\"name\">MFR_Reporting.Type</attr>\n<attr value=\"desc\">false</attr>\n</attr>\n</attr>\n<attr value=\"miscellaneous\"><attr value=\"type\">stepped</attr>\n<attr value=\"print_friendly\">true</attr>\n<attr value=\"lines_num\">30</attr>\n</attr>\n<attr value=\"settings\"><attr value=\"name\">MFR_Reporting_1</attr>\n<attr value=\"title\">MFR_Reporting Report 1</attr>\n<attr value=\"status\">private</attr>\n</attr>\n<attr value=\"owner\"></attr>\n<attr value=\"tmp_active\">x</attr>\n<attr value=\"table_name\">MFR_Reporting</attr>\n<attr value=\"short_table_name\">mfr_reporting</attr>\n<attr value=\"customLabels\"></attr>\n<attr value=\"sql\">SELECT\n`MFR_Reporting`.`Type` as `f1`, \n`MFR_Reporting`.`Name` as `f2`, \n`MFR_Reporting`.`Count` as `f3` \nFROM `MFR_Reporting`</attr>\n<attr value=\"sql_preview\">SELECT\n`MFR_Reporting`.`Type` as `f1`, \n`MFR_Reporting`.`Name` as `f2`, \n`MFR_Reporting`.`Count` as `f3` \nFROM `MFR_Reporting`</attr>\n<attr value=\"where\"></attr>\n<attr value=\"order_by\"> \nORDER BY `MFR_Reporting`.`Type` ASC</attr>\n<attr value=\"order_by_preview\"></attr>\n<attr value=\"group_by\"></attr>\n<attr value=\"table_relations\"><attr value=\"left_table\">MFR_Reporting</attr>\n<attr value=\"right_table\">-1</attr>\n<attr value=\"left_field\">Name</attr>\n<attr value=\"right_field\"></attr>\n<attr value=\"join_type\">RIGHT OUTER JOIN </attr>\n<attr value=\"relations\"></attr>\n<attr value=\"join_tables\"></attr>\n<attr value=\"relat\"></attr>\n</attr>\n<attr value=\"where_condition\"></attr>\n</report>\n', '', 'private', 'report'),
(2, 'MFR_Reporting_1', 'MFR_Reporting Chart 1', '2024-07-01 18:48:16', '2024-07-01 18:49:45', '<report>\n<attr value=\"table_type\">db</attr>\n<attr value=\"tables\"><attr value=\"0\">MFR_Reporting</attr>\n</attr>\n<attr value=\"chart_type\"><attr value=\"type\">2d_bar</attr>\n</attr>\n<attr value=\"parameters\"><attr value=\"0\"><attr value=\"name\">Count</attr>\n<attr value=\"size\"></attr>\n<attr value=\"gaugeMinValue\"></attr>\n<attr value=\"gaugeMaxValue\"></attr>\n<attr value=\"gaugeColorZone\"><attr value=\"0\"><attr value=\"gaugeColor\">FF0000</attr>\n<attr value=\"gaugeBeginColor\"></attr>\n<attr value=\"gaugeEndColor\"></attr>\n</attr>\n</attr>\n<attr value=\"table\">MFR_Reporting</attr>\n<attr value=\"agr_func\"></attr>\n<attr value=\"series_color\">FF0000</attr>\n<attr value=\"label\">Count</attr>\n<attr value=\"ohlcOpen\"></attr>\n<attr value=\"ohlcClose\"></attr>\n<attr value=\"ohlcHigh\"></attr>\n<attr value=\"ohlcLow\"></attr>\n<attr value=\"ohlcColor\"></attr>\n<attr value=\"ohlcCandleColor\"></attr>\n</attr>\n<attr value=\"1\"><attr value=\"name\">Type</attr>\n<attr value=\"size\"></attr>\n<attr value=\"gaugeMinValue\"></attr>\n<attr value=\"gaugeMaxValue\"></attr>\n<attr value=\"gaugeColorZone\"><attr value=\"0\"><attr value=\"gaugeColor\">FF0000</attr>\n<attr value=\"gaugeBeginColor\"></attr>\n<attr value=\"gaugeEndColor\"></attr>\n</attr>\n</attr>\n<attr value=\"table\">MFR_Reporting</attr>\n<attr value=\"agr_func\"></attr>\n<attr value=\"series_color\"></attr>\n<attr value=\"label\"></attr>\n<attr value=\"ohlcOpen\"></attr>\n<attr value=\"ohlcClose\"></attr>\n<attr value=\"ohlcHigh\"></attr>\n<attr value=\"ohlcLow\"></attr>\n<attr value=\"ohlcColor\"></attr>\n<attr value=\"ohlcCandleColor\"></attr>\n</attr>\n</attr>\n<attr value=\"fields\"><attr value=\"0\"><attr value=\"name\">Count</attr>\n<attr value=\"label\">Count</attr>\n<attr value=\"search\"></attr>\n</attr>\n<attr value=\"1\"><attr value=\"name\">Type</attr>\n<attr value=\"label\"></attr>\n<attr value=\"search\"></attr>\n</attr>\n</attr>\n<attr value=\"appearance\"><attr value=\"slegend\">true</attr>\n<attr value=\"sgrid\">true</attr>\n<attr value=\"sname\">true</attr>\n<attr value=\"sval\">true</attr>\n<attr value=\"sanim\">true</attr>\n<attr value=\"scur\">false</attr>\n<attr value=\"sstacked\">false</attr>\n<attr value=\"saxes\">false</attr>\n<attr value=\"slog\">false</attr>\n<attr value=\"dec\">2</attr>\n<attr value=\"head\">MFR_Reporting Chart 1</attr>\n<attr value=\"foot\">MFR_Reporting Chart 1</attr>\n<attr value=\"accumulstyle\">0</attr>\n<attr value=\"aqua\">0</attr>\n<attr value=\"cview\">0</attr>\n<attr value=\"accumulinvert\">false</attr>\n<attr value=\"is3d\"></attr>\n<attr value=\"isstacked\"></attr>\n<attr value=\"autoupdate\">false</attr>\n<attr value=\"cscroll\">true</attr>\n<attr value=\"update_interval\">5</attr>\n<attr value=\"maxbarscroll\">10</attr>\n</attr>\n<attr value=\"settings\"><attr value=\"name\">MFR_Reporting_1</attr>\n<attr value=\"title\">MFR_Reporting Chart 1</attr>\n<attr value=\"status\">private</attr>\n<attr value=\"owner\"></attr>\n<attr value=\"table_name\">MFR_Reporting</attr>\n<attr value=\"short_table_name\">mfr_reporting</attr>\n</attr>\n<attr value=\"owner\"></attr>\n<attr value=\"tmp_active\"></attr>\n<attr value=\"table_name\">MFR_Reporting</attr>\n<attr value=\"short_table_name\">mfr_reporting</attr>\n<attr value=\"customLabels\"><attr value=\"MFR_Reporting_Type\">f1</attr>\n<attr value=\"MFR_Reporting_Name\">f2</attr>\n<attr value=\"MFR_Reporting_Count\">f3</attr>\n</attr>\n<attr value=\"sql\">SELECT\n`MFR_Reporting`.`Type` AS `f1`, \n`MFR_Reporting`.`Name` AS `f2`, \n`MFR_Reporting`.`Count` AS `f3` \nFROM `MFR_Reporting`</attr>\n<attr value=\"sql_preview\">SELECT\n`MFR_Reporting`.`Type` AS `f1`, \n`MFR_Reporting`.`Name` AS `f2`, \n`MFR_Reporting`.`Count` AS `f3` \nFROM `MFR_Reporting`</attr>\n<attr value=\"where\"></attr>\n<attr value=\"order_by\"></attr>\n<attr value=\"order_by_preview\"></attr>\n<attr value=\"group_by\"></attr>\n<attr value=\"table_relations\"><attr value=\"left_table\">MFR_Reporting</attr>\n<attr value=\"right_table\">-1</attr>\n<attr value=\"left_field\">Name</attr>\n<attr value=\"right_field\"></attr>\n<attr value=\"join_type\">INNER JOIN </attr>\n<attr value=\"relations\"></attr>\n<attr value=\"join_tables\"></attr>\n<attr value=\"relat\"></attr>\n</attr>\n<attr value=\"group_by_condition\"><attr value=\"group_by_toggle\">false</attr>\n</attr>\n<attr value=\"group_by_toggle\"></attr>\n</report>\n', '', 'private', 'chart');

-- --------------------------------------------------------

--
-- Table structure for table `webreport_admin`
--

CREATE TABLE `webreport_admin` (
  `id` int(11) NOT NULL,
  `tablename` varchar(300) DEFAULT NULL,
  `db_type` varchar(10) DEFAULT NULL,
  `group_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `webreport_admin`
--

INSERT INTO `webreport_admin` (`id`, `tablename`, `db_type`, `group_name`) VALUES
(1, 'DataQuality', 'db', ''),
(2, 'DataUse', 'db', ''),
(3, 'DigitalHealth', 'db', ''),
(4, 'DigitalHealthApps', 'db', ''),
(5, 'FinancialResources', 'db', ''),
(6, 'HealthFacilities', 'db', ''),
(7, 'HealthUnits', 'db', ''),
(8, 'HISGovernance', 'db', ''),
(9, 'HISPartners', 'db', ''),
(10, 'MFR_Reporting', 'db', ''),
(11, 'Publications', 'db', ''),
(12, 'Regions', 'db', ''),
(13, 'Research', 'db', ''),
(14, 'Workforce', 'db', '');

-- --------------------------------------------------------

--
-- Table structure for table `webreport_sql`
--

CREATE TABLE `webreport_sql` (
  `id` int(11) NOT NULL,
  `sqlname` varchar(100) DEFAULT NULL,
  `sqlcontent` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webreport_style`
--

CREATE TABLE `webreport_style` (
  `report_style_id` int(11) NOT NULL,
  `type` varchar(6) NOT NULL,
  `field` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `style_str` mediumtext NOT NULL,
  `uniq` int(11) DEFAULT NULL,
  `repname` varchar(255) NOT NULL,
  `styletype` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Workforce`
--

CREATE TABLE `Workforce` (
  `workforce_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `adequate_staff` tinyint(1) DEFAULT 0,
  `competency_index` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `Workforce`
--

INSERT INTO `Workforce` (`workforce_id`, `region_id`, `adequate_staff`, `competency_index`) VALUES
(1, 1, 127, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AI_Data_Assistant`
--
ALTER TABLE `AI_Data_Assistant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `DataQuality`
--
ALTER TABLE `DataQuality`
  ADD PRIMARY KEY (`dq_id`);

--
-- Indexes for table `DataUse`
--
ALTER TABLE `DataUse`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `DigitalHealth`
--
ALTER TABLE `DigitalHealth`
  ADD PRIMARY KEY (`dh_id`);

--
-- Indexes for table `DigitalHealthApps`
--
ALTER TABLE `DigitalHealthApps`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `FinancialResources`
--
ALTER TABLE `FinancialResources`
  ADD PRIMARY KEY (`resource_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `HealthFacilities`
--
ALTER TABLE `HealthFacilities`
  ADD PRIMARY KEY (`hf_id`);

--
-- Indexes for table `HealthUnits`
--
ALTER TABLE `HealthUnits`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `HISGovernance`
--
ALTER TABLE `HISGovernance`
  ADD PRIMARY KEY (`governance_id`);

--
-- Indexes for table `HISPartners`
--
ALTER TABLE `HISPartners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `Publications`
--
ALTER TABLE `Publications`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `Regions`
--
ALTER TABLE `Regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `Research`
--
ALTER TABLE `Research`
  ADD PRIMARY KEY (`research_id`);

--
-- Indexes for table `webreports`
--
ALTER TABLE `webreports`
  ADD PRIMARY KEY (`rpt_id`);

--
-- Indexes for table `webreport_admin`
--
ALTER TABLE `webreport_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webreport_sql`
--
ALTER TABLE `webreport_sql`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webreport_style`
--
ALTER TABLE `webreport_style`
  ADD PRIMARY KEY (`report_style_id`);

--
-- Indexes for table `Workforce`
--
ALTER TABLE `Workforce`
  ADD PRIMARY KEY (`workforce_id`),
  ADD KEY `region_id` (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AI_Data_Assistant`
--
ALTER TABLE `AI_Data_Assistant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DataQuality`
--
ALTER TABLE `DataQuality`
  MODIFY `dq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DataUse`
--
ALTER TABLE `DataUse`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DigitalHealth`
--
ALTER TABLE `DigitalHealth`
  MODIFY `dh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DigitalHealthApps`
--
ALTER TABLE `DigitalHealthApps`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `FinancialResources`
--
ALTER TABLE `FinancialResources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HealthFacilities`
--
ALTER TABLE `HealthFacilities`
  MODIFY `hf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HealthUnits`
--
ALTER TABLE `HealthUnits`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HISGovernance`
--
ALTER TABLE `HISGovernance`
  MODIFY `governance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HISPartners`
--
ALTER TABLE `HISPartners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Publications`
--
ALTER TABLE `Publications`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Regions`
--
ALTER TABLE `Regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Research`
--
ALTER TABLE `Research`
  MODIFY `research_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webreports`
--
ALTER TABLE `webreports`
  MODIFY `rpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `webreport_admin`
--
ALTER TABLE `webreport_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `webreport_sql`
--
ALTER TABLE `webreport_sql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webreport_style`
--
ALTER TABLE `webreport_style`
  MODIFY `report_style_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Workforce`
--
ALTER TABLE `Workforce`
  MODIFY `workforce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `FinancialResources`
--
ALTER TABLE `FinancialResources`
  ADD CONSTRAINT `FinancialResources_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `Regions` (`region_id`);

--
-- Constraints for table `Workforce`
--
ALTER TABLE `Workforce`
  ADD CONSTRAINT `Workforce_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `Regions` (`region_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

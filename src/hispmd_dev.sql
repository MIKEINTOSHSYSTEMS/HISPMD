-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2024 at 04:02 PM
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
-- Table structure for table `DHIS2_Periods`
--

CREATE TABLE `DHIS2_Periods` (
  `Period_ID` varchar(50) NOT NULL,
  `Period_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `DHIS2_Periods`
--

INSERT INTO `DHIS2_Periods` (`Period_ID`, `Period_Name`) VALUES
('LAST_12_MONTHS', 'Last 12 Months'),
('LAST_12_WEEKS', 'Last 12 Weeks'),
('LAST_2_SIXMONTHS', 'Last 2 Sixmonths'),
('LAST_3_MONTHS', 'Last 3 Months'),
('LAST_4_QUARTERS', 'Last 4 Quarters'),
('LAST_4_WEEKS', 'Last 4 Weeks'),
('LAST_52_WEEKS', 'Last 52 Weeks'),
('LAST_5_FINANCIAL_YEARS', 'Last 5 Financial Years'),
('LAST_5_YEARS', 'Last 5 Years'),
('LAST_6_BIMONTHS', 'Last 6 Bimonths'),
('LAST_BIMONTH', 'Last Bimonth'),
('LAST_FINANCIAL_YEAR', 'Last Financial Year'),
('LAST_MONTH', 'Last Month'),
('LAST_QUARTER', 'Last Quarter'),
('LAST_SIX_MONTH', 'Last Six Month'),
('LAST_WEEK', 'Last Week'),
('LAST_YEAR', 'Last Year'),
('MONTHS_LAST_YEAR', 'Months Last Year'),
('MONTHS_THIS_YEAR', 'Months This Year'),
('QUARTERS_LAST_YEAR', 'Quarters Last Year'),
('QUARTERS_THIS_YEAR', 'Quarters This Year'),
('THIS_BIMONTH', 'This Bimonth'),
('THIS_FINANCIAL_YEAR', 'This Financial Year'),
('THIS_MONTH', 'This Month'),
('THIS_QUARTER', 'This Quarter'),
('THIS_SIX_MONTH', 'This Six Month'),
('THIS_WEEK', 'This Week'),
('THIS_YEAR', 'This Year');

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
('source_of_power', 'Solar-electricity from solar energy\n', 11029),
('ownership_type', 'Other Government', 323),
('source_of_power', 'Biogas', 299),
('facility_type', 'ImagingCenters', 29),
('facility_type', 'Specialty Clinic', 1327),
('facility_type', 'Nursing Home', 1),
('facility_type', 'Laboratories', 105),
('ownership_type', '', 3),
('settlement', 'Rural', 23331),
('facility_type', 'Specialty Center', 205),
('source_of_power', 'Generator-electricity from generator\n', 8545),
('operational_status', 'Operational', 45902),
('facility_type', 'Tele Health Center', 4),
('facility_type', 'Hospital', 514),
('ownership_type', 'Private for profit', 23934),
('source_of_power', 'Power grid electricity from the main power line (power grid)\n', 21212),
('facility_type', 'Pharmacy', 11217),
('facility_type', 'Health Post', 16306),
('settlement', 'Urban', 22546),
('facility_type', 'Other', 483),
('ownership_type', 'Private Not for profit', 358),
('total_count', 'Total Count', 45902),
('ownership_type', 'Public/Government', 21284),
('facility_type', 'Clinic', 11717),
('source_of_power', 'No power sources', 7928),
('source_of_power', '', 10098),
('facility_type', '', 81),
('facility_type', 'Medical Office Practice', 10),
('settlement', '', 25),
('facility_type', 'Home-Based Care Service ', 67),
('facility_type', 'Health Center', 3967);

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
('Closed', 'Approved', 4552),
('Closed', 'Denied', 13),
('Closed', 'Pending', 288),
('Currently Not Operational', 'Approved', 216),
('Currently Not Operational', 'Pending', 68),
('Operational', 'Approved', 45811),
('Operational', 'Denied', 95),
('Operational', 'Draft', 25),
('Operational', 'Pending', 1275),
('Pending', 'Approved', 11),
('Pending', 'Draft', 2),
('Pending', 'Pending', 10),
('Suspended', 'Approved', 10),
('', 'Approved', 1),
('', 'Draft', 1),
('', 'Pending', 17);

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
('Addis Ababa City Administration', '8.9973923470995', '38.765273579752', 3065),
('Afar Region', '11.441045709388', '40.406054777687', 735),
('Amhara Region', '11.236094069854', '38.278772159133', 10569),
('Benishangul-Gumuz Region', '10.426463014648', '35.293170198576', 791),
('Central Ethiopia Region', '7.7066986601203', '37.983521770658', 2719),
('Gambella Region', '7.7155718525692', '34.756002096443', 253),
('Oromia Region', '8.2368734631121', '38.405617988135', 15486),
('Sidama Region', '6.7658841143307', '38.532447650472', 1270),
('SNNP Region', '6.7250476338584', '37.628520954071', 226),
('Somali Region', '7.6853561537776', '43.052470954243', 2581),
('South Ethiopia Region', '6.2442863386058', '37.447588054081', 3039),
('South West Ethiopia Region', '7.1133644651243', '36.019619355993', 1939),
('Tigray Region', '13.704962060626', '39.047707289424', 2014);

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
('Abala City Administration', '13.365576447113', '39.756239082129', 25),
('Abala Woreda', '13.239007238701', '39.835776921469', 6),
('Abaqaraw', '6.2885128', '42.739834075', 6),
('Abaya', '6.2759652949974', '38.192399131876', 46),
('Abay Chomen', '9.5878959495156', '37.316444568995', 34),
('Abba Gada Sub City', '8.5428977192263', '39.265620867917', 111),
('Abe Dengoro', '9.5958703289007', '36.810103398582', 32),
('Abela abaya woreda', '6.6514986360164', '37.879862257299', 29),
('Abergele', '13.047015290566', '38.971657582756', 18),
('Abergele yechila', '13.35506296041', '38.87081700302', 28),
('Abeshegi Woreda', '8.3320685303949', '37.645361959137', 49),
('Abeshge', '8.117493', '38.382304', 1),
('Abi Adi', '13.625171744545', '38.991365326871', 17),
('Abichu Gna', '9.6352144243145', '39.285976667581', 30),
('Abobo', '7.9027171389', '34.528063456113', 22),
('Abrahamo Woreda', '9.9857152320117', '34.579800720665', 53),
('Abuna Gindeberet', '9.5883240702268', '37.99251112692', 152),
('Ada', '8.7413178897243', '38.987776731912', 24),
('Adaa Berga', '9.3670779995534', '38.362915147052', 55),
('Adaar Woreda', '11.22079814453', '40.367776403993', 19),
('Adaba', '7.0467329351313', '39.434165221294', 71),
('Adadle', '5.8559633219178', '43.501985182192', 24),
('Adagnagere Chako', '12.554654765382', '36.787037948874', 23),
('Adama', '8.4468570492737', '39.237131892866', 35),
('Adami Tulu Jido Kombolcha', '7.7326544325412', '38.586451354795', 63),
('Adasha Walash Sub City', '7.1111465338286', '40.003400712015', 65),
('Addis Ketema Sub City', '7.0717208031142', '38.485993410717', 17),
('Adele Woreda', '9.4136744421273', '41.958951072446', 30),
('Adet Woreda', '13.882750388288', '38.638738725976', 27),
('Adi Arkay', '13.081207005155', '37.810104667297', 31),
('Adi-Daero Town', '14.308454789974', '38.172982664749', 21),
('Adigrat Town', '14.269321418746', '39.46476851805', 59),
('Adigudem Town', '13.247886280424', '39.515252935265', 14),
('Adi Haki', '13.484503384912', '39.454290923365', 28),
('Adilo Zuria Woreda', '7.2361546545757', '37.9976342', 18),
('Adiyo Woreda', '7.2563805325133', '36.551374555613', 53),
('Adobtele Town Administration', '9.2885311053251', '40.204459522186', 12),
('Adola Rede', '5.9576874680198', '38.984607046595', 41),
('Adola Town', '5.8731506774551', '38.991767692734', 45),
('Adwa Town', '14.175685138518', '38.88338299325', 40),
('Adwa Woreda', '14.162537343252', '38.960038110569', 28),
('Afambo Woreda', '11.520503396816', '41.580486419175', 10),
('Afdam', '9.4830381630607', '41.030502183113', 17),
('Afdera Woreda', '13.191812174286', '40.848464965714', 15),
('Agarfa', '7.3166329423404', '39.767765745836', 48),
('Agaro Town', '7.8529082445423', '36.589125499309', 42),
('Aga Wayyu', '5.5113771410714', '38.807733971113', 8),
('Agena Town', '8.1457014140473', '37.990615542281', 13),
('Ahferom', '14.261180956538', '39.162636176339', 30),
('Ahsea Woreda', '14.371114843844', '38.955592885285', 9),
('Akaki Woreda 2', '8.7314771788859', '38.761520625127', 13),
('Akobo', '11.527067', '39.082478', 1),
('Alache Woreda', '7.1970878866337', '38.601789822772', 23),
('Alamata Town', '12.41705135868', '39.558740258292', 31),
('Alamata woreda', '12.4200076', '39.5563868', 5),
('Albuko', '10.822649683031', '39.628027430658', 50),
('Ale', '8.1536376234097', '35.517691003562', 33),
('Alefa', '11.94367884769', '36.822789108663', 71),
('Aleltu', '9.2099950638267', '39.159037667801', 28),
('Aleta Chuko Town', '6.5821459971223', '38.333475103349', 27),
('Aleta Chuko Woreda', '6.5537810291027', '38.316935061825', 29),
('Aleta Wondo Town Administration', '6.6011774152835', '38.41498302082', 28),
('Aleta Wondo Woreda', '6.6206256936468', '38.442996058737', 42),
('Alge Sachi', '8.5490968909364', '35.690927033076', 51),
('alicho wiriro woreda', '7.9741358761408', '38.169050383181', 40),
('Amaya', '8.5838012080517', '37.730127292944', 50),
('Ambasel', '11.49809878771', '39.49285208949', 69),
('Ambo', '8.9867445379281', '37.84722001871', 40),
('Ambo Town', '8.9820470887941', '37.852869213778', 120),
('Ameka', '7.8007929736842', '37.803396894737', 2),
('ameka woreda', '7.7910519047912', '37.793240484029', 23),
('Ameya Town', '7.1066249569696', '36.664964789515', 11),
('Ameya Zuriya woreda', '7.0743501139665', '36.663884358101', 16),
('Amhara Sayint', '11.039099523478', '38.780434261195', 78),
('Amibara Woreda', '9.1628403262049', '40.172062308944', 34),
('Amigna', '7.7979426590995', '39.909565644161', 31),
('Amuru', '10.013041146597', '37.01782307128', 35),
('Anchar', '8.6520445994295', '40.180292575052', 37),
('Andabet', '11.406209375249', '37.946012298677', 63),
('Anderacha Woreda', '7.6015437211956', '35.337551866527', 34),
('Aneded', '10.234293693857', '37.880008154434', 55),
('Anfilo', '8.5496123925014', '34.57006665159', 40),
('Angacha Town', '7.344719657377', '37.860626159016', 3),
('Angacha Woreda', '7.3511514859383', '37.85699774689', 42),
('Anger Gute Town', '9.566082425897', '36.629237186778', 27),
('Angolala Tera', '9.4122782522381', '39.427943001033', 42),
('Angot', '11.868184151735', '39.322301316301', 21),
('Ankasha Guagusa', '10.854568446261', '36.87402678012', 53),
('Ankober', '9.574221440186', '39.760018707383', 62),
('Anna Sorra', '6.2039310239722', '38.746059058722', 37),
('ann lemo woreda', '7.6338851367171', '37.983362232613', 41),
('Antsokia Gemza', '10.651183627898', '39.778892914798', 53),
('Ararso', '8.7587395587065', '43.361070108458', 24),
('Arbamich Town', '6.034773881186', '37.559560516199', 90),
('Arbamich Zuria Woreda', '6.0503590963219', '37.550349397728', 58),
('Arbaminch Town Administration', '6.0297165916129', '37.54968592129', 9),
('Arbaminch Zuria Woreda', '5.961073088196', '37.498485846102', 15),
('Arbegona Woreda', '6.6743905111887', '38.724653393567', 47),
('Arda Jila Me Boko', '6.0972189204545', '38.779273570455', 12),
('Areka Town', '6.8958375662668', '37.750690835314', 28),
('Arero Woreda', '4.7613188338824', '38.816574793252', 19),
('Argoba', '10.946544179574', '39.972749123017', 24),
('Argoba Special', '9.507467884551', '39.879998906212', 14),
('Arkite Town', '7.9396571977221', '38.066316723007', 6),
('Aroresa Woreda', '6.3916813808333', '38.959703258698', 27),
('Arsi Negele Rural', '7.3627011112106', '38.727574323865', 49),
('Arsi Negele Town', '7.357092763322', '38.67302000446', 59),
('Artuma Fursi', '10.551083368621', '39.958911506353', 91),
('Asagirt', '9.3736287993412', '39.600665002715', 42),
('Aseko', '8.5328146528708', '40.05787939687', 31),
('Asella Town', '7.9643675408724', '39.133007543368', 88),
('Asgede Woreda', '14.086166660642', '37.957746273608', 46),
('Assosa Town 2', '10.067023612308', '34.555378504348', 34),
('Assosa Town Woreda 1', '10.066065745498', '34.54271905995', 36),
('Atoti Ulo Woreda', '7.322002046627', '38.203172505556', 29),
('Atsbi Endaslasie Town', '13.86468560038', '39.737933294534', 5),
('Atsbi Woreda', '13.902504705067', '39.712885188418', 14),
('Awabel', '10.248944972647', '37.955674562725', 87),
('Aware', '8.1460418024096', '44.189892962651', 19),
('Awash City Administration', '8.9945662126387', '40.168604490683', 24),
('Awash Fenteale', '9.1671432842029', '39.98703966746', 18),
('Aw-barre', '9.7438606713443', '43.159656415753', 94),
('Aweday Woreda', '9.3542005180014', '42.044602780767', 55),
('Awura', '13.347370142477', '37.687664421797', 20),
('Awurada Town', '7.1170586374395', '36.185526504321', 9),
('Axum Town', '14.121401487571', '38.730570296014', 58),
('Ayder', '13.507896250396', '39.467442089073', 56),
('Ayehu Guagusa', '10.700931250052', '36.771950498819', 102),
('Ayira', '9.1045790736633', '35.398858314173', 37),
('Ayisha', '10.671648841173', '42.573043772704', 30),
('Ayssaita City Administration', '11.587036574687', '41.436057579934', 22),
('Ayssaita Woreda', '11.58816534548', '41.497969739638', 14),
('Ayun', '7.1301746', '42.301922', 3),
('Babile', '9.2148305285936', '42.228455486618', 32),
('Babile Town', '9.2241627951952', '42.332017178207', 31),
('Babili', '8.7910495852317', '42.412564614609', 41),
('Babo Gembel', '9.4682903340854', '35.198647694299', 30),
('Bachuma Town', '6.8247821116891', '35.902885023511', 14),
('Bahel Adarash Sub City', '7.0540136509346', '38.476643518925', 12),
('Bahir Dar Town', '11.599255921901', '37.377196372283', 336),
('Bahir Dar Zuria', '11.397167142857', '37.272324857143', 5),
('Bahir dar Zuriya Woreda', '11.632198781724', '37.376721330963', 61),
('Bako Tibe', '9.1066106690032', '37.097096709527', 78),
('Bale Gasgar', '7.7359307217015', '39.988246854169', 41),
('Bambasi Woreda', '9.8163612391034', '34.719714329746', 57),
('Banja', '10.953400161243', '36.868417919269', 62),
('Barak Woreda', '9.240962579881', '38.932670841356', 15),
('Bare', '4.6758599408397', '42.605719259637', 42),
('Baso Liben', '10.114263715683', '37.747012017492', 69),
('Basona Werana', '9.8173119141164', '39.474500995807', 56),
('Bati', '11.207211567891', '40.000254532517', 76),
('Bati Town', '11.196095182384', '40.008239064746', 33),
('Batu Town', '7.9262334726227', '38.706995185469', 69),
('Bayra koysha woreda', '6.8295064287823', '37.603740235916', 20),
('Becho', '8.6327979966721', '38.076729932597', 76),
('Bedele', '8.4819109451265', '36.386149944139', 50),
('Bedele Town', '8.4511231093041', '36.341338046852', 44),
('Bedeno', '9.1095806055918', '41.634391057561', 68),
('Bedesa', '8.8916726963515', '40.779001285864', 25),
('Begi', '9.3633210867136', '34.569773453977', 73),
('Beka dawla woreda', '5.7658941829574', '36.602262703258', 14),
('Bele town', '6.9190531904865', '37.530614645692', 18),
('Bena tsemay woreda', '5.6250763131905', '36.675102554483', 46),
('Bensa Woreda', '6.5374360098148', '38.857759181954', 28),
('Berahale Woreda', '13.842820919084', '40.004816253875', 29),
('Berbere', '6.7254790928204', '40.146924501286', 47),
('Bercano', '6.1018016840198', '43.212156689456', 15),
('Berehet', '9.2057995835681', '39.654304037838', 34),
('Bero Woreda', '6.2701810498513', '35.216900136554', 36),
('Beto town', '6.0586901019663', '36.886947101264', 16),
('Beyeda', '13.20141554372', '38.40060551558', 26),
('Bibugn', '10.85820559384', '37.746047314199', 46),
('Bidu', '13.026569720398', '40.872485636318', 6),
('Bilate Zuria Woreda', '6.9088017222354', '38.238439369313', 23),
('Bilcilbur', '8.2787753423559', '43.303752839348', 10),
('Billo Nopha', '8.4075591735831', '35.586012241247', 19),
('Birbirsa Kojowa', '5.7545818655385', '38.569559204', 31),
('Birbir Town', '6.2892540174046', '37.770201174809', 20),
('Birqod', '7.6265121789474', '43.766923019298', 11),
('Bishan Guracha Woreda', '7.1088313892693', '38.484983879533', 12),
('Bita Woreda', '7.3044596775881', '35.726666067433', 48),
('Bizet Woreda', '14.278605430174', '39.295609231802', 10),
('Bodalay', '7.0892652319933', '44.163498402178', 9),
('Boditi town', '6.9468446443207', '37.843836325835', 31),
('Boji Choqorsa', '9.3126095589687', '35.565494272486', 45),
('Boji Dirmeji', '9.3684982168981', '35.597566708681', 28),
('Boke', '8.7096997380569', '40.692495517325', 45),
('Bokeji Town', '7.5322494481383', '39.249875881649', 10),
('Bokh', '7.5993198714286', '46.495898353846', 31),
('Bokolmanyo', '4.535886057346', '41.520271239336', 14),
('Boku Shenen Sub City', '8.4291607576085', '39.325158470904', 50),
('Bole Sub City', '8.5538915375039', '39.277264612948', 154),
('Boloso bombe woreda', '7.1218879009963', '37.592936426294', 43),
('Boloso Sore', '7.164245625', '37.6484167', 2),
('Boloso soro woreda', '7.0635761109938', '37.719049634565', 68),
('Bona Zuria Woreda', '6.5326453903723', '38.711694239371', 40),
('Boneya Bushe', '8.9015556657986', '37.001971044485', 24),
('Bonga Town', '7.2720143631053', '36.242352082734', 50),
('Bonike Woreda', '6.0663983436709', '37.348743733861', 11),
('Bonosha Town', '7.5086288177284', '38.093440947897', 29),
('Bora', '8.2996347689774', '38.867355761443', 41),
('Bora Woreda', '12.897320562345', '39.354618224867', 7),
('Bore', '6.3546576168896', '38.633840972', 55),
('Borecha', '8.3056410529744', '36.642780628154', 55),
('Boreda Woreda', '6.5230878703506', '37.649547602439', 38),
('Borena', '10.7430325925', '38.75060920104', 100),
('Borricha Woreda', '6.925041485394', '38.343789736875', 25),
('Boset', '8.650842470649', '39.50867917515', 78),
('Botor Tolay', '8.3176998454406', '37.339169115215', 35),
('Buee Town', '8.3249989993007', '38.551533188112', 9),
('Bugina', '12.175218461494', '38.827476362446', 26),
('Buldigilu Woreda', '10.182774543139', '35.087240213915', 38),
('Bule', '6.323167', '38.380453', 1),
('Bule Hora', '5.6948531130793', '38.294797032247', 63),
('Bule Hora Town', '5.6235669957615', '38.239963080701', 85),
('Bulen Woreda', '10.580854947775', '36.070605905777', 41),
('Bule woreda', '6.3295407125906', '38.401127624456', 27),
('Bulki town', '6.2802006808738', '36.808911789223', 10),
('Bura Woreda', '6.6301527581633', '38.838468994558', 10),
('Burayu Sub-City', '9.0736884362088', '38.660692125478', 124),
('Bure', '8.2632429127677', '35.193011352471', 36),
('Buremedaytu', '10.094424260606', '40.406036746881', 11),
('Bure Town', '10.706829552315', '37.067890905761', 37),
('Bure Zuria', '10.629612186401', '37.067655482654', 58),
('Burji Woreda', '5.56361861', '37.87419574', 2),
('Burka Dhintu', '8.3649452864488', '41.059644212595', 34),
('Bursa Woreda', '6.60531188489', '38.596874563304', 27),
('Butajira Town Administration', '8.1291676172249', '38.388549861244', 2),
('Butajjra Town', '8.1245446068565', '38.376404034517', 49),
('Central Armacho', '12.923201486376', '37.047068842743', 31),
('Chabe Gambeltu Woreda', '6.3973092238589', '38.86864614668', 11),
('Chagni Town', '10.963834378233', '36.508116887298', 47),
('Chaha Woreda', '8.1232198637291', '37.875188888169', 47),
('Chancho Town', '9.3058440745106', '38.751442380084', 12),
('Chareti', '5.3886117854167', '41.862030215417', 39),
('Chelelka Woreda', '8.7518672561203', '38.983855727507', 70),
('Chelelkitu town', '6.0102455071259', '38.156227441568', 12),
('Chelia', '9.0222716952959', '37.449807873148', 35),
('Chena Woreda', '7.1440604235765', '35.797422367015', 38),
('Chencha Town', '6.2552145149184', '37.573263107964', 16),
('Chencha Town Administration', '6.2585653883495', '37.586980035437', 16),
('Chencha Zuria', '6.282857520979', '37.561772695804', 6),
('Chencha Zuria Woreda', '6.2322822437756', '37.54062881026', 31),
('Cheta Woreda', '7.0175315204268', '36.363053286585', 23),
('Chewaka', '8.9198733831599', '36.154028623624', 48),
('Chida Town', '7.1315609253774', '36.737153884717', 10),
('Chifra City Administration', '11.584016558015', '40.017069251908', 4),
('Chifra Woreda', '11.607132217701', '40.082357260287', 26),
('Chila Woreda', '14.295012864023', '38.572698328895', 11),
('Chilga', '12.557701086272', '37.070913060179', 63),
('Chinaksen Worda', '9.4889973171546', '42.616044804703', 54),
('Chire Woreda', '6.5409162055618', '39.058293169564', 30),
('Chirone Woreda', '6.4579171983806', '38.635150121323', 11),
('Chiro Town', '9.0893960069993', '40.863985942966', 42),
('Chiro Zurya', '9.0669688877691', '40.818158659356', 45),
('Chobi', '9.3320563690789', '37.950049246711', 10),
('Chole', '8.1492394363454', '39.93199069252', 38),
('Chomen Guduru', '9.389381828029', '37.369296788313', 19),
('Chora', '8.3813709593296', '36.120771713293', 81),
('Chora Botor', '8.2915825881448', '37.126680805928', 32),
('Choriso woreda', '6.0716628586279', '38.258490613098', 25),
('Chorso', '6.0684111', '38.2440972', 1),
('Chorso ', '6.026542', '38.23644', 1),
('Dabat', '12.999134906408', '37.768629002628', 49),
('Dabe Sub City', '8.5528557809723', '39.300870876968', 57),
('Dabo Hana', '8.6715576346154', '36.287947490441', 27),
('Daela Woreda', '6.506994553432', '38.963841804172', 7),
('Dale Sadi', '8.9458418125519', '35.199699244896', 51),
('Dale Wabera', '8.927471064437', '35.050922816227', 37),
('Dale Woreda', '6.7304384057205', '38.397725598792', 53),
('Dalifaghe', '10.616809238305', '40.310349947047', 17),
('dalocha woreda', '7.7603400876106', '38.265813409062', 40),
('Dalol', '14.379832770295', '39.999241894383', 16),
('Dama', '6.2587448425371', '38.511708450315', 29),
('Dambela Woreda', '8.4569032126639', '39.229119642995', 59),
('Dambe woreda', '9.7664423333333', '35.632724133333', 8),
('Dambi Dollo', '8.5321593449508', '34.800847132323', 55),
('Damboya Town', '7.3462923534884', '37.950319471318', 5),
('Damot Gale woreda', '6.9938493701235', '37.875283730988', 47),
('Damot pulusa woreda', '7.0439370788499', '37.856864554678', 44),
('Damot sore woreda', '6.9441338905122', '37.672266028463', 29),
('Damot woyde', '6.8822533684226', '37.930532993223', 40),
('Danbal', '9.9462443439581', '42.490762360007', 34),
('Dangla Town', '11.250791472556', '36.846074150407', 49),
('Dangla Zuria', '11.209835909928', '36.803415779702', 91),
('Dangur Woreda', '11.255950108883', '36.152616503889', 61),
('Dano', '8.736357110204', '37.274407871774', 40),
('Danot', '7.5988694511111', '45.220011757778', 22),
('Dansha Town', '13.568281093126', '36.972057526973', 18),
('Daramalo Woreda', '6.2601837838095', '37.30880768415', 38),
('Dara Otilcho Woreda', '6.4887748803071', '38.421999461732', 23),
('Darara Woreda', '6.8542257991165', '38.289541911158', 23),
('Daratole', '7.293476637931', '45.392950294828', 9),
('Dara Woreda', '6.4605747752074', '38.352266639403', 36),
('Darimu', '8.5901703387391', '35.496834744795', 71),
('Daro Lebu', '8.5686887051173', '40.365137737505', 56),
('Daroor', '8.1808330628571', '44.682289442857', 24),
('Dasenech woreda', '4.8068786101688', '36.070071867958', 37),
('Dawa Chefa', '10.776516975468', '39.845631358233', 84),
('Dawa Harewa', '10.784428636084', '40.00606647994', 30),
('Dawe Kechen', '6.5769102186876', '41.006884992762', 21),
('Dawe Sarar Woreda', '6.1598693293495', '41.680557359066', 26),
('Dawo', '8.7987931378387', '38.147680077169', 36),
('Dawunt', '11.483869177783', '38.880790065465', 30),
('Daya Town Administration Health Office', '6.5247649', '38.8308217', 1),
('Daye Town Administration', '6.540343970097', '38.834917421202', 29),
('Daymeed', '9.3934260222222', '40.939403188889', 4),
('Debark Town', '13.152456621492', '37.898827864313', 27),
('Debark Zuria', '13.158571998106', '37.906605179561', 50),
('Debay Tilatgin', '10.529513909674', '38.002325096851', 46),
('Debere Birhan Town', '9.6727734960222', '39.531608393166', 9),
('Debreberhan Town', '9.669684382324', '39.52878077433', 120),
('Debre Elias', '10.305703063021', '37.466572581078', 53),
('Debre Libanos', '9.6385745128548', '38.837988761557', 17),
('Debre Markos Town', '10.328423591454', '37.726943787511', 105),
('Debre Tabor town', '11.857287846351', '38.018315473676', 41),
('Decha Woreda', '7.149632185811', '36.194116342843', 72),
('Deder', '9.3129771177629', '41.450537283282', 75),
('Deder Town', '9.3119503939227', '41.447421850829', 22),
('Dedesa', '8.096139066052', '36.4834256339', 59),
('Dedo', '7.5757319203669', '36.84907349406', 57),
('Dega', '8.5911872867069', '36.122448922659', 24),
('Dega Damot', '10.858767678911', '37.607435977677', 62),
('Degahbur', '8.3058174969178', '43.60670834863', 36),
('Degahbur Town', '8.2244560455143', '43.561944981006', 43),
('Degem', '9.8086856176354', '38.625525358916', 17),
('Degua Tembien', '13.622369785221', '39.165552483982', 21),
('Dehana', '12.433624812396', '38.722679769327', 50),
('Dejen', '10.176354298787', '38.147426356773', 68),
('Dekasuftu', '5.2083873386581', '39.974219007348', 26),
('Deka Town', '7.5928815298985', '35.751565635935', 28),
('Deksis', '8.0497205005547', '39.561843606181', 34),
('Delanta', '11.593104028774', '39.21857464888', 82),
('Dello Menna', '6.433166265643', '39.870327181009', 45),
('Demba gofa woreda', '6.3806194493141', '36.980858589255', 53),
('Dembecha', '10.579811568156', '37.471316541032', 91),
('Demboya Woreda', '7.3565511245453', '37.948667214274', 38),
('Denba Gofa', '6.384438', '36.999607', 1),
('Dendi', '9.0095708675024', '38.139768193728', 60),
('Dera', '11.699632629632', '37.611407229134', 75),
('Derashe woreda', '5.6505144496311', '37.363911385413', 66),
('Dera Town', '8.3301687997754', '39.31925182281', 25),
('Derra', '10.227494219987', '38.693125922976', 46),
('Dessie Town', '11.1445331166', '39.631928904244', 100),
('Dessie Zuriya', '11.026188857014', '39.498533597872', 92),
('Dewe', '10.776016595843', '40.315888796767', 20),
('Dhagahmadaw', '7.983642474031', '43.050334728682', 16),
('Dhanan', '6.5109770314286', '43.543960765714', 26),
('Dhash Woreda', '4.1693376926546', '38.67635180609', 13),
('Dhoboweyn', '7.402593640625', '44.7210384625', 18),
('Dibate Woreda', '10.602016154234', '36.181836271397', 54),
('Dibayu Woreda', '8.7320759277251', '38.992452923576', 105),
('Didu', '7.9279871630877', '35.574531045333', 21),
('Dig', '7.775430528', '44.498733528', 9),
('Diga', '9.0599562138142', '36.398001815532', 59),
('Digeluna Tijo', '7.7411911297878', '39.199197864951', 75),
('Dila town', '6.4012312997274', '38.311915062522', 55),
('Dilla Town Administration', '6.4145682333333', '38.3097732', 3),
('Dilla Zuria', '6.2970013814433', '38.307500323711', 5),
('Dilla Zuriya woreda', '6.3448247472902', '38.336587257479', 40),
('Dilo', '4.3324488441548', '37.631123728402', 15),
('Dimma', '6.603173365', '35.068894306485', 35),
('Dinsho', '7.1079840448611', '39.794980319792', 27),
('Dire', '4.0753417782204', '38.312422926845', 29),
('Dire Enchini', '8.8265628137736', '37.673687958396', 29),
('Disa Woreda', '6.8096105269499', '37.156919029133', 23),
('Dita', '6.5484850875', '37.440197527083', 5),
('Dita Woreda', '6.288156116538', '37.459141848622', 29),
('Doba', '9.2715160145811', '41.08851829779', 51),
('Dodola Rural', '6.9049359818939', '39.034728913636', 59),
('Dodola Town', '6.9782329584608', '39.186265425461', 55),
('Dodota', '8.3396157643678', '39.306364149425', 17),
('Dollo Bay', '4.7786983269841', '42.239936659127', 43),
('Dolo Ado', '4.1763826351347', '42.044128668823', 69),
('Doranii', '8.4406829831106', '35.893187946112', 19),
('Doyo Gena', '7.442037', '37.847972', 1),
('Doyogena Town', '7.3552955838768', '37.784526268478', 9),
('Doyogena Woreda', '7.3583015519011', '37.796143557414', 39),
('Dubluki', '4.4531191653935', '38.162054538977', 23),
('Dubti City Administration', '11.730250170799', '41.084585084808', 21),
('Dubti Woreda', '11.723933126115', '41.209757151592', 10),
('Dugda', '8.1551408020073', '38.839143716571', 46),
('Dugda Dawa', '5.3977857203329', '38.27311796742', 20),
('Duguna fango woreda', '6.9576615609827', '38.059907218353', 62),
('Duhun', '7.207791906872', '42.718359372275', 12),
('Dukem Woreda', '8.7601616364261', '38.947407093855', 73),
('Dulecha', '9.4474157516575', '40.008054498688', 20),
('Duna', '7.3356638', '37.6490678', 1),
('duna woreda', '7.3444481286614', '37.661232600236', 59),
('Durame Town', '7.2565639730587', '37.905695647288', 46),
('Durame Town Administration', '7.2439307', '37.9029411', 1),
('east azernet woreda', '7.7870220273594', '38.020314033746', 32),
('East Badawacho', '7.3581383333333', '37.821867', 3),
('east badawacho woreda', '7.1693188221964', '37.986595581643', 36),
('East Belesa', '12.425490556388', '38.086823082389', 44),
('East Dembia', '12.429741362889', '37.342529937067', 48),
('East Imey', '6.394636642623', '42.402793185246', 20),
('East Meskan Woreda', '8.0973845733096', '38.474467891815', 24),
('east silti woreda', '7.9502404954825', '38.383693099795', 21),
('Ebantu', '9.7899932894737', '36.788312342105', 18),
('Ebinat', '12.132003496242', '38.055896765195', 51),
('Edaga-Hamus Town', '14.192028618676', '39.560613575382', 8),
('Efratana Gidim', '10.364220786501', '39.936092402652', 55),
('Egela Woreda', '14.464309068421', '39.147234536842', 6),
('Ejere', '9.012124936879', '38.371838055001', 42),
('Ejersa Lafo', '9.0157506191643', '38.254420457382', 32),
('Ela Anchano Woreda', '7.270278153886', '36.272795442383', 17),
('Elele', '5.9524359666667', '43.55592305', 6),
('Elfata', '9.1570426519718', '37.965674058382', 24),
('Elidar Woreda', '11.974118853335', '41.661738420889', 17),
('Elkari', '5.8361854743243', '42.086998333784', 30),
('El-Ogaden', '6.8158117625', '44.2374947625', 8),
('Elwaye', '4.885733994798', '37.739047222394', 16),
('Elwayne', '6.6221705557548', '43.14632687422', 9),
('Emba Alaje Woreda', '12.926714869584', '39.498058219256', 16),
('Embasneiti Woreda', '14.072199459714', '39.260125852284', 12),
('Emdibirr Town', '8.1206226721053', '37.92825663', 11),
('Enarge Enawga', '10.661591464116', '38.168507228649', 96),
('Endabaguna Town', '13.947402403362', '38.182862151983', 15),
('Endaba Tsahma', '14.040701932372', '39.113875747372', 32),
('Enda Mekoni Woreda', '12.762555948118', '39.500747087903', 18),
('Endegagn Woreda', '7.8221183426557', '37.855565450761', 28),
('Enderta woreda', '13.535370142836', '39.446117828246', 34),
('Enebse Sar Midir', '10.854695594378', '38.298709298551', 92),
('Enemay', '10.459015449932', '38.192789625415', 106),
('Enemor Ena Enen', '8.333558', '38.069915', 1),
('Enkelo Wabe', '7.4070443836602', '39.421699441363', 26),
('Enor Iner meger Woreda', '7.9136634639958', '37.777043891236', 33),
('Enor Iner WoredA', '8.0407438082682', '37.811772429254', 60),
('Ensaro', '9.8169680126984', '38.906218109714', 40),
('Ensseno Town', '8.0663721584416', '38.48766041342', 13),
('Enticho Town', '14.285668561727', '39.154029332171', 10),
('Erabti', '13.25729879703', '40.00376371505', 19),
('Erer', '9.7644989141597', '41.314838183992', 31),
('Erop Woreda', '14.526265375', '39.5446195', 8),
('Essara Woreda', '6.9324842411972', '37.009052076585', 44),
('Estie', '11.584988531267', '38.059011570561', 75),
('Ewa', '11.82320330532', '40.001664310936', 18),
('Ezha Woreda', '8.1420087855932', '38.038344894293', 36),
('Fagitalekoma', '11.0923724065', '36.892545336267', 86),
('Farta', '11.819747620397', '38.011496836199', 77),
('Fedis', '9.0982144318255', '42.088124105735', 46),
('Fentale', '8.8433739256545', '39.920426853946', 22),
('Ferfer', '5.1408075893617', '45.03484426383', 26),
('Fik', '8.1445381664234', '42.296273351777', 29),
('Filtu', '4.8444199516502', '40.970622772772', 46),
('Finote Selam Town', '10.679430639869', '37.267127338195', 48),
('Fitche Town', '9.7795423650548', '38.737310087494', 41),
('Fofa Woreda', '7.8998061614035', '37.458109825439', 4),
('Fogera', '11.886402268025', '37.763485998717', 88),
('Fondo Town', '7.6483239675824', '37.966444402473', 11),
('Freweini Town', '14.051230156', '39.578506192', 2),
('Furi Sub -City', '8.9471419475733', '38.673155991721', 163),
('Gablalu', '10.397232475', '42.00375955', 2),
('Gachit Woreda', '6.8068646643392', '35.81270108271', 16),
('Gacho Baba', '6.017603504918', '37.485057222951', 3),
('Gacho Baba Woreda', '6.0822479982315', '37.447047924437', 16),
('Galadi', '7.0451834681818', '46.175951225', 23),
('Galalo', '9.8985335353097', '40.503362529698', 14),
('Galhamur', '7.5485063105882', '47.045834385882', 10),
('Gambella Town Administration', '8.2438606191283', '34.592846924576', 37),
('Gambella Zuria', '8.2185993318314', '34.639256721657', 17),
('gambora woreda', '7.5668165178969', '37.663787506685', 42),
('Ganji', '9.048249805269', '35.627816994419', 27),
('Ganta Afeshum Woreda', '14.232534229116', '39.419479418524', 22),
('Garbo', '7.3123576671829', '43.28699090579', 13),
('Garda Martha', '10.368773', '37.015082', 1),
('Garida Marta Woreda', '5.9219041943284', '37.115852196418', 20),
('Gasera', '7.3538645477718', '40.175421029731', 42),
('Gashamo', '8.1224687460012', '45.337929698989', 54),
('Gawo Kebe', '9.0119023439008', '34.926383969537', 48),
('Gazgibla', '12.389221554351', '39.024851167054', 32),
('Gazo', '11.784493303595', '39.144652561821', 27),
('Gechi', '8.3364174427321', '36.46390459232', 49),
('Gedeb', '5.8893303333333', '38.335612', 3),
('Gedebano Gutazer Welene', '9.153403', '39.203193', 1),
('Gedebano Gutazer Wolene Woreda', '8.343174643681', '38.184268921515', 46),
('Gedeb Hasasa', '7.1691316835877', '39.186524748046', 95),
('Gedeb town', '5.9153799195931', '38.249698744004', 12),
('Gedeb woreda', '5.9191968975014', '38.308582702943', 38),
('Gefersa Guje Sub-City', '9.0507570690378', '38.611101530585', 65),
('Gelana', '5.9358411198315', '38.163868232222', 31),
('Gelan Guda Sub-City', '8.9221156057209', '38.655514673597', 39),
('Gelan Sub-City', '8.8322681831221', '38.81968217595', 34),
('Gelemso Town', '8.8118187386029', '40.514826641912', 16),
('Gelila town', '6.1825990817927', '36.659160310084', 5),
('Gemechis', '8.9107298566704', '40.921179719117', 50),
('Gena Bosa Woreda', '7.2408842496955', '37.270995988063', 20),
('Gendawuha Town', '12.776432480865', '36.412559135124', 22),
('Gera', '7.7403846224176', '36.281566887509', 60),
('Ger-alta Woreda', '13.772500854153', '39.362072054938', 11),
('Gerba Gurach Town', '9.8142950781841', '38.41375777686', 12),
('Gereni Woreda', '11.471290526952', '41.277275701115', 5),
('Gerese Town Administration', '6.0697986681159', '37.343694350435', 12),
('Geresia Town', '5.9138991406933', '37.300552070723', 15),
('Geresia Zuria Woreda', '5.9119559685417', '37.279819163542', 21),
('Gesa Town', '7.0145442639048', '37.273307091879', 11),
('Gesha', '7.405703', '36.236018', 1),
('Gesha Woreda', '7.6025363066667', '35.622934449922', 35),
('Gesuba town', '6.7274017725461', '37.563615560709', 20),
('Geta', '8.197598', '38.252383', 1),
('Geto Woreda', '7.9504868867451', '37.961371188048', 25),
('Gewane', '10.158711790549', '40.648697166786', 26),
('Gewata', '7.608587', '35.966087', 1),
('Gewata Woreda', '7.5535687744422', '35.980762004336', 66),
('Geze Gofa', '6.371853', '36.899938', 1),
('Geze gofa woreda', '6.3316343937191', '36.79566461895', 36),
('Gibe', '7.6885182190476', '37.715194321429', 3),
('gibe woreda', '7.7295007637044', '37.693620009436', 34),
('Gida Ayana', '9.8739164875097', '36.62141363175', 63),
('Gidami', '8.9895479561204', '34.611045577297', 37),
('Gidan', '12.055401321678', '39.329001298416', 33),
('Gide Bench Woreda', '7.1504475855928', '35.667198890218', 22),
('Gidole town', '5.6487900772727', '37.366956640909', 2),
('Gilgelbeles Town', '11.158811425723', '36.344534441763', 19),
('gimbichau town', '7.4535573740702', '37.629856483884', 25),
('Gimbichu', '8.9966675132432', '39.191241661744', 47),
('Gimbi Rural', '9.0472857880216', '35.993659445256', 46),
('Gimbi Town', '9.180577413903', '35.831241986025', 45),
('Gimbo Woreda', '7.384131178995', '36.251441485404', 57),
('Gindebert', '9.6027960496194', '37.846541543218', 18),
('Ginir Rural Woreda', '7.1951361527855', '40.66142500392', 69),
('Ginir Town', '7.1317649855127', '40.715653085324', 31),
('Girar Jarso', '9.7762353749202', '38.745020608117', 20),
('Girawa', '9.130460114223', '41.844764841114', 84),
('Girja', '6.0902293698556', '39.06001272491', 19),
('Gishe', '10.540045843739', '39.583995766091', 33),
('Gnangatom woreda', '5.1987012353213', '36.080554104457', 26),
('Goba', '6.932240657617', '39.971106137106', 29),
('Goba Sub City', '7.0152503891234', '39.977272350596', 40),
('Goba woreda', '6.9159764602899', '36.188213834348', 31),
('Gobu Seyo', '9.1012036756691', '36.960220339173', 19),
('Godere', '7.2293825697255', '35.31685163752', 35),
('Godey', '6.0823640867066', '43.626289509341', 40),
('Godey City', '5.958919006028', '43.551800028422', 53),
('God-God', '4.986907275', '43.2211383', 2),
('Gog', '7.6445328188468', '34.282514958938', 18),
('Goglo', '6.7721972275242', '44.518283491563', 5),
('Gola Oda', '8.7582019268964', '41.514615143332', 26),
('Goljano', '8.8549590883205', '42.710433142199', 12),
('Gololcha', '8.2543886227982', '40.117238959491', 46),
('Gololcha Woreda', '7.4513038644412', '40.543716681896', 50),
('Gombora', '7.5578254', '37.6525068', 1),
('Gomma', '7.8608794206958', '36.584373606551', 75),
('Gomole', '5.1045075134204', '38.339832053325', 20),
('Goncha', '10.941180860248', '38.134742732834', 115),
('Goncheri Woreda', '8.0432821530172', '37.810253575862', 12),
('Gondar City Administration', '12.602017423996', '37.447875726322', 179),
('Gondar Zuriya', '12.37674887405', '37.578502011712', 70),
('Gonjikolela Woreda', '11.172026655677', '37.635552262185', 53),
('Gonji Kollela', '10.934846466667', '37.625023866667', 10),
('Gorabaqaqsa', '6.0836660472759', '41.318103796134', 23),
('Gorche Woreda', '6.8273357798991', '38.596487975263', 27),
('Gorigasha Woreda', '6.5917096844933', '35.554067256761', 23),
('Gorka Woreda', '5.7909593894356', '37.905868449059', 9),
('Goro', '7.2234383104498', '40.041885229619', 89),
('Goro Dola Woreda', '5.5448525606533', '39.397297169339', 31),
('Goro Gutu', '9.3697941937773', '41.360702982469', 59),
('Goro Muti', '9.239219043166', '41.56571980196', 22),
('Gota-Biki', '9.5271347649247', '41.19105190493', 12),
('Gozamin', '10.356692909079', '37.728361083094', 66),
('Guagusa Shikuda', '10.807087305912', '37.016501511479', 55),
('Guangua', '10.945673134963', '36.513693491502', 54),
('Guba Lafto', '11.852881429866', '39.571059213157', 62),
('Guba Qoricha', '8.915010964615', '40.53803402772', 39),
('Guba Woreda', '11.260238615556', '35.142592999899', 22),
('Guchi', '3.8137647107326', '38.900707612404', 14),
('Gudeya Bila', '9.1940575146882', '36.854316558614', 29),
('Guduru', '9.508856170313', '37.464706689162', 41),
('Gulina', '12.147903688128', '39.983799501948', 18),
('Guliso', '9.1649725458599', '35.492239431281', 39),
('Gulomekeda Woreda', '14.401216674379', '39.431148591157', 17),
('Gumay', '7.9810817204678', '36.463667432359', 26),
('Gumbi Bordode', '9.051256498913', '40.448481151505', 27),
('Gumer Woreda', '8.0073070685282', '38.07942056389', 28),
('Gumi Eldalo', '7.7155', '37.09552', 1),
('Gumi Eldalo Woreda', '5.1925022572368', '39.636697817105', 7),
('Guna', '8.3252654866951', '39.896060919622', 32),
('Guna Begemidir', '11.876482961186', '38.204344998546', 31),
('Gunagado', '7.8101077761039', '43.950837154805', 16),
('Gununo town', '6.9215034851177', '37.658529994837', 15),
('Gununo Town', '6.9771895', '37.6450723', 1),
('Gura Damole', '6.5479225824176', '40.532266940659', 13),
('Guradhamole', '6.7169995659864', '40.428998086735', 21),
('Guraferda', '6.780465', '35.199263', 1),
('Gura Ferda Woreda', '6.8680935290302', '35.254244818541', 88),
('Gursum', '9.3337598889004', '42.4492182701', 125),
('Guto Gida', '9.279342139026', '36.554868202535', 48),
('Hababo Guduru', '9.6847560246897', '37.533010259172', 23),
('Habro', '8.8100536449832', '40.52192293097', 63),
('Habru', '11.658874815813', '39.684737898319', 151),
('Hadagala', '10.344345492507', '42.204862003097', 20),
('Hadeleala', '10.25869003468', '40.182760001872', 16),
('Hadero Town', '7.1951699133877', '37.668960070664', 25),
('Hadero Tuno Zuria Woreda', '7.2136770407468', '37.661054636364', 39),
('Hadero Tunto Zuriya', '7.239088', '37.639655', 1),
('Hadnet', '13.47340339954', '39.463759024314', 82),
('Hagere Mariam', '9.2167729098588', '39.406459068871', 53),
('Hagere-Selam Town', '13.639561067105', '39.175966917763', 6),
('Hahaile Woreda', '14.174456052787', '39.119128117049', 11),
('Halaba Kuleto Town', '7.3164551959846', '38.095750056672', 76),
('Halu', '8.1824675782315', '35.351679284837', 15),
('Hamaro', '7.5579597582524', '42.285694819417', 10),
('Hambela Wamena', '5.9437559156215', '38.487925325309', 79),
('Hamer', '5.103', '36.325', 1),
('Hamer woreda', '5.1639418202854', '36.588561754926', 40),
('Hanruka', '9.4370552691201', '40.309872548054', 12),
('Hararey', '6.9671157857143', '42.987085328571', 2),
('Harawo', '10.005286297143', '42.904000206041', 26),
('Harena Bulluk', '6.3727432744349', '39.556972822326', 39),
('Hargele', '5.2217769974872', '42.177026196761', 44),
('Haro Limu', '9.8554968066761', '36.272360598935', 29),
('Haromaya', '9.3004178738667', '41.982105801333', 33),
('Haromaya Woreda', '9.4173038076933', '42.028418811853', 63),
('Harorays', '9.377093592381', '43.085478058952', 19),
('Haro Walabu', '6.1130338221732', '38.421787520235', 33),
('Harshin', '9.0131335263969', '43.71046068632', 34),
('Haru', '8.9775569906337', '35.809637677032', 40),
('Haruf Woreda', '7.1910534693651', '38.592752799365', 37),
('Hawa Gelan', '8.6896243119429', '34.937506765649', 82),
('Hawassa Zuria Woreda', '7.0377865636376', '38.354997206868', 42),
('Hawella Woreda', '6.9125608027689', '38.523160847919', 18),
('Hawelti', '13.506454800538', '39.455202929569', 75),
('Hawi Gudina', '8.146369545037', '40.546551778247', 37),
('Hawzen Town', '13.985259821603', '39.432699258807', 9),
('Hawzien Woreda', '13.997975052291', '39.392769595066', 26),
('Hayik Dar Sub City', '7.0579360251606', '38.474924864007', 8),
('Heben Arsi', '7.4923759152288', '38.814753522941', 31),
('Hidabu Abote', '9.8860445659336', '38.553611074342', 18),
('Higloley', '6.7350637727273', '44.277357463636', 7),
('Hintalo Woreda', '13.17729595558', '39.451805052902', 23),
('Hirna Towm', '9.2139658102555', '41.096761067478', 12),
('Hitosa', '8.1091334512967', '39.233410010702', 63),
('Hobicha', '6.7640833757576', '37.873054718182', 3),
('Hobicha woreda', '6.7721319066148', '37.870062164786', 19),
('Hoko Woreda', '6.2004253145662', '38.99067928665', 20),
('Holota Town', '9.062109379299', '38.493664704717', 72),
('Homa', '9.0484814449383', '35.722880961975', 19),
('Homecho Town', '7.6925769125', '37.728321528929', 10),
('Homosha Woreda', '10.295556890031', '34.625412678579', 26),
('Horashagah', '6.98975', '43.320769', 1),
('Horo', '9.575534020839', '37.097246516373', 14),
('Horo Bulluq', '9.5978731034395', '37.095845033758', 23),
('Hosaena Town Administration', '7.5311569313725', '37.823688527451', 4),
('hosaena town adminstration', '7.55153175411', '37.849738750047', 207),
('hulbareg woreda', '7.7279665498608', '38.109877802525', 31),
('Hulet Eju Nese', '11.054014629552', '37.893303664032', 85),
('Hulla Woreda', '6.4961950364572', '38.542578542398', 33),
('Humbo', '6.9201313333333', '38.27054', 3),
('Humbo woreda', '6.6982304915171', '37.727946820555', 21),
('Hurrumuu', '8.2809510620632', '35.751978796007', 18),
('Hurta Town', '8.1462855542017', '39.348782233754', 11),
('Ilu', '8.8135922388405', '38.353999043712', 43),
('Ilu Galane', '9.0058789999131', '37.295093608968', 30),
('Injibara Town', '10.970137624311', '36.926567520706', 69),
('Itange Woreda', '8.1940235418041', '34.273134120369', 10),
('Jabi Tehinan', '10.69226292867', '37.246554217709', 118),
('jajura town', '7.5142465715789', '37.741976313684', 18),
('Jajura Town', '7.4592385714286', '37.692978614286', 2),
('Jama', '10.415746241689', '39.239728834238', 72),
('Janamora', '13.018083883877', '38.134196809813', 75),
('Jardga Jarte', '9.720182337197', '37.089506568864', 29),
('Jarso', '9.4749378425838', '39.530903679689', 62),
('Jawi', '11.588994837236', '36.490811113658', 135),
('Jeju', '8.3721921933148', '39.634261975135', 58),
('Jeldu', '9.2740925294165', '38.072026415861', 31),
('Jemu Town', '6.6387262438699', '35.785382385034', 15),
('Jibat', '8.7069272545554', '37.452809213557', 17),
('Jida', '9.4089125113435', '39.013499346626', 20),
('Jigjiga Town', '9.3586525180855', '42.798617795964', 367),
('Jikawo', '8.2993437764436', '35.581138738588', 12),
('Jile Timuga', '10.254236580923', '39.984084205786', 46),
('Jima Arjo', '8.7452586511213', '36.505369952571', 48),
('Jimma Geneti', '9.4294633374618', '37.114907794832', 25),
('Jimma Horo', '9.004276348', '34.781210314564', 29),
('Jimma Rare', '9.2106926053656', '37.342058769285', 39),
('Jimma Town', '7.6693770213461', '36.844232231271', 164),
('Jinka town', '5.7826587111377', '36.562019775756', 53),
('Jor', '7.8389735223776', '34.014108392308', 6),
('Kacha Birra', '7.297702', '37.740387', 1),
('Kacha Birra Woreda', '7.2117427228785', '37.782333570466', 35),
('Kafta Humera', '13.966659464808', '36.945919631944', 39),
('Kafta Humera Woreda', '14.02544576', '36.94228612', 25),
('Kallu', '11.083735605995', '39.844654469444', 96),
('Kamashi Town', '9.5120595575688', '35.861829008314', 6),
('Kamashi Woreda', '9.6543731481481', '36.161416777778', 11),
('Kamba Town', '6.0522241916983', '37.167888892039', 10),
('Kamba Town Admistration', '6.0611927', '37.1778784', 1),
('Kamba Zuria', '6.1362396255639', '37.217731625815', 12),
('Kamba Zuria Woreda', '6.0986252168094', '37.239352772163', 30),
('Karat city administration', '5.349827450541', '37.438164521145', 35),
('Karat Twon Administration ', '5.273605', '37.326082', 1),
('Karat zuriya woreda', '5.3632250059287', '37.399574225444', 49),
('Karsasula', '5.2747020419913', '40.030162751948', 16),
('Kawo koysha woreda', '6.7766337936021', '37.436620193953', 17),
('Kebena Special', '8.3254713835022', '37.901716552171', 28),
('Kebridahar', '6.7092426742529', '44.229056668966', 22),
('Kebridahar Town', '6.7675395889617', '44.293922062692', 36),
('Kechi Woreda', '7.0451311163957', '36.950833518193', 12),
('Kedida Gamela Woreda', '7.25698614375', '37.905271025', 16),
('Kelela', '10.578281098669', '39.003898691667', 118),
('Kele Town', '5.8328382574803', '37.910201409055', 8),
('Kemisie Town', '10.711241532239', '39.879404828204', 66),
('Kena woreda', '5.3054417952363', '37.371517513138', 41),
('Kercha', '5.79279906016', '38.441342179413', 68),
('Kercha Town', '5.7750578242021', '38.419040880386', 17),
('Kersa', '8.7883961284246', '40.107902063071', 121),
('Kersana Mamila', '8.6032506456922', '38.610460669179', 50),
('Kewot', '10.017431740071', '39.921148545833', 60),
('Keyih Tekli Woreda', '13.75231365239', '39.038352690847', 20),
('kibet town adminstration', '8.0283627873066', '38.331202835181', 26),
('Kiltu Kara', '9.6874151223558', '35.265138810817', 29),
('Kimbibit', '9.3407014458333', '39.290423969444', 5),
('Kindo didaye woreda', '6.762082717094', '37.343403871111', 24),
('Kindo koysha woreda', '6.9168213793327', '37.546239084059', 35),
('Kinfaze Begela', '12.738934759034', '37.958784776424', 26),
('Kiramu', '9.973761490426', '36.864870359885', 33),
('Klite Awlaelo Woreda', '13.861500681155', '39.57135620818', 17),
('Kobo Town', '12.159703333596', '39.646696722726', 45),
('Kochore', '6.0682092758621', '38.161495568966', 11),
('Kochore woreda', '6.0268576473999', '38.170377398527', 33),
('Kofele', '7.0295609831287', '38.856957368759', 61),
('Kofole Town', '7.074956855295', '38.785592011543', 37),
('Kogota', '6.3944813809524', '37.549587095238', 2),
('Kogota Woreda', '6.3582641757033', '37.577943092839', 12),
('Kokosa', '6.7608010029409', '38.794011712604', 51),
('Kolango Town Administration', '5.4905826293194', '37.217729778534', 4),
('Kolango Zuria Woreda', '5.5230120569227', '37.24052097908', 40),
('Kola Tembien', '13.643275967042', '38.766321938264', 26),
('Kolme woreda', '5.3053434011502', '37.230289039829', 27),
('Kombolcha', '9.4562167650875', '42.13247118506', 65),
('Kombolcha Town', '11.083060860468', '39.736727960142', 116),
('Koneba Woreda', '13.965704955119', '39.873725158398', 18),
('Konta Koyisha Woreda', '6.7148533533493', '36.569550257895', 9),
('Koran Mula', '8.7602959283662', '43.061350588151', 13),
('Kore', '7.2957001877048', '38.827340941543', 54),
('Korem Town', '12.516997692857', '39.515102746104', 4),
('Korem Woreda', '12.522815666667', '39.500292', 3),
('Kori Woreda', '12.433094730481', '41.105834837968', 11),
('Koye Fache Sub-City', '8.8710821125297', '38.839260122842', 57),
('Kucha Alfa Woreda', '6.6227982333803', '37.286291656479', 16),
('Kucha Woreda', '6.4947648481701', '37.434127287339', 33),
('Kumbi', '8.2463363402667', '41.6707679844', 13),
('Kura Jida-City', '9.153933701105', '38.931259912818', 26),
('Kurfa Chale', '9.2493123044197', '41.862768887335', 25),
('Kurmuk Woreda', '10.522604350772', '34.424344268835', 42),
('Kutaber', '11.277900146142', '39.503774650785', 56),
('Kutcha Alpha', '6.5636537833333', '37.292760216667', 3),
('Kutcha Zuria', '6.5395342057971', '37.413821693237', 10),
('Kuyu', '9.7772097182709', '38.723611084231', 14),
('Laelay Maychew', '14.11586907527', '38.737497139838', 21),
('Laelay qoraro woreda', '14.135689505719', '38.448667124129', 15),
('Lagahida', '7.3686742', '42.007597', 3),
('Laha town', '6.4799952056924', '36.596844576945', 16),
('Lalibela Town', '12.038962191495', '39.05267080299', 22),
('Lalo Asabi', '9.2288573928788', '35.686514478182', 43),
('Lalo Kile', '8.8872040536098', '35.334874721045', 39),
('Lanfuro', '7.050611', '38.472694', 1),
('lanfuro woreda', '7.8606644281442', '38.399007355368', 26),
('Lare', '8.3236752883506', '33.992066329412', 6),
('Lasdhankeyre', '6.5847168277778', '43.929582113889', 8),
('Laska Town', '6.2989821347276', '36.630833459332', 15),
('Laska zuria Woreda', '6.3264083740835', '36.646970849616', 39),
('Lasta', '11.993745038442', '39.063405354212', 41),
('Lay Armacho', '12.698883183281', '37.387570222461', 48),
('Lay Gayint', '11.660875694787', '38.486649401962', 67),
('Legambo', '10.862007591193', '39.174171622986', 94),
('Lega Tafo Lega Dadi-City', '9.0768419890231', '38.902623544517', 67),
('Legehida', '10.691518165305', '39.296975221595', 44),
('Legehidh Woreda', '7.8798458057429', '41.01514900841', 38),
('Lehelyuub', '6.6739888910714', '45.083786030357', 11),
('Leku Town Administration', '6.8745737190826', '38.443873177527', 21),
('Leku Town Administration Health Office', '6.8737692571429', '38.443963714286', 3),
('Lemo', '7.5903316', '37.864539775', 8),
('lemo woreda', '7.556217584469', '37.869547798711', 82),
('Leqa Dulecha', '8.9299478593537', '36.511898806831', 41),
('Leta Sibu', '9.6328989538462', '35.365788819231', 15),
('Liban Jawi', '8.9637581647643', '37.535324841439', 20),
('Liben', '8.5334021314333', '38.921806641284', 30),
('Liben Woreda', '5.3642563661781', '39.658890086359', 16),
('Libo Kemkem', '12.120009089547', '37.761933601287', 99),
('Limu', '9.8428594052951', '36.464884429904', 27),
('Limu Genet Town', '8.094897234987', '36.948937880321', 24),
('Limu Kosa', '8.0076461846662', '36.899511847786', 64),
('Limuna Bilbilo', '7.362270584631', '39.325429553436', 54),
('Limu Seka', '8.3198171798745', '36.925774700132', 74),
('Lode Hetosa', '8.151711757347', '39.418301025717', 35),
('Loko Abaya Woreda', '6.6901134106517', '38.242500145779', 30),
('Loma Bosa', '6.9776824363958', '37.277558911343', 42),
('Lugo Sub City', '8.5332909632379', '39.271612936585', 66),
('Lume', '8.6186031610119', '39.140686008333', 59),
('Machakel', '10.479464234384', '37.565500873592', 73),
('Machara -Micheta Town', '8.5731055810811', '40.324578357658', 11),
('Mada Walabu', '5.9125165332741', '39.651157775948', 28),
('MaekelAdiabo Woreda', '14.51191764717', '38.006933843396', 9),
('Maeso', '9.5992103803515', '41.580685284809', 14),
('Magale Woreda', '12.911823981026', '39.905651604615', 22),
('Maichew Woreda', '12.781113192894', '39.542386415405', 28),
('Maikinetal Woreda', '13.938491410088', '38.985309952193', 13),
('Maji Tum Town', '6.1833687245906', '35.581485859007', 9),
('Maji Woreda', '6.2277077862039', '35.544088308829', 22),
('Makuey', '8.2944223516103', '33.791332117351', 15),
('Male woreda', '5.7961423542042', '36.807239658269', 46),
('Malka sirbsa woreda', '7.2001280459914', '38.6048556548', 143),
('Mana', '7.7829539195081', '36.749086717663', 55),
('Mana Abicha Sub-City', '9.0199504169314', '38.73815528148', 24),
('Mandura Woreda', '10.982004071429', '36.276438285714', 12),
('Mao Komo Special', '9.4721208094789', '34.396856320695', 28),
('Mareka Woreda', '7.0504094019231', '37.21394779216', 23),
('Mareko Special', '7.9999407584479', '38.516281168075', 46),
('Mari Mansa Woreda', '7.0452258957515', '37.112338835916', 23),
('Marsin', '7.5433854446452', '44.852305068645', 24),
('Masha Town', '7.74581716875', '35.477758655288', 16),
('Masha Woreda', '7.7648679110803', '35.471700002458', 30),
('Mayumuluqo', '8.2646565515186', '42.019803018223', 13),
('Mehal Saint', '10.90532571832', '38.656913900056', 43),
('Mehal Sub City', '7.0601970707774', '38.481713327279', 16),
('Mekanisa Oromo Woreda', '9.5619112721839', '42.885856587816', 9),
('Mekdela', '11.230619075474', '39.041602023599', 78),
('Meket', '11.772162215337', '38.73319445961', 72),
('Meki Town', '8.1620830668672', '38.831830226759', 49),
('Meko', '8.6882553953039', '36.020091464365', 17),
('Mekoni Town', '12.799527162192', '39.64675685705', 38),
('Melga Woreda', '6.9291123508749', '38.664251576108', 36),
('Melkabello', '9.0652572897195', '41.330944222887', 48),
('Melka Nonno Sub-City', '9.0318179143697', '38.67306258369', 87),
('Melka Soda', '5.4772282541526', '38.620406231548', 49),
('Melo gada woredA', '6.5787486655637', '36.787824123039', 11),
('Melo koza woreda', '6.4343332636342', '36.590304709614', 66),
('Mena Meketewa', '12.039076296161', '38.254674212909', 16),
('Mencho', '7.4564277108707', '37.029647643174', 35),
('Mendi Twon', '9.7958196715054', '35.104531939247', 18),
('Mene Sibu', '9.73612436', '35.167056386667', 40),
('Mengeshi', '7.3528938303093', '35.129287852948', 27),
('Menge Woreda', '10.348350460116', '34.768806965906', 33),
('Menhariya Sub City', '7.0401946777605', '38.485213633966', 82),
('Menit Goldiya Woreda', '6.8032872985663', '35.942876592294', 26),
('Menit Shasha Woreda', '6.5076503811732', '35.869528278026', 17),
('Menz Gera Midir', '10.332267508581', '39.666004965781', 45),
('Menz Keya Gebreal', '10.21437716742', '39.358647394579', 21),
('Menz Lalo Midir', '10.149659357072', '39.549791000318', 20),
('Menz Mama Midir', '10.117274339839', '39.667728016289', 43),
('Merb Leke', '14.255622708', '38.724538724', 16),
('Merhabete', '10.065759606069', '39.005330892463', 70),
('Merti', '8.5827731789266', '39.727092029992', 28),
('Mesela', '9.021223219637', '41.189323550041', 37),
('Meskan Woreda', '8.1275741283566', '38.317377630202', 35),
('Meta', '9.3997596782928', '41.580541201913', 81),
('Meta Robi', '9.3319787884988', '38.311311895884', 28),
('Meta Welkite', '9.5345000764117', '38.22905428935', 28),
('Metehara Town', '8.9010519643739', '39.914391920635', 26),
('Metema', '12.859638566176', '36.249896991301', 69),
('Metu Town', '8.3012146432066', '35.578693702578', 47),
('Metu Zuriya', '8.3022912236623', '35.506807397265', 38),
('Meye Muluke', '8.7474791176697', '41.89329224788', 31),
('Midaga Tola', '8.8747408178324', '42.132888014885', 28),
('Mida Kegni', '9.1339380483965', '37.519796230904', 14),
('Mida Woremo', '10.223848770804', '39.048201110038', 59),
('Mieso Woreda', '9.2035458371554', '40.719641659273', 44),
('Milhurna Aklil', '8.193502', '37.986973', 1),
('milhurna Aklile Woreda', '8.2311784174719', '38.07448942122', 43),
('Mille City Administration', '11.415495494888', '40.763603871028', 11),
('Mille Woreda', '11.480028063224', '40.873160610232', 14),
('Minjarina Shenkora', '8.915042008834', '39.417213334272', 107),
('Mirab Abaya', '6.2358980842424', '37.604723655152', 7),
('mirab soro', '7.4000944014953', '37.530079636822', 18),
('Misha', '7.67067048', '37.79864226', 2),
('misha woreda', '7.6810176743851', '37.813251315522', 33),
('Misirak Sub City', '7.0524891974093', '38.485671603368', 12),
('mitto woreda', '7.69971588224', '38.36513780272', 22),
('Miyo', '3.7747413340993', '38.561452993261', 33),
('Mizan Aman Town', '6.9537536819026', '35.550153134499', 109),
('Mizhiga Woreda', '9.2758767272727', '36.162305181818', 6),
('Mojana', '9.9375211738705', '39.530809182021', 41),
('Mojo Town', '8.5929374195397', '39.122754906658', 63),
('Moretna Jiru', '9.907739230936', '39.149813133164', 52),
('Motta Town', '11.077175072442', '37.881951354842', 54),
('Moyale', '3.5409136865982', '39.06705688522', 26),
('moyale Town', '3.5543622003805', '39.036136726316', 40),
('Moyale Woreda', '3.6511671756757', '38.883112977477', 10),
('Mubarak', '4.310874', '40.0069565', 2),
('Mulo Woreda', '9.293943992377', '38.568783465328', 15),
('Munesa', '7.5490092300725', '38.989496613587', 72),
('Mustahil', '5.2215829857143', '44.76029317381', 24),
('Naeder Woreda', '13.967951285368', '38.78010901839', 7),
('Nansebo', '6.5717754985806', '39.154384208943', 41);
INSERT INTO `MFR_Woreda` (`Woreda`, `Lat`, `Lng`, `Count`) VALUES
('Nebaru Chilga', '12.46335237249', '37.080101084519', 18),
('Nedhi Gibe', '7.9035732707095', '37.234899854744', 41),
('Nedjo Rural', '9.5256103162811', '35.5031099707', 39),
('Negele Borena Town', '5.3319850119805', '39.574825012015', 36),
('Nejo Town', '9.4929065620024', '35.50549816466', 41),
('Nekemte Town', '9.0836898267695', '36.552797812662', 134),
('Neksege Woreda', '12.757574841224', '39.340274233878', 7),
('Ngangatom', '5.2670777', '35.8512692', 1),
('Nole Kaba', '8.8405820877476', '35.785133355213', 44),
('Nono Benja', '8.626289901105', '37.072723623508', 34),
('Nonoo', '8.5221743826504', '37.419242125349', 57),
('North Achefer', '11.875935530864', '37.02898373251', 3),
('North Achefer Woreda', '11.706073033722', '36.964678977442', 62),
('North ari woreda', '6.2062658541159', '36.631022418509', 29),
('North Bench Woreda', '7.0638019123792', '35.644954896029', 56),
('North Mecha', '10.706499141667', '37.359732575', 9),
('North Mecha Woreda', '11.382816242295', '37.139759659682', 106),
('Nunu Kumba', '8.7865895716106', '36.649951153503', 40),
('Oda Bultum', '8.8214282577725', '40.801669770109', 50),
('Odo Shakiso', '5.7615190337295', '38.800036268955', 71),
('Ofa woreda', '6.7521502848659', '37.558243376533', 28),
('Offa', '6.8534614175439', '37.590217364912', 9),
('Ofla Woreda', '12.531617', '39.414536191489', 28),
('Oflla', '12.516648502892', '39.456221226493', 8),
('Omo Beyem', '7.4898214667018', '37.203040320899', 23),
('Omo Nada', '7.6344749529813', '37.225788297898', 59),
('Oyda woreda', '6.2050740358802', '36.819213265772', 24),
('Oyida', '6.9501196666667', '37.497524333333', 3),
('Pawi Woreda', '11.316136217158', '36.398650047742', 56),
('Qabribayah', '9.1531476572214', '43.312877894559', 61),
('Qabribayah Town', '9.1078664430524', '43.169849531207', 37),
('Qalafo', '5.585445567284', '44.243988182099', 55),
('Qedamay Woyane', '13.497258502429', '39.472780754349', 126),
('Qondala', '9.3882178597553', '34.641859665229', 40),
('Qooxle', '5.4647596636684', '43.175333980071', 12),
('Quara', '12.297678666867', '35.946765337971', 73),
('Quarit', '10.965855347891', '37.433762640362', 70),
('Qubi', '7.898526375', '41.831078375', 5),
('Quiha', '13.472356670676', '39.537361016484', 20),
('Rama adearbaete', '14.396661107021', '38.783667706978', 11),
('Rape woreda', '6.1870052513761', '38.321669534207', 25),
('Raso', '6.5521558744706', '41.807048071228', 15),
('Raya Alamata', '12.362031680876', '39.469075910511', 26),
('Raya Alamata Woreda', '12.47511868', '39.53628916', 15),
('Raya Azebo Woreda', '12.738704732108', '39.727221008244', 33),
('Raya Bala', '12.430363215431', '39.693151767735', 12),
('Raya Chercher Woreda', '12.575229160589', '39.769393275544', 16),
('Raya Kobo', '12.062345468314', '39.617848086976', 81),
('Rayitu Woreda', '6.8514595774256', '41.208050023206', 29),
('Robe', '7.8430247469474', '39.635948457982', 83),
('Saba Boru', '5.5165898241359', '39.033722735023', 33),
('Saden Chanka', '8.8147992544118', '35.078088782568', 38),
('Saden Sodo', '8.4141150350941', '38.309934169992', 39),
('Sagag', '7.7856169114286', '42.867056525714', 11),
('Saja Town', '7.9523530797598', '37.449944945796', 44),
('Salahad', '7.0936031428571', '41.638389142857', 4),
('Samre Woreda', '13.178120165734', '39.185361063084', 20),
('Sandafa Woreda', '9.153938059213', '39.038808681886', 42),
('sankura woreda', '7.5600909522607', '38.166939517954', 60),
('Sarmale Woreda', '5.8215805311686', '37.868673737931', 73),
('Sasiga', '9.1845010841545', '36.46027418981', 56),
('Sawla town', '6.3059985175089', '36.898623104665', 33),
('Saya Deberna Wayu', '9.7685051973029', '39.190941198948', 48),
('Saylem Woreda', '7.8032706810158', '35.792527728156', 36),
('Sebamber Town', '6.4753162928263', '37.45450579987', 10),
('Sebeta Hawas', '8.7739926457594', '38.578581917962', 39),
('Sebeta Sub-City', '8.9103290960976', '38.626055953486', 48),
('Sedal Woreda', '10.077398916667', '35.337934666667', 7),
('Sedie', '10.85550896356', '37.866763726444', 35),
('Sedie Muja', '11.409664331517', '38.437897095151', 27),
('Segen zuriya woreda', '5.4884971103042', '37.49627463896', 23),
('Sehala', '12.908431073137', '38.516194724911', 18),
('Seharti Woreda', '13.330124686123', '39.172471947875', 14),
('Seka Chekorsa', '7.6169780442417', '36.694545854214', 68),
('Sekela', '11.005604787302', '37.201387207448', 70),
('Sekota Town', '12.623016576504', '39.033942530667', 18),
('Sekota Zuria', '12.626264089712', '39.046321357952', 40),
('Selamago woreda', '6.1102125386541', '36.118812555653', 35),
('Selamber Town Adminstration', '6.4706433', '37.4579051', 1),
('Sele Nono', '7.9002595298891', '35.292560911796', 24),
('Selewa Woreda', '12.988263757805', '39.350249983937', 7),
('Semen', '13.518759197913', '39.447770564122', 68),
('Semera Logia City Administration', '11.737746382383', '40.983360572803', 48),
('Semirobi', '9.9529989727571', '40.060885971772', 14),
('Seru', '7.6755148377404', '40.206493954904', 21),
('Setema', '7.9907338249851', '36.212509075645', 40),
('Setit Humera', '14.282717089484', '36.610504224547', 17),
('Setit Humra Woreda', '14.154043428571', '36.725464714286', 5),
('Sewena Woreda', '7.4132827073313', '41.097195748222', 42),
('Sewha Saesie Woreda', '14.248019022353', '39.634432752353', 14),
('Seyemti Adiabo woreda', '14.412046405118', '38.192816963762', 14),
('Seyo', '8.5391537603669', '34.801926646248', 40),
('Seyo Nole', '8.9170671577223', '35.686679089938', 45),
('Shabeley', '9.2143547793417', '42.66956072849', 26),
('Shabe Sombo', '7.4758392240524', '36.463970542006', 47),
('Shafambo Woreda', '6.6319977907265', '38.624415229224', 17),
('shakiso Town', '5.7699179392759', '38.90882453556', 42),
('Shakiso Town', '11.079935', '37.885322', 1),
('Shala', '7.3037601849076', '38.378475550765', 62),
('Shambu', '9.5748109814592', '37.117770963202', 39),
('Shanan Kolu', '8.4786950622314', '40.239762585262', 20),
('Shashago', '7.5558875347826', '38.077151286957', 2),
('shashago woreda', '7.4997686523', '38.035795776512', 60),
('Shashemene Zuria', '7.2721063578779', '38.621563453587', 30),
('Shaykosh', '7.3461017505535', '43.952926575461', 20),
('Shebedino Woreda', '6.8561724732152', '38.445971631979', 33),
('Shebel Berenta', '10.429037715515', '38.350215856964', 39),
('Sheko Woreda', '7.0715601781653', '35.500027649212', 67),
('Sheno Town', '9.3181389358162', '39.271013852367', 20),
('Sheraro', '14.393191448392', '37.774022460623', 20),
('Sherkole Woreda', '10.655245033346', '34.779228341948', 26),
('Shewarobit Town', '10.008005768708', '39.906743631642', 42),
('Shey Bench Woreda', '6.9019524645309', '35.77923001762', 65),
('Shilabo', '7.7233980424242', '44.543149730303', 17),
('Shinile', '9.6869965590645', '41.847074482514', 36),
('Shinshicho Town', '7.2139211597406', '37.784476936571', 26),
('Shire Endasilase', '14.107252328791', '38.292371968683', 82),
('Shirka', '7.6079808339208', '39.497628962334', 65),
('Shishinda Town', '7.2602839021248', '35.893808877689', 14),
('Shishoinde Woreda', '7.3117893883839', '35.960533495441', 26),
('Shone Town Administration', '7.1630491882353', '37.936675847059', 2),
('shone town adminstration', '7.1444617928475', '37.953839609888', 44),
('Sibaybi Woreda', '10.5233017', '40.7582342', 1),
('Sibu Sire', '9.0475409280166', '36.808869277743', 68),
('Sigmo', '7.8920614592877', '36.096490765223', 40),
('silti woreda', '7.9846463677627', '38.328026147963', 47),
('Simada', '11.364629976998', '38.251536269972', 49),
('Sinan', '10.535999814885', '37.777796430484', 47),
('Sinana', '7.1374545820617', '40.15312647333', 51),
('Siraro', '7.1146664539933', '38.187837675157', 57),
('siraro badawacho', '7.0793370979622', '38.095547579189', 13),
('Siraro Badewacho', '7.049886826', '38.10609781', 2),
('Sire', '8.2696096980746', '39.49225173022', 32),
('Siz Town', '6.958924264747', '35.774389044663', 19),
('Sodo', '8.3034295', '38.054396', 2),
('Sodo Dacha', '8.5280329881027', '38.627998173084', 25),
('Sodo Town', '6.9056460813858', '37.747309932615', 155),
('Sodo Town Administration', '6.8725511615854', '37.749078835976', 5),
('Sodo Woreda', '8.3396534205326', '38.560106250197', 52),
('Sodo Zuriya', '6.9375348', '37.7167476', 1),
('Sodo zuriya woreda', '6.8494493128933', '37.746849316595', 58),
('Sokoru', '7.9586906948989', '37.441774588215', 58),
('soro woreda', '7.4423399340909', '37.665543855528', 35),
('South Achefer', '11.372061095238', '36.991002619048', 14),
('South achefer Woreda', '11.419289477933', '36.926677494058', 77),
('South ari woreda', '5.9675796886998', '36.574288631348', 39),
('South Bench', '6.833028', '35.562005', 1),
('South Bench Woreda', '6.8686748579642', '35.52476269266', 92),
('South Mecha', '11.282488242424', '37.168546387879', 6),
('South Mecha Woreda', '11.201878067085', '37.179029204002', 30),
('South Sodo Woreda', '8.2363471378345', '38.475850601338', 27),
('Soyama Town', '5.4824133377011', '37.86685595931', 14),
('Soyama zuriya woreda', '5.529735628121', '37.861089666088', 49),
('Sude', '8.0216409877477', '39.771863563912', 46),
('Sulula Fincha', '9.7890130863095', '37.416442795037', 7),
('Sululta Sub-City', '9.180273482493', '38.75883292569', 49),
('Sululta Woreda', '9.4015959657528', '38.742857829964', 30),
('Surma Woreda', '6.0685317156972', '35.440342144064', 3),
('Suro Barguda', '5.5550255599016', '38.039250269865', 20),
('Tabor Sub City', '7.030017634908', '38.470689348771', 97),
('Tach Armacho', '12.995284233631', '37.295492027088', 56),
('Tach Gayint', '11.721968397317', '38.480542377202', 29),
('Tahtay Adyabo', '14.287611051691', '37.796778862319', 19),
('Tahtay Maychew', '14.093824231777', '38.584668439885', 17),
('Tahtay Qoraro', '14.175724117793', '38.340664097191', 19),
('Takusa', '12.186900127865', '37.003056221949', 46),
('Taltale', '5.0534728606721', '37.372359002445', 31),
('Tanqua-Milash Woreda', '13.54678042402', '39.028259065441', 11),
('Tarcha Town', '7.1504502031857', '37.168858267754', 31),
('Taremaber', '9.8566231758196', '39.794497632682', 69),
('Tebela town', '6.7034887024375', '37.776326396039', 15),
('Tebela Town Administration', '6.7048373', '37.7754947', 1),
('Tegede', '13.348255977049', '37.340512430482', 45),
('Tegedi', '13.423161412249', '37.329121370229', 30),
('Tehulederie', '11.291275865777', '39.690997792594', 93),
('Telalak', '10.924900114413', '40.212256182495', 15),
('Telemt', '13.452102558065', '38.38912195818', 31),
('Tello Woreda', '7.1163135149397', '36.471400057301', 46),
('Tena', '7.8112516688034', '39.531702637046', 28),
('Tenbaro Special', '7.2785978614494', '37.53770010463', 37),
('Tenta', '11.241641091887', '39.246725934832', 69),
('Teppi Town', '7.1980865600124', '35.423042754104', 49),
('Tercha Zuria Woreda', '7.1652842075359', '37.024028659389', 26),
('Teru', '12.43075250336', '40.280576590962', 10),
('Teticha Woreda', '6.5677399007191', '38.535516677753', 22),
('Tiyo', '7.8772757863571', '39.122140368215', 35),
('Tocha Woreda', '7.0914796304173', '37.040871438122', 20),
('Togwajale Town', '9.5990448414035', '43.329306925263', 40),
('Toke Kutaye', '8.9793330407037', '37.760948734367', 37),
('Tole', '8.6311924119138', '38.380619588035', 38),
('tora town adminstration', '7.8620055792377', '38.424799666499', 22),
('Tsagibji', '12.713286204013', '39.194601621405', 7),
('Tseada Emba Woreda', '14.048924614143', '39.589201146727', 30),
('Tsegede Woreda', '13.058009631579', '37.568068473684', 19),
('Tselemti', '13.559668787879', '38.333347272727', 24),
('Tsimbla woreda', '13.859776388201', '38.131893574275', 23),
('Tsirae Wonberta Woreda', '13.710869548629', '39.684259812642', 28),
('Tula Woreda', '6.9797378880496', '38.476074089962', 45),
('Tuliguled', '9.5250472649433', '42.708312315006', 26),
('Tulo', '9.1957935326237', '41.127068063764', 53),
('Turmi town', '4.9676128897076', '36.489085811184', 8),
('Uba Debretsehay', '10.6787', '37.1446', 1),
('Uba debretsehay woreda', '6.0882101277966', '36.86978887322', 34),
('undulu Woreda', '10.189722335992', '34.867471058699', 15),
('Uraga', '6.1006583789783', '38.579927476813', 72),
('Ura Woreda', '10.123171097959', '34.615556301357', 42),
('Waba ari woreda', '6.0573888878049', '36.58135774065', 8),
('Wacha Town', '7.1462522381474', '35.805186655876', 14),
('Wachile Woreda', '4.5133751454191', '38.855473364327', 10),
('Wadara', '5.8114260560528', '39.277342988261', 27),
('Wadila', '11.645859551039', '38.939378351009', 51),
('Wajerat', '13.059305', '39.63365', 2),
('Wajerat Woreda', '13.054998943942', '39.669434790416', 11),
('Walmara Woreda', '9.058157836172', '38.483605306882', 33),
('Wama Hagalo', '8.991550068277', '36.666342727644', 41),
('Wangey', '7.3252452609375', '42.223434156406', 6),
('Wanthoa', '8.3579068537328', '33.417406935855', 12),
('Warder', '6.9734977188486', '45.337022834238', 53),
('Wassama Woreda', '13.545074476959', '39.901800129493', 3),
('Wayu Tuqa', '8.9998268042221', '36.639430447223', 27),
('Wembera Woreda', '10.607687263279', '35.719866996868', 52),
('Wenago', '6.2470227', '38.3520971', 1),
('Wenago town', '6.3168876262806', '38.25569608686', 8),
('Wenago woreda', '6.2787416015784', '38.267895680448', 31),
('Wensho Woreda', '6.7522703117034', '38.491752180598', 23),
('Wera Dijo Woreda', '7.4932200586891', '38.252338442087', 41),
('Wera Woreda', '7.3316629481584', '38.088089730755', 29),
('Werebabo', '11.404331242987', '39.838449925114', 86),
('Wereilu', '10.66041918013', '39.44713792614', 67),
('Were Jarso', '9.9826480897764', '38.248885582002', 24),
('West Abaya Woreda', '6.3601171594872', '37.699081216267', 41),
('West Armacho', '13.420177873927', '36.52607268502', 42),
('west azernet woreda', '7.7693883919199', '37.926436508494', 36),
('west badewacho', '7.1535384736625', '37.837862947336', 39),
('West Badewacho', '7.671', '37.623755', 1),
('West Belesa', '12.268813262079', '37.719139133929', 52),
('West Dembia', '12.313589272016', '37.221894970135', 44),
('West Imay', '6.4086177354839', '42.210751347527', 21),
('West Welabu', '6.0628804129412', '39.451432368529', 12),
('Wogera', '12.768846282126', '37.62052500778', 45),
('Wogidi', '10.581069751003', '38.743775401335', 102),
('Woldiya Town', '11.832072498354', '39.598497323322', 60),
('Woliket Town', '8.2154815014177', '37.793151960734', 75),
('Woliso', '8.5459617488355', '37.999541581136', 52),
('Woliso Town', '8.5228804858469', '37.970524380133', 53),
('Wolkait', '13.737975630417', '37.289051815554', 36),
('Wolkayit Woreda', '13.63846948', '37.4742296', 25),
('Womberma', '10.550912766493', '36.936736666781', 70),
('Wonchi', '8.6477174856043', '37.901184289761', 34),
('Wondo', '7.0797692307738', '38.628584749413', 27),
('Wondo Genet Town', '7.0173464990789', '38.605525645725', 23),
('Wondogenet  Town Administration  Health Office', '7.016598', '38.604957', 1),
('Wondogenet Woreda', '7.0309756637009', '38.613561761572', 23),
('worabe town adminstration', '7.8365656588132', '38.180425877152', 62),
('Woreda 08', '9.0204384766241', '38.841962216891', 55),
('Woreda 09', '8.9925460083786', '38.829605175464', 58),
('Woreda 1', '8.9798891361867', '38.757624022547', 314),
('Woreda 10', '9.0110040896668', '38.782441202349', 198),
('Woreda 11', '9.00057592216', '38.781331684443', 95),
('Woreda 12', '9.0180541658796', '38.820261411781', 175),
('Woreda13', '8.86801571875', '38.813488190625', 8),
('Woreda 13', '9.014812406406', '38.791103549364', 142),
('Woreda 14', '9.0000547569059', '38.808242269307', 96),
('Woreda 15', '8.934668225', '38.726018875', 4),
('Woreda 2', '9.014348113409', '38.736775926885', 240),
('Woreda 3', '9.0004962407287', '38.764645321788', 247),
('Woreda 4', '9.0112018309621', '38.759610518339', 308),
('Woreda 5', '9.0353314221241', '38.733827310187', 197),
('Woreda 6', '9.0269935552125', '38.772979454646', 201),
('Woreda 7', '9.0135802110404', '38.751002669602', 246),
('Woreda 8', '9.0339505132156', '38.732005915313', 213),
('Woreda 9', '9.0095350315519', '38.751275385533', 268),
('Woreta', '11.927940973095', '37.699627583179', 40),
('Wuchale', '9.5806312387832', '38.91642567351', 41),
('Wukro Town', '13.792169598319', '39.598624230401', 47),
('Yabelo', '4.8418781844613', '38.189075083245', 21),
('Yabelo Town', '4.8955801588452', '38.092240194194', 31),
('Yahoob', '7.8997656393805', '42.583581630531', 3),
('Yallo', '12.367074959871', '39.887226938931', 19),
('Yaya Gulele', '9.6274189023421', '38.677448815472', 8),
('Yayo', '8.3672178416882', '35.929898076869', 37),
('Yeki Woreda', '7.2349816554655', '35.467323794129', 103),
('Yemalogi Welel', '8.7841005824621', '34.830962111636', 20),
('Yilemana denisa Woreda', '11.219371694666', '37.416767243322', 84),
('Yilmana Densa', '11.289187891071', '37.500039324107', 20),
('Yirgachefe', '6.2120328', '38.239306', 1),
('Yirgachefe town', '6.1587553720416', '38.207183073082', 22),
('Yirgachefe Town Administration', '6.16812', '38.25498', 1),
('Yirga chefe woreda', '6.1637202614329', '38.207783446189', 54),
('Yirgalem Town Administration', '6.7495623678446', '38.394811438867', 32),
('Yocale', '8.4163503540984', '43.846127838525', 23),
('Yubdo', '8.9557578237681', '35.452829653333', 29),
('Zaba Gazo Woreda', '7.108625239309', '37.321700604924', 24),
('Zala woreda', '6.2623134286795', '37.035401377645', 63),
('Zana', '14.17839', '37.98762', 1),
('Zana Woreda', '13.903998932929', '38.461342329091', 23),
('Zata', '12.50940305576', '39.285210161751', 3),
('Zay Woreda', '9.8983704615385', '36.006316461538', 6),
('Zebela Walashe Sub City', '7.1217051662874', '39.999852735269', 22),
('Zigem', '10.702293469915', '36.502929487029', 97),
('Ziquala', '12.773919172149', '38.763113716861', 31),
('Ziway Dugda', '7.9707255029205', '38.983408309924', 49);

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
('Adama Town', '8.5406315060473', '39.270050284013', 497),
('Addis Ketema Sub City', '9.0403528863067', '38.719498071639', 198),
('Afder', '5.6157720461364', '42.109941092573', 248),
('Agaro Towm', '7.8529084294618', '36.589125252828', 41),
('Agniwa zone', '7.7160772230671', '34.481405001811', 98),
('Akaki Kality Sub City', '8.882661882349', '38.786938057664', 263),
('Ale zone', '5.5224844572061', '37.240150185273', 44),
('Ambo Town', '8.9820470887941', '37.852869213778', 120),
('Arada Sub City', '9.0390545118357', '38.75491670863', 237),
('Ari zone', '5.8075071696349', '36.566151675587', 148),
('Arsi zone', '7.9203214040115', '39.56743431996', 1106),
('Asella Town', '7.9643675408724', '39.133007543368', 88),
('Assosa Town Administration', '10.066094721841', '34.54310201967', 70),
('Assosa Zone', '10.222465927588', '34.688189064718', 332),
('Awi Zone', '11.030767938782', '36.745333293555', 900),
('Bahirdar Town Administration', '11.599255921901', '37.377196372283', 336),
('Bale Zone', '6.8327227856472', '40.133523493667', 404),
('Basketo zone', '6.3069888492036', '36.635544549129', 54),
('Batu Town', '7.9262334726227', '38.706995185469', 69),
('Bench Maji', '6.8067465', '35.380634', 2),
('Bench Sheko Zone', '6.9523019496712', '35.576004354066', 518),
('Bishoftu Town', '8.749939503677', '38.970671715982', 248),
('Bole Sub City', '9.0023461922821', '38.7976477031', 412),
('Borena Zone', '4.5463403683757', '38.106629939313', 243),
('Bule Hora Town', '5.6235669957615', '38.239963080701', 85),
('Buno Bedele Zone', '8.4417222827587', '36.303559165327', 454),
('Burji Special', '5.56361861', '37.87419574', 2),
('Burji zone', '5.5193861075918', '37.86235077094', 63),
('Central Gondar Zone', '12.600416954696', '37.480991938058', 707),
('Central Sidama Zone', '6.730670092081', '38.449137273314', 225),
('Central Zone', '14.060545979462', '38.855418104998', 461),
('Dawa', '3.5412992450926', '39.067527541012', 28),
('Dawro Zone', '7.0390693225063', '37.159006975611', 299),
('Debreberhan Town Administration', '9.669684382324', '39.52878077433', 120),
('Debre Markos Town Administration', '10.328419859592', '37.726942329848', 91),
('Debre Tabor town Administration', '11.857287846351', '38.018315473676', 41),
('Dessie Town Administration', '11.1445331166', '39.631928904244', 100),
('Dodola Town', '6.9780171869293', '39.186273620891', 54),
('Dollo', '6.9777881725815', '45.345406097662', 159),
('East Bale Zone', '7.1432016047688', '40.970894112205', 306),
('East Borena Zone', '5.2740925147524', '39.417858958746', 172),
('Eastern Zone', '10.205777552647', '39.169208060464', 529),
('East Gojjam Zone', '10.612755996395', '37.990643804156', 1246),
('East Gurage Zone', '8.1770333902846', '38.413362798647', 209),
('East Hararge Zone', '9.2275609026924', '41.865682573124', 1011),
('East Shewa Zone', '8.4742587444557', '39.130053023418', 533),
('East Wollega Zone', '9.3223625018932', '36.635564159354', 697),
('Erar', '8.1049519085002', '42.285843249662', 73),
('Fafan', '9.3257598339488', '42.826434560879', 861),
('Gambella Town Administration', '8.2438606191283', '34.592846924576', 37),
('Gamo Gofa', '6.178923', '36.628815', 2),
('gamo zone', '6.1268267430938', '37.510670431888', 549),
('Gamo Zone', '6.214226624678', '37.445134189662', 109),
('Gardula zone', '5.6505134981817', '37.36391306568', 68),
('gedeo zone', '6.3599842719511', '38.310560721221', 382),
('Gedeo Zone', '6.2042562057143', '38.257150670714', 28),
('Gilgelbeles Town Administration', '11.158811425723', '36.344534441763', 19),
('gofa zone', '6.3152126783989', '36.866387864845', 362),
('Gofa zone', '7.981876', '37.569772', 4),
('Gondar Town Administration', '12.602017423996', '37.447875726322', 179),
('Guji Zone', '6.0760032423089', '38.73508906849', 484),
('Gulele Sub City', '9.0552026631838', '38.732445930037', 162),
('Gurage Zone', '8.1689259877771', '37.887068855167', 521),
('Hadiya Zone', '7.5189011931349', '37.845921466364', 892),
('Halaba Zone', '7.3678872227123', '38.146221629432', 175),
('Hawassa City Administration', '7.0318812554714', '38.476360482745', 289),
('Holota Town', '9.062109379299', '38.493664704717', 72),
('Horo Gudru Wellega Zone', '9.5685361268413', '37.193796444201', 360),
('Ilu Aba Bora Zone', '8.3541840348766', '35.655738188572', 409),
('Itang Special', '8.1940235418041', '34.273134120369', 10),
('Jarar', '8.1461176644389', '44.828326270671', 285),
('Jimma Town', '7.6693770213461', '36.844232231271', 164),
('Jimma Zone', '7.8787688634766', '36.89430078178', 1009),
('Kaffa Zone', '7.293196731575', '36.079272911611', 648),
('KamashI Town Administration', '9.5120595575688', '35.861829008314', 6),
('Kamashi Zone', '9.7282943205128', '35.907330794872', 38),
('Kebena Special', '8.3254713835022', '37.901716552171', 28),
('Kelem Wollega Zone', '8.8411616650758', '34.847466750584', 516),
('Kembata Tembaro Zone', '7.2491957478261', '37.886765113043', 4),
('Kembata Zone', '7.2632187352358', '37.837027294941', 341),
('Kirkos Sub City', '9.0034569643659', '38.757778411288', 232),
('Kolfe Sub city', '8.9973109488838', '38.701470366983', 403),
('Kombolcha Town Administration', '11.083046331081', '39.73676231741', 109),
('Konso zone', '5.3603008024047', '37.39670447312', 175),
('Konso Zone', '5.273605', '37.326082', 1),
('Konta Zone', '7.1625864800183', '36.511573666782', 63),
('Koore zone', '5.8207426690536', '37.87033344096', 90),
('Korahay', '6.8221269209434', '44.316814008142', 174),
('Lemi kura Sub city', '9.0163198059267', '38.845210019394', 371),
('Liben', '4.2972801893582', '41.919827156044', 207),
('Lideta Sub City', '9.0067905338521', '38.732003427902', 183),
('Majang Zone', '7.2638452100334', '35.264516787953', 62),
('Mao Komo Special Woreda', '9.4721208094789', '34.396856320695', 28),
('Mareko Special', '7.9999407584479', '38.516281168075', 46),
('Maya Town', '9.4084166078333', '42.015885180421', 148),
('Mekelle Zone', '13.494169771905', '39.472080818142', 455),
('Metekel Zone', '11.223288406027', '36.323116676867', 298),
('Metu Town', '8.3012146432066', '35.578693702578', 47),
('Mojo Town', '8.5929374195397', '39.122754906658', 63),
('Moyale Town', '3.5543622003805', '39.036136726316', 40),
('Nejo Town', '9.4929065620024', '35.50549816466', 41),
('Nekemte Town', '9.0836854262052', '36.552801221835', 134),
('Nifas Silk Lafto Sub City', '8.9527062502606', '38.738902025954', 376),
('Nogob', '7.1244190410931', '43.223789879937', 51),
('Northern Zone', '6.9094391442665', '38.467419273571', 271),
('North Gojjam Zone', '11.429583277371', '37.139311595543', 473),
('North Gondar Zone', '13.085889388857', '37.9136783384', 289),
('North Shewa Zone', '9.8773857447864', '39.377436753078', 1569),
('North West Zone', '14.15566364186', '38.208628967006', 331),
('North Wollo Zone', '11.876982382169', '39.276354785767', 731),
('Nuer Zone', '8.3098005473284', '34.08925257127', 46),
('Oromia Special Zone', '10.737838490593', '39.928644271271', 426),
('Robe Town', '7.0630242442945', '39.990128133906', 127),
('Sendafa Beke Town', '9.153938059213', '39.038808681886', 42),
('Shakiso Town', '5.7699179392759', '38.90882453556', 42),
('Shashemene Town', '7.1835865603237', '38.583140285334', 216),
('Shebelle', '5.9624361096583', '43.5529046196', 295),
('Sheger City', '8.9783992764668', '38.694967733956', 782),
('Sheka Zone', '7.5443351760871', '35.414467593493', 232),
('Sheno Town', '9.3181389358162', '39.271013852367', 20),
('Silte Zone', '7.8433931286163', '38.192981993212', 466),
('Sitti', '9.6283756806108', '41.424640968209', 200),
('South East Zone', '13.311559701493', '39.329607536194', 145),
('Southern Zone', '7.2964574372276', '38.55544507117', 499),
('South Gondar Zone', '11.676409706197', '38.157732569292', 787),
('South omo zone', '5.2274492963882', '36.426810325572', 238),
('South Omo Zone', '5.2617848709677', '35.86655083871', 2),
('South West Shewa', '8.6144053933639', '38.153470197493', 489),
('South Wollo Zone', '10.893507381744', '39.173431403824', 1520),
('Tembaro Special', '7.2785978614494', '37.53770010463', 37),
('Waghimera Zone', '12.646402313816', '38.869751354574', 229),
('West Arsi Zone', '7.2067703638253', '38.770787397123', 785),
('Western Zone', '13.668136421053', '37.253742723684', 74),
('West Gojam Zone', '10.729001107566', '37.255008540966', 691),
('West Gondar Zone', '12.65170192077', '36.270405668606', 229),
('West Guji Zone', '5.7853470584349', '38.394372453516', 424),
('West Hararge Zone', '8.839618026113', '40.638631521481', 774),
('West Omo zone', '6.5360554802059', '35.669623721053', 181),
('West Shewa Zone', '9.1035036881743', '37.809110547649', 910),
('West Wollega Zone', '9.1693484255207', '35.392146140658', 794),
('Wolaita zone', '6.9043070128447', '37.728457531675', 866),
('Wolayita Zone', '6.8881276262646', '37.745499688911', 26),
('Woldiya Town Administration', '11.832072498354', '39.598497323322', 60),
('Woliso Town', '8.5228804858469', '37.970524380133', 53),
('Wolkait Tegedi Setiti Humera', '13.823098596007', '37.03536073867', 149),
('Yeka Sub City', '9.0398475400801', '38.819909430152', 228),
('Yem Zone', '7.9506415515619', '37.45021088759', 48),
('Zone 1', '11.625290527676', '41.160392005168', 232),
('Zone 2', '13.664411606275', '39.914408375908', 159),
('Zone 3', '9.274380843496', '40.208652010803', 185),
('Zone 4', '12.187541810701', '39.974098184921', 76),
('Zone 5', '10.637670795031', '40.249904611964', 82),
('Zone 6', '11.414941540734', '41.246423583916', 6);

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
(15, 'DataQuality', 'db', ''),
(16, 'DataUse', 'db', ''),
(17, 'DigitalHealth', 'db', ''),
(18, 'DigitalHealthApps', 'db', ''),
(19, 'FinancialResources', 'db', ''),
(20, 'HISGovernance', 'db', ''),
(21, 'HISPartners', 'db', ''),
(22, 'HealthFacilities', 'db', ''),
(23, 'HealthUnits', 'db', ''),
(24, 'MFR_Dashboard_Reports', 'db', ''),
(25, 'MFR_Facilities', 'db', ''),
(26, 'MFR_Operational_Status', 'db', ''),
(27, 'MFR_Region', 'db', ''),
(28, 'MFR_Woreda', 'db', ''),
(29, 'MFR_Zone', 'db', ''),
(30, 'Publications', 'db', ''),
(31, 'Regions', 'db', ''),
(32, 'Research', 'db', ''),
(33, 'Workforce', 'db', '');

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
-- Indexes for table `DHIS2_Periods`
--
ALTER TABLE `DHIS2_Periods`
  ADD PRIMARY KEY (`Period_ID`);

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
  MODIFY `rpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `webreport_admin`
--
ALTER TABLE `webreport_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 26, 2024 at 07:32 PM
-- Server version: 11.2.4-MariaDB-ubu2204
-- PHP Version: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hispmd_matomo`
--

-- --------------------------------------------------------

--
-- Table structure for table `matomo_access`
--

CREATE TABLE `matomo_access` (
  `idaccess` int(10) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `idsite` int(10) UNSIGNED NOT NULL,
  `access` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_archive_invalidations`
--

CREATE TABLE `matomo_archive_invalidations` (
  `idinvalidation` bigint(20) UNSIGNED NOT NULL,
  `idarchive` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `idsite` int(10) UNSIGNED NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `period` tinyint(3) UNSIGNED NOT NULL,
  `ts_invalidated` datetime DEFAULT NULL,
  `ts_started` datetime DEFAULT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT 0,
  `report` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_brute_force_log`
--

CREATE TABLE `matomo_brute_force_log` (
  `id_brute_force_log` bigint(11) NOT NULL,
  `ip_address` varchar(60) DEFAULT NULL,
  `attempted_at` datetime NOT NULL,
  `login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_changes`
--

CREATE TABLE `matomo_changes` (
  `idchange` int(10) UNSIGNED NOT NULL,
  `created_time` datetime NOT NULL,
  `plugin_name` varchar(60) NOT NULL,
  `version` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `link_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_custom_dimensions`
--

CREATE TABLE `matomo_custom_dimensions` (
  `idcustomdimension` bigint(20) UNSIGNED NOT NULL,
  `idsite` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `index` smallint(5) UNSIGNED NOT NULL,
  `scope` varchar(10) NOT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `extractions` text NOT NULL DEFAULT '',
  `case_sensitive` tinyint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_goal`
--

CREATE TABLE `matomo_goal` (
  `idsite` int(11) NOT NULL,
  `idgoal` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `match_attribute` varchar(20) NOT NULL,
  `pattern` varchar(255) NOT NULL,
  `pattern_type` varchar(25) NOT NULL,
  `case_sensitive` tinyint(4) NOT NULL,
  `allow_multiple` tinyint(4) NOT NULL,
  `revenue` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  `event_value_as_revenue` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_locks`
--

CREATE TABLE `matomo_locks` (
  `key` varchar(70) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `expiry_time` bigint(20) UNSIGNED DEFAULT 9999999999
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_logger_message`
--

CREATE TABLE `matomo_logger_message` (
  `idlogger_message` int(10) UNSIGNED NOT NULL,
  `tag` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `level` varchar(16) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_log_action`
--

CREATE TABLE `matomo_log_action` (
  `idaction` int(10) UNSIGNED NOT NULL,
  `name` varchar(4096) DEFAULT NULL,
  `hash` int(10) UNSIGNED NOT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `url_prefix` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_log_conversion`
--

CREATE TABLE `matomo_log_conversion` (
  `idvisit` bigint(10) UNSIGNED NOT NULL,
  `idsite` int(10) UNSIGNED NOT NULL,
  `idvisitor` binary(8) NOT NULL,
  `server_time` datetime NOT NULL,
  `idaction_url` int(10) UNSIGNED DEFAULT NULL,
  `idlink_va` bigint(10) UNSIGNED DEFAULT NULL,
  `idgoal` int(10) NOT NULL,
  `buster` int(10) UNSIGNED NOT NULL,
  `idorder` varchar(100) DEFAULT NULL,
  `items` smallint(5) UNSIGNED DEFAULT NULL,
  `url` varchar(4096) NOT NULL,
  `revenue` float DEFAULT NULL,
  `revenue_shipping` double DEFAULT NULL,
  `revenue_subtotal` double DEFAULT NULL,
  `revenue_tax` double DEFAULT NULL,
  `revenue_discount` double DEFAULT NULL,
  `pageviews_before` smallint(5) UNSIGNED DEFAULT NULL,
  `visitor_returning` tinyint(1) DEFAULT NULL,
  `visitor_seconds_since_first` int(11) UNSIGNED DEFAULT NULL,
  `visitor_seconds_since_order` int(11) UNSIGNED DEFAULT NULL,
  `visitor_count_visits` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `referer_keyword` varchar(255) DEFAULT NULL,
  `referer_name` varchar(255) DEFAULT NULL,
  `referer_type` tinyint(1) UNSIGNED DEFAULT NULL,
  `config_browser_name` varchar(40) DEFAULT NULL,
  `config_client_type` tinyint(1) DEFAULT NULL,
  `config_device_brand` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `config_device_model` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `config_device_type` tinyint(100) DEFAULT NULL,
  `location_city` varchar(255) DEFAULT NULL,
  `location_country` char(3) DEFAULT NULL,
  `location_latitude` decimal(9,6) DEFAULT NULL,
  `location_longitude` decimal(9,6) DEFAULT NULL,
  `location_region` char(3) DEFAULT NULL,
  `custom_dimension_1` varchar(255) DEFAULT NULL,
  `custom_dimension_2` varchar(255) DEFAULT NULL,
  `custom_dimension_3` varchar(255) DEFAULT NULL,
  `custom_dimension_4` varchar(255) DEFAULT NULL,
  `custom_dimension_5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_log_conversion_item`
--

CREATE TABLE `matomo_log_conversion_item` (
  `idsite` int(10) UNSIGNED NOT NULL,
  `idvisitor` binary(8) NOT NULL,
  `server_time` datetime NOT NULL,
  `idvisit` bigint(10) UNSIGNED NOT NULL,
  `idorder` varchar(100) NOT NULL,
  `idaction_sku` int(10) UNSIGNED NOT NULL,
  `idaction_name` int(10) UNSIGNED NOT NULL,
  `idaction_category` int(10) UNSIGNED NOT NULL,
  `idaction_category2` int(10) UNSIGNED NOT NULL,
  `idaction_category3` int(10) UNSIGNED NOT NULL,
  `idaction_category4` int(10) UNSIGNED NOT NULL,
  `idaction_category5` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `deleted` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_log_link_visit_action`
--

CREATE TABLE `matomo_log_link_visit_action` (
  `idlink_va` bigint(10) UNSIGNED NOT NULL,
  `idsite` int(10) UNSIGNED NOT NULL,
  `idvisitor` binary(8) NOT NULL,
  `idvisit` bigint(10) UNSIGNED NOT NULL,
  `idaction_url_ref` int(10) UNSIGNED DEFAULT 0,
  `idaction_name_ref` int(10) UNSIGNED DEFAULT NULL,
  `custom_float` double DEFAULT NULL,
  `pageview_position` mediumint(8) UNSIGNED DEFAULT NULL,
  `server_time` datetime NOT NULL,
  `idpageview` char(6) DEFAULT NULL,
  `idaction_name` int(10) UNSIGNED DEFAULT NULL,
  `idaction_url` int(10) UNSIGNED DEFAULT NULL,
  `search_cat` varchar(200) DEFAULT NULL,
  `search_count` int(10) UNSIGNED DEFAULT NULL,
  `time_spent_ref_action` int(10) UNSIGNED DEFAULT NULL,
  `idaction_product_cat` int(10) UNSIGNED DEFAULT NULL,
  `idaction_product_cat2` int(10) UNSIGNED DEFAULT NULL,
  `idaction_product_cat3` int(10) UNSIGNED DEFAULT NULL,
  `idaction_product_cat4` int(10) UNSIGNED DEFAULT NULL,
  `idaction_product_cat5` int(10) UNSIGNED DEFAULT NULL,
  `idaction_product_name` int(10) UNSIGNED DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `idaction_product_sku` int(10) UNSIGNED DEFAULT NULL,
  `idaction_event_action` int(10) UNSIGNED DEFAULT NULL,
  `idaction_event_category` int(10) UNSIGNED DEFAULT NULL,
  `idaction_content_interaction` int(10) UNSIGNED DEFAULT NULL,
  `idaction_content_name` int(10) UNSIGNED DEFAULT NULL,
  `idaction_content_piece` int(10) UNSIGNED DEFAULT NULL,
  `idaction_content_target` int(10) UNSIGNED DEFAULT NULL,
  `time_dom_completion` mediumint(10) UNSIGNED DEFAULT NULL,
  `time_dom_processing` mediumint(10) UNSIGNED DEFAULT NULL,
  `time_network` mediumint(10) UNSIGNED DEFAULT NULL,
  `time_on_load` mediumint(10) UNSIGNED DEFAULT NULL,
  `time_server` mediumint(10) UNSIGNED DEFAULT NULL,
  `time_transfer` mediumint(10) UNSIGNED DEFAULT NULL,
  `time_spent` int(10) UNSIGNED DEFAULT NULL,
  `custom_dimension_1` varchar(255) DEFAULT NULL,
  `custom_dimension_2` varchar(255) DEFAULT NULL,
  `custom_dimension_3` varchar(255) DEFAULT NULL,
  `custom_dimension_4` varchar(255) DEFAULT NULL,
  `custom_dimension_5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_log_profiling`
--

CREATE TABLE `matomo_log_profiling` (
  `query` text NOT NULL,
  `count` int(10) UNSIGNED DEFAULT NULL,
  `sum_time_ms` float DEFAULT NULL,
  `idprofiling` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_log_visit`
--

CREATE TABLE `matomo_log_visit` (
  `idvisit` bigint(10) UNSIGNED NOT NULL,
  `idsite` int(10) UNSIGNED NOT NULL,
  `idvisitor` binary(8) NOT NULL,
  `visit_last_action_time` datetime NOT NULL,
  `config_id` binary(8) NOT NULL,
  `location_ip` varbinary(16) NOT NULL,
  `profilable` tinyint(1) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `visit_first_action_time` datetime NOT NULL,
  `visit_goal_buyer` tinyint(1) DEFAULT NULL,
  `visit_goal_converted` tinyint(1) DEFAULT NULL,
  `visitor_returning` tinyint(1) DEFAULT NULL,
  `visitor_seconds_since_first` int(11) UNSIGNED DEFAULT NULL,
  `visitor_seconds_since_order` int(11) UNSIGNED DEFAULT NULL,
  `visitor_count_visits` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `visit_entry_idaction_name` int(10) UNSIGNED DEFAULT NULL,
  `visit_entry_idaction_url` int(11) UNSIGNED DEFAULT NULL,
  `visit_exit_idaction_name` int(10) UNSIGNED DEFAULT NULL,
  `visit_exit_idaction_url` int(10) UNSIGNED DEFAULT 0,
  `visit_total_actions` int(11) UNSIGNED DEFAULT NULL,
  `visit_total_interactions` mediumint(8) UNSIGNED DEFAULT 0,
  `visit_total_searches` smallint(5) UNSIGNED DEFAULT NULL,
  `referer_keyword` varchar(255) DEFAULT NULL,
  `referer_name` varchar(255) DEFAULT NULL,
  `referer_type` tinyint(1) UNSIGNED DEFAULT NULL,
  `referer_url` varchar(1500) DEFAULT NULL,
  `location_browser_lang` varchar(20) DEFAULT NULL,
  `config_browser_engine` varchar(10) DEFAULT NULL,
  `config_browser_name` varchar(40) DEFAULT NULL,
  `config_browser_version` varchar(20) DEFAULT NULL,
  `config_client_type` tinyint(1) DEFAULT NULL,
  `config_device_brand` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `config_device_model` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `config_device_type` tinyint(100) DEFAULT NULL,
  `config_os` char(3) DEFAULT NULL,
  `config_os_version` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `visit_total_events` int(11) UNSIGNED DEFAULT NULL,
  `visitor_localtime` time DEFAULT NULL,
  `visitor_seconds_since_last` int(11) UNSIGNED DEFAULT NULL,
  `config_resolution` varchar(18) DEFAULT NULL,
  `config_cookie` tinyint(1) DEFAULT NULL,
  `config_flash` tinyint(1) DEFAULT NULL,
  `config_java` tinyint(1) DEFAULT NULL,
  `config_pdf` tinyint(1) DEFAULT NULL,
  `config_quicktime` tinyint(1) DEFAULT NULL,
  `config_realplayer` tinyint(1) DEFAULT NULL,
  `config_silverlight` tinyint(1) DEFAULT NULL,
  `config_windowsmedia` tinyint(1) DEFAULT NULL,
  `visit_total_time` int(11) UNSIGNED NOT NULL,
  `location_city` varchar(255) DEFAULT NULL,
  `location_country` char(3) DEFAULT NULL,
  `location_latitude` decimal(9,6) DEFAULT NULL,
  `location_longitude` decimal(9,6) DEFAULT NULL,
  `location_region` char(3) DEFAULT NULL,
  `last_idlink_va` bigint(20) UNSIGNED DEFAULT NULL,
  `custom_dimension_1` varchar(255) DEFAULT NULL,
  `custom_dimension_2` varchar(255) DEFAULT NULL,
  `custom_dimension_3` varchar(255) DEFAULT NULL,
  `custom_dimension_4` varchar(255) DEFAULT NULL,
  `custom_dimension_5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_option`
--

CREATE TABLE `matomo_option` (
  `option_name` varchar(191) NOT NULL,
  `option_value` longtext NOT NULL,
  `autoload` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_option`
--

INSERT INTO `matomo_option` (`option_name`, `option_value`, `autoload`) VALUES
('fingerprint_salt_1_2024-08-24', '{\"value\":\"o5pg0linjrsm9m4kwp28fra9nhcu89cr\",\"time\":1724700518}', 0),
('fingerprint_salt_1_2024-08-25', '{\"value\":\"8ia5x83ptle10b148cubs0btkf6t65t5\",\"time\":1724700518}', 0),
('fingerprint_salt_1_2024-08-26', '{\"value\":\"lwe0fcwus4o4vnwxtpeb6wun4d8z4ian\",\"time\":1724700518}', 0),
('fingerprint_salt_1_2024-08-27', '{\"value\":\"cbhx9swz47df82r8s9owd2zoiif0g6jo\",\"time\":1724700518}', 0),
('geoip2.autosetup', '1', 0),
('geoip2.loc_db_url', 'https://download.db-ip.com/free/dbip-city-lite-2024-08.mmdb.gz', 0),
('geoip2.updater_period', 'month', 0),
('install_mail_sent', '1', 0),
('install_version', '5.1.1', 0),
('JsTrackerInstallCheck_1', '{\"172b9d80a73dc00ee070d0e501e28b69\":{\"time\":1724700659,\"url\":\"https:\\/\\/hispmd.merqconsultancy.org\",\"isSuccessful\":true}}', 0),
('lastTrackerCronRun', '1724700661', 0),
('MatomoUpdateHistory', '5.1.1,', 0),
('MobileMessaging_DelegatedManagement', 'false', 0),
('piwikUrl', 'https://hispmd.merqconsultancy.org/analytics/', 1),
('PrivacyManager.ipAnonymizerEnabled', '1', 0),
('SitesManager_DefaultCurrency', 'ETB', 0),
('SitesManager_DefaultTimezone', 'Africa/Addis_Ababa', 0),
('TaskScheduler.timetable', 'a:1:{s:45:\"Piwik\\Plugins\\GeoIp2\\GeoIP2AutoUpdater.update\";i:1724716800;}', 0),
('UpdateCheck_LastCheckFailed', '', 0),
('UpdateCheck_LastTimeChecked', '1724700413', 1),
('UpdateCheck_LatestVersion', '5.1.1', 0),
('useridsalt', '1MKf8V3u8kgPYU7ZzzDwaiW1CPpDnn69$wzH$URd', 1),
('UsersManager.lastSeen.hispmd', '1724700635', 1),
('version_Actions', '5.1.1', 1),
('version_Annotations', '5.1.1', 1),
('version_API', '5.1.1', 1),
('version_BulkTracking', '5.1.1', 1),
('version_Contents', '5.1.1', 1),
('version_core', '5.1.1', 1),
('version_CoreAdminHome', '5.1.1', 1),
('version_CoreConsole', '5.1.1', 1),
('version_CoreHome', '5.1.1', 1),
('version_CorePluginsAdmin', '5.1.1', 1),
('version_CoreUpdater', '5.1.1', 1),
('version_CoreVisualizations', '5.1.1', 1),
('version_CoreVue', '5.1.1', 1),
('version_CustomDimensions', '5.1.1', 1),
('version_CustomJsTracker', '5.1.1', 1),
('version_Dashboard', '5.1.1', 1),
('version_DevicePlugins', '5.1.1', 1),
('version_DevicesDetection', '5.1.1', 1),
('version_Diagnostics', '5.1.1', 1),
('version_Ecommerce', '5.1.1', 1),
('version_Events', '5.1.1', 1),
('version_Feedback', '5.1.1', 1),
('version_GeoIp2', '5.1.1', 1),
('version_Goals', '5.1.1', 1),
('version_Heartbeat', '5.1.1', 1),
('version_ImageGraph', '5.1.1', 1),
('version_Insights', '5.1.1', 1),
('version_Installation', '5.1.1', 1),
('version_Intl', '5.1.1', 1),
('version_IntranetMeasurable', '5.1.1', 1),
('version_JsTrackerInstallCheck', '5.1.1', 1),
('version_LanguagesManager', '5.1.1', 1),
('version_Live', '5.1.1', 1),
('version_Login', '5.1.1', 1),
('version_log_conversion.pageviews_before', 'SMALLINT UNSIGNED DEFAULT NULL', 1),
('version_log_conversion.revenue', 'float default NULL', 1),
('version_log_link_visit_action.idaction_content_interaction', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idaction_content_name', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idaction_content_piece', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idaction_content_target', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idaction_event_action', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idaction_event_category', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idaction_name', 'INTEGER(10) UNSIGNED', 1),
('version_log_link_visit_action.idaction_product_cat', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_product_cat2', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_product_cat3', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_product_cat4', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_product_cat5', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_product_name', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_product_sku', 'INT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.idaction_url', 'INTEGER(10) UNSIGNED DEFAULT NULL', 1),
('version_log_link_visit_action.idpageview', 'CHAR(6) NULL DEFAULT NULL', 1),
('version_log_link_visit_action.product_price', 'DOUBLE NULL', 1),
('version_log_link_visit_action.search_cat', 'VARCHAR(200) NULL', 1),
('version_log_link_visit_action.search_count', 'INTEGER(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.server_time', 'DATETIME NOT NULL', 1),
('version_log_link_visit_action.time_dom_completion', 'MEDIUMINT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.time_dom_processing', 'MEDIUMINT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.time_network', 'MEDIUMINT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.time_on_load', 'MEDIUMINT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.time_server', 'MEDIUMINT(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.time_spent_ref_action', 'INTEGER(10) UNSIGNED NULL', 1),
('version_log_link_visit_action.time_transfer', 'MEDIUMINT(10) UNSIGNED NULL', 1),
('version_log_visit.config_browser_engine', 'VARCHAR(10) NULL', 1),
('version_log_visit.config_browser_name', 'VARCHAR(40) NULL1', 1),
('version_log_visit.config_browser_version', 'VARCHAR(20) NULL', 1),
('version_log_visit.config_client_type', 'TINYINT( 1 ) NULL DEFAULT NULL1', 1),
('version_log_visit.config_cookie', 'TINYINT(1) NULL', 1),
('version_log_visit.config_device_brand', 'VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL1', 1),
('version_log_visit.config_device_model', 'VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL1', 1),
('version_log_visit.config_device_type', 'TINYINT( 100 ) NULL DEFAULT NULL1', 1),
('version_log_visit.config_flash', 'TINYINT(1) NULL', 1),
('version_log_visit.config_java', 'TINYINT(1) NULL', 1),
('version_log_visit.config_os', 'CHAR(3) NULL', 1),
('version_log_visit.config_os_version', 'VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL', 1),
('version_log_visit.config_pdf', 'TINYINT(1) NULL', 1),
('version_log_visit.config_quicktime', 'TINYINT(1) NULL', 1),
('version_log_visit.config_realplayer', 'TINYINT(1) NULL', 1),
('version_log_visit.config_resolution', 'VARCHAR(18) NULL', 1),
('version_log_visit.config_silverlight', 'TINYINT(1) NULL', 1),
('version_log_visit.config_windowsmedia', 'TINYINT(1) NULL', 1),
('version_log_visit.location_browser_lang', 'VARCHAR(20) NULL', 1),
('version_log_visit.location_city', 'varchar(255) DEFAULT NULL1', 1),
('version_log_visit.location_country', 'CHAR(3) NULL1', 1),
('version_log_visit.location_latitude', 'decimal(9, 6) DEFAULT NULL1', 1),
('version_log_visit.location_longitude', 'decimal(9, 6) DEFAULT NULL1', 1),
('version_log_visit.location_region', 'char(3) DEFAULT NULL1', 1),
('version_log_visit.profilable', 'TINYINT(1) NULL', 1),
('version_log_visit.referer_keyword', 'VARCHAR(255) NULL1', 1),
('version_log_visit.referer_name', 'VARCHAR(255) NULL1', 1),
('version_log_visit.referer_type', 'TINYINT(1) UNSIGNED NULL1', 1),
('version_log_visit.referer_url', 'VARCHAR(1500) NULL', 1),
('version_log_visit.user_id', 'VARCHAR(200) NULL', 1),
('version_log_visit.visitor_count_visits', 'INT(11) UNSIGNED NOT NULL DEFAULT 01', 1),
('version_log_visit.visitor_localtime', 'TIME NULL', 1),
('version_log_visit.visitor_returning', 'TINYINT(1) NULL1', 1),
('version_log_visit.visitor_seconds_since_first', 'INT(11) UNSIGNED NULL1', 1),
('version_log_visit.visitor_seconds_since_last', 'INT(11) UNSIGNED NULL', 1),
('version_log_visit.visitor_seconds_since_order', 'INT(11) UNSIGNED NULL1', 1),
('version_log_visit.visit_entry_idaction_name', 'INTEGER(10) UNSIGNED NULL', 1),
('version_log_visit.visit_entry_idaction_url', 'INTEGER(11) UNSIGNED NULL  DEFAULT NULL', 1),
('version_log_visit.visit_exit_idaction_name', 'INTEGER(10) UNSIGNED NULL', 1),
('version_log_visit.visit_exit_idaction_url', 'INTEGER(10) UNSIGNED NULL DEFAULT 0', 1),
('version_log_visit.visit_first_action_time', 'DATETIME NOT NULL', 1),
('version_log_visit.visit_goal_buyer', 'TINYINT(1) NULL', 1),
('version_log_visit.visit_goal_converted', 'TINYINT(1) NULL', 1),
('version_log_visit.visit_total_actions', 'INT(11) UNSIGNED NULL', 1),
('version_log_visit.visit_total_events', 'INT(11) UNSIGNED NULL', 1),
('version_log_visit.visit_total_interactions', 'MEDIUMINT UNSIGNED DEFAULT 0', 1),
('version_log_visit.visit_total_searches', 'SMALLINT(5) UNSIGNED NULL', 1),
('version_log_visit.visit_total_time', 'INT(11) UNSIGNED NOT NULL', 1),
('version_Marketplace', '5.1.1', 1),
('version_MobileMessaging', '5.1.1', 1),
('version_Monolog', '5.1.1', 1),
('version_Morpheus', '5.1.1', 1),
('version_MultiSites', '5.1.1', 1),
('version_Overlay', '5.1.1', 1),
('version_PagePerformance', '5.1.1', 1),
('version_PrivacyManager', '5.1.1', 1),
('version_ProfessionalServices', '5.1.1', 1),
('version_Proxy', '5.1.1', 1),
('version_Referrers', '5.1.1', 1),
('version_Resolution', '5.1.1', 1),
('version_RssWidget', '1.0', 1),
('version_ScheduledReports', '5.1.1', 1),
('version_SegmentEditor', '5.1.1', 1),
('version_SEO', '5.1.1', 1),
('version_SitesManager', '5.1.1', 1),
('version_Tour', '5.1.1', 1),
('version_Transitions', '5.1.1', 1),
('version_TwoFactorAuth', '5.1.1', 1),
('version_UserCountry', '5.1.1', 1),
('version_UserCountryMap', '5.1.1', 1),
('version_UserId', '5.1.1', 1),
('version_UserLanguage', '5.1.1', 1),
('version_UsersManager', '5.1.1', 1),
('version_VisitFrequency', '5.1.1', 1),
('version_VisitorInterest', '5.1.1', 1),
('version_VisitsSummary', '5.1.1', 1),
('version_VisitTime', '5.1.1', 1),
('version_WebsiteMeasurable', '5.1.1', 1),
('version_Widgetize', '5.1.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matomo_plugin_setting`
--

CREATE TABLE `matomo_plugin_setting` (
  `plugin_name` varchar(60) NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` longtext NOT NULL,
  `json_encoded` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `user_login` varchar(100) NOT NULL DEFAULT '',
  `idplugin_setting` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_privacy_logdata_anonymizations`
--

CREATE TABLE `matomo_privacy_logdata_anonymizations` (
  `idlogdata_anonymization` bigint(20) UNSIGNED NOT NULL,
  `idsites` text DEFAULT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `anonymize_ip` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `anonymize_location` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `anonymize_userid` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `unset_visit_columns` text NOT NULL DEFAULT '',
  `unset_link_visit_action_columns` text NOT NULL DEFAULT '',
  `output` mediumtext DEFAULT NULL,
  `scheduled_date` datetime DEFAULT NULL,
  `job_start_date` datetime DEFAULT NULL,
  `job_finish_date` datetime DEFAULT NULL,
  `requester` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_report`
--

CREATE TABLE `matomo_report` (
  `idreport` int(11) NOT NULL,
  `idsite` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idsegment` int(11) DEFAULT NULL,
  `period` varchar(10) NOT NULL,
  `hour` tinyint(4) NOT NULL DEFAULT 0,
  `type` varchar(10) NOT NULL,
  `format` varchar(10) NOT NULL,
  `reports` text NOT NULL,
  `parameters` text DEFAULT NULL,
  `ts_created` timestamp NULL DEFAULT NULL,
  `ts_last_sent` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  `evolution_graph_within_period` tinyint(4) NOT NULL DEFAULT 0,
  `evolution_graph_period_n` int(11) NOT NULL,
  `period_param` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_report_subscriptions`
--

CREATE TABLE `matomo_report_subscriptions` (
  `idreport` int(11) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `ts_subscribed` timestamp NULL DEFAULT current_timestamp(),
  `ts_unsubscribed` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_segment`
--

CREATE TABLE `matomo_segment` (
  `idsegment` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `definition` text NOT NULL,
  `hash` char(32) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `enable_all_users` tinyint(4) NOT NULL DEFAULT 0,
  `enable_only_idsite` int(11) DEFAULT NULL,
  `auto_archive` tinyint(4) NOT NULL DEFAULT 0,
  `ts_created` timestamp NULL DEFAULT NULL,
  `ts_last_edit` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_sequence`
--

CREATE TABLE `matomo_sequence` (
  `name` varchar(120) NOT NULL,
  `value` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_session`
--

CREATE TABLE `matomo_session` (
  `id` varchar(191) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  `lifetime` int(11) DEFAULT NULL,
  `data` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_session`
--

INSERT INTO `matomo_session` (`id`, `modified`, `lifetime`, `data`) VALUES
('dc6fccbfccb60a5a59e409aa23d078e5551ec4ffafde759f34799e33a83c16434d44f97187e287834e51aebddcd891edf61fe01fbe41e3ce5c54882fadc9f60b', 1724700752, 1209600, 'a:1:{s:4:\"data\";s:500:\"YTo2OntzOjQ6Il9fWkYiO2E6MTp7czoxMToiTG9naW4ubG9naW4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMTIyNjt9fX1zOjk6InVzZXIubmFtZSI7czo2OiJoaXNwbWQiO3M6MjI6InR3b2ZhY3RvcmF1dGgudmVyaWZpZWQiO2k6MDtzOjIwOiJ1c2VyLnRva2VuX2F1dGhfdGVtcCI7czozMjoiZjFlNDQzYTY3YjZhYWIxNWVlNDkxZWViOWNiZmRlMDkiO3M6MTI6InNlc3Npb24uaW5mbyI7YTozOntzOjI6InRzIjtpOjE3MjQ3MDA2MzU7czoxMDoicmVtZW1iZXJlZCI7YjowO3M6MTA6ImV4cGlyYXRpb24iO2k6MTcyNDcwNDM1Mjt9czoxMjoibm90aWZpY2F0aW9uIjthOjE6e3M6MTM6Im5vdGlmaWNhdGlvbnMiO2E6MDp7fX19\";}');

-- --------------------------------------------------------

--
-- Table structure for table `matomo_site`
--

CREATE TABLE `matomo_site` (
  `idsite` int(10) UNSIGNED NOT NULL,
  `name` varchar(90) NOT NULL,
  `main_url` varchar(255) NOT NULL,
  `ts_created` timestamp NULL DEFAULT NULL,
  `ecommerce` tinyint(4) DEFAULT 0,
  `sitesearch` tinyint(4) DEFAULT 1,
  `sitesearch_keyword_parameters` text NOT NULL,
  `sitesearch_category_parameters` text NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `currency` char(3) NOT NULL,
  `exclude_unknown_urls` tinyint(1) DEFAULT 0,
  `excluded_ips` text NOT NULL,
  `excluded_parameters` text NOT NULL,
  `excluded_user_agents` text NOT NULL,
  `excluded_referrers` text NOT NULL,
  `group` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `keep_url_fragment` tinyint(4) NOT NULL DEFAULT 0,
  `creator_login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_site`
--

INSERT INTO `matomo_site` (`idsite`, `name`, `main_url`, `ts_created`, `ecommerce`, `sitesearch`, `sitesearch_keyword_parameters`, `sitesearch_category_parameters`, `timezone`, `currency`, `exclude_unknown_urls`, `excluded_ips`, `excluded_parameters`, `excluded_user_agents`, `excluded_referrers`, `group`, `type`, `keep_url_fragment`, `creator_login`) VALUES
(1, 'HISPMD', 'https://hispmd.merqconsultancy.org', '2024-08-26 19:28:38', 0, 1, '', '', 'Africa/Addis_Ababa', 'ETB', 0, '', '', '', '', '', 'website', 0, 'anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `matomo_site_setting`
--

CREATE TABLE `matomo_site_setting` (
  `idsite` int(10) UNSIGNED NOT NULL,
  `plugin_name` varchar(60) NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` longtext NOT NULL,
  `json_encoded` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `idsite_setting` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_site_url`
--

CREATE TABLE `matomo_site_url` (
  `idsite` int(10) UNSIGNED NOT NULL,
  `url` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_tracking_failure`
--

CREATE TABLE `matomo_tracking_failure` (
  `idsite` bigint(20) UNSIGNED NOT NULL,
  `idfailure` smallint(5) UNSIGNED NOT NULL,
  `date_first_occurred` datetime NOT NULL,
  `request_url` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_twofactor_recovery_code`
--

CREATE TABLE `matomo_twofactor_recovery_code` (
  `idrecoverycode` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `recovery_code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_user`
--

CREATE TABLE `matomo_user` (
  `login` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `twofactor_secret` varchar(40) NOT NULL DEFAULT '',
  `superuser_access` tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
  `date_registered` timestamp NULL DEFAULT NULL,
  `ts_password_modified` timestamp NULL DEFAULT NULL,
  `idchange_last_viewed` int(10) UNSIGNED DEFAULT NULL,
  `invited_by` varchar(100) DEFAULT NULL,
  `invite_token` varchar(191) DEFAULT NULL,
  `invite_link_token` varchar(191) DEFAULT NULL,
  `invite_expired_at` timestamp NULL DEFAULT NULL,
  `invite_accept_at` timestamp NULL DEFAULT NULL,
  `ts_changes_shown` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_user`
--

INSERT INTO `matomo_user` (`login`, `password`, `email`, `twofactor_secret`, `superuser_access`, `date_registered`, `ts_password_modified`, `idchange_last_viewed`, `invited_by`, `invite_token`, `invite_link_token`, `invite_expired_at`, `invite_accept_at`, `ts_changes_shown`) VALUES
('anonymous', '', 'anonymous@example.org', '', 0, '2024-08-26 19:26:35', '2024-08-26 19:26:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('hispmd', '$2y$10$9eYavX5gBzr7oDu1F.H/cOBn0417jeKZJiQghTXf1hLIpXXmJrw7e', 'dev@merqconsultancy.org', '', 1, '2024-08-26 19:27:35', '2024-08-26 19:27:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matomo_user_dashboard`
--

CREATE TABLE `matomo_user_dashboard` (
  `login` varchar(100) NOT NULL,
  `iddashboard` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `layout` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_user_language`
--

CREATE TABLE `matomo_user_language` (
  `login` varchar(100) NOT NULL,
  `language` varchar(10) NOT NULL,
  `use_12_hour_clock` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `matomo_user_token_auth`
--

CREATE TABLE `matomo_user_token_auth` (
  `idusertokenauth` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `password` varchar(191) NOT NULL,
  `hash_algo` varchar(30) NOT NULL,
  `system_token` tinyint(1) NOT NULL DEFAULT 0,
  `last_used` datetime DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_expired` datetime DEFAULT NULL,
  `secure_only` tinyint(2) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_user_token_auth`
--

INSERT INTO `matomo_user_token_auth` (`idusertokenauth`, `login`, `description`, `password`, `hash_algo`, `system_token`, `last_used`, `date_created`, `date_expired`, `secure_only`) VALUES
(1, 'anonymous', 'anonymous default token', '0598396b5172f542eef78ae63d2685622d9ec06bd880129fb948c86bc2a209d4a150b6504fa9afd042ae12e3bd30740ea7412a0f8000b160696e16a93f5715f4', 'sha512', 0, '2024-08-26 19:26:53', '2024-08-26 19:26:35', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matomo_access`
--
ALTER TABLE `matomo_access`
  ADD PRIMARY KEY (`idaccess`),
  ADD KEY `index_loginidsite` (`login`,`idsite`);

--
-- Indexes for table `matomo_archive_invalidations`
--
ALTER TABLE `matomo_archive_invalidations`
  ADD PRIMARY KEY (`idinvalidation`),
  ADD KEY `index_idsite_dates_period_name` (`idsite`,`date1`,`period`);

--
-- Indexes for table `matomo_brute_force_log`
--
ALTER TABLE `matomo_brute_force_log`
  ADD PRIMARY KEY (`id_brute_force_log`),
  ADD KEY `index_ip_address` (`ip_address`);

--
-- Indexes for table `matomo_changes`
--
ALTER TABLE `matomo_changes`
  ADD PRIMARY KEY (`idchange`),
  ADD UNIQUE KEY `unique_plugin_version_title` (`plugin_name`,`version`,`title`(100));

--
-- Indexes for table `matomo_custom_dimensions`
--
ALTER TABLE `matomo_custom_dimensions`
  ADD PRIMARY KEY (`idcustomdimension`,`idsite`),
  ADD UNIQUE KEY `uniq_hash` (`idsite`,`scope`,`index`);

--
-- Indexes for table `matomo_goal`
--
ALTER TABLE `matomo_goal`
  ADD PRIMARY KEY (`idsite`,`idgoal`);

--
-- Indexes for table `matomo_locks`
--
ALTER TABLE `matomo_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `matomo_logger_message`
--
ALTER TABLE `matomo_logger_message`
  ADD PRIMARY KEY (`idlogger_message`);

--
-- Indexes for table `matomo_log_action`
--
ALTER TABLE `matomo_log_action`
  ADD PRIMARY KEY (`idaction`),
  ADD KEY `index_type_hash` (`type`,`hash`);

--
-- Indexes for table `matomo_log_conversion`
--
ALTER TABLE `matomo_log_conversion`
  ADD PRIMARY KEY (`idvisit`,`idgoal`,`buster`),
  ADD UNIQUE KEY `unique_idsite_idorder` (`idsite`,`idorder`),
  ADD KEY `index_idsite_datetime` (`idsite`,`server_time`);

--
-- Indexes for table `matomo_log_conversion_item`
--
ALTER TABLE `matomo_log_conversion_item`
  ADD PRIMARY KEY (`idvisit`,`idorder`,`idaction_sku`),
  ADD KEY `index_idsite_servertime` (`idsite`,`server_time`);

--
-- Indexes for table `matomo_log_link_visit_action`
--
ALTER TABLE `matomo_log_link_visit_action`
  ADD PRIMARY KEY (`idlink_va`),
  ADD KEY `index_idvisit` (`idvisit`),
  ADD KEY `index_idsite_servertime` (`idsite`,`server_time`);

--
-- Indexes for table `matomo_log_profiling`
--
ALTER TABLE `matomo_log_profiling`
  ADD PRIMARY KEY (`idprofiling`),
  ADD UNIQUE KEY `query` (`query`(100));

--
-- Indexes for table `matomo_log_visit`
--
ALTER TABLE `matomo_log_visit`
  ADD PRIMARY KEY (`idvisit`),
  ADD KEY `index_idsite_config_datetime` (`idsite`,`config_id`,`visit_last_action_time`),
  ADD KEY `index_idsite_datetime` (`idsite`,`visit_last_action_time`),
  ADD KEY `index_idsite_idvisitor_time` (`idsite`,`idvisitor`,`visit_last_action_time` DESC);

--
-- Indexes for table `matomo_option`
--
ALTER TABLE `matomo_option`
  ADD PRIMARY KEY (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `matomo_plugin_setting`
--
ALTER TABLE `matomo_plugin_setting`
  ADD PRIMARY KEY (`idplugin_setting`),
  ADD KEY `plugin_name` (`plugin_name`,`user_login`);

--
-- Indexes for table `matomo_privacy_logdata_anonymizations`
--
ALTER TABLE `matomo_privacy_logdata_anonymizations`
  ADD PRIMARY KEY (`idlogdata_anonymization`),
  ADD KEY `job_start_date` (`job_start_date`);

--
-- Indexes for table `matomo_report`
--
ALTER TABLE `matomo_report`
  ADD PRIMARY KEY (`idreport`);

--
-- Indexes for table `matomo_report_subscriptions`
--
ALTER TABLE `matomo_report_subscriptions`
  ADD PRIMARY KEY (`idreport`,`email`),
  ADD UNIQUE KEY `unique_token` (`token`);

--
-- Indexes for table `matomo_segment`
--
ALTER TABLE `matomo_segment`
  ADD PRIMARY KEY (`idsegment`);

--
-- Indexes for table `matomo_sequence`
--
ALTER TABLE `matomo_sequence`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `matomo_session`
--
ALTER TABLE `matomo_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matomo_site`
--
ALTER TABLE `matomo_site`
  ADD PRIMARY KEY (`idsite`);

--
-- Indexes for table `matomo_site_setting`
--
ALTER TABLE `matomo_site_setting`
  ADD PRIMARY KEY (`idsite_setting`),
  ADD KEY `idsite` (`idsite`,`plugin_name`);

--
-- Indexes for table `matomo_site_url`
--
ALTER TABLE `matomo_site_url`
  ADD PRIMARY KEY (`idsite`,`url`);

--
-- Indexes for table `matomo_tracking_failure`
--
ALTER TABLE `matomo_tracking_failure`
  ADD PRIMARY KEY (`idsite`,`idfailure`);

--
-- Indexes for table `matomo_twofactor_recovery_code`
--
ALTER TABLE `matomo_twofactor_recovery_code`
  ADD PRIMARY KEY (`idrecoverycode`);

--
-- Indexes for table `matomo_user`
--
ALTER TABLE `matomo_user`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `uniq_email` (`email`);

--
-- Indexes for table `matomo_user_dashboard`
--
ALTER TABLE `matomo_user_dashboard`
  ADD PRIMARY KEY (`login`,`iddashboard`);

--
-- Indexes for table `matomo_user_language`
--
ALTER TABLE `matomo_user_language`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `matomo_user_token_auth`
--
ALTER TABLE `matomo_user_token_auth`
  ADD PRIMARY KEY (`idusertokenauth`),
  ADD UNIQUE KEY `uniq_password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matomo_access`
--
ALTER TABLE `matomo_access`
  MODIFY `idaccess` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_archive_invalidations`
--
ALTER TABLE `matomo_archive_invalidations`
  MODIFY `idinvalidation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_brute_force_log`
--
ALTER TABLE `matomo_brute_force_log`
  MODIFY `id_brute_force_log` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_changes`
--
ALTER TABLE `matomo_changes`
  MODIFY `idchange` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_logger_message`
--
ALTER TABLE `matomo_logger_message`
  MODIFY `idlogger_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_log_action`
--
ALTER TABLE `matomo_log_action`
  MODIFY `idaction` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_log_link_visit_action`
--
ALTER TABLE `matomo_log_link_visit_action`
  MODIFY `idlink_va` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_log_profiling`
--
ALTER TABLE `matomo_log_profiling`
  MODIFY `idprofiling` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_log_visit`
--
ALTER TABLE `matomo_log_visit`
  MODIFY `idvisit` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_plugin_setting`
--
ALTER TABLE `matomo_plugin_setting`
  MODIFY `idplugin_setting` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_privacy_logdata_anonymizations`
--
ALTER TABLE `matomo_privacy_logdata_anonymizations`
  MODIFY `idlogdata_anonymization` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_report`
--
ALTER TABLE `matomo_report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_segment`
--
ALTER TABLE `matomo_segment`
  MODIFY `idsegment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_site`
--
ALTER TABLE `matomo_site`
  MODIFY `idsite` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matomo_site_setting`
--
ALTER TABLE `matomo_site_setting`
  MODIFY `idsite_setting` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_twofactor_recovery_code`
--
ALTER TABLE `matomo_twofactor_recovery_code`
  MODIFY `idrecoverycode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_user_token_auth`
--
ALTER TABLE `matomo_user_token_auth`
  MODIFY `idusertokenauth` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

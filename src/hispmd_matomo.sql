-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 27, 2024 at 01:05 PM
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
-- Table structure for table `matomo_archive_blob_2024_08`
--

CREATE TABLE `matomo_archive_blob_2024_08` (
  `idarchive` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) NOT NULL,
  `idsite` int(10) UNSIGNED DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `period` tinyint(3) UNSIGNED DEFAULT NULL,
  `ts_archived` datetime DEFAULT NULL,
  `value` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_archive_blob_2024_08`
--

INSERT INTO `matomo_archive_blob_2024_08` (`idarchive`, `name`, `idsite`, `date1`, `date2`, `period`, `ts_archived`, `value`) VALUES
(7, 'Actions_actions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789ced94c16ea33010865fc5e2de0ae34288b9f6d01e8a22f50190139c622db623ecddb6aaf2eef59098b8d44d77d5eead0760f0fc9ef981f96034a32f82a615a3640a5c64684e939ead799f548666194dd08a3d705433c991d216b57c2b146f934ad0cc1d180e080804704ae126adda4380fd4a56d57021d5dadd1b8a0b9a98dfb2b142f24671fba8875f096cbabc5a66d0d9d950eba613d6348fc2763321f43b149142bd2fe273ece9c306380f0c183efce1c3215d14d0fe2ad6decb8eddf3a07b58214b4b9ff606dea4490ee945d0df0e4c99ad17a4d9f8068a988593f2686211989895492781b73113606843021fad96cd6ed01b6e8c500f4755096e48167333d7c34c1c4a4e9ea225f1c2cbbcb3a8acc86306375aee7a6e8556fe5b7f6c2ed48a51fbce5c28a963b6e68237a3ab55d36bd67a27f1b19d44e2349adec294abe7431b641c5a2368d51e4e8ca6f4650fdfbff60b2786f339c3c5d2317c737bbfbabb4617e886b3de76e8566df520193c14ba7f36964b83567c1817d586a33ba61cf5922b8bae99e9d69a0d6790c7e517a1ffafc09f83bdc4f9d76927e768278be527b463f23db4e34f684f977f81fb3fa01ea5299444698a097ef0766378040bfba00881c74035ccd8ce61e9f6db9e373b66bb11f09226dfc3b7ffa7ec5f015bc2ba0e),
(7, 'Actions_actions_url', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789ced545172823014bc0b0740120531b9835760a244cd14129ac46aa7e3dd9bc444224574a6fdac33c883b7ee5be4ed1204d117431926687e2b4ca5508e92866c689360655a09e9ba043304cd313707b0456e0b775566f67e866be40a80d9b580786d4f73bc31d70a810225ead8569ab5b4e2549f847c4bdc8f14826620df5407a6557562fa3000d969578296f15102d723e7f15e1e0d56547e50695b20857969672fc666079c1f9d47a37b8a2c2d16456887e971bb84d0b69791002d0957bb00c8a0a587c598841ee9452c2311031af3263c20c818cec956771ff7e4f348572ddaaa93624b95627c1f68977601e098ba21de2c82a7bc69fc09c90224a87c0cb913b6156dd750cd040f2ff5b1a8181b4d8c45c590f598a421e06e7705af1a41eae9ddbd8158bf9f41c2adb71e6e6ed431ffa7b318bed82f8280f5a505ef445353591d6553294da4761e2d5172d0ba5368363b30d5b575da52f9be155c1d1b4df8f63315723f733ebe781307e2defae5d0fa66da8cf19a9e83fb41703f08eeffa5f7d3c50abee27f30e57f4ff23003427f3c07b214ba357f9603602a07ae140f73c0b7277200bc1403e0590c3c4901f092eb8bfc2f5ddf534e3aff1ef6ef7eb0f23683d650852d9ce94a770f7aa30110cc58fe080bf35826245c3ce42fc583cf8635be5cbe010b15b38c),
(7, 'Actions_actions_url_chunk_0_99', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789ced956d72b3201485f7e202948f1a13dc43b6e090482b53052ba41fd3c9de0b2424c4d7a09d79fba333fda15e738fe79e313c4209249f9cc052110c6041124ab0fd01946191934f457292b474c7dac468212049a6341d74da377d5272824aeb620e5b605bb85361ef40591b1f5358812b50b9b5175ceeccbdb15b91441dba4af38e5582e937393c27ee214590992b7655c3b5aadeb86e46223bec64d0713169e07af47dba970783151b5ed9e05ae91ae676f6c3d46caf3b8fce83d1a1050297b69f1eb671b1b1ed2208a0072ad4a31700689f47aba90857e53944118418d900e8053ec6586083201c04a96557f583dc33a5b878f22f0ba3a928632d3ffd6b380834966cbdc007ba27b809b4975ddf32cda5980f146aef040a259381c6829b452a45d54a5ac717e945c4af0bd147b8f4b6e3251a740c40b9e70afa62e58aa33d514baf790f24390c8ecb8735491aad7b45b2ace1aaefeab463c3cb5e0a75683515fb8f540e4f19edfb90dea35d445b6f79c51e8fb13731332e6af6fe0ff1f042fccf030f7f027804d60b808771e0d731e0cfed08f06019f0700e783c073c5e00bcf9fe14df801ece417fb58ca27f2bfbfb009cb99fc61d6f16e31e528ee294bbcddd619e36ba8ba0be42bf1576bc64778fc3ee2ceec37e6ac760dffc1fd83773b0ffedeebf13ee6fece501ac9ef2a329bf00f969fd46),
(7, 'Actions_downloads', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Actions_outlink', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Actions_sitesearch', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Actions_SiteSearchCategories', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Contents_name_piece', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Contents_piece_name', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'DevicePlugins_plugin', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c7dd0411282300c85e1bbe4048522eaeb1dbc43842291224811c661b8bbb860a75924f34f16df228c131681710cbb478a25e2000a7cf5815c440e2abaae114f4e906e93b8f5bb1806cb56d65df6c37f64eb2a70ac77c3fc3452d5c840779e5827ac4a58505f56ba90a9c219f47c49d18cd27add39a84e624083e7d0077efb4197725d4a4051c2e48720b77ad4a9a34ea5a0591e6537c7d697a2be7afd005ac4ac6d),
(7, 'DevicesDetection_brands', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358cbb09c0300c4477d104963ff99c1748952a0b2890c2e0cea5d1ee9183533cee037702462f7059107eb3a337245095fba9941b3ce8b8281778838d602c469c9a46bff14cce58a732cf49745fa323091cba8e9b33abbe5cba246f),
(7, 'DevicesDetection_browserEngines', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b4aaceb432b04eb43286312cadaa8bad4cad94721293527394acc16ca79cccbc6c25eb4c2b2320360462632036036213286d0a12b73084f20c80d81c4a1b1a42b5981880456a41bc442b03abea5a90317ed6b5b500fb2925c6),
(7, 'DevicesDetection_browsers', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358c390ac0300c04ffa217583e72accbd4c91f14486170e7d2e8ef9183530c7bc0ae80d10b5c1684dfece80d0954e57e2ae5060f3a4eca05de6023188b11a7a6d16f3c9333d6a9cc7312ddd7e8480287aee3e6caaa2f587d2463),
(7, 'DevicesDetection_browserVersions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358c3b0e80201044efc201cc2e08e26c69ad77c0c482848e9270771783c5cb7c92990446cb204970bfd9d12a3c4c49f7538c544498e314b6612123195661c5294159a7fad1479e89946d2af39cacf4357da40442ebe3e692de5f11f3259b),
(7, 'DevicesDetection_models', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358ccb09803010445b9154b09bf89d6dc09378d00222780804043d86f4ee46e2e1311f98f160a400120ff79b09e9410713fd7146230f9860e64d76eb9af5be8c04588515a7f44a5bb52bfdc83591325465ae9396be2697e44148b9dc2c92f30baef526e4),
(7, 'DevicesDetection_os', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358cbb0dc0200c4477f10438403e471529353b38520a243a4ae4dd6322523cddc73a0b18bdc02581ffcd81de104155eea7526a76a1335f940a16830d6fac46981a47bff34cced8a632cf49705fa323091cba8e3739a9be7c7724a7),
(7, 'DevicesDetection_osVersions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358c3b0ac0201044efe201c26ed4c4cc5681d4dec1400ac1ce52bc7bd6608ac77c602681d1324812ec6f0eb40a0f53d2fd14231501e68c97b05dc848c6aab062954d7153fde803cf44ca3e95794e1c7d4d1f2981d0fab889d2fb0b172325a9),
(7, 'DevicesDetection_types', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b4aaceb432b04eb43286312cadaa8bad4cad94721293527394ac33ad0c81d8084a1b03b119109b40695390b88521946700c4e650dad010aac5c4002c520be2255a195855d7828cf1b3aead0500bcd4234a),
(7, 'Events_action_category', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Events_action_name', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Events_category_action', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Events_category_name', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Events_name_action', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Events_name_category', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Goals_ItemsCategory', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Goals_ItemsCategory_Cart', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Goals_ItemsName', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Goals_ItemsName_Cart', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Goals_ItemsSku', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Goals_ItemsSku_Cart', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Referrers_keywordByCampaign', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Referrers_keywordBySearchEngine', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Referrers_searchEngineByKeyword', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Referrers_type', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b4aaceb432b04eb43286312cadaa8bad4cad94721293527394ac33ad0c81d8084a1b03b119109b40695390b88521946700c4e650dad010aac5c4002c520be2255a195855d7828cf1b3aead0500bcd4234a),
(7, 'Referrers_urlBySocialNetwork', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Referrers_urlByWebsite', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'Resolution_configuration', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358c3b0a80301044ef9213ec9a18e36c25da9a3b44b008d8d90821777723b178cc07661218258324c1fe6646b931c25ce9382f2337d8c12c71937517ebe909444632068515ab78c5751d5b1fb82752a6aecc7de2e86b6a4b098452db4d945a5f23442788),
(7, 'Resolution_resolution', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358ccb09c02010447bb182dd68d4ccf6901e0ce42078f31290ed3d6b3087c77c60a680312a480afc6f0e8c8e1dae95eb6e4e3a129c8ff4642227159bc18637a21196eeb3cfbc12196929f39a04fa1a9da9803074de9ca2fa02fb7b2581),
(7, 'UserCountry_city', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358cbb09c0300c4477d10452ecfc4e3b6407075218dcb934da3d72508ac77de0ae40302a580bd26f4e8c8e15d4cafd34d20e0691562c8e38c9d99c1cbacefe9048ececa12231c9fc353653f1bf61f3e652b3170de223d1),
(7, 'UserCountry_country', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358c4b0ac0200c44ef9213246a7f933bf40e16ba10dc495792bb3716bb78cc07663204bd803523fee6406f5840355f77256d08a0a7911604479ce8ac4e9aba8c7e9799d8d9a68acc49e2afb1913218ddc6cda9662f779f24bb),
(7, 'UserCountry_region', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358cbb09c0300c4477d10452ecfc4e3b6407075218dcb934da3d72508ac77de0ae40302a580bd26f4e8c8e15d4cafd34d20e0691562c8e38c9d99c1cbacefe9048ececa12231c9fc353653f1bf61f3e652b3170de223d1),
(7, 'UserId_users', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(7, 'UserLanguage_language', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c358c3b0ac0201044ef621f70a3e6337b87dcc180852069249578f7acb2291ef381990842cbb01ce17e73a255049812ef540c4f9f9ee5ad8633568104276c82570da33f4893157655229d783b9b3e528445ebe3e6e2de3ff87a25be),
(7, 'VisitorInterest_daysSinceLastVisit', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c85d33d0b02310c06e0ff52700c344d3f34dd5cdc6e74950a1d0a878327381cf7df8dc36d9a0c2d2f191e4a78db1813af837d6d4c7b08bc2e9cd8cdedde675717c6c2eed21ffdd9e6dbd4dfd7b18cd7e2eae02007ebf6bd1a7b5e25519df6c17f90d879f0bbe07f0ac112105017c81202045d88964040ba902c2142d4856c0909922e144bc89075e16809058a2e9c5421b23b021a8b40bda492310119ad42bd989209215b88decd2c1b9572064bd1fb297f0e0302656b2d7a49e53194d3219c3565fb00d6d024ad),
(7, 'VisitorInterest_pageGap', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c85d1310ec3300805d0bb20754432d824296c3940efe04a1d2c65cb18e5eea583b70ab62fc04f0877a5a2d7d0625deb0cacd7a9a270f4f7e7003bbd0384043694ed37720f259ff3979eaabd66211418391638132ad658a899d0b0c542cb04418905c98405d729d05f610985a6b02195788935243c93ff67728a2d350439d9e399194c0fde23e3fe02d2e6be46),
(7, 'VisitorInterest_timeGap', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c85d0310ec3300805d0bb20754402ec38cef7d603f40eaed42152b68c51ee5e3aa4536bb62f044f40870a8e15d23ad2150cc78e09b4f5e76ba3b623838455a8adb0f6e93957a837faa8a7d41e57e13fe159955360586424e5121869681450f15b2c40f21099fd1813b6fc55f4a732458a0b9ca35d4aa4b8e05f099439525ce02552ea50a92017586bc42ce17babe8cdee23e57c039bd0c35f),
(7, 'VisitorInterest_visitsByVisitCount', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789c85d23d0ac3300c05e0bb183a0a24f92f91b71ea07770a143205bc690bb571db295a7c1e661c3877fde3429766ec6635abe83da7958b5b4cff7674fe3f09d2424696ca63e645cbf691adbe9298fd7bd000525bd05fe2b682464ca58c89150a860a14442a58a851a098d1a165a2474ea58e891b0d08285050ac5d24a123ce50a09cf524983c714dc4bcfdaa87280e06a36ff546f37470aae67f7fbb090860ceea81f46591efa44caf505f7400b63),
(7, 'VisitTime_localTime', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789cb5d63b0e83301084e1bb700266fd00d677c81d404a8144971271f700b1cb0cd5546b56c87ff7c9b35bf47df5becc1eda61f2fde3c9bb6d5ede5b57aee5ea5667a83396e59ea97ee73a873a81f6637f1f8e7375deddfb7e5c97bcdae27f15a2aad1aa89aa815683a81a69358aaa895693a89a69358baa03ad0ea2ea48aba3a83ad1ea24aa82e304994e0f3ca97c02070a2aa1c08982ca2870a4a0520a9c29a89c02870a2aa9c0a982ca2a70aca0d20a9c2ba8bc32ee95a9bc32ee95c9de530f0faae6156a3797dfcb23d72e46fc2be3a1ccc5328d58c717b2a01c0c),
(7, 'VisitTime_serverTime', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 0x789cb5d63b0e83301084e1bb700266fd00d677c81d404a8144971271f700b1cb0cd5546b56c87ff7c9b35bf47df5becc1eda61f2fde3c9bb6d5ede5b57aee5ea5667a83396e59ea97ee73a873a81f6637f1f8e7375deddfb7e5c97bcdae27f15a2aad1aa89aa815683a81a69358aaa895693a89a69358baa03ad0ea2ea48aba3a83ad1ea24aa82e304994e0f3ca97c02070a2aa1c08982ca2870a4a0520a9c29a89c02870a2aa9c0a982ca2a70aca0d20a9c2ba8bc32ee95a9bc32ee95c9de530f0faae6156a3797dfcb23d72e46fc2be3a1ccc5328d58c717b2a01c0c),
(8, 'Actions_actions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789ced944f8fe2201887bf0ae97d37fcb1b5d2eb1c660e634ce6033468714ab68029ecce6e267ef7056b112d3a1edcdb9ad422fdf1f2d8f03e8c62fa2928ac182561e04686e634ebd89a77596528c634032bf6cec192490e94b6a0e15ba1789355826277a1f8f213c40ffc17f43f60d50c03e4aa219a41bf8ee06ae96fc4dddc6c4133f353d656485e2b6e3f74ffc3efeda6e1f7d902c30388a352ebba15d6d41fc2b693b4ab4db263352954ba1a749f1062bf6f6f89f288cbf0fe17ef43a62886427896c23a8503551e515dd4c2b00cfb05a8cb0cc987cc3c62b23d53661ba5203ebeac224515c703d73ce29ad68324ec1ac8a629747c1724626bb4ac77bdde7063847a3f65cb8190e014e17491e3c463edc079ad369a078e407b2d5be469e68d96bb8e5ba1d5e4d05c673e5f349cf204731c5ba6402f03679da155dd69d64cb0d29d11a5479eb3ce08cfc77d0248f464efdb9a51483ff7beafc3c44918f9a5308a8513c6f3cbdbeaf5097c03cf9c75b6052f6aab7bc9fc1f036f7f8ce5d28015ef0f936ac3c12b534e31922b0b9e9869d79af577f805950f31ccedf7f84f0c1342370c53a2fc8186215f1a86cc17f7180691071b06dd6318b8b8df305f76ebc430e96e8d63c96e4d05febbe49a4b5cbfcec636ce874a281b8582bc46fce9dc390fb8a5b6e3f58ed9f60058d2ec31421925b6ff0b2fc7e341),
(8, 'Actions_actions_url', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789cb5568d8ea320187c171ec002ad3fc577e82b185bd92d39054fe8ed5e2e7df703144516ede6926b6205bf7166aadf37694d30f9c3082c6b729c177a25494a405b5f690b4aa94ba0ee7b503282f571d407328bd42cecae80e63a2c1b6217a864e3029717733a9657bd97046504c8475729d6d18a53f521861fc0de2409d682fc5add9992d50753f70064d446828ef12881add59ff15aea094b3afca28329a104a785d13ec5b41d6e924e3de9850226d9297365a7ee970b8c4d39f70ca8a1e6f2cd012036f4388b5958909389dc3311d0e83731019c8d50079e571ffbcb8f9eaf4674553f881b9592f177479b9b06c03177215e37c244397bfc0a810ee25c6e4356c66ea2eb5baa98e0eea56e9bf2b19ea26fca875c629642c0aa7705af5a5137fbbd3b83d8d29fcec25cbb849deb55f4f3b423563ecd574d90994b037e136d4387ea31b49554f5a0ec8c1604dc95ea25391cee4cf65d937474f879135c3e5a55f3dbef440cef073bc7cf69881df132fa4538fa5aedc078433fddf423ff982f1cddc47b19a0bd1200c12a07be3cc97950ad144c4e670cc1eb38b0dc086c4642c016cf8610140b890983513edada4d0acf552c2d02ae68648498786e4c2888e0e8ea457878bee20112f06da448a8ba971d0e9ba516fbbd00597cee8648c0bd9b2611ec66ac382c842f3caf6f1abbfcff654c60eb45d82c7efe29707237d1e7f96de8b987e326b31b34fe2340c558c3b3a41f531aa0e3c93ec6f45bc134a5d2a57c3eff02787bca27),
(8, 'Actions_actions_url_chunk_0_99', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789ced966b8eab200046f7c2029447ad2deea15b304ce58ee42a3842e79149f77e4147865aab36b9e98fc9346955fcfc3831e5044611fd1414659a12926c286094b80198852709fdd434a1a0624fbc02368b2005b136ac3551533620131467ae25f8ba01e24eba9fd45dc1acb07df6c44d872880ee4182b3833b107bb0a35b0af4a9ce8da8792eb97953ed5f37a11d8611b41f77812d8a7cca4b6174fe264c7995b6dd047cb5d542ceb77521f6be104a022ecddb57defacc0e253dd6660aeb3beca992806ad48521f1f379a85186a4fb3e93064ca66552ff095210f54d783b4515c63d571a705df741e467f56413a99e0d9380ad5075deb4eac8b516f2f9eadd123c4578fd50ff8fe9bb3de73876180203e2adc005dd51d54dc58d50f20ebacb876ed285b149ba71e0620d2899578a152bd740901e782ed680bf3fcce341823b76b96e86559cf44d08646737c29c2eec3ba1e0d47622d8ec28288d69348de352e8a62ea29ab72f4725f5a9324c1e3f22d53ec7ac69425d9c9d1a0e43e5b767c8d833963016b2e0ef371583bc621e6d18f438c360b85b6b18b46c98dda2617c66de30f00ec3a0358621ab0c43d61b06a5f71a062d1a66d43d2b9b89ecaf776e7967da3064bfda30a158f0bc58ba0d4c6796a834f50abb6cf14ff60b59bd8359f6cb57d7ac5f86cc825ff6ffd92ffb557ef9ddc1fc4c93dcb15709cc3028e56c4fff01a2ec3be0),
(8, 'Actions_downloads', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Actions_outlink', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Actions_sitesearch', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Actions_SiteSearchCategories', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Contents_name_piece', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Contents_piece_name', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'DevicePlugins_plugin', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c85d0410e82301005d0bbcc094a8ba8bf77f00e158a8c14418a1043b8bbdd90b8d076f7f333ff2dc6e0849521b481da83c4ea71003973b58eb447012afbbe654b9a2143918132d21b230be7026b484a5ff6e23f1472ed8c6fbe1cf1db91512707ddcd6cd28c8a320a3454755ac9a3ca19f47c71d94edcd9b475885a99008dd6b8c199b71dd35a11d7c2d0b39bede8f8d64c69ee18e72468e147d52fbeb31527dfbf7d000bdfb235),
(8, 'DevicesDetection_brands', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c310e80200c45efd213505094df0b383979014c1c48d8180977971274f8e94b5ffb231835c14884fb20a016aca01cef27931458d0719124f08c9dd375c920afce05d1f784a5c7f7ac5d3a10ef4c63334e8df2f673d39e0883dab4ed94d65e57f7272c),
(8, 'DevicesDetection_browserEngines', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410e80200c04ffd217501194edcd07f8074c3c1089178f84bf4b097ad874b2db4c04a3241889b01f0494070e94e3716692ce5b4ef74592c023d3b8b6ed0cf2bad9206a48985b7c8b6ba305f1cad49bfe6a94979fab7a220c4a55db2eb5be0a8e2883),
(8, 'DevicesDetection_browsers', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c310e80200c45efd213505094dfd159ef808903091b23e1ee52820e3f7de96b7f04a3261889701f04d4821594e3fd6492020b3a4e92049eb173ba2e19e4d5b920fa9eb0f4f89eb54b07e29d696cc6a951de7e6eda1361509bb65dd2da0b53062720),
(8, 'DevicesDetection_browserVersions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c310e80201004ff720f301c08c25e69ad7fc0c482848e92f07781a8c5e436b79b8960d4042511e60b01b5c08272bcee4c52e041fb21acdda24812f845bfd7f40983dce84c902149583bae637b6940ec99e6674ea766fb731b9e0885da86ed94d61e1ec42858),
(8, 'DevicesDetection_models', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c4b0a80300c44af22394163fc4e2ee04a5ce8012ab82808822e4bef6e23eae2914766180f460c70ea219ff488176ad0eed76d27bdc00e34ccba94524ce7411ac02fe57bc55aa0c632e9d57602aa4c93a9732820ee989ecf5375e6edefc9763c1c62b2b55153ba01cf0d29a1),
(8, 'DevicesDetection_os', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8cc10e80200c43ff655fc04454ba938967fe01130f24dc3812fe5da6e8a1d94bbb368251138c44d80f3c6a8103e5785e99a4f484f6709024f0d034aeed298316cdac17ed27cc5d4b977babbc313dcef36a94d79f9bee4418d4a66b415abb017afc2764),
(8, 'DevicesDetection_osVersions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c4b0a80300c44ef92034863fc75b2125cf70e115c14dcb92cbdbb6da92e1e1932c33330528453837cc1233d9841b79dd74dfa6003ede15096c191467067ec57ca84414bedc46b95444c85a530975240bc31b54f9b36cdfae75c3d068794ab2d68ce2f24c62866),
(8, 'DevicesDetection_types', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4d8c510e80200c43efb213801394ee0ede01133f48f8e393707737a2c68f662fedda0c8f5ee024835f48e80d0154f379559202ffd3f25c96a6558a9673126b16acaaa80a1a32c8ef9ea6335f9df1f6f1b09d0c873e6ced90316ea6e62607),
(8, 'Goals_ItemsCategory', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Goals_ItemsCategory_Cart', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Goals_ItemsName', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Goals_ItemsName_Cart', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Goals_ItemsSku', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Goals_ItemsSku_Cart', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Referrers_keywordByCampaign', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Referrers_keywordBySearchEngine', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Referrers_searchEngineByKeyword', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Referrers_type', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b4aaceb432b04eb43286312cadaa8bad4cad94721293527394ac33ad0c91b0119436066233106d690dd29569650215300529b03084f24032e660ba16a42fd1cac0aaba16a4dbcfbab616009ccd2321),
(8, 'Referrers_urlBySocialNetwork', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Referrers_urlByWebsite', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'Resolution_configuration', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410ac3300c04ffa2174851e2c6ab5369afcd1f1cc8c1e05b2e01e3bfd732690f8316ed3209829ac196a0bf10514f2ca092f6a3909d9019f4dcdef6fa9806be5666b20cb999eeabbe0405ef349abb32e64ee82cbd5490ac42e333a643f3f8e7e69e04466d6edbacb52f4cf82a45),
(8, 'Resolution_resolution', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410a80300c04ff921724465bddfcc13f54f050e8cd8b50f277dba21e862cd965120435832d41bfb0a15e5840251d6721bb10411af85e99c932e4657aafb6858042ef74b3eec8981ba1b1b45241b20a8dcf980e4dfcb3774f02a37ab7ede6fe0006d5283e),
(8, 'UserCountry_city', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410e80200c04ffd217501194ed1ffc03261e48b87124fcdd96a0874d379d763218bdc04986ff4a426f08a09aefa7923438104901af6c6b7a450c8ac67c127b2ed8355113147a109f4c73334f9df5e3efc33c59f57d98ed92315effce268e),
(8, 'UserCountry_country', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410e80200c04ffd217501094ed1ffc03261e48b8114f84bf4b097ad874d2693781d1328c24b80f225a85079574dd85a4c2829e4a92c12b764d372483823a1745df33b69130e28774203e98e6669e1ae5fde7ae3d0906ad6bdb29bdbf77502778),
(8, 'UserCountry_region', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410e80200c04ffd217501194ed1ffc03261e48b87124fcdd96a0874d379d763218bdc04986ff4a426f08a09aefa7923438104901af6c6b7a450c8ac67c127b2ed8355113147a109f4c73334f9df5e3efc33c59f57d98ed92315effce268e),
(8, 'UserId_users', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c4bb432b0aaae0500064f01fe),
(8, 'UserLanguage_language', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c3d8c410a80201045ef32fbc0c9b4fa7387ee60e0429036d24abc7b8e548bcf3cfe1f5e00a3261809b01feca8050e94c31933c9e0784d772149e037f37b6ddf19e475b3bba82161e9f13dae8f16c41bd368c6ab515e7f6eea0930a84d6d87b4f6000767287b),
(8, 'VisitorInterest_daysSinceLastVisit', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c8dd33d0b03210c06e0ff22740c18e3c7356e5dbaddd8b55870108e0eb5d0e1b8ff5e3b1c74688ddb8b920709af89d1f15a58c7c4b407c36b65c76a49b7bca8581903ab73bee7475aae737e5d4a2dcfaa6261f3b964852a6e85b18d6a5e5ba238ef07ff5162a5417f29fab762240501658524c58091152b2904242b4e522c5859f192e2c0c94a90140f5e562649091064e5d8552cab09706031d82f73cbe880069a87fd02b74c087e04ea77d8b72db7129b11a9dfe3f64fd120901f5953bfcced51e4ddc19c24697b03f5f32f84),
(8, 'VisitorInterest_pageGap', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c8dd1310ac3300c05d0bb083a0a2cd94e5269cb017a07173a18b2650cb97bb5043a14ff6c5f96fc1076334976744bde2c5f41edd8ad1a6dedfdd9c8f7e890b09077d3a8c428919fdd2466e376a4ecafeb60a8282b56142999335632520a17ac14a454ae58a9489978fe51e4bf320d9562b4b024bccc3c64224bfcf58da759a053596fecf3448eca4357e49c5ff528c580),
(8, 'VisitorInterest_timeGap', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c8dd0310ac3300c05d0bb083a0a2cd9711c79cb017a07173a04b2650cb97bff12e8d0dadabe84fd90d44c829d9b85da2cde41ed3c6c32dadbebbd533d2c190596407533452928a95e9b091ee33b52accfbbf19f4116e1e87074e444e1ec7062d7c946197ba9034a5d68c6621a58d3b724bfa5692441e1e499298f2428b892439a4712145e3c52e94ac5080a4bf150cbf0e425c843d791747d00813eca99),
(8, 'VisitorInterest_visitsByVisitCount', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789c8dd33b0ac3300c06e0bb183a0a24f995c85b0fd03bb8d0c1902da3c9ddab25d0a148de7e3ff8b065b90b259943b07589776099a76409477f7f8ed04e5d090414da10d611e928b46b08e95e94a929b6d73d612a0cfca3e07f853d2542f495e8290992af244fc9907d257b4a81e22bc5532a545fa99eb2c1e62b9ba924093bd042797793d14c1978a1c064f7af662e907101b25bb8e883eb4fc015c96ee3aa7743025ea2ec5ed64331d2839f9e747d015a5b1581),
(8, 'VisitTime_localTime', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789cb5d6310e83301044d1bbf804cc1a0c5eee903b102905121d25e2ee09c456a42819aaa9d642e04ff5ecc9adf56df6669c3cd645f66df5cec332dd1f4b188f87b3a34c2b33d699cba22db32b3395d99f733f7698bcf16d3fbebdd507ffa3d0448d464d138d341a35d196465b4db4a3d14e134d349a34d19e467b4d74a0d14113cd349a35517092a032e90225914ae02c41e412384c10c9044e13443681e304914ee03c41e41338501009054e1444468123059152c695329152c69532d5dde9e2f25495c2f8b949c571757848e13b9dcef4fada2f60c0fba03e5f6ddee7675dfffc11ee9649dcda9fd5201bbb),
(8, 'VisitTime_serverTime', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 0x789cb5d6310e83301044d1bbf804cc1a0c5eee903b102905121d25e2ee09c456a42819aaa9d642e04ff5ecc9adf56df6669c3cd645f66df5cec332dd1f4b188f87b3a34c2b33d699cba22db32b3395d99f733f7698bcf16d3fbebdd507ffa3d0448d464d138d341a35d196465b4db4a3d14e134d349a34d19e467b4d74a0d14113cd349a35517092a032e90225914ae02c41e412384c10c9044e13443681e304914ee03c41e41338501009054e1444468123059152c695329152c69532d5dde9e2f25495c2f8b949c571757848e13b9dcef4fada2f60c0fba03e5f6ddee7675dfffc11ee9649dcda9fd5201bbb),
(12, 'Goals_ItemsCategory', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(12, 'Goals_ItemsCategory_Cart', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(12, 'Goals_ItemsName', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(12, 'Goals_ItemsName_Cart', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(12, 'Goals_ItemsSku', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe),
(12, 'Goals_ItemsSku_Cart', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 0x789c4bb432b0aaae0500064f01fe);

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
-- Table structure for table `matomo_archive_numeric_2024_08`
--

CREATE TABLE `matomo_archive_numeric_2024_08` (
  `idarchive` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) NOT NULL,
  `idsite` int(10) UNSIGNED DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `period` tinyint(3) UNSIGNED DEFAULT NULL,
  `ts_archived` datetime DEFAULT NULL,
  `value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matomo_archive_numeric_2024_08`
--

INSERT INTO `matomo_archive_numeric_2024_08` (`idarchive`, `name`, `idsite`, `date1`, `date2`, `period`, `ts_archived`, `value`) VALUES
(7, 'Actions_nb_pageviews', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'Actions_nb_uniq_pageviews', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 4),
(7, 'done', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(7, 'max_actions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'nb_actions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'nb_uniq_visitors', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(7, 'nb_visits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(7, 'PagePerformance_domprocessing_hits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 2),
(7, 'PagePerformance_domprocessing_time', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 82),
(7, 'PagePerformance_network_hits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'PagePerformance_network_time', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 492),
(7, 'PagePerformance_pageload_hits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'PagePerformance_pageload_time', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 2084),
(7, 'PagePerformance_servery_time', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1475),
(7, 'PagePerformance_server_hits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'PagePerformance_transfer_hits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(7, 'PagePerformance_transfer_time', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 35),
(7, 'sum_visit_length', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 181),
(7, 'UserCountry_distinctCountries', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(8, 'Actions_nb_pageviews', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'Actions_nb_uniq_pageviews', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 4),
(8, 'done', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(8, 'max_actions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'nb_actions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'nb_uniq_visitors', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(8, 'nb_visits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(8, 'PagePerformance_domprocessing_hits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 2),
(8, 'PagePerformance_domprocessing_time', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 82),
(8, 'PagePerformance_network_hits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'PagePerformance_network_time', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 492),
(8, 'PagePerformance_pageload_hits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'PagePerformance_pageload_time', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 2084),
(8, 'PagePerformance_servery_time', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1475),
(8, 'PagePerformance_server_hits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'PagePerformance_transfer_hits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(8, 'PagePerformance_transfer_time', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 35),
(8, 'sum_visit_length', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 181),
(8, 'UserCountry_distinctCountries', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(9, 'done90a5a511e1974bca37613b6daec137ba.VisitsSummary', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(9, 'max_actions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(9, 'nb_actions', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 6),
(9, 'nb_uniq_visitors', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(9, 'nb_visits', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 1),
(9, 'sum_visit_length', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:27', 181),
(11, 'done90a5a511e1974bca37613b6daec137ba.VisitsSummary', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(11, 'max_actions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(11, 'nb_actions', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 6),
(11, 'nb_uniq_visitors', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(11, 'nb_visits', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(11, 'sum_visit_length', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 181),
(12, 'done90a5a511e1974bca37613b6daec137ba.Goals', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 1),
(13, 'donefea44bece172bc9696ae57c26888bf8a.VisitsSummary', 1, '2024-08-01', '2024-08-31', 3, '2024-08-27 11:55:28', 1),
(14, 'donefea44bece172bc9696ae57c26888bf8a.VisitsSummary', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 1),
(15, 'donefea44bece172bc9696ae57c26888bf8a.Goals', 1, '2024-08-26', '2024-08-26', 1, '2024-08-27 11:55:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matomo_archive_numeric_2024_09`
--

CREATE TABLE `matomo_archive_numeric_2024_09` (
  `idarchive` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) NOT NULL,
  `idsite` int(10) UNSIGNED DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `period` tinyint(3) UNSIGNED DEFAULT NULL,
  `ts_archived` datetime DEFAULT NULL,
  `value` double DEFAULT NULL
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

--
-- Dumping data for table `matomo_log_action`
--

INSERT INTO `matomo_log_action` (`idaction`, `name`, `hash`, `type`, `url_prefix`) VALUES
(1, 'hispmd.merqconsultancy.org/', 1464242820, 1, 2),
(2, 'HISPMD - Health Information Systems Performance Management Dashboard', 1172572068, 4, NULL),
(3, 'hispmd.merqconsultancy.org/app/start.php', 1381842620, 1, 2),
(4, 'hispmd.merqconsultancy.org/app/index.htm', 2560092281, 1, 2),
(5, 'hispmd.merqconsultancy.org/app/', 3175154339, 1, 2);

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

--
-- Dumping data for table `matomo_log_link_visit_action`
--

INSERT INTO `matomo_log_link_visit_action` (`idlink_va`, `idsite`, `idvisitor`, `idvisit`, `idaction_url_ref`, `idaction_name_ref`, `custom_float`, `pageview_position`, `server_time`, `idpageview`, `idaction_name`, `idaction_url`, `search_cat`, `search_count`, `time_spent_ref_action`, `idaction_product_cat`, `idaction_product_cat2`, `idaction_product_cat3`, `idaction_product_cat4`, `idaction_product_cat5`, `idaction_product_name`, `product_price`, `idaction_product_sku`, `idaction_event_action`, `idaction_event_category`, `idaction_content_interaction`, `idaction_content_name`, `idaction_content_piece`, `idaction_content_target`, `time_dom_completion`, `time_dom_processing`, `time_network`, `time_on_load`, `time_server`, `time_transfer`, `time_spent`, `custom_dimension_1`, `custom_dimension_2`, `custom_dimension_3`, `custom_dimension_4`, `custom_dimension_5`) VALUES
(1, 1, 0xf35266df6ddbfba8, 1, 0, 0, NULL, 1, '2024-08-26 19:56:49', 'BhGneb', 0, 1, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, 492, NULL, 217, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 0xf35266df6ddbfba8, 1, 1, 0, NULL, 2, '2024-08-26 19:56:49', 'Enr7Ou', 2, 3, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 203, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 0xf35266df6ddbfba8, 1, 3, 2, NULL, 3, '2024-08-26 19:56:57', '4R8e4l', 2, 3, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 233, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 0xf35266df6ddbfba8, 1, 3, 2, NULL, 4, '2024-08-26 19:57:06', 'pdOA8a', 0, 4, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 235, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 0xf35266df6ddbfba8, 1, 4, 2, NULL, 5, '2024-08-26 19:59:48', 'PUKRaR', 0, 5, NULL, NULL, 162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 0, NULL, 208, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 0xf35266df6ddbfba8, 1, 5, 2, NULL, 6, '2024-08-26 19:59:49', 'hmeX4F', 2, 3, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 379, 3, NULL, NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `matomo_log_visit`
--

INSERT INTO `matomo_log_visit` (`idvisit`, `idsite`, `idvisitor`, `visit_last_action_time`, `config_id`, `location_ip`, `profilable`, `user_id`, `visit_first_action_time`, `visit_goal_buyer`, `visit_goal_converted`, `visitor_returning`, `visitor_seconds_since_first`, `visitor_seconds_since_order`, `visitor_count_visits`, `visit_entry_idaction_name`, `visit_entry_idaction_url`, `visit_exit_idaction_name`, `visit_exit_idaction_url`, `visit_total_actions`, `visit_total_interactions`, `visit_total_searches`, `referer_keyword`, `referer_name`, `referer_type`, `referer_url`, `location_browser_lang`, `config_browser_engine`, `config_browser_name`, `config_browser_version`, `config_client_type`, `config_device_brand`, `config_device_model`, `config_device_type`, `config_os`, `config_os_version`, `visit_total_events`, `visitor_localtime`, `visitor_seconds_since_last`, `config_resolution`, `config_cookie`, `config_flash`, `config_java`, `config_pdf`, `config_quicktime`, `config_realplayer`, `config_silverlight`, `config_windowsmedia`, `visit_total_time`, `location_city`, `location_country`, `location_latitude`, `location_longitude`, `location_region`, `last_idlink_va`, `custom_dimension_1`, `custom_dimension_2`, `custom_dimension_3`, `custom_dimension_4`, `custom_dimension_5`) VALUES
(1, 1, 0xf35266df6ddbfba8, '2024-08-26 19:59:49', 0x822fc055bf49a14e, 0xc4bf0000, 1, NULL, '2024-08-26 19:56:49', 0, 0, 0, 0, NULL, 1, 0, 1, 2, 3, 6, 6, 0, NULL, NULL, 1, '', 'en-us', 'Blink', 'CM', '126.0', 1, 'HT', 'U23 Pro', 1, 'AND', '13.0', 0, '22:56:48', 0, '360x800', 1, 0, 0, 0, 0, 0, 0, 0, 181, NULL, 'us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
('Feedback.nextFeedbackReminder.hispmd', '2025-02-26', 0),
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
('LastPluginActivation.DarkTheme', '1724702513', 0),
('lastTrackerCronRun', '1724700661', 0),
('MatomoUpdateHistory', '5.1.1,', 0),
('MobileMessaging_DelegatedManagement', 'false', 0),
('piwikUrl', 'https://hispmd.merqconsultancy.org/analytics/', 1),
('PrivacyManager.ipAnonymizerEnabled', '1', 0),
('SitesManagerHadTrafficInPast_1', '1', 0),
('SitesManager_DefaultCurrency', 'ETB', 0),
('SitesManager_DefaultTimezone', 'Africa/Addis_Ababa', 0),
('SocialDefinitions', 'YToxNDQ6e3M6OToiYmFkb28uY29tIjtzOjU6IkJhZG9vIjtzOjg6ImJlYm8uY29tIjtzOjQ6IkJlYm8iO3M6MTU6ImJsYWNrcGxhbmV0LmNvbSI7czoxMToiQmxhY2tQbGFuZXQiO3M6ODoiYnNreS5hcHAiO3M6NzoiQmx1ZXNreSI7czoxMToic2t5ZmVlZC5hcHAiO3M6NzoiQmx1ZXNreSI7czoxMToiYnV6em5ldC5jb20iO3M6NzoiQnV6em5ldCI7czoxNDoiY2xhc3NtYXRlcy5jb20iO3M6MTQ6IkNsYXNzbWF0ZXMuY29tIjtzOjE4OiJnbG9iYWwuY3l3b3JsZC5jb20iO3M6NzoiQ3l3b3JsZCI7czoxNDoiZ2FpYW9ubGluZS5jb20iO3M6MTE6IkdhaWEgT25saW5lIjtzOjg6ImdlbmkuY29tIjtzOjg6IkdlbmkuY29tIjtzOjEwOiJnaXRodWIuY29tIjtzOjY6IkdpdEh1YiI7czoxNToicGx1cy5nb29nbGUuY29tIjtzOjk6Ikdvb2dsZSUyQiI7czoxNDoidXJsLmdvb2dsZS5jb20iO3M6OToiR29vZ2xlJTJCIjtzOjI4OiJjb20uZ29vZ2xlLmFuZHJvaWQuYXBwcy5wbHVzIjtzOjk6Ikdvb2dsZSUyQiI7czoxMDoiZG91YmFuLmNvbSI7czo2OiJEb3ViYW4iO3M6MTI6ImRyaWJiYmxlLmNvbSI7czo4OiJEcmliYmJsZSI7czoxMjoiZmFjZWJvb2suY29tIjtzOjg6IkZhY2Vib29rIjtzOjU6ImZiLm1lIjtzOjg6IkZhY2Vib29rIjtzOjE0OiJtLmZhY2Vib29rLmNvbSI7czo4OiJGYWNlYm9vayI7czoxNDoibC5mYWNlYm9vay5jb20iO3M6ODoiRmFjZWJvb2siO3M6MTE6ImZldGxpZmUuY29tIjtzOjc6IkZldGxpZmUiO3M6MTA6ImZsaWNrci5jb20iO3M6NjoiRmxpY2tyIjtzOjEyOiJmbGl4c3Rlci5jb20iO3M6ODoiRmxpeHN0ZXIiO3M6MTE6ImZvdG9sb2cuY29tIjtzOjc6IkZvdG9sb2ciO3M6MTQ6ImZvdXJzcXVhcmUuY29tIjtzOjEwOiJGb3Vyc3F1YXJlIjtzOjE5OiJmcmllbmRzcmV1bml0ZWQuY29tIjtzOjE2OiJGcmllbmRzIFJldW5pdGVkIjtzOjE0OiJmcmllbmRzdGVyLmNvbSI7czoxMDoiRnJpZW5kc3RlciI7czo3OiJncmVlLmpwIjtzOjQ6ImdyZWUiO3M6OToiaGFiYm8uY29tIjtzOjU6IkhhYm9vIjtzOjIwOiJuZXdzLnljb21iaW5hdG9yLmNvbSI7czoxMToiSGFja2VyIE5ld3MiO3M6NzoiaGk1LmNvbSI7czozOiJoaTUiO3M6ODoiaHl2ZXMubmwiO3M6NToiSHl2ZXMiO3M6OToiaWRlbnRpLmNhIjtzOjk6ImlkZW50aS5jYSI7czoxMzoiaW5zdGFncmFtLmNvbSI7czo5OiJJbnN0YWdyYW0iO3M6MTU6ImwuaW5zdGFncmFtLmNvbSI7czo5OiJJbnN0YWdyYW0iO3M6MTA6ImxhbmctOC5jb20iO3M6NjoibGFuZy04IjtzOjc6Imxhc3QuZm0iO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0ucnUiO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0uZGUiO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0uZXMiO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0uZnIiO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0uaXQiO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0uanAiO3M6NzoiTGFzdC5mbSI7czo5OiJsYXN0Zm0ucGwiO3M6NzoiTGFzdC5mbSI7czoxMzoibGFzdGZtLmNvbS5iciI7czo3OiJMYXN0LmZtIjtzOjk6Imxhc3RmbS5zZSI7czo3OiJMYXN0LmZtIjtzOjEzOiJsYXN0Zm0uY29tLnRyIjtzOjc6Ikxhc3QuZm0iO3M6MTI6ImxpbmtlZGluLmNvbSI7czo4OiJMaW5rZWRJbiI7czo3OiJsbmtkLmluIjtzOjg6IkxpbmtlZEluIjtzOjE2OiJsaW5rZWRpbi5hbmRyb2lkIjtzOjg6IkxpbmtlZEluIjtzOjE0OiJsaXZlam91cm5hbC5ydSI7czoxMToiTGl2ZUpvdXJuYWwiO3M6MTU6ImxpdmVqb3VybmFsLmNvbSI7czoxMToiTGl2ZUpvdXJuYWwiO3M6MTU6Im1hc3RvZG9uLnNvY2lhbCI7czo4OiJNYXN0b2RvbiI7czoxNDoibWFzdG9kb24uY2xvdWQiO3M6ODoiTWFzdG9kb24iO3M6MTk6Im1hc3RvZG9uLnRlY2hub2xvZ3kiO3M6ODoiTWFzdG9kb24iO3M6MTI6Im1hc3RvZG9uLnh5eiI7czo4OiJNYXN0b2RvbiI7czoxMToibWFzdG9kb24uYXQiO3M6ODoiTWFzdG9kb24iO3M6MTI6Im1hc3RvZG9uLmFydCI7czo4OiJNYXN0b2RvbiI7czo4OiJtYW1vdC5mciI7czo4OiJNYXN0b2RvbiI7czo5OiJwYXdvby5uZXQiO3M6ODoiTWFzdG9kb24iO3M6ODoibXN0ZG4uaW8iO3M6ODoiTWFzdG9kb24iO3M6ODoibXN0ZG4uanAiO3M6ODoiTWFzdG9kb24iO3M6MTI6ImZyaWVuZHMubmljbyI7czo4OiJNYXN0b2RvbiI7czoxOToicm8tbWFzdG9kb24ucHV5by5qcCI7czo4OiJNYXN0b2RvbiI7czo4OiJxdWV5Lm9yZyI7czo4OiJNYXN0b2RvbiI7czoxMjoiYm90c2luLnNwYWNlIjtzOjg6Ik1hc3RvZG9uIjtzOjE2OiJzb2NpYWwudGNobmNzLmRlIjtzOjg6Ik1hc3RvZG9uIjtzOjc6ImtuemsubWUiO3M6ODoiTWFzdG9kb24iO3M6MTM6Im1hc3RvZG9udC5jYXQiO3M6ODoiTWFzdG9kb24iO3M6MTg6ImJpdGNvaW5oYWNrZXJzLm9yZyI7czo4OiJNYXN0b2RvbiI7czoxMzoiZm9zc3RvZG9uLm9yZyI7czo4OiJNYXN0b2RvbiI7czoxMjoiY2hhb3Muc29jaWFsIjtzOjg6Ik1hc3RvZG9uIjtzOjExOiJjeWJyZS5zcGFjZSI7czo4OiJNYXN0b2RvbiI7czoxMDoidmlzLnNvY2lhbCI7czo4OiJNYXN0b2RvbiI7czoxMDoibWVpbnZ6Lm5ldCI7czo2OiJNZWluVloiO3M6NzoibWl4aS5qcCI7czo0OiJNaXhpIjtzOjEwOiJtb2lrcnVnLnJ1IjtzOjEwOiJNb2lLcnVnLnJ1IjtzOjEyOiJtdWx0aXBseS5jb20iO3M6ODoiTXVsdGlwbHkiO3M6MTA6Im15Lm1haWwucnUiO3M6MTA6Im15Lm1haWwucnUiO3M6MTQ6Im15aGVyaXRhZ2UuY29tIjtzOjEwOiJNeUhlcml0YWdlIjtzOjk6Im15bGlmZS5ydSI7czo2OiJNeUxpZmUiO3M6MTE6Im15c3BhY2UuY29tIjtzOjc6Ik15c3BhY2UiO3M6MTQ6Im15eWVhcmJvb2suY29tIjtzOjEwOiJteVllYXJib29rIjtzOjU6Im5rLnBsIjtzOjE0OiJOYXN6YS1rbGFzYS5wbCI7czoxMDoibmV0bG9nLmNvbSI7czo2OiJOZXRsb2ciO3M6MTY6Im9kbm9rbGFzc25pa2kucnUiO3M6MTM6Ik9kbm9rbGFzc25pa2kiO3M6OToib3JrdXQuY29tIjtzOjU6Ik9ya3V0IjtzOjEyOiJxem9uZS5xcS5jb20iO3M6NToiT3pvbmUiO3M6MTE6InBlZXBldGguY29tIjtzOjc6IlBlZXBldGgiO3M6MTM6InBpbnRlcmVzdC5jb20iO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuY2EiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuY2giO3M6OToiUGludGVyZXN0IjtzOjE1OiJwaW50ZXJlc3QuY28udWsiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuZGUiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuZGsiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuZXMiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuZnIiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuaWUiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QuanAiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QubnoiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3QucHQiO3M6OToiUGludGVyZXN0IjtzOjEyOiJwaW50ZXJlc3Quc2UiO3M6OToiUGludGVyZXN0IjtzOjk6InBsYXhvLmNvbSI7czo1OiJQbGF4byI7czoxMDoicmVkZGl0LmNvbSI7czo2OiJyZWRkaXQiO3M6MTM6Im5wLnJlZGRpdC5jb20iO3M6NjoicmVkZGl0IjtzOjE0OiJwYXkucmVkZGl0LmNvbSI7czo2OiJyZWRkaXQiO3M6MTA6InJlbnJlbi5jb20iO3M6NjoiUmVucmVuIjtzOjExOiJza3lyb2NrLmNvbSI7czo3OiJTa3lyb2NrIjtzOjEyOiJzbmFwY2hhdC5jb20iO3M6ODoiU25hcGNoYXQiO3M6MTA6InNvbmljby5jb20iO3M6MTA6IlNvbmljby5jb20iO3M6MTc6InN0YWNrb3ZlcmZsb3cuY29tIjtzOjEzOiJTdGFja092ZXJmbG93IjtzOjExOiJzdHVkaXZ6Lm5ldCI7czo3OiJTdHVkaVZaIjtzOjE2OiJsb2dpbi50YWdnZWQuY29tIjtzOjY6IlRhZ2dlZCI7czoxMToidGFyaW5nYS5uZXQiO3M6ODoiVGFyaW5nYSEiO3M6MTY6IndlYi50ZWxlZ3JhbS5vcmciO3M6ODoiVGVsZWdyYW0iO3M6MjI6Im9yZy50ZWxlZ3JhbS5tZXNzZW5nZXIiO3M6ODoiVGVsZWdyYW0iO3M6MTE6InRocmVhZHMubmV0IjtzOjc6IlRocmVhZHMiO3M6MTM6ImwudGhyZWFkcy5uZXQiO3M6NzoiVGhyZWFkcyI7czoxMDoidGlrdG9rLmNvbSI7czo2OiJUaWtUb2siO3M6MTA6InR1ZW50aS5jb20iO3M6NjoiVHVlbnRpIjtzOjEwOiJ0dW1ibHIuY29tIjtzOjY6InR1bWJsciI7czoxMToidC51bWJsci5jb20iO3M6NjoidHVtYmxyIjtzOjExOiJ0d2l0dGVyLmNvbSI7czo3OiJUd2l0dGVyIjtzOjQ6InQuY28iO3M6NzoiVHdpdHRlciI7czoxNToic291cmNlZm9yZ2UubmV0IjtzOjExOiJTb3VyY2Vmb3JnZSI7czoxNToic3R1bWJsZXVwb24uY29tIjtzOjExOiJTdHVtYmxlVXBvbiI7czo2OiJ2ay5jb20iO3M6OToiVmtvbnRha3RlIjtzOjEyOiJ2a29udGFrdGUucnUiO3M6OToiVmtvbnRha3RlIjtzOjExOiJ5b3V0dWJlLmNvbSI7czo3OiJZb3VUdWJlIjtzOjg6InlvdXR1LmJlIjtzOjc6IllvdVR1YmUiO3M6ODoidjJleC5jb20iO3M6NDoiVjJFWCI7czoxMDoidmlhZGVvLmNvbSI7czo2OiJWaWFkZW8iO3M6OToidmltZW8uY29tIjtzOjU6IlZpbWVvIjtzOjE1OiJ2a3J1Z3VkcnV6ZWkucnUiO3M6MTU6InZrcnVndWRydXplaS5ydSI7czo4OiJ3YXluLmNvbSI7czo0OiJXQVlOIjtzOjk6IndlaWJvLmNvbSI7czo1OiJXZWlibyI7czo0OiJ0LmNuIjtzOjU6IldlaWJvIjtzOjEyOiJ3ZWV3b3JsZC5jb20iO3M6ODoiV2VlV29ybGQiO3M6MTQ6ImxvZ2luLmxpdmUuY29tIjtzOjE5OiJXaW5kb3dzIExpdmUgU3BhY2VzIjtzOjEzOiJ3b3JrcGxhY2UuY29tIjtzOjk6IldvcmtwbGFjZSI7czoxNToibC53b3JrcGxhY2UuY29tIjtzOjk6IldvcmtwbGFjZSI7czoxNjoibG0ud29ya3BsYWNlLmNvbSI7czo5OiJXb3JrcGxhY2UiO3M6OToieGFuZ2EuY29tIjtzOjU6IlhhbmdhIjtzOjg6InhpbmcuY29tIjtzOjQ6IlhJTkciO30=', 0),
('TaskScheduler.timetable', 'a:1:{s:45:\"Piwik\\Plugins\\GeoIp2\\GeoIP2AutoUpdater.update\";i:1724716800;}', 0),
('TransactionLevel.testOption', '1', 0),
('UpdateCheck_LastCheckFailed', '', 0),
('UpdateCheck_LastTimeChecked', '1724759594', 1),
('UpdateCheck_LatestVersion', '5.1.1', 0),
('useridsalt', '1MKf8V3u8kgPYU7ZzzDwaiW1CPpDnn69$wzH$URd', 1),
('UsersManager.lastSeen.hispmd', '1724759721', 1),
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
('version_DarkTheme', '5.0.8', 1),
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

--
-- Dumping data for table `matomo_plugin_setting`
--

INSERT INTO `matomo_plugin_setting` (`plugin_name`, `setting_name`, `setting_value`, `json_encoded`, `user_login`, `idplugin_setting`) VALUES
('Tour', 'browse_marketplace_completed', '1', 0, 'hispmd', 2),
('Tour', 'view_visitor_profile_completed', '1', 0, 'hispmd', 3);

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

--
-- Dumping data for table `matomo_sequence`
--

INSERT INTO `matomo_sequence` (`name`, `value`) VALUES
('matomo_archive_numeric_2024_08', 15),
('matomo_archive_numeric_2024_09', 0);

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
('0df022ddb242c9e2747692ee056bf977e8286f05e6ec5824b86ee79b4a641a08acc1564902ebd22d965177acf3fdfc008cc7d93ce3c64e81aba6fed4926d7386', 1724702624, 1209600, 'a:1:{s:4:\"data\";s:29596:\"YToxMTI6e3M6NDoiX19aRiI7YToxMDc6e3M6MTE6IkxvZ2luLmxvZ2luIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDI4ODk7fX1zOjI0OiJNYXJrZXRwbGFjZS51cGRhdGVQbHVnaW4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyMTt9fXM6MzE6IkNvcmVQbHVnaW5zQWRtaW4uYWN0aXZhdGVQbHVnaW4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyMTt9fXM6MzI6IkNvcmVQbHVnaW5zQWRtaW4udW5pbnN0YWxsUGx1Z2luIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMwMzc7fX1zOjMzOiJDb3JlUGx1Z2luc0FkbWluLmRlYWN0aXZhdGVQbHVnaW4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyMTt9fXM6MjU6Ik1hcmtldHBsYWNlLmluc3RhbGxQbHVnaW4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyMTt9fXM6NDE6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlF1ZXVlZFRyYWNraW5nIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5QYXNzd29yZFBvbGljeUVuZm9yY2VyIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DYXB0Y2hhSHViIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5UcmFja2luZ1NwYW1QcmV2ZW50aW9uIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjUwOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Hb29nbGVBbmFseXRpY3NJbXBvcnRlciI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0MjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uU2ltcGxlQUJUZXN0aW5nIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Bc2tZb3VyRGF0YWJhc2UiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNpdGVHcm91cHMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6MzQ6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlN3YWdnZXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzk6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkNvZGVJbmplY3RvciI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0MjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uUHJvZmlsZUdyYXZhdGFyIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5LUElXaWRnZXRzIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5XZWF0aGVyUmVwb3J0cyI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uVGFnTWFuYWdlckV4dGVuZGVkIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Mb2dpblRva2VuQXV0aCI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czozNjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uTWlzdHJhbEFJIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DaGF0R1BUIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjMzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5TZW50cnkiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkJvdFRyYWNrZXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzk6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkN1c3RvbUFsZXJ0cyI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NzoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRW52aXJvbm1lbnRWYXJpYWJsZXMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlZpc2l0b3JHZW5lcmF0b3IiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRyZWVtYXBWaXN1YWxpemF0aW9uIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5UYXNrc1RpbWV0YWJsZSI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czozOToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uU2VjdXJpdHlJbmZvIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Qcm92aWRlciI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czozNjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uTWlncmF0aW9uIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjU0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5NYXJrZXRpbmdDYW1wYWlnbnNSZXBvcnRpbmciO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkxvZ1ZpZXdlciI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czozNjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uTG9naW5MZGFwIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Kc1RyYWNrZXJGb3JjZUFzeW5jIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Kc1RyYWNrZXJDdXN0b20iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDQ6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkludmFsaWRhdGVSZXBvcnRzIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Gb3JjZVNTTCI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRGV2aWNlRGV0ZWN0b3JDYWNoZSI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ3VzdG9tVHJhbnNsYXRpb25zIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5CYW5kd2lkdGgiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NTc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkFub255bW91c1Bpd2lrVXNhZ2VNZWFzdXJlbWVudCI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0MToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uUHJvdGVjdFRyYWNrSUQiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRhdGFFeHBvcnQiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkV4dHJhVG9vbHMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLklQMkxvY2F0aW9uIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5IaWRlUGFzc3dvcmRSZXNldCI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRGlzYWJsZVVybERlY29kaW5nIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjMzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5TaWdudXAiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNob3J0Y29kZVRyYWNrZXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlZpcERldGVjdG9yIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5FbWFpbFJlcG9ydEV4dGVuZGVkIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Hcm91cFBlcm1pc3Npb25zIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5EaXNhYmxlVHJhY2tpbmciO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkFqYXhPcHRPdXQiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlBlcmZvcm1hbmNlQXVkaXQiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlJlckludHJhbmV0U3VibmV0d29yayI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0MToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQXV0aG9yU2VnbWVudHMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6MzU6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLklQMlByb3h5IjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5UcmFja2luZ0NvZGVDdXN0b21pemVyIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5TaXRlQWNjZXNzUHJvdmlzaW9uZXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6MzI6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNldmVuIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DYW1wdXNHZW9JUCI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQWRtaW5Ob3RpZmljYXRpb24iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlR3aWxpb1NNUyI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0MzoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uSW5kZXhhdGlvblZpZXdlciI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czozOToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uaVBhZERldGVjdG9yIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DdXN0b21WYXJpYWJsZXMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NTQ6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlR3aXR0ZXJGZWVkV2lkZ2V0QnlBbXBlcmFnZSI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo1NDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uU2hhcnBTcHJpbmdXaWRnZXRCeUFtcGVyYWdlIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjU1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5GYWNlYm9va1BhZ2VXaWRnZXRCeUFtcGVyYWdlIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjUxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DcmF6eUVnZ1dpZGdldEJ5QW1wZXJhZ2UiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLk1veldpZGdldEJ5QW1wZXJhZ2UiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NTA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkN1c3RvbURpbWVuc2lvbnNNYW5hZ2VyIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5MaXZlVGFiIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5JbXBvcnRBbm5vdGF0aW9uV2lkZ2V0IjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5MYW5ndWFnZVRvb2dsZSI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0MDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRXhjbHVkZUJ5REROUyI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czozODoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRmxhZ0NvdW50ZXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLklQUmVwb3J0cyI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo1MjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uUmVzdHJpY3RMYW5ndWFnZVNlbGVjdGlvbiI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMTI2O319czo0NToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRGV2aWNlRmVhdHVyZVdlYkdMIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5SZWZlcnJlcnNNYW5hZ2VyIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5EaWFnbm9zdGljc0V4dGVuZGVkIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5RdWlja0V4Y2x1ZGVWaXNpdG9ySVAiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlByb2ZpbGVBdmF0YXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlBhc3N3b3JkVmVyaWZpZXIiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkV4Y2x1ZGVDb3VudHJpZXMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDQ6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRldmVsb3BtZW50VG9vZ2xlIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQ4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DdXN0b21pc2VUcmFuc2xhdGlvbnMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDE6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkNsYXNzaWNDb3VudGVyIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQwOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5CcmF2ZURldGVjdG9yIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5EZXZpY2VQaXhlbFJhdGlvIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Mb2dpbk9JREMiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRyYWNrZXJEb21haW4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzEyNjt9fXM6Mzg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlVzZXJDb25zb2xlIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMxMjY7fX1zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5EYXJrVGhlbWUiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzA4NTt9fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLk9wZW5tb3N0VGhlbWUiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzA4NTt9fXM6Mzg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkdvb2dsZVRoZW1lIjthOjE6e3M6NDoiRU5WVCI7YToxOntzOjU6Im5vbmNlIjtpOjE3MjQ3MDMwODU7fX1zOjMzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Nb2Rlcm4iO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzA4NTt9fXM6NDY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRoZUZhbW91c1NuYWtlSG91c2UiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzA4NTt9fXM6NDg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkFsdGVybmF0aXZlU3BhcmtsaW5lcyI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMDg1O319czo0MzoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ2xhc3NpY0ZvbnRUaGVtZSI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzAzMDg1O319czo1OiJMb2dpbiI7YToxOntzOjQ6IkVOVlQiO2E6Mjp7czoxNDoicmVkaXJlY3RQYXJhbXMiO2k6MTcyNDcwNDMwNjtzOjE2OiJsYXN0UGFzc3dvcmRBdXRoIjtpOjE3MjQ3MDQzMDY7fX1zOjE1OiJjb25maXJtUGFzc3dvcmQiO2E6MTp7czo0OiJFTlZUIjthOjE6e3M6NToibm9uY2UiO2k6MTcyNDcwMzA5OTt9fX1zOjk6InVzZXIubmFtZSI7czo2OiJoaXNwbWQiO3M6MjI6InR3b2ZhY3RvcmF1dGgudmVyaWZpZWQiO2k6MDtzOjIwOiJ1c2VyLnRva2VuX2F1dGhfdGVtcCI7czozMjoiZDQ2MjQyNjliMDY2YTZjYWUwODQyMjA3NmJhZGIxNGQiO3M6MTI6InNlc3Npb24uaW5mbyI7YTozOntzOjI6InRzIjtpOjE3MjQ3MDIzMjY7czoxMDoicmVtZW1iZXJlZCI7YjowO3M6MTA6ImV4cGlyYXRpb24iO2k6MTcyNDcwNjIyNDt9czoxMjoibm90aWZpY2F0aW9uIjthOjE6e3M6MTM6Im5vdGlmaWNhdGlvbnMiO2E6MDp7fX1zOjI0OiJNYXJrZXRwbGFjZS51cGRhdGVQbHVnaW4iO2E6MTp7czo1OiJub25jZSI7czozMjoiZmFlZmVlMTJjNDYwMTg2OWRmYzdiZTExODY3OWNiOTciO31zOjMyOiJDb3JlUGx1Z2luc0FkbWluLnVuaW5zdGFsbFBsdWdpbiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI3MmY5ZGNjYmNjNjFiMTcyOTc1NjFhYTkzZTk2MDAxOSI7fXM6MzM6IkNvcmVQbHVnaW5zQWRtaW4uZGVhY3RpdmF0ZVBsdWdpbiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI2MmY2MzgzYzJjYWU3MmUxMTRlMWUyOWQ0MTVjNzRmZCI7fXM6NDE6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlF1ZXVlZFRyYWNraW5nIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImE2NjJkNDBhY2UwYjYyNGQzZjA4YjZiMDc1ZTVhZDNkIjt9czo0OToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uUGFzc3dvcmRQb2xpY3lFbmZvcmNlciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJlYzcxOGJiODc0YjAzMDRhNjE5ZWExNjFiZTY4OWQzOSI7fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkNhcHRjaGFIdWIiO2E6MTp7czo1OiJub25jZSI7czozMjoiNmVjMTBhZDVlMjUxNTQ1MDkyMjVkMTk3OGZkNWU4OWEiO31zOjQ5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5UcmFja2luZ1NwYW1QcmV2ZW50aW9uIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjU1MTk0MTIzMjNmODk4ZGM1MmE0NDNlNzE5NmI0YTZkIjt9czo1MDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uR29vZ2xlQW5hbHl0aWNzSW1wb3J0ZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiOWI0MjlkMjJiNzExMWNlY2M0NDlhNjFmODllNjI0MDkiO31zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5TaW1wbGVBQlRlc3RpbmciO2E6MTp7czo1OiJub25jZSI7czozMjoiMTA3NWZmMjdjYjRlYWMyY2I4ZjI4M2YyZGRjZThmZGUiO31zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Bc2tZb3VyRGF0YWJhc2UiO2E6MTp7czo1OiJub25jZSI7czozMjoiN2QxYzU1MjM3YzNhZGY2OTNkOGE1MjcyZWU3Yjg0NzkiO31zOjM3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5TaXRlR3JvdXBzIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjUxMmIyOWY2ZWM2NzFmMzA3NjI3MTg0MTAxMWY2ZjMzIjt9czozNDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uU3dhZ2dlciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJhYjQ0Zjg1NjVkZjNkZjExMzM0YzQ2MTk0OGRiNDY5NiI7fXM6Mzk6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkNvZGVJbmplY3RvciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJiZmY0Y2MzOWZhYzhiZGNjNmIzYTQ4MTRmZjYyN2QzZSI7fXM6NDI6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlByb2ZpbGVHcmF2YXRhciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI0NDQwYTJhOTEzYzRlYzRhYzJhNzBiNzg3ODA4ZTYzZCI7fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLktQSVdpZGdldHMiO2E6MTp7czo1OiJub25jZSI7czozMjoiM2RlNTEzZjM0NzU0YzhkZjNmMDk5NzNhOGYyNzNiNGYiO31zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5XZWF0aGVyUmVwb3J0cyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJiOTlkYzM1ZmM4OWY0MDViZmJkMjUwMDE4MTk5NjU2MyI7fXM6NDU6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRhZ01hbmFnZXJFeHRlbmRlZCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIyOWE5OWU4YWMyYmMzZTdmNDhiZGZkMGZiMmRiZjc2ZCI7fXM6NDE6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkxvZ2luVG9rZW5BdXRoIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImM5MWU2ZGQ0MzU1Yjg1ZTkxZTZhN2EzZTA0MGZkNDU1Ijt9czozNjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uTWlzdHJhbEFJIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjQ4ZjYzY2VjODZjODBkZTlmZmU3OTJmYTdlNGQ1ZGY5Ijt9czozNDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ2hhdEdQVCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJmMDQ0Y2FmZjBmYmNiZWQyY2ZhZTljNTdlOTA4NGZkZiI7fXM6MzM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNlbnRyeSI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJjN2JhNmQzOTljZmMxNDNmOTlkZDg3ODQzYTU0MjVkMCI7fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkJvdFRyYWNrZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiOWQyYzk5ZWFjNDU2OTc3OWYxOTljNDBhMjRiZWE2YmEiO31zOjM5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DdXN0b21BbGVydHMiO2E6MTp7czo1OiJub25jZSI7czozMjoiOGM3MWRlYjJjMGU3ZTVkZDZkMWVhNjRhOTMwZjNkYTIiO31zOjQ3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5FbnZpcm9ubWVudFZhcmlhYmxlcyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJjODhkMWQyZTljZjcxYjFhZTE5MjkyYTcyNTQ3ZTRjMCI7fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlZpc2l0b3JHZW5lcmF0b3IiO2E6MTp7czo1OiJub25jZSI7czozMjoiZTU1OTZkMTNjOThjZGE4MjRhY2FjMTJlODMyZWU3ZTYiO31zOjQ3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5UcmVlbWFwVmlzdWFsaXphdGlvbiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJlOWJiNTY2MzRkYzZiYThlMjMxZDkxOTA3OGY5YWUwYiI7fXM6NDE6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRhc2tzVGltZXRhYmxlIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImQ0YTk0ZDUwMzdjMjUyYTg5ZWY0Y2YxMDhjYjEzNDU3Ijt9czozOToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uU2VjdXJpdHlJbmZvIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImIzNGYzOWRjZGU2YjhlNzczOWFiZjU3MzUyNjljYzcxIjt9czozNToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uUHJvdmlkZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiMzUyMDEzYmU1YTZhYTAxZmZhM2U5ODQxZGM4MTA2ODMiO31zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5NaWdyYXRpb24iO2E6MTp7czo1OiJub25jZSI7czozMjoiNWRlZTliM2U5NmM3ZmE2OTA3MTFiN2NlZDYxMTRjMzkiO31zOjU0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5NYXJrZXRpbmdDYW1wYWlnbnNSZXBvcnRpbmciO2E6MTp7czo1OiJub25jZSI7czozMjoiODU3OGUzNTM4MDljOWY0MzYzODYyOTU1Y2FlMjVlZTQiO31zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Mb2dWaWV3ZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiYjNmZDUzOWYwY2NjNzEwZjA3MTkyNmNkZDI1ZDY5ZDYiO31zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Mb2dpbkxkYXAiO2E6MTp7czo1OiJub25jZSI7czozMjoiNzlhODI1YTlhYTJlODBhYjk0MjFhY2NhNjk0YzMxZDQiO31zOjQ2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Kc1RyYWNrZXJGb3JjZUFzeW5jIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjhlNWEwNjE5YWZiMGE0OWRmYWYwMGQ4ODgyOTc2NTM5Ijt9czo0MjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uSnNUcmFja2VyQ3VzdG9tIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImUzYjUzZjYwYWQzZGFmNGZiY2MzYWExY2NjZmQxOGZjIjt9czo0NDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uSW52YWxpZGF0ZVJlcG9ydHMiO2E6MTp7czo1OiJub25jZSI7czozMjoiZTAxOGYwYmQ0ZjgxYjcwOGYzN2NhNWQ2ODUzMzkyNDkiO31zOjM1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Gb3JjZVNTTCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI5OTlhNjRmY2E5ZmQ0YmU0OWZkMjVhNWZmZDRjYTY1ZiI7fXM6NDY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRldmljZURldGVjdG9yQ2FjaGUiO2E6MTp7czo1OiJub25jZSI7czozMjoiNjYzMTM5OTQxNzQyMTQ5ZjcyYmIyYWMwMjU0ZjYyZjAiO31zOjQ1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DdXN0b21UcmFuc2xhdGlvbnMiO2E6MTp7czo1OiJub25jZSI7czozMjoiYzRiMTY5ZjJlMmJhYjI3M2RiYmViZmE4OGRmOTdkNDkiO31zOjM2OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5CYW5kd2lkdGgiO2E6MTp7czo1OiJub25jZSI7czozMjoiZjUwMDRmZTk4MjdiYWQyODJkMmRlOTk2ZTIzZjFmYmMiO31zOjU3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Bbm9ueW1vdXNQaXdpa1VzYWdlTWVhc3VyZW1lbnQiO2E6MTp7czo1OiJub25jZSI7czozMjoiZGNiMjJlNmIyZDQzODg2MjA2NDFkODBlZmM2NjRhN2IiO31zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Qcm90ZWN0VHJhY2tJRCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIwYmUwZGQ4ODU5OTNlZmUxZjM3YjAxZDg1ZjFmYWJlYyI7fXM6Mzc6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRhdGFFeHBvcnQiO2E6MTp7czo1OiJub25jZSI7czozMjoiODU5MzczYzBiMjY4MTkyZTliY2NkMjg5ZGU2YmE1ZmIiO31zOjM3OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5FeHRyYVRvb2xzIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjljYjlhODJjNTZiMjU3YzhlMjI5YmI3NmU4YzQ2ZGQyIjt9czozODoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uSVAyTG9jYXRpb24iO2E6MTp7czo1OiJub25jZSI7czozMjoiZWRjOTU2MmM2OTUwNDI0MzU4NDYyOGZjN2Q0N2E0NzIiO31zOjQ0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5IaWRlUGFzc3dvcmRSZXNldCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJkZDFlYmY0Njg3OGZiZWIyMmI3MjFkYWY5OWM5Nzg3MCI7fXM6NDU6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRpc2FibGVVcmxEZWNvZGluZyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI0ZjY4MTg2NWYxZDY3YjM5ZDMxNmIxMmY2ZDRjNGM1MCI7fXM6MzM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNpZ251cCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJhMDYyZjQ0ZTk3MzY5ZDc1ZDNmNGM2NDZjNzEzMTIxNSI7fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNob3J0Y29kZVRyYWNrZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiZjJmYWRlNzM4NGFkMmE5ZWE2MDUxNmE2OGJlMDAwZjMiO31zOjM4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5WaXBEZXRlY3RvciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJhNWI2Yzk2MTdlZGQzMWM3N2I4NjFjYjA0YjQzODZmNSI7fXM6NDY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkVtYWlsUmVwb3J0RXh0ZW5kZWQiO2E6MTp7czo1OiJub25jZSI7czozMjoiMjUxYjcwMDBkYTM5MTllODU4ZWUwNTMwNjg0ZTIyYjMiO31zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Hcm91cFBlcm1pc3Npb25zIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImIyMmVhYzAwYTFiODA1NjRjZTYzZjI0ZDAzYWZiNTgyIjt9czo0MjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRGlzYWJsZVRyYWNraW5nIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjkwZWY1NDBhNTFkMTBhY2M5YTVmZGRjYTQ4NmU3YWMwIjt9czozNzoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQWpheE9wdE91dCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIxYTQ2ZmJhN2I0YmM0M2I5Y2M2MjgxNGRiYWU4MTE3NiI7fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlBlcmZvcm1hbmNlQXVkaXQiO2E6MTp7czo1OiJub25jZSI7czozMjoiMmRjMWYzNjMwZmJlZmQ3MTJlOThkOTM1MDI0NGRkYWMiO31zOjQ4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5SZXJJbnRyYW5ldFN1Ym5ldHdvcmsiO2E6MTp7czo1OiJub25jZSI7czozMjoiYmZlOGUyNzg4MDk5M2Q3NDQwNmNhNjE2YjNlZWJmZTAiO31zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5BdXRob3JTZWdtZW50cyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI1MjQ1YjM1MGEwNThjYTQ0OGE0MjI0ZTIzMjZlMGYwYSI7fXM6MzU6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLklQMlByb3h5IjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjA1NWViOTk1MzgwOTMzNzgwNGJkMzU3MTM4NTVlNTZlIjt9czo0OToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uVHJhY2tpbmdDb2RlQ3VzdG9taXplciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJiNGRiYzAzNTkyMzgzMTEwMDMxODc1YzdjNzE1NTI2ZSI7fXM6NDg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNpdGVBY2Nlc3NQcm92aXNpb25lciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI0YTg1ZjNhNWJlMDY1ODc5NmZjM2YyZWMzN2FlYzZmNiI7fXM6MzI6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlNldmVuIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjcyMTZjNzAyOWUxYjAzODliOWY5NGQ5MTE3Yzc3YTJiIjt9czozODoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ2FtcHVzR2VvSVAiO2E6MTp7czo1OiJub25jZSI7czozMjoiOWFlZDViNGVjMzkzNTNmMWNjMzhjNzY0ZGNlMzMzYTUiO31zOjQ0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5BZG1pbk5vdGlmaWNhdGlvbiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIwMDk5NzQzYmI3ZWE1YTM5ZDNmZWVlYzJjNDY0MDJjNyI7fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlR3aWxpb1NNUyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI2ZWRiZThhMDFlYWU5ODJhMjAyNWY3NGU2MWI2MDBlYyI7fXM6NDM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkluZGV4YXRpb25WaWV3ZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiNTVhZGRhYjIyOGEwNDk4MDc1ZGZiNGUwZDgyYjEyNWMiO31zOjM5OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5pUGFkRGV0ZWN0b3IiO2E6MTp7czo1OiJub25jZSI7czozMjoiZTRhZmM3NTJmNDc2ZWY4ODdjMjExMTAxMTAxZGIwM2IiO31zOjQyOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DdXN0b21WYXJpYWJsZXMiO2E6MTp7czo1OiJub25jZSI7czozMjoiZjMyYjA2ZTkxNTQzN2VlZjQ5Y2M0ODUwYTY3N2JhY2MiO31zOjU0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Ud2l0dGVyRmVlZFdpZGdldEJ5QW1wZXJhZ2UiO2E6MTp7czo1OiJub25jZSI7czozMjoiOGRmZDI2MDhmNjI4ODUwZDY5OTgxYmUyNDkwZGQzNjEiO31zOjU0OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5TaGFycFNwcmluZ1dpZGdldEJ5QW1wZXJhZ2UiO2E6MTp7czo1OiJub25jZSI7czozMjoiMjM0M2QyYTgyYmVjYThkNWJjNTM2NGI5NzdiZDFhYjMiO31zOjU1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5GYWNlYm9va1BhZ2VXaWRnZXRCeUFtcGVyYWdlIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImRjOTQ0ZDYwMDlkYjUwNDM0NDlmMWYyZDcxOTg0MGFmIjt9czo1MToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ3JhenlFZ2dXaWRnZXRCeUFtcGVyYWdlIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjgzODBjNzhjZTQ4ODVjZGVmZTI2M2RhZDE4NzljMjgxIjt9czo0NjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uTW96V2lkZ2V0QnlBbXBlcmFnZSI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJmNjIzZDU0MWI2ODFjM2NhOGRiZjY5MmZmMjgxYTAxMyI7fXM6NTA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkN1c3RvbURpbWVuc2lvbnNNYW5hZ2VyIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjRiOTViZmM0YTQ1ZjE0OGI4ZTkzMzE5MzhlNTg5ZTFiIjt9czozNDoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uTGl2ZVRhYiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIyOTFjODI3NzdjOTQ0NWU3ZDY4YzJkYzljOWVjYzI0NSI7fXM6NDk6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkltcG9ydEFubm90YXRpb25XaWRnZXQiO2E6MTp7czo1OiJub25jZSI7czozMjoiMDc5ZDAxODEzMTNhNGRmY2JjMjY0MmYzZmI4NDRiNjUiO31zOjQxOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5MYW5ndWFnZVRvb2dsZSI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJhOWNkMDA5MmRlMzA0MmNjMDFjZjQ2MjAxOTYxMDMzNiI7fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkV4Y2x1ZGVCeURETlMiO2E6MTp7czo1OiJub25jZSI7czozMjoiNWM4ODA4Mzc2ZGNlYTM4Zjk3MWY0ZThhODU2ZmE3ZDciO31zOjM4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5GbGFnQ291bnRlciI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJjMzQ2Zjg3ZjI3MDZiNGRiN2ExMTJkY2FjMDAyYTNlOSI7fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLklQUmVwb3J0cyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJjZjhkOWM2Mjk3NGY1ZjM2MDI0MTFmODQ0NmQ1OWU2MiI7fXM6NTI6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlJlc3RyaWN0TGFuZ3VhZ2VTZWxlY3Rpb24iO2E6MTp7czo1OiJub25jZSI7czozMjoiZTA1YjIwOGQ5NDUyYWQ2MjRhYWY5NTM4ZGY1MmY3NTUiO31zOjQ1OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5EZXZpY2VGZWF0dXJlV2ViR0wiO2E6MTp7czo1OiJub25jZSI7czozMjoiZjM0YTUzYTM5MGQ2MWMyNjM0ZWI1ZmE1NzFhZDNlZDgiO31zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5SZWZlcnJlcnNNYW5hZ2VyIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImQ4MGMzMzc1NGNiZjNkOTdlODMyMzljYjYxNzE4OWRiIjt9czo0NjoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRGlhZ25vc3RpY3NFeHRlbmRlZCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiJmYTNhNzRjZDRmOGM5ODc0NzYwNjcxMjU1MDBlYWI0YiI7fXM6NDg6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlF1aWNrRXhjbHVkZVZpc2l0b3JJUCI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI4ZGMzNjA2NTI3YzE5MjA2NGZhZDc4MmU1NzQ3YWIwMiI7fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlByb2ZpbGVBdmF0YXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiZGY5NTFmMGQ0YmQ0NTgxYzQxNTFiZjdhMTIxOGE1NWEiO31zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5QYXNzd29yZFZlcmlmaWVyIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImI1ZWMzM2FiODA2NjkyN2JlZWNlNGZhOTM3Y2E5ZGE2Ijt9czo0MzoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRXhjbHVkZUNvdW50cmllcyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIzNTIwNGI5NTUyYWNjZTg2ZWMwNWJhOTY1NjBhMzhhMSI7fXM6NDQ6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRldmVsb3BtZW50VG9vZ2xlIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImU1OGU0NTY2ZmRiYjBiMTViNzA2OWY1OTFmYTNmYzhmIjt9czo0ODoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ3VzdG9taXNlVHJhbnNsYXRpb25zIjthOjE6e3M6NToibm9uY2UiO3M6MzI6Ijc2ZDMwODkxYTI4OGQ3OGVjY2RlN2RlYzVjZmJmMjZhIjt9czo0MToiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uQ2xhc3NpY0NvdW50ZXIiO2E6MTp7czo1OiJub25jZSI7czozMjoiMzQ5NTA3OThjY2QxZDI5M2IwOGNhMjllZTNkOGM3NjEiO31zOjQwOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5CcmF2ZURldGVjdG9yIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjQxMGUyMzBmODBjYWVmMjgzYmRjZGQzMjBhYWZiYzlmIjt9czo0MzoiTWFya2V0cGxhY2UuZG93bmxvYWRQbHVnaW4uRGV2aWNlUGl4ZWxSYXRpbyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI1MzI4ZGUwMWJjMGM2ZjU1YjA2MWNiZGQ0NjgyOGJjZCI7fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkxvZ2luT0lEQyI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI5MzBlMTUyNGQ5ZDFmZTcwMjdmZmI2MDBhMDU0YzBiYiI7fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRyYWNrZXJEb21haW4iO2E6MTp7czo1OiJub25jZSI7czozMjoiNWMyMjE2OWIxOTliZWI4OWQ3MjlhOWViOTIyZTcyN2QiO31zOjM4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Vc2VyQ29uc29sZSI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIxM2Q5MGEzMDhhOTAyMjI4ZTBjYWFiMWY4MDA4MTJiYyI7fXM6MzY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLkRhcmtUaGVtZSI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIyYmFjYmYzYThmMzMwNzQ0ODMzZTMyZDY0NjNmYTJjMyI7fXM6NDA6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLk9wZW5tb3N0VGhlbWUiO2E6MTp7czo1OiJub25jZSI7czozMjoiM2QzYTE0ZGMyMjUyOWYxMzIyMmIzMmM4ODcyOTI2YmEiO31zOjM4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5Hb29nbGVUaGVtZSI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIyNWQwMjgwOGQ1ZmE1OGMxOGQxNGYwYzI3ZGUyYjUzYiI7fXM6MzM6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLk1vZGVybiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiIzYTMwNjcwZjMxMGMxYjkzOTdmYjQ0NDI3OTVjYzg5NiI7fXM6NDY6Ik1hcmtldHBsYWNlLmRvd25sb2FkUGx1Z2luLlRoZUZhbW91c1NuYWtlSG91c2UiO2E6MTp7czo1OiJub25jZSI7czozMjoiN2FkZjc2YTFmMDgyZTNhZWNkZmJkNDI0MjM2NTNjMDYiO31zOjQ4OiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5BbHRlcm5hdGl2ZVNwYXJrbGluZXMiO2E6MTp7czo1OiJub25jZSI7czozMjoiNDRlNzQxYTdlMGFjYzYwM2RmMGJkOGU5OWIwY2YxOTQiO31zOjQzOiJNYXJrZXRwbGFjZS5kb3dubG9hZFBsdWdpbi5DbGFzc2ljRm9udFRoZW1lIjthOjE6e3M6NToibm9uY2UiO3M6MzI6ImIxYTQ4ZmY5OGFhNTRiNDA4MGFhYzJhMjQzYWI3OTY3Ijt9czo1OiJMb2dpbiI7YToyOntzOjE0OiJyZWRpcmVjdFBhcmFtcyI7YTo1OntzOjY6Im1vZHVsZSI7czoxMToiTWFya2V0cGxhY2UiO3M6NjoiYWN0aW9uIjtzOjEzOiJpbnN0YWxsUGx1Z2luIjtzOjQ6Im1vZGUiO3M6NToiYWRtaW4iO3M6MTA6InBsdWdpbk5hbWUiO3M6OToiRGFya1RoZW1lIjtzOjU6Im5vbmNlIjtzOjMyOiI2ZDkyODFiNDQ4ZDMxY2JhYThjNTg2YTZkZDUzNTBjYyI7fXM6MTY6Imxhc3RQYXNzd29yZEF1dGgiO3M6MTk6IjIwMjQtMDgtMjYgMjA6MDE6NDYiO31zOjE1OiJjb25maXJtUGFzc3dvcmQiO2E6MTp7czo1OiJub25jZSI7czozMjoiNzg1ZGVlYWE5ODliMzgzZjgxOGQ2MmMyODA4MGVmM2EiO31zOjI1OiJNYXJrZXRwbGFjZS5pbnN0YWxsUGx1Z2luIjthOjE6e3M6NToibm9uY2UiO3M6MzI6IjU5MmU5YTYzZjI1YjAyNmM1YjU5N2RmYWQ2Mjk0YjFlIjt9czozMToiQ29yZVBsdWdpbnNBZG1pbi5hY3RpdmF0ZVBsdWdpbiI7YToxOntzOjU6Im5vbmNlIjtzOjMyOiI2NTY4MDFkYjdlNmUzOWE0NmE2YzM0MmQ2YTc1NzE2YyI7fX0=\";}'),
('11fb61ef5da4a285fea2d40a088d64b770b0748b47182f72f1cbe3f9a2569a2c9052abc1ff1b4aab3af0a9fad8ce77845231f5bad8f3fd9638e012fc177b5c7e', 1724759751, 1209600, 'a:1:{s:4:\"data\";s:500:\"YTo2OntzOjEyOiJub3RpZmljYXRpb24iO2E6MTp7czoxMzoibm90aWZpY2F0aW9ucyI7YTowOnt9fXM6NDoiX19aRiI7YToxOntzOjExOiJMb2dpbi5sb2dpbiI7YToxOntzOjQ6IkVOVlQiO2E6MTp7czo1OiJub25jZSI7aToxNzI0NzYwMTk1O319fXM6OToidXNlci5uYW1lIjtzOjY6Imhpc3BtZCI7czoyMjoidHdvZmFjdG9yYXV0aC52ZXJpZmllZCI7aTowO3M6MjA6InVzZXIudG9rZW5fYXV0aF90ZW1wIjtzOjMyOiIwNzc1NjY0ZTA1ODkwYTY2YWFlYWYzNmM0ZjExNzQ0YiI7czoxMjoic2Vzc2lvbi5pbmZvIjthOjM6e3M6MjoidHMiO2k6MTcyNDc1OTcyMTtzOjEwOiJyZW1lbWJlcmVkIjtiOjA7czoxMDoiZXhwaXJhdGlvbiI7aToxNzI0NzYzMzUxO319\";}'),
('6d9730380c14059a62911fcda97a0c2711b175d0df7844257daf698515264ac12533b78263f2501f2c8a8051e9497e8bbb54f4bd009a0b37b97b41badc41d02c', 1724702435, 1209600, 'a:1:{s:4:\"data\";s:8:\"YTowOnt9\";}');

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
(1, 'HISPMD', 'https://hispmd.merqconsultancy.org', '2024-08-25 00:00:00', 0, 1, '', '', 'Africa/Addis_Ababa', 'ETB', 0, '', '', '', '', '', 'website', 0, 'anonymous');

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
(1, 'anonymous', 'anonymous default token', '0598396b5172f542eef78ae63d2685622d9ec06bd880129fb948c86bc2a209d4a150b6504fa9afd042ae12e3bd30740ea7412a0f8000b160696e16a93f5715f4', 'sha512', 0, '2024-08-27 11:53:14', '2024-08-26 19:26:35', NULL, 0);

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
-- Indexes for table `matomo_archive_blob_2024_08`
--
ALTER TABLE `matomo_archive_blob_2024_08`
  ADD PRIMARY KEY (`idarchive`,`name`),
  ADD KEY `index_period_archived` (`period`,`ts_archived`);

--
-- Indexes for table `matomo_archive_invalidations`
--
ALTER TABLE `matomo_archive_invalidations`
  ADD PRIMARY KEY (`idinvalidation`),
  ADD KEY `index_idsite_dates_period_name` (`idsite`,`date1`,`period`);

--
-- Indexes for table `matomo_archive_numeric_2024_08`
--
ALTER TABLE `matomo_archive_numeric_2024_08`
  ADD PRIMARY KEY (`idarchive`,`name`),
  ADD KEY `index_idsite_dates_period` (`idsite`,`date1`,`date2`,`period`,`name`(6)),
  ADD KEY `index_period_archived` (`period`,`ts_archived`);

--
-- Indexes for table `matomo_archive_numeric_2024_09`
--
ALTER TABLE `matomo_archive_numeric_2024_09`
  ADD PRIMARY KEY (`idarchive`,`name`),
  ADD KEY `index_idsite_dates_period` (`idsite`,`date1`,`date2`,`period`,`name`(6)),
  ADD KEY `index_period_archived` (`period`,`ts_archived`);

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
  MODIFY `idaction` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matomo_log_link_visit_action`
--
ALTER TABLE `matomo_log_link_visit_action`
  MODIFY `idlink_va` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matomo_log_profiling`
--
ALTER TABLE `matomo_log_profiling`
  MODIFY `idprofiling` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matomo_log_visit`
--
ALTER TABLE `matomo_log_visit`
  MODIFY `idvisit` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matomo_plugin_setting`
--
ALTER TABLE `matomo_plugin_setting`
  MODIFY `idplugin_setting` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

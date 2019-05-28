-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 10:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yavatan_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `r_city`
--

CREATE TABLE `r_city` (
  `city_ID` int(10) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_rgn` varchar(20) NOT NULL,
  `city_lat` varchar(255) NOT NULL,
  `city_lng` varchar(255) NOT NULL,
  `city_stat` bit(1) NOT NULL DEFAULT b'1',
  `city_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_city`
--

INSERT INTO `r_city` (`city_ID`, `city_name`, `city_rgn`, `city_lat`, `city_lng`, `city_stat`, `city_timestamp`) VALUES
(1, 'Province of Zamboanga del Norte, Zamboanga del Norte', 'Region 9 - Western M', '8.388628', '123.168888', b'1', '2018-12-05 10:19:06'),
(2, 'Dapitan City, Zamboanga del Norte', 'Region 9 - Western M', '8.625319', '123.394571', b'1', '2018-12-05 10:19:06'),
(3, 'Dipolog City, Zamboanga del Norte', 'Region 9 - Western M', '8.514274', '123.337392', b'1', '2018-12-05 10:19:06'),
(4, 'Leon B. Postigo (Bacungan), Zamboanga del Norte', 'Region 9 - Western M', '8.06985', '122.943767', b'1', '2018-12-05 10:19:06'),
(5, 'Baliguian, Zamboanga del Norte', 'Region 9 - Western M', '7.831428', '122.220006', b'1', '2018-12-05 10:19:06'),
(6, 'Godod, Zamboanga del Norte', 'Region 9 - Western M', '7.985772', '122.831015', b'1', '2018-12-05 10:19:06'),
(7, 'Gutalac, Zamboanga del Norte', 'Region 9 - Western M', '7.950032', '122.37876', b'1', '2018-12-05 10:19:06'),
(8, 'Jose Dalman (Ponot), Zamboanga del Norte', 'Region 9 - Western M', '8.380313', '123.056391', b'1', '2018-12-05 10:19:06'),
(9, 'Kalawit, Zamboanga del Norte', 'Region 9 - Western M', '7.900479', '122.514644', b'1', '2018-12-05 10:19:06'),
(10, 'Katipunan, Zamboanga del Norte', 'Region 9 - Western M', '8.396883', '123.281256', b'1', '2018-12-05 10:19:06'),
(11, 'La Libertad, Zamboanga del Norte', 'Region 9 - Western M', '8.475929', '123.539208', b'1', '2018-12-05 10:19:06'),
(12, 'Labason, Zamboanga del Norte', 'Region 9 - Western M', '8.051532', '122.514644', b'1', '2018-12-05 10:19:06'),
(13, 'Liloy, Zamboanga del Norte', 'Region 9 - Western M', '8.073248', '122.695547', b'1', '2018-12-05 10:19:06'),
(14, 'Manukan, Zamboanga del Norte', 'Region 9 - Western M', '8.451728', '123.101406', b'1', '2018-12-05 10:19:06'),
(15, 'Mutia, Zamboanga del Norte', 'Region 9 - Western M', '8.383888', '123.516805', b'1', '2018-12-05 10:19:06'),
(16, 'Piñan, Zamboanga del Norte', 'Region 9 - Western M', '8.40915', '123.449564', b'1', '2018-12-05 10:19:06'),
(17, 'Polanco, Zamboanga del Norte', 'Region 9 - Western M', '8.488902', '123.404711', b'1', '2018-12-05 10:19:06'),
(18, 'Pres. Manuel A. Roxas, Zamboanga del Norte', 'Region 9 - Western M', '8.451573', '123.202612', b'1', '2018-12-05 10:19:06'),
(19, 'Rizal, Zamboanga del Norte', 'Region 9 - Western M', '8.622413', '123.521687', b'1', '2018-12-05 10:19:06'),
(20, 'Salug, Zamboanga del Norte', 'Region 9 - Western M', '8.065175', '122.785879', b'1', '2018-12-05 10:19:06'),
(21, 'Sergio Osmeña Sr., Zamboanga del Norte', 'Region 9 - Western M', '8.271197', '123.213851', b'1', '2018-12-05 10:19:06'),
(22, 'Siayan, Zamboanga del Norte', 'Region 9 - Western M', '8.074426', '123.101406', b'1', '2018-12-05 10:19:06'),
(23, 'Sibuco, Zamboanga del Norte', 'Region 9 - Western M', '7.312072', '122.129184', b'1', '2018-12-05 10:19:06'),
(24, 'Sibutad, Zamboanga del Norte', 'Region 9 - Western M', '8.612411', '123.494397', b'1', '2018-12-05 10:19:06'),
(25, 'Sindangan, Zamboanga del Norte', 'Region 9 - Western M', '8.233377', '123.011357', b'1', '2018-12-05 10:19:06'),
(26, 'Siocon, Zamboanga del Norte', 'Region 9 - Western M', '7.663558', '122.197308', b'1', '2018-12-05 10:19:06'),
(27, 'Sirawai, Zamboanga del Norte', 'Region 9 - Western M', '7.550623', '122.197308', b'1', '2018-12-05 10:19:06'),
(28, 'Tampilisan, Zamboanga del Norte', 'Region 9 - Western M', '7.972483', '122.661652', b'1', '2018-12-05 10:19:06'),
(29, 'Province of Zamboanga del Sur, Zamboanga del Sur', 'Region 9 - Western M', '7.838305', '123.296666', b'1', '2018-12-05 10:19:06'),
(30, 'Pagadian City, Zamboanga del Sur', 'Region 9 - Western M', '7.839703', '123.434344', b'1', '2018-12-05 10:19:06'),
(31, 'Zamboanga City, Zamboanga del Sur', 'Region 9 - Western M', '6.921442', '122.079027', b'1', '2018-12-05 10:19:06'),
(32, 'Aurora, Zamboanga del Sur', 'Region 9 - Western M', '7.95458', '123.595192', b'1', '2018-12-05 10:19:06'),
(33, 'Bayog, Zamboanga del Sur', 'Region 9 - Western M', '7.928149', '123.056391', b'1', '2018-12-05 10:19:06'),
(34, 'Dimataling, Zamboanga del Sur', 'Region 9 - Western M', '7.511127', '123.346613', b'1', '2018-12-05 10:19:06'),
(35, 'Dinas, Zamboanga del Sur', 'Region 9 - Western M', '7.605364', '123.326167', b'1', '2018-12-05 10:19:06'),
(36, 'Dumalinao, Zamboanga del Sur', 'Region 9 - Western M', '7.787917', '123.371057', b'1', '2018-12-05 10:19:06'),
(37, 'Dumingag, Zamboanga del Sur', 'Region 9 - Western M', '8.18754', '123.303714', b'1', '2018-12-05 10:19:06'),
(38, 'Guipos, Zamboanga del Sur', 'Region 9 - Western M', '7.746185', '123.314941', b'1', '2018-12-05 10:19:06'),
(39, 'Josefina, Zamboanga del Sur', 'Region 9 - Western M', '8.207115', '123.521873', b'1', '2018-12-05 10:19:06'),
(40, 'Kumalarang, Zamboanga del Sur', 'Region 9 - Western M', '7.770299', '123.146399', b'1', '2018-12-05 10:19:06'),
(41, 'Labangan, Zamboanga del Sur', 'Region 9 - Western M', '7.921048', '123.449564', b'1', '2018-12-05 10:19:06'),
(42, 'Lakewood, Zamboanga del Sur', 'Region 9 - Western M', '7.882643', '123.146399', b'1', '2018-12-05 10:19:06'),
(43, 'Lapuyan, Zamboanga del Sur', 'Region 9 - Western M', '7.691619', '123.191372', b'1', '2018-12-05 10:19:06'),
(44, 'Mahayag, Zamboanga del Sur', 'Region 9 - Western M', '8.094153', '123.451311', b'1', '2018-12-05 10:19:06'),
(45, 'Margosatubig, Zamboanga del Sur', 'Region 9 - Western M', '7.571322', '123.180131', b'1', '2018-12-05 10:19:06'),
(46, 'Midsalip, Zamboanga del Sur', 'Region 9 - Western M', '8.024623', '123.236325', b'1', '2018-12-05 10:19:06'),
(47, 'Molave, Zamboanga del Sur', 'Region 9 - Western M', '8.104186', '123.494397', b'1', '2018-12-05 10:19:06'),
(48, 'Pitogo, Zamboanga del Sur', 'Region 9 - Western M', '7.446333', '123.337392', b'1', '2018-12-05 10:19:06'),
(49, 'Ramon Magsaysay (Liargo), Zamboanga del Sur', 'Region 9 - Western M', '8.00423', '123.460774', b'1', '2018-12-05 10:19:06'),
(50, 'San Miguel, Zamboanga del Sur', 'Region 9 - Western M', '7.683811', '123.281256', b'1', '2018-12-05 10:19:06'),
(51, 'San Pablo, Zamboanga del Sur', 'Region 9 - Western M', '7.68041', '123.42714', b'1', '2018-12-05 10:19:06'),
(52, 'Sominot (DonMarianoMarcos), Zamboanga del Sur', 'Region 9 - Western M', '8.03949', '123.382276', b'1', '2018-12-05 10:19:06'),
(53, 'Tabina, Zamboanga del Sur', 'Region 9 - Western M', '7.420188', '123.42714', b'1', '2018-12-05 10:19:06'),
(54, 'Tambulig, Zamboanga del Sur', 'Region 9 - Western M', '8.062581', '123.539208', b'1', '2018-12-05 10:19:06'),
(55, 'Tigbao, Zamboanga del Sur', 'Region 9 - Western M', '7.833241', '123.281256', b'1', '2018-12-05 10:19:06'),
(56, 'Tukuran, Zamboanga del Sur', 'Region 9 - Western M', '7.912955', '123.539208', b'1', '2018-12-05 10:19:06'),
(57, 'Vincenzo A. Sagun, Zamboanga del Sur', 'Region 9 - Western M', '7.51734', '123.157644', b'1', '2018-12-05 10:19:06'),
(58, 'Province of Zamboanga Sibugay, Zamboanga Sibugay', 'Region 9 - Western M', '7.522525', '122.310752', b'1', '2018-12-05 10:19:06'),
(59, 'Alicia, Zamboanga Sibugay', 'Region 9 - Western M', '7.52418', '122.966302', b'1', '2018-12-05 10:19:06'),
(60, 'Buug, Zamboanga Sibugay', 'Region 9 - Western M', '7.740725', '123.056391', b'1', '2018-12-05 10:19:06'),
(61, 'Diplahan, Zamboanga Sibugay', 'Region 9 - Western M', '7.74854', '122.966302', b'1', '2018-12-05 10:19:06'),
(62, 'Imelda, Zamboanga Sibugay', 'Region 9 - Western M', '7.652526', '122.947893', b'1', '2018-12-05 10:19:06'),
(63, 'Ipil, Zamboanga Sibugay', 'Region 9 - Western M', '7.785836', '122.588174', b'1', '2018-12-05 10:19:06'),
(64, 'Kabasalan, Zamboanga Sibugay', 'Region 9 - Western M', '7.790212', '122.783317', b'1', '2018-12-05 10:19:06'),
(65, 'Mabuhay, Zamboanga Sibugay', 'Region 9 - Western M', '7.389041', '122.909955', b'1', '2018-12-05 10:19:06'),
(66, 'Malangas, Zamboanga Sibugay', 'Region 9 - Western M', '7.624022', '123.000095', b'1', '2018-12-05 10:19:06'),
(67, 'Naga, Zamboanga Sibugay', 'Region 9 - Western M', '7.807089', '122.701264', b'1', '2018-12-05 10:19:06'),
(68, 'Olutanga, Zamboanga Sibugay', 'Region 9 - Western M', '7.340565', '122.819733', b'1', '2018-12-05 10:19:06'),
(69, 'Payao, Zamboanga Sibugay', 'Region 9 - Western M', '7.582601', '122.842474', b'1', '2018-12-05 10:19:06'),
(70, 'Roseller T. Lim, Zamboanga Sibugay', 'Region 9 - Western M', '7.719853', '122.424074', b'1', '2018-12-05 10:19:06'),
(71, 'Siay, Zamboanga Sibugay', 'Region 9 - Western M', '7.718855', '122.876131', b'1', '2018-12-05 10:19:06'),
(72, 'Talusan, Zamboanga Sibugay', 'Region 9 - Western M', '7.335029', '122.887407', b'1', '2018-12-05 10:19:06'),
(73, 'Titay, Zamboanga Sibugay', 'Region 9 - Western M', '7.865342', '122.593828', b'1', '2018-12-05 10:19:06'),
(74, 'Tungawan, Zamboanga Sibugay', 'Region 9 - Western M', '7.590152', '122.401419', b'1', '2018-12-05 10:19:06'),
(75, 'Province of Bukidnon, Bukidnon', 'Region 10 (Northern ', '8.051505', '124.922995', b'1', '2018-12-05 10:19:06'),
(76, 'Malaybalay City, Bukidnon', 'Region 10 (Northern ', '8.130604', '125.127654', b'1', '2018-12-05 10:19:06'),
(77, 'Valencia City, Bukidnon', 'Region 10 (Northern ', '7.86319', '125.170874', b'1', '2018-12-05 10:19:06'),
(78, 'Baungon, Bukidnon', 'Region 10 (Northern ', '8.263364', '124.66353', b'1', '2018-12-05 10:19:06'),
(79, 'Cabanglasan, Bukidnon', 'Region 10 (Northern ', '8.087258', '125.324677', b'1', '2018-12-05 10:19:06'),
(80, 'Damulog, Bukidnon', 'Region 10 (Northern ', '7.460203', '124.97271', b'1', '2018-12-05 10:19:06'),
(81, 'Dangcagan, Bukidnon', 'Region 10 (Northern ', '7.602546', '125.016787', b'1', '2018-12-05 10:19:06'),
(82, 'Don Carlos, Bukidnon', 'Region 10 (Northern ', '7.688091', '124.884487', b'1', '2018-12-05 10:19:06'),
(83, 'Impasug-ong, Bukidnon', 'Region 10 (Northern ', '8.388542', '125.082859', b'1', '2018-12-05 10:19:06'),
(84, 'Kadingilan, Bukidnon', 'Region 10 (Northern ', '7.50474', '124.884487', b'1', '2018-12-05 10:19:06'),
(85, 'Kalilangan, Bukidnon', 'Region 10 (Northern ', '7.773934', '124.751981', b'1', '2018-12-05 10:19:06'),
(86, 'Kibawe, Bukidnon', 'Region 10 (Northern ', '7.488783', '125.060841', b'1', '2018-12-05 10:19:06'),
(87, 'Kitaotao, Bukidnon', 'Region 10 (Northern ', '7.594443', '125.104871', b'1', '2018-12-05 10:19:06'),
(88, 'Lantapan, Bukidnon', 'Region 10 (Northern ', '8.047966', '124.97271', b'1', '2018-12-05 10:19:06'),
(89, 'Libona, Bukidnon', 'Region 10 (Northern ', '8.38068', '124.704146', b'1', '2018-12-05 10:19:06'),
(90, 'Malitbog, Bukidnon', 'Region 10 (Northern ', '8.529781', '124.97271', b'1', '2018-12-05 10:19:06'),
(91, 'Manolo Fortich, Bukidnon', 'Region 10 (Northern ', '8.390019', '124.884487', b'1', '2018-12-05 10:19:06'),
(92, 'Maramag, Bukidnon', 'Region 10 (Northern ', '7.790099', '124.97271', b'1', '2018-12-05 10:19:06'),
(93, 'Pangantucan, Bukidnon', 'Region 10 (Northern ', '7.83934', '124.840341', b'1', '2018-12-05 10:19:06'),
(94, 'Quezon, Bukidnon', 'Region 10 (Northern ', '7.716454', '125.170874', b'1', '2018-12-05 10:19:06'),
(95, 'San Fernando, Bukidnon', 'Region 10 (Northern ', '7.846369', '125.346625', b'1', '2018-12-05 10:19:06'),
(96, 'Sumilao, Bukidnon', 'Region 10 (Northern ', '8.345058', '124.976724', b'1', '2018-12-05 10:19:06'),
(97, 'Talakag, Bukidnon', 'Region 10 (Northern ', '8.019781', '124.789918', b'1', '2018-12-05 10:19:06'),
(98, 'Province of Camiguin, Camiguin', 'Region 10 (Northern ', '9.173216', '124.729877', b'1', '2018-12-05 10:19:06'),
(99, 'Catarman, Camiguin', 'Region 10 (Northern ', '9.169821', '124.674591', b'1', '2018-12-05 10:19:06'),
(100, 'Guinsiliban, Camiguin', 'Region 10 (Northern ', '9.116045', '124.779603', b'1', '2018-12-05 10:19:06'),
(101, 'Mahinog, Camiguin', 'Region 10 (Northern ', '9.160185', '124.763031', b'1', '2018-12-05 10:19:06'),
(102, 'Mambajao, Camiguin', 'Region 10 (Northern ', '9.232168', '124.707766', b'1', '2018-12-05 10:19:06'),
(103, 'Sagay, Camiguin', 'Region 10 (Northern ', '9.124948', '124.740929', b'1', '2018-12-05 10:19:06'),
(104, 'Province of Lanao del Norte, Lanao del Norte', 'Region 10 (Northern ', '7.872181', '123.885775', b'1', '2018-12-05 10:19:06'),
(105, 'Iligan City, Lanao del Norte', 'Region 10 (Northern ', '8.228021', '124.245242', b'1', '2018-12-05 10:19:06'),
(106, 'Bacolod, Lanao del Norte', 'Region 10 (Northern ', '8.147541', '124.030725', b'1', '2018-12-05 10:19:06'),
(107, 'Baloi, Lanao del Norte', 'Region 10 (Northern ', '8.109895', '124.231044', b'1', '2018-12-05 10:19:06'),
(108, 'Baroy, Lanao del Norte', 'Region 10 (Northern ', '7.979742', '123.829964', b'1', '2018-12-05 10:19:06'),
(109, 'Kapatagan, Lanao del Norte', 'Region 10 (Northern ', '7.867764', '123.72942', b'1', '2018-12-05 10:19:06'),
(110, 'Kauswagan, Lanao del Norte', 'Region 10 (Northern ', '8.159856', '124.097547', b'1', '2018-12-05 10:19:06'),
(111, 'Kolambugan, Lanao del Norte', 'Region 10 (Northern ', '8.085474', '123.896933', b'1', '2018-12-05 10:19:06'),
(112, 'Lala, Lanao del Norte', 'Region 10 (Northern ', '7.948598', '123.762947', b'1', '2018-12-05 10:19:06'),
(113, 'Linamon, Lanao del Norte', 'Region 10 (Northern ', '8.168012', '124.158758', b'1', '2018-12-05 10:19:06'),
(114, 'Magsaysay, Lanao del Norte', 'Region 10 (Northern ', '8.02742', '123.919245', b'1', '2018-12-05 10:19:06'),
(115, 'Maigo, Lanao del Norte', 'Region 10 (Northern ', '8.114428', '123.986149', b'1', '2018-12-05 10:19:06'),
(116, 'Matungao, Lanao del Norte', 'Region 10 (Northern ', '8.11623', '124.16432', b'1', '2018-12-05 10:19:06'),
(117, 'Munai, Lanao del Norte', 'Region 10 (Northern ', '7.946737', '124.086413', b'1', '2018-12-05 10:19:06'),
(118, 'Nunungan, Lanao del Norte', 'Region 10 (Northern ', '7.830933', '123.930399', b'1', '2018-12-05 10:19:06'),
(119, 'Pantao Ragat, Lanao del Norte', 'Region 10 (Northern ', '8.054204', '124.13094', b'1', '2018-12-05 10:19:06'),
(120, 'Pantar, Lanao del Norte', 'Region 10 (Northern ', '8.070573', '124.253274', b'1', '2018-12-05 10:19:06'),
(121, 'Poona Piagapo, Lanao del Norte', 'Region 10 (Northern ', '8.087382', '124.075278', b'1', '2018-12-05 10:19:06'),
(122, 'Salvador, Lanao del Norte', 'Region 10 (Northern ', '7.901115', '123.874615', b'1', '2018-12-05 10:19:06'),
(123, 'Sapad, Lanao del Norte', 'Region 10 (Northern ', '7.830739', '123.829964', b'1', '2018-12-05 10:19:06'),
(124, 'Sultan Naga Dimaporo (Karomatan), Lanao del Norte', 'Region 10 (Northern ', '7.782976', '123.740597', b'1', '2018-12-05 10:19:06'),
(125, 'Tagoloan, Lanao del Norte', 'Region 10 (Northern ', '8.142891', '124.275499', b'1', '2018-12-05 10:19:06'),
(126, 'Tangcal, Lanao del Norte', 'Region 10 (Northern ', '7.954984', '123.997295', b'1', '2018-12-05 10:19:06'),
(127, 'Tubod, Lanao del Norte', 'Region 10 (Northern ', '7.994267', '123.874615', b'1', '2018-12-05 10:19:06'),
(128, 'Province of Misamis Occidental, Misamis Occidental', 'Region 10 (Northern ', '8.33749', '123.707062', b'1', '2018-12-05 10:19:06'),
(129, 'Oroquieta City, Misamis Occidental', 'Region 10 (Northern ', '8.459527', '123.80065', b'1', '2018-12-05 10:19:06'),
(130, 'Ozamiz City, Misamis Occidental', 'Region 10 (Northern ', '8.162411', '123.774119', b'1', '2018-12-05 10:19:06'),
(131, 'Tangub City, Misamis Occidental', 'Region 10 (Northern ', '8.09592', '123.684699', b'1', '2018-12-05 10:19:06'),
(132, 'Aloran, Misamis Occidental', 'Region 10 (Northern ', '8.414043', '123.815938', b'1', '2018-12-05 10:19:06'),
(133, 'Baliangao, Misamis Occidental', 'Region 10 (Northern ', '8.618095', '123.628767', b'1', '2018-12-05 10:19:06'),
(134, 'Bonifacio, Misamis Occidental', 'Region 10 (Northern ', '8.104228', '123.595192', b'1', '2018-12-05 10:19:06'),
(135, 'Calamba, Misamis Occidental', 'Region 10 (Northern ', '8.51327', '123.639956', b'1', '2018-12-05 10:19:06'),
(136, 'Clarin, Misamis Occidental', 'Region 10 (Northern ', '8.205338', '123.801203', b'1', '2018-12-05 10:19:06'),
(137, 'Concepcion, Misamis Occidental', 'Region 10 (Northern ', '8.404613', '123.595192', b'1', '2018-12-05 10:19:06'),
(138, 'Don Victoriano Chiongbian (Don Mariano Marcos), Misamis Occidental', 'Region 10 (Northern ', '8.25424', '123.595192', b'1', '2018-12-05 10:19:06'),
(139, 'Jimenez, Misamis Occidental', 'Region 10 (Northern ', '8.322755', '123.762947', b'1', '2018-12-05 10:19:06'),
(140, 'Lopez Jaena, Misamis Occidental', 'Region 10 (Northern ', '8.526724', '123.750351', b'1', '2018-12-05 10:19:06'),
(141, 'Panaon, Misamis Occidental', 'Region 10 (Northern ', '8.355995', '123.80763', b'1', '2018-12-05 10:19:06'),
(142, 'Plaridel, Misamis Occidental', 'Region 10 (Northern ', '8.611475', '123.695881', b'1', '2018-12-05 10:19:06'),
(143, 'Sapang Dalaga, Misamis Occidental', 'Region 10 (Northern ', '8.528146', '123.583998', b'1', '2018-12-05 10:19:06'),
(144, 'Sinacaban, Misamis Occidental', 'Region 10 (Northern ', '8.299722', '123.80763', b'1', '2018-12-05 10:19:06'),
(145, 'Tudela, Misamis Occidental', 'Region 10 (Northern ', '8.247742', '123.762947', b'1', '2018-12-05 10:19:06'),
(146, 'Province of Misamis Oriental, Misamis Oriental', 'Region 10 (Northern ', '8.504556', '124.621959', b'1', '2018-12-05 10:19:06'),
(147, 'El Salvador City, Misamis Oriental', 'Region 10 (Northern ', '8.528143', '124.517656', b'1', '2018-12-05 10:19:06'),
(148, 'Gingoog City, Misamis Oriental', 'Region 10 (Northern ', '8.82299', '125.097636', b'1', '2018-12-05 10:19:06'),
(149, 'Cagayan De Oro City, Misamis Oriental', 'Region 10 (Northern ', '8.454236', '124.631898', b'1', '2018-12-05 10:19:06'),
(150, 'Alubijid, Misamis Oriental', 'Region 10 (Northern ', '8.500802', '124.430916', b'1', '2018-12-05 10:19:06'),
(151, 'Balingasag, Misamis Oriental', 'Region 10 (Northern ', '8.744484', '124.781612', b'1', '2018-12-05 10:19:06'),
(152, 'Balingoan, Misamis Oriental', 'Region 10 (Northern ', '9.004017', '124.847268', b'1', '2018-12-05 10:19:06'),
(153, 'Binuangan, Misamis Oriental', 'Region 10 (Northern ', '8.919581', '124.783746', b'1', '2018-12-05 10:19:06'),
(154, 'Claveria, Misamis Oriental', 'Region 10 (Northern ', '8.678782', '124.97271', b'1', '2018-12-05 10:19:06'),
(155, 'Gitagum, Misamis Oriental', 'Region 10 (Northern ', '8.561386', '124.386539', b'1', '2018-12-05 10:19:06'),
(156, 'Initao, Misamis Oriental', 'Region 10 (Northern ', '8.480517', '124.353242', b'1', '2018-12-05 10:19:06'),
(157, 'Jasaan, Misamis Oriental', 'Region 10 (Northern ', '8.649817', '124.754832', b'1', '2018-12-05 10:19:06'),
(158, 'Kinoguitan, Misamis Oriental', 'Region 10 (Northern ', '8.980964', '124.812738', b'1', '2018-12-05 10:19:06'),
(159, 'Lagonglong, Misamis Oriental', 'Region 10 (Northern ', '8.81524', '124.829301', b'1', '2018-12-05 10:19:06'),
(160, 'Laguindingan, Misamis Oriental', 'Region 10 (Northern ', '8.594347', '124.430916', b'1', '2018-12-05 10:19:06'),
(161, 'Libertad, Misamis Oriental', 'Region 10 (Northern ', '8.531416', '124.358792', b'1', '2018-12-05 10:19:06'),
(162, 'Lugait, Misamis Oriental', 'Region 10 (Northern ', '8.348015', '124.275499', b'1', '2018-12-05 10:19:06'),
(163, 'Magsaysay, Misamis Oriental', 'Region 10 (Northern ', '8.962172', '125.203856', b'1', '2018-12-05 10:19:06'),
(164, 'Manticao, Misamis Oriental', 'Region 10 (Northern ', '8.368395', '124.353242', b'1', '2018-12-05 10:19:06'),
(165, 'Medina, Misamis Oriental', 'Region 10 (Northern ', '8.909828', '125.011365', b'1', '2018-12-05 10:19:06'),
(166, 'Naawan, Misamis Oriental', 'Region 10 (Northern ', '8.434876', '124.34214', b'1', '2018-12-05 10:19:06'),
(167, 'Opol, Misamis Oriental', 'Region 10 (Northern ', '8.435899', '124.519604', b'1', '2018-12-05 10:19:06'),
(168, 'Salay, Misamis Oriental', 'Region 10 (Northern ', '8.860424', '124.789269', b'1', '2018-12-05 10:19:06'),
(169, 'Sugbongcogon, Misamis Oriental', 'Region 10 (Northern ', '8.959145', '124.786507', b'1', '2018-12-05 10:19:06'),
(170, 'Tagoloan , Misamis Oriental', 'Region 10 (Northern ', '8.538018', '124.788949', b'1', '2018-12-05 10:19:06'),
(171, 'Talisayan, Misamis Oriental', 'Region 10 (Northern ', '8.958021', '124.895519', b'1', '2018-12-05 10:19:06'),
(172, 'Villanueva, Misamis Oriental', 'Region 10 (Northern ', '8.576953', '124.785126', b'1', '2018-12-05 10:19:06'),
(173, 'Province of Campostela Valley, Campostela Valley', 'Region 11 (Southern ', '7.512515', '126.176262', b'1', '2018-12-05 10:19:06'),
(174, 'Compostela, Campostela Valley', 'Region 11 (Southern ', '7.665968', '126.084695', b'1', '2018-12-05 10:19:06'),
(175, 'Laak, Campostela Valley', 'Region 11 (Southern ', '7.877119', '125.784354', b'1', '2018-12-05 10:19:06'),
(176, 'Mabini, Campostela Valley', 'Region 11 (Southern ', '7.282129', '125.857401', b'1', '2018-12-05 10:19:06'),
(177, 'Maco, Campostela Valley', 'Region 11 (Southern ', '7.359251', '125.857986', b'1', '2018-12-05 10:19:06'),
(178, 'Maragusan, Campostela Valley', 'Region 11 (Southern ', '7.352189', '126.15454', b'1', '2018-12-05 10:19:06'),
(179, 'Mawab, Campostela Valley', 'Region 11 (Southern ', '7.496862', '125.958777', b'1', '2018-12-05 10:19:06'),
(180, 'Monkayo, Campostela Valley', 'Region 11 (Southern ', '7.851449', '126.045844', b'1', '2018-12-05 10:19:06'),
(181, 'Montevista, Campostela Valley', 'Region 11 (Southern ', '7.730546', '125.980553', b'1', '2018-12-05 10:19:06'),
(182, 'Nabunturan, Campostela Valley', 'Region 11 (Southern ', '7.585369', '125.980553', b'1', '2018-12-05 10:19:06'),
(183, 'New Bataan, Campostela Valley', 'Region 11 (Southern ', '7.554702', '126.140353', b'1', '2018-12-05 10:19:06'),
(184, 'Pantukan, Campostela Valley', 'Region 11 (Southern ', '7.255222', '126.156203', b'1', '2018-12-05 10:19:06'),
(185, 'Province of Davao Province (del Norte), Davao Province (del Norte)', 'Region 11 (Southern ', '7.56177', '125.653285', b'1', '2018-12-05 10:19:06'),
(186, 'Panabo City, Davao Province (del Norte)', 'Region 11 (Southern ', '7.308707', '125.684118', b'1', '2018-12-05 10:19:06'),
(187, 'Samal City, Davao Province (del Norte)', 'Region 11 (Southern ', '7.103312', '125.718846', b'1', '2018-12-05 10:19:06'),
(188, 'Tagum City, Davao Province (del Norte)', 'Region 11 (Southern ', '7.448212', '125.809424', b'1', '2018-12-05 10:19:06'),
(189, 'Asuncion, Davao Province (del Norte)', 'Region 11 (Southern ', '7.606026', '125.762524', b'1', '2018-12-05 10:19:06'),
(190, 'Braulio E. Dujali, Davao Province (del Norte)', 'Region 11 (Southern ', '7.45682', '125.707923', b'1', '2018-12-05 10:19:06'),
(191, 'Carmen, Davao Province (del Norte)', 'Region 11 (Southern ', '7.36821', '125.686072', b'1', '2018-12-05 10:19:06'),
(192, 'Kapalong, Davao Province (del Norte)', 'Region 11 (Southern ', '7.448212', '125.809424', b'1', '2018-12-05 10:19:06'),
(193, 'New Corella, Davao Province (del Norte)', 'Region 11 (Southern ', '7.597769', '125.849808', b'1', '2018-12-05 10:19:06'),
(194, 'San Isidro, Davao Province (del Norte)', 'Region 11 (Southern ', '7.759991', '125.675145', b'1', '2018-12-05 10:19:06'),
(195, 'Santo Tomas, Davao Province (del Norte)', 'Region 11 (Southern ', '7.509289', '125.631419', b'1', '2018-12-05 10:19:06'),
(196, 'Talaingod, Davao Province (del Norte)', 'Region 11 (Southern ', '0', '0', b'1', '2018-12-05 10:19:06'),
(197, 'Province of Davao del Sur, Davao del Sur', 'Region 11 (Southern ', '6.766269', '125.328427', b'1', '2018-12-05 10:19:06'),
(198, 'Davao City, Davao del Sur', 'Region 11 (Southern ', '7.190708', '125.455341', b'1', '2018-12-05 10:19:06'),
(199, 'Digos City, Davao del Sur', 'Region 11 (Southern ', '6.757509', '125.352398', b'1', '2018-12-05 10:19:06'),
(200, 'Bansalan, Davao del Sur', 'Region 11 (Southern ', '6.79085', '125.205566', b'1', '2018-12-05 10:19:06'),
(201, 'Hagonoy, Davao del Sur', 'Region 11 (Southern ', '6.697008', '125.3137', b'1', '2018-12-05 10:19:06'),
(202, 'Kiblawan, Davao del Sur', 'Region 11 (Southern ', '6.632331', '125.225837', b'1', '2018-12-05 10:19:06'),
(203, 'Magsaysay, Davao del Sur', 'Region 11 (Southern ', '6.791556', '125.148879', b'1', '2018-12-05 10:19:06'),
(204, 'Malalag, Davao del Sur', 'Region 11 (Southern ', '6.548944', '125.258796', b'1', '2018-12-05 10:19:06'),
(205, 'Matanao, Davao del Sur', 'Region 11 (Southern ', '6.752586', '125.238171', b'1', '2018-12-05 10:19:06'),
(206, 'Padada, Davao del Sur', 'Region 11 (Southern ', '6.643975', '125.347274', b'1', '2018-12-05 10:19:06'),
(207, 'Santa Cruz, Davao del Sur', 'Region 11 (Southern ', '6.881316', '125.368568', b'1', '2018-12-05 10:19:06'),
(208, 'Sulop, Davao del Sur', 'Region 11 (Southern ', '6.625206', '125.3137', b'1', '2018-12-05 10:19:06'),
(209, 'Province of Davao Occidental, Davao Occidental', 'Region 11 (Southern ', '6.09414', '125.609547', b'1', '2018-12-05 10:19:06'),
(210, 'Don Marcelino, Davao Occidental', 'Region 11 (Southern ', '6.145602', '125.631419', b'1', '2018-12-05 10:19:06'),
(211, 'Jose Abad Santos, Davao Occidental', 'Region 11 (Southern ', '5.834066', '125.543897', b'1', '2018-12-05 10:19:06'),
(212, 'Malita, Davao Occidental', 'Region 11 (Southern ', '6.384302', '125.581593', b'1', '2018-12-05 10:19:06'),
(213, 'Santa Maria, Davao Occidental', 'Region 11 (Southern ', '6.515209', '125.456279', b'1', '2018-12-05 10:19:06'),
(214, 'Sarangani, Davao Occidental', 'Region 11 (Southern ', '5.418806', '125.456279', b'1', '2018-12-05 10:19:06'),
(215, 'Province of Davao Oriental, Davao Oriental', 'Region 11 (Southern ', '7.317159', '126.541989', b'1', '2018-12-05 10:19:06'),
(216, 'Mati City, Davao Oriental', 'Region 11 (Southern ', '6.943763', '126.246748', b'1', '2018-12-05 10:19:06'),
(217, 'Baganga, Davao Oriental', 'Region 11 (Southern ', '7.63291', '126.536683', b'1', '2018-12-05 10:19:06'),
(218, 'Banaybanay, Davao Oriental', 'Region 11 (Southern ', '7.160841', '126.160127', b'1', '2018-12-05 10:19:06'),
(219, 'Boston, Davao Oriental', 'Region 11 (Southern ', '7.873546', '126.341495', b'1', '2018-12-05 10:19:06'),
(220, 'Caraga, Davao Oriental', 'Region 11 (Southern ', '7.314629', '126.542442', b'1', '2018-12-05 10:19:06'),
(221, 'Cateel, Davao Oriental', 'Region 11 (Southern ', '7.76491', '126.371476', b'1', '2018-12-05 10:19:06'),
(222, 'Governor Generoso, Davao Oriental', 'Region 11 (Southern ', '6.549149', '126.132813', b'1', '2018-12-05 10:19:06'),
(223, 'Lupon, Davao Oriental', 'Region 11 (Southern ', '7.106', '126.176643', b'1', '2018-12-05 10:19:06'),
(224, 'Manay, Davao Oriental', 'Region 11 (Southern ', '7.216346', '126.458077', b'1', '2018-12-05 10:19:06'),
(225, 'San Isidro, Davao Oriental', 'Region 11 (Southern ', '6.782352', '126.11108', b'1', '2018-12-05 10:19:06'),
(226, 'Tarragona, Davao Oriental', 'Region 11 (Southern ', '7.042777', '126.449221', b'1', '2018-12-05 10:19:06'),
(227, 'Province of Cotabato Province (North), Cotabato Province (North)', 'Region 12 - Central ', '7.108335', '125.038816', b'1', '2018-12-05 10:19:06'),
(228, 'Cotabato City, Cotabato Province (North)', 'Region 12 - Central ', '7.204667', '124.231044', b'1', '2018-12-05 10:19:06'),
(229, 'Kidapawan City, Cotabato Province (North)', 'Region 12 - Central ', '7.010607', '125.091134', b'1', '2018-12-05 10:19:06'),
(230, 'Alamada, Cotabato Province (North)', 'Region 12 - Central ', '7.552935', '124.552839', b'1', '2018-12-05 10:19:06'),
(231, 'Aleosan, Cotabato Province (North)', 'Region 12 - Central ', '7.188938', '124.630337', b'1', '2018-12-05 10:19:06'),
(232, 'Antipas, Cotabato Province (North)', 'Region 12 - Central ', '7.269984', '125.060841', b'1', '2018-12-05 10:19:06'),
(233, 'Arakan, Cotabato Province (North)', 'Region 12 - Central ', '7.353767', '125.147445', b'1', '2018-12-05 10:19:06'),
(234, 'Banisilan, Cotabato Province (North)', 'Region 12 - Central ', '7.537013', '124.729877', b'1', '2018-12-05 10:19:06'),
(235, 'Carmen, Cotabato Province (North)', 'Region 12 - Central ', '7.382613', '124.818259', b'1', '2018-12-05 10:19:06'),
(236, 'Kabacan, Cotabato Province (North)', 'Region 12 - Central ', '7.107192', '124.840341', b'1', '2018-12-05 10:19:06'),
(237, 'Libungan, Cotabato Province (North)', 'Region 12 - Central ', '7.316374', '124.530684', b'1', '2018-12-05 10:19:06'),
(238, 'Magpet, Cotabato Province (North)', 'Region 12 - Central ', '7.1332', '125.170874', b'1', '2018-12-05 10:19:06'),
(239, 'Makilala, Cotabato Province (North)', 'Region 12 - Central ', '6.923432', '125.082859', b'1', '2018-12-05 10:19:06'),
(240, 'Matalam, Cotabato Province (North)', 'Region 12 - Central ', '7.208753', '124.92861', b'1', '2018-12-05 10:19:06'),
(241, 'Midsayap, Cotabato Province (North)', 'Region 12 - Central ', '7.133551', '124.530684', b'1', '2018-12-05 10:19:06'),
(242, 'M\'lang, Cotabato Province (North)', 'Region 12 - Central ', '6.938217', '124.906551', b'1', '2018-12-05 10:19:06'),
(243, 'Pigkawayan, Cotabato Province (North)', 'Region 12 - Central ', '7.27922', '124.430916', b'1', '2018-12-05 10:19:06'),
(244, 'Pikit, Cotabato Province (North)', 'Region 12 - Central ', '7.053144', '124.61927', b'1', '2018-12-05 10:19:06'),
(245, 'President Roxas, Cotabato Province (North)', 'Region 12 - Central ', '7.1609', '125.060841', b'1', '2018-12-05 10:19:06'),
(246, 'Tulunan, Cotabato Province (North)', 'Region 12 - Central ', '6.786219', '124.994751', b'1', '2018-12-05 10:19:06'),
(247, 'Province of Sarangani, Sarangani', 'Region 12 - Central ', '5.926718', '124.994751', b'1', '2018-12-05 10:19:06'),
(248, 'Alabel, Sarangani', 'Region 12 - Central ', '6.185033', '125.346625', b'1', '2018-12-05 10:19:06'),
(249, 'Glan, Sarangani', 'Region 12 - Central ', '5.760038', '125.346625', b'1', '2018-12-05 10:19:06'),
(250, 'Kiamba, Sarangani', 'Region 12 - Central ', '6.023393', '124.641403', b'1', '2018-12-05 10:19:06'),
(251, 'Maasim, Sarangani', 'Region 12 - Central ', '5.926718', '124.994751', b'1', '2018-12-05 10:19:06'),
(252, 'Maitum, Sarangani', 'Region 12 - Central ', '6.124081', '124.486357', b'1', '2018-12-05 10:19:06'),
(253, 'Malapatan, Sarangani', 'Region 12 - Central ', '5.966339', '125.285378', b'1', '2018-12-05 10:19:06'),
(254, 'Malungon, Sarangani', 'Region 12 - Central ', '6.334303', '125.258796', b'1', '2018-12-05 10:19:06'),
(255, 'Province of South Cotabato, South Cotabato', 'Region 12 - Central ', '6.335757', '124.774079', b'1', '2018-12-05 10:19:06'),
(256, 'General Santos City, South Cotabato', 'Region 12 - Central ', '6.116386', '125.171618', b'1', '2018-12-05 10:19:06'),
(257, 'Koronadal City, South Cotabato', 'Region 12 - Central ', '6.497396', '124.847162', b'1', '2018-12-05 10:19:06'),
(258, 'Banga, South Cotabato', 'Region 12 - Central ', '6.387911', '124.796172', b'1', '2018-12-05 10:19:06'),
(259, 'Lake Sebu, South Cotabato', 'Region 12 - Central ', '6.244739', '124.552839', b'1', '2018-12-05 10:19:06'),
(260, 'Norala, South Cotabato', 'Region 12 - Central ', '6.520591', '124.664804', b'1', '2018-12-05 10:19:06'),
(261, 'Polomolok, South Cotabato', 'Region 12 - Central ', '6.224513', '125.060841', b'1', '2018-12-05 10:19:06'),
(262, 'Sto. Niño, South Cotabato', 'Region 12 - Central ', '6.437151', '124.674441', b'1', '2018-12-05 10:19:06'),
(263, 'Surallah, South Cotabato', 'Region 12 - Central ', '6.319496', '124.751981', b'1', '2018-12-05 10:19:06'),
(264, 'Tampakan, South Cotabato', 'Region 12 - Central ', '6.491211', '125.082859', b'1', '2018-12-05 10:19:06'),
(265, 'Tantangan, South Cotabato', 'Region 12 - Central ', '6.571205', '124.760888', b'1', '2018-12-05 10:19:06'),
(266, 'T\'Boli, South Cotabato', 'Region 12 - Central ', '6.146826', '124.906551', b'1', '2018-12-05 10:19:06'),
(267, 'Tupi, South Cotabato', 'Region 12 - Central ', '6.338494', '124.97271', b'1', '2018-12-05 10:19:06'),
(268, 'Province of Sultan Kudarat, Sultan Kudarat', 'Region 12 - Central ', '6.50694', '124.419824', b'1', '2018-12-05 10:19:06'),
(269, 'Tacurong City, Sultan Kudarat', 'Region 12 - Central ', '6.687966', '124.678774', b'1', '2018-12-05 10:19:06'),
(270, 'Bagumbayan, Sultan Kudarat', 'Region 12 - Central ', '6.533026', '124.563056', b'1', '2018-12-05 10:19:06'),
(271, 'Columbio, Sultan Kudarat', 'Region 12 - Central ', '6.634899', '125.082859', b'1', '2018-12-05 10:19:06'),
(272, 'Esperanza, Sultan Kudarat', 'Region 12 - Central ', '6.698899', '124.544875', b'1', '2018-12-05 10:19:06'),
(273, 'Isulan, Sultan Kudarat', 'Region 12 - Central ', '6.632264', '124.597814', b'1', '2018-12-05 10:19:06'),
(274, 'Kalamansig, Sultan Kudarat', 'Region 12 - Central ', '6.553848', '124.052276', b'1', '2018-12-05 10:19:06'),
(275, 'Lambayong (Mariano Marcos), Sultan Kudarat', 'Region 12 - Central ', '6.798787', '124.61927', b'1', '2018-12-05 10:19:06'),
(276, 'Lebak, Sultan Kudarat', 'Region 12 - Central ', '6.632811', '124.197688', b'1', '2018-12-05 10:19:06'),
(277, 'Lutayan, Sultan Kudarat', 'Region 12 - Central ', '6.596794', '124.884487', b'1', '2018-12-05 10:19:06'),
(278, 'Palimbang, Sultan Kudarat', 'Region 12 - Central ', '6.343217', '124.197688', b'1', '2018-12-05 10:19:06'),
(279, 'President Quirino, Sultan Kudarat', 'Region 12 - Central ', '6.725584', '124.740929', b'1', '2018-12-05 10:19:06'),
(280, 'Sen. Ninoy Aquino, Sultan Kudarat', 'Region 12 - Central ', '6.385668', '124.353242', b'1', '2018-12-05 10:19:06'),
(281, 'Province of Agusan del Norte, Agusan del Norte', 'Region 13 (CARAGA Re', '8.945626', '125.531923', b'1', '2018-12-05 10:19:06'),
(282, 'Butuan City, Agusan del Norte', 'Region 13 (CARAGA Re', '8.947538', '125.540623', b'1', '2018-12-05 10:19:06'),
(283, 'Cabadbaran City, Agusan del Norte', 'Region 13 (CARAGA Re', '9.122192', '125.537603', b'1', '2018-12-05 10:19:06'),
(284, 'Buenavista, Agusan del Norte', 'Region 13 (CARAGA Re', '8.785927', '125.368568', b'1', '2018-12-05 10:19:06'),
(285, 'Carmen, Agusan del Norte', 'Region 13 (CARAGA Re', '8.938724', '125.247811', b'1', '2018-12-05 10:19:06'),
(286, 'Jabonga, Agusan del Norte', 'Region 13 (CARAGA Re', '9.32936', '125.55294', b'1', '2018-12-05 10:19:06'),
(287, 'Kitcharao, Agusan del Norte', 'Region 13 (CARAGA Re', '9.420658', '125.620484', b'1', '2018-12-05 10:19:06'),
(288, 'Las Nieves, Agusan del Norte', 'Region 13 (CARAGA Re', '8.70689', '125.412436', b'1', '2018-12-05 10:19:06'),
(289, 'Magallanes, Agusan del Norte', 'Region 13 (CARAGA Re', '9.035643', '125.554842', b'1', '2018-12-05 10:19:06'),
(290, 'Nasipit, Agusan del Norte', 'Region 13 (CARAGA Re', '8.97149', '125.351822', b'1', '2018-12-05 10:19:06'),
(291, 'Remedios T. Romualdez, Agusan del Norte', 'Region 13 (CARAGA Re', '9.060744', '125.664215', b'1', '2018-12-05 10:19:06'),
(292, 'Santiago, Agusan del Norte', 'Region 13 (CARAGA Re', '9.241662', '125.631419', b'1', '2018-12-05 10:19:06'),
(293, 'Tubay, Agusan del Norte', 'Region 13 (CARAGA Re', '9.203619', '125.554842', b'1', '2018-12-05 10:19:06'),
(294, 'Province of Agusan del Sur, Agusan del Sur', 'Region 13 (CARAGA Re', '8.046389', '126.061538', b'1', '2018-12-05 10:19:06'),
(295, 'Bayugan City, Agusan del Sur', 'Region 13 (CARAGA Re', '8.714353', '125.748095', b'1', '2018-12-05 10:19:06'),
(296, 'Bunawan, Agusan del Sur', 'Region 13 (CARAGA Re', '8.216467', '126.045844', b'1', '2018-12-05 10:19:06'),
(297, 'Esperanza, Agusan del Sur', 'Region 13 (CARAGA Re', '8.565511', '125.522001', b'1', '2018-12-05 10:19:06'),
(298, 'La Paz, Agusan del Sur', 'Region 13 (CARAGA Re', '8.261139', '125.609547', b'1', '2018-12-05 10:19:06'),
(299, 'Loreto, Agusan del Sur', 'Region 13 (CARAGA Re', '8.114091', '125.609547', b'1', '2018-12-05 10:19:06'),
(300, 'Prosperidad, Agusan del Sur', 'Region 13 (CARAGA Re', '8.602369', '125.871614', b'1', '2018-12-05 10:19:06'),
(301, 'Rosario, Agusan del Sur', 'Region 13 (CARAGA Re', '8.312616', '126.003615', b'1', '2018-12-05 10:19:06'),
(302, 'San Francisco, Agusan del Sur', 'Region 13 (CARAGA Re', '8.508977', '125.969666', b'1', '2018-12-05 10:19:06'),
(303, 'San Luis, Agusan del Sur', 'Region 13 (CARAGA Re', '8.417602', '125.522001', b'1', '2018-12-05 10:19:06'),
(304, 'Santa Josefa, Agusan del Sur', 'Region 13 (CARAGA Re', '7.981127', '126.024086', b'1', '2018-12-05 10:19:06'),
(305, 'Sibagat, Agusan del Sur', 'Region 13 (CARAGA Re', '8.966092', '125.762524', b'1', '2018-12-05 10:19:06'),
(306, 'Talacogon, Agusan del Sur', 'Region 13 (CARAGA Re', '8.36972', '125.806178', b'1', '2018-12-05 10:19:06'),
(307, 'Trento, Agusan del Sur', 'Region 13 (CARAGA Re', '8.05257', '126.219685', b'1', '2018-12-05 10:19:06'),
(308, 'Veruela, Agusan del Sur', 'Region 13 (CARAGA Re', '8.03072', '125.893414', b'1', '2018-12-05 10:19:06'),
(309, 'Province of Dinagat Islands, Dinagat Islands', 'Region 13 (CARAGA Re', '10.128182', '125.609547', b'1', '2018-12-05 10:19:06'),
(310, 'Basilisa (Rizal), Dinagat Islands', 'Region 13 (CARAGA Re', '10.103852', '125.576729', b'1', '2018-12-05 10:19:06'),
(311, 'Cagdianao, Dinagat Islands', 'Region 13 (CARAGA Re', '10.017439', '125.664215', b'1', '2018-12-05 10:19:06'),
(312, 'Dinagat, Dinagat Islands', 'Region 13 (CARAGA Re', '9.968811', '125.598609', b'1', '2018-12-05 10:19:06'),
(313, 'Libjo (Albor), Dinagat Islands', 'Region 13 (CARAGA Re', '10.187713', '125.58767', b'1', '2018-12-05 10:19:06'),
(314, 'Loreto, Dinagat Islands', 'Region 13 (CARAGA Re', '10.371881', '125.631419', b'1', '2018-12-05 10:19:06'),
(315, 'Tubajon, Dinagat Islands', 'Region 13 (CARAGA Re', '10.293374', '125.576729', b'1', '2018-12-05 10:19:06'),
(316, 'San Jose, Dinagat Islands', 'Region 13 (CARAGA Re', '10.025497', '125.598609', b'1', '2018-12-05 10:19:06'),
(317, 'Province of Surigao del Norte, Surigao del Norte', 'Region 13 (CARAGA Re', '9.514828', '125.696998', b'1', '2018-12-05 10:19:06'),
(318, 'Surigao City, Surigao del Norte', 'Region 13 (CARAGA Re', '9.757131', '125.513767', b'1', '2018-12-05 10:19:06'),
(319, 'Alegria, Surigao del Norte', 'Region 13 (CARAGA Re', '9.479433', '125.598609', b'1', '2018-12-05 10:19:06'),
(320, 'Bacuag, Surigao del Norte', 'Region 13 (CARAGA Re', '9.541267', '125.631419', b'1', '2018-12-05 10:19:06'),
(321, 'Burgos, Surigao del Norte', 'Region 13 (CARAGA Re', '10.019994', '126.062158', b'1', '2018-12-05 10:19:06'),
(322, 'Claver, Surigao del Norte', 'Region 13 (CARAGA Re', '9.483302', '125.806178', b'1', '2018-12-05 10:19:06'),
(323, 'Dapa, Surigao del Norte', 'Region 13 (CARAGA Re', '9.751754', '126.067595', b'1', '2018-12-05 10:19:06'),
(324, 'Del Carmen, Surigao del Norte', 'Region 13 (CARAGA Re', '9.874977', '125.980553', b'1', '2018-12-05 10:19:06'),
(325, 'General Luna, Surigao del Norte', 'Region 13 (CARAGA Re', '9.778624', '126.15454', b'1', '2018-12-05 10:19:06'),
(326, 'Gigaquit, Surigao del Norte', 'Region 13 (CARAGA Re', '9.456065', '125.718846', b'1', '2018-12-05 10:19:06'),
(327, 'Mainit, Surigao del Norte', 'Region 13 (CARAGA Re', '9.556628', '125.5001', b'1', '2018-12-05 10:19:06'),
(328, 'Malimono, Surigao del Norte', 'Region 13 (CARAGA Re', '9.574984', '125.423399', b'1', '2018-12-05 10:19:06'),
(329, 'Pilar, Surigao del Norte', 'Region 13 (CARAGA Re', '9.864288', '126.067595', b'1', '2018-12-05 10:19:06'),
(330, 'Placer, Surigao del Norte', 'Region 13 (CARAGA Re', '9.648444', '125.598609', b'1', '2018-12-05 10:19:06'),
(331, 'San Benito, Surigao del Norte', 'Region 13 (CARAGA Re', '9.958237', '125.991438', b'1', '2018-12-05 10:19:06'),
(332, 'San Francisco (Anao-Aon), Surigao del Norte', 'Region 13 (CARAGA Re', '9.709407', '125.401471', b'1', '2018-12-05 10:19:06'),
(333, 'San Isidro, Surigao del Norte', 'Region 13 (CARAGA Re', '9.939411', '126.067595', b'1', '2018-12-05 10:19:06'),
(334, 'Santa Monica (Sapao), Surigao del Norte', 'Region 13 (CARAGA Re', '10.030759', '126.051282', b'1', '2018-12-05 10:19:06'),
(335, 'Sison, Surigao del Norte', 'Region 13 (CARAGA Re', '9.642551', '125.489147', b'1', '2018-12-05 10:19:06'),
(336, 'Socorro, Surigao del Norte', 'Region 13 (CARAGA Re', '9.617611', '125.936995', b'1', '2018-12-05 10:19:06'),
(337, 'Tagana-an, Surigao del Norte', 'Region 13 (CARAGA Re', '9.723693', '125.598609', b'1', '2018-12-05 10:19:06'),
(338, 'Tubod, Surigao del Norte', 'Region 13 (CARAGA Re', '9.578412', '125.554842', b'1', '2018-12-05 10:19:06'),
(339, 'Province of Surigao del Sur, Surigao del Sur', 'Region 13 (CARAGA Re', '8.540491', '126.114476', b'1', '2018-12-05 10:19:06'),
(340, 'Bislig City, Surigao del Sur', 'Region 13 (CARAGA Re', '8.210056', '126.284775', b'1', '2018-12-05 10:19:06'),
(341, 'Tandag City, Surigao del Sur', 'Region 13 (CARAGA Re', '9.101171', '126.158877', b'1', '2018-12-05 10:19:06'),
(342, 'Barobo, Surigao del Sur', 'Region 13 (CARAGA Re', '8.517545', '126.123218', b'1', '2018-12-05 10:19:06'),
(343, 'Bayabas, Surigao del Sur', 'Region 13 (CARAGA Re', '8.976147', '126.252237', b'1', '2018-12-05 10:19:06'),
(344, 'Cagwait, Surigao del Sur', 'Region 13 (CARAGA Re', '8.893681', '126.301635', b'1', '2018-12-05 10:19:06'),
(345, 'Cantilan, Surigao del Sur', 'Region 13 (CARAGA Re', '9.282823', '125.942188', b'1', '2018-12-05 10:19:06'),
(346, 'Carmen, Surigao del Sur', 'Region 13 (CARAGA Re', '9.201822', '125.980553', b'1', '2018-12-05 10:19:06'),
(347, 'Carrascal, Surigao del Sur', 'Region 13 (CARAGA Re', '9.398313', '125.893414', b'1', '2018-12-05 10:19:06'),
(348, 'Cortes, Surigao del Sur', 'Region 13 (CARAGA Re', '9.181839', '126.15454', b'1', '2018-12-05 10:19:06'),
(349, 'Hinatuan, Surigao del Sur', 'Region 13 (CARAGA Re', '8.383715', '126.371476', b'1', '2018-12-05 10:19:06'),
(350, 'Lanuza, Surigao del Sur', 'Region 13 (CARAGA Re', '9.151598', '126.013205', b'1', '2018-12-05 10:19:06'),
(351, 'Lianga, Surigao del Sur', 'Region 13 (CARAGA Re', '8.636616', '126.067595', b'1', '2018-12-05 10:19:06'),
(352, 'Lingig, Surigao del Sur', 'Region 13 (CARAGA Re', '8.087267', '126.414789', b'1', '2018-12-05 10:19:06'),
(353, 'Madrid, Surigao del Sur', 'Region 13 (CARAGA Re', '9.222359', '125.882514', b'1', '2018-12-05 10:19:06'),
(354, 'Marihatag, Surigao del Sur', 'Region 13 (CARAGA Re', '8.784206', '126.067595', b'1', '2018-12-05 10:19:06'),
(355, 'San Agustin, Surigao del Sur', 'Region 13 (CARAGA Re', '8.731382', '126.202814', b'1', '2018-12-05 10:19:06'),
(356, 'San Miguel, Surigao del Sur', 'Region 13 (CARAGA Re', '8.962819', '125.958777', b'1', '2018-12-05 10:19:06'),
(357, 'Tagbina, Surigao del Sur', 'Region 13 (CARAGA Re', '8.418142', '126.219685', b'1', '2018-12-05 10:19:06'),
(358, 'Tago, Surigao del Sur', 'Region 13 (CARAGA Re', '8.964295', '126.11108', b'1', '2018-12-05 10:19:06'),
(359, 'Province of Basilan, Basilan', 'Autonomous Region in', '6.429635', '121.987016', b'1', '2018-12-05 10:19:06'),
(360, 'Isabela City, Basilan', 'Autonomous Region in', '6.702945', '121.969', b'1', '2018-12-05 10:19:06'),
(361, 'Lamitan City, Basilan', 'Autonomous Region in', '6.661519', '122.106467', b'1', '2018-12-05 10:19:06'),
(362, 'Sumisip, Basilan', 'Autonomous Region in', '6.482905', '122.015549', b'1', '2018-12-05 10:19:06'),
(363, 'Maluso, Basilan', 'Autonomous Region in', '6.537964', '121.890414', b'1', '2018-12-05 10:19:06'),
(364, 'Lantawan, Basilan', 'Autonomous Region in', '6.597802', '121.902418', b'1', '2018-12-05 10:19:06'),
(365, 'Al-Barka, Basilan', 'Autonomous Region in', '6.470123', '122.197308', b'1', '2018-12-05 10:19:06'),
(366, 'Tuburan, Basilan', 'Autonomous Region in', '6.607863', '122.208658', b'1', '2018-12-05 10:19:06'),
(367, 'Tabuan-Lasa, Basilan', 'Autonomous Region in', '6.335213', '122.015549', b'1', '2018-12-05 10:19:06'),
(368, 'Ungkaya Pukan, Basilan', 'Autonomous Region in', '6.550444', '122.106467', b'1', '2018-12-05 10:19:06'),
(369, 'Tipo-Tipo, Basilan', 'Autonomous Region in', '6.537162', '122.163252', b'1', '2018-12-05 10:19:06'),
(370, 'Hadji Mohammad Ajul, Basilan', 'Autonomous Region in', '6.6198', '122.299413', b'1', '2018-12-05 10:19:06'),
(371, 'Akbar, Basilan', 'Autonomous Region in', '6.649082', '122.214332', b'1', '2018-12-05 10:19:06'),
(372, 'Hadji Muhtamad, Basilan', 'Autonomous Region in', '6.680478', '121.582664', b'1', '2018-12-05 10:19:06'),
(373, 'Province of Lanao del Sur, Lanao del Sur', 'Autonomous Region in', '7.823176', '124.419824', b'1', '2018-12-05 10:19:06'),
(374, 'Marawi City, Lanao del Sur', 'Autonomous Region in', '8.010621', '124.297718', b'1', '2018-12-05 10:19:06'),
(375, 'Bacolod-Kalawi (Bacolod-Grande), Lanao del Sur', 'Autonomous Region in', '7.873478', '124.125375', b'1', '2018-12-05 10:19:06'),
(376, 'Balabagan, Lanao del Sur', 'Autonomous Region in', '7.543441', '124.142068', b'1', '2018-12-05 10:19:06'),
(377, 'Balindong (WATO), Lanao del Sur', 'Autonomous Region in', '7.92816', '124.186567', b'1', '2018-12-05 10:19:06'),
(378, 'Bayang, Lanao del Sur', 'Autonomous Region in', '7.740755', '124.208808', b'1', '2018-12-05 10:19:06'),
(379, 'Binidayan, Lanao del Sur', 'Autonomous Region in', '7.763306', '124.16432', b'1', '2018-12-05 10:19:06'),
(380, 'Buadiposo-Buntong, Lanao del Sur', 'Autonomous Region in', '7.965156', '124.386539', b'1', '2018-12-05 10:19:06'),
(381, 'Bubong, Lanao del Sur', 'Autonomous Region in', '8.020626', '124.486357', b'1', '2018-12-05 10:19:06'),
(382, 'Bumbaran, Lanao del Sur', 'Autonomous Region in', '7.745292', '124.66353', b'1', '2018-12-05 10:19:06'),
(383, 'Butig, Lanao del Sur', 'Autonomous Region in', '7.695717', '124.297718', b'1', '2018-12-05 10:19:06'),
(384, 'Calanogas, Lanao del Sur', 'Autonomous Region in', '7.738335', '124.030725', b'1', '2018-12-05 10:19:06'),
(385, 'Ditsaan-Ramain, Lanao del Sur', 'Autonomous Region in', '8.001274', '124.347691', b'1', '2018-12-05 10:19:06'),
(386, 'Ganassi, Lanao del Sur', 'Autonomous Region in', '7.806447', '124.097547', b'1', '2018-12-05 10:19:06'),
(387, 'Kapai, Lanao del Sur', 'Autonomous Region in', '8.10756', '124.353242', b'1', '2018-12-05 10:19:06'),
(388, 'Kapatagan, Lanao del Sur', 'Autonomous Region in', '7.465774', '124.186567', b'1', '2018-12-05 10:19:06'),
(389, 'Lumba-Bayabao, Lanao del Sur', 'Autonomous Region in', '7.782121', '124.464185', b'1', '2018-12-05 10:19:06'),
(390, 'Lumbaca-Unayan, Lanao del Sur', 'Autonomous Region in', '7.724359', '124.236602', b'1', '2018-12-05 10:19:06'),
(391, 'Lumbatan (Macadar), Lanao del Sur', 'Autonomous Region in', '7.744412', '124.244938', b'1', '2018-12-05 10:19:06'),
(392, 'Lumbayanague (Nanagen), Lanao del Sur', 'Autonomous Region in', '7.781746', '124.30466', b'1', '2018-12-05 10:19:06'),
(393, 'Madalum, Lanao del Sur', 'Autonomous Region in', '7.875524', '124.103113', b'1', '2018-12-05 10:19:06'),
(394, 'Madamba (Uya-an), Lanao del Sur', 'Autonomous Region in', '7.863333', '124.05722', b'1', '2018-12-05 10:19:06'),
(395, 'Maguing, Lanao del Sur', 'Autonomous Region in', '7.905332', '124.530684', b'1', '2018-12-05 10:19:06'),
(396, 'Malabang, Lanao del Sur', 'Autonomous Region in', '7.5932', '124.07284', b'1', '2018-12-05 10:19:06'),
(397, 'Marantao(Inudaran), Lanao del Sur', 'Autonomous Region in', '7.943111', '124.219232', b'1', '2018-12-05 10:19:06'),
(398, 'Marogong, Lanao del Sur', 'Autonomous Region in', '7.6051', '124.175444', b'1', '2018-12-05 10:19:06'),
(399, 'Masiu, Lanao del Sur', 'Autonomous Region in', '7.808747', '124.325484', b'1', '2018-12-05 10:19:06'),
(400, 'Mulondo, Lanao del Sur', 'Autonomous Region in', '7.921614', '124.368952', b'1', '2018-12-05 10:19:06'),
(401, 'Pagayawan, Lanao del Sur', 'Autonomous Region in', '7.74882', '124.11981', b'1', '2018-12-05 10:19:06'),
(402, 'Piagapo, Lanao del Sur', 'Autonomous Region in', '8.002475', '124.186567', b'1', '2018-12-05 10:19:06'),
(403, 'Picong (Sultan Gumander)[1], Lanao del Sur', 'Autonomous Region in', '7.690718', '123.941552', b'1', '2018-12-05 10:19:06'),
(404, 'Poona Bayabao (Gata), Lanao del Sur', 'Autonomous Region in', '7.834462', '124.347691', b'1', '2018-12-05 10:19:06'),
(405, 'Pualas, Lanao del Sur', 'Autonomous Region in', '7.810503', '124.053004', b'1', '2018-12-05 10:19:06'),
(406, 'Saguiaran, Lanao del Sur', 'Autonomous Region in', '8.016892', '124.231044', b'1', '2018-12-05 10:19:06'),
(407, 'Sultan Dumalondong (Bacayawan), Lanao del Sur', 'Autonomous Region in', '7.737281', '124.28522', b'1', '2018-12-05 10:19:06'),
(408, 'Tagoloan II, Lanao del Sur', 'Autonomous Region in', '8.099079', '124.442007', b'1', '2018-12-05 10:19:06'),
(409, 'Tamparan, Lanao del Sur', 'Autonomous Region in', '7.872521', '124.336588', b'1', '2018-12-05 10:19:06'),
(410, 'Taraka, Lanao del Sur', 'Autonomous Region in', '7.899279', '124.347691', b'1', '2018-12-05 10:19:06'),
(411, 'Tubaran, Lanao del Sur', 'Autonomous Region in', '7.687018', '124.086413', b'1', '2018-12-05 10:19:06'),
(412, 'Tugaya, Lanao del Sur', 'Autonomous Region in', '7.895144', '124.142068', b'1', '2018-12-05 10:19:06'),
(413, 'Wao, Lanao del Sur', 'Autonomous Region in', '7.667597', '124.707766', b'1', '2018-12-05 10:19:06'),
(414, 'Province of Maguindanao, Maguindanao', 'Autonomous Region in', '6.942258', '124.419824', b'1', '2018-12-05 10:19:06'),
(415, 'Ampatuan, Maguindanao', 'Autonomous Region in', '6.767451', '124.389997', b'1', '2018-12-05 10:19:06'),
(416, 'Barira, Maguindanao', 'Autonomous Region in', '7.48266', '124.308826', b'1', '2018-12-05 10:19:06'),
(417, 'Buldon, Maguindanao', 'Autonomous Region in', '7.474826', '124.397636', b'1', '2018-12-05 10:19:06'),
(418, 'Buluan, Maguindanao', 'Autonomous Region in', '6.743267', '124.801694', b'1', '2018-12-05 10:19:06'),
(419, 'Datu Abdullah Sangki, Maguindanao', 'Autonomous Region in', '6.805967', '124.530684', b'1', '2018-12-05 10:19:06'),
(420, 'Datu Anggal Midtimbang, Maguindanao', 'Autonomous Region in', '6.933333', '124.333333', b'1', '2018-12-05 10:19:06'),
(421, 'Datu Blah T. Sinsuat, Maguindanao', 'Autonomous Region in', '6.865333', '124.019583', b'1', '2018-12-05 10:19:06'),
(422, 'Datu Hoffer Ampatuan, Maguindanao', 'Autonomous Region in', '6.767451', '124.389997', b'1', '2018-12-05 10:19:06'),
(423, 'Datu Odin Sinsuat, Maguindanao', 'Autonomous Region in', '7.062732', '124.286609', b'1', '2018-12-05 10:19:06'),
(424, 'Datu Paglas, Maguindanao', 'Autonomous Region in', '6.741063', '124.884487', b'1', '2018-12-05 10:19:06'),
(425, 'Datu Piang (Dulawan), Maguindanao', 'Autonomous Region in', '7.017805', '124.497441', b'1', '2018-12-05 10:19:06'),
(426, 'Datu Salibo, Maguindanao', 'Autonomous Region in', '7.003271', '124.453097', b'1', '2018-12-05 10:19:06'),
(427, 'Datu Saudi-Ampatuan, Maguindanao', 'Autonomous Region in', '6.966834', '124.453097', b'1', '2018-12-05 10:19:06'),
(428, 'Datu Unsay, Maguindanao', 'Autonomous Region in', '6.912223', '124.453097', b'1', '2018-12-05 10:19:06'),
(429, 'Gen. S. K. Pendatun, Maguindanao', 'Autonomous Region in', '6.827824', '124.707766', b'1', '2018-12-05 10:19:06'),
(430, 'Guindulungan, Maguindanao', 'Autonomous Region in', '6.954103', '124.386539', b'1', '2018-12-05 10:19:06'),
(431, 'Kabuntalan, Maguindanao', 'Autonomous Region in', '7.120199', '124.364342', b'1', '2018-12-05 10:19:06'),
(432, 'Mamasapano, Maguindanao', 'Autonomous Region in', '6.94314', '124.519604', b'1', '2018-12-05 10:19:06'),
(433, 'Mangudadatu, Maguindanao', 'Autonomous Region in', '6.70039', '124.829301', b'1', '2018-12-05 10:19:06');
INSERT INTO `r_city` (`city_ID`, `city_name`, `city_rgn`, `city_lat`, `city_lng`, `city_stat`, `city_timestamp`) VALUES
(434, 'Matanog, Maguindanao', 'Autonomous Region in', '7.459931', '124.253274', b'1', '2018-12-05 10:19:06'),
(435, 'Northern Kabuntalan, Maguindanao', 'Autonomous Region in', '7.177616', '124.442007', b'1', '2018-12-05 10:19:06'),
(436, 'Pagagawan (Datu Montawal), Maguindanao', 'Autonomous Region in', '7.110811', '124.771317', b'1', '2018-12-05 10:19:06'),
(437, 'Pagalungan, Maguindanao', 'Autonomous Region in', '6.96928', '124.751981', b'1', '2018-12-05 10:19:06'),
(438, 'Paglat, Maguindanao', 'Autonomous Region in', '6.7', '124.783333', b'1', '2018-12-05 10:19:06'),
(439, 'Pandag, Maguindanao', 'Autonomous Region in', '6.776254', '124.785126', b'1', '2018-12-05 10:19:06'),
(440, 'Parang, Maguindanao', 'Autonomous Region in', '7.333129', '124.231044', b'1', '2018-12-05 10:19:06'),
(441, 'Rajah Buayan, Maguindanao', 'Autonomous Region in', '6.935392', '124.558377', b'1', '2018-12-05 10:19:06'),
(442, 'Shariff Aguak (Maganoy), Maguindanao', 'Autonomous Region in', '6.85308', '124.397636', b'1', '2018-12-05 10:19:06'),
(443, 'Shariff Saydona Mustapha, Maguindanao', 'Autonomous Region in', '6.883296', '124.486656', b'1', '2018-12-05 10:19:06'),
(444, 'South Upi, Maguindanao', 'Autonomous Region in', '6.851032', '124.197688', b'1', '2018-12-05 10:19:06'),
(445, 'Sultan Kudarat (Nuling), Maguindanao', 'Autonomous Region in', '7.262213', '124.308826', b'1', '2018-12-05 10:19:06'),
(446, 'Sultan Mastura, Maguindanao', 'Autonomous Region in', '7.288472', '124.269943', b'1', '2018-12-05 10:19:06'),
(447, 'Sultan sa Barongis (Lambayong), Maguindanao', 'Autonomous Region in', '6.897662', '124.630337', b'1', '2018-12-05 10:19:06'),
(448, 'Sultan Sumagka (Talitay), Maguindanao', 'Autonomous Region in', '6.996667', '124.705278', b'1', '2018-12-05 10:19:06'),
(449, 'Talayan, Maguindanao', 'Autonomous Region in', '6.888491', '124.297718', b'1', '2018-12-05 10:19:06'),
(450, 'Upi, Maguindanao', 'Autonomous Region in', '7.0171', '124.175444', b'1', '2018-12-05 10:19:06'),
(451, 'Province of Sulu, Sulu', 'Autonomous Region in', '5.974901', '121.03351', b'1', '2018-12-05 10:19:06'),
(452, 'Banguingui (Tongkil), Sulu', 'Autonomous Region in', '6.075758', '121.765136', b'1', '2018-12-05 10:19:06'),
(453, 'Hadji Panglima Tahil (Marunggas), Sulu', 'Autonomous Region in', '6.203031', '120.941737', b'1', '2018-12-05 10:19:06'),
(454, 'Indanan, Sulu', 'Autonomous Region in', '5.989145', '120.953212', b'1', '2018-12-05 10:19:06'),
(455, 'Jolo, Sulu', 'Autonomous Region in', '6.047365', '121.008961', b'1', '2018-12-05 10:19:06'),
(456, 'Kalingalan Caluang, Sulu', 'Autonomous Region in', '5.903882', '121.285525', b'1', '2018-12-05 10:19:06'),
(457, 'Lugus, Sulu', 'Autonomous Region in', '5.682393', '120.838409', b'1', '2018-12-05 10:19:06'),
(458, 'Luuk, Sulu', 'Autonomous Region in', '5.966204', '121.319849', b'1', '2018-12-05 10:19:06'),
(459, 'Maimbung, Sulu', 'Autonomous Region in', '5.957849', '121.010573', b'1', '2018-12-05 10:19:06'),
(460, 'Old Panamao, Sulu', 'Autonomous Region in', '5.971956', '121.228296', b'1', '2018-12-05 10:19:06'),
(461, 'Omar, Sulu', 'Autonomous Region in', '6.008666', '121.377034', b'1', '2018-12-05 10:19:06'),
(462, 'Pandami, Sulu', 'Autonomous Region in', '5.61357', '120.596976', b'1', '2018-12-05 10:19:06'),
(463, 'Panglima Estino (New Panamao), Sulu', 'Autonomous Region in', '5.974827', '121.182492', b'1', '2018-12-05 10:19:06'),
(464, 'Pangutaran, Sulu', 'Autonomous Region in', '6.30121', '120.573958', b'1', '2018-12-05 10:19:06'),
(465, 'Parang, Sulu', 'Autonomous Region in', '5.883881', '120.861379', b'1', '2018-12-05 10:19:06'),
(466, 'Pata, Sulu', 'Autonomous Region in', '5.828804', '121.159584', b'1', '2018-12-05 10:19:06'),
(467, 'Patikul, Sulu', 'Autonomous Region in', '6.063023', '121.102294', b'1', '2018-12-05 10:19:06'),
(468, 'Siasi, Sulu', 'Autonomous Region in', '5.524188', '120.872862', b'1', '2018-12-05 10:19:06'),
(469, 'Talipao, Sulu', 'Autonomous Region in', '5.95215', '121.102294', b'1', '2018-12-05 10:19:06'),
(470, 'Tapul, Sulu', 'Autonomous Region in', '5.702535', '120.964687', b'1', '2018-12-05 10:19:06'),
(471, 'Province of Tawi-Tawi, Tawi-Tawi', 'Autonomous Region in', '5.133811', '119.950926', b'1', '2018-12-05 10:19:06'),
(472, 'Bongao, Tawi-Tawi', 'Autonomous Region in', '5.104178', '119.812079', b'1', '2018-12-05 10:19:06'),
(473, 'Languyan, Tawi-Tawi', 'Autonomous Region in', '5.376442', '120.228193', b'1', '2018-12-05 10:19:06'),
(474, 'Mapun, Tawi-Tawi', 'Autonomous Region in', '6.997029', '118.474717', b'1', '2018-12-05 10:19:06'),
(475, 'Panglima Sugala, Tawi-Tawi', 'Autonomous Region in', '5.094753', '119.997177', b'1', '2018-12-05 10:19:06'),
(476, 'Sapa-Sapa, Tawi-Tawi', 'Autonomous Region in', '5.085288', '120.182022', b'1', '2018-12-05 10:19:06'),
(477, 'Sibutu, Tawi-Tawi', 'Autonomous Region in', '4.781415', '119.475963', b'1', '2018-12-05 10:19:06'),
(478, 'Simunul, Tawi-Tawi', 'Autonomous Region in', '4.856282', '119.823655', b'1', '2018-12-05 10:19:06'),
(479, 'Sitangkai, Tawi-Tawi', 'Autonomous Region in', '4.743763', '119.400518', b'1', '2018-12-05 10:19:06'),
(480, 'South Ubian, Tawi-Tawi', 'Autonomous Region in', '5.395838', '120.378138', b'1', '2018-12-05 10:19:06'),
(481, 'Tandubas, Tawi-Tawi', 'Autonomous Region in', '5.207469', '120.29742', b'1', '2018-12-05 10:19:06'),
(482, 'Turtles Islands, Tawi-Tawi', 'Autonomous Region in', '6.217003', '118.252662', b'1', '2018-12-05 10:19:06'),
(483, 'Caloocan City, National Capital Region (NCR)', 'National Capital Reg', '14.756578', '121.044977', b'1', '2018-12-05 10:19:06'),
(484, 'Las  Piñas City, National Capital Region (NCR)', 'National Capital Reg', '14.444546', '120.993874', b'1', '2018-12-05 10:19:06'),
(485, 'Makati City, National Capital Region (NCR)', 'National Capital Reg', '14.554729', '121.024445', b'1', '2018-12-05 10:19:06'),
(486, 'City of Malabon, National Capital Region (NCR)', 'National Capital Reg', '14.668075', '120.965845', b'1', '2018-12-05 10:19:06'),
(487, 'City of Mandaluyong, National Capital Region (NCR)', 'National Capital Reg', '14.579444', '121.035917', b'1', '2018-12-05 10:19:06'),
(488, 'City of Manila, National Capital Region (NCR)', 'National Capital Reg', '14.599512', '120.984222', b'1', '2018-12-05 10:19:06'),
(489, 'City of Marikina, National Capital Region (NCR)', 'National Capital Reg', '14.65073', '121.102855', b'1', '2018-12-05 10:19:06'),
(490, 'City of Muntinlupa, National Capital Region (NCR)', 'National Capital Reg', '14.408133', '121.041467', b'1', '2018-12-05 10:19:06'),
(491, 'City of Navotas, National Capital Region (NCR)', 'National Capital Reg', '14.67149', '120.939847', b'1', '2018-12-05 10:19:06'),
(492, 'City of Parañaque, National Capital Region (NCR)', 'National Capital Reg', '14.47931', '121.019823', b'1', '2018-12-05 10:19:06'),
(493, 'Pasay City, National Capital Region (NCR)', 'National Capital Reg', '14.537752', '121.001379', b'1', '2018-12-05 10:19:06'),
(494, 'City of Pasig, National Capital Region (NCR)', 'National Capital Reg', '14.576377', '121.08511', b'1', '2018-12-05 10:19:06'),
(495, 'Quezon City, National Capital Region (NCR)', 'National Capital Reg', '14.676041', '121.0437', b'1', '2018-12-05 10:19:06'),
(496, 'San Juan City, National Capital Region (NCR)', 'National Capital Reg', '14.599415', '121.036889', b'1', '2018-12-05 10:19:06'),
(497, 'City of Taguig, National Capital Region (NCR)', 'National Capital Reg', '14.517618', '121.050864', b'1', '2018-12-05 10:19:06'),
(498, 'City of Valenzuela, National Capital Region (NCR)', 'National Capital Reg', '14.701056', '120.983023', b'1', '2018-12-05 10:19:06'),
(499, 'Pateros, National Capital Region (NCR)', 'National Capital Reg', '14.548378', '121.070773', b'1', '2018-12-05 10:19:06'),
(500, 'Province of Abra, Abra', 'Cordillera Autonomou', '17.595112', '120.798253', b'1', '2018-12-05 10:19:06'),
(501, 'Bangued, Abra', 'Cordillera Autonomou', '17.588185', '120.631495', b'1', '2018-12-05 10:19:06'),
(502, 'Boliney , Abra', 'Cordillera Autonomou', '17.367457', '120.872862', b'1', '2018-12-05 10:19:06'),
(503, 'Bucay , Abra', 'Cordillera Autonomou', '17.530189', '120.723499', b'1', '2018-12-05 10:19:06'),
(504, 'Bucloc , Abra', 'Cordillera Autonomou', '17.443746', '120.842255', b'1', '2018-12-05 10:19:06'),
(505, 'Daguioman , Abra', 'Cordillera Autonomou', '17.436134', '120.964687', b'1', '2018-12-05 10:19:06'),
(506, 'Danglas , Abra', 'Cordillera Autonomou', '17.74496', '120.642999', b'1', '2018-12-05 10:19:06'),
(507, 'Dolores , Abra', 'Cordillera Autonomou', '17.650782', '120.729247', b'1', '2018-12-05 10:19:06'),
(508, 'La Paz , Abra', 'Cordillera Autonomou', '17.647733', '120.654502', b'1', '2018-12-05 10:19:06'),
(509, 'Lacub , Abra', 'Cordillera Autonomou', '17.689361', '120.964687', b'1', '2018-12-05 10:19:06'),
(510, 'Lagangilang , Abra', 'Cordillera Autonomou', '17.624061', '120.792458', b'1', '2018-12-05 10:19:06'),
(511, 'Lagayan , Abra', 'Cordillera Autonomou', '17.771434', '120.734995', b'1', '2018-12-05 10:19:06'),
(512, 'Langiden , Abra', 'Cordillera Autonomou', '17.603866', '120.539423', b'1', '2018-12-05 10:19:06'),
(513, 'Licuan-Baay (Licuan) , Abra', 'Cordillera Autonomou', '17.578536', '120.872862', b'1', '2018-12-05 10:19:06'),
(514, 'Luba , Abra', 'Cordillera Autonomou', '17.31418', '120.689006', b'1', '2018-12-05 10:19:06'),
(515, 'Malibcong , Abra', 'Cordillera Autonomou', '17.596974', '121.010573', b'1', '2018-12-05 10:19:06'),
(516, 'Manabo , Abra', 'Cordillera Autonomou', '17.390888', '120.734995', b'1', '2018-12-05 10:19:06'),
(517, 'Peñarrubia , Abra', 'Cordillera Autonomou', '17.541954', '120.654502', b'1', '2018-12-05 10:19:06'),
(518, 'Pidigan , Abra', 'Cordillera Autonomou', '17.536445', '120.562447', b'1', '2018-12-05 10:19:06'),
(519, 'Pilar , Abra', 'Cordillera Autonomou', '17.384467', '120.585467', b'1', '2018-12-05 10:19:06'),
(520, 'Sallapadan , Abra', 'Cordillera Autonomou', '17.49254', '120.761968', b'1', '2018-12-05 10:19:06'),
(521, 'San Isidro , Abra', 'Cordillera Autonomou', '17.480057', '120.614237', b'1', '2018-12-05 10:19:06'),
(522, 'San Juan , Abra', 'Cordillera Autonomou', '17.680918', '120.731506', b'1', '2018-12-05 10:19:06'),
(523, 'San Quintin , Abra', 'Cordillera Autonomou', '17.52308', '120.516395', b'1', '2018-12-05 10:19:06'),
(524, 'Tayum , Abra', 'Cordillera Autonomou', '17.601483', '120.677505', b'1', '2018-12-05 10:19:06'),
(525, 'Tineg , Abra', 'Cordillera Autonomou', '17.841234', '120.941737', b'1', '2018-12-05 10:19:06'),
(526, 'Tubo , Abra', 'Cordillera Autonomou', '17.265891', '120.849894', b'1', '2018-12-05 10:19:06'),
(527, 'Villaviciosa , Abra', 'Cordillera Autonomou', '17.393954', '120.654502', b'1', '2018-12-05 10:19:06'),
(528, 'Province of Apayao, Apayao', 'Cordillera Autonomou', '18.01203', '121.171039', b'1', '2018-12-05 10:19:06'),
(529, 'Calanasan (Bayag), Apayao', 'Cordillera Autonomou', '18.247918', '121.03351', b'1', '2018-12-05 10:19:06'),
(530, 'Conner, Apayao', 'Cordillera Autonomou', '17.792929', '121.216847', b'1', '2018-12-05 10:19:06'),
(531, 'Flora, Apayao', 'Cordillera Autonomou', '18.114599', '121.422761', b'1', '2018-12-05 10:19:06'),
(532, 'Kabugao, Apayao', 'Cordillera Autonomou', '18.017158', '121.184157', b'1', '2018-12-05 10:19:06'),
(533, 'Luna (Macatel), Apayao', 'Cordillera Autonomou', '18.299534', '121.216847', b'1', '2018-12-05 10:19:06'),
(534, 'Pudtol, Apayao', 'Cordillera Autonomou', '18.139324', '121.285525', b'1', '2018-12-05 10:19:06'),
(535, 'Santa Marcela, Apayao', 'Cordillera Autonomou', '18.291778', '121.43419', b'1', '2018-12-05 10:19:06'),
(536, 'Province of Benguet, Benguet', 'Cordillera Autonomou', '16.557726', '120.803947', b'1', '2018-12-05 10:19:06'),
(537, 'Baguio City, Benguet', 'Cordillera Autonomou', '16.402333', '120.596007', b'1', '2018-12-05 10:19:06'),
(538, 'Atok, Benguet', 'Cordillera Autonomou', '16.597449', '120.689006', b'1', '2018-12-05 10:19:06'),
(539, 'Bakun, Benguet', 'Cordillera Autonomou', '16.807958', '120.689006', b'1', '2018-12-05 10:19:06'),
(540, 'Bokod, Benguet', 'Cordillera Autonomou', '16.456406', '120.780968', b'1', '2018-12-05 10:19:06'),
(541, 'Buguias, Benguet', 'Cordillera Autonomou', '16.749157', '120.836817', b'1', '2018-12-05 10:19:06'),
(542, 'Itogon, Benguet', 'Cordillera Autonomou', '16.345181', '120.689006', b'1', '2018-12-05 10:19:06'),
(543, 'Kabayan, Benguet', 'Cordillera Autonomou', '16.617025', '120.826923', b'1', '2018-12-05 10:19:06'),
(544, 'Kapangan, Benguet', 'Cordillera Autonomou', '16.612379', '120.596976', b'1', '2018-12-05 10:19:06'),
(545, 'Kibungan, Benguet', 'Cordillera Autonomou', '16.681622', '120.689006', b'1', '2018-12-05 10:19:06'),
(546, 'La Trinidad, Benguet', 'Cordillera Autonomou', '16.477428', '120.585467', b'1', '2018-12-05 10:19:06'),
(547, 'Mankayan, Benguet', 'Cordillera Autonomou', '16.877035', '120.780968', b'1', '2018-12-05 10:19:06'),
(548, 'Sablan, Benguet', 'Cordillera Autonomou', '16.488521', '120.516395', b'1', '2018-12-05 10:19:06'),
(549, 'Tuba, Benguet', 'Cordillera Autonomou', '16.300517', '120.573958', b'1', '2018-12-05 10:19:06'),
(550, 'Tublay, Benguet', 'Cordillera Autonomou', '16.512092', '120.631495', b'1', '2018-12-05 10:19:06'),
(551, 'Province of Ifugao, Ifugao', 'Cordillera Autonomou', '16.833079', '121.171039', b'1', '2018-12-05 10:19:06'),
(552, 'Aguinaldo, Ifugao', 'Cordillera Autonomou', '16.952911', '121.331288', b'1', '2018-12-05 10:19:06'),
(553, 'Alfonso Lista (Potia), Ifugao', 'Cordillera Autonomou', '16.988521', '121.491318', b'1', '2018-12-05 10:19:06'),
(554, 'Asipulo, Ifugao', 'Cordillera Autonomou', '16.753657', '121.03983', b'1', '2018-12-05 10:19:06'),
(555, 'Banaue, Ifugao', 'Cordillera Autonomou', '16.949626', '121.102294', b'1', '2018-12-05 10:19:06'),
(556, 'Hingyon, Ifugao', 'Cordillera Autonomou', '16.865595', '121.102294', b'1', '2018-12-05 10:19:06'),
(557, 'Hungduan, Ifugao', 'Cordillera Autonomou', '16.838903', '121.010573', b'1', '2018-12-05 10:19:06'),
(558, 'Kiangan, Ifugao', 'Cordillera Autonomou', '16.771234', '121.098672', b'1', '2018-12-05 10:19:06'),
(559, 'Lagawe, Ifugao', 'Cordillera Autonomou', '16.808255', '121.193945', b'1', '2018-12-05 10:19:06'),
(560, 'Lamut, Ifugao', 'Cordillera Autonomou', '16.682414', '121.193945', b'1', '2018-12-05 10:19:06'),
(561, 'Mayoyao, Ifugao', 'Cordillera Autonomou', '16.951313', '121.216847', b'1', '2018-12-05 10:19:06'),
(562, 'Tinoc, Ifugao', 'Cordillera Autonomou', '16.703499', '120.974849', b'1', '2018-12-05 10:19:06'),
(563, 'Province of Kalinga, Kalinga', 'Cordillera Autonomou', '17.474042', '121.354163', b'1', '2018-12-05 10:19:06'),
(564, 'Tabuk City, Kalinga', 'Cordillera Autonomou', '17.411735', '121.43845', b'1', '2018-12-05 10:19:06'),
(565, 'Balbalan, Kalinga', 'Cordillera Autonomou', '17.530953', '121.148128', b'1', '2018-12-05 10:19:06'),
(566, 'Labuagan, Kalinga', 'Cordillera Autonomou', '17.301813', '121.010573', b'1', '2018-12-05 10:19:06'),
(567, 'Pasil, Kalinga', 'Cordillera Autonomou', '17.412479', '121.102294', b'1', '2018-12-05 10:19:06'),
(568, 'Pinukpuk, Kalinga', 'Cordillera Autonomou', '17.608287', '121.308409', b'1', '2018-12-05 10:19:06'),
(569, 'Rizal (Liwan), Kalinga', 'Cordillera Autonomou', '17.492973', '121.605489', b'1', '2018-12-05 10:19:06'),
(570, 'Tanudan, Kalinga', 'Cordillera Autonomou', '17.262558', '121.239744', b'1', '2018-12-05 10:19:06'),
(571, 'Tinglayan, Kalinga', 'Cordillera Autonomou', '17.244039', '121.102294', b'1', '2018-12-05 10:19:06'),
(572, 'Province of Mt. Province, Mt. Province', 'Cordillera Autonomou', '17.066343', '121.03351', b'1', '2018-12-05 10:19:06'),
(573, 'Barlig, Mt. Province', 'Cordillera Autonomou', '17.039991', '121.143527', b'1', '2018-12-05 10:19:06'),
(574, 'Bauko, Mt. Province', 'Cordillera Autonomou', '16.98809', '120.872862', b'1', '2018-12-05 10:19:06'),
(575, 'Besao, Mt. Province', 'Cordillera Autonomou', '17.109713', '120.838409', b'1', '2018-12-05 10:19:06'),
(576, 'Bontoc, Mt. Province', 'Cordillera Autonomou', '17.091256', '121.010573', b'1', '2018-12-05 10:19:06'),
(577, 'Natonin, Mt. Province', 'Cordillera Autonomou', '17.128623', '121.285525', b'1', '2018-12-05 10:19:06'),
(578, 'Paracelis, Mt. Province', 'Cordillera Autonomou', '17.156221', '121.491318', b'1', '2018-12-05 10:19:06'),
(579, 'Sabangan, Mt. Province', 'Cordillera Autonomou', '16.946929', '120.93026', b'1', '2018-12-05 10:19:06'),
(580, 'Sadangan, Mt. Province', 'Cordillera Autonomou', '17.167666', '121.056443', b'1', '2018-12-05 10:19:06'),
(581, 'Sagada, Mt. Province', 'Cordillera Autonomou', '17.098135', '120.907304', b'1', '2018-12-05 10:19:06'),
(582, 'Tadian, Mt. Province', 'Cordillera Autonomou', '16.966079', '120.815436', b'1', '2018-12-05 10:19:06'),
(583, 'Batac City, Ilocos Norte', 'Region I (Ilocos Reg', '18.046032', '120.594078', b'1', '2018-12-05 10:19:06'),
(584, 'Laoag City, Ilocos Norte', 'Region I (Ilocos Reg', '18.196013', '120.592668', b'1', '2018-12-05 10:19:06'),
(585, 'Adams, Ilocos Norte', 'Region I (Ilocos Reg', '18.459081', '120.918783', b'1', '2018-12-05 10:19:06'),
(586, 'Bacarra, Ilocos Norte', 'Region I (Ilocos Reg', '18.270387', '120.608483', b'1', '2018-12-05 10:19:06'),
(587, 'Badoc, Ilocos Norte', 'Region I (Ilocos Reg', '17.908472', '120.493362', b'1', '2018-12-05 10:19:06'),
(588, 'Bangui, Ilocos Norte', 'Region I (Ilocos Reg', '18.512734', '120.734958', b'1', '2018-12-05 10:19:06'),
(589, 'Banna (Espiritu), Ilocos Norte', 'Region I (Ilocos Reg', '17.956793', '120.642999', b'1', '2018-12-05 10:19:06'),
(590, 'Burgos, Ilocos Norte', 'Region I (Ilocos Reg', '18.465994', '120.642999', b'1', '2018-12-05 10:19:06'),
(591, 'Carasi, Ilocos Norte', 'Region I (Ilocos Reg', '18.213041', '120.872862', b'1', '2018-12-05 10:19:06'),
(592, 'Currimao, Ilocos Norte', 'Region I (Ilocos Reg', '18.002948', '120.510106', b'1', '2018-12-05 10:19:06'),
(593, 'Dingras, Ilocos Norte', 'Region I (Ilocos Reg', '18.080495', '120.723499', b'1', '2018-12-05 10:19:06'),
(594, 'Dumalneg, Ilocos Norte', 'Region I (Ilocos Reg', '18.475582', '120.826923', b'1', '2018-12-05 10:19:06'),
(595, 'Marcos, Ilocos Norte', 'Region I (Ilocos Reg', '18.020946', '120.700504', b'1', '2018-12-05 10:19:06'),
(596, 'Nueva Era, Ilocos Norte', 'Region I (Ilocos Reg', '17.940786', '120.734995', b'1', '2018-12-05 10:19:06'),
(597, 'Pagudpud, Ilocos Norte', 'Region I (Ilocos Reg', '18.587468', '120.822083', b'1', '2018-12-05 10:19:06'),
(598, 'Paoay, Ilocos Norte', 'Region I (Ilocos Reg', '18.074237', '120.516395', b'1', '2018-12-05 10:19:06'),
(599, 'Pasuquin, Ilocos Norte', 'Region I (Ilocos Reg', '18.338592', '120.642999', b'1', '2018-12-05 10:19:06'),
(600, 'Piddig, Ilocos Norte', 'Region I (Ilocos Reg', '18.18694', '120.780968', b'1', '2018-12-05 10:19:06'),
(601, 'Pinili, Ilocos Norte', 'Region I (Ilocos Reg', '17.942944', '120.539423', b'1', '2018-12-05 10:19:06'),
(602, 'San Nicolas, Ilocos Norte', 'Region I (Ilocos Reg', '18.147082', '120.585467', b'1', '2018-12-05 10:19:06'),
(603, 'Sarrat, Ilocos Norte', 'Region I (Ilocos Reg', '18.113786', '120.654502', b'1', '2018-12-05 10:19:06'),
(604, 'Solsona, Ilocos Norte', 'Region I (Ilocos Reg', '18.102185', '120.780968', b'1', '2018-12-05 10:19:06'),
(605, 'Vintar, Ilocos Norte', 'Region I (Ilocos Reg', '18.314129', '120.780968', b'1', '2018-12-05 10:19:06'),
(606, 'Province of Ilocos Sur, Ilocos Sur', 'Region I (Ilocos Reg', '17.227866', '120.573958', b'1', '2018-12-05 10:19:06'),
(607, 'Candon City, Ilocos Sur', 'Region I (Ilocos Reg', '17.187404', '120.446718', b'1', '2018-12-05 10:19:06'),
(608, 'Vigan City, Ilocos Sur', 'Region I (Ilocos Reg', '17.57049', '120.38733', b'1', '2018-12-05 10:19:06'),
(609, 'Alilem, Ilocos Sur', 'Region I (Ilocos Reg', '16.910814', '120.572224', b'1', '2018-12-05 10:19:06'),
(610, 'Banayoyo, Ilocos Sur', 'Region I (Ilocos Reg', '17.235073', '120.499121', b'1', '2018-12-05 10:19:06'),
(611, 'Bantay, Ilocos Sur', 'Region I (Ilocos Reg', '17.598323', '120.447285', b'1', '2018-12-05 10:19:06'),
(612, 'Burgos, Ilocos Sur', 'Region I (Ilocos Reg', '17.311483', '120.516395', b'1', '2018-12-05 10:19:06'),
(613, 'Cabugao, Ilocos Sur', 'Region I (Ilocos Reg', '17.791812', '120.454019', b'1', '2018-12-05 10:19:06'),
(614, 'Caoayan, Ilocos Sur', 'Region I (Ilocos Reg', '17.538215', '120.395428', b'1', '2018-12-05 10:19:06'),
(615, 'Cervantes, Ilocos Sur', 'Region I (Ilocos Reg', '16.976545', '120.689006', b'1', '2018-12-05 10:19:06'),
(616, 'Galimuyod, Ilocos Sur', 'Region I (Ilocos Reg', '17.18896', '120.522152', b'1', '2018-12-05 10:19:06'),
(617, 'Gregorio del Pilar, Ilocos Sur', 'Region I (Ilocos Reg', '17.148174', '120.608483', b'1', '2018-12-05 10:19:06'),
(618, 'Lidlidda, Ilocos Sur', 'Region I (Ilocos Reg', '17.265342', '120.539423', b'1', '2018-12-05 10:19:06'),
(619, 'Magsingal, Ilocos Sur', 'Region I (Ilocos Reg', '17.683099', '120.447285', b'1', '2018-12-05 10:19:06'),
(620, 'Nagbukel, Ilocos Sur', 'Region I (Ilocos Reg', '17.434533', '120.539423', b'1', '2018-12-05 10:19:06'),
(621, 'Narvacan, Ilocos Sur', 'Region I (Ilocos Reg', '17.463462', '120.493362', b'1', '2018-12-05 10:19:06'),
(622, 'Quirino, Ilocos Sur', 'Region I (Ilocos Reg', '17.103087', '120.689006', b'1', '2018-12-05 10:19:06'),
(623, 'Salcedo, Ilocos Sur', 'Region I (Ilocos Reg', '17.134719', '120.562447', b'1', '2018-12-05 10:19:06'),
(624, 'San Emilio, Ilocos Sur', 'Region I (Ilocos Reg', '17.245145', '120.596976', b'1', '2018-12-05 10:19:06'),
(625, 'San Esteban, Ilocos Sur', 'Region I (Ilocos Reg', '17.327371', '120.453046', b'1', '2018-12-05 10:19:06'),
(626, 'San Ildefonso, Ilocos Sur', 'Region I (Ilocos Reg', '17.623', '120.395428', b'1', '2018-12-05 10:19:06'),
(627, 'San Juan, Ilocos Sur', 'Region I (Ilocos Reg', '17.74277', '120.470326', b'1', '2018-12-05 10:19:06'),
(628, 'San Vicente, Ilocos Sur', 'Region I (Ilocos Reg', '17.618247', '120.360845', b'1', '2018-12-05 10:19:06'),
(629, 'Santa, Ilocos Sur', 'Region I (Ilocos Reg', '17.513582', '120.447285', b'1', '2018-12-05 10:19:06'),
(630, 'Santa Catalina, Ilocos Sur', 'Region I (Ilocos Reg', '17.586441', '120.360845', b'1', '2018-12-05 10:19:06'),
(631, 'Santa Cruz, Ilocos Sur', 'Region I (Ilocos Reg', '17.061675', '120.493362', b'1', '2018-12-05 10:19:06'),
(632, 'Santa Lucía, Ilocos Sur', 'Region I (Ilocos Reg', '17.128875', '120.470326', b'1', '2018-12-05 10:19:06'),
(633, 'Santa María, Ilocos Sur', 'Region I (Ilocos Reg', '17.378807', '120.493362', b'1', '2018-12-05 10:19:06'),
(634, 'Santiago, Ilocos Sur', 'Region I (Ilocos Reg', '17.280726', '120.447285', b'1', '2018-12-05 10:19:06'),
(635, 'Santo Domingo, Ilocos Sur', 'Region I (Ilocos Reg', '17.644617', '120.42424', b'1', '2018-12-05 10:19:06'),
(636, 'Sigay, Ilocos Sur', 'Region I (Ilocos Reg', '17.03398', '120.596976', b'1', '2018-12-05 10:19:06'),
(637, 'Sinait, Ilocos Sur', 'Region I (Ilocos Reg', '17.853467', '120.504879', b'1', '2018-12-05 10:19:06'),
(638, 'Sugpon, Ilocos Sur', 'Region I (Ilocos Reg', '16.7809', '120.596976', b'1', '2018-12-05 10:19:06'),
(639, 'Suyo, Ilocos Sur', 'Region I (Ilocos Reg', '16.965822', '120.562447', b'1', '2018-12-05 10:19:06'),
(640, 'Tagudin, Ilocos Sur', 'Region I (Ilocos Reg', '16.93875', '120.470326', b'1', '2018-12-05 10:19:06'),
(641, 'Province of La Union, La Union', 'Region I (Ilocos Reg', '16.615891', '120.320937', b'1', '2018-12-05 10:19:06'),
(642, 'San Fernando City, La Union', 'Region I (Ilocos Reg', '16.607377', '120.36661', b'1', '2018-12-05 10:19:06'),
(643, 'Agoo, La Union', 'Region I (Ilocos Reg', '16.324704', '120.355081', b'1', '2018-12-05 10:19:06'),
(644, 'Aringay, La Union', 'Region I (Ilocos Reg', '16.388791', '120.388473', b'1', '2018-12-05 10:19:06'),
(645, 'Bacnotan, La Union', 'Region I (Ilocos Reg', '16.733971', '120.36661', b'1', '2018-12-05 10:19:06'),
(646, 'Bagulin, La Union', 'Region I (Ilocos Reg', '16.59753', '120.493362', b'1', '2018-12-05 10:19:06'),
(647, 'Balaoan, La Union', 'Region I (Ilocos Reg', '16.802249', '120.401191', b'1', '2018-12-05 10:19:06'),
(648, 'Bangar, La Union', 'Region I (Ilocos Reg', '16.882945', '120.42424', b'1', '2018-12-05 10:19:06'),
(649, 'Bauang, La Union', 'Region I (Ilocos Reg', '16.514332', '120.355081', b'1', '2018-12-05 10:19:06'),
(650, 'Burgos, La Union', 'Region I (Ilocos Reg', '16.538032', '120.470326', b'1', '2018-12-05 10:19:06'),
(651, 'Caba, La Union', 'Region I (Ilocos Reg', '16.44743', '120.378138', b'1', '2018-12-05 10:19:06'),
(652, 'Luna, La Union', 'Region I (Ilocos Reg', '16.830849', '120.355081', b'1', '2018-12-05 10:19:06'),
(653, 'Naguilian, La Union', 'Region I (Ilocos Reg', '16.515661', '120.412716', b'1', '2018-12-05 10:19:06'),
(654, 'Pugo, La Union', 'Region I (Ilocos Reg', '16.32133', '120.476085', b'1', '2018-12-05 10:19:06'),
(655, 'Rosario, La Union', 'Region I (Ilocos Reg', '16.243367', '120.470326', b'1', '2018-12-05 10:19:06'),
(656, 'San Gabriel, La Union', 'Region I (Ilocos Reg', '16.669426', '120.504879', b'1', '2018-12-05 10:19:06'),
(657, 'San Juan, La Union', 'Region I (Ilocos Reg', '16.671967', '120.362758', b'1', '2018-12-05 10:19:06'),
(658, 'Sto. Tomas, La Union', 'Region I (Ilocos Reg', '16.275321', '120.401191', b'1', '2018-12-05 10:19:06'),
(659, 'Santol, La Union', 'Region I (Ilocos Reg', '16.753753', '120.504879', b'1', '2018-12-05 10:19:06'),
(660, 'Sudipen, La Union', 'Region I (Ilocos Reg', '16.899816', '120.48826', b'1', '2018-12-05 10:19:06'),
(661, 'Tubao, La Union', 'Region I (Ilocos Reg', '16.355863', '120.42424', b'1', '2018-12-05 10:19:06'),
(662, 'Province of Pangasinan, Pangasinan', 'Region I (Ilocos Reg', '15.894906', '120.286318', b'1', '2018-12-05 10:19:06'),
(663, 'Alaminos City, Pangasinan', 'Region I (Ilocos Reg', '16.150529', '119.985616', b'1', '2018-12-05 10:19:06'),
(664, 'Dagupan City, Pangasinan', 'Region I (Ilocos Reg', '16.0433', '120.333312', b'1', '2018-12-05 10:19:06'),
(665, 'San Carlos City, Pangasinan', 'Region I (Ilocos Reg', '15.898934', '120.320487', b'1', '2018-12-05 10:19:06'),
(666, 'Urdaneta City, Pangasinan', 'Region I (Ilocos Reg', '15.975803', '120.570693', b'1', '2018-12-05 10:19:06'),
(667, 'Agno, Pangasinan', 'Region I (Ilocos Reg', '16.103288', '119.812079', b'1', '2018-12-05 10:19:06'),
(668, 'Aguilar, Pangasinan', 'Region I (Ilocos Reg', '15.836118', '120.182022', b'1', '2018-12-05 10:19:06'),
(669, 'Alcala, Pangasinan', 'Region I (Ilocos Reg', '15.854602', '120.539423', b'1', '2018-12-05 10:19:06'),
(670, 'Anda, Pangasinan', 'Region I (Ilocos Reg', '16.298256', '119.985616', b'1', '2018-12-05 10:19:06'),
(671, 'Asingan, Pangasinan', 'Region I (Ilocos Reg', '16.004372', '120.654502', b'1', '2018-12-05 10:19:06'),
(672, 'Balungao, Pangasinan', 'Region I (Ilocos Reg', '15.883709', '120.689006', b'1', '2018-12-05 10:19:06'),
(673, 'Bani, Pangasinan', 'Region I (Ilocos Reg', '16.222907', '119.858377', b'1', '2018-12-05 10:19:06'),
(674, 'Basista, Pangasinan', 'Region I (Ilocos Reg', '15.87163', '120.395428', b'1', '2018-12-05 10:19:06'),
(675, 'Bautista, Pangasinan', 'Region I (Ilocos Reg', '15.795275', '120.516395', b'1', '2018-12-05 10:19:06'),
(676, 'Bayambang, Pangasinan', 'Region I (Ilocos Reg', '15.800767', '120.412716', b'1', '2018-12-05 10:19:06'),
(677, 'Binalonan, Pangasinan', 'Region I (Ilocos Reg', '16.065853', '120.596976', b'1', '2018-12-05 10:19:06'),
(678, 'Binmaley, Pangasinan', 'Region I (Ilocos Reg', '15.998851', '120.285885', b'1', '2018-12-05 10:19:06'),
(679, 'Bolinao, Pangasinan', 'Region I (Ilocos Reg', '16.342536', '119.89273', b'1', '2018-12-05 10:19:06'),
(680, 'Bugallon, Pangasinan', 'Region I (Ilocos Reg', '15.920223', '120.182022', b'1', '2018-12-05 10:19:06'),
(681, 'Burgos, Pangasinan', 'Region I (Ilocos Reg', '16.062789', '119.869949', b'1', '2018-12-05 10:19:06'),
(682, 'Pangasinan', '', '', '', b'1', '2019-01-11 19:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `r_event_audience`
--

CREATE TABLE `r_event_audience` (
  `ev_aud_ID` int(10) NOT NULL,
  `ev_aud_desc` varchar(150) NOT NULL,
  `ev_aud_stat` bit(1) NOT NULL DEFAULT b'1',
  `ev_aud_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_event_audience`
--

INSERT INTO `r_event_audience` (`ev_aud_ID`, `ev_aud_desc`, `ev_aud_stat`, `ev_aud_timestamp`) VALUES
(1, 'Millenials', b'1', '2018-11-04'),
(2, 'Missionaries', b'1', '2018-11-05'),
(3, 'Students', b'1', '2018-11-17'),
(4, 'Professionals', b'1', '2018-11-17'),
(5, 'ytyytfdyd', b'0', '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `r_event_type`
--

CREATE TABLE `r_event_type` (
  `ev_type_ID` int(10) NOT NULL,
  `ev_type_name` varchar(50) NOT NULL,
  `ev_type_stat` bit(1) DEFAULT b'1',
  `ev_type_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_event_type`
--

INSERT INTO `r_event_type` (`ev_type_ID`, `ev_type_name`, `ev_type_stat`, `ev_type_timestamp`) VALUES
(1, 'Medical Missions', b'1', '2018-11-01'),
(2, 'Musical Concert', b'1', '2018-11-05'),
(3, 'Charity Event', b'1', '2018-11-17'),
(4, 'Feeding Program', b'1', '2018-11-17'),
(5, 'lokkkkl;', b'0', '2019-01-11'),
(6, 'adlkfjalkdjflkajlfd', b'0', '2019-01-12'),
(7, '24354543', b'0', '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `r_region`
--

CREATE TABLE `r_region` (
  `rgn_ID` int(10) NOT NULL,
  `rgn_name` varchar(200) NOT NULL,
  `rgn_stat` bit(1) DEFAULT b'1',
  `rgn_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_region`
--

INSERT INTO `r_region` (`rgn_ID`, `rgn_name`, `rgn_stat`, `rgn_timestamp`) VALUES
(1, 'NCR - (National Capital Region)', b'1', '2018-10-31'),
(2, 'Region 1 - (Ilocos Region)', b'1', '2018-10-31'),
(3, 'Region 2 (Cagayan Valley Region)', b'1', '2018-11-05'),
(4, 'Region 3 (Central Luzon)', b'1', '2018-11-05'),
(5, 'Region 4A (CALABARZON)', b'1', '2018-11-17'),
(6, 'Region 4B (MIMAROPA)', b'1', '2018-11-17'),
(7, 'Region 5 (Bicol Region)', b'1', '2018-11-17'),
(8, 'Region 6 (Western Visayas Region)', b'1', '2018-11-17'),
(9, 'Region 7 (Central Visayas Region)', b'1', '2018-11-17'),
(10, 'Region 8 (Eastern Visayas Region)', b'1', '2018-11-17'),
(11, 'Region 9 - Western Mindanao (Zamboanga Peninsula)', b'1', '2018-11-17'),
(12, 'Region 10 (Northern Mindanao)', b'1', '2018-11-17'),
(13, 'Region 11 (Southern Mindanao)', b'1', '2018-11-17'),
(14, 'Region 12 - Central Mindanao (SOCCSKSARGEN)', b'1', '2018-11-17'),
(15, 'Region 13 (CARAGA Region)', b'1', '2018-11-17'),
(16, 'Autonomous Region in Muslim Mindanao  (ARMM)', b'1', '2018-11-17'),
(17, 'Cordillera Autonomous Region (CAR) ', b'1', '2018-11-17'),
(18, 'Region 100 (YES)', b'1', '2019-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `r_religion`
--

CREATE TABLE `r_religion` (
  `rlg_ID` int(10) NOT NULL,
  `rlg_name` varchar(50) NOT NULL,
  `rlg_stat` bit(1) NOT NULL DEFAULT b'1',
  `rlg_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_religion`
--

INSERT INTO `r_religion` (`rlg_ID`, `rlg_name`, `rlg_stat`, `rlg_timestamp`) VALUES
(1, 'Roman Catholics', b'0', '2018-10-31'),
(2, 'Born Again Christian', b'1', '2018-10-31'),
(3, 'Islam', b'1', '2018-11-05'),
(4, 'Evangelical', b'1', '2018-11-17'),
(5, 'Aglipayan', b'1', '2018-11-17'),
(6, 'Iglesia ni Cristo', b'1', '2018-11-17'),
(7, 'Seventh Day Adventist', b'1', '2018-11-17'),
(8, 'afqe', b'0', '2019-01-12'),
(9, 'Roman Catholic', b'0', '2019-01-12'),
(10, 'jfdkgdhfgjkdsg', b'1', '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `r_steps`
--

CREATE TABLE `r_steps` (
  `step_ID` int(11) NOT NULL,
  `step_desc` varchar(50) NOT NULL,
  `step_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_steps`
--

INSERT INTO `r_steps` (`step_ID`, `step_desc`, `step_timestamp`) VALUES
(1, 'Gospel Conversation', '2018-11-07'),
(2, 'Exposed', '2018-11-07'),
(3, 'Prayed to Receive', '2018-11-10'),
(4, 'Followed Up', '2018-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `r_user_role`
--

CREATE TABLE `r_user_role` (
  `usr_ID` int(10) NOT NULL,
  `usr_desc` varchar(30) NOT NULL,
  `usr_stat` bit(1) NOT NULL DEFAULT b'1',
  `usr_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_user_role`
--

INSERT INTO `r_user_role` (`usr_ID`, `usr_desc`, `usr_stat`, `usr_timestamp`) VALUES
(1, 'Admin', b'1', '2018-10-31'),
(2, 'Group Leader', b'1', '2018-11-02'),
(3, 'Volunteer', b'1', '2018-11-02'),
(4, 'Super-User', b'1', '2018-11-05'),
(5, 'Budget and finance', b'1', '2019-01-11'),
(6, 'Admin', b'0', '2019-01-12'),
(7, 'Group Leader', b'1', '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `t_account`
--

CREATE TABLE `t_account` (
  `acc_ID` int(10) NOT NULL,
  `acc_username` varchar(50) NOT NULL,
  `acc_password` varchar(50) NOT NULL,
  `acc_user_role` varchar(20) NOT NULL,
  `acc_email` varchar(70) NOT NULL,
  `acc_group` int(10) DEFAULT NULL,
  `acc_grpldID` int(10) DEFAULT NULL,
  `acc_volunID` int(10) DEFAULT NULL,
  `acc_picture` varchar(255) DEFAULT NULL,
  `acc_active_flag` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_account`
--

INSERT INTO `t_account` (`acc_ID`, `acc_username`, `acc_password`, `acc_user_role`, `acc_email`, `acc_group`, `acc_grpldID`, `acc_volunID`, `acc_picture`, `acc_active_flag`) VALUES
(1, 'admin', 'admin', '1', 'cristianbalatbat@yahoo.com', 1, 1, NULL, 'default.png', 'Active'),
(2, 'mirai', 'mirai', '3', 'miraikuriyama@gmail.com', NULL, NULL, NULL, NULL, 'Active'),
(3, 'Cristian', 'mirai', '2', 'cristianbalatbat@yahoo.com', 2, 1, NULL, '', 'Active'),
(4, 'groupleader', 'mashu', '2', 'mashkyrielight@gmail.com', 3, 3, NULL, NULL, 'Active'),
(5, 'Sarada', 'sarada', '3', 'sarada@gmail.com', NULL, NULL, 2, NULL, 'Active'),
(6, 'Ainz', 'ainz', '3', 'ainz@yahoo.com', 3, NULL, 3, NULL, 'Active'),
(7, 'marts', 'marts', '3', 'martin@gmail.com', NULL, NULL, 4, NULL, 'Active'),
(8, 'sarah_joy', 'sarah', '3', 'sarah@gmail.com', 3, NULL, 5, NULL, 'Active'),
(9, 'oliver', 'oliver', '3', 'olivergabriel@gmail.com', NULL, NULL, 6, NULL, 'Active'),
(10, 'jojotimay', 'password', '3', 'jojotimay@email.com', 3, NULL, 7, NULL, 'Active'),
(12, 'melmicah', 'password', '3', 'melmicah@email.com', 0, NULL, 8, NULL, 'Active'),
(13, 'newuser', 'password', '3', 'newuser@email.com', NULL, NULL, 9, NULL, 'Active'),
(16, 'kerren', 'sad', '2', 'kerren@email.com', NULL, NULL, NULL, '7th Gen Temp.png', 'Active'),
(17, 'kelly', 'kelly', '3', 'kelly@gmail.com', 3, NULL, 10, NULL, '1'),
(18, 'peterpagran', 'yesyes', '5', 'peterpagran@gmail.com', NULL, NULL, NULL, NULL, '1'),
(19, 'kaza', 'lerry', '3', 'kaza.yahoo.com', NULL, NULL, 11, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_church`
--

CREATE TABLE `t_church` (
  `chr_ID` int(10) NOT NULL,
  `chr_name` varchar(80) NOT NULL,
  `chr_contact` varchar(100) NOT NULL,
  `chr_region` varchar(200) NOT NULL,
  `chr_city` varchar(70) NOT NULL,
  `chr_religion` varchar(30) NOT NULL,
  `chr_stat` bit(1) NOT NULL DEFAULT b'1',
  `chr_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_church`
--

INSERT INTO `t_church` (`chr_ID`, `chr_name`, `chr_contact`, `chr_region`, `chr_city`, `chr_religion`, `chr_stat`, `chr_timestamp`) VALUES
(1, 'St. Peter\'s Parish ', '09153245678', 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Roman Catholic', b'1', '2018-11-01'),
(2, 'Corpus Christi', '09887766543', 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Roman Catholic', b'1', '2018-11-05'),
(3, 'TLCC Outreach Church', 'Ptr. Hans Calunsag 0975-725-8632', 'Region 7 (Central Visayas Region)', 'Dapitan City, Zamboanga del Norte', 'Born Again Christian', b'1', '2018-11-17'),
(4, 'Glorious King Jesus Assembly', 'Ptr. Junrel Tudlas: 0932-321-6813', 'Region 10 (Northern Mindanao)', 'Damulog, Bukidnon', 'Born Again Christian', b'1', '2018-11-17'),
(5, 'House Church', 'Ptra. Josephine Canas Manilla: 0932-629-3271', 'Region 11 (Southern Mindanao)', 'Montevista, Campostela Valley', 'Born Again Christian', b'1', '2018-11-17'),
(6, 'CAMACOP', 'Ordie Tawaran: 09108913326', 'Cordillera Autonomous Region (CAR) ', 'Natonin, Mt. Province', 'Evangelical', b'1', '2018-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `t_datamine`
--

CREATE TABLE `t_datamine` (
  `dm_id` int(10) NOT NULL,
  `dm_datelog` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_datamine`
--

INSERT INTO `t_datamine` (`dm_id`, `dm_datelog`) VALUES
(1, '2018-11-14 12:08:12'),
(2, '2018-11-14 12:09:05'),
(3, '2018-11-14 12:20:45'),
(4, '2018-11-14 12:21:18'),
(5, '2018-11-14 12:21:37'),
(6, '2018-11-14 12:24:31'),
(7, '2018-11-14 12:24:36'),
(8, '2018-11-18 09:40:43'),
(9, '2018-11-18 11:10:42'),
(10, '2018-11-18 12:27:12'),
(11, '2018-11-18 12:28:08'),
(12, '2018-11-18 12:29:15'),
(13, '2018-12-05 10:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `t_ethnic`
--

CREATE TABLE `t_ethnic` (
  `eth_id` int(11) NOT NULL,
  `eth_name` varchar(255) NOT NULL,
  `eth_region` varchar(255) NOT NULL,
  `eth_rate` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ethnic`
--

INSERT INTO `t_ethnic` (`eth_id`, `eth_name`, `eth_region`, `eth_rate`, `timestamp`) VALUES
(1, 'Cebuano', 'Northern Mindanao', '35.59\n', '2018-09-13 02:23:20'),
(2, 'Cebuano', 'Davao Region', '37.76\n', '2018-09-13 02:23:20'),
(3, 'Hiligaynon / Ilonggo', 'SOCCSKSARGEN', '31.58\n', '2018-09-13 02:23:20'),
(4, 'Bisaya', 'Zamboanga Peninsula', '33.10\n', '2018-09-13 02:23:20'),
(5, 'Maranao', 'ARMM', '26.40\n', '2018-09-13 02:23:20'),
(6, 'Surigaonon', 'CARAGA', '25.70', '2018-11-16 21:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `t_event`
--

CREATE TABLE `t_event` (
  `event_ID` int(10) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_desc` varchar(200) NOT NULL,
  `event_bygrp` varchar(100) NOT NULL,
  `event_leader` varchar(70) NOT NULL,
  `event_budget` decimal(10,0) NOT NULL,
  `event_tarnum` varchar(100) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_day_duration` int(10) NOT NULL,
  `event_region` varchar(200) NOT NULL,
  `event_city` varchar(800) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `event_aud_desc` varchar(150) NOT NULL,
  `event_weather` varchar(30) DEFAULT NULL,
  `event_picture` varchar(300) DEFAULT NULL,
  `event_status` varchar(20) NOT NULL,
  `event_date_created` date NOT NULL,
  `event_active_flag` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_event`
--

INSERT INTO `t_event` (`event_ID`, `event_name`, `event_desc`, `event_bygrp`, `event_leader`, `event_budget`, `event_tarnum`, `event_start_date`, `event_end_date`, `event_day_duration`, `event_region`, `event_city`, `event_type`, `event_aud_desc`, `event_weather`, `event_picture`, `event_status`, `event_date_created`, `event_active_flag`) VALUES
(1, 'The Genesis Arrival', 'the first of all of all firsts', '3', '3', '10000', '', '2018-11-01', '2018-11-15', 14, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Missionaries', NULL, NULL, 'DONE', '2018-11-09', b'1'),
(2, 'Second Mission', 'the first of all', '3', '3', '100', '', '2018-11-08', '2018-11-09', 1, 'Region 9 - Western Mindanao (Zamboanga Peninsula)', 'Rizal, Zamboanga del Norte', 'Musical Concert', 'Millenials', NULL, NULL, 'DONE', '2018-11-09', b'1'),
(3, 'Third Event', 'event is third', '3', '3', '15000', '', '2018-11-01', '2018-11-04', 3, 'National Capital Region (NCR)', 'City of Manila, National Capital Region (NCR)', 'Medical Mission', 'Millenials', NULL, NULL, 'DONE', '2018-11-09', b'1'),
(4, 'Fourth Event', 'fourth event description 1', '3', '3', '10123', '', '2018-11-10', '2018-11-12', 2, 'Region 9 - Western Mindanao (Zamboanga Peninsula)', 'Salug, Zamboanga del Norte', 'Medical Mission', 'Missionaries', NULL, NULL, 'DONE', '2019-01-11', b'1'),
(5, 'Operation Jabez - Natonin', 'is a week-long mission outreach inspired by the prayer of Jabez in 1 Chronicles 4:10. Our desire is to expand Godâ€™s territory', '3', '3', '30000', '', '2018-11-18', '2018-11-24', 6, 'Cordillera Autonomous Region (CAR) ', 'Natonin, Mt. Province', 'Charity Event', 'Students', NULL, NULL, 'PENDING', '2018-11-17', b'1'),
(6, 'Arigato Event', 'hahahaha', '3', '3', '5000', '300', '2018-11-20', '2018-11-21', 1, 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Millenials', NULL, NULL, 'DONE', '2018-11-20', b'1'),
(7, 'Youth Concert', 'concert for every christian youth', '3', '3', '15000', '1000', '2018-12-06', '2018-12-06', 0, 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', NULL, NULL, 'PENDING', '2018-11-27', b'1'),
(8, 'Concert', 'sa tabi ng dagat', '3', '3', '10000', '500', '2019-01-16', '2019-11-17', 305, 'Region 3 (Central Luzon)', 'Godod, Zamboanga del Norte', 'Musical Concert', 'Students', NULL, NULL, 'DONE', '2019-01-12', b'1'),
(9, 'Seminar for Cultural activities', 'for indigenous people', '3', '3', '5000', '100', '2017-02-08', '2018-07-12', 519, 'NCR - (National Capital Region)', 'Gigaquit, Surigao del Norte', 'Medical Mission', 'Students', NULL, NULL, 'DONE', '2018-11-27', b'1'),
(10, 'Christian Youth Bible Study', 'For christian people', '3', '3', '100', '50', '2019-01-18', '2019-01-16', 2, 'Region 4A (CALABARZON)', 'Leon B. Postigo (Bacungan), Zamboanga del Norte', 'Charity Event', '', NULL, NULL, 'DONE', '2018-11-27', b'1'),
(11, 'Sample Event', 'description', '3', '3', '5000', '100', '2018-12-14', '2018-12-15', 1, 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Students', NULL, NULL, 'PENDING', '2018-12-14', b'1'),
(12, 'Earl Event', 'event ni earl', '3', '3', '3000', '200', '2019-04-05', '2019-04-05', 0, 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Missionaries', NULL, NULL, 'PENDING', '2019-04-05', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `t_event_activity`
--

CREATE TABLE `t_event_activity` (
  `act_ID` int(10) NOT NULL,
  `act_name` varchar(80) NOT NULL,
  `act_time` time NOT NULL,
  `act_event_ID` int(10) NOT NULL,
  `act_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_event_activity`
--

INSERT INTO `t_event_activity` (`act_ID`, `act_name`, `act_time`, `act_event_ID`, `act_timestamp`) VALUES
(1, 'Dining Dashing', '01:00:00', 3, '2018-11-06'),
(2, 'Prayer Meeting 1', '01:00:00', 2, '2018-11-06'),
(3, 'Prayer Meeting 2', '02:00:00', 2, '2018-11-06'),
(4, 'Prayer Meeting 3', '03:00:00', 2, '2018-11-06'),
(5, 'Invocation', '17:00:00', 1, '2018-11-07'),
(6, 'Flag Ceremony', '17:10:00', 1, '2018-11-07'),
(7, 'Opening Remarks', '17:00:00', 7, '2018-12-05'),
(8, '1st Song', '17:30:00', 7, '2018-12-05'),
(9, '2nd Song', '17:40:00', 7, '2018-12-05'),
(10, 'Break-Time', '17:50:00', 7, '2018-12-05'),
(11, '3rd Song', '18:00:00', 7, '2018-12-05'),
(12, '4th Song', '18:10:00', 7, '2018-12-05'),
(13, 'Closing Remarks', '18:20:00', 7, '2018-12-05'),
(14, 'Invocation', '13:00:00', 12, '2019-04-05'),
(15, 'Flag Cerem', '14:00:00', 12, '2019-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `t_event_attendance`
--

CREATE TABLE `t_event_attendance` (
  `ev_atnd_ID` int(10) NOT NULL,
  `ev_atnd_L_name` varchar(30) NOT NULL,
  `ev_atnd_F_name` varchar(50) NOT NULL,
  `ev_atnd_age` int(5) NOT NULL,
  `ev_atnd_gender` varchar(10) NOT NULL,
  `ev_atnd_contact` varchar(20) NOT NULL,
  `ev_atnd_date_attended` date NOT NULL,
  `ev_atnd_eventID` int(10) NOT NULL,
  `ev_atnd_registrar` varchar(80) NOT NULL,
  `ev_atnd_timestamp` date NOT NULL,
  `ev_atnd_status` varchar(255) NOT NULL,
  `ev_atnd_constat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_event_attendance`
--

INSERT INTO `t_event_attendance` (`ev_atnd_ID`, `ev_atnd_L_name`, `ev_atnd_F_name`, `ev_atnd_age`, `ev_atnd_gender`, `ev_atnd_contact`, `ev_atnd_date_attended`, `ev_atnd_eventID`, `ev_atnd_registrar`, `ev_atnd_timestamp`, `ev_atnd_status`, `ev_atnd_constat`) VALUES
(1, 'Cortesiano', 'Bryan', 12, 'Male', '2147483647', '2018-11-01', 1, 'Kurisu Kyrielight', '2018-11-07', 'Exposed', 0),
(2, 'Cortesiano', 'Bryan', 11, 'Male', '2147483647', '2018-11-09', 3, 'Kurisu Kyrielight', '2018-11-07', '', 0),
(3, 'Loyola', 'John Patrick', 14, 'Male', '2147483647', '2018-11-09', 3, 'Kurisu Kyrielight', '2018-11-07', '', 0),
(4, 'Magtibay', 'Joshua', 19, 'Male', '2147483647', '2018-11-09', 3, 'Kurisu Kyrielight', '2018-11-07', 'Prayed to Receive', 1),
(5, 'Maglaque', 'Gerard', 19, 'Male', '09123456721', '2018-11-07', 2, 'Kurisu Kyrielight', '2018-11-07', '', 0),
(6, 'Cortesiano', 'Bryan', 11, 'Male', '09123456789', '2018-11-14', 2, 'Kurisu Kyrielight', '2018-11-07', '', 0),
(7, 'Resnera', 'Julie Ann', 19, 'Female', '09452896722', '2018-11-10', 3, 'Sarah Joy Lambino', '2018-11-09', '', 0),
(8, 'Lambino', 'John Mark', 29, 'Male', '09995165157', '2018-11-09', 1, 'Sarah Joy Lambino', '2018-11-09', 'Exposed', 1),
(9, 'Lambino', 'John Mark', 23, 'Male', '09995165157', '2018-11-10', 4, 'Jojo Timay', '2018-11-09', 'Prayed to Receive', 0),
(10, 'Lambino', 'John Edison', 31, 'Male', '09995165158', '2018-11-09', 4, 'Jojo Timay', '2018-11-09', 'Prayed to Receive', 0),
(11, 'Lambino', 'Charles John', 7, 'Male', '09995165159', '2018-11-09', 4, 'Jojo Timay', '2018-11-09', 'Exposed', 1),
(12, 'Lambino', 'Charlyn', 23, 'Female', '09995165160', '2018-11-10', 4, 'Jojo Timay', '2018-11-10', 'Exposed', 1),
(13, 'Lambino', 'Elisha Mae', 2, 'Female', '09995165161', '2018-11-10', 4, 'Kurisu Kyrielight', '2018-11-10', 'Followed Up', 1),
(14, 'Lambino', 'John Patrick', 21, 'Male', '09995165161', '2018-11-10', 4, 'Kurisu Kyrielight', '2018-11-17', 'Gospel Conversation', 1),
(15, 'Anical', 'ddddd', 18, 'Female', '091244', '2019-01-15', 10, 'Kurisu Kyrielight', '2019-01-12', 'Prayed to Receive', 0),
(16, 'Anical', 'ddddd', 18, 'Female', '012345678kk', '2019-01-23', 9, 'Kurisu Kyrielight', '2019-01-12', 'Prayed to Receive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_event_budget`
--

CREATE TABLE `t_event_budget` (
  `bdgt_ID` int(10) NOT NULL,
  `bdgt_particular` varchar(100) NOT NULL,
  `bdgt_amount` int(100) NOT NULL,
  `bdgt_date_spent` date NOT NULL,
  `bdgt_eventID` int(10) NOT NULL,
  `bdgt_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_event_budget`
--

INSERT INTO `t_event_budget` (`bdgt_ID`, `bdgt_particular`, `bdgt_amount`, `bdgt_date_spent`, `bdgt_eventID`, `bdgt_timestamp`) VALUES
(1, 'Raw Materials', 1000, '2018-11-11', 1, '2018-11-14'),
(2, 'Other Equipments', 5000, '2018-11-12', 1, '2018-11-14'),
(3, 'Other Devices', 4000, '2018-11-12', 1, '2018-11-14'),
(4, 'Transpo', 3000, '2018-11-10', 4, '2018-11-17'),
(5, 'pappapa', 5678, '2018-11-20', 4, '2018-11-20'),
(6, 'trttr', 100, '2018-11-20', 6, '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `t_event_material`
--

CREATE TABLE `t_event_material` (
  `ev_mat_ID` int(10) NOT NULL,
  `ev_mat_name` varchar(80) NOT NULL,
  `ev_mat_quantity` int(11) NOT NULL,
  `ev_mat_eventID` int(10) NOT NULL,
  `ev_mat_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_event_material`
--

INSERT INTO `t_event_material` (`ev_mat_ID`, `ev_mat_name`, `ev_mat_quantity`, `ev_mat_eventID`, `ev_mat_timestamp`) VALUES
(1, 'First bible', 2, 1, '2018-11-06'),
(2, 'Projector', 2, 4, '2018-11-10'),
(3, 'Guitar', 2, 7, '2018-12-05'),
(4, 'Drum Set', 1, 7, '2018-12-05'),
(5, 'Amplifiers', 4, 7, '2018-12-05'),
(6, 'chairs', 3, 5, '2019-01-12'),
(7, 'tables', 100, 7, '2019-01-12'),
(8, 'Projector', 2, 11, '2018-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `t_event_registration`
--

CREATE TABLE `t_event_registration` (
  `er_ID` int(10) NOT NULL,
  `er_eventID` int(10) NOT NULL,
  `er_volunID` int(10) NOT NULL,
  `er_date_joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_event_registration`
--

INSERT INTO `t_event_registration` (`er_ID`, `er_eventID`, `er_volunID`, `er_date_joined`) VALUES
(7, 4, 7, '2018-11-17'),
(8, 1, 5, '2018-11-17'),
(9, 1, 9, '2018-11-18'),
(12, 7, 10, '2018-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `t_group`
--

CREATE TABLE `t_group` (
  `grp_ID` int(10) NOT NULL,
  `grp_name` varchar(80) NOT NULL,
  `grp_desc` varchar(200) DEFAULT NULL,
  `grp_leader` varchar(10) DEFAULT NULL,
  `grp_region` varchar(200) NOT NULL,
  `grp_city` varchar(700) NOT NULL,
  `grp_religion` varchar(30) NOT NULL,
  `grp_church_affil` varchar(50) DEFAULT NULL,
  `grp_stat` varchar(40) NOT NULL DEFAULT 'Active',
  `grp_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_group`
--

INSERT INTO `t_group` (`grp_ID`, `grp_name`, `grp_desc`, `grp_leader`, `grp_region`, `grp_city`, `grp_religion`, `grp_church_affil`, `grp_stat`, `grp_timestamp`) VALUES
(1, 'Christ the Jesus Community', '                                                                                                                                                                        A christian organization', 'N/A', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Born Again Christian', 'N/A', 'Active', '2018-10-31'),
(2, 'I-Rock Christian Group', '                                                                                                                A christian organization', 'N/A', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Born Again Christian', 'N/A', 'Active', '2018-11-05'),
(3, 'Armour.org', 'Org about strong-willed people                                  ', '3', 'Region 11 (Southern Mindanao)', 'Manukan, Zamboanga del Norte', 'Born Again Christian', 'TLCC Outreach Church', 'Active', '2018-11-27'),
(4, 'Red Cross Youth', 'A medical youth foundation founded by religious person', '1', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Roman Catholic', 'N/A', 'Active', '2018-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `t_groupleader`
--

CREATE TABLE `t_groupleader` (
  `grpld_ID` int(10) NOT NULL,
  `grpld_last_Name` varchar(30) NOT NULL,
  `grpld_first_Name` varchar(50) NOT NULL,
  `grpld_middle_Name` varchar(30) DEFAULT NULL,
  `grpld_gender` varchar(10) NOT NULL,
  `grpld_Birthdate` date NOT NULL,
  `grpld_religion` varchar(50) NOT NULL,
  `grpld_region` varchar(50) NOT NULL,
  `grpld_city` varchar(50) NOT NULL,
  `grpld_contact` varchar(20) NOT NULL,
  `grpld_email` varchar(70) NOT NULL,
  `grpld_group` int(10) DEFAULT NULL,
  `grpld_active_flag` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_groupleader`
--

INSERT INTO `t_groupleader` (`grpld_ID`, `grpld_last_Name`, `grpld_first_Name`, `grpld_middle_Name`, `grpld_gender`, `grpld_Birthdate`, `grpld_religion`, `grpld_region`, `grpld_city`, `grpld_contact`, `grpld_email`, `grpld_group`, `grpld_active_flag`) VALUES
(1, 'Balatbat', 'Cristian', 'Oro', 'Male', '1999-10-26', 'Roman Catholic', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '996774', 'cristianbalatbat@yahoo.com', 4, 'Active'),
(3, 'Kyrielight', 'Kurisu', 'Mash', 'Female', '1994-11-02', 'Born Again Christian', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '2147483647', 'mashkyrielight@gmail.com', 3, 'Active'),
(4, 'Basbasan', 'Kerren Faith', 'Fangonon', 'Female', '1990-06-30', 'Born Again Christian', 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', '09259913222', 'kerren@email.com', NULL, 'Active'),
(5, 'Tamayo', 'Luna', 'kjnkj', 'Male', '2001-01-09', 'Born Again Christian', 'Region 4A (CALABARZON)', 'Dipolog City, Zamboanga del Norte', '1654165jkhk', 'lkjhklhjkl@gmail', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_group_material`
--

CREATE TABLE `t_group_material` (
  `grp_mat_ID` int(10) NOT NULL,
  `grp_mat_name` varchar(80) NOT NULL,
  `grp_mat_desc` varchar(100) NOT NULL,
  `grp_mat_grpID` int(10) NOT NULL,
  `grp_mat_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_group_material`
--

INSERT INTO `t_group_material` (`grp_mat_ID`, `grp_mat_name`, `grp_mat_desc`, `grp_mat_grpID`, `grp_mat_timestamp`) VALUES
(1, 'Good Lord\'s Bible', 'The bible for Christian Youth', 3, '2018-11-05'),
(2, 'New Testament Bible', 'Pinoy Version', 3, '2018-11-10'),
(3, 'old testament', 'old', 3, '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `t_history_event`
--

CREATE TABLE `t_history_event` (
  `his_event_ID` int(10) NOT NULL,
  `his_event_name` varchar(150) NOT NULL,
  `his_event_desc` varchar(200) NOT NULL,
  `his_event_bygrp` varchar(100) NOT NULL,
  `his_event_leader` varchar(170) NOT NULL,
  `his_event_budget` decimal(10,0) NOT NULL,
  `his_event_numaud` varchar(100) NOT NULL,
  `his_event_start_date` date NOT NULL,
  `his_event_end_date` date NOT NULL,
  `his_event_day_duration` int(10) NOT NULL,
  `his_event_region` varchar(200) NOT NULL,
  `his_event_city` varchar(255) NOT NULL,
  `his_event_type` varchar(50) NOT NULL,
  `his_event_aud_desc` varchar(150) NOT NULL,
  `his_event_weather` varchar(50) DEFAULT NULL,
  `his_event_attendees` varchar(20) NOT NULL,
  `his_event_actual_budget` decimal(10,0) NOT NULL,
  `his_event_picture` varchar(250) DEFAULT NULL,
  `his_event_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_history_event`
--

INSERT INTO `t_history_event` (`his_event_ID`, `his_event_name`, `his_event_desc`, `his_event_bygrp`, `his_event_leader`, `his_event_budget`, `his_event_numaud`, `his_event_start_date`, `his_event_end_date`, `his_event_day_duration`, `his_event_region`, `his_event_city`, `his_event_type`, `his_event_aud_desc`, `his_event_weather`, `his_event_attendees`, `his_event_actual_budget`, `his_event_picture`, `his_event_timestamp`) VALUES
(1, 'Januarian EventOne', 'first event for january', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-01-01', '2017-01-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Community', 'Sunny', '80', '50000', NULL, '2018-11-16'),
(2, 'Januarian EventTwo', 'second event for january', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-01-29', '2017-01-29', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Feeding Program', 'Community', 'Sunny', '50', '50000', NULL, '2018-11-16'),
(3, 'Februarian EventOne', 'first event for february', 'Jesus Youth Org', 'Kurisu Kyrielight', '80000', '', '2017-02-02', '2017-02-02', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '200', '90000', NULL, '2018-11-16'),
(4, 'Februarian EventTwo', 'second event for february', 'Jesus Youth Org', 'Kurisu Kyrielight', '70000', '', '2017-02-27', '2017-02-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Millenials', 'Sunny', '20', '75000', NULL, '2018-11-16'),
(5, 'Marchian EventOne', 'first event for march', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-03-01', '2017-03-03', 2, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Students', 'Sunny', '400', '50000', NULL, '2018-11-16'),
(6, 'Marchian EventTwo', 'second event for march', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-03-26', '2017-03-28', 2, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Students', 'Sunny', '150', '50000', NULL, '2018-11-16'),
(7, 'Aprilian EventOne', 'first event for april', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-04-01', '2017-04-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '250', '50000', NULL, '2018-11-16'),
(8, 'Aprilian EventTwo', 'second event for april', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-04-27', '2017-04-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '500', '50000', NULL, '2018-11-16'),
(9, 'Mayian EventOne', 'first event for may', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-05-01', '2017-05-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Professionals', 'Sunny', '240', '50000', NULL, '2018-11-16'),
(10, 'Mayian EventTwo', 'second event for may', 'Jesus Youth Org', 'Kurisu Kyrielight', '10000', '', '2017-05-26', '2017-05-26', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Professionals', 'Sunny', '270', '10000', NULL, '2018-11-16'),
(11, 'Junerian EventOne', 'first event for june', 'Jesus Youth Org', 'Kurisu Kyrielight', '50000', '', '2017-06-01', '2017-06-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Feeding Program', 'Millenials', 'Rainy', '300', '40000', NULL, '2018-11-16'),
(12, 'Junerian EventTwo', 'second event for june', 'Jesus Youth Org', 'Kurisu Kyrielight', '50000', '', '2017-06-29', '2017-06-29', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Feeding Program', 'Millenials', 'Rainy', '300', '40000', NULL, '2018-11-16'),
(13, 'Julyian EventOne', 'first event for july', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-07-01', '2017-07-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Community', 'Sunny', '678', '50000', NULL, '2018-11-16'),
(14, 'Julyian EventTwo', 'second event for july', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-07-28', '2017-07-28', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Community', 'Sunny', '342', '50000', NULL, '2018-11-16'),
(15, 'Augustian EventOne', 'first event for august', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-08-01', '2017-08-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Professionals', 'Sunny', '420', '50000', NULL, '2018-11-16'),
(16, 'Augustian EventTwo', 'second event for august', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-08-27', '2017-08-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Professionals', 'Sunny', '520', '50000', NULL, '2018-11-16'),
(17, 'Septemberian EventOne', 'first event for september', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-09-02', '2017-09-02', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Students', 'Sunny', '220', '50000', NULL, '2018-11-16'),
(18, 'Septemberian EventTwo', 'second event for september', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-09-25', '2017-09-25', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Students', 'Sunny', '220', '50000', NULL, '2018-11-16'),
(19, 'Octoberian EventOne', 'first event for october', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-10-01', '2017-10-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Millenials', 'Fair', '400', '50000', NULL, '2018-11-16'),
(20, 'Octoberian EventTwo', 'second event for october', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-10-27', '2017-10-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Millenials', 'Fair', '210', '50000', NULL, '2018-11-16'),
(21, 'Novemberian EventOne', 'first event for november', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-11-04', '2017-11-04', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '250', '50000', NULL, '2018-11-16'),
(22, 'Novemberian EventTwo', 'second event for november', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-11-26', '2017-11-26', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Millenials', 'Sunny', '230', '50000', NULL, '2018-11-16'),
(23, 'Decemberian EventOne', 'first event for december', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2017-12-01', '2017-12-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Community', 'Cloudy', '600', '50000', NULL, '2018-11-16'),
(24, 'Decemberian EventTwo', 'second event for december', 'Jesus Youth Org', 'Kurisu Kyrielight', '100000', '', '2017-12-23', '2017-12-23', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Professionals', 'Cloudy', '100', '90000', NULL, '2018-11-16'),
(25, 'Januarian EventOne', 'first event for january', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-01-01', '2018-01-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Community', 'Sunny', '90', '50000', NULL, '2018-11-17'),
(26, 'Januarian EventTwo', 'second event for january', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-01-29', '2018-01-29', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Feeding Program', 'Community', 'Sunny', '60', '50000', NULL, '2018-11-17'),
(27, 'Februarian EventOne', 'first event for february', 'Jesus Youth Org', 'Kurisu Kyrielight', '80000', '', '2018-02-02', '2018-02-02', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '270', '90000', NULL, '2018-11-17'),
(28, 'Februarian EventTwo', 'second event for february', 'Jesus Youth Org', 'Kurisu Kyrielight', '70000', '', '2018-02-27', '2018-02-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Millenials', 'Sunny', '37', '75000', NULL, '2018-11-17'),
(29, 'Marchian EventOne', 'first event for march', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-03-01', '2018-03-03', 2, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Students', 'Sunny', '490', '50000', NULL, '2018-11-17'),
(30, 'Marchian EventTwo', 'second event for march', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-03-26', '2018-03-28', 2, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Students', 'Sunny', '180', '50000', NULL, '2018-11-17'),
(31, 'Aprilian EventOne', 'first event for april', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-04-01', '2018-04-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '350', '50000', NULL, '2018-11-17'),
(32, 'Aprilian EventTwo', 'second event for april', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-04-27', '2018-04-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '430', '50000', NULL, '2018-11-17'),
(33, 'Mayian EventOne', 'first event for may', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-05-01', '2018-05-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Professionals', 'Sunny', '280', '50000', NULL, '2018-11-17'),
(34, 'Mayian EventTwo', 'second event for may', 'Jesus Youth Org', 'Kurisu Kyrielight', '10000', '', '2018-05-26', '2018-05-26', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Professionals', 'Sunny', '290', '10000', NULL, '2018-11-17'),
(35, 'Junerian EventOne', 'first event for june', 'Jesus Youth Org', 'Kurisu Kyrielight', '50000', '', '2018-06-01', '2018-06-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Feeding Program', 'Millenials', 'Rainy', '570', '40000', NULL, '2018-11-17'),
(36, 'Junerian EventTwo', 'second event for june', 'Jesus Youth Org', 'Kurisu Kyrielight', '50000', '', '2018-06-29', '2018-06-29', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Feeding Program', 'Millenials', 'Rainy', '320', '40000', NULL, '2018-11-17'),
(37, 'Julyian EventOne', 'first event for july', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-07-01', '2018-07-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Community', 'Sunny', '578', '50000', NULL, '2018-11-17'),
(38, 'Julyian EventTwo', 'second event for july', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-07-28', '2018-07-28', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Community', 'Sunny', '383', '50000', NULL, '2018-11-17'),
(39, 'Augustian EventOne', 'first event for august', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-08-01', '2018-08-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Professionals', 'Sunny', '467', '50000', NULL, '2018-11-17'),
(40, 'Augustian EventTwo', 'second event for august', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-08-27', '2018-08-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Charity Event', 'Professionals', 'Sunny', '552', '50000', NULL, '2018-11-17'),
(41, 'Septemberian EventOne', 'first event for september', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-09-02', '2018-09-02', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Students', 'Sunny', '180', '50000', NULL, '2018-11-17'),
(42, 'Septemberian EventTwo', 'second event for september', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-09-25', '2018-09-25', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Students', 'Sunny', '310', '50000', NULL, '2018-11-17'),
(43, 'Octoberian EventOne', 'first event for october', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-10-01', '2018-10-01', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Millenials', 'Fair', '450', '50000', NULL, '2018-11-17'),
(44, 'Octoberian EventTwo', 'second event for october', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-10-27', '2018-10-27', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Prayer Meeting', 'Millenials', 'Fair', '290', '50000', NULL, '2018-11-17'),
(45, 'Novemberian EventOne', 'first event for november', 'Jesus Youth Org', 'Kurisu Kyrielight', '60000', '', '2018-11-04', '2018-11-04', 1, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Musical Concert', 'Millenials', 'Sunny', '587', '50000', NULL, '2018-11-17'),
(46, 'The Genesis Arrival', 'the first of all of all firsts', '3', '3', '10000', '', '2018-11-01', '2018-11-15', 14, 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Missionaries', 'Sunny', '2', '10000', NULL, '2018-11-18'),
(47, 'Second Mission', 'the first of all', '3', '3', '60000', '', '2018-11-08', '2018-11-09', 1, 'Region 9 - Western Mindanao (Zamboanga Peninsula)', 'Rizal, Zamboanga del Norte', 'Musical Concert', 'Millenials', 'Sunny', '2', '0', NULL, '2018-11-20'),
(48, 'Arigato Event', 'hahahaha', '3', '3', '5000', '300', '2018-11-20', '2018-11-21', 1, 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', 'Medical Mission', 'Millenials', 'Cloudy', '0', '100', NULL, '2018-11-20'),
(49, 'Fourth Event', 'fourth event description 1', '3', '3', '10123', '', '2018-11-10', '2018-11-12', 2, 'Region 9 - Western Mindanao (Zamboanga Peninsula)', 'Salug, Zamboanga del Norte', 'Medical Mission', 'Missionaries', '', '6', '8678', NULL, '2019-01-11'),
(50, 'Concert', 'sa tabi ng dagat', '3', '3', '10000', '500', '2019-01-16', '2019-11-17', 305, 'Region 3 (Central Luzon)', 'Godod, Zamboanga del Norte', 'Musical Concert', 'Students', '', '0', '0', NULL, '2019-01-12'),
(51, 'Seminar for Cultural activities', 'for indigenous people', '3', '3', '5000', '100', '2017-02-08', '2018-07-12', 519, 'NCR - (National Capital Region)', 'Gigaquit, Surigao del Norte', 'Medical Mission', 'Students', '', '1', '0', NULL, '2018-11-27'),
(52, 'Christian Youth Bible Study', 'For christian people', '3', '3', '100', '50', '2019-01-18', '2019-01-16', 2, 'Region 4A (CALABARZON)', 'Leon B. Postigo (Bacungan), Zamboanga del Norte', 'Charity Event', '', 'Cloudy', '1', '0', NULL, '2018-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `t_history_event_attendance`
--

CREATE TABLE `t_history_event_attendance` (
  `his_ev_atnd_ID` int(10) NOT NULL,
  `his_ev_atnd_L_name` varchar(70) NOT NULL,
  `his_ev_atnd_F_name` varchar(70) NOT NULL,
  `his_ev_atnd_age` int(5) NOT NULL,
  `his_ev_gender` varchar(10) NOT NULL,
  `his_ev_atnd_city` varchar(255) NOT NULL,
  `his_ev_atnd_contact` int(12) DEFAULT NULL,
  `his_ev_atnd_date_attended` date NOT NULL,
  `his_ev_atnd_eventID` int(10) NOT NULL,
  `his_ev_atnd_registrar` varchar(100) NOT NULL,
  `his_ev_atnd_timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_language`
--

CREATE TABLE `t_language` (
  `lang_id` int(11) NOT NULL,
  `lang_name` varchar(255) NOT NULL,
  `lang_region` varchar(255) NOT NULL,
  `lang_rate` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_language`
--

INSERT INTO `t_language` (`lang_id`, `lang_name`, `lang_region`, `lang_rate`, `timestamp`) VALUES
(1, 'Bisaya / Binisaya', 'Zamboanga Peninsula', '39.09\n', '2018-09-13 02:23:20'),
(2, 'Bisaya / Binisaya', 'Northern Mindanao', '39.9\n', '2018-09-13 02:23:20'),
(3, 'Cebuano', 'Davao Region', '42.26\n', '2018-09-13 02:23:20'),
(4, 'Cebuano', 'CARAGA', '29.65\n', '2018-09-13 02:23:20'),
(5, 'Hiligaynon / Ilonggo', 'SOCCSKSARGEN', '33.54\n', '2018-09-13 02:23:20'),
(6, 'Tausug', 'ARMM', '24.66', '2018-09-13 02:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `t_relperreg`
--

CREATE TABLE `t_relperreg` (
  `rpg_ID` int(10) NOT NULL,
  `rpg_region` varchar(255) NOT NULL,
  `rpg_religion` varchar(70) NOT NULL,
  `rpg_rate` varchar(20) NOT NULL,
  `rpg_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_relperreg`
--

INSERT INTO `t_relperreg` (`rpg_ID`, `rpg_region`, `rpg_religion`, `rpg_rate`, `rpg_timestamp`) VALUES
(1, 'NCR - (National Capital Region)', 'Roman Catholic', '60.57', '2018-12-05 10:19:06'),
(2, 'NCR - (National Capital Region)', 'Born Again Christian', '47.23', '2018-12-05 10:19:06'),
(3, 'Region 1 - (Ilocos Region)', 'Roman Catholic', '59.21', '2018-12-05 10:19:06'),
(4, 'Region 2 (Cagayan Valley Region)', 'Roman Catholic', '24.57', '2018-12-05 10:19:06'),
(5, 'Region 3 (Central Luzon)', 'Roman Catholic', '85.92', '2018-12-05 10:19:06'),
(6, 'Region 4A (CALABARZON)', 'Born Again Christian', '65.28', '2018-12-05 10:19:06'),
(7, 'Region 4B (MIMAROPA)', 'Roman Catholic', '75.32', '2018-12-05 10:19:06'),
(8, 'Region 5 (Bicol Region)', 'Roman Catholic', '90.27', '2018-12-05 10:19:06'),
(9, 'Region 7 (Central Visayas Region)', 'Roman Catholic', '49.97', '2018-12-05 10:19:06'),
(10, 'Region 8 (Eastern Visayas Region)', 'Born Again Christian', '81.43', '2018-12-05 10:19:06'),
(11, 'Region 9 - Western Mindanao (Zamboanga Peninsula)', 'Islam', '64.67', '2018-12-05 10:19:06'),
(12, 'Region 10 (Northern Mindanao)', 'Islam', '36.27', '2018-12-05 10:19:06'),
(13, 'Region 11 (Southern Mindanao)', 'Roman Catholic', '25.62', '2018-12-05 10:19:06'),
(14, 'Region 12 - Central Mindanao (SOCCSKSARGEN)', 'Roman Catholic', '55.43', '2018-12-05 10:19:06'),
(15, 'Region 13 (CARAGA Region)', 'Islam', '72.17', '2018-12-05 10:19:06'),
(16, 'Autonomous Region in Muslim Mindanao  (ARMM)', 'Islam', '66.56', '2018-12-05 10:19:06'),
(17, 'Cordillera Autonomous Region (CAR)', 'Islam', '88.47', '2018-12-05 10:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `t_volunteer`
--

CREATE TABLE `t_volunteer` (
  `volun_ID` int(10) NOT NULL,
  `volun_last_Name` varchar(30) NOT NULL,
  `volun_first_Name` varchar(50) NOT NULL,
  `volun_middle_Name` varchar(30) DEFAULT NULL,
  `volun_gender` varchar(10) NOT NULL,
  `volun_Birthdate` date NOT NULL,
  `volun_religion` varchar(50) NOT NULL,
  `volun_region` varchar(50) NOT NULL,
  `volun_city` varchar(50) NOT NULL,
  `volun_contact` varchar(20) NOT NULL,
  `volun_email` varchar(70) NOT NULL,
  `volun_group` int(10) DEFAULT NULL,
  `volun_status` varchar(50) DEFAULT NULL,
  `volun_constat` varchar(15) DEFAULT NULL,
  `volun_active_flag` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_volunteer`
--

INSERT INTO `t_volunteer` (`volun_ID`, `volun_last_Name`, `volun_first_Name`, `volun_middle_Name`, `volun_gender`, `volun_Birthdate`, `volun_religion`, `volun_region`, `volun_city`, `volun_contact`, `volun_email`, `volun_group`, `volun_status`, `volun_constat`, `volun_active_flag`) VALUES
(1, 'Kuriyama', 'Mirai', NULL, 'Female', '2000-10-10', 'Born-Again Christian', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '09153257869', 'miraikuriyama@gmail.com', NULL, NULL, '0', b'1'),
(2, 'Uchiha', 'Sarada', 'Haruno', 'Female', '2004-11-05', 'Born Again Christian', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '09876543211', 'sarada@gmail.com', NULL, NULL, '0', b'1'),
(3, 'Walenstein', 'Ainz', 'Liz', 'Female', '2006-07-26', 'Roman Catholic', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '09956789123', 'ainz@gmail.com', 3, 'Exposed', '1', b'1'),
(4, 'Oliva', 'Jeave Martin', 'Sarmiento', 'Male', '1998-06-12', 'Roman Catholic', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '09967742086', 'marts@gmail.com', 1, NULL, '0', b'1'),
(5, 'Lambino', 'Sarah Joy', 'Marquez', 'Female', '1992-12-18', 'Born Again Christian', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '09876123456', 'sarah@gmail.com', 3, 'Followed Up', '1', b'1'),
(6, 'Gabriel', 'Oliver', 'Juan', 'Male', '1998-11-16', 'Born Again Christian', 'National Capital Region (NCR)', 'Quezon City, National Capital Region (NCR)', '09978912341', 'olivergabriel@gmail.com', NULL, 'Gospel Conversed', '0', b'1'),
(7, 'Timay', 'Jojo', 'Augustus', 'Male', '1985-11-30', 'Born Again Christian', 'Region 9 - Western Mindanao (Zamboanga Peninsula)', 'Salug, Zamboanga del Norte', '09995165157', 'jojotimay@email.com', 3, 'Prayed to Receive', '1', b'1'),
(8, 'Catalon', 'Mel Micah', 'Baylon', 'Male', '1987-08-10', 'Born Again Christian', 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', '09995165158', 'melmicah@email.com', 0, NULL, '0', b'1'),
(9, 'New', 'New', 'New', 'Male', '1981-11-01', 'Born Again Christian', 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', '09995165159', 'newuser@email.com', NULL, NULL, '0', b'1'),
(10, 'Wilkinson', 'Kelly', 'Belly', 'Female', '1999-12-14', 'Born Again Christian', 'NCR - (National Capital Region)', 'Quezon City, National Capital Region (NCR)', '09456728113', 'kelly@gmail.com', 3, NULL, '0', b'1'),
(11, 'Danvers', 'Kaza', 'Doga', 'Female', '2006-05-15', 'Born Again Christian', 'Region 1 - (Ilocos Region)', 'Godod, Zamboanga del Norte', '091111633dd', 'kaza.yahoo.com', NULL, NULL, '0', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `t_weather`
--

CREATE TABLE `t_weather` (
  `w_ID` int(10) NOT NULL,
  `w_desc` varchar(50) NOT NULL,
  `w_date` date NOT NULL,
  `w_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_weather`
--

INSERT INTO `t_weather` (`w_ID`, `w_desc`, `w_date`, `w_city`) VALUES
(1, 'Cloudy', '2017-11-01', 'Quezon City, National Capital Region (NCR)'),
(2, 'Cloudy', '2017-11-02', 'Quezon City, National Capital Region (NCR)'),
(3, 'Sunny', '2017-11-03', 'Quezon City, National Capital Region (NCR)'),
(4, 'Sunny', '2017-11-04', 'Quezon City, National Capital Region (NCR)'),
(5, 'Sunny', '2017-11-05', 'Quezon City, National Capital Region (NCR)'),
(6, 'Windy', '2017-11-06', 'Quezon City, National Capital Region (NCR)'),
(7, 'Fair', '2017-11-07', 'Quezon City, National Capital Region (NCR)'),
(8, 'Rainy', '2017-11-08', 'Quezon City, National Capital Region (NCR)'),
(9, 'Cloudy', '2017-11-09', 'Quezon City, National Capital Region (NCR)'),
(10, 'Sunny', '2017-11-10', 'Quezon City, National Capital Region (NCR)'),
(11, 'Sunny', '2017-11-11', 'Quezon City, National Capital Region (NCR)'),
(12, 'Sunny', '2017-11-12', 'Quezon City, National Capital Region (NCR)'),
(13, 'Rainy', '2017-11-13', 'Quezon City, National Capital Region (NCR)'),
(14, 'Sunny', '2017-11-14', 'Quezon City, National Capital Region (NCR)'),
(15, 'Fair', '2017-11-15', 'Quezon City, National Capital Region (NCR)'),
(16, 'Windy', '2017-11-16', 'Quezon City, National Capital Region (NCR)'),
(17, 'Cloudy', '2017-11-17', 'Quezon City, National Capital Region (NCR)'),
(18, 'Cloudy', '2017-11-18', 'Quezon City, National Capital Region (NCR)'),
(19, 'Rainy', '2017-11-19', 'Quezon City, National Capital Region (NCR)'),
(20, 'Sunny', '2017-11-20', 'Quezon City, National Capital Region (NCR)'),
(21, 'Sunny', '2017-11-21', 'Quezon City, National Capital Region (NCR)'),
(22, 'Cloudy', '2017-11-22', 'Quezon City, National Capital Region (NCR)'),
(23, 'Rainy', '2017-11-23', 'Quezon City, National Capital Region (NCR)'),
(24, 'Fair', '2017-11-24', 'Quezon City, National Capital Region (NCR)'),
(25, 'Fair', '2017-11-25', 'Quezon City, National Capital Region (NCR)'),
(26, 'Windy', '2017-11-26', 'Quezon City, National Capital Region (NCR)'),
(27, 'Fair', '2017-11-27', 'Quezon City, National Capital Region (NCR)'),
(28, 'Sunny', '2017-11-28', 'Quezon City, National Capital Region (NCR)'),
(29, 'Rainy', '2017-11-29', 'Quezon City, National Capital Region (NCR)'),
(30, 'Rainy', '2017-11-30', 'Quezon City, National Capital Region (NCR)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r_city`
--
ALTER TABLE `r_city`
  ADD PRIMARY KEY (`city_ID`);

--
-- Indexes for table `r_event_audience`
--
ALTER TABLE `r_event_audience`
  ADD PRIMARY KEY (`ev_aud_ID`);

--
-- Indexes for table `r_event_type`
--
ALTER TABLE `r_event_type`
  ADD PRIMARY KEY (`ev_type_ID`);

--
-- Indexes for table `r_region`
--
ALTER TABLE `r_region`
  ADD PRIMARY KEY (`rgn_ID`);

--
-- Indexes for table `r_religion`
--
ALTER TABLE `r_religion`
  ADD PRIMARY KEY (`rlg_ID`);

--
-- Indexes for table `r_steps`
--
ALTER TABLE `r_steps`
  ADD PRIMARY KEY (`step_ID`);

--
-- Indexes for table `r_user_role`
--
ALTER TABLE `r_user_role`
  ADD PRIMARY KEY (`usr_ID`);

--
-- Indexes for table `t_account`
--
ALTER TABLE `t_account`
  ADD PRIMARY KEY (`acc_ID`);

--
-- Indexes for table `t_church`
--
ALTER TABLE `t_church`
  ADD PRIMARY KEY (`chr_ID`);

--
-- Indexes for table `t_datamine`
--
ALTER TABLE `t_datamine`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `t_ethnic`
--
ALTER TABLE `t_ethnic`
  ADD PRIMARY KEY (`eth_id`);

--
-- Indexes for table `t_event`
--
ALTER TABLE `t_event`
  ADD PRIMARY KEY (`event_ID`);

--
-- Indexes for table `t_event_activity`
--
ALTER TABLE `t_event_activity`
  ADD PRIMARY KEY (`act_ID`);

--
-- Indexes for table `t_event_attendance`
--
ALTER TABLE `t_event_attendance`
  ADD PRIMARY KEY (`ev_atnd_ID`);

--
-- Indexes for table `t_event_budget`
--
ALTER TABLE `t_event_budget`
  ADD PRIMARY KEY (`bdgt_ID`);

--
-- Indexes for table `t_event_material`
--
ALTER TABLE `t_event_material`
  ADD PRIMARY KEY (`ev_mat_ID`);

--
-- Indexes for table `t_event_registration`
--
ALTER TABLE `t_event_registration`
  ADD PRIMARY KEY (`er_ID`);

--
-- Indexes for table `t_group`
--
ALTER TABLE `t_group`
  ADD PRIMARY KEY (`grp_ID`);

--
-- Indexes for table `t_groupleader`
--
ALTER TABLE `t_groupleader`
  ADD PRIMARY KEY (`grpld_ID`);

--
-- Indexes for table `t_group_material`
--
ALTER TABLE `t_group_material`
  ADD PRIMARY KEY (`grp_mat_ID`);

--
-- Indexes for table `t_history_event`
--
ALTER TABLE `t_history_event`
  ADD PRIMARY KEY (`his_event_ID`);

--
-- Indexes for table `t_history_event_attendance`
--
ALTER TABLE `t_history_event_attendance`
  ADD PRIMARY KEY (`his_ev_atnd_ID`);

--
-- Indexes for table `t_language`
--
ALTER TABLE `t_language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `t_relperreg`
--
ALTER TABLE `t_relperreg`
  ADD PRIMARY KEY (`rpg_ID`);

--
-- Indexes for table `t_volunteer`
--
ALTER TABLE `t_volunteer`
  ADD PRIMARY KEY (`volun_ID`);

--
-- Indexes for table `t_weather`
--
ALTER TABLE `t_weather`
  ADD PRIMARY KEY (`w_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_city`
--
ALTER TABLE `r_city`
  MODIFY `city_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=683;

--
-- AUTO_INCREMENT for table `r_event_audience`
--
ALTER TABLE `r_event_audience`
  MODIFY `ev_aud_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `r_event_type`
--
ALTER TABLE `r_event_type`
  MODIFY `ev_type_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `r_region`
--
ALTER TABLE `r_region`
  MODIFY `rgn_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `r_religion`
--
ALTER TABLE `r_religion`
  MODIFY `rlg_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `r_steps`
--
ALTER TABLE `r_steps`
  MODIFY `step_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_user_role`
--
ALTER TABLE `r_user_role`
  MODIFY `usr_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_account`
--
ALTER TABLE `t_account`
  MODIFY `acc_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_church`
--
ALTER TABLE `t_church`
  MODIFY `chr_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_datamine`
--
ALTER TABLE `t_datamine`
  MODIFY `dm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_ethnic`
--
ALTER TABLE `t_ethnic`
  MODIFY `eth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_event`
--
ALTER TABLE `t_event`
  MODIFY `event_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_event_activity`
--
ALTER TABLE `t_event_activity`
  MODIFY `act_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_event_attendance`
--
ALTER TABLE `t_event_attendance`
  MODIFY `ev_atnd_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_event_budget`
--
ALTER TABLE `t_event_budget`
  MODIFY `bdgt_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_event_material`
--
ALTER TABLE `t_event_material`
  MODIFY `ev_mat_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_event_registration`
--
ALTER TABLE `t_event_registration`
  MODIFY `er_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_group`
--
ALTER TABLE `t_group`
  MODIFY `grp_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_groupleader`
--
ALTER TABLE `t_groupleader`
  MODIFY `grpld_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_group_material`
--
ALTER TABLE `t_group_material`
  MODIFY `grp_mat_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_history_event`
--
ALTER TABLE `t_history_event`
  MODIFY `his_event_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `t_history_event_attendance`
--
ALTER TABLE `t_history_event_attendance`
  MODIFY `his_ev_atnd_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_language`
--
ALTER TABLE `t_language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_relperreg`
--
ALTER TABLE `t_relperreg`
  MODIFY `rpg_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_volunteer`
--
ALTER TABLE `t_volunteer`
  MODIFY `volun_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_weather`
--
ALTER TABLE `t_weather`
  MODIFY `w_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

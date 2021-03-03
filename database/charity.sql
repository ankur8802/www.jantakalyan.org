-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 12:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(800) NOT NULL DEFAULT '',
  `password` varchar(800) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `accountno` varchar(255) NOT NULL DEFAULT '',
  `bankname` varchar(255) NOT NULL DEFAULT '',
  `branchname` varchar(255) NOT NULL DEFAULT '',
  `ifsc` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `membership_no`, `accountno`, `bankname`, `branchname`, `ifsc`, `status`, `date`) VALUES
(8, 'K15082001', '123131', 'lknklnkn', 'kjnjknkn', 'knjjknk', 'latest', '2020-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `time`) VALUES
(13, 'slider-1.jpg', '2020-07-22 05:19:17'),
(14, 'slider-2.jpg', '2020-07-22 05:19:31'),
(16, 'slider-31.jpg', '2020-07-22 05:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `blogdetail` longtext NOT NULL DEFAULT '\'\'',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `blogdetail`, `date`, `time`) VALUES
(11, 'Standard gallery post', 'home-blog-1.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '2020-07-22', '12:08:50'),
(12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'home-blog-2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-07-22', '12:09:27'),
(13, 'Standard gallery post', 'home-blog-3.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '2020-07-22', '12:10:24'),
(14, 'Cat Exam', 'flat-banners_23-2147988418.jpg', '<p>kjnknjn</p>\r\n', '2020-09-26', '12:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL DEFAULT '',
  `block` varchar(255) NOT NULL DEFAULT '',
  `village` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state`, `district`, `block`, `village`) VALUES
(1, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Agaya Buzurg'),
(2, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ahirauli'),
(3, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Alauddinpur'),
(4, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Alinagar'),
(5, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Allipur'),
(6, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Alvalpur'),
(7, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Araji Shekha Jot'),
(8, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Aura Deeh'),
(9, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ausani Buzurg'),
(10, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ausani Firoj'),
(11, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Babhan Gaon'),
(12, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Babhani Buzurg'),
(13, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Babhani Khurd'),
(14, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Babhanjot'),
(15, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bajalpur'),
(16, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bajpur'),
(17, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Baksaria Grint'),
(18, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bakwadargah'),
(19, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bangawan'),
(20, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Banghusara'),
(21, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Barahara'),
(22, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bardholipur'),
(23, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bardhya'),
(24, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Basti Dog'),
(25, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Basti Khas'),
(26, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Basti Raghau'),
(27, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bel Gari'),
(28, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bhaupur'),
(29, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bhikhari Patti'),
(30, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bukaee Buzurg'),
(31, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bukaee Khurd'),
(32, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Bukkanpur'),
(33, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Chandpur'),
(34, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Chandradeep'),
(35, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Chetia'),
(36, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Dariapur'),
(37, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Daulatpur'),
(38, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Daulatpur Grint'),
(39, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Deoria'),
(40, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Devli Deeh'),
(41, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Dhadhowa Kutub Jot'),
(42, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Dhari Ghat'),
(43, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Dhodhupur'),
(44, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Fandha'),
(45, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Farenda Buzurg'),
(46, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Farenda Buzurg'),
(47, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Fatehpur'),
(48, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Gara Buzurg'),
(49, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Gaura Buzurg'),
(50, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Gaurahia'),
(51, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Gazipur'),
(52, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ghanshyampur Grint'),
(53, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Gokalpur'),
(54, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Haji Jot'),
(55, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Hathia Gardh'),
(56, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Hindanpur'),
(57, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Intawa Khurd'),
(58, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Islampur'),
(59, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ismaila'),
(60, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Izdipur'),
(61, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Jagnnathpur Grint'),
(62, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Jalalpur'),
(63, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Jalepur'),
(64, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Jigaria'),
(65, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kachhohan Buzurg'),
(66, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kachrauli'),
(67, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kaluwa Talab'),
(68, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kamalpur'),
(69, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kanra'),
(70, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Karnupur'),
(71, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Karoha'),
(72, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kasba Khas'),
(73, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Keshau Nagar Grint'),
(74, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Khamiharia'),
(75, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kharhi Bhari'),
(76, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Khijirpur'),
(77, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Khonjhava'),
(78, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Khorare'),
(79, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Khorari'),
(80, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kolhaee'),
(81, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kolhuee Garib'),
(82, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Kuk Nagar Grint'),
(83, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Lahgaura'),
(84, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Lotharpur'),
(85, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Maddo Nankar'),
(86, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Madhaeepur'),
(87, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Madhaura Tage'),
(88, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Madhopur'),
(89, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mahanuva'),
(90, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mahuwa Pakar'),
(91, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Majha Khurd'),
(92, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Majhari'),
(93, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Majhava Khas'),
(94, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Malhipur'),
(95, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Manni Jot'),
(96, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Manpur'),
(97, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Maraila Khas'),
(98, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mardha Khurd'),
(99, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mohammadpur'),
(100, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mokalpur'),
(101, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mubarakpur Grint'),
(102, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Mundila'),
(103, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Naraianpur'),
(104, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Narharpur'),
(105, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Nathpur'),
(106, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Naudiha'),
(107, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Nauwa Gaon'),
(108, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ninia'),
(109, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pandari Hathiray'),
(110, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pikaura'),
(111, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pipra Adaee'),
(112, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pipra Bara Khan'),
(113, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pipra Ismile'),
(114, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pipra Mahim'),
(115, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pipra Sharif'),
(116, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pranpur'),
(117, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pure Kachrauli'),
(118, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Pure Seer'),
(119, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Raghavpur'),
(120, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Raghunandanpur'),
(121, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Rampur'),
(122, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Ramwapur'),
(123, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Rasulpur Khan'),
(124, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Rasulpur Taj'),
(125, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Redwalia'),
(126, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Rehar Tapaki'),
(127, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Renuva Khas'),
(128, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sabbon Jot'),
(129, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sadapur'),
(130, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Savana'),
(131, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sehari Hardon'),
(132, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sema Sathi'),
(133, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Semra Buzurg'),
(134, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Shamsapur'),
(135, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Singar Ghat'),
(136, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sitarampur Grint'),
(137, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sotia'),
(138, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Sukrauli'),
(139, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Takia Kurvan'),
(140, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Takulhawa'),
(141, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Tanbepur'),
(142, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Taraini'),
(143, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Tilkhoria'),
(144, 'UTTAR PRADESH', 'GONDA', 'BABHANJOT', 'Turka Deeha'),
(145, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Achalpur'),
(146, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Adampur'),
(147, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Ailiparsouli'),
(148, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Akouni'),
(149, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Amdahi'),
(150, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Badalpur'),
(151, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Badlepur'),
(152, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Baghia Nihchal'),
(153, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Bakiyapur'),
(154, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Banjarwa'),
(155, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Barnapur'),
(156, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Barouli'),
(157, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Barseri'),
(158, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Belsar'),
(159, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Bhadoura'),
(160, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Bhat Purwa'),
(161, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Bhikharipur Kalan'),
(162, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Bhikharipur Khurd'),
(163, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Birsingh Pur'),
(164, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Chandpur'),
(165, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Chire Basna'),
(166, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Dalel Nagar'),
(167, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Deverda'),
(168, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Dhani Patti'),
(169, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Dhan Sinha'),
(170, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Dhanwaliya'),
(171, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Didisia Kalan'),
(172, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Didsia Khurd'),
(173, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Diksir'),
(174, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Doharijeet'),
(175, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Durjanpur'),
(176, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Fehra'),
(177, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Gangrouli'),
(178, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Garhi'),
(179, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Godoura'),
(180, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Gondwa'),
(181, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Gopipur'),
(182, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Harkhapur'),
(183, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Hilalpur'),
(184, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Inderpur'),
(185, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Ismailpur'),
(186, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Jabbar Nager'),
(187, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Jafrapur'),
(188, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Jamaluddin Pur'),
(189, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Khadora'),
(190, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Khamrouni'),
(191, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Kurha'),
(192, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Leloi Kalan'),
(193, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Leloi Khurd'),
(194, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Lova Tapra'),
(195, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Madhaupur'),
(196, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Mahadewa'),
(197, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Margupur'),
(198, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Mujjer'),
(199, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Mukundpur'),
(200, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Nagdahi'),
(201, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Nihalpur'),
(202, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Niyawa'),
(203, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pakari'),
(204, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pakwan Gaon'),
(205, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Persada'),
(206, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Bhikhai'),
(207, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Dall'),
(208, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Fakeer'),
(209, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Guthouli'),
(210, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Mirja'),
(211, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Mohan'),
(212, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Pure Umapati'),
(213, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Purey Dayal'),
(214, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Semari Kalan'),
(215, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Semari Khurd'),
(216, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Sindhouti'),
(217, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Singhpur'),
(218, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Sisai'),
(219, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Sonoli Mohammadpur'),
(220, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Taradeeh'),
(221, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Telaha'),
(222, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Thadakki Patti'),
(223, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Udwatpur'),
(224, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Umari Bdgamganj'),
(225, 'UTTAR PRADESH', 'GONDA', 'BELSER', 'Varsara'),
(232, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bagdar Grint'),
(231, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Babhani Khas'),
(230, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Babhanan'),
(229, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Aura Tonda'),
(228, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Asnahara'),
(227, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Akdanga'),
(226, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Agaya Mafi'),
(237, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bandrahi'),
(236, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bakshi Bhari'),
(235, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bakhrauji'),
(234, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Baidauli'),
(233, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Baheri Mafi'),
(240, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bankat Raut'),
(239, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Banghusara'),
(238, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Banganva'),
(241, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bankatva'),
(242, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Barahpur'),
(243, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Baria Deeh'),
(244, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Barsainian'),
(245, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Basdevpur Grint'),
(246, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bauhan'),
(247, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Belhari Buzurg'),
(248, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Belhari Khurd'),
(249, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhaduva'),
(250, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhagvanpur'),
(251, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bharthipur'),
(252, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhatiaria'),
(253, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhavjitpur'),
(254, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhelakha'),
(255, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhikharipur'),
(256, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bhopatpur'),
(257, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Bichhiadar'),
(258, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Birapur'),
(259, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Birpur'),
(260, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Buknapur'),
(261, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chakia'),
(262, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chanda Ratti'),
(263, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chanda Tappa Kot'),
(264, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chand Dabar'),
(265, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Charu'),
(266, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chatkanwa'),
(267, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chatkanwa'),
(268, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chatura Bhiti'),
(269, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chhapia'),
(270, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Churiharpur'),
(271, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Chuwar'),
(272, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dariyapur'),
(273, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dariyapur'),
(274, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dev Gaon'),
(275, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dhadhauva'),
(276, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dhandh Buzurg'),
(277, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dhanepur'),
(278, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dharamdaspur'),
(279, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Din Nagar'),
(280, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Domaipur'),
(281, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Dubauli'),
(282, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Gardha'),
(283, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Gaura Buzurg'),
(284, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Gay Ghat'),
(285, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Ghanshyampur'),
(286, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Gondaha'),
(287, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Gondahi'),
(288, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Gur Gaon'),
(289, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Haluva'),
(290, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Haria'),
(291, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Harkhupur'),
(292, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Hathni Khas'),
(293, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Itaila Buzurg'),
(294, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Itaila Khurd'),
(295, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Jira Bhari'),
(296, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Kamarpur'),
(297, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Karanpur'),
(298, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Karma'),
(299, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Kathauva'),
(300, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khajuri'),
(301, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khale Gaon'),
(302, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khamharia Buzurg'),
(303, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khamharia Khurd'),
(304, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khapri Para'),
(305, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khardevara'),
(306, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khardevari'),
(307, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Khutihan'),
(308, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Kote Khas'),
(309, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Kungaiya'),
(310, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Kushami'),
(311, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Lalganj Grint'),
(312, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Laxmanpur'),
(313, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Laxmi Nagar Grint'),
(314, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Lodava Buzurg'),
(315, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Lodia Khurd'),
(316, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Loh Gajari'),
(317, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Lohrauli'),
(318, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Madanpur'),
(319, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Madanpur'),
(320, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Madhaua Buzurg'),
(321, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mahara Gaura'),
(322, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Maharaj Ganj'),
(323, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mahmoodpur'),
(324, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Maholi Khori'),
(325, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mahtinian'),
(326, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Majhreti'),
(327, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Makoia'),
(328, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mandaf'),
(329, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Manipur Grint'),
(330, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mansukhpur'),
(331, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Maskanwa'),
(332, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Matha'),
(333, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mavaee'),
(334, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mehavar Pokhar'),
(335, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mirzapur'),
(336, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mishraulia Khurd'),
(337, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Mura Deeh'),
(338, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Murli Jot'),
(339, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Muse Jot'),
(340, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Nagra Buzurg'),
(341, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Nagra Khurd'),
(342, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Naraicha'),
(343, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Narainpur'),
(344, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Nataur'),
(345, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Navar'),
(346, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Netuva'),
(347, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Nevada'),
(348, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Paira Khas'),
(349, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Parsa Dulla'),
(350, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Parsa Tappa Kot'),
(351, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Parsa Tiwari'),
(352, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Parsa Uday Kar'),
(353, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Patijia Buzurg'),
(354, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Patijia Khurd'),
(355, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Patkhauli'),
(356, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Payer Kohana'),
(357, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Phoolpur'),
(358, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Pikaura Buzurg'),
(359, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Pipari Khurd'),
(360, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Pipra Buzurg'),
(361, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Pipra Tappa Kot'),
(362, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Pure Pandey'),
(363, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Ramduttpur'),
(364, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Ranijot'),
(365, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Ranipur'),
(366, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Ratanpur'),
(367, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sabrupur'),
(368, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sadkarpur'),
(369, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sagavan'),
(370, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Saidanpr'),
(371, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Saijalpur'),
(372, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sarvar Khurd'),
(373, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Shah Nagar'),
(374, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sherapur'),
(375, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Shital Ganj Grint'),
(376, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Shivpur Samadhi'),
(377, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Shukul Purva'),
(378, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sikahara'),
(379, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sikari Bhita'),
(380, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sikra Tappa Kot'),
(381, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sisai Ranipur'),
(382, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sishani'),
(383, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sohila'),
(384, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sohili'),
(385, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sonawa'),
(386, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Sonbarsa'),
(387, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Surwar Buzurg'),
(388, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Tanbepur'),
(389, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Teeker'),
(390, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Tejpur'),
(391, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Tenduva Ranipur'),
(392, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Tilma'),
(393, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Tirwa Deeh'),
(394, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Turki Deeh'),
(395, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Ulraha'),
(396, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Uska'),
(397, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Vetwa'),
(398, 'UTTAR PRADESH', 'GONDA', 'CHHAPIA', 'Vishnoharpur'),
(399, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Adayapur'),
(400, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Ahiraura'),
(401, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Akhtyarpur'),
(402, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Allipur Gokula'),
(403, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Atarauliya'),
(404, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Atarsuiya'),
(405, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Banuras'),
(406, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Baragadiya'),
(407, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Bardaha'),
(408, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Bartara'),
(409, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Basantpur Kamiyar'),
(410, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Basariya'),
(411, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Basehiya'),
(412, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Belahari'),
(413, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Bhabhuwa'),
(414, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Bhant Purwa'),
(415, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Bhuliyapur'),
(416, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Bibiyapur Avdhut Nagar'),
(417, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Birawa'),
(418, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Budhwaliya'),
(419, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Chakarout'),
(420, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Chamari'),
(421, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Chandrabhanpur'),
(422, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Chandra Hariya'),
(423, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Changeriya'),
(424, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Chatrauli'),
(425, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Chhatauni'),
(426, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Colonel Ganj(Rural)'),
(427, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Danapur'),
(428, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Davli'),
(429, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dhanawa'),
(430, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dhar Kuinya'),
(431, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dhaurahara'),
(432, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dhema'),
(433, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dinari'),
(434, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dinkariya'),
(435, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Duda'),
(436, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dudi'),
(437, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Dullapur'),
(438, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Fatehpur'),
(439, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Fatehpur Kotahana'),
(440, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Ganauliya'),
(441, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Gaura Sinhapur'),
(442, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Gumdaha'),
(443, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Gurwaliya'),
(444, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Harigaon'),
(445, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Hirapur Kamiyar'),
(446, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Hirapur Shahpur'),
(447, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Jahagirawa'),
(448, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kachnapur'),
(449, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kadipur'),
(450, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kaithouli'),
(451, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kamalpur'),
(452, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kanjemau'),
(453, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Karuwa'),
(454, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kashipur'),
(455, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Katra Shahbajpur'),
(456, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Khajuriya'),
(457, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Khurda Seer'),
(458, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Konhata'),
(459, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kumahar Garhi'),
(460, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kumaharoura'),
(461, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kuri'),
(462, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kurtha'),
(463, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Kutubapur'),
(464, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Lale Mau'),
(465, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Mahuwar'),
(466, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Malauli'),
(467, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Manihari'),
(468, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Masauliya'),
(469, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Mohammadpur Garawar'),
(470, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Mohammadpur Kamiyar'),
(471, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Munderawa'),
(472, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Nainawa Jagannathpur'),
(473, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Nakahara'),
(474, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Nakar'),
(475, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Narayanpur Lalak'),
(476, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Narayanpur Majha'),
(477, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Narayanpur Sal'),
(478, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pachamari'),
(479, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pairouri'),
(480, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Palhapur'),
(481, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pandey Choura'),
(482, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Para'),
(483, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Parsauli'),
(484, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pipri'),
(485, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pratappur'),
(486, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pure Ajab'),
(487, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pure Angad'),
(488, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Pure Baijnath'),
(489, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Ramawapur'),
(490, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Ramgarha'),
(491, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Rampur'),
(492, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Rek Sadiya'),
(493, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Rudauli'),
(494, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Rudauliya'),
(495, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Sakatpur'),
(496, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Sakraura'),
(497, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Saraiyya'),
(498, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Shahpur'),
(499, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Shishamau'),
(500, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Tarhata'),
(501, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Tenganaha'),
(502, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Teri'),
(503, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Ullaha'),
(504, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Vedpur'),
(505, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Viviyapur Gonsai'),
(506, 'UTTAR PRADESH', 'GONDA', 'COLONEGANJ', 'Yakubpur'),
(507, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Akhadera'),
(508, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Amorhwa'),
(509, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Asarna'),
(510, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Balpur Hajari'),
(511, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bamdera'),
(512, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Banjariya'),
(513, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bansgaon'),
(514, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Baranv'),
(515, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Barawaliya Tallukdari'),
(516, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Barwaliya Kurmi'),
(517, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Barwatpur'),
(518, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Basalatpur'),
(519, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bataura Bakhtawar Singh'),
(520, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bataura Lohangi'),
(521, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Beerpur Belpur'),
(522, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bhairampur'),
(523, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bharsara'),
(524, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bhat Naiyya'),
(525, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bhonka'),
(526, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Bhulbhuliya'),
(527, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Chak Saniya'),
(528, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Chauri'),
(529, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Chhataura'),
(530, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Chhitnapur'),
(531, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Debi Tilmaha'),
(532, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Dhamsara'),
(533, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Dhanuha'),
(534, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Dhobaha Ray'),
(535, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Dudahi'),
(536, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Dutta Nagar'),
(537, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Gaddaupur'),
(538, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Gonawan'),
(539, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Gourawa Khurd'),
(540, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Gursara'),
(541, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Haldhar Mau'),
(542, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Hariyagara'),
(543, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Harsinghpur'),
(544, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Hatahi'),
(545, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Jhauhana'),
(546, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Jiginiya'),
(547, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kaitholi'),
(548, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kalwari'),
(549, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kamalpur'),
(550, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kapoorpur'),
(551, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kasturi'),
(552, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Katela Talab'),
(553, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kauraha Jagat'),
(554, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kauraha Jagdishpur'),
(555, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Khanpur'),
(556, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Khinduri'),
(557, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Koncha Kasimpur'),
(558, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Kunwarpur Amarha'),
(559, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Lakhanapur'),
(560, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Lohasa'),
(561, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Mahadev'),
(562, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Maijapur'),
(563, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Malauna'),
(564, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Mankapur'),
(565, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Meenapur'),
(566, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Nagawa Kalan'),
(567, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Nahawa Parsaura'),
(568, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Nakaha Basant'),
(569, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Nakahi'),
(570, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Nindura'),
(571, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Noorpur'),
(572, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Padaria'),
(573, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Paharapur'),
(574, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Parasa Maheshi'),
(575, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Parsa Godri'),
(576, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Parwanpur'),
(577, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Patisa'),
(578, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Pipari Rawat'),
(579, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Pure Dikshit'),
(580, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Pure Sangam'),
(581, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Pure Than'),
(582, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Rajawapur'),
(583, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Rajpur'),
(584, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Ramgarh'),
(585, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Reruwa'),
(586, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Rewari'),
(587, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Selhari'),
(588, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Semara'),
(589, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Sikari'),
(590, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Sonahara'),
(591, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Sonwar'),
(592, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Sumerpur'),
(593, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Tikauli'),
(594, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Tikawar Khas'),
(595, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Umariya'),
(596, 'UTTAR PRADESH', 'GONDA', 'HALDHARMAU', 'Vishunpur'),
(597, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ahrolia'),
(598, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Akdega'),
(599, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ameha'),
(600, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Amreebharia Khas'),
(601, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Arjunpur'),
(602, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ayah'),
(603, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Baghi'),
(604, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Baghi Bhari'),
(605, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bagulhi'),
(606, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Baher Kuwan'),
(607, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bahlolpur'),
(608, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bakahrwa'),
(609, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Banjaria'),
(610, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Baraipada'),
(611, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bardiha'),
(612, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bareily'),
(613, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Basantpur Raja'),
(614, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Basti'),
(615, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bedpur Mafi'),
(616, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Belbahria'),
(617, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Belwa Bahuta'),
(618, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Belwa Shukul'),
(619, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Benduli'),
(620, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Benipur Bahta'),
(621, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bhanpur'),
(622, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bhatpurwa'),
(623, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bhatpurwa'),
(624, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bhavanipur Kalan'),
(625, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bhgvanpur'),
(626, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bhourha Pure Ganga'),
(627, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bihuri'),
(628, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Binuhni'),
(629, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Birmapur'),
(630, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bishrampur'),
(631, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bisunpur Mafi'),
(632, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bisunpur Sangam'),
(633, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Bisunpur Tewari'),
(634, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Churiharpur'),
(635, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Dhobha'),
(636, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Dhongi'),
(637, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Dhutahi Ganeshpur'),
(638, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Dikloul'),
(639, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Dulampur'),
(640, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Gajadhar Purwa'),
(641, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ganeshpur Grint'),
(642, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ganvaria'),
(643, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Gosainpur'),
(644, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Gungai Dai'),
(645, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Gurututti'),
(646, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Gyanapur'),
(647, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Hardain'),
(648, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Harrya Suman'),
(649, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Hindu Nagar Khas'),
(650, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Imilia Ramnath'),
(651, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Itia Thok'),
(652, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Jagatapur'),
(653, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Jagdeeshpur Sanpat'),
(654, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Jagganathipur'),
(655, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Jahdaria'),
(656, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Jokhahi'),
(657, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Jugrajpur'),
(658, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Kalena'),
(659, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Kanchanpur'),
(660, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Karamdeeh Kalan'),
(661, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Karurwa Para'),
(662, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Karuwa Para'),
(663, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Kathova'),
(664, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Khiroura Sahbaz'),
(665, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Konia Bankat'),
(666, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Kukriha'),
(667, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Kunderva'),
(668, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Lakahnipur'),
(669, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Lalpur'),
(670, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Laxmanpur Lalnagar'),
(671, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Louhseesa'),
(672, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Madar Nagar'),
(673, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Madhai Jot'),
(674, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Madh Nagar'),
(675, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Mehnoun'),
(676, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Mishroulia Baburam'),
(677, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Mohanpur Asdha'),
(678, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Nadavar'),
(679, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Nakora'),
(680, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Nari Mahripur'),
(681, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Naroura Bharipur'),
(682, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Narsingh Deeh'),
(683, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Nisarupur'),
(684, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Para Saray'),
(685, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Paras Khal'),
(686, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Parsia Bahoripur'),
(687, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Parsia Gudar'),
(688, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Phrenda Kanoongo'),
(689, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Prithipal Ganj Grint'),
(690, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Pure Dati'),
(691, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purehara'),
(692, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Pure Ledai'),
(693, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Pure Tilak'),
(694, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Chowhan'),
(695, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Dand'),
(696, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Datta'),
(697, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Dhanni'),
(698, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Maha'),
(699, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Manoga'),
(700, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Musddi'),
(701, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Pandit Vindravan'),
(702, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Sardar'),
(703, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Shukuli'),
(704, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Thakur'),
(705, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Tiwari Ram Sahay'),
(706, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Purey Vasalat'),
(707, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ramawapur Nayak'),
(708, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ram Gathiha'),
(709, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ramnagar Jhinna'),
(710, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ramvapur Hardo Patti'),
(711, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Ranipur'),
(712, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Rudapur'),
(713, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Saghnwal'),
(714, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Sahpur'),
(715, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Samda'),
(716, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Samda Mafi'),
(717, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Sarkand'),
(718, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Seer Bankat'),
(719, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Sekahui'),
(720, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Semrhi'),
(721, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Shivpuria'),
(722, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Sindhwapur'),
(723, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Sri Nager'),
(724, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Teja Jot'),
(725, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Telyani Kanoongo'),
(726, 'UTTAR PRADESH', 'GONDA', 'ITIATHOK', 'Vijay Garhwa'),
(727, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Akma'),
(728, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Amdad Para'),
(729, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Babhani Kanoongo'),
(730, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bahlolpur'),
(731, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Baikunthpur'),
(732, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Balpur Jot'),
(733, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Banghusra'),
(734, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Banvaria'),
(735, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bargawan'),
(736, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Barwa Mafi'),
(737, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Beervisen'),
(738, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Behra Choubey'),
(739, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Behrwa'),
(740, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Belbharia'),
(741, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Benipur Hardo Patti'),
(742, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bhadua Tarhar'),
(743, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bhamaicha'),
(744, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bhanghar Buland'),
(745, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bharhapara'),
(746, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bhudkuda'),
(747, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Birwa Babhani'),
(748, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Bura Devar'),
(749, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Chachpara Kanoongo'),
(750, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Chaksad'),
(751, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Chandravatpur'),
(752, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Chavani Sarkar'),
(753, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Chisti Pur'),
(754, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Chouri Harsha Patti'),
(755, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Dadwa Kanoongo'),
(756, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Dandua Dasvatia'),
(757, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Dasiapur'),
(758, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Daulatpur'),
(759, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Devria Churaman'),
(760, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Dullapur Khalsa'),
(761, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Firojpur Tarhar'),
(762, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Firozpur'),
(763, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gadhwalia'),
(764, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gangapur'),
(765, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ghachpara Mutawali'),
(766, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gharwa Jot'),
(767, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gird Gonda (CT)'),
(768, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gobindpara'),
(769, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gopiyapur'),
(770, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gourwa Kanoongo'),
(771, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Gulriha'),
(772, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Haripur'),
(773, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Hasim Jot'),
(774, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Imarti Bisen'),
(775, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Imilia Misir'),
(776, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Imlia Gurudayal'),
(777, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Janki Nagar'),
(778, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Janki Nagar (CT)'),
(779, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Jhanjhari'),
(780, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kaji Devar'),
(781, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kalandarpur Chaubey'),
(782, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kalandarpur Teer'),
(783, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kamla Jot'),
(784, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kansapur'),
(785, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kapoorpur'),
(786, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Karchhulia'),
(787, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Karma Mafi'),
(788, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Karneepur'),
(789, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Karnga'),
(790, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kastuwa'),
(791, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Katha Mafi'),
(792, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kesho Jot'),
(793, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Keswapur Pahrwa'),
(794, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kharai Khirwa'),
(795, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Khirabha'),
(796, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Khorhansha'),
(797, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Khutehna'),
(798, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kinki'),
(799, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kunderahwa'),
(800, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Kundrkhi'),
(801, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Lachha Jot'),
(802, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Lalapur Chandrabhan'),
(803, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Lalnagar Kalhans'),
(804, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Laxman Jot'),
(805, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Laxmanpur'),
(806, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Madhaipur'),
(807, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Madhoupur Chakatta'),
(808, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Madhoupur Rao'),
(809, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mahadaiya'),
(810, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Majha Tarhar'),
(811, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Majhavva'),
(812, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Malthua Shah Jot'),
(813, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mande'),
(814, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mangal Jot'),
(815, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mathura Chaubey'),
(816, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mathura Sadanand'),
(817, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Meghwa'),
(818, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mukraha'),
(819, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Mukulpur Khas'),
(820, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Musouli'),
(821, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Namdar'),
(822, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Narayanpur Idho'),
(823, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Narayanpur Wali'),
(824, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Newari'),
(825, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Noubara'),
(826, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pakdi Mafi'),
(827, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pandari Shanker'),
(828, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Paret Sarkar'),
(829, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pari Ajab Singh'),
(830, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Parsapur'),
(831, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Parsia Agyaram'),
(832, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pathwalia'),
(833, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pipra Padum'),
(834, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pipri Surajman'),
(835, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pure Hemraj'),
(836, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pure Khemkaran'),
(837, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pure Lalak'),
(838, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pure Shiva Bakhtawar'),
(839, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pure Tiwari'),
(840, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Pure Tiwari (CT)'),
(841, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Purey Udai'),
(842, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Rajapur'),
(843, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ram Bhari'),
(844, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ramnagar Bankat'),
(845, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ramnagar Tarhar'),
(846, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Rampur Chachpara'),
(847, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Rathwalia'),
(848, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Rohawan'),
(849, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Rudrapur Bisen'),
(850, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ruphideeh'),
(851, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Samada Kaji'),
(852, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Sarai Nagar'),
(853, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Sarayya Mafi'),
(854, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Seeha Gaon'),
(855, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Senkhan Chak'),
(856, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Sidhaw'),
(857, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Siswaria'),
(858, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Son Bharia'),
(859, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Sony Harlal'),
(860, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Sony Kapoor'),
(861, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Sultan Jot'),
(862, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Tajpur'),
(863, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Targaon'),
(864, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Thhourhans'),
(865, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ujjaini Jamal'),
(866, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Ummed Jot'),
(867, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Vimmour'),
(868, 'UTTAR PRADESH', 'GONDA', 'JHANJHARI', 'Vishnaga'),
(869, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Ashokpur'),
(870, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Babupur'),
(871, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bairampur');
INSERT INTO `cities` (`id`, `state`, `district`, `block`, `village`) VALUES
(872, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bakhariha'),
(873, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bangawan'),
(874, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Barai Gondaha'),
(875, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Basantpur Harsingh Patti'),
(876, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bas Bhariya'),
(877, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Baunapur'),
(878, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Beerpur Katra'),
(879, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bhadaiyan'),
(880, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bhagahariya Bhagwanpur'),
(881, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bhagahariya Puremitai'),
(882, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bhansaha'),
(883, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bharatha Itahiya'),
(884, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bhoj Jot'),
(885, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bibaiya'),
(886, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Bikarwa'),
(887, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Birawa'),
(888, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Chanapur'),
(889, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Charera'),
(890, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Chaudaha Metukaha'),
(891, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Chaya Purwa'),
(892, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Chhapar Talla'),
(893, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Chhiras'),
(894, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Chilbil Mahas'),
(895, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Churra Murra'),
(896, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Dewa Pasiya'),
(897, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Dharampur'),
(898, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Dubaha Bazar'),
(899, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Gandahi'),
(900, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Gaurawa Kalan'),
(901, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Gauriya'),
(902, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Gaurwa Janipur'),
(903, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Gondawa'),
(904, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jagata Pur'),
(905, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jagdishpur Baldi'),
(906, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jairam Jot'),
(907, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jamthara'),
(908, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jankinagar Grint'),
(909, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jhala'),
(910, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Jhounaha'),
(911, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Kataka'),
(912, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Katauli'),
(913, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Katuwa Nala'),
(914, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Khairam Lalwachak'),
(915, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Khem Pur'),
(916, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Khendaura'),
(917, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Kotiya Madara'),
(918, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Kukur Devarawa'),
(919, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Lalpur'),
(920, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Laxaman Pur'),
(921, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Madhopur'),
(922, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Mahadev'),
(923, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Maha Para'),
(924, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Majhauwa'),
(925, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Mangurahi'),
(926, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Mathura'),
(927, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Mehar Wanabad'),
(928, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Mohammad Pur'),
(929, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Mohan Tepra'),
(930, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Nadanwa'),
(931, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Nakaha'),
(932, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Narayanpur Kalan'),
(933, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Narayanpur Khurd'),
(934, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Newada Hasimpur'),
(935, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Paberawa'),
(936, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Padhi Bara'),
(937, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pakari'),
(938, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Panchupur'),
(939, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Parsauna'),
(940, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Parsia Rani'),
(941, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pipari Majha'),
(942, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pisaiyya'),
(943, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pure Badal'),
(944, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pure Bahori'),
(945, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pure Basai Chitai'),
(946, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pure Maholiya'),
(947, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Pure Niddhi'),
(948, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Raipur'),
(949, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Rajgarh Aminpur'),
(950, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Ramapur'),
(951, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Rampur Phakir'),
(952, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Ranjeetpur'),
(953, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Sahariya Kalan'),
(954, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Saraiya'),
(955, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Sarbang Pur'),
(956, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Shah Jot'),
(957, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Shree Jot'),
(958, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Singh Pur'),
(959, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Sisai Joga'),
(960, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Sisaiya'),
(961, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Taiyyab Pur'),
(962, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Tedhi'),
(963, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Tilka'),
(964, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Udila'),
(965, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Urdi Gonda'),
(966, 'UTTAR PRADESH', 'GONDA', 'KATRA BAZAR', 'Yahiya Chet'),
(967, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Agaya'),
(968, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Alanpur Grint'),
(969, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Amava'),
(970, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Amberpur'),
(971, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Amghati'),
(972, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Andhiyari'),
(973, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Asharfabad'),
(974, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ashraf Pur'),
(975, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ashrfabad'),
(976, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bairanva'),
(977, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bakharva'),
(978, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Baksara Agyanram'),
(979, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ballipur'),
(980, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Banaksiha'),
(981, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bandraha'),
(982, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Banjaria Khas'),
(983, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Banrahi'),
(984, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bardahi'),
(985, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Baripur Ramnath'),
(986, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Barsanian Lakhpat Roy'),
(987, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Basvariya Meherban'),
(988, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Behata Halbal'),
(989, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Belbharia'),
(990, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bel Gariya'),
(991, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Belhania Darji Jot'),
(992, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Benipur'),
(993, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bharahun'),
(994, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bhatt Purva'),
(995, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bhirva'),
(996, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bhitaura'),
(997, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Budhaee Bankat'),
(998, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Bukanapur'),
(999, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Butaha'),
(1000, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chak Gaura'),
(1001, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chandpur Durga'),
(1002, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chandpur Khalsa'),
(1003, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chandpur Lakhpat Roy'),
(1004, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chandpur Mafi'),
(1005, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chaubepur'),
(1006, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chauhanpur'),
(1007, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Chhitaee Jot'),
(1008, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dalpatpur'),
(1009, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Datauli'),
(1010, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Deoria'),
(1011, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Devrahana'),
(1012, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dharampur'),
(1013, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dhusawa Tappa Hathani'),
(1014, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dhuswa Khas'),
(1015, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dinkarpur'),
(1016, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dubauli Ramcharan'),
(1017, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dulahia Nankar'),
(1018, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Dulahia Tiwari'),
(1019, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Durgapur'),
(1020, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Firojpur'),
(1021, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gaijahan'),
(1022, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gandhi Gardhava'),
(1023, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gardhi'),
(1024, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Garrahi'),
(1025, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ghunahi'),
(1026, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ghurahu Jot'),
(1027, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gilava'),
(1028, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gohana'),
(1029, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gopalpur'),
(1030, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gunaura'),
(1031, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gyanipur Eshari'),
(1032, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gyanipur Hari'),
(1033, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Gyanipur Ramprasad'),
(1034, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Harhava'),
(1035, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Harnatayer'),
(1036, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Harsinghava'),
(1037, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Indian Tehephone Industry, Mankapur (Special Gram) (CT)'),
(1038, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Itraur'),
(1039, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Jaggnathpur'),
(1040, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Jaidava'),
(1041, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Janakpur'),
(1042, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Jhalahi'),
(1043, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Jhalmal'),
(1044, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Jogapur'),
(1045, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kahova'),
(1046, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kakarghata'),
(1047, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kalyaniya'),
(1048, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kalyanpur'),
(1049, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Karnupur Durga'),
(1050, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Karnupur Raja'),
(1051, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Karonha'),
(1052, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kathar'),
(1053, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kemi'),
(1054, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Khajuri'),
(1055, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Khasri'),
(1056, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Khaudi'),
(1057, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kishundas Pur'),
(1058, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kuli Bankat'),
(1059, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kundasan'),
(1060, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kunjalpur'),
(1061, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Kurva Jangli'),
(1062, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Lakshamanpur'),
(1063, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Lalakpur'),
(1064, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Lalpur'),
(1065, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Lamati Ikrahava'),
(1066, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Laukaha'),
(1067, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Lohrauli Dayashanker'),
(1068, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Machhali Gaon Bhitaura'),
(1069, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Machhali Gaon Nankar'),
(1070, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Machhmarava'),
(1071, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Madheepur'),
(1072, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Madhupur'),
(1073, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Madnapur Bhan'),
(1074, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Maheva Gopal'),
(1075, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Maheva Nankar'),
(1076, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Malhipur'),
(1077, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mankapur Rural'),
(1078, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Manpur'),
(1079, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Maraucha'),
(1080, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mau'),
(1081, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mechuka'),
(1082, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mirjapur Persan'),
(1083, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mirzapur Ramnath'),
(1084, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mishrauliya Gosai'),
(1085, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Mishrauliya Kalan'),
(1086, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Misraulia Kanungo'),
(1087, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Munda Deeh'),
(1088, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Nagra Paltilal'),
(1089, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Nakaee Bankat'),
(1090, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Naraianpur Grint'),
(1091, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Naraianpur Khurd'),
(1092, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Narendrapur'),
(1093, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Pachputi Jagtapur'),
(1094, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Paltipur'),
(1095, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Panditpur'),
(1096, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Patirdh'),
(1097, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Pikaura'),
(1098, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Pure Devnath'),
(1099, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Pure Hirday'),
(1100, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Pure Pokhar'),
(1101, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Pure Seer'),
(1102, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Radha Nagar'),
(1103, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Rajapur'),
(1104, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ramaipur Bhagvan Persad'),
(1105, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ramaoopur'),
(1106, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ramapur'),
(1107, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Rameepur Sani'),
(1108, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Rampur'),
(1109, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Ranipur'),
(1110, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Rendaura'),
(1111, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Retasa'),
(1112, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Sabrupur'),
(1113, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Samsapur'),
(1114, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Sisva'),
(1115, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Sonhas'),
(1116, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Sorihava'),
(1117, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Sothia'),
(1118, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Sumerpur'),
(1119, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Tamapar'),
(1120, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Tenduva Kalan'),
(1121, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Teneuwa Amad Nawab Ganj'),
(1122, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Tulsipur'),
(1123, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Turka Deeha'),
(1124, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Turkailee'),
(1125, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Uppadhaypur Grint'),
(1126, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Vidya Nagar'),
(1127, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Virepur'),
(1128, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Virpur'),
(1129, 'UTTAR PRADESH', 'GONDA', 'MANKAPUR', 'Vishunour'),
(1130, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Achalpur'),
(1131, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bachipur'),
(1132, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Baijpur'),
(1133, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bangain'),
(1134, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bankasiha Shiv Ratan Singh'),
(1135, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bankati Arjun Singh'),
(1136, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bankati Suryabali Singh'),
(1137, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Basantpur'),
(1138, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Belhari'),
(1139, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Besahupur'),
(1140, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bharthouli'),
(1141, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bhatwaria'),
(1142, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bhawanipur'),
(1143, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bhopatpur'),
(1144, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bhorha'),
(1145, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Bishwmbharpur'),
(1146, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Chhedajot'),
(1147, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dariyapur Mafi'),
(1148, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Deoraha'),
(1149, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Devria Alawal'),
(1150, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dewari Kalan'),
(1151, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dhajwa'),
(1152, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dhanepur'),
(1153, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dhrmai'),
(1154, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dinara'),
(1155, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dudhaw'),
(1156, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Dulhapur Bankat'),
(1157, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Durjanpur'),
(1158, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Duttnagar'),
(1159, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Ghuswa'),
(1160, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Indra Para'),
(1161, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Itala Kabi'),
(1162, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Jaitapur'),
(1163, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Jamunahi'),
(1164, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Jigana'),
(1165, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Karamdeeh'),
(1166, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Karounda'),
(1167, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Khamhria'),
(1168, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Khawaja Jot'),
(1169, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Kheer Bhari'),
(1170, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Khoudi'),
(1171, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Kolhuwa'),
(1172, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Kourhe'),
(1173, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Laxmipur'),
(1174, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Madhau Ganj'),
(1175, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Mahesh Bhari'),
(1176, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Mangrawan'),
(1177, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Mayi Dubey'),
(1178, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Mishroulia'),
(1179, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Moosapur'),
(1180, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Mugroul'),
(1181, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Mujehna'),
(1182, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Novagawan'),
(1183, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Paharwa'),
(1184, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Pandeypur'),
(1185, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Parsiya Pandit'),
(1186, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Pendaran'),
(1187, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Phrenda Bhari'),
(1188, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Pipra Lalach'),
(1189, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Poore Gonaee'),
(1190, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Purey Neval'),
(1191, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Purey Sidhari'),
(1192, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Purey Subsukha'),
(1193, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Purey Tenduwa'),
(1194, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Ragown'),
(1195, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Rajapur Parsoura'),
(1196, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Rajapur Retwagara'),
(1197, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Rampur Dubaval'),
(1198, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Ranijot'),
(1199, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Retwagara'),
(1200, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Rudragarh Mausi'),
(1201, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Sangipur'),
(1202, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Shahpur Bankat'),
(1203, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Shukul Purwa'),
(1204, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Sidhpur'),
(1205, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Sisai Bheekhpur'),
(1206, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Sohans'),
(1207, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Sohli'),
(1208, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Tenduwa Mohni'),
(1209, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Tirlokpur'),
(1210, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Tribhuwan Nagar Grint'),
(1211, 'UTTAR PRADESH', 'GONDA', 'MUJEHANA', 'Ujjani Kalan'),
(1212, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Akbarpur'),
(1213, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Atmadpur'),
(1214, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Bahadra'),
(1215, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Baijalpur'),
(1216, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Ballipur Sani'),
(1217, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Balpur'),
(1218, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Bhikhampur'),
(1219, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Bishnoharpur'),
(1220, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Chakrasul'),
(1221, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Chak Shivraha'),
(1222, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Choubeypur'),
(1223, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Choukhariya'),
(1224, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Dallapur'),
(1225, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Dant Nagar'),
(1226, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Dayalpur'),
(1227, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Deipur'),
(1228, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Devinagar'),
(1229, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Doulatpur'),
(1230, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Durga Ganj'),
(1231, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Durjanpur'),
(1232, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Ektanga'),
(1233, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Etmadpur'),
(1234, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Fatepur'),
(1235, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Fidaipur'),
(1236, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Gailan Grant'),
(1237, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Garhi'),
(1238, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Gokula'),
(1239, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Gouriya'),
(1240, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Hanuman Nagar'),
(1241, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Harbanshpur'),
(1242, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Hardwa'),
(1243, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Holapur Kaji'),
(1244, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Holapur Talib'),
(1245, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Indarpur'),
(1246, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Ismailpur'),
(1247, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Jafarapur'),
(1248, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Jaitpur'),
(1249, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Jalalpur'),
(1250, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Janki Nagar'),
(1251, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Jatmalpur'),
(1252, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Jogapur'),
(1253, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kajipur'),
(1254, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kalyanpur'),
(1255, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kamatikari'),
(1256, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kanakpur'),
(1257, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Karoudi'),
(1258, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Katra Bhogchand'),
(1259, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Khanopur'),
(1260, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kharagpur'),
(1261, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Khargupur'),
(1262, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kharouwa'),
(1263, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Khempur'),
(1264, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kishundaspur'),
(1265, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kolhampur Bishen'),
(1266, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Kolhampur Imam'),
(1267, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Lakshmanpur'),
(1268, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Lidehna'),
(1269, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Lidehna Grant'),
(1270, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Lohratar'),
(1271, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Lolpur'),
(1272, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Louwabirpur'),
(1273, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Madhwapur'),
(1274, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Mahadeo'),
(1275, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Maheshpur'),
(1276, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Maheshpur'),
(1277, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Mahgupur'),
(1278, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Mainpur'),
(1279, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Majha Rath'),
(1280, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Makhdumpur'),
(1281, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Meerpur Yusuf'),
(1282, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Mohanpur'),
(1283, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Mouhari'),
(1284, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Nagwa'),
(1285, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Nakhara'),
(1286, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Nandepur'),
(1287, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Narayanpur'),
(1288, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Nawab Ganj Gird'),
(1289, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Nikroja'),
(1290, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Niriya'),
(1291, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Pahli'),
(1292, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Parashana'),
(1293, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Parsapur'),
(1294, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Parsapur Thanwa'),
(1295, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Parwati'),
(1296, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Patkhouli'),
(1297, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Pure Ambar'),
(1298, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Pure Gayadeen'),
(1299, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Raghunathpur'),
(1300, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Raheli'),
(1301, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Ramapur'),
(1302, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Ramchanderpur'),
(1303, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Riwa'),
(1304, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Sakipur'),
(1305, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Saray Hari'),
(1306, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Saray Khatri'),
(1307, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Saray Naumu'),
(1308, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Semra Shekhpur'),
(1309, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Shahpur'),
(1310, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Shambhu Nagar'),
(1311, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Shobhapur'),
(1312, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Sikandarpur'),
(1313, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Sirsa'),
(1314, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Sotiya'),
(1315, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Surjapur'),
(1316, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Tikari'),
(1317, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Tulsipur Majha'),
(1318, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Turkouli'),
(1319, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Umariya'),
(1320, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Virahimpur'),
(1321, 'UTTAR PRADESH', 'GONDA', 'NAWABGANJ', 'Wazirabad'),
(1322, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bararai'),
(1323, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Basantpur Tiwari'),
(1324, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Beerpur Sudeydar'),
(1325, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Belawan'),
(1326, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Benia'),
(1327, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Besia Chain'),
(1328, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bhadua Sombansi'),
(1329, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bhadwal'),
(1330, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bhatvalia'),
(1331, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bheemupur'),
(1332, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bheeti Pat Khouli'),
(1333, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bhikhari Jot'),
(1334, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bhitoura Pipra'),
(1335, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Biswa Ganesh'),
(1336, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Bungawan'),
(1337, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Chaturbhuj Jot'),
(1338, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Chilbila Kahttipur'),
(1339, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Chursiha'),
(1340, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Dariyapur Chobey'),
(1341, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Dariyapur Hardo Patti'),
(1342, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Dhanoli'),
(1343, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Dhnowri'),
(1344, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Dutt Nagar Bisen'),
(1345, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Garva Jot'),
(1346, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Gilouli'),
(1347, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Gopalpur Pardandi'),
(1348, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Imiliya Roopi'),
(1349, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Indrapur'),
(1350, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Jagdeeshpur Vindravan'),
(1351, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Kahmria'),
(1352, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Kandhrateli'),
(1353, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Kandvalia'),
(1354, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Kapisa'),
(1355, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Kapoor Jot'),
(1356, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Karmo Pathak'),
(1357, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Kewalpur'),
(1358, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Khaira'),
(1359, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Khamhariya'),
(1360, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Khiroura Mohan'),
(1361, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Khrhatia'),
(1362, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Lahdua'),
(1363, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Lubawan'),
(1364, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Lumbai'),
(1365, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Mahadeo'),
(1366, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Malari'),
(1367, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Mandha'),
(1368, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'May Pathak'),
(1369, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Mishrolia Kanoongo'),
(1370, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Mudadeeh'),
(1371, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Munderwa Kalan'),
(1372, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Munderwa Mafi'),
(1373, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Naroura Arjun'),
(1374, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Nigwa Bodh'),
(1375, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Pakri Kashwer'),
(1376, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Pakthoka'),
(1377, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Pandri Ballabh'),
(1378, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Pandri Kripal'),
(1379, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Parsa Sohansa'),
(1380, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Pilkahi'),
(1381, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Pilkhawan'),
(1382, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Ramvapur Gobind'),
(1383, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Ramvapur Shyam'),
(1384, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Ranijot'),
(1385, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Raniyapur'),
(1386, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Routawan'),
(1387, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Salpur Samera'),
(1388, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Sandeswa'),
(1389, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Sekhapur'),
(1390, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Semra Damman'),
(1391, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Sisour Andupur'),
(1392, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Sonapar'),
(1393, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Sonbarsa'),
(1394, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Subhagpur'),
(1395, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Tari Parsuian'),
(1396, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Teliya Upadhayay'),
(1397, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Tendua Bhagat'),
(1398, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Thadvaria'),
(1399, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Tikria'),
(1400, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Tulsipur Kondri'),
(1401, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Turkadeeha'),
(1402, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Turkoulia'),
(1403, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Ukra'),
(1404, 'UTTAR PRADESH', 'GONDA', 'PANDRI KRIPAL', 'Vishunpur Bairia'),
(1405, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Abhayipur'),
(1406, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Akohari'),
(1407, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Allipur Khande Ray'),
(1408, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Andupur'),
(1409, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Anta'),
(1410, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Bahuvan Madar Majha'),
(1411, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Baksaila'),
(1412, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Banua'),
(1413, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Basantpur Anta'),
(1414, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Bel Matthar'),
(1415, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Belwa Nohar'),
(1416, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Bhainsaha'),
(1417, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Bhauri Ganj'),
(1418, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Bihuri'),
(1419, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Chandapur Kitauli'),
(1420, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Chandpur'),
(1421, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Changeri'),
(1422, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Charaunha'),
(1423, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Charsadi'),
(1424, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Deharas'),
(1425, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dhamraiyya Kalan'),
(1426, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dhanaura'),
(1427, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dhani Gawn'),
(1428, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dhankhar'),
(1429, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dhanuhi'),
(1430, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Doma Ahalad'),
(1431, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Domakalpi'),
(1432, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dubai'),
(1433, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Dullapur Tarahar'),
(1434, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Durauni'),
(1435, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Durgorwa'),
(1436, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Gajsinghpur'),
(1437, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Gogiya'),
(1438, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Gureti'),
(1439, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Gursari'),
(1440, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Gyanpur'),
(1441, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Hardiha Sapaur'),
(1442, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Hardi Tad'),
(1443, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Jarauli'),
(1444, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Kadaru'),
(1445, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Kapni'),
(1446, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Karanpur'),
(1447, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Kataila'),
(1448, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Khaira'),
(1449, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Khajuri Nidhi'),
(1450, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Khargupur'),
(1451, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Kharthari'),
(1452, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Kudiyav'),
(1453, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Lalpur Dhautal'),
(1454, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Lohangpur'),
(1455, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Madhaipur Khande Ray'),
(1456, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Madhaipur Kurmi'),
(1457, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Malanv'),
(1458, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Mangura'),
(1459, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Marchaur'),
(1460, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Mijhaura'),
(1461, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Mohana'),
(1462, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Mohmmadpur Anta'),
(1463, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Nandaur'),
(1464, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Narayanpur Jaisingh'),
(1465, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Narayanpur Mardan'),
(1466, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Narda'),
(1467, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Nirpur Khyala'),
(1468, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Parasi Gonda'),
(1469, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Paraspur'),
(1470, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Pareta'),
(1471, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Pasaka'),
(1472, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Pivali'),
(1473, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Puraina'),
(1474, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Pure Lali'),
(1475, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Pure Pandey'),
(1476, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Pure Tiwari'),
(1477, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Rajapur'),
(1478, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Raypur'),
(1479, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Sahjaura'),
(1480, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Sakraur'),
(1481, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Salpur Pathak'),
(1482, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Sarainya Chaubey'),
(1483, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Saraiyan Nanhu'),
(1484, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Semari'),
(1485, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Shivgarh'),
(1486, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Singariya'),
(1487, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Subhagpur'),
(1488, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Susunda'),
(1489, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Thakurapur'),
(1490, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Thathiya Mathiya'),
(1491, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Tulsipur'),
(1492, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Tyorasi'),
(1493, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Utraula'),
(1494, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Vishunpur Kalan'),
(1495, 'UTTAR PRADESH', 'GONDA', 'PARASPUR', 'Vishunpur Khurd'),
(1496, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Achal Nagar'),
(1497, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Achlapur'),
(1498, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Achlapur Bargadhi'),
(1499, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Adbadwa'),
(1500, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Akbarpur'),
(1501, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Amadeeh'),
(1502, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Amdhwa'),
(1503, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Amwakhudai Nagar'),
(1504, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Anagi'),
(1505, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Anantpur'),
(1506, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Asdha'),
(1507, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Baddoura Bazar'),
(1508, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Balhi Jot'),
(1509, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Balpur'),
(1510, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Baluakakra'),
(1511, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Banderia Dargahi'),
(1512, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bangain'),
(1513, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Banghusra'),
(1514, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bankasiya'),
(1515, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bankatwa'),
(1516, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Barahema'),
(1517, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Barvand Nagar'),
(1518, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Beerpur'),
(1519, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Beerpur Bhoj'),
(1520, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Belwa Bazar'),
(1521, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Belwa Bhan'),
(1522, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Belwa Phoolpur'),
(1523, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhabni Sarai'),
(1524, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhagha'),
(1525, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhatpi'),
(1526, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhat Purwa'),
(1527, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhat Purwa'),
(1528, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhavanipur Upadhaya'),
(1529, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhawanipur Khurd'),
(1530, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhola Jot'),
(1531, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhopalpur'),
(1532, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhraimpur'),
(1533, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhud Kudi'),
(1534, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bhulai Deeh'),
(1535, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Bichuri'),
(1536, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Birmapur'),
(1537, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Chahuva'),
(1538, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Chandan Jot'),
(1539, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Chatouni'),
(1540, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Chauhatta'),
(1541, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Chhitnapur'),
(1542, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Chori Parihar'),
(1543, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Dalpatpur'),
(1544, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Devaria Khas'),
(1545, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Devataha'),
(1546, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Devrahna'),
(1547, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Devria Kalan'),
(1548, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Dubaval'),
(1549, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Dudherwa'),
(1550, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Dulhapur Gajadhar'),
(1551, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Dulhapur Pahari'),
(1552, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Fateh Garah'),
(1553, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Gonda Chati'),
(1554, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Gonria'),
(1555, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Gousinha'),
(1556, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Gudgudiapur'),
(1557, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Harishchanderpur'),
(1558, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Harkhapur'),
(1559, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Harryaban'),
(1560, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Hind Nagar Banki'),
(1561, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Idahiya Navi Jot'),
(1562, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Imilia Chitu'),
(1563, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Jamunhi Hardo Patti'),
(1564, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Jeth Purwa'),
(1565, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Jhuri Kuiyan'),
(1566, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kahla Tendua'),
(1567, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kalyan Jot'),
(1568, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kalyanpur'),
(1569, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kamrawan'),
(1570, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Karam Deeh Balwa'),
(1571, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Karamdeeh Khurd'),
(1572, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kenubara'),
(1573, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kewalpur'),
(1574, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Khanavapur'),
(1575, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Khargupur Deengur'),
(1576, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Khargupur Imilia'),
(1577, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Khurd Pipra'),
(1578, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kochwa'),
(1579, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kodri'),
(1580, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kouria'),
(1581, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kurasi'),
(1582, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Kursaha'),
(1583, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Labedpur'),
(1584, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Laiburwa'),
(1585, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Lal Nagar'),
(1586, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Laxmanpur'),
(1587, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Lonawa Dargah'),
(1588, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Madhav Nagar'),
(1589, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Mahadev Kalan'),
(1590, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Majhwa'),
(1591, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Mangal Nagar'),
(1592, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Manohar Jot'),
(1593, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Matera'),
(1594, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Mathe Deeh'),
(1595, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Mau Ramsabad'),
(1596, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Mishroulia'),
(1597, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Nand Nagar'),
(1598, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Narayanpur Mafee'),
(1599, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Narhara'),
(1600, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Nibiha Paraspur'),
(1601, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Nidh Nagar'),
(1602, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Noushra'),
(1603, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Nova Gaon'),
(1604, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pachran'),
(1605, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pakadi Maru Deeh Khas'),
(1606, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Panchurki Manohar Jot'),
(1607, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pandari Para Sarai'),
(1608, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pandre Garwa'),
(1609, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pandri Savita'),
(1610, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Paraspur Allahwa'),
(1611, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Parna Bagulha'),
(1612, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Parsada'),
(1613, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Parsovra Maheshpur'),
(1614, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Parsurampur'),
(1615, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Patkhouli'),
(1616, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Phrenda Shukul'),
(1617, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pindaur Bara'),
(1618, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pipra Bazar'),
(1619, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pipra Bhodar'),
(1620, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pipra Chobey Khas'),
(1621, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Purainia'),
(1622, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pure Bada Chak'),
(1623, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pure Chayan Kunwar'),
(1624, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pure Nari'),
(1625, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Pure Pathak'),
(1626, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Raja Jot'),
(1627, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Rajjanpur'),
(1628, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Ram Bhari'),
(1629, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Rampur Brahamchari'),
(1630, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Raniyapur'),
(1631, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Ranjeet Nagar'),
(1632, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Rupai Deeh'),
(1633, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sahjanwa'),
(1634, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sakmagadpur'),
(1635, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sarhada'),
(1636, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sewaraha'),
(1637, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Shivgara'),
(1638, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sisai Jangal'),
(1639, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sisai Mafi'),
(1640, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sonria'),
(1641, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Sothawa'),
(1642, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Susgawan'),
(1643, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Teer Manorma'),
(1644, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Telia Kot'),
(1645, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Telyani Pathak'),
(1646, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Tendua Chokhria'),
(1647, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Tendwa Gulam'),
(1648, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Umra'),
(1649, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Usraina'),
(1650, 'UTTAR PRADESH', 'GONDA', 'RUPAIDEEH', 'Vishunpur Belbhariya'),
(1651, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Akbarpur'),
(1652, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Amouthi'),
(1653, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Arjunpur'),
(1654, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Asartha'),
(1655, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Bahadur Khas'),
(1656, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Bangown'),
(1657, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Bhairampur'),
(1658, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Bhanpur'),
(1659, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Bhikhnapur'),
(1660, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Bouriha'),
(1661, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Chandipur'),
(1662, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Chandsuha'),
(1663, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Chiverha'),
(1664, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Choubeypur'),
(1665, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Dhanouli'),
(1666, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Dhodhepur'),
(1667, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Dhourhara Ghat'),
(1668, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Dufariya'),
(1669, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Gabhora'),
(1670, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Gadauli'),
(1671, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Gari'),
(1672, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Ghachabikapur'),
(1673, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Girdherpur'),
(1674, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Gohani'),
(1675, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Golhaipur'),
(1676, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Gop Sarai'),
(1677, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Holapur'),
(1678, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Jagdishpur'),
(1679, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Jamal Khani'),
(1680, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Jamatha'),
(1681, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Jujharipur'),
(1682, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Karnipur'),
(1683, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Karora'),
(1684, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Kashipur'),
(1685, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Katha'),
(1686, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Keshaopur'),
(1687, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Khajuri'),
(1688, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Khanpur'),
(1689, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Khojanpur'),
(1690, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Khudepur'),
(1691, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Kindhura'),
(1692, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Kochiha'),
(1693, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Lachchhipur'),
(1694, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Lakshmanpur'),
(1695, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Maherampur'),
(1696, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Manhna'),
(1697, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Narayanpur'),
(1698, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Paliya Charoutha'),
(1699, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Paraspatti Majhwar'),
(1700, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Pathar'),
(1701, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Periyawa'),
(1702, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Pipri Rohua'),
(1703, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Pras Patti Purwar'),
(1704, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Puraini'),
(1705, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Pure Lila'),
(1706, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Ramapur'),
(1707, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Rampur Tengraha'),
(1708, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Rangi'),
(1709, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Ranipur'),
(1710, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Ranipur Kakshi'),
(1711, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Ranipur Pahari'),
(1712, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Retadal Singh'),
(1713, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Sarawan'),
(1714, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Semara');
INSERT INTO `cities` (`id`, `state`, `district`, `block`, `village`) VALUES
(1715, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Shishau'),
(1716, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Singha Bhoj'),
(1717, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Singha Chanda'),
(1718, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Sojhiya'),
(1719, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Son Barsa'),
(1720, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Susela'),
(1721, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Taktona'),
(1722, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Veuda Majha'),
(1723, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Veuda Uparhar'),
(1724, 'UTTAR PRADESH', 'GONDA', 'TARABGANJ', 'Vishunpur'),
(1725, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Achalpur'),
(1726, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ajab Nagar'),
(1727, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Anbhula'),
(1728, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ashokpur'),
(1729, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ashokpur'),
(1730, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Babhni'),
(1731, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bagaura'),
(1732, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Balha Rai'),
(1733, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ballipur'),
(1734, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bandhwa'),
(1735, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bandkuinya'),
(1736, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Banghusara'),
(1737, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bankasiya'),
(1738, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Banlour'),
(1739, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Barai Para'),
(1740, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bhagohar'),
(1741, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bharha Para'),
(1742, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bhatbabhni'),
(1743, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bhatpurwa'),
(1744, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bhikhampur'),
(1745, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bhitiya'),
(1746, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Bhopatpur'),
(1747, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Chadauwa'),
(1748, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Chakpan'),
(1749, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Chandapur'),
(1750, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Chandha'),
(1751, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Chetpur'),
(1752, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Choukhat'),
(1753, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Devipur'),
(1754, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Dhanesarpur'),
(1755, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Dodiyapara'),
(1756, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Dullapur'),
(1757, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Dumriya Deeh'),
(1758, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Durjanpur Ghat'),
(1759, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ganeshpur Grint'),
(1760, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Garsar'),
(1761, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Gopalpur'),
(1762, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Hajratpur'),
(1763, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Hariharpur'),
(1764, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Hathinag'),
(1765, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Imliya'),
(1766, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Jagdishpur Katra'),
(1767, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Jalalpur Routiha'),
(1768, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Jamunha'),
(1769, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Kadipur'),
(1770, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Karauda'),
(1771, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Karda'),
(1772, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Karnipur'),
(1773, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Khanpur'),
(1774, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Khempur'),
(1775, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Khiria'),
(1776, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Khirideeh'),
(1777, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Khokhiya'),
(1778, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Koeli Biran'),
(1779, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Koeli Jangal'),
(1780, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Konder'),
(1781, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Kotha'),
(1782, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Lodiya Ghata'),
(1783, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Mahadewa'),
(1784, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Majhara'),
(1785, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Majhganwa'),
(1786, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Matheypur'),
(1787, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Mihia'),
(1788, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Mirjapur'),
(1789, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Mohanpur'),
(1790, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Nagwa'),
(1791, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Naubasta'),
(1792, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Naypur'),
(1793, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Niyamatpur'),
(1794, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Nyodar'),
(1795, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Paderahi'),
(1796, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Parmapur'),
(1797, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Parsapur Mahdaur'),
(1798, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Persiya'),
(1799, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Pipari'),
(1800, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Pure Dadhu'),
(1801, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Pure Khal'),
(1802, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ramaipur'),
(1803, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ramcherapur'),
(1804, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Rampur'),
(1805, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Rampur Kharhata'),
(1806, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Ramraipur'),
(1807, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Rasoolpur'),
(1808, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Raypur'),
(1809, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Rupipur'),
(1810, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Sahibapur'),
(1811, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Sehriya'),
(1812, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Shekharpur'),
(1813, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Shubhagpur'),
(1814, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Sohna'),
(1815, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Tikhariya'),
(1816, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Turkideeh'),
(1817, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Udaipur Grint'),
(1818, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Velbhariya'),
(1819, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Veliya'),
(1820, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Virahmatpur'),
(1821, 'UTTAR PRADESH', 'GONDA', 'WAZIRGANJ', 'Wazir Ganj');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(255) NOT NULL DEFAULT '',
  `amount` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_code`, `amount`, `date`) VALUES
(16, 'bbbpc8798q', '250', '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `donate_user`
--

CREATE TABLE `donate_user` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `fname` varchar(255) NOT NULL DEFAULT '',
  `mname` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `aadharno` varchar(255) NOT NULL DEFAULT '',
  `dob` varchar(255) NOT NULL DEFAULT '',
  `nationality` varchar(255) NOT NULL DEFAULT '',
  `maritalstatus` varchar(255) NOT NULL DEFAULT '',
  `address` longtext NOT NULL DEFAULT '',
  `village` varchar(255) NOT NULL DEFAULT '',
  `block` varchar(500) NOT NULL DEFAULT '',
  `tehseel` varchar(255) NOT NULL DEFAULT '',
  `district` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `pincode` varchar(255) NOT NULL DEFAULT '',
  `gender` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `location` varchar(255) NOT NULL DEFAULT '',
  `eventsdetail` longtext NOT NULL DEFAULT '\'\'',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `location`, `eventsdetail`, `date`, `time`) VALUES
(13, 'Let\'s talk about the poor children education.', 'events-1.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not only five centuries.</p>\r\n', '2020-07-22', '11:07:36'),
(14, 'Insure clean water to everyone in Africa.', 'events-2.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not only five centuries.</p>\r\n', '2020-07-22', '11:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `time`) VALUES
(7, 'gallery-2.jpg', '2020-07-22 12:37:52'),
(8, 'causes-1.jpg', '2020-07-22 12:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `link`) VALUES
(13, 'Kshetriya Janta Kalyan And Kriyanvan Samiti', '#'),
(19, 'क्षेत्रीय जनता कल्याण एंड क्रियान्वयन समिति', '#');

-- --------------------------------------------------------

--
-- Table structure for table `payment_query`
--

CREATE TABLE `payment_query` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `query` longtext NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saharadetails`
--

CREATE TABLE `saharadetails` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `schemetype` varchar(255) NOT NULL DEFAULT '',
  `certificateno` varchar(255) NOT NULL DEFAULT '',
  `policyholdername` varchar(255) NOT NULL DEFAULT '',
  `policyopeningdate` varchar(255) NOT NULL DEFAULT '',
  `dateofmaturity` varchar(255) NOT NULL DEFAULT '',
  `maturityamount` varchar(255) NOT NULL DEFAULT '',
  `maturityamountword` varchar(255) NOT NULL DEFAULT '',
  `policyfile` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saharadetails`
--

INSERT INTO `saharadetails` (`id`, `membership_no`, `schemetype`, `certificateno`, `policyholdername`, `policyopeningdate`, `dateofmaturity`, `maturityamount`, `maturityamountword`, `policyfile`, `status`, `date`) VALUES
(26, 'K15082001', 'Sahara Credit Co-operative Society Limited', '13215', 'Ankur', '05-10-2020', '13-10-2020', '25625', 'kjnnklnlk', '64.jpg', 'paid', '2020-10-20'),
(27, 'K15082001', 'Sahara Q Shop Central', 'kjnk', 'Ankur', '07-10-2020', '14-10-2020', '15455', 'kjnkjn', 'event-1.jpg', 'paid', '2020-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `review1` varchar(3000) NOT NULL,
  `testimonial_image` varchar(700) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `review1`, `testimonial_image`, `name`, `date`, `time`) VALUES
(19, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'team-1.jpg', 'Ankur Chauhan', '2020-07-22', '11:20:16'),
(20, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'team-4.jpg', 'Krishna Chauhan', '2020-07-22', '11:20:40'),
(21, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'team-11.jpg', 'Ankur Chauhan', '2020-07-22', '11:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `upload_documents`
--

CREATE TABLE `upload_documents` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `aadhar` varchar(255) NOT NULL DEFAULT '',
  `bank` varchar(255) NOT NULL DEFAULT '',
  `signature` varchar(255) NOT NULL DEFAULT '',
  `declaration` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_documents`
--

INSERT INTO `upload_documents` (`id`, `membership_no`, `photo`, `aadhar`, `bank`, `signature`, `declaration`, `status`, `date`) VALUES
(7, 'K15082001', '2.jpg', '3.jpg', '61.jpg', '31.jpg', '61.jpg', 'unpaid', '2020-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment_data`
--

CREATE TABLE `user_payment_data` (
  `id` int(11) NOT NULL,
  `payuMoneyId` varchar(255) NOT NULL DEFAULT '',
  `addedon` varchar(255) NOT NULL DEFAULT '',
  `amount` varchar(255) NOT NULL DEFAULT '',
  `txnid` varchar(255) NOT NULL DEFAULT '',
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `sahara_form_no` varchar(255) NOT NULL DEFAULT '',
  `accountno` varchar(255) NOT NULL DEFAULT '',
  `bankname` varchar(255) NOT NULL DEFAULT '',
  `branchname` varchar(255) NOT NULL DEFAULT '',
  `ifsc` varchar(255) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `aadhar` varchar(255) NOT NULL DEFAULT '',
  `bank` varchar(255) NOT NULL DEFAULT '',
  `signature` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `fname` varchar(255) NOT NULL DEFAULT '',
  `mname` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `aadharno` varchar(255) NOT NULL DEFAULT '',
  `dob` varchar(255) NOT NULL DEFAULT '',
  `nationality` varchar(255) NOT NULL DEFAULT '',
  `maritalstatus` varchar(255) NOT NULL DEFAULT '',
  `address` longtext NOT NULL DEFAULT '',
  `village` varchar(255) NOT NULL DEFAULT '',
  `block` varchar(255) NOT NULL DEFAULT '',
  `lankmark` varchar(255) NOT NULL DEFAULT '',
  `tehseel` varchar(255) NOT NULL DEFAULT '',
  `district` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `pincode` varchar(255) NOT NULL DEFAULT '',
  `gender` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment_data`
--

INSERT INTO `user_payment_data` (`id`, `payuMoneyId`, `addedon`, `amount`, `txnid`, `membership_no`, `sahara_form_no`, `accountno`, `bankname`, `branchname`, `ifsc`, `photo`, `aadhar`, `bank`, `signature`, `name`, `fname`, `mname`, `phone`, `aadharno`, `dob`, `nationality`, `maritalstatus`, `address`, `village`, `block`, `lankmark`, `tehseel`, `district`, `state`, `pincode`, `gender`, `date`, `time`, `status`) VALUES
(37, '22131', '2020-11-11', '1500', 'bhj', 'K15082001', '26,27', '123131', 'lknklnkn', 'kjnjknkn', 'knjjknk', '2.jpg', '3.jpg', '61.jpg', '31.jpg', 'Ankur', 'j', 'j', '8882234966', '111111111111', '17-08-2020', 'Indian/भारतीय', 'Unmarried', 'k', 'km', 'abc', '', 'k', 'kml', 'kkm', '201005', 'Male/पुरुष', '2020-10-22', '18:24:51', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `fname` varchar(255) NOT NULL DEFAULT '',
  `mname` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `aadharno` varchar(255) NOT NULL DEFAULT '',
  `dob` varchar(255) NOT NULL DEFAULT '',
  `nationality` varchar(255) NOT NULL DEFAULT '',
  `maritalstatus` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `address` longtext NOT NULL DEFAULT '',
  `village` varchar(255) NOT NULL DEFAULT '',
  `block` varchar(500) NOT NULL DEFAULT '',
  `tehseel` varchar(255) NOT NULL DEFAULT '',
  `district` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `pincode` varchar(255) NOT NULL DEFAULT '',
  `gender` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `membership_no`, `name`, `fname`, `mname`, `phone`, `aadharno`, `dob`, `nationality`, `maritalstatus`, `password`, `address`, `village`, `block`, `tehseel`, `district`, `state`, `pincode`, `gender`, `status`, `date`, `time`) VALUES
(14, 'K15082001', 'Ankur', 'j', 'j', '8882234966', '111111111111', '17-08-2020', 'Indian/भारतीय', 'Unmarried', '123', 'k', 'km', 'abc', 'k', 'kml', 'kkm', '201005', 'Male/पुरुष', 'normal', '2020-08-17', '13:21:11'),
(15, 'K15082002', 'aa', 'tt', 'mlmm', '8882234966', '222222222222', '25-08-2020', 'Indian/भारतीय', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'mlm', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'normal', '2020-08-25', '18:00:34'),
(20, 'K15082003', 'nkn', 'tt', 'mlmm', '8888888888', '111111111111', '20-08-2020', 'Other/अन्य', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'a', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'donate', '2020-08-25', '18:17:25'),
(21, 'K15082004', 'nkn', 'tt', 'mlmm', '8888888888', '111111111111', '25-08-2020', 'Other/अन्य', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'mlm', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'donate', '2020-08-25', '18:23:20'),
(22, 'K15082005', 'Ankur', 'tt', 'a', '8882234966', '111111111111', '14-08-2020', 'Other/अन्य', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'mlm', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'donate', '2020-08-25', '18:30:48'),
(23, 'K15082006', 'Ankur', 'tt', 'mlmm', '8882234966', '111111111111', '25-08-2020', 'Other/अन्य', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'mlm', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'donate', '2020-08-25', '18:33:26'),
(24, 'K15082007', 'nkn', 'tt', 'mklmmlm', '8882234966', '111111111111', '12-08-2020', 'Other/अन्य', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'klmml', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'donate', '2020-08-25', '18:37:24'),
(25, 'K15082008', 'nkn', 'tt', 'mlmm', '8888888888', '111111111111', '06-08-2020', 'Other/अन्य', 'Unmarried', '', 'h', 'Agaya Buzurg', 'BABHANJOT', 'mlm', 'GONDA', 'UTTAR PRADESH', '201005', 'Male/पुरुष', 'donate', '2020-08-25', '18:38:22'),
(26, 'K15082009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'normal', '2020-09-26', '11:30:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_user`
--
ALTER TABLE `donate_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_query`
--
ALTER TABLE `payment_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saharadetails`
--
ALTER TABLE `saharadetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_documents`
--
ALTER TABLE `upload_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment_data`
--
ALTER TABLE `user_payment_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1822;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donate_user`
--
ALTER TABLE `donate_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment_query`
--
ALTER TABLE `payment_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saharadetails`
--
ALTER TABLE `saharadetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `upload_documents`
--
ALTER TABLE `upload_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_payment_data`
--
ALTER TABLE `user_payment_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

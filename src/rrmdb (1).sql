-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2020 at 06:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rrmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `d_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `temp` int(30) NOT NULL,
  `hum` int(30) NOT NULL,
  `gas` int(30) NOT NULL,
  `sol` varchar(50) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`d_id`, `name`, `temp`, `hum`, `gas`, `sol`, `status`) VALUES
(6, 'Barley yellow dwarf virus', 27, 58, 23, '', 0),
(7, 'Brown rust', 25, 9, 24, '', 0),
(8, 'Common bunt', 31, 9, 23, '', 0),
(9, 'Ergot ', 26, 1, 24, '', 0),
(10, 'Eyespot', 34, 11, 22, '', 0),
(11, 'Glume blotch', 43, 22, 21, '', 0),
(12, 'septoria leaf blotch ', 45, 66, 24, '', 0),
(13, 'Mildew', 67, 77, 25, '', 0),
(14, 'Seedling blight', 34, 88, 26, '', 0),
(15, 'Sharp eyespot', 23, 99, 27, '', 0),
(16, 'Spot blotch ', 12, 22, 38, '', 0),
(17, 'Take-all ', 13, 33, 47, '', 0),
(18, 'Yellow rust', 14, 44, 47, 'Solution 18', 0),
(19, 'Bunts and smuts', 52, 76, 56, '', 0),
(20, 'Loose smut', 43, 67, 67, '', 0),
(21, 'Covered smut', 32, 65, 78, '', 0),
(22, 'Karnal Bunt', 33, 36, 89, '', 0),
(23, 'Barley Yellow Dwarf', 55, 35, 98, '', 0),
(24, 'Lesser grain borer ', 44, 34, 90, '', 0),
(25, 'Granary weevil', 24, 64, 98, '', 0),
(26, 'Rice weevil', 45, 68, 87, '', 0),
(28, 'Angoumois grain moth', 43, 34, 67, '', 0),
(29, 'Rust-red flour beetle', 33, 45, 54, '', 0),
(30, 'Confused flour beetle', 23, 54, 53, '', 0),
(31, 'Saw-toothed grain beetle', 2, 65, 53, '', 0),
(32, 'Flat grain beetle ', 12, 76, 89, '', 0),
(33, 'Warehouse moth', 11, 78, 25, '', 0),
(34, 'Indian meal moth ', 10, 67, 67, '', 0),
(35, 'Warehouse beetle', 9, 56, 21, '', 0),
(36, 'Bacterial leaf blight', 36, 32, 78, '', 0),
(37, 'Bacterial mosaic ', 40, 34, 76, '', 0),
(38, 'Bacterial sheath rot ', 49, 59, 75, '', 0),
(39, 'Alternaria leaf blight', 49, 66, 74, '', 0),
(40, 'Anthracnose ', 47, 7, 73, '', 0),
(41, 'Ascochyta leaf spot ', 46, 99, 72, '', 0),
(42, 'Aureobasidium decay', 45, 44, 71, '', 0),
(43, 'Black head molds', 44, 65, 77, '', 0),
(44, 'Black point ', 43, 56, 78, '', 0),
(45, 'Common root rot ', 42, 67, 79, '', 0),
(46, 'Loose smut ', 41, 23, 70, '', 0),
(47, 'Pink snow mold', 34, 77, 45, '', 0),
(48, 'African cereal streak', 55, 56, 46, '', 0),
(49, 'Agropyron mosaic ', 34, 45, 9, '', 0),
(50, 'Barley stripe mosaic ', 67, 55, 84, '', 0),
(51, 'Aster yellows', 23, 44, 32, '', 0),
(52, 'Grass cyst nematode', 23, 67, 31, '', 0),
(53, 'Seed gall', 53, 56, 34, '', 0),
(54, 'Wheat spot mosaic ', 23, 34, 35, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE IF NOT EXISTS `sensor` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `dte` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `temp` int(30) NOT NULL,
  `hum` int(30) NOT NULL,
  `gas` int(30) NOT NULL,
  `sol` varchar(500) NOT NULL,
  `stat` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id`, `dte`, `time`, `temp`, `hum`, `gas`, `sol`, `stat`) VALUES
(1, '2020-01-24', '10:53:40', 27, 64, 35, '', 0),
(2, '2020-01-24', '10:53:41', 27, 65, 35, '', 0),
(3, '2020-01-24', '10:53:42', 27, 65, 34, '', 0),
(4, '2020-01-24', '10:53:43', 27, 66, 34, '', 0),
(5, '2020-01-24', '10:53:45', 27, 66, 34, '', 0),
(6, '2020-01-24', '10:53:46', 27, 66, 34, '', 0),
(7, '2020-01-24', '10:53:47', 27, 66, 34, '', 0),
(8, '2020-01-24', '10:53:48', 27, 66, 34, '', 0),
(9, '2020-01-24', '10:53:49', 27, 66, 34, '', 0),
(10, '2020-01-24', '10:53:50', 27, 65, 34, '', 0),
(11, '2020-01-24', '10:53:52', 27, 65, 34, '', 0),
(12, '2020-01-24', '10:53:53', 27, 64, 34, '', 0),
(13, '2020-01-24', '10:53:54', 27, 64, 33, '', 0),
(14, '2020-01-24', '10:53:55', 27, 63, 33, '', 0),
(15, '2020-01-24', '10:53:56', 27, 63, 34, '', 0),
(16, '2020-01-24', '10:53:57', 27, 63, 33, '', 0),
(17, '2020-01-24', '10:53:59', 27, 63, 33, '', 0),
(18, '2020-01-24', '10:54:00', 27, 64, 33, '', 0),
(19, '2020-01-24', '10:54:01', 27, 64, 33, '', 0),
(20, '2020-01-24', '10:54:02', 27, 64, 33, '', 0),
(21, '2020-01-24', '10:54:03', 27, 64, 33, '', 0),
(22, '2020-01-24', '10:54:05', 27, 64, 33, '', 0),
(23, '2020-01-24', '10:54:07', 27, 63, 33, '', 0),
(24, '2020-01-24', '10:54:08', 27, 0, 33, '', 0),
(25, '2020-01-24', '10:54:14', 27, 63, 33, '', 0),
(26, '2020-01-24', '10:54:24', 27, 62, 32, '', 0),
(27, '2020-01-24', '10:54:26', 27, 68, 32, '', 0),
(28, '2020-01-24', '10:54:27', 27, 66, 32, '', 0),
(29, '2020-01-24', '10:54:28', 27, 66, 32, '', 0),
(30, '2020-01-24', '10:54:29', 27, 68, 32, '', 0),
(31, '2020-01-24', '10:54:33', 27, 63, 32, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE IF NOT EXISTS `solution` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `d_id` int(10) NOT NULL,
  `sol` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `solution`
--


-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2012 at 04:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `national`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evaluate` enum('VALID','INVALID','NONE') NOT NULL DEFAULT 'NONE',
  `leadfrom` enum('FORM','PARTNER') NOT NULL DEFAULT 'PARTNER',
  `Injury` text NOT NULL,
  `Q1_accident` enum('YES','NO') NOT NULL,
  `Q2_injured` enum('YES','NO') NOT NULL,
  `Q3_Claim` enum('YES','NO') NOT NULL,
  `Q4_enquiry` enum('YES','NO') NOT NULL,
  `Q5_signed` enum('YES','NO') NOT NULL,
  `Q6_involved` text NOT NULL,
  `Q7_provide` text NOT NULL,
  `Q8_Title` enum('Mr','Mrs','Ms','Miss') NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `hphone` varchar(11) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Q6` (`Q6_involved`(1))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `evaluate`, `leadfrom`, `Injury`, `Q1_accident`, `Q2_injured`, `Q3_Claim`, `Q4_enquiry`, `Q5_signed`, `Q6_involved`, `Q7_provide`, `Q8_Title`, `email`, `fname`, `sname`, `hphone`, `mobile`) VALUES
(26, 'VALID', 'FORM', 'Pelvis/Hip,Ankle', 'NO', 'YES', 'NO', 'YES', 'NO', 'Work Accident', 'hai', 'Mr', 'sasikumar@siteons.com', 'ram', 'kumar', '0425428871', '9731537251'),
(27, 'NONE', 'FORM', 'Pelvis/Hip,Ankle', 'NO', 'YES', 'NO', 'YES', 'NO', 'Work Accident', 'hai', 'Mr', 'sasikumar@siteons.com', 'ram', 'kumar', '0425428871', '9731537251'),
(28, 'NONE', 'FORM', 'Pelvis/Hip,Ankle', 'NO', 'YES', 'NO', 'YES', 'NO', 'Work Accident', 'hai', 'Mr', 'sasikumar@siteons.com', 'ram', 'kumar', '0425428871', '9731537251'),
(29, 'VALID', 'FORM', 'Pelvis/Hip,Ankle', 'NO', 'YES', 'NO', 'YES', 'NO', 'Work Accident', 'hai', 'Mr', 'sasikumar@siteons.com', 'ram', 'kumar', '0425428871', '9731537251'),
(34, 'VALID', 'FORM', 'Hand,Pelvis/Hip', 'YES', 'YES', 'YES', 'YES', 'YES', 'Road Accident', 'gggg', 'Mr', 'parthiban.027@gmail.com', 'name', 'kumar', '0425428871', '9843943283'),
(35, 'NONE', 'FORM', 'Hand,Pelvis/Hip', 'YES', 'YES', 'YES', 'YES', 'YES', 'Road Accident', 'gggg', 'Mr', 'parthiban.027@gmail.com', 'name', 'kumar', '0425428871', '9843943283'),
(36, 'NONE', 'FORM', 'Hand,Pelvis/Hip', 'YES', 'YES', 'YES', 'YES', 'YES', 'Road Accident', 'gggg', 'Mr', 'parthiban.027@gmail.com', 'name', 'kumar', '0425428871', '9843943283'),
(37, 'NONE', 'FORM', 'Hand,Pelvis/Hip', 'YES', 'YES', 'YES', 'YES', 'YES', 'Road Accident', 'gggg', 'Mr', 'parthiban.027@gmail.com', 'name', 'kumar', '0425428871', '9843943283'),
(39, 'NONE', 'FORM', 'Elbow,Ankle', 'NO', 'NO', 'NO', 'NO', 'NO', 'Trip/Slip', 'fast', 'Mrs', 'gjvardhan@gmail.comom', 'harsha', 'vardhan', '0425428871', '9602571722'),
(40, 'NONE', 'FORM', 'Elbow,Ankle', 'NO', 'NO', 'NO', 'NO', 'NO', 'Trip/Slip', 'fast', 'Mrs', 'gjvardhan@gmail.comom', 'harsha', 'vardhan', '0425428871', '9602571722');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE IF NOT EXISTS `loginform` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='loginpage';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

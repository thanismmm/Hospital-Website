-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 07:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(20) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `phoneNo`, `specialist`, `doctor`, `date`) VALUES
('ufytyu', 'yufiyui', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-16'),
('fghfgh', 'fghfgh', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '0000-00-00'),
('fghfgh', 'fghfgh', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '0000-00-00'),
('fghfgh', 'fghfgh', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-10'),
('gfhfghfgh', '8689+8', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-10'),
('gfhfghfgh', '8689+8', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-10'),
('dsfsd', '858767', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-18'),
('fghfgh', '686', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '0000-00-00'),
('ghjgfhjgfhj', '6546546', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-10'),
('fghfghfdgh', '6546498', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-09'),
('sdfdsgdfsg', '5646465645', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-24'),
('fghfghfdgh', '6546498', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-09'),
('fghfghfgh', '654654', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-02-02'),
('fgfgfghf', '654453', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-25'),
('dfgdsfg', 'dfgdfsgds', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('hfghfgh', '077654646', 'ENT-Surgeon', 'name1', '2024-01-24'),
('Kumar', '0778965456', 'ENT-Surgeon', 'Dr.Mohammed Razik', '2024-01-15'),
('kavin', '0778965478', 'ENT-Surgeon', 'Dr.Mohammed Razik', '2024-01-26'),
('sdfsdf', '65465465', 'ENT-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-25'),
('jafran', 'sammanthurai', '0767674023', 'Headache', '0000-00-00'),
('kevin', '077654789', 'Eye-Surgeon', 'Dr.Mohammed Razik', '2024-01-22'),
('john', '077654789', 'Eye-Surgeon', 'Dr.Mohammed Razik', '2024-01-22'),
('loki', '077654789', 'Eye-Surgeon', 'Dr.Mohammed Razik', '2024-01-22'),
('loki', '077654789', 'Eye-Surgeon', 'Dr.Mohammed Razik', '2024-01-22'),
('loki', '077654789', 'Eye-Surgeon', 'Dr.Mohammed Razik', '2024-01-22'),
('loki', '077654789', 'Eye-Surgeon', 'Dr.Mohammed Razik', '2024-01-22'),
('fghfgh', '7486876+', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-02-01'),
('fghfgh', '7486876+', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-02-01'),
('fghfgjh', '7464765', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-10'),
('ghjghj', '5378', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-29'),
('gfhfgh', '57387638', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-07'),
('fdyhyj', '6845364', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-30'),
('wejrio', '8986453', 'Eye-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-30'),
('Robert Joe', '0778965479', 'ENT-Surgeon', 'Dr.Mohammed Razik', '2024-01-23'),
('Thanis', '0778965478', 'ENT-Surgeon', 'Dr.Mohammed Gafoor', '2024-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `address`, `phoneNo`, `subject`, `message`) VALUES
('thanis', 'drhfdhrfth@gmail.com', '0778945687', 'sdfgdsgdf', 'sdfsdfgsdfgdsfgsd'),
('kumar', 'sammanthurai', '0767674023', 'Headache', 'sdfgsgdfgdfhgrfgh'),
('Mohammed Thanis', 'sammanthurai', '0776541324', 'body pain', 'i have body pain at last 3 days');

-- --------------------------------------------------------

--
-- Table structure for table `credential`
--

CREATE TABLE `credential` (
  `userID` varchar(20) DEFAULT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credential`
--

INSERT INTO `credential` (`userID`, `Password`) VALUES
('lksadfjs', 'asdfsdafasd'),
('waetfresfg', '465465'),
('thanis', '123');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_detail`
--

CREATE TABLE `doctor_detail` (
  `Doc_ID` int(10) NOT NULL,
  `Doctor_name` varchar(20) DEFAULT NULL,
  `Specialization` varchar(30) DEFAULT NULL,
  `Visit_Day` varchar(20) DEFAULT NULL,
  `Time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_detail`
--

INSERT INTO `doctor_detail` (`Doc_ID`, `Doctor_name`, `Specialization`, `Visit_Day`, `Time`) VALUES
(1, 'Mr.Mohammed Gafoor', 'ENT-Surgeon', 'Mon - Wed', '9 - 12AM'),
(2, 'Mr.Mohammed Razik', 'Eye-Sergeon', 'Mon - Thu', '9 - 12AM'),
(3, 'Mr.Mohammed Rizwan', 'Dental-Sergeon', 'Mon - fri', '8.30 - 10.30AM'),
(4, 'Mr.Mohammed Sabeer', 'VOG', 'Mon - Thu', '9AM - 4PM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

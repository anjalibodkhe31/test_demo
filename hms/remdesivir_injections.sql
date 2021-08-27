-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 09:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `remdesivir_injections`
--

CREATE TABLE `remdesivir_injections` (
  `name` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contactno` varchar(500) NOT NULL,
  `numberofrooms` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `remdesivirinjections` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remdesivir_injections`
--

INSERT INTO `remdesivir_injections` (`name`, `address`, `contactno`, `numberofrooms`, `image`, `remdesivirinjections`) VALUES
('Aiims hospital', 'AIIMS Campus Rd, AIIMS Campus, Saket Nagar, Habib Ganj, Bhopal, Madhya Pradesh 462026', '0755 298 2607', '50', 'up/Aiims hospital bhopal.jpg', '100'),
('Bhopal Memorial Hospital & Research Center', 'Raisen Road, near Karond Chouraha Road, Bhopal, Madhya Pradesh 462038', '0755 274 2212', '100', 'up/Bhopal Memorial Hospital & Research Center.jpg', '500'),
('Chirayu hospital', 'Chirayu Hospital. 6, Malipura Bhopal Bhopal , Bhopal, Madhya Pradesh - 462001', '0755 274 2212', '25', 'up/Chirayu hospital.jpg', '50'),
('National hospital', ' Habibganj Rd, Opp Cricket Club, E-3, Arera Colony, Bhopal, Madhya Pradesh 462016', '0755 244 0008', '500', 'up/National hospital.jpg', '1000'),
('Parulkar hospital', ' E-1/92 Arera Colony, Near Bittan Market, Bhopal, Madhya Pradesh 462016', '0755 246 7444', '60', 'up/Parulkar hospital.jpg', '120'),
('People\'s hospital', 'Peoples Hospital. Peoples Campus , Bhanpur Bhopal, Bhopal, Madhya Pradesh - 462016.', '753951482', '30', 'up/People\'s hospital.jpg', '60'),
('Smart city hospital', 'near chroma, Baner, Pune, Maharashtra 411045', '7203569841', '900', 'up/Smart city hospital.jpg', '1800');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

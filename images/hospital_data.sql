-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 04:17 PM
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
-- Database: `rf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital_data`
--

CREATE TABLE `hospital_data` (
  `name` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contactno` varchar(500) NOT NULL,
  `numberofrooms` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `beds` varchar(500) NOT NULL,
  `Oxygen_Cylender_Availability` int(240) NOT NULL,
  `Remdesivir_Injection` int(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_data`
--

UPDATE `hospital_data` SET `name` = 'National hospital',`address` = ' Habibganj Rd, Opp Cricket Club, E-3, Arera Colony, Bhopal, Madhya Pradesh 462016',`contactno` = '0755 244 0008',`numberofrooms` = '500',`image` = 'up/National hospital.jpg',`beds` = '1000',`Oxygen_Cylender_Availability` = 500,`Remdesivir_Injection` = 500 WHERE `hospital_data`.`contactno` = '0755 244 0008';
UPDATE `hospital_data` SET `name` = 'Parulkar hospital',`address` = ' E-1/92 Arera Colony, Near Bittan Market, Bhopal, Madhya Pradesh 462016',`contactno` = '0755 246 7444',`numberofrooms` = '60',`image` = 'up/Parulkar hospital.jpg',`beds` = '120',`Oxygen_Cylender_Availability` = 100,`Remdesivir_Injection` = 960 WHERE `hospital_data`.`contactno` = '0755 246 7444';
UPDATE `hospital_data` SET `name` = 'Bhopal Memorial Hospital & Research Center',`address` = 'Raisen Road, near Karond Chouraha Road, Bhopal, Madhya Pradesh 462038',`contactno` = '0755 274 2212',`numberofrooms` = '100',`image` = 'up/Bhopal Memorial Hospital & Research Center.jpg',`beds` = '500',`Oxygen_Cylender_Availability` = 95,`Remdesivir_Injection` = 880 WHERE `hospital_data`.`contactno` = '0755 274 2212';
UPDATE `hospital_data` SET `name` = 'Aiims hospital',`address` = 'AIIMS Campus Rd, AIIMS Campus, Saket Nagar, Habib Ganj, Bhopal, Madhya Pradesh 462026',`contactno` = '0755 298 2607',`numberofrooms` = '50',`image` = 'up/Aiims hospital bhopal.jpg',`beds` = '100',`Oxygen_Cylender_Availability` = 80,`Remdesivir_Injection` = 650 WHERE `hospital_data`.`contactno` = '0755 298 2607';
UPDATE `hospital_data` SET `name` = 'Chirayu hospital',`address` = 'Chirayu Hospital. 6, Malipura Bhopal Bhopal , Bhopal, Madhya Pradesh - 462001',`contactno` = '0987654321',`numberofrooms` = '25',`image` = 'up/Chirayu hospital.jpg',`beds` = '50',`Oxygen_Cylender_Availability` = 70,`Remdesivir_Injection` = 750 WHERE `hospital_data`.`contactno` = '0987654321';
UPDATE `hospital_data` SET `name` = 'Smart city hospital',`address` = 'near chroma, Baner, Pune, Maharashtra 411045',`contactno` = '7203569841',`numberofrooms` = '900',`image` = 'up/Smart city hospital.jpg',`beds` = '1800',`Oxygen_Cylender_Availability` = 10000,`Remdesivir_Injection` = 850 WHERE `hospital_data`.`contactno` = '7203569841';
UPDATE `hospital_data` SET `name` = 'People\'s hospital',`address` = 'Peoples Hospital. Peoples Campus , Bhanpur Bhopal, Bhopal, Madhya Pradesh - 462016.',`contactno` = '753951482',`numberofrooms` = '30',`image` = 'up/People\'s hospital.jpg',`beds` = '60',`Oxygen_Cylender_Availability` = 960,`Remdesivir_Injection` = 750 WHERE `hospital_data`.`contactno` = '753951482';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital_data`
--
ALTER TABLE `hospital_data`
  ADD PRIMARY KEY (`contactno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

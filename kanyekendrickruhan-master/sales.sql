-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 07:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albums`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `name` varchar(60) NOT NULL,
  `year` int(60) NOT NULL,
  `US` int(60) NOT NULL,
  `US R&B` int(60) NOT NULL,
  `US rap` int(60) NOT NULL,
  `AUS` int(60) NOT NULL,
  `CAN` int(60) NOT NULL,
  `GER` int(60) NOT NULL,
  `IRL` int(60) NOT NULL,
  `NZ` int(60) NOT NULL,
  `SWI` int(60) NOT NULL,
  `UK` int(60) NOT NULL,
  `Sales` int(60) NOT NULL,
  `Certifications` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`name`, `year`, `US`, `US R&B`, `US rap`, `AUS`, `CAN`, `GER`, `IRL`, `NZ`, `SWI`, `UK`, `Sales`, `Certifications`) VALUES
('Section.80', 2011, 113, 21, 0, 0, 0, 0, 0, 0, 0, 0, 157348, 'Gold'),
('Good Kid, MA.A.D City', 2012, 2, 1, 23, 46, 2, 20, 57, 26, 7, 16, 2020000, '3x Platinum'),
('To Pimp a Butterfly', 2015, 1, 1, 1, 4, 1, 3, 17, 6, 1, 1, 2220162, 'Platinum'),
('Damn', 2017, 1, 1, 2, 2, 1, 2, 3, 2, 2, 2, 2302000, '3x Platinum'),
('Untitled Unmastered', 2016, 1, 1, 3, 11, 1, 13, 55, 9, 5, 7, 179059, '0'),
('Black Panther: The Album', 2018, 1, 1, 2, 8, 1, 1, 93, 2, 1, 0, 209000, 'Platinum'),
('Overly Dedicated', 2010, 0, 72, 46, 0, 0, 0, 0, 0, 0, 0, 12000, '0'),
('The College Dropout', 2004, 2, 1, 5, 0, 0, 77, 13, 0, 96, 12, 3358000, '4x Platinum'),
('Late Registration', 2005, 1, 1, 1, 14, 1, 14, 2, 11, 9, 2, 3946000, '4x Platinum'),
('Graduation', 2007, 1, 1, 1, 2, 1, 10, 2, 2, 3, 1, 2700000, '5x Platinum'),
('808s & Heartbreak', 2008, 1, 1, 0, 12, 4, 30, 11, 15, 13, 11, 1700000, '3x Platinum'),
('My Beautiful Dark Twisted Fantasy', 2010, 1, 1, 1, 6, 1, 19, 18, 10, 10, 16, 1300000, '3x Platinum'),
('Yeezus', 2013, 1, 1, 1, 1, 1, 15, 4, 1, 6, 1, 750000, '2x Platinum'),
('The Life of Pablo', 2016, 1, 1, 1, 65, 6, 0, 8, 0, 0, 30, 0, '2x Platinum'),
('Ye', 2018, 1, 1, 1, 1, 1, 25, 1, 1, 7, 2, 85000, 'Platinum'),
('Jesus is King', 2019, 1, 1, 1, 1, 1, 19, 2, 1, 8, 2, 109000, 'Gold'),
('Donda', 2021, 1, 1, 1, 1, 1, 4, 1, 1, 2, 1, 0, 'Gold'),
('Watch the Throne', 2011, 1, 1, 1, 2, 1, 2, 5, 4, 1, 3, 3432000, '5x Platinum'),
('Kids See Ghosts', 2018, 2, 1, 1, 4, 3, 33, 2, 3, 12, 7, 101000, 'Gold'),
('Cruel Summer', 2012, 2, 1, 7, 4, 12, 10, 30, 74, 10, 2, 1000000, 'Platinum');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

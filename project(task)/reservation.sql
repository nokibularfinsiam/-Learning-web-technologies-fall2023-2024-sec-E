-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 05:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Name` varchar(50) NOT NULL,
  `Number` bigint(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Guests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Name`, `Number`, `Date`, `Time`, `Guests`) VALUES
('ddddd', 111111111, '2023-11-08', '10:03:00', 6),
('Siam', 1575267980, '2023-11-08', '14:09:00', 4),
('Farhan', 111111111, '2023-10-31', '10:20:00', 4),
('', 0, '0000-00-00', '00:00:00', 0),
('', 0, '0000-00-00', '00:00:00', 0),
('', 0, '0000-00-00', '00:00:00', 0),
('', 0, '0000-00-00', '00:00:00', 0),
('fff', 548855, '2023-10-31', '10:44:00', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

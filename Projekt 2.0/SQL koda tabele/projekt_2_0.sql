-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 01:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt 2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `glasba`
--

CREATE TABLE `glasba` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `pot` varchar(255) NOT NULL,
  `slika` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `glasba`
--

INSERT INTO `glasba` (`id`, `ime`, `pot`, `slika`) VALUES
(1, 'Eminem - Stan', 'glasba/Pesem1.mp3', 'css/slike/slika3.jpg'),
(2, 'Magic! - Rude', 'glasba/Pesem2.mp3', 'css/slike/slika4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uporabniki`
--

CREATE TABLE `uporabniki` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `priimek` varchar(50) NOT NULL,
  `geslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `ime`, `priimek`, `geslo`) VALUES
(1, 'test', 'test', '$2y$10$tywfCH.ugdrAPOjXxaSuKekQKtxQxfdO87RNDTdT/r69Bmx8hn6Pu'),
(3, 'Stanko', 'Telebanko', '$2y$10$1amIOWI2EpolSQnKwW3KVeyFvtoKcp0JvSqx8wwr9/A5S8UTfxTNa'),
(4, 'Janez', 'Novak', '$2y$10$L4WxF.Fuyg4POI/BfHGdIOJE0mFcf2mM2lmCcmzyxzGCi.sGLiQyK'),
(5, 'Nejc', 'Novak', '$2y$10$VzZr5uVAABKZIYgqPPpfCuHhsO16.KVwPeZRI2cMDJ9Ewn3HQTq7S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `glasba`
--
ALTER TABLE `glasba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `glasba`
--
ALTER TABLE `glasba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

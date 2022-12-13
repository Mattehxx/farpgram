-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2022 at 09:11 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farpgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `bio` varchar(200) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `imageURL` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL DEFAULT '../uploads/profileImages/Default_pfp.png',
  `actionTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idSex` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `firstName`, `lastName`, `birthDate`, `bio`, `imageURL`, `actionTime`, `idSex`, `idUser`) VALUES
(1, 'Mattehxx', NULL, NULL, NULL, NULL, '../uploads/profileImages/Default_pfp.png', '2022-11-16 14:28:21', NULL, 1),
(2, 'Mattia', NULL, NULL, NULL, NULL, '../uploads/profileImages/Default_pfp.png', '2022-11-29 22:56:21', NULL, 2),
(3, 'Marco', NULL, NULL, NULL, NULL, '../uploads/profileImages/Default_pfp.png', '2022-11-29 22:56:35', NULL, 3),
(4, 'simonefornoni_', NULL, NULL, NULL, NULL, '../uploads/profileImages/Default_pfp.png', '2022-12-10 19:01:15', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `body` varchar(200) DEFAULT NULL,
  `actionTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idPost` int(11) NOT NULL,
  `idAccount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `idAccount` int(11) DEFAULT '0',
  `idAccountFollowed` int(11) NOT NULL DEFAULT '0',
  `actionTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `idAccount`, `idAccountFollowed`, `actionTime`) VALUES
(1, 4, 1, '2022-12-10 21:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `idAccount` int(11) NOT NULL,
  `idAccountResearched` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imagevideos`
--

CREATE TABLE `imagevideos` (
  `id` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `idPost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `imagevideos`
--

INSERT INTO `imagevideos` (`id`, `url`, `idPost`) VALUES
(1, '../uploads/Passage.png', 1),
(2, '../uploads/Screenshot (1).png', 2),
(3, '../uploads/novb.jpg', 3),
(4, '../uploads/omg.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `idPost` int(11) DEFAULT NULL,
  `idAccount` int(11) DEFAULT NULL,
  `actionTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(500) CHARACTER SET ucs2 COLLATE ucs2_unicode_520_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `actionTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAccount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `location`, `actionTime`, `idAccount`) VALUES
(1, 'Ao bella!', '20025 Legnano MI, Italia', '2022-12-10 13:19:14', 1),
(2, 'dasd', '20025 Legnano MI, Italia', '2022-12-10 21:27:13', 4),
(3, 'novb', '20025 Legnano MI, Italia', '2022-12-10 21:28:07', 4),
(4, 'Che bello il CELO', 'Abu Dhabi, Emirato di Abu Dhabi, Emirati Arabi Uniti', '2022-12-10 22:23:30', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `id` int(11) NOT NULL,
  `descriz` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`id`, `descriz`) VALUES
(1, 'Uomo'),
(2, 'Donna');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'teorove04@gmail.com', 'e93b509fc81a6d2aed44d12a5e3cee5e'),
(2, 'ciao@gmail.com', 'e93b509fc81a6d2aed44d12a5e3cee5e'),
(3, 'prova@gmail.com', 'e93b509fc81a6d2aed44d12a5e3cee5e'),
(4, 'simonefornoni04@gmail.com', '0879ab98bb7e220b5add2bb9081eebf8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `accounts_ibfk_2` (`idSex`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAccount` (`idAccount`),
  ADD KEY `idPost` (`idPost`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAccount` (`idAccount`),
  ADD KEY `idAccountFollowed` (`idAccountFollowed`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_ibfk_1` (`idAccount`),
  ADD KEY `history_ibfk_2` (`idAccountResearched`);

--
-- Indexes for table `imagevideos`
--
ALTER TABLE `imagevideos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPost` (`idPost`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAccount` (`idAccount`),
  ADD KEY `idPost` (`idPost`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAccount` (`idAccount`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagevideos`
--
ALTER TABLE `imagevideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`idSex`) REFERENCES `sex` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `posts` (`id`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`idAccountFollowed`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`idAccountResearched`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `imagevideos`
--
ALTER TABLE `imagevideos`
  ADD CONSTRAINT `imagevideos_ibfk_1` FOREIGN KEY (`idPost`) REFERENCES `posts` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

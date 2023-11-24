-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 06:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Dateup` date NOT NULL,
  `Status` text NOT NULL,
  `Content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Name`, `Dateup`, `Status`, `Content`) VALUES
(1, 'Content 1', '2023-11-23', 'Yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In ornare quam viverra orci sagittis eu volutpat odio facilisis. Euismod nisi porta lorem mollis aliquam ut porttitor leo a. Tincidunt augue interdum velit euismod in pellentesque massa. Augue neque gravida in fermentum et sollicitudin ac orci. Sem et tortor consequat id porta nibh venenatis cras. Nam aliquam sem et tortor consequat id porta nibh. Vel quam elementum pulvinar etiam non quam. Ac tortor dignissim convallis aenean et tortor at. Sit amet luctus venenatis lectus. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Ullamcorper sit amet risus nullam eget. Ac felis donec et odio pellentesque diam volutpat. Curabitur vitae nunc sed velit dignissim sodales ut eu. Vivamus at augue eget arcu.\r\n\r\nAdipiscing bibendum est ultricies integer quis auctor elit sed. Vel quam elementum pulvinar etiam non quam lacus suspendisse. Ut eu sem integer vitae justo. Augue interdum velit euismod in pellentesque massa placerat. Purus gravida quis blandit turpis cursus in hac habitasse platea. Quam nulla porttitor massa id neque aliquam vestibulum. Sagittis nisl rhoncus mattis rhoncus urna neque. Non consectetur a erat nam at lectus urna. Diam quam nulla porttitor massa id neque aliquam. Velit scelerisque in dictum non consectetur a erat nam at. Odio facilisis mauris sit amet massa.\r\n\r\nEt netus et malesuada fames ac turpis egestas integer eget. Vitae justo eget magna fermentum iaculis. Non blandit massa enim nec dui nunc mattis. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Euismod quis viverra nibh cras. Dui id ornare arcu odio ut sem nulla pharetra. Elementum facilisis leo vel fringilla. Blandit libero volutpat sed cras ornare arcu dui vivamus. Eget velit aliquet sagittis id consectetur. Senectus et netus et malesuada fames ac turpis egestas. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Gravida cum sociis natoque penatibus et magnis dis parturient montes.\r\n\r\nFermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Egestas congue quisque egestas diam in arcu cursus euismod. Tempor commodo ullamcorper a lacus vestibulum sed arcu non odio. Suspendisse in est ante in nibh. Eget lorem dolor sed viverra ipsum nunc. Purus faucibus ornare suspendisse sed. Vitae turpis massa sed elementum. Nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Augue interdum velit euismod in pellentesque massa. Quam pellentesque nec nam aliquam sem et tortor.\r\n\r\nNunc non blandit massa enim. Fringilla phasellus faucibus scelerisque eleifend donec. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Et malesuada fames ac turpis egestas integer. Rutrum tellus pellentesque eu tincidunt tortor. Dignissim enim sit amet venenatis urna cursus eget. A cras semper auctor neque vitae tempus quam. Eros in cursus turpis massa tincidunt dui. Viverra justo nec ultrices dui sapien. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Diam quam nulla porttitor massa id neque aliquam vestibulum. Sit amet cursus sit amet dictum sit amet. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eget arcu dictum varius duis at. Dui accumsan sit amet nulla facilisi. Ornare arcu odio ut sem nulla pharetra diam sit. Aliquet nec ullamcorper sit amet risus. Commodo ullamcorper a lacus vestibulum sed arcu.'),
(9, 'Content 2', '2023-11-24', 'Not push', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Feugiat in ante metus dictum at tempor commodo. Metus dictum at tempor commodo ullamcorper. Egestas sed sed risus pretium. Cras tincidunt lobortis feugiat vivamus at augue.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Uname` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Uname`, `Password`) VALUES
(1, 'Phucluu', 'a12356789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

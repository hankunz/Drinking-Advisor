-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2014 at 10:18 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CSCI3130-Pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `Drink`
--

CREATE TABLE `Drink` (
  `DrinkId` int(50) NOT NULL AUTO_INCREMENT,
  `Id` int(50) NOT NULL,
  `DateAdded` varchar(30) NOT NULL,
  `TimeAdded` varchar(30) NOT NULL,
  PRIMARY KEY (`DrinkId`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Drink`
--

INSERT INTO `Drink` (`DrinkId`, `Id`, `DateAdded`, `TimeAdded`) VALUES
(7, 8, '2014-03-13', '3:31:37 pm');

-- --------------------------------------------------------

--
-- Table structure for table `DrinkInfo`
--

CREATE TABLE `DrinkInfo` (
  `DrinkId` int(11) DEFAULT NULL COMMENT 'foreign key from Drink',
  `Name` varchar(50) NOT NULL,
  `Label` varchar(50) DEFAULT NULL,
  `Volume` double NOT NULL,
  `Price` double DEFAULT NULL,
  `Review` varchar(200) DEFAULT NULL,
  `Sugar` int(5) NOT NULL,
  `Protein` int(2) DEFAULT NULL,
  `Fat` int(2) DEFAULT NULL,
  `Calories` int(5) NOT NULL,
  `Cholesterol` int(2) DEFAULT NULL,
  `Sodium` int(2) DEFAULT NULL,
  `Alcohol` int(5) NOT NULL,
  `Vitaminc` int(5) NOT NULL,
  UNIQUE KEY `DrinkId_2` (`DrinkId`),
  KEY `DrinkId` (`DrinkId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DrinkInfo`
--

INSERT INTO `DrinkInfo` (`DrinkId`, `Name`, `Label`, `Volume`, `Price`, `Review`, `Sugar`, `Protein`, `Fat`, `Calories`, `Cholesterol`, `Sodium`, `Alcohol`, `Vitaminc`) VALUES
(7, 'asd', NULL, 5, NULL, NULL, 5, NULL, NULL, 5, NULL, NULL, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Goal`
--

CREATE TABLE `Goal` (
  `WeightGoal` int(3) NOT NULL,
  `WaterIntake` int(3) NOT NULL,
  `AlcoholLimit` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Email` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(30) NOT NULL,
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Email`, `Password`, `Id`) VALUES
('sahool.90@gmail.com', '123', 8);

-- --------------------------------------------------------

--
-- Table structure for table `Place`
--

CREATE TABLE `Place` (
  `DrinkId` int(50) NOT NULL,
  `PlaceName` varchar(70) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`Address`),
  KEY `DrinkId` (`DrinkId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE `Profile` (
  `Id` int(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(2) NOT NULL,
  `Height` int(3) NOT NULL,
  `Weight` int(3) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Bmi` double NOT NULL,
  PRIMARY KEY (`Name`),
  KEY `Id` (`Id`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Profile`
--

INSERT INTO `Profile` (`Id`, `Name`, `Age`, `Height`, `Weight`, `Gender`, `Country`, `Bmi`) VALUES
(8, 'sahl alghamdi', 23, 168, 50, 'Male', 'saudi arabia', 17.7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Drink`
--
ALTER TABLE `Drink`
  ADD CONSTRAINT `drink_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `Login` (`Id`);

--
-- Constraints for table `DrinkInfo`
--
ALTER TABLE `DrinkInfo`
  ADD CONSTRAINT `drinkinfo_ibfk_1` FOREIGN KEY (`DrinkId`) REFERENCES `Drink` (`DrinkId`);

--
-- Constraints for table `Place`
--
ALTER TABLE `Place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`DrinkId`) REFERENCES `Drink` (`DrinkId`);

--
-- Constraints for table `Profile`
--
ALTER TABLE `Profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `Login` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

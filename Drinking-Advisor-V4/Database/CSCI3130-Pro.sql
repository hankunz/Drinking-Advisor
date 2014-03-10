-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2014 at 05:23 AM
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
  `Name` varchar(100) NOT NULL,
  `Label` varchar(100) NOT NULL,
  `Size` varchar(150) NOT NULL,
  `Price` int(2) NOT NULL,
  `Review` varchar(200) NOT NULL,
  `Id` int(50) NOT NULL,
  PRIMARY KEY (`Name`,`Label`),
  KEY `Label` (`Label`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Email`, `Password`, `Id`) VALUES
('sahool.90@gmail.com', '123456', 7);

-- --------------------------------------------------------

--
-- Table structure for table `NutritionFact`
--

CREATE TABLE `NutritionFact` (
  `Sugar` int(2) NOT NULL,
  `Protein` int(2) NOT NULL,
  `Fat` int(2) NOT NULL,
  `Calories` int(2) NOT NULL,
  `Cholesterol` int(2) NOT NULL,
  `Sodium` int(2) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Label` varchar(100) NOT NULL,
  KEY `Name` (`Name`),
  KEY `Label` (`Label`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Place`
--

CREATE TABLE `Place` (
  `Name` varchar(100) NOT NULL,
  `Label` varchar(100) NOT NULL,
  `pName` varchar(70) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`Address`),
  KEY `Name` (`Name`),
  KEY `Label` (`Label`),
  KEY `Label_2` (`Label`)
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
(7, 'Sahl Alghamdi', 23, 168, 50, 'Male', 'Saudi Arabia', 17.7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Drink`
--
ALTER TABLE `Drink`
  ADD CONSTRAINT `drink_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `Login` (`Id`);

--
-- Constraints for table `NutritionFact`
--
ALTER TABLE `NutritionFact`
  ADD CONSTRAINT `nutritionfact_ibfk_1` FOREIGN KEY (`Name`) REFERENCES `Drink` (`Name`),
  ADD CONSTRAINT `nutritionfact_ibfk_2` FOREIGN KEY (`Label`) REFERENCES `Drink` (`Label`);

--
-- Constraints for table `Place`
--
ALTER TABLE `Place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`Name`) REFERENCES `Drink` (`Name`),
  ADD CONSTRAINT `place_ibfk_2` FOREIGN KEY (`Label`) REFERENCES `Drink` (`Label`);

--
-- Constraints for table `Profile`
--
ALTER TABLE `Profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `Login` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

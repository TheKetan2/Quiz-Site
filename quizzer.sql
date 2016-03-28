-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 06:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(24, 1, 1, 'The Ketan '),
(25, 1, 0, 'Not By The Ketan'),
(26, 1, 0, 'Joker'),
(27, 1, 0, 'Stan Lee'),
(28, 2, 0, 'Spiderman'),
(29, 2, 0, 'Dr. Osborn'),
(30, 2, 1, 'Mario'),
(31, 2, 0, 'Luigi'),
(32, 3, 0, 'Aikadi faikadi'),
(33, 3, 0, 'Soni'),
(34, 3, 0, 'Minto Fresh'),
(35, 3, 1, 'Vishwas'),
(36, 3, 0, 'Gadi'),
(37, 4, 1, 'Color TV'),
(38, 4, 0, 'Black TV'),
(39, 4, 0, 'Green TV'),
(40, 4, 0, 'Rangit TV'),
(41, 4, 0, 'DD National'),
(42, 5, 1, 'Rahul'),
(43, 5, 0, 'no rahul'),
(44, 5, 0, 'Apps'),
(45, 5, 0, 'Mala Nahi Mahit'),
(46, 6, 1, 'wagh'),
(47, 6, 0, 'Shinde'),
(48, 6, 0, 'Ketan'),
(49, 6, 0, 'Rupesh'),
(50, 7, 0, 'Hindi'),
(51, 7, 0, 'English'),
(52, 7, 1, 'Marathi'),
(53, 7, 0, 'Telagu');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_number` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_number`, `text`) VALUES
(1, 'Who Made This App?'),
(2, 'Who won the War against the evil Tortoise?'),
(3, 'Who broke the Moto E'),
(4, 'Sabse Bakwas TV Channel?'),
(5, 'What is the name of Rahul?'),
(6, 'Who is most geeky?'),
(7, 'In which language Khwada Movie is released?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 08:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviereel`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `aid` varchar(50) NOT NULL DEFAULT '',
  `aname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`aid`, `aname`) VALUES
('A-CE1', 'Chris Evans'),
('A-CH1', 'Chris Hemsworth'),
('A-MR1', 'Mark Ruffalo'),
('A-RDJ1', 'Robert Downey JR'),
('A-SJ1', 'Scarlett Johannson');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE IF NOT EXISTS `directors` (
  `did` varchar(50) NOT NULL DEFAULT '',
  `dname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`did`, `dname`) VALUES
('D-J1', 'Joss Whedon');

-- --------------------------------------------------------

--
-- Table structure for table `entrytable`
--

CREATE TABLE IF NOT EXISTS `entrytable` (
  `movieid` varchar(50) DEFAULT NULL,
  `actorid` varchar(50) DEFAULT NULL,
  `directorid` varchar(50) DEFAULT NULL,
  `studioid` varchar(50) DEFAULT NULL,
  `keywordid` varchar(50) DEFAULT NULL,
  KEY `movieid` (`movieid`),
  KEY `actorid` (`actorid`),
  KEY `directorid` (`directorid`),
  KEY `studioid` (`studioid`),
  KEY `keywordid` (`keywordid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrytable`
--

INSERT INTO `entrytable` (`movieid`, `actorid`, `directorid`, `studioid`, `keywordid`) VALUES
('A001', 'A-SJ1', 'D-J1', 'S-MS1', 'K-A1'),
('A001', 'A-RDJ1', 'D-J1', 'S-MS1', 'K-S1'),
('A002', 'A-CE1', 'D-J1', 'S-MS1', 'K-A1'),
('A002', 'A-SJ1', 'D-J1', 'S-MS1', 'K-A3'),
('T001', 'A-CH1', 'D-J1', 'S-MS1', 'K-A1');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `kid` varchar(50) NOT NULL DEFAULT '',
  `kname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`kid`, `kname`) VALUES
('K-A1', 'action'),
('K-A2', 'adventure'),
('K-A3', 'aliens'),
('K-S1', 'space');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `mid` varchar(50) NOT NULL DEFAULT '',
  `mname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `mname`) VALUES
('A001', 'The Avengers'),
('A002', 'The Avengers:Age of Ultron'),
('C001', 'Captain America: The First Avenger'),
('C002', 'Captain America:The Winter Soldier'),
('C003', 'Captain America: Civil War'),
('I001', 'Iron Man'),
('I002', 'Iron Man 2'),
('I003', 'Iron Man 3'),
('SP001', 'Spiderman'),
('T001', 'Thor'),
('T002', 'Thor: The Dark World');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE IF NOT EXISTS `studios` (
  `sid` varchar(50) NOT NULL DEFAULT '',
  `sname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`sid`, `sname`) VALUES
('S-MS1', 'Marvel Studios');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entrytable`
--
ALTER TABLE `entrytable`
  ADD CONSTRAINT `entrytable_ibfk_1` FOREIGN KEY (`movieid`) REFERENCES `movies` (`mid`),
  ADD CONSTRAINT `entrytable_ibfk_2` FOREIGN KEY (`actorid`) REFERENCES `actors` (`aid`),
  ADD CONSTRAINT `entrytable_ibfk_3` FOREIGN KEY (`directorid`) REFERENCES `directors` (`did`),
  ADD CONSTRAINT `entrytable_ibfk_4` FOREIGN KEY (`studioid`) REFERENCES `studios` (`sid`),
  ADD CONSTRAINT `entrytable_ibfk_5` FOREIGN KEY (`keywordid`) REFERENCES `keywords` (`kid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

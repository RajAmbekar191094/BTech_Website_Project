-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2015 at 02:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `allot`
--

CREATE TABLE IF NOT EXISTS `allot` (
  `seatno` varchar(2) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `allot` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allot`
--

INSERT INTO `allot` (`seatno`, `Name`, `allot`) VALUES
('6', 'neena', 'VJTI'),
('15', 'Narendra', 'VJTI'),
('18', 'Divya', 'VJTI'),
('10', 'Anuradha', 'VJTI'),
('21', 'Madhuri', 'VIT'),
('7', 'Aditi', 'VJTI'),
('8', 'Srikanth', 'RAIT'),
('19', 'Rohan', 'RAIT'),
('11', 'Swapna', 'SPIT'),
('12', 'Prerna', 'SPIT'),
('13', 'Swathi', 'SPIT'),
('3', 'vikas', 'RAIT'),
('16', 'Suyog', 'SIES GST'),
('1', 'Shreejit', 'SPIT'),
('20', 'Vidya', 'SIES GST'),
('2', 'Ram', 'SPIT'),
('17', 'Faraz', 'VIT'),
('9', 'Shilpa', 'RAIT'),
('5', 'raj', 'RAIT'),
('4', 'dharma', 'SIES GST'),
('14', 'Alia', 'SIES GST');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE IF NOT EXISTS `newuser` (
  `dbseatno` varchar(30) NOT NULL,
  `dbpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`dbseatno`, `dbpassword`) VALUES
('1', '1'),
('10', '10'),
('11', '11'),
('12', '12'),
('13', '13'),
('14', '14'),
('15', '15'),
('16', '16'),
('17', '17'),
('18', '18'),
('19', '19'),
('2', '2'),
('20', '20'),
('21', '21'),
('3', '3'),
('4', '4'),
('5', '5'),
('6', '6'),
('7', '7'),
('8', '8'),
('9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `option_form`
--

CREATE TABLE IF NOT EXISTS `option_form` (
  `dbseatn` varchar(20) NOT NULL,
  `ch1` varchar(20) NOT NULL,
  `ch2` varchar(20) NOT NULL,
  `ch3` varchar(20) NOT NULL,
  `ch4` varchar(20) NOT NULL,
  `ch5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option_form`
--

INSERT INTO `option_form` (`dbseatn`, `ch1`, `ch2`, `ch3`, `ch4`, `ch5`) VALUES
('1', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('10', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('11', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('12', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('13', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('14', 'SIES GST', 'SPIT', 'RAIT', 'VIT', 'VJTI'),
('15', 'VJTI', 'RAIT', 'SIES GST', 'SPIT', 'VIT'),
('16', 'VJTI', 'SIES GST', 'RAIT', 'VIT', 'SPIT'),
('17', 'VJTI', 'SPIT', 'VIT', 'RAIT', 'SIES GST'),
('18', 'VJTI', 'SPIT', 'SIES GST', 'VIT', 'RAIT'),
('19', 'VJTI', 'RAIT', 'VIT', 'SPIT', 'SIES GST'),
('2', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('20', 'SIES GST', 'RAIT', 'SPIT', 'VIT', 'SIES GST'),
('21', 'VIT', 'VJTI', 'SPIT', 'SIES GST', 'RAIT'),
('3', 'RAIT', 'SPIT', 'SIES GST', 'VJTI', 'VIT'),
('4', 'VJTI', 'SIES GST', 'SPIT', 'RAIT', 'VIT'),
('5', 'VJTI', 'RAIT', 'SPIT', 'VIT', 'SIES GST'),
('6', 'VJTI', 'SIES GST', 'SPIT', 'RAIT', 'VIT'),
('7', 'VJTI', 'SPIT', 'RAIT', 'VIT', 'SIES GST'),
('8', 'VJTI', 'RAIT', 'SPIT', 'VIT', 'SIES GST'),
('9', 'SPIT', 'VJTI', 'RAIT', 'VIT', 'SIES GST');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ranks`
--
CREATE TABLE IF NOT EXISTS `ranks` (
`dbseatno` int(30)
,`dbfirstname` varchar(30)
,`dblastname` varchar(30)
,`dbdob` date
,`dbemail` varchar(30)
,`dbtel` int(30)
,`dbcollg` varchar(30)
,`dbphysics` int(30)
,`dbchemistry` int(30)
,`dbmaths` int(30)
,`dbtotal` int(30)
,`dbseatn` varchar(20)
,`ch1` varchar(20)
,`ch2` varchar(20)
,`ch3` varchar(20)
,`ch4` varchar(20)
,`ch5` varchar(20)
);
-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `dbseatno` int(30) NOT NULL,
  `dbfirstname` varchar(30) NOT NULL,
  `dblastname` varchar(30) NOT NULL,
  `dbdob` date NOT NULL,
  `dbemail` varchar(30) NOT NULL,
  `dbtel` int(30) NOT NULL,
  `dbcollg` varchar(30) NOT NULL,
  `dbphysics` int(30) NOT NULL,
  `dbchemistry` int(30) NOT NULL,
  `dbmaths` int(30) NOT NULL,
  `dbtotal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`dbseatno`, `dbfirstname`, `dblastname`, `dbdob`, `dbemail`, `dbtel`, `dbcollg`, `dbphysics`, `dbchemistry`, `dbmaths`, `dbtotal`) VALUES
(1, 'Shreejit', 'Achari', '2015-03-25', 'shree@sdba.com', 123, 'assf', 70, 16, 70, 156),
(2, 'Ram', 'Sita', '2015-03-01', 'vja@advj.com', 456, 'ddas', 20, 50, 60, 130),
(3, 'vikas', 'more', '2015-04-01', 'vikas@gmail.com', 5566, 'pes', 50, 60, 70, 180),
(4, 'dharma', 'adapa', '1994-09-03', 'dharmateja88bgkjsbgj@gdf.gd', 3483483, 'gst', 2, 8, 9, 19),
(5, 'raj', 'ambekar', '2015-04-08', 'qqq@gmail.com', 112, 'sies', 10, 10, 10, 30),
(6, 'neena', 'jacob', '2015-01-21', 'ss@gmail.com', 34355655, 'des', 100, 100, 100, 300),
(7, 'Aditi', 'Dhanpal', '1994-11-05', 'aditi@da.com', 546, 'SIES', 70, 80, 90, 240),
(8, 'Srikanth', 'Ganeshan', '1994-12-05', 'sri@da.com', 879, 'GST', 70, 80, 70, 220),
(9, 'Shilpa', 'Joshi', '1994-01-05', 'shilpa@da.com', 999, 'VPM', 45, 45, 35, 125),
(10, 'Anuradha', 'Kulkarni', '1994-11-09', 'anu@da.com', 5876, 'SIES', 90, 90, 81, 251),
(11, 'Swapna', 'Patil', '1994-02-05', 'patil@da.com', 666, 'SIES', 71, 72, 73, 216),
(12, 'Prerna', 'Tripathi', '1993-11-25', 'prerna@da.com', 526, 'SIES', 51, 81, 71, 203),
(13, 'Swathi', 'Hegde', '1994-12-25', 'swathi@da.com', 879, 'GST', 41, 72, 81, 194),
(14, 'Alia', 'Bhat', '1993-11-05', 'aliya@da.com', 123, 'St.Xaviers', 5, 5, 5, 15),
(15, 'Narendra', 'Modi', '1984-05-05', 'namo@bamo.com', 111, 'BJP', 100, 100, 99, 299),
(16, 'Suyog', 'Marde', '1994-11-15', 'marde@google.com', 786, 'SIES', 51, 52, 57, 160),
(17, 'Faraz', 'Khan', '1994-07-20', 'khan@google.com', 797, 'NMIT', 60, 40, 30, 130),
(18, 'Divya', 'Nair', '1994-11-15', 'divya@google.com', 86, 'Model', 95, 95, 90, 280),
(19, 'Rohan', 'Fernandes', '1994-06-14', 'fernss@google.com', 147, 'SIES', 67, 77, 73, 217),
(20, 'Vidya', 'Nair', '1994-07-15', 'Nair@google.com', 446, 'SIES', 44, 48, 60, 152),
(21, 'Madhuri', 'Achmani', '2015-04-15', '', 0, 'Jondale', 70, 80, 91, 241);

-- --------------------------------------------------------

--
-- Structure for view `ranks`
--
DROP TABLE IF EXISTS `ranks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ranks` AS (select `signup`.`dbseatno` AS `dbseatno`,`signup`.`dbfirstname` AS `dbfirstname`,`signup`.`dblastname` AS `dblastname`,`signup`.`dbdob` AS `dbdob`,`signup`.`dbemail` AS `dbemail`,`signup`.`dbtel` AS `dbtel`,`signup`.`dbcollg` AS `dbcollg`,`signup`.`dbphysics` AS `dbphysics`,`signup`.`dbchemistry` AS `dbchemistry`,`signup`.`dbmaths` AS `dbmaths`,`signup`.`dbtotal` AS `dbtotal`,`option_form`.`dbseatn` AS `dbseatn`,`option_form`.`ch1` AS `ch1`,`option_form`.`ch2` AS `ch2`,`option_form`.`ch3` AS `ch3`,`option_form`.`ch4` AS `ch4`,`option_form`.`ch5` AS `ch5` from (`signup` join `option_form`) where (`signup`.`dbseatno` = `option_form`.`dbseatn`) order by `signup`.`dbtotal` desc);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
 ADD PRIMARY KEY (`dbpassword`);

--
-- Indexes for table `option_form`
--
ALTER TABLE `option_form`
 ADD PRIMARY KEY (`dbseatn`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`dbseatno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

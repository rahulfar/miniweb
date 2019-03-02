-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 06:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahul`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `addresh` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `univ` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `first` varchar(50) NOT NULL,
  `second` varchar(50) NOT NULL,
  `third` varchar(50) NOT NULL,
  `four` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `mname`, `lname`, `f_name`, `address`, `pin`, `mob`, `dob`, `category`, `exam`, `board`, `univ`, `year`, `first`, `second`, `third`, `four`, `shift`, `email`, `pass`) VALUES
(1, 'rahul', 'singh', 'farswan', 'N.s faeswan', 'addersh colony', '246481', '9536895467', '1998-08-18', 'sc', 'java', 'csbc', 'HNB', '2016-07-29', 'java', '012', '2019', '01/2/2017', 'moring', 'rahul@gmail.com', '12345'),
(2, 'rohan', 'singh', 'farswan', 'a.s farswan', 'c-12 nehrugram', '246481', '8630833629', '1998-02-26', 'st', 'ASP.net', 'csbc', 'HNB', '2019-02-13', 'ASP.net', '015', '2019', '01/2/2017', 'moring', 'rohan@gmail.com', '123456'),
(4, 'rakhi', 'singh', 'upreti', 'k.s ', 'c-41 nehrugram raipur\r\ndehradun  uttarkhand', '246481', '8630833629', '1998-03-22', 'st', 'xml', 'csbc', 'HNB', '2019-02-13', 'ERP', '014', '2019', '2019-05-25', 'moring', 'januu@gmail.com', '1234567'),
(5, 'rohini', 'singh', 'rajput', 'sandeep singh', 'c-89 home no 0123\r\n near kishan bhawan- raipur\r\nde', '246481', '8630833629', '1998-07-23', 'sc', 'maths', 'csbc', 'dun internaitonal', '2016-09-28', 'maths', '0123', '2019', '2015-08-26', '', 'rohini@gmail.com', '123456789'),
(6, 'RAJU', 'LAL', 'RASTOGY', 'k.s rastogy', 'g-98 home no-22 mumbai\r\n MH', '5213456', '9536894568', '1999-12-25', 'sc', 'SOFTWARE ENGINERING', 'csbc', 'HNB', '2019-09-30', 'SOFTWARE ENGINERING', '0122', '2019', '2015-09-27', 'moring', 'raju@gmail.com', '000000000'),
(7, 'rahul', 'singh', 'rajput', 'n.s rajput', 'c-11 home no32\r\ndehradun', '246481', '9536895467', '2003-12-31', '', '', '', '', '0000-00-00', '', '', '', '', '', 'rahul1@gmail.cpm', '123456'),
(8, 'rocky', 's', 'rajput', 'S.s', 'c-45 home no 89\r\nraipur', '5213456', '9536894568', '1999-10-15', '', 'JAVA', 'csbc', 'HNB', '2019-12-28', 'PHP', '012', '2019', '2016-05-24', 'moring', 'rocky@gmail.com', '1230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

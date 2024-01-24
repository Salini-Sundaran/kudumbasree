-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 11:11 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kudumbasree`
--
CREATE DATABASE IF NOT EXISTS `kudumbasree` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kudumbasree`;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkey` char(8) NOT NULL,
  `bankame` varchar(20) NOT NULL,
  `branchname` varchar(20) NOT NULL,
  `ifsccode` varchar(30) NOT NULL,
  `acholdername` varchar(30) NOT NULL,
  `acno` varchar(30) NOT NULL,
  `cno` varchar(17) NOT NULL,
  `cvv` int(5) NOT NULL,
  `expireddate` date NOT NULL,
  `tamount` int(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bkey`, `bankame`, `branchname`, `ifsccode`, `acholdername`, `acno`, `cno`, `cvv`, `expireddate`, `tamount`, `contact`) VALUES
(1, '01abc', 'Federal Bank', 'Punalur', 'FDRL1200', 'Salini', '120036521452', '1111222233334444', 123, '2023-07-12', 49997700, '8965321475'),
(2, '05cdg', 'Canara Bank', 'Pidavoor', 'cn12365', 'Althaf', '145632178965', '987654321123', 564, '2024-05-15', 10000000, '9632541875'),
(3, '26qwe', 'SBI', 'Vettikavala', 'SBI12365478', 'Adwaid', '456321789654', '563214789632', 663, '2025-01-15', 10000000, '8965321475');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `akey` char(8) NOT NULL,
  `productid` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `cdate` date NOT NULL,
  `paymentstatus` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `akey`, `productid`, `loginid`, `amount`, `quantity`, `cdate`, `paymentstatus`) VALUES
(43, '08299c53', 8, 22, '150', '3', '2022-02-16', '0'),
(44, '342d298d', 9, 22, '100', '4', '2022-02-16', '1'),
(46, 'c185c163', 12, 22, '800', '4', '2022-02-16', '0'),
(47, 'a1fac12c', 10, 22, '200', '1', '2022-02-18', '1'),
(48, 'ec0b4bdc', 12, 16, '800', '4', '2022-02-18', '0');

-- --------------------------------------------------------

--
-- Table structure for table `clerkreg`
--

CREATE TABLE IF NOT EXISTS `clerkreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ckey` char(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `kudumbasree` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clerkreg`
--

INSERT INTO `clerkreg` (`id`, `ckey`, `name`, `address`, `pincode`, `district`, `city`, `gender`, `dob`, `kudumbasree`, `contact`, `loginid`) VALUES
(1, '4f11252b', 'Meenu', 'Meenu Vilasom', '695328', 'Alappuzha', 'pathanapuram', 'female', '1987-12-04', '4', '9963254178', 14);

-- --------------------------------------------------------

--
-- Table structure for table `employerreg`
--

CREATE TABLE IF NOT EXISTS `employerreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ekey` char(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `kudumbasree` varchar(30) NOT NULL,
  `adhar` varchar(16) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employerreg`
--

INSERT INTO `employerreg` (`id`, `ekey`, `name`, `address`, `pincode`, `district`, `city`, `gender`, `dob`, `kudumbasree`, `adhar`, `contact`, `loginid`) VALUES
(4, '5daa0233', 'employe12', 'Anju Bhavan', '691325', 'Alappuzha', 'Paravoor', 'female', '2022-02-01', '16', '584621367841', '9963254178', 19);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lkey` char(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` enum('0','1','2','3','4','5') NOT NULL,
  `status` enum('0','1','2','3','4','5') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `lkey`, `email`, `password`, `usertype`, `status`) VALUES
(7, 'f2277fbb', 'Priya22@gmail.com', '0b1c8bc395a9588a79cd3c191c22a6b4', '2', '0'),
(8, 'f3680889', 'Avani34@gmail.com', '8e1e125fb4942f2a76a7d5a49c7824c2', '2', '0'),
(9, 'b7938545', 'Devi12@gmail.com', 'f5c2db1f19bdde37e740e86b70d0534f', '5', '0'),
(10, '81dfe40a', 'Deepa190@gmail.com', '29987ce14a9c7b9137f616843eca049b', '5', '0'),
(11, 'b40cf4ce', 'Manju12@gmail.com', '86f9ab6653b3b0151eef76b46ba2f9a5', '5', '0'),
(12, 'e0af5fa5', 'Veena@gmail.com', '3674a735fc274ed90b96b6a9171695b8', '4', '0'),
(13, '5d8cda1e', 'Vidhyav@gmail.com', '948b0bad18fed1d3a89ceba3550bd512', '4', '0'),
(14, '36b34e28', 'Meenu123@gmail.com', '4b03afcdb71c48eb81a2405b0998019f', '3', '0'),
(15, '50152481', 'Devi23@gmail.com', 'f5c2db1f19bdde37e740e86b70d0534f', '1', '0'),
(16, 'ba033ea8', 'udhayam@mail.com', 'cea43f6e7867faafdcebe7875e4bfc5e', '1', '0'),
(19, 'af69e6fc', 'emp1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '4', '0'),
(20, 'a1263425', 'man@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '5', '0'),
(21, 'e2f0d436', 'Jini@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '2', '0'),
(22, '85c885b5', 'mem@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `managerreg`
--

CREATE TABLE IF NOT EXISTS `managerreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jkey` char(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `kudumbasree` varchar(30) NOT NULL,
  `adhar` varchar(16) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `managerreg`
--

INSERT INTO `managerreg` (`id`, `jkey`, `name`, `address`, `pincode`, `district`, `city`, `gender`, `dob`, `kudumbasree`, `adhar`, `contact`, `loginid`) VALUES
(4, 'a019c771', 'man23', 'surya villa', '689695', 'Thrissur', 'pathanapuram', 'male', '2022-02-01', '16', '62621612626', '9954236812', 20);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mtkey` char(8) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `meeting` varchar(40) NOT NULL,
  `loginid` int(10) NOT NULL,
  `currentdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `mtkey`, `date`, `time`, `meeting`, `loginid`, `currentdate`) VALUES
(1, '0a7ebbb1', '1936-02-05', '10:30:00', 'urgent meeting..........', 15, '2022-02-10'),
(2, 'df5405d9', '2022-02-10', '07:44:00', 'asdfhj', 16, '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `memberreg`
--

CREATE TABLE IF NOT EXISTS `memberreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mkey` char(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `panchayath` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` varchar(20) NOT NULL,
  `adhar` varchar(16) NOT NULL,
  `kudumbasree` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `memberreg`
--

INSERT INTO `memberreg` (`id`, `mkey`, `name`, `address`, `pincode`, `district`, `city`, `panchayath`, `gender`, `age`, `adhar`, `kudumbasree`, `contact`, `loginid`) VALUES
(5, '31b61da9', 'member', 'Jini Villa', 693255, 'Thiruvanathapuram', 'Tvm', 'tvm', 'female', '26', '854623147896', '16', '9954236812', 21),
(6, 'e7691e80', 'member1', 'Jini Villa', 693255, 'Thrissur', 'Tvm', 'punnala', 'female', '11', '62621612626', '16', '9954236812', 22);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nkey` char(8) NOT NULL,
  `notification` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `nkey`, `notification`, `date`, `loginid`) VALUES
(3, 'e3b911f6', 'hlo.....', '2022-02-10', 16),
(4, '4a095e25', 'sdfghjkl', '2022-02-10', 16);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pakey` char(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cardno` varchar(17) NOT NULL,
  `cvv` int(30) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `tamount` int(11) NOT NULL,
  `loginid` int(10) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pakey`, `name`, `cardno`, `cvv`, `month`, `year`, `tamount`, `loginid`, `cdate`) VALUES
(17, '38c353cb', 'salini', '1111222233334444', 123, '5', '2023', 150, 22, '2022-02-16'),
(18, '80da44e9', 'salini', '1111222233334444', 123, '5', '2023', 150, 22, '2022-02-16'),
(19, 'fb1d0253', 'salini', '1111222233334444', 123, '5', '2023', 800, 22, '2022-02-16'),
(20, '2f5294cf', 'salini', '1111222233334444', 123, '5', '2023', 500, 22, '2022-02-16'),
(21, '1f3bc1af', 'salini', '1111222233334444', 123, '5', '2023', 500, 22, '2022-02-16'),
(22, '5aa82c6b', 'salini', '1111222233334444', 123, '5', '2023', 1000, 22, '2022-02-18'),
(23, 'b069b7ca', 'salini', '1111222233334444', 123, '5', '2023', 200, 22, '2022-02-18'),
(24, 'ec12f29a', 'salini', '1111222233334444', 123, '5', '2023', 100, 22, '2022-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pkey` char(8) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `amount` int(40) NOT NULL,
  `details` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pkey`, `category`, `name`, `quantity`, `amount`, `details`, `image`, `date`, `loginid`) VALUES
(8, 'aac459c0', 'Soap', 'Vivel', '39', 50, 'wsedrftyhj', 'Red-Label.jpg', '2022-02-10', 19),
(9, 'c761b686', 'Tea Powder', 'Kannan Tea Powder', '6', 25, 'serdtfyguhijko', 'Kanan Devan Tea.png', '2022-02-10', 19),
(10, '0af603e7', 'Turmeric Powder', 'Turmeric', '47', 200, 'qasderfghj', 'pexels-cÃ¡tia-matos-1072179.jpg', '2022-02-10', 20),
(11, 'a26b9fcc', 'Coffee Powder', 'Netscafe', '14', 200, 'qawesdfhgjyop', 'Netscafe.jpeg', '2022-02-10', 20),
(12, 'c541f830', 'Mask', 'N95 Mask', '90', 200, 'srdxvfgybhunjkm', 'brue.jpeg', '2022-02-10', 20);

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kkey` char(8) NOT NULL,
  `kudumbasree_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `panchayath` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `no_of_members` varchar(40) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `kkey`, `kudumbasree_name`, `address`, `pincode`, `district`, `city`, `panchayath`, `village`, `no_of_members`, `contact_no`, `loginid`) VALUES
(5, 'ccbd8542', 'Devi MN', 'Devi Villa', '693241', 'Thiruvanathapuram', 'Tvm', 'edakkal', 'Venjaramood', '20', '9954236812', 15),
(6, '73514e1c', 'udhayam', 'Idappalli Nagar', '362514', 'Alappuzha', 'Adoor', 'edakkal', 'Punalur', '20', '8965326989', 16);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

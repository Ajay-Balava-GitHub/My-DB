-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 06:41 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_ins`
--

CREATE TABLE `auto_ins` (
  `MySQL_Function` varchar(30) DEFAULT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `id` int(11) NOT NULL,
  `first` varchar(20) NOT NULL,
  `middle` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `cno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sub` varchar(160) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`id`, `first`, `middle`, `last`, `cno`, `email`, `gender`, `sub`, `msg`) VALUES
(1, 'Balava', 'Ajay', 'B.', 9081962544, 'balavaajay@gmail.com', 'Male', 'To add new Feature in www.sfds.com', 'Now at present,\r\nthis site can only upload Document ,\r\nI Request you to add test module and Show result of test as soon as test over. ');

--
-- Triggers `contact_detail`
--
DELIMITER $$
CREATE TRIGGER `notify` AFTER INSERT ON `contact_detail` FOR EACH ROW INSERT INTO notify (name) values('A')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Sem` varchar(10) NOT NULL,
  `Sub` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `Name`, `Sem`, `Sub`, `date`, `file`) VALUES
(1, 'AJY', '6', 'AJP', '2018-01-06', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE `faculty_master` (
  `u_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`u_name`, `pass`) VALUES
('admin', '123'),
('faculty_name', 'password'),
('Jay_Sir', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `name`) VALUES
(1, 'A'),
(2, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'pendrive', 110);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `Change` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO product_price_hostory (id,name,price,cdate) values (old.id,old.name,old.price,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_price_hostory`
--

CREATE TABLE `product_price_hostory` (
  `Sr no.` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_price_hostory`
--

INSERT INTO `product_price_hostory` (`Sr no.`, `id`, `name`, `price`, `cdate`) VALUES
(1, 1, 'pendrive', 100, '2018-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

CREATE TABLE `staff_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`id`, `name`, `cno`, `email`, `gender`, `address`) VALUES
(1, 'chirag', 1111111111, 'abc@gmail.com', '1', 'xyz'),
(2, 'jay Fuletra', 2222222222, 'jay@gmail.com', '1', 'asasas');

-- --------------------------------------------------------

--
-- Table structure for table `std_detail`
--

CREATE TABLE `std_detail` (
  `name` varchar(20) NOT NULL,
  `eno` bigint(12) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `cno` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_detail`
--

INSERT INTO `std_detail` (`name`, `eno`, `sem`, `cno`, `email`, `gender`, `address`) VALUES
('Pankaj Varma', 156950307500, '6', 9999999999, 'pankaj@gmail.com', 'Male', ' Junagadh '),
('Altaf Liya', 156950307503, '6', 7567237584, 'altafliya@gmail.com', 'Male', '  abc  '),
('Ajay', 156950307504, '6', 9081962544, 'balavaajay@gmail.com', 'Male', '       xyz       ');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `user_id` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL,
  `eno` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`user_id`, `password`, `eno`) VALUES
('pkj', '2222', 156950307500),
('Altaf', '5555', 156950307503),
('Ajay', '123', 156950307504);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `sem` int(11) DEFAULT NULL,
  `sub` varchar(30) DEFAULT NULL,
  `doc_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `f_name`, `sem`, `sub`, `doc_date`) VALUES
(1, '94268-how-to-install-and-configure-mysql-databse.pdf', 'application/pdf', 635, 'Practical - 1', 6, 'PPUD', '2018-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`photo`) VALUES
('Hydrangeas.jpg'),
('Hydrangeas.jpg'),
('Hydrangeas.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`u_name`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_price_hostory`
--
ALTER TABLE `product_price_hostory`
  ADD PRIMARY KEY (`Sr no.`);

--
-- Indexes for table `staff_detail`
--
ALTER TABLE `staff_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_detail`
--
ALTER TABLE `std_detail`
  ADD PRIMARY KEY (`eno`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`eno`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_price_hostory`
--
ALTER TABLE `product_price_hostory`
  MODIFY `Sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_detail`
--
ALTER TABLE `staff_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

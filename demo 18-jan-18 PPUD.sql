-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 04:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

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
-- Table structure for table `download_manager`
--

CREATE TABLE `download_manager` (
  `id` int(6) UNSIGNED NOT NULL,
  `filename` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `downloads` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `download_manager`
--

INSERT INTO `download_manager` (`id`, `filename`, `downloads`) VALUES
(1, '', 27);

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
-- Table structure for table `h_product`
--

CREATE TABLE `h_product` (
  `sr_no` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_product`
--

INSERT INTO `h_product` (`sr_no`, `p_id`, `p_name`, `p_price`) VALUES
(1, 1, 'pendrive', 100);

-- --------------------------------------------------------

--
-- Table structure for table `m_product`
--

CREATE TABLE `m_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_product`
--

INSERT INTO `m_product` (`p_id`, `p_name`, `p_price`, `p_type`) VALUES
(1, 'pendrive', 100, 'H');

--
-- Triggers `m_product`
--
DELIMITER $$
CREATE TRIGGER `s_h` AFTER INSERT ON `m_product` FOR EACH ROW BEGIN
if(new.p_type ='H' || new.p_type='h') THEN
insert into h_product (p_id,p_name,p_price) values(new.p_id,new.p_name,new.p_price);
ELSE
insert into s_product (p_id,p_name,p_price) values(new.p_id,new.p_name,new.p_price);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `s_h_delete` AFTER DELETE ON `m_product` FOR EACH ROW BEGIN
if(old.p_type ='H' || old.p_type='h') THEN
delete from h_product where p_name=old.p_name;
ELSE
delete from s_product where p_name=old.p_name;
end if;
end
$$
DELIMITER ;

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
(1, 'pendrive HP', 121);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `Change` AFTER UPDATE ON `product` FOR EACH ROW BEGIN
if(new.price!=old.price) then
INSERT INTO product_price_hostory (id,name,price,cdate) values (new.id,new.name,new.price,now());
End IF;
End
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
(1, 1, 'pendrive', 100, '2018-01-09'),
(2, 1, 'pendrive', 110, '2018-01-18'),
(3, 1, 'pendrive', 120, '2018-01-18'),
(4, 1, 'pendrive HP', 121, '2018-01-18');

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
-- Table structure for table `s_product`
--

CREATE TABLE `s_product` (
  `sr_no` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `download_manager`
--
ALTER TABLE `download_manager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`u_name`);

--
-- Indexes for table `h_product`
--
ALTER TABLE `h_product`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `m_product`
--
ALTER TABLE `m_product`
  ADD PRIMARY KEY (`p_id`);

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
-- Indexes for table `s_product`
--
ALTER TABLE `s_product`
  ADD PRIMARY KEY (`sr_no`);

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
-- AUTO_INCREMENT for table `download_manager`
--
ALTER TABLE `download_manager`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `h_product`
--
ALTER TABLE `h_product`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_product`
--
ALTER TABLE `m_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_price_hostory`
--
ALTER TABLE `product_price_hostory`
  MODIFY `Sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_detail`
--
ALTER TABLE `staff_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s_product`
--
ALTER TABLE `s_product`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

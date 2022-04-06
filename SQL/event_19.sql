-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 08:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `role` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `role`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2018-04-09 07:36:18'),
(18, 'muktiar', '25d55ad283aa400af464c76d713c07ad', 'muktiar@gmail.com', 'User', '2022-04-03 16:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `admin_order`
--

CREATE TABLE `admin_order` (
  `o_id` int(222) NOT NULL,
  `de_id` int(222) NOT NULL,
  `package` varchar(255) NOT NULL,
  `username` varchar(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `quantity` int(222) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `shift` text NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `edate` date NOT NULL,
  `type` text NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `payment` varchar(222) DEFAULT NULL,
  `t_id` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_order`
--

INSERT INTO `admin_order` (`o_id`, `de_id`, `package`, `username`, `c_name`, `quantity`, `price`, `shift`, `o_hr`, `c_hr`, `edate`, `type`, `total`, `status`, `payment`, `t_id`, `date`) VALUES
(38, 7, 'mutton', 'ekm', 'muktiar', 10, '15000', 'Morning', '6am', '7am', '2020-11-03', 'Birthday', '150000 ', NULL, 'bkash', '177464646', '2022-04-06 17:52:55'),
(39, 7, 'chicken', 'ekm', 'muktiar', 120, '120', 'Evening', '8am', '9am', '2025-02-03', 'Birthday', '14400 ', NULL, 'bkash', '177464646', '2022-04-06 17:56:01'),
(40, 7, 'bryiani', 'ekm', 'muktiar', 120, '200', 'Morning', '6am', '6am', '2022-12-30', 'Birthday', '24000 ', NULL, 'bkash', '1502030217', '2022-04-06 18:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `de_id` int(222) NOT NULL,
  `dc_name` varchar(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`de_id`, `dc_name`, `username`, `f_name`, `l_name`, `email`, `password`, `phone`, `address`) VALUES
(7, 'Food', 'ekm', 'e', 'k', 'm@gmail.com', '25d55ad283aa400af464c76d713c07ad', '01814843567', 'asdasda');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_cat`
--

CREATE TABLE `dealer_cat` (
  `dc_id` int(222) NOT NULL,
  `dc_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer_cat`
--

INSERT INTO `dealer_cat` (`dc_id`, `dc_name`, `date`) VALUES
(7, 'Food', '2022-04-03 17:32:48'),
(8, 'Decoration', '2022-04-03 17:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_ser`
--

CREATE TABLE `dealer_ser` (
  `ds_id` int(222) NOT NULL,
  `dc_name` varchar(222) NOT NULL,
  `ds_name` varchar(222) NOT NULL,
  `about` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer_ser`
--

INSERT INTO `dealer_ser` (`ds_id`, `dc_name`, `ds_name`, `about`, `price`, `image`) VALUES
(2, 'Food2', 'chicken', 'made with chicken', '100.00', '621f329751908.jpg'),
(3, 'Food2', 'Mutton', 'made with fresh mutton', '100.00', '621f9945d7ad3.jpg'),
(4, 'Food2', 'Beef', 'made with beef', '100.00', '621fa988dba80.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pack_name`
--

CREATE TABLE `pack_name` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pack_name`
--

INSERT INTO `pack_name` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(40, 63, 'Chicken Biriyani', 'One of the most royal delicacies that you can enjoy on any occasion or festival, Chicken Biryani is the epitome of a one-pot meal. Well, no one can resist the sight of the aromatic and delicious Chicken Biryani recipe. If ', '100.00', '6249c8fb6ce36.jpg'),
(41, 63, 'Mutton Biriyani', 'One of the most royal delicacies that you can enjoy on any occasion or festival, Chicken Biryani is the epitome of a one-pot meal. Well, no one can resist the sight of the aromatic and delicious Chicken Biryani recipe. If ', '200.00', '6249c9686cc09.jpg'),
(42, 64, 'Stage Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '10000.00', '6249cc3194624.jpg'),
(43, 64, 'Photo Booth', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '2000.00', '6249ccc02035b.jpg'),
(44, 65, 'Waiter', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '500.00', '6249cdb05c5ef.jpg'),
(45, 66, 'Haji Mintu Chef', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '10000.00', '6249ce5040b7b.jpg'),
(46, 66, 'Badsha Mia ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '20000.00', '6249ce9a5517d.jpg'),
(47, 64, 'Interior Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '20000.00', '6249cf8360326.jpg'),
(48, 67, 'Chicken', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '80.00', '6249d11192ca3.jpg'),
(49, 67, 'Fish', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '50.00', '6249d0ff512cc.jpg'),
(50, 68, 'Coffee', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '15.00', '6249d22713499.jpg'),
(51, 68, 'Pepsi', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '15.00', '6249d27725f0d.jpg'),
(52, 69, 'Dj Sam', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '10000.00', '6249d2f5cced8.jpg'),
(53, 69, 'Lalon Band', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '50000.00', '6249d31914306.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remarkDate`) VALUES
(62, 32, 'in process', '2018-04-18 17:35:52'),
(63, 32, 'closed', '2018-04-18 17:36:46'),
(64, 32, 'in process', '2018-04-18 18:01:37'),
(65, 32, 'closed', '2018-04-18 18:08:55'),
(66, 34, 'in process', '2018-04-18 18:56:32'),
(67, 35, 'closed', '2018-04-18 18:59:08'),
(68, 37, 'in process', '2018-04-18 19:50:06'),
(69, 37, 'rejected', '2018-04-18 19:51:19'),
(70, 37, 'closed', '2018-04-18 19:51:50'),
(71, 39, 'in process', '2022-01-10 17:19:00'),
(72, 39, 'rejected', '2022-01-10 17:19:22'),
(73, 55, 'in process', '2022-02-19 16:59:37'),
(74, 55, 'rejected', '2022-02-19 17:04:15'),
(75, 57, 'pending', '2022-02-19 17:57:13'),
(76, 57, 'in process', '2022-02-19 18:00:47'),
(77, 57, 'paid', '2022-02-19 18:06:53'),
(78, 57, 'paid & in process', '2022-02-19 18:10:46'),
(79, 57, 'completed', '2022-02-19 18:13:47'),
(80, 57, 'in process', '2022-02-19 18:19:08'),
(81, 57, 'closed', '2022-02-19 18:21:06'),
(82, 57, 'in process', '2022-03-30 17:01:51'),
(83, 26, 'closed', '2022-03-30 17:09:58'),
(84, 35, 'closed', '2022-04-01 14:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `ser_category`
--

CREATE TABLE `ser_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ser_category`
--

INSERT INTO `ser_category` (`c_id`, `c_name`, `date`) VALUES
(22, 'Food', '2022-04-03 16:14:22'),
(23, 'Decoration', '2022-04-03 16:26:23'),
(24, 'Food Serving', '2022-04-03 16:35:48'),
(25, 'Food Cooking', '2022-04-03 16:39:56'),
(26, 'Food Prepartion Items', '2022-04-03 16:48:20'),
(27, 'Drinks', '2022-04-03 16:54:24'),
(28, 'Music', '2022-04-03 17:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `ser_name`
--

CREATE TABLE `ser_name` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ser_name`
--

INSERT INTO `ser_name` (`rs_id`, `c_id`, `title`, `address`, `image`) VALUES
(63, 22, 'Food', 'Select Your Desire Food', '6249ca2065cf4.jpg'),
(64, 23, 'Decoration', 'Select Your Desire Decoration', '6249cb162f98c.jpg'),
(65, 24, 'Waiter', 'Select Your Food Serving Service', '6249cd24518be.jpg'),
(66, 25, 'Chef', 'Select Your Desire Chef', '6249ce179ab1f.jpg'),
(67, 26, 'Food Preparation Items', 'Select Your Desired Items', '6249d0004c5b3.jpg'),
(68, 27, 'Drinks', 'Select Your Desired Drinks\r\n', '6249d183112ef.jpg'),
(69, 28, 'Music', 'Select Your Desired Music', '6249d2e106743.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(36, 'karim', 'Robiul', 'Karim', 'trisha@gmail.com', '01638575578', '25d55ad283aa400af464c76d713c07ad', 'Ibrahim mension,K.B Aman Ali Road,Chawkbazar,Chittagong', 1, '2022-04-03 17:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `item_total` varchar(222) DEFAULT NULL,
  `shift` text NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `edate` date NOT NULL,
  `type` text NOT NULL,
  `payment` varchar(222) NOT NULL,
  `t_id` varchar(222) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `item_total`, `shift`, `o_hr`, `c_hr`, `edate`, `type`, `payment`, `t_id`, `status`, `date`) VALUES
(62, 36, 'Dj Sam', 1, '10000.00', NULL, 'Night', '7am', '10am', '2022-04-14', 'Birthday', 'Nagad', ' 1234567890ok', NULL, '2022-04-03 17:06:33'),
(63, 36, 'Photo Booth', 1, '2000.00', NULL, 'Night', '7am', '10am', '2022-04-14', 'Birthday', 'Nagad', ' 1234567890ok', NULL, '2022-04-03 17:06:33'),
(64, 36, 'Waiter', 5, '500.00', NULL, 'Night', '7am', '10am', '2022-04-14', 'Birthday', 'Nagad', ' 1234567890ok', NULL, '2022-04-03 17:06:33'),
(65, 36, 'Mutton Biriyani', 100, '200.00', NULL, 'Night', '7am', '10am', '2022-04-14', 'Birthday', 'Nagad', ' 1234567890ok', NULL, '2022-04-03 17:06:33'),
(66, 36, 'Pepsi', 100, '15.00', NULL, 'Night', '7am', '10am', '2022-04-14', 'Birthday', 'Nagad', ' 1234567890ok', NULL, '2022-04-03 17:06:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_order`
--
ALTER TABLE `admin_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`de_id`);

--
-- Indexes for table `dealer_cat`
--
ALTER TABLE `dealer_cat`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `dealer_ser`
--
ALTER TABLE `dealer_ser`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `pack_name`
--
ALTER TABLE `pack_name`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ser_category`
--
ALTER TABLE `ser_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ser_name`
--
ALTER TABLE `ser_name`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_order`
--
ALTER TABLE `admin_order`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `de_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dealer_cat`
--
ALTER TABLE `dealer_cat`
  MODIFY `dc_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dealer_ser`
--
ALTER TABLE `dealer_ser`
  MODIFY `ds_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pack_name`
--
ALTER TABLE `pack_name`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `ser_category`
--
ALTER TABLE `ser_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ser_name`
--
ALTER TABLE `ser_name`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

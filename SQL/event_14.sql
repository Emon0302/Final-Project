-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 06:41 AM
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
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', '', '2018-04-13 18:12:30'),
(9, 'ABC', 'e10adc3949ba59abbe56e057f20f883e', 'asfi@gmail.com', 'User', '2022-01-29 11:15:25'),
(11, 'qwer', '962012d09b8170d912f0669f6d7d9d07', 'q@gmail.com', 'User', '2022-01-29 17:45:45'),
(14, 'adm', '224ddb22cb25fcb6741b6ede40918dcd', 'adm@gmail.com', 'Admin', '2022-02-17 08:42:45'),
(15, 'admin2', '224ddb22cb25fcb6741b6ede40918dcd', 'admin2@gmail.com', 'Admin', '2022-02-16 17:10:08');

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
  `quantity` int(222) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `shift` text NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `edate` date NOT NULL,
  `type` text NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_order`
--

INSERT INTO `admin_order` (`o_id`, `de_id`, `package`, `username`, `quantity`, `price`, `shift`, `o_hr`, `c_hr`, `edate`, `type`, `status`, `date`) VALUES
(13, 4, '', 'karim', 2, '3', 'Evening', '11pm', '11pm', '2022-03-24', 'Birthday', 'in process', '2022-03-26 05:40:14'),
(14, 4, '', 'karim', 2, '120', 'Morning', '11pm', '10pm', '2022-03-16', 'Birthday', 'in process', '2022-03-28 14:41:14'),
(24, 4, 'chicken', 'karim', 300, '500000', 'Evening', '1pm', '11am', '2026-02-03', 'Party', NULL, '2022-03-29 17:08:31'),
(25, 4, 'mutton', 'karim', 300, '200000', 'Evening', '7am', '9pm', '2022-03-31', 'Birthday', NULL, '2022-03-29 17:54:34'),
(26, 5, 'beef', 'fdsa', 200, '15000', 'Evening', '12am', '1pm', '2023-03-03', 'Birthday', 'closed', '2022-03-30 17:09:58'),
(27, 4, 'chicken', 'karim', 200, '50000', 'Evening', '1pm', '12am', '2022-03-03', 'Birthday', NULL, '2022-03-30 16:17:29'),
(32, 6, 'tejas', 'muktiar', 1, '2000', 'Night', '10am', '10am', '2024-03-03', 'Party', NULL, '2022-03-30 16:50:36'),
(33, 4, 'korma', 'karim', 250, '300000', 'Night', '11am', '12am', '2022-02-02', 'Birthday', NULL, '2022-03-30 17:06:45');

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
(4, 'decoration', 'karim', 'karim', 'Paul', 'karim@gmail.com', '25d55ad283aa400af464c76d713c07ad', '01638575578', 'Ibrahim mension,K.B Aman Ali Road,Chawkbazar,Chittagong'),
(5, 'Food2', 'fdsa', 'asdsadasdasd', 'asdasdas', 'f@email.com', 'f0898af949a373e72a4f6a34b4de9090', '43243141241242', 'adasdafdasfsfas'),
(6, 'Music', 'muktiar', 'muktiar', 'hossen', 'm@gmail.com', '25d55ad283aa400af464c76d713c07ad', '01814045599', 'habujabi');

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
(2, 'Food2', '2022-02-25 14:28:02'),
(3, 'Waiter', '2022-02-25 14:56:44'),
(4, 'decoration', '2022-02-25 16:23:36'),
(5, 'food', '2022-03-01 18:18:15'),
(6, 'Music', '2022-03-30 16:27:45');

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
(38, 61, 'Chicken Biriyani 3', 'Made with Chicken', '130.00', '62111f6f47754.jpg'),
(39, 62, 'Dj', 'Sam', '5000.00', '621120d985c29.jpg');

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
(83, 26, 'closed', '2022-03-30 17:09:58');

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
(20, 'Food', '2022-02-19 16:26:56'),
(21, 'Music', '2022-02-23 16:47:55');

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
(61, 20, 'Food', 'Choose Your Favourite Food', '62111a9494541.jpg'),
(62, 21, 'Music', 'Choose your Music', '621120794ae86.jpg');

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
(33, 'emon', 'Emon', 'Paul', 'emon@gmail.com', '01638575578', '25d55ad283aa400af464c76d713c07ad', 'Ibrahim mension,K.B Aman Ali Road,Chawkbazar,Chittagong', 1, '2022-01-10 17:16:37'),
(35, 'muktiar', 'muktiar', 'hossen', 'muk@gmail.com', '01714045599', '25d55ad283aa400af464c76d713c07ad', 'ami nijeo jani na', 1, '2022-03-30 17:03:06');

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
  `shift` text NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `edate` date NOT NULL,
  `type` text NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `shift`, `o_hr`, `c_hr`, `edate`, `type`, `status`, `date`) VALUES
(57, 33, 'Dj', 1, '5000.00', 'Evening', '9am', '8am', '2022-02-27', 'Birthday', 'in process', '2022-03-30 17:01:51'),
(58, 33, 'Chicken Biriyani 3', 5, '130.00', 'Evening', '10pm', '11pm', '2022-04-01', 'Birthday', NULL, '2022-03-30 17:11:05');

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
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_order`
--
ALTER TABLE `admin_order`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `de_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dealer_cat`
--
ALTER TABLE `dealer_cat`
  MODIFY `dc_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dealer_ser`
--
ALTER TABLE `dealer_ser`
  MODIFY `ds_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pack_name`
--
ALTER TABLE `pack_name`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `ser_category`
--
ALTER TABLE `ser_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ser_name`
--
ALTER TABLE `ser_name`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

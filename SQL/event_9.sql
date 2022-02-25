-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 04:01 PM
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
(12, 'dealer', '709b8ec373cc610e98588a0748f36651', 'dealer@gmail.com', 'Dealer', '2022-02-17 08:56:44'),
(13, 'emo', '0eb05614891dd804fbe8e63f14e407bb', 'emo@gmail.com', 'Dealer', '2022-02-17 09:00:01'),
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
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `de_id` int(222) NOT NULL,
  `dc_id` int(222) NOT NULL,
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

INSERT INTO `dealer` (`de_id`, `dc_id`, `username`, `f_name`, `l_name`, `email`, `password`, `phone`, `address`) VALUES
(1, 2, 'emon', 'emon', 'paul', 'e@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12213124134', 'asdasdasdasdasda'),
(2, 3, 'Bolod', 'Bolda', 'Karim', 'boldakarim@gmail.com', 'e741368bfcc854bb4342be53d2ff70bb', '01816252423', 'sudan bolod er bari,gumdhondi,Chattagram,bd');

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
(3, 'Waiter', '2022-02-25 14:56:44');

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
(81, 57, 'closed', '2022-02-19 18:21:06');

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
(33, 'emon', 'Emon', 'Paul', 'emon@gmail.com', '01638575578', '25d55ad283aa400af464c76d713c07ad', 'Ibrahim mension,K.B Aman Ali Road,Chawkbazar,Chittagong', 1, '2022-01-10 17:16:37');

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
(55, 33, 'Dj', 1, '5000.00', 'Evening', '8am', '8am', '2022-02-20', 'Party', 'rejected', '2022-02-19 17:04:15'),
(57, 33, 'Dj', 1, '5000.00', 'Evening', '9am', '8am', '2022-02-27', 'Birthday', 'closed', '2022-02-19 18:21:07');

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
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `de_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dealer_cat`
--
ALTER TABLE `dealer_cat`
  MODIFY `dc_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pack_name`
--
ALTER TABLE `pack_name`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

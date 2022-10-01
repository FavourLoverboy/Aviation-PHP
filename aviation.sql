-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 12:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aviation`
--

-- --------------------------------------------------------

--
-- Table structure for table `air_craft`
--

CREATE TABLE `air_craft` (
  `id` int(11) NOT NULL,
  `uniqe` varchar(10) NOT NULL,
  `cn` varchar(50) NOT NULL,
  `ata` varchar(20) NOT NULL,
  `sn` varchar(20) NOT NULL,
  `tn` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `air_craft`
--

INSERT INTO `air_craft` (`id`, `uniqe`, `cn`, `ata`, `sn`, `tn`, `date`, `status`) VALUES
(5, '1643892966', 'MB', 'Helicopter', '2101LOK', '12598', '2022-02-03', 'Bad'),
(6, '1643892992', 'CP', 'Jet Fighter', 'HGY154P', '24987', '2022-02-03', 'Bad'),
(7, '1643893013', 'HOP', 'Jet Fighter', '21LKJH5', '78549', '2022-02-03', 'Bad'),
(8, '1647248881', 'Hug', 'Helicopter', '124578', '00000', '2022-03-14', 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `expire`
--

CREATE TABLE `expire` (
  `id` int(11) NOT NULL,
  `air_craft` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `con` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expire`
--

INSERT INTO `expire` (`id`, `air_craft`, `name`, `con`, `date`, `status`) VALUES
(69, '1643892966', 'Tail Gear box', 'Bad', '2022-04-07', 'Bad'),
(70, '1643892966', 'Position Light', 'Bad', '2022-04-07', 'Bad'),
(71, '1643892966', 'Confirmation Box', 'Bad', '2022-04-07', 'Bad'),
(72, '1643892966', 'Fuel Valve Assembly', 'Bad', '2022-04-07', 'Bad'),
(73, '1643892966', 'Oil Pressure Pump', 'Bad', '2022-04-07', 'Bad'),
(74, '1643892966', 'Fuel Pressure Pump', 'Bad', '2022-04-07', 'Bad'),
(75, '1643892966', 'Equipment Plate', 'Bad', '2022-04-07', 'Bad'),
(76, '1643892966', 'Lead Lag Damper', 'Bad', '2022-04-07', 'Bad'),
(77, '1643892966', 'Spherical Bearing', 'Bad', '2022-04-07', 'Bad'),
(78, '1643892966', 'Ball Bearing', 'Bad', '2022-04-07', 'Bad'),
(79, '1643892966', 'Oil And Fuel Ceals', 'Bad', '2022-04-07', 'Bad'),
(80, '1643892966', 'Transfer Line', 'Bad', '2022-04-07', 'Bad'),
(81, '1643892966', 'Hydraulic Line', 'Bad', '2022-04-07', 'Bad'),
(82, '1643892966', 'Fuel And Oil Filter', 'Bad', '2022-04-07', 'Bad'),
(83, '1643892966', 'Check Valve', 'Bad', '2022-04-07', 'Bad'),
(84, '1643892966', 'Cooling Unit', 'Bad', '2022-04-07', 'Bad'),
(85, '1643892966', 'Purge Valve', 'Bad', '2022-04-07', 'Bad'),
(86, '1643892992', 'Tail Gear box', 'Bad', '2022-04-07', 'Bad'),
(87, '1643892992', 'Position Light', 'Bad', '2022-04-07', 'Bad'),
(88, '1643892992', 'Confirmation Box', 'Bad', '2022-04-07', 'Bad'),
(89, '1643892992', 'Fuel Valve Assembly', 'Bad', '2022-04-07', 'Bad'),
(90, '1643892992', 'Oil Pressure Pump', 'Bad', '2022-04-07', 'Bad'),
(91, '1643892992', 'Fuel Pressure Pump', 'Bad', '2022-04-07', 'Bad'),
(92, '1643892992', 'Equipment Plate', 'Bad', '2022-04-07', 'Bad'),
(93, '1643892992', 'Lead Lag Damper', 'Bad', '2022-04-07', 'Bad'),
(94, '1643892992', 'Spherical Bearing', 'Bad', '2022-04-07', 'Bad'),
(95, '1643892992', 'Ball Bearing', 'Bad', '2022-04-07', 'Bad'),
(96, '1643892992', 'Oil And Fuel Ceals', 'Bad', '2022-04-07', 'Bad'),
(97, '1643892992', 'Transfer Line', 'Bad', '2022-04-07', 'Bad'),
(98, '1643892992', 'Hydraulic Line', 'Bad', '2022-04-07', 'Bad'),
(99, '1643892992', 'Fuel And Oil Filter', 'Bad', '2022-04-07', 'Bad'),
(100, '1643892992', 'Check Valve', 'Bad', '2022-04-07', 'Bad'),
(101, '1643892992', 'Cooling Unit', 'Bad', '2022-04-07', 'Bad'),
(102, '1643892992', 'Purge Valve', 'Bad', '2022-04-07', 'Bad'),
(103, '1643893013', 'Tail Gear box', 'Bad', '2022-02-03', 'Bad'),
(104, '1643893013', 'Position Light', 'Bad', '2022-02-03', 'Bad'),
(105, '1643893013', 'Confirmation Box', 'Bad', '2022-02-03', 'Bad'),
(106, '1643893013', 'Fuel Valve Assembly', 'Bad', '2022-02-03', 'Bad'),
(107, '1643893013', 'Oil Pressure Pump', 'Bad', '2022-02-03', 'Bad'),
(108, '1643893013', 'Fuel Pressure Pump', 'Bad', '2022-02-03', 'Bad'),
(109, '1643893013', 'Equipment Plate', 'Bad', '2022-02-03', 'Bad'),
(110, '1643893013', 'Lead Lag Damper', 'Bad', '2022-02-03', 'Bad'),
(111, '1643893013', 'Spherical Bearing', 'Bad', '2022-02-03', 'Bad'),
(112, '1643893013', 'Ball Bearing', 'Bad', '2022-02-03', 'Bad'),
(113, '1643893013', 'Oil And Fuel Ceals', 'Bad', '2022-02-03', 'Bad'),
(114, '1643893013', 'Transfer Line', 'Bad', '2022-02-03', 'Bad'),
(115, '1643893013', 'Hydraulic Line', 'Bad', '2022-02-03', 'Bad'),
(116, '1643893013', 'Fuel And Oil Filter', 'Bad', '2022-02-03', 'Bad'),
(117, '1643893013', 'Check Valve', 'Bad', '2022-02-03', 'Bad'),
(118, '1643893013', 'Cooling Unit', 'Bad', '2022-02-03', 'Bad'),
(119, '1643893013', 'Purge Valve', 'Bad', '2022-02-03', 'Bad'),
(120, '1647248881', 'Tail Gear box', 'Bad', '2022-03-14', 'Bad'),
(121, '1647248881', 'Position Light', 'Bad', '2022-03-14', 'Bad'),
(122, '1647248881', 'Confirmation Box', 'Bad', '2022-03-14', 'Bad'),
(123, '1647248881', 'Fuel Valve Assembly', 'Bad', '2022-03-14', 'Bad'),
(124, '1647248881', 'Oil Pressure Pump', 'Bad', '2022-03-14', 'Bad'),
(125, '1647248881', 'Fuel Pressure Pump', 'Bad', '2022-03-14', 'Bad'),
(126, '1647248881', 'Equipment Plate', 'Bad', '2022-03-14', 'Bad'),
(127, '1647248881', 'Lead Lag Damper', 'Bad', '2022-03-14', 'Bad'),
(128, '1647248881', 'Spherical Bearing', 'Bad', '2022-03-14', 'Bad'),
(129, '1647248881', 'Ball Bearing', 'Bad', '2022-03-14', 'Bad'),
(130, '1647248881', 'Oil And Fuel Ceals', 'Bad', '2022-03-14', 'Bad'),
(131, '1647248881', 'Transfer Line', 'Bad', '2022-03-14', 'Bad'),
(132, '1647248881', 'Hydraulic Line', 'Bad', '2022-03-14', 'Bad'),
(133, '1647248881', 'Fuel And Oil Filter', 'Bad', '2022-03-14', 'Bad'),
(134, '1647248881', 'Check Valve', 'Bad', '2022-03-14', 'Bad'),
(135, '1647248881', 'Cooling Unit', 'Bad', '2022-03-14', 'Bad'),
(136, '1647248881', 'Purge Valve', 'Bad', '2022-03-14', 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `person` varchar(30) NOT NULL,
  `air` varchar(10) NOT NULL,
  `air_craft` varchar(30) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `person`, `air`, `air_craft`, `issue`, `date`, `status`) VALUES
(8, 'Kelly Kelly', '1643892966', '1643892966 Helicopter', '258', '2022-02-02', 'Good'),
(9, 'Kelly Kelly', '1643893013', '1643893013 Jet Fighter', 'The fuel pipe is very bad.', '2022-02-02', 'Good'),
(10, 'Kelly Kelly', '1643893013', '1643893013 Jet Fighter', 'This plane needs an augent work, its very dangerous to leave it like that.', '2022-02-03', 'Good'),
(11, 'Kelly Kelly', '1643892966', '1643892966 Helicopter', 'this needs an immediate care.', '2022-02-03', 'Good'),
(12, 'Kelly Kelly', '1643892992', '1643892992 Jet Fighter', 'The fuel pipe is very bad, and can cause an explosion here or when on transit.', '2022-02-03', 'Good'),
(13, 'Kelly Kelly', '1643892966', '1643892966 Helicopter', 'This \\air is in a critical condition', '2022-02-03', 'Good'),
(14, 'Kelly Kelly', '1643892966', '1643892966 Helicopter', 'The propelar is very weak and needs to be fixed if not it can\'t generate enough air to fly the  flight', '2022-02-03', 'Good'),
(15, 'Kelly Kelly', '1643892992', '1643892992 Jet Fighter', 'The condition is very critical.', '2022-02-04', 'Good'),
(16, 'Kelly Kelly', '1643893013', '1643893013 Jet Fighter', 'no', '2022-03-14', 'Bad'),
(17, 'Kelly Kelly', '1647248881', '1647248881 Helicopter', 'mop\r\n', '2022-03-14', 'Bad'),
(18, 'Kelly Kelly', '1643892966', '1643892966 Helicopter', 'damage fuel pipe', '2022-04-07', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `userId`, `name`, `message`, `time`, `date`, `status`) VALUES
(1, 2, 'Kelly Kelly', 'Your account was logged in.', '1643631828', '2022-01-31', 'Hide'),
(2, 2, 'Kelly Kelly', 'Your account was logged in.', '1643632069', '2022-01-31', 'Hide'),
(3, 2, 'Kelly Kelly', 'Your account was logged in.', '1643632333', '2022-01-31', 'Hide'),
(4, 2, 'Kelly Kelly', 'Your account was logged in.', '1643633203', '2022-01-31', 'Hide'),
(5, 2, 'Kelly Kelly', 'Your account was logged in.', '1643635066', '2022-01-31', 'Hide'),
(6, 2, 'Kelly Kelly', 'Your account was logged in.', '1643635767', '2022-01-31', 'Hide'),
(7, 2, 'Kelly Kelly', 'Your account was logged in.', '1643635895', '2022-01-31', 'Hide'),
(8, 2, 'Kelly Kelly', 'Your account was logged in.', '1643640844', '2022-01-31', 'Hide'),
(9, 2, 'Kelly Kelly', 'Your account was logged in.', '1643641157', '2022-01-31', 'Hide'),
(10, 2, 'Kelly Kelly', 'Your account was logged in.', '1643641214', '2022-01-31', 'Hide'),
(11, 2, 'Kelly Kelly', 'Your account was logged in.', '1643665534', '2022-01-31', 'Hide'),
(12, 2, 'Kelly Kelly', 'Your account was logged in.', '1643668709', '2022-01-31', 'Hide'),
(13, 2, 'Kelly Kelly', 'Your account was logged in.', '1643668764', '2022-01-31', 'Hide'),
(14, 2, 'Kelly Kelly', 'Your account was logged in.', '1643668924', '2022-01-31', 'Hide'),
(15, 2, 'Kelly Kelly', 'Your account was logged in.', '1643753306', '2022-02-01', 'Hide'),
(16, 2, 'Kelly Kelly', 'Your account was logged in.', '1643754129', '2022-02-01', 'Hide'),
(17, 2, 'Kelly Kelly', 'Your account was logged in.', '1643840542', '2022-02-02', 'Hide'),
(18, 2, 'Kelly Kelly', 'Your account was logged in.', '1643875886', '2022-02-03', 'Hide'),
(19, 2, 'Kelly Kelly', 'Your account was logged in.', '1643885053', '2022-02-03', 'Hide'),
(20, 2, 'Kelly Kelly', 'Your account was logged in.', '1643885189', '2022-02-03', 'Hide'),
(21, 2, 'Kelly Kelly', 'Your account was logged in.', '1643888690', '2022-02-03', 'Hide'),
(22, 2, 'Kelly Kelly', 'Your account was logged in.', '1643915477', '2022-02-03', 'Hide'),
(23, 2, 'Kelly Kelly', 'Your account was logged in.', '1643975532', '2022-02-04', 'Hide'),
(24, 1, 'Nwokamma Favour', 'Your account was logged in.', '1643975594', '2022-02-04', 'Show'),
(25, 2, 'Kelly Kelly', 'Your account was logged in.', '1645219109', '2022-02-18', 'Show'),
(26, 2, 'Kelly Kelly', 'Your account was logged in.', '1645219126', '2022-02-18', 'Show'),
(27, 2, 'Kelly Kelly', 'Your account was logged in.', '1645220791', '2022-02-18', 'Show'),
(28, 1, 'Nwokamma Favour', 'Your account was logged in.', '1645220802', '2022-02-18', 'Show'),
(29, 2, 'Kelly Kelly', 'Your account was logged in.', '1647248518', '2022-03-14', 'Show'),
(30, 2, 'Kelly Kelly', 'Your account was logged in.', '1647350524', '2022-03-15', 'Show'),
(31, 1, 'Nwokamma Favour', 'Your account was logged in.', '1648241547', '2022-03-25', 'Show'),
(32, 2, 'Kelly Kelly', 'Your account was logged in.', '1649335342', '2022-04-07', 'Show'),
(33, 2, 'Kelly Kelly', 'Your account was logged in.', '1649335446', '2022-04-07', 'Show'),
(34, 2, 'Kelly Kelly', 'Your account was logged in.', '1649335944', '2022-04-07', 'Show'),
(35, 2, 'Kelly Kelly', 'Your account was logged in.', '1649684948', '2022-04-11', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sn` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `sn`, `date`, `status`) VALUES
(1, 'Ball Bearing', '', '2022-01-31', '1'),
(2, 'Check Valve', '', '2022-01-31', '1'),
(3, 'Cooling Unit', '', '2022-01-31', '1'),
(4, 'Confirmation Box', '', '2022-01-31', '1'),
(5, 'Equipment Plate', '', '2022-01-31', '1'),
(6, 'Fuel And Oil Filter', '1478', '2022-01-31', '1'),
(7, 'Fuel Pressure Pump', '1358', '2022-01-31', '1'),
(8, 'Fuel Valve Assembly', '2365', '2022-01-31', '1'),
(10, 'Hydraulic Line', '', '2022-01-31', '1'),
(11, 'Lead Lag Damper', '', '2022-01-31', '1'),
(12, 'Oil And Fuel Ceals', '', '2022-01-31', '1'),
(13, 'Oil Pressure Pump', '', '2022-01-31', '1'),
(14, 'Position Light', '', '2022-01-31', '1'),
(15, 'Purge Valve', '', '2022-01-31', '1'),
(16, 'Spherical Bearing', '', '2022-01-31', '1'),
(17, 'Tail Gear box', '', '2022-01-31', '1'),
(18, 'Transfer Line', '', '2022-01-31', '1'),
(19, 'Ball Bearing', '', '2022-01-31', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fn` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `ms` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `level` varchar(7) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `picture` text NOT NULL,
  `last_login` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fn`, `ln`, `email`, `pn`, `password`, `country`, `ms`, `date`, `level`, `sex`, `picture`, `last_login`, `status`) VALUES
(1, 'Favour', 'Nwokamma', 'Favourehio2019@gmail.com', '09097048450', 'loverboy', 'Nigeria', 'Single', '2022-01-17', 'Main', 'Male', '3.png', '2022-03-25', 'Active'),
(2, 'Kelly', 'Kelly', 'Kelly@gmail.com', '010215486', 'kelly123', 'Nigeria', 'Married', '2022-01-17', 'Admin', 'Male', '1399968623_vector-illustration-neon-colorful-star-.jpg', '2022-04-11', 'Active'),
(3, 'Precious', 'Victor', 'precious@gmail.com', '10101010', 'manman', 'Anguilla', 'Single', '2022-01-17', 'Main', 'Single', '', '2022-01-18', 'Active'),
(4, 'Lucky', 'Chukwuma', 'lucky@gmail.com', '124579654', 'manman', 'Argentina', 'Single', '2022-01-17', 'Main', 'Single', '30.jpg', '2022-01-18', 'Inactive'),
(5, 'Comfort', 'Douglas', 'comfort@gmail.com', '4152632563', 'manman', 'Algeria', 'Single', '2022-01-17', 'Main', 'Single', '', '2022-01-18', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air_craft`
--
ALTER TABLE `air_craft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expire`
--
ALTER TABLE `expire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `air_craft`
--
ALTER TABLE `air_craft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expire`
--
ALTER TABLE `expire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 03:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radisson_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(23) NOT NULL,
  `username` varchar(43) NOT NULL,
  `password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(5, 'try', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(23) NOT NULL,
  `name` varchar(43) NOT NULL,
  `email` varchar(56) NOT NULL,
  `phone` varchar(67) NOT NULL,
  `address` varchar(43) NOT NULL,
  `city` varchar(56) NOT NULL,
  `country` varchar(54) NOT NULL,
  `room_type` varchar(89) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `check_in_time` varchar(98) NOT NULL,
  `occupancy` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `address`, `city`, `country`, `room_type`, `check_in`, `check_out`, `check_in_time`, `occupancy`) VALUES
(27, 'muramira antoine', 'mur@gmail.com', '078328282', 'kajagari', 'bujumbura', 'burundi', 'ROYAL SUITE ROOM', '2021-08-11', '2021-08-10', '17:59', 'double'),
(28, 'muhoozi kiiza', 'muho@gmail.com', '0783982399', 'kanka', 'kampala', 'uganda', 'SUITE ROOM', '2021-08-27', '2021-08-25', '19:01', 'twin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(23) NOT NULL,
  `f_name` varchar(43) NOT NULL,
  `f_email` varchar(56) NOT NULL,
  `mobile` varchar(67) NOT NULL,
  `message` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_email`, `mobile`, `message`) VALUES
(20, 'mugisha kevin', 'mugi@gmail.com', '0785940302', 'I did love your services soo much you have good rooms\r\n'),
(21, 'murorenkwere clarisse', 'cla23@gmail.com', '0734949499', 'good hotel in the world');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(23) NOT NULL,
  `room_name` varchar(1000) NOT NULL,
  `max_guests` varchar(56) NOT NULL,
  `size` varchar(67) NOT NULL,
  `details` varchar(56) NOT NULL,
  `price` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `max_guests`, `size`, `details`, `price`) VALUES
(1, 'Superior Room With Balcony', '3 adults and 1 child', '36m²', 'For extra space, book one of our Superior Rooms. ', '178.50 per night'),
(3, 'Executive Room with Lounge Access and Balco', '3 adults and 1 child', '38m²', ' Executive Room allows guests to relax in a large lounge', '200.40 per night'),
(6, 'Junior Suite with Lounge Access and Balcony', '4 adults and 1 child', '70m²', 'These suites feature separate sleeping and living areas.', '340.60 per night'),
(7, 'Suite with Lounge Access and Terrace', '4 adults and 1 child', '151m²', 'For an extended stay or for extra space, choose suite.', '500.40 per night'),
(10, 'Royal Suite with Lounge Access and Terrace', '6 adults and 2 Children', '699m²', 'For an extended stay or for extra space, choose royal su', '2500.30 per night'),
(13, 'Family Stay-2 Connected Rooms with Balcony', '6 adults and 2 children', '36m²', 'Our connected rooms provide optimal space and convenienc', '1500.13 per night');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

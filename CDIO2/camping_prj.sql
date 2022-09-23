-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 03:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camping_prj`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`UserName`, `Password`, `Role`) VALUES
('1231234@gmail.com', '123', 2),
('123123@gmail.com', '123', 2),
('admin@gmail.com', '123456', 1),
('dung@gmail.com', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Totals` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fishing`
--

CREATE TABLE `fishing` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fishing`
--

INSERT INTO `fishing` (`Id`, `Image`, `Name`, `Price`, `Description`) VALUES
(1, 'imageCDIO/fishing/can_cau.jpg', 'Spin Fishing Rod', 150000, 'Extremely versatile with varieties of reel and rod lengths and weights<br>\nEasy to fix tangles<br>'),
(2, 'imageCDIO/fishing/can_cau_1.jpg', 'Casting Rod', 200000, 'The simplest rod to operate and use<br>\nGenerally avoid tangling pretty well due to enclosed reels<br>\nGreat casting control and accuracy<br>\n'),
(3, 'imageCDIO/fishing/can_cau_2.jpg', 'Telescoping Fishing Rod\n', 250000, 'Easy to travel with<br>\r\nVery versatile<br>\r\n'),
(4, 'imageCDIO/fishing/can_cau_3.jpg', 'Fly Fishing Rod\n', 300000, 'Fly fishing is almost a uniquely different sport than fishing without a fly rod<br>\r\nAbility to fish fly fishing only waters<br>\r\nAbility to delicately present flies to fish that may be impossible with other types of rods<br>'),
(9, 'imageCDIO/fishing/can_cau_5.jpg', 'Surf Fishing Rod\n', 300000, 'Small fish are more fun<br>\r\nAbility to delicately present lures to picky fish<br>\r\nLightweight and easier to travel with<br>');

-- --------------------------------------------------------

--
-- Table structure for table `hiking_equipment`
--

CREATE TABLE `hiking_equipment` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hiking_equipment`
--

INSERT INTO `hiking_equipment` (`Id`, `Image`, `Name`, `Price`, `Description`) VALUES
(1, 'imageCDIO/Hiking Equipment/h_e_1.jpg', 'Hiking Gear', 1000000, 'A backpack is the primary piece of gear for day hiking.<br> \r\nOne that holds 11–20 liters of gear is about right for short, simple hikes, while something bigger is good for treks where more food, water, clothing and gear is required<br>');

-- --------------------------------------------------------

--
-- Table structure for table `other_equipment`
--

CREATE TABLE `other_equipment` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_equipment`
--

INSERT INTO `other_equipment` (`Id`, `Image`, `Name`, `Price`, `Description`) VALUES
(1, 'imageCDIO/Other Equipment/o_e_2.jpg', 'Carpet', 150000, 'Made of durable, soft and skin friendly durable and breathable machine washable and quick drying materials<br>\r\nIt can also be folded easily and equipped with a storage bag, which is very easy to carry.<br>'),
(2, 'imageCDIO/Other Equipment/o_e_3.jpg', 'Camping table', 200000, 'Foldable Garden Table with aluminum tabletop is waterproof, weather-resistant, and easy to wipe clean<br>\r\nLightweight Outdoor Table has Unique Anti-slip leg caps design, is super stable and safe to use<br>');

-- --------------------------------------------------------

--
-- Table structure for table `sleeping_bag`
--

CREATE TABLE `sleeping_bag` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sleeping_bag`
--

INSERT INTO `sleeping_bag` (`Id`, `Image`, `Name`, `Price`, `Description`) VALUES
(1, 'imageCDIO/Sleeping Bag/s_b_1.jpg', 'Mummy Sleeping Bag', 200000, 'Single-layer stitch through construction - maintains even fill distribution and keeps weight down<br>\r\nA soft to touch microfibre lining fabric that is cosy, snug and breathable<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tent`
--

CREATE TABLE `tent` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tent`
--

INSERT INTO `tent` (`Id`, `Image`, `Name`, `Price`, `Description`) VALUES
(1, 'imageCDIO/Tent/leu_1.jpg', '3 Man Tent ', 500000, 'Fully-integrated groundsheet: Keeps the bedroom clean, dry and bug-free; camping tent can be used as a playroom for kids or as a great tent for festival gatherings.<br>\r\n100 Percent waterproof<br>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Address`, `Phone`) VALUES
(1, 'Tiến Dũng', 'dung@gmail.com', 'Đà Nẵng', '01111111'),
(2, 'Kim Thắng', 'thang@gmail.com', 'Đà Nẵng', '07777777'),
(3, 'Quang Thông', 'thong@gmail.com', 'Đà Nẵng', '05555555'),
(4, 'Khánh Huy', 'huy@gmail.com', 'Đà Nẵng', '03333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fishing`
--
ALTER TABLE `fishing`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hiking_equipment`
--
ALTER TABLE `hiking_equipment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `other_equipment`
--
ALTER TABLE `other_equipment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sleeping_bag`
--
ALTER TABLE `sleeping_bag`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tent`
--
ALTER TABLE `tent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fishing`
--
ALTER TABLE `fishing`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hiking_equipment`
--
ALTER TABLE `hiking_equipment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_equipment`
--
ALTER TABLE `other_equipment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sleeping_bag`
--
ALTER TABLE `sleeping_bag`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tent`
--
ALTER TABLE `tent`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

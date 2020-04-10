-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 11:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skp_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_ID` int(11) NOT NULL,
  `Bill_acname` varchar(100) NOT NULL,
  `Bill_date` date NOT NULL,
  `Bill_price` int(10) NOT NULL,
  `Bill_time` time NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Order_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_ID`, `Bill_acname`, `Bill_date`, `Bill_price`, `Bill_time`, `User_ID`, `Order_ID`) VALUES
(1, 'hahaha', '2020-03-19', 555, '17:02:00', 0, 0),
(2, 'ฮู้วววว', '2020-03-12', 440, '13:00:00', 0, 0),
(3, 'ฮู้วววว', '2020-03-12', 440, '13:00:00', 0, 0),
(4, 'ฮู้วววว', '2020-03-12', 440, '13:00:00', 0, 0),
(5, 'ฮู้วววว', '2020-03-12', 440, '13:00:00', 0, 0),
(6, 'ฮู้วววว', '2020-03-12', 440, '13:00:00', 0, 0),
(7, 'มามา', '2020-03-19', 590, '01:59:00', 0, 0),
(8, '้้hahaha', '2020-01-03', 600, '17:03:00', 0, 0),
(9, 'jiminie', '2020-03-13', 1380, '14:09:00', 21, 0),
(10, '่จีมิน', '2020-03-19', 230, '14:05:00', 21, 55),
(11, 'มานะ', '2020-03-18', 510, '01:01:00', 21, 56),
(12, 'jungkook', '2020-03-26', 2360, '02:03:00', 6, 52),
(13, 'nanjoomnie', '2020-03-01', 200, '00:20:00', 22, 59),
(18, 'namjoon', '2020-03-20', 3480, '05:02:00', 22, 84),
(19, 'mama', '2020-03-11', 115, '12:00:00', 23, 85),
(20, 'aaaa', '2020-03-17', 1000, '05:55:00', 21, 25),
(21, '', '2020-04-14', 170, '01:55:00', 24, 27),
(22, '', '2020-04-24', 5750, '02:59:00', 24, 28);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_ID` int(11) NOT NULL,
  `Order_totalprice` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order_ID`, `Order_totalprice`, `User_ID`) VALUES
(0, 1, 21),
(2, 1, 21),
(3, 2, 21),
(4, 2, 21),
(5, 2, 21),
(6, 2, 21),
(7, 2, 21),
(8, 2109, 21),
(9, 2, 21),
(10, 2, 21),
(11, 2, 21),
(12, 2, 21),
(13, 2, 21),
(14, 2, 21),
(15, 2, 21),
(16, 2, 21),
(17, 2, 21),
(18, 2, 21),
(19, 2, 21),
(20, 2, 21),
(21, 2, 21),
(22, 2, 21),
(23, 2, 21),
(24, 2581, 21),
(25, 2817, 21),
(26, 1825, 6),
(27, 170, 24),
(28, 5750, 24);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_amount` int(11) NOT NULL,
  `Product_total` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_ID`, `Product_ID`, `Product_amount`, `Product_total`, `Order_ID`) VALUES
(1, 2, 5, 575, 23),
(2, 1, 15, 1, 23),
(3, 1, 15, 1, 23),
(4, 2, 5, 575, 24),
(5, 1, 17, 2006, 24),
(6, 2, 5, 575, 25),
(7, 1, 19, 2242, 25),
(8, 2, 10, 1150, 26),
(9, 9, 5, 75, 26),
(10, 5, 5, 600, 26),
(11, 11, 10, 170, 27),
(12, 2, 50, 5750, 28);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Product_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ProType_ID` int(11) NOT NULL,
  `Product_detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Product_price` int(11) NOT NULL,
  `Product_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_name`, `ProType_ID`, `Product_detail`, `Product_price`, `Product_stock`) VALUES
(1, 'ปูน SCG', 1, 'ปูนงานโครงสร้าง เอสซีจี', 118, 85),
(2, 'อินทรีนกเขียว', 1, 'อินทรี ปูนก่อฉาบ นกเขียว', 115, 118),
(3, 'อินทรีแดง', 1, 'อินทรี ปูนซีเมนต์ อินทรีแดง', 115, 160),
(4, 'อินทรีทอง', 1, 'อินทรี ปูนซีเมนต์ อินทรีทอง', 110, 98),
(5, 'อินทรีเพชร', 1, 'ปูนซีเมนต์ปอร์ตแลนด์ ', 120, 89),
(9, 'หลังคาคอนกรีต SCG', 2, 'สีน้ำตาลโอ๊คแดง', 15, 50),
(11, 'หลังคาคอนกรีต SCG', 2, 'สีแดงกุหลาบ', 17, 30),
(12, 'หลังคาคอนกรีต SCG', 2, 'สีเขียวอินทนิล', 20, 56),
(18, 'test', 2, 'test', 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ProType_ID` int(11) NOT NULL,
  `ProType_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ProType_ID`, `ProType_name`) VALUES
(1, 'วัสดุก่อสร้าง'),
(2, 'หลังค่า'),
(3, 'สีทาบ้าน'),
(4, 'ประตูหน้าต่าง'),
(6, 'กระเบื้องปูพื้น'),
(7, 'อุปการณ์ซ่อมแซมบ้าน');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `User_fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `User_lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `User_add` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `User_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `UserType_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `Password`, `User_fname`, `User_lname`, `User_add`, `User_email`, `User_tel`, `UserType_ID`) VALUES
(1, 'awdwa', '123456', 'FirstNameADMIN', 'LastNameADMIN', 'หหหหหหหห', 'admin@admin.com', '0885724915', 2),
(2, 'admin2', '123456', 'dadadadad', 'แก้วมุกดาสวรรค์', '230/1 หมู่ 14 ต.ศิลา ถ.มิตรภาพ อ.เมือง ขอนแก่น ', 'thaiishchaiwat@gmail.com', '0885724915', 2),
(3, 'user2', '123456', '12345', '12345', '12345', '12345@gmail.com', '0885724915', 1),
(4, 'admin', '123456', 'awdawdawdawd', 'dwdwad', 'w', 'wdw@Awdwd.com', '0825728282', 2),
(5, 'namnamnam', '123456', 'namnam', 'nam', 'anamd', 'adn@mawd.com', '0525252525', 1),
(6, 'jungkook', '123456', 'jk', 'Fany', 'KK', 'faiifu@gmail.com', '0918625252', 1),
(7, 'fernnn', '123456', 'fernlern', 'narakjung', 'KK9', 'fern@gmail.com', '0888888888', 1),
(8, 'aaaaaa', '123456', 'ff', 'ww', '2222', 'faiifu@gmail.com', '0789654123', 1),
(9, 'wwwww', 'wwwww', 'wwwwww', 'wwwww', 'wwwwwwwwww', 'wwwwww@gmail.com', '0231523325', 1),
(10, 'wwwww', '111111', 'wwwwww', 'wwwww', 'wwwwwwwwww', 'wwwwww@gmail.com', '0231523325', 1),
(11, 'qqqqq', '11111', 'qqqqq', 'qqqqq', 'qqqqq', 'qqq@gmail.com', '0231256888', 1),
(12, 'ttttt', '666666', 'oo', 'rr', 'yfuyfuygbn', 'faiifu@gmail.com', '0213654789', 1),
(13, 'rrrrr', '000000', 'rrrrr', 'rrrrr', 'rrrrrr', 'rr@gmail.com', '2220325236', 1),
(14, 'jjjjj', 'jjjjj', 'jjjjjj', 'jjjjj', 'jjjjjj', 'jj@gmail.com', '0203020203', 1),
(15, 'xxxxx', 'xxxxx', 'xxxxxx', 'xxxx', 'xxxxxx', 'xx@gmail.com', '0231256525', 1),
(16, 'manee', '123456', 'manee', 'neeee', 'eeeeeee', 'me@gmail.com', '0213654852', 1),
(17, 'kakii', 'aaa111', 'ka', 'kii', 'kakakakakak', 'kaka@gmail.com', '0236598562', 1),
(18, 'jeonjungkook', '123456', 'jeon', 'jk', 'kku', 'jkjkjk@gmail.com', '0231526532', 1),
(19, 'matchima', '123456', 'matchima', 'jantharat', 'KKU', 'mchm@gmail.com', '0918628265', 1),
(20, 'jantharattt', '123456', 'matchima', 'jantharat', 'kku', 'mc@gmail.com', '0918628265', 1),
(21, 'jimin', '123456', 'Park', 'Jimin', 'jijijijijiji', 'jimin@gmail.com', '0213564895', 1),
(22, 'namjoon', '123456', 'kim', 'namjoon', 'korea', 'namjoon@gmail.com', '0231526894', 1),
(23, 'matchi', '123456', 'matchima', 'jantharat', 'kk', 'matchi@gmail.com', '0213652896', 1),
(24, 'Taehyung', '123456', 'Kim', 'Taehyung', 'Korea', 'Taehyung@gmail.com', '0236521456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserType_ID` int(11) NOT NULL,
  `UserType_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserType_ID`, `UserType_name`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`,`ProType_ID`),
  ADD KEY `ProType_ID` (`ProType_ID`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ProType_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`,`UserType_ID`),
  ADD KEY `UserType_ID` (`UserType_ID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserType_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ProType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProType_ID`) REFERENCES `product_type` (`ProType_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserType_ID`) REFERENCES `usertype` (`UserType_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 11:51 AM
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
  `Bill_amount` int(10) NOT NULL,
  `Bill_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_ID` int(10) NOT NULL,
  `Order_amount` varchar(10) NOT NULL,
  `Order_totalprice` varchar(10) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order_ID`, `Order_amount`, `Order_totalprice`, `Product_ID`, `User_ID`) VALUES
(1, '34', '3,910', 0, 0),
(2, '34', '3,910', 0, 0),
(3, '34', '3,910', 0, 0),
(4, '34', '3,910', 0, 0),
(5, '10', '4,485', 3, 6),
(6, '10', '4,600', 3, 6),
(7, '2', '4,715', 3, 6),
(8, '1', '4,945', 3, 6),
(9, '47', '5,405', 3, 6),
(10, '49', '5,635', 3, 6),
(11, '51', '5,865', 3, 6),
(26, '1', '115', 3, 6),
(27, '6', '708', 1, 6),
(28, '29', '3,335', 2, 6),
(29, '4', '440', 4, 6),
(30, '1', '115', 3, 6),
(31, '6', '708', 1, 6),
(32, '5', '590', 1, 6),
(33, '10', '1,150', 3, 6),
(34, '20', '2,300', 3, 6),
(35, '11', '1,265', 3, 6),
(36, '2', '230', 3, 6),
(37, '5', '230', 3, 6),
(38, '2', '230', 3, 6),
(39, '5', '575', 2, 6),
(40, '5', '590', 1, 6),
(41, '5', '600', 5, 6),
(42, '10', '1,100', 4, 6),
(43, '1', '115', 3, 6),
(44, '1', '115', 3, 6),
(45, '10', '1,150', 2, 19),
(46, '5', '575', 2, 19),
(47, '3', '345', 3, 6),
(48, '1', '118', 1, 6),
(49, '3', '345', 3, 6),
(50, '1', '118', 1, 6),
(51, '3', '345', 3, 6),
(52, '20', '2,360', 1, 6);

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
  `Product_stock` int(11) NOT NULL,
  `Product_pic` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_name`, `ProType_ID`, `Product_detail`, `Product_price`, `Product_stock`, `Product_pic`) VALUES
(1, 'ปูน SCG', 1, 'ปูนงานโครงสร้าง เอสซีจี', 118, 85, 'ปูนเอสซีจี.jpg'),
(2, 'อินทรีนกเขียว', 1, 'อินทรี ปูนก่อฉาบ นกเขียว', 115, 118, 'อินทรี ปูนก่อฉาบ นกเขียว.jpg'),
(3, 'อินทรีแดง', 1, 'อินทรี ปูนซีเมนต์ อินทรีแดง', 115, 160, 'อินทรี ปูนซีเมนต์ อินทรีแดง.jpg'),
(4, 'อินทรีทอง', 1, 'อินทรี ปูนซีเมนต์ อินทรีทอง', 110, 98, 'อินทรี ปูนซีเมนต์ อินทรีทอง.jpg'),
(5, 'อินทรีเพชร', 1, 'ปูนซีเมนต์ปอร์ตแลนด์ ', 120, 89, 'อินทรี ปูนซีเมนต์ปอร์ตแลนด์ อินทรีเพชร.jpg');

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
(20, 'jantharattt', '123456', 'matchima', 'jantharat', 'kku', 'mc@gmail.com', '0918628265', 1);

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
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ProType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

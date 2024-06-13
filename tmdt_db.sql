-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 07:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmdt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `congty`
--

CREATE TABLE `congty` (
  `idcty` int(11) NOT NULL,
  `tencty` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` int(10) NOT NULL,
  `fax` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `congty`
--

INSERT INTO `congty` (`idcty`, `tencty`, `diachi`, `dienthoai`, `fax`) VALUES
(1, 'Iphone', 'abc', 123456789, 123),
(2, 'SamSung', 'xyz', 123, 456),
(3, 'Nokia', 'def', 2147483647, 789),
(4, 'Sony', 'ghi', 2147483647, 321),
(5, 'LG', 'jkl', 2147483647, 654),
(8, 'Huawei', '153 le van tho', 928449664, 84);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `gia` double NOT NULL,
  `mota` varchar(100) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `idcty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `gia`, `mota`, `hinh`, `idcty`) VALUES
(1, 'Iphone 15', 20000000, 'Máy mới 100% , chính hãng Apple Việt Nam.', 'iphone15.jpg', 1),
(3, 'Nokia X30 5G Dual-Sim', 20700000, 'Xịn hơn nokia 1280', 'nokia.jpg', 3),
(4, 'Sony Xperia 1 Mark 3', 7100000, 'Máy android hàng xách tay nước ngoài', 'sony.jpg', 4),
(10, 'IPhone13', 20000000, 'Hang VN chat luong thap', '334_Iphone13.jpeg', 1),
(11, 'IPhone13-128GB', 20000000, 'Ga` Ga`', '928_iphone-13_2_.webp', 1),
(12, 'iphone14', 2000000, 'Hang trung quoc', '895_iphone-14-pro-max-tim-thumb-600x600.jpg', 1),
(13, 'LG Wing 128GB', 2000000, 'Han xeng', '707_dien-thoai-lg-wing-moi-128gb-trang.jpg', 5),
(14, 'LG G6 128GB', 250000000, 'Made in korea', '469_lg-g6-5-300x300.jpg', 5),
(15, 'LG Magna', 90000000, 'mau do', '906_Magna.jpg', 5),
(16, 'LG VELVET 5G', 60000000, 'Hang VN chat luong thap', '403_velvet.jpg', 5),
(17, 'LG Wing 2 128GB', 6000000, 'Hang trung quoc', '820_wing.jpg', 5),
(18, 'Nokia 1280', 25300000, 'Hang VN chat luong thap', '296_600-nokia-c3-1-600x600.jpg', 3),
(19, 'Nokia Plus', 31000000, 'Hang VN chat luong thap', '199_C21 Plus 3-32-ori.jpeg', 3),
(21, 'Nokia Blue', 10000000, 'Khong biet noi gi', '817_group-blue-20220823155654.jpg', 3),
(22, 'SamSung A05', 90000000, 'Hang VN chat luong cao', '202_samsung-galaxy-m14.webp', 2),
(23, 'SamSung A73', 6000000, 'Han xeng', '272_A73.jpg', 2),
(24, 'SAMSUNG GALAXY', 5000000, 'Han xeng', '587_samsung-galaxy-m14.webp', 2),
(25, 'SAMSUNG GALAXY 2', 12000000, 'Hang trung quoc', '789_samsung-galaxy-m14.webp', 2),
(26, 'Sony 5G', 3000000, 'Hang trung quoc', '629_5.webp', 4),
(27, 'SONY XPERIA', 30000000, 'SONY XPERIA', '344_dien-thoai-sony-xperia-1-iv_1645674603.png', 4),
(28, 'SONY 3', 8000000, 'Hang VN chat luong thap', '662_sony-xperia-1-iv-tim.jpg.webp', 4),
(29, 'SONY Z4', 5000000, 'Vippro', '881_z4.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `iduser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hodem` text NOT NULL,
  `ten` text NOT NULL,
  `phanquyen` varchar(50) NOT NULL,
  `last_log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`iduser`, `username`, `password`, `hodem`, `ten`, `phanquyen`, `last_log_date`) VALUES
(1, 'user1', 'a123', 'Nguyen Van', 'A', 'Quản trị viên', '2024-03-21 11:02:48'),
(2, 'user2', 'a123', 'Tran Van', 'B', 'Nhân viên', '2024-03-21 11:02:48'),
(3, 'user3', 'a123', 'Pham Thi', 'C', 'Khách hàng', '2024-03-21 11:07:14'),
(4, 'user4', 'a123', 'Nguyen Thi', 'D', 'Quản lý', '2024-03-21 11:07:14'),
(5, 'user5', 'a123', 'Pham Van', 'E', 'Khách hàng', '2024-03-21 11:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`idcty`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `idcty` (`idcty`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `congty`
--
ALTER TABLE `congty`
  MODIFY `idcty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idcty`) REFERENCES `congty` (`idcty`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

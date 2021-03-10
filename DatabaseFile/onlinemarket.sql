-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 07:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `Id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qnty` int(11) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`Id`, `u_id`, `p_id`, `price`, `qnty`, `payment`) VALUES
(7, 4, 6, 50000, 1, 'Bkash'),
(8, 4, 15, 5000, 1, 'Bkash'),
(9, 4, 15, 5000, 1, 'Bkash'),
(10, 4, 14, 50000, 1, 'Bkash'),
(11, 4, 14, 50000, 1, 'Bkash');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`b_id`, `b_name`) VALUES
(3, 'Dell'),
(4, 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `user_id` int(50) DEFAULT NULL,
  `user_ip` varchar(10) NOT NULL,
  `qnty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `user_ip`, `qnty`) VALUES
(27, 6, -1, '::1', 3),
(28, 7, -1, '::1', 6),
(29, 8, -1, '::1', 1),
(30, 8, 4, '::1', 1),
(31, 13, -1, '::1', 1),
(32, 14, -1, '::1', 1),
(33, 15, -1, '::1', 1),
(34, 12, -1, '::1', 1),
(35, 13, 4, '::1', 1),
(36, 14, 4, '::1', 1),
(37, 15, 4, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(11) NOT NULL,
  `Cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `Cat_name`) VALUES
(1, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `corder`
--

CREATE TABLE `corder` (
  `order_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corder`
--

INSERT INTO `corder` (`order_id`, `username`, `p_id`, `quantity`, `price`, `shipping_id`) VALUES
(108, 'User90', 30, 3, 6000, 1),
(109, 'User90', 39, 3, 15000, 1),
(110, 'User90', 38, 3, 11000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `brand_name` varchar(50) DEFAULT NULL,
  `catagory` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `Date` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `product_name`, `brand_name`, `catagory`, `price`, `quantity`, `img`, `Date`, `Type`) VALUES
(28, 'Acer Monitor', 'Acer', 'Electronics', 10000, 5, 'Acer_Monitor_K243Y_K273_modelmain.png', '2021/03/04', 'monitor'),
(29, 'Monitor SL1500', 'Dell', 'Electronics', 15000, 3, 'u_10181535.jpg', '2021/03/04', 'monitor'),
(30, 'IN4794710', 'Philips', 'Electronics', 6000, 10, 'IN4794710_.jpg', '2021/03/04', 'monitor'),
(31, 'Monitor 81V3Y', 'HP', 'Electronics', 10000, 8, '81V3y+fKGQL._SL1500_.jpg', '2021/03/04', 'monitor'),
(33, 'Monitor 9c60c31', 'HP', 'Electronics', 8000, 6, '9c06c3131acc57023b257a060f5bdab9e5a9370d_square2905546_1.jpg', '2021/03/04', 'monitor'),
(34, 'Monitor22', 'HP', 'Electronics', 10000, 9, 'download.jpg', '2021/03/04', 'monitor'),
(35, 'HP newv33', 'HP', 'Electronics', 13000, 10, '10YFRAR1-500-1.png', '2021/03/04', 'monitor'),
(36, 'Acer-Nitro', 'Acer', 'Electronics', 18000, 12, 'Acer-Nitro_Monitor_XV2-series_XV272UKV_modelmain.png', '2021/03/04', 'monitor'),
(37, 'mon-msi-g27c4', 'MSI', 'Electronics', 20000, 10, 'mon-msi-g27c4_1.jpg', '2021/03/04', ''),
(38, 'Sumsung672181', 'Sumsung', 'Electronics', 11000, 8, '672181-Product-0-I_large.jpg', '2021/03/04', ''),
(39, 'CurveMonitor', 'Dell', 'Electronics', 15000, 10, 'dellcurved.jpg', '2021/03/04', 'monitor'),
(40, 'Dellmonitor', 'Dell', 'Electronics', 10000, 10, 'fcfca85b14d0b291524ebe54016df23c11.2x.rsquare.w600.jpg', '2021/03/04', 'monitor'),
(41, 'Dell2575', 'Dell', 'Electronics', 10000, 10, '2573512.jpg', '2021/03/04', 'monitor'),
(42, 'HMUB2Monitor', 'LG', 'Electronics', 9000, 10, 'HMUB2.jpg', '2021/03/04', 'monitor'),
(43, 'Monite2720h1', 'Dell', 'Electronics', 11000, 12, 'monitor-e2720hs-black-campaign-hero-504x350-ng.jpg', '2021/03/04', 'monitor'),
(44, 'DellSL1500', 'Dell', 'Electronics', 10500, 10, '71fjRnJSk9L._AC_SL1500_.jpg', '2021/03/04', 'monitor'),
(45, 'OPPO A12', 'OPPO', 'Electronics', 16000, 8, '71bp9IpcK-L._SX522_.jpg', '2021/03/04', 'mobile'),
(46, 'OPPO A12 BLUE', 'OPPO', 'Electronics', 18000, 10, '1591384560128_0..png', '2021/03/04', 'mobile'),
(47, 'OPPO A53 Blue', 'OPPO', 'Electronics', 20000, 10, '0..png', '2021/03/04', 'mobile'),
(48, 'OPPO-Reno2Z', 'OPPO', 'Electronics', 20000, 10, 'Oppo-Reno2-Z-1-600x600.png', '2021/03/04', 'mobile'),
(49, 'OPPO reno 2', 'OPPO', 'Electronics', 20000, 12, 'oppo_reno_2_8gb256gb_luminous_black_01_l.jpg', '2021/03/04', 'mobile'),
(50, 'Vivo s1 pro', 'vivo', 'Electronics', 20000, 10, '0038136-vivo-s1-pro-black8gb-ram-128gb-storage-250.jpg', '2021/03/04', 'monitor'),
(51, 'iPhone 11 Pro', 'Apple', 'Electronics', 85000, 10, '1a2594f7a120b35282917c297ec897f101a30fc8.jpg', '2021/03/04', 'mobile'),
(52, 'iPhone-12-Pro', 'Apple', 'Electronics', 120000, 10, 'Apple-iphone-12-Pro.jpg', '2021/03/04', 'mobile'),
(53, 'iPhone SE', 'Apple', 'Electronics', 40000, 10, 'cats-500x500.jpg', '2021/03/04', 'mobile'),
(54, 'iPhone8 Black', 'Apple', 'Electronics', 60000, 10, 'apple-iphone-8-plus-back.jpg', '2021/03/04', 'mobile'),
(55, 'Realme 5', 'Realme', 'Electronics', 10000, 12, '4215e4c8b05a868228f3917d74b042328abc49e0.jpg', '2021/03/04', 'mobile'),
(56, 'Realme 7', 'Realme', 'Electronics', 16999, 8, '71RZQGtkW5L._AC_SL1500_.jpg', '2021/03/04', 'mobile'),
(57, 'Realme XT', 'Realme', 'Electronics', 16999, 10, '135650-v8-realme-xt-mobile-phone-large-1.jpg', '2021/03/04', 'mobile'),
(58, 'Realme 3', 'Realme', 'Electronics', 8000, 10, '71YC1181G3L._SL1200_.jpg', '2021/03/04', 'mobile'),
(59, 'Realme 5 Pro', 'Realme', 'Electronics', 20999, 10, '4215e4c8b05a868228f3917d74b042328abc49e0.jpg', '2021/03/04', 'mobile'),
(60, 'Realme 2', 'Realme', 'Electronics', 9999, 10, '000bdd7d799400bada94e4714bef0e49f1770720.jpeg', '2021/03/04', 'mobile'),
(61, 'Samsung Galexy', 'Sumsung', 'Electronics', 17000, 10, 'Samsung-Galaxy-J6.jpg', '2021/03/04', 'mobile'),
(62, 'Samsung A60', 'Sumsung', 'Electronics', 20000, 10, '1555507135_635_samsung_galaxy_a60.jpg', '2021/03/04', 'mobile'),
(63, 'Anker Speaker', 'Anker', 'Electronics', 6190, 10, 'Anker-SoundCore-Flare-2-Bluetooth-Speaker-1.jpg', '2021/03/04', 'Speaker'),
(64, 'Sony Speaker', 'Sony', 'Electronics', 5000, 10, '792f4e642ead276433c0377eeab1487c.jpg', '2021/03/04', 'Speaker'),
(65, 'Digital X-F93', 'Digital X', 'Electronics', 200, 10, 'x-f934bt.jpg', '2021/03/04', 'Speaker'),
(66, 'Creative T15', 'Diamu', 'Electronics', 500, 12, 'Creative-T15-Wireless-Bluthooth-Speaker.jpg', '2021/03/04', 'Speaker'),
(67, 'Party Box300', 'JBL', 'Electronics', 9500, 4, 'giant_86958.jpg', '2021/03/04', 'Speaker'),
(68, 'Vision Speaker', 'Vision', 'Electronics', 10000, 6, '823477-loud-vsn-201.jpg', '2021/03/04', 'Speaker'),
(69, 'Havit MX702', 'Havit', 'Electronics', 850, 8, 'Havit-MX702-Portable-Bluetooth-Speaker-1.jpg', '2021/03/04', 'Speaker'),
(70, 'JBL Flip 5', 'JBL', 'Electronics', 5000, 6, 'images.jpg', '2021/03/04', 'Speaker'),
(71, 'Sumsung RF56', 'Sumsung', 'Electronics', 100000, 5, 'u_10164049.jpg', '2021/03/04', 'Fridge'),
(72, 'Samsung 27.9', 'Sumsung', 'Electronics', 120000, 5, 'fingerprint-resistant-black-stainless-steel-samsung-french-door-refrigerators-rf28n9780sg-64_1000.jpg', '2021/03/04', 'Fridge'),
(73, 'Samsung 825L', 'Sumsung', 'Electronics', 150000, 5, 'SRF825BFH4-L-Persepctivejpg-high.jpeg', '2021/03/04', 'Fridge'),
(74, 'GMX84KV Slim', 'LG', 'Electronics', 150000, 3, 'u_10192373.jpg', '2021/03/04', 'Fridge'),
(75, 'LG GLT292SPZ3', 'LG', 'Electronics', 60000, 8, '0042445-lg-glt292spz3-260-litres-convertible-plus-fridge.png', '2021/03/04', 'Fridge'),
(76, 'Samsung RT46K', 'Sumsung', 'Electronics', 30000, 8, 'images (1).jpg', '2021/03/04', 'Fridge'),
(77, 'LG 683L', 'LG', 'Electronics', 60000, 5, 'LG_GFL677SL_02__77104.1596164709.jpg', '2021/03/04', 'Fridge'),
(78, 'Table Fan', 'Crompton', 'Electronics', 2000, 10, 'High-Speed-Table-Fan-CMRD.png', '2021/03/04', 'Fan'),
(79, 'Pedestal Fan', 'Helix', 'Electronics', 3000, 8, '71dSqJzICJL._SL1500_.jpg', '2021/03/04', 'Fan'),
(80, 'Stand Fan', 'Royal Fans', 'Electronics', 4000, 5, '2f9d7a6553972610107302f249878930.jpg', '2021/03/04', 'Fan'),
(81, 'BLINK AC', 'Blink', 'Electronics', 3000, 8, 'Net-Fan-for-Blink.png', '2021/03/04', 'Fan'),
(82, 'Net Fan', 'Sony', 'Electronics', 3000, 8, 'jali-fan.jpg', '2021/03/04', 'Fan'),
(83, 'Celling Fan', 'Best Electronics', 'Electronics', 3650, 12, 'Conion-Fan-B (1).png', '2021/03/04', 'Fan'),
(84, 'G.F.C Fan', 'G.F.C', 'Electronics', 4800, 10, '0123166_gfc-ceiling-fan-56-inch-vip-290104_550.jpeg', '2021/03/04', 'Fan');

-- --------------------------------------------------------

--
-- Table structure for table `shippingaddress`
--

CREATE TABLE `shippingaddress` (
  `shipping_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippingaddress`
--

INSERT INTO `shippingaddress` (`shipping_id`, `fullname`, `phone`, `address`, `username`, `payment_method`) VALUES
(1, 'Babor islam', '01864322827', 'Aftabnagar road no 2 block b Dhaka', 'User90', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `c_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `last_login` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`c_id`, `username`, `email`, `pass`, `last_login`) VALUES
(8, 'User90', 'nahidhossain351@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(12, 'Babor101', 'babor145@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(13, 'Shanoto505', 'Santho8888@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(14, 'Tamim11', 'tamim404@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `corder`
--
ALTER TABLE `corder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept`
--
ALTER TABLE `accept`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corder`
--
ALTER TABLE `corder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

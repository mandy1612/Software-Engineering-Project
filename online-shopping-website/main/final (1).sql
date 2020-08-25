-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 12:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(250) NOT NULL,
  `pro_price` varchar(250) NOT NULL,
  `pro_keyword` varchar(250) NOT NULL,
  `pro_img` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `pro_click` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(250) NOT NULL,
  `pro_price` varchar(250) NOT NULL,
  `pro_keyword` varchar(250) NOT NULL,
  `pro_img` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `pro_click` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'men Footwear'),
(2, 'men top wear'),
(3, 'men bottom wear'),
(4, 'women footwear'),
(5, 'women western wear'),
(6, 'women ethnic wear'),
(7, 'mobiles'),
(8, 'mobile Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `problem` varchar(250) CHARACTER SET latin1 NOT NULL,
  `username` varchar(250) CHARACTER SET latin1 NOT NULL,
  `phonenumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total` float NOT NULL,
  `add_type` varchar(250) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `name` varchar(250) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `pincode` varchar(250) NOT NULL,
  `locality` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `products` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL,
  `pro_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `total` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `pro_title` text CHARACTER SET latin1 NOT NULL,
  `pro_keyword` text CHARACTER SET latin1 NOT NULL,
  `pro_desc` text CHARACTER SET latin1 NOT NULL,
  `pro_img` text CHARACTER SET latin1 NOT NULL,
  `pro_price` bigint(100) NOT NULL,
  `img_click` text NOT NULL,
  `del_price` bigint(100) NOT NULL,
  `per` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `cat_id`, `pro_title`, `pro_keyword`, `pro_desc`, `pro_img`, `pro_price`, `img_click`, `del_price`, `per`) VALUES
(1, 1, 'PLOTA Black Sports & Running Shoes Shoes for Men', 'sport shoes', 'men Footwear', 'img/Men_SportShoes_1a.jpg', 2699, 'products1.php', 2999, 10),
(2, 1, 'Sparx Men\'s Running Shoes', 'sport shoes', 'men Footwear', 'img/Men_SportShoes_2a.jpg', 1599, 'products2.php', 1899, 15),
(3, 1, 'ASIAN Shoes Wonder-13 Grey Firozi Mesh Shoes', 'sport shoes', 'men Footwear', 'img/Men_SportShoes_3a.jpg', 1000, 'products3.php', 1499, 32),
(4, 1, 'Sparx Men\'s Running Shoes2', 'sport shoes', 'men Footwear', 'img/Men_SportShoes_4a.jpg', 2449, 'products4.php', 2999, 20),
(5, 1, 'Woodland Men\'s Leather Sneakers', 'men casual shoes', 'men footwear', 'img/Men_CasualShoes_1a.jpg', 599, 'mf2products5.php', 799, 25),
(6, 1, 'Robbie jones Mens Casual Shoes|Sneakers', 'men casual shoes', 'men footwear', 'img/Men_CasualShoes_2a.jpg', 999, 'mf2products6.php', 1099, 10),
(7, 1, 'Inklenzo Men\'s Casual Sneakers Shoes', 'men casual shoes', 'men footwear', 'img/Men_CasualShoes_3a.jpg', 799, 'mf2products7.php', 999, 20),
(8, 1, 'Zovim Men\'s Denim Jeans Sneakers Casual Shoes - Blue', 'men casual shoes', 'men footwear', 'img/Men_CasualShoes_4a.jpg', 399, 'mf2products8.php', 499, 20),
(9, 2, ' Valar Printed Half Sleeve Round Neck T-Shirt', 'men t-shirts', 'men top wear', 'img/Men_T-shirt_1a.jpg', 499, 'mtproducts1.php', 599, 18),
(10, 2, 'STYLENSE Men\'s Half Sleeve V-Neck Cotton T-Shirt - Multicolor', 'men t-shirts', 'men top wear', 'img/Men_T-shirt_2a.jpg', 399, 'mtproducts2.php', 499, 20),
(11, 2, 'US Polo Association Men\'s Solid Regular Fit Polo', 'men t-shirts', 'men top wear', 'img/Men_T-shirt_3a.jpg', 1599, 'mtproducts3.php', 1999, 20),
(12, 2, 'V3Squared Men\'s Cotton Full Sleeve Cotton T-Shirt', 'men t-shirts', 'men top wear', 'img/Men_T-shirt_4a.jpg', 399, 'mtproducts4.php', 499, 20),
(13, 2, 'Men\'s Solid Regular Fit Full Sleeve Formal Shirt', 'men shirts', 'men top wear', 'img/Men_Shirts_1a.jpg', 299, 'mt2products1.php', 499, 40),
(14, 2, 'IndoPrimo Men\'s Cotton Casual Shirt for Men Full Sleeves', 'men shirts', 'men top wear', 'img/Men_Shirts_2a.jpg', 399, 'mt2products2.php', 499, 20),
(15, 2, 'Being fab Men\'s Cotton Casual Shirt', 'men shirts', 'men top wear', 'img/Men_Shirts_3a.jpg', 499, 'mt2products3.php', 599, 18),
(16, 2, 'Dennis Lingo Men\'s Casual Shirt', 'men shirts', 'men top wear', 'img/Men_Shirts_4a.jpg', 399, 'mt2products4.php', 499, 20),
(17, 3, 'STUDIO NEXX Men\'s Regular Fit Stretch Jeans', 'men jeans', 'men bottom wear\r\n', 'img/Men_Jeans_1a.jpg', 799, 'mbproducts1.php', 999, 20),
(18, 3, 'Urbano Fashion Men\'s Slim Fit Black Stretch Jeans', 'men jeans', 'men bottom wear\r\n', 'img/Men_Jeans_2a.jpg', 699, '\r\nmbproducts2.php', 799, 13),
(19, 3, 'Levi\'s Men\'s Tapered Fit Skinny Jeans', 'men jeans', 'men bottom wear', 'img/Men_Jeans_3a.jpg', 2200, '\r\nmbproducts3.php', 2500, 12),
(20, 3, 'Newport University Men\'s Slim Fit Jeans', 'men jeans', 'men bottom wear\r\n', 'img/Men_Jeans_4a.jpg', 699, '\r\nmbproducts4.php', 799, 13),
(21, 3, 'Alan Jones Clothing Men\'s Cotton Track Pant', 'track pant', 'men bottom wear', 'img/Men_TrackPants_1a.jpg', 999, 'mb2products1.php', 1099, 10),
(22, 3, 'SHAUN Men\'s Cotton Trackpants', 'track pant', 'men bottom wear', 'img/Men_TrackPants_2a.jpg', 499, 'mb2products2.php', 599, 18),
(23, 3, 'Finz Men\'s Joggers for Men', 'track pant', 'men bottom wear', 'img/Men_TrackPants_3a.jpg', 599, 'mb2products3.php', 799, 25),
(24, 3, 'Dri-Fit Lower 100% Polyester Slim and Fit Track Pants', 'track pant', 'men bottom wear', 'img/Men_TrackPants_4a.jpg', 1999, 'mb2products4.php', 2199, 9),
(25, 4, 'Women\'s Stylish Synthetic Michael Slippers', 'women flats', 'women foot wear', 'img/Women_Flats_1a.jpg', 499, 'ffproducts1.php', 599, 18),
(26, 4, 'Women Mules(AV-75)', 'women flats', 'women foot wear', 'img/Women_Flats_2a.jpg', 399, 'ffproducts2.php', 499, 20),
(27, 4, 'Women Flat Sandals with Ankle Strap', 'women flats', 'women foot wear', 'img/Women_Flats_3a.jpg', 499, 'ffproducts3.php', 599, 18),
(28, 4, 'NS Style Women\'s Flat Sandal', 'women flats', 'women foot wear', 'img/Women_Flats_4a.jpg', 249, 'ffproducts4.php', 499, 50),
(29, 4, 'Klaur Melbourne Women\'s 3.5 Inchs Block Heel Sandal', 'women heels', 'women footwear', 'img/Women_Heels_1a.jpg', 499, 'ff2products1.php', 599, 18),
(30, 4, 'Beauty Queen R DEZINO Bahubali Block Heel Sandal for Women', 'women heels', 'women footwear', 'img/Women_Heels_2a.jpg', 399, 'ff2products2.php', 499, 20),
(31, 4, 'BATA Women\'s Cathie Fashion Sandals', 'women heels', 'women footwear', 'img/Women_Heels_3a.jpg', 499, 'ff2products3.php', 599, 18),
(32, 4, 'Denill Comfortable, Block Heels for Womens and Girls', 'women heels', 'women footwear', 'img/Women_Heels_4a.jpg', 699, 'ff2products4.php', 799, 13),
(33, 5, 'Heart And Graphic Short Sleeve Tee', 'top', 'women top', 'img/Capture1.png', 499, 'fwproducts1.php', 599, 18),
(34, 5, 'Gesture &amp; Oil Painting Print Tee', 'top', 'women top', 'img/Capture2.png', 399, 'fwproducts2.php', 499, 20),
(35, 5, 'Car &amp; Tropical Print Tee', 'top', 'women top', 'img/Capture3.png', 349, 'fwproducts3.php', 499, 30),
(36, 5, 'Tie Dye Twist Hem Tee', 'top', 'women top', 'img/Capture4.png', 449, 'fwproducts4.php', 499, 10),
(37, 5, 'High Waist Belted Crop Jeans', 'jeans', 'women jeans', 'img/Jeans1.1.png', 999, 'fw2products1.php', 1099, 104),
(38, 5, 'Distressed Skinny Jeans', 'jeans', 'women jeans', 'img/Jeans2.1.png', 399, 'fw2products2.php', 499, 20),
(39, 5, 'Dark Wash Flare Leg Jeans Without Belt', 'jeans', 'women jeans', 'img/Jeans3.1.png', 499, 'fw2products3.php', 599, 18),
(40, 5, 'Carrot Flakes Jeans Without Chain', 'jeans', 'women jeans', 'img/Jeans4.1.png', 599, 'fw2products4.php', 799, 25),
(41, 6, 'LIME Women Black Chiffon Saree With Blouse Piece', 'sarees', 'women sarees', 'img/s1.jpg', 999, 'feproducts.php', 1099, 10),
(42, 6, 'Red-Coloured &amp; Yellow-Coloured Linen Blend Printed Saree', 'sarees', 'women sarees', 'img/s2.jpg', 399, 'feproducts2.php', 499, 20),
(43, 6, 'Peach and tangerine ombre sari', 'sarees', 'women sarees', 'img/s3.jpg', 699, 'feproducts3.php', 799, 12),
(44, 6, 'Light Mauve Georgette Saree with Floral Print', 'sarees', 'women sarees', 'img/s4.jpg', 799, 'feproducts4.php', 999, 20),
(45, 6, 'Geo Print Notched Half Button Kurti', 'kurti', 'women kurti', 'img/Kurti1.png', 499, 'fe2products.php', 599, 18),
(46, 6, 'Foil Print Notched Straight Kurta ', 'kurti', 'women kurti', 'img/Kurti2.png', 399, 'fe2products2.php', 499, 20),
(47, 6, 'Notched Solid Straight Kurta ', 'kurti', 'women kurti', 'img/Kurti3.png', 299, 'fe2products3.php', 499, 40),
(48, 6, 'Polka Dot Tassel Straight Kurta ', 'kurti', 'women kurti', 'img/Kurta4.png', 399, 'fe2products4.php', 499, 20),
(49, 7, 'Samsung Guru 1200 (GT-E1200, Black)', 'Feature phone', 'mobile', 'img/Featurephone.png', 2999, 'eproducts.php', 3499, 14),
(50, 7, 'Samsung Galaxy M20 (Charcoal Black, 4GB RAM, 64GB Storage, 5000mAH Battery)', 'Smart phone', 'mobile', 'img/Smartphone.png', 15999, 'e2products.php', 17999, 11),
(51, 8, 'Cosmic Byte GS410 Headphones with Mic  (Black/Blue)', 'Headphones', 'mobile accessories', 'img/headphones.png', 1299, 'e3products.php', 1499, 20),
(52, 8, 'Mi 10000mAH Li-Polymer Power Bank 2i', 'Power Bank', 'mobile accessories', 'img/pb.png', 2049, 'e4products.php', 2199, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `firstname`, `lastname`, `phonenumber`, `email`, `username`, `password`) VALUES
(5, 'deep', 'patel', 9870043744, 'pateldeep1842@gmail.com', 'deep', 'Deep1842');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `pro_title` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pro_id` varchar(250) NOT NULL,
  `pro_title` varchar(250) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=528;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

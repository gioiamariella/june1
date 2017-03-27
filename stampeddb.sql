-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 02:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stampeddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Medicine'),
(2, 'Law'),
(3, 'Business'),
(4, 'Teaching'),
(5, 'Arts'),
(6, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `customer_upload`
--

CREATE TABLE `customer_upload` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `img_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paper_kind`
--

CREATE TABLE `paper_kind` (
  `pk_id` int(100) NOT NULL,
  `pk_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_kind`
--

INSERT INTO `paper_kind` (`pk_id`, `pk_title`) VALUES
(1, 'Matte White'),
(2, 'Cross-Hatch Embossed'),
(3, 'Embossed Linen'),
(4, 'Smooth White'),
(5, 'Plastic Card White'),
(6, 'Gloss Laminated'),
(7, 'Matte Laminated'),
(8, 'Sand Embossed'),
(9, 'White Metallic'),
(10, 'Skin Card'),
(11, 'Matte Transparent'),
(12, 'Matte Laminated 300 GSM'),
(13, 'Beige Metallic');

-- --------------------------------------------------------

--
-- Table structure for table `print_finish`
--

CREATE TABLE `print_finish` (
  `pf_id` int(100) NOT NULL,
  `pf_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print_finish`
--

INSERT INTO `print_finish` (`pf_id`, `pf_title`) VALUES
(1, 'Spot UV Front'),
(2, 'Cold Foil Card'),
(3, 'Emboss'),
(4, 'Foil Stamp'),
(5, 'Spot UV both sides'),
(6, 'Flat Print');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_paperkind` int(100) NOT NULL,
  `product_printfinish` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_paperkind`, `product_printfinish`, `product_title`, `product_price`, `product_desc`, `product_img`, `product_keywords`) VALUES
(2, 0, 1, 6, 'Green Medical Card', 334, '<p>Medical green</p>', 'MEDICAL_CARD1_PAGE2.jpg', 'medical, one page'),
(3, 0, 1, 6, 'Watercolor Artist Design', 213, '<p>afawfaw</p>', 'Artist.jpg', ''),
(4, 0, 4, 2, 'Watercolor Artist Design 2 ', 300, '', 'artist2.jpg', ''),
(5, 0, 12, 6, 'Ballet ', 350, '', 'Ballet.jpg', ''),
(6, 0, 5, 1, 'Ballet 2', 300, '', 'Ballet2.jpg', ''),
(7, 0, 0, 0, 'Photography', 0, '', 'Photography_Page2.jpg', ''),
(9, 0, 0, 0, 'Photography 2', 0, '', 'Photography_Page2.jpg', ''),
(10, 0, 0, 0, 'Green Medical Card 2', 0, '', 'MEDICAL_CARD1_PAGE1.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_upload`
--
ALTER TABLE `customer_upload`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `paper_kind`
--
ALTER TABLE `paper_kind`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `print_finish`
--
ALTER TABLE `print_finish`
  ADD PRIMARY KEY (`pf_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer_upload`
--
ALTER TABLE `customer_upload`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paper_kind`
--
ALTER TABLE `paper_kind`
  MODIFY `pk_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `print_finish`
--
ALTER TABLE `print_finish`
  MODIFY `pf_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

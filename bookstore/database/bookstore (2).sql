-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 08:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('abd', '2255'),
('admin', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author`, `description`, `price`, `image`, `category`) VALUES
(67, 'mathilukal', 'advff', 'Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss for HBO. It is an adaptation of A Song of Ice and Fire, a series of fantasy novels by George R. R. Martin, the first of which is A Game of Thrones. The', 150, 'cover-pages/images (1).jpg', 'comic'),
(68, 'mathilukal', ' fff', 'jfaefjeifjewifefjewjffwkfnf fnfiaenffkmakdaldamdlamdaldaldadladdadl;a;fcasfmcalfmaldmaldamldaldafl,.ca,c;,a;d,a;d,a;d,a;dad;a,d;ad,a;d,a;dw;d.a;d.;d.', 450, 'cover-pages/simpsons_treehouse_horror_roundup.jpg', 'comic'),
(69, '', '', '', 0, '', 'action');

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `name`, `email`, `mobile`) VALUES
(1, 'abd', '2018', '', '', 0),
(2, 'admin', '2020', '', '', 0),
(3, 'amal', '258', '', '', 0),
(4, 'amalash', '2021', '', '', 0),
(5, 'amalash', 'dwdwsdw', '', '', 0),
(6, 'dd', 'dde', '', '', 0),
(7, 'dedeqd', 'dddd', 'amal', '', 0),
(9, '', '', '', '', 0),
(10, 'amala', '20', 'saketham', 'amalashk2001@gmail.com', 98588),
(12, 'amalak', '21', 'kgf', 'amalashk2001@gmail.com', 98588),
(14, 'NIUTHa', '555', 'anitha', 'dwddqw@gmail.com', 8888889),
(15, 'ffff', '55', 'mathilukal', 'dwddqw@gmail.com', 8888889),
(17, 'karnan', '7777', 'karnan', 'dwaaddqw@gmail.com', 787);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(100) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(1, 1, '1500', 'Cancelled', 'COD', '0000-00-00'),
(2, 15, '150', 'Order Placed', 'Paypal', '2021-01-06'),
(3, 16, '2100', 'Order Placed', 'Cheque', '2021-01-06'),
(4, 16, '2100', 'Delivered', 'Cheque', '2021-01-06'),
(5, 16, '5100', 'Dispatched', 'Cheque', '2021-01-06'),
(6, 1, '450', 'Order Placed', 'COD', '2021-01-08'),
(7, 2, '450', 'Order Placed', '', '2021-01-08'),
(8, 1, '1800', 'Order Placed', 'Cheque', '2021-01-08'),
(9, 2, '450', 'Order Placed', '', '2021-01-08'),
(10, 17, '1050', 'Cancelled', '', '2021-01-08'),
(11, 17, '1050', 'Cancelled', 'COD', '2021-01-08'),
(12, 17, '450', 'Cancelled', 'Paypal', '2021-01-08'),
(13, 17, '600', 'Cancelled', 'Cheque', '2021-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `ordersitems`
--

CREATE TABLE `ordersitems` (
  `id` int(11) NOT NULL,
  `orderid` int(255) NOT NULL,
  `bookid` int(100) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `bookprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersitems`
--

INSERT INTO `ordersitems` (`id`, `orderid`, `bookid`, `quantity`, `bookprice`) VALUES
(1, 1, 67, '10', 150),
(2, 2, 67, '1', 150),
(3, 4, 68, '4', 450),
(4, 4, 67, '2', 150),
(5, 5, 68, '11', 450),
(6, 5, 67, '1', 150),
(7, 6, 68, '1', 450),
(8, 7, 68, '1', 450),
(9, 8, 68, '4', 450),
(10, 9, 68, '1', 450),
(11, 11, 68, '2', 450),
(12, 11, 67, '1', 150),
(13, 12, 68, '1', 450),
(14, 13, 68, '1', 450),
(15, 13, 67, '1', 150);

-- --------------------------------------------------------

--
-- Table structure for table `orderstracking`
--

CREATE TABLE `orderstracking` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderstracking`
--

INSERT INTO `orderstracking` (`id`, `orderid`, `status`, `reason`) VALUES
(1, '5', 'Dispatched', ''),
(2, '4', 'Delivered', 'dsfdfd'),
(3, '10', 'cancelled', ''),
(4, '11', 'cancelled', ''),
(5, '12', 'cancelled', 'fsdfsgfb'),
(6, '1', 'cancelled', ''),
(7, '13', 'cancelled', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `userid`, `firstname`, `lastname`, `company`, `address1`, `address2`, `city`, `country`, `zip`, `mobile`) VALUES
(2, 1, '', '', '', '', '', '', 'AR', 0, 0),
(3, 2, '', '', '', '', '', '', '', 0, 0),
(4, 15, 'cdcs', 'sss', 'ss', 'ddd', 'ddd', 'sssss', 'DZ', 88, 65555),
(5, 16, 'ankith', '', 'ankitha', '', '', '', 'AO', 0, 0),
(6, 17, '', '', '', '', '', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersitems`
--
ALTER TABLE `ordersitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderstracking`
--
ALTER TABLE `orderstracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ordersitems`
--
ALTER TABLE `ordersitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderstracking`
--
ALTER TABLE `orderstracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

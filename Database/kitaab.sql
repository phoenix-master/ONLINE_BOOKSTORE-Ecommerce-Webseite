-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 03:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitaab`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE `addproducts` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `sprice` varchar(250) NOT NULL,
  `dprice` varchar(250) NOT NULL,
  `prices` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`id`, `title`, `author`, `category`, `description`, `image`, `sprice`, `dprice`, `prices`) VALUES
(5, 'Harry potter', 'j.K Rowling', 'fantasy', '<p>The official playscript of the original West End production of&nbsp;<em>Harry Potter and the Cursed Child</em>.<br />\r\n<br />\r\nIt was always difficult being Harry Potter and it isn&#39;t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three sch', 'harrypotter.png', '120', '450', '485'),
(8, 'The Witch', '', 'fantasy', '<p>When the youngest of the Morgan children, Annie, turned eight she didn&#39;t know the fate that would await her. As they enter the forest, she and her brother, Bill, will experience unspeakable terror. Only her ties will be able to save them... because she has waited for them for a long time, in ', 'thewitch.jpg', '280', '', ''),
(12, 'Revolution Twenty20', 'Chetan Bhagat', 'fantasy', '<p><strong>Start the Revolution</strong></p>\r\n\r\n<p>The books of Chetan Bhagat need no introduction. He is one of the most widely read authors of India. He has a long list of best sellers. Revolution 2020 is just another gem to that list. Set against the backdrop of one of India&rsquo;s oldest city- ', 'revolution2020.jpg', '200', '100', '300'),
(13, 'Whispers Of Hate', 'Sanchit Garg', 'fantasy', '<p><em><strong>A true heart-wrenching tale of love, suspense, mystery, thriller and horror.</strong></em><br />\r\n<strong>Do you believe in the otherworldly?<br />\r\nDo you believe dreams are not just dreams but something else?<br />\r\nDo you believe everything happens for a reason?</strong><br />\r\nMay', 'whispers.png', '600', '50', '750'),
(15, 'A tale of Two Souls', 'Anand Kumar', 'fantasy', '<p>I thought it was all over until I met her again. I was hurting myself to forget her, and yet I kept falling in love. I saw her, smiling and happy with him. As the tears in my eyes pleaded for freedom, I waited, for her, to give me that one smile... Sometimes life gives you a thousand reasons to f', 'a tale of two souls.jpg', '560', '80', '640'),
(20, 'The Blue Umbrella', 'Ruskin Bond', 'fantasy', '<p>&lsquo;The Umbrella was like a flower, a great blue flower that had sprung up on the dry brown hillside.&#39;</p>\r\n\r\n<p>In exchange for her lucky leopard&#39;s claw pendant, Binya acquires a beautiful blue umbrella that makes her the envy of everyone in her village, especially Ram Bharosa, the sh', 'the blue umbrella.jpg', '785', '89', '890');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'kitaabcom@gmail.com', '123456', 'kitaab.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `image`, `title`, `price`) VALUES
(5, '../admin/pimages/harrypotter.png', 'Harry potter', '120'),
(8, '../admin/pimages/thewitch.jpg', 'The Witch', '280'),
(12, '../admin/pimages/revolution2020.jpg', 'Revolution Twenty20', '200'),
(13, '../admin/pimages/whispers.png', 'Whispers Of Hate', '600');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmp` varchar(250) NOT NULL,
  `contact` int(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(7) NOT NULL,
  `profile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `confirmp`, `contact`, `dob`, `gender`, `address`, `pincode`, `profile`) VALUES
(41, 'Narnia', 'narnia@gmail.com', '1234567897', '1234567897', 2147483647, '2020-11-21', 'Male', 'aAac', 123456, 'thegirlintheroom102.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

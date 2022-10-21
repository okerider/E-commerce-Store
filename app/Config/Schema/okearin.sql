-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 07:56 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okearin`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `date_created`, `date_modified`) VALUES
(1, 'Hy Volex', 'Hy Volex', '2015-08-17 22:59:00', '2015-08-17 22:59:00'),
(2, 'Absolut', 'Absolut', '2015-08-17 23:01:00', '2015-08-17 23:01:00'),
(3, 'Angostura', 'Angostura', '2015-08-17 23:01:00', '2015-08-17 23:01:00'),
(4, 'Alomo', 'Alomo', '2015-08-17 23:02:00', '2015-08-17 23:02:00'),
(5, 'Am Alex', 'Am Alex', '2015-08-17 23:02:00', '2015-08-17 23:02:00'),
(6, 'Amarula', 'Amarula', '2015-08-17 23:02:00', '2015-08-17 23:02:00'),
(7, 'Wild Turkey', 'Wild Turkey', '2015-08-17 23:03:00', '2015-08-17 23:03:00'),
(8, 'Amphora', 'Amphora', '2015-08-17 23:03:00', '2015-08-17 23:03:00'),
(9, 'Andre', 'Andre', '2015-08-17 23:03:00', '2015-08-17 23:03:00'),
(10, 'Dom Perignon', 'Dom Perignon', '2015-08-17 23:03:00', '2015-08-17 23:03:00'),
(11, 'Armand De Brignac', 'Armand De Brignac', '2015-08-17 23:04:00', '2015-08-17 23:04:00'),
(12, 'Torres', 'Torres', '2015-08-17 23:07:00', '2015-08-17 23:07:00'),
(13, 'B&G', 'B&G', '2015-08-17 23:08:00', '2015-08-17 23:08:00'),
(14, 'Bacardi', 'Bacardi', '2015-08-17 23:08:00', '2015-08-17 23:08:00'),
(15, 'Baileys', 'Baileys', '2015-08-17 23:08:00', '2015-08-17 23:08:00'),
(16, 'Baron', 'Baron', '2015-08-17 23:09:00', '2015-08-17 23:09:00'),
(17, 'Best', 'Best', '2015-08-17 23:09:00', '2015-08-17 23:09:00'),
(18, 'Johnnie Walker', 'Johnnie Walker', '2015-08-17 23:10:00', '2015-08-17 23:10:00'),
(19, 'Blue Cocktail', 'Blue Cocktail', '2015-08-17 23:10:00', '2015-08-17 23:10:00'),
(20, 'Blue Ice', 'Blue Ice', '2015-08-17 23:11:00', '2015-08-17 23:11:00'),
(22, 'Bolero', 'Bolero', '2015-08-17 23:11:00', '2015-08-17 23:11:00'),
(23, 'Bosca', 'Bosca', '2015-08-17 23:12:00', '2015-08-17 23:12:00'),
(24, 'Camay', 'Camay', '2015-08-17 23:12:00', '2015-08-17 23:12:00'),
(25, 'Campari', 'Campari', '2015-08-17 23:13:00', '2015-08-17 23:13:00'),
(26, 'Cape Discovery', 'Cape Discovery', '2015-08-17 23:13:00', '2015-08-17 23:13:00'),
(27, 'Capel', 'Capel', '2015-08-17 23:14:00', '2015-08-17 23:14:00'),
(28, 'Captain Morgan', 'Captain Morgan', '2015-08-17 23:14:00', '2015-08-17 23:14:00'),
(29, 'Carlo Rossi', 'Carlo Rossi', '2015-08-17 23:15:00', '2015-08-17 23:15:00'),
(30, 'Chamdor', 'Chamdor', '2015-08-17 23:15:00', '2015-08-17 23:15:00'),
(31, 'Chateaduneuf-Du-Pape', 'Chateaduneuf-Du-Pape', '2015-08-17 23:16:00', '2015-08-17 23:16:00'),
(32, 'Chizza', 'Chizza', '2015-08-17 23:16:00', '2015-08-17 23:16:00'),
(33, 'Ciroc', 'Ciroc', '2015-08-17 23:16:00', '2015-08-17 23:16:00'),
(34, 'Kagor', 'Kagor', '2015-08-17 23:17:00', '2015-08-17 23:17:00'),
(35, 'Comfort And Peace ', 'Comfort And Peace ', '2015-08-17 23:17:00', '2015-08-17 23:17:00'),
(36, 'De Vina', 'De Vina', '2015-08-17 23:19:00', '2015-08-17 23:19:00'),
(37, 'Derry Cole', 'Derry Cole', '2015-08-17 23:19:00', '2015-08-17 23:19:00'),
(38, 'Don Morris ', 'Don Morris ', '2015-08-17 23:19:00', '2015-08-17 23:19:00'),
(40, 'Dove', 'Dove', '2015-08-17 23:19:00', '2015-08-17 23:19:00'),
(41, 'Drostdy-Hof', 'Drostdy-Hof', '2015-08-17 23:20:00', '2015-08-17 23:20:00'),
(42, 'Allen And Hanburys', 'Allen And Hanburys', '2015-08-17 23:20:00', '2015-08-17 23:20:00'),
(43, 'Enny', 'Enny', '2015-08-17 23:20:00', '2015-08-17 23:20:00'),
(44, 'Escudo Rojo', 'Escudo Rojo', '2015-08-17 23:21:00', '2015-08-17 23:21:00'),
(45, 'Eva', 'Eva', '2015-08-17 23:21:00', '2015-08-17 23:21:00'),
(46, 'Foster', 'Foster', '2015-08-17 23:21:00', '2015-08-17 23:21:00'),
(47, 'Four Cousins', 'Four Cousins', '2015-08-17 23:22:00', '2015-08-17 23:22:00'),
(48, 'Glade ', 'Glade ', '2015-08-17 23:22:00', '2015-08-17 23:22:00'),
(50, 'Gold', 'Gold', '2015-08-17 23:22:00', '2015-08-17 23:22:00'),
(51, 'Golden Penny', 'Golden Penny', '2015-08-17 23:23:00', '2015-08-17 23:23:00'),
(52, 'Gordons', 'Gordons', '2015-08-17 23:23:00', '2015-08-17 23:23:00'),
(53, 'Grant''s', 'Grant''s', '2015-08-17 23:24:00', '2015-08-17 23:24:00'),
(54, 'Grey Goose ', 'Grey Goose ', '2015-08-17 23:24:00', '2015-08-17 23:24:00'),
(55, 'Mama Goodluck', 'Mama Goodluck', '2015-08-17 23:25:00', '2015-08-17 23:25:00'),
(56, 'Heineken ', 'Heineken ', '2015-08-17 23:25:00', '2015-08-17 23:25:00'),
(57, 'Hennessy', 'Hennessy', '2015-08-17 23:25:00', '2015-08-17 23:25:00'),
(58, 'J&B', 'J&B', '2015-08-17 23:25:00', '2015-08-17 23:25:00'),
(59, 'J&W ', 'J&W ', '2015-08-17 23:25:00', '2015-08-17 23:25:00'),
(60, 'J.P', 'J.P', '2015-08-17 23:26:00', '2015-08-17 23:26:00'),
(61, 'Jack Daniel''s', 'Jack Daniel''s', '2015-08-17 23:27:00', '2015-08-17 23:27:00'),
(62, 'John Barr', 'John Barr', '2015-08-17 23:27:00', '2015-08-17 23:27:00'),
(63, 'Joven', 'Joven', '2015-08-17 23:27:00', '2015-08-17 23:27:00'),
(64, 'JVR', 'JVR', '2015-08-17 23:28:00', '2015-08-17 23:28:00'),
(65, 'Laman', 'Laman', '2015-08-17 23:28:00', '2015-08-17 23:28:00'),
(66, 'Lambrini', 'Lambrini', '2015-08-17 23:28:00', '2015-08-17 23:28:00'),
(67, 'Lemon Fresh', 'Lemon Fresh', '2015-08-17 23:31:00', '2015-08-17 23:31:00'),
(68, 'Liria', 'Liria', '2015-08-17 23:31:00', '2015-08-17 23:31:00'),
(69, 'Magic Moments', 'Magic Moments', '2015-08-17 23:32:00', '2015-08-17 23:32:00'),
(70, 'Malisa', 'Malisa', '2015-08-17 23:32:00', '2015-08-17 23:32:00'),
(71, 'Martini Rose', 'Martini Rose', '2015-08-17 23:32:00', '2015-08-17 23:32:00'),
(72, 'Masia Dutti', 'Masia Dutti', '2015-08-17 23:32:00', '2015-08-17 23:32:00'),
(73, 'Mc Dowells ', 'Mc Dowells ', '2015-08-17 23:33:00', '2015-08-17 23:33:00'),
(74, 'Moet & Chandon  ', 'Moet & Chandon  ', '2015-08-17 23:33:00', '2015-08-17 23:33:00'),
(75, 'Nestle', 'Nestle', '2015-08-17 23:33:00', '2015-08-17 23:33:00'),
(76, 'Night Train ', 'Night Train ', '2015-08-17 23:34:00', '2015-08-17 23:34:00'),
(77, 'Guinness', 'Guinness', '2015-08-17 23:34:00', '2015-08-17 23:34:00'),
(78, 'Palmolive', 'Palmolive', '2015-08-17 23:34:00', '2015-08-17 23:34:00'),
(79, 'Jean Canon', 'Jean Canon', '2015-08-17 23:35:00', '2015-08-17 23:35:00'),
(80, 'Paul Masson', 'Paul Masson', '2015-08-17 23:35:00', '2015-08-17 23:35:00'),
(81, 'Pure Heaven ', 'Pure Heaven ', '2015-08-17 23:35:00', '2015-08-17 23:35:00'),
(82, 'Organic', 'Organic', '2015-08-17 23:35:00', '2015-08-17 23:35:00'),
(83, 'Soulo', 'Soulo', '2015-08-17 23:36:00', '2015-08-17 23:36:00'),
(84, 'Red Oak ', 'Red Oak ', '2015-08-17 23:36:00', '2015-08-17 23:36:00'),
(85, 'Red Squad', 'Red Squad', '2015-08-17 23:36:00', '2015-08-17 23:36:00'),
(86, 'Remy Martin', 'Remy Martin', '2015-08-17 23:37:00', '2015-08-17 23:37:00'),
(87, 'Robin', 'Robin', '2015-08-17 23:38:00', '2015-08-17 23:38:00'),
(88, 'Rubis ', 'Rubis ', '2015-08-17 23:38:00', '2015-08-17 23:38:00'),
(89, 'Ruinart ', 'Ruinart ', '2015-08-17 23:39:00', '2015-08-17 23:39:00'),
(90, 'Santero ', 'Santero ', '2015-08-17 23:39:00', '2015-08-17 23:39:00'),
(91, 'Scoozi ', 'Scoozi ', '2015-08-17 23:39:00', '2015-08-17 23:39:00'),
(92, 'Seaman''s ', 'Seaman''s ', '2015-08-17 23:39:00', '2015-08-17 23:39:00'),
(93, 'Skyy', 'Skyy', '2015-08-17 23:40:00', '2015-08-17 23:40:00'),
(94, 'Smirnoff', 'Smirnoff', '2015-08-17 23:40:00', '2015-08-17 23:40:00'),
(95, 'Sirop', 'Sirop', '2015-08-17 23:41:00', '2015-08-17 23:41:00'),
(96, 'St - Remy', 'St - Remy', '2015-08-17 23:41:00', '2015-08-17 23:41:00'),
(97, 'Jumbo', 'Jumbo', '2015-08-17 23:41:00', '2015-08-17 23:41:00'),
(98, 'Table Mountain', 'Table Mountain', '2015-08-17 23:41:00', '2015-08-17 23:41:00'),
(99, 'Toad-Ally ', 'Toad-Ally ', '2015-08-17 23:42:00', '2015-08-17 23:42:00'),
(101, 'Triibe', 'Triibe', '2015-08-17 23:42:00', '2015-08-17 23:42:00'),
(102, 'Two Ocean ', 'Two Ocean ', '2015-08-17 23:43:00', '2015-08-17 23:43:00'),
(103, 'Verdi ', 'Verdi ', '2015-08-17 23:43:00', '2015-08-17 23:43:00'),
(104, 'Veuve  ', 'Veuve  ', '2015-08-17 23:44:00', '2015-08-17 23:44:00'),
(105, 'Vittore ', 'Vittore ', '2015-08-17 23:44:00', '2015-08-17 23:44:00'),
(106, 'Voortman ', 'Voortman ', '2015-08-17 23:44:00', '2015-08-17 23:44:00'),
(107, 'Whitehorse ', 'Whitehorse ', '2015-08-17 23:45:00', '2015-08-17 23:45:00'),
(108, 'Ziploc', 'Ziploc', '2015-08-17 23:45:00', '2015-08-17 23:45:00'),
(109, 'Binto', 'Binto', '2015-08-17 23:45:00', '2015-08-17 23:45:00'),
(110, 'Energizer ', 'Energizer ', '2015-08-17 23:46:00', '2015-08-17 23:46:00'),
(111, 'Favour', 'Favour', '2015-08-17 23:46:00', '2015-08-17 23:46:00'),
(112, 'Funtuna', 'Funtuna', '2015-08-17 23:46:00', '2015-08-17 23:46:00'),
(113, 'Gino', 'Gino', '2015-08-17 23:47:00', '2015-08-17 23:47:00'),
(114, 'Haliborange', 'Haliborange', '2015-08-17 23:47:00', '2015-08-17 23:47:00'),
(115, 'Hotel Luxury', 'Hotel Luxury', '2015-08-17 23:47:00', '2015-08-17 23:47:00'),
(116, 'Nature''s Field', 'Nature''s Field', '2015-08-17 23:48:00', '2015-08-17 23:48:00'),
(118, 'Stk Royal', 'Stk Royal', '2015-08-17 23:48:00', '2015-08-17 23:48:00'),
(119, 'Tixylix', 'Tixylix', '2015-08-17 23:50:00', '2015-08-17 23:50:00'),
(120, 'Voltarren', 'Voltarren', '2015-08-17 23:50:00', '2015-08-17 23:50:00'),
(122, 'Act II', 'Act II', '2015-08-17 23:51:00', '2015-08-17 23:51:00'),
(123, '3 Ballerina ', '3 Ballerina ', '2015-08-17 23:51:00', '2015-08-17 23:51:00'),
(124, '848 Lion King', '848 Lion King', '2015-08-17 23:51:00', '2015-08-17 23:51:00'),
(125, 'A. Legal', 'A. Legal', '2015-08-17 23:53:00', '2015-08-17 23:53:00'),
(126, 'Aah Bisto ', 'Aah Bisto ', '2015-08-17 23:53:00', '2015-08-17 23:53:00'),
(127, 'Ola Ola', 'Ola Ola', '2015-08-17 23:53:00', '2015-08-17 23:53:00'),
(128, 'Ade-Ade', 'Ade-Ade', '2015-08-17 23:54:00', '2015-08-17 23:54:00'),
(129, 'Oloyin', 'Oloyin', '2015-08-17 23:54:00', '2015-08-17 23:54:00'),
(130, 'Africana ', 'Africana ', '2015-08-17 23:54:00', '2015-08-17 23:54:00'),
(131, 'Ahmad', 'Ahmad', '2015-08-17 23:55:00', '2015-08-17 23:55:00'),
(132, 'Air Wick', 'Air Wick', '2015-08-18 08:08:00', '2015-08-18 08:08:00'),
(133, 'Aloe', 'Aloe', '2015-08-18 08:08:00', '2015-08-18 08:08:00'),
(134, 'Alpen', 'Alpen', '2015-08-18 08:08:00', '2015-08-18 08:08:00'),
(135, 'Amoy', 'Amoy', '2015-08-18 08:09:00', '2015-08-18 08:09:00'),
(136, 'Anmol', 'Anmol', '2015-08-18 08:09:00', '2015-08-18 08:09:00'),
(137, 'Annapurna', 'Annapurna', '2015-08-18 08:09:00', '2015-08-18 08:09:00'),
(138, 'Apple', 'Apple', '2015-08-18 08:10:00', '2015-08-18 08:10:00'),
(139, 'Red Apple', 'Red Apple', '2015-08-18 08:10:00', '2015-08-18 08:10:00'),
(140, 'Apple & Eve', 'Apple & Eve', '2015-08-18 08:11:00', '2015-08-18 08:11:00'),
(141, 'Aptamil', 'Aptamil', '2015-08-18 08:11:00', '2015-08-18 08:11:00'),
(142, 'Argo', 'Argo', '2015-08-18 08:12:00', '2015-08-18 08:12:00'),
(143, 'Aunt Jemima', 'Aunt Jemima', '2015-08-18 08:12:00', '2015-08-18 08:12:00'),
(144, 'Ayoola', 'Ayoola', '2015-08-18 08:12:00', '2015-08-18 08:12:00'),
(145, 'Batchelors', 'Batchelors', '2015-08-18 08:13:00', '2015-08-18 08:13:00'),
(146, 'Badia', 'Badia', '2015-08-18 08:13:00', '2015-08-18 08:13:00'),
(147, 'Bama', 'Bama', '2015-08-18 08:13:00', '2015-08-18 08:13:00'),
(148, 'Banga', 'Banga', '2015-08-18 11:10:00', '2015-08-18 11:10:00'),
(149, 'Barilla', 'Barilla', '2015-08-18 11:10:00', '2015-08-18 11:10:00'),
(151, 'Batey', 'Batey', '2015-08-18 11:11:00', '2015-08-18 11:11:00'),
(152, 'Betty Crocker', 'Betty Crocker', '2015-08-18 11:12:00', '2015-08-18 11:12:00'),
(154, 'Titus', 'Titus', '2015-08-18 11:12:00', '2015-08-18 11:12:00'),
(155, 'Bird''s ', 'Bird''s', '2015-08-18 15:08:00', '2015-08-18 15:08:00'),
(156, 'Lady B', 'Lady B', '2015-08-19 01:05:00', '2015-08-19 01:05:00'),
(157, 'Gold''s', 'Gold''s', '2015-08-19 01:47:00', '2015-08-19 01:47:00'),
(158, 'Smart', 'Smart', '2015-08-19 08:04:00', '2015-08-19 08:04:00'),
(159, 'Hollandia', 'Hollandia', '2015-08-19 09:00:00', '2015-08-19 09:00:00'),
(160, 'Kirkland', 'Kirkland', '2015-08-20 13:00:00', '2015-08-20 13:00:00'),
(161, 'Forever', 'Forever', '2015-08-20 13:23:00', '2015-08-20 13:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `bulks`
--

CREATE TABLE IF NOT EXISTS `bulks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `packaging` int(11) NOT NULL,
  `in_stock` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `date_created`, `date_modified`) VALUES
(1, 'Food', 'A large collection of foods available for sale on okearin.ng', '2015-08-14 23:59:00', '2015-08-14 23:59:00'),
(2, 'Home & Kitchen', 'A large collection of all you need to make your home a beautiful place.', '2015-08-15 00:01:00', '2015-08-15 00:01:00'),
(3, 'Baby & Mothercare', 'Mother''s needs is met with baby''s happiness.', '2015-08-15 00:03:00', '2015-08-15 00:03:00'),
(4, 'Computers & Accessories', 'New line of computing technologies added everyday.', '2015-08-15 00:17:00', '2015-08-15 00:17:00'),
(5, 'Electronics', 'Your needs met electronically', '2015-08-15 00:18:00', '2015-08-15 00:18:00'),
(6, 'Phones & Tablets', 'Phones and tablets that meet your mobile needs.', '2015-08-15 00:19:00', '2015-08-15 00:19:00'),
(7, 'Drinks', 'A large collection of drinks to nourish your body.', '2015-08-16 14:39:00', '2015-08-16 14:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `title`) VALUES
(1, 1, 'birds-custard-powder.jpg'),
(2, 2, 'lady-b-custard-powder-2kg.jpg'),
(3, 3, 'golds-custard-powder-500g.jpg'),
(4, 4, 'birds-custard-powder-300g.jpg'),
(5, 5, 'smart-milk-custard-2kg.jpg'),
(6, 6, 'hollandia-custard-van-2kg.jpg'),
(7, 7, 'Kirkland_Organic_Honey.jpg'),
(8, 8, 'forever_bee_honey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`) VALUES
(1, 'Food'),
(2, 'Drinks'),
(3, 'Baby & Mothercare'),
(4, 'Pharmacy'),
(5, 'Home & Kitchen'),
(6, 'Electronics'),
(7, 'Phones & Tablets');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `subcategory_id`, `brand_id`, `product_number`, `title`, `description`, `date_created`, `date_modified`) VALUES
(1, 1, 155, 12341, 'Bird''s Custard Powder, 600g', 'Bird''s Custard Powder, 600g', '2015-08-18 15:10:00', '2015-08-18 15:10:00'),
(2, 1, 156, 15148, 'Lady B Custard Powder, 2kg', 'Lady B Custard Powder, 2kg', '2015-08-19 01:06:00', '2015-08-19 01:06:00'),
(3, 1, 157, 10207, 'Gold''s Custard Powder, 500g', 'Gold''s Custard Powder, 500g', '2015-08-19 01:48:00', '2015-08-19 01:48:00'),
(4, 1, 155, 81642, 'Bird''s Custard Powder, 300g', 'Bird''s Custard Powder, 300g', '2015-08-19 07:35:00', '2015-08-19 07:35:00'),
(5, 1, 158, 15131, 'Smart Milk Custard Powder 2kg', 'Smart Milk Custard Powder 2kg', '2015-08-19 08:05:00', '2015-08-19 08:05:00'),
(6, 1, 159, 10883, 'Hollandia Custard Vanilla Flavour 2kg', 'Hollandia Custard Vanilla Flavour 2kg', '2015-08-19 09:01:00', '2015-08-19 09:01:00'),
(7, 1, 160, 11772, 'Kirkland Organic Honey 680g', 'Kirkland Organic Honey 680g', '2015-08-20 13:01:00', '2015-08-20 13:01:00'),
(8, 1, 161, 97444, 'Forever Bee Honey 500g', 'Forever Bee Honey 500g', '2015-08-20 13:23:00', '2015-08-20 13:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `products_types`
--

CREATE TABLE IF NOT EXISTS `products_types` (
  `id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_types`
--

INSERT INTO `products_types` (`id`, `product_id`, `type_id`) VALUES
(NULL, 1, 7),
(NULL, 2, 7),
(NULL, 3, 7),
(NULL, 4, 7),
(NULL, 5, 7),
(NULL, 6, 7),
(NULL, 7, 6),
(NULL, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `retails`
--

CREATE TABLE IF NOT EXISTS `retails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `packaging` int(11) NOT NULL,
  `in_stock` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `retails`
--

INSERT INTO `retails` (`id`, `product_id`, `price`, `packaging`, `in_stock`, `date_created`, `date_modified`) VALUES
(1, 1, '650.00', 1, '1', '2015-08-18 15:13:00', '2015-08-18 15:13:00'),
(3, 3, '270.00', 1, '1', '2015-08-19 01:49:00', '2015-08-19 01:49:00'),
(4, 4, '320.00', 1, '1', '2015-08-19 07:38:00', '2015-08-19 07:38:00'),
(5, 5, '700.00', 1, '1', '2015-08-19 08:06:00', '2015-08-19 08:06:00'),
(6, 6, '1295.00', 1, '1', '2015-08-19 09:26:00', '2015-08-19 09:26:00'),
(7, 7, '1600.00', 1, '1', '2015-08-20 13:04:00', '2015-08-20 13:04:00'),
(8, 8, '2500.00', 1, '1', '2015-08-20 13:25:00', '2015-08-20 13:25:00'),
(9, 2, '500.00', 1, '1', '2015-08-23 10:28:00', '2015-08-23 10:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `title`, `description`, `date_created`, `date_modified`) VALUES
(1, 1, 'Breakfast & Cereal', 'Breakfast & Cereal', '2015-08-16 14:40:00', '2015-08-16 14:40:00'),
(2, 1, 'Beverage', 'Beverage', '2015-08-16 14:44:00', '2015-08-16 14:44:00'),
(3, 1, 'Dairy & Eggs', 'Dairy & Eggs', '2015-08-16 14:45:00', '2015-08-16 14:45:00'),
(4, 1, 'Meals, Grains & Pasta', 'Meals, Grains & Pasta', '2015-08-16 14:46:00', '2015-08-16 14:46:00'),
(5, 1, 'Canned Goods & Soups', 'Canned Goods & Soups', '2015-08-16 14:46:00', '2015-08-16 14:46:00'),
(6, 1, 'Snacks, Biscuit and Cookies', 'Snacks, Biscuit and Cookies', '2015-08-16 14:47:00', '2015-08-16 14:47:00'),
(7, 1, 'Frozen Foods', 'Frozen Foods', '2015-08-16 14:48:00', '2015-08-16 14:48:00'),
(8, 1, 'Condiment & Spices', 'Condiment & Spices', '2015-08-16 14:48:00', '2015-08-16 14:48:00'),
(9, 1, 'Baking & Cooking', 'Baking & Cooking', '2015-08-16 14:49:00', '2015-08-16 14:49:00'),
(10, 1, 'Sweets & Chocolates', 'Sweets & Chocolates', '2015-08-16 14:50:00', '2015-08-16 14:50:00'),
(11, 1, 'Fresh Fruits', 'Fresh Fruits', '2015-08-16 14:50:00', '2015-08-16 14:50:00'),
(12, 1, 'Village Market', 'Village Market', '2015-08-16 14:51:00', '2015-08-16 14:51:00'),
(13, 7, 'Wine & Spirits', 'Wine & Spirits', '2015-08-16 14:51:00', '2015-08-16 14:51:00'),
(14, 7, 'Beer', 'Beer', '2015-08-16 14:52:00', '2015-08-16 14:52:00'),
(15, 7, 'Water & Juice', 'Water & Juice', '2015-08-16 14:53:00', '2015-08-16 14:53:00'),
(16, 7, 'Soft Drinks & Malt Drinks', 'Soft Drinks & Malt Drinks', '2015-08-16 14:54:00', '2015-08-16 14:54:00'),
(17, 7, 'Energy Drinks & Shakes', 'Energy Drinks & Shakes', '2015-08-16 14:55:00', '2015-08-16 14:55:00'),
(18, 7, 'Yoghurt', 'Yoghurt', '2015-08-16 14:56:00', '2015-08-16 14:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE IF NOT EXISTS `submenus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `title`) VALUES
(1, 1, 'Breakfast & Cereal'),
(2, 1, 'Beverage'),
(3, 1, 'Meals, Grains & Pasta'),
(4, 1, 'Dairy & Eggs'),
(5, 1, 'Canned Goods & Soups'),
(6, 1, 'Snacks, Biscuit and Cookies'),
(7, 1, 'Frozen Foods'),
(8, 1, 'Condiment & Spices'),
(9, 1, 'Baking & Cooking'),
(10, 1, 'Sweets & Chocolates'),
(11, 1, 'Fresh Fruits'),
(12, 1, 'Village Market'),
(13, 2, 'Wines & Spirits'),
(14, 2, 'Energy Drinks'),
(15, 2, 'Water & Juice'),
(16, 2, 'Beer'),
(17, 2, 'Soft Drinks & Malt Drinks'),
(18, 2, 'Yoghurt'),
(19, 2, 'Nutrition Drinks & Shakes'),
(20, 3, 'Bath & Skin Care'),
(21, 3, 'Bedding & Decor'),
(22, 3, 'Diapers & Wipes'),
(23, 3, 'Feeding'),
(24, 3, 'Mothercare'),
(25, 3, 'Baby Formular & Baby Food'),
(26, 4, 'Analgesic'),
(27, 4, 'Anti-Malaria'),
(28, 4, 'Cough, Cold & Flu'),
(29, 4, 'Nasal Care'),
(30, 4, 'Oral Care'),
(31, 4, 'Eye Care'),
(32, 4, 'Skin Care'),
(33, 4, 'Contraceptives & Afrodisiacs'),
(34, 4, 'Anti-Biotics');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `subcategory_id`, `title`, `description`, `date_created`, `date_modified`) VALUES
(1, 1, 'Cereal & Crunches', 'Cereal & Crunches', '2015-08-16 17:14:00', '2015-08-16 17:14:00'),
(2, 1, 'Sugar & Sweeteners', 'Sugar & Sweeteners', '2015-08-16 17:17:00', '2015-08-16 17:17:00'),
(3, 1, 'Spreads & Dips', 'Spreads & Dips', '2015-08-16 17:17:00', '2015-08-16 17:17:00'),
(4, 1, 'Milk', 'Milk', '2015-08-16 17:18:00', '2015-08-16 17:18:00'),
(5, 1, 'Bread', 'Bread', '2015-08-16 17:18:00', '2015-08-16 17:18:00'),
(6, 1, 'Honey', 'Honey', '2015-08-16 17:19:00', '2015-08-16 17:19:00'),
(7, 1, 'Custard', 'Custard', '2015-08-16 18:31:00', '2015-08-16 18:31:00'),
(8, 2, 'Tea', 'Tea', '2015-08-20 16:41:00', '2015-08-20 16:41:00'),
(9, 2, 'Coffee', 'Coffee', '2015-08-20 16:45:00', '2015-08-20 16:45:00'),
(10, 2, 'Cocoa', 'Cocoa', '2015-08-20 16:46:00', '2015-08-20 16:46:00'),
(11, 3, 'Eggs', 'Eggs', '2015-08-20 16:48:00', '2015-08-20 16:48:00'),
(12, 3, 'Cheese', 'Cheese', '2015-08-20 16:50:00', '2015-08-20 16:50:00'),
(13, 3, 'Yoghurt', 'Yoghurt', '2015-08-20 16:51:00', '2015-08-20 16:51:00'),
(14, 3, 'Ice Cream', 'Ice Cream', '2015-08-20 16:52:00', '2015-08-20 16:52:00'),
(15, 4, 'Meal', 'Meal', '2015-08-20 21:59:00', '2015-08-20 21:59:00'),
(16, 4, 'Grains', 'Grains', '2015-08-20 21:59:00', '2015-08-20 21:59:00'),
(17, 4, 'Pasta', 'Pasta', '2015-08-20 22:00:00', '2015-08-20 22:00:00'),
(18, 4, 'Macaroni', 'Macaroni', '2015-08-20 22:00:00', '2015-08-20 22:00:00'),
(19, 4, 'Noodles', 'Noodles', '2015-08-20 22:01:00', '2015-08-20 22:01:00'),
(20, 4, 'Bakery', 'Bakery', '2015-08-20 22:01:00', '2015-08-20 22:01:00'),
(21, 5, 'Canned Nuts', 'Canned Nuts', '2015-08-20 22:05:00', '2015-08-20 22:05:00'),
(22, 5, 'Canned Vegetables', 'Canned Vegetables', '2015-08-20 22:06:00', '2015-08-20 22:06:00'),
(23, 5, 'Canned Fruits', 'Canned Fruits', '2015-08-20 22:07:00', '2015-08-20 22:07:00'),
(24, 5, 'Beans & Peas', 'Beans & Peas', '2015-08-20 22:08:00', '2015-08-20 22:08:00'),
(25, 5, 'Fish & Sea Food', 'Fish & Sea Food', '2015-08-20 22:10:00', '2015-08-20 22:10:00'),
(26, 5, 'Meat & Poultry', 'Meat & Poultry', '2015-08-20 22:11:00', '2015-08-20 22:11:00'),
(27, 5, 'Soups & Broths', 'Soups & Broths', '2015-08-20 22:12:00', '2015-08-20 22:12:00'),
(28, 5, 'Canned Chili & Tomato Paste', 'Canned Chili & Tomato Paste', '2015-08-20 22:13:00', '2015-08-20 22:13:00'),
(29, 6, 'Biscuits', 'Biscuits', '2015-08-20 22:14:00', '2015-08-20 22:14:00'),
(30, 6, 'Chips', 'Chips', '2015-08-20 22:21:00', '2015-08-20 22:21:00'),
(31, 6, 'Nuts', 'Nuts', '2015-08-20 22:21:00', '2015-08-20 22:21:00'),
(32, 6, 'Snack Bars', 'Snack Bars', '2015-08-20 22:22:00', '2015-08-20 22:22:00'),
(33, 6, 'Pop Corn', 'Pop Corn', '2015-08-20 22:22:00', '2015-08-20 22:22:00'),
(34, 6, 'Cakes', 'Cakes', '2015-08-20 22:25:00', '2015-08-20 22:25:00'),
(35, 6, 'Fruit Snack', 'Fruit Snack', '2015-08-20 22:26:00', '2015-08-20 22:26:00'),
(36, 6, 'Nigerian Meat Snack', 'Nigerian Meat Snack', '2015-08-20 22:26:00', '2015-08-20 22:26:00'),
(37, 6, 'Pastries', 'Pastries', '2015-08-20 22:27:00', '2015-08-20 22:27:00'),
(38, 7, 'Frozen Chicken', 'Frozen Chicken', '2015-08-20 22:28:00', '2015-08-20 22:28:00'),
(39, 7, 'Frozen Beef/Goat Meat', 'Frozen Beef/Goat Meat', '2015-08-20 22:28:00', '2015-08-20 22:28:00'),
(40, 7, 'Frozen Fish', 'Frozen Fish', '2015-08-20 22:30:00', '2015-08-20 22:30:00'),
(41, 7, 'Frozen Spreads', 'Frozen Spreads', '2015-08-20 22:31:00', '2015-08-20 22:31:00'),
(42, 7, 'Frozen Fruits & Vegetables', 'Frozen Fruits & Vegetables', '2015-08-20 22:31:00', '2015-08-20 22:31:00'),
(43, 7, 'Frozen Sea Food', 'Frozen Sea Food', '2015-08-20 22:32:00', '2015-08-20 22:32:00'),
(44, 8, 'Oils', 'Oils', '2015-08-20 22:33:00', '2015-08-20 22:33:00'),
(45, 8, 'Spice & Seasoning', 'Spice & Seasoning', '2015-08-20 22:34:00', '2015-08-20 22:34:00'),
(46, 8, 'Sauces & Dressing', 'Sauces & Dressing', '2015-08-20 22:34:00', '2015-08-20 22:34:00'),
(47, 8, 'Condiments', 'Condiments', '2015-08-20 22:35:00', '2015-08-20 22:35:00'),
(48, 10, 'Sweets', 'Sweets', '2015-08-20 22:35:00', '2015-08-20 22:35:00'),
(49, 10, 'Chocolates', 'Chocolates', '2015-08-20 22:38:00', '2015-08-20 22:38:00'),
(50, 10, 'Hard Candy & Lolli Pops', 'Hard Candy & Lolli Pops', '2015-08-20 22:39:00', '2015-08-20 22:39:00'),
(51, 10, 'Gums', 'Gums', '2015-08-20 22:40:00', '2015-08-20 22:40:00'),
(52, 10, 'Mints', 'Mints', '2015-08-20 22:40:00', '2015-08-20 22:40:00'),
(53, 10, 'Variety Packs', 'Variety Packs', '2015-08-20 22:41:00', '2015-08-20 22:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `wholesales`
--

CREATE TABLE IF NOT EXISTS `wholesales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `packaging` int(11) NOT NULL,
  `in_stock` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wholesales`
--

INSERT INTO `wholesales` (`id`, `product_id`, `price`, `packaging`, `in_stock`, `date_created`, `date_modified`) VALUES
(1, 4, '3700.00', 12, '1', '2015-08-19 07:44:00', '2015-08-19 07:44:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

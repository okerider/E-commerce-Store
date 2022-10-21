-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2015 at 06:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `city-gold`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feature` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `features_properties`
--

CREATE TABLE IF NOT EXISTS `features_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `property_id`, `image`) VALUES
(1, 1, 'a.jpg'),
(2, 1, 'a_1.jpg'),
(3, 1, 'a_2.jpg'),
(4, 1, 'a_3.jpg'),
(5, 1, 'a_4.jpg'),
(6, 1, 'a_5.jpg'),
(14, 2, 'a_5.jpg'),
(15, 2, 'a_4.jpg'),
(16, 2, 'a_3.jpg'),
(17, 2, 'a_2.jpg'),
(18, 3, 'a_4.jpg'),
(19, 3, 'a_2.jpg'),
(20, 4, 'a_3.jpg'),
(21, 4, 'a_2.jpg'),
(22, 5, 'a_1.jpg'),
(23, 5, 'a_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `property_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `parent_id`, `location`, `property_count`) VALUES
(1, 0, 'Lagos', 0),
(2, 0, 'Ogun', 0),
(3, 1, 'Agege', 0),
(4, 1, 'Ajeromi-Ifelodun', 0),
(5, 1, 'Alimosho', 0),
(6, 1, 'Amuwo-Odofin', 0),
(7, 1, 'Apapa', 0),
(8, 1, 'Badagry', 0),
(9, 1, 'Epe', 0),
(10, 1, 'Eti-Osa', 0),
(11, 1, 'Ibeju-Lekki', 0),
(12, 1, 'Ifako-Ijaiye', 0),
(13, 1, 'Ikeja', 0),
(14, 1, 'Ikorodu', 0),
(15, 1, 'Island', 0),
(16, 1, 'Kosofe', 0),
(17, 1, 'Lagos-Island', 0),
(18, 1, 'Lagos-Mainland', 0),
(19, 1, 'Mushin', 0),
(20, 1, 'Ojo', 0),
(21, 1, 'Oshodi-Isolo', 0),
(22, 1, 'Shomolu', 0),
(23, 1, 'Somolu', 0),
(24, 1, 'Suru-Lere', 0),
(25, 1, 'Yewa-South', 0),
(26, 2, 'Abeokuta-North', 0),
(27, 2, 'Abeokuta-South', 0),
(28, 2, 'Ado-Odo/Ota', 0),
(29, 2, 'Egbado North', 0),
(30, 2, 'Egbado South', 0),
(31, 2, 'Ewekoro', 0),
(32, 2, 'Idarapo', 0),
(33, 2, 'Iffo-Otta', 0),
(34, 2, 'Ifo', 0),
(35, 2, 'Ijebu East', 0),
(36, 2, 'Ijebu North', 0),
(37, 2, 'Ijebu North East', 0),
(38, 2, 'Ijebu Ode', 0),
(39, 2, 'Ikenne', 0),
(40, 2, 'Ilishan Remo', 0),
(41, 2, 'Ilugun-Alaro', 0),
(42, 2, 'Imeko Afon', 0),
(43, 2, 'Ipokia', 0),
(44, 2, 'Lgayekpe', 0),
(45, 2, 'Obafemi-Owode', 0),
(46, 2, 'Odeda', 0),
(47, 2, 'Odogbolu', 0),
(48, 2, 'Ogun Waterside', 0),
(49, 2, 'Remo North', 0),
(50, 2, 'Shagamu', 5),
(51, 2, 'Yewa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `firstname`, `lastname`, `about`) VALUES
(1, 8, 'Okechukwu', 'Ezekiel', '');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `lot-size` int(11) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `address`, `location_id`, `type_id`, `requirement_id`, `price`, `bed`, `bath`, `lot-size`, `description`, `user_id`) VALUES
(1, '45 GRA Road Sabo', 11, 3, 2, 20000, 3, 3, 9500, 'Very nice home with beautiful landscaping. Mature trees and grass lawn in backyard with irrigation system. New redwood fence surrounds backyard. Block masonry fence with ornamental metal surrounds front yard. Home has attached 2 car garage with opener + a detached garage/workshop with its own evaporative cooler. Open concept dining room/living room with fireplace. Screened in back porch. Long concrete driveway on west side of house that leads to workshop is great for RV parking.', 1),
(2, '47, Gra Road Sabo ', 17, 6, 2, 5676, 2, 2, 45643, 'Very nice home with beautiful landscaping. Mature trees and grass lawn in backyard with irrigation system. New redwood fence surrounds backyard. Block masonry fence with ornamental metal surrounds front yard. Home has attached 2 car garage with opener + a detached garage/workshop with its own evaporative cooler. Open concept dining room/living room with fireplace. Screened in back porch. Long concrete driveway on west side of house that leads to workshop is great for RV parking.', 0),
(3, '32, Dele Odule Street', 18, 3, 1, 567890, 2, 2, 45643, 'Very nice home with beautiful landscaping. Mature trees and grass lawn in backyard with irrigation system. New redwood fence surrounds backyard. Block masonry fence with ornamental metal surrounds front yard. Home has attached 2 car garage with opener + a detached garage/workshop with its own evaporative cooler. Open concept dining room/living room with fireplace. Screened in back porch. Long concrete driveway on west side of house that leads to workshop is great for RV parking.', 0),
(4, '12, Akarigbo Ijagba', 17, 3, 2, 567890, 2, 2, 45643, 'Very nice home with beautiful landscaping. Mature trees and grass lawn in backyard with irrigation system. New redwood fence surrounds backyard. Block masonry fence with ornamental metal surrounds front yard. Home has attached 2 car garage with opener + a detached garage/workshop with its own evaporative cooler. Open concept dining room/living room with fireplace. Screened in back porch. Long concrete driveway on west side of house that leads to workshop is great for RV parking.', 0),
(5, '47, Tagogo Street', 11, 3, 1, 567890, 2, 2, 45643, 'Very nice home with beautiful landscaping. Mature trees and grass lawn in backyard with irrigation system. New redwood fence surrounds backyard. Block masonry fence with ornamental metal surrounds front yard. Home has attached 2 car garage with opener + a detached garage/workshop with its own evaporative cooler. Open concept dining room/living room with fireplace. Screened in back porch. Long concrete driveway on west side of house that leads to workshop is great for RV parking.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `requirement` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `requirement`, `created`, `modified`) VALUES
(1, 'Sale', '2015-02-21 00:00:00', '2015-02-21 00:00:00'),
(2, 'Rent', '2015-02-21 00:00:00', '2015-02-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `created`, `modified`) VALUES
(1, 'Lagos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Ogun', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `property_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `property_count`) VALUES
(3, 'Apartment', 4),
(6, 'Detach Duplex', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `approved`, `created`, `modified`) VALUES
(8, 'nne125@yahoo.com', '$2a$10$fVWBwOdlG7snW2vN48eqfOvnXwiUophH2HHdtl3vI.li4nSuwWd5S', '', 0, '2015-05-13 22:16:07', '2015-05-13 22:16:07'),
(10, 'okerider@yahoo.com', '$2a$10$aq2w5IPcXXGs2m33qvbgWOpq6oSuwTMyJWRxy9BvRTiRWMIe7zePm', '', 0, '2015-06-07 20:55:33', '2015-06-07 20:55:33'),
(11, 'okerider@yahoo.com', '$2a$10$pm9CulNaKMVhMBICUdSKP./7BNzj4PYK/Y/zAmc5IeuOvBA6Jc0Qm', '', 0, '2015-06-07 21:00:11', '2015-06-07 21:00:11'),
(12, 'olumide@yahoo.com', '$2a$10$q0sQ123nICCfmcISSCOSd.1E2/CfY7U0u.NqQlpxUsA3/9HchcHSe', '', 0, '2015-06-07 21:01:43', '2015-06-07 21:01:43'),
(13, 'oriyomi@yahoo.com', '$2a$10$cq/GnSvRAGdQvzoLIBw8ie.ET1gMVCs7vYbDja1oiiHh2pLM0Mlgi', '', 0, '2015-06-08 13:36:17', '2015-06-08 13:36:17'),
(14, 'aboki@yahoo.com', '$2a$10$ZNVmv/oIQReyk2d80Ycgdeg4G90FvMCLfhApnJAzyO1OWlpn4Sg1i', '', 0, '2015-06-08 13:50:37', '2015-06-08 13:50:37'),
(15, 'eba@yahoo.com', '$2a$10$Wu3v3gtDkg5IXqmzBtL7iOg2LMGA8aQWDoBCXYMMMikAsitc1jIaO', '', 0, '2015-06-08 13:52:26', '2015-06-08 13:52:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

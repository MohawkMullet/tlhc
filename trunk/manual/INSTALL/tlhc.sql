-- phpMyAdmin SQL Dump
-- version 3.0.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2008 at 04:42 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tlhc`
--

-- --------------------------------------------------------

--
-- Table structure for table `labelComms`
--

CREATE TABLE IF NOT EXISTS `labelComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'value will be the same as the option',
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `labelComms`
--

INSERT INTO `labelComms` (`id`, `value`, `name`) VALUES
(1, 'is fully intact and like new', 'is fully intact and like new'),
(2, ' shows Very light ring wear', ' shows Very light ring wear'),
(3, 'shows Light ring wear', 'shows Light ring wear'),
(4, 'has small paper tear', 'has small paper tear'),
(5, 'shows minimal wear', 'shows minimal wear'),
(6, 'shows price tag stain', 'shows price tag stain'),
(14, 'shows light wear either side', 'shows light wear either side');

-- --------------------------------------------------------

--
-- Table structure for table `miscComms`
--

CREATE TABLE IF NOT EXISTS `miscComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(400) NOT NULL,
  `name` varchar(400) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `miscComms`
--

INSERT INTO `miscComms` (`id`, `value`, `name`) VALUES
(1, '5 song EP', '5 song EP'),
(2, '4 Song EP', '4 Song EP'),
(3, 'Stored in mylar protective clear outer jacket. ', 'Stored in mylar protective clear outer jacket. ');

-- --------------------------------------------------------

--
-- Table structure for table `promoComms`
--

CREATE TABLE IF NOT EXISTS `promoComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL,
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `promoComms`
--

INSERT INTO `promoComms` (`id`, `value`, `name`) VALUES
(1, 'PromotionAL Copy both sides', 'Promotional Copy both sides'),
(2, 'PromotionAL Copy Not For Sale both sides', 'Promotional Copy Not For Sale both sides'),
(3, 'Promotion Copy Not For Sale both sides', 'Promotion Copy Not For Sale both sides'),
(4, 'Demonstration Not For Sale both sides.', 'Demonstration Not For Sale both sides.'),
(5, 'For Radio Station Use Only on both sides.', 'For Radio Station Use Only on both sides.'),
(6, 'Radio Station Copy and Not For Sale both sides.', 'Radio Station Copy and Not For Sale both sides.'),
(7, 'DJ Copy', 'DJ Copy'),
(8, 'DJ Copy both sides.  Plug Side on A', 'DJ Copy both sides.  Plug Side on A'),
(9, 'Not For Resale and Radio Station Copy both sides.', 'Not For Resale and Radio Station Copy both sides.'),
(10, 'Not For Sale on both sides with PLUG SIDE on A.', 'Not For Sale on both sides with PLUG SIDE on A.'),
(11, 'Promotion Not For Sale', 'Promotion Not For Sale'),
(12, 'Special Rush Service', 'Special Rush Service'),
(13, 'Promotion Record and Not For Sale both sides', 'Promotion Record and Not For Sale both  sides'),
(19, 'For Promotion Only and Not For Sale both sides', 'For Promotion Only and Not For Sale both sides'),
(18, 'Promo Copy and Not for Sale both sides', 'Promo Copy and Not for Sale both sides'),
(20, 'Plug Side on A', 'Plug Side on A');

-- --------------------------------------------------------

--
-- Table structure for table `vinylComms`
--

CREATE TABLE IF NOT EXISTS `vinylComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'this is the value of the select form element',
  `name` varchar(200) default NULL COMMENT 'this is the name of the form element',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='comments about the vinyl condition' AUTO_INCREMENT=76 ;

--
-- Dumping data for table `vinylComms`
--

INSERT INTO `vinylComms` (`id`, `value`, `name`) VALUES
(10, 'Vinyl is in Perfect condition. Probably Never Been Played', 'Perfect condition. Probably Never Been Played'),
(20, 'This vinyl is in excellent condition', 'This vinyl is in excellent condition'),
(30, 'Very light wear on vinyl', 'Very light wear on vinyl'),
(40, 'vinyl shows Very light wear either side', 'vinyl shows Very light wear either side'),
(52, 'vinyl shows light wear either side', 'vinyl shows light wear either side'),
(60, 'vinyl shows light scuffs and wear either side', 'vinyl shows light scuffs and wear either side'),
(53, 'vinyl is in very good condition', 'vinyl is in very good condition'),
(41, 'A few very light marks on either side.  Does not affect play. ', 'A few very light marks on either side.  Does not affect play. '),
(39, 'vinyl shows a few very light marks', 'vinyl shows a few very light marks'),
(21, 'vinyl is in very nice condition', 'vinyl is in very nice condition'),
(61, 'plays without problems', 'plays without problems'),
(75, 'colored vinyl', 'colored vinyl'),
(74, 'vinyl color: black', 'vinyl color: black');

-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2008 at 03:26 AM
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
-- Table structure for table `commsLabel`
--

CREATE TABLE IF NOT EXISTS `commsLabel` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'value will be the same as the option',
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=119 ;

--
-- Dumping data for table `commsLabel`
--

INSERT INTO `commsLabel` (`id`, `value`, `name`) VALUES
(1, 'is fully intact and like new', 'is fully intact and like new'),
(2, ' shows Very light ring wear', ' shows Very light ring wear'),
(3, 'shows Light ring wear', 'shows Light ring wear'),
(4, 'has small paper tear', 'has small paper tear'),
(5, 'shows minimal wear', 'shows minimal wear'),
(6, 'shows price tag stain', 'shows price tag stain'),
(14, 'shows light wear either side', 'shows light wear either side'),
(101, 'has writing on one side', 'has writing on one side');

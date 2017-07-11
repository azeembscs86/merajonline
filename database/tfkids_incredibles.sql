-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 08:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tfkids_incredibles`
--
CREATE DATABASE IF NOT EXISTS `tfkids_incredibles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tfkids_incredibles`;

-- --------------------------------------------------------

--
-- Table structure for table `incredibles_admin`
--

DROP TABLE IF EXISTS `incredibles_admin`;
CREATE TABLE IF NOT EXISTS `incredibles_admin` (
  `user_id` int(22) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `secretequestion` varchar(100) NOT NULL,
  `secreteanswer` varchar(100) NOT NULL,
  `verificationcode` varchar(100) NOT NULL,
  `createdAt` date NOT NULL,
  `updateAt` date NOT NULL,
  `userRole` varchar(100) NOT NULL,
  `isactive` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `incredibles_admin`
--

INSERT INTO `incredibles_admin` (`user_id`, `email`, `password`, `fullname`, `secretequestion`, `secreteanswer`, `verificationcode`, `createdAt`, `updateAt`, `userRole`, `isactive`, `description`) VALUES
(1, 'admin@theincredibles.com', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', 'what is our first school name', 'PAF-Kiets', 'bcdf90ab7890npqr234578901234abcd', '2015-08-19', '2015-08-19', 'admin', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `incre_products`
--

DROP TABLE IF EXISTS `incre_products`;
CREATE TABLE IF NOT EXISTS `incre_products` (
  `catogry_id` int(22) NOT NULL,
  `product_id` int(22) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(22) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_gender` varchar(5) NOT NULL,
  `product_quantity` int(22) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `prduct_description` text NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) NOT NULL,
  `isFeatured` varchar(3) NOT NULL,
  `product_seo_name` varchar(100) NOT NULL,
  `product_type_title` varchar(100) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `incre_products_sizes`
--

DROP TABLE IF EXISTS `incre_products_sizes`;
CREATE TABLE IF NOT EXISTS `incre_products_sizes` (
  `product_id` int(22) NOT NULL,
  `product_size_id` int(22) NOT NULL AUTO_INCREMENT,
  `product_size_name` varchar(100) NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`product_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `incre_product_colors`
--

DROP TABLE IF EXISTS `incre_product_colors`;
CREATE TABLE IF NOT EXISTS `incre_product_colors` (
  `product_id` int(22) NOT NULL,
  `product_color_id` int(22) NOT NULL AUTO_INCREMENT,
  `product_color_name` varchar(100) NOT NULL,
  `product_color_image` varchar(100) NOT NULL,
  `product_color_display_image` varchar(100) NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) NOT NULL DEFAULT 'yes',
  `product_color_description` text NOT NULL,
  PRIMARY KEY (`product_color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_catogries`
--

DROP TABLE IF EXISTS `product_catogries`;
CREATE TABLE IF NOT EXISTS `product_catogries` (
  `catogry_id` int(22) NOT NULL AUTO_INCREMENT,
  `catogery_name` varchar(100) NOT NULL,
  `catogery_description` text NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) NOT NULL,
  `clothing_seo_name` varchar(100) NOT NULL,
  `clothing_type_title` varchar(100) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  PRIMARY KEY (`catogry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

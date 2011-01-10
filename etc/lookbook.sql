-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2011 at 03:01 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lookbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `to_user_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` VALUES('4d2b64bb-f9b0-41ef-8c1e-8ee54b856ce9', '4d2b57dd-0140-445c-b465-8f6d4b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '2011-01-10 14:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` char(36) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` VALUES(2, '4d2a01d2-d420-49bc-847c-58734b856ce9', 'http://scene7.zumiez.com/is/image/zumiez/168408-0022-front?$product_detail$', 'Free World Boys Messenger Twill Pant', '$29.95', '2011-01-09 13:54:41');
INSERT INTO `items` VALUES(3, '4d2a01d2-d420-49bc-847c-58734b856ce9', 'http://scene7.zumiez.com/is/image/zumiez/163448-0097-front?$product_detail$', 'Zine Pulley Heather Grey Hoodie', '$29.95', '2011-01-09 21:05:46');
INSERT INTO `items` VALUES(4, '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', 'http://s7d3.scene7.com/is/image/ShopTommy/CT31526578_100_FNT?wid=388&amp;hei=388&amp;fmt=jpeg&amp;qlt=100,0&amp;op_sharpen=1&amp;resMode=trilin&amp;op_usm=0.8,1.0,6,0&amp;iccEmbed=0', 'Argyle Graphic Tee', '$15.00', '2011-01-10 09:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(36) DEFAULT NULL,
  `facebook_id` varchar(55) DEFAULT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `password` char(55) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES('4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', 'dubmediagroup@gmail.com', 'thekenwheeler', '528985009', 'Ken', 'Wheeler', '57f594ed3d2490c088bcf31a2d3285ab5bd9353a', '2011-01-10 01:24:13', '2011-01-10 01:24:13');
INSERT INTO `users` VALUES('4d2b57dd-0140-445c-b465-8f6d4b856ce9', 'lindseycorby@gmail.com', 'lindseycorby', NULL, '', '', '115ab5cebf896e6a071c0dfa52b7f504ea33c562', '2011-01-10 14:02:53', '2011-01-10 14:02:53');

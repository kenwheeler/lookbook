-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2011 at 04:19 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lookbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` VALUES('4d35fbca-5814-4e5f-a3bd-490d4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d35e298-0b24-488c-9c7f-44914b856ce9', '0000-00-00 00:00:00');
INSERT INTO `users_products` VALUES('4d35fcb3-9218-4479-a3b9-47554b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d35fcb2-f7f4-4b07-abdb-40c44b856ce9', '0000-00-00 00:00:00');
INSERT INTO `users_products` VALUES('4d36034d-d680-4600-b6d8-4f9d4b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d35e298-0b24-488c-9c7f-44914b856ce9', '0000-00-00 00:00:00');
INSERT INTO `users_products` VALUES('4d360379-4268-46a9-978e-46e64b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d35dfd7-7c68-4e77-b00b-43bb4b856ce9', '0000-00-00 00:00:00');
INSERT INTO `users_products` VALUES('4d3603d4-3b50-4001-84a5-48084b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d35c6ef-cedc-403a-bd22-47e04b856ce9', '2011-01-18 16:19:16');

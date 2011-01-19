-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2011 at 07:39 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lookbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` char(36) NOT NULL DEFAULT '0',
  `user_id` char(36) NOT NULL,
  `collection_name` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` VALUES('4d2f446f-363c-4aeb-a4b0-fb7c4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'asdf', '2011-01-13 13:29:03');

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
INSERT INTO `friends` VALUES('4d2b93a3-4548-4bd6-8c8f-90b14b856ce9', '4d2b9398-c4b4-48a1-ade5-90b14b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '2011-01-10 18:17:55');
INSERT INTO `friends` VALUES('4d2b93bd-3b44-43d4-babc-90b14b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '4d2b9398-c4b4-48a1-ade5-90b14b856ce9', '2011-01-10 18:18:21');
INSERT INTO `friends` VALUES('4d2c6d4c-ac70-4556-ab8a-94c34b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '2011-01-11 09:46:36');
INSERT INTO `friends` VALUES('4d2c6d65-f88c-4deb-96ad-94c34b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '2011-01-11 09:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `thumb_url` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` VALUES('4d35c6c4-3c20-4ed5-bdcf-4c5c4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35c6c4-3c20-4ed5-bdcf-4c5c4b856ce9.jpeg', 'Slim Fit Tommy Knit Polo', '$34.99', 'img/uploads/4d35c6c4-3c20-4ed5-bdcf-4c5c4b856ce9_thumb.jpeg', '2011-01-18 11:58:45');
INSERT INTO `products` VALUES('4d35c6ef-cedc-403a-bd22-47e04b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35c6ef-cedc-403a-bd22-47e04b856ce9.jpeg', 'Midtown Blue Relaxed Jean', '$69.99', 'img/uploads/4d35c6ef-cedc-403a-bd22-47e04b856ce9_thumb.jpeg', '2011-01-18 11:59:28');
INSERT INTO `products` VALUES('4d35c7a7-a670-4c2a-95f3-4acf4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35c7a7-a670-4c2a-95f3-4acf4b856ce9.jpeg', 'Clark Plain-Front Patchwork Madras Pants', '$112.99', 'img/uploads/4d35c7a7-a670-4c2a-95f3-4acf4b856ce9_thumb.jpeg', '2011-01-18 12:02:35');
INSERT INTO `products` VALUES('4d35c803-19ac-443a-ace2-492f4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35c803-19ac-443a-ace2-492f4b856ce9.jpeg', 'Akai MPC5000 Music Production Center', '$1,999.00', 'img/uploads/4d35c803-19ac-443a-ace2-492f4b856ce9_thumb.jpeg', '2011-01-18 12:04:03');
INSERT INTO `products` VALUES('4d35d5de-10cc-4973-9385-40ea4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35d5de-10cc-4973-9385-40ea4b856ce9.jpeg', 'Check Western Fit Shirt', '$68.00', 'img/uploads/4d35d5de-10cc-4973-9385-40ea4b856ce9_thumb.jpeg', '2011-01-18 13:03:11');
INSERT INTO `products` VALUES('4d35dbcb-8abc-469f-b70c-41c34b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35dbcb-8abc-469f-b70c-41c34b856ce9.jpeg', 'Thick Woven Shirt', '$26.90', 'img/uploads/4d35dbcb-8abc-469f-b70c-41c34b856ce9_thumb.jpeg', '2011-01-18 13:28:32');
INSERT INTO `products` VALUES('4d35d9fe-3224-4170-aba8-4b1f4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35d9fe-3224-4170-aba8-4b1f4b856ce9.jpeg', 'Embroidered Peasant Dress', 'Embroidered Peasant Dress$29.80', 'img/uploads/4d35d9fe-3224-4170-aba8-4b1f4b856ce9_thumb.jpeg', '2011-01-18 13:20:46');
INSERT INTO `products` VALUES('4d35d961-4410-4e4b-bed5-40c84b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35d961-4410-4e4b-bed5-40c84b856ce9.jpeg', 'Electric Tonette Sunglasses', '$70.00', 'img/uploads/4d35d961-4410-4e4b-bed5-40c84b856ce9_thumb.jpeg', '2011-01-18 13:18:10');
INSERT INTO `products` VALUES('4d35dfd7-7c68-4e77-b00b-43bb4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35dfd7-7c68-4e77-b00b-43bb4b856ce9.jpeg', 'Gingham Button Up Top', '$22.90', 'img/uploads/4d35dfd7-7c68-4e77-b00b-43bb4b856ce9_thumb.jpeg', '2011-01-18 13:45:43');
INSERT INTO `products` VALUES('4d35e004-4570-4961-a69b-4bae4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35e004-4570-4961-a69b-4bae4b856ce9.jpeg', 'Thick Woven Shirt', '$26.90', 'img/uploads/4d35e004-4570-4961-a69b-4bae4b856ce9_thumb.jpeg', '2011-01-18 13:46:33');
INSERT INTO `products` VALUES('4d35e298-0b24-488c-9c7f-44914b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35e298-0b24-488c-9c7f-44914b856ce9.jpeg', 'Thick Woven Shirt', '$26.90', 'img/uploads/4d35e298-0b24-488c-9c7f-44914b856ce9_thumb.jpeg', '2011-01-18 13:57:28');
INSERT INTO `products` VALUES('4d35fcb2-f7f4-4b07-abdb-40c44b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d35fcb2-f7f4-4b07-abdb-40c44b856ce9.jpeg', 'East Village Check Shirt', '$69.99', 'img/uploads/4d35fcb2-f7f4-4b07-abdb-40c44b856ce9_thumb.jpeg', '2011-01-18 15:48:51');

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

INSERT INTO `users` VALUES('4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'dubmediagroup@gmail.com', 'thekenwheeler', '528985009', 'Ken', 'Wheeler', '57f594ed3d2490c088bcf31a2d3285ab5bd9353a', '2011-01-11 09:45:20', '2011-01-11 13:12:23');
INSERT INTO `users` VALUES('4d2c6d38-95a8-432a-b053-9aaa4b856ce9', 'lindseycorby@gmail.com', 'lindseycorby', NULL, 'Lindsey', 'Corby', '115ab5cebf896e6a071c0dfa52b7f504ea33c562', '2011-01-11 09:46:16', '2011-01-11 11:37:00');

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

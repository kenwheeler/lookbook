-- phpMyAdmin SQL Dump
-- version 2.11.11.1
-- http://www.phpmyadmin.net
--
-- Host: mysql50-92.wc1:3306
-- Generation Time: Jan 21, 2011 at 02:33 PM
-- Server version: 5.0.77
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `373706_mhsandbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` char(36) NOT NULL default '0',
  `user_id` char(36) NOT NULL,
  `collection_name` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `user_id`, `collection_name`, `created_at`) VALUES
('4d2f446f-363c-4aeb-a4b0-fb7c4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'asdf', '2011-01-13 13:29:03'),
('4d39e313-089c-4839-81cb-7953ac111340', '4d389448-6e08-4ccb-af71-47e5c0a80180', 'Crazy Music Stuff', '2011-01-21 13:48:35'),
('4d39e38d-7ab8-491e-a8f6-39f9ac111341', '4d39e316-1600-4758-95c4-2be5ac111341', 'Stuff that goes together 1', '2011-01-21 13:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `to_user_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `to_user_id`, `created_at`) VALUES
('4d2b64bb-f9b0-41ef-8c1e-8ee54b856ce9', '4d2b57dd-0140-445c-b465-8f6d4b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '2011-01-10 14:57:47'),
('4d2b93a3-4548-4bd6-8c8f-90b14b856ce9', '4d2b9398-c4b4-48a1-ade5-90b14b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '2011-01-10 18:17:55'),
('4d2b93bd-3b44-43d4-babc-90b14b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '4d2b9398-c4b4-48a1-ade5-90b14b856ce9', '2011-01-10 18:18:21'),
('4d2c6d4c-ac70-4556-ab8a-94c34b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '2011-01-11 09:46:36'),
('4d2c6d65-f88c-4deb-96ad-94c34b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '2011-01-11 09:47:01'),
('4d39b506-3b30-446e-9b0f-4a0b4b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '2011-01-21 11:32:06'),
('4d39b88b-f38c-4262-bf5c-4c074b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '2011-01-21 11:47:07'),
('4d39e083-bb98-451f-a326-7116ac11133d', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '2011-01-21 13:37:39'),
('4d39e338-debc-423c-ab8f-7c48ac111340', '4d389448-6e08-4ccb-af71-47e5c0a80180', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '2011-01-21 13:49:12'),
('4d39eade-bb5c-4fda-949a-030aac11133d', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d389448-6e08-4ccb-af71-47e5c0a80180', '2011-01-21 14:21:50'),
('4d39eae9-73b4-4260-9e4e-0408ac11133d', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39e316-1600-4758-95c4-2be5ac111341', '2011-01-21 14:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_url` varchar(250) NOT NULL,
  `thumb_url` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product_image`, `product_name`, `product_price`, `product_url`, `thumb_url`, `created_at`) VALUES
('4d39b25e-181c-4ff0-89ae-46a14b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39b25e-181c-4ff0-89ae-46a14b856ce9.jpeg', 'Akai MPC2500 Music Production Center', '$1,561.25', 'http://www.djtoys.com/mpc2500-akai-dj-gear.html', 'img/uploads/4d39b25e-181c-4ff0-89ae-46a14b856ce9_thumb.jpeg', '2011-01-21 11:20:51'),
('4d39b371-825c-4afd-b703-45094b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39b371-825c-4afd-b703-45094b856ce9.jpeg', 'That&#039;s What She Said', '$19.95', 'http://www.snorgtees.com/that-s-what-she-said', 'img/uploads/4d39b371-825c-4afd-b703-45094b856ce9_thumb.jpeg', '2011-01-21 11:25:22'),
('4d39b3e6-844c-43f6-88ef-49e14b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39b3e6-844c-43f6-88ef-49e14b856ce9.jpeg', 'iPad Bluetooth Keyboard Case', '$59.99', 'http://www.thinkgeek.com/computing/keyboards-mice/e65a/?pfm=Carousel_iPad_Keyboard_Case_4', 'img/uploads/4d39b3e6-844c-43f6-88ef-49e14b856ce9_thumb.jpeg', '2011-01-21 11:27:18'),
('4d39b40f-4ba8-4540-bb71-477d4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39b40f-4ba8-4540-bb71-477d4b856ce9.jpeg', 'Whiskey Stones', '$19.99', 'http://www.thinkgeek.com/homeoffice/kitchen/ba37/', 'img/uploads/4d39b40f-4ba8-4540-bb71-477d4b856ce9_thumb.jpeg', '2011-01-21 11:28:00'),
('4d39b49f-2fe0-45d0-aebe-40e84b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39b49f-2fe0-45d0-aebe-40e84b856ce9.jpeg', 'Vestax VCI100 USB MIDI DJ Controller', '$499.00', 'http://www.zzounds.com/item--VESVCI100', 'img/uploads/4d39b49f-2fe0-45d0-aebe-40e84b856ce9_thumb.jpeg', '2011-01-21 11:30:28'),
('4d39b541-ce90-49d0-8fbf-4cef4b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', 'img/uploads/4d39b541-ce90-49d0-8fbf-4cef4b856ce9.jpeg', 'WeSC Miles Red Flannel', '$59.95', 'http://www.zumiez.com/catalog/product/view/id/153466/category/1129/', 'img/uploads/4d39b541-ce90-49d0-8fbf-4cef4b856ce9_thumb.jpeg', '2011-01-21 11:33:05'),
('4d39b58e-aa68-4b76-9138-00844b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', 'img/uploads/4d39b58e-aa68-4b76-9138-00844b856ce9.jpeg', 'Volcom Enowen White On Black Wash Denim', '$64.95', 'http://www.zumiez.com/guys/jeans-pants/volcom-enowen-white-on-black-wash-denim.html', 'img/uploads/4d39b58e-aa68-4b76-9138-00844b856ce9_thumb.jpeg', '2011-01-21 11:34:23'),
('4d39b5d6-b7d8-49c8-9d6b-45744b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', 'img/uploads/4d39b5d6-b7d8-49c8-9d6b-45744b856ce9.jpeg', 'DVS Militia Tan Boot', '$84.95', 'http://www.zumiez.com/catalog/product/view/id/154127/category/2120/', 'img/uploads/4d39b5d6-b7d8-49c8-9d6b-45744b856ce9_thumb.jpeg', '2011-01-21 11:35:35'),
('4d39b60f-72f4-4e61-894b-44634b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', 'img/uploads/4d39b60f-72f4-4e61-894b-44634b856ce9.jpeg', 'Cliche Bomb Hill Complete  7.9 x 31.5', '$104.99', 'http://www.skatewarehouse.com/Cliche_Bomb_Hill_Complete_/descpage-CLBHCMP.html', 'img/uploads/4d39b60f-72f4-4e61-894b-44634b856ce9_thumb.jpeg', '2011-01-21 11:36:37'),
('4d39b650-451c-4dc0-a221-44524b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', 'img/uploads/4d39b650-451c-4dc0-a221-44524b856ce9.jpeg', 'Twelve South BookArc Desktop Stand for Notebooks', '$49.95', 'http://store.apple.com/us/product/TW852LL/A?fnode=MTY1NDA2Nw&amp;mco=MTM3OTUwMDE', 'img/uploads/4d39b650-451c-4dc0-a221-44524b856ce9_thumb.jpeg', '2011-01-21 11:37:40'),
('4d39b760-8c34-4fed-b95e-00df4b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', 'img/uploads/4d39b760-8c34-4fed-b95e-00df4b856ce9.jpeg', 'Embellished Capsleeve Dress', '$22.80', 'http://www.forever21.com/product.asp?catalog_name=FOREVER21&amp;category_name=whatsnew_app_dresses&amp;product_id=2081696355&amp;Page=1', 'img/uploads/4d39b760-8c34-4fed-b95e-00df4b856ce9_thumb.jpeg', '2011-01-21 11:42:09'),
('4d39b77d-206c-4972-a17f-4cc84b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', 'img/uploads/4d39b77d-206c-4972-a17f-4cc84b856ce9.jpeg', 'Canvas Slingback Corked Heels', '$24.80', 'http://www.forever21.com/product.asp?catalog_name=FOREVER21&amp;category_name=whatsnew_shoes&amp;product_id=2000006410&amp;Page=1', 'img/uploads/4d39b77d-206c-4972-a17f-4cc84b856ce9_thumb.jpeg', '2011-01-21 11:42:41'),
('4d39b7f3-9a98-483f-ad12-45264b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39b7f3-9a98-483f-ad12-45264b856ce9.jpeg', 'IKEA STOCKHOLM', '$199.00', 'http://www.ikea.com/us/en/catalog/products/20138134', 'img/uploads/4d39b7f3-9a98-483f-ad12-45264b856ce9_thumb.jpeg', '2011-01-21 11:44:40'),
('4d39db9f-86f4-4551-bad2-76efac11133d', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'img/uploads/4d39db9f-86f4-4551-bad2-76efac11133d.jpeg', 'DC Cap Star Black Hat', '$24.95', 'http://www.zumiez.com/dc-cap-star-black-hat.html', 'img/uploads/4d39db9f-86f4-4551-bad2-76efac11133d_thumb.jpeg', '2011-01-21 13:16:47'),
('4d39e2e6-f218-45c2-a3c9-75b8ac111340', '4d389448-6e08-4ccb-af71-47e5c0a80180', 'img/uploads/4d39e2e6-f218-45c2-a3c9-75b8ac111340.jpeg', 'arc details', 'arc four: $800', 'http://monome.org/articles/2011/01/21/arc-details/', 'img/uploads/4d39e2e6-f218-45c2-a3c9-75b8ac111340_thumb.jpeg', '2011-01-21 13:47:50'),
('4d39e42f-5c04-4f8d-b640-4cb7ac111341', '4d39e316-1600-4758-95c4-2be5ac111341', 'img/uploads/4d39e42f-5c04-4f8d-b640-4cb7ac111341.jpeg', 'Vi.ebaydesc', '$500', 'http://svpply.com/item/248461/Vi.ebaydesc', 'img/uploads/4d39e42f-5c04-4f8d-b640-4cb7ac111341_thumb.jpeg', '2011-01-21 13:53:20'),
('4d39e5dd-c304-4d10-8086-7aa6ac111341', '4d39e316-1600-4758-95c4-2be5ac111341', 'img/uploads/4d39e5dd-c304-4d10-8086-7aa6ac111341.jpeg', 'Edsal Citadel Series Three-Wide Double-Tier Ventilated Lockers', '$500', 'http://svpply.com/item/246681/Edsal_Citadel_Series_ThreeWide', 'img/uploads/4d39e5dd-c304-4d10-8086-7aa6ac111341_thumb.jpeg', '2011-01-21 14:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(36) default NULL,
  `facebook_id` varchar(55) default NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `password` char(55) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_address`, `username`, `facebook_id`, `first_name`, `last_name`, `password`, `created`, `modified`) VALUES
('4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'dubmediagroup@gmail.com', 'thekenwheeler', '528985009', 'Ken', 'Wheeler', '57f594ed3d2490c088bcf31a2d3285ab5bd9353a', '2011-01-11 09:45:20', '2011-01-11 13:12:23'),
('4d2c6d38-95a8-432a-b053-9aaa4b856ce9', 'lindseycorby@gmail.com', 'lindseycorby', NULL, 'Lindsey', 'Corby', '115ab5cebf896e6a071c0dfa52b7f504ea33c562', '2011-01-11 09:46:16', '2011-01-11 11:37:00'),
('4d389448-6e08-4ccb-af71-47e5c0a80180', 'me@jpsykes.com', 'jpsykes', NULL, '', '', 'a8fd372b9b905e952a1f7aedcfd5e710d7f1e94e', '2011-01-20 15:00:08', '2011-01-20 15:00:08'),
('4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', 'ken@dubmediagroup.com', 'kdubbicles', NULL, '', '', 'c8fac1106a3f133170017c5504286b94ba1b2d5a', '2011-01-21 11:31:38', '2011-01-21 11:31:38'),
('4d39e316-1600-4758-95c4-2be5ac111341', 'gregokeeffe@gmail.com', 'maximumgreg', NULL, '', '', 'c41e40d8fb9af98f68131ff2ee22857a2f4f4fb1', '2011-01-21 13:48:38', '2011-01-21 13:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE IF NOT EXISTS `users_products` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `created_at`) VALUES
('4d39b263-2e28-4806-a790-443e4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b25e-181c-4ff0-89ae-46a14b856ce9', '2011-01-21 11:20:51'),
('4d39b372-0868-4a01-a915-4cde4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b371-825c-4afd-b703-45094b856ce9', '2011-01-21 11:25:22'),
('4d39b3e6-be78-466c-a7df-41654b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b3e6-844c-43f6-88ef-49e14b856ce9', '2011-01-21 11:27:18'),
('4d39b410-d8c0-4db3-b9c7-42374b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b40f-4ba8-4540-bb71-477d4b856ce9', '2011-01-21 11:28:00'),
('4d39b4a4-0610-435f-823f-44c34b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b49f-2fe0-45d0-aebe-40e84b856ce9', '2011-01-21 11:30:28'),
('4d39b4f5-91d4-4148-a3aa-42524b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d39b40f-4ba8-4540-bb71-477d4b856ce9', '2011-01-21 11:31:49'),
('4d39b541-6ce8-479f-9064-4ac94b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d39b541-ce90-49d0-8fbf-4cef4b856ce9', '2011-01-21 11:33:05'),
('4d39b58f-3bd0-4913-b6ed-00844b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d39b58e-aa68-4b76-9138-00844b856ce9', '2011-01-21 11:34:23'),
('4d39b5d7-79dc-462a-9170-4e7b4b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d39b5d6-b7d8-49c8-9d6b-45744b856ce9', '2011-01-21 11:35:35'),
('4d39b615-3d18-4767-839f-4e334b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d39b60f-72f4-4e61-894b-44634b856ce9', '2011-01-21 11:36:37'),
('4d39b654-a474-467d-b110-42d24b856ce9', '4d39b4ea-bbb8-4490-b702-4a9e4b856ce9', '4d39b650-451c-4dc0-a221-44524b856ce9', '2011-01-21 11:37:40'),
('4d39e2e6-6aa8-4387-818b-75b8ac111340', '4d389448-6e08-4ccb-af71-47e5c0a80180', '4d39e2e6-f218-45c2-a3c9-75b8ac111340', '2011-01-21 13:47:50'),
('4d39b761-3fe0-4852-835e-00df4b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d39b760-8c34-4fed-b95e-00df4b856ce9', '2011-01-21 11:42:09'),
('4d39b781-a56c-4a3e-bdf7-46444b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d39b77d-206c-4972-a17f-4cc84b856ce9', '2011-01-21 11:42:41'),
('4d39b7f8-76c8-427f-bca4-41d24b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d39b7f3-9a98-483f-ad12-45264b856ce9', '2011-01-21 11:44:40'),
('4d39e34e-8480-4164-8a80-32aaac111341', '4d39e316-1600-4758-95c4-2be5ac111341', '4d39e2e6-f218-45c2-a3c9-75b8ac111340', '2011-01-21 13:49:34'),
('4d39c23f-3660-4af1-819f-07ea4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39b58e-aa68-4b76-9138-00844b856ce9', '2011-01-21 12:28:31'),
('4d39db9f-890c-4d40-bac7-76efac11133d', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d39db9f-86f4-4551-bad2-76efac11133d', '2011-01-21 13:16:47'),
('4d39e365-5de8-4b79-8b1c-355bac111341', '4d39e316-1600-4758-95c4-2be5ac111341', '4d39b541-ce90-49d0-8fbf-4cef4b856ce9', '2011-01-21 13:49:57'),
('4d39e430-d52c-4d97-8a10-4cb7ac111341', '4d39e316-1600-4758-95c4-2be5ac111341', '4d39e42f-5c04-4f8d-b640-4cb7ac111341', '2011-01-21 13:53:20'),
('4d39e5df-41f4-4c56-ac9a-7aa6ac111341', '4d39e316-1600-4758-95c4-2be5ac111341', '4d39e5dd-c304-4d10-8086-7aa6ac111341', '2011-01-21 14:00:31');

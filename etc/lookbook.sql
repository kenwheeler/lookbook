# Sequel Pro dump
# Version 1191
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.1.44)
# Database: lookbook
# Generation Time: 2011-01-11 00:15:39 -0500
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table collections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `collections`;

CREATE TABLE `collections` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `friends`;

CREATE TABLE `friends` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `to_user_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` (`id`,`user_id`,`to_user_id`,`created_at`)
VALUES
	('4d2b64bb-f9b0-41ef-8c1e-8ee54b856ce9','4d2b57dd-0140-445c-b465-8f6d4b856ce9','4d2aa60c-0c1c-4a59-9d85-4d534b856ce9','2011-01-10 14:57:47'),
	('4d2b93a3-4548-4bd6-8c8f-90b14b856ce9','4d2b9398-c4b4-48a1-ade5-90b14b856ce9','4d2aa60c-0c1c-4a59-9d85-4d534b856ce9','2011-01-10 18:17:55'),
	('4d2b93bd-3b44-43d4-babc-90b14b856ce9','4d2aa60c-0c1c-4a59-9d85-4d534b856ce9','4d2b9398-c4b4-48a1-ade5-90b14b856ce9','2011-01-10 18:18:21');

/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` char(36) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`,`user_id`,`product_image`,`product_name`,`product_price`,`created_at`)
VALUES
	(2,'4d2a01d2-d420-49bc-847c-58734b856ce9','http://scene7.zumiez.com/is/image/zumiez/168408-0022-front?$product_detail$','Free World Boys Messenger Twill Pant','$29.95','2011-01-09 13:54:41'),
	(3,'4d2a01d2-d420-49bc-847c-58734b856ce9','http://scene7.zumiez.com/is/image/zumiez/163448-0097-front?$product_detail$','Zine Pulley Heather Grey Hoodie','$29.95','2011-01-09 21:05:46'),
	(4,'4d2aa60c-0c1c-4a59-9d85-4d534b856ce9','http://scene7.zumiez.com/is/image/zumiez/176552-0007-front?$product_detail$','Deathwish Addict Ellington 8.12 Skate Deck','$51.95','2011-01-10 08:08:38'),
	(5,'4d2aa60c-0c1c-4a59-9d85-4d534b856ce9','http://s7d3.scene7.com/is/image/ShopTommy/AW81781031_961_FNT?wid=388&amp;hei=388&amp;fmt=jpeg&amp;qlt=100,0&amp;op_sharpen=1&amp;resMode=trilin&amp;op_usm=0.8,1.0,6,0&amp;iccEmbed=0','Red Croc Embossed Leather Strap Watch','$95.00','2011-01-10 21:01:06');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

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

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`email_address`,`username`,`facebook_id`,`first_name`,`last_name`,`password`,`created`,`modified`)
VALUES
	('','',NULL,'528985009','','','','2011-01-10 22:56:40','2011-01-10 22:56:40');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

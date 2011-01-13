SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `collections` (
  `id` char(36) NOT NULL DEFAULT '0',
  `user_id` char(36) NOT NULL,
  `collection_name` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `collections` VALUES('4d2f446f-363c-4aeb-a4b0-fb7c4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'asdf', '2011-01-13 13:29:03');

CREATE TABLE `friends` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `to_user_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `friends` VALUES('4d2b64bb-f9b0-41ef-8c1e-8ee54b856ce9', '4d2b57dd-0140-445c-b465-8f6d4b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '2011-01-10 14:57:47');
INSERT INTO `friends` VALUES('4d2b93a3-4548-4bd6-8c8f-90b14b856ce9', '4d2b9398-c4b4-48a1-ade5-90b14b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '2011-01-10 18:17:55');
INSERT INTO `friends` VALUES('4d2b93bd-3b44-43d4-babc-90b14b856ce9', '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', '4d2b9398-c4b4-48a1-ade5-90b14b856ce9', '2011-01-10 18:18:21');
INSERT INTO `friends` VALUES('4d2c6d4c-ac70-4556-ab8a-94c34b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '2011-01-11 09:46:36');
INSERT INTO `friends` VALUES('4d2c6d65-f88c-4deb-96ad-94c34b856ce9', '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', '4d2c6d38-95a8-432a-b053-9aaa4b856ce9', '2011-01-11 09:47:01');

CREATE TABLE `products` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` char(36) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

INSERT INTO `products` VALUES(2, '4d2a01d2-d420-49bc-847c-58734b856ce9', 'http://scene7.zumiez.com/is/image/zumiez/168408-0022-front?$product_detail$', 'Free World Boys Messenger Twill Pant', '$29.95', '2011-01-09 13:54:41');
INSERT INTO `products` VALUES(3, '4d2a01d2-d420-49bc-847c-58734b856ce9', 'http://scene7.zumiez.com/is/image/zumiez/163448-0097-front?$product_detail$', 'Zine Pulley Heather Grey Hoodie', '$29.95', '2011-01-09 21:05:46');
INSERT INTO `products` VALUES(4, '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', 'http://scene7.zumiez.com/is/image/zumiez/176552-0007-front?$product_detail$', 'Deathwish Addict Ellington 8.12 Skate Deck', '$51.95', '2011-01-10 08:08:38');
INSERT INTO `products` VALUES(5, '4d2aa60c-0c1c-4a59-9d85-4d534b856ce9', 'http://s7d3.scene7.com/is/image/ShopTommy/AW81781031_961_FNT?wid=388&amp;hei=388&amp;fmt=jpeg&amp;qlt=100,0&amp;op_sharpen=1&amp;resMode=trilin&amp;op_usm=0.8,1.0,6,0&amp;iccEmbed=0', 'Red Croc Embossed Leather Strap Watch', '$95.00', '2011-01-10 21:01:06');
INSERT INTO `products` VALUES(6, '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'http://images3.pacsun.com/is/image/pacsunproducts/7448269M_00_040?$08_product_detail$&amp;', 'RVCA Romero Slim Raw Multi Jeans', '$62.00&nbsp;-&nbsp;$69.00', '2011-01-11 09:49:59');
INSERT INTO `products` VALUES(7, '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'http://images3.pacsun.com/is/image/pacsunproducts/5828603_01?$08_product_detail$&amp;', 'Nixon Player Silver Watch', '$170.00', '2011-01-11 09:50:31');
INSERT INTO `products` VALUES(8, '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'http://images3.pacsun.com/is/image/pacsunproducts/7945652_01?$08_product_detail$&amp;', 'Volcom Switch Up Tee', '$32.00', '2011-01-11 09:50:54');
INSERT INTO `products` VALUES(9, '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'http://scene7.zumiez.com/is/image/zumiez/175968-0007-front?$product_detail$', 'Enjoi Delicious Berry 7.9 Skate Deck', '$51.95', '2011-01-11 09:53:01');
INSERT INTO `products` VALUES(10, '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'http://i.ebayimg.com/09/!BudBCwwCGk~$(KGrHqQOKjoEvO0ucsKfBM!,EIY62g~~0_1.JPG?set_id=8800005007', 'nike sb zoom paul rodriguez 3 black red jordan elephant', 'US $71.25', '2011-01-11 09:54:28');
INSERT INTO `products` VALUES(11, '4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'http://www.backcountry.com/images/items/medium/HUR/HUR0072/CYA.jpg', 'Hurley One And Only White Hat', '$21.95', '2011-01-11 09:59:59');

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

INSERT INTO `users` VALUES('4d2c6d00-5dc4-489f-9a12-9aa94b856ce9', 'dubmediagroup@gmail.com', 'thekenwheeler', '528985009', 'Ken', 'Wheeler', '57f594ed3d2490c088bcf31a2d3285ab5bd9353a', '2011-01-11 09:45:20', '2011-01-11 13:12:23');
INSERT INTO `users` VALUES('4d2c6d38-95a8-432a-b053-9aaa4b856ce9', 'lindseycorby@gmail.com', 'lindseycorby', NULL, 'Lindsey', 'Corby', '115ab5cebf896e6a071c0dfa52b7f504ea33c562', '2011-01-11 09:46:16', '2011-01-11 11:37:00');

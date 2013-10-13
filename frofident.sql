/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : frofident

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-10-13 15:21:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_about`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `intro` text CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `date_create` int(11) NOT NULL,
  `trang_chu` tinyint(4) NOT NULL DEFAULT '0',
  `hide` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_about
-- ----------------------------
INSERT INTO `tbl_about` VALUES ('1', 'Chào Mừng Đến Cty Century', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.', '<p style=\"text-align:justify\">\r\n	<img alt=\" \" src=\"/upload/contents/gioithieu.jpg\" style=\"float: left; margin-right: 10px; width: 200px; height: 246px;\" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes,</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed atoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla.</p>\r\n<p>\r\n	nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla.</p>\r\n<p>\r\n	<img alt=\" \" height=\"294\" src=\"/upload/contents/gioithieu2.jpg\" style=\"float:right;margin-left:10px;width:424px;height:auto;\" width=\"400\" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras gravida eleifend leo eu posuere. Quisque gravida, elit at pretium porttitor, risus justo vulputate tortor, in eleifend lorem mi id mauris. Phasellus at enim odio, pharetra vestibulum tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vestibulum lacinia dolor at fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, quam porta dignissim dapibus, sem turpis lobortis nisl, sed cursus nisi purus adipiscing est. Cras</p>\r\n', '1381560247', '0', '0');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `caid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`caid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_category


-- ----------------------------
-- Table structure for `tbl_contact`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date_create` int(11) DEFAULT NULL,
  `approve` enum('Y','N') DEFAULT 'N',
  `date_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_contact
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_products`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('product','curaprox') DEFAULT 'product',
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `hide` enum('N','Y') DEFAULT 'N',
  `date_create` int(11) DEFAULT NULL,
  `date_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for `tbl_slide`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slide`;
CREATE TABLE `tbl_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(255) DEFAULT NULL,
  `hide` enum('N','Y') DEFAULT NULL,
  `type` enum('category','car','banner','header') DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `date_create` int(11) DEFAULT NULL,
  `date_update` int(11) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_slide
-- ----------------------------
INSERT INTO `tbl_slide` VALUES ('1', '', 'N', 'header', null, '1380439018', '1381651235', null);
INSERT INTO `tbl_slide` VALUES ('2', '', 'N', 'header', null, '1380440272', '1381559644', null);
INSERT INTO `tbl_slide` VALUES ('3', '', 'N', 'header', null, '1380440396', null, null);
INSERT INTO `tbl_slide` VALUES ('4', '', 'N', 'category', '28', '1380442233', null, null);
INSERT INTO `tbl_slide` VALUES ('5', '', 'N', 'category', '28', '1380555255', null, null);

-- ----------------------------
-- Table structure for `tbl_subcribe`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_subcribe`;
CREATE TABLE `tbl_subcribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_num` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `date_create` int(11) DEFAULT NULL,
  `approve` enum('Y','N') DEFAULT 'N',
  `date_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_subcribe


-- ----------------------------
-- Table structure for `tbl_tin_tuc`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tin_tuc`;
CREATE TABLE `tbl_tin_tuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `intro` text CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `hinh` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date_create` int(11) NOT NULL,
  `date_update` int(11) DEFAULT NULL,
  `hide` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_tin_tuc
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_tu_van`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tu_van`;
CREATE TABLE `tbl_tu_van` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_tu_van_id` int(11) DEFAULT NULL,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `intro` text CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `hinh` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date_create` int(11) NOT NULL,
  `hide` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_tu_van
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_tu_van_video`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tu_van_video`;
CREATE TABLE `tbl_tu_van_video` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT '0',
  `date_create` int(11) DEFAULT NULL,
  `date_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_tu_van_video
-- ----------------------------


-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `publish` tinyint(4) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL COMMENT 'Department',
  PRIMARY KEY (`id`),
  KEY `Group-User-FK` (`group_id`),
  CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tbl_user_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='User table (Employees)';

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('2', 'Admin', 'admin', 'b3360cc45c2819fc1ea9b0f16c15fdee', 'vtriqn1@gmail.com', '1', '1');
INSERT INTO `tbl_users` VALUES ('3', 'master', 'webmaster', 'b3360cc45c2819fc1ea9b0f16c15fdee', 'tritruong@sevenart.vn', '1', '1');

-- ----------------------------
-- Table structure for `tbl_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user_group`;
CREATE TABLE `tbl_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='User Group Table (Department table)';

-- ----------------------------
-- Records of tbl_user_group
-- ----------------------------
INSERT INTO `tbl_user_group` VALUES ('1', 'Admin');
INSERT INTO `tbl_user_group` VALUES ('2', 'System');

/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : frofident

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-10-13 21:33:21
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `content` longtext,
  `price` varchar(255) DEFAULT NULL,
  `hide` enum('N','Y') DEFAULT 'N',
  `date_create` int(11) DEFAULT NULL,
  `date_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_products
-- ----------------------------
INSERT INTO `tbl_products` VALUES ('1', 'curaprox', null, 'Mercedes-Benz GLK300 4Matic 2013', '896_resize.php.jpg', 'Mercedes GLK300 ra mắt người tiêu dùng Việt Nam vào tháng 6/2009. Mẫu xe này đã được người tiêu dùng đón nhận và trở thành mẫu xe khá HOT trên thị trường nhờ ngoại hình khỏe khoắn, trang thiết bị tiện nghi cao cấp và đặc biệt là giá thành cạnh tranh trong', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla\r\n\r\n', null, 'N', '1379435225', '1381674536');

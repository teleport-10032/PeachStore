/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80011
 Source Host           : localhost:3306
 Source Schema         : peachStore

 Target Server Type    : MySQL
 Target Server Version : 80011
 File Encoding         : 65001

 Date: 02/07/2020 09:08:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` varchar(1005) DEFAULT NULL,
  `pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '/assets/img/goods/none.jpg',
  `package` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
BEGIN;
INSERT INTO `goods` VALUES (9, 'iPhone SE', 'iphone', 'A13芯片<br>\r\n4.7 英寸视网膜高清显示屏<br>\r\n可选 64/128/256 GB 存储', '../../../assets/img/goods/9.jpg', '红色 64GB;2499;红色 128GB;2999;红色 256GB;3599', '2020-06-30 19:45:34');
INSERT INTO `goods` VALUES (10, 'iPhone11', 'iphone', 'A13仿生芯片<br>\r\n双摄系统(超广角、广角)<br>\r\n6.1 英寸视网膜高清显示屏<br>\r\n可选 64/128/256 GB 存储', '../../../assets/img/goods/10.jpg', '黑色 64GB;5499;黑色 128GB;5999;黑色 256GB;6599', '2020-06-30 20:24:14');
INSERT INTO `goods` VALUES (11, 'MacbookPro13', 'mac', '1.4GHz 4 核处理器 (Turbo Boost 最高可达 3.9GHz)<br>\r\n最高 2TB 存储容量<br>\r\n8GB DDR4内存<br>\r\n触控栏和触控 ID<br>', '../../../assets/img/goods/11.jpg', '8+256GB;9999;8+512GB;10999;16+512GB;12999', '2020-06-30 20:34:58');
INSERT INTO `goods` VALUES (12, 'MacbookAir13', 'mac', '1.1GHz 双核 Core i3 处理器，Turbo Boost 最高可达 3.2GHz<br>\r\n最高 1TB 存储容量<br>\r\n触控 ID', '../../../assets/img/goods/12.jpg', '8+128GB;7999;8+256GB;9999;16+512GB;12999', '2020-06-30 20:42:15');
INSERT INTO `goods` VALUES (13, 'MacbookPro16', 'mac', '1.4GHz 4 核处理器 (Turbo Boost 最高可达 3.9GHz)<br>\r\n最高 2TB 存储容量<br>\r\n8GB DDR4内存<br>\r\n触控栏和触控 ID<br>', '../../../assets/img/goods/13.jpg', '8+256GB;18999;16+512GB;22999;16+1TB;25999', '2020-06-30 20:48:39');
INSERT INTO `goods` VALUES (14, 'iMac', 'mac', '2.3GHz 双核第七代 Intel Core i5 处理器,Turbo Boost 最高可达 3.6GHz<br>\r\n8GB 2133MHz 内存，可选配 16GB<br>\r\n1TB 硬盘<br>\r\n1920 x 1080 sRGB 显示屏', '../../../assets/img/goods/14.jpg', '8GB+1TB;8390;16GB+1TB;9999', '2020-06-30 20:59:56');
INSERT INTO `goods` VALUES (15, 'Mac Pro', 'mac', '3.5GHz 8 核 Intel Xeon W 处理器，Turbo Boost 最高可达 4.0GHz<br>\r\n32GB (4x8GB) DDR4 ECC 内存<br>\r\nRadeon Pro 580X 图形处理器，配备 8GB GDDR5 显存<br>\r\n256GB 固态硬盘', '../../../assets/img/goods/15.jpg', '32+256GB;47999;64+512GB;52999', '2020-06-30 21:03:44');
INSERT INTO `goods` VALUES (16, 'iPad Pro', 'ipad', 'Liquid 视网膜显示屏,120Hz刷新率<br>\r\nA12z仿生芯片<br>\r\n面容 ID<br>\r\n支持 Apple Pencil(第二代)', '../../../assets/img/goods/16.jpg', '128GB;6229;256GB;7299;512GB;8099', '2020-06-30 21:43:49');
INSERT INTO `goods` VALUES (17, 'iPad Air', 'ipad', '10.5 英寸视网膜显示屏<br>\r\nA12 仿生芯片<br>\r\n触控 ID<br>\r\n支持 Apple Pencil(第一代)\r\n', '../../../assets/img/goods/17.jpg', '64GB;3896;128GB;4596', '2020-06-30 21:48:22');
INSERT INTO `goods` VALUES (18, 'iPad', 'ipad', '10.2 英寸视网膜显示屏<br>\r\n芯片：A10 Fusion<br>\r\n触控 ID<br>\r\n支持 Apple Pencil(第一代)', '../../../assets/img/goods/18.jpg', '64GB;2499;128GB;2899;256GB;3499', '2020-06-30 21:49:42');
INSERT INTO `goods` VALUES (19, 'iPad mini', 'ipad', '7.9 英寸视网膜显示屏<br>\r\n芯片：A11 仿生<br>\r\n触控 ID<br>\r\n支持 Apple Pencil(第一代)', '../../../assets/img/goods/19.jpg', '64GB;2921;128GB;3499', '2020-06-30 21:50:51');
INSERT INTO `goods` VALUES (20, 'Peach Pencil', 'ipad', '镌刻你的名字、缩写或电话号码。<br>\r\nPeach 独家提供。\r\n', '../../../assets/img/goods/20.jpg', '一代;649;二代;800', '2020-07-01 00:18:14');
INSERT INTO `goods` VALUES (21, 'iPhone11 Pro', 'iphone', '三摄系统(超广角、广角、长焦)<br>\r\n5.8 英寸超视网膜 XDR 显示屏<br>\r\nA13仿生芯片<br>\r\n', '../../../assets/img/goods/21.jpg', '128GB;8699;256GB;9599;512GB;10599', '2020-07-01 08:50:44');
INSERT INTO `goods` VALUES (22, 'iPhone XR', 'iphone', '单摄系统(广角)<br>\r\n6.1 英寸视网膜显示屏<br>\r\nA12仿生芯片<br>', '../../../assets/img/goods/22.jpg', '64GB;4799;128GB;5599', '2020-07-01 08:54:02');
INSERT INTO `goods` VALUES (23, 'WATCH SERIES 5', 'watch', 'Apple Watch 中的佼佼。<br>\r\n拥有全天候视网膜显示屏、全球紧急呼救服务、摔倒检测功能，以及内置指南针。\r\n', '../../../assets/img/goods/23.jpg', '红色;3199;蓝色;3199;黑色;3199', '2020-07-01 09:13:23');
INSERT INTO `goods` VALUES (24, 'WATCH SERIES 3', 'watch', '拥有常用的健身、心率监测和网络连接等功能,<br>\r\n更有心动好价格。\r\n', '../../../assets/img/goods/24.jpg', '红色;1499;蓝色;1499;黑色;1499', '2020-07-01 09:15:05');
INSERT INTO `goods` VALUES (25, 'AirPods Pro', 'music', 'H1芯片<br>\r\n主动降噪<br>\r\n最长续航可达10小时', '../../../assets/img/goods/25.jpg', '白色;1999', '2020-07-01 09:31:15');
INSERT INTO `goods` VALUES (26, 'AirPods', 'music', 'H1芯片<br>\r\n最长续航可达11小时', '../../../assets/img/goods/26.jpg', '白色;1199', '2020-07-01 09:31:43');
INSERT INTO `goods` VALUES (27, 'HomePod', 'music', '高振幅低音单元，配备定制扩音器<br>\r\n六麦克风阵列，便于远距离使用 Siri<br>\r\n七个号角负载高音单元组成的阵列，各自配备定制扩音器', '../../../assets/img/goods/27.jpg', '深空灰色;2299;白色;2299', '2020-07-01 09:33:54');
INSERT INTO `goods` VALUES (28, 'iPod touch', 'music', 'A10芯片<br>\r\n最高可选配128GB存储<br>\r\n', '../../../assets/img/goods/28.jpg', '32GB;1499;64G;1999;128GB;2499', '2020-07-01 09:36:05');
INSERT INTO `goods` VALUES (29, '灭星者20 Pro', 'mac', '来啦！来啦！终于来啦！<br>\r\n灭星者 20 PRO !\r\n融合量子能源!\r\n一键发射50发炮弹!<br>\r\n瞬间爆发超级火力！ \r\n连续轰炸可达240小时!\r\n还能作为移动电源使用! \r\nTN7级防水，永久生效！<br>\r\n无论是浴室，或是量子深海，皆可轻松享受轰炸！<br>\r\n全新超级武器，现登录天命Store~\r\n', '../../../assets/img/goods/29.jpg', '量子深海限量版;129999', '2020-07-02 08:04:30');
COMMIT;

-- ----------------------------
-- Table structure for task
-- ----------------------------
DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `statu` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `order_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task
-- ----------------------------
BEGIN;
INSERT INTO `task` VALUES (18, 'root', 'iPad Air 64GB;', 3896.00, '1', '2', '未付款', '2020-07-02 03:08:41', NULL);
INSERT INTO `task` VALUES (36, 'test2', 'WATCH SERIES 5 黑色;iPhone SE 红色 128GB;', 6198.00, '1', '2', '未付款', '2020-07-02 07:42:19', NULL);
INSERT INTO `task` VALUES (37, 'test2', 'iPhone SE 红色 64GB;', 2499.00, '12', '22', '未付款', '2020-07-02 07:43:07', NULL);
INSERT INTO `task` VALUES (38, 'test2', 'iPhone SE 红色 64GB;', 2499.00, '1', '2', '已取消', '2020-07-02 07:43:42', 111);
INSERT INTO `task` VALUES (39, 'test2', 'iPhone11 黑色 64GB;', 5499.00, '1', '2', '未付款', '2020-07-02 07:44:25', NULL);
INSERT INTO `task` VALUES (40, 'test2', 'HomePod 深空灰色;', 2299.00, '1', '2', '已取消', '2020-07-02 07:52:23', NULL);
INSERT INTO `task` VALUES (41, 'test', 'MacbookAir13 16+512GB;WATCH SERIES 5 蓝色;', 16198.00, '1', '22', '未付款', '2020-07-02 08:39:16', NULL);
INSERT INTO `task` VALUES (42, 'test3', 'iPad Pro 256GB;iPhone SE 红色 256GB;', 10898.00, '11', '11', '未付款', '2020-07-02 08:45:49', NULL);
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `passwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `permission` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 'root', '63ee451939ed580ef3c4b6f0109d1fd0', '', 'admin', '2020-07-01 16:59:59');
INSERT INTO `user` VALUES (2, 'test', '74be16979710d4c4e7c6647856088456', '', 'user', '2020-07-02 08:41:46');
INSERT INTO `user` VALUES (3, 'test2', '63ee451939ed580ef3c4b6f0109d1fd0', '', 'user', '2020-07-02 07:52:23');
INSERT INTO `user` VALUES (4, 'test3', '63ee451939ed580ef3c4b6f0109d1fd0', '', 'user', '2020-07-02 08:45:50');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

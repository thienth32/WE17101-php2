/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : we17101-php2

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 16/05/2022 12:27:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 'iphone 13 promax', 33000000, NULL, 100);
INSERT INTO `products` VALUES (2, 'samsung s22', 40000000, NULL, 150);
INSERT INTO `products` VALUES (3, 'samsung galaxy 10', 15000000, NULL, 73);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

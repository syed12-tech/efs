/*
Navicat MySQL Data Transfer

Source Server         : con
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : efs

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-02-03 17:04:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `employee`
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employeename` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'DIPANKAR NEOG', 'TEACHER', '2', '7002483097', '1');
INSERT INTO `employee` VALUES ('2', 'armina rahman', 'officials', '1', '985932816a', '1');

-- ----------------------------
-- Table structure for `role_master`
-- ----------------------------
DROP TABLE IF EXISTS `role_master`;
CREATE TABLE `role_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of role_master
-- ----------------------------
INSERT INTO `role_master` VALUES ('1', 'ZONAL OFFICER');
INSERT INTO `role_master` VALUES ('2', 'SECTOR OFFICER');
INSERT INTO `role_master` VALUES ('3', 'ASSISTING OFFICER');

/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50716
Source Host           : localhost:3306
Source Database       : ljsm

Target Server Type    : MYSQL
Target Server Version : 50716
File Encoding         : 65001

Date: 2016-12-09 18:47:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img_name` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '电芯', 'public/image/1.jpg');
INSERT INTO `banner` VALUES ('2', '移动电源', 'public/image/2.jpg');
INSERT INTO `banner` VALUES ('3', '电线', 'public/image/3.jpg');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '0', '首页');
INSERT INTO `category` VALUES ('2', '0', '关于我们');
INSERT INTO `category` VALUES ('3', '0', '新闻资讯');
INSERT INTO `category` VALUES ('4', '0', '产品展示');
INSERT INTO `category` VALUES ('5', '0', '人才招聘');
INSERT INTO `category` VALUES ('6', '0', '联系我们');

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('1', '为何胃炎总不好？', '我叫张强，不到四十，就已经有5年胃炎史了，期间看过很多地方都没好利索，直到遇见<span class=\"color\"><%=nickname%>（微信<span class=\"wxh\"><%=wechatNo%></span>← 长按复制，');

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `intro` varchar(50) DEFAULT NULL,
  `pe_price` decimal(10,0) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO `shop` VALUES ('1', '', '耳机', '88', '这是一个小小的漫步者耳机', '99', '描述描述描述描述');
INSERT INTO `shop` VALUES ('2', '', '耳机', '88', '这是一个小小的漫步者耳机', '99', '描述描述描述描述');
INSERT INTO `shop` VALUES ('3', '', '耳机', '88', '这是一个小小的漫步者耳机', '99', '描述描述描述描述');
INSERT INTO `shop` VALUES ('4', '', '耳机', '88', '这是一个小小的漫步者耳机', '99', '描述描述描述描述');
INSERT INTO `shop` VALUES ('5', '', '耳机', '88', '这是一个小小的漫步者耳机', '99', '描述描述描述描述');

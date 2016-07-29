/*
Navicat MySQL Data Transfer

Source Server         : wedding
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : wedding

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-07-29 17:36:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wed_address
-- ----------------------------
DROP TABLE IF EXISTS `wed_address`;
CREATE TABLE `wed_address` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `address_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address_name` (`address_name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_address
-- ----------------------------
INSERT INTO `wed_address` VALUES ('1', '时尚之都');
INSERT INTO `wed_address` VALUES ('2', '罗曼蒂克');
INSERT INTO `wed_address` VALUES ('3', '水晶之恋');
INSERT INTO `wed_address` VALUES ('4', '花乡芬兰');
INSERT INTO `wed_address` VALUES ('5', '硕果大道');
INSERT INTO `wed_address` VALUES ('6', '紫色蔷薇');
INSERT INTO `wed_address` VALUES ('7', '埃菲尔之约');
INSERT INTO `wed_address` VALUES ('8', '相逢金字塔');
INSERT INTO `wed_address` VALUES ('9', '华丽殿堂');
INSERT INTO `wed_address` VALUES ('10', '西欧之雪');
INSERT INTO `wed_address` VALUES ('11', '盛夏之夜');
INSERT INTO `wed_address` VALUES ('12', '雨林之行');
INSERT INTO `wed_address` VALUES ('13', '天空之城');

-- ----------------------------
-- Table structure for wed_article
-- ----------------------------
DROP TABLE IF EXISTS `wed_article`;
CREATE TABLE `wed_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `author` smallint(6) NOT NULL,
  `send_date` int(11) NOT NULL,
  `synopsis` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `wedding` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_article
-- ----------------------------
INSERT INTO `wed_article` VALUES ('11', '他和她终于在一起了', '3', '1469249106', '相爱就要在一起，相信他们已经按捺不住要搭建自己的小家了', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif; line-height: 25.6px; white-space: normal;\">volutpat nec velit ut, congue scelerisque tortor. Ut tincidunt malesuada tellus, eget ullamcorper mi. Phasellus et nisi nec lorem molestie fermentum nec eu dolor. Aenean suscipit posuere metus vel ultrices. Donec laoreet diam consequat libero pretium pulvinar.</span> &nbsp; &nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692490628530.jpg\" _src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692490628530.jpg\"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>', '5');
INSERT INTO `wed_article` VALUES ('12', '本店的第一对新人', '3', '1469250800', 'NUNC laoreet狮子座pellentesque venenatis。Mauris ID porttitor mauris', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692507927687.jpg\" _src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692507927687.jpg\"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 1.5em; color: rgb(0, 0, 0); line-height: 1.6em; font-family: &quot;Open Sans&quot;, sans-serif; white-space: normal;\">volutpat nec velit ut, congue scelerisque tortor. Ut tincidunt malesuada tellus, eget ullamcorper mi. Phasellus et nisi nec lorem molestie fermentum nec eu dolor. Aenean suscipit posuere metus vel ultrices. Donec laoreet diam consequat libero pretium pulvinar.</p><p style=\"margin-top: 0px; margin-bottom: 1.5em; color: rgb(0, 0, 0); line-height: 1.6em; font-family: &quot;Open Sans&quot;, sans-serif; white-space: normal;\">volutpat nec velit ut, congue scelerisque tortor. Ut tincidunt malesuada tellus, eget ullamcorper mi. Phasellus et nisi nec lorem molestie fermentum nec eu dolor. Aenean suscipit posuere metus vel ultrices. Donec laoreet diam consequat libero pretium pulvinar.volutpat nec velit ut, congue scelerisque tortor. Ut tincidunt malesuada tellus, eget ullamcorper mi. Phasellus et nisi nec lorem molestie fermentum nec eu dolor. Aenean suscipit posuere metus vel ultrices. Donec laoreet diam consequat libero pretium pulvinar.volutpat nec velit ut, congue scelerisque tortor. Ut tincidunt malesuada tellus, eget ullamcorper mi. Phasellus et nisi nec lorem molestie fermentum nec eu dolor. Aenean suscipit posuere metus vel ultrices. Donec laoreet diam consequat libero pretium pulvinar.</p><p style=\"margin-top: 0px; margin-bottom: 1.5em; color: rgb(0, 0, 0); line-height: 1.6em; font-family: &quot;Open Sans&quot;, sans-serif; white-space: normal;\">volutpat nec velit ut, congue scelerisque tortor. Ut tincidunt malesuada tellus, eget ullamcorper mi. Phasellus et nisi nec lorem molestie fermentum nec eu dolor. Aenean suscipit posuere metus vel ultrices. Donec laoreet diam consequat libero pretium pulvinar.</p><p><br/></p>', '1');
INSERT INTO `wed_article` VALUES ('13', '素素和彩铃的婚礼', '3', '1469251795', 'VOLUTPAT直径非，预期值，也CONDIMENTUM。LOREM存有悲坐', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692517667930.jpg\" _src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692517667930.jpg\"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 1.5em; color: rgb(0, 0, 0); line-height: 1.6em; font-family: &quot;Open Sans&quot;, sans-serif; white-space: normal;\"><span style=\"box-shadow: rgb(153, 153, 170) 2px 2px 4px; position: relative; background-color: rgb(201, 215, 241);\">volutpat NEC velit出来，congue scelerisque托尔托拉。</span>UT tincidunt malesuada得力士，私人ullamcorper英里。Phasellus一个暂准NEC LOREM Molestien发酵NEC欧盟悲。Aenean suscipit posuere Metus以及ultrices。Donec laoreet直径consequat自由人的Pretium枕。</p><p style=\"margin-top: 0px; margin-bottom: 1.5em; color: rgb(0, 0, 0); line-height: 1.6em; font-family: &quot;Open Sans&quot;, sans-serif; white-space: normal;\">volutpat NEC velit出来，congue scelerisque托尔托拉。UT tincidunt malesuada得力士，私人ullamcorper英里。Phasellus一个暂准NEC LOREM Molestien发酵NEC欧盟悲。Aenean suscipit posuere Metus以及ultrices。Donec laoreet直径consequat自由人的Pretium pulvinar.volutpat NEC velit出来，congue scelerisque托尔托拉。UT tincidunt malesuada得力士，私人ullamcorper英里。Phasellus一个暂准NEC LOREM Molestien发酵NEC欧盟悲。Aenean suscipit posuere Metus以及ultrices。Donec laoreet直径consequat自由人的Pretium pulvinar.volutpat NEC velit出来，congue scelerisque托尔托拉。UT tincidunt malesuada得力士，私人ullamcorper英里。Phasellus一个暂准NEC LOREM Molestien发酵NEC欧盟悲。Aenean suscipit posuere Metus以及ultrices。Donec laoreet直径consequat自由人的Pretium枕。</p><p style=\"margin-top: 0px; margin-bottom: 1.5em; color: rgb(0, 0, 0); line-height: 1.6em; font-family: &quot;Open Sans&quot;, sans-serif; white-space: normal;\">volutpat NEC velit出来，congue scelerisque托尔托拉。UT tincidunt malesuada得力士，私人ullamcorper英里。Phasellus一个暂准NEC LOREM Molestien发酵NEC欧盟悲。Aenean suscipit posuere Metus以及ultrices。Donec laoreet直径consequat自由人的Pretium枕。</p><p><br/></p>', '3');
INSERT INTO `wed_article` VALUES ('14', '转角遇见他/她', '3', '1469252568', '相爱就要在一起，相信他们已经按捺不住要搭建自己的小家了', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692524068747.jpg\" _src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692524068747.jpg\"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 醉饮山林，自是闲暇白云间，</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;笑红尘，总是爱恨贪嗔痴，</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;若问人间逍遥在，</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;风声之谷，客从山来。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ——风谷来客 商清逸</p>', '6');
INSERT INTO `wed_article` VALUES ('15', '大家期盼的玄同太子终于与紫鷨步入殿堂了', '3', '1469253185', '大家期盼的玄同太子终于与紫鷨步入殿堂了', '<p><img src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692530586411.jpg\" _src=\"http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692530586411.jpg\"/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p><strong><em>他日枫树下，不知几多红，远见黄昏未见云，只留一念入凡魂 &nbsp;</em></strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>', '7');

-- ----------------------------
-- Table structure for wed_company_address
-- ----------------------------
DROP TABLE IF EXISTS `wed_company_address`;
CREATE TABLE `wed_company_address` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `line` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone_number` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_company_address
-- ----------------------------
INSERT INTO `wed_company_address` VALUES ('1', '巴沟站-&gt; 太阳宫站-&gt; 三元桥站-&gt; 亮马桥站-&gt; 农业展览馆站-&gt; 团结湖站-&gt; 呼家楼站-&gt; 金台夕照站-&gt; 国贸站-&gt; 双井站-&gt; ', '总公司地址：北京市-朝阳区-劲松三区-甲309号-WEDDING婚礼策划文化股份有限公司', 'ys.go.xlv@gmail.com', '110-3341456');

-- ----------------------------
-- Table structure for wed_customer_massage
-- ----------------------------
DROP TABLE IF EXISTS `wed_customer_massage`;
CREATE TABLE `wed_customer_massage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_name` varchar(10) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `is_customer` tinyint(4) NOT NULL DEFAULT '0',
  `hasfile` tinyint(4) NOT NULL DEFAULT '0',
  `c_name` varchar(6) NOT NULL DEFAULT '',
  `c_email` varchar(20) NOT NULL DEFAULT '',
  `c_title` varchar(100) NOT NULL DEFAULT '',
  `c_content` text NOT NULL,
  `c_ip` int(11) NOT NULL,
  `send_date` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `my_status` tinyint(4) NOT NULL DEFAULT '0',
  `real_del` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `is_customer` (`is_customer`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_customer_massage
-- ----------------------------
INSERT INTO `wed_customer_massage` VALUES ('1', '伍华志', '3', '0', '1', '', '', 'test', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;特啊刚刚a大哥 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '2130706433', '0', '2', '1', '0');
INSERT INTO `wed_customer_massage` VALUES ('2', '李民梦', '3', '0', '1', '', '', '二恶', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;阿飞啊阿飞阿飞 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '2130706433', '1469712648', '0', '2', '0');
INSERT INTO `wed_customer_massage` VALUES ('3', 'ys', '6', '0', '1', '', '', 'fwtga', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;wqtqtw &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '2130706433', '1469758910', '2', '0', '1');
INSERT INTO `wed_customer_massage` VALUES ('4', 'ys', '6', '0', '1', '', '', 'hello', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; af fwqrqwrfsaf &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '2130706433', '1469759863', '1', '0', '0');
INSERT INTO `wed_customer_massage` VALUES ('5', '三余无梦生', '6', '0', '1', '', '', 'hello', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;啊大发发发发 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '2130706433', '1469760275', '0', '0', '0');
INSERT INTO `wed_customer_massage` VALUES ('6', '伍华志', '3', '0', '1', '', '', '啊方法', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 阿飞 阿凡达fa &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/p&gt;', '2130706433', '1469765782', '2', '2', '0');
INSERT INTO `wed_customer_massage` VALUES ('7', '', null, '1', '0', 'afas a', 'fafaf a', 'afa faf', 'afa af', '2130706433', '1469774931', '1', '0', '0');
INSERT INTO `wed_customer_massage` VALUES ('8', 'ys', '6', '0', '1', '', '', 'saf a', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; af afa &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/p&gt;', '2130706433', '1469780035', '1', '0', '0');
INSERT INTO `wed_customer_massage` VALUES ('9', 'gdfsfga g', '6', '0', '1', '', '', 'agfsdg ', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;g sdfgfd gerggf &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/p&gt;', '2130706433', '1469781576', '0', '0', '0');
INSERT INTO `wed_customer_massage` VALUES ('10', 'ys', '6', '0', '0', '', '', '', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '2130706433', '1469781672', '1', '0', '0');
INSERT INTO `wed_customer_massage` VALUES ('11', 'ys', '6', '0', '0', '', '', 'saf asf', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; afd asdf &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/p&gt;', '2130706433', '1469781683', '1', '0', '0');

-- ----------------------------
-- Table structure for wed_numberone
-- ----------------------------
DROP TABLE IF EXISTS `wed_numberone`;
CREATE TABLE `wed_numberone` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `wedding_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_numberone
-- ----------------------------

-- ----------------------------
-- Table structure for wed_ourhistory
-- ----------------------------
DROP TABLE IF EXISTS `wed_ourhistory`;
CREATE TABLE `wed_ourhistory` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `history` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_ourhistory
-- ----------------------------
INSERT INTO `wed_ourhistory` VALUES ('1', '1388505600', '由店长杨帅注册公司，并命名为WEDDING文化股份有限公司，从此公司秉持着顾客至上的理念，开始步向成长之路。');
INSERT INTO `wed_ourhistory` VALUES ('2', '1388548800', 'WEDDING婚礼策划公司迎来第一对新人，历史将记住他们的名字：艾米 &amp; 麦克');
INSERT INTO `wed_ourhistory` VALUES ('3', '1419998474', '经历一年的幸福见证，公司正式庆祝一周年的来临，与第100对新人的到来。');
INSERT INTO `wed_ourhistory` VALUES ('4', '0', '');
INSERT INTO `wed_ourhistory` VALUES ('5', '0', '');
INSERT INTO `wed_ourhistory` VALUES ('6', '0', '');

-- ----------------------------
-- Table structure for wed_oursynopsis
-- ----------------------------
DROP TABLE IF EXISTS `wed_oursynopsis`;
CREATE TABLE `wed_oursynopsis` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `synopsis` text NOT NULL,
  `synopsis_photo` varchar(64) NOT NULL,
  `tenet` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_oursynopsis
-- ----------------------------
INSERT INTO `wed_oursynopsis` VALUES ('1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'', '/Public/Admin/Uploads/2016-07-23/579366d14f9c4.jpg', '&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; line-height: 25.6px; white-space: normal;&quot;&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&amp;#39;t look even slightly believable. If you are going to use&lt;/span&gt;&lt;img src=&quot;http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692778895237.jpg&quot; _src=&quot;http://www.wedding.com/Public/Admin/umeditor/php/upload/20160723/14692778895237.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; line-height: 25.6px;&quot;&gt;Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&amp;#39;t look even slightly believable&lt;/span&gt;&lt;span style=&quot;color: inherit; line-height: 1.42857;&quot;&gt;&amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;/p&gt;');

-- ----------------------------
-- Table structure for wed_personal
-- ----------------------------
DROP TABLE IF EXISTS `wed_personal`;
CREATE TABLE `wed_personal` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `personal_synopsis` varchar(50) NOT NULL,
  `photo` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_personal
-- ----------------------------
INSERT INTO `wed_personal` VALUES ('1', '4', '顶级摄影师，曾任中国摄影协会副会长，对于选址，角度等专业摄影技巧有独特的见解，作品曾获国际艺术三等奖', '/Public/Admin/Uploads/2016-07-23/5793871333aa9.jpg', '1');

-- ----------------------------
-- Table structure for wed_photo_store
-- ----------------------------
DROP TABLE IF EXISTS `wed_photo_store`;
CREATE TABLE `wed_photo_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` tinyint(4) NOT NULL,
  `file_path` varchar(64) NOT NULL,
  `from_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_photo_store
-- ----------------------------
INSERT INTO `wed_photo_store` VALUES ('2', '3', '/Public/Admin/Uploads/2016-07-21/5790b06d9c8d8.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('3', '3', '/Public/Admin/Uploads/2016-07-21/5790b1961733e.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('4', '3', '/Public/Admin/Uploads/2016-07-21/5790b2f035d08.jpg', '3');
INSERT INTO `wed_photo_store` VALUES ('5', '3', '/Public/Admin/Uploads/2016-07-21/5790b966cb6c4.jpg', '5');
INSERT INTO `wed_photo_store` VALUES ('6', '3', '/Public/Admin/Uploads/2016-07-21/5790c2bf852ad.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('7', '3', '/Public/Admin/Uploads/2016-07-21/5790c3fc50cbd.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('8', '3', '/Public/Admin/Uploads/2016-07-21/5790c46ae0bc1.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('9', '3', '/Public/Admin/Uploads/2016-07-21/5790c594b5658.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('10', '3', '/Public/Admin/Uploads/2016-07-21/5790c6174694b.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('11', '3', '/Public/Admin/Uploads/2016-07-21/5790c826615a4.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('12', '3', '/Public/Admin/Uploads/2016-07-21/5790cc72b7322.jpg', '5');
INSERT INTO `wed_photo_store` VALUES ('13', '3', '/Public/Admin/Uploads/2016-07-22/5791a4124d83e.jpg', '1');
INSERT INTO `wed_photo_store` VALUES ('14', '3', '/Public/Admin/Uploads/2016-07-22/57921801ef364.jpg', '3');
INSERT INTO `wed_photo_store` VALUES ('15', '3', '/Public/Admin/Uploads/2016-07-22/57921817461a0.jpg', '3');
INSERT INTO `wed_photo_store` VALUES ('16', '3', '/Public/Admin/Uploads/2016-07-23/579308e139d51.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('17', '3', '/Public/Admin/Uploads/2016-07-23/579308f067429.jpg', '6');
INSERT INTO `wed_photo_store` VALUES ('18', '3', '/Public/Admin/Uploads/2016-07-27/57983c28ed4b6.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('19', '3', '/Public/Admin/Uploads/2016-07-27/57983db0a5c44.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('20', '3', '/Public/Admin/Uploads/2016-07-27/57983e2116a09.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('21', '3', '/Public/Admin/Uploads/2016-07-27/57983f13acd22.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('22', '3', '/Public/Admin/Uploads/2016-07-27/57983f4b38d8b.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('23', '3', '/Public/Admin/Uploads/2016-07-27/57983f8d6d70e.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('24', '3', '/Public/Admin/Uploads/2016-07-27/579840897d05a.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('25', '3', '/Public/Admin/Uploads/2016-07-27/579840abb1dfc.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('26', '3', '/Public/Admin/Uploads/2016-07-27/5798421ac8536.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('27', '3', '/Public/Admin/Uploads/2016-07-27/5798424151657.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('28', '3', '/Public/Admin/Uploads/2016-07-27/579842b92e2ca.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('29', '3', '/Public/Admin/Uploads/2016-07-27/5798436e9e440.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('30', '3', '/Public/Admin/Uploads/2016-07-27/579843ae711f6.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('31', '3', '/Public/Admin/Uploads/2016-07-27/579843d9c7d1d.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('32', '3', '/Public/Admin/Uploads/2016-07-27/57984438ef9cb.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('33', '3', '/Public/Admin/Uploads/2016-07-27/57984559d9be5.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('34', '3', '/Public/Admin/Uploads/2016-07-27/579845b28c651.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('35', '3', '/Public/Admin/Uploads/2016-07-27/57984662bb235.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('36', '3', '/Public/Admin/Uploads/2016-07-27/579846c9b91da.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('37', '3', '/Public/Admin/Uploads/2016-07-27/5798474bd0992.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('38', '3', '/Public/Admin/Uploads/2016-07-27/5798478dd22bd.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('39', '3', '/Public/Admin/Uploads/2016-07-27/579847b3979c7.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('40', '3', '/Public/Admin/Uploads/2016-07-27/579848a981fbf.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('41', '3', '/Public/Admin/Uploads/2016-07-27/579848e21b477.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('42', '3', '/Public/Admin/Uploads/2016-07-27/579849120970f.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('43', '3', '/Public/Admin/Uploads/2016-07-27/5798495f60d38.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('44', '3', '/Public/Admin/Uploads/2016-07-27/57984bfc2c429.jpg', '7');
INSERT INTO `wed_photo_store` VALUES ('45', '3', '/Public/Admin/Uploads/2016-07-27/57984c1b7b521.jpg', '6');
INSERT INTO `wed_photo_store` VALUES ('46', '3', '/Public/Admin/Uploads/2016-07-27/57984c2090933.jpg', '6');
INSERT INTO `wed_photo_store` VALUES ('47', '3', '/Public/Admin/Uploads/2016-07-28/5799e959a6ef7.jpg', '7');

-- ----------------------------
-- Table structure for wed_send_file
-- ----------------------------
DROP TABLE IF EXISTS `wed_send_file`;
CREATE TABLE `wed_send_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(20) NOT NULL,
  `file_path` varchar(64) NOT NULL,
  `from_massage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_send_file
-- ----------------------------
INSERT INTO `wed_send_file` VALUES ('1', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/20140504185433_dKk8S.jpg', '1');
INSERT INTO `wed_send_file` VALUES ('2', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/5523787e99071.jpg', '1');
INSERT INTO `wed_send_file` VALUES ('3', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/20140504185433_dKk8S.jpg', '1');
INSERT INTO `wed_send_file` VALUES ('4', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/20140504185433_dKk8S.jpg', '1');
INSERT INTO `wed_send_file` VALUES ('5', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/5523787e99071.jpg', '1');
INSERT INTO `wed_send_file` VALUES ('6', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/20140504185433_dKk8S.jpg', '2');
INSERT INTO `wed_send_file` VALUES ('7', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/5523787e99071.jpg', '2');
INSERT INTO `wed_send_file` VALUES ('8', '2016-07-28', '/Public/Admin/Uploads/2016-07-28/20131212161300_itMUA.jpg', '2');
INSERT INTO `wed_send_file` VALUES ('9', '2016-07-29', '/Public/Admin/Uploads/2016-07-29/20131212161300_itMUA.jpg', '3');
INSERT INTO `wed_send_file` VALUES ('10', '2016-07-29', '/Public/Admin/Uploads/2016-07-29/5523787e99071.jpg', '3');
INSERT INTO `wed_send_file` VALUES ('11', '2016-07-29', '/Public/Admin/Uploads/2016-07-29/20150424041750.jpg', '3');
INSERT INTO `wed_send_file` VALUES ('12', '2016-07-29', '/Public/Admin/Uploads/2016-07-29/20131212161300_itMUA.jpg', '4');
INSERT INTO `wed_send_file` VALUES ('13', '2016-07-29', '/Public/Admin/Uploads/2016-07-29/20131212161300_itMUA.jpg', '5');
INSERT INTO `wed_send_file` VALUES ('14', '20131212161300_itMUA', '/Public/Admin/Uploads/2016-07-29/20131212161300_itMUA.jpg', '6');
INSERT INTO `wed_send_file` VALUES ('15', '5523787e99071.jpg', '/Public/Admin/Uploads/2016-07-29/5523787e99071.jpg', '6');
INSERT INTO `wed_send_file` VALUES ('16', '20140504185433_dKk8S', '/Public/Admin/Uploads/2016-07-29/20140504185433_dKk8S.jpg', '8');
INSERT INTO `wed_send_file` VALUES ('17', '5523787e99071.jpg', '/Public/Admin/Uploads/2016-07-29/5523787e99071.jpg', '8');
INSERT INTO `wed_send_file` VALUES ('18', '20150424041750.jpg', '/Public/Admin/Uploads/2016-07-29/20150424041750.jpg', '9');

-- ----------------------------
-- Table structure for wed_user
-- ----------------------------
DROP TABLE IF EXISTS `wed_user`;
CREATE TABLE `wed_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `password` varchar(250) NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  `age` tinyint(4) NOT NULL,
  `join_time` int(11) NOT NULL,
  `last_time` int(11) NOT NULL,
  `avatar` varchar(50) DEFAULT '无',
  `has_avatar` tinyint(4) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL,
  `maxim` varchar(32) NOT NULL,
  `salary` float(8,2) NOT NULL DEFAULT '0.00',
  `mobile_number` varchar(11) NOT NULL,
  `authority` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_user
-- ----------------------------
INSERT INTO `wed_user` VALUES ('3', 'ys', '81dc9bdb52d04dc20036dbd8313ed055', '1', '19', '0', '1469779267', '/Public/Admin/Uploads/2016-07-19/578e1d3c4b709.jpg', '1', '1', '天天好心情', '0.00', '18745729547', '2', '3');
INSERT INTO `wed_user` VALUES ('4', '三余无梦生', '81dc9bdb52d04dc20036dbd8313ed055', '1', '28', '1469014691', '0', '无', '0', '3', '非吾晓天下，才高而已；非吾纵古今，时赋而已；非吾睨九州，宏观而已', '10000.00', '18234717786', '0', '3');
INSERT INTO `wed_user` VALUES ('5', '李民梦', '09e2c0eab4e2ef27af2dec0e5fe17c23', '1', '22', '1469696294', '0', '无', '0', '4', 'wrweqtrte', '100000.00', '3423542', '2', '2');
INSERT INTO `wed_user` VALUES ('6', '伍华志', '2c828f88626eb808544afaf1d8c954ad', '1', '43', '1469696334', '1469780012', '无', '0', '5', '242', '1000000.00', '242', '2', '2');

-- ----------------------------
-- Table structure for wed_user_position
-- ----------------------------
DROP TABLE IF EXISTS `wed_user_position`;
CREATE TABLE `wed_user_position` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `position_name` (`position_name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_user_position
-- ----------------------------
INSERT INTO `wed_user_position` VALUES ('1', '店长');
INSERT INTO `wed_user_position` VALUES ('2', '婚礼主持');
INSERT INTO `wed_user_position` VALUES ('3', '摄影师');
INSERT INTO `wed_user_position` VALUES ('4', '造型设计师');
INSERT INTO `wed_user_position` VALUES ('5', '音响控制师');
INSERT INTO `wed_user_position` VALUES ('6', '设备管理');
INSERT INTO `wed_user_position` VALUES ('7', '客服');

-- ----------------------------
-- Table structure for wed_user_status
-- ----------------------------
DROP TABLE IF EXISTS `wed_user_status`;
CREATE TABLE `wed_user_status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_user_status
-- ----------------------------
INSERT INTO `wed_user_status` VALUES ('1', '不佳');
INSERT INTO `wed_user_status` VALUES ('2', '一般');
INSERT INTO `wed_user_status` VALUES ('3', '良好');

-- ----------------------------
-- Table structure for wed_wedding
-- ----------------------------
DROP TABLE IF EXISTS `wed_wedding`;
CREATE TABLE `wed_wedding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bride` varchar(8) NOT NULL,
  `bridegroom` varchar(8) NOT NULL,
  `bride_info` varchar(100) NOT NULL,
  `bridegroom_info` varchar(100) NOT NULL,
  `address` smallint(6) NOT NULL,
  `wedding_date` int(11) NOT NULL,
  `info` text,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `top` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_wedding
-- ----------------------------
INSERT INTO `wed_wedding` VALUES ('1', '艾米', '麦克', '', '', '2', '1469185198', '', '3', '0');
INSERT INTO `wed_wedding` VALUES ('3', '风彩铃', '素还真', '书香门第', '霹雳王朝国相', '3', '1477929600', '婚礼要华丽', '3', '0');
INSERT INTO `wed_wedding` VALUES ('5', '廉庄', '最光阴', '善良，开朗，有爱心，职业幼师', '沉稳，朴实，技术牛人，职业程序员', '5', '1478188800', '贴近田园风格，不求奢华，要求自然风景要美丽', '3', '1');
INSERT INTO `wed_wedding` VALUES ('6', '绮寮怨', '商清逸', '在一次际遇遇见他', '在一次际遇遇见她', '8', '1469252232', '经过无数波折终于在一起的一对恋人', '3', '0');
INSERT INTO `wed_wedding` VALUES ('7', '紫鷨', '玄同', '经历了大风大浪，终于走到一起', '', '1', '1469252999', '一起经历了风风雨雨，终于走到一起', '3', '0');

-- ----------------------------
-- Table structure for wed_wedding_status
-- ----------------------------
DROP TABLE IF EXISTS `wed_wedding_status`;
CREATE TABLE `wed_wedding_status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wed_wedding_status
-- ----------------------------
INSERT INTO `wed_wedding_status` VALUES ('1', '预约');
INSERT INTO `wed_wedding_status` VALUES ('2', '进行');
INSERT INTO `wed_wedding_status` VALUES ('3', '结束');
INSERT INTO `wed_wedding_status` VALUES ('4', '已取消');

# Host: localhost  (Version: 5.6.14)
# Date: 2013-11-03 23:04:53
# Generator: MySQL-Front 5.3  (Build 4.52)

/*!40101 SET NAMES utf8 */;

/* create database vital */
CREATE DATABASE `vital` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

/* use vital */
USE `vital`;


#
# Structure for table "login_attempts"
#

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "login_attempts"
#


#
# Structure for table "members"
#

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` tinyint(1) DEFAULT '0' COMMENT '0 = inactive, 1=active',
  `DELETE_FLAG` tinyint(1) DEFAULT '0',
  `SALT` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "members"
#

INSERT INTO `members` VALUES (1,'Admin','P@ssword123','2013-11-02 00:00:00',1,0,''),(2,'test','password1','2013-11-02 00:00:00',1,0,''),(3,'vitalconn','fc180400fbd928b75415faa8df07e849b97e517d998c2fc56a5111506cb588996697711bc5c31f1d7794d65f85154b02e64aaab83afd8d5439ccb3565db4d3cd','2013-11-03 00:00:00',1,0,'6e954714a576ab8241bf858771b8422e97b9d052082f5ed5ec707dd7409cf2c110eb1c6e644c9104f383bd05ffe3f5468b128efeef9cd768c2935c35a99a43a3'),(4,'admin2','4a3f65f74571d826532cedc0467ec1a5783519f236179b7a8d9c9547ee4978b1443cd8a9f3c8ecf8df1fbf16fdc2404e65990c31f5fba64d49b2a2c17a48db3e','2013-11-03 00:00:00',1,0,'0a4508a6079ff17a79e74cb9572ac54191884e911f91d6f94e79c752d63ac01faca264f2ad1ddaf03e9fb072149f47323c1aff7f35d691808a9c3c91960f3d3b');

#
# Structure for table "topic_style"
#

DROP TABLE IF EXISTS `topic_style`;
CREATE TABLE `topic_style` (
  `STYLE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HEADER_CSS_CLASS` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BODY_CSS_CLASS` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`STYLE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "topic_style"
#

INSERT INTO `topic_style` VALUES (1,'service branding','service-content gray-color border-branding-color'),(2,'service graphic-design','service-content gray-color border-graphic-design-color'),(3,'service website-design','service-content gray-color border-website-design-color'),(4,'service print-management','service-content gray-color border-print-management-color'),(5,'service event-management','service-content gray-color border-event-management-color'),(6,'service public-relations','service-content gray-color border-public-relations-color');

#
# Structure for table "topic_type"
#

DROP TABLE IF EXISTS `topic_type`;
CREATE TABLE `topic_type` (
  `TOPIC_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TOPIC_TYPE_NAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TOPIC_TYPE_DESC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TOPIC_DISPLAY_NAME` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`TOPIC_TYPE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "topic_type"
#

INSERT INTO `topic_type` VALUES (2,'OUR_SERVICES','All entries about our services','Our services'),(3,'ABOUT_US','About ourselve','About us'),(4,'OUR_PARTNERS','Our partners','Our partners'),(5,'CONTACT_US','Contact us','Contact us');

#
# Structure for table "content_topic"
#

DROP TABLE IF EXISTS `content_topic`;
CREATE TABLE `content_topic` (
  `CONTENT_TOPIC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_DESC` text COLLATE utf8_unicode_ci,
  `LONG_DESC` text COLLATE utf8_unicode_ci,
  `TOPIC_TYPE_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CONTENT_TOPIC_ID`),
  KEY `TOP_TYPE` (`TOPIC_TYPE_ID`),
  CONSTRAINT `TOP_TYPE` FOREIGN KEY (`TOPIC_TYPE_ID`) REFERENCES `topic_type` (`TOPIC_TYPE_ID`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "content_topic"
#

INSERT INTO `content_topic` VALUES (1,'BRANDING','We believe that a logo...','We believe that a logo is the heart and soul of any company''s corporate identity so we are dedicated to make sure that you will have a unique and creative logo that will standout from the rest.',2),(2,'GRAPHIC DESIGN','Your marketing collaterals represents...','Your marketing collaterals represents your company and speaks for you when you are not around. Hence, we''re always ready to pool our creative juices together to ensure that your professionalism and products quality are well represented in you marketing collaterals. From brochures to catalogues, banners to billboards, we do it all.',2),(3,'WEBSITE DESIGN','Web exposure has become a...','Web exposure has become a major sales and marketing strategy for all companies, big and small. Let our team work with you to design a creative website that would bring forth your intended message but yet remain user-friendly and easy to navigate. We will also create a built-in management system that would allow you to analyse the site''s viewership and to be able to update information with ease. Our IT consultants will also assist in search engine optimisation (SEO) for your website.',2),(4,'PRINT MANAGEMENT','We believe that a logo...','Allow us the opportunity to lighten you load, Let our experienced professionals manage your print jobs since poorly produced collaterals would do injustice to the design and as a result, negatively affect your corporate image. Our team will take care of your job from final artwork to print check, quality control and finally to the delivery of the finished products. We will ensure your expectations on quality and deadlines will be fully met. We will even assist you with minor corrects or touchups on the artwork before print, unless we are already designing your collaterals.',2),(5,'EVENTS MANAGEMENT','Organising a corporate event ...','Organising a corporate event can be a daunting task so let our dedicated team work together with you from conceptualisation to completion. We will work together to organise a successful and memorable event that you and your participants will talk about for a long time afterwards.',2),(6,'PUBLIC RELATIONS','In order to provide...','In order to provide a more comprehensive and complete service, we have teamed up with a group of public relations professionals with both international and local experience so that we can work with you to meet your communications objectives. Contact and connect with us so that we can work together to connect with your partners and customers.',2);

#
# Structure for table "topic_style_link"
#

DROP TABLE IF EXISTS `topic_style_link`;
CREATE TABLE `topic_style_link` (
  `CONTENT_TOPIC_ID` int(11) DEFAULT NULL,
  `STYLE_ID` int(11) DEFAULT NULL,
  KEY `content_topic_link` (`CONTENT_TOPIC_ID`),
  KEY `style_link` (`STYLE_ID`),
  CONSTRAINT `content_topic_link` FOREIGN KEY (`CONTENT_TOPIC_ID`) REFERENCES `content_topic` (`CONTENT_TOPIC_ID`),
  CONSTRAINT `style_link` FOREIGN KEY (`STYLE_ID`) REFERENCES `topic_style` (`STYLE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "topic_style_link"
#

INSERT INTO `topic_style_link` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6);

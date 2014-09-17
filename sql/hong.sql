/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.27-log : Database - hong
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `title` varchar(100) DEFAULT NULL COMMENT '비디오 제목',
  `filename` varchar(200) DEFAULT NULL COMMENT '비디오파일 이름&절대경로',
  `index` int(11) DEFAULT NULL COMMENT '정렬순서',
  `filesize` int(11) NOT NULL COMMENT '비디오파일 사이즈',
  `image` varchar(200) NOT NULL COMMENT '썸네일이미지경로',
  `file_type` varchar(20) DEFAULT NULL COMMENT '비디오 파일 타입',
  `current` float DEFAULT '0' COMMENT '재생된 시간',
  `create_date` datetime NOT NULL COMMENT '생성 시간',
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

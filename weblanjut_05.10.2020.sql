/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - weblanjut_05/10/2020
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`weblanjut_05/10/2020` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `weblanjut_05/10/2020`;

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id`,`nama`,`alamat`,`telepon`) values 
(1,'Kunti Eliyen','Perum. Candra Kirana Kediri','0853472829'),
(2,'Ratna Widya','Jl Pemandian kEdiri','0853472829'),
(3,'Rinanza Zulmy','Ngadiluwih','0853472829'),
(4,'Abidatul Izza','Ngronggo Kediri','0853472829'),
(5,'Fikha Rizky','Demak Trenggalek','0853472829');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

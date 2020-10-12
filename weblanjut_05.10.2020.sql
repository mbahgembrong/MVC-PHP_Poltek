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

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode_barang` char(7) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `harga_jual` int(10) DEFAULT NULL,
  `harga_beli` int(10) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`kode_barang`,`nama`,`harga_jual`,`harga_beli`) values 
('PM211','Indomie Jumbo',5000,6000);

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id_pegawai` char(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`nama`,`ttl`,`jabatan`,`telepon`) values 
('PG1','Husani','Kediri, 3 Februari 1987','Kasir','0818992034'),
('PG2','Kurnia','Kediri,2 Oktober 1990','Sales','0818992033');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` char(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id_pelanggan`,`nama`,`alamat`,`telepon`) values 
('PL1','Kunti Eliyen','Perum. Candra Kirana Kediri','0853472829'),
('PL2','Ratna Widya','Jl Pemandian kEdiri','0853472829'),
('PL3','Rinanza Zulmy','Ngadiluwih','0853472829'),
('PL4','Abidatul Izza','Ngronggo Kediri','0853472829'),
('PL5','Fikha Rizky','Demak Trenggalek','0853472829');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_pelanggan` char(7) DEFAULT NULL,
  `id_sales` char(7) DEFAULT NULL,
  `id_kasir` char(7) DEFAULT NULL,
  `kode_barang` char(7) DEFAULT NULL,
  KEY `pelanggan` (`id_pelanggan`),
  KEY `barang` (`kode_barang`),
  KEY `sales` (`id_sales`),
  KEY `kasir` (`id_kasir`),
  CONSTRAINT `barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`),
  CONSTRAINT `kasir` FOREIGN KEY (`id_kasir`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  CONSTRAINT `sales` FOREIGN KEY (`id_sales`) REFERENCES `pegawai` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_pelanggan`,`id_sales`,`id_kasir`,`kode_barang`) values 
('PL2','PG2','PG1','PM211');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

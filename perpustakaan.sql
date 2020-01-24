/*
SQLyog Professional v10.42 
MySQL - 5.5.5-10.1.19-MariaDB : Database - perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpustakaan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `perpustakaan`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `nim` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`nim`,`nama_anggota`,`gender`,`jurusan`,`status`,`password`,`no_hp`,`alamat`) values ('2019202002','dedi','Laki-laki','Humas','Anggota','111111','081234567808','pekanbaru'),('2019202003','reni','Perempuan','manajement informatika','Anggota','999999','081234567899','pekanbaru'),('2019202008','dera','Perempuan','Humas','Anggota','333333','081234567800','pekanbaru');

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id_buku` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`id_buku`,`judul_buku`,`pengarang`,`penerbit`,`tahun_terbit`,`stok`) values ('B-001','PHP','hendra azwar','Lumbung Kita','2007',205),('B-003','database','muhamad randi','lumbung kita','2008',250),('B-004','network','agus pratama','erlangga','2010',200);

/*Table structure for table `operator` */

DROP TABLE IF EXISTS `operator`;

CREATE TABLE `operator` (
  `id_operator` varchar(255) NOT NULL,
  `nama_operator` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `operator` */

insert  into `operator`(`id_operator`,`nama_operator`,`status`,`password`,`no_hp`) values ('12345','david ramadhani','Admin','191299','081234567810'),('12346','hendrik ari purnairawan','Operator','121212','081234567822'),('12350','pertiwi','Operator','151515','081234567850');

/*Table structure for table `peminjaman` */

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `lama_peminjaman` int(255) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `peminjaman` */

insert  into `peminjaman`(`id_peminjaman`,`nim`,`id_buku`,`tgl_peminjaman`,`lama_peminjaman`,`tgl_pengembalian`,`jumlah`) values ('P-001','2019202003','B-001','2020-01-01',6,'2020-01-07',5),('P-003','2019202002','B-003','2020-01-19',2,'2020-01-21',2),('P-004','2019202003','B-004','2020-01-01',5,'2020-01-06',2),('P-009','2019202003','B-002','2020-01-08',0,'2020-01-10',9);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

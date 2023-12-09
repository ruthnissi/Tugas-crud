
CREATE DATABASE`tokobuku`;

USE `tokobuku`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `genre_buku` varchar(50) NOT NULL,
  `harga_buku` double NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`id_buku`,`judul_buku`,`genre_buku`,`harga_buku`) values 
(1,'Matematika Cerdas IA','Paket Belajar',100000),
(2,'Cerdas Cermat IIB','LKS',20000),
(3,'Kreatif IVA','LKS',40000),
(4,'Pengetahuan Sosial VA','Paket Belajar',155000);



/*
SQLyog Community v12.2.6 (32 bit)
MySQL - 10.1.16-MariaDB : Database - kopkar_hyundai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kopkar_hyundai` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kopkar_hyundai`;

/*Table structure for table `tbl_adv` */

DROP TABLE IF EXISTS `tbl_adv`;

CREATE TABLE `tbl_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `nama_adv` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `link_img` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `status_display` int(1) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_adv` */

insert  into `tbl_adv`(`adv_id`,`tgl_input`,`nama_adv`,`link`,`link_img`,`keterangan`,`status_display`,`status_delete`) values 
(1,'2017-12-27','Web Hosting','https://www.000webhost.com/1032765.html','https://www.000webhost.com/images/banners/336x280/1.jpg','adv image atas/template W*H(336*280)',1,0),
(2,'2017-12-28','Web Hosting','https://www.000webhost.com/1032765.html','https://www.000webhost.com/images/banners/336x280/2.jpg','adv image bawah W*H(336*280)',2,0),
(3,'2018-01-04','Web Hosting','https://www.000webhost.com/1032765.html','https://www.000webhost.com/images/banners/300x600/1.jpg','adv image kanan/blog W*H(336*280)',3,0),
(4,'2018-01-04','Web Hosting','https://www.000webhost.com/1032765.html','https://www.000webhost.com/images/banners/300x600/2.jpg','adv image kanan/blog detail W*H(336*280)',4,0);

/*Table structure for table `tbl_distributor` */

DROP TABLE IF EXISTS `tbl_distributor`;

CREATE TABLE `tbl_distributor` (
  `distributor_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_distributor` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`distributor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_distributor` */

insert  into `tbl_distributor`(`distributor_id`,`nama_distributor`,`image`,`status_delete`) values 
(1,'Ajax','ajax.png',0),
(2,'Bootstrap','bootstrap.png',0),
(3,'Codeigniter','codeigniter.png',0),
(4,'Javascript','javascript.png',0),
(5,'tes','javascript.png',0),
(6,'','',1);

/*Table structure for table `tbl_info` */

DROP TABLE IF EXISTS `tbl_info`;

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `wa` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo` text NOT NULL,
  `logo_full` text NOT NULL,
  `about` text NOT NULL,
  `keunggulan` text NOT NULL,
  `siup` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_info` */

insert  into `tbl_info`(`id`,`nama_toko`,`alamat`,`telp`,`hp`,`wa`,`fax`,`email`,`logo`,`logo_full`,`about`,`keunggulan`,`siup`,`npwp`) values 
(1,'KOPERASI KARYAWAN HYUNDAI','Jl. H. Wahab Affan Km. 28, Pondok Ungu - Bekasi 17132, Indonesia ','(021)8854220','087771019854','6287771019854','-','koperasi@hyundaimobil.com','logo.png','logo.png','<p>Seluruh produk Hyundai Brand Collection secara resmi dikeluarkan oleh Hyundai Mobil Indonesia yang didesain dan diproduksi berdasarkan konsep asli dari Brand Collection yang mencerminkan identitas merek.</p>\r\n\r\n<p>Merchandise Brand Collection Hyundai dibuat guna mewujudkan karakteristik merek Hyundai dan setiap modelnya merepresentasikan kualitas. Untuk menambah ikatan emosional antara Anda dengan merek, setiap item Hyundai Brand Collection secara terus-menerus menawarkan Anda suatu cara yang tepat untuk mengimplementasikan kualitas produk melalui visualisasi dan kenyamanan dalam penggunaan.</p>\r\n','<p>keunggulan</p>\r\n','-','-');

/*Table structure for table `tbl_menu_admin` */

DROP TABLE IF EXISTS `tbl_menu_admin`;

CREATE TABLE `tbl_menu_admin` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu_admin` */

insert  into `tbl_menu_admin`(`menu_id`,`nama_menu`,`icon`,`link`,`parent`,`status_delete`) values 
(1,'Category','clip-puzzle','category',7,0),
(2,'Product','	clip-wrench','product',0,0),
(3,'Category Promo','clip-puzzle-2','category_promo',7,0),
(4,'Information','clip-home','info',0,0),
(5,'Menu','clip-globe','menu',0,1),
(6,'Halaman','clip-keyboard','halaman',0,1),
(7,'Master','	clip-grid','#',0,0),
(8,'Tags','clip-tag','tags',0,1),
(9,'Transaksi','clip-phone-3','transaksi',0,1),
(10,'Distributor','clip-cube','distributor',7,0),
(11,'Widget','clip-paperclip','#',0,0),
(12,'Slider Image','clip-stack-empty','product_slider',11,0),
(13,'Widget','clip-images','product_widget',11,0),
(14,'Promo','clip-tag','promo',0,0),
(15,'-','','',0,1),
(16,'-','','',0,1),
(17,'-','','',0,1);

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `nama_product_seo` varchar(140) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `image` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `display_in_home` int(1) NOT NULL DEFAULT '0',
  `publish` int(1) NOT NULL DEFAULT '0',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`product_id`,`tgl_input`,`nama_product`,`nama_product_seo`,`keterangan`,`harga`,`image`,`kategori_id`,`display_in_home`,`publish`,`status_delete`) values 
(1,'2017-11-24','HYUNDAI USB LEATHER 8GB','hyundai-usb-leather-8gb','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-60001YG1 (brown)</li>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-60000YG1 (black)</li>\r\n	<li>Material&nbsp;&nbsp; : PU Leather</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Brown &amp; Black</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 83,000 (incl.box, nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',83000,'hyundai-usb-leather-8gb.png',2,1,1,0),
(2,'2017-11-22','HYUNDAI POLO SHIRT BLACK FOREST','hyundai-polo-shirt-black-forest','<ul>\r\n	<li>No. Part : 07610-PSHB2M/L/XL</li>\r\n	<li>Material&nbsp; : Lacoste CVC</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Black</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 82,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',82000,'polo-shirt-black-forest.png',1,2,1,0),
(3,'2017-11-24','HYUNDAI POLO SHIRT GREY COUTURE','hyundai-polo-shirt-grey-couture','<ul>\r\n	<li>No. Part&nbsp; : 07610-PSHG1M/L/XL</li>\r\n	<li>Material&nbsp; : Lacoste Combed</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Grey</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 76,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',76000,'hyundai-polo-shirt-grey-couture.png',1,0,1,0),
(4,'2018-04-03','T-SHIRT HYUNDAI VELOSTER','tshirt-hyundai-veloster','<ul>\r\n	<li>No. Part&nbsp; : - (black)</li>\r\n	<li>No. Part&nbsp; : - (white)</li>\r\n	<li>Material&nbsp; : Cotton Combed 20S</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Black &amp; White</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 65,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',65000,'kaos_veloster_a.png',1,2,1,0),
(5,'2018-04-05','PENSIL HYUNDAI 2B','pensil-hyundai-2b','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 08000-00812</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : wood, paper box</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Brown</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : pencil=17,5cm; box=18cm</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 25,000/box (1box=5pc)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',25000,'pensil-hyundai-2b.png',2,0,1,0),
(6,'2018-04-05','LONG SLEEVE MODEST T-SHIRT','long-sleeve-modest-tshirt','<ul>\r\n	<li>No. Part&nbsp; : 07610-THB01 (black)</li>\r\n	<li>No. Part&nbsp; : 07610-THW01 (white)</li>\r\n	<li>Material&nbsp; : Cotton Combed 20S</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Black &amp; White</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 65,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',65000,'long-sleeve-modest-tshirt.png',1,0,1,0),
(7,'2018-04-05','POLO SHIRT RHRC BROWN','polo-shirt-rhrc-brown','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 070C0-PSRHRCM/L/XL</li>\r\n	<li>Material&nbsp;&nbsp; : Cotton CVC</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 148,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (L &amp; XL)</strong></li>\r\n</ul>\r\n',148000,'polo-shirt-rhrc-brown.png',1,0,1,0),
(8,'2018-04-05','HYUNDAI I-UMBRELLA GREY/BLUE','hyundai-iumbrella-greyblue','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-50020YG1 (Grey)</li>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-50010YG1 (Blue)</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Fiber (structure)</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Black-Blue &amp; Black-Grey (2 layer)</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 159,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',159000,'hyunda-iumbrella-greyblue.png',3,2,1,0),
(9,'2018-04-05','HYUNDAI GOODY BAG-RHRC','hyundai-goody-bagrhrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-10100YG1</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Spunbound 100gr</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 35x32,5x10cm</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Blue Navy</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 15,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',15000,'hyundai-goody-bag-rhrc.png',3,2,1,0),
(10,'2018-04-05','HYUNDAI CAPS WRC','hyundai-caps-wrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07100-13010YG1</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Reffel</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Diameter = 18 cm</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Blue Navy &ndash; Red</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 32,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',32000,'hyundai-caps-wrc.png',3,0,1,0),
(11,'2018-04-05','BOWLING THERMOS','bowling-thermos','<ul>\r\n	<li>No. Part&nbsp; : 07000-10010B</li>\r\n	<li>Detail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 500ml, Hot&amp;Cold</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 118,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',118000,'bowling-thermos.png',3,2,1,0),
(12,'2018-04-05','MUG RHRC','mug-rhrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-10000MHR</li>\r\n	<li>Material&nbsp;&nbsp; : Ceramic</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 40,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',40000,'mug-rhrc.png',3,1,1,0),
(13,'2018-04-05','HYUNDAI UMBRELLA RHRC','hyundai-umbrella-rhrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-50000YG1</li>\r\n	<li>Material&nbsp;&nbsp; : Nylon, black structure</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 50,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',50000,'hyundai-umbrella-rhrc.png',3,1,1,0),
(14,'2018-04-05','LAPTOP BAG HYUNDAI','laptop-bag-hyundai','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-10000LB</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Condura</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 38x10x30 cm</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <s>Rp 175,000</s>&nbsp; &gt;&gt; Rp 65,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (limited)</strong></li>\r\n</ul>\r\n',65000,'laptop-bag.png',3,0,1,0),
(15,'2018-04-05','PARACHUTE FOLDING JACKET','parachute-folding-jacket','<ul>\r\n	<li>No. Part&nbsp; : 07000-23500</li>\r\n	<li>Material&nbsp; : Parachutte</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Light Grey</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : All Size</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <s>Rp 159,000</s> &gt; Rp 60,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (limited)</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',60000,'parachute-folding-jacket.png',1,2,1,0),
(16,'2018-04-05','JACKET SPORT HYUNDAI','jacket-sport-hyundai','<ul>\r\n	<li>No. Part&nbsp; : 07000-23400</li>\r\n	<li>Material&nbsp;&nbsp; : Cotton</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Soft Grey</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : All Size</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <s>Rp 180,000</s>&nbsp;&nbsp; &gt; Rp 70,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (limited)</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',70000,'jacket-sport-hyundai.png',1,1,1,0),
(17,'2018-04-05','','','',0,'',1,0,0,0);

/*Table structure for table `tbl_product_image` */

DROP TABLE IF EXISTS `tbl_product_image`;

CREATE TABLE `tbl_product_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_image` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_image` */

insert  into `tbl_product_image`(`image_id`,`nama_image`,`image`,`product_id`,`status_delete`) values 
(1,'POLO SHIRT BLACK FOREST','polo-shirt-black-forest.png',2,0),
(2,'HYUNDAI POLO SHIRT GREY COUTURE','hyundai-polo-shirt-grey-couture.png',3,0),
(3,'JACKET SPORT HYUNDAI','jacket-sport-hyundai.png',16,0),
(4,'LONG SLEEVE MODEST T-SHIRT','long-sleeve-modest-tshirt.png',6,0),
(5,'PARACHUTE FOLDING JACKET','parachute-folding-jacket.png',15,0),
(6,'POLO SHIRT RHRC BROWN','polo-shirt-rhrc-brown.png',7,0),
(7,'T-SHIRT HYUNDAI VELOSTER WHITE','kaos_veloster_a.png',4,0),
(8,'T-SHIRT HYUNDAI VELOSTER BLACK','kaos_veloster_b.png',4,0),
(9,'BOWLING THERMOS','bowling-thermos.png',11,0),
(10,'HYUNDAI CAPS WRC','hyundai-caps-wrc.png',10,0),
(11,'HYUNDAI GOODY BAG-RHRC','hyundai-goody-bag-rhrc.png',9,0),
(12,'HYUNDAI I-UMBRELLA GREY/BLUE','hyunda-iumbrella-greyblue.png',8,0),
(13,'HYUNDAI UMBRELLA RHRC','hyundai-umbrella-rhrc.png',13,0),
(14,'LAPTOP BAG HYUNDAI','laptop-bag.png',14,0),
(15,'MUG RHRC','mug-rhrc.png',12,0),
(16,'HYUNDAI USB LEATHER 8GB','hyundai-usb-leather-8gb.png',1,0),
(17,'PENSIL HYUNDAI 2B','pensil-hyundai-2b.png',5,0);

/*Table structure for table `tbl_product_kategori` */

DROP TABLE IF EXISTS `tbl_product_kategori`;

CREATE TABLE `tbl_product_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `nama_kategori_seo` varchar(100) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_kategori` */

insert  into `tbl_product_kategori`(`kategori_id`,`nama_kategori`,`nama_kategori_seo`,`status_delete`) values 
(1,'APPAREL SELECTION','apparel-selection',0),
(2,'WORKSTUFF SELECTION','workstuff-selection',0),
(3,'LIFESTYLE SELECTION','lifestyle-selection',0);

/*Table structure for table `tbl_promo` */

DROP TABLE IF EXISTS `tbl_promo`;

CREATE TABLE `tbl_promo` (
  `promo_id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `judul_promo` varchar(100) NOT NULL,
  `judul_promo_seo` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `publish` int(1) NOT NULL DEFAULT '0',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_promo` */

insert  into `tbl_promo`(`promo_id`,`tgl_input`,`judul_promo`,`judul_promo_seo`,`kategori_id`,`deskripsi`,`user_id`,`publish`,`status_delete`) values 
(1,'2017-12-27','Judul Blog 1','judul-blog-1',2,'isi deskripsi produk',1,1,0),
(2,'2017-12-28','Judul blog 2','judul-blog-2',1,'isi deskasdlkajd alsd alskdjalskdj laksjd laskdj lkasdj lkasdjlkasdj lksadj laskdj laskdj aasd as as as\r\nasd asd asd asd a\r\n aaads isi deskasdlkajd alsd alskdjalskdj laksjd laskdj lkasdj lkasdjlkasdj lksadj laskdj laskdj aasd as as as\r\nasd asd asd asd a\r\n aaads isi deskasdlkajd alsd alskdjalskdj laksjd laskdj lkasdj lkasdjlkasdj lksadj laskdj laskdj aasd as as as\r\nasd asd asd asd a\r\n aaads isi deskasdlkajd alsd alskdjalskdj laksjd laskdj lkasdj lkasdjlkasdj lksadj laskdj laskdj aasd as as as\r\nasd asd asd asd a\r\n aaads asd asd asd asd a\r\n aaads asd asd asd asd a\r\n aaads asd asd asd asd a\r\n aaads aaads isi deskasdlkajd alsd alskdjalskdj laksjd laskdj lkasdj lkasdjlkasdj lksadj laskdj laskdj aasd as as as\r\nasd asd asd asd a\r\n aaads asd asd asd asd a\r\n aaads asd asd asd asd a\r\n aaads asd asd asd asd a\r\n aaads ',1,1,0),
(3,'2018-04-04','TES345','tes345',3,'<P>TES345</P>\r\n',1,0,0),
(4,'2018-04-05','','',0,'',1,0,0);

/*Table structure for table `tbl_promo_image` */

DROP TABLE IF EXISTS `tbl_promo_image`;

CREATE TABLE `tbl_promo_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_image` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `promo_id` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_promo_image` */

insert  into `tbl_promo_image`(`image_id`,`nama_image`,`image`,`promo_id`,`status_delete`) values 
(1,'DASHBOARD REUNI','setelahmakan.jpg',1,0),
(2,'FORMAT ACARA REUNI','keluarkamarmandi.jpg',1,0),
(3,'FORMAT ACARA REUNI2','keluarkamarmandi.jpg',2,0),
(4,'DOA KELUAR KAMAR MANDI','keluarkamarmandi.jpg',3,0),
(5,'DOA SETELAH MAKAN','setelahmakan.jpg',3,0),
(6,'TES','setelahmakan.jpg',2,0);

/*Table structure for table `tbl_promo_kategori` */

DROP TABLE IF EXISTS `tbl_promo_kategori`;

CREATE TABLE `tbl_promo_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `nama_kategori_seo` varchar(100) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_promo_kategori` */

insert  into `tbl_promo_kategori`(`kategori_id`,`nama_kategori`,`nama_kategori_seo`,`status_delete`) values 
(1,'tes1','tes1',0),
(2,'tes2','tes2',0),
(3,'tes3','tes3',0),
(4,'tes4','tes4',0),
(5,'tes5','tes5',0);

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_slider` varchar(100) NOT NULL,
  `nama_product_seo` varchar(140) NOT NULL,
  `link` text NOT NULL,
  `keterangan` text NOT NULL,
  `image` text NOT NULL,
  `background` text NOT NULL,
  `publish` int(1) NOT NULL DEFAULT '0',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`slider_id`,`nama_slider`,`nama_product_seo`,`link`,`keterangan`,`image`,`background`,`publish`,`status_delete`) values 
(1,' LAPTOP BAG HYUNDAI','contoh','http://localhost/kopkarhyundai/product/laptop-bag-hyundai','<p><s>Rp 175,000</s>&nbsp; &gt;&gt; Rp 65,000 (Ready)</p>\r\n','laptop-bag.png','slidebg1.png',1,0),
(2,' BOWLING THERMOS','contoh','http://localhost/kopkarhyundai/product/bowling-thermos','<p>Rp 118,000 (Nett Ready)</p>\r\n','bowling-thermos.png','slidebg2.png',1,0),
(3,' HYUNDAI USB LEATHER 8GB','contoh','http://localhost/kopkarhyundai/product/hyundai-usb-leather-8gb','<p>Rp 83,000 (Incl. Box, Nett Ready)</p>\r\n','hyundai-usb-leather-8gb.png','transparent.png',1,0),
(4,' HYUNDAI UMBRELLA RHRC','','http://localhost/kopkarhyundai/product/hyundai-umbrella-rhrc','<p>Rp 50,000 (Ready)</p>\r\n','hyundai-umbrella-rhrc.png','transparent1.png',1,0);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1= aktif, 2= tidak aktif',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`user_id`,`nama_lengkap`,`username`,`password`,`status`,`status_delete`) values 
(1,'Administrator','admin','0192023a7bbd73250516f069df18b500',1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.11-MariaDB : Database - ssb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ssb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ssb`;

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
  `status_delete` int(1) NOT NULL DEFAULT 0,
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
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`distributor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_distributor` */

insert  into `tbl_distributor`(`distributor_id`,`nama_distributor`,`image`,`status_delete`) values 
(1,'Ajax','ajax.png',1),
(2,'Bootstrap','bootstrap.png',1),
(3,'Codeigniter','codeigniter.png',1),
(4,'Javascript','javascript.png',1),
(5,'tes','javascript.png',1),
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
(1,'PT SINAR SURYA BERLIAWAN','Graha Indah Blok C2/I3 Pondok Gede - Bekasi 17422','021 - 84991693','087771019854','6287771019854','021 - 8475229','admin@ssb-pt.com','logo.png','logo.png','<p>PT. Sinar Surya Berliawan is Freight Forwarder and Logistics company, which has been established since year of 2014. This company built after we have had many experiences of working in a reputable foreign freight forwarding company in Jakarta for many years.</p>\r\n\r\n<p>We provide an integrated total logistics service solution by air, ocean, inland transportation and warehousing service to achieve customer satisfaction. We employ specialists who possess proven analytic and operations expertise. They maintain a dedicated work ethic to do everything possible to satisfy the client service requirements.</p>\r\n','<p>keunggulan</p>\r\n','-','-');

/*Table structure for table `tbl_menu_admin` */

DROP TABLE IF EXISTS `tbl_menu_admin`;

CREATE TABLE `tbl_menu_admin` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu_admin` */

insert  into `tbl_menu_admin`(`menu_id`,`nama_menu`,`icon`,`link`,`parent`,`status_delete`) values 
(1,'Category','clip-puzzle','category',7,0),
(2,'Product','	clip-wrench','product',0,0),
(3,'Information','clip-home','info',0,0),
(4,'Shipment','clip-truck','shipment',0,0),
(5,'Shipment List','clip-list','shipment/list_shipment',0,0),
(6,'Shipment Status','clip-checkmark-circle','shipment/status',0,0),
(7,'Master Data','	clip-grid','#',0,0),
(8,'','clip-truck','#',0,1),
(9,'','clip-phone-3','transaksi',0,1),
(10,'','clip-cube','distributor',0,1),
(11,'Widget','clip-paperclip','#',0,0),
(12,'Slider Image','clip-stack-empty','product_slider',11,0),
(13,'Widget','clip-images','product_widget',11,0),
(14,'','clip-tag','promo',0,1),
(15,'','','',0,1),
(16,'','','',0,1),
(17,'','','',0,1);

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
  `display_in_home` int(1) NOT NULL DEFAULT 0,
  `publish` int(1) NOT NULL DEFAULT 0,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`product_id`,`tgl_input`,`nama_product`,`nama_product_seo`,`keterangan`,`harga`,`image`,`kategori_id`,`display_in_home`,`publish`,`status_delete`) values 
(1,'2017-11-24','HYUNDAI USB LEATHER 8GB','hyundai-usb-leather-8gb','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-60001YG1 (brown)</li>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-60000YG1 (black)</li>\r\n	<li>Material&nbsp;&nbsp; : PU Leather</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Brown &amp; Black</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 83,000 (incl.box, nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',83000,'hyundai-usb-leather-8gb.png',3,0,0,1),
(2,'2018-08-08','SEA AND AIR FREIGHT FORWARDING','sea-and-air-freight-forwarding','<p><strong>Seafreight:</strong></p>\r\n\r\n<p>Offering wide range services from FCL, LCL, Ro/Ro, Conventional and Project Cargo from Overseas as well as Indonesia.</p>\r\n\r\n<p><strong>Airfreight:</strong></p>\r\n\r\n<p>General Cargo, Dangerous Goods Cargo, Medical Devices arrangement.</p>\r\n\r\n<p><strong>Domestics Inter Island:</strong></p>\r\n\r\n<p>Port to port, door to port, port to door and door to door services for inter islands throughout Indonesia Freight</p>\r\n',0,'cargo1.png',2,1,1,0),
(3,'2018-08-08','CUSTOMS CLEARANCE','customs-clearance','<p>Drawing on many years of experience, we are well qualified to handle all aspects of document and custom clearance. With our experience, we provide customs clearance solutions for businesses from large corporates to companies, wholesalers, and even private individuals.</p>\r\n\r\n<p>Our strength in understanding import and export regulations enables us to offer advice to importer and exporters on all customs related matters, and make sure customers will get a seamless transfer of goods in a cost and time effective manner.</p>\r\n',0,'custom-clearance.png',2,1,1,0),
(4,'2018-04-03','T-SHIRT HYUNDAI VELOSTER','tshirt-hyundai-veloster','<ul>\r\n	<li>No. Part&nbsp; : - (black)</li>\r\n	<li>No. Part&nbsp; : - (white)</li>\r\n	<li>Material&nbsp; : Cotton Combed 20S</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Black &amp; White</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 65,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',65000,'kaos_veloster_a.png',3,0,0,1),
(5,'2018-04-05','PENSIL HYUNDAI 2B','pensil-hyundai-2b','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 08000-00812</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : wood, paper box</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Brown</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : pencil=17,5cm; box=18cm</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 25,000/box (1box=5pc)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',25000,'pensil-hyundai-2b.png',3,0,0,1),
(6,'2018-08-08','WAREHOUSING','warehousing','<p>In addition to our extensive sea freight services, we offer comprehensive nationwide logistics solution. Our warehousing and distribution services offer a cost-effective inventory management. No matter what you need, either a simple cost-effective warehousing solution or long-term inventory management and distribution, we provide secure and efficient services.</p>\r\n\r\n<p>We can create and implement a fully customizable solution to meet your specifications and requirements. No matter if it&#39;s finished products, components, or raw materials, we have the facilities for general warehousing&#39;s needs.</p>\r\n\r\n<p>Experiences:</p>\r\n\r\n<ol>\r\n	<li>MRI</li>\r\n	<li>Siloam Delivery</li>\r\n	<li>Other projects 2000-2013</li>\r\n	<li>Importation and Logistics of PT. Mindray Medical Indonesia beginning 2014-Present</li>\r\n</ol>\r\n',0,'warehouse.png',2,1,1,0),
(7,'2018-04-05','POLO SHIRT RHRC BROWN','polo-shirt-rhrc-brown','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 070C0-PSRHRCM/L/XL</li>\r\n	<li>Material&nbsp;&nbsp; : Cotton CVC</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : M, L, XL</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 148,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (L &amp; XL)</strong></li>\r\n</ul>\r\n',148000,'polo-shirt-rhrc-brown.png',3,0,0,1),
(8,'2018-04-05','HYUNDAI I-UMBRELLA GREY/BLUE','hyundai-iumbrella-greyblue','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-50020YG1 (Grey)</li>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-50010YG1 (Blue)</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Fiber (structure)</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Black-Blue &amp; Black-Grey (2 layer)</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 159,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',159000,'hyunda-iumbrella-greyblue.png',3,0,0,1),
(9,'2018-04-05','HYUNDAI GOODY BAG-RHRC','hyundai-goody-bagrhrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-10100YG1</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Spunbound 100gr</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 35x32,5x10cm</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Blue Navy</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 15,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',15000,'hyundai-goody-bag-rhrc.png',3,0,0,1),
(10,'2018-04-05','HYUNDAI CAPS WRC','hyundai-caps-wrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07100-13010YG1</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Reffel</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Diameter = 18 cm</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Blue Navy &ndash; Red</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 32,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',32000,'hyundai-caps-wrc.png',3,0,0,1),
(11,'2018-04-05','BOWLING THERMOS','bowling-thermos','<ul>\r\n	<li>No. Part&nbsp; : 07000-10010B</li>\r\n	<li>Detail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 500ml, Hot&amp;Cold</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 118,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',118000,'bowling-thermos.png',3,0,0,1),
(12,'2018-04-05','MUG RHRC','mug-rhrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-10000MHR</li>\r\n	<li>Material&nbsp;&nbsp; : Ceramic</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 40,000 (nett)</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n',40000,'mug-rhrc.png',3,0,0,1),
(13,'2018-04-05','HYUNDAI UMBRELLA RHRC','hyundai-umbrella-rhrc','<ul>\r\n	<li>No. Part&nbsp;&nbsp; : 07000-50000YG1</li>\r\n	<li>Material&nbsp;&nbsp; : Nylon, black structure</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 50,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',50000,'hyundai-umbrella-rhrc.png',3,0,0,1),
(14,'2018-04-05','LAPTOP BAG HYUNDAI','laptop-bag-hyundai','<ul>\r\n	<li>No. Part&nbsp;&nbsp;&nbsp; : 07000-10000LB</li>\r\n	<li>Material&nbsp;&nbsp;&nbsp; : Condura</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 38x10x30 cm</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <s>Rp 175,000</s>&nbsp; &gt;&gt; Rp 65,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (limited)</strong></li>\r\n</ul>\r\n',65000,'laptop-bag.png',3,0,0,1),
(15,'2018-04-05','PARACHUTE FOLDING JACKET','parachute-folding-jacket','<ul>\r\n	<li>No. Part&nbsp; : 07000-23500</li>\r\n	<li>Material&nbsp; : Parachutte</li>\r\n	<li>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Light Grey</li>\r\n	<li>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : All Size</li>\r\n	<li>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <s>Rp 159,000</s> &gt; Rp 60,000</li>\r\n	<li>Stock&nbsp;&nbsp;&nbsp;&nbsp; : <strong>Ready (limited)</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n',60000,'parachute-folding-jacket.png',3,0,0,1),
(16,'2018-08-08','INLAND TRANSPORTATION','inland-transportation','<p>PT. Sinar Surya Berliawan has dependable trucking services for efficient inland freight transportation requirements. We can move your cargo safely and affordably, from single pallet across the city to fully loaded truck across the country.</p>\r\n\r\n<p>Our cost effective solutions will be tailored to match your specific capacity and service requirements. We maintain a strong commitment to a continually improving quality process, allowing us to consistently provide the best service to our customer.</p>\r\n',0,'truck.png',2,1,1,0),
(17,'2018-04-05','','','',0,'',3,0,0,1),
(18,'2020-09-26','ASD','asd','<p>asdasd</p>\r\n',234,'123.jpg',1,0,0,1);

/*Table structure for table `tbl_product_image` */

DROP TABLE IF EXISTS `tbl_product_image`;

CREATE TABLE `tbl_product_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_image` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_image` */

insert  into `tbl_product_image`(`image_id`,`nama_image`,`image`,`product_id`,`status_delete`) values 
(1,'POLO SHIRT BLACK FOREST','polo-shirt-black-forest.png',2,1),
(2,'HYUNDAI POLO SHIRT GREY COUTURE','hyundai-polo-shirt-grey-couture.png',3,1),
(3,'JACKET SPORT HYUNDAI','jacket-sport-hyundai.png',16,1),
(4,'LONG SLEEVE MODEST T-SHIRT','long-sleeve-modest-tshirt.png',6,1),
(5,'PARACHUTE FOLDING JACKET','parachute-folding-jacket.png',15,1),
(6,'POLO SHIRT RHRC BROWN','polo-shirt-rhrc-brown.png',7,1),
(7,'T-SHIRT HYUNDAI VELOSTER WHITE','kaos_veloster_a.png',4,1),
(8,'T-SHIRT HYUNDAI VELOSTER BLACK','kaos_veloster_b.png',4,1),
(9,'BOWLING THERMOS','bowling-thermos.png',11,1),
(10,'HYUNDAI CAPS WRC','hyundai-caps-wrc.png',10,1),
(11,'HYUNDAI GOODY BAG-RHRC','hyundai-goody-bag-rhrc.png',9,1),
(12,'HYUNDAI I-UMBRELLA GREY/BLUE','hyunda-iumbrella-greyblue.png',8,1),
(13,'HYUNDAI UMBRELLA RHRC','hyundai-umbrella-rhrc.png',13,1),
(14,'LAPTOP BAG HYUNDAI','laptop-bag.png',14,1),
(15,'MUG RHRC','mug-rhrc.png',12,1),
(16,'HYUNDAI USB LEATHER 8GB','hyundai-usb-leather-8gb.png',1,1),
(17,'PENSIL HYUNDAI 2B','pensil-hyundai-2b.png',5,1),
(18,'CARGO1','cargo1.png',2,0),
(19,'CARGO2','cargo2.png',2,0),
(20,'CUSTOM-CLEARANCE','31.png',3,1),
(21,'EXPORT IMPORT','4.png',3,1),
(22,'TRUCK','truck.png',16,0),
(23,'CUSTOM CLEARANCE','custom-clearance.png',3,0),
(24,'EXPORT IMPORT','export-import.png',3,0),
(25,'WAREHOUSING','warehouse.png',6,0),
(26,'ASD','123.jpg',18,1),
(27,'AQWE','WIN_20200822_20_08_45_Pro.jpg',18,1);

/*Table structure for table `tbl_product_kategori` */

DROP TABLE IF EXISTS `tbl_product_kategori`;

CREATE TABLE `tbl_product_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `nama_kategori_seo` varchar(100) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_kategori` */

insert  into `tbl_product_kategori`(`kategori_id`,`nama_kategori`,`nama_kategori_seo`,`status_delete`) values 
(1,'APPAREL SELECTION3','apparel-selection3',1),
(2,'WORKSTUFF SELECTION','workstuff-selection',0),
(3,'LIFESTYLE SELECTION','lifestyle-selection',1),
(4,'ERT','ert',1);

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
  `publish` int(1) NOT NULL DEFAULT 0,
  `status_delete` int(1) NOT NULL DEFAULT 0,
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
  `status_delete` int(1) NOT NULL DEFAULT 0,
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
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_promo_kategori` */

insert  into `tbl_promo_kategori`(`kategori_id`,`nama_kategori`,`nama_kategori_seo`,`status_delete`) values 
(1,'tes1','tes1',0),
(2,'tes2','tes2',0),
(3,'tes3','tes3',0),
(4,'tes4','tes4',0),
(5,'tes5','tes5',0);

/*Table structure for table `tbl_role` */

DROP TABLE IF EXISTS `tbl_role`;

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_role` */

insert  into `tbl_role`(`id`,`user_id`,`menu_id`) values 
(1,1,1),
(2,1,2),
(3,1,3),
(4,1,4),
(6,1,5),
(7,1,7),
(8,1,8),
(9,1,9),
(10,1,10),
(11,1,11),
(12,1,12),
(13,1,13),
(14,1,14),
(15,1,3),
(17,2,5),
(18,2,6),
(19,3,1),
(20,3,2),
(21,3,3),
(22,3,4),
(23,3,5),
(24,3,6),
(25,3,7),
(26,3,8),
(27,3,9),
(28,3,10),
(29,3,11),
(30,3,12),
(31,3,13),
(32,3,14);

/*Table structure for table `tbl_shipment` */

DROP TABLE IF EXISTS `tbl_shipment`;

CREATE TABLE `tbl_shipment` (
  `shipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `date_of_shipment` date NOT NULL,
  `to_location` varchar(50) NOT NULL,
  `consignee` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`shipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_shipment` */

insert  into `tbl_shipment`(`shipment_id`,`code`,`date_of_shipment`,`to_location`,`consignee`,`description`,`status`,`file`,`date_time`,`status_delete`) values 
(1,'SSB2009250001','2014-08-12','Tj Priuk Indonesia','PT XYZ','SUDAH SAMPAI TUJUAN','COMPLETE','a','2020-09-26 23:31:26',0),
(2,'AS','2020-09-09','ASD','ASD','SEGERA DIKIRIM','PROGRESS',NULL,'2020-09-27 03:25:19',0),
(3,'LKJ','2020-10-10','LKJ','LKJ','<p>123qwsd</p>\r\n','',NULL,'2020-09-27 03:28:08',1),
(4,'MNB','2020-10-02','MN','BM','SUDAH DIBAWA KURIR','PROGRESS','','2020-09-27 08:36:19',0),
(5,'KJH','2020-09-27','KJH','KJH','SIAP','COMPLETE','','2020-09-27 20:43:41',0),
(6,'NAIRA CS','2020-09-29','LKJ','LKJ','SUDAH DIKIRIM','DELIVERY','','2020-09-27 21:46:35',0),
(7,'AS2834672KJH','2020-09-28','PT XXX','BPK BUDI','SUDAH SAMPAI','COMPLETE',NULL,'2020-09-28 23:09:49',0),
(8,'LKJ234','2020-09-30','MALAYSIA','BPK BUDI','SUDAH DIKIRIM','DELIVERY','img_(1)11.jpg','2020-09-30 06:50:40',0);

/*Table structure for table `tbl_shipment_history` */

DROP TABLE IF EXISTS `tbl_shipment_history`;

CREATE TABLE `tbl_shipment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_history` datetime NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'PROGRESS' COMMENT 'progress, delivery, on the way, complete',
  `shipment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_shipment_history` */

insert  into `tbl_shipment_history`(`id`,`date_history`,`description`,`status`,`shipment_id`,`user_id`,`status_delete`) values 
(1,'2020-09-28 22:01:34','deskripsi history shipment','PROGRESS',1,1,0),
(2,'2020-09-27 03:25:19','<p>123</p>\r\n','COMPLETE',2,1,1),
(3,'2020-09-27 03:28:08','<p>123qwsd</p>\r\n','PROGRESS',3,1,1),
(4,'2020-09-27 08:36:19','<p>mnb</p>\r\n','PENDING',4,1,0),
(5,'2020-09-27 20:43:41','<p>kjhkjh</p>\r\n','PROGRESS',5,1,1),
(6,'2020-09-27 21:46:35','<p>asd</p>\r\n','PROGRESS',6,1,1),
(8,'2020-09-28 20:33:32','SUDAH DIBAWA KURIR','PROGRESS',4,1,0),
(9,'2020-09-28 22:17:32','TRANSIT DI XXXX','OTW',4,1,1),
(10,'2020-09-28 23:09:49','pengiriman dilakukan secepatnya','PROGRESS',7,1,1),
(11,'2020-09-28 23:11:43','SUDAH DIBAWA OLEH KURIR KE LOKASI TUJUAN','DELIVERY',7,1,0),
(12,'2020-09-29 23:12:14','PENGIRIMAN DILAKUKAN SECEPATNYA	','PROGRESS',7,1,0),
(13,'2020-09-28 23:18:16','SUDAH DIANTAR','DELIVERY',7,1,0),
(14,'2020-09-28 23:18:36','SUDAH DIKIRIM','DELIVERY',6,1,0),
(15,'2020-09-28 23:32:39','DIKIRIM','DELIVERY',4,1,1),
(16,'2020-09-29 00:07:24','DALAM PERJALANAN','DELIVERY',1,2,1),
(17,'2020-09-29 00:23:10','SAMPAI DITUJUAN','COMPLETE',6,2,1),
(18,'2020-09-29 00:27:02','ASD','PROGRESS',1,2,1),
(19,'2020-09-29 00:27:55','SDF','BLOCK',1,2,0),
(20,'2020-09-29 00:28:53','ASD','DELIVERY',1,2,0),
(21,'2020-09-29 00:30:24','ASD','DELIVERY',1,2,1),
(22,'2020-09-29 00:32:36','ASDASD','COMPLETE',1,1,1),
(23,'2020-09-29 00:45:59','ASD','CANCEL',6,2,1),
(24,'2020-09-30 05:47:05','SUDAH SAMPAI TUJUAN','COMPLETE',1,1,0),
(25,'2020-09-30 06:15:34','SUDAH SAMPAI','COMPLETE',7,1,0),
(26,'2020-09-30 06:16:06','KIRIM','DELIVERY',2,1,1),
(27,'2020-09-30 06:16:46','SEGERA DIKIRIM','PROGRESS',2,1,0),
(28,'2020-09-30 06:50:40','ALAT MASAK SEGERA DIKIRIM','PROGRESS',8,1,1),
(29,'2020-09-30 07:15:22','SEGERA DIKIRIM BOS','PROGRESS',8,2,0),
(30,'2020-09-30 07:39:35','SEGERA DIKIRIM PAK','PROGRESS',5,2,0),
(31,'2020-09-30 08:16:31','SUDAH DIKIRIM','DELIVERY',8,1,0),
(32,'2020-10-04 23:02:46','OKE','DELIVERY',5,1,0),
(33,'2020-10-04 23:02:59','SIAP','COMPLETE',5,1,0);

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
  `publish` int(1) NOT NULL DEFAULT 0,
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`slider_id`,`nama_slider`,`nama_product_seo`,`link`,`keterangan`,`image`,`background`,`publish`,`status_delete`) values 
(1,'INLAND TRANSPORTATION','contoh','http://sinarsuryaberliawan.com/product/inland-transportation','<p>PT. Sinar Surya Berliawan has dependable trucking services....</p>\r\n','truck.png','slidebg1.png',1,0),
(2,'CUSTOMS CLEARANCE','contoh','http://sinarsuryaberliawan.com/product/customs-clearance','<p>Drawing on many years of experience, we are well qualified...</p>\r\n','custom-clearance.png','slidebg2.png',1,0),
(3,'HYUNDAI USB LEATHER 8GB','contoh','http://localhost/kopkarhyundai/product/hyundai-usb-leather-8gb','<p>Rp 83,000 (Incl. Box, Nett Ready)</p>\r\n','hyundai-usb-leather-8gb.png','transparent.png',0,1),
(4,'HYUNDAI UMBRELLA RHRC','','http://localhost/kopkarhyundai/product/hyundai-umbrella-rhrc','<p>Rp 50,000 (Ready)</p>\r\n','hyundai-umbrella-rhrc.png','transparent1.png',0,1),
(5,'ASDQWE','','dasqwe','<p>asdasdqwe</p>\r\n','123.jpg','123.jpg',0,1);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1= aktif, 2= tidak aktif',
  `status_delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`user_id`,`nama_lengkap`,`username`,`password`,`status`,`status_delete`) values 
(1,'Administrator','admin','0192023a7bbd73250516f069df18b500',1,0),
(2,'User','user','0192023a7bbd73250516f069df18b500',1,0),
(3,'Superadmin','superadmin','0192023a7bbd73250516f069df18b500',1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

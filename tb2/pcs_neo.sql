/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - pcs_neo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pcs_neo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pcs_neo`;

/*Table structure for table `aircraft_data` */

DROP TABLE IF EXISTS `aircraft_data`;

CREATE TABLE `aircraft_data` (
  `id` int(8) NOT NULL,
  `revision_number` varchar(16) NOT NULL,
  `maintenance_type` varchar(64) DEFAULT NULL,
  `ac_reg` varchar(8) DEFAULT NULL,
  `ac_type` varchar(16) DEFAULT NULL,
  `engine_type` varchar(16) DEFAULT NULL,
  `customer` varchar(128) DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `project_owner` varchar(64) DEFAULT NULL,
  `hangar_location` varchar(16) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`revision_number`),
  KEY `status` (`status`),
  KEY `ac_type` (`ac_type`),
  CONSTRAINT `aircraft_data_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_code` (`status_code`),
  CONSTRAINT `aircraft_data_ibfk_2` FOREIGN KEY (`ac_type`) REFERENCES `aircraft_type` (`actype_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `aircraft_data` */

insert  into `aircraft_data`(`id`,`revision_number`,`maintenance_type`,`ac_reg`,`ac_type`,`engine_type`,`customer`,`date_in`,`date_out`,`status`,`project_owner`,`hangar_location`,`created_at`,`updated_at`) values 
(0,'00124168','D01-CHECK+ C-CHECK + 36+42 M PK-GPT','PK-GPT','320-200','null','PT. GARUDA INDONESIA','2021-05-31','2022-08-14','PRGS','Ayub Firmansyah Hutabarat','H-3 Line 1',NULL,NULL),
(0,'00133472','C05 CHK + A03 CHK + 10Y +6Y + 12Y PK-GFG','PK-GFG','320-200','','PT. GARUDA INDONESIA','2022-03-25','2022-09-11','PRGS','Awan Setiadi','H-4 Line 10',NULL,NULL),
(43,'00140754','C04-CHECK + 10Y + A02-CHECK +RTOP PK-GFM','PK-GFM','737-800','null','PT. GARUDA INDONESIA','2021-12-27','2022-02-04','PRGS','Asep Nur Komara','H-4 Line 11','2022-01-17 15:29:00','2022-01-17 15:29:00'),
(44,'00146001','C03-CHECK + 8 YRS + A02-CHECK PK-GMY','PK-GMY','737-800','null','PT. GARUDA INDONESIA','2021-11-22','2022-01-23','PRGS','Nur Indah Cholili','H-4 Line 14','2022-01-17 15:30:17','2022-01-17 15:30:17'),
(41,'00152025','C03 + 8,9 YRS INSP + A05 CHECK PK-GFW','PK-GFW','737-800','null','PT. GARUDA INDONESIA','2021-12-22','2022-01-30','PRGS','Awan Setiadi','H-4 Line 10','2022-01-17 15:27:26','2022-01-17 15:27:26'),
(30,'00152072','C02-CHECK PK-GIH','PK-GIH','777-300','null','PT. GARUDA INDONESIA','2021-08-26','2022-01-22','PRGS','Purwo Suko Pribadi','H-1 Line 2','2022-01-17 12:19:49','2022-01-17 12:52:29'),
(40,'00152309','N498TA (MSN3418) SKYONE 12YR+ADD JUL 21','N498TA','320-200','null','Sky One FZE','2021-07-22','2022-01-31','PRGS','Sujianto','H-4 Line 8','2022-01-17 15:26:31','2022-01-17 15:26:31'),
(35,'00152853','D01-CHECK PK-GPX','PK-GPX','330-300','null','PT. GARUDA INDONESIA','2022-01-19','2022-03-04','OPEN','I Putu Heri Hermawan','H-3 Line 1','2022-01-17 15:01:54','2022-01-17 15:01:54'),
(58,'00154969','C05 CHECK PK-GFJ','PK-GFJ','737-800','null','PT. GARUDA INDONESIA','2022-01-12','2022-01-31','PRGS','Agus Janal Sultoni','H-4 Line 12','2022-01-21 20:08:26','2022-01-21 20:08:26'),
(5,'00155596','PH-AOC A330-200 KLM IL+C2-CHECK 2021','PH-AOC','330-200','null','KLM - ACCOUNT PAYABLE','2021-12-22','2022-01-30','PRGS','I Putu Heri Hermawan','H-3 Line 1','2022-01-17 11:20:58','2022-01-17 11:22:29'),
(39,'00155793','VN-A669 VIETJET C02+12Y+OOP OCT 2021','VN-A669','320-200','null','VIETJET AVIATION JOINT STOCK C','2021-10-05','2022-01-21','PRGS','M. Khoiruddin','H-4 Line 4','2022-01-17 15:24:45','2022-01-17 15:24:45'),
(38,'00156204','YI-BAN FLY BAGHDAD C03 CHECK NOV 2021','YI-BAN','737-700','null','FLY BAGHDAD','2021-11-08','2022-02-03','PRGS','Siswo Nugroho','H-4 Line 3','2022-01-17 15:24:00','2022-02-03 15:24:45'),
(54,'00156273','C04 CHK + 10YR + A05 CHK + RTOP PK-GFQ','PK-GFQ','737-800','null','PT. GARUDA INDONESIA','2022-01-17','2022-02-16','PRGS','Awan Setiadi','H-4 Line 10','2022-01-19 22:29:42','2022-01-19 22:29:42'),
(57,'00157782','C05 CHECK + 12 YEARS PK-GME','PK-GME','737-800','null','PT. GARUDA INDONESIA','2021-12-07','2022-02-04','PRGS','Mochammad Arief','H-4 Line 6','2022-01-20 20:00:45','2022-01-20 20:00:45'),
(45,'00158368','VN-A667 VIETJET C03+Y06 CHECK 2021','VN-A667','320-200','null','VIETJET AVIATION JOINT STOCK C','2021-11-19','2022-01-20','PRGS','Budi Mulya','H-4 Line 15','2022-01-17 15:30:42','2022-01-17 15:30:42'),
(37,'00158588','PK-AXT A320 AIR ASIA C07-CHECK NOV 2021','PK-AXT','320-200','null','PT. INDONESIA AIRASIA','2021-11-25','2022-01-22','PRGS','Tri Subekti','H-4 Line 2','2022-01-17 15:22:40','2022-01-17 15:22:40'),
(8,'00158649','ER-BAR B747-200F FLYPRO CPCP+SSID+AD+MOD','ER-BAR','747-200','null','null','2021-12-06','2022-01-21','PRGS','Purwo Suko Pribadi','H-1 Line 1','2022-01-17 11:26:13','2022-01-17 12:52:06'),
(34,'00158967','A4O-DG A330-243 OMAN AIR 06 C-CHECK 2021','A4O-DG','330-200','null','OMAN AIR S.A.O.C','2021-12-08','2022-01-18','PRGS','Andryan Putra','H-3 Line 3','2022-01-17 12:21:35','2022-01-17 12:52:47'),
(56,'00159153','ER-JAI AEROTRANSCARGO SR CHECK JAN 2022','ER-JAI','747-400','null','AEROTRANSCARGO SRL','2022-01-03','2022-01-24','OPEN','Purwo Suko Pribadi','H-1 Line 1','2022-01-20 19:56:02','2022-01-20 19:56:02'),
(9,'00159521','TF-AMA B747-400 AirAtlanta D-Check 2022','TF-AMA','747-400','null','AIR ATLANTA ICELANDIC','2022-01-04','2022-02-25','PRGS','Purwo Suko Pribadi','H-1 Line 1','2022-01-17 11:28:12','2022-01-17 12:52:14'),
(52,'00159780','C02-CHECK PK-GQS','PK-GQS','320-200','null','CITILINK INDONESIA','2022-01-11','2022-01-29','PRGS','Sudiono 580984','H-4 Line 7','2022-01-19 14:23:39','2022-01-19 14:23:39'),
(36,'00160456','PK-AZE A320 IAA C04-CHECK JAN 2022','PK-AZE','320-200','CFM56-5B6/3','PT. INDONESIA AIRASIA','2022-01-10','2022-01-29','CLSD','Anas Hanurawan','H-4 Line 1','2022-01-17 15:22:09','2022-01-17 15:22:09'),
(59,'00160688','N977JG SEACONS 3MO+6MO+1000HRS+OOP JAN22','N977JG','737-700','null','SEACONS TRADING LTD','2022-01-15','2022-01-28','PRGS','Tri Subekti','H-4 Line 2','2022-01-25 10:04:15','2022-01-25 10:04:15');

/*Table structure for table `aircraft_type` */

DROP TABLE IF EXISTS `aircraft_type`;

CREATE TABLE `aircraft_type` (
  `id` tinyint(4) NOT NULL,
  `actype_code` varchar(16) NOT NULL,
  `actype_name` varchar(16) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`actype_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `aircraft_type` */

insert  into `aircraft_type`(`id`,`actype_code`,`actype_name`,`created_at`,`updated_at`) values 
(9,'320-200','A320-200','0000-00-00 00:00:00','2022-07-09 12:42:27'),
(7,'330-200','A330-200','0000-00-00 00:00:00','2022-07-09 12:42:01'),
(6,'330-300','A330-300','0000-00-00 00:00:00','2022-07-09 12:41:47'),
(4,'737-500','B737-500','2022-07-20 12:54:16','2022-07-20 12:41:39'),
(12,'737-700','B737-700','2022-07-20 15:40:53','0000-00-00 00:00:00'),
(3,'737-800','B737-800','2022-07-20 12:54:07','2022-07-20 12:50:22'),
(2,'737-900','B737-900','2022-07-20 12:54:01','2022-08-10 10:08:35'),
(13,'747-200','B747-200','2022-07-20 15:41:29','0000-00-00 00:00:00'),
(14,'747-400','B747-400','2022-07-20 15:41:30','0000-00-00 00:00:00'),
(15,'777-300','B777-300','2022-07-20 15:41:35','0000-00-00 00:00:00');

/*Table structure for table `component_repair_monitoring` */

DROP TABLE IF EXISTS `component_repair_monitoring`;

CREATE TABLE `component_repair_monitoring` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `wo_number` varchar(16) DEFAULT NULL,
  `part_number` varchar(16) DEFAULT NULL,
  `serial_number` varchar(16) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  `defect` varchar(32) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wo_number` (`wo_number`),
  KEY `status` (`status`),
  CONSTRAINT `component_repair_monitoring_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_code` (`status_code`),
  CONSTRAINT `component_repair_monitoring_ibfk_2` FOREIGN KEY (`wo_number`) REFERENCES `ndt_wo` (`wo_number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `component_repair_monitoring` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(35) NOT NULL,
  `url_logo` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id`,`customer_name`,`url_logo`,`created_at`,`updated_at`) values 
(1,'Aercap','https://media-exp1.licdn.com/dms/image/C510BAQHnEvOuWeMabQ/company-logo_200_200/0?e=2159024400&v=beta&t=jllI-gXy31Ks7kQJomNoLxP479QLBKtH966Iig3gw9c','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(2,'Aerotrans Cargo','https://media-exp1.licdn.com/dms/image/C510BAQHkZ6OKa6cakA/company-logo_200_200/0?e=2159024400&v=beta&t=EhEICeZnGMr_Tow3OW0tRlq22SVTk-SG-oCB8EJGBFo','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(3,'Aerovista','https://media-exp1.licdn.com/dms/image/C560BAQFsMtRKRtKCVw/company-logo_200_200/0?e=2159024400&v=beta&t=uyyMN6N9y2kkxQUCMrZaDppM-Jr4N7jw5z_siiFl-Io','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(4,'Air Asia X Malaysia','https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/AirAsia_X_Logo.svg/200px-AirAsia_X_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(5,'Air Asia X Thailand','https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/AirAsia_X_Logo.svg/200px-AirAsia_X_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(6,'Air Atlanta','https://media-exp1.licdn.com/dms/image/C4E0BAQGAsImkcZTE7Q/company-logo_200_200/0?e=2159024400&v=beta&t=OIC-_cWmawYyv6HLL4vsso0cT6oVHkqsdD-j3zcebyM','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(7,'Air France','https://logoeps.com/wp-content/uploads/2011/06/air-france-logo-vector-01.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(8,'AV Cargo','https://www.ch-aviation.com/portal/stock/912.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(9,'Bangkok Air','https://upload.wikimedia.org/wikipedia/en/thumb/0/01/Bangkok_Airways_logo.svg/170px-Bangkok_Airways_logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(10,'Cambodia Air','https://scontent-xsp1-1.xx.fbcdn.net/v/t1.0-1/83613992_4134024006622963_5195182786155118592_n.jpg?_nc_cat=111&_nc_sid=dbb9e7&_nc_oc=AQlLgdXQ0O9Z5YCacOnFrDdNnfI07tJrdv53QIAcGBcGzee5rrOPIusrLC7sq48VLfI&_nc_ht=scontent-xsp1-1.xx&oh=2e4017cbd2d8d991eca6eba1e48110f3&oe=5E9E8038','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(11,'Cebu Pacific','https://www.traveldailymedia.com/assets/2015/06/CEB-logo-300x212.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(12,'Citilink','https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/2012_Citilink_Logo.svg/512px-2012_Citilink_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(13,'DHL','https://media-exp1.licdn.com/dms/image/C560BAQH20nujINhhmg/company-logo_200_200/0?e=1593043200&v=beta&t=c7eeZPoms5UY7oMo6X7_u11b7bCBTHimDj0DyTZ7yEI','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(14,'Eastar Jet','https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Eastar_Jet_Logo.svg/250px-Eastar_Jet_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(15,'Fly Baghdad','https://upload.wikimedia.org/wikipedia/commons/e/e0/Fly_Baghdad_Logo.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(16,'Gainjet Aviation','https://www.ch-aviation.com/portal/stock/911.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(17,'Garuda Indonesia','https://awsimages.detik.net.id/customthumb/2009/07/23/4/Garuda-Logo-Vertical-dalam.jpg?w=700&q=80','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(18,'INTERGLOBE AVIATION','https://seekvectorlogo.com/wp-content/uploads/2018/05/indigo-vector-logo.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(19,'Indonesia Air Asia','https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/AirAsia_New_Logo.svg/1200px-AirAsia_New_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(20,'Indonesia Air Asia X','https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/AirAsia_X_Logo.svg/200px-AirAsia_X_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(21,'Iraqi Airways','https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Iraqi_Airways_Logo.svg/1200px-Iraqi_Airways_Logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(22,'Jeju Air','https://upload.wikimedia.org/wikipedia/commons/a/a5/JEJUAIR-NEW-BI-%282%29.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(23,'Jin Air','https://brandinginasia.com/wp-content/uploads/2016/08/Jin-Air-Korea-Logo.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(24,'KLM','https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/KLM_logo.svg/1200px-KLM_logo.svg.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(25,'Korean Air','https://www.koreanair.com/content/koreanair/global/en/about/who-we-are2/history-awards/corporate-identity/_jcr_content/par/titledparsys/par/columns/col2/columns/col1/image.img.jpg/1572322002896.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(26,'Lion Air','https://2.bp.blogspot.com/-bDVDBpPIAfo/UVugJvPf6UI/AAAAAAAABeQ/jiK08q6Ez5Q/s1600/lion+air+logo+vector+maskapai+penerbangan.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(27,'Malindo Air','https://live.staticflickr.com/8544/28501818186_8e636240fe_b.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(28,'Max Air','https://upload.wikimedia.org/wikipedia/en/b/bc/Max_Air_logo.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(29,'Myanmar Air International','https://www.alternativeairlines.com/images/global/airlinelogos/x8m_logo.gif.pagespeed.ic.maIbpUxyRg.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(30,'Nam Air','https://inaca.or.id/wp-content/uploads/2018/07/logo-NAM-air.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(31,'Nauru Airlines','https://upload.wikimedia.org/wikipedia/en/thumb/c/ca/Nauru_Airlines_logo.png/500px-Nauru_Airlines_logo.png','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(32,'Novo Air','https://upload.wikimedia.org/wikipedia/commons/0/0d/Logo_novoair.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(33,'Oman Air','https://i.pinimg.com/originals/54/72/fc/5472fca8d191616629c75d85b67a1178.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(34,'Pakistan International Airlines','https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Pakistan_International_Airlines_Logo.svg/1200px-Pakistan_International_Airlines_Logo.svg.png\r\n','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(35,'Vietjet Air','https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/320px-VietJet_Air_logo.svg.png','2022-07-09 13:06:50','2022-07-09 13:06:50');

/*Table structure for table `detail_shipment_record` */

DROP TABLE IF EXISTS `detail_shipment_record`;

CREATE TABLE `detail_shipment_record` (
  `id_detail_shipment` varchar(6) NOT NULL,
  `sp_number` int(11) NOT NULL,
  `wo_number` varchar(10) NOT NULL,
  `doc_number` varchar(50) NOT NULL,
  `part_number` varchar(25) NOT NULL,
  `serial_number` varchar(25) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `uom` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_shipment_record` */

/*Table structure for table `doc_type` */

DROP TABLE IF EXISTS `doc_type`;

CREATE TABLE `doc_type` (
  `id_doc` int(8) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(8) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `doc_type` */

insert  into `doc_type`(`id_doc`,`doc_name`,`created_at`,`updated_at`) values 
(1,'MDR','2022-07-20 14:50:57','2022-08-12 10:09:40'),
(2,'JOBCARD','2022-07-22 10:12:53','2022-07-22 05:12:53'),
(3,'PDSHEET','2022-07-22 10:18:56','2022-07-22 05:18:56'),
(7,'MDR','2022-07-22 14:20:13','2022-07-22 14:20:23');

/*Table structure for table `job_type` */

DROP TABLE IF EXISTS `job_type`;

CREATE TABLE `job_type` (
  `id_job` int(8) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(16) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_job`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `job_type` */

insert  into `job_type`(`id_job`,`job_name`,`created_at`,`updated_at`) values 
(1,'wo_project','2022-07-10 06:22:02','2022-07-22 11:01:19'),
(2,'wo_retail','2022-07-10 06:22:28','2022-07-10 06:22:28'),
(3,'wo_swo','2022-07-10 06:22:38','2022-07-10 06:22:38'),
(4,'wo_non_project','2022-07-10 06:22:47','2022-07-10 06:28:07');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',2);

/*Table structure for table `ndt_instrument` */

DROP TABLE IF EXISTS `ndt_instrument`;

CREATE TABLE `ndt_instrument` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `imte` varchar(16) NOT NULL,
  `model` varchar(64) NOT NULL,
  `part_number` varchar(64) NOT NULL,
  `description` varchar(128) NOT NULL,
  `serial_number` varchar(64) NOT NULL,
  `vendor` varchar(64) NOT NULL,
  `purpose` varchar(64) NOT NULL,
  `remark` varchar(64) NOT NULL,
  `barcode` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ndt_instrument` */

/*Table structure for table `ndt_probe` */

DROP TABLE IF EXISTS `ndt_probe`;

CREATE TABLE `ndt_probe` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `probe_code` varchar(16) NOT NULL,
  `part_number` varchar(64) NOT NULL,
  `description` varchar(128) NOT NULL,
  `serial_number` varchar(64) NOT NULL,
  `method` varchar(64) NOT NULL,
  `detail_method` varchar(64) NOT NULL,
  `remark` varchar(64) NOT NULL,
  `barcode` varchar(64) NOT NULL,
  `used_for` varchar(256) NOT NULL,
  `compatible_with` varchar(64) NOT NULL,
  `specification` varchar(256) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ndt_probe` */

/*Table structure for table `ndt_wo` */

DROP TABLE IF EXISTS `ndt_wo`;

CREATE TABLE `ndt_wo` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `wo_number` varchar(16) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `status` varchar(8) NOT NULL,
  `revision_number` varchar(16) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remark` text NOT NULL,
  KEY `status` (`status`),
  KEY `revision_number` (`revision_number`),
  KEY `wo_number` (`wo_number`),
  KEY `id` (`id`),
  CONSTRAINT `ndt_wo_ibfk_1` FOREIGN KEY (`wo_number`) REFERENCES `ppe_wo` (`wo_number`),
  CONSTRAINT `ndt_wo_ibfk_2` FOREIGN KEY (`revision_number`) REFERENCES `aircraft_data` (`revision_number`),
  CONSTRAINT `ndt_wo_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status_code` (`status_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ndt_wo` */

insert  into `ndt_wo`(`id`,`wo_number`,`date_in`,`date_out`,`status`,`revision_number`,`created_at`,`updated_at`,`remark`) values 
(1,'123456','2022-09-06','2022-09-07','PERO','00158967','2022-09-06 11:20:42',NULL,'');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pic` */

DROP TABLE IF EXISTS `pic`;

CREATE TABLE `pic` (
  `id_pic` int(8) NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pic`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `pic` */

insert  into `pic`(`id_pic`,`pic_name`,`created_at`,`updated_at`) values 
(1,'Production Planning and Engineering WS1','2022-07-22 11:02:15','2022-08-12 10:38:25'),
(2,'Production Planning and Engineering BUSH4','2022-07-22 11:02:23','2022-07-22 11:02:23'),
(3,'Sheet Metal WS 1','2022-07-10 00:41:00','2022-07-22 11:03:29'),
(4,'Sheet Metal Bush 4','2022-07-10 00:41:00','2022-07-10 00:41:00'),
(5,'Composite WS 1','2022-07-10 00:41:00','2022-07-10 00:41:00'),
(6,'Composite Bush 4','2022-07-10 00:41:00','2022-07-10 00:41:00'),
(7,'Machining, Welding, and Special Process','2022-07-10 00:41:00','2022-07-10 00:41:00'),
(8,'ULD','2022-07-10 00:41:00','2022-07-10 00:41:00'),
(9,'NDT','2022-07-10 00:41:00','2022-07-10 00:41:00');

/*Table structure for table `ppe_wo` */

DROP TABLE IF EXISTS `ppe_wo`;

CREATE TABLE `ppe_wo` (
  `wo_number` varchar(16) NOT NULL,
  `description` varchar(128) DEFAULT NULL,
  `quantity` varchar(8) DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `sp_in` varchar(8) DEFAULT NULL,
  `sp_out` varchar(8) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `revision_number` varchar(8) DEFAULT NULL,
  `component_location` varchar(16) DEFAULT NULL,
  `id_pic` int(8) DEFAULT NULL,
  `component_removed_status` varchar(16) DEFAULT NULL,
  `doc_number` varchar(64) DEFAULT NULL,
  `id_doc` int(8) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_ppe` varchar(8) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `job_type` int(8) DEFAULT NULL,
  PRIMARY KEY (`wo_number`),
  KEY `id_pic` (`id_pic`),
  KEY `id_doc` (`id_doc`),
  KEY `job_type` (`job_type`),
  KEY `revision_number` (`revision_number`),
  KEY `status` (`status`),
  CONSTRAINT `ppe_wo_ibfk_1` FOREIGN KEY (`id_pic`) REFERENCES `pic` (`id_pic`),
  CONSTRAINT `ppe_wo_ibfk_2` FOREIGN KEY (`id_doc`) REFERENCES `doc_type` (`id_doc`),
  CONSTRAINT `ppe_wo_ibfk_3` FOREIGN KEY (`job_type`) REFERENCES `job_type` (`id_job`),
  CONSTRAINT `ppe_wo_ibfk_4` FOREIGN KEY (`revision_number`) REFERENCES `aircraft_data` (`revision_number`),
  CONSTRAINT `ppe_wo_ibfk_5` FOREIGN KEY (`status`) REFERENCES `status_code` (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ppe_wo` */

insert  into `ppe_wo`(`wo_number`,`description`,`quantity`,`date_in`,`date_out`,`sp_in`,`sp_out`,`status`,`revision_number`,`component_location`,`id_pic`,`component_removed_status`,`doc_number`,`id_doc`,`created_at`,`updated_at`,`id_ppe`,`remark`,`job_type`) values 
('123','test','2','2022-09-06','2022-09-07','1','2','WACS','00158967','WS-1',1,'no','13',2,'2022-09-06 06:19:13',NULL,'132','No',2),
('123456','dsa','1','2022-07-10','2022-07-10','1','2','Open','00156273','ON A/C',1,'removed','2',1,'2022-07-10 14:09:36','2022-07-10 14:09:36','1','no',1);

/*Table structure for table `shipment_record` */

DROP TABLE IF EXISTS `shipment_record`;

CREATE TABLE `shipment_record` (
  `sp_number` smallint(6) NOT NULL,
  `id_shipment` varchar(1) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `date_out` datetime NOT NULL,
  `recipient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shipment_record` */

/*Table structure for table `shipment_type` */

DROP TABLE IF EXISTS `shipment_type`;

CREATE TABLE `shipment_type` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_shipment` varchar(2) NOT NULL,
  `shipment_type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `shipment_type` */

insert  into `shipment_type`(`id`,`id_shipment`,`shipment_type`,`created_at`,`updated_at`) values 
(1,'1','part_only','2022-07-10 13:50:22','2022-07-10 13:50:22'),
(2,'2','document_only','2022-07-10 13:50:22','2022-07-10 13:50:22'),
(3,'3','part_and_document','2022-07-10 13:50:22','2022-07-10 13:50:22'),
(4,'4','letter','2022-07-10 13:50:22','2022-07-10 13:50:22'),
(5,'5','material','2022-07-10 13:50:22','2022-07-10 13:50:22');

/*Table structure for table `status_code` */

DROP TABLE IF EXISTS `status_code`;

CREATE TABLE `status_code` (
  `status_code` varchar(16) NOT NULL,
  `status` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_code` */

insert  into `status_code`(`status_code`,`status`,`created_at`,`updated_at`) values 
('CCLD','Canceled','2022-09-27 13:00:28',NULL),
('CLSD','CLOSED','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('CTMF','HOLD CONTACT MANUFACTURE','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('DLVRD','DELIVERED TO PRODUCTION','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('NERO','OPEN RO','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('OPEN','OPEN','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('PERO','PROGRESS RO','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('PRGS','PROGRESS','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('RSTM','RESTAMP','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('RVSE','REVISE','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('WACS','HOLD WAITING ACCESS','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('WFNS','HOLD WAITING FINISH SURFACE','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('WINSP','HOLD WAITING INSPECTION','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('WMAT','HOLD WAITING MATERIAL','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('WSOA','HOLD WAITING SOA','2022-07-10 14:01:48','2022-07-10 14:01:48'),
('WSTR','HOLD WAITING STRIPPING','2022-07-10 14:01:48','2022-07-10 14:01:48');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_number` varchar(6) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `id_pic` varchar(1) NOT NULL,
  `id_role` varchar(1) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_number` (`id_number`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`id_number`,`user_name`,`job_title`,`id_pic`,`id_role`,`password`) values 
(1,'581977','Nurul Huda T','Aircraft Maintenance Planning Engineer','2','5','581977'),
(2,'581978','Nurul Huda','Aircraft Maintenance Planning Engineer','7','1','581978');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_role` varchar(2) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`id_role`,`role`,`created_at`,`updated_at`) values 
(1,'1','ppe','2022-07-10 14:47:30','2022-07-10 14:47:30'),
(2,'2','supervisor','2022-07-10 14:47:30','2022-07-10 14:47:30'),
(3,'3','mechanic','2022-07-10 14:47:30','2022-07-10 14:47:30'),
(4,'4','management','2022-07-10 14:47:30','2022-07-10 14:47:30'),
(5,'5','superuser','2022-07-10 14:47:30','2022-07-10 14:47:30');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pic` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`id_number`,`name`,`password`,`remember_token`,`created_at`,`updated_at`,`job_title`,`id_pic`,`id_role`) values 
(1,'581978','Ruli Bestari','$2y$10$NmLlfWikILPo9cRpnpBiW.roH9.kA.xJzFTzgCMj9/.ydh06e2yim','6a2jeavXElXc8dH65zUQ0RdisJzMr41pSicIWOcJZBKtXxrnsafoCO7hZelv','2022-01-12 08:19:18','2022-01-12 08:19:18','Aircraft Maintenance Planning Engineer','2','5'),
(2,'581977','Nurul Huda','$2y$10$BPq0ZmQjBad0TesvtyJVt.7DHbXHcxFjTHDLoz.AZDfpjWAT0aOoq','VTzhAONSwDQGzI6WmAXdOSNlvzAKVpYVapFVyFF0ydhCFaCMEseI5hp5nP3E','2022-01-12 08:38:40','2022-01-12 08:38:40','Aircraft Maintenance Planning Engineer','1','5'),
(3,'581979','Angra Firman Felani','$2y$10$nsNCd5SchYlV2KNJ0jMwkOxnmThWKf7imLIUnWdUcjuGofS5glSua',NULL,'2022-01-15 16:39:39','2022-01-15 16:39:39','Senior Manager','1','4'),
(10,'581980','Irvan Pribadi','$2y$10$Fv/.uv7Db58ISKQgsilwY.cmKJAlX6K3hy069tw4ZdK7xBh20wrfO',NULL,'2022-01-16 04:10:24','2022-01-16 04:24:27','Vice Precident','1','4');

/*Table structure for table `wo_tracking` */

DROP TABLE IF EXISTS `wo_tracking`;

CREATE TABLE `wo_tracking` (
  `id` int(8) NOT NULL,
  `wo_number` varchar(16) NOT NULL,
  `pic` varchar(8) NOT NULL,
  `status` varchar(8) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wo_tracking` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

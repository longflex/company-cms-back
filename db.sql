/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.22-MariaDB : Database - famco
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`famco` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `famco`;

/*Table structure for table `about_content` */

DROP TABLE IF EXISTS `about_content`;

CREATE TABLE `about_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `upper_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_desc_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_desc_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `upper_title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_desc_1_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `about_content` */

insert  into `about_content`(`id`,`upper_title`,`lower_title`,`upper_desc_1`,`upper_desc_2`,`lower_desc`,`img`,`created_at`,`updated_at`,`upper_title_hl`,`lower_title_hl`,`upper_desc_1_hl`) values 
(1,'Committed to People and the future','FAMCO is awesome companyfor your business dream','We are Monst, a Creative Design','Helping you maximize operations management with digitization','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis. Quisque vitae nulla malesuada, auctor arcu vitae, luctus nisi. Sed elementum vitae ligula id imperdiet.','1654591028.png',NULL,'2022-06-07 08:37:08','People','awesome company','Monst');

/*Table structure for table `about_skill` */

DROP TABLE IF EXISTS `about_skill`;

CREATE TABLE `about_skill` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `about_skill` */

insert  into `about_skill`(`id`,`title`,`icon`,`amount`,`order`,`created_at`,`updated_at`) values 
(2,'asd','sdss',100,234,'2022-06-01 16:23:06','2022-06-01 16:24:02'),
(3,'Annual Partner','<svg className=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\"></path>\r\n                        </svg>',950,1,'2022-06-05 15:39:25','2022-06-05 15:39:25'),
(4,'Completed Projects','<svg className=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z\"></path>\r\n                        </svg>',58,2,'2022-06-05 16:24:55','2022-06-05 16:24:55'),
(5,'Happy Customers','<svg className=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z\"></path>\r\n                        </svg>',500,3,'2022-06-05 17:16:22','2022-06-05 17:16:22'),
(6,'Research Work','<svg className=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"></path>\r\n                        </svg>',300,4,'2022-06-05 17:17:26','2022-06-05 17:17:26');

/*Table structure for table `about_specialty` */

DROP TABLE IF EXISTS `about_specialty`;

CREATE TABLE `about_specialty` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `about_specialty` */

insert  into `about_specialty`(`id`,`title`,`img`,`desc`,`order`,`created_at`,`updated_at`) values 
(2,'s','1654109822.png','assd',123,'2022-06-01 18:54:51','2022-06-01 18:57:02'),
(3,'Project Initialization','1654525291.png','Project initiation ensures that you lay a strong foundation for a new project in your company our team.',1,'2022-06-05 20:25:05','2022-06-06 14:21:31'),
(4,'Project planning','1654525309.png','A project plan is essential to keep everything related to the project organized, methodical, and on track.',2,'2022-06-05 21:50:53','2022-06-06 14:21:49'),
(5,'Project organization','1654525323.png','Moving forward you will be able to keep yourself and your team on track, and address challenges early.',3,'2022-06-05 21:52:06','2022-06-06 14:22:03');

/*Table structure for table `about_us` */

DROP TABLE IF EXISTS `about_us`;

CREATE TABLE `about_us` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `about_us` */

insert  into `about_us`(`id`,`sidebar`,`sidebar_ar`,`header`,`header_ar`,`content`,`content_ar`,`highlight`,`highlight_ar`,`description`,`description_ar`,`created_at`,`updated_at`) values 
(1,NULL,'What I do','About me','About me','MY MISSION IS DESIGN & DEVELOP THE BEST WEBSITES AROUND','MY MISSION IS DESIGN & DEVELOP THE BEST WEBSITES AROUND','DESIGN & DEVELO','DESIGN & DEVELOP','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates ut ipsum amet iusto hic.','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates ut ipsum amet iusto hic.','2022-05-30 06:26:46','2022-05-31 20:56:53');

/*Table structure for table `article_content` */

DROP TABLE IF EXISTS `article_content`;

CREATE TABLE `article_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `article_content` */

insert  into `article_content`(`id`,`title`,`title_hl`,`desc`,`created_at`,`updated_at`) values 
(1,'234','a','\'\r\n[',NULL,'2022-06-02 08:51:24');

/*Table structure for table `client_layout` */

DROP TABLE IF EXISTS `client_layout`;

CREATE TABLE `client_layout` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `client_layout` */

insert  into `client_layout`(`id`,`sidebar`,`sidebar_ar`,`created_at`,`updated_at`) values 
(1,'Clients','Clients','2022-05-30 06:26:46','2022-05-30 06:26:46');

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clients` */

insert  into `clients`(`id`,`name`,`name_ar`,`image`,`order`,`created_at`,`updated_at`) values 
(1,'d','sad','1654098897.png',NULL,'2022-06-01 15:54:57','2022-06-01 15:54:57');

/*Table structure for table `contact_content` */

DROP TABLE IF EXISTS `contact_content`;

CREATE TABLE `contact_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `badge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contact_content` */

insert  into `contact_content`(`id`,`title`,`title_hl`,`badge`,`created_at`,`updated_at`) values 
(1,'We will be glad to hear from you!','be glad','Contact Us',NULL,'2022-06-07 15:12:08');

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`google`,`facebook`,`instagram`,`linkedin`,`twitter`,`phone`,`address`,`created_at`,`updated_at`) values 
(1,'contact@famco.com','test@gmail.com',NULL,NULL,NULL,'(+01) 234 568','359 Hidden Valley Road, NY','2022-05-30 06:26:45','2022-06-06 14:01:57');

/*Table structure for table `footer_content` */

DROP TABLE IF EXISTS `footer_content`;

CREATE TABLE `footer_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_rights` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_rights_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_rights_addr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `footer_content` */

insert  into `footer_content`(`id`,`title`,`title_hl`,`all_rights`,`all_rights_link`,`all_rights_addr`,`created_at`,`updated_at`) values 
(1,'Helping you maximize operations management with digitization','maximize','© 2022. All rights reserved. Designed by Famco.com','Famco.com','https://famco.com',NULL,'2022-06-06 21:17:49');

/*Table structure for table `general_info` */

DROP TABLE IF EXISTS `general_info`;

CREATE TABLE `general_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `general_info` */

insert  into `general_info`(`id`,`logo`,`brand_name`,`home_bg`,`review_bg`,`created_at`,`updated_at`,`about_bg`,`work_bg`,`service_bg`,`client_bg`,`contact_bg`) values 
(1,'1654621750.jpeg','Famco','home_bg_1653898892.png',NULL,'2022-05-30 06:26:46','2022-06-07 17:09:10',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `home` */

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home` */

insert  into `home`(`id`,`sidebar`,`sidebar_ar`,`header`,`header_ar`,`content`,`content_ar`,`highlight`,`highlight_ar`,`created_at`,`updated_at`) values 
(1,'Introduce','Introduce','Welcome To Jonny Design Studio','Welcome To Jonny Design Studio','Hello My name is Jonny.','Hello My name is Jonny.','Hello','Hello','2022-05-30 06:26:45','2022-05-30 06:26:45');

/*Table structure for table `home_content` */

DROP TABLE IF EXISTS `home_content`;

CREATE TABLE `home_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `main_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `main_text_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `main_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `main_desc_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `anim_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `anim_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `key_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `key_product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `key_product_badge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `product_intro_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `product_intro_text_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `product_intro_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_ad_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `product_ad_text_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `product_ad_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home_content` */

insert  into `home_content`(`id`,`created_at`,`updated_at`,`main_text`,`main_text_hl`,`main_desc`,`main_desc_hl`,`anim_1`,`anim_2`,`main_image`,`key_product`,`key_product_image`,`key_product_badge`,`product_intro_text`,`product_intro_text_hl`,`product_intro_desc`,`product_ad_text`,`product_ad_text_hl`,`product_ad_desc`) values 
(1,NULL,'2022-06-07 18:02:36','we are happy to People Committed to the Future in development!','to the Future','We are FAMCO, a manufacturer of','FAMCO','Bone Meal|','More Organic Products|','1654517737.png','Key Product','1654517754.png','Why choose our products','Our awesome products','awesome','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.','OUR ADVANTAGE Why choose our best products','Why choose','Best for freelance developers who need to save their time');

/*Table structure for table `home_keyproduct_specialty` */

DROP TABLE IF EXISTS `home_keyproduct_specialty`;

CREATE TABLE `home_keyproduct_specialty` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home_keyproduct_specialty` */

insert  into `home_keyproduct_specialty`(`id`,`title`,`desc`,`icon`,`order`,`created_at`,`updated_at`) values 
(2,'Expand Your Reach','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.','<svg className=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>\r\n                                            </svg>',1,'2022-06-05 23:02:59','2022-06-05 23:02:59'),
(3,'Annualized Growth','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.','<svg className=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z\"></path>\r\n                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z\"></path>\r\n                                            </svg>',2,'2022-06-05 23:03:39','2022-06-05 23:03:39'),
(4,'Book Your Providers','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.','<svg className=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path>\r\n                                            </svg>',3,'2022-06-05 23:04:06','2022-06-05 23:04:06');

/*Table structure for table `home_product` */

DROP TABLE IF EXISTS `home_product`;

CREATE TABLE `home_product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home_product` */

insert  into `home_product`(`id`,`title`,`desc`,`image`,`order`,`created_at`,`updated_at`) values 
(1,'s','assad','1654196579.png',234,'2022-06-02 19:02:31','2022-06-02 19:02:59'),
(2,'fertilizer1','Harvard university','1654517987.jpg',1,'2022-06-06 06:29:59','2022-06-06 12:19:47'),
(3,'fertilizer2','Cocacola., Co','1654518004.jpg',2,'2022-06-06 06:30:46','2022-06-06 12:20:04'),
(4,'fertilizer3','Oxford university','1654518052.jpg',3,'2022-06-06 06:31:53','2022-06-06 12:20:52'),
(5,'fertilizer4','Alibaba Co','1654518064.jpg',4,'2022-06-06 06:32:25','2022-06-06 12:21:04');

/*Table structure for table `home_product_specialty` */

DROP TABLE IF EXISTS `home_product_specialty`;

CREATE TABLE `home_product_specialty` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home_product_specialty` */

insert  into `home_product_specialty`(`id`,`title`,`desc`,`image`,`order`,`created_at`,`updated_at`) values 
(2,'Advanced Manufacturing Plant','We have the sophisticated and specialized machinery at our manufacturing plant to do the job','1654510624.png',1,'2022-06-06 10:17:04','2022-06-06 10:17:04'),
(3,'Decade Long Experience','We have more than a decade of experience in the Bone Meal and Chicken Meal Industry','1654510669.png',2,'2022-06-06 10:17:49','2022-06-06 10:17:49'),
(4,'Top Quality Products','Our expertise in the domain and advanced machinery will enable us to product top quality products','1654510699.png',3,'2022-06-06 10:18:19','2022-06-06 10:18:19');

/*Table structure for table `manage_content` */

DROP TABLE IF EXISTS `manage_content`;

CREATE TABLE `manage_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `upper_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `upper_title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `manage_content` */

insert  into `manage_content`(`id`,`upper_title`,`lower_title`,`upper_desc`,`lower_desc`,`created_at`,`updated_at`,`upper_title_hl`,`lower_title_hl`) values 
(1,'Our Awesome Management Team Member','Meet Our Management Team Members','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.','Our Customers Very Happy With Our Services.',NULL,'2022-06-07 08:58:00','Management','Management');

/*Table structure for table `manage_member` */

DROP TABLE IF EXISTS `manage_member`;

CREATE TABLE `manage_member` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_prof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `manage_member` */

insert  into `manage_member`(`id`,`member_name`,`member_prof`,`desc`,`order`,`image`,`created_at`,`updated_at`) values 
(2,'Geraldine Tusoy','CEO, Co Founders','Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.',1,'1654592854.png','2022-06-07 08:59:41','2022-06-07 09:07:34'),
(3,'Clara Kolawole','CEO-Founder','Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.',2,'1654592865.png','2022-06-07 09:00:13','2022-06-07 09:07:45'),
(4,'Chris Fulton','Project-Manager','Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.',3,'1654592876.png','2022-06-07 09:00:51','2022-06-07 09:07:56'),
(5,'Dany Connolly','Direct-Founder','Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.',4,'1654592481.png','2022-06-07 09:01:21','2022-06-07 09:01:21');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_12_14_000001_create_personal_access_tokens_table',1),
(4,'2021_09_22_195853_create_home_table',1),
(5,'2021_09_26_114152_create_about_us_table',1),
(6,'2021_10_04_220231_create_skills_table',1),
(7,'2021_10_19_111101_create_work_category_table',1),
(8,'2021_10_19_120131_create_works_table',1),
(9,'2021_10_21_060439_create_work_layout_table',1),
(10,'2021_10_21_062506_create_services_table',1),
(11,'2021_10_21_072554_create_service_layout_table',1),
(12,'2021_10_21_075211_create_clients_table',1),
(13,'2021_10_21_075232_create_client_layout_table',1),
(14,'2021_10_21_082747_create_reviews_table',1),
(15,'2021_10_21_082803_create_review_layout_table',1),
(16,'2021_10_21_113417_create_contacts_table',1),
(17,'2021_10_22_080210_create_general_info_table',1),
(18,'2022_04_29_131555_add_columns_to_general_info_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `product_content` */

DROP TABLE IF EXISTS `product_content`;

CREATE TABLE `product_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `upper_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_content` */

insert  into `product_content`(`id`,`upper_title`,`created_at`,`updated_at`) values 
(1,'hg',NULL,NULL);

/*Table structure for table `product_product` */

DROP TABLE IF EXISTS `product_product`;

CREATE TABLE `product_product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `badge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_hl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_product` */

insert  into `product_product`(`id`,`badge`,`title`,`title_hl`,`desc`,`order`,`image`,`created_at`,`updated_at`,`title_1`,`desc_1`,`title_2`,`desc_2`,`title_3`,`desc_3`,`title_4`,`desc_4`) values 
(1,'asd','df','a','sd',3,'1654612332.jpg','2022-06-01 22:14:17','2022-06-07 16:09:53','ds','s',NULL,'ds','sd','sd','sd','a'),
(2,'Why choose this','We Provide Best Web design services','Web design','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.',1,'1654612197.jpg','2022-06-07 13:40:10','2022-06-07 14:29:57','Web design UX/UI','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.','React Develop','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.','Ecommerce Build','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.','CMS develop','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.'),
(3,'wow','Helping you maximize operations','maximize','management with digitization',2,'1654612347.jpg','2022-06-07 13:45:39','2022-06-07 16:08:53',NULL,'sdafff','React Develop','use Illuminate\\Support\\Facades\\Storage;','Ecommerce Build','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.',NULL,'d');

/*Table structure for table `review_content` */

DROP TABLE IF EXISTS `review_content`;

CREATE TABLE `review_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `upper_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auther_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auther_prof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `review_content` */

insert  into `review_content`(`id`,`upper_desc`,`auther_name`,`auther_prof`,`lower_title`,`lower_desc`,`img`,`created_at`,`updated_at`) values 
(1,'Maecenas nibh purus, pharetra ac felis sed, elementum molestie urna. Nunc at arcu non ipsum auctor lacinia quis quis mi.','Alice Bradley','CEO, Co Founders','Our Customers Very Happy With Our Services','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.','1654604749.png',NULL,'2022-06-07 12:25:50');

/*Table structure for table `review_customer` */

DROP TABLE IF EXISTS `review_customer`;

CREATE TABLE `review_customer` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `review_customer` */

insert  into `review_customer`(`id`,`order`,`image`,`created_at`,`updated_at`) values 
(2,1,'1654607988.png','2022-06-07 12:27:39','2022-06-07 13:19:48'),
(3,2,'1654605146.png','2022-06-07 12:32:26','2022-06-07 12:32:26'),
(4,3,'1654605153.png','2022-06-07 12:32:33','2022-06-07 12:32:33'),
(5,4,'1654605161.png','2022-06-07 12:32:41','2022-06-07 12:32:41'),
(6,5,'1654605167.png','2022-06-07 12:32:47','2022-06-07 12:32:47');

/*Table structure for table `review_layout` */

DROP TABLE IF EXISTS `review_layout`;

CREATE TABLE `review_layout` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `review_layout` */

insert  into `review_layout`(`id`,`sidebar`,`sidebar_ar`,`content`,`content_ar`,`created_at`,`updated_at`) values 
(1,'Testimonials','Testimonials','Content','Content Ar','2022-05-30 06:26:46','2022-05-30 06:26:46');

/*Table structure for table `review_review` */

DROP TABLE IF EXISTS `review_review`;

CREATE TABLE `review_review` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `auther_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auther_prof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `review_review` */

insert  into `review_review`(`id`,`auther_name`,`auther_prof`,`desc`,`order`,`image`,`created_at`,`updated_at`) values 
(2,'Geraldine Tusoy','CEO, Co Founders','Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.',1,'1654605664.png','2022-06-07 12:41:04','2022-06-07 12:41:04'),
(3,'Clara Kolawole','CEO-Founder','Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.',2,'1654605748.png','2022-06-07 12:42:28','2022-06-07 12:42:28');

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_job_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `reviews` */

/*Table structure for table `service_layout` */

DROP TABLE IF EXISTS `service_layout`;

CREATE TABLE `service_layout` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `service_layout` */

insert  into `service_layout`(`id`,`sidebar`,`sidebar_ar`,`header`,`header_ar`,`content`,`content_ar`,`highlight`,`highlight_ar`,`img`,`created_at`,`updated_at`) values 
(1,'Services','Services','My services','My services','I like to make things easy and fun','I like to make things easy and fun','to make','to make','1654076152.png','2022-05-30 06:26:46','2022-06-01 09:35:53');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `services` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Sulaiman Redha','admin@mrfocuskw.com',NULL,'$2y$10$R2RjnsuMgc0a0TpGu8ss7ON.Ma8GO80lfFQxIZacGCjmsDErP4v8C',NULL,'2022-05-30 06:26:45','2022-05-30 06:26:45');

/*Table structure for table `work_category` */

DROP TABLE IF EXISTS `work_category`;

CREATE TABLE `work_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `work_category` */

insert  into `work_category`(`id`,`name`,`name_ar`,`order`,`created_at`,`updated_at`) values 
(1,'as','da',234,'2022-06-01 06:30:36','2022-06-01 06:30:36');

/*Table structure for table `work_layout` */

DROP TABLE IF EXISTS `work_layout`;

CREATE TABLE `work_layout` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `work_layout` */

insert  into `work_layout`(`id`,`sidebar`,`sidebar_ar`,`header`,`header_ar`,`created_at`,`updated_at`) values 
(1,'My Works','My Works','Featured Works','Featured Works','2022-05-30 06:26:46','2022-05-30 06:26:46');

/*Table structure for table `works` */

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `works_category_id_foreign` (`category_id`),
  CONSTRAINT `works_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `work_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `works` */

insert  into `works`(`id`,`category_id`,`project_name`,`project_name_ar`,`description`,`description_ar`,`project_type`,`project_type_ar`,`image`,`youtube`,`client`,`client_ar`,`date`,`order`,`created_at`,`updated_at`) values 
(1,1,'a','s','as','a','asd','as','1654065085.png',NULL,'da','as','2022-06-21',123,'2022-06-01 06:31:25','2022-06-01 06:31:25');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

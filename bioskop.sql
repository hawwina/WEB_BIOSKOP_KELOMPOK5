/*
SQLyog Ultimate v8.63 
MySQL - 5.5.5-10.3.8-MariaDB : Database - bioskop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bioskop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bioskop`;

/*Table structure for table `daftar_movies` */

DROP TABLE IF EXISTS `daftar_movies`;

CREATE TABLE `daftar_movies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `movieCover` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieTitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieSynopsis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieGenre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieDuration` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieRealdate` date NOT NULL,
  `movieDirector` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieActors` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieTrailer` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `daftar_movies` */

insert  into `daftar_movies`(`id`,`movieCover`,`movieTitle`,`movieSynopsis`,`movieGenre`,`movieDuration`,`movieRealdate`,`movieDirector`,`movieActors`,`movieTrailer`,`upload`) values (1,'nkcthi.jpg','mariposa','INI SYNOPSIS','family','120','2021-01-20','hanung bramantyo','RUDI','https://www.youtube.com/','/data_file/mariposa.jpg'),(2,'C:\\xampp\\tmp\\php1930.tmp','melankolia','sepasang remaja yang bertemu dengan kekasihnya dalam waktu yang salah','comedy, romance','120','2021-01-13','hanung bramantyo','amanda, dan teman-temannya','https://www.youtube.com/watch?v=yoJuit12qVc','/data_file/melankolia.jpg');

/*Table structure for table `dataiklans` */

DROP TABLE IF EXISTS `dataiklans`;

CREATE TABLE `dataiklans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadgambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dataiklans` */

insert  into `dataiklans`(`id`,`judul`,`uploadgambar`) values (1,'Promo nonton sampai 50 %','/data_file/.jpg');

/*Table structure for table `dataseats` */

DROP TABLE IF EXISTS `dataseats`;

CREATE TABLE `dataseats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namaSeat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dataseats` */

insert  into `dataseats`(`id`,`namaSeat`) values (1,'A1'),(2,'A2'),(3,'A3');

/*Table structure for table `datastudios` */

DROP TABLE IF EXISTS `datastudios`;

CREATE TABLE `datastudios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Theater_id` bigint(20) unsigned NOT NULL,
  `namaStudio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `datastudios_theater_id_foreign` (`Theater_id`),
  CONSTRAINT `datastudios_theater_id_foreign` FOREIGN KEY (`Theater_id`) REFERENCES `datatheaters` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `datastudios` */

insert  into `datastudios`(`id`,`Theater_id`,`namaStudio`) values (1,1,'STUDIO SURABAYA XXI');

/*Table structure for table `datatheaters` */

DROP TABLE IF EXISTS `datatheaters`;

CREATE TABLE `datatheaters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namaTheater` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `datatheaters` */

insert  into `datatheaters`(`id`,`namaTheater`) values (1,'CINEMA XXI');

/*Table structure for table `datatimes` */

DROP TABLE IF EXISTS `datatimes`;

CREATE TABLE `datatimes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `datatimes` */

insert  into `datatimes`(`id`,`time`) values (1,'12:00:00'),(2,'15:30:00'),(3,'19:00:00');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (27,'2021_01_07_151642_create_dataseat',1),(126,'2014_10_12_000000_create_users_table',2),(127,'2014_10_12_100000_create_password_resets_table',2),(128,'2019_08_19_000000_create_failed_jobs_table',2),(129,'2021_01_01_153902_create_daftar_movies_table',2),(130,'2021_01_07_152755_create_dataseats_table',2),(131,'2021_01_08_022043_create_datatimes_table',2),(132,'2021_01_08_032839_create_datatheaters_table',2),(133,'2021_01_08_034626_create_datastudios_table',2),(134,'2021_01_08_065845_create_dataiklans_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','pelanggan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelanggan',
  `dp_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`role`,`dp_path`,`email_verified_at`,`remember_token`,`created_at`,`updated_at`) values (1,'azifa','azifa@gmail.com','$2y$10$HR5zX5aGRiShlONKMpF0yeQreTeZaEFu6HBfuSY/IwUayFh5Gs.8u','pelanggan',NULL,NULL,NULL,'2021-01-08 09:47:22','2021-01-08 09:47:22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

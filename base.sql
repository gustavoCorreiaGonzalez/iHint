-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: iHint
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Gustavo Corriea Gonzalez','admin@admin.com','$2y$10$WcofFIbzQ3oDHST7ZbSAa.7B5k6f53637qlD1aUnUmg7lts47fI4K','8G1aIKd922iZHwdZ8u7TUdITHj2ASYoAYcpX2zyKIyxXHMnCFiBVxh7ngx2a','2017-05-12 14:48:32','2017-09-23 03:55:41'),(2,'admin2','admin2@admin2.com.br','$2y$10$QIOrND9sqRxec5Bq7nh67uj6WSTHDaBRwDOjWtt6dapQz3CLxmUVm','qlK03ptPuYRPCYookytGEq9hwc4IvTOCBpGw9VX4soU8GXHIi37yOLooS5y0','2017-08-01 12:49:47','2017-08-01 12:50:53');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `exercise_id` int(10) unsigned NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_modules` int(11) NOT NULL,
  `lines_of_code` int(11) NOT NULL,
  `cyclomatic_complexity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_user_id_foreign` (`user_id`),
  KEY `answers_exercise_id_foreign` (`exercise_id`),
  CONSTRAINT `answers_exercise_id_foreign` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`id`),
  CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,1,1,'/var/www/iHint/storage/exercises/user_1/exercise_1/exercicio1.c',1,4,1,'2017-05-12 15:11:08','2017-05-12 15:11:08'),(2,1,2,'/var/www/iHint/storage/exercises/user_1/exercise_2/exercicio1.c',1,4,1,'2017-05-12 15:14:31','2017-05-12 15:14:31'),(3,2,1,'/var/www/iHint/storage/exercises/user_2/exercise_1/ex1.c',1,12,1,'2017-05-12 18:43:34','2017-05-12 18:43:34'),(4,2,1,'/var/www/iHint/storage/exercises/user_2/exercise_1/ex1.c',1,14,2,'2017-05-12 18:54:55','2017-05-12 18:54:55'),(5,2,1,'/var/www/iHint/storage/exercises/user_2/exercise_1/ex1.c',1,10,1,'2017-05-12 18:56:59','2017-05-12 18:56:59'),(6,3,1,'/var/www/iHint/storage/exercises/user_3/exercise_1/exercicio1.c',1,10,1,'2017-05-12 19:21:50','2017-05-12 19:21:50'),(7,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:25:27','2017-05-12 19:25:27'),(8,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:30:49','2017-05-12 19:30:49'),(9,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:32:30','2017-05-12 19:32:30'),(10,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:33:52','2017-05-12 19:33:52'),(11,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:34:21','2017-05-12 19:34:21'),(12,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:34:42','2017-05-12 19:34:42'),(13,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:35:51','2017-05-12 19:35:51'),(14,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:36:41','2017-05-12 19:36:41'),(15,3,9,'/var/www/iHint/storage/exercises/user_3/exercise_9/exercicio1.c',1,10,1,'2017-05-12 19:43:03','2017-05-12 19:43:03'),(16,2,1,'/var/www/iHint/storage/exercises/user_2/exercise_1/ex1.c',1,10,1,'2017-05-12 20:01:54','2017-05-12 20:01:54'),(17,2,2,'/var/www/iHint/storage/exercises/user_2/exercise_2/ex2.c',1,9,1,'2017-05-19 15:28:29','2017-05-19 15:28:29'),(18,2,2,'/var/www/iHint/storage/exercises/user_2/exercise_2/ex2.c',1,9,1,'2017-05-19 15:30:45','2017-05-19 15:30:45'),(19,4,1,'/var/www/iHint/storage/exercises/user_4/exercise_1/ex1.c',1,9,1,'2017-05-19 17:11:28','2017-05-19 17:11:28'),(20,6,1,'/var/www/iHint/storage/exercises/user_6/exercise_1/exec1.c',1,7,0,'2017-05-19 17:13:45','2017-05-19 17:13:45'),(21,7,1,'/var/www/iHint/storage/exercises/user_7/exercise_1/ex1.c',1,11,1,'2017-05-19 17:17:48','2017-05-19 17:17:48'),(22,5,1,'/var/www/iHint/storage/exercises/user_5/exercise_1/exe1.c',1,9,1,'2017-05-19 17:18:31','2017-05-19 17:18:31'),(23,4,2,'/var/www/iHint/storage/exercises/user_4/exercise_2/ex2.c',1,17,1,'2017-05-19 17:19:05','2017-05-19 17:19:05'),(24,6,2,'/var/www/iHint/storage/exercises/user_6/exercise_2/exec2.c',1,8,0,'2017-05-19 17:20:39','2017-05-19 17:20:39'),(25,4,2,'/var/www/iHint/storage/exercises/user_4/exercise_2/ex2.c',1,13,1,'2017-05-19 17:21:02','2017-05-19 17:21:02'),(26,7,2,'/var/www/iHint/storage/exercises/user_7/exercise_2/ex2.c',1,10,1,'2017-05-19 17:25:03','2017-05-19 17:25:03'),(27,5,2,'/var/www/iHint/storage/exercises/user_5/exercise_2/exe2.c',1,11,1,'2017-05-19 17:28:32','2017-05-19 17:28:32'),(28,7,3,'/var/www/iHint/storage/exercises/user_7/exercise_3/ex3.c',1,13,7,'2017-05-19 17:31:00','2017-05-19 17:31:00'),(29,6,3,'/var/www/iHint/storage/exercises/user_6/exercise_3/exec3.c',1,12,6,'2017-05-19 17:31:02','2017-05-19 17:31:02'),(30,4,3,'/var/www/iHint/storage/exercises/user_4/exercise_3/ex3.c',1,12,7,'2017-05-19 17:31:32','2017-05-19 17:31:32'),(31,5,3,'/var/www/iHint/storage/exercises/user_5/exercise_3/exe3.c',1,17,7,'2017-05-19 17:38:06','2017-05-19 17:38:06'),(32,5,3,'/var/www/iHint/storage/exercises/user_5/exercise_3/exe3.c',1,17,7,'2017-05-19 17:38:28','2017-05-19 17:38:28'),(33,5,3,'/var/www/iHint/storage/exercises/user_5/exercise_3/exe3.c',1,17,7,'2017-05-19 17:38:56','2017-05-19 17:38:56'),(34,4,4,'/var/www/iHint/storage/exercises/user_4/exercise_4/ex4.c',1,19,5,'2017-05-19 17:42:35','2017-05-19 17:42:35'),(35,7,4,'/var/www/iHint/storage/exercises/user_7/exercise_4/ex4.c',1,19,3,'2017-05-19 17:48:42','2017-05-19 17:48:42'),(36,7,4,'/var/www/iHint/storage/exercises/user_7/exercise_4/ex4.c',1,18,3,'2017-05-19 17:49:26','2017-05-19 17:49:26'),(37,4,5,'/var/www/iHint/storage/exercises/user_4/exercise_5/ex.c',1,19,4,'2017-05-19 17:59:21','2017-05-19 17:59:21'),(38,6,4,'/var/www/iHint/storage/exercises/user_6/exercise_4/exec4.c',1,15,3,'2017-05-19 18:08:19','2017-05-19 18:08:19'),(39,5,4,'/var/www/iHint/storage/exercises/user_5/exercise_4/exe4.c',1,9,1,'2017-05-19 18:12:47','2017-05-19 18:12:47'),(40,5,4,'/var/www/iHint/storage/exercises/user_5/exercise_4/exe4.c',1,9,1,'2017-05-19 18:13:27','2017-05-19 18:13:27'),(41,4,6,'/var/www/iHint/storage/exercises/user_4/exercise_6/ex.c',1,15,3,'2017-05-19 18:14:06','2017-05-19 18:14:06'),(42,2,3,'/var/www/iHint/storage/exercises/user_2/exercise_3/ex3.c',1,10,6,'2017-05-19 18:16:45','2017-05-19 18:16:45'),(43,2,3,'/var/www/iHint/storage/exercises/user_2/exercise_3/ex3.c',1,10,6,'2017-05-19 18:17:00','2017-05-19 18:17:00'),(44,6,5,'/var/www/iHint/storage/exercises/user_6/exercise_5/exec5.c',1,15,2,'2017-05-19 18:20:43','2017-05-19 18:20:43'),(45,4,6,'/var/www/iHint/storage/exercises/user_4/exercise_6/ex.c',1,15,3,'2017-05-19 18:21:50','2017-05-19 18:21:50'),(46,6,5,'/var/www/iHint/storage/exercises/user_6/exercise_5/exec5.c',1,15,2,'2017-05-19 18:22:27','2017-05-19 18:22:27'),(47,4,6,'/var/www/iHint/storage/exercises/user_4/exercise_6/ex.c',1,15,3,'2017-05-19 18:22:46','2017-05-19 18:22:46'),(48,5,5,'/var/www/iHint/storage/exercises/user_5/exercise_5/exe5.c',1,9,1,'2017-05-19 18:23:39','2017-05-19 18:23:39'),(49,4,6,'/var/www/iHint/storage/exercises/user_4/exercise_6/ex.c',1,15,3,'2017-05-19 18:24:16','2017-05-19 18:24:16'),(50,4,6,'/var/www/iHint/storage/exercises/user_4/exercise_6/ex.c',1,15,3,'2017-05-19 18:24:47','2017-05-19 18:24:47'),(51,7,4,'/var/www/iHint/storage/exercises/user_7/exercise_4/ex4.c',1,11,1,'2017-05-19 18:25:41','2017-05-19 18:25:41'),(52,5,5,'/var/www/iHint/storage/exercises/user_5/exercise_5/exe5.c',1,9,1,'2017-05-19 18:27:05','2017-05-19 18:27:05'),(53,5,5,'/var/www/iHint/storage/exercises/user_5/exercise_5/exe5.c',1,10,1,'2017-05-19 18:33:30','2017-05-19 18:33:30'),(54,4,7,'/var/www/iHint/storage/exercises/user_4/exercise_7/ex.c',1,8,1,'2017-05-19 18:34:40','2017-05-19 18:34:40'),(55,4,7,'/var/www/iHint/storage/exercises/user_4/exercise_7/ex.c',1,8,1,'2017-05-19 18:35:40','2017-05-19 18:35:40'),(56,4,7,'/var/www/iHint/storage/exercises/user_4/exercise_7/ex.c',1,8,1,'2017-05-19 18:35:57','2017-05-19 18:35:57'),(57,7,5,'/var/www/iHint/storage/exercises/user_7/exercise_5/ex5.c',1,11,1,'2017-05-19 18:41:59','2017-05-19 18:41:59'),(58,7,5,'/var/www/iHint/storage/exercises/user_7/exercise_5/ex5.c',1,11,1,'2017-05-19 18:43:20','2017-05-19 18:43:20'),(59,4,6,'/var/www/iHint/storage/exercises/user_4/exercise_6/ex6.c',1,16,3,'2017-05-19 18:48:32','2017-05-19 18:48:32'),(60,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,2,'2017-05-19 18:58:16','2017-05-19 18:58:16'),(61,5,6,'/var/www/iHint/storage/exercises/user_5/exercise_6/exe6.c',1,18,2,'2017-05-19 18:58:17','2017-05-19 18:58:17'),(62,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,2,'2017-05-19 18:58:45','2017-05-19 18:58:45'),(63,5,6,'/var/www/iHint/storage/exercises/user_5/exercise_6/exe6.c',1,18,2,'2017-05-19 18:58:56','2017-05-19 18:58:56'),(64,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,21,3,'2017-05-19 18:59:46','2017-05-19 18:59:46'),(65,2,4,'/var/www/iHint/storage/exercises/user_2/exercise_4/ex4.c',1,17,4,'2017-05-19 19:01:32','2017-05-19 19:01:32'),(66,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,18,2,'2017-05-19 19:03:16','2017-05-19 19:03:16'),(67,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,2,'2017-05-19 19:03:30','2017-05-19 19:03:30'),(68,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,2,'2017-05-19 19:05:06','2017-05-19 19:05:06'),(69,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,2,'2017-05-19 19:05:25','2017-05-19 19:05:25'),(70,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,21,3,'2017-05-19 19:06:14','2017-05-19 19:06:14'),(71,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,2,'2017-05-19 19:06:23','2017-05-19 19:06:23'),(72,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,21,3,'2017-05-19 19:06:23','2017-05-19 19:06:23'),(73,5,6,'/var/www/iHint/storage/exercises/user_5/exercise_6/exe6.c',1,18,2,'2017-05-19 19:06:37','2017-05-19 19:06:37'),(74,5,6,'/var/www/iHint/storage/exercises/user_5/exercise_6/exe6.c',1,17,2,'2017-05-19 19:06:48','2017-05-19 19:06:48'),(75,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,21,3,'2017-05-19 19:07:09','2017-05-19 19:07:09'),(76,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,3,'2017-05-19 19:08:52','2017-05-19 19:08:52'),(77,5,6,'/var/www/iHint/storage/exercises/user_5/exercise_6/exe6.c',1,17,3,'2017-05-19 19:09:19','2017-05-19 19:09:19'),(78,7,6,'/var/www/iHint/storage/exercises/user_7/exercise_6/ex6.c',1,17,3,'2017-05-19 19:09:29','2017-05-19 19:09:29'),(79,5,6,'/var/www/iHint/storage/exercises/user_5/exercise_6/exe6.c',1,17,3,'2017-05-19 19:10:04','2017-05-19 19:10:04'),(80,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,21,4,'2017-05-19 19:10:35','2017-05-19 19:10:35'),(81,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,21,4,'2017-05-19 19:12:12','2017-05-19 19:12:12'),(82,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,23,4,'2017-05-19 19:13:47','2017-05-19 19:13:47'),(83,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,23,4,'2017-05-19 19:13:57','2017-05-19 19:13:57'),(84,2,5,'/var/www/iHint/storage/exercises/user_2/exercise_5/ex5.c',1,18,4,'2017-05-19 19:15:52','2017-05-19 19:15:52'),(85,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,23,4,'2017-05-19 19:16:52','2017-05-19 19:16:52'),(86,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,23,4,'2017-05-19 19:17:19','2017-05-19 19:17:19'),(87,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,23,4,'2017-05-19 19:18:17','2017-05-19 19:18:17'),(88,5,7,'/var/www/iHint/storage/exercises/user_5/exercise_7/exe7.c',1,10,1,'2017-05-19 19:18:33','2017-05-19 19:18:33'),(89,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,23,5,'2017-05-19 19:19:12','2017-05-19 19:19:12'),(90,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,24,5,'2017-05-19 19:20:51','2017-05-19 19:20:51'),(91,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,24,4,'2017-05-19 19:21:14','2017-05-19 19:21:14'),(92,5,7,'/var/www/iHint/storage/exercises/user_5/exercise_7/exe7.c',1,10,1,'2017-05-19 19:21:21','2017-05-19 19:21:21'),(93,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,24,4,'2017-05-19 19:22:19','2017-05-19 19:22:19'),(94,4,8,'/var/www/iHint/storage/exercises/user_4/exercise_8/ex8.c',1,58,14,'2017-05-19 19:22:25','2017-05-19 19:22:25'),(95,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,24,4,'2017-05-19 19:22:29','2017-05-19 19:22:29'),(96,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,24,4,'2017-05-19 19:23:29','2017-05-19 19:23:29'),(97,4,7,'/var/www/iHint/storage/exercises/user_4/exercise_7/ex.c',1,8,1,'2017-05-19 19:23:33','2017-05-19 19:23:33'),(98,5,7,'/var/www/iHint/storage/exercises/user_5/exercise_7/exe7.c',1,10,1,'2017-05-19 19:24:02','2017-05-19 19:24:02'),(99,7,7,'/var/www/iHint/storage/exercises/user_7/exercise_7/ex7.c',1,9,1,'2017-05-19 19:24:06','2017-05-19 19:24:06'),(100,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,24,5,'2017-05-19 19:24:16','2017-05-19 19:24:16'),(101,5,7,'/var/www/iHint/storage/exercises/user_5/exercise_7/exe8.c',1,3,1,'2017-05-19 19:24:24','2017-05-19 19:24:24'),(102,5,7,'/var/www/iHint/storage/exercises/user_5/exercise_7/exe7.c',1,10,1,'2017-05-19 19:24:28','2017-05-19 19:24:28'),(103,5,7,'/var/www/iHint/storage/exercises/user_5/exercise_7/exe7.c',1,10,1,'2017-05-19 19:26:10','2017-05-19 19:26:10'),(104,6,6,'/var/www/iHint/storage/exercises/user_6/exercise_6/exec6.c',1,17,2,'2017-05-19 19:27:41','2017-05-19 19:27:41'),(105,5,8,'/var/www/iHint/storage/exercises/user_5/exercise_8/exe8.c',1,33,1,'2017-05-19 20:04:03','2017-05-19 20:04:03'),(106,6,7,'/var/www/iHint/storage/exercises/user_6/exercise_7/exec7.c',1,6,0,'2017-05-19 20:04:30','2017-05-19 20:04:30'),(107,6,7,'/var/www/iHint/storage/exercises/user_6/exercise_7/exec7.c',1,6,0,'2017-05-19 20:05:57','2017-05-19 20:05:57'),(108,6,7,'/var/www/iHint/storage/exercises/user_6/exercise_7/exec7.c',1,6,0,'2017-05-19 20:06:23','2017-05-19 20:06:23'),(109,6,7,'/var/www/iHint/storage/exercises/user_6/exercise_7/exec7.c',1,6,0,'2017-05-19 20:09:04','2017-05-19 20:09:04'),(110,5,8,'/var/www/iHint/storage/exercises/user_5/exercise_8/exe8.c',1,35,1,'2017-05-19 20:10:00','2017-05-19 20:10:00'),(111,6,7,'/var/www/iHint/storage/exercises/user_6/exercise_7/exec7.c',1,6,0,'2017-05-19 20:10:26','2017-05-19 20:10:26'),(112,5,8,'/var/www/iHint/storage/exercises/user_5/exercise_8/exe8.c',1,33,1,'2017-05-19 20:11:43','2017-05-19 20:11:43'),(113,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,20,1,'2017-05-19 20:34:25','2017-05-19 20:34:25'),(114,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,20,1,'2017-05-19 20:35:00','2017-05-19 20:35:00'),(115,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,20,1,'2017-05-19 20:35:40','2017-05-19 20:35:40'),(116,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,20,1,'2017-05-19 20:40:39','2017-05-19 20:40:39'),(117,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,21,1,'2017-05-19 20:46:41','2017-05-19 20:46:41'),(118,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,22,1,'2017-05-19 20:47:48','2017-05-19 20:47:48'),(119,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,22,1,'2017-05-19 20:48:43','2017-05-19 20:48:43'),(120,7,8,'/var/www/iHint/storage/exercises/user_7/exercise_8/ex8.c',1,21,1,'2017-05-19 20:49:06','2017-05-19 20:49:06'),(121,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',1,20,3,'2017-05-19 20:59:18','2017-05-19 20:59:18'),(122,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',1,20,3,'2017-05-19 21:00:04','2017-05-19 21:00:04'),(123,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',1,20,3,'2017-05-19 21:00:09','2017-05-19 21:00:09'),(124,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',1,20,3,'2017-05-19 21:00:36','2017-05-19 21:00:36'),(125,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',1,19,3,'2017-05-19 21:02:41','2017-05-19 21:02:41'),(126,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',0,17,2,'2017-05-19 21:05:29','2017-05-19 21:05:29'),(127,2,6,'/var/www/iHint/storage/exercises/user_2/exercise_6/ex6.c',1,17,2,'2017-05-19 21:06:07','2017-05-19 21:06:07'),(128,2,7,'/var/www/iHint/storage/exercises/user_2/exercise_7/ex7.c',1,8,0,'2017-05-19 21:21:42','2017-05-19 21:21:42'),(129,2,8,'/var/www/iHint/storage/exercises/user_2/exercise_8/ex8.c',1,49,13,'2017-05-19 21:52:53','2017-05-19 21:52:53'),(130,2,8,'/var/www/iHint/storage/exercises/user_2/exercise_8/ex8.c',1,54,14,'2017-05-19 21:56:48','2017-05-19 21:56:48'),(131,8,1,'/var/www/iHint/storage/exercises/user_8/exercise_1/exercicio_um.c',1,8,1,'2017-05-20 21:20:55','2017-05-20 21:20:55'),(132,8,1,'/var/www/iHint/storage/exercises/user_8/exercise_1/exercicio_um.c',1,8,1,'2017-05-20 21:21:22','2017-05-20 21:21:22'),(133,8,1,'/var/www/iHint/storage/exercises/user_8/exercise_1/exercicio_um.c',1,8,1,'2017-05-20 21:23:16','2017-05-20 21:23:16'),(134,8,1,'/var/www/iHint/storage/exercises/user_8/exercise_1/exercicio_um.c',1,7,1,'2017-05-20 21:23:45','2017-05-20 21:23:45'),(135,8,1,'/var/www/iHint/storage/exercises/user_8/exercise_1/exercicio_um.c',1,7,1,'2017-05-20 21:24:01','2017-05-20 21:24:01'),(136,8,2,'/var/www/iHint/storage/exercises/user_8/exercise_2/exercicio_dois.c',1,8,1,'2017-05-20 21:31:56','2017-05-20 21:31:56'),(137,8,3,'/var/www/iHint/storage/exercises/user_8/exercise_3/exercicio_tres.c',1,11,7,'2017-05-20 22:15:50','2017-05-20 22:15:50'),(138,8,4,'/var/www/iHint/storage/exercises/user_8/exercise_4/exercicio_quatro.c',1,21,4,'2017-05-20 22:23:59','2017-05-20 22:23:59'),(139,8,5,'/var/www/iHint/storage/exercises/user_8/exercise_5/exercicio_cinco.c',1,23,4,'2017-05-21 00:01:27','2017-05-21 00:01:27'),(140,8,6,'/var/www/iHint/storage/exercises/user_8/exercise_6/exercicio_seis.c',1,13,3,'2017-05-21 00:16:56','2017-05-21 00:16:56'),(141,8,6,'/var/www/iHint/storage/exercises/user_8/exercise_6/exercicio_seis.c',1,13,3,'2017-05-21 00:17:34','2017-05-21 00:17:34'),(142,8,6,'/var/www/iHint/storage/exercises/user_8/exercise_6/exercicio_seis.c',1,14,3,'2017-05-21 00:19:22','2017-05-21 00:19:22'),(143,8,7,'/var/www/iHint/storage/exercises/user_8/exercise_7/exercicio_sete.c',1,7,1,'2017-05-21 00:51:42','2017-05-21 00:51:42'),(144,8,7,'/var/www/iHint/storage/exercises/user_8/exercise_7/exercicio_sete.c',1,7,1,'2017-05-21 00:52:20','2017-05-21 00:52:20'),(145,8,8,'/var/www/iHint/storage/exercises/user_8/exercise_8/exercicio_oito.c',1,79,16,'2017-05-21 01:36:06','2017-05-21 01:36:06'),(146,8,9,'/var/www/iHint/storage/exercises/user_8/exercise_9/exercicio_um.c',1,7,1,'2017-05-21 01:38:25','2017-05-21 01:38:25');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercise_lists`
--

DROP TABLE IF EXISTS `exercise_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exercises` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise_lists`
--

LOCK TABLES `exercise_lists` WRITE;
/*!40000 ALTER TABLE `exercise_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `exercise_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercise_types`
--

DROP TABLE IF EXISTS `exercise_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise_types`
--

LOCK TABLES `exercise_types` WRITE;
/*!40000 ALTER TABLE `exercise_types` DISABLE KEYS */;
INSERT INTO `exercise_types` VALUES (1,'Condicional/Laço de Repetição','2017-05-12 14:48:54','2017-05-12 14:48:54');
/*!40000 ALTER TABLE `exercise_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `exercisetype_id` int(10) unsigned NOT NULL,
  `enunciation` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exercises_exercisetype_id_foreign` (`exercisetype_id`),
  CONSTRAINT `exercises_exercisetype_id_foreign` FOREIGN KEY (`exercisetype_id`) REFERENCES `exercise_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES (1,1,'Joaozinho quer calcular e mostrar a quantidade de litros de combustível gastos em uma viagem, ao utilizar um automóvel que faz 12 KM/L. Para isso, ele gostaria que você o auxiliasse através de um simples programa. Para efetuar o cálculo, deve-se fornecer o tempo gasto na viagem (em horas) e a velocidade média durante a mesma (em km/h). Assim, pode-se obter distância percorrida e, em seguida, calcular quantos litros seriam necessários. Mostre o valor com 3 casas decimais após o ponto.\r\n\r\nEntrada: A entrada contém dois inteiros. O primeiro é o tempo gasto na viagem (em horas) e o segundo é a velocidade média durante a mesma (em km/h).\r\n\r\nSaída: Imprima a quantidade de litros necessária para realizar a viagem, com três dígitos após o ponto decimal\r\n\r\nExemplo de Entrada: 10 85 	\r\n\r\nExemplo de Saída: 70.833','a:3:{i:0;a:2:{s:11:\"answerInput\";s:5:\"10 85\";s:12:\"answerOutput\";s:6:\"70.833\";}i:1;a:2:{s:11:\"answerInput\";s:4:\"2 92\";s:12:\"answerOutput\";s:6:\"15.333\";}i:2;a:2:{s:11:\"answerInput\";s:5:\"22 67\";s:12:\"answerOutput\";s:7:\"122.833\";}}','2017-05-12 14:51:15','2017-05-12 14:51:15'),(2,1,'Leia quatro valores inteiros A, B, C e D. A seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D segundo a fórmula: DIFERENCA = (A * B - C * D).\r\n\r\nEntrada: A entrada contém 4 valores inteiros.\r\n\r\nSaída: Imprima a mensagem DIFERENCA com todas as letras maiúsculas, conforme exemplo abaixo, com um espaço em branco antes e depois da igualdade.\r\n\r\nExemplos de Entrada: 5 6 7 8\r\n\r\nExemplos de Saída: DIFERENCA = -26','a:3:{i:0;a:2:{s:11:\"answerInput\";s:7:\"5 6 7 8\";s:12:\"answerOutput\";s:15:\"DIFERENCA = -26\";}i:1;a:2:{s:11:\"answerInput\";s:7:\"0 0 7 8\";s:12:\"answerOutput\";s:15:\"DIFERENCA = -56\";}i:2;a:2:{s:11:\"answerInput\";s:8:\"5 6 -7 8\";s:12:\"answerOutput\";s:14:\"DIFERENCA = 86\";}}','2017-05-12 14:53:58','2017-05-12 14:53:58'),(3,1,'Leia 4 valores inteiros A, B, C e D. A seguir, se B for maior do que C e se D for maior do que A, e a soma de C com D for maior que a soma de A e B e se C e D, ambos, forem positivos e se a variável A for par escrever a mensagem \"Valores aceitos\", senão escrever \"Valores nao aceitos\".\r\n\r\nEntrada: Quatro números inteiros A, B, C e D.\r\n\r\nSaída: Mostre a respectiva mensagem após a validação dos valores.\r\n\r\nExemplo de Entrada: 5 6 7 8\r\n\r\nExemplo de Saída: Valores nao aceitos','a:2:{i:0;a:2:{s:11:\"answerInput\";s:7:\"5 6 7 8\";s:12:\"answerOutput\";s:19:\"Valores nao aceitos\";}i:1;a:2:{s:11:\"answerInput\";s:7:\"2 3 2 6\";s:12:\"answerOutput\";s:15:\"Valores aceitos\";}}','2017-05-12 14:55:20','2017-05-12 14:55:20'),(4,1,'\r\n\r\nLeia um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias\r\n\r\nObs.: apenas para facilitar o cálculo, considere todo ano com 365 dias e todo mês com 30 dias. Nos casos de teste nunca haverá uma situação que permite 12 meses e alguns dias, como 360, 363 ou 364. Este é apenas um exercício com objetivo de testar raciocínio matemático simples.\r\n\r\nEntrada: A entrada contém um valor inteiro.\r\n\r\nSaída: Imprima a saída conforme exemplo fornecido.\r\n\r\nExemplo de Entrada: 400\r\n\r\nExemplo de Saída: 1 ano(s) 1 mes(es) 5 dia(s)\r\n','a:3:{i:0;a:2:{s:11:\"answerInput\";s:3:\"400\";s:12:\"answerOutput\";s:27:\"1 ano(s) 1 mes(es) 5 dia(s)\";}i:1;a:2:{s:11:\"answerInput\";s:3:\"800\";s:12:\"answerOutput\";s:28:\"2 ano(s) 2 mes(es) 10 dia(s)\";}i:2;a:2:{s:11:\"answerInput\";s:2:\"30\";s:12:\"answerOutput\";s:27:\"0 ano(s) 1 mes(es) 0 dia(s)\";}}','2017-05-12 14:57:09','2017-05-12 14:57:09'),(5,1,'Leia um valor inteiro, que é o tempo de duração em segundos de um determinado evento em uma fábrica, e informe-o expresso no formato horas:minutos:segundos.\r\n\r\nEntrada: A entrada contém um valor inteiro N.\r\n\r\nSaída: Imprima o tempo lido na entrada (segundos), convertido para horas:minutos:segundos, conforme exemplo fornecido.\r\n\r\nExemplo de Entrada: 556\r\n\r\nExemplo de Saída: 0:9:16','a:3:{i:0;a:2:{s:11:\"answerInput\";s:3:\"556\";s:12:\"answerOutput\";s:6:\"0:9:16\";}i:1;a:2:{s:11:\"answerInput\";s:1:\"1\";s:12:\"answerOutput\";s:5:\"0:0:1\";}i:2;a:2:{s:11:\"answerInput\";s:6:\"140153\";s:12:\"answerOutput\";s:8:\"38:55:53\";}}','2017-05-12 14:59:23','2017-05-12 14:59:23'),(6,1,'Leia 3 valores de ponto flutuante e efetue o cálculo das raízes da equação de Bhaskara. Se não for possível calcular as raízes, mostre a mensagem correspondente “Impossivel calcular”, caso haja uma divisão por 0 ou raiz de numero negativo.\r\n\r\nEntrada: Leia três valores de ponto flutuante (double) A, B e C.\r\n\r\nSaída: Se não houver possibilidade de calcular as raízes, apresente a mensagem \"Impossivel calcular\". Caso contrário, imprima o resultado das raízes com 5 dígitos após o ponto, com uma mensagem correspondente conforme exemplo abaixo. Imprima sempre o final de linha após cada mensagem.\r\n\r\nExemplos de Entrada: 10.0 20.1 5.1\r\n\r\nExemplos de Saída: R1 = -0.29788 R2 = -1.71212','a:4:{i:0;a:2:{s:11:\"answerInput\";s:13:\"10.0 20.1 5.1\";s:12:\"answerOutput\";s:27:\"R1 = -0.29788 R2 = -1.71212\";}i:1;a:2:{s:11:\"answerInput\";s:12:\"0.0 20.0 5.0\";s:12:\"answerOutput\";s:19:\"Impossivel calcular\";}i:2;a:2:{s:11:\"answerInput\";s:14:\"10.3 203.0 5.0\";s:12:\"answerOutput\";s:28:\"R1 = -0.02466 R2 = -19.68408\";}i:3;a:2:{s:11:\"answerInput\";s:12:\"10.0 3.0 5.0\";s:12:\"answerOutput\";s:19:\"Impossivel calcular\";}}','2017-05-12 15:03:10','2017-05-12 15:03:10'),(7,1,'Faça um programa que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o total a receber no final do mês, com duas casas decimais.\r\n\r\nEntrada: A entrada contém um texto (primeiro nome do vendedor) e 2 valores de dupla precisão (double) com duas casas decimais, representando o salário fixo do vendedor e montante total das vendas efetuadas por este vendedor, respectivamente.\r\n\r\nSaída: Imprima o total que o funcionário deverá receber, conforme exemplo fornecido.\r\n\r\nExemplos de Entrada: JOAO 500.00 1230.30\r\n\r\nExemplos de Saída: TOTAL = R$ 684.54','a:3:{i:0;a:2:{s:11:\"answerInput\";s:19:\"JOAO 500.00 1230.30\";s:12:\"answerOutput\";s:17:\"TOTAL = R$ 684.54\";}i:1;a:2:{s:11:\"answerInput\";s:17:\"PEDRO 700.00 0.00\";s:12:\"answerOutput\";s:17:\"TOTAL = R$ 700.00\";}i:2;a:2:{s:11:\"answerInput\";s:25:\"MANGOJATA 1700.00 1230.50\";s:12:\"answerOutput\";s:18:\"TOTAL = R$ 1884.57\";}}','2017-05-12 15:05:19','2017-05-12 15:05:19'),(8,1,'Leia um valor de ponto flutuante com duas casas decimais. Este valor representa um valor monetário. A seguir, calcule o menor número de notas e moedas possíveis no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e 0.01. A seguir mostre a relação de notas necessárias.\r\n\r\nEntrada: A entrada contém um valor de ponto flutuante N (0 ≤ N ≤ 1000000.00).\r\n\r\nSaída: Imprima a quantidade mínima de notas e moedas necessárias para trocar o valor inicial, conforme exemplo fornecido.\r\n\r\nExemplo de Entrada: 576.73\r\n\r\nExemplo de Saída: NOTAS: 5 nota(s) de R$ 100.00 1 nota(s) de R$ 50.00 1 nota(s) de R$ 20.00 0 nota(s) de R$ 10.00 1 nota(s) de R$ 5.00 0 nota(s) de R$ 2.00 MOEDAS: 1 moeda(s) de R$ 1.00 1 moeda(s) de R$ 0.50 0 moeda(s) de R$ 0.25 2 moeda(s) de R$ 0.10 0 moeda(s) de R$ 0.05 3 moeda(s) de R$ 0.01','a:3:{i:0;a:2:{s:11:\"answerInput\";s:6:\"576.73\";s:12:\"answerOutput\";s:277:\"NOTAS: 5 nota(s) de R$ 100.00 1 nota(s) de R$ 50.00 1 nota(s) de R$ 20.00 0 nota(s) de R$ 10.00 1 nota(s) de R$ 5.00 0 nota(s) de R$ 2.00 MOEDAS: 1 moeda(s) de R$ 1.00 1 moeda(s) de R$ 0.50 0 moeda(s) de R$ 0.25 2 moeda(s) de R$ 0.10 0 moeda(s) de R$ 0.05 3 moeda(s) de R$ 0.01\";}i:1;a:2:{s:11:\"answerInput\";s:4:\"4.00\";s:12:\"answerOutput\";s:277:\"NOTAS: 0 nota(s) de R$ 100.00 0 nota(s) de R$ 50.00 0 nota(s) de R$ 20.00 0 nota(s) de R$ 10.00 0 nota(s) de R$ 5.00 2 nota(s) de R$ 2.00 MOEDAS: 0 moeda(s) de R$ 1.00 0 moeda(s) de R$ 0.50 0 moeda(s) de R$ 0.25 0 moeda(s) de R$ 0.10 0 moeda(s) de R$ 0.05 0 moeda(s) de R$ 0.01\";}i:2;a:2:{s:11:\"answerInput\";s:5:\"91.01\";s:12:\"answerOutput\";s:277:\"NOTAS: 0 nota(s) de R$ 100.00 1 nota(s) de R$ 50.00 2 nota(s) de R$ 20.00 0 nota(s) de R$ 10.00 0 nota(s) de R$ 5.00 0 nota(s) de R$ 2.00 MOEDAS: 1 moeda(s) de R$ 1.00 0 moeda(s) de R$ 0.50 0 moeda(s) de R$ 0.25 0 moeda(s) de R$ 0.10 0 moeda(s) de R$ 0.05 1 moeda(s) de R$ 0.01\";}}','2017-05-12 15:08:55','2017-05-12 15:08:55'),(9,1,'Joaozinho quer calcular e mostrar a quantidade de litros de combustível gastos em uma viagem, ao utilizar um automóvel que faz 12 KM/L. Para isso, ele gostaria que você o auxiliasse através de um simples programa. Para efetuar o cálculo, deve-se fornecer o tempo gasto na viagem (em horas) e a velocidade média durante a mesma (em km/h). Assim, pode-se obter distância percorrida e, em seguida, calcular quantos litros seriam necessários. Mostre o valor com 3 casas decimais após o ponto.\r\n\r\nEntrada: A entrada contém dois inteiros. O primeiro é o tempo gasto na viagem (em horas) e o segundo é a velocidade média durante a mesma (em km/h).\r\n\r\nSaída: Imprima a quantidade de litros necessária para realizar a viagem, com três dígitos após o ponto decimal\r\n\r\nExemplo de Entrada: 10 85 	\r\n\r\nExemplo de Saída: 70.833','a:3:{i:0;a:2:{s:11:\"answerInput\";s:5:\"10 85\";s:12:\"answerOutput\";s:6:\"70.833\";}i:1;a:2:{s:11:\"answerInput\";s:4:\"2 92\";s:12:\"answerOutput\";s:6:\"15.333\";}i:2;a:2:{s:11:\"answerInput\";s:5:\"22 67\";s:12:\"answerOutput\";s:7:\"122.833\";}}','2017-05-12 19:24:53','2017-05-12 19:24:53');
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hints`
--

DROP TABLE IF EXISTS `hints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hints` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `exercise_id` int(10) unsigned NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hints_user_id_foreign` (`user_id`),
  KEY `hints_exercise_id_foreign` (`exercise_id`),
  CONSTRAINT `hints_exercise_id_foreign` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`id`),
  CONSTRAINT `hints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hints`
--

LOCK TABLES `hints` WRITE;
/*!40000 ALTER TABLE `hints` DISABLE KEYS */;
INSERT INTO `hints` VALUES (1,2,1,'Atenção com os argumentos, convertê-los antes de usá-lo!\r\nCuidado com operações entre int e float.\r\nIdentifique todas variáveis que você vai usar e seus possíveis tipos.\r\nNão esqueça de incluir a biblioteca stdlib.\r\nExibir 3 casas decimas: \".3%f\"','2017-05-12 20:07:16','2017-05-12 20:07:16'),(2,2,1,'Atenção com os argumentos, convertê-los antes de usá-lo!\r\nCuidado com operações entre int e float.\r\nIdentifique todas variáveis que você vai usar e seus possíveis tipos.\r\nNão esqueça de incluir a biblioteca stdlib.\r\nExibir 3 casas decimas: \".3%f\"','2017-05-12 20:11:09','2017-05-12 20:11:09'),(3,2,2,'- Não esqueça de imprimir a saída conforme exemplificado.\r\n- Converta todas as entradas para inteiro.\r\n- Não se esqueça de declarar as variáveis que receberão os parâmetros.','2017-05-19 15:33:54','2017-05-19 15:33:54'),(4,2,2,'- Não esqueça de imprimir a saída conforme exemplificado.\r\n- Converta todas as entradas para inteiro.\r\n- Não se esqueça de declarar as variáveis que receberão os parâmetros.','2017-05-19 15:37:15','2017-05-19 15:37:15'),(5,4,1,'Será necessário utilizar as bibliotecas stdio e stdlib. A primeira é necessário para imprimir na tela, enquanto a segunda, é necessário para realizar a conversão de char para ponto flutuante.\r\n\r\nPara pegar os valores pela linha de comando é necessário saber sobre os parâmetros argc e argv.\r\n\r\nOs valores contidos no argv devem ser convertidos para ponto flutuante por meio da função atof()\r\n\r\nA quantidade é litros é encontrada dividindo a distância pela media do veículo','2017-05-19 17:14:08','2017-05-19 17:14:08'),(6,6,1,'Se utilizar a função atoi, não esquecer de fazer o casting para float. O casting não será necessário se utilizar a função atof. ','2017-05-19 17:17:05','2017-05-19 17:17:05'),(7,7,1,'Para este exerício, lembre-se de calcular a distância e depois calcular a quantidade de litros gastos na viagem. Assim, basta multiplicar a velocidade pelo o tempo.','2017-05-19 17:19:48','2017-05-19 17:19:48'),(8,5,1,'Para este exercício deve se ter conhecimento primeiramente de como realizar o recebimento de parâmetros pelo termina (argc e argv), deve-se ressaltar que pode-se receber valores inteiros através da função atoi(), que deve ser chamado da seguinte maneira variavel = atoi(argv[1]). \r\nDepois para o restante do exercício deve-se lembrar da fórmula de calcular a distancia e depois utilizar essa distancia e dividir pelo consumo médio do veículo.','2017-05-19 17:23:26','2017-05-19 17:23:26'),(9,6,2,'Utilize a função atoi para converter string para número inteiro.','2017-05-19 17:23:32','2017-05-19 17:23:32'),(10,4,2,'É necessário criar 4 variáveis diferente como descrito no começo do exercício.\r\n\r\nRealizar a conversão do argv para inteiro, utilizando atoi()\r\n\r\nVocê pode realizar o produto entre duas variáveis e alocar em uma outra variável, utilizar a precedência de operador e escrever tudo em uma fórmula só ou utilizar a precedência por meio de abre e fecha parenteses\r\n\r\nA saida (o printf) deve ser exatamente igual ao descrito no exercício','2017-05-19 17:24:15','2017-05-19 17:24:15'),(11,7,2,'Neste exercício lembre-se de utilizar a fórmula dada pelo enunciado do exercício.','2017-05-19 17:26:16','2017-05-19 17:26:16'),(12,5,2,'Para este exercício deve-se lembrar somente da ideia de receber valores por linha de comando através do comando argc e argv, após este passo não há dificuldades pois a fórmula está descrita no exercício.','2017-05-19 17:29:44','2017-05-19 17:29:44'),(13,7,3,'Neste exercício, é possível utilizar apenas uma condicional(if), colocando todos as verificações descritas no enunciado. Para realizar se o número é par, utilize o operador \'%\' para pegar o resto da divisão e verificar se é zero, caso for zero o número é par.','2017-05-19 17:32:29','2017-05-19 17:32:29'),(14,6,3,'Colocar as condições em apenas um if e utilizar módulo \"%\" de 2 para verificar se um numero é par','2017-05-19 17:34:09','2017-05-19 17:34:09'),(15,4,3,'Caso queria utilizar apenas uma condicional, é necessário saber o operador lógico AND. Caso contrário, você pode fazer um if para cada condição descrita no exercício.\r\n\r\nPara cada condição, utilize abre e fecha parenteses.','2017-05-19 17:35:34','2017-05-19 17:35:34'),(16,5,3,'Para este exercício quando se lê a primeira vez, aparenta que deve ser realizado várias condições, porém não é necessário, utiliza o prefixo de and lógico (&&) e o exercício pode ser terminado somente com um comando if(), vale ressaltar também que para comparar positivo pode-se criar uma variável recebendo 1 e comparar com a mesma. ','2017-05-19 17:41:43','2017-05-19 17:41:43'),(17,4,4,'Utiliza um laço de repetição que roda enquanto a idade for maior que 0.\r\n\r\nDentro do laço, tem que tratar cada uma das variáveis: ano, mes e dia\r\n\r\nPara cada if, decremente a idade inicial passada por parâmetro no argv[].','2017-05-19 17:44:34','2017-05-19 17:44:34'),(18,4,5,'Lembre-se que uma hora possui 3600 segundos e um minuto possui 60 segundos.\r\n\r\nCrie um laço de repetição que decremente os segundos passados por parâmetro.\r\n\r\nÉ necessário tratar três condições: se ele é maior que as horas em segundos, senão, se é maior que minutos em segundos, senão é maior que um segundo\r\n\r\nPara cada if, incremente a variável correspondente: para o if de horas, incremente a variável h; para o if de minutos, incremente a variável m; e de segundo, a variável s.','2017-05-19 18:02:18','2017-05-19 18:02:18'),(19,6,4,'Primeiro deve ser feito if e else para verificar quando será incrementado o ano (maior que 365) e quando será incrementado o mes (maior que 30), após isso coloque as condições em um loop até o numero de dias não ser divisivel pelo numero de dias do mes e do ano.','2017-05-19 18:13:07','2017-05-19 18:13:07'),(20,5,4,'Para este exercício existe várias formas de serem realizadas, uma delas é a utilização de laços de repetição e a partir do laço e a condição de dias, meses e anos ir decrementando os dias e armazenando em variáveis ano, meses e dias. \r\nOutra forma que pode ser feita é utilizando resto da divisão onde o ano é o total / 365, meses é o resto da divisão do total por 365 e consequentemente por 30, da mesma forma se faz para os dias. ','2017-05-19 18:17:45','2017-05-19 18:17:45'),(21,2,3,'Verifique se as comparações estão certas, para facilitar, separe cada comparação entre parenteses!\r\nPara verificar um número par, utilize \"%\"(resto da divisão).','2017-05-19 18:18:51','2017-05-19 18:18:51'),(22,7,4,'Para este exercício, basta dividir os anos por 365 e pegar o resto e dividir por 30 e assim por diante. Não esqueça de usar o operador \'%\' para pegar o resto da divisão e utilizar na próxima operação.','2017-05-19 18:27:33','2017-05-19 18:27:33'),(23,6,5,'Primeiro pode ser feito um if e else para verificar quando será imcrementado as horas (dividir por 3600 segundos) e quando será contado os minutos (60 segundos), depois essas condições podem ser colocadas em loop para contar o numero de horas e minutos.','2017-05-19 18:28:21','2017-05-19 18:28:21'),(24,5,5,'O exercício 5 tem como base lógica o mesmo que o quarto exercício. Primeiro descobre-se o total de segundos que é o total pelo resto da divisão por 60, depois os minutos que é o total dividido por 60, neste passo tem que descobrir o minuto que é os minutos que você achou pelo resto da divisão por 60. Por fim as horas que é os minutos dividido por 60.','2017-05-19 18:42:29','2017-05-19 18:42:29'),(25,7,5,'Para este exercício, basta fazer a divisão do total de horas por 3600. Após isso pegue o resto desta divisão e divida por 60 para pegar os minutos e repita isso para os segundos. Obs: Não é necessário utilizar laço de repetição ou condicionais.','2017-05-19 18:44:37','2017-05-19 18:44:37'),(26,4,6,'Como o exercício pede para imprimir uma string quando não é possível realizar o cálculo. Devemos fazer um if para tratar quando o divisor é igual a 9 ou o delta é negativo.\r\n\r\nPara calcular o bhaskara, é necessário utilizar a função sqrt() da biblioteca math.h\r\n\r\nPara testar, compile no gcc com o argumento -lm. Exemplo: gcc exercicio.c -o executal -lm','2017-05-19 18:52:23','2017-05-19 18:52:23'),(27,2,4,'Crie uma variável de controle para saber quando parar de distribuir os dias entre os anos, meses e dias.\r\nWhile pode ser interessante nesse caso.\r\nCompare o tamanho da idade recebida em dias com o valor do ano (365), mês (30), caso seja maior que isso, coloque em dias.\r\n','2017-05-19 19:05:01','2017-05-19 19:05:01'),(28,7,6,'Neste exercício basta utilizar a fórluma: delta = b² - 4*a*c. Caso o delta < 0, não é possível calcular. Caso seja maior ou igual a zero, utlize a fórmula x = +- raiz(delta) / 2*a.\r\nObs: Não esqueça de verificar a divisão por zero na segunda fórmula.','2017-05-19 19:11:57','2017-05-19 19:11:57'),(29,5,6,'No exercício 7 primeira dica que deve-se utilizar a biblioteca math.h para calcular a raiz quadrada sqrt() e para realizar potência pow(valor, elevacao), por conseguinte tem que lembrar da formula para encontrar delta e depois para encontrar as duas raízes. Para ser impossível o delta tem que ser menor que 0 ou a ser igual a 0.  ','2017-05-19 19:12:31','2017-05-19 19:12:31'),(30,2,5,'Crie uma variável de controle para saber quando parar de distribuir os dias entre as horas, minutos e segundos.\r\nWhile pode ser interessante nesse caso.\r\nCompare o minuto, quando o minuto for igual a 60, incremente a hora.\r\nNão esqueça de zerar os minutos quando chegar a 60.\r\n','2017-05-19 19:18:58','2017-05-19 19:18:58'),(31,4,8,'Pode criar um vetor inicializado com 0 e cada posição é referente a uma nota/moeda.\r\n\r\nFaça um if para cada valor começando do maior para o menor. Se o valor for maior que a nota, você atualiza a posição do vetor com a quantidade de notas/moedas possíveis e decrementa o valor passado no argumento.\r\n\r\nÉ necessário muita atenção ao atribuir um ponto flutuante para o vetor de inteiro. Pois, o ponto flutuante pode não ser exato (0.01 vira 0,0100000...21) na hora de converter e realizará a conversão com um valor a menos.','2017-05-19 19:28:20','2017-05-19 19:28:20'),(32,5,7,'Este exercício a unica dificuldade que pode ser encontrada é para lembrar que 15% de um determinado valor é 15/100 ou 0.15 que será multiplicado pelo pelo valor da comissão, após só realizar a soma com o salário do funcionário. ','2017-05-19 19:28:40','2017-05-19 19:28:40'),(33,7,7,'Calcule o total de vendas pela porcentagem de comissão, ou seja, total_vendas * 0.15.','2017-05-19 19:29:10','2017-05-19 19:29:10'),(34,4,7,'É necessário utilizar a biblioteca string.h para copiar a string do nome do funcionário por meio da função strcpy(str1, str2).','2017-05-19 19:30:23','2017-05-19 19:30:23'),(35,6,6,'Criar um if e else para verificar se delta é maior ou menor que 0. Utilizar biblioteca math.h para calculo da raiz quadrada.','2017-05-19 19:36:18','2017-05-19 19:36:18'),(36,6,7,'Utilize a função atof para converer string para float.','2017-05-19 20:11:30','2017-05-19 20:11:30'),(37,5,8,'Para o exercício 8 é necessário primeiramente pensar em uma lógica para dividir o dinheiro em reais e depois em centavos, Uma sugestão é converter o valor de entrada para int desta forma você terá o valor antes da vírgula, para os centavos você pega o total que entrou menos o valor somente inteiro e multiplica por 100, desta forma você terá os valores em centavos.\r\n\r\nA partir disto você só necessita ir contando e armazenando em variáveis por exemplo para notas de 100 reais faz se n100 = valorEmReais / 100 e logo após valorEmReais recebe o resto de 100 reais (valorEmReais = valorEmReais % 100). Este passo você faz para todas as notas e moedas.  ','2017-05-19 20:19:35','2017-05-19 20:19:35'),(38,7,8,'Para este exercício, utilize divisões sucessivas, pegando o resto das divisões e dividindo novamente. Exemplo: 120 reais -> total/100 -> (total%100) / 20. Faça isso com todas as notas.','2017-05-19 20:51:03','2017-05-19 20:51:03'),(39,2,7,'Utilize strcpy para receber o nome passado por parâmetro.\r\nLembre de importar a biblioteca string.h.\r\nPara definir o número de casas utilize %.nf (sendo n o número de casas decimais).\r\n','2017-05-19 21:24:02','2017-05-19 21:24:02'),(40,8,1,'Defina variáveis com nomes que definam de fato a sua função. Para o tempo gasto em horas utilize nomes como, por exemplo, tempo_gasto_em_horas! Isso facilita o seu entendimento e proporciona uma maior legibilidade de código.','2017-05-20 21:26:44','2017-05-21 00:28:44'),(42,8,3,'Não se esqueça de utilizar precedências entre operadores aritméticos durante as operações matemáticas. Ao comparar duas somas, por exemplo, procure utilizar parênteses: (a + b) - (b + c). ','2017-05-20 22:17:08','2017-05-21 00:32:23'),(43,8,4,'Não se esqueça de criar variáveis capazes de armazenar os valores obtidos. Para o número de anos, crie uma variável tal qual \"int anos\". Para os meses, \"int meses\". Para os dias, \"int dias\".','2017-05-20 22:25:37','2017-05-21 00:33:50'),(44,8,5,'Uma dica interessante é guardar o valor de horas e minutos em variáveis. Lembre-se, uma hora é equivalente a 3600 segundos, e um minuto é equivalente a 60 segundos.\r\n','2017-05-21 00:01:35','2017-05-21 00:35:50');
/*!40000 ALTER TABLE `hints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_hints`
--

DROP TABLE IF EXISTS `log_hints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_hints` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `hint_id` int(10) unsigned NOT NULL,
  `exercise_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `log_hints_user_id_foreign` (`user_id`),
  KEY `log_hints_hint_id_foreign` (`hint_id`),
  KEY `log_hints_exercise_id_foreign` (`exercise_id`),
  CONSTRAINT `log_hints_exercise_id_foreign` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`id`),
  CONSTRAINT `log_hints_hint_id_foreign` FOREIGN KEY (`hint_id`) REFERENCES `hints` (`id`),
  CONSTRAINT `log_hints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_hints`
--

LOCK TABLES `log_hints` WRITE;
/*!40000 ALTER TABLE `log_hints` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_hints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (11,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(13,'2016_12_02_171822_create_admins_table',1),(14,'2016_12_02_171827_create_teachers_table',1),(15,'2017_02_20_181738_create_exercisetypes_table',1),(16,'2017_02_20_182913_create_exerciselists_table',1),(17,'2017_02_20_191350_create_exercises_table',1),(18,'2017_03_13_185218_create_answers_table',1),(19,'2017_03_13_195642_create_hints_table',1),(20,'2017_03_21_232523_create_log_hints_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teachers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` int(11) NOT NULL,
  `experience` tinyint(1) NOT NULL,
  `works` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Gustavo Corriea Gonzalez','BCC','UTFPR',2,1,0,'user1@user1.com','$2y$10$RIjd2ClC04X0b2JpHZLSW.JOdT8l2eKjNfmB3R7OKkYsqNjQ8DO8C','S8f6KzKceCMXRfizSHedZoisWB9Pp9Dk2tX3f5Y8dtDYuJJYiZyArZNHwlTy','2017-05-12 15:10:31','2017-05-12 19:20:59'),(2,'Nelson Junior','Ciência da Computação','UTFPR - CM',1,1,0,'nelsonj@alunos.utfpr.edu.br','$2y$10$glUzB3UrJdi7Ed5sBblUzue2FMDJc0JJfc5wgXkjnqttJluPX1yKG','UhT723Anqo6qMeIEtYJgamKEypVbbrKAfY09x8575Chkd1npVJ9AtRAGazuG','2017-05-12 18:11:04','2017-05-19 22:31:08'),(3,'user2','Bcc','UTFPR',2,0,0,'user2@user2.com','$2y$10$I/Z5FdnIDP67UNhN2PU01.p37WY75vf3YYcTK.p57zOZJ1CFaKKGu',NULL,'2017-05-12 19:21:37','2017-05-12 19:21:37'),(4,'Emerson Yudi Nakashima','BCC','UTFPR',8,0,1,'emerson.nakashima@gmail.com','$2y$10$SCOfE9nxd7pRkwu5Ml1WI.vWvrmDtn6s8yT8oQYrUgpboCPmEdWQ.',NULL,'2017-05-19 16:55:01','2017-05-19 16:55:01'),(5,'João Martins Filho','Ciencia da Computação','UTFPR',7,0,0,'gerenciador218@gmail.com','$2y$10$7oi9r71MHJYMLjoNTnNM0ua4zjyfz1xVJy5p7w4HdPulfr8WV7lwq',NULL,'2017-05-19 16:55:03','2017-05-19 16:55:03'),(6,'Tiago Kenji Umemura','BCC','UTFPR',8,0,1,'umemuratiago@gmail.com','$2y$10$OUqvrbdLBtjhKS.8jI2G2eHL0C6qHHnZJkcDM3P2Ks2iGeBvZ5Uq6',NULL,'2017-05-19 16:55:29','2017-05-19 16:55:29'),(7,'Vinicius Ribeiro Morais','Computer Science','UTFPR',8,0,1,'vini.m.ribeiro@gmail.com','$2y$10$yNors913wJ9B6dmbVxzIZu5X2iDOc0O2gcsuGNknICCxNKujA9Qse',NULL,'2017-05-19 16:55:36','2017-05-19 16:55:36'),(8,'Felipe Fronchetti','Ciência da Computaçã','UTFPR',8,0,0,'fronchettiemail@gmail.com','$2y$10$HyKranT1P5QmgTwQYN4B/OQqWFI9Vi.NdCtnHojWVATKt2al8.VQO',NULL,'2017-05-20 21:02:50','2017-05-20 21:02:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-23  4:08:06

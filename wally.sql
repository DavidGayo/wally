-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: wally
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cat_empleados`
--

DROP TABLE IF EXISTS `cat_empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_empleados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_empleado` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_empleado` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estatus_id` bigint unsigned NOT NULL,
  `usuario_creo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_empleados_estatus_id_foreign` (`estatus_id`),
  KEY `cat_empleados_usuario_creo_id_foreign` (`usuario_creo_id`),
  CONSTRAINT `cat_empleados_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `cat_estatus` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `cat_empleados_usuario_creo_id_foreign` FOREIGN KEY (`usuario_creo_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_empleados`
--

LOCK TABLES `cat_empleados` WRITE;
/*!40000 ALTER TABLE `cat_empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_empleos`
--

DROP TABLE IF EXISTS `cat_empleos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_empleos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_empleo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_empleo` text COLLATE utf8mb4_unicode_ci,
  `usuario_creo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_empleos_usuario_creo_id_foreign` (`usuario_creo_id`),
  CONSTRAINT `cat_empleos_usuario_creo_id_foreign` FOREIGN KEY (`usuario_creo_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_empleos`
--

LOCK TABLES `cat_empleos` WRITE;
/*!40000 ALTER TABLE `cat_empleos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_empleos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_estatus`
--

DROP TABLE IF EXISTS `cat_estatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_estatus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_estatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_estatus`
--

LOCK TABLES `cat_estatus` WRITE;
/*!40000 ALTER TABLE `cat_estatus` DISABLE KEYS */;
INSERT INTO `cat_estatus` VALUES (1,'Activo','2022-07-18 19:07:34',NULL),(2,'Inactivo','2022-07-18 19:07:34',NULL);
/*!40000 ALTER TABLE `cat_estatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_productos`
--

DROP TABLE IF EXISTS `cat_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_producto` text COLLATE utf8mb4_unicode_ci,
  `usuario_creo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_productos_usuario_creo_id_foreign` (`usuario_creo_id`),
  CONSTRAINT `cat_productos_usuario_creo_id_foreign` FOREIGN KEY (`usuario_creo_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_productos`
--

LOCK TABLES `cat_productos` WRITE;
/*!40000 ALTER TABLE `cat_productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados_proyectos`
--

DROP TABLE IF EXISTS `empleados_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados_proyectos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `empleado_id` bigint unsigned NOT NULL,
  `proyecto_id` bigint unsigned NOT NULL,
  `empleo_id` bigint unsigned NOT NULL,
  `precio_hora` double(8,2) DEFAULT NULL,
  `horas` int unsigned DEFAULT NULL,
  `dias` int unsigned DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `usuario_creo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empleados_proyectos_empleado_id_foreign` (`empleado_id`),
  KEY `empleados_proyectos_proyecto_id_foreign` (`proyecto_id`),
  KEY `empleados_proyectos_empleo_id_foreign` (`empleo_id`),
  KEY `empleados_proyectos_usuario_creo_id_foreign` (`usuario_creo_id`),
  CONSTRAINT `empleados_proyectos_empleado_id_foreign` FOREIGN KEY (`empleado_id`) REFERENCES `cat_empleados` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `empleados_proyectos_empleo_id_foreign` FOREIGN KEY (`empleo_id`) REFERENCES `cat_empleos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `empleados_proyectos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `empleados_proyectos_usuario_creo_id_foreign` FOREIGN KEY (`usuario_creo_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados_proyectos`
--

LOCK TABLES `empleados_proyectos` WRITE;
/*!40000 ALTER TABLE `empleados_proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastos_proyectos`
--

DROP TABLE IF EXISTS `gastos_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gastos_proyectos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `producto_id` bigint unsigned NOT NULL,
  `proyecto_id` bigint unsigned NOT NULL,
  `precio_unitario` double(8,2) DEFAULT NULL,
  `cantidad` int unsigned DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `usuario_creo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gastos_proyectos_producto_id_foreign` (`producto_id`),
  KEY `gastos_proyectos_proyecto_id_foreign` (`proyecto_id`),
  KEY `gastos_proyectos_usuario_creo_id_foreign` (`usuario_creo_id`),
  CONSTRAINT `gastos_proyectos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `cat_productos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `gastos_proyectos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `gastos_proyectos_usuario_creo_id_foreign` FOREIGN KEY (`usuario_creo_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastos_proyectos`
--

LOCK TABLES `gastos_proyectos` WRITE;
/*!40000 ALTER TABLE `gastos_proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `gastos_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (23,'2014_05_23_201420_create_cat_estatus_table',1),(24,'2014_10_12_000000_create_users_table',1),(25,'2014_10_12_100000_create_password_resets_table',1),(26,'2019_08_19_000000_create_failed_jobs_table',1),(27,'2019_12_14_000001_create_personal_access_tokens_table',1),(28,'2022_05_23_201440_create_cat_empleados_table',1),(29,'2022_05_23_201455_create_cat_empleos_table',1),(30,'2022_05_23_201508_create_cat_productos_table',1),(31,'2022_05_23_201528_create_proyectos_table',1),(32,'2022_05_23_201836_create_empleados_proyectos_table',1),(33,'2022_05_23_201859_create_gastos_proyectos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proyectos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_proyecto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `presupuesto` double(8,2) DEFAULT NULL,
  `gasto` double(8,2) DEFAULT '0.00',
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estatus_id` bigint unsigned NOT NULL,
  `usuario_creo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proyectos_estatus_id_foreign` (`estatus_id`),
  KEY `proyectos_usuario_creo_id_foreign` (`usuario_creo_id`),
  CONSTRAINT `proyectos_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `cat_estatus` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `proyectos_usuario_creo_id_foreign` FOREIGN KEY (`usuario_creo_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus_id` bigint unsigned NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `users_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `cat_estatus` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-07-18 14:46:39

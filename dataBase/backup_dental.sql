-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: clinica_dental
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(65) NOT NULL,
  `paterno` varchar(65) NOT NULL,
  `materno` varchar(65) NOT NULL,
  `email` varchar(65) DEFAULT NULL,
  `telefono` varchar(65) NOT NULL,
  `tratamiento` varchar(45) NOT NULL,
  `fecha` varchar(65) NOT NULL,
  `hora` varchar(65) NOT NULL,
  `mensaje` varchar(65) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '0',
  `medico_idMedico` int(11) NOT NULL,
  PRIMARY KEY (`idCita`),
  KEY `fk_cita_medico1_idx` (`medico_idMedico`),
  CONSTRAINT `fk_cita_medico1` FOREIGN KEY (`medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (3,'Juan','Lopez','Cortez','pp@jj.com','','1','30 April, 2019','05:00','Hola que tal',0,2),(4,'Juan','Lopez','Cortez','pp@jj.com','','1','30 April, 2019','05:00','Hola que tal',0,2),(5,'John','Contreras','Cortez','pp@jj.com','','1','30 April, 2019','05:00','Hola que tal otra vez',0,2),(6,'John','Contreras','Cortez','pp@jj.com','','1','30 April, 2019','05:00','Hola que tal otra vez',0,2),(7,'Pepe','Cortez','Oropeza','oropeza@gmail.com','222-222-2222','4','15 April, 2019','02:00','Hola que tal otra vez de nuevo',0,2),(8,'Pepe','Cortez','Oropeza','oropeza@gmail.com','222-222-2222','4','15 April, 2019','02:00','Hola que tal otra vez de nuevo',0,2),(9,'ToÃ±o','Ramales','Del Sagrado CorazÃ³n de JesÃºs','tonio56@gmail.com','222-222-2222','2','24 April, 2019','18:30','Hola necesito una consulta de muelas urgente',0,2),(10,'ToÃ±o','Ramales','Del Sagrado CorazÃ³n de JesÃºs','tonio56@gmail.com','222-222-2222','2','24 April, 2019','18:30','Hola necesito una consulta de muelas urgente',0,2);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medico`
--

DROP TABLE IF EXISTS `medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL AUTO_INCREMENT,
  `imagenPerfil` longblob,
  `nombre` varchar(65) NOT NULL,
  `paterno` varchar(65) NOT NULL,
  `materno` varchar(65) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `especialidad` varchar(65) NOT NULL,
  `cedulaProfesional` varchar(45) NOT NULL,
  `sucursal_idSucursal` int(11) NOT NULL,
  PRIMARY KEY (`idMedico`),
  KEY `fk_medico_sucursal1_idx` (`sucursal_idSucursal`),
  CONSTRAINT `fk_medico_sucursal1` FOREIGN KEY (`sucursal_idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medico`
--

LOCK TABLES `medico` WRITE;
/*!40000 ALTER TABLE `medico` DISABLE KEYS */;
INSERT INTO `medico` VALUES (2,'','Lisa','Montiel','Ortega',NULL,'Peridoncia','2038792',2),(3,'','Manuel','PÃ©rez','OrtÃ­z',NULL,'Endodoncia','3038793',3),(4,'','Pedro','GarcÃ­a','De la Cruz',NULL,'Cirujia Dental','4038794',1),(5,'','Ricardo','GonzÃ¡les','Palencia',NULL,'Estetica dental','5038795',2);
/*!40000 ALTER TABLE `medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursal` (
  `idSucursal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(65) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `direccion` varchar(105) NOT NULL,
  `colonia` varchar(65) NOT NULL,
  PRIMARY KEY (`idSucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal`
--

LOCK TABLES `sucursal` WRITE;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
INSERT INTO `sucursal` VALUES (1,'Sucursal San Manuel','2221234567','CircunvalaciÃ³n 1280','San Manuel'),(2,'Sucursal Centro','2221234550','Reforma 106','Centro'),(3,'Sucursal Las Margaritas','2228530500','Las Margaritas 101','Bugambilias');
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `medico_idMedico` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_usuario_medico_idx` (`medico_idMedico`),
  CONSTRAINT `fk_usuario_medico` FOREIGN KEY (`medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (2,'medico02','medico02@gmail.com','$2y$10$tcGqYOJap3hm/R39SUqLNO8ADCdFFQfGqa3ubH/W6Mbu4kprEwTfK',2),(3,'medico03','medico03@gmail.com','$2y$10$.31OPzsh331ZFnznixvtSuV68cmxLD8mlLGtaduxbIavO05lxW/oS',3),(4,'medico04','medico04@gmail.com','$2y$10$ejGa4yZh1UjFjs1FkvMPveiSxrz1wfAQAdlTe0ZW7L.EKjvh/p3b2',4),(5,'medico05','medico05@gmail.com','$2y$10$TMGP7NN8gP0QLy7qXgZJjO.9jGzncXySeS0P8Y8hDla6bVMgkd74G',5);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-30  8:05:45

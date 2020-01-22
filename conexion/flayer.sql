# MySQL-Front 5.0  (Build 1.0)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: flayer
# ------------------------------------------------------
# Server version 5.5.27

#
# Table structure for table carrito
#

CREATE TABLE `carrito` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(10) DEFAULT NULL,
  `producto` varchar(20) DEFAULT NULL,
  `precio` double(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `carrito` VALUES (1,'0750351611','Beer Weekends',20);
INSERT INTO `carrito` VALUES (2,'0750351611','Otro Trago',10);
INSERT INTO `carrito` VALUES (3,'0750351611','Descontrol',25);
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table compras_totales
#

CREATE TABLE `compras_totales` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(10) DEFAULT NULL,
  `total` double(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `compras_totales` VALUES (1,'0750351611',55);
/*!40000 ALTER TABLE `compras_totales` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table productos
#

CREATE TABLE `productos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `producto` varchar(20) DEFAULT NULL,
  `precio` float(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
INSERT INTO `productos` VALUES (1,'Sexy Party',15);
INSERT INTO `productos` VALUES (2,'Beer Weekends',20);
INSERT INTO `productos` VALUES (3,'Descontrol',25);
INSERT INTO `productos` VALUES (4,'Otro Trago',10);
INSERT INTO `productos` VALUES (5,'Electro Session',20);
INSERT INTO `productos` VALUES (6,'Birthday Party',15);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table usuarios
#

CREATE TABLE `usuarios` (
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `compra` int(1) DEFAULT '0',
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `usuarios` VALUES ('0750351611','bryan','castro',21,'1234',1,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

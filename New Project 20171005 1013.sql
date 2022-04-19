-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.26


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema calendario
--

CREATE DATABASE IF NOT EXISTS calendario;
USE calendario;

--
-- Definition of table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `resp` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`,`title`,`color`,`start`,`end`,`resp`) VALUES 
 (21,'Proeycto Kairos','#008000','2017-01-16 00:00:00','2017-01-23 00:00:00',''),
 (22,'Solicitud Acceso de consulta a la base de datos y el modelo relacional de la misma Proyecto Mesa de Servicios','#FF0000','2017-02-06 00:00:00','2017-02-11 00:00:00',''),
 (23,'Entrega del crecimiento del 5% del año en licenciamiento Client Management','#FFD700','2017-02-06 00:00:00','2017-02-11 00:00:00',''),
 (24,'listado de los segmentos de red actualizados, identificando Regional, ciudad, oficina a la cual pertenece','#FFD700','2017-02-06 00:00:00','2017-02-08 00:00:00',''),
 (25,'Administración de Parches en la herrameinta - Bladimir Posada','#FF0000','2017-02-06 00:00:00','2017-02-11 00:00:00','Bladimir Posada'),
 (26,'Sincronización Client Mangement con CMDB (Proceso de Administración de Activos FIjos - Micro-informática)','#FF0000','2017-02-06 00:00:00','2017-02-11 00:00:00',''),
 (27,'Depuración del Inventario de los equipos del Sector Salud (EPS, MP, SInergia, Farallones y Palma Real) - CItar a ALexandra Morales y Bladimir Posada','#FFD700','2017-02-06 00:00:00','2017-02-18 00:00:00',''),
 (28,'solicitud de drivers criterio de distribución aplicaciones corporativas - Terminado','#008000','2017-02-15 00:00:00','2017-02-16 00:00:00','Bladimir y Jesus, Liliana Segura, Wilson Marino Delgado, Alvaro Andrés Ortiz, Jose Fabio'),
 (29,'Error en Remedy para 3 miembros de equipo','#FFD700','2017-02-15 00:00:00','2017-02-16 00:00:00','Bladimir Posada'),
 (30,'Reunion para validar inventario de equipos de sector salud','#0071c5','2017-02-16 00:00:00','2017-02-17 00:00:00','Jesus, Bladimir, Andres'),
 (31,'Plan de aseguramiento digiturno','#FFD700','2017-02-20 00:00:00','2017-03-20 00:00:00','Alvaro Andres'),
 (32,'Horario 1','#008000','2017-10-02 00:00:00','2017-10-06 00:00:00','Gustavo Gonzalez'),
 (33,'Horario 1','#008000','2017-10-02 00:00:00','2017-10-06 00:00:00','Sayde Bejarano'),
 (34,'Horario 2','#40E0D0','2017-10-02 00:00:00','2017-10-06 18:00:00','Camila Giraldo'),
 (35,'Horario 2','#000','2017-10-10 00:00:00','2017-10-18 00:00:00','Jose Fabio');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

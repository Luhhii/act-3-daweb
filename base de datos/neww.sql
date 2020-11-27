-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bd_mueblerias
CREATE DATABASE IF NOT EXISTS `bd_mueblerias` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_mueblerias`;

-- Dumping structure for table bd_mueblerias.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `NoSerie` int(11) NOT NULL AUTO_INCREMENT,
  `Precio` float NOT NULL,
  `Material` varchar(40) NOT NULL,
  `TipoMueble` varchar(45) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Color` varchar(20) NOT NULL,
  PRIMARY KEY (`NoSerie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table bd_mueblerias.articulos: ~0 rows (approximately)
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`NoSerie`, `Precio`, `Material`, `TipoMueble`, `Marca`, `Color`) VALUES
	(1, 46.99, 'Cobre', 'Puerta', 'Asus', 'negra'),
	(2, 59.99, 'dsd', 'fds', 'bain', 'negra'),
	(3, 99.99, 'Abedul', 'Repisa', 'Homes', 'guinda');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

-- Dumping structure for table bd_mueblerias.t_usuario
CREATE TABLE IF NOT EXISTS `t_usuario` (
  `id_usuario` int(6) NOT NULL,
  `nombre_usu` varchar(100) NOT NULL,
  `password_usu` varchar(100) NOT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bd_mueblerias.t_usuario: ~3 rows (approximately)
/*!40000 ALTER TABLE `t_usuario` DISABLE KEYS */;
INSERT INTO `t_usuario` (`id_usuario`, `nombre_usu`, `password_usu`, `estado`) VALUES
	(100001, 'luhhii', 'LuhiLehi14', 0),
	(100002, 'Nava', 'NavaDB01', 0),
	(100003, 'Roy', 'Roy123', 0);
/*!40000 ALTER TABLE `t_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

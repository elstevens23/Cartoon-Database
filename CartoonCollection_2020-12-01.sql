# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: CartoonCollection
# Generation Time: 2020-12-01 18:17:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cartoons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cartoons`;

CREATE TABLE `cartoons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `character_name` varchar(255) NOT NULL DEFAULT '',
  `TVshow_id` int(11) DEFAULT NULL,
  `IQ` int(11) DEFAULT NULL,
  `image` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cartoons` WRITE;
/*!40000 ALTER TABLE `cartoons` DISABLE KEYS */;

INSERT INTO `cartoons` (`id`, `character_name`, `TVshow_id`, `IQ`, `image`)
VALUES
	(1,'Rick Sanchez',1,300,'rick.jpg'),
	(2,'Morty Smith',1,95,'morty.jpg'),
	(3,'Spongebob Squarepants',2,85,'spongebob.jpg'),
	(4,'Patrick Star',2,55,'patrick.jpg'),
	(5,'Homer Simpson',3,55,'homer.jpg'),
	(6,'Lisa Simpson',3,159,'lisa.jpg'),
	(7,'Scooby Doo',4,35,'scooby-doo.jpg'),
	(8,'Shaggy Rogers',4,70,'shaggy.jpg'),
	(9,'Phineas Flynn',5,200,'phineas.jpg'),
	(10,'Ferb Fletcher',5,200,'ferb.jpg');

/*!40000 ALTER TABLE `cartoons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table TVshows
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TVshows`;

CREATE TABLE `TVshows` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `TVshows` WRITE;
/*!40000 ALTER TABLE `TVshows` DISABLE KEYS */;

INSERT INTO `TVshows` (`id`, `name`)
VALUES
	(1,'Rick and Morty'),
	(2,'SpongeBob Squarepants'),
	(3,'The Simpsons'),
	(4,'Scooby-Doo'),
	(5,'Phineas and Ferb'),
	(6,'Rugrats'),
	(7,'Dora the Explorer'),
	(8,'South Park'),
	(9,'Big Mouth'),
	(10,'BoJack Horseman'),
	(11,'Family Guy'),
	(12,'Futurama'),
	(13,'American Dad'),
	(14,'Adventure Time'),
	(15,'Arthur'),
	(16,'Horrid Henry'),
	(17,'Shaun the Sheep'),
	(18,'The Powerpuff Girls'),
	(19,'Pokemon'),
	(20,'Avatar: The Last Airbender'),
	(21,'Horrid Henry'),
	(22,'Dexter\'s Laboratory'),
	(23,'Foster Home for Imaginary Friends'),
	(24,'Courage the Cowardly Dog'),
	(25,'The Grim Adventures of Billy and Mandy');

/*!40000 ALTER TABLE `TVshows` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

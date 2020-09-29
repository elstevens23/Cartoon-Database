# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.7.31)
# Database: MyCollection
# Generation Time: 2020-09-29 14:38:14 +0000
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
  `image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cartoons` WRITE;
/*!40000 ALTER TABLE `cartoons` DISABLE KEYS */;

INSERT INTO `cartoons` (`id`, `character_name`, `TVshow_id`, `IQ`, `image`)
VALUES
	(1,'Rick Sanchez',1,300,'rick.jpg'),
	(2,'Morty Smith',1,95,'morty.jpg'),
	(3,'Spongebob Squarepants',3,85,'spongebob.jpg'),
	(4,'Patrick Star',3,55,'patrick.jpg'),
	(5,'Homer Simpson',5,55,'homer.jpg'),
	(6,'Lisa Simpson',5,159,'lisa.jpg'),
	(7,'Scooby Doo',7,35,'scooby-doo.jpg'),
	(8,'Shaggy Rogers',7,70,'shaggy.jpg'),
	(9,'Phineas Flynn',9,200,'phineas.jpg'),
	(10,'Ferb Fletcher',9,200,'ferb.jpg');

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
	(3,'SpongeBob Squarepants'),
	(5,'The Simpsons'),
	(7,'Scooby-Doo'),
	(9,'Phineas and Ferb');

/*!40000 ALTER TABLE `TVshows` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

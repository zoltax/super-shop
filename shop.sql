# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.15)
# Database: shop
# Generation Time: 2016-12-20 22:20:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `image` varchar(255) DEFAULT '',
  `product_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `image`, `product_count`)
VALUES
	(1,'Computers','http://placehold.it/800x300',0),
	(2,'Cars','http://placehold.it/800x300',0),
	(3,'Buses','http://placehold.it/800x300',0);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(60) DEFAULT NULL,
  `product_price` double(10,2) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `product_id`, `product_name`, `product_price`, `email`)
VALUES
	(1,0,'',0.00,'filipkulig@gmail.com'),
	(2,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(3,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(4,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(5,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(6,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(7,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(8,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(9,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(10,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(11,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(12,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(13,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(14,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(15,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(16,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(17,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(18,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(19,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(20,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(21,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(22,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(23,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(24,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(25,1,'MacBook  Pro',2300.00,'filipkulig@gmail.com'),
	(26,3,'Audi',43000.00,'filipkulig@gmail.com'),
	(27,2,'Dell ',759.00,'filipkulig@gmail.com'),
	(28,2,'Dell ',759.00,'filipkulig@gmail.com'),
	(29,3,'Audi',43000.00,'filipkulig@gmail.com');

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL,
  `description` text,
  `price` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `category_id`, `name`, `image`, `description`, `price`)
VALUES
	(1,1,'MacBook  Pro','http://placehold.it/800x300','Super !!!!',2300.00),
	(2,1,'Dell ','http://placehold.it/800x300','Super dell, best in the market !!',759.00),
	(3,2,'Audi','http://placehold.it/800x300','Vorsprung durch technik',43000.00);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

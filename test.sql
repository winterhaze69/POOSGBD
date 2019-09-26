-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `health` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `ki` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `characters` (`id`, `name`, `health`, `power`, `ki`, `role_id`) VALUES
(1,	'nokako',	90000,	1800,	'100',	1),
(9,	'azrty',	6102,	3052,	'100',	3),
(10,	'yup',	5778,	3775,	'100',	2),
(11,	'toto',	5297,	3405,	'100',	2),
(13,	'kiuytrfdv',	7693,	2613,	'100',	3);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`id`, `name`) VALUES
(1,	'tank'),
(2,	'dps'),
(3,	'heal');

-- 2019-09-26 07:35:04

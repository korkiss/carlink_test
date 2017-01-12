-- --------------------------------------------------------
-- Хост:                         localhost
-- Версия сервера:               5.5.5-10.1.9-MariaDB - mariadb.org binary distribution
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица yii2advanced.cars
DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `photo` blob NOT NULL,
  `car_type` text COLLATE utf8_unicode_ci NOT NULL,
  `car_model` text COLLATE utf8_unicode_ci NOT NULL,
  `car_modification` text COLLATE utf8_unicode_ci NOT NULL,
  `car_year` int(11) NOT NULL,
  `car_mileage` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2advanced.cars: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` (`id`, `photo`, `car_type`, `car_model`, `car_modification`, `car_year`, `car_mileage`) VALUES
	(3, _binary 0x323031342D30352D31372031352E31312E30302E6A7067, 'asd', 'asd', 'asd', 123, '33'),
	(4, _binary 0x323031342D30352D31372031352E31312E30302E6A7067, 'asd', 'asd', 'asd', 123, 'sad');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.migration
DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2advanced.migration: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1474552100),
	('m130524_201442_init', 1474552119);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.objects
DROP TABLE IF EXISTS `objects`;
CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2advanced.objects: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `objects` DISABLE KEYS */;
INSERT INTO `objects` (`id`, `name`, `date_created`, `id_type`) VALUES
	(1, 'Белаз', '2016-09-22 20:34:49', 2),
	(2, 'Кат Кран', '2016-09-22 20:35:10', 1),
	(3, 'Мойдодыр', '2016-09-22 20:35:27', 1),
	(4, 'Пазик', '2016-09-22 20:35:41', 3),
	(5, 'Лиазик', '2016-09-22 20:35:51', 3),
	(6, 'Тазик', '2016-09-22 20:36:12', 2);
/*!40000 ALTER TABLE `objects` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.object_properties
DROP TABLE IF EXISTS `object_properties`;
CREATE TABLE IF NOT EXISTS `object_properties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_object` int(10) DEFAULT NULL,
  `id_property` int(10) DEFAULT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2advanced.object_properties: ~14 rows (приблизительно)
/*!40000 ALTER TABLE `object_properties` DISABLE KEYS */;
INSERT INTO `object_properties` (`id`, `id_object`, `id_property`, `value`) VALUES
	(3, 2, 1, '2000'),
	(4, 2, 2, '5000'),
	(5, 2, 5, 'Model-1524-OOL'),
	(6, 3, 1, '12'),
	(7, 3, 2, '3333'),
	(8, 3, 5, 'Model-453-ON'),
	(9, 1, 3, '10000'),
	(10, 1, 4, 'нет'),
	(11, 6, 3, '80'),
	(12, 6, 4, 'да'),
	(13, 4, 5, 'Auto-234'),
	(14, 4, 6, '43'),
	(15, 5, 5, 'Auto-567'),
	(16, 5, 6, '55');
/*!40000 ALTER TABLE `object_properties` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.properties
DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Справочник свойств';

-- Дамп данных таблицы yii2advanced.properties: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`id`, `name`, `property_type`) VALUES
	(1, 'высота', 'int'),
	(2, 'грузоподъемность', 'int'),
	(3, 'мощность', 'int'),
	(4, 'легковой', 'boolean'),
	(5, 'модель', 'text'),
	(6, 'пассажировместимость', 'int');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.types
DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2advanced.types: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`id`, `name`) VALUES
	(1, 'Кран'),
	(2, 'Машина'),
	(3, 'Автобус');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.type_properties
DROP TABLE IF EXISTS `type_properties`;
CREATE TABLE IF NOT EXISTS `type_properties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_type` int(10) DEFAULT NULL,
  `id_property` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Свойства типа объекта';

-- Дамп данных таблицы yii2advanced.type_properties: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `type_properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_properties` ENABLE KEYS */;


-- Дамп структуры для таблица yii2advanced.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2advanced.user: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'admin', 'mus2LqoVCixw7xT_l9e48wMt5EtBjYUt', '$2y$13$YuKOCOPG0As0.7.9UpmV1.t9jUNPKLWV/MO3QIb5.LABMTTpQ/C6K', 'LF56jbeT3kCOESzGM4-GHa2KY4vGEhi-_1484249578', 'admin@ntv.ru', 10, 1474552542, 1484249578),
	(3, 'meme', 'MsP3xtMLPSNTTl53FqGQHF7X3v_vU0MR', '$2y$13$YuKOCOPG0As0.7.9UpmV1.t9jUNPKLWV/MO3QIb5.LABMTTpQ/C6K', NULL, 'meme@mail.ru', 10, 1484249623, 1484249623);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

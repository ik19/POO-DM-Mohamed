CREATE TABLE `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_start` varchar(255) NOT NULL,
  `date_end` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `meetings` (`id`, `title`, `description`, `date_start`, `date_end`) VALUES
(1,	'PHP',	'Initiation à la POO',	'2017-10-01',	'2017-10-02'),
(2,	'HTML',	'Intégration HTML',	'2017-11-01',	'2017-11-02'),
(3,	'Angular',	'Architecture Angular',	'2017-12-01',	'2017-12-02'),
(4,	'JavaScript',	'Bubbling',	'2018-01-01',	'2018-01-02'),
(5,	'Sass',	'Booster son CSS',	'2018-04-01',	'2018-04-02');

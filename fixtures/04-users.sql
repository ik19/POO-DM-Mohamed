
-- USERS

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `firstname`) VALUES
(1,	'Conan', 'Mccarthy'),
(2,	'Malachi', 'Austin'),
(3,	'Vernon', 'Patterson'),
(4,	'Kirk', 'Hess'),
(5,	'Judah', 'Huber'),
(6,	'Kelly', 'Tucker'),
(7,	'Steel', 'Stafford'),
(8,	'Driscoll', 'Leon');

-- ORGANISERS

CREATE TABLE `organisers` (
  `id_user` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  KEY `id_user` (`id_user`),
  KEY `id_meeting` (`id_meeting`),
  CONSTRAINT `organisers_fk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  CONSTRAINT `organisers_fk_2` FOREIGN KEY (`id_meeting`) REFERENCES `meetings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `organisers` (`id_meeting`, `id_user`) VALUES
(1,	1),
(1,	2),
(2,	1),
(2,	3),
(3,	3),
(4,	2),
(5,	1),
(5,	3);

-- PARTICIPANTS

CREATE TABLE `participants` (
  `id_user` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  KEY `id_user` (`id_user`),
  KEY `id_meeting` (`id_meeting`),
  CONSTRAINT `participants_fk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  CONSTRAINT `participants_fk_2` FOREIGN KEY (`id_meeting`) REFERENCES `meetings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `participants` (`id_meeting`, `id_user`) VALUES
(1,	1),
(1,	3),
(1,	6),
(3,	1),
(3,	3),
(3,	7),
(4,	2),
(4,	4),
(5,	5),
(5,	3),
(5,	4),
(5,	8);

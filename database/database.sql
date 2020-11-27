-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 07 nov. 2020 à 19:10
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int(11) NOT NULL COMMENT 'question related',
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_text`, `is_valid_answer`, `answer_question_id`) VALUES
(1, 'Vancouver', 0, 1),
(2, 'Montreal', 0, 1),
(3, 'Ottawa', 1, 1),
(4, 'Quebec', 0, 1),
(5, '5', 1, 6),
(6, 'Bolivie', 0, 2),
(7, 'Nicaragua', 1, 2),
(8, 'Uruguay', 0, 2),
(9, 'Venezuela', 0, 2),
(10, 'Serbie', 0, 3),
(11, 'Estonie', 1, 3),
(12, 'Lettonie', 1, 3),
(13, 'Turquie', 0, 3),
(14, 'Norvège', 0, 3),
(15, 'Slovénie', 1, 3),
(16, 'Michel Platini', 0, 5),
(17, 'Cristiano Ronaldo', 0, 5),
(18, 'Lionel Messi', 1, 5),
(19, 'Johan Cruyff', 0, 5),
(20, 'Cristiano Ronaldo', 0, 7),
(21, 'Lionel Messi', 1, 7),
(22, 'Virgil Van Dijk', 0, 7),
(23, 'Luka Modric', 0, 7),
(24, 'Gerd Muller', 1, 8),
(25, 'Zinedine Zidane', 0, 8),
(26, 'Pele', 1, 8),
(27, 'Diego Maradona', 0, 8),
(28, 'Robert Lewandowski', 0, 8),
(29, 'Harry Kane', 0, 8),
(50, '50', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question',
  PRIMARY KEY (`question_id`),
  KEY `question_quizz_id_fk` (`question_quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'Quelle est la capitale du Canada ?', 1, 'radio'),
(2, 'Quel pays ne fait pas partie de l\'Amérique du Sud ?', 1, 'selection'),
(3, 'Quels pays sont dans l\'Union Européenne ?', 1, 'checkbox'),
(4, 'Combien y a-t\'il d\'étoiles sur le drapeau américain ? ', 1, 'input'),
(5, 'Quel footballeur a le plus de Ballon d\'Or de l\'histoire ?', 2, 'selection'),
(6, 'Combien de coupes du monde a le Brésil ?', 2, 'input'),
(7, 'Qui est le dernier joueur à avoir remporté le Ballon d\'Or ? ', 2, 'radio'),
(8, 'Quels joueurs ont marqué plus de 60 buts en une saison ?', 2, 'checkbox');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL,
  PRIMARY KEY (`quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'Géographie'),
(2, 'Football');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant',
  `usermail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `usermail`, `password`, `username`, `name`, `surname`) VALUES
(5, 'gatien.soetens@isen.yncrea.fr', '$2y$10$O3EYGBrC8Lpb3f4Ou9nWg.eOm/JPGiAIVITSIuEuQ81ustdUZZCx.', 'Gatens', 'SOETENS', 'Gatien'),
(6, 'thomas.brufau@isen.yncrea.fr', '$2y$10$63D3X2/DaL3xMeYjO4xi6eRP.h/W82gx3f8sjjqCMeWbjodnfLoHC', 'thomaslab', 'brufau', 'thomas'),
(7, 'clement.champion@isen.yncrea.fr', '$2y$10$Y96PnU/2KFk4S2jIRB1wZ.2YXG56nFaxsd8ALoKYMNXopaXX5IVKm', 'champi', 'champion', 'clement'),
(10, 'benjamin.grosbi', '$2y$10$W3BunHiOA5O/WCvvCUd/6.ZpaBfvVqtBr73nlsvbjmIoOxypLp2sy', '^vpjnZVH', 'UCTGVBVIYV', 'UGCVBIP'),
(11, 'benjamin.grosbi', '$2y$10$3upLUNwr/dlfD2M69z1MLeq6tPf24ae.c.U8P9mJ1lGknDiX5vHrC', '^vpjnZVH', 'UCTGVBVIYV', 'UGCVBIP'),
(12, 'azert', '$2y$10$e.dnoJ5hIXjbiw0mjTK8BOeY0TntX3HECtwqrMefQSitrcTToOmpi', 'rezty', 'rezty', 'zerty'),
(13, 'bodelon193@onwmail.com', '$2y$10$Ult1YQteLxezJ4i1kE0TuOxsvajKAkflxhUqwFhHjL0GK.tb1plhK', 'bodelon', 'bodelon', 'bodelon'),
(14, 'tombru59@gmail.com', '$2y$10$iITtYDXGURIRkwwMDeNmeODnoF3Nau1VHnNqmBd.jnhGJZuu1WrAy', 'salope', 'salope', 'salope'),
(15, 'ert', '$2y$10$RdHaoqsT7KRaprpvoW1iYeb9PYb8YjZnAoblUv/noB4/LnXwczGXS', 'az', 'az', 'az'),
(16, 'potter', '$2y$10$xIHmVZauKAglAOfH261sH.MMyH5MDgljshxTLvR/zgE17G0yA19vW', 'azer', 'zer', 'zear'),
(17, 'aqw', '$2y$10$07SE38oMOmw7RW.2uXF04.mosZDMXSI7fvskauMtQgUxDbtDWXQzG', 'aqw', 'aqw', 'aqw'),
(18, 'asez', '$2y$10$j0HkSJ/sGuSacFOyEA/oJuBlvnOWJPSQQFeKjrxzx1GN40izzZFBe', 'az', 'az', 'az'),
(19, 'zaer', '$2y$10$9C0tO4T3CbgBbZ5K40oVpeHRgCi9cesPNjGFCzZddujY7CZAPRY2e', 'ezart', 'ezar', 'azer');

-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
 `user_answer_id` int(11)NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant',
 `user_id` int(11) NOT NULL COMMENT 'user identifiant',
 `answer_id` int(11) NOT NULL COMMENT 'answer_id',
 `user_answer` int(11) NULL DEFAULT NULL COMMENT 'answer_id of the user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `answer_id_fk` (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Contraintes pour la table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 23 oct. 2020 à 16:19
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
-- Base de données : `php`
--
CREATE DATABASE IF NOT EXISTS `quizz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quizz`;

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

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
(50, '50', 1, 4),
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
(29, 'Harry Kane', 0, 8);

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
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usermail` VARCHAR(50) NOT NULL,
  `userpass` VARCHAR(50) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `surname` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`);
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `answer_id` int(11) NOT NULL COMMENT 'answer_id',
  `user_answer_date` timestamp NULL DEFAULT NULL COMMENT 'date of answer user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `answer_id_fk` (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

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
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 28 nov. 2020 à 23:27
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
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `score_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `quizz_id` int(11) NOT NULL,
  PRIMARY KEY (`score_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`score_id`, `user_id`, `score`, `quizz_id`) VALUES
(3, 21, 0, 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

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
(19, 'zaer', '$2y$10$9C0tO4T3CbgBbZ5K40oVpeHRgCi9cesPNjGFCzZddujY7CZAPRY2e', 'ezart', 'ezar', 'azer'),
(20, 'benjamin.grosbety@isen.yncrea.fr', '$2y$10$190bLjGA6gsyYdznVGn38.nKBCxeLKalmXe08m31m0l7LZovu5n0C', 'benji', 'ben', 'ben'),
(21, 't@t', '$2y$10$XHl.WXKedmuXuhOt4zZYk.nyClQq6R7y65.CNmEb8q2PdEX/qWbe6', 'zae', 'zea', 'zea'),
(23, 'n@n', '$2y$10$VOT3g1A9yYpCV4YBr2ZqH.8SX0qaI91xAgDlIIBPHe5cP/ldq9aze', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `question_id` int(11) NOT NULL COMMENT 'question_id',
  `user_answer` int(11) DEFAULT NULL COMMENT 'answer_id of the user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `question_id_fk` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=414 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_answer`
--

INSERT INTO `user_answer` (`user_answer_id`, `user_id`, `question_id`, `user_answer`) VALUES
(1, 20, 1, 3),
(2, 20, 2, 7),
(3, 20, 3, 11),
(4, 20, 3, 12),
(5, 20, 3, 15),
(6, 20, 4, 50),
(7, 20, 1, 3),
(8, 20, 2, 7),
(9, 20, 1, 3),
(10, 20, 2, 9),
(11, 20, 3, 11),
(12, 20, 4, 2),
(13, 20, 1, 3),
(14, 20, 2, 6),
(15, 20, 1, 3),
(16, 20, 2, 6),
(17, 20, 3, 11),
(18, 20, 3, 12),
(19, 20, 3, 15),
(20, 20, 2, 6),
(21, 20, 1, 3),
(22, 20, 2, 6),
(23, 20, 3, 11),
(24, 20, 4, 2),
(25, 20, 1, 2),
(26, 20, 2, 7),
(27, 20, 3, 11),
(28, 20, 3, 12),
(29, 20, 4, 2),
(30, 20, 5, 16),
(31, 20, 6, 2),
(32, 20, 7, 21),
(33, 20, 8, 25),
(34, 20, 8, 26),
(35, 20, 2, 6),
(36, 20, 1, 3),
(37, 20, 1, 3),
(38, 20, 2, 7),
(39, 20, 3, 11),
(40, 20, 3, 12),
(41, 20, 3, 15),
(42, 20, 4, 2),
(43, 20, 1, 3),
(44, 20, 2, 3),
(45, 20, 2, 6),
(46, 20, 3, 11),
(47, 20, 3, 12),
(48, 20, 3, 15),
(49, 20, 1, 3),
(50, 20, 2, 3),
(51, 20, 2, 7),
(52, 20, 1, 3),
(53, 20, 2, 3),
(54, 20, 2, 7),
(55, 20, 1, 3),
(56, 20, 2, 3),
(57, 20, 2, 6),
(58, 20, 1, 3),
(59, 20, 2, 3),
(60, 20, 2, 6),
(61, 20, 5, 16),
(62, 20, 6, 16),
(63, 20, 1, 3),
(64, 20, 2, 3),
(65, 20, 2, 6),
(66, 20, 1, 3),
(67, 20, 2, 3),
(68, 20, 2, 6),
(69, 20, 1, 3),
(70, 20, 2, 3),
(71, 20, 2, 6),
(72, 20, 1, 3),
(73, 20, 2, 3),
(74, 20, 2, 6),
(75, 20, 1, 3),
(76, 20, 2, 6),
(77, 20, 1, 3),
(78, 20, 2, 3),
(79, 20, 2, 7),
(80, 20, 1, 3),
(81, 20, 2, 3),
(82, 20, 2, 7),
(83, 20, 1, 3),
(84, 20, 2, 3),
(85, 20, 2, 7),
(86, 20, 1, 3),
(87, 20, 2, 6),
(88, 20, 1, 3),
(89, 20, 2, 6),
(90, 20, 1, 3),
(91, 20, 2, 6),
(92, 20, 2, 6),
(93, 20, 2, 6),
(94, 20, 2, 6),
(95, 20, 2, 6),
(96, 20, 2, 6),
(97, 20, 1, 3),
(98, 20, 2, 7),
(99, 20, 2, 6),
(100, 20, 2, 6),
(101, 20, 2, 6),
(102, 20, 1, 3),
(103, 20, 1, 3),
(104, 20, 2, 7),
(105, 20, 2, 7),
(106, 20, 2, 6),
(107, 20, 1, 3),
(108, 20, 2, 6),
(109, 20, 1, 3),
(110, 20, 2, 7),
(111, 20, 3, 11),
(112, 20, 4, 1),
(113, 20, 1, 3),
(114, 20, 2, 7),
(115, 20, 3, 11),
(116, 20, 1, 3),
(117, 20, 2, 6),
(118, 20, 1, 3),
(119, 20, 2, 6),
(120, 20, 3, 11),
(121, 20, 4, 0),
(122, 20, 2, 6),
(123, 20, 1, 3),
(124, 20, 2, 6),
(125, 20, 1, 3),
(126, 20, 2, 6),
(127, 20, 1, 3),
(128, 20, 1, 3),
(129, 20, 2, 3),
(130, 20, 2, 6),
(131, 20, 1, 3),
(132, 20, 2, 6),
(133, 20, 1, 3),
(134, 20, 2, 6),
(135, 20, 3, 11),
(136, 20, 1, 3),
(137, 20, 2, 3),
(138, 20, 2, 6),
(139, 20, 3, 11),
(140, 20, 1, 3),
(141, 20, 1, 3),
(142, 20, 2, 6),
(143, 20, 2, 6),
(144, 20, 1, 3),
(145, 20, 1, 3),
(146, 20, 2, 6),
(147, 20, 2, 6),
(148, 20, 3, 11),
(149, 20, 3, 11),
(150, 20, 1, 3),
(151, 20, 1, 3),
(152, 20, 2, 6),
(153, 20, 2, 6),
(154, 20, 1, 3),
(155, 20, 1, 3),
(156, 20, 2, 6),
(157, 20, 2, 6),
(158, 20, 1, 3),
(159, 20, 1, 3),
(160, 20, 2, 6),
(161, 20, 2, 6),
(162, 20, 3, 11),
(163, 20, 3, 11),
(164, 20, 2, 6),
(165, 20, 2, 6),
(166, 20, 3, 11),
(167, 20, 3, 11),
(168, 20, 1, 2),
(169, 20, 1, 2),
(170, 20, 2, 6),
(171, 20, 2, 6),
(172, 20, 3, 12),
(173, 20, 3, 12),
(174, 20, 1, 2),
(175, 20, 1, 2),
(176, 20, 2, 6),
(177, 20, 2, 6),
(178, 20, 1, 3),
(179, 20, 1, 3),
(180, 20, 2, 6),
(181, 20, 2, 6),
(182, 20, 1, 4),
(183, 20, 1, 4),
(184, 20, 2, 6),
(185, 20, 2, 6),
(186, 20, 3, 11),
(187, 20, 3, 11),
(188, 20, 1, 3),
(189, 20, 1, 3),
(190, 20, 2, 6),
(191, 20, 2, 6),
(192, 20, 1, 3),
(193, 20, 1, 3),
(194, 20, 2, 7),
(195, 20, 2, 7),
(196, 20, 1, 3),
(197, 20, 1, 3),
(198, 20, 2, 7),
(199, 20, 2, 7),
(200, 20, 3, 11),
(201, 20, 3, 12),
(202, 20, 3, 15),
(203, 20, 3, 11),
(204, 20, 3, 12),
(205, 20, 3, 15),
(206, 20, 1, 3),
(207, 20, 1, 3),
(208, 20, 2, 7),
(209, 20, 2, 7),
(210, 20, 1, 3),
(211, 20, 1, 3),
(212, 20, 2, 7),
(213, 20, 2, 7),
(214, 20, 4, 50),
(215, 20, 4, 50),
(216, 20, 1, 3),
(217, 20, 1, 3),
(218, 20, 2, 7),
(219, 20, 2, 7),
(220, 20, 3, 11),
(221, 20, 3, 12),
(222, 20, 3, 15),
(223, 20, 3, 11),
(224, 20, 3, 12),
(225, 20, 3, 15),
(226, 20, 4, 50),
(227, 20, 4, 50),
(228, 21, 1, 3),
(229, 21, 1, 3),
(230, 21, 2, 7),
(231, 21, 2, 7),
(232, 21, 3, 11),
(233, 21, 3, 12),
(234, 21, 3, 15),
(235, 21, 3, 11),
(236, 21, 3, 12),
(237, 21, 3, 15),
(238, 21, 4, 50),
(239, 21, 4, 50),
(240, 21, 1, 3),
(241, 21, 1, 3),
(242, 21, 2, 7),
(243, 21, 2, 7),
(244, 21, 3, 11),
(245, 21, 3, 12),
(246, 21, 3, 15),
(247, 21, 3, 11),
(248, 21, 3, 12),
(249, 21, 3, 15),
(250, 21, 4, 50),
(251, 21, 4, 50),
(252, 21, 5, 18),
(253, 21, 5, 18),
(254, 21, 6, 5),
(255, 21, 6, 5),
(256, 21, 7, 21),
(257, 21, 7, 21),
(258, 21, 8, 24),
(259, 21, 8, 26),
(260, 21, 8, 24),
(261, 21, 8, 26),
(262, 21, 5, 17),
(263, 21, 5, 17),
(264, 21, 7, 21),
(265, 21, 7, 21),
(266, 21, 8, 25),
(267, 21, 8, 26),
(268, 21, 8, 25),
(269, 21, 8, 26),
(270, 21, 5, 18),
(271, 21, 5, 18),
(272, 21, 6, 3),
(273, 21, 6, 3),
(274, 21, 7, 21),
(275, 21, 7, 21),
(276, 21, 8, 25),
(277, 21, 8, 26),
(278, 21, 8, 25),
(279, 21, 8, 26),
(280, 21, 5, 18),
(281, 21, 5, 18),
(282, 21, 6, 3),
(283, 21, 6, 3),
(284, 21, 7, 21),
(285, 21, 7, 21),
(286, 21, 8, 25),
(287, 21, 8, 26),
(288, 21, 8, 25),
(289, 21, 8, 26),
(290, 21, 5, 18),
(291, 21, 5, 18),
(292, 21, 6, 4),
(293, 21, 6, 4),
(294, 21, 7, 21),
(295, 21, 7, 21),
(296, 21, 8, 24),
(297, 21, 8, 26),
(298, 21, 8, 24),
(299, 21, 8, 26),
(300, 21, 5, 16),
(301, 21, 5, 16),
(302, 21, 7, 21),
(303, 21, 7, 21),
(304, 21, 8, 25),
(305, 21, 8, 27),
(306, 21, 8, 25),
(307, 21, 8, 27),
(308, 21, 5, 16),
(309, 21, 5, 16),
(310, 21, 2, 8),
(311, 21, 2, 8),
(312, 21, 3, 13),
(313, 21, 3, 14),
(314, 21, 3, 13),
(315, 21, 3, 14),
(316, 21, 4, 4),
(317, 21, 4, 4),
(318, 21, 5, 16),
(319, 21, 5, 16),
(320, 21, 7, 21),
(321, 21, 7, 21),
(322, 21, 8, 24),
(323, 21, 8, 26),
(324, 21, 8, 24),
(325, 21, 8, 26),
(326, 21, 5, 16),
(327, 21, 5, 16),
(328, 21, 7, 21),
(329, 21, 7, 21),
(330, 21, 8, 25),
(331, 21, 8, 26),
(332, 21, 8, 27),
(333, 21, 8, 25),
(334, 21, 8, 26),
(335, 21, 8, 27),
(336, 21, 5, 16),
(337, 21, 5, 16),
(338, 21, 5, 16),
(339, 21, 5, 16),
(340, 21, 5, 16),
(341, 21, 5, 16),
(342, 21, 5, 16),
(343, 21, 5, 16),
(344, 21, 8, 26),
(345, 21, 8, 29),
(346, 21, 8, 26),
(347, 21, 8, 29),
(348, 21, 5, 16),
(349, 21, 5, 16),
(350, 21, 6, 3),
(351, 21, 6, 3),
(352, 21, 7, 21),
(353, 21, 7, 21),
(354, 21, 8, 26),
(355, 21, 8, 26),
(356, 21, 2, 6),
(357, 21, 2, 6),
(358, 21, 2, 6),
(359, 21, 2, 6),
(360, 21, 5, 16),
(361, 21, 5, 16),
(362, 21, 2, 6),
(363, 21, 2, 6),
(364, 21, 5, 16),
(365, 21, 5, 16),
(366, 21, 1, 3),
(367, 21, 1, 3),
(368, 21, 2, 7),
(369, 21, 2, 7),
(370, 21, 3, 11),
(371, 21, 3, 12),
(372, 21, 3, 15),
(373, 21, 3, 11),
(374, 21, 3, 12),
(375, 21, 3, 15),
(376, 21, 4, 50),
(377, 21, 4, 50),
(378, 21, 5, 16),
(379, 21, 5, 16),
(380, 21, 5, 18),
(381, 21, 5, 18),
(382, 21, 6, 5),
(383, 21, 6, 5),
(384, 21, 7, 21),
(385, 21, 7, 21),
(386, 21, 8, 24),
(387, 21, 8, 26),
(388, 21, 8, 24),
(389, 21, 8, 26),
(390, 21, 1, 2),
(391, 21, 1, 2),
(392, 21, 2, 9),
(393, 21, 2, 9),
(394, 21, 3, 11),
(395, 21, 3, 13),
(396, 21, 3, 14),
(397, 21, 3, 11),
(398, 21, 3, 13),
(399, 21, 3, 14),
(400, 21, 4, 14),
(401, 21, 4, 14),
(402, 21, 5, 16),
(403, 21, 5, 16),
(404, 21, 5, 16),
(405, 21, 5, 16),
(406, 21, 1, 3),
(407, 21, 1, 3),
(408, 21, 2, 6),
(409, 21, 2, 6),
(410, 21, 3, 12),
(411, 21, 3, 12),
(412, 21, 5, 16),
(413, 21, 5, 16);

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
  ADD CONSTRAINT `question_id_fk` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

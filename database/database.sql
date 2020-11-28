-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 28, 2020 at 09:57 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int(11) NOT NULL COMMENT 'question related'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
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
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
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
-- Table structure for table `quizz`
--

CREATE TABLE `quizz` (
  `quizz_id` int(11) NOT NULL COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'Géographie'),
(2, 'Football');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`user_id`, `score`) VALUES
(20, 2),
(20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'user identifiant',
  `usermail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
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
(20, 'benjamin.grosbety@isen.yncrea.fr', '$2y$10$190bLjGA6gsyYdznVGn38.nKBCxeLKalmXe08m31m0l7LZovu5n0C', 'benji', 'ben', 'ben');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `user_answer_id` int(11) NOT NULL COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `question_id` int(11) NOT NULL COMMENT 'question_id',
  `user_answer` int(11) DEFAULT NULL COMMENT 'answer_id of the user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_answer`
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
(215, 20, 4, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `question_quizz_id_fk` (`question_quizz_id`);

--
-- Indexes for table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`quizz_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`user_answer_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `question_id_fk` (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier', AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant', AUTO_INCREMENT=216;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Constraints for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `question_id_fk` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

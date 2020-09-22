-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 sep. 2020 à 07:27
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spacedrivebdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_Categorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_Categorie`, `Nom`, `Description`) VALUES
(1, 'Nom 1', 'Desc 1');

-- --------------------------------------------------------

--
-- Structure de la table `nosservices`
--

DROP TABLE IF EXISTS `nosservices`;
CREATE TABLE IF NOT EXISTS `nosservices` (
  `id_Nosservices` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `Presentation` varchar(255) DEFAULT NULL,
  `id_Service` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Nosservices`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `nosservices`
--

INSERT INTO `nosservices` (`id_Nosservices`, `titre`, `Presentation`, `id_Service`) VALUES
(1, 'Titre 1', 'Presa 1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_Projet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Projet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_Service` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `icone` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Service`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_Service`, `titre`, `icone`, `description`, `plan`) VALUES
(1, 'Titre1', NULL, 'Presa1', '1'),
(2, 'Titre 2', NULL, 'Presa 2', '2'),
(3, 'Titre 3', NULL, 'Presa 3', '3');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_Users` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Users`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_Users`, `Nom`, `Prenom`, `mail`, `password`, `role`) VALUES
(1, 'Julie', NULL, 'julie@mail.fr', '$2y$10$LWJS4/PDfsHHn0L2GV1JQOKC0gipfYE.dKhrzwBdPuc102M0/iW3u', NULL),
(2, 'Laurine', NULL, 'laurine@test.fr', '$2y$10$FOzPETtpsryaRmpuE1BY2eOeN91n2X.uOfxiDjInjZGmxfB8Q64rW', NULL),
(3, 'test', NULL, 'test@test.test', '$2y$10$rJ2R9Wo3yv5XE7mLLtHqz.s/7tRwCjulhVskXzJk72e4lr4SCuhU6', NULL),
(4, 'Julie', NULL, 'julie@mail.test', '$2y$10$cW3XU8WVpIuxYj6qNaeakeb5ffAHEdz/0DmnnSuKaGrajkd7wcAr.', NULL),
(5, 'Julie', NULL, 'azerty@azerty.fr', '$2y$10$JL8zeCcox9Bewb4UBFKXTe..vOl2iSm3y1QTgseGmUSi4IDpEWGki', NULL),
(7, 'Julie', NULL, 'ddd@ddd.dd', '$2y$10$pZA/Kkjg5Y0D444qcs0DjeDXtpNv7URUhj5uAbkfVAgENRDNp4AC.', NULL),
(8, 'Julie', NULL, 'fff@fff.fr', '$2y$10$sJCGmJhBmFEZ.rgPG.4iyeSPv0ThYwYqviNeITkcJIEitbs/Ekc4i', NULL),
(9, 'jjj', NULL, 'kji@kji.kji', '$2y$10$gkeQIaX75T6/hCepS7RpHeskgOnfWdFsBZQwCgZmFes0R166x2DgW', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

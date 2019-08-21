-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 21 août 2019 à 14:56
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chaispinot`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(80) NOT NULL,
  `note` int(1) NOT NULL,
  `text` text NOT NULL,
  `date_crea` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `pseudo`, `note`, `text`, `date_crea`) VALUES
(1, 'Juliuse', 4, 'Super endroit, tres beau cadre et agreable', '2019-08-09 09:13:20'),
(2, 'Loic', 5, 'Petite sortie entres amis agreable, dommage le soleil n\'etait pas la..', '2019-08-18 08:04:21'),
(3, 'Fox', 3, 'Choix multiple, prix raisonnables, tres bien conseille j\'y retournerai !', '2019-08-02 11:11:29');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsMail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`newsMail`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `newsMail`) VALUES
(1, 'pamplume@pamplemousse'),
(6, 'mr.carte.florent@gmail.com'),
(12, 'mr.carte@gmail.com'),
(13, 'juliuse@gmail.com'),
(16, 'juliuse18@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

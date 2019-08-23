-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Août 2019 à 15:27
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `biere`
--

CREATE TABLE `biere` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adress` text CHARACTER SET utf8 NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(80) NOT NULL,
  `note` int(1) NOT NULL,
  `text` text NOT NULL,
  `date_crea` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `pseudo`, `note`, `text`, `date_crea`) VALUES
(1, 'Juliuse', 4, 'Super endroit, tres beau cadre et agreable', '2019-08-09 09:13:20'),
(2, 'Loic', 5, 'Petite sortie entres amis agreable, dommage le soleil n\'etait pas la..', '2019-08-18 08:04:21'),
(3, 'Fox', 3, 'Choix multiple, prix raisonnables, tres bien conseille j\'y retournerai !', '2019-08-02 11:11:29');

-- --------------------------------------------------------

--
-- Structure de la table `effervescents`
--

CREATE TABLE `effervescents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `newsMail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `newsMail`) VALUES
(1, 'pamplume@pamplemousse'),
(6, 'mr.carte.florent@gmail.com'),
(12, 'mr.carte@gmail.com'),
(13, 'juliuse@gmail.com'),
(16, 'juliuse18@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `rhum`
--

CREATE TABLE `rhum` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `spiritueux`
--

CREATE TABLE `spiritueux` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vin_blanc`
--

CREATE TABLE `vin_blanc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vin_rose`
--

CREATE TABLE `vin_rose` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vin_rouge`
--

CREATE TABLE `vin_rouge` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vin_rouge`
--

INSERT INTO `vin_rouge` (`id`, `name`, `text`, `price`, `photo`, `type`) VALUES
(1, 'Bordeaux supérieur Château Tertre de Courban 2015', 'lorem macon budule', 4, 'public/images/pd/charron.jpg', 'Bordeaux'),
(9, 'bidule', 'loremadjencmZENFOMUZEBVmoubuvomz', 168, 'public/images/pd/ayala.jpg', 'bordeaux');

-- --------------------------------------------------------

--
-- Structure de la table `whisky`
--

CREATE TABLE `whisky` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `biere`
--
ALTER TABLE `biere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `effervescents`
--
ALTER TABLE `effervescents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`,`newsMail`);

--
-- Index pour la table `rhum`
--
ALTER TABLE `rhum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `spiritueux`
--
ALTER TABLE `spiritueux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vin_blanc`
--
ALTER TABLE `vin_blanc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vin_rose`
--
ALTER TABLE `vin_rose`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vin_rouge`
--
ALTER TABLE `vin_rouge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `whisky`
--
ALTER TABLE `whisky`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `biere`
--
ALTER TABLE `biere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `effervescents`
--
ALTER TABLE `effervescents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `rhum`
--
ALTER TABLE `rhum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `spiritueux`
--
ALTER TABLE `spiritueux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vin_blanc`
--
ALTER TABLE `vin_blanc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vin_rose`
--
ALTER TABLE `vin_rose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vin_rouge`
--
ALTER TABLE `vin_rouge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `whisky`
--
ALTER TABLE `whisky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

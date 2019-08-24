-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 24 Août 2019 à 11:10
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
(10, 'Bordeaux Supérieur Château Tertre de Courban', 'Le château du Tertre de Courban est un brillant et clair vin rouge. d’une robe grenat. Le nez est marqué par des arômes de fruits rouges accompagnés de notes grillées. Souple et très harmonieux en bouche.', 4.4, 'public/images/pd/nondispo.png', 'Bordeaux'),
(11, 'Blaye Château Charron 2015', 'Oeil- robe rubis soutenu. Nez- fin et aromatique sur des notes fruitées. Bouche d\'une texture souple, agréable et fruitée. Accords Blaye Côtes de Bordeaux- viandes blanches, volailles, fromages pas trop fort', 5.8, 'public/images/pd/charron.jpg', 'Bordeaux'),
(12, 'Côtes de Bourgs Château les Bascauts', 'Cépages- 60% Merlot, 35% Cabernet sauvignon 5% Cabernet franc. Oeil- robe rubis. Nez- aromatique et fruité\r\nBouche- souple, équilibrée, fraîche et fruitée. Accords Côtes de Bourg- Viandes blanches et rouges, poulet, fromages.', 6, 'public/images/pd/lesbascauts.jpg', 'Bordeaux'),
(13, 'Côtes de Bourgs Château la Tuilière 2015', '', 8.4, 'public/images/pd/nondispo.png', 'Bordeaux'),
(14, 'Graves Château de la Rose de Nouet 2012', 'Cépages- 50% Merlot, 50% Cabernet Sauvignon. Oeil- robe rubis profonde. Nez- expressif avec des notes de petits fruits rouges. Bouche- douce, ronde, fruitée. Accords Graves- Viande blanche et rouge, grillades, fromages', 8.2, 'public/images/pd/rosenouet.jpg', 'Bordeaux'),
(15, 'Graves de Vayres Château Goudichaud', '', 8.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(16, 'Canon Fronsac Château du Gazin', 'idéalement situé proche de l\'appellation ST Emilion, ce jeune producteur réalise un Canon Fronsac, avec 85% de Merlot, 10 de Cabernet Franc et 5 de Malbec, un vin rond et souple, aux notes de fruits rouges et finement épicé.', 8.9, 'public/images/pd/gazin.jpg', 'Bordeaux'),
(17, 'Listrac-Médoc cuvée Hautes Terres 2012', '', 10.7, 'public/images/pd/listracmedoc.jpg', 'Bordeaux'),
(18, 'Moulis en Médoc Grand Poujeaux 2011', '', 18.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(19, 'Moulis en Médoc Château Chasse Spleen 2014', '', 32.3, 'public/images/pd/nondispo.png', 'Bordeaux'),
(20, 'Saint-Estèphe Léo de Prades 2011', 'Oeil- robe rubis. Nez- typé dans le style de l\'appellation avec de douces notes fruitées. Bouche- expressive, fruitée, d\'une jolie texture douce, onctueuse et finement boisée. Accords St Estèphe- Viande rôtie ou grillée, fromage. Garde 8 ans', 14.5, 'public/images/pd/leodeprades.jpg', 'Bordeaux'),
(21, 'Pessac-Léognan Châtau d\'Eyran 2014', '', 15.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(22, 'Pessac-Léognan La Réserve de Malartic 2015', '', 24.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(23, 'Graves Château de Chantegrive 2012', 'Cépages- 50% Merlot, 50% Cabernet sauvignon. Oeil- robe rubis profonde. Nez- bouquet complexe, fruité, épicé et boisé. Bouche- fuitée, ample, structurée, boisée, généreuse et savoureuse avec des tanins fins. Accords Graves- viandes rouges, canard, fromage', 17.1, 'public/images/pd/chantegrives.jpg', 'Bordeaux'),
(24, 'Pomerol Château Bellevue 2015', '', 21.8, 'public/images/pd/nondispo.png', 'Bordeaux'),
(25, 'Margaux 2010 Henri Lurton', 'Grand vin issu d’une partie du domaine de Brane-Cantenac, Château Notton ou le Margaux d’Henri Lurton, se veut l’expression de la finesse et de la complexité des plus grands terroirs de Margaux. La jeunesse de cette partie du vignoble lui confère un fruit remarquable. La vinification d’Henri Lurton et de Christophe Capdeville vise à exalter ses qualités. Il est élevé pendant un an en barriques de chêne.', 24.8, 'public/images/pd/nondispo.png', 'Bordeaux'),
(26, 'Pessac-Léognan Arpège 2016', '', 17.3, 'public/images/pd/arpege.jpg', 'Bordeaux'),
(27, 'Haut -Médoc Château Lamothe-Cissac 2015', 'Cépages- 58% Cabernet Sauvignon, 35% Merlot, 5% Petit Verdot, 2% Cabernet Franc. Oeil- robe rubis. Nez- aromatique sur des notes fruitées et finement boisées. Bouche- agréable, ronde et douce sur des notes fruitées et des tanins fondus. Accords Haut Médoc- viande rouge, viande blanche en sauce, fromage.', 12.5, 'public/images/pd/lamothecissac.jpg', 'Bordeaux'),
(28, 'Médoc Château Le Monge 2015', '', 7.8, 'public/images/pd/nondispo.png', 'Bordeaux'),
(29, 'Pauillac Prélude 2014', '', 28.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(30, 'Saint-Estèphe Château Ségur de Cabanac', '.', 24.9, 'public/images/pd/lesbascauts.jpg', 'Bordeaux'),
(31, 'Saint-Estèphe la Chapelle de Meyney', '', 23.6, 'public/images/pd/nondispo.png', 'Bordeaux'),
(32, 'Saint-Julien Château Haut-Beychevelle Gloria', '', 24.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(33, 'Saint-Emilion Grand Cru Vieux Lartigue', '', 21.9, 'public/images/pd/nondispo.png', 'Bordeaux'),
(34, 'Lussac Saint-Emilion Haut-Piquat', 'Cépages- 75% Merlot, 20% Cabernet Sauvignon, 5% Cabernet Franc. Oeil- Une belle robe rubis sombre et brillante. Nez- Une nez finement boisé avec des arômes de fruits rouges.\r\nBouche- Belle attaque souple, la bouche est harmonieuse, expressive avec une agréable persistance.', 11, 'public/images/pd/nondispo.png', 'Bordeaux'),
(35, 'Passetoutgrain le Libertin', '', 11.6, 'public/images/pd/nondispo.png', 'Bourgogne'),
(36, 'Domaine Machard de Gramont', '', 12.7, 'public/images/pd/nondispo.png', 'Bourgogne'),
(37, 'Hautes Côtes de Beaune 2017', '', 13.9, 'public/images/pd/nondispo.png', 'Bourgogne'),
(38, 'Hautes Côtes de Nuits 2017', '', 13.5, 'public/images/pd/nondispo.png', 'Bourgogne'),
(39, 'Mercurey Les Chazeaux Vieilles Vignes', 'Cépage- Pinot Noir. Oeil- rubis brillante. Nez- aromatique sur des notes de petits fruits rouges. Bouche- ample, fruitée et finement épicée, souple avec des tanins fins et fondus. Accords Mercurey- Viandes rouges rôties ou grillées, volailles mijotées, gibiers, fromages', 21.3, 'public/images/pd/mercurey.jpg', 'Bourgogne'),
(40, 'Auxey-Duresses Le Val 1er Cru', '', 21.9, 'public/images/pd/nondispo.png', 'Bourgogne'),
(41, 'Santenay Louis Jadot', 'Cépage- Pinot Noir.Oeil- robe rubis brillante\r\nNez- expressif sur des notes fruitées. Bouche- vin de caractère aux arômes délicats et complexes. Accords Santenay- Viandes rouges rôties ou grillées, gibiers à plumes, fromages pas trop fort.', 26.9, 'public/images/pdsantenay.jpg', 'Bourgogne'),
(42, 'Marsannay le Charlopin', '', 19.9, 'public/images/pd/nondispo.png', 'Bourgogne'),
(43, 'Monthelie Domaine Huber-Verdereau', '', 22.8, 'public/images/pd/nondispo.png', 'Bourgogne'),
(44, 'Saint-Romain Alain Gras', '', 25.5, 'public/images/pd/nondispo.png', 'Bourgogne'),
(45, 'Fixin Domaine Pierre Gelin', '', 29.9, 'public/images/pd/nondispo.png', 'Bourgogne'),
(46, 'Savigny les Beaunes Domaine Cachat-Ocquidant', '', 24.9, 'public/images/pd/nondispo.png', 'Bourgogne'),
(47, 'Pernand Vergelesses Baptiste Guyot', '', 18.6, 'public/images/pd/nondispo.png', 'Bourgogne'),
(48, 'Meursault Domaine Jean-Marie Bouzereau', '', 36.1, 'public/images/pd/nondispo.png', 'Bourgogne'),
(49, 'Aloxe Corton 1er Cru Sylvain Loichet', '', 39.9, 'public/images/pd/nondispo.png', 'Bourgogne'),
(50, 'Nuits Saint-Georges', '', 41.5, 'public/images/pd/nondispo.png', 'Bourgogne'),
(51, 'Chambolle Musigny Domaine Roblot-Marchand', '', 42, 'public/images/pd/nondispo.png', 'Bourgogne'),
(52, 'Morgon 2017 Jean-Philippe Guillot', '', 9.7, 'public/images/pd/nondispo.png', 'Beaujolais'),
(53, 'Juilienas 2017 les Chanoriers', '', 9.9, 'public/images/pd/nondispo.png', 'Beaujolais'),
(54, 'Fleurie 2017 la Chapelle des Bois', '', 10.1, 'public/images/pd/nondispo.png', 'Beaujolais'),
(55, 'Brouilly 2017 Corinne Gonin', '', 10.2, 'public/images/pd/nondispo.png', 'Beaujolais'),
(56, 'Saint-Amour', 'Cépage- Gamay. Oeil- robe rubis. Nez- fruité. Bouche- délicate avec des arômes de fruits rouges, souple, soyeuse et très tendre au palais. \r\nAccords Saint Amour- Viandes rouges rôties, fromage à saveurs pas trop fortes', 11.7, 'public/images/pd/saintamour.jpg', 'Beaujolais'),
(57, 'Moulin à Vent Jean-Philippe Guillot', '', 12.1, 'public/images/pd/nondispo.png', 'Beaujolais'),
(58, 'Les Pious 2017 Remy Pouizin Bio', 'Cépages- 75% Grenache, 25% Syrah. Oeil- robe rubis soutenu. Nez- intense aux notes de fruits rouges. Bouche- souple et généreuse, d\'une belle texture ronde et grasse avec de jolies notes de fruits mûrs et d\'épices. Accords- viandes, volailles, grillades', 7.1, 'public/images/pd/lespious.jpg', 'Côte du Rhône'),
(59, 'Côte du Rhône E. Guigal 2015', '', 8.9, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(60, 'Parallèle 45 Jaboulet 2016', 'Cépages- 50% Grenache noir,50%Syrah. Oeil- robe rubis. Nez- belle intensité aromatique de fruits rouges. Bouche- équilibrée, ronde et souple sur le fruit. Accords- Charcuterie, terrines, grillades', 8.5, 'public/images/pd/parallele45.jpg', 'Côte du Rhône'),
(61, 'Les Abeilles 2017 J.L Colombo', 'Cépages-  Grenache, Syrah, Mouvèdre. Oeil- robe grenat aux reflets violets. Nez- notes de petits fruits rouges. Bouche- fruitée et épicée, souple et douce. Accords- Terrines, Viandes blanches et rouges, grillades, fromages', 8.5, 'public/images/pd/abeilles.jpg', 'Côte du Rhône'),
(62, 'Les Collines Syrah J.L Colombo', '', 8.9, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(63, 'Syrah Jeanne Gaillard', '', 8.5, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(64, 'Rasteau Domaine des Banquettes 2016', '', 9.4, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(65, 'Alain Jaume Les Champauvins 2015', '', 10.9, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(66, 'Cairanne J.L Colombo', 'Cépages-  Grenache, Syrah et Carignan. Nez- notes de fruits mûrs et d\'épices. Bouche- fruitée et expressive avec des notes épicées et des tannins souples et fondus. Accords- Viandes rouges, fromages', 14.9, 'public/images/pd/cairanne.jpg', 'Côte du Rhône'),
(67, 'Crozes Hermitage Chevalier 2017', '', 14.9, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(68, 'Vacqueyras 2016 La Fourmone', '', 11.8, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(69, 'Gigondas 2016 La Fourmone', 'Cépages- Grenache, Syrah, Mourvèdre. Oeil- robe rubis profonde et brillante. Nez- expressif aux notes de fruits mûrs, de poivre, thym, laurier et de réglisse. Bouche- d\'une belle texture ronde et onctueuse où l\'on retrouve les notes de fruits mûrs et d\'épices avec des tanins fins et fondus. Accords Gigondas- viandes rouges, gibiers, fromages', 14.3, 'public/images/pd/gigondas.jpg', 'Côte du Rhône'),
(70, 'Saint-Joseph Montez 2017', 'Cépage- Syrah. Oeil- robe rubis profonde. Nez- intense fruité et épicé. Bouche- ronde et gourmande, pleine avec des tanins fondus, sur le fruit et les épices. Après quelques années de cave se développeront des notes de cuir et de réglisse. Accords- Volailles, viandes rouges, gibiers, fromage', 19.9, 'public/images/pd/montez.jpg', 'Côte du Rhône'),
(71, 'Châteauneuf du Pape cuvée Papale', '', 21.9, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(72, 'Cornas 2013 J.L Colombo Terres Brûlées', '', 41, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(73, 'Côte-Rotie E. Guigal 2013', '', 44.8, 'public/images/pd/nondispo.png', 'Côte du Rhône'),
(74, 'Saint-Nicolas de Bourgueil l\'Elegante 2016', '', 7.5, 'public/images/pd/nondispo.png', 'Loire'),
(75, 'Anjou Montgilet 2016', '', 7.4, 'public/images/pd/nondispo.png', 'Loire'),
(76, 'Canaille Vincent Roussely 2017', 'Cépage- Gamay. Oeil- robe rubis brillante\r\nNez- expressif et fruité. Bouche- douce, aromatique, fruitée et gouleyante. Accords Touraine Rouge- Charcuteries, plats de pâtes et viandes légères, fromages légers', 7.8, 'public/images/pd/nondispo.png', 'Loire'),
(77, 'Côtes Roannaises Les Originelles 2017', 'Cépage- Gamay. Oeil- robe ruby brillante. Nez- aromatique et expressif sur des notes de petits fruits rouges. Bouche- ronde, souple, gouleyante et fruitée.Accord Cote Roannaise- apéritif, charcuteries, viandes blanches, poissons', 8.6, 'public/images/pd/originelles.jpg', 'Loire'),
(78, 'Chinon les Galuches Bio 2017', '', 10.3, 'public/images/pd/nondispo.png', 'Loire'),
(79, 'Sancerre Domaine Naudet', 'Cépage- Pinot Noir. Oeil- robe rubis légère et brillante. Nez- expressif et fruité. Bouche- expressive, typique du cépage, fine et fruitée. Accords Sancerre- Viandes blanches et rouges, poissons', 11.8, 'public/images/pd/naudet.jpg', 'Loire'),
(80, 'Menetou Salon Domaine Jean Teiller', '', 12, 'public/images/pd/nondispo.png', 'Loire'),
(81, 'Saumur Champigny T. Germain', '', 11.9, 'public/images/pd/nondispo.png', 'Loire'),
(82, 'Les Terrasses d\'Ardèche', '', 3.5, 'public/images/pd/nondispo.png', 'Autre'),
(83, 'Raoul Mapoul', '', 4.5, 'public/images/pd/nondispo.png', 'Autre'),
(84, 'Les Darons 2017 Languedoc by Jeff Carrel', '', 6.8, 'public/images/pd/nondispo.png', 'Autre'),
(85, 'Les 2 Vaches Rouges 2017 100% Tannat', '', 7.9, 'public/images/pd/nondispo.png', 'Autre'),
(86, 'Cèdre Héritage Malbec Cahors', 'Cépages- 90% Malbec, 10% Merlot. Oeil- robe rubis dense et profonde avec des reflets violets. Nez- notes de fruits mûrs. Bouche- attaque franche et douce, sur des arômes de fruits mûrs. Accords Cahors- Viande rouge, daube, petits gibiers, fromage', 7.5, 'public/images/pd/cedreheritage.jpg', 'Autre'),
(87, 'Château du Cèdre 2014 Cahors', 'Cépage- Malbec\r\nOeil- robe rubis dense et profonde\r\nNez- très expressif avec des notes de fruits rouges et noirs et d\'épices\r\nBouche- dense, savoureuse et veloutée avec un fruit croquant et une jolie persistance. Accords Cahors- Viandes rouges en sauce, gibiers, fromages', 7.5, 'public/images/pd/cedrecahors.jpg', 'Autre'),
(88, 'Domaine Boudau "Le Clos"', 'Cépages- 70% Grenache noir, 20% syrah, 10% carignan. Oeil- robe rubis brillante. Nez- sur des notes de fruits rouges et noirs. Bouche- suave et élégante offre un joli panier de fruits et d\'épices. Accords Côtes du Roussillon- terrines, charcuteries, viandes rouges, fromages', 8.1, 'public/images/pd/boudau.jpg', 'Autre'),
(89, 'Domaine Boudau 2016 "Les Patrimoines"', 'Cépage- 60% grenache Noir, 30% Syrah, 10% Carignan. Oeil- robe rubis profonde. Nez- très expressif avec des notes de fruits mûrs et d\'épices. Bouche- suave et très savoureuse avec des arômes de réglisse, de fruits rouges, de chocolat et d\'épices. La finale est persistante et veloutée. Accords Côtes du Roussillon Villages- entrecôte, plats épicés, gibiers, viandes rouges, fromages de caratère, dessert au chocolat.', 16.9, 'public/images/pd/boudaupatrimoine.jpg', 'Autre'),
(90, 'La Tour Penedesses Pinot Noir', 'Cépage- 60% Syrah, 20% Grenache noir, 12% Carignan, et complément en Cinsault et Carignan. Oeil: Robe pourpre. Nez: Bouquet de cigare, de cannelle et de cerise. Bouche: concentrée et veloutée avec des saveurs de fruits à noyau et d\'une belle longueur. Accords Faugères- Daube de boeuf, Canard rôti, Faisan aux pommes.', 10.8, 'public/images/pd/tourpenedesses.jpg', 'Autre'),
(91, 'Fitou 2017 Gérard Bertrand', '', 8.9, 'public/images/pd/nondispo.png', 'Autre'),
(92, 'Saint-Chinian Secret des Diables', '', 11.4, 'public/images/pd/nondispo.png', 'Autre'),
(93, 'Corse Domaine Fiumicicoli', 'Cépages- 60% Nielluccio, 20% Sciaccarello, 20% Syrah. Oeil- robe rubis brillante. Nez- fruité et expressif avec des notes de fruits rouges et noirs confits. Bouche- fraîche et aromatique avec une belle vivacité aux de notes mûres. Tannique, il remplit la bouche de sensations multiples qui en font un vin plaisir qui demandera deux ou trois ans avant d’exhaler sa pleine expression. Accords Corse Sartene- Viande rouge, fromage', 11.7, 'public/images/pd/fuimicicolirouge.jpg', 'Autre'),
(94, 'Corbières 2016 Grande Cuvée Castelmaure', 'Cépages- 45% grenache noir, 45% syrah,  10% carignan. Oeil- robe rubis soutenu. Nez- expressif sur des notes fruitées et épicées. Bouche- puissante, ample et dense à la fois. La longueur est au rendez vous. Délicieux jeune, il serait judicieux de le mettre en cave pour 5 ans au moins. Accords Corbières- grillades, viandes rouges, petits gibiers, viandes blanches rôties, fromages', 12.3, 'public/images/pd/castelmaure.jpg', 'Autre'),
(95, 'Corbières 2015 n°3 Castelmaure', '', 20.9, 'public/images/pd/nondispo.png', 'Autre');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT pour la table `whisky`
--
ALTER TABLE `whisky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

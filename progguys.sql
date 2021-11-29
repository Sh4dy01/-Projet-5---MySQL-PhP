-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 nov. 2021 à 14:30
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `progguys`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `l_titre` varchar(30) NOT NULL,
  `texte` text NOT NULL,
  `notation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `description`) VALUES
(1, 'ProgGuys', '2 Jeunes programmeurs fous');

-- --------------------------------------------------------

--
-- Structure de la table `img_carrousel`
--

DROP TABLE IF EXISTS `img_carrousel`;
CREATE TABLE IF NOT EXISTS `img_carrousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(35) NOT NULL,
  `img_alt` varchar(200) NOT NULL,
  `id_projet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `img_user`
--

DROP TABLE IF EXISTS `img_user`;
CREATE TABLE IF NOT EXISTS `img_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `img_alt` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `desc` varchar(5000) NOT NULL,
  `carous` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `id_user`, `titre`, `desc`, `carous`) VALUES
(1, 1, 'Scientific Game Jam #3', 'Pour but de tester mes compétences actuelles en programmation, j\'ai participé à ma première Game Jam à Lyon en distanciel.', 0),
(2, 2, 'Projet #2 : Puissance 4 textuel', 'Réalisation d\'un Puissance 4 sous le langage de programmation C, sans interface graphique et dans un univers Linux.', 0),
(3, 2, 'Projet #3 : HTML/CSS/SEO', 'Premier site pour découvrir les langages HTML/CSS et SEO sur l\'univers de Demacia appartenant au jeu League of Legends.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `id_equipe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `password`, `prenom`, `nom`, `id_equipe`) VALUES
(1, 'hmaestracci@gaming.tech', '9461c13dc268ca9542411b2ce1a59f692f66f2fd', 'Hugo', 'MAESTRACCI', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 déc. 2021 à 18:46
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
  `image` varchar(100) NOT NULL DEFAULT 'img/no-image.jpg',
  `image_alt` varchar(500) NOT NULL DEFAULT '0',
  `titre` varchar(100) NOT NULL,
  `l_titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `notation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `id_projet`, `image`, `image_alt`, `titre`, `l_titre`, `texte`, `notation`) VALUES
(1, 1, 'img/th.jpg', 'T\'as déjà regardé ta vulve dans un miroir ProgGuys game', 'Introduction', 'Le challenge', 'Créer son premier jeu en 48H n\'est pas chose facile, heureusement j\'ai eu la chance de faire partie d\'une équipe formidable où la <b>communication et la bonne ambiance</b> furent au rendez-vous.', 'Jour 1 : Brainstorming avec l\'équipe et répartition des tâches\r\nJour 2 : Programmation avec mon coéquipier\r\nJour 3 : Rush final'),
(2, 2, 'img/p4_1.png', 'game connect 4 prog guys progguys', 'Mission', 'Créer un puissance 4 textuel', 'Pour notre deuxieme projet au nous devions créer un puissance 4 à l\'aide du langage C et de github que nous devions se familiariser pour notre futur métier', 'Nous devions le réaliser dans un environnement Linux avec le système d\'exploitation Debian et apprendre à utiliser emacs, gcc ainsi que les commandes bash.'),
(3, 3, 'img/demacia-silvermere.jpg', 'league of legends lol demacia site web prog guys progguys', 'Mission', 'Créer un site web', 'Lors de la semaine du 1er novembre, nous devions créer un site web sur un jeu de notre choix.', 'Accompagné de mon camarade Lucas VOCANSON nous avons choisi League of Legends, et plus précisement la région de Demacia que nous avons décidé de présenter. Nous avons dû suivre les instructions d\'un cahier des charges afin de réussir notre site web. Le SEO a aussi été abordé lors de ce projet, nous comprenons maintenant comment l\'utiliser et à quel point il est important.'),
(4, 1, 'img/game_1.jpg', 'T\'as déjà regardé ta vulve dans un miroir ProgGuys game', 'Le jeu', 'T\'as déjà regardé ta vulve dans un miroir ?', 'Un couple joue tranquillement à un RPG érotique,  et le jeu suscite des discussions autour de leur relation et de la sexualité. On comprend qu\'ielles avaient prévu de se filmer en train de faire l\'amour mais... ielles ont été trop stressé.e.s et ont choisi de se détendre en allumant la console.', 'Notre chercheuse avait une thèse sur la sexualité dans les jeu-vidéos durant les années 80 et pour cela nous avons incorporer un j-rpg pixélisé dans notre jeu.'),
(5, 1, 'img/game_2.jpg', 'T\'as déjà regardé ta vulve dans un miroir ProgGuys game code', 'Le développement', 'Unity & C#', 'Ayant de bonnes connaissances en C# et un bon professeur je n\'étais pas perdu dans la masse de travail à faire. La communication avec GIT fut simple et efficace grâce à mon précédent projet scolaire qui m\'a apporté de grandes bases.\r\n                  ', 'Mes tâches étaient de :\r\n- Créer des objets scriptés \'tours\' pour faire avancer le jeu, un moyen rapide et efficace pour faire un jeu en 48H\r\n- Importer tous les assets dans Unity et les relier dans les scriptes\r\n- Réaliser les différentes scènes du jeu (titre/principale/crédit)\r\n- Faire les animations sous Unity\r\n- Fixer les petits bugs'),
(6, 1, 'img/game_1.jpg', 'T\'as déjà regardé ta vulve dans un miroir ProgGuys game', 'Conclusion', 'L\'apport', 'Avant la Game Jam j\'étais très inquiet sur ce que je pourrais apporter à l\'équipe pour le développement de jeu, mais grâce à mon coéquipier qui a su me mettre en confiance et des sessions intenses de programmations, j\'ai pû faire de cette première fois une réussite.', 'Notre jeu a obtenu le prix spécial de la \'zézette éthique\' de la part du jury.'),
(7, 3, 'img/demacia-grandplaza.jpg', 'league of legends lol demacia site web prog guys progguys', 'Réalisation', 'Réalisation', 'Lors de la réalisation de ce projet nous avons appris à utiliser le langage HTML/CSS. De plus nous avons du travailler\r\nen équipe afin de mener à bien nos missions. Il était parfois difficile d\'avancer mais il faut essayer de se documenter au maximum. Nous avons pu réaliser un site sur un sujet qui nous tenait à coeur.', 'Ici au Gaming Campus</a> on essaie tous de se pousser les uns les autres et de s\'ameliorer tous les jours afin de réaliser nos rêves ainsi nos projets que avons en moyenne toutes les deux semaines. Pour tenir le rythme nous devons travailler pendant les heures\r\nde cours évidemment mais aussi beaucoup à la maison. Cela est aussi preconisé par les professeurs. Cette manière d\'apprendre est très différente des manières du lycée et du collège. Nous avons une pédagogie par projet avec très peu de cours magistraux mais beaucoup de pratique.'),
(8, 2, 'img/p4_3.png', 'game connect 4 prog guys progguys', 'Développement', 'Langage C', 'Apprendre un langage de programmation en 3 semaines n\'est pas chose simple.', 'Pour Baptiste et son binôme tout était nouveau, assimilé le C/Git/Linux pour réaliser son projet fut un long périple mais ils ont sû surmonter les épreuves et terminer leur projet à temps et avec brio. Pour Hugo et Guilian PIPART, vu qu\'ils avaient déjà connaissance du langage C, le développement fut moins long et avec une certaine aisance, ils ont tout de même développé des fonctionnalités non demandées dans le cahier des charges pour aller encore plus loin ainsi que donné des cours de tutorats pour les autres binômes dans le besoin.'),
(9, 2, 'img/p4_2.jpg', 'game connect 4 prog guys progguys', 'Conclusion', 'L\'apport', 'Beaucoup de connaissance et d\'expérience en peu de temps. Savoir utiliser le langage C et l\'algorithmie sont des grosses bases pour la suite. Même si le puissance 4 est purement textuel, nous sommes très fièrs de nos créations.', 'La pédagogie par projet, se concentrant sur la pratique, nous donnes énormément de connaissance en peu de temps.');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_equipe` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom_equipe` (`nom_equipe`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom_equipe`, `description`) VALUES
(1, 'ProgGuys', '2 Jeunes programmeurs fous'),
(0, 'NULL', 'NULL');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `img_carrousel`
--

INSERT INTO `img_carrousel` (`id`, `image`, `img_alt`, `id_projet`) VALUES
(1, 'img/sitedemacia1.jpg', 'league of legends lol demacia site web prog guys progguys', 3),
(2, 'img/sitedemacia2.jpg', 'league of legends lol demacia site web prog guys progguys', 3),
(3, 'img/sitedemacia3.jpg', 'league of legends lol demacia site web prog guys progguys', 3),
(4, 'img/sitedemacia4.jpg', 'league of legends lol demacia site web prog guys progguys', 3);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `image` varchar(150) NOT NULL DEFAULT 'img/no-image.jpg',
  `image_alt` varchar(200) DEFAULT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `carous` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `id_user`, `id_team`, `type`, `image`, `image_alt`, `titre`, `description`, `carous`) VALUES
(1, 1, 1, 1, 'img/scientific-game-jam.jpg', 'scientific game jam ProgGuys prog guys', 'Scientific Game Jam #3', 'Pour but de tester mes compétences actuelles en programmation, j\'ai participé à ma première Game Jam à Lyon en distanciel.', 0),
(2, 2, 1, 2, 'img/p4_1.jpg', '', 'Projet #2 : Puissance 4 textuel', 'Réalisation d\'un Puissance 4 sous le langage de programmation C, sans interface graphique et dans un univers Linux.', 0),
(3, 2, 1, 3, 'img/sitedemacia1.jpg', '', 'Projet #3 : HTML/CSS/SEO', 'Premier site pour découvrir les langages HTML/CSS et SEO sur l\'univers de Demacia appartenant au jeu League of Legends.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projet_liens`
--

DROP TABLE IF EXISTS `projet_liens`;
CREATE TABLE IF NOT EXISTS `projet_liens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet` int(11) NOT NULL,
  `lien` varchar(200) NOT NULL,
  `icone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet_liens`
--

INSERT INTO `projet_liens` (`id`, `id_projet`, `lien`, `icone`) VALUES
(1, 3, 'http://lore-demacia.alwaysdata.net/', 'public'),
(2, 1, 'https://www.youtube.com/watch?v=WHX76n6wkME', 'movie'),
(3, 1, 'https://matote.itch.io/ta-vulve-dans-un-miroir', 'videogame_asset');

-- --------------------------------------------------------

--
-- Structure de la table `réseaux`
--

DROP TABLE IF EXISTS `réseaux`;
CREATE TABLE IF NOT EXISTS `réseaux` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `lien` varchar(200) NOT NULL,
  `id_user` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `réseaux`
--

INSERT INTO `réseaux` (`id`, `lien`, `id_user`) VALUES
(1, 'https://www.linkedin.com/in/hugo-maestracci-22b019222/', 1),
(2, 'https://github.com/Sh4dy01/', 1),
(3, 'https://www.instagram.com/hugo.m.83/', 1),
(4, 'https://github.com/judegoiave', 2),
(5, 'https://www.instagram.com/baptiste_millan14/', 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_projet`
--

DROP TABLE IF EXISTS `type_projet`;
CREATE TABLE IF NOT EXISTS `type_projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_projet`
--

INSERT INTO `type_projet` (`id`, `nom`, `image`) VALUES
(1, 'Game Jam', 'img/game_jam.jpg'),
(2, 'Jeux', 'img/game_img.jpg'),
(3, 'Site WEB', 'img/web.jpg'),
(0, 'Pas de catégorie', 'img/no-image.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `privileges` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `parcours` text,
  `p_image` varchar(255) NOT NULL DEFAULT 'img/no-image.jpg',
  `id_equipe` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `privileges`, `active`, `email`, `password`, `prenom`, `nom`, `parcours`, `p_image`, `id_equipe`) VALUES
(1, 1, 1, 'hmaestracci@gaming.tech', 'b7a6d580fa233088b213d9cd1cbb7e1145f7d64a', 'Hugo', 'MAESTRACCI', 'Etudiant en G-TECH 1 au Gaming Campus de Lyon Anciennement: - Serveur à l\'Instant Gourmand - 1 an en License informatique à TOULON - BAC STI2D option Système d\'Information et Numérique', 'img/hugo.jpg', 1),
(11, 0, 1, 'yasuo@gmail.com', 'cc4615ca3741499bc268b1a9f3455ab39b6915d2', 'Yasuo', 'Hasagi', NULL, 'img/no-image.jpg', 0),
(12, 0, 1, 'roronoazoro@gmail.com', 'b887d98df2ce8350a8a9bffae341afdaf101f65d', 'Zoro', 'Roronoa', NULL, 'img/no-image.jpg', 0),
(13, 0, 1, 'cristianoronaldo@gmail.com', '03cab488874b5d75cc2f3aae3ee33ca334b8e414', 'Cristiano', 'Ronaldo', NULL, 'img/no-image.jpg', 0),
(2, 1, 1, 'bmillan@gaming.tech', 'cf49f9d210982c802742be8bcfafbf4a3d1a205f', 'Baptiste', 'MILLAN', 'Etudiant en G-TECH 1 au Gaming Campus de Lyon Anciennement: - BAC S au Lycée Français de Séoul- DUT GMP à Rennes Je suis très content dans cette filière et même si je ne connaissais jusqu\'alors rien en programmation, j\'avance et tout le monde se serre les coudes', 'img/baz.jpg', 1),
(7, 0, 1, 'pipartguilian@gmail.com', '2c786a1a9d6bef869a82238da944ab5a7b2ca8f9', 'Guilian', 'Pipart', NULL, 'img/no-image.jpg', 0),
(8, 0, 1, 'macronemmanuel@gmail.com', '3010faf02ee25fcebd276caa0e4cca75f9b62645', 'Emmanuel', 'Macron', NULL, 'img/no-image.jpg', 0),
(9, 0, 1, 'antoinediroberto@gmail.com', 'ab17e02697999202fb352ed031e0608067e7b5ce', 'Antoine', 'Di Roberto', NULL, 'img/no-image.jpg', 0),
(10, 0, 1, 'michealjordan@gmail.com', '93cf42f8c467533d2dbe667288a6733e8b767174', 'Micheal', 'Jordan', NULL, 'img/no-image.jpg', 0),
(3, 0, 1, 'jm@aulas.fr', '8cb2237d0679ca88db6464eac60da96345513964', 'aze', 'Aulas', '', 'img/no-image.jpg', 0),
(14, 0, 1, 'mathymimie@gmail.com', '0bc9831696d08dcfe08789c093f556c4d60c914f', 'Mathy', 'Mimie', NULL, 'img/no-image.jpg', 0),
(15, 0, 1, 'mandelanelson@gmail.com', 'e2520281bb49c638ff1a10ba80d7722c8af8350b', 'Mandela', 'Nelson', NULL, 'img/no-image.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_liens`
--

DROP TABLE IF EXISTS `user_liens`;
CREATE TABLE IF NOT EXISTS `user_liens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

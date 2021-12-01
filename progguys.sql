-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 déc. 2021 à 01:03
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
  `l_titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `notation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `id_projet`, `image`, `titre`, `l_titre`, `texte`, `notation`) VALUES
(1, 1, 'img/th.jpg', 'Introduction', 'Le challenge', '<p>Créer son premier jeu en 48H n\'est pas chose facile, heureusement j\'ai eu la chance de faire partie d\'une équipe formidable où la <b>communication</b> et <b>la bonne ambiance</b> furent au rendez-vous.</p>', '<li><span>Jour 1 : Brainstorming avec l\'équipe et répartition des tâches</span></li>\r\n                    <li><span>Jour 2 : Programmation avec mon coéquipier</span></li>\r\n                    <li><span>Jour 3 : Rush final</span></li>'),
(2, 2, 'img/p4_1.png', 'Mission', 'Créer un puissance 4 textuel', '<p>Pour notre deuxieme projet au nous devions créer un puissance 4 à l\'aide du langage C et de github que nous devions se familiariser pour notre futur métier', '<p>Nous devions le réaliser dans un environnement Linux\r\n                  avec le système d\'exploitation Debian et apprendre à utiliser emacs, gcc ainsi que les commandes bash.</p>'),
(3, 3, 'img/demacia-silvermere.jpg', 'Mission', 'Créer un site web', '<p class=\"center-align\">Lors de la semaine du 1er novembre, nous devions créer un site web sur un jeu de notre\r\n                  choix.<br><br></p>', '<p>Accompagné de mon camarade Lucas VOCANSON nous avons\r\n                  choisi League of Legends, et plus précisement la région de\r\n                  Demacia que nous avons décidé de présenter.\r\n                  <br>\r\n                  Nous avons dû suivre les instructions d\'un cahier des charges\r\n                  afin de réussir notre site web. Le SEO a aussi été abordé lors\r\n                  de ce projet, nous comprenons maintenant comment l\'utiliser\r\n                  et à quel point il est important.</p>'),
(4, 1, 'img/game_1.jpg', 'Le jeu', 'T\'as déjà regardé ta vulve dans un miroir ?', '<p>Un couple joue tranquillement à un RPG érotique,  et le jeu suscite des discussions autour de leur relation et de la sexualité. On comprend qu\'ielles avaient prévu de se filmer en train de faire l\'amour mais... ielles ont été trop stressé.e.s et ont choisi de se détendre en allumant la console.</p>', '<blockquote><i>Notre chercheuse avait une thèse sur la sexualité dans les jeu-vidéos durant les années 80 et pour cela nous avons incorporer un j-rpg pixélisé dans notre jeu.</i></blockquote>'),
(5, 1, 'img/game_2.jpg', 'Le développement', 'Unity & C#', '<p>Ayant de bonnes connaissances en C# et un bon professeur je n\'étais pas perdu dans la masse de travail à faire.<br>\r\n                  La communication avec GIT fut simple et efficace grâce à mon précédent projet scolaire qui m\'a apporté de grandes bases.\r\n                  </p>', '<span>Mes tâches étaient de :</span>\r\n                  <ul>\r\n                    <li>- Créer des objets scriptés \'tours\' pour faire avancer le jeu, un moyen rapide et efficace pour faire un jeu en 48H</li>\r\n                    <li>- Importer tous les assets dans Unity et les relier dans les scriptes</li>\r\n                    <li>- Réaliser les différentes scènes du jeu (titre/principale/crédit)</li>\r\n                    <li>- Faire les animations sous Unity</li>\r\n                    <li>- Fixer les petits bugs</li>\r\n                  </ul>'),
(6, 1, 'img/game_1.jpg', 'Conclusion', 'L\'apport', '<p>Avant la Game Jam j\'étais très inquiet sur ce que je pourrais apporter à l\'équipe pour le développement de jeu, mais grâce à mon coéquipier qui a su me mettre en confiance et des sessions intenses de programmations, j\'ai pû faire de cette première fois une réussite.</p>', '<blockquote><i>Notre jeu a obtenu le prix spécial de la \'zézette éthique\' de la part du jury.</i></blockquote>'),
(7, 3, 'img/demacia-grandplaza.jpg', 'Réalisation', 'Réalisation', '<p>Lors de la réalisation de ce projet nous avons appris à\r\n                    utiliser le langage HTML/CSS. De plus nous avons du travailler\r\n                    en équipe afin de mener à bien nos missions.<br>\r\n                    Il était parfois difficile d\'avancer mais il faut essayer de\r\n                    se documenter au maximum. <br>Nous avons pu\r\n                    réaliser un site sur un sujet qui nous tenait à coeur.', '<blockquote>\r\n                    Ici au <a href=\'https://gamingcampus.fr/\' target=\'_blank\' rel=\'nofollow external\'>Gaming Campus</a> on essaie tous de se pousser les uns les autres\r\n                    et de s\'ameliorer tous les jours afin de réaliser nos\r\n                    rêves ainsi nos projets que avons en moyenne toutes les deux semaines.\r\n                    Pour tenir le rythme nous devons travailler pendant les heures\r\n                    de cours évidemment mais aussi beaucoup à la maison. Cela est\r\n                    aussi preconisé par les professeurs.\r\n                    </blockquote>\r\n                    <p>Cette manière d\'apprendre est très différente des manières du lycée et du collège. Nous avons une pédagogie par projet avec\r\n                    très peu de cours magistraux mais beaucoup de <b>pratique</b>.</p>'),
(8, 2, 'img/p4_3.png', 'Développement', 'Langage C', '<p class=\'center-align\'>Apprendre un langage de programmation en 3 semaines n\'est pas chose simple.</p>', '<p>Pour Baptiste et son binôme tout était nouveau, assimilé le C/Git/Linux pour réaliser son projet fut un long périple mais ils ont sû surmonter les épreuves et terminer leur projet à temps et avec brio.</p>\r\n                  <p>Pour Hugo et <a href=\'https://www.linkedin.com/in/guilian-pipart-635a60221/\' rel=\'nofollow external\' target=\'_blank\'>Guilian PIPART</a>, vu qu\'ils avaient déjà connaissance du langage C, le développement fut moins long et avec une certaine aisance, ils ont tout de même développé des fonctionnalités non demandées dans le cahier des charges pour aller encore plus loin ainsi que donné des cours de tutorats pour les autres binômes dans le besoin.'),
(9, 2, 'img/p4_2.jpg', 'Conclusion', 'L\'apport', 'Beaucoup de connaissance et d\'expérience en peu de temps. Savoir utiliser le langage C et l\'algorithmie sont des grosses bases pour la suite. Même si le puissance 4 est purement textuel, nous sommes très fièrs de nos créations.', 'La pédagogie par projet, se concentrant sur la pratique, nous donnes énormément de connaissance en peu de temps.');

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
-- Structure de la table `img_user`
--

DROP TABLE IF EXISTS `img_user`;
CREATE TABLE IF NOT EXISTS `img_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_img_alt` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `img_user`
--

INSERT INTO `img_user` (`id`, `id_user`, `p_image`, `p_img_alt`) VALUES
(1, 1, 'img/hugo.jpg', 'hugo maestracci person ProgGuys prog guys'),
(2, 2, 'img/baz.jpg', 'baptiste millan person ProgGuys prog guys');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `image` varchar(150) NOT NULL,
  `image_alt` varchar(200) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `desc` varchar(5000) NOT NULL,
  `carous` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `id_user`, `type`, `image`, `image_alt`, `titre`, `desc`, `carous`) VALUES
(1, 1, 1, 'img/scientific-game-jam.jpg', 'scientific game jam ProgGuys prog guys', 'Scientific Game Jam #3', 'Pour but de tester mes compétences actuelles en programmation, j\'ai participé à ma première Game Jam à Lyon en distanciel.', 0),
(2, 2, 2, 'img/p4_1.jpg', '', 'Projet #2 : Puissance 4 textuel', 'Réalisation d\'un Puissance 4 sous le langage de programmation C, sans interface graphique et dans un univers Linux.', 0),
(3, 2, 3, 'img/sitedemacia1.jpg', '', 'Projet #3 : HTML/CSS/SEO', 'Premier site pour découvrir les langages HTML/CSS et SEO sur l\'univers de Demacia appartenant au jeu League of Legends.', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet_liens`
--

INSERT INTO `projet_liens` (`id`, `id_projet`, `lien`, `icone`) VALUES
(1, 3, 'http://lore-demacia.alwaysdata.net/', 'public');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `réseaux`
--

INSERT INTO `réseaux` (`id`, `lien`, `id_user`) VALUES
(1, 'https://www.linkedin.com/in/hugo-maestracci-22b019222/', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_projet`
--

INSERT INTO `type_projet` (`id`, `nom`, `image`) VALUES
(1, 'Game Jam', 'img/game_jam.jpg'),
(2, 'Jeux', 'img/game_img.jpg'),
(3, 'Site WEB', 'img/web.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `privileges` int(1) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `parcours` text,
  `id_equipe` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `privileges`, `email`, `password`, `prenom`, `nom`, `parcours`, `id_equipe`) VALUES
(1, 1, 'hmaestracci@gaming.tech', 'b7a6d580fa233088b213d9cd1cbb7e1145f7d64a', 'Hugo', 'MAESTRACCI', '<li><span>Etudiant en <a href=\"https://gaming.tech/\" target=\"_blank\" rel=\"external nofollow\">G-TECH 1</a> au Gaming Campus de Lyon</span></li>\r\n                    <li><span>Anciennement :</span><br>\r\n                      <ul>\r\n                        <li><span>- Serveur à l\'Instant Gourmand</span></li>\r\n                        <li><span>- 1 an en License informatique à TOULON</span></li>\r\n                        <li><span>- BAC STI2D option Système d\'Information et Numérique</span></li>\r\n                      </ul>\r\n                    </li>\r\n                    <li><blockquote class=\"center-align\">\"Je suis rentré au Gaming Campus dans le seul but d\'atteindre mon rêve, qui est d\'avoir les compétences nécessaires pour réaliser mes projets dans le monde du jeu-vidéo.\"</blockquote></li>', 1),
(2, 1, 'bmillan@gaming.tech', 'cf49f9d210982c802742be8bcfafbf4a3d1a205f', 'Baptiste', 'MILLAN', '<li><span>Etudiant en <a href=\"https://gaming.tech/\" target=\"_blank\" rel=\"external nofollow\">G-TECH 1</a> au Gaming Campus de Lyon</span></li>\r\n                    <li><span>Anciennement :</span><br>\r\n                      <ul>\r\n                        <li><span>- BAC S au Lycée Français de Séoul</span></li>\r\n                        <li><span>- DUT GMP à Rennes</span></li>\r\n                      </ul>\r\n                    </li>\r\n                    <li><blockquote class=\"center-align\">\"Je suis très content dans cette filière et même si je ne connaissais jusqu\'alors rien en programmation, j\'avance et tout le monde se serre les coudes\"</blockquote></li>', 1),
(3, 0, 'jm@aulas.fr', '8cb2237d0679ca88db6464eac60da96345513964', 'JM', 'Aulas', NULL, 0);

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

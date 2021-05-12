-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 déc. 2019 à 13:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` text NOT NULL,
  `ID_author` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `author`, `ID_author`) VALUES
(4, 'Tang Victor', 1),
(5, 'Jin James', 2),
(6, 'MA Claire', 3),
(7, 'Lebron James', 4),
(8, 'Toutant Antoine', 5),
(9, 'Abdealy Adil', 6),
(10, 'Gros Con', 7),
(11, 'Goulag Fuhrer', 8);

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `author_ID` int(11) NOT NULL,
  `synopsis` text NOT NULL,
  `prix` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`ID`, `title`, `author_ID`, `synopsis`, `prix`, `ISBN`) VALUES
(1, 'mes couilles', 1, 'Tous les matins je regarde les couilles de mon chien et je compare avec les miennes\r\nDes fois j\'matte mes cousins sous la douche\r\ntout nu tout nu\r\njprends un snapchat\r\nMoi jkiff, sucer des mecs', 300, 12345678),
(2, 'ca fait un radeau', 2, 'Nandato kora', 2, 13452152),
(3, 'La vie en rose', 3, 'Je vois la vie en rose', 21, 93183212),
(4, 'Love in the air', 3, 'q spell + dash ward + kick flash + q spell + zhonya = point de style', 15, 22222223),
(5, 'SONO CHI NO SADAME', 1, 'JOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOJOOOOOOOOOOOOOOOOOOOOO', 143, 87654321),
(6, 'Omae wa mou shindeiru', 2, 'NANIIIIIIIIIIIIIIIIIIIIIIIIII', 20, 82104121),
(7, 'ca me les brise', 1, 'j\'adore database c\'est vraiment bien\r\natt je t\'explique genre en fait on apprend le database et je fais un projet dessus\r\nmais le bail c\'est que j\'apprends 80% de html css php et 20% de sql et database\r\nc cool non?', 1, 21083012),
(9, 'truc', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 14, 28301212),
(10, 'chose', 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit.', 51, 44444444),
(11, 'thing', 7, 'consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', 21, 48029113),
(12, 'starfoullah', 5, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et', 42, 11223342),
(13, 'mashallah', 8, 'expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe even', 15, 32103812),
(14, 'au bord de leau', 4, 'J\'écris pour compléter le champs du synopsis parce que j\'ai rien d\'autre à foutre de mes journées\r\nEh salut toi tu vas bien, ouais moi ca va super merci de demander. Et ta famille ca va, les amis les enfant tout ca tout ca', 25, 19382052);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `username`, `password`, `mail`) VALUES
(3, 'Victor', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Victor@gmail.net');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

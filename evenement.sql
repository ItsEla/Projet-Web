-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 18 mai 2020 à 20:58
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `melodyo`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `ide` int(11) NOT NULL,
  `datee` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `descr` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`ide`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`ide`, `datee`, `name`, `id`, `descr`, `image`) VALUES
(88787, '2020-05-31', 'ddkdk', 545457, 'dldldldldl', 'green.jpg'),
(4554545, '2020-05-27', 'ckckck', 545457, 'djdjdjd', 'th.jpg'),
(888787, '2020-05-29', 'skskksd', 4545, 'dskdskdsk', '^^.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

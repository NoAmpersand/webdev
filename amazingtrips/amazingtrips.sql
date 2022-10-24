-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 24 oct. 2022 à 14:30
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `amazingtrips`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_user` int NOT NULL,
  `id_trip` int NOT NULL,
  `nb_travelers` int NOT NULL COMMENT 'nombre de voyageurs',
  `tripdate` date NOT NULL COMMENT 'date du voyage',
  PRIMARY KEY (`id_user`,`id_trip`),
  KEY `id_trip` (`id_trip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `trip`
--

DROP TABLE IF EXISTS `trip`;
CREATE TABLE IF NOT EXISTS `trip` (
  `id_trip` int NOT NULL AUTO_INCREMENT COMMENT 'identifiant du voyage',
  `name_trip` varchar(200) NOT NULL COMMENT 'nom du voyage',
  `location` varchar(200) NOT NULL COMMENT 'localisation du voyage',
  `price` int NOT NULL COMMENT 'prix du voyage',
  PRIMARY KEY (`id_trip`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `trip`
--

INSERT INTO `trip` (`id_trip`, `name_trip`, `location`, `price`) VALUES
(1, 'Amazing Corse', 'corse', 160);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''utilisateur',
  `name_user` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'nom de l''utilisateur',
  `lastname` varchar(200) NOT NULL COMMENT 'nom de l''utilisateur',
  `birthdate` date NOT NULL COMMENT 'date de naissance de l''utilisateur',
  `email` varchar(200) NOT NULL COMMENT 'mail de l''utilisateur',
  `passsword` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'mot de passe de l''utilisateur',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `lastname`, `birthdate`, `email`, `passsword`) VALUES
(5, 'mathilde', 'turra', '1988-02-01', 'mathilde@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

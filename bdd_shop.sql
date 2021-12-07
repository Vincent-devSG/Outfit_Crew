-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 déc. 2021 à 14:22
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `CP` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `type_paiement` varchar(255) NOT NULL,
  `num_carte` varchar(255) NOT NULL,
  `nom_carte` varchar(255) NOT NULL,
  `date_exp` date NOT NULL,
  `code_carte` int(4) NOT NULL,
  `panier` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`ID`, `nom`, `prenom`, `mail`, `adresse`, `ville`, `CP`, `pays`, `tel`, `type_paiement`, `num_carte`, `nom_carte`, `date_exp`, `code_carte`, `panier`) VALUES
(1, 'pompei', 'vincent', 'vincent@gmail.com', '76 avenue de paris', 'versailles', 78000, 'france', 783179002, 'master card', '1231231231231231', 'pompei', '2022-09-26', 123, '');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `pseudo`, `mdp`) VALUES
(1, 'vincent', 'pompei'),
(2, 'pierre', 'mestre');

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

DROP TABLE IF EXISTS `objet`;
CREATE TABLE IF NOT EXISTS `objet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_vendeur` int(11) NOT NULL,
  `ID_acheteur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `vendu` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`ID`, `ID_vendeur`, `ID_acheteur`, `nom`, `etat`, `photo`, `description`, `categorie`, `prix`, `vendu`) VALUES
(1, 0, 0, 'iPhone', 'neuf', 'IMG/iPhone.png', 'un iPhone cool', 'regulier', 1000, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `photo_profil` varchar(255) NOT NULL,
  `photo_mur` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`ID`, `pseudo`, `mdp`, `mail`, `photo_profil`, `photo_mur`) VALUES
(1, 'pierrot', '123456', 'pierre@gmail.com', 'IMG/pierrot_photo_profil.png', 'IMG/pierrot_photo_mur.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

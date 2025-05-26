-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 25 mai 2025 à 23:30
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `digiciv`
--

-- --------------------------------------------------------

--
-- Structure de la table `acte_deces`
--

DROP TABLE IF EXISTS `acte_deces`;
CREATE TABLE IF NOT EXISTS `acte_deces` (
  `Num_acte` int NOT NULL AUTO_INCREMENT,
  `Nom_defunt` varchar(100) DEFAULT NULL,
  `Prenom_defunt` varchar(100) DEFAULT NULL,
  `Sexe` char(1) DEFAULT NULL,
  `Fonction` varchar(100) DEFAULT NULL,
  `Date_naissance` date DEFAULT NULL,
  `Date_deces` date DEFAULT NULL,
  `Nom_pere` varchar(100) DEFAULT NULL,
  `Prenom_pere` varchar(100) DEFAULT NULL,
  `Nom_mere` varchar(100) DEFAULT NULL,
  `Prenom_mere` varchar(100) DEFAULT NULL,
  `Date_delivrance` date DEFAULT NULL,
  `Id_commune` int DEFAULT NULL,
  PRIMARY KEY (`Num_acte`),
  KEY `Id_commune` (`Id_commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acte_mariage`
--

DROP TABLE IF EXISTS `acte_mariage`;
CREATE TABLE IF NOT EXISTS `acte_mariage` (
  `Id_acte_mariage` int NOT NULL AUTO_INCREMENT,
  `Date_mariage` date DEFAULT NULL,
  `Nom_conjoint` varchar(100) DEFAULT NULL,
  `Prenom_conjoint` varchar(100) DEFAULT NULL,
  `Date_naissance_conjoint` date DEFAULT NULL,
  `Lieu_naissance_conjoint` varchar(100) DEFAULT NULL,
  `Fonction_conjoint` varchar(100) DEFAULT NULL,
  `Nom_conjointe` varchar(100) DEFAULT NULL,
  `Prenom_conjointe` varchar(100) DEFAULT NULL,
  `Date_naissance_conjointe` date DEFAULT NULL,
  `Lieu_naissance_conjointe` varchar(100) DEFAULT NULL,
  `Fonction_conjointe` varchar(100) DEFAULT NULL,
  `Date_delivrance_acte` date DEFAULT NULL,
  `Id_commune` int DEFAULT NULL,
  PRIMARY KEY (`Id_acte_mariage`),
  KEY `Id_commune` (`Id_commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `Id_commune` int NOT NULL AUTO_INCREMENT,
  `Nom_commune` varchar(100) DEFAULT NULL,
  `Logo_commune` varchar(255) DEFAULT NULL,
  `Type_commune` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `extrait_naissance`
--

DROP TABLE IF EXISTS `extrait_naissance`;
CREATE TABLE IF NOT EXISTS `extrait_naissance` (
  `Id_extrait` int NOT NULL AUTO_INCREMENT,
  `Num_extrait` varchar(50) DEFAULT NULL,
  `Date_delivrance_extrait` date DEFAULT NULL,
  `Lieu_naissance` varchar(100) DEFAULT NULL,
  `Logement_commune` varchar(100) DEFAULT NULL,
  `Id_commune` int DEFAULT NULL,
  PRIMARY KEY (`Id_extrait`),
  KEY `Id_commune` (`Id_commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `timbre`
--

DROP TABLE IF EXISTS `timbre`;
CREATE TABLE IF NOT EXISTS `timbre` (
  `Id_timbre` int NOT NULL AUTO_INCREMENT,
  `Libelle_timbre` varchar(100) DEFAULT NULL,
  `Id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`Id_timbre`),
  KEY `Id_utilisateur` (`Id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `timbre_actedeces`
--

DROP TABLE IF EXISTS `timbre_actedeces`;
CREATE TABLE IF NOT EXISTS `timbre_actedeces` (
  `Id_timbre` int NOT NULL,
  `Num_acte` int DEFAULT NULL,
  PRIMARY KEY (`Id_timbre`),
  UNIQUE KEY `Num_acte` (`Num_acte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `timbre_actemariage`
--

DROP TABLE IF EXISTS `timbre_actemariage`;
CREATE TABLE IF NOT EXISTS `timbre_actemariage` (
  `Id_timbre` int NOT NULL,
  `Id_acte_mariage` int DEFAULT NULL,
  PRIMARY KEY (`Id_timbre`),
  UNIQUE KEY `Id_acte_mariage` (`Id_acte_mariage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `timbre_extrait`
--

DROP TABLE IF EXISTS `timbre_extrait`;
CREATE TABLE IF NOT EXISTS `timbre_extrait` (
  `Id_timbre` int NOT NULL,
  `Id_extrait` int DEFAULT NULL,
  PRIMARY KEY (`Id_timbre`),
  UNIQUE KEY `Id_extrait` (`Id_extrait`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `Nom_utilisateur` varchar(100) DEFAULT NULL,
  `Prenom_utilisateur` varchar(100) DEFAULT NULL,
  `Email_utilisateur` varchar(100) DEFAULT NULL,
  `Tel_utilisateur` varchar(20) DEFAULT NULL,
  `Nom_pere` varchar(100) DEFAULT NULL,
  `Prenom_pere` varchar(100) DEFAULT NULL,
  `Nom_mere` varchar(100) DEFAULT NULL,
  `Prenom_mere` varchar(100) DEFAULT NULL,
  `Date_naissance_utilisateur` date DEFAULT NULL,
  PRIMARY KEY (`Id_utilisateur`),
  UNIQUE KEY `Email_utilisateur` (`Email_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_actedeces`
--

DROP TABLE IF EXISTS `utilisateur_actedeces`;
CREATE TABLE IF NOT EXISTS `utilisateur_actedeces` (
  `Id_utilisateur` int NOT NULL,
  `Num_acte` int NOT NULL,
  PRIMARY KEY (`Id_utilisateur`,`Num_acte`),
  KEY `Num_acte` (`Num_acte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_actemariage`
--

DROP TABLE IF EXISTS `utilisateur_actemariage`;
CREATE TABLE IF NOT EXISTS `utilisateur_actemariage` (
  `Id_utilisateur` int NOT NULL,
  `Id_acte_mariage` int NOT NULL,
  PRIMARY KEY (`Id_utilisateur`,`Id_acte_mariage`),
  KEY `Id_acte_mariage` (`Id_acte_mariage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_extraitnaissance`
--

DROP TABLE IF EXISTS `utilisateur_extraitnaissance`;
CREATE TABLE IF NOT EXISTS `utilisateur_extraitnaissance` (
  `Id_utilisateur` int NOT NULL,
  `Id_extrait` int NOT NULL,
  PRIMARY KEY (`Id_utilisateur`,`Id_extrait`),
  KEY `Id_extrait` (`Id_extrait`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acte_deces`
--
ALTER TABLE `acte_deces`
  ADD CONSTRAINT `acte_deces_ibfk_1` FOREIGN KEY (`Id_commune`) REFERENCES `commune` (`Id_commune`);

--
-- Contraintes pour la table `acte_mariage`
--
ALTER TABLE `acte_mariage`
  ADD CONSTRAINT `acte_mariage_ibfk_1` FOREIGN KEY (`Id_commune`) REFERENCES `commune` (`Id_commune`);

--
-- Contraintes pour la table `extrait_naissance`
--
ALTER TABLE `extrait_naissance`
  ADD CONSTRAINT `extrait_naissance_ibfk_1` FOREIGN KEY (`Id_commune`) REFERENCES `commune` (`Id_commune`);

--
-- Contraintes pour la table `timbre`
--
ALTER TABLE `timbre`
  ADD CONSTRAINT `timbre_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`);

--
-- Contraintes pour la table `timbre_actedeces`
--
ALTER TABLE `timbre_actedeces`
  ADD CONSTRAINT `timbre_actedeces_ibfk_1` FOREIGN KEY (`Id_timbre`) REFERENCES `timbre` (`Id_timbre`),
  ADD CONSTRAINT `timbre_actedeces_ibfk_2` FOREIGN KEY (`Num_acte`) REFERENCES `acte_deces` (`Num_acte`);

--
-- Contraintes pour la table `timbre_actemariage`
--
ALTER TABLE `timbre_actemariage`
  ADD CONSTRAINT `timbre_actemariage_ibfk_1` FOREIGN KEY (`Id_timbre`) REFERENCES `timbre` (`Id_timbre`),
  ADD CONSTRAINT `timbre_actemariage_ibfk_2` FOREIGN KEY (`Id_acte_mariage`) REFERENCES `acte_mariage` (`Id_acte_mariage`);

--
-- Contraintes pour la table `timbre_extrait`
--
ALTER TABLE `timbre_extrait`
  ADD CONSTRAINT `timbre_extrait_ibfk_1` FOREIGN KEY (`Id_timbre`) REFERENCES `timbre` (`Id_timbre`),
  ADD CONSTRAINT `timbre_extrait_ibfk_2` FOREIGN KEY (`Id_extrait`) REFERENCES `extrait_naissance` (`Id_extrait`);

--
-- Contraintes pour la table `utilisateur_actedeces`
--
ALTER TABLE `utilisateur_actedeces`
  ADD CONSTRAINT `utilisateur_actedeces_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`),
  ADD CONSTRAINT `utilisateur_actedeces_ibfk_2` FOREIGN KEY (`Num_acte`) REFERENCES `acte_deces` (`Num_acte`);

--
-- Contraintes pour la table `utilisateur_actemariage`
--
ALTER TABLE `utilisateur_actemariage`
  ADD CONSTRAINT `utilisateur_actemariage_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`),
  ADD CONSTRAINT `utilisateur_actemariage_ibfk_2` FOREIGN KEY (`Id_acte_mariage`) REFERENCES `acte_mariage` (`Id_acte_mariage`);

--
-- Contraintes pour la table `utilisateur_extraitnaissance`
--
ALTER TABLE `utilisateur_extraitnaissance`
  ADD CONSTRAINT `utilisateur_extraitnaissance_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`),
  ADD CONSTRAINT `utilisateur_extraitnaissance_ibfk_2` FOREIGN KEY (`Id_extrait`) REFERENCES `extrait_naissance` (`Id_extrait`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

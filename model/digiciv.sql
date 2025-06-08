-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 08 juin 2025 à 22:41
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
  `id_acte` int NOT NULL AUTO_INCREMENT,
  `numero_acte` varchar(50) NOT NULL,
  `date_acte` date NOT NULL,
  `numero_registre` varchar(50) NOT NULL,
  `nom_defunt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Prenom_defunt` varchar(100) DEFAULT NULL,
  `sexe` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fonction` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_deces` date DEFAULT NULL,
  `lieu_deces` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom_pere` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_pere` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_mere` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_mere` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_delivrance` date DEFAULT NULL,
  `id_commune` int DEFAULT NULL,
  PRIMARY KEY (`id_acte`),
  KEY `Id_commune` (`id_commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acte_mariage`
--

DROP TABLE IF EXISTS `acte_mariage`;
CREATE TABLE IF NOT EXISTS `acte_mariage` (
  `id_acte_mariage` int NOT NULL AUTO_INCREMENT,
  `numero_registre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero_acte` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_mariage` date DEFAULT NULL,
  `nom_conjoint` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_conjoint` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance_conjoint` date DEFAULT NULL,
  `lieu_naissance_conjoint` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_pere_conjoint` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom_mere_conjoint` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fonction_conjoint` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `domicile_conjoint` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom_conjointe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_conjointe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance_conjointe` date DEFAULT NULL,
  `lieu_naissance_conjointe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `domicile_conjointe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom_pere_conjointe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom_mere_conjointe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fonction_conjointe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_delivrance_acte` date DEFAULT NULL,
  `id_commune` int DEFAULT NULL,
  PRIMARY KEY (`id_acte_mariage`),
  KEY `Id_commune` (`id_commune`)
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
-- Structure de la table `demande_acte_mariage`
--

DROP TABLE IF EXISTS `demande_acte_mariage`;
CREATE TABLE IF NOT EXISTS `demande_acte_mariage` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_demandeur` int DEFAULT NULL,
  `numero_acte_demande` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_acte_demande` date DEFAULT NULL,
  `numero_registre_demande` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenoms_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance_conjoint_demande` date DEFAULT NULL,
  `lieu_naissance_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `domicile_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fonction_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_pere_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_mere_conjoint_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenoms_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance_conjointe_demande` date DEFAULT NULL,
  `lieu_naissance_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `domicile_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fonction_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_pere_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_mere_conjointe_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `document_joint_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` enum('en_attente','valide','rejete') DEFAULT 'en_attente',
  `date_demande` datetime DEFAULT CURRENT_TIMESTAMP,
  `traite_par` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `idx_numero_acte_demande` (`numero_acte_demande`),
  KEY `fk_id_demandeur` (`id_demandeur`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande_acte_mariage`
--

INSERT INTO `demande_acte_mariage` (`id_demande`, `id_demandeur`, `numero_acte_demande`, `date_acte_demande`, `numero_registre_demande`, `nom_conjoint_demande`, `prenoms_conjoint_demande`, `date_naissance_conjoint_demande`, `lieu_naissance_conjoint_demande`, `domicile_conjoint_demande`, `fonction_conjoint_demande`, `nom_pere_conjoint_demande`, `nom_mere_conjoint_demande`, `nom_conjointe_demande`, `prenoms_conjointe_demande`, `date_naissance_conjointe_demande`, `lieu_naissance_conjointe_demande`, `domicile_conjointe_demande`, `fonction_conjointe_demande`, `nom_pere_conjointe_demande`, `nom_mere_conjointe_demande`, `document_joint_path`, `statut`, `date_demande`, `traite_par`) VALUES
(1, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-03 17:01:34', 'à compléter plus tard'),
(2, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-03 17:03:32', 'à compléter plus tard'),
(3, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-03 17:07:10', 'à compléter plus tard'),
(4, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-03 17:23:46', 'à compléter plus tard'),
(5, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-03 17:24:51', 'à compléter plus tard'),
(6, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:11:56', ''),
(7, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:12:03', ''),
(8, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:13:16', ''),
(9, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:13:28', ''),
(10, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:22:08', ''),
(11, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:22:20', ''),
(12, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:22:28', ''),
(13, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:22:35', ''),
(14, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:23:46', ''),
(15, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:24:00', ''),
(16, 26, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:25:24', ''),
(17, 20, '2222', '2025-06-04', 'FF', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:26:59', '');

-- --------------------------------------------------------

--
-- Structure de la table `demande_deces`
--

DROP TABLE IF EXISTS `demande_deces`;
CREATE TABLE IF NOT EXISTS `demande_deces` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_demandeur` int DEFAULT NULL,
  `numero_acte_demande` varchar(50) DEFAULT NULL,
  `date_acte_demande` date DEFAULT NULL,
  `numero_registre_demande` varchar(50) DEFAULT NULL,
  `nom_defunt_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_defunt_demande` varchar(100) DEFAULT NULL,
  `sexe_demande` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fonction_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance_demande` date DEFAULT NULL,
  `date_deces_demande` date DEFAULT NULL,
  `lieu_deces_demande` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_pere_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_pere_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_mere_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_mere_demande` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `document_joint_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` enum('en_attente','valide','rejete') DEFAULT 'en_attente',
  `date_demande` datetime DEFAULT CURRENT_TIMESTAMP,
  `traite_par` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `fk_id_demandeur_deces` (`id_demandeur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande_deces`
--

INSERT INTO `demande_deces` (`id_demande`, `id_demandeur`, `numero_acte_demande`, `date_acte_demande`, `numero_registre_demande`, `nom_defunt_demande`, `prenom_defunt_demande`, `sexe_demande`, `fonction_demande`, `date_naissance_demande`, `date_deces_demande`, `lieu_deces_demande`, `nom_pere_demande`, `prenom_pere_demande`, `nom_mere_demande`, `prenom_mere_demande`, `document_joint_path`, `statut`, `date_demande`, `traite_par`) VALUES
(1, 26, '2222', '2025-06-01', '412', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 12:41:45', '');

-- --------------------------------------------------------

--
-- Structure de la table `demande_extrait`
--

DROP TABLE IF EXISTS `demande_extrait`;
CREATE TABLE IF NOT EXISTS `demande_extrait` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenoms` varchar(100) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `lieu_naissance` varchar(255) DEFAULT NULL,
  `numero_acte` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_acte` date DEFAULT NULL,
  `numero_registre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_pere` varchar(100) DEFAULT NULL,
  `prenoms_pere` varchar(100) DEFAULT NULL,
  `nom_mere` varchar(100) DEFAULT NULL,
  `prenoms_mere` varchar(100) DEFAULT NULL,
  `fichier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` enum('en_attente','valide','rejete') DEFAULT 'en_attente',
  `date_demande` datetime DEFAULT CURRENT_TIMESTAMP,
  `traite_par` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `utilisateur_id` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande_extrait`
--

INSERT INTO `demande_extrait` (`id_demande`, `id_utilisateur`, `nom`, `prenoms`, `date_naissance`, `lieu_naissance`, `numero_acte`, `date_acte`, `numero_registre`, `nom_pere`, `prenoms_pere`, `nom_mere`, `prenoms_mere`, `fichier`, `statut`, `date_demande`, `traite_par`) VALUES
(1, NULL, 'traore', 'issiaka', '2025-06-21', 'SAN PEDRO', '', '0000-00-00', '', 'XXX', 'XXXXX', 'XXX', '', NULL, 'en_attente', '2025-06-02 10:07:47', ''),
(2, NULL, 'traore', 'issiaka', '2025-06-21', 'SAN PEDRO', '', '0000-00-00', '', 'XXX', 'XXXXX', 'XXX', '', NULL, 'en_attente', '2025-06-02 10:07:55', ''),
(17, NULL, 'traore', 'issiaka', '2025-06-21', 'SAN PEDRO', '', '0000-00-00', '', 'XXX', 'XXXXX', 'XXX', '', NULL, 'en_attente', '2025-06-02 11:47:27', ''),
(18, NULL, 'kone', 'drissa', '2025-06-03', 'SAN PEDRO', '1123', '2025-05-27', '412', 'KONE', 'MADOU', 'KONE', 'SALI', NULL, 'en_attente', '2025-06-02 11:51:15', ''),
(19, 26, 'kone', 'drissa', '2025-06-03', 'SAN PEDRO', '1123', '2025-05-27', '412', 'KONE', 'MADOU', 'KONE', 'SALI', NULL, 'en_attente', '2025-06-02 12:27:53', ''),
(20, 26, '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-02 17:17:43', ''),
(21, 26, '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-02 17:26:38', ''),
(22, 26, 'kone', 'drissa', '2025-06-05', 'SAN PEDRO', '1123', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-03 09:37:04', ''),
(23, 26, '', '', '0000-00-00', '', '2222', '2025-06-04', 'FF', '', '', '', '', NULL, 'en_attente', '2025-06-03 12:38:39', ''),
(24, 26, '', '', '0000-00-00', '', '2222', '2025-06-04', 'FF', '', '', '', '', NULL, 'en_attente', '2025-06-03 12:40:18', ''),
(25, 26, '', '', '0000-00-00', '', '2222', '2025-06-04', 'FF', '', '', '', '', NULL, 'en_attente', '2025-06-03 12:43:17', ''),
(26, 26, '', '', '0000-00-00', '', '2222', '2025-06-04', 'FF', '', '', '', '', NULL, 'en_attente', '2025-06-03 16:57:40', ''),
(27, 20, 'kone', 'drissa', '2025-06-05', 'SAN PEDRO', '1123', '0000-00-00', '', '', '', '', '', NULL, 'en_attente', '2025-06-04 09:26:41', '');

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
  `id_timbre` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_utilisateur` int DEFAULT NULL,
  `montant` int NOT NULL,
  `date_paiement` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statut` varchar(50) NOT NULL DEFAULT 'payé',
  PRIMARY KEY (`id_timbre`),
  KEY `Id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `timbre`
--

INSERT INTO `timbre` (`id_timbre`, `libelle`, `id_utilisateur`, `montant`, `date_paiement`, `statut`) VALUES
(1, NULL, 26, 500, '2025-06-03 09:48:50', 'payé'),
(2, NULL, 26, 500, '2025-06-03 17:31:43', 'payé'),
(3, NULL, 26, 500, '2025-06-03 18:07:11', 'payé'),
(4, 'Paiement acte de mariage', 26, 500, '2025-06-03 18:16:46', 'payé'),
(5, 'Paiement acte de mariage', 20, 2500, '2025-06-04 09:27:11', 'payé'),
(6, 'Paiement acte de mariage', 20, 2500, '2025-06-04 09:29:47', 'payé'),
(7, 'Paiement acte de décès', 26, 500, '2025-06-04 15:56:45', 'payé'),
(8, 'Paiement acte de décès', 26, 500, '2025-06-04 16:21:15', 'payé'),
(9, 'Paiement acte de décès', 26, 500, '2025-06-04 16:22:39', 'payé');

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
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sexe` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email_utilisateur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Tel_utilisateur` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nom_pere` varchar(100) DEFAULT NULL,
  `Prenom_pere` varchar(100) DEFAULT NULL,
  `Nom_mere` varchar(100) DEFAULT NULL,
  `Prenom_mere` varchar(100) DEFAULT NULL,
  `Date_naissance` date DEFAULT NULL,
  `Role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `Email_utilisateur` (`Email_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `sexe`, `Email_utilisateur`, `mot_de_passe`, `Tel_utilisateur`, `Nom_pere`, `Prenom_pere`, `Nom_mere`, `Prenom_mere`, `Date_naissance`, `Role`) VALUES
(18, 'coulibaly', 'issiaka', 'M', 'uvcipct312@gmail.com', '$2y$10$.WGe7UbJ6E7xEoV.1ZwBoubJoGdwqjJJ4GQDAlFFC0C0P2T1vZD4m', '0544169397', NULL, NULL, NULL, NULL, '2025-05-22', 'admin'),
(20, 'traore', 'NOURA', 'F', 'uvcipct31@gmail.com', '$2y$10$ZC8NCidXoCBgmyGI39JSJOpRIUsBpLaBdFPgDe21A.tsjLfr6i6Wi', '0141013995', NULL, NULL, NULL, NULL, '2025-05-13', 'utilisateur'),
(26, 'bonjour', 'bonsoir', 'M', 'uvcipct32@gmail.com', '$2y$10$lyyt1l1bqBO9w8q9kdjaaedH5Nk26f5uH.A9I1M57KiLq4PzoxyC6', '0544169398', NULL, NULL, NULL, NULL, '2025-06-05', 'utilisateur');

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
  ADD CONSTRAINT `acte_deces_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`Id_commune`);

--
-- Contraintes pour la table `acte_mariage`
--
ALTER TABLE `acte_mariage`
  ADD CONSTRAINT `acte_mariage_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`Id_commune`);

--
-- Contraintes pour la table `demande_acte_mariage`
--
ALTER TABLE `demande_acte_mariage`
  ADD CONSTRAINT `fk_id_demandeur` FOREIGN KEY (`id_demandeur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `demande_deces`
--
ALTER TABLE `demande_deces`
  ADD CONSTRAINT `fk_id_demandeur_deces` FOREIGN KEY (`id_demandeur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `extrait_naissance`
--
ALTER TABLE `extrait_naissance`
  ADD CONSTRAINT `extrait_naissance_ibfk_1` FOREIGN KEY (`Id_commune`) REFERENCES `commune` (`Id_commune`);

--
-- Contraintes pour la table `timbre`
--
ALTER TABLE `timbre`
  ADD CONSTRAINT `timbre_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `timbre_actedeces`
--
ALTER TABLE `timbre_actedeces`
  ADD CONSTRAINT `timbre_actedeces_ibfk_1` FOREIGN KEY (`Id_timbre`) REFERENCES `timbre` (`id_timbre`),
  ADD CONSTRAINT `timbre_actedeces_ibfk_2` FOREIGN KEY (`Num_acte`) REFERENCES `acte_deces` (`id_acte`);

--
-- Contraintes pour la table `timbre_actemariage`
--
ALTER TABLE `timbre_actemariage`
  ADD CONSTRAINT `timbre_actemariage_ibfk_1` FOREIGN KEY (`Id_timbre`) REFERENCES `timbre` (`id_timbre`),
  ADD CONSTRAINT `timbre_actemariage_ibfk_2` FOREIGN KEY (`Id_acte_mariage`) REFERENCES `acte_mariage` (`id_acte_mariage`);

--
-- Contraintes pour la table `timbre_extrait`
--
ALTER TABLE `timbre_extrait`
  ADD CONSTRAINT `timbre_extrait_ibfk_1` FOREIGN KEY (`Id_timbre`) REFERENCES `timbre` (`id_timbre`),
  ADD CONSTRAINT `timbre_extrait_ibfk_2` FOREIGN KEY (`Id_extrait`) REFERENCES `extrait_naissance` (`Id_extrait`);

--
-- Contraintes pour la table `utilisateur_actedeces`
--
ALTER TABLE `utilisateur_actedeces`
  ADD CONSTRAINT `utilisateur_actedeces_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `utilisateur_actedeces_ibfk_2` FOREIGN KEY (`Num_acte`) REFERENCES `acte_deces` (`id_acte`);

--
-- Contraintes pour la table `utilisateur_actemariage`
--
ALTER TABLE `utilisateur_actemariage`
  ADD CONSTRAINT `utilisateur_actemariage_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `utilisateur_actemariage_ibfk_2` FOREIGN KEY (`Id_acte_mariage`) REFERENCES `acte_mariage` (`id_acte_mariage`);

--
-- Contraintes pour la table `utilisateur_extraitnaissance`
--
ALTER TABLE `utilisateur_extraitnaissance`
  ADD CONSTRAINT `utilisateur_extraitnaissance_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `utilisateur_extraitnaissance_ibfk_2` FOREIGN KEY (`Id_extrait`) REFERENCES `extrait_naissance` (`Id_extrait`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

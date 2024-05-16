-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 juin 2023 à 18:09
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `surveillances`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'mohammed', '2002');

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

CREATE TABLE `affectations` (
  `id_aff` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `surveillant` varchar(255) NOT NULL,
  `resModule` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `affectations`
--

INSERT INTO `affectations` (`id_aff`, `date`, `jour`, `horaire`, `module`, `loc`, `surveillant`, `resModule`, `niveau`) VALUES
(2, '01-juin', 'jeudi', '09h-11h', 'jnhb ', 's1', 'njkh', 'njhb', 'gi1');

-- --------------------------------------------------------

--
-- Structure de la table `locale`
--

CREATE TABLE `locale` (
  `id_loc` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `locale`
--

INSERT INTO `locale` (`id_loc`, `nom`, `date`, `horaire`) VALUES
(3, 's1', '01-juin', '09h-11h');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`id_aff`);

--
-- Index pour la table `locale`
--
ALTER TABLE `locale`
  ADD PRIMARY KEY (`id_loc`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `affectations`
--
ALTER TABLE `affectations`
  MODIFY `id_aff` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `locale`
--
ALTER TABLE `locale`
  MODIFY `id_loc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

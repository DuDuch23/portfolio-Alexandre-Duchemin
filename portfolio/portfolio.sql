-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 29 avr. 2023 à 23:01
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `message_portfolio`
--

CREATE TABLE `message_portfolio` (
  `id_message` int(11) NOT NULL,
  `nom_message` varchar(50) NOT NULL,
  `prenom_message` varchar(50) NOT NULL,
  `email_message` varchar(255) NOT NULL,
  `sujet_message` varchar(100) NOT NULL,
  `contenu_message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message_portfolio`
--

INSERT INTO `message_portfolio` (`id_message`, `nom_message`, `prenom_message`, `email_message`, `sujet_message`, `contenu_message`) VALUES
(1, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'demande-offre', 'efvesrtet');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message_portfolio`
--
ALTER TABLE `message_portfolio`
  ADD PRIMARY KEY (`id_message`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message_portfolio`
--
ALTER TABLE `message_portfolio`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

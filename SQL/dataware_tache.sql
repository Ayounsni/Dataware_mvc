-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 déc. 2023 à 03:50
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dataware_tache`
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projets` int(11) NOT NULL,
  `nom_projet` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_creation` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id_tache` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `projet_id` int(11) DEFAULT NULL,
  `titre_tache` varchar(255) NOT NULL,
  `date_limite` date NOT NULL,
  `status` enum('to do','in progress','done') NOT NULL DEFAULT 'to do',
  `archive` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projets`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id_tache`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `projet_id` (`projet_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projets` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id_tache` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `taches_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `taches_ibfk_2` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id_projets`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

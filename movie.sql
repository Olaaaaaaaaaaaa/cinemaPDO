-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juin 2023 à 10:37
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id_movie` int NOT NULL AUTO_INCREMENT,
  `name_movie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `release_date_movie` date NOT NULL,
  PRIMARY KEY (`id_movie`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`id_movie`, `name_movie`, `release_date_movie`) VALUES
(1, 'La planète des singes', '1968-04-25'),
(2, 'Spider man no way home', '2021-12-15'),
(3, 'La Ligne verte', '2000-03-01'),
(4, 'Toy story 2', '2000-02-02'),
(5, 'Toy story 3', '2010-07-14'),
(6, 'Toy story 4', '2019-06-26'),
(7, 'Toy story', '1996-03-17'),
(8, 'Inception', '2010-07-16'),
(9, 'The Dark Knight', '2008-07-18'),
(10, 'Pulp Fiction', '1994-10-14'),
(11, 'Fight Club', '1999-10-15'),
(12, 'The Shawshank Redemption', '1994-09-23'),
(13, 'The Godfather', '1972-03-24'),
(14, 'The Avengers', '2012-05-04'),
(15, 'Jurassic Park', '1993-06-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

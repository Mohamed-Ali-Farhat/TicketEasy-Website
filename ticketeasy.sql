-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 mai 2023 à 12:31
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
-- Base de données : `ticketeasy`
--

-- --------------------------------------------------------

--
-- Structure de la table `categoriesnack`
--

CREATE TABLE `categoriesnack` (
  `idcategoriesnack` int(11) NOT NULL,
  `categoriesnack` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categoriesnack`
--

INSERT INTO `categoriesnack` (`idcategoriesnack`, `categoriesnack`) VALUES
(1, 'sweet'),
(3, 'snack'),
(8, 'drink');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numberClient` int(11) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `isbanned` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `firstName`, `lastName`, `address`, `email`, `numberClient`, `dob`, `password`, `isbanned`) VALUES
(2, 'mazouz', 'erij', 'aaa', 'majus.erij1@gmail.com', 28899812, '2002-08-06', 'erijMazouz!123', 0),
(4, 'naija', 'emna', 'menzah6', 'emnanaija@gmail.com', 78456123, '2023-05-16', 'Emnanaija14!', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `eventcategories`
--

CREATE TABLE `eventcategories` (
  `idCategorieE` int(11) NOT NULL,
  `EventCategoryE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eventcategories`
--

INSERT INTO `eventcategories` (`idCategorieE`, `EventCategoryE`) VALUES
(2, 'rihemm'),
(4, 'erij');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `IDEvent` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `idClient` int(11) NOT NULL,
  `dateEvent` date NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `categorie` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`IDEvent`, `titre`, `idClient`, `dateEvent`, `lieu`, `budget`, `categorie`) VALUES
(11, '2', 0, '2023-05-16', 'tunis', 1500, 2),
(12, 'sssss', 2, '2023-05-10', 'kkk', 4100, 4);

-- --------------------------------------------------------

--
-- Structure de la table `line_of_order`
--

CREATE TABLE `line_of_order` (
  `idLine` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `idMovie` int(11) NOT NULL,
  `idClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `line_of_order`
--

INSERT INTO `line_of_order` (`idLine`, `quantity`, `idMovie`, `idClient`) VALUES
(50, 1, 8, 4);

-- --------------------------------------------------------

--
-- Structure de la table `line_of_snack`
--

CREATE TABLE `line_of_snack` (
  `idLineS` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `idSnack` int(11) NOT NULL,
  `idClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `line_of_snack`
--

INSERT INTO `line_of_snack` (`idLineS`, `quantity`, `idSnack`, `idClient`) VALUES
(58, 2, 32, 4);

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `idMovie` int(11) NOT NULL,
  `movieName` varchar(100) NOT NULL,
  `priceTicket` int(11) NOT NULL,
  `moviePoster` varchar(100) NOT NULL,
  `dateMovie` date NOT NULL,
  `idroom` int(11) NOT NULL,
  `quantityTickets` int(11) NOT NULL,
  `descriptionMovie` varchar(1000) NOT NULL,
  `trailer` varchar(1000) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `dateR` varchar(10) NOT NULL,
  `rate` float NOT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`idMovie`, `movieName`, `priceTicket`, `moviePoster`, `dateMovie`, `idroom`, `quantityTickets`, `descriptionMovie`, `trailer`, `duration`, `dateR`, `rate`, `idcategory`) VALUES
(7, 'parasite', 10, 'Parasite.jpg', '2023-04-25', 2, 74, 'The struggling Kim family sees an opportunity when ', 'https://www.youtube.com/embed/SEUXfv87Wpk', '2h12m', '2019', 8.6, 2),
(8, 'AQuietPlace', 14, 'A_Quiet_Place.jpg', '2023-04-26', 4, 26, 'The struggling Kim family sees an opportunity when the son starts working for the wealthy Park family. Soon, all of them find a way to work within the same household and start living a parasitic life.', 'https://www.youtube.com/embed/SEUXfv87Wpk', '2h12m', '2010', 9.2, 2),
(12, 'fightclub', 14, 'Aot.jpg', '2023-04-25', 5, -60, 'fhhehuyheyuhuehfye', 'https://www.youtube.com/embed/SEUXfv87Wpk', '2h12m', '2010', 9.2, 8),
(14, 'asur', 14, 'asur.jpg', '2023-05-30', 2, 114, 'The struggling Kim family sees an opportunity when the son starts', 'https://www.youtube.com/embed/SEUXfv87Wpk', '2h30m', '2021', 9.3, 6),
(15, 'asssa', 17, 'arrow.jpg', '2023-05-26', 5, 73, 'The struggling Kim family sees an opportunity when the son starts ', 'https://www.youtube.com/embed/SEUXfv87Wpk', '2h00m', '2008', 9.4, 8),
(16, 'anek', 15, 'Anek.jpg', '2023-05-24', 2, 32, 'fdhgdryhetry', 'Anek', '2h12m', '2010', 9.2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `moviecategory`
--

CREATE TABLE `moviecategory` (
  `idcategory` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `moviecategory`
--

INSERT INTO `moviecategory` (`idcategory`, `categoryName`) VALUES
(2, 'horror'),
(3, 'comedy'),
(5, 'thriller'),
(6, 'scifi'),
(8, 'psychologythriller');

-- --------------------------------------------------------

--
-- Structure de la table `oorder`
--

CREATE TABLE `oorder` (
  `idOrder` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderState` varchar(100) NOT NULL,
  `idClient` int(11) NOT NULL,
  `priceTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `oorder`
--

INSERT INTO `oorder` (`idOrder`, `orderDate`, `orderState`, `idClient`, `priceTotal`) VALUES
(24, '2023-05-22', 'Ready', 2, 14),
(25, '2023-05-04', 'Ready', 2, 14),
(27, '2023-05-03', 'Ready', 2, 14),
(28, '2023-05-03', 'Ready', 2, 72),
(29, '2023-05-03', 'Ready', 2, 44),
(31, '2023-05-04', 'Ready', 2, 33),
(32, '2023-05-05', 'Ready', 2, 42),
(33, '2023-05-06', 'Ready', 2, 12),
(34, '2023-05-06', 'Pending', 2, 3),
(35, '2023-05-06', 'Ready', 2, 28),
(36, '2023-05-06', 'Pending', 2, 15),
(37, '2023-05-06', 'Pending', 2, 15),
(38, '2023-05-09', 'Ready', 4, 14),
(39, '2023-05-09', 'Ready', 4, 14),
(40, '2023-05-09', 'Ready', 4, 14),
(41, '2023-05-09', 'Ready', 4, 14),
(42, '2023-05-09', 'Pending', 4, 28),
(43, '2023-05-09', 'Ready', 4, 3),
(44, '2023-05-09', 'Ready', 4, 10);

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `idPay` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `card_type` varchar(50) NOT NULL,
  `cardNumber` int(11) NOT NULL,
  `CVC` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`idPay`, `Total`, `card_type`, `cardNumber`, `CVC`, `idOrder`) VALUES
(7, 14, 'phone-card', 2147483647, 545, 24),
(8, 14, 'phone-card', 2147483647, 599, 25),
(9, 14, 'bank-card', 123254, 444, 27),
(10, 72, 'phone-card', 78945126, 126, 28),
(11, 44, 'edinar-card', 4152787, 555, 29),
(12, 33, 'edinar-card', 4444, 123, 31),
(14, 28, 'bank-card', 2147483647, 896, 35),
(15, 14, 'phone-card', 78456, 123, 38),
(16, 14, 'phone-card', 78456, 123, 38),
(17, 14, 'bank-card', 784, 88965, 39),
(18, 14, 'bank-card', 5468, 5345, 40),
(19, 14, 'edinar-card', 7845, 785, 41),
(20, 3, 'phone-card', 7896, 266, 43),
(21, 10, 'phone-card', 98465, 647, 44);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `idRec` int(100) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dor` datetime NOT NULL,
  `texte` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`idRec`, `lastName`, `firstName`, `address`, `dor`, `texte`) VALUES
(1, 'Mazouz', 'Erij', 'mazouz.erij@esprit.tn', '2023-04-30 00:00:00', 'jjjjjjj'),
(2, 'naija', 'emna', 'emnanaija@gmail.com', '2023-02-04 00:00:00', 'hello im emna naija');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `idRps` int(11) NOT NULL,
  `reclamation` text NOT NULL,
  `reponse` text NOT NULL,
  `idRec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idRps`, `reclamation`, `reponse`, `idRec`) VALUES
(2, 'jjjjjjj', 'jdjdjdjddjdjd', 1),
(3, 'hello im emna naija', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `seat count` int(11) NOT NULL,
  `idroom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`seat count`, `idroom`) VALUES
(30, 'A1'),
(20, 'A2');

-- --------------------------------------------------------

--
-- Structure de la table `snack`
--

CREATE TABLE `snack` (
  `idSnack` int(11) NOT NULL,
  `snackName` varchar(50) NOT NULL,
  `priceSnack` int(11) NOT NULL,
  `quantitySnack` int(11) NOT NULL,
  `imageSnack` text NOT NULL,
  `idcategoriesnack` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `snack`
--

INSERT INTO `snack` (`idSnack`, `snackName`, `priceSnack`, `quantitySnack`, `imageSnack`, `idcategoriesnack`) VALUES
(29, 'chipsup', 3, 36, 'chips_up.png', 3),
(30, 'snickers', 5, 70, 'snickers.png', 3),
(31, 'mm', 5, 40, 'm&m.png', 1),
(32, 'bnino', 1, 45, 'bnino.png', 8),
(33, 'Oreo', 3, 0, 'oreo.png', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categoriesnack`
--
ALTER TABLE `categoriesnack`
  ADD PRIMARY KEY (`idcategoriesnack`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `eventcategories`
--
ALTER TABLE `eventcategories`
  ADD PRIMARY KEY (`idCategorieE`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`IDEvent`),
  ADD KEY `fk_event` (`categorie`);

--
-- Index pour la table `line_of_order`
--
ALTER TABLE `line_of_order`
  ADD PRIMARY KEY (`idLine`),
  ADD KEY `fk_movies` (`idMovie`),
  ADD KEY `fk_userrr` (`idClient`);

--
-- Index pour la table `line_of_snack`
--
ALTER TABLE `line_of_snack`
  ADD PRIMARY KEY (`idLineS`),
  ADD KEY `fk_line_of_snack` (`idSnack`),
  ADD KEY `fk_usr` (`idClient`);

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idMovie`),
  ADD KEY `fk_mvcategory` (`idcategory`);

--
-- Index pour la table `moviecategory`
--
ALTER TABLE `moviecategory`
  ADD PRIMARY KEY (`idcategory`);

--
-- Index pour la table `oorder`
--
ALTER TABLE `oorder`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `fk_user` (`idClient`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idPay`),
  ADD KEY `fk_payment` (`idOrder`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`idRec`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`idRps`),
  ADD KEY `fk_idRec` (`idRec`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`idroom`);

--
-- Index pour la table `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`idSnack`),
  ADD KEY `fk_categoriesnack` (`idcategoriesnack`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categoriesnack`
--
ALTER TABLE `categoriesnack`
  MODIFY `idcategoriesnack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `eventcategories`
--
ALTER TABLE `eventcategories`
  MODIFY `idCategorieE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `IDEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `line_of_order`
--
ALTER TABLE `line_of_order`
  MODIFY `idLine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `line_of_snack`
--
ALTER TABLE `line_of_snack`
  MODIFY `idLineS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `movie`
--
ALTER TABLE `movie`
  MODIFY `idMovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `moviecategory`
--
ALTER TABLE `moviecategory`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `oorder`
--
ALTER TABLE `oorder`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `idPay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `idRec` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `idRps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `snack`
--
ALTER TABLE `snack`
  MODIFY `idSnack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_event` FOREIGN KEY (`categorie`) REFERENCES `eventcategories` (`idCategorieE`);

--
-- Contraintes pour la table `line_of_order`
--
ALTER TABLE `line_of_order`
  ADD CONSTRAINT `fk_movies` FOREIGN KEY (`idMovie`) REFERENCES `movie` (`idMovie`),
  ADD CONSTRAINT `fk_userrr` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Contraintes pour la table `line_of_snack`
--
ALTER TABLE `line_of_snack`
  ADD CONSTRAINT `fk_line_of_snack` FOREIGN KEY (`idSnack`) REFERENCES `snack` (`idSnack`),
  ADD CONSTRAINT `fk_usr` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Contraintes pour la table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `fk_mvcategory` FOREIGN KEY (`idcategory`) REFERENCES `moviecategory` (`idcategory`);

--
-- Contraintes pour la table `oorder`
--
ALTER TABLE `oorder`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment` FOREIGN KEY (`idOrder`) REFERENCES `oorder` (`idOrder`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `fk_idRec` FOREIGN KEY (`idRec`) REFERENCES `reclamation` (`idRec`);

--
-- Contraintes pour la table `snack`
--
ALTER TABLE `snack`
  ADD CONSTRAINT `fk_categoriesnack` FOREIGN KEY (`idcategoriesnack`) REFERENCES `categoriesnack` (`idcategoriesnack`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

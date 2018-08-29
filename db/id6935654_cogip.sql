-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2018 at 09:38 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6935654_cogip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `login` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `access` enum('god','modo') COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `login`, `pwd`, `access`, `nom`) VALUES
(1, 'jc', 'ranu', 'god', 'Jean-Christian Ranu'),
(2, 'muriel', 'perrache', 'modo', 'Muriel Perrache');

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `numero` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `date_facturation` date DEFAULT NULL,
  `motif_prestation` mediumtext COLLATE utf8_unicode_ci,
  `personne_id` int(11) NOT NULL,
  `societe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facture`
--

INSERT INTO `facture` (`id`, `numero`, `date_facturation`, `motif_prestation`, `personne_id`, `societe_id`) VALUES
(3, 00000000005, '2018-05-02', '200 boules jaunes Galore', 5, 2),
(4, 00000000007, '2018-05-09', '12 bilboquets', 6, 1),
(5, 00000000011, '2018-05-15', 'bicky frite\r\nmitraillette fricadelle', 3, 5),
(6, 00000000027, '2018-06-13', 'micro-onde', 7, 4),
(7, 00000000042, '2018-07-18', '3 fausses portes', 4, 3),
(8, 00000000043, '2018-06-19', 'billard complet', 10, 6),
(9, 00000000045, '2018-06-21', 'tv', 7, 4),
(10, 00000000050, '2018-06-24', '13 boules jaunes Galore', 5, 2),
(11, 00000000051, '2018-06-25', '75 boules jaunes Galore', 5, 2),
(12, 00000000054, '2018-07-02', 'chaudron rutilant', 12, 6),
(13, 00000000055, '2018-07-03', 'compotier', 12, 6),
(14, 00000000056, '2018-07-04', 'oud', 12, 6),
(15, 00000000057, '2018-07-05', '4 plaques de dissimulation', 12, 6),
(16, 00000000058, '2018-07-06', 'Saint Suaire', 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `societe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `telephone`, `email`, `societe_id`) VALUES
(3, 'Sardouille', 'Michel', '043245678', 'sardouille.michel@email.com', 5),
(4, 'TF1', 'Dorothée', '086543251', 'd.tf1@fd.be', 3),
(5, 'Sebastien', 'Sebastien', '022234567', 'sebseb@email.be', 2),
(6, 'Ringarde', 'Lio', '042221299', 'lio.laringarde@jouetjeanmimi.be', 1),
(7, 'Semoun', 'Elie', '086754321', 'elie.semoun@email.org', 4),
(8, 'Alaplage', 'Martine', '024569367', 'martine@plage.conne', 3),
(9, 'Monsieuleprésident', 'Manu', '067786435', 'manu@elysee.fr', 6),
(10, 'Apeuprè', 'Jean-Michel', '034231423', 'jenmi@apeupre.com', 6),
(11, 'Chabat', 'Alain', '056789007', 'alain.cha@cegenie.burgerquizz', 5),
(12, 'Astier', 'Alex', '043526754', 'alex.astier@kaamelott.cegenie', 6);

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE `societe` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pays` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tva` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_soc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `societe`
--

INSERT INTO `societe` (`id`, `nom`, `adresse`, `pays`, `tva`, `telephone`, `type_soc_id`) VALUES
(1, 'Les Jouets Jean-Michel', '22 rue du pont - 4438 Birjvold', 'Belgique', 'BE123456789', '+32 67 45 89 01', 2),
(2, 'Boules Jaunes Galore', '77 rue des petits nains - 9030 Arglump', 'Bortenie Orientale', 'BO439700528', '+395 45 67 89 04', 2),
(3, 'Fake Doors', '345 Chelsea road - 55600', 'Angola', 'AG654290006', '+49 7 567 89 33', 2),
(4, 'Ants In My Eyes Electronics', '67 chaussée des fourmis - 4997 Balage', 'Belgique', 'BE964007844', '+32 87 56 56 00 12', 1),
(5, 'Chez Rony', '1 rue des frittes - 1000 Bruxelles', 'Belgique', 'BE097552380', '+32 2 744 55 34', 1),
(6, 'Mes Boules Mickey', 'à côté du Macdo - 5539 Mirtouille-en-Tamouche', 'Belgique', 'BE778084452', '+32 97 94 07 94', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_soc`
--

CREATE TABLE `type_soc` (
  `id` int(11) NOT NULL,
  `type` enum('Client','Fournisseur') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_soc`
--

INSERT INTO `type_soc` (`id`, `type`) VALUES
(1, 'Client'),
(2, 'Fournisseur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`,`personne_id`,`societe_id`),
  ADD KEY `fk_facture_personne_idx` (`personne_id`),
  ADD KEY `fk_facture_societe1_idx` (`societe_id`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`,`societe_id`),
  ADD KEY `fk_personne_societe1_idx` (`societe_id`);

--
-- Indexes for table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`,`type_soc_id`),
  ADD KEY `fk_societe_type_soc1_idx` (`type_soc_id`);

--
-- Indexes for table `type_soc`
--
ALTER TABLE `type_soc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type_soc`
--
ALTER TABLE `type_soc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_facture_personne` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_facture_societe1` FOREIGN KEY (`societe_id`) REFERENCES `societe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `fk_personne_societe1` FOREIGN KEY (`societe_id`) REFERENCES `societe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `fk_societe_type_soc1` FOREIGN KEY (`type_soc_id`) REFERENCES `type_soc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

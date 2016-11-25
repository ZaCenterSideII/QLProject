-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Juin 2016 à 23:52
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `admin` int(11) NOT NULL,
  `validation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID`, `email`, `password`, `nom`, `Adresse`, `date`, `admin`, `validation`) VALUES
(1, '', '', '', '', '2016-06-01', 1, 1),
(2, 'anass@gmail.com', '12345', 'Anass', '22,06,temara', '2016-05-16', 1, 1),
(3, 'Aers@gmail.com', '1qw45', 'Aers', '22,06,temara', '2016-05-16', 0, 1),
(11, 'Aers111@gmail.com', '1qw45', 'Aers', '2206temara', '2016-05-18', 0, 1),
(12, 'test', 'test', 'test', '', '2016-05-18', 0, 1),
(14, 'test1', 'test1', 'test1', '', '2016-05-18', 0, 1),
(17, 'q', 'q', 'q', 'q', '2016-05-19', 0, 1),
(18, 'anas', 'anas', 'anas', 'anas', '2016-05-19', 0, 1),
(19, 'client', 'client', 'client', 'client', '2016-05-19', 0, 1),
(20, 'ana', 'ana', 'ana', 'ana', '2016-05-20', 0, 1),
(21, 'simo', 'simo', 'simo', 'simo', '2016-06-04', 0, 1),
(22, 'anas.bo@gmail.com', 'anas', 'anass', 'temara 20', '2016-06-07', 0, 1),
(23, 'marwane.bo@gmail.com', '1234', 'marwane', 'el jadida', '2016-06-07', 0, 1),
(24, 'anass.boudrissi@gmail.com', 'aazz', 'anass', 'temara', '2016-06-10', 0, 1),
(25, 'kaoutar@gmail.com', '111', 'kaoutar', 'rabat', '2016-06-10', 0, 1),
(26, 'anass.ismail@gmail.com', '1111', 'ismail', 'temara', '2016-06-13', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`ID`, `Nom`, `img_url`) VALUES
(40, '5', 'http://localhost/dashboard/pfe/uploads/5.png'),
(41, '7675', 'http://localhost/dashboard/pfe/uploads/7675.png'),
(42, '3217', 'http://localhost/dashboard/pfe/uploads/3217.png'),
(45, 'yep', 'http://localhost/dashboard/pfe/uploads/yep.png'),
(49, 'zro', 'http://localhost/dashboard/pfe/uploads/zro.png'),
(50, 'aers', 'http://localhost/dashboard/pfe/uploads/aers.png'),
(51, 'orangier', 'http://localhost/dashboard/pfe/uploads/orangier.png'),
(52, '8476', 'http://localhost/dashboard/pfe/uploads/8476.png'),
(53, 'terchie', 'http://localhost/dashboard/pfe/uploads/terchie.png'),
(61, 'tomate', 'http://localhost/dashboard/pfe/uploads/tomate.png'),
(62, 'herbe', 'http://localhost/dashboard/pfe/uploads/herbe.png'),
(63, 'palmier', 'http://localhost/dashboard/pfe/uploads/palmier.png'),
(64, 'arbre', 'http://localhost/dashboard/pfe/uploads/arbre.png'),
(65, 'fgf', 'http://localhost/dashboard/pfe/uploads/fgf.png'),
(66, 'arbora', 'http://localhost/dashboard/pfe/uploads/arbora.png'),
(67, 'arbora', 'http://localhost/dashboard/pfe/uploads/arbora.png'),
(68, 'dgg', 'http://localhost/dashboard/pfe/uploads/dgg.png'),
(69, 'dggaa', 'http://localhost/dashboard/pfe/uploads/dggaa.png'),
(70, 'laplante', 'http://localhost/dashboard/pfe/uploads/laplante.png'),
(71, 'laplante', 'http://localhost/dashboard/pfe/uploads/laplante.png'),
(72, 'menthe', 'http://localhost/dashboard/pfe/uploads/menthe.png'),
(73, 'fleur', 'http://localhost/dashboard/pfe/uploads/fleur.png');

-- --------------------------------------------------------

--
-- Structure de la table `plant`
--

CREATE TABLE `plant` (
  `id` int(11) NOT NULL,
  `sname` text NOT NULL,
  `cname` text NOT NULL,
  `family` text NOT NULL,
  `desc` text NOT NULL,
  `location` text NOT NULL,
  `Utilisation` varchar(40) NOT NULL,
  `img_path` text NOT NULL,
  `valid` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_clt` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plant`
--

INSERT INTO `plant` (`id`, `sname`, `cname`, `family`, `desc`, `location`, `Utilisation`, `img_path`, `valid`, `date`, `id_clt`) VALUES
(5, '3217', 'asaaaa', 'aazz', 'aaaaaa', 'aaaaz', '', 'http://localhost/dashboard/pfe/uploads/3217.png', 1, '2016-05-18', '14'),
(12, '7675', 'plante', 'plante', 'plante is a goood one', 'plante', '', 'http://localhost/dashboard/pfe/uploads/7675.png', 1, '2016-05-17', '14'),
(13, 'aers', 'aers', 'aers', 'aers', 'aers', '', 'a', 1, '2016-05-19', '17'),
(14, 'orangier', 'orangier', 'orangier', 'orangier', 'orangier', '', 'a', 1, '2016-05-19', '17'),
(15, 'tomate', 'tomate', 'tomate', 'tomate', 'tomate', 'tomate', 'uploads/tomate.png', 1, '2016-06-05', '17'),
(22, 'herbe', 'herbe', 'herbe', 'herbe', 'herbe', 'herbe', 'uploads/herbe.png', 1, '2016-06-05', '17'),
(23, 'palmier', 'palmier', 'palmier', 'palmier', 'palmier', 'palmier', 'uploads/palmier.png', 1, '2016-06-05', '17'),
(24, 'arbre', 'arbre', 'arbre', 'arbre', 'arbre', 'arbre', 'uploads/arbre.png', 1, '2016-06-05', '17'),
(26, 'fgf', 'ftg', 'fgf', 'fgf', 'fgf', 'fgf', 'uploads/fgf.png', 0, '2016-06-07', '17'),
(27, 'arbora', 'arbora', 'arbora', 'arbora', 'arbora', 'arbora', 'uploads/arbora.png', 0, '2016-06-10', '17'),
(29, 'dgg', 'dgg', 'dgg', 'dgg', 'dgg', 'dgg', 'uploads/dgg.png', 1, '2016-06-10', '17'),
(30, 'dggaa', 'dggaa', 'dggaa', 'dggaa', 'dggaa', 'dggaa', 'uploads/dggaa.png', 1, '2016-06-10', '25'),
(31, 'laplante', 'laplante', 'laplante', 'laplante', 'laplante', 'laplante', 'uploads/laplante.png', 0, '2016-06-13', '17'),
(32, 'laplante', 'laplante', 'laplante', 'laplante', 'laplante', 'laplante', 'uploads/laplante.png', 0, '2016-06-13', '17'),
(33, 'menthe', 'menthe ', 'menthe', 'menthe', 'menthe', 'menthe', 'uploads/menthe.png', 0, '2016-06-13', '17'),
(34, 'fleur', 'fleur ', 'fleur', 'fleur', 'fleur', 'fleur', 'uploads/fleur.png', 1, '2016-06-13', '14');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT pour la table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

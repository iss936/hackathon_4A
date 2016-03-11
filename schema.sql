-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Mars 2016 à 13:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `contenu` text NOT NULL,
  `authorId` int(11) NOT NULL,
  `catArticleId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `authorId` (`authorId`),
  KEY `catArticleId` (`catArticleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `createdAt`, `updatedAt`, `contenu`, `authorId`, `catArticleId`) VALUES
(1, 'ccddd', '2016-03-09 17:49:37', '2016-03-09 17:49:37', 'csfze', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `catarticle`
--

CREATE TABLE IF NOT EXISTS `catarticle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `catarticle`
--

INSERT INTO `catarticle` (`id`, `nom`) VALUES
(1, 'zzzzz'),
(2, 'lol');

-- --------------------------------------------------------

--
-- Structure de la table `catdemande`
--

CREATE TABLE IF NOT EXISTS `catdemande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `catdemande`
--

INSERT INTO `catdemande` (`id`, `nom`) VALUES
(1, 'réservation'),
(2, 'bar'),
(3, 'wifi'),
(4, 'garage');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `authorId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `authorId` (`authorId`),
  KEY `articleId` (`articleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `createdAt`, `updatedAt`, `contenu`, `authorId`, `articleId`) VALUES
(1, '2016-03-11 11:15:31', '2016-03-11 11:15:31', 'sss<br>', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `catDemandeId` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catDemandeId` (`catDemandeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`id`, `sujet`, `createdBy`, `catDemandeId`, `createdAt`) VALUES
(32, 'Comment Activer le wifi ?', 'admin', 3, '2016-03-09 17:25:59'),
(39, 'Comment annuler une réservation ?', 'hotel-paris', 1, '2016-03-10 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `demandediscution`
--

CREATE TABLE IF NOT EXISTS `demandediscution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idDemande` int(11) NOT NULL,
  `emmeteurId` int(11) NOT NULL,
  `destinataireId` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `terminer` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idDemande` (`idDemande`),
  KEY `emmeteurId` (`emmeteurId`),
  KEY `destinataireId` (`destinataireId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `demandediscution`
--

INSERT INTO `demandediscution` (`id`, `idDemande`, `emmeteurId`, `destinataireId`, `createdAt`, `updatedAt`, `terminer`) VALUES
(8, 32, 1, 3, '2016-03-09 17:26:02', '2016-03-09 17:26:02', 0),
(9, 39, 2, 3, '2016-03-10 00:00:00', '2016-03-10 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messagedemande`
--

CREATE TABLE IF NOT EXISTS `messagedemande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idDemandeDiscution` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `contenu` text NOT NULL,
  `auteurId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idDemandeDiscution` (`idDemandeDiscution`),
  KEY `auteurId` (`auteurId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `messagedemande`
--

INSERT INTO `messagedemande` (`id`, `idDemandeDiscution`, `createdAt`, `contenu`, `auteurId`) VALUES
(2, 8, '2016-03-09 17:26:02', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500,', 1),
(3, 9, '2016-03-10 00:00:00', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500,', 2),
(32, 9, '2016-03-11 11:02:13', 'quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment,', 1),
(35, 8, '2016-03-11 00:00:00', 'Contrairement à une opinion répandue, le Lorem Ipsum n''est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `souscatarticle`
--

CREATE TABLE IF NOT EXISTS `souscatarticle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `catArticleId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catArticleId` (`catArticleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `souscatdemande`
--

CREATE TABLE IF NOT EXISTS `souscatdemande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `catDemandeId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catDemandeId` (`catDemandeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isExpired` tinyint(1) NOT NULL,
  `telPro` varchar(15) DEFAULT NULL,
  `mailPro` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `photo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `password`, `isExpired`, `telPro`, `mailPro`, `roles`, `photo`) VALUES
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, NULL, 'admin@bestwestern.fr', 'ROLE_ADMIN', NULL),
(2, 'hotel-paris', 'hotel-paris', 'hotel-paris', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, '0125232565', 'hotel-paris@bestwestern.fr', 'ROLE_HOTEL', NULL),
(3, 'hotel-marseille', 'hotel-marseille', 'hotel-marseille', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, '0125232567', 'hotel-marseille@bestwestern.fr', 'ROLE_HOTEL', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`catArticleId`) REFERENCES `catarticle` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`articleId`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`catDemandeId`) REFERENCES `catdemande` (`id`);

--
-- Contraintes pour la table `demandediscution`
--
ALTER TABLE `demandediscution`
  ADD CONSTRAINT `demandediscution_ibfk_1` FOREIGN KEY (`idDemande`) REFERENCES `demande` (`id`),
  ADD CONSTRAINT `demandediscution_ibfk_2` FOREIGN KEY (`emmeteurId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `demandediscution_ibfk_3` FOREIGN KEY (`destinataireId`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `messagedemande`
--
ALTER TABLE `messagedemande`
  ADD CONSTRAINT `messagedemande_ibfk_2` FOREIGN KEY (`auteurId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `messagedemande_ibfk_1` FOREIGN KEY (`idDemandeDiscution`) REFERENCES `demandediscution` (`id`);

--
-- Contraintes pour la table `souscatarticle`
--
ALTER TABLE `souscatarticle`
  ADD CONSTRAINT `souscatarticle_ibfk_1` FOREIGN KEY (`catArticleId`) REFERENCES `catarticle` (`id`);

--
-- Contraintes pour la table `souscatdemande`
--
ALTER TABLE `souscatdemande`
  ADD CONSTRAINT `souscatdemande_ibfk_1` FOREIGN KEY (`catDemandeId`) REFERENCES `catdemande` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

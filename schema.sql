-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 07 Décembre 2015 à 10:50
-- Version du serveur :  5.5.42-log
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `concoursphotos`
--

-- --------------------------------------------------------

CREATE TABLE catDemande (
	id int(11) NOT NULL,
	nom varchar(50) NOT NULL,
	PRIMARY KEY (id)
) ;

CREATE TABLE sousCatDemande (
	id int(11) NOT NULL,
	nom varchar(50) NOT NULL,
	catDemandeId int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (catDemandeId) REFERENCES catDemande(id)
) ;

CREATE TABLE catArticle (
	id int(11) NOT NULL,
	nom varchar(50) NOT NULL,
	PRIMARY KEY (id)
) ;

CREATE TABLE sousCatArticle (
	id int(11) NOT NULL,
	nom varchar(50) NOT NULL,
	catArticleId int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (catArticleId) REFERENCES catArticle(id)
) ;

-- CREATE TABLE `etablissement` (
-- 	`id` int(11) NOT NULL,
-- 	`nom` varchar(255) NOT NULL,
-- 	`adresse` varchar(150) NOT NULL,
-- 	`ville` varchar(50) NOT NULL,
-- 	`codePostal` int(50) NOT NULL,
-- 	`pays` varchar(50) NOT NULL,
-- 	`photo` varchar(25) NOT NULL,
-- 	`isSiege` boolean NOT NULL, -- 0 hotel et 1 siege
-- 	PRIMARY KEY (id)
-- );
--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) AUTO_INCREMENT NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isExpired` boolean NOT NULL,
  `telPro` int(11) NULL,
  `mailPro` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `photo` varchar(25) NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (etablissementId) REFERENCES etablissement(id)
); 

-- login = admin, password = mdp
INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `password`, `isExpired`, `telPro`, `mailPro`, `roles`, `photo`) VALUES
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, NULL, 'admin@bestwestern.fr', 'ROLE_ADMIN', NULL);

CREATE TABLE `article` (
	`id` int(11) NOT NULL,
	`titre` varchar(50) NOT NULL,
	`createdAt` datetime NOT NULL,
	`updatedAt` datetime NOT NULL,
	`contenu` text NOT NULL,
	`authorId` int(11) NOT NULL,
	`catArticleId` int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (authorId) REFERENCES user(id),
	FOREIGN KEY (catArticleId) REFERENCES catArticle(id)
) ;

CREATE TABLE `commentaire` (
	id int(11) NOT NULL,
	createdAt datetime NOT NULL,
	updatedAt datetime NOT NULL,
	contenu varchar(255) NOT NULL,
	authorId int(11) NOT NULL,
	articleId int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (authorId) REFERENCES user(id),
	FOREIGN KEY (articleId) REFERENCES article(id)
);

CREATE TABLE demande (
	id int(11) NOT NULL,
	createdAt datetime NOT NULL,
	updatedAt datetime NOT NULL,
	contenu varchar(255) NOT NULL,
	emmeteurId int (11) NOT NULL,
	destinataireId int (11) NOT NULL,
	catDemandeId int(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (emmeteurId) REFERENCES user(id),
	FOREIGN KEY (destinataireId) REFERENCES user(id),
	FOREIGN KEY (catDemandeId) REFERENCES catDemande(id)
);

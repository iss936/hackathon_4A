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

  PRIMARY KEY (id)
); 

-- login = admin, password = mdp
INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `password`, `isExpired`, `telPro`, `mailPro`, `roles`, `photo`) VALUES
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, NULL, 'admin@bestwestern.fr', 'ROLE_ADMIN', NULL);

CREATE TABLE 'etablissement' (
	'id' int(11) NOT NULL,
	'nom' varchar(255) NOT NULL,
	'adresse' varchar(150) NOT NULL,
	'ville' varchar(50) NOT NULL,
	'codePostal' int(50) NOT NULL,
	'pays' varchar(50) NOT NULL,
	'photo' varchar(25) NOT NULL,
	'isSiege' boolean NOT NULL, -- 0 hotel et 1 siege
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES user(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'article' (
	'id' int(11) NOT NULL,
	'objet' varchar(50) NOT NULL,
	'create_at' datetime NOT NULL,
	'update_at' datetime NOT NULL,
	'texte' varchar(255) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES user(id),
	FOREIGN KEY (cat_article_id) REFERENCES cat_article(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'commentaire' (
	'id' int(11) NOT NULL,
	'create_at' datetime NOT NULL,
	'update_at' datetime NOT NULL,
	'texte' varchar(255) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES user(id),
	FOREIGN KEY (article_id) REFERENCES article(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'demande' (
	'id' int(11) NOT NULL,
	'create_at' datetime NOT NULL,
	'update_at' datetime NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (cat_demande_id) REFERENCES cat_demande(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'cat_demande' (
	'id' int(11) NOT NULL,
	'nom' varchar(50) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'sous_cat_demande' (
	'id' int(11) NOT NULL,
	'nom' varchar(50) NOT NULL,
	PRIMARY KEY (id)
	FOREIGN KEY (cat_demande_id) REFERENCES cat_demande(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'cat_article' (
	'id' int(11) NOT NULL,
	'nom' varchar(50) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'sous_cat_article' (
	'id' int(11) NOT NULL,
	'nom' varchar(50) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (cat_article_id) REFERENCES cat_article(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
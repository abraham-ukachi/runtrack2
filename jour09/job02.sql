-- phpMyAdmin SQL Dump (modified)
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2022 at 01:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6
-- 
-- ===============================================
--
-- Job: 02
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job01.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job02.sql > output.tab
-- 
--
-- ======== Job 02 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ajoutez maintenant des informations dans votre base de données. 
--  Créez les champs et les étudiants suivants dans une table “etudiants”: 
--
--  prenom, nom, naissance, sexe, email :
--  ● Cyril, Zimmermann, 1989-01-02, Homme, cyril@laplateforme.io
--  ● Jessica, Soriano, 1995-09-08, Femme, jessica@laplateforme.io
--  ● Roxan, Roumégas, 2016-09-08, Homme, roxan@laplateforme.io
--  ● Pascal, Assens, 1999-12-31, Homme, pascal@laplateforme.io
--  ● Terry, Cristinelli, 2005-02-01, Homme, terry@laplateforme.io
--  ● Ruben, Habib, 1993-05-26, Homme, ruben.habib@laplateforme.io
--  ● Toto, Dupont, 2019-11-07, Homme, toto@laplateforme.io
--  
--
-- - Créez les champs et les étages suivants dans une table “etages”:
--
--  id, nom, numero, superficie :
--  ● 1, RDC, 0, 500
--  ● 2, R+1, 1, 500
--
-- - Créez les champs et les salles suivantes dans une table “salles”:
--  
--  id, nom, etage, capacite :
--  ● 1, Lounge, 1, 100
--  ● 2, Studio Son, 1, 5
--  ● 3, Broadcasting, 2, 50
--  ● 4, Bocal Peda, 2, 4
--  ● 5, Coworking, 2, 80
--  ● 6, Studio Video, 2, 5
--
-- - Exportez votre base de données en utilisant la méthode d’exportation rapide, renommez
--  là "job 02.sql" et ajoutez la à votre répertoire de rendu.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Now add information to your database. 
--  Create the following fields and students in a “students” table:
--
--  first name, last name, birth, gender, email:
--  ● Cyril, Zimmermann, 1989-01-02, Man, cyril@laplateforme.io
--  ● Jessica, Soriano, 1995-09-08, Woman, jessica@laplateforme.io
--  ● Roxan, Roumégas, 2016-09-08, Man, roxan@laplateforme.io
--  ● Pascal, Assens, 1999-12-31, Man, pascal@laplateforme.io
--  ● Terry, Cristinelli, 2005-02-01, Man, terry@laplateforme.io
--  ● Ruben, Habib, 1993-05-26, Man, ruben.habib@laplateforme.io
--  ● Toto, Dupont, 2019-11-07, Man, toto@laplateforme.io
--
--
-- - Create the following fields and floors in a “floors” table:
--
--  id, name, number, area:
--  ● 1, ground floor, 0, 500
--  ● 2, R+1, 1, 500
--
--
-- - Create the following fields and rooms in a “rooms” table:
--  id, name, floor, capacity:
--
--  ● 1, Lounge, 1, 100
--  ● 2, Sound Studio, 1, 5
--  ● 3, Broadcasting, 2, 50
--  ● 4, Jar Peda, 2, 4
--  ● 5, Coworking, 2, 80
--  ● 6, Studio Video, 2, 5
--
-- - Export your database using the quick export method, rename
--  there "job 02.sql" and add it to your render directory.
--
-- ============================
-- IMPORTANT:  
-- ============================
--
--
--
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- MOTTO: I'll always do more 😜!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
--
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jour09`
--
CREATE DATABASE IF NOT EXISTS `jour09` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4 utf8mb4_general_ci;
USE `jour09`;

-- --------------------------------------------------------

--
-- Table structure for table `etages`
--

CREATE TABLE `etages` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `superficie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etages`
--

INSERT INTO `etages` (`id`, `nom`, `numero`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `sexe` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(4, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(5, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(6, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
(7, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

CREATE TABLE `salles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `etage` int(11) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `etage`, `capacite`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);

--
-- Indexes for table `etages`
--
ALTER TABLE `etages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `etages`
--
ALTER TABLE `etages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3; 

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

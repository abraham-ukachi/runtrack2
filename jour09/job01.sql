-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2022 at 11:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6
-- 
-- ===============================================
--
-- Job: 01
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job01.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job01.sql > output.tab
-- 
--
-- ======== Job 01 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - A l’aide de phpmyadmin, créez une base de données nommée “jour09”. 
--   Créez une table nommée “etudiants” ayant comme champs :
--
--    ● id, int, clé primaire et Auto Incrément
--    ● prenom, varchar de taille 255
--    ● nom, varchar de taille 255
--    ● naissance, date
--    ● sexe, varchar de taille 25
--    ● email, varchar de taille 255
--
-- - Créez une table nommée “etages” ayant comme champs :
--    ● id, int, clé primaire et Auto Incrément
--    ● nom, varchar de taille 255
--    ● numero, int
--    ● superficie, int
--
-- - Créez une table nommée “salles” ayant comme champs :
--    ● id, int, clé primaire et Auto Incrément
--    ● nom, varchar de taille 255
--    ● id_etage, int
--    ● capacite, int
--
-- - Exportez votre base de données en utilisant la méthode d’exportation rapide, 
--   renommez là "job 01.sql" et ajoutez la à votre répertoire de rendu.
--
-- ~~~~~~~~ (English) ~~~~~~~~
-- 
-- - Using phpmyadmin, create a database named “jour09”. Create a table named “students” 
--   having as fields:
--
--    ● id, int, primary key and Auto Increment
--    ● firstname, varchar of size 255
--    ● name, varchar of size 255
--    ● birth, date
--    ● sex, size 25 varchar
--    ● email, varchar of size 255
--
--
-- - Create a table named "floors" having as fields:
--
--    ● id, int, primary key and Auto Increment
--    ● name, varchar of size 255
--    ● number, int
--    ● area, int
--
-- - Create a table named "rooms" having as fields:
--
--    ● id, int, primary key and Auto Increment
--    ● name, varchar of size 255
--    ● floor, int
--    ● capacity, int
--
-- - Export your database using the quick export method, rename it 
--   "job 01.sql" and add it to your render directory.
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
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etages`
--
ALTER TABLE `etages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

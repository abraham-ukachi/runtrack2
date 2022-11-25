--
-- Job: 04
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job04.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job4.sql > output.tab
-- 
--
-- ======== Job 04 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job04.sql” une requête permettant de sélectionner 
--   le nom et la capacite de la table “salles”.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job04.sql” file a query to select the name and capacity of the “rooms” table.
--
-- ============================
-- NOTE: This was a piece of piece of cake \(^^)/ 
-- ============================
--
--
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- MOTTO: I'll always do more 😜!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
--
--



--
-- Database: `jour09`
--

-- --------------------------------------------------------

--
-- Select all the [name] and [capacite] of the `etudiant` table
--
SELECT nom, capacite FROM `etudiants`; -- <- A one-liner is always appreciated! :)


--
-- Job: 13
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job13.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job13.sql > output.tab
-- 
--
-- ======== Job 13 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job13.sql” une requête permettant de 
--   sélectionner la capacité moyenne des salles.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job13.sql” file a query to select the average capacity of the rooms.
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
-- SQL statement that selects the average "capacite" from the `salles` table, 
--
SELECT AVG(capacite) FROM `salles`;  --> A one-liner is always appreciated! :)
-- returns 40.6667

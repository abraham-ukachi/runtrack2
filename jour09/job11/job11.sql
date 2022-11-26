--
-- Job: 11
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job11.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job11.sql > output.tab
-- 
--
-- ======== Job 11 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job11.sql” une requête permettant de sélectionner 
--   la somme des capacités des salles.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job11.sql” file a query to select the sum of the room capacities.
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
-- SQL statement to find the sum of the "capacite" field in `salles` table: 
--
SELECT SUM(capacite) FROM `salles`;  --> A one-liner is always appreciated! :)
-- returns 244

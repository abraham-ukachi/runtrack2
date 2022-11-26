--
-- Job: 10
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job10.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job10.sql > output.tab
-- 
--
-- ======== Job 10 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job10.sql” une requête permettant de 
--   calculer la superficie de l’ensemble des étages.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job10.sql” file a query to calculate the area of all the floors.
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
-- SQL statement to find the sum of the "superficie" field in `salles` table: 
--
SELECT SUM(superficie) FROM `salles`; --> A one-liner is always appreciated! :)
-- returns 1000

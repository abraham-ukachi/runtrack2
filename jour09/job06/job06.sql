--
-- Job: 06
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job06.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job6.sql > output.tab
-- 
--
-- ======== Job 06 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job06.sql” une requête permettant de 
--   sélectionner l’ensemble des informations des étudiants dont prenom commence par un “T”.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job 06.sql” file a query to select all the information of the 
--   students whose first name begins with a “T”.
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
-- Select all the columns of the `etudiants` table, 
-- where [prenom](first name) starts with a 'T'
--
SELECT * FROM `etudiants` WHERE prenom LIKE 'T%';
-- ^^^^^ A one-liner is always appreciated! :)


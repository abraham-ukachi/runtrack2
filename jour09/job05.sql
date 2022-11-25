--
-- Job: 05
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job05.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job5.sql > output.tab
-- 
--
-- ======== Job 05 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job05.sql” une requête permettant de sélectionner le prenom, 
--   le nom et la date de naissance des étudiants de sexe féminin. 
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job05.sql” file a query to select the first name, 
--   last name and date of birth of female students.
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
-- Select all the columns [prenom], [nom] and [naissance] columns 
-- of the `etudiants` table, where [sexe] is 'Femme' (i.e. woman)
--
SELECT prenom, nom, naissance FROM `etudiants` WHERE sexe = 'Femme';
-- ^^^^^ A one-liner is always appreciated! :)


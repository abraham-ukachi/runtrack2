--
-- Job: 14
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job14.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job14.sql > output.tab
-- 
--
-- ======== Job 14 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job14.sql” une requête permettant de sélectionner le prenom, 
--   le nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job14.sql” file a query to select the first name, last name and date 
--   of birth of students who were born between 1998 and 2018.
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
-- SQL statement that selects "prenom", "nom" & "naissance" from the `salles` table,
-- where the **year** of birth is between 1998 and 2018.
--
SELECT prenom, nom, naissance FROM `etudiants` WHERE YEAR(naissance) BETWEEN 1998 AND 2018;
-- ^^^^^^^^ A one-liner is always appreciated! :)
-- returns:
--
-- | prenom |     nom     | naissance  |
-- |:-------|:------------|:-----------|
-- | Roxan  | Roumégas    | 2016-09-08 |
-- | Pascal | Assens      | 1999-12-31 |
-- | Terry  | Cristinelli | 2005-02-01 |

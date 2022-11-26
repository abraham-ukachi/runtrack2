--
-- Job: 08
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job08.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job08.sql > output.tab
-- 
--
-- ======== Job 08 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job08.sql” une requête permettant de compter le nombre d’étudiants.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job08.sql” file a query to count the number of students.
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
-- Count the number of students or rows of `etudiants` table.
--
SELECT COUNT(*) FROM `etudiants`; --> A one-liner is always appreciated! :)
-- returns 7

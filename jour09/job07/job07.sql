--
-- Job: 07
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job07.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job07.sql > output.tab
-- 
--
-- ======== Job 07 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job07.sql” une requête permettant de sélectionner 
--   l’ensemble des informations des étudiants qui ont plus de 18 ans.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job07.sql” file a query to select all the information of 
--   students who are over 18 years old.
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
-- Select all the columns or info of students 
-- or `etudiant` table over 18 years. 
--
--
SELECT * FROM `etudiants` WHERE YEAR(naissance) < YEAR(CURDATE()) - 18;
-- ^^^^^ A one-liner is always appreciated! :)
--      `YEAR()` - this built-in SQL function is used to get only the year we want to work with
--                 (i.e. YEAR('1993-05-26') will return '1993')
--      `CURDATE()` - this built-in SQL function returns today's current date (e.g '2022-11-26')
--
--      [condition](WHERE): 
--        (YEAR('1993-05-26') < YEAR(CURDATE()) - 18) === (1993 < (2022) - 18) === (1993 < 2004)

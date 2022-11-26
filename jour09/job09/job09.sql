--
-- Job: 09
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job08.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job09.sql > output.tab
-- 
--
-- ======== Job 09 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job09.sql” une requête permettant de sélectionner 
--   l’ensemble des informations des étudiants qui ont moins de 18 ans.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job09.sql” file a query to select all the information of 
--   students who are under 18 years old.
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
-- Select all the columns or info of `etudiant` table less than 18 years. 
--
SELECT * FROM `etudiants` WHERE YEAR(naissance) > YEAR(CURDATE()) - 18;
-- ^^^^^ A one-liner is always appreciated! :)
--      `YEAR()` - this built-in SQL function is used to get only the year we want to work with
--                 (i.e. YEAR('2016-09-08') will return '2016')
--      `CURDATE()` - this built-in SQL function returns today's current date (e.g '2022-11-26')
--
--      [condition](WHERE): 
--        (YEAR('2016-09-08') > YEAR(CURDATE()) - 18) === (2016 > (2022) - 18) === (2016 > 2004)

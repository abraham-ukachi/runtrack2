--
-- Job: 12
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job12.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job12.sql > output.tab
-- 
--
-- ======== Job 12 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job12.sql” une requête permettant de sélectionner 
--   l’ensemble des salles en les triant par capacité décroissante.
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job12.sql” file a query to select all the rooms by 
--   sorting them by decreasing capacity
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
-- SQL statement that selects all "capacite" from the `salles` table, 
-- sorted by the "capacite" column in descending / DESC order
--
SELECT * FROM `salles` ORDER BY capacite DESC;  --> A one-liner is always appreciated! :)
-- returns:
--
-- | id |     nom     | etage | capacite |
-- |:---|:------------|:------|:---------|
-- | 1  | Lounge      |   1   |    100   |
-- | 5  | Cowording   |   2   |     80   |
-- | 3  | Broadcasting|   2   |     50   |
-- | 2  | Studio Son  |   1   |      5   |
-- | 6  | Studio Video|   2   |      5   |
-- | 4  | Bocal Peda  |   2   |      4   |
--

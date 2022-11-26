--
-- Job: 15
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job15.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job15.sql > output.tab
-- 
--
-- ======== Job 15 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job15.sql” une requête permettant de 
--   récupérer le nom des salles et le nom de leur étage. 
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write a query in the “job15.sql” file to retrieve the name of 
--   the rooms and the name of their floor. 
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
-- SQL statement that selects "nom" from the `salles` table,
-- and its corresponding "nom" from the `etage` table,
--
SELECT room.nom, storey.nom FROM `salles` AS room 
  JOIN `etages` AS storey 
  ON room.etage = storey.id;
-- ^^^^ `JOIN` - an SQL query that allows use to retrieve fields from multiple table.
--
-- returns:
-- |   nom(room)  | nom(storey) |
-- |:-------------|:------------|
-- | Lounge       |   RDC       |
-- | Studio Son   |   RDC       |
-- | Broadcasting |   R+1       |
-- | Bocal Peda   |   R+1       |
-- | Coworking    |   R+1       |
-- | Studio Video |   R+1       |

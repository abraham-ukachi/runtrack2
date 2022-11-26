--
-- Job: 16
-- Day: 09 - (Thursday)
-- Name: Jour 9 - Hello SQL
-- File: job16.sql
-- Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
-- Version: 0.0.1
--
-- Usage:
--  1-|> mysql jour09 < job16.sql > output.tab
-- 
--
-- ======== Job 16 ==========
--    >>> DESCRIPTION <<<		
-- ~~~~~~~~ (French) ~~~~~~~~~
-- 
-- - Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de 
--   l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de 
--   cette salle ainsi que sa capacité).
--
-- - Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room” 
--
-- ~~~~~~~~ (English) ~~~~~~~~
--  
-- - Write in the “job16.sql” file a query to retrieve the name of the floor having the 
--   room with the largest capacity (and also display the name of this room as well as its capacity).
--
-- - In this result, the “name” column of the room should be renamed to “Biggest Room” 
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
-- SQL statement that retreives the name of the floor with the largest room capacity, 
-- displays the name and capacity of said room, and renames the room's name to "Biggest Room".
--
SELECT floor.nom, -- selects the "nom" from the `floor` or `etages` table
  room.nom AS 'Biggest Room', -- rename the "nom" column from the `room` table to "Biggest Room" 
  room.capacite -- selects "capacite" column...
  FROM `etages` AS floor  -- ...from `etages` table & rename or define the `etages` table as `floor`
  INNER JOIN `salles` AS room  -- `INNER JOIN` selects all records from the two tables,
                               --              where there is a match in both tables &
                               --              rename or define the `salles` table as `room`
  ON floor.id = room.etage -- `ON` --  defines the join condition
  ORDER BY room.capacite DESC -- `ORDER BY ... DESC` sorts the result-set by the "capacite"
                              --                     from the `room` in descending order
  LIMIT 1; -- gets the first row out of the ordered / descending result.
-- 
-- returns:
-- |  nom | Biggest Room | сapacite |
-- |:-----|:-------------|:---------|
-- | RDC  |  Lounge      |   100    |

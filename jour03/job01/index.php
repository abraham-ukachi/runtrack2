<?php
/*
* Name: 'Jour 3 - Tableaux'
* Job: 01
* Day: 03 - (Wednesday)
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour03/job01/index.php
*
*
* ======== Job 01 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créer un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459. 
* 	Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou 
* 	“X est impaire<br />”, sur votre page index.php. X prenant tour à tour chacune 
* 	des valeurs comprises dans ce tableau.
*
*   Ex. : 
*
*   200 est paire
*   204 est paire
*   173 est impaire
*   98 est paire
*   171 est impaire
*   404 est paire
*   459 est impaire
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a table containing the numbers 200, 204, 173, 98, 171, 404, 459. 
*   Go through this table and display for each number “X is even<br />” or “X is odd<br />”, 
*   on your page index.php. X taking in turn each of the values included in this table.
*
*   Example :
*
*   200 is even
*   204 is even
*   173 is odd
*   98 is even
*   171 is odd
*   404 is even
*   459 is odd
* 	    
* ============================
* WARNING: This task/job was done in a hurry; my code is therefore not as 'pretty'. #LOL
* ============================
*/

/*
* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
* !MOTTO: I'll always do more 😜 !!
* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/





// Create a 'short syntax array' or list of the aforementioned numbers as `numList`
$numList = [200, 204, 173, 98, 171, 404, 459];

// For each number (i.e `num`) in `numList`...
foreach($numList as $num) {
  // ...if `num` can be divided by 2...
  if (($num % 2) === 0) {
  // ...tell the world it is an *EVEN* number (in french)
  echo "<p style='color: blue'>$num est <strong>PAIRE</strong></p>"; // <- blue paragraph
  
  } else {
    // tell the world that `num` is an *ODD* number (in french)
    echo "<p style='color: red'>$num est <strong>IMPAIRE</strong></p>"; // <- red paragraph
  }

}

?>

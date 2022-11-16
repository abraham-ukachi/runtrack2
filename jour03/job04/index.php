<?php
/*
* Job: 04
* Day: 03 - (Wednesday)
* Name: 'Jour 3 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour03/job04/index.php
*
*
* ======== Job 04 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créez une variable de type string nommée $str et affectez y le texte : 
*
*   “Dans l'espace, personne ne vous entend crier”
*
*   Créez un algorithme qui parcourt, compte et affiche le nombre de 
*   caractères présents dans cette chaîne. 
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a string variable named $str and assign the text to it: 
*   
*   “In space, no one can hear you scream”
*
*   Create an algorithm that loops through, counts, and displays the 
*   number of characters in this string.
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


// NOTE: I'm not allowed to use `str_len()`, to get the length of the `str`.

// Create the `str` variable as instructed with the given / aformentioned string value
$str = "Dans l'espace, personne ne vous entend crier";

// Create and current index variable as `index`
$index = 0;

// Create a `count` variable
// IDEA: Start counting all the characters in `str` from 1 obv.
$count = 0;


do {

  // Get the character at the current index position as `char`
  $char = $str[$index];
  
  // Increase the `count` by 1 (only if `char` is not a space)
  $count += ($char != ' ') ? 1 : 0; // <- What can I say, "I love using 'ternary statements'"...Bite me!!!
  
  // DEBUG [4dbsmaster]: tell me about it :)
  // print "<p>index => $index & char => $char & count => $count</p>";
  // ^^^^^^^^ [FINAL_OUTPUT]: index => 48 & char => r & count => 38

  // Increment the `index` by 1
  $index += 1;

} while(isset($str[$index]));
//      ^^^^^ I'm only allowed to use this `isset()` function for this task. So, there you go ;)


// Show this `count` to anybody who cares
echo $count; // <- OUTPUT: 38


?>

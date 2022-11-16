<?php
/*
* Job: 03
* Day: 03 - (Wednesday)
* Name: 'Jour 3 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour03/job03/index.php
*
*
* ======== Job 03 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créer une variable de type string nommée $str et affectez y le texte :
*   “I'm sorry Dave I'm afraid I can't do that”.
*   Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
*   
*   Ex. : IoyaeIaaiIaoa
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a string variable named $str and assign the text to it:
*   “I'm sorry Dave I'm afraid I can't do that”.
*   Create an algorithm that iterates through this string and only displays the vowels.
* 
*   E.g.: IoyaeIaaiIaoa
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
$str = "I'm sorry Dave I'm afraid I can't do that";

// Let's create a list of all vowels (including uppercase)
$vowels = ['a', 'e', 'i', 'o', 'u', 'w', 'y', 'A', 'E', 'I', 'O', 'U', 'W', 'Y']; // <- sometimes W & Y are vowels 

// Create and current index variable as `index`
$index = 0;
// Intialize the `result` variable
$result = "";


do {

  // Get the character at the current index position as `char`
  $char = $str[$index];
  
  // For each `vowel` in the list of `vowels`...
  foreach($vowels as $vowel) {
    // ...If the current character (i.e. `char`) is a `vowel`...
    if ($char == $vowel) {
      // ...append `char` to `result`.
      $result .= $char;

      // DEBUG [4dbsmaster]: tell me about it :)
      // print "<p>index => $index & char => $char & vowel => $vowel</p>";

      // Break the loop!!! We don't have all day :)
      break;
    }

  }

  // Increment the `index` by 1
  $index += 1;

} while(isset($str[$index]));
//      ^^^^^ I'm only allowed to use this `isset()` function for this task. So, there you go ;)


// Tell the world about it wonderful `result`
echo $result;

?>

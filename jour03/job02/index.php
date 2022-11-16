<?php
/*
* Job: 02
* Day: 03 - (Wednesday)
* Name: 'Jour 3 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour03/job02/index.php
*
*
* ======== Job 01 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créer une variable de type string nommée $str et affectez y le texte :
* “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.” 
*
* Parcourir cette chaîne en affichant seulement un caractère sur deux.
* Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a string variable named $str and assign the text to it:
* “All those moments will be lost in time like tears in the rain.”
*
* Iterate through this string displaying only every other character.
* Example: Tu e ntnssrn edsdn etmscmelslre osl li.
*
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

// Initialize a `str` variable with the given / aformentioned text (in french). 
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Set the current index to 0
$currentIndex = 0;
// Create a switch variable
$switch = false;
// Create a `result` variable
$result = "";


// IDEA: Go through each character in `str`, and append the character to `result`, 
//       only when the `switch` is 'on' or true.

do {

  // Toggle the switch
  $switch = !$switch;

  // Get the value of the item or character at the current index
  $char = $str[$currentIndex];

  
  // DEBUG [4dbsmaster]: tell me about it :)
  // echo "<p>currentIndex => $currentIndex</p>";
  // echo "<p>char => $char</p>";
  // echo "<p>switch => $switch</p>";
  // echo "<br />";

  // Using a ternary statement, append the `char` to `result`; 
  // only if `switch` is `true`
  $result .= ($switch) ? $char : "";
  //         ^^     ^^: Just a preference, I know brackets aren't needed here ;)
    
  // Increment the current index by 1
  $currentIndex += 1;

} while(isset($str[$currentIndex])); 
//      ^^^^^ I'm only allowed to use the `isset()` built-in function, So..there u go ;)


// Print the result
print $result;

?>

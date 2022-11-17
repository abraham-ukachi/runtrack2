<?php
/*
* Job: 05
* Day: 03 - (Wednesday)
* Name: 'Jour 3 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour03/job05/index.php
*
*
* ======== Job 05 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créez une variable de type string nommée $str et affectez y le texte :
*
*   “On n’est pas le meilleur quand on le croit mais quand on le sait”.
*
* - Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys “consonnes” et “voyelles”. 
* - Créez un algorithme qui parcourt, compte et stocke le nombre d'occurrences de consonnes et de 
*   voyelles de $str.
* - Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et “Consonnes”..
*
* Ex.:
*    
*   | Consonnes | Voyelles |
*   |:==========|:=========|
*   | 28        | 22       |
*   
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a string variable named $str and assign the text to it:
*
*   “We are not the best when we believe it but when we know it”.
*
* - Create a dictionary (keys/values array) named $dic which has “consonants” and “vowels” as keys. 
* - Create an algorithm that loops through, counts, and stores the number of consonant and vowel 
*   occurrences of $str.
* - Display these results in an html <table> which has as <thead> “Vowels” and “Consonants”.*
*
* Example:
*
*   | Consonants | Vowels  |
*   |:===========|:========|
*   | 28         | 22      |
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


// NOTE: I'm not allowed to use `strlen()`, to get the length of the `str`.


// Let's create a couple of constant variables
$STR_CONSONANTS = "consonnes";
$STR_VOWELS = "voyelles";

// Define a string as `str`,
// and assign the value / text (in french) given above.
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Define a 'dictionary' or 'short syntax associative array' as `dic`,
// with 2 keys (i.e 'consonnes' & 'voyelles') as instructed. 
$dic = [$STR_CONSONANTS => 0, $STR_VOWELS => 0];

// NOTE: There are 6 vowels & 20 consonants in the french alphabet, 
// according to [Parlez Vous Francais](https://parlez-vous-francais.fr/orthographe/apprendre-lalphabet-francais/)

// So, let's create a list of all 6 vowels with their uppercase equivalent.
$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Let's also create a list of all 20 consonants with their uppercase equivalent.
$consonants = [
  'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 
  'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'
];

// Let's create a list 
// Create the current index variable as `index`.
$index = 0;


do {

  // Get the character at the current index position as `char`
  $char = $str[$index]; 

  // =>> VOWELS
  //
  // For each `vowel` in the list of `vowels`...
  foreach($vowels as $vowel) {
    // ...If the current character (i.e. `char`) is a `vowel`...
    if ($char === $vowel) {
      // ...increase or increment the vowel count in `dic` by 1
      $dic[$STR_VOWELS] += 1;

      // DEBUG [4dbsmaster]: tell me about it :)
      // print "<p>vowel => $vowel & dic['voyelles'] => " . $dic['voyelles'] . "</p>";

      // Break the loop!!! We don't have all day :)
      break;
    }

  }


  // => CONSONANTS
  //
  // For each `consonant` in the list of `consonants`...
  foreach($consonants as $consonant) {
    // ...If the current character (i.e. `char`) is a `consonant`...
    if ($char === $consonant) {
      // ...increase or increment the consonant count in `dic` by 1
      $dic[$STR_CONSONANTS] += 1;

      // DEBUG [4dbsmaster]: tell me about it :)
      // print "<p>consonant => $consonant & dic['consonants'] => " . $dic['consonants'] . "</p>";

      // Break the loop!!! We still don't have all day :)
      break;
    }

  }
 
  // Increment the `index` by 1
  $index += 1;

} while(isset($str[$index]));
//      ^^^^^ I'm only allowed to use this `isset()` function for this task. So, there you go ;)


// DEBUG [4dbsmaster]: tell me about the total number of vowels and consonants :)
// print "<p>there are <b>" . $dic['voyelles'] . "</b> vowels and <b>" . $dic['consonnes'] . "</b> consonants</p>";



// Define the total number of vowels in `str` as `totalVowels`
$totalVowels = $dic[$STR_VOWELS];
// Define the total number of consonants in `str` as `totalConsonants`
$totalConsonants = $dic[$STR_CONSONANTS];


// Create a table with some style (including <thead> & <tbody> elements) as `htmlTable`
$htmlTable = "
<table style='border: 2px solid; border-collapse: collapse; font-size: large;'>
  <thead style='background: lightblue; text-transform: capitalize;'>
    <tr>
      <th style='border: 2px solid;padding: 4px 8px;'>$STR_CONSONANTS</th>
      <th style='border: 2px solid;padding: 4px 8px;'>$STR_VOWELS</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td style='border: 2px solid;padding: 4px 8px;'>$totalConsonants</td>
      <td style='border: 2px solid;padding: 4px 8px;'>$totalVowels</td>
    </tr>
  </tbody>
</table>
";


// Display the `htmlTable`
echo $htmlTable;

?>

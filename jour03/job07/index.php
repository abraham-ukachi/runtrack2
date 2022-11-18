<?php
/*
* Job: 06
* Day: 03 - (Wednesday)
* Name: 'Jour 3 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour03/job06/index.php
*
*
* ======== Job 06 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créez une variable de type string nommée $str et affectez y le texte :
*   “Les choses que l'on possède finissent par nous posséder."
*
* - Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
*   Ex.: "redessop suon rap tnessinif edessop no'l euq sesohc seL"
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a string variable named $str and assign the text to it:
*   "The things we own end up owning us."
*
* - Create an algorithm that iterates over and writes this string backwards.
*   Ex.: "redessop suon rap tnessinif edessop no'l euq sesohc seL"
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


// Define a string as `str`,
// and assign the value / text (in french) given above.
$str = "Les choses que l'on possède finissent par nous posséder.";

// Create a reverse string variable
$reverseStr = "";

// Create the length index variable as `lengthIndex`.
$lengthIndex = 0;

// Define a variable for the length of `str` as `strLength`
// NOTE:  This is just for readability purposes. 
//        Just `lengthIndex` is enough to complete this task #IKnow :)
$strLength = 0;
// $strLength = foreach ($str as $char) {return };


// Calculating the length of the string (i.e. `str`), using a do while loop...

// for ($index = 0; $index 

do {
  // Increment the `strLength` by 1
  $strLength += 1;

  // DEBUG [4dbsmaster]: tell me about it :)
  //echo "<p>lengthIndex => $lengthIndex</p>";

} while(isset($str[$lengthIndex++]));
//      ^^^^^ I'm only allowed to use this `isset()` function for this task. So, there you go ;)


// Now, that we've got the length of the string (`strLength`),
// We're going to initialize a character index variable (`charIndex`), 
// and decrement it starting from the `strLength`.
for ($charIndex = ($strLength - 1); $charIndex >= 0; $charIndex--) {

  // Append the character at this `charIndex` to `reverseStr`
  $reverseStr .= $str[$charIndex];

  // DEBUG [4dbsmaster]: tell me about it :)
  //print "charIndex => $charIndex & reverseStr => $reverseStr";
}

// DEBUG [4dbsmaster]: tell me about it :)
// echo $reverseStr;

?><!DOCTYPE html>

<!-- HTML -->
<html lang="fr">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="A Runtrack Project">

    <title>Job06 | jour03 - runtrack</title>
  </head>
  <!-- End of Head -->

  <!-- BODY -->
  <body>
    <?php echo $reverseStr; ?> 
  </body>
  <!-- End of BODY -->
</html>
<!-- End of HTML -->

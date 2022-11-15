<?php
/*
 * Name: 'Job 01'
 * Script: index.php
 * Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
 * Version: -
 * 
 * Usage:
 *		1-|> open http://localhost/runtrack2/jour01/job01/index.php
 *
 *
 * ======== Job 01 ==========
 * 			>>> DESCRIPTION <<<		
 * ~~~~~~~~ (French) ~~~~~~~~~
 *
 * 	-	Dans le fichier runtrack2/jour01/job01, créer un fichier index.php. 
 *		Dans ce fichier, créer une variable nommée str. Affectez lui la valeur “LaPlateforme”.
 *		Affichez le contenu de la variable str. Créer une variable str2 contenant “Vive” 
 *		et une variable str3 contenant “!”. Affichez “Vive LaPlateforme !” en concaténant 
 *		l’ensemble de ces variables.
 *
 * ~~~~~~~~ (English) ~~~~~~~~
 * 
 * 	- In the runtrack2/jour01/job01 file, create an index.php file. In this file, 
 *		create a variable named str. Assign it the value “LaPlateforme”. Display the 
 *		contents of the str variable. Create a variable str2 containing “Vive” and a 
 *		variable str3 containing “!”. Display “Vive LaPlateforme!” by concatenating all of 
 *		these variables.
 *
 * ============================
 */

/* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * MOTTO: I'll always do more 😜 !!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */


// Initializing some variables...

// Create the `str` variable 
$str = "LaPlateforme";
// Create the `str2` variable
$str2 = "Vive";
// Create the `str3` variable
$str3 = "!";

// Display the value of `str`
echo $str;

// Concatenate or combine all previously created variables as `concatStr`
$concatStr = $str2 . ' ' . $str . $str3; // <- We want to display "Vive LaPlateforme !"

// Display the concatenated string (i.e. `concatStr`)
echo "<br>" . $concatStr;
//	 ^^^^ This `<br>` element specifies a line-break, and should 
//				allow `$concatStr` to be displayed below `$str`

?>

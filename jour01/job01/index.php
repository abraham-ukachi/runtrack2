<?php
/*
 * Name: 'Job 01'
 * File: index.php
 * Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
 * Version: -?-
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
 *	-	Créez une variable nommée val. Affecter à cette variable la valeur 6. 
 *		Affichez le contenu de la variable. Ajoutez 4 à cette variable. 
 *		Affichez à nouveau le contenu.
 *
 *	-	Créer une variable myBool, affectez à cette variable true, affichez le contenu 
 *		de la variable. Affectez false à la variable et affichez à nouveau le contenu.
 *
 * ~~~~~~~~ (English) ~~~~~~~~
 * 
 * 	- In the runtrack2/jour01/job01 file, create an index.php file. In this file, 
 *		create a variable named str. Assign it the value “LaPlateforme”. Display the 
 *		contents of the str variable. Create a variable str2 containing “Vive” and a 
 *		variable str3 containing “!”. Display “Vive LaPlateforme!” by concatenating all of 
 *		these variables.
 *
 *	-	Create a variable named val. Assign this variable the value 6. 
 *		Display the content of the variable. Add 4 to this variable. 
 *		Display the content again.
 *
 *	-	Create a myBool variable, set this variable to true, display the content of 
 *		the variable. Set the variable to false and display the content again.
 *
 * ============================
 */

/* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * MOTTO: I'll always do more 😜 !!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */


/* ==<< Task #1 >>== */

// Initializing some variables...

// Create the `str` variable 
$str = "LaPlateforme";
// Create the `str2` variable
$str2 = "Vive";
// Create the `str3` variable
$str3 = "!";
// Concatenate or combine all previously created variables as `concatStr`
$concatStr = $str2 . ' ' . $str . $str3; // <- We want to display "Vive LaPlateforme !"


// Display the value of `str`
echo $str;

// Display the concatenated string (i.e. `concatStr`)
echo "<br>" . $concatStr;
//	 ^^^^ This `<br>` element specifies a line-break, and should 
//				allow `concatStr` to be displayed below `str`

/* ==<< END of Task #1 >>== */




/* ==<< Task #2 >>== */

echo '<br>'; // <- Let's go to the next line

// Assign 6 to a new variable `val`
$val = 6;

// Display the value of `val`
echo $val;

// Increment the value of `val` by 4
$val += 4;

// Display again the value of `val`
echo $val;

/* ==>> END of Task #2 <<== */




/* ==<< Task #3 >>== */

// Create a variable 

/* ==>> END of Task #3 <<== */


?>

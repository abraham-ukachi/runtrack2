<?php
/*
* Job: 03
* Day: 04 - (Thursday & Firday)
* Name: 'Jour 4 - GET et POST'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour04/job03/index.php
*
*
* ======== Job 03 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Développez un algorithme qui affiche le nombre d’arguments $_POST.
*
*   Tips :
*   Pour tester votre code, créez un formulaire html <form> de type POST avec différents 
*   champs <input> de type “text” et un <input> de type “submit” pour l’envoi. Vous pouvez 
*   ensuite afficher avec echo directement dans votre page par exemple :
*   
*   “Le nombre d’argument POST envoyé est : “ 
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Develop an algorithm that displays the number of $_POST arguments.
*   
*   Tips:
*   To test your code, create an html form <form> of type POST with different fields <input> 
*   of type “text” and an <input> of type “submit” for sending. You can then display with echo 
*   directly in your page for example:
*   
*   “The number of POST arguments sent is: “ 
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


// Get an array of all the POST arguments as `postArgs`
$postArgs = $_POST;

// Initialize the 'hidden Toast' variable
$hiddenToast = "hidden";
// Initialize the 'number of arguments' variable
$numArgs = 0;

// For each argument in `postArgs`...
foreach ($postArgs as $arg) {
  // ...Increment the number of arguments by 1
  $numArgs += 1;

  // DEBUG [4dbsmaster]: tell me about it :)
  //echo "arg => $arg <br>";
}

// Using our beloved ternary statement, assign 'hidden' to the `hiddenToast` variable, 
// Only if the number of arguments (`numArgs`) is 0. 
$hiddenToast = ($numArgs === 0) ? "hidden" : "";


// DEBUG [4dbsmaster]: tell me about it :)
// print_r($postArgs);


?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job3 of Day4 - Runtrack2">

    <title>Job03 - Jour04 | Runtrack2</title>

    <style>

      /* Body */
      body {
        width: 100%;
        height: 100vh;
        background: #e6ecf3; /* b4: #e2e2e2 */
        font-size: 18px;
        padding-top: 80px !important;
        /* Webkit Browsers */
        -webkit-font-smoothing: antialiased;
        /* Safari & Chrome */
        text-rendering: optimizeLegibility;
        /* Firefox */
        -moz-osx-font-smoothing: grayscale;
      }

      /* Form */
      form {
        width: 80%;
        height: auto;
      }

      /* Label */
      label {
        font-family: monospace;
        color: #5f5f5f;
      }

      /* Input */
      input {
        border-radius: 5px;
        background: white;
        border: 0;
        padding: 8px 16px;
        margin: 8px 0 16px;
        font-size: 24px;
      }

      /* Submit Input */
      input[type="submit"] {
        background: #2f79d8;
        color: white;
        border-radius: 5px;
        text-transform: uppercase;
        font-size: medium;
        padding: 16px;
        letter-spacing: 1.5px;
        cursor: pointer;
        margin-top: 48px;
      }

      /* Direct code of the body */
      body > code {
        opacity: 0.5;
      }


      /* Toast */
      #toast {
        background: #baebb0;
        color: #036403;
        padding: 8px 24px;
        border-radius: 8px;
        width: 70%;
        font-size: 14px;
        border: 2px solid #e7e7e7;
        font-family: monospace;
        max-width: 600px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: 48px auto;
        text-align: center;
      }

      /* Strong in Toast */
      #toast strong {
        color: darkred;
      }

      #toast code {
        font-weight: bold;
      }

      /* Set the maximum width of all forms, paragraphs and tables */
      form, #toast  { max-width: 600px; }


      /* We alway need our fullbleed :) */
      [fullbleed] {
        margin: 0;
        padding: 0;
      }

      /* Hide elements like Houdini :) */
      [hidden] {
        display: none !important;
      }

      /*** Flex Layout Styles ***/

      /* Layout */
      .layout {
        display: flex;
      }
      
      /* Vertical Layout*/
      .vertical.layout {
        flex-direction: column;
      }

      /* Horizontal Layout */
      .horizontal.layout {
        flex-direction: row;
      }

      /* Centered Layout */
      .centered.layout {
        justify-content: center;
        align-items: center;
      }

      /*** END of Flex Layout Styles ***/


    </style>

  </head>
  <!-- End of HEAD -->

  <!-- BODY -->
  <body class="vertical layout centered" fullbleed>
  
    <!-- Toast -->
    <!-- PHP: Hide the toast, ff there are no arguments -->
    <div id="toast" <?php echo $hiddenToast ?> >
      No. of <code>POST</code> arguments sent: <strong><?php echo $numArgs ?></strong>
    </div>
    <!-- End of Toast -->

    <!-- Form -->
    <form class="vertical layout" method="post">
      
      <!-- Company Input -->
      <label for="company">Company</label>
      <input 
        type="text" 
        name="company" 
        title="Company" 
        placeholder="SpaceX"
      /> <!-- End of Company Input --> 


      <!-- CEO Input -->
      <label for="ceo">CEO</label>
      <input
        type="text" 
        name="ceo" 
        title="CEO" 
        placeholder="Elon Musk"
      /> <!-- End of CEO Input -->

      <!-- Website Input  -->
      <label for="website">Website</label>
      <input 
        type="text" 
        name="website" 
        title="website" 
        placeholder="https://spacex.com"      
       /> <!-- End of Quote Input -->

      <!-- Submit Button -->
      <input type="submit" value="save company">

    </form>
    <!-- End of Form -->


  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


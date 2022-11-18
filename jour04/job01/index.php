<?php
/*
 * * Job: 01
* Day: 04 - (Wednesday)
* Name: 'Jour 4 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour04/job01/index.php
*
*
* ======== Job 01 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Développez un algorithme qui affiche le nombre d’arguments $_GET.
*
* - Tips :
* Pour tester votre code, créez un formulaire html <form> de type GET avec différents 
* champs <input> de type “text” et un <input> de type “submit” pour l’envoi. 
*
* Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
* 
* “Le nombre d’argument GET envoyé est:“
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Develop an algorithm that displays the number of $_GET arguments.
*
* - Tips:
* To test your code, create an html form <form> of type GET with different fields 
* <input> of type “text” and an <input> of type “submit” for sending.
* You can then display with echo directly in your page for example:
* 
* “The number of GET arguments sent is: “
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


// Get an array of all the Get arguments as `getArgs`
$getArgs = $_GET;

// Initialize the 'hidden Toast' variable
$hiddenToast = "hidden";
// Initialize the 'number of arguments' variable
$numArgs = 0;

// For each argument in `getArgs`...
foreach($getArgs as $arg) {
  // ...Increment the number of arguments by 1
  $numArgs += 1;

  // DEBUG [4dbsmaster]: tell me about it :)
  //echo "arg => $arg <br>";
}

// Using our beloved ternary statement, assign 'hidden' to the `hiddenToast` variable, 
// Only if the number of arguments (`numArgs`) is 0. 
$hiddenToast = ($numArgs === 0) ? "hidden" : "";


// DEBUG [4dbsmaster]: tell me about it :)
// print_r($getArgs);


?><!DOCTYPE html>

<!-- HTML -->
<html>
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta http-equiv="Content-type" content="text/html; charset=cp1255">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job1 of Day4 - Runtrack">

    <title>Job01 - Jour04 | Runtrack2</title>

    <style>

      /* Body */
      body {
        width: 100%;
        height: 100vh;
        background: #e6ecf3; /* b4: #e2e2e2 */
        font-size: 18px;
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

      /* Set the maximum width of both <form> & <p> */
      form, #toast { max-width: 600px; }


      /* We alway need our fullbleed :) */
      [fullbleed] {
        margin: 0;
        padding: 0;
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
      No. of <code>GET</code> arguments sent: <strong><?php echo $numArgs; ?></strong>
    </div>
    <!-- End of Toas -->

    <!-- Form -->
    <form class="vertical layout" method="get">
      
      <!-- School Input -->
      <label for="school">School</label>
      <input 
        type="text" 
        name="school" 
        title="School" 
        placeholder="LaPlateforme_"
      /> <!-- End of School Input --> 


      <!-- Course Input -->
      <label for="course">Course</label>
      <input
        type="text" 
        name="course" 
        title="Course" 
        placeholder="Web Dev."
      /> <!-- End of Course Input -->

      <!-- Place Input  -->
      <label for="place">Place</label>
      <input 
        type="text" 
        name="place" 
        title="Place" 
        placeholder="Marseille"
      /> <!-- End of Place Input -->
      
      <input type="submit" value="Submit Now">

    </form>
    <!-- End of Form -->

  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


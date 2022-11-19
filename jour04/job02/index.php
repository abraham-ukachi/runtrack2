<?php
/*
* Job: 02
* Day: 04 - (Thursday & Friday)
* Name: 'Jour 4 - Tableaux'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour04/job02/index.php
*
*
* ======== Job 02 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des arguments
*   $_GET et les valeurs associées. Il doit y avoir deux colonnes : argument et valeur.
*
*   Tips :
*
*   Pour tester votre code, créez un formulaire html <form> de type GET avec différents
*   champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
*   Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce tableau :
*
*   | Argument |  Valeur  |
*   |:=========|:=========|
*   |  prenom  | Stephane |
*   |  nom     | Dupont   |
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Develop an algorithm that displays in an HTML table <table> all the $_GET arguments and the 
*   associated values. There should be two columns: argument and value.
*   
*   Tips:
*
*   To test your code, create an html <form> of type GET with different <input> fields of type 
*   “text” and an <input> of type “submit” for sending. You can then display with echo directly 
*   in your page for example this table: 
*
*   |     Key       |   Value  |
*   |:==============|:=========|
*   |  firstname    | Stephane |
*   |  lastname     | Dupont   |
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

// Initialize the 'hidden Table' variable
$hiddenTable = "hidden";
// Initialize the 'number of arguments' variable
$numArgs = 0;

// For each argument in `getArgs`...
foreach ($getArgs as $arg) {
  // ...Increment the number of arguments by 1
  $numArgs += 1;

  // DEBUG [4dbsmaster]: tell me about it :)
  //echo "arg => $arg <br>";
}

// Using our beloved ternary statement, assign 'hidden' to the `hiddenTable` variable, 
// Only if the number of arguments (`numArgs`) is 0. 
$hiddenTable = ($numArgs === 0) ? "hidden" : "";


// DEBUG [4dbsmaster]: tell me about it :)
// print_r($getArgs);


?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job2 of Day4 - Runtrack22">

    <title>Job02 - Jour04 | Runtrack2</title>

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

      /* Table */
      table {
        border-collapse: collapse;
        color: #222222;
        width: 80%;
        font-family: monospace;
        font-size: large;
        margin-top: 28px;
      }

      /* Table Header */
      thead { height: 32px; }
      th {
        border: 1px solid #5e7095;
        background: #00224f;
        color: #fff;
        padding: 0;
      }

      /* Table Data */
      td {
        border: 1px solid;
        border-color: #5e7095 !important;
        text-align: center;
        padding: 4px;
      }

      td.value {
        color: #008b3d;
        font-weight: bold;
        /* text-align: left; */
      }


      /* Set the maximum width of all forms, paragraphs and tables */
      form, #toast, table { max-width: 600px; }


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
    <div id="toast" <?php echo $hiddenTable ?> >
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


    <!-- Table -->
    <!-- PHP: Hide the table, if there are no arguments -->
    <table <?php echo $hiddenTable ?> >
      <!-- Header - Table -->
      <thead>
        <!-- Row of Headers / Title -->
        <tr>
          <th>No.</th>
          <th>Key</th>
          <th>Value</th>
        </tr>
      </thead>
      <!-- End of Header - Table -->


      <!-- Body - Table -->
      <tbody>
        <!-- Row of Data -->
        <?php $num=0; foreach ($getArgs as $arg => $value) { ?>
          <tr>
            <td><b><?php echo ++$num ?></b></td>
            <td><?php echo $arg ?></td>
            <td class="value"><?php echo $value ?></td>
          </tr>
         <?php } ?>
      </tbody>
      <!-- End of Body - Table -->
      
    </table>
    <!-- End of Table -->

  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


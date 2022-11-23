<?php
/*
* Job: 03
* Day: 08 - (Wednesday)
* Name: 'Jour 8 - Session / Cookies'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour08/job03/index.php
*
*
* ======== Job 03 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton submit. 
* - Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session. 
* - Afficher l’ensemble des prénoms. 
* - Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. 
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a form that contains a text type input named “first name” and a submit button. 
* - When the form is validated, the first name is added in a session variable. 
* - Display all first names. 
* - Add a button called “reset” to reset the list.
*
* ============================
* WARNING: This task/job was done in a hurry; my code is therefore not as 'pretty'. #LOL
* ============================
*/

/*
* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
* MOTTO: I'll always do more 😜!!!
* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/


# YESS!!!! We are still in session, about to eat some cookies !!!!!!! :)

# TODO: Create a couple of functions to clean the mess below.


// Let's initialize or start our session
session_start();

// Define a session variable, and set it to 'firstnames' as required
$SVAR = 'firstnames';
// Define a reset variable as `RVAR`
$RVAR = 'reset'; # <- This should be the same as our reset button's name in the HTML below

// Get the user's firstname as `FIRSTNAME` from PHP's super global variable - GET
$FIRSTNAME = $_GET['prenom'];


// Running some checks...

// Check if our session variable exists using our lovely friends - `isset()` & ternary statement
$foundSVAR = isset($_SESSION[$SVAR]) ? true : false;
// Check if there's a firstname
$foundFname = isset($FIRSTNAME) ? true : false;
// Check if the user wants to reset the number of visit
$resetSVAR = isset($_POST[$RVAR]) ? true : false;


// If our session variable exists and the user wants to reset the number...
if ($foundSVAR && $resetSVAR) {
  // ...who are we to deny him or her. Remember, "the client is always right" ;)
  // So, reset it by setting our `SVAR` in PHP's SESSION to an empty short syntax array (i.e. [])
  $_SESSION[$SVAR] = [];
  # ^^^^^^ NOTE: We could also use -> `unset($_SESSION[$SVAR])`
}

// Initialize the list of first names variable as `firstnames`
// IDEA: Retrieve the value of `SVAR` in SESSION if it exists, else use [] as the initial value
$firstnames = $foundSVAR ? $_SESSION[$SVAR] : [];


// So now, if our session variable (i.e. $SVAR) doesn't exist in PHP's SESSION...
if (!$foundSVAR) {
  // Create or set our session variable to our `firstnames`
  $_SESSION[$SVAR] = $firstnames;
}


// HACK: If there's a firstname and the list is not to be reset or cleared...
if ($foundFname && !$resetSVAR) {
  // ...append the `FIRSTNAME` to the list of `firstnames`
  $firstnames[] = $FIRSTNAME;
}


// IDEA: Do something with `firstnames` list here


// Update the list of firstnames in session using our session variable (i.e. `SVAR`)
$_SESSION[$SVAR] = $firstnames;


// DEBUG [4dbsmaster]: tell me about it :)
// echo "SVAR => $SVAR" . "<br>";
// echo "RVAR => $RVAR" . "<br>";
// echo "FIRSTNAME => $FIRSTNAME" . "<br>";
// echo "foundSVAR ? " . json_encode($foundSVAR) . "<br>";
// echo "foundFname ? " . json_encode($foundFname) . "<br>";
// echo "resetSVAR ? " . json_encode($resetSVAR) . "<br>";
// echo "firstnames []=> " . json_encode($firstnames) . "<br>";


// DEBUG [4dbsmaster]: tell me about the SESSION :)
// print_r($_SESSION);


?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8"> -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job3 of Day8 - Runtrack2">

    <title>Job03 - Jour08 | Runtrack2</title>

    <style>

      /* Body */
      body {
        width: 100%;
        height: 100vh;
        background: #1a1a1a;
        color: #e7e7e7;
        font-size: 18px;
        font-family: courier;

        /* Webkit Browsers */
        -webkit-font-smoothing: antialiased;
        /* Safari & Chrome */
        text-rendering: optimizeLegibility;
        /* Firefox */
        -moz-osx-font-smoothing: grayscale;
      }

      /* Direct code of the body */
      body > code {
        opacity: 0.5;
      }

      /* H2 - Title */
      h2 {
        color: yellow;
        /* font-family: cursive; */
      }


      /* Any link in H2 - Title */
      h2 a {
        text-decoration: none;
        color: inherit;
      }

      /* Underline link in H2 - Title when user hover's over it */
      h2 a:hover {
        text-decoration: underline;
      }

      /* Main & Aside */
      main, aside {
        display: block;
        position: relative;
        width: 100%;
        height: auto;
      }

      /* All Containers */
      .container {
        position: relative;
        width: inherit;
        height: inherit;
      }

      /* Main */
      main {
        width: 100%;
        height: 100%;
        min-height: 300px;
        padding: 48px;
        justify-content: start;
      }

      /* H1 in main*/
      main > h1 {
        font-size: 72px;
      }


      /* Main Container */
      main > .container {
        /* top: -50px; */
      }

      /* Aside */
      aside {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 5;
        opacity: 0.95;

        transform: translateY(70%);

        -webkit-transition: transform 200ms ease-in-out;
        -moz-transition: transform 200ms ease-in-out;
        transition: transform 200ms ease-in-out;

      }

      /* Opened Aside */
      aside[opened] {
        transform: translateY(0%);
      }

      /* When Aside is closed */
      aside:not([opened]) {
        cursor: pointer;
      }
      
      /* Whenever Aside is closed and the user hovers over it,
       * change the handle's background to white */
      aside:not([opened]):hover #handle {
        background: white;
      }
      
      /* Aside Container */
      aside > .container {
        background: #2c2c2c;
        overflow: hidden;
        border-radius: 24px 24px 00 0;
        max-width: 600px;
        margin: 0 auto;
      }

      /* Handle */
      #handle {
        width: 30%;
        height: 5px;
        background: #7b7b7b;
        margin: 16px;
        border-radius: 5px;
        cursor: pointer;
      }

      #handle:hover {
        background: yellow;
      }

      /* If aside/drawer is closed, 
       * remove pointer events of the drawer's handle */
      aside:not([opened]) #handle {
        pointer-events: none;
      }

      /* Form */
      form {
        width: 90%;
        height: auto;
      }

      /* Label */
      label {
        font-family: monospace;
        color: #9c9c9c;
      }

      /* Input */
      input, select {
        border-radius: 5px;
        background: #343434;
        border: 0;
        padding: 8px 16px;
        margin: 8px 0 16px;
        font-size: 24px;
        color: white;
      }

      /* Hover styles of all inputs except the submit input button */
      input:not([type="submit"]):hover, select:hover {
        outline: 2px solid white;
      }

      input:not([type="submit"]):focus, select:focus {
        outline: 2px solid yellow;
      }

      /* Submit Input */
      input[type="submit"] {
        background: #f0ed0f;
        color: black;
        border-radius: 5px;
        text-transform: uppercase;
        font-size: medium;
        font-weight: bold;
        padding: 16px;
        letter-spacing: 1.5px;
        cursor: pointer;
        margin-top: 24px;
      }

      /* Reset Submit Button - Input */
      input[type="submit"][name="reset"] {
        margin: 0 0 24px 0;
        background: white;
      }

      select {
        flex: 1;
        /* height: 40px; */
        /* padding: 0 12px; */
        margin-left: 12px;
        overflow: hidden;
        cursor: pointer;
      }

      /* Toast */
      .toast {
        background: darkgreen;
        color: white;
        /* padding: 8px 16px; */
        border-radius: 0 0 16px 16px;
        width: 90%;
        font-size: 14px;
        font-family: monospace;
        max-width: 600px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        font-weight: bold;
        margin: 0 auto;
        text-align: center;
        z-index: 10;
      }

      /* Span in Toast */
      .toast span {
        color: #b9ff9d;
      }

      /* Code in Toast */
      .toast code {
        position: absolute;
        left: 20px;
        font-weight: bold;
        opacity: 0.3;
      }


      /* Error Toast */
      .toast.error {
        background: #752116;
      }

      /* Span in Good Toast */
      .toast.error span {
        color: #edb2b8;
      }


      /* Set the maximum width of all forms and div.toast */
      /* form, .toast { max-width: 600px; } */

      
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

      /* Just center the items in the layout */
      .center.layout {
        align-items: center;
      }


      /* First names */
      ul#firstnames {
        list-style: none;
        font-size: 24px;
        width: 100%;
        padding: 0;
        max-width: 80%;
      }

      /* Fname */
      .fname {
        padding: 8px 16px;
        border-bottom: 1px solid #404040;
      }

      
      /*** Wide Layout - Media Query ***/
      @media (min-width: 460px) {
        
        /* H1 in main*/
        main > h1 {
          font-size: 144px;
          margin: 24px;
        }

        /* H2 - Title */
        h2 {
          font-size: 50px;
        }

        /* Aside */
        aside {
          transform: translateY(65%);
        }

        /* Toast */
        .toast {
          width: 70%;
          font-size: 16px;
          /* padding: 12px 24px; */
        }

      }

      /*** END of Wide Layout - Media Query ***/

    </style>

    
    <!-- Just a little JS 🙏 -->
    <script>

    /*
     * Handler that is called whenever the `<aside>` element is clicked or tapped.
     *
     * @param { PointerEvent } event
     * @param { Element } asideEl
     */
    var handleAsideClick = (event, asideEl) => {
      // Get the aside eleemnt as `asideEl`
      //let asideEl = event.target;
      // Check if the aside element is opened using...
      // ...you guessed it ! "A TERNARY STATMENT !!!"
      let isOpened = asideEl.hasAttribute('opened') ? true : false;

      // Do nothing if the aside element is already opened.
      if (isOpened) { return }

      // Open the aside / drawer by setting or adding a 'opened' attribute.
      asideEl.setAttribute('opened', '');

      // DEBUG [4dbsmaster]: tell me about it :)
      // console.log(`[handleAsideClick]: asideEl => `, asideEl);
      // console.log(

    };


    /*
     * Toggles the Drawer 
     * This method toggles the 'opened' attribute of `<aside id="drawer">`.
     */
    var toggleDrawer = (event) => {
      // Stop Propagation of the event
      event.stopPropagation();
      
      // Get the drawer element as `drawerEl`
      let drawerEl = document.getElementById('drawer');

      // Toggle the 'opened' attribute of `drawerEl`
      drawerEl.toggleAttribute('opened');

      // DEBUG [4dbsmaster]: tell me about it :)
      // console.log(`[toggleDrawer](1): drawerEl => `, drawerEl);
      // console.log('[toggleDrawer](2): event => ', event);
    };
    

    </script>

  </head>
  <!-- End of HEAD -->

  <!-- BODY -->
  <body class="vertical layout centered" fullbleed>

    <!-- Result - MAIN -->
    <main id="result" class="vertical layout center">
      <h3>Firstnames in <code>$_SESSION</code></h3>

      <!-- Firstnames UL -->
      <ul id="firstnames" class="list">
        <!-- PHP: for each firstname in the list of first names... --> 
        <?php foreach ($firstnames as $fname) { ?>

        <!-- First name -->
        <li class="fname"><?php echo $fname ?></li>
        
        <?php } ?>
        <!-- End of PHP: for each firstname... -->

      </ul>
      <!-- End of Firstnames UL -->

    </main>
    <!-- End of Result - MAIN -->
    
    <!-- Drawer - ASIDE -->
    <aside id="drawer" opened onclick="handleAsideClick(event, this)">
      
      <!-- Aside Container -->
      <div class="container vertical layout center">
        <!-- Handle -->
        <div id="handle" onclick="toggleDrawer(event)"></div>
        
        <!-- H2 Title -->
        <h2 title="Job 03 of Day8">Job 03 - Day8</h2>


        <!-- Form -->
        <form class="vertical layout" method="get">

          <!-- Inputs-Wrapper -->
          <div class="inputs-wrapper vertical layout">

            <!-- Firstname Input -->
            <label for="fnameInput">First name</label>
            <input id="fnameInput" required autofocus
              type="text"
              name="prenom"
              title="First Name"
              placeholder="Elon"
            /> <!-- End of Firstname Input -->

          </div>
          <!-- End of Inputs-Wrapper -->

 
          <!-- Add to Session - Button -->
          <input type="submit" value="Add to Session">

          <!-- Reset - Button -->
          <!-- <input type="submit" name="reset" value="Reset"> -->

        </form>
        <!-- End of Form -->


        <!-- Reset Form -->
        <form id="resetForm" class="vertical layout" method="post">
  
          <!-- Reset - Button -->
          <input type="submit" name="reset" value="Reset">

        </form>
        <!-- End of Reset Form -->


      </div>
      <!-- End of Aside Container -->
    </aside>
    <!-- End of Drawer - ASIDE -->



    
 
    <!-- PHP: If there's a first name... -->
    <?php if ($foundFname && !$resetSVAR) { ?>
    <!-- ...show the Toast -->

    <!-- Toast -->
    <div class="toast">
      <p><code>+</code> <span><?php echo $FIRSTNAME ?></span> has been added to the list</p>
    </div>
    <!-- End of Toast -->

    <?php } ?>
    <!-- End of PHP: 'If the width *IS NOT* valid...' -->


  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


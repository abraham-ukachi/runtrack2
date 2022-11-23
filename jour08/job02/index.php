<?php
/*
* Job: 02
* Day: 08 - (Wednesday)
* Name: 'Jour 8 - Session / Cookies'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour08/job02/index.php
*
*
* ======== Job 02 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Créez un cookie nommé “nbvisites”. 
* - A chaque fois que la page est visitée, ajoutez 1.
* - Afficher le contenu du cookie. 
* - Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. 
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Create a cookie named “nbvisits”. 
* - Each time the page is visited, add 1.
* - Display the contents of the cookie. 
* - Add a button named “reset” to reset this counter.
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


# YESS!!!! We are in session, about to eat some cookies !!!!!!! :)


// Creating some "constant" variables...

// Name of our sweet cookie
$COOKIE_NAME = "nbvisits";
// Default or initial value of our cookie
$COOKIE_DEFAULT = 0;
// Timeout of our amazing cookie
$COOKIE_TIMEOUT = 3600; # <- + 1 hour
// Director of our delicious cookie
$COOKIE_DIR = '/'; # <- i.e. full website availability

// Define the reset variable as `RVAR`
$RVAR = 'reset'; # <- This should be the same as our reset button's name in the HTML below


# TODO: Create a couple of functions to clean the mess below.



// Check if our cookie exists using our lovely friends - `isset()` & ternary statement
$foundCookie = isset($_COOKIE[$COOKIE_NAME]) ? true : false;
// Check if the user wants to reset the number of visit
$resetCookie = isset($_POST[$RVAR]) ? true : false;


// If our cookie does not exists 😭...
if (!$foundCookie) {
  // ...create / set make the most delicious cookie in the world or,
  // using our predefined timeout and directory
  setcookie($COOKIE_NAME, $COOKIE_DEFAULT, time() + $COOKIE_TIMEOUT, $COOKIE_DIR);
  
  // We've now created our cookie, our cookie now exists,
  // So, we can set `foundCookie` to `true`
  $foundCookie = true;

  // DEBUG [4dbsmaster]: tell me about it :)
  echo "cookie created!!! foundCookie => " . json_encode($foundCookie) . "<br>";
  
}else if ($foundCookie && $resetCookie) { // <- if our cookie exists and has to be reset ...

  // reset it by setting our cookie to it's default value
  $_COOKIE[$COOKIE_NAME] = $COOKIE_DEFAULT;
}



// Now, initialize the number of visits variable as `visitsCount`
// Retrieve any available cookie (using the global variable $_COOKIE) if it exists, 
// else use 0 or the default cookie as the initial value
$visitCount = $foundCookie ? $_COOKIE[$COOKIE_NAME] : $COOKIE_DEFAULT;

// Increment `visitCount` by 1
$visitCount += 1;


// IDEA: Do something with `visitCount` here


// Update our cookie with the current `visitCount`
setcookie($COOKIE_NAME, $visitCount, time() + $COOKIE_TIMEOUT, $COOKIE_DIR);


// DEBUG [4dbsmaster]: tell me about it :)
// echo "COOKIE_NAME => $COOKIE_NAME" . "<br>";
// echo "COOKIE[$COOKIE_NAME] => " . $_COOKIE[$COOKIE_NAME] . "<br>";
// echo "foundCookie ? " . json_encode($foundCookie) . "<br>";
// echo "resetCookie ? " . json_encode($resetCookie) . "<br>";
// echo "visitCount => $visitCount" . "<br>";


// DEBUG [4dbsmaster]: tell me about the COOKIE's content :)
// print_r($_COOKIE);


?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8"> -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job2 of Day8 - Runtrack2">

    <title>Job02 - Jour08 | Runtrack2</title>

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

        transform: translateY(75%);

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
        margin-top: 48px;
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

      /*** END of Flex Layout Styles ***/



      /* House Styles */
      .house {
        padding: 24px;
        box-sizing: border-box;
        min-width: 300px;
        min-height: 300px;
        background: black;
        border-radius: 24px;
        overflow: scroll;
      }

      #asciiHouse {
        justify-content: start;
      }

      /* Roof */
      .roof-line {
        display: block;
      }

      /* End of House Styles */

      
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
          transform: translateY(70%);
        }

        /* Toast */
        .toast {
          width: 70%;
          font-size: 16px;
          /* padding: 12px 24px; */
        }

        .house {
          min-width: 400px;
          min-height: 400px;
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
     
      <h1><?php echo $visitCount ?></h1>
      <p>Visits</p>
    </main>
    <!-- End of Result - MAIN -->
    
    <!-- Drawer - ASIDE -->
    <aside id="drawer" opened onclick="handleAsideClick(event, this)">
      
      <!-- Aside Container -->
      <div class="container vertical layout center">
        <!-- Handle -->
        <div id="handle" onclick="toggleDrawer(event)"></div>
        
        <!-- H2 Title -->
        <h2 title="Job 02 of Day8">Job 02 - Day8</h2>


        <!-- Form -->
        <form class="vertical layout" method="post">
 
          <!-- Reset - Button -->
          <input type="submit" name="reset" value="reset visits">

        </form>
        <!-- End of Form -->

      </div>
      <!-- End of Aside Container -->
    </aside>
    <!-- End of Drawer - ASIDE -->



    
 
    <!-- PHP: If there's an error... -->
    <?php if ($err) { ?>
    <!-- ...show the Toast -->

    <!-- Toast -->
    <div class="toast error">
      <p><?php echo $errMsgHTML ?></p>
    </div>
    <!-- End of Toast -->

    <?php } ?>
    <!-- End of PHP: 'If the width *IS NOT* valid...' -->


  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


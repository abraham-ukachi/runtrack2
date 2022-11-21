<?php
/*
* Job: 07
* Day: 04 - (Thursday & Friday)
* Name: 'Jour 4 - Get et POST'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour04/job07/index.php
*
*
* ======== Job 07 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Faire un formulaire avec deux <input> de type text ayant comme nom **largeur** et **hauteur**
*   et un bouton submit. Vous devez créer un algorithme qui affiche, à la validation du formulaire,
*   une maison telle que : 
*
*   Si on entre les valeurs **largeur** = 10 et **hauteur** = 5 dans les champs, 
*   la maison qui s’affiche sur la page doit ressembler à ceci :
*
*           /\
*          /__\
*         /____\
*        /______\
*       /________\
*       |        |
*       |        |
*       |        |
*       |        |
*       |________|
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Make a form with two <input> of type text having as name “width” and “height” and a 
*   submit button. You must create an algorithm that displays, when validating the form, 
*   a house such as: 
*
*   If we enter the values **width** = 10 and **height** = 5 in the fields,
*   the house displayed on the page must look like this: 
*
*
*           /\
*          /__\
*         /____\
*        /______\
*       /________\
*       |        |
*       |        |
*       |        |
*       |        |
*       |________|
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



# IDEA: House Builder v0.1
# TODO: Fix the 3:1 ratio issue (i.e. when roof is 30 and wall is 10)

// Defining a couple of constant variables without using PHP's built-in `declare()` function,
// as we are only allowed to use `isset()` to complete this task/job.

// Get the width, height, and type from PHP's super global variable (i.e. $_GET)
$WIDTH = $_GET['largeur']; # <- integer (eg. 10)
$HEIGHT = $_GET['hauteur']; # <- integer (eg. 5)
$TYPE = $_GET['type']; # <- string (eg. 'ascii', 'css' or '3d')

// Check if our `WIDTH` is valid
// NOTE: `WIDTH` is valid only if it is greater than 0
$isValidWidth = ((int)$WIDTH > 0) ? true : false;

// Check if our `HEIGHT` is valid
// NOTE: `HEIGHT` is valid only if it is greater than 0
$isValidHeight = ((int)$HEIGHT > 0) ? true : false;

// Check if our `TYPE` is valid
// NOTE: `TYPE` is valid only if it is equal to either 'ascii', 'css' or '3d';
$isValidType = ($TYPE == 'ascii' || $TYPE == 'css' || $TYPE == '3d');


// DEBUG [4dbsmaster]: tell me about it :)
// echo "WIDTH => $WIDTH <br>";
// echo "HEIGHT => $HEIGHT <br>";
// echo "TYPE => $TYPE <br><br>";

// echo "isValidWidth ? " . json_encode($isValidWidth) . "<br>";
// echo "isValidHeight ? " . json_encode($isValidHeight) . "<br>";
// echo "isValidType ? " . json_encode($isValidType) . "<br>";


// Get an array of all the GET arguments as `getArgs`
$getArgs = $_GET;

// Initialize the 'number of get arguments' variable
$numGetArgs = 0;

// For each argument in `getArgs`...
foreach($getArgs as $arg) {
  // ...Increment the number of get arguments by 1
  $numGetArgs += 1;
  
  // Do something with each argument here
  
  // DEBUG [4dbsmaster]: tell me about it :)
  // echo "arg => $arg <br>";
}


// Define the error variable as `err`
// and initialize it with our lovely ternary statment: 
// If all inputs are valid (i.e. width, height and type), 
// Set `err` to `false` (a.k.a no error found)
$err = ($isValidWidth && $isValidHeight && $isValidType) ? false : true;

// Initialize a `errMsgHTML` variable according to the validity of `WIDTH`, `HEIGHT` and `TYPE`
if (!$isValidWidth) { # <- width is invalid
  $errMsgHTML = "<code>$WIDTH</code>&nbsp;Please enter a valid <span>width</span>";

}elseif (!$isValidHeight) { # <- height is invalid
  $errMsgHTML = "<code>$HEIGHT</code>&nbsp;Please enter a valid <span>height</span>";

}else { # <- type is invalid
  $errMsgHTML = "<code>$TYPE</code>&nbsp;Please enter a valid <span>type</span>";
}

// DEBUG [4dbsmaster]: tell me about it :)
// echo "<br>";
// echo "err => " . json_encode($err) . "<br>";
// echo "errMsgHTML => $errMsgHTML <br>";



// ===> ASCII HOUSE <===
// IDEA (ascii house roof): offsets + panel + gaps + panel  <==> ' ' + '/' + '_' + '\'
// IDEA (ascii house wall): side + spaces + side <==> '|' + (' '|'_') + '|'

// Create some constant variables for ASCII House
// ROOF
$ROOF_PANEL_LEFT = '/';
$ROOF_PANEL_RIGHT = '\\';
$ROOF_GAP = '_';
$ROOF_OFFSET = '&nbsp;'; # <- non-breaking space
// WALL
$WALL_SIDE = '|';
$WALL_FLOOR = '_';
$WALL_SPACE = '&nbsp;';
//'&#x20;'; # <- same as non-breaking space but in unicode hex code

// Calculate half of the given `WIDTH` & `HEIGHT`
$HALF_WIDTH = $WIDTH / 2;
$HALF_HEIGHT = $HEIGHT / 2;

// Initialize the `asciiHouse` variable using a short multi-dimensional array syntax
// which includes `roof` and `wall` keys.
$asciiHouse = [
  'roof' => [],
  'wall' => []
];



// Building the asciiHouse's roof...


// Intitialize the current height
$currentHeight = 0; # <- From top to bottom (0 is top)



do { # <- Handling the `roof` of `asciiHouse`...
  
  // Set the roof's offset difference (from left to right) at the current height (top to bottom)
  $offsetDiff = $HALF_WIDTH - $currentHeight - 1;
  
  // HACK: Our `offsetDiff` can't or shouldn't be less than 0.
  // So, if the `offsetDiff` is less than zero..
  if ($offsetDiff < 0) { $offsetDiff = 0; }
  
  // Calculating the `gap`...
  
  // Set the `gapDiff` to twice the difference of `HALF_WIDTH`, `offsetDiff` and 1 (i.e. panel length)
  $gapDiff = ($HALF_WIDTH - $offsetDiff - 1) * 2;
  
  // Intialize the gaps & offsets variable
  $gaps = '';
  $offsets = '';
  
  // Populate the roof gaps with `gapDiff`
  for ($g=0; $g < $gapDiff; $g++) {
    // Append or concatenate the `ROOF_GAP` to `gaps`
    $gaps .= $ROOF_GAP;
  }
  
  // And, populate the roof offsets with `offsetDiff`
  for ($o=0; $o < $offsetDiff; $o++) {
    // Apppend or concatenate the `ROOF_OFFSET` to `offsets`
    $offsets .= $ROOF_OFFSET;
  }
  
  // Now with our `offset` and `gaps`, 
  // let's build the roof of our `asciiHouse`, one line at a time ;)
  
  // Define a `roofLine` variable
  // NOTE: this is arguably the most important line in this do/while loop :-)
  $roofLine = $offsets . $ROOF_PANEL_LEFT . $gaps . $ROOF_PANEL_RIGHT;
  // Add the `roofLine` to the roof's current height 
  $asciiHouse['roof'][$currentHeight] = $roofLine;

  // Increment the `currentHeight` by 1
  $currentHeight += 1;


  // DEBUG [4dbsmaster]: tell me about it :)
  // echo "<br>";
  // echo "offsetDiff => $offsetDiff <br>";
  // echo "gapDiff => $gapDiff <br>";
  // echo "gaps => [$gaps] <br>";
  // echo "offsets => [$offsets] <br>";
  // echo "roofLine => [$roofLine] <br>";
  // echo "<br>";
  
} while ($currentHeight < $HEIGHT);




// Building the asciiHouse's wall...


// Reset the current Height
$currentHeight = 0;


// NOTE: For code readability, I decided to create a separate do/while loop,
do { # <- Handling the `wall` of `asciiHouse`... 
  
  // Get the correct space or floor
  // Use the `WALL_FLOOR`, If we are at the bottom or floor of the wall,
  // Else, use the `WALL_SPACE`
  $spaceOrFloor = ($currentHeight == ($HEIGHT - 1)) ? $WALL_FLOOR : $WALL_SPACE;
  
  // Calculate the space difference as `spaceDiff`
  $spaceDiff = $WIDTH - 2; # <- 2 is the length of both sides (i.e. '|' and '|')

  // Initialize the spaces variable
  $spaces = '';
  
  // Populate the wall spaces using the `spaceDiff`
  for ($s=0; $s < $spaceDiff; $s++) {
    // Append or concatenate the `spaceOrFloor` to `spaces`
    $spaces .= $spaceOrFloor;
  }

  // Now with our `spaces`, let's build the wall of our `asciiHouse`, 
  // one line at a time ;)
   
  // Define a `wallLine` variable
  // NOTE: (AGAIN) this is arguably the most important line in this do/while loop :-)
  $wallLine = $WALL_SIDE . $spaces . $WALL_SIDE;
  // Add the `wallLine` to the roof's current height
  $asciiHouse['wall'][$currentHeight] = $wallLine;
   
  // Increment the `currentHeight` by 1
  $currentHeight += 1;

} while ($currentHeight < $HEIGHT);




// DEBUG [4dbsmaster]: Print the roof list of ascii house
// print_r($asciiHouse['roof']);
// print_r($asciiHouse['wall']);


?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job7 of Day4 - Runtrack2">

    <title>Job07 - Jour04 | Runtrack2</title>

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

    <!-- MAIN -->
    <main>
      <!-- Main Container -->
      <div class="container vertical layout centered">

        <!-- PHP: If House Type is valid and is equals to 'ascii'... -->
        <?php if ($isValidType && $TYPE == 'ascii') { ?>
        <!-- ...show the ascii house -->
        <!-- ASCII House -->
        <div id="asciiHouse" class="house vertical layout centered">

          <!-- Roof -->
          <div class="roof vertical layout">


          <!-- PHP: For each `roofLine` in the `asciiHouse`'s roof list.. -->
          <?php foreach ($asciiHouse['roof'] as $roofLine) { ?>

          <!-- ...create a roof line -->
          <span class='roof-line'><?php echo $roofLine ?></span>
          
          <?php } ?>

          </div>
          <!-- End of Roof -->


          <!-- Wall -->
          <div class="wall vertical layout">

          <!-- PHP: For each `wallLine` in the `asciiHouse`'s wall list.. -->
          <?php foreach ($asciiHouse['wall'] as $wallLine) { ?>

          <!-- ...create a wall line -->
          <span class='wall-line'><?php echo $wallLine ?></span>
          
          <?php } ?>
          
          </div>
          <!-- End of Wall -->

        </div>
        <!-- End of ASCII House -->
        <?php } ?>
        <!-- End of PHP: If House Type is valid... -->




        <!-- PHP: If House Type is valid and is equals to 'css'... -->
        <?php if ($isValidType && $TYPE == 'css') { ?>
        <!-- ...show the ascii house -->
        <!-- CSS House -->
        <div id="cssHouse" class="house">

          <!-- Roof -->
          <!-- End of Roof -->


          <!-- Wall -->
          <!-- End of Wall -->

        </div>
        <!-- End of CSS House -->
        <?php } ?>
        <!-- End of PHP: If House Type is valid... -->




        <!-- PHP: If House Type is valid and is equals to 'threeDimen'... -->
        <?php if ($isValidType && $TYPE == '3d') { ?>
        <!-- ...show the threeDimen house -->
        <!-- 3D House -->
        <div id="threeDimenHouse" class="house">


          <!-- Roof -->
          <!-- End of Roof -->



          <!-- Wall -->
          <!-- End of Wall -->


        </div>
        <!-- End of 3D House -->
        <?php } ?>
        <!-- End of PHP: If House Type is valid... -->

      </div>
      <!-- End of Main Container -->
    </main>
    <!-- End of MAIN -->

    <!-- Drawer - ASIDE -->
    <aside id="drawer" opened onclick="handleAsideClick(event, this)">
      
      <!-- Aside Container -->
      <div class="container vertical layout center">
        <!-- Handle -->
        <div id="handle" onclick="toggleDrawer(event)"></div>
        
        <!-- H2 Title -->
        <h2 title="House Builder v0.1">House Builder</h2>


        <!-- Form -->
        <form class="vertical layout" method="get">

          <!-- Inputs-Wrapper -->
          <div class="inputs-wrapper vertical layout">

            <!-- Width Input -->
            <label for="widthInput">Width</label>
            <input id="heightInput" required autofocus
              type="text"
              name="largeur"
              inputmode="numeric"
              title="Width of the house"
              size="6"
              maxlength="6"
              placeholder="10"
              value="<?php echo $WIDTH ?>"
            /> <!-- End of Width Input -->



            <!-- Height Input -->
            <label for="heightInput">Height</label>
            <input id="heightInput" required
              type="text"
              name="hauteur"
              inputmode="numeric"
              title="Height of the house"
              size="6"
              maxlength="6"
              placeholder="5"
              value="<?php echo $HEIGHT ?>"
            /> <!-- End of Height Input -->

          </div>
          <!-- Inputs-Wrapper -->


          <!-- Type-Wrapper -->
          <div class="type-wrapper horizontal layout center">

            <!-- Type - Select Input-->
            <label for="typeInput">House Type: </label>
            <select id="typeInput" name="type" value="<?php echo $TYPE ?>">
              <option value="ascii">ASCII</option>
              <option value="css">CSS</option>
              <option value="3d">3D</option>
            </select>
            <!-- End of Type - Select Input -->

          </div>
          <!-- End of Type-Wrapper --> 
          
          <!-- Build House - Button -->
          <input type="submit" value="Build House">

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


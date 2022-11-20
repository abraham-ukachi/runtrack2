<?php
/*
* Job: 06
* Day: 04 - (Thursday & Friday)
* Name: 'Jour 4 - Get et POST'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour04/job06/index.php
*
*
* ======== Job 06 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un bouton submit.
*
* - Après validation du formulaire :
*   ● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
*   ● si c’est un nombre impair, afficher “Nombre impair”. 
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Make a GET-like form with an <input> text field named “number” and a submit button. 
*
* - After validation of the form: 
*   ● if the entered value is an even number, display “Even number”;
*   ● if it is an odd number, display “Odd number”;
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


// Get the pincode from GET
$PINCODE = $_GET['nombre'];

// Check if our `PINCODE` is valid
// NOTE: `PINCODE` is valid only when/if it is greater than 0
$isValidPincode = ((int)$PINCODE > 0) ? true : false;

// Check if the given pincode is valid and is an even number (i.e. divisible by 2)
$isEvenPincode = ($isValidPincode && ($PINCODE % 2 === 0));

// DEBUG [4dbsmaster]: tell me about it :)
// echo "PINCODE => $PINCODE <br>";
// echo "isEvenPincode ? " . json_encode($isEvenPincode) . "<br>";
// echo "isValidPincode ? " . json_encode($isValidPincode) . "<br>";


// Get an array of all the GET arguments as `getArgs`
$getArgs = $_GET;

// Initialize the 'number of get arguments' variable
$numGetArgs = 0;

// For each argument in `getArgs`...
foreach($getArgs as $arg) {
  // ...Increment the number of get arguments by 1
  $numGetArgs += 1;

  // DEBUG [4dbsmaster]: tell me about it :)
  // echo "arg => $arg <br>";
}


?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">
  <!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Job6 of Day4 - Runtrack2">

    <title>Job06 - Jour04 | Runtrack2</title>

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
        font-family: cursive;
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

      /* Form */
      form {
        width: 80%;
        height: auto;
      }

      /* Label */
      label {
        font-family: monospace;
        color: #9c9c9c;
      }

      /* Input */
      input {
        border-radius: 5px;
        background: #343434;
        border: 0;
        padding: 8px 16px;
        margin: 8px 0 16px;
        font-size: 24px;
        color: white;
      }

      /* Hover styles of all inputs except the submit input button */
      input:not([type="submit"]):hover {
        outline: 2px solid white;
      }

      input:not([type="submit"]):focus {
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

      /* Show Password - Checkbox Input */
      input[type="checkbox"] {
        display: inline-flex;
        position: relative;
        width: 20px;
        height: 20px;
        cursor: pointer;
        margin: 4px 12px;
        padding: 0;
        
        --webkit-appearance: none;
        --moz-appearance: none;
        appearance: none;
       
      }
      
      /* Checked Checkbox Input */
      input[type="checkbox"]:checked {
        background: white;
      }

      /* Pincode Input */
      #pincodeInput {
        letter-spacing: 10px;
        text-align: center;
      }

      /* Toast */
      .toast {
        background: #752116;
        color: white;
        /* padding: 8px 16px; */
        border-radius: 0 0 16px 16px;
        width: 70%;
        font-size: 14px;
        font-family: monospace;
        max-width: 600px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        font-weight: bold;
        margin: 0 auto;
        text-align: center;
      }

      /* Good Toast */
      .toast.good {
        background: darkgreen;
      }

      /* Span in Toast */
      .toast span {
        color: #edb2b8;
      }

      /* Span in Good Toast */
      .toast.good span {
        color: #b9ff9d;
      }

      /* Code in Toast */
      .toast code {
        position: absolute;
        left: 20px;
        font-weight: bold;
        opacity: 0.3;
      }
      

      /* Set the maximum width of all forms and div.toast */
      form, .toast { max-width: 600px; }

      

      /* Span text in Checkbox Wrapper */
      label.checkbox-wrapper span {
        font-size: smaller;
        font-weight: bold;
        opacity: 0.6;
      }

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

      
      /*** Wide Layout - Media Query ***/
      @media (min-width: 460px) {
        
        /* H2 - Title */
        h2 {
          font-size: 50px;
        }

        /* Toast */
        .toast {
          font-size: 16px;
          /* padding: 12px 24px; */
        }

      }

      /*** END of Wide Layout - Media Query ***/

    </style>

    
    <!-- Just a little JS 🙏 -->
    <script>

      /**
        * Handler that is called whenever the checkbox is clicked
        *
        * @param { Element } checkboxInputEl
        */
      var handleCheckboxClick = (checkboxInputEl) => {
        // Get the password input element as `pincodeInputEl`
        let pincodeInputEl = document.getElementById('pincodeInput');

        // If the checkbox input or `hidePincodeEl` is checked, toggle the `type` attribute of 
        // `pincodeInputEl` between "text" and "password", using our beloved ternary statement
        pincodeInputEl.type = (checkboxInputEl.checked) ? 'password' : 'text';

        // DEBUG [4dbsmaster]: tell me about it :)
        //console.log(`[handleCheckboxClick](1) : \
        //  checkboxInputEl.checked => \x1b[36m${checkboxInputEl.checked}\x1b[0m \
        //  pincodeInputEl.type => \x1b[36m${pincodeInput.type}\x1b[0m`);

      };

    </script>

  </head>
  <!-- End of HEAD -->

  <!-- BODY -->
  <body class="vertical layout centered" fullbleed>
    <!-- Shawarmax Meal - Image -->
    <!-- NOTE: Thanks to my IT teacher (Mrs. Aurelie) for the Shawarmax Flyer -->
    <img src="./shawarmax-meal.png" alt="Shawarmax Meal Picture" title="Thanks Mrs. Aurelie (BEST IT TEACHER EVER !!!)">

    <!-- H2 Title -->
    <h2 class="title">Welcome to <a href="https://instagram.com/shawarmax.marseille" target="_blank">Shawarmax</a></h2>
    <!-- H3 Description -->
    <h3 class="description">PIN Setup</h3>

    <!-- Form -->
    <form class="vertical layout" method="get">
      
      <!-- Pincode Input -->
      <!-- NOTE:  Using the "number" as [type] & "pincode" as [nombre] makes more sense, -->
      <!--        But, I was simple following the instructions for job06 -->
      <label for="pincodeInput">Enter your pincode</label>
      <input id="pincodeInput" required autofocus
        type="text"
        name="nombre"
        inputmode="numeric"
        title="Enter your pincode"
        size="6"
        maxlength="6"
        placeholder="1 2 3 4 5 6"
      /> <!-- End of Pincode Input -->
      
      
      <!-- Checkbox Wrapper -->
      <label class="checkbox-wrapper horizontal layout center">
        <!-- Hide Pincode Checkbox Input -->
        <input id="hidePincode" onclick="handleCheckboxClick(this)"
          type="checkbox"
          title="Hide or show pincode"
          value="hidePincode" />
        <span for="hidePincode">hide pincode</span>
        <!-- End of Show Password Checkbox Input -->
      </label>
      <!-- End of Checkbox Wrapper -->
      
      
      <!-- Continue Button -->
      <input type="submit" value="Continue">

    </form>
    <!-- End of Form -->

    

    <!-- 2 TOASTS BELOW :) -->

    <!-- PHP: If the Pincode is 
              (1) valid,
              (2) *IS* even &
              (3) there's one or more get arguments... -->
    <?php if ($isValidPincode && $isEvenPincode && $numGetArgs) { ?>
    <!-- ...show the Even Toast -->

    <!-- Even Toast -->
    <div id="evenToast" class="toast good">
      <p><code><?php echo $PINCODE ?></code>&nbsp;Nombre <span>pair</span></p>
    </div>
    <!-- End of Even Toast -->

    <?php } ?>
    <!-- End of PHP: 'If the Pincode *IS* even...' -->




    <!-- PHP: If the Pincode is 
              (1) valid, 
              (2) *IS NOT* even (i.e. odd) &
              (3) there's one or more get arguments... -->
    <?php if ($isValidPincode && !$isEvenPincode && $numGetArgs) { ?>
    <!-- ...show the Odd Toast -->

    <!-- Odd Toast -->
    <div id="oddToast" class="toast">
      <p><code><?php echo $PINCODE ?></code>&nbsp;Nombre <span>impaire</span></p>
    </div>
    <!-- End of Odd Toast -->
    
    <?php } ?>
    <!-- End of PHP: 'If the Pincode *IS NOT* even (i.e. odd)...' -->


  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


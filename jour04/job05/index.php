<?php
/*
* Job: 05
* Day: 04 - (Thursday & Friday)
* Name: 'Jour 4 - Get et POST'
* File: index.php
* Author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* Version: -?-
* 
* Usage:
*   1-|> open http://localhost/runtrack2/jour04/job05/index.php
*
*
* ======== Job 05 ==========
*      >>> DESCRIPTION <<<		
* ~~~~~~~~ (French) ~~~~~~~~~
*
* - Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?) 
*   ayant deux champs <input> nommés username et password. Après validation du formulaire :
*
*   ● si le username est “John” ET le password est “Rambo” afficher :
*     “C’est pas ma guerre”
*
*   ● sinon afficher : 
*     “Votre pire cauchemar”
*
* ~~~~~~~~ (English) ~~~~~~~~
* 
* - Make a POST type login form (why not GET?),
*   with two <input> fields named username and password. After validation of the form:
*   
*   ● if the username is “John” AND the password is “Rambo” display:
*     "It's not my war"
*
*   ● otherwise display: 
*     “Your worst nightmare”
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


// Defining some constant variables...

// Get the username from POST
$USERNAME = $_POST['username'];
// Get the password from POST
$PASSWORD = $_POST['password'];

// Intialize the scary name & password variables
$scaryName = 'John';
$scaryPassword = 'Rambo';

// Check if our user is a scary fellow (ie. his/her username is 'John' and password is 'Rambo')
$isScaryUser = ($USERNAME === $scaryName && $PASSWORD === $scaryPassword);


// DEBUG [4dbsmaster]: tell me about it :)
// echo "USERNAME => $USERNAME <br> PASSWORD => $PASSWORD <br>";
// echo "isScaryUser ? " . json_encode($isScaryUser) . "<br>";


// Get an array of all the POST arguments as `postArgs`
$postArgs = $_POST;

// Initialize the 'number of post arguments' variable
$numPostArgs = 0;

// For each argument in `postArgs`...
foreach($postArgs as $arg) {
  // ...Increment the number of post arguments by 1
  $numPostArgs += 1;

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
    <meta name="description" content="Job5 of Day4 - Runtrack2">

    <title>Job05 - Jour04 | Runtrack2</title>

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

      /* Password Input */
      input[type="password"] {
        /* letter-spacing: 5px; */
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

      /* Span in Toast */
      .toast span {
        color: #edb2b8;
      }

      /* Code in Toast */
      .toast code {
        position: absolute;
        left: 20px;
        font-weight: bold;
        opacity: 0.3;
      }

      /* Coward Toast Style */
      #cowardToast {
        background: darkgreen;
      }

      /* Span in Coward Toast */
      #cowardToast span {
        color: #b9ff9d;
      }
  
      /* Brave Toast Style */
      #braveToast {}
      

      /* Set the maximum width of all forms and div.toast */
      form, .toast { max-width: 600px; }


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
        // Get the password input element as `passwordInputEl`
        let passwordInputEl = document.getElementById('passwordInput');

        // If the checkbox input or `showPasswordEl` is checked, toggle the `type` attribute of 
        // `passwordInputEl` between "text" and "password", using our beloved ternary statement
        passwordInputEl.type = (checkboxInputEl.checked) ? 'text' : 'password';

        // DEBUG [4dbsmaster]: tell me about it :)
        //console.log(`[handleCheckboxClick](1) : \
        //  checkboxInputEl.checked => \x1b[36m${checkboxInputEl.checked}\x1b[0m \
        //  passwordInputEl.type => \x1b[36m${passwordInput.type}\x1b[0m`);

      };

  </script>

  </head>
  <!-- End of HEAD -->

  <!-- BODY -->
  <body class="vertical layout centered" fullbleed>
    <!-- Shawarmax Meal - Image -->
    <!-- NOTE: Thanks to my IT teacher (Mrs. Aurelie) for the Shawarmax Flyer -->
    <img src="./shawarmax-meal.png" title="Thanks Mrs. Aurelie (BEST IT TEACHER EVER !!!)">

    <!-- H2 Title -->
    <h2>Log in to <a href="https://instagram.com/shawarmax.marseille" target="_blank">Shawarmax</a></h2>
     
    <!-- Form -->
    <form class="vertical layout" method="post">
      
      <!-- Username Input -->
      <label for="usernameInput">Username</label>
      <input id="usernameInput" required
        type="text" 
        name="username" 
        title="Enter a valid username" 
        placeholder="Enter your username"
      /> <!-- End of Username Input --> 


      <!-- Password Input -->
      <label for="passwordInput">Password</label>
      <input id="passwordInput" required
        type="password" 
        name="password" 
        title="Enter a valid password" 
        placeholder="Enter your password"
      /> <!-- End of Password Input -->

      <!-- Checkbox Wrapper -->
      <label class="checkbox-wrapper horizontal layout center">
        <!-- Show Password Checkbox Input -->
        <input id="showPassword" onclick="handleCheckboxClick(this)"
          type="checkbox"
          name="showPassword" 
          title="Show or hide password"
          value="Show Password" />
        <span for="showPassword">Show password</span>
        <!-- End of Show Password Checkbox Input -->
      </label>
      <!-- End of Checkbox Wrapper -->


      <!-- Submit Button -->
      <input type="submit" value="log in">

    </form>
    <!-- End of Form -->

    

    <!-- 2 TOASTS BELOW :) -->

    <!-- PHP: If the User *IS NOT* scary & there's one or more post arguments... -->
    <?php if (!$isScaryUser && $numPostArgs) { ?>
    <!-- ...show the Brave Toast -->

    <!-- Brave Toast -->
    <!-- NOTE: Hide the bave toast, if John's password is "Rambo" -->
    <div id="braveToast" class="toast" >
      <p><code>FR</code>&nbsp;Votre pire <span>cauchemar</span></p>
    </div>
    <!-- End of Brave Toast -->

    <?php } ?>
    <!-- End of PHP: 'If the User *IS NOT* scary...' -->




    <!-- PHP: If the User is *IS* scary & there's one or more post arguments... -->
    <?php if ($isScaryUser && $numPostArgs) { ?>
    <!-- ...show the Coward Toast -->

    <!-- Coward Toast -->
    <!-- NOTE: Hide the coward toast, if John's password is not "Rambo" -->
    <div id="cowardToast" class="toast" >
      <p><code>FR</code>&nbsp;C’est pas ma <span>guerre</span></p>
    </div>
    <!-- End of Coward Toast -->
    
    <?php } ?>
    <!-- End of PHP: 'If the User *IS* scary...' -->


  </body>
  <!-- End of BODY -->

</html>
<!-- End of HTML -->


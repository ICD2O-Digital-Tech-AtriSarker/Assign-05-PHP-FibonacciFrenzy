<!DOCTYPE html>
<!--
* Created by: Atri Sarker
* Created on: June 2024
* This file contains the index page for Assign-05-FibbonacciFrenzy
-->
<html>

<head>

  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description"
    content="A widget that displays a fibonacci sequence up to user's term count [ also supports multiple operators and different starting numbers ], Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- MDL -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Title -->
  <title>Fibonacci Frenzy in PHP</title>
</head>

<body>

  <!-- Header -->
  <h1>Fibonacci Frenzy in PHP</h1>

  <!-- INPUT FORM [used for form validation] -->
  <form id="inputForm" method="post" action="results.php" target="resultFrame">
    <!-- Table For Layout -->
    <table>
      <tr>
        <td>

          <!--  Term Count Input -->
          <label for="termCountInput">Term Count:</label>
          <input id="termCountInput" type="number" name="termCount" value="3" step="1" min="3" max="1000" />

          <br>

          <!-- Operator Input -->
          <label for="chosenOperatorInput">Operator:</label>
          <select name="chosenOperator" id="chosenOperatorInput">
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraction (-)</option>
            <option value="multiplication">Multiplication (*)</option>
          </select>

          <br>

          <!-- Starting Number Inputs -->
          <p>Starting Numbers : <br>
            <input id="n1Input" type="number" name="n1" value="0" step="1" min="-1000" max="1000" />
            <b>,</b>
            <input id="n2Input" type="number" name="n2" value="1" step="1" min="-1000" max="1000" />
          </p>
          <br>
        </td>
        <td>

          <!-- Image of PHP LOGO -->
          <img class="contentImg" src="./images/phpLogo.svg" alt="PHP Logo!">
          <br>

        </td>
      </tr>
    </table>

    <!-- Results Button -->
    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit"
      id="resultBtn" value="Get Result">
  </form>

  <!-- Result Display -->
  <!-- I got the onload and style stuff from stackoverflow:
  https://stackoverflow.com/questions/819416/adjust-width-and-height-of-iframe-to-fit-with-content-in-it

  It adjusts the size of the iframe so that it fits all content within it without needing a scrolling bar on the side.
  -->
  <iframe 
    name="resultFrame" 
    src="./results.php" 
    onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));'
    
    style="height:200px;width:100%;border:none;overflow:hidden;"
  >
  </iframe>

</body>

</html>
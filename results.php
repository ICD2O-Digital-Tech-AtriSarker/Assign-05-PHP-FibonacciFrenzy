
<!-- CSS -->
<link rel="stylesheet" href="./css/style.css">

<b id="outputResult">
  <?php

  if (isset($_POST['termCount'])) {

    // Get Term Count
    $termCount = intval($_POST["termCount"]);

    // Get Operator
    $chosenOperator = $_POST["chosenOperator"];

    function addition($num1, $num2) {
      return $num1 + $num2;
    }
    function subtraction($num1, $num2) {
      return $num1 - $num2;
    }
    function multiplication($num1, $num2) {
      return $num1 * $num2;
    }

    // Match evaluateFunction with operator
    $evaluateFunction = $chosenOperator;

    // Get Starting Numbers
    $n1 = intval($_POST["n1"]);
    $n2 = intval($_POST["n2"]);

    // Display First 2 Numbers
    echo "$n1 <br>";
    echo "$n2 <br>";

    // Variables to store previous terms
    $termBehind2 = $n1;
    $termBehind1 = $n2;

    // Loop
    for ($currentTerm = 3; $currentTerm <= $termCount; $currentTerm++) {

      // Get Current Term's Value
      $currentValue = $evaluateFunction($termBehind2, $termBehind1);

      // Display Current Term's Value
      echo "$currentValue <br>";

      // Update Variables
      $termBehind2 = $termBehind1;
      $termBehind1 = $currentValue;

    }

  } else {
    echo "Result will be displayed here";
  }

  ?>
</b> 

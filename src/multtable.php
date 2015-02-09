<?php
echo "<html>";
echo "\n<head>";
echo "\n<title>Multiplication Table</title>";
echo "\n<style type=\"text/css\">\ntable, td, th {\nborder: 1px solid #777;\n}";
echo "\n</style>";
echo "\n</head>";
echo "\n<body>";
// Thanks to Xisheng Wang for these next two lines!
error_reporting(E_ALL);
ini_set('display_errors', 1);

// function to check for data not null
function chkValid($val, $str)
{
    if (empty($val) && ($val != '0')) {
        return ('Missing parameter '.$str.'.');
    }
    else {
      if (!(is_numeric($val))) {
        return($str.' must be an integer.');
      }
      else {
        if ((strpos($val,"."))) {
          return($str.' must be an integer.');
        }
      }
    }
    return("");
};

// determines if max < min, returns str if yes otherwise value
// to use in calculating table size
function chkParams($maxVal,$minVal,$str) {
  if (($maxVal - $minVal) < 0)
  {
    return ('Minimum '.$str.' larger than maximum.');
  }
  return(($maxVal - $minVal)+1);
};

function generateHeader($minVal,$val) {
  echo "\n<thead>";
  echo "\n<tr>";

  // First empty cell
  echo "\n<th></th>";

  // Define header elements
  for ($i = $minVal; $i < $val; $i++)
  {
    echo "\n<th>";
    echo $i;
    echo "</th>";
  }
  echo "\n</tr>";
  echo "\n</thead>";
};


function generateBody($minMt, $minMy, $valMt, $valMy) {
  echo "\n<tbody>";
 
  //creating all cells
  for ($i = $minMy; $i < $valMy ; $i++) {
    //creates a table row
    echo "\n<tr>";
    //create first element in row
    echo '<th>'.$i.'</th>';
    for ($j = $minMt; $j < $valMt; $j++) {
      echo '<td>'.($i * $j).'</td>';
      }
    // end row
    echo "\n</tr>";
  }
  echo "\n</tbody>";
};

// Get input variables
function checkInputs() {
  $result = true;
  $chkValue = chkValid($_GET["min-multiplicand"],"min-multiplicand");
  if (!(empty($chkValue) )) {
    echo "<br>$chkValue<br>"; 
    $result = false;
  }
  $chkValue = chkValid($_GET["max-multiplicand"],"max-multiplicand");
  if (!(empty($chkValue) )){
    echo "<br>$chkValue<br>"; 
    $result = false;
  }
  $chkValue = chkValid($_GET["min-multiplier"],"min-multiplier");
  if (!(empty($chkValue) )){
    echo "<br>$chkValue<br>"; 
    $result = false;
  }
  $chkValue = chkValid($_GET["max-multiplier"],"max-multiplier");
  if (!(empty($chkValue) )){
    echo "<br>$chkValue<br>"; 
    $result = false;
  }
  if ($result) {
    //check for max > min
    if ($_GET["max-multiplicand"] < $_GET["min-multiplicand"]) {
      echo "<br>Minimum multiplicand larger than maximum<br>";
      $result = false;
    }
    if ($_GET["max-multiplier"] < $_GET["min-multiplier"]) {
      echo "<br>Minimum multiplier larger than maximum<br>";
      $result = false;
    }
  }
  
  return($result);
}

if (checkInputs()) {
  // get inputs
  $minMultiplicand = (int) $_GET["min-multiplicand"];
  $maxMultiplicand = (int) $_GET["max-multiplicand"];
  $minMultiplier = (int) $_GET["min-multiplier"]; 
  $maxMultiplier = (int) $_GET["max-multiplier"]; 

//  echo "minMultiplicand: $minMultiplicand<br>";
//  echo "maxMultiplicand: $maxMultiplicand<br>";
//  echo "minMultiplier: $minMultiplier<br>";
//  echo "maxMultiplier: $maxMultiplier<br>";
  
  //generate the table
  echo "\n<table>"; 
  $multiplicand = (($maxMultiplicand - $minMultiplicand) + 2);
//  echo "multiplicand: $multiplicand<br>";
  $multiplier = (($maxMultiplier - $minMultiplier) + 2);
//  echo "multiplier: $multiplier<br><br>";
  generateHeader($minMultiplier,(($maxMultiplier - $minMultiplier) + 2));
  generateBody($minMultiplier,$minMultiplicand,$multiplier,$multiplicand);
  echo "\n</table>"; 
}

echo "\n</body>";
echo "\n</html>";
?>

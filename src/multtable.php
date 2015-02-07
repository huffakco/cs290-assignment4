<html>
<?php
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
    if (empty($val)) {
        return ('Missing parameter '.$str);
    }
    else {
      if (!(is_numeric($val))) {
        return($str.' not a number');
      }
    }
    return("");
};

// determines if max < min, returns str if yes otherwise value
// to use in calculating table size
function chkParams($maxVal,$minVal,$str) {
  if (($maxVal - $minVal) < 0)
  {
    return ('Minimum '.$str.' larger than maximum\.');
  }
  return(($maxVal - $minVal)+2);
};

function generateHeader($minVal,$val) {
  echo "\n<thead>";
  echo "\n<tr>";

  // First empty cell
  echo "\n<th></th>";

  // Define header elements
  for ($i = $minVal; $i < $minVal + $val; $i++)
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
  for ($i = $minMy; $i < ($minMy + $valMy) ; $i++) {
    //creates a table row
    echo "\n<tr>";
    //create first element in row
    echo '<th>'.$i.'</th>';
    for ($j = $minMt; $j < ($minMt + $valMt); $j++) {
      echo '<td>'.($i * $j).'</td>';
      }
    // end row
    echo "\n</tr>";
  }
  echo "\n</tbody>";
};

// Get input variables
function checkInputs() {
  $chkValue = chkValid($_GET["min-multiplicand"],"min-multiplicand");
  if (!(empty($chkValue) )) {
      echo "<br>$chkValue<br>"; 
  }
  else {
    $chkValue = chkValid($_GET["max-multiplicand"],"max-multiplicand");
    if (!(empty($chkValue) )){
      echo "<br>$chkValue<br>"; 
    }
    else {
      $chkValue = chkValid($_GET["min-multiplier"],"min-multiplier");
      if (!(empty($chkValue) )){
        echo "<br>$chkValue<br>"; 
      }
      else {
        $chkValue = chkValid($_GET["max-multiplier"],"max-multiplier");
        if (!(empty($chkValue) )){
          echo "<br>$chkValue<br>"; 
        }
        else {
          return(true);
        }
      }
    }  
  }
  return(false);
}

if (checkInputs()) {
  // get inputs
  $minMultiplicand = $_GET["min-multiplicand"];
  $maxMultiplicand = $_GET["max-multiplicand"];
  $minMultiplier = $_GET["min-multiplier"]; 
  $maxMultiplier = $_GET["max-multiplier"]; 

  echo "minMultiplicand: $minMultiplicand<br>";
  echo "maxMultiplicand: $maxMultiplicand<br>";
  echo "minMultiplier: $minMultiplier<br>";
  echo "maxMultiplier: $maxMultiplier<br>";

  //generate the table
  echo "\n<table>"; 
  $multiplicand = (($maxMultiplicand - $minMultiplicand) + 2);
  echo "multiplicand: $multiplicand<br>";
  $multiplier = (($maxMultiplier - $minMultiplier) + 2);
  echo "multiplier: $multiplier<br><br>";
  generateHeader($minMultiplicand,(($maxMultiplicand - $minMultiplicand) + 2));
  generateBody($minMultiplicand,$minMultiplier,$multiplicand,$multiplier);
  echo "\n</table>"; 
}

echo "\n</body>";
?>

</html>

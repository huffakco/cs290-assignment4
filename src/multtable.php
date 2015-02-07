<html>
<head>
<title>PHP Looback</title>
</head>
<body>

<?php
// function to check for data not null
function chkValid($val, $str)
{
    if (!($val)) {
        return ('Missing parameter '.str);
    }
    else {
      if (checker($val) < 0) {
        return(str.' not a number');
      }
    }
    return($val);
};

// function to check for data a number
function checker($val) {
  if (typeof($val) === 'number')
  {
    return($val);
  }
  else {
    return (-1);
  }
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
  echo "<thead>";
  echo "<tr>";

  // First empty cell
  echo "<th>";
  echo "</th>";
 
  // Define header elements
  for ($i = $minVal; $i < $minVal + $val; $i++)
  {
    echo "<th>";
    echo $i;
    echo "</th>";
  }
  echo "</tr>";
  echo "</thead>";
};


function generateBody($minMt, $maxMy, $val) {
  echo "<tbody">;
 
  // creating all cells - finish converting to php
  for (var i = valParams.min_multiplier; i < valParams.min_multiplier + val ; i++) {
    // creates a table row
    var row = document.createElement('tr');
    // create first element in row
    var cell1 = document.createElement('th');
    cell1.innerHTML = i;
    row.appendChild(cell1);
    for (var j = valParams.min_multiplicand; j < valParams.min_multiplicand + val; j++) {
      var cell1 = document.createElement('td');
      cell1.innerHTML = i * j;
      row.appendChild(cell1);
    }
    // add the row to the end of the table body
    tblBody.appendChild(row);
  }
  echo "</tbody">;
};


// Get input variables
$minMultiplicand = chkValid($_GET["min-multiplicand"], "min-multiplicand");
$maxMultiplicand = chkValid($_GET["max-multiplicand"], "max-multiplicand");
$minMultiplier = chkValid($_GET["min-multiplier"], "min-multiplier");
$maxMultiplier = chkValid($_GET["max-multiplier"], "max-multiplier");

// check variables
if (!($minMultiplicand >= 0)) {
  echo $minMultiplicand;
}
elseif (!($maxMultiplicand >= 0)) {
  echo $maxMultiplicand;
}
elseif (!($minMultiplier >= 0)) {
  echo $minMultiplier;
}
elseif (!($maxMultiplier >= 0)) {
  echo $maxMultiplier;
}
else {
  // check that max greater than min
  $multiplicand = chkParams($maxMultiplicand,$minMultiplicand,"multiplicand");
  if (!($multiplicand > 0) {
    echo $multiplicand;
  }
  else {
    $multiplier = chkParams($maxMultiplier,$minMultiplier,"multiplier");
    if (!($multiplier > 0) {
      echo $multiplier;
    }
    else {
  
      // generate the table
      echo '<table>'; 
      generateHeader($minMultiplicand,$multiplicand);
      generateBody($minMultiplier,$min-Multiplicand,$multiplier);
      echo '</table>'; 
    }
  }
}

?>
</body>
</html>

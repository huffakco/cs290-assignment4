<?php 
echo "<!DOCTYPE html>";
echo "<html>";
echo "\n<head>";
echo "<meta charset='utf-8'>";
echo "\n<title>Loop Back</title>";
echo "\n</head>";
echo "\n<body>";

// Thanks to Xisheng Wang for these next two lines!
error_reporting(E_ALL);
ini_set('display_errors', 1);

// example input: ../loopback.php?key1=value1&key2=value2
// example output: {"Type":"GET","parameters":{"key1":"value1","key2":"value2"}}
// example output if it were a post: {"Type":"POST","parameters":{"key1":"value1","key2":"value2"}} 
//Reference: http://stackoverflow.com/questions/3406726/echo-key-and-value-of-an-array-without-and-with-loop
// Reference:
//http://stackoverflow.com/questions/249868/how-do-i-tell-for-a-php-page-if-someone-came-by-post-or-get
// foreach ($_SERVER as $key => $value) {
    // echo "$key: $value<br>";
// }

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $postStr = "{\"Type\":\"POST\",\"parameters\":";
  if (isset($_POST) && (sizeof($_POST) > 0)) {
    foreach ($_POST as $key => $value) {
      //echo "$key: $value<br>";
      //$postStr = "$postStr\"$key\":\"$value\",";
      $parameters[$key] = $value;
    } 
    $jsonStr = json_encode($parameters);
    echo "$postStr $jsonStr}";
  }
  else {
    echo "$postStr null}";
  }
}
else { 
  if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $getStr = "{\"Type\":\"GET\",\"parameters\":";
    if (isset($_GET) && (sizeof($_GET) > 0)) {
      foreach ($_GET as $key => $value) {
        //echo "$key: $value<br>";
        //$getStr = "$getStr\"$key\":\"$value\",";
        $parameters[$key] = $value;
      } 
      //echo "This is the string: <br>";
      $jsonStr = json_encode($parameters);
      echo "$getStr $jsonStr}";
    }
    else {
      echo "$getStr null}";
    }
  }
}
echo "\n</body>";
echo "\n</html>";
?>



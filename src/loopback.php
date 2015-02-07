<html>
<head>
<title>PHP Looback</title>
<!-- copied from us2.php.net/manual/en/tutorial -->
</head>
<body>
<?php 
// Thanks to Xisheng Wang for these next two lines!
error_reporting(E_ALL);
ini_set('display_errors', 1);

// example input: ../loopback.php?key1=value1&key2=value2
// example output: {"Type":"GET","parameters":{"key1":"value1","key2":"value2"}}
// example output if it were a post: {"Type":"POST","parameters":{"key1":"value1","key2":"value2"}} 

echo '<p>Hello World</p>'; 

 //foreach $value in $_GET array
 //Reference: http://stackoverflow.com/questions/3406726/echo-key-and-value-of-an-array-without-and-with-loop

if (sizeof($_GET) > 1) {
  $getStr = "{\"Type\":\"GET\",\"parameters\":{";
  foreach ($_GET as $key => $value) {
          echo "$key: $value<br>";
          $getStr = "$getStr\"$key\":\"$value\",";
  } 
  $getStr = "$getStr}}";
  echo "This is the string: <br>";
  echo $getStr;
} 
else {
  echo "<br>";
  echo "{\"Type\":\"GET\", \"parameters\":null}";
}

if (sizeof($_POST) > 1) {
  //foreach $value in $_POST array
  
    $postStr = "{\"Type\":\"POST\",\"parameters\":{";
  foreach ($_POST as $key => $value) {
          echo "$key: $value<br>";
          $postStr = "$postStr\"$key\":\"$value\",";
    } 
    $postStr = "$postStr}}";
    echo "This is the string: <br>";
    echo $postStr;
}
else {
  echo "<br>";
  echo "{\"Type\":\"POST\", \"parameters\":null}";
}
  
//Reference PHP Manual:
//  http://us2.php.net/manual/en/reserved.variables.get.php
echo "<br>This is the print_r result: <br>";
print_r($_GET);
echo '<br>';
//if($_GET["a"] === "") echo "a is an empty string\n";
//if($_GET["a"] === false) echo "a is false\n";
//if($_GET["a"] === null) echo "a is null\n";
//if(isset($_GET["a"])) echo "a is set\n";
//if(!empty($_GET["a"])) echo "a is not empty";

?>
</body>
</html>
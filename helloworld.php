<html>
<head>
<title>PHP Test</title>
<!-- copied from us2.php.net/manual/en/tutorial -->
</head>
<body>
<?php echo '<p>Hello World</p>'; 
?>

<?php
//Reference:
//http://www.w3schools.com/php/php_functions.asp
function writeMsg() {
  echo "Hello world!";
  echo "<br>";
}
?>
<?php
writeMsg(); 
?>
<?php
//Reference:
//http://www.w3schools.com/php/php_looping_for.asp
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
?>
<?php
function foo()
{
    echo '<p>Example function.\n</p>';
    return $retval;
}
//Reference:
//http://www.w3schools.com/php/php_forms.asp
    echo '<br>';
    echo 'Welcome  ';
    echo $_GET["name"]; 
    echo '<br>';
    echo 'Your email address is:';
    echo $_GET["email"]; 
    echo '<br>';
 
    echo '<br>';
    echo 'Welcome  ';
    echo $_POST["name"]; 
    echo '<br>';
    echo 'Your email address is:';
    echo $_POST["email"]; 
    echo '<br>';

 
// Reference
// PHP manual slightly modified
function sum($numbers) {
    $acc = 0;
    echo $numbers[0];
    for ($i=0; $i < count($numbers); $i++) {
        $acc += $numbers[i];
    }
    return $acc;
}
//output 10 when called
echo '<br>';
$myarray = array();
for ($j=1; $j < 5; $j++) {
  array_push($myarray,j);
  echo $j;
  echo '<br>';
  }


$var1 = count($myarray);
echo '<br>count: ';
echo '$var1';
echo 'sum($myarray)';

?>

</body>
</html>

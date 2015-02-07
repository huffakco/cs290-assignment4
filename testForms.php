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

echo '<p>Hello World</p>'; 

 //foreach $value in $_GET array
 //Reference: http://stackoverflow.com/questions/3406726/echo-key-and-value-of-an-array-without-and-with-loop

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
?>
</body>
</html>
<html>
<head>
<title>PHP Looback</title>
<!-- copied from us2.php.net/manual/en/tutorial -->
</head>
<body>
<?php echo '<p>Hello World</p>'; 
 $jsonParams = json_decode($_GET);
 foreach $prop in $jsonParams
    echo $prop;  
    
//Reference PHP Manual:
//  http://us2.php.net/manual/en/reserved.variables.get.php
echo "<br>This is the print_r result: <br>";
print_r($_GET);
//if($_GET["a"] === "") echo "a is an empty string\n";
//if($_GET["a"] === false) echo "a is false\n";
if($_GET["a"] === null) echo "a is null\n";
//if(isset($_GET["a"])) echo "a is set\n";
//if(!empty($_GET["a"])) echo "a is not empty";

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
<html>
<head>
<title>PHP Test</title>
<!-- copied from us2.php.net/manual/en/tutorial -->
</head>
<body>
<?php echo '<p>Hello World</p>'; 
phpinfo(); 
echo $_SERVER['HTTP_USER_AGENT'];
?>
<?php

function foo()
{
    echo '<p>Example function.\n</p>';
    return $retval;
}
?>
<?php
function sum($numbers) {
    $acc = 0;
    for ($i=0; $i<$numbers.length; $i++) {
        $acc += $numbers[i];
    }
    return $acc;

 return;
}

echo '<br>';
echo sum(1, 2, 3, 4);

?>
<!-- output 10 when called above -->
</body>
</html>

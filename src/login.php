<?php 
// Thanks to Xisheng Wang for these next two lines!
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!DOCTYPE html>";
echo "<html>";
echo "\n<head>";
echo "<meta charset='utf-8'>";
echo "\n<title>Login</title>";
echo "\n<style type=\"text/css\">";
echo "\ninput {\nmargin: 0.5em;\n}";
echo "\n</style>";
echo "\n</head>";
echo "\n<body>";
echo "\n<form action =\"http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/content1.php\" method =\"post\">";
echo "\nEnter user name: <input type='text' name='username'><br>";
echo "\n<button type='submit'>Login</button>";
echo "\n</form>";
echo "\n</body>";
echo "\n</html>";
?>



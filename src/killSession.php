<?php
//Reference:
// jwolford video from OSU CS290 PHP Sessions
session_start();
session_unset();
session_destroy();
echo "You have been logged out!";
//   redirect to the login page
$filepath = explode('/', $_SERVER['PHP_SELF'], -1);
$filepath = implode('/',$filepath);
$redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
header("Location: {$redirect}/login.php", true);
die();
?>
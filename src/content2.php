<?php 
// Thanks to Xisheng Wang for these next two lines!
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Reference:
// jwolford video from OSU CS290 PHP Sessions
session_start();

$jsonStr = json_encode($_SESSION);
echo $jsonStr;

echo "\n<html>";
echo "\n<head>";
echo "\n<title>Content2</title>";

echo "\n</head>";
echo "\n<body>";


if(session_status() == PHP_SESSION_ACTIVE){
  // check for user
  echo "<br>Session is active<br>";

  if ((!isset($_SESSION['username'])) || (empty($_SESSION['username']))) {
    echo "\nA username must be entered.  Click ";
    echo "<a href=\"http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/login.php\">here</a> ";
    echo "to return to the login screen.";
  }
  else {
    if (!($_SESSION['loginSuccess'])) {
      echo "\nLogin first.  Click ";
      echo "<a href=\"http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/login.php\">here</a> ";
      echo "to return to the login screen.";
    }
    else {
   
      // Display button to go to Content 1
      $url = "http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/content1.php?";

      echo "\n<div><br>";
      echo '<a href='.$url.'username='.$_SESSION['username'].',visits='.$_SESSION['visits'].'>Click for Content 1</a>';
      echo "\n</div>";
    }
  }  
}

echo "\n</body>";
echo "\n</html>";
?>



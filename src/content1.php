<?php 
// Thanks to Xisheng Wang for these next two lines!
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$url = "http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/";

//Reference:
// jwolford video from OSU CS290 PHP Sessions
session_start();
// if(isset($_POST['logout']) {
  // if ($_POST['logout']==='true') {
  // //end the session
  // $_SESSION = array();
  // session_destroy();
  // echo "You have been logged out!";
  // // redirect to the login page
  // $urlRedirect = $url.'\login.php';
  // echo $urlRedirect.'<br>';
  // $redirect = $urlRedirect;
  // die();
// }
//$filepath = explode('/', $_SERVER['PHP_SELF'], -1);
//$filepath = implode('/',$filepath);
//echo $filepath;
//$redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
//header("Location: {$redirect}/login.php", true);
//die();
  // }
// }
//$jsonStr = json_encode($_SESSION);
//echo $jsonStr;
echo "<!DOCTYPE html>";
echo "<html>";
echo "\n<head>";
echo "<meta charset='utf-8'>";
echo "\n<title>Content1</title>";
// javascript with button function
//echo "\n<script type='text/javascript'>function logout() {";
//httpRequest = new XMLHttpRequest();
//httpRequest.open('POST', 
//'http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/content1.php',
//false);
//httpRequest.send(null);
//echo "};";
//echo "\n</script>";
echo "\n</head>";
echo "\n<body>";

function loginCheck() {
  if (isset($_SESSION['loginSuccess']) && ($_SESSION['loginSuccess'])){
    // do nothing logged in
  }
  else {
    if ((!isset($_POST["username"])) || 
        (empty($_POST["username"])))  {
      echo "\nA username must be entered.  Click ";
      echo "<a href=\"http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/login.php\">here</a> ";
      echo "to return to the login screen.";
      $_SESSION['loginSuccess'] = false;
    }
    else {
      if ((!isset($_SESSION['username'])) || (empty($_SESSION['username']))) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['loginSuccess'] = true;
      }
      else {
        if ($_SESSION['username'] != $_POST['username']) {
          echo "\nA valid username must be entered.  Click ";
          echo "<a href=\"http://web.engr.oregonstate.edu/~huffakco/cs290-assignment4/login.php\">here</a> ";
          echo "to return to the login screen.";
          // login status doesn't change
        }
        else {
          $_SESSION['loginSuccess'] = true;
        }
      }
    }
  }
}



if(session_status() == PHP_SESSION_ACTIVE){
  //echo "<br>Session is active<br>";
  // check login
  if (isset($_GET['logout']) && ($_GET['logout']))
  {
    // log user out and redirect to login page;
    session_unset();
    session_destroy();
    echo "You have been logged out!";
    //   redirect to the login page
    $filepath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filepath = implode('/',$filepath);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
    header("Location: {$redirect}/login.php", true);
    ob_end_flush();
    ob_end_clean();
    die();
  }
  
  
  loginCheck();
  // logged in present content

// if user logged in, display content
  if ($_SESSION['loginSuccess']) {
    // Set the number of visits
    if (!isset($_SESSION['visits'])) {
      $_SESSION['visits'] = 0;
      $n = $_SESSION['visits'];  
      //echo "<br>New visit: $n <br>";
    }
    else {
      $_SESSION['visits']++;
      $n = $_SESSION['visits'];  
      //echo "<br>Return visit: $n<br>";
    }
    
    $n = $_SESSION['visits'];  
    echo '<br>Hello '.$_SESSION['username'].' you have visited this page ';
    echo "$n times before. Click ";
    echo "<a href=\"content1.php?logout=true\">here</a>";
    echo " to logout.";
    
    // Display button to go to Content 2

    echo "\n<div><br>";
    echo '<a href='.$url.'\content2.php?\'username\'=\''.$_SESSION['username'].'\',visits\'=\''.$_SESSION['visits'].'\'>Click for Content 2</a>';
    echo "\n</div>";

  }  
}

//$username = $_POST["username"];
//echo "\n<div>";
//echo "username: $username<br>";
//echo "\n</div>";

echo "\n</body>";
echo "\n</html>";
?>



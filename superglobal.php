<!-- PHP Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special. -->
<!-- $GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION -->
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
// $x = 75;
// function myfunction (){
//     echo $GLOBALS['x'];
// }
// myfunction();

// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];

//  $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
?>
</body>
</html>

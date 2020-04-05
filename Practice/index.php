<!-- Bootstrap CDN -->
<link href = "https://stackpath.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha383-Vkoo8x3CGsO3+Hhxv8T/Q4PaXtkKtu6ug4TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous">
<?php
// PHP error repporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// All classes of controller listing 
use project\Control\Home;
use project\Control\Blog;
use project\Control\Login;
use project\Control\User;
use project\Views\Error as Error;

require_once 'vendor/autoload.php';

// Default class and function name if none was provided
$control = "Home";
$function = 'home';
// Fetch URL and explode to get parameters from URL
$parameters = explode("/", $_SERVER['REQUEST_URI']);
// Check control and function parameters and if exist replace the default values
if (isset($parameters[2]) && !empty($parameters[2]) && isset($parameters[3]) && !empty($parameters[3])) {
    $control = $parameters[2];
    $function = $parameters[3];
  }
  // If blog id parameter is used check and set
  if (isset($parameters[4]) && !empty($parameters[4])) {
    $blog_id = $parameters[4];
  }
  // Start session
  session_start();
  // Include navigation bar in each page
  include ('NAV.php');
  echo "<br><br>";
  // Include Controller thing
if (file_exists('App/project/Control/' . $control . '.php')) {
    // Creating object from the control passed in the parameter.
	$Class_name = "project\Control\\" . $control;
  // Call class with namespaces
    $object = new $Class_name;
    // Check if function exist in that class
    if (method_exists($object, $function)) {
      if (isset($blog_id) || $control == "Blog") {
        $object -> $function ($blog_id);
      }
      else {
        $object -> $function();
      }
    }
  // Error display if file or method not found
    else {
      // Error management Class
      $error = new Error;
      $error->Not_found();
    }
  }
 else {
      // Error management Class
      $error = new Error;
      $error->Not_found();
  }
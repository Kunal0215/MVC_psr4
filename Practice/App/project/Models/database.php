<?php
// namespace project\Models;
?>
<!--
  * @file
  * This file contains database connections
-->
<?php
// class Database {
//   // public $con;
//   function __construct() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "project";
// Create connection
    $con = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
//   }
// }
?>
<?php
namespace project\Models;
?>
<!--
  * @file
  * This file contains database files for Home page display
-->
<?php
class Home {
  public function __construct() {
    // die('Hello tester model home<br>');
  }
  function home() {
      // Sql querries
      include ('database.php');
      $sql = "SELECT * FROM blogs order by created_at DESC";
      $result = $con->query($sql);
      // Pass sql result to view for output display
      return $result;
    }
}
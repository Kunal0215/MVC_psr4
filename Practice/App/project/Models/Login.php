<?php
namespace project\Models;
?>
  <!--
  * @file
  * This file contains database files for login
-->

<?php
/**
 * To fetch user data
 * @return $row data for further validation
 */
  class Login {
    /**
     * To compare login details of user and that of login database
     */
    function login() {
      $user=$_POST['uname'];
      $pass=$_POST['psw'];
      // Sql querries
      include ('database.php');
      $sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
      $result = $con->query($sql);
      $row = $result->fetch_assoc();
      return $row;
      }
    }

?>

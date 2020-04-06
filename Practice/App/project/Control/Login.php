<?php
namespace project\Control;
?>
<!--
  * @file
  * This file contains controller home page display
-->

<?php
use project\Models\Login as LoginModel;

/**
 * Class for login / logout related functions
 */
  class Login {
    /**
     * To display login page to user
     * @return [mixed]
     */
    function login() {
      // Check for already logged in user
      if (isset($_SESSION['user_id'])) {
        header("location: /index.php/User/Home");
      }
      include('App/project/Views/Login.php');
    }
    /**
     * To perform validations
     * @return [mixed]
     */
    function login_check() {
      $object = new LoginModel;
      $return_value = $object -> login();
      // Password validations
      if ($return_value['password'] == $_POST['psw']) {
        // Assign username to session variable
        $_SESSION['user_id'] = $return_value['username'];
        header("location: /index.php/User/Home");
      }
      else {
        echo "ENTER CORRECT PASSWORD \ USERNAME";
        include('view/LOGIN.php');
      }
    }
    /**
     * For logging out user
     * @return [mixed]
     */
    function logout() {
      echo "logout succesfull";
      echo $_SESSION['user_id'];
      session_destroy();
      header("location: /");
    }
  }
?>

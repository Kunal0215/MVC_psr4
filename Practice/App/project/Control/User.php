<?php
namespace project\Control;
?>
<!--
  * @file
  * This file contains controller for all user specific functions
-->

<?php
use project\Models\User as UserModel;

/**
 * Implements logged in user operations namely add, delete, edit, user homepage.
 */
class User {
  /**
   * For displaying adding a new blog page
   * @return [mixed]
   */
  // Constructor function to check if user is logged in or not
  function __construct() {
    if (!isset($_SESSION['user_id'])) {
      // Redirect un authenticated user to home page
    header("location: /App/project/Views/403.php");
    }
    else {
      // $object = new UserModel;
    }
  }

  function add() {
    include('App/project/Views/Add.php');
  }
  /**
   * New post data to model
   * @return [mixed]
   */
  function add_feed() {
       $object = new UserModel;

    $object -> add();
  }
  /**
   * User specific homepage
   * @return [mixed]
   */
  function home() {
      $user = $_SESSION['user_id'];
       $object = new UserModel;
      $result = $object -> home($user);
      include('App/project/Views/Home.php');
      
  }
  /**
   * To delete a particular blog
   * @param $blog_id blog that is to be deleted
   * @return [mixed]
   */
  function delete ($blog_id) {
       $object = new UserModel;

    $object -> delete($blog_id);
  }
  /**
   * Edit a perticular blog and fetch previous data to show in form
   * @param $blog_id blog that is to be edited
   * @return [mixed]
   */
  function edit ($blog_id) {
       $object = new UserModel;
    
    $result = $object -> edit_show($blog_id);
    $row = $result -> fetch_assoc();
    // Check if user is editing own blog otherwise restrict edit
    if ($row['username'] == $_SESSION['user_id']) {
      // Previous data to form through calling editview class
      $words = explode("/", $row['image']);
      include('App/project/Views/Edit.php');
    }
    else {
       include('App/project/Views/403.php');
    }
  }
  /**
   * To update the data in database as per new changes in a blog
   * @param $blog_id blog that is edited
   * @return [mixed]
   */
  function edit_feed ($blog_id) {
       $object = new UserModel;

    $object -> edit($blog_id);
  }
}
?>

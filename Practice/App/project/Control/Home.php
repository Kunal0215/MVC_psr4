<?php
namespace project\Control;
?>
<!--
  * @file
  * This file contains controller for homepage of project
-->
<?php
use project\Models\Home as HomeModel;

class Home {
  function home() {
      $object = new HomeModel;
      $result = $object -> home();
      include('App/project/Views/Home.php');
    }
}
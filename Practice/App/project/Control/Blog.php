<?php 
namespace project\Control;
?>
<!--
  * @file
  * This file contains controller for blog detailed display
-->

<?php
use project\Models\Blog as BlogModel;

/**
 * Implements single blog display
 */
  class Blog {
    /**
     * This functions takes block id and passes to model
     * @param $id blog id to be displayed
     * @return [mixed]
     */
    function blog($id) {
      if (isset ($id) && !empty ($id)) {
        $object = new BlogModel;
        $row = $object -> blog($id);
        if(isset($row)) {
         include('App/project/Views/Blog.php');
        }
      }
      else {
       include('App/project/Views/403.php');
      }
    }
  }
?>

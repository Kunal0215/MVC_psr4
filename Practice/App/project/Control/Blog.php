<?php 
namespace project\Control;
?>
<!--
  * @file
  * This file contains controller for blog detailed display
-->

<?php
use project\Models\Blog as BlogModel;
use project\Views\Error as Error;



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
        $object -> blog($id);
      }
      else {
        $error = new Error;
        $error->Not_found();
      }
    }
  }
?>

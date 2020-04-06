<?php 
namespace project\Models;
?>
<!--
  * @file
  * This file contains database files for Single blog display
-->

<?php

/**
 * To display single detailed blog
 */
class Blog {
  /**
   * To fetch blog data out of database
   * @param $blog_id blog id that is to be displayed
   * @return [mixed]
   */
  function blog($blog_id) {
    // Sql querries
    include ('database.php');
    $sql = "SELECT * FROM blogs WHERE id = '$blog_id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    // Check if blog exist or not
    if(!empty($row['title']))
    {
      // Pass sql result to view for output display
      return $row;
    }
    else {
       include('App/project/Views/404.php');
    }
    }
  }
?>

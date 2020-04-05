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
	public function __construct() {
		// Constructor
	}
	function home() {
      $object = new HomeModel;
      $object -> home();
    }
}
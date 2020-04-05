<?php
namespace project\Views;
?>
<!--
  * @file
  * This file is used for page not found error showing
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  <!--Stlylesheet -->
  <link type="text/css" rel="stylesheet" href="/view/css/ERROR.css" />
</head>
<body>
  <div id="notfound">
    <div class="notfound">
      <div class="notfound-404">
        <?php
          class Error {
            function Not_found() {
              echo "<h3>Oops! Page not found</h3><h1><span>4</span><span>0</span><span>4</span>
                    </h1></div><h2>we are sorry, but the page you requested was not found</h2>";
            }
            function No_access() {
              echo "<h3>Unrestricted Access</h3><h1><span>4</span><span>0</span><span>3</span>
                    </h1></div><h2>You donot have access to this page. Back to Home page</h2>"; 
            }
          }
        ?>
        
    </div>
  </div>
</body>
</html>

<!--
  * @file
  * This file is used for displaying home page
-->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel='stylesheet' type='text/css' href='/App/project/Views/css/SHOW.css'>
</head>
<body>
  <div class = "row container">
<?php
    while ($row = $result->fetch_assoc()) {
      echo "<div class = 'card'><div class = 'inside'><h2><a href = /index.php/Blog/Blog/" . $row['id'] . ">" . $row['title'] ."</a></h2><h5>";
      $words = explode(" ", $row['content']);
      if (isset($words[5])) {
        for ($i = 0; $i < 5; $i++) {
          echo  " " . $words[$i] ;
        }
        echo "...<a href = /index.php/Blog/Blog/" . $row['id'] . ">Read more</a></h5>";
      }
      else {
        print_r($row['content']);
        echo "<br>";
      }
      echo "<p style = 'font-size:12px'>created by : <u>" . $row['username'] . "</u> --- created at : " . $row['created_at'] . "</p></div>" ;
      echo "</div><br>";
    }
?>
</body>
</html>

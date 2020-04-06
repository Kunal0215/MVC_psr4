<!--
  * @file
  * This file is used for displaying single blog in detail
-->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel='stylesheet' type='text/css' href='/App/project/Views/css/SHOW.css'>
  <link rel='stylesheet' type='text/css' href='/App/project/Views/css/MAIN.css'>
  <link rel='stylesheet' type='text/css' href='/App/project/Views/css/FONT.css'>

</head>
<body>
  <div class="row container mx-auto">
    <div class="leftcolumn">
      <div class='card'>
        <div class='inside'>
          <h1><?php echo $row['title'];?></h1>
          <div class = 'image fit flush'>
            <b><img src = "<?php echo $row['image'];?>"></b>
          </div>
            <br>
            <h5><?php echo $row['content'];?></h5>
            <br>
            <p style = 'background-color:yellow;width: 39%;padding: 2px;'>
              created by : 
              <u><?php echo $row['username'];?></u>
              <br>created at : <?php echo $row['created_at'];?>
            </p>
<?php
       // Own content edit and delete options
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['username']) {
      echo "<button class='btn'><a href = /index.php/User/delete/". $row['id'] .">DELETE POST</button>";
      echo "<button class='btn'><a href = /index.php/User/edit/". $row['id'] .">EDIT POST</button>";
    }
?>
</div></div><br>
</body>
</html>

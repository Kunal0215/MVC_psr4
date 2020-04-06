<?php
namespace project\Views;
?>
<!--
  * @file
  * This file is used for displaying blog edit page
-->
<!DOCTYPE html>
<head>

  <link rel="stylesheet" href="/App/project/Views/css/DEFAULT.css">
  <link rel="stylesheet" href="/App/project/Views/css/LAYOUT.css">
  <link rel="stylesheet" href="/App/project/Views/css/NAVCSS.css">

  <title>Add content to blogs</title>
</head>
<body>
<h2 style="text-align: center;">Edit Post</h2>
<form action = "/index.php/User/edit_feed/<?php echo $row['id']; ?>" method ='POST' enctype = 'multipart/form-data'>
   <div><label for = 'title'>Title</label>
  <input type = 'text' placeholder = 'Blog title here' name = 'title' value = "<?php echo $row['title'];?>"><?php $row['title']?></input>
  </div><div><label for = 'image'>Image</label>
  <input type = 'file' name = 'image'></input> <?php echo $words[4]; ?>
  </div><div><label for = 'contents'>Content</label>
  <textarea placeholder = 'Please add the blog content here' name = 'contents' cols = 20 rows = 20>
  <?php echo $row['content']; ?></textarea></div>
  <p><input type = 'submit' name = 'submit' value = 'Edit Post' /></p>
</form>
</body>
</html>

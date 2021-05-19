<?php session_start(); 
if(!isset($_SESSION['Username'])){
header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit menu</title>
  <link rel="stylesheet" href="assets/edit.css">

</head>
<body>
  <div class="menu">
    <div id="title">Edit menu</div>
        <nav id="navigation">
          <a href="change-bio.php">Bio</a>
            <a href="change-blog.php">Blog</a>
            <a href="change-contact.php">Contact</a>
        </nav>
    <div id="exit-buttons">
        <a class="button" href="index.php">Back to website</a>
        <a id="exit" href="logout.php">Log out...</a>
    </div>
</div>
</body>
</html>
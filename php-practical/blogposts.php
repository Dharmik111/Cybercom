<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
</head>
<body>
	 <form method="POST" name="form">
      	<p align="right"><button formaction="blogposts.php">Blog Posts</button>
      	<button formaction="blogcategery.php">Blog Categery</button>
      	<button formaction="pro.php">My Profile</button>
      	<button formaction="login.php">Logout</button></p>
      </form>
     <form action="POST" name="form">
     	 <h2><strong>Blog Posts</strong></h2>
     	 <button formaction="addblogs.php">Add Blog Post</button>
     </form>
</body>
</html>

<?php
        $conn_error = 'Could not connect.';
        $mysql_host='localhost';
      $mysql_user='root';
    $mysql_pass='';
    $mysql_db='database';
    $conn= mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
    if(!$conn){
    die($conn_error);
    }
    $con=mysqli_query($conn,"select*from userinfo");

?>
<div>
  <td>Blogs Posts</td><br>
  <table border="1">
    <th>Id</th>
    <th>Category Name</th>
    <th>Title</th>
    <th>Published At</th>
    <th>Action</th>
    

    <?php

    while($row=mysqli_fetch_array($con))
    {
    ?>
    
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['categoryname'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['publishedat'];?></td>
        <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
        <td><input type="submit" value="Update"></td>&nbsp
        </form>
        <form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
        <td><input type="submit" value="Delete"></td>&nbsp
        </form>
      </tr>
    <?php 
           }
        ?>
    </table>
</div>
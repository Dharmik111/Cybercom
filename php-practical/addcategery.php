<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['metatitle']) && isset($_POST['parentcategory'])&&isset($_POST['image']))
    {       $title=$_POST['title'];
			$content = $_POST['content'];
			$url = $_POST['url'];
			$metatitle = $_POST['metatitle'];
			$parentcategory = $_POST['parentcategory'];
			$image = $_POST['image'];
			if(!empty($title)&&!empty($content) &&!empty($url)&&!empty($metatitle) && !empty($parentcategory) && !empty($image))
			{   
				echo "string2222";
			   $conn_error = 'Could not connect.';
	            $mysql_host='localhost';
				$mysql_user='root';
				$mysql_pass='';
				$mysql_db='database';
				$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
				if(!$conn){
				die($conn_error);
				}
				
				$query = "INSERT INTO `blogtable`(`title`, `content`, `url`, `categoryname`,`image`) 
                                VALUES ('$title','$content','$url','$metatitle','$image')"; 
				if(mysqli_query($conn,$query))
				{
					header("Location:blogposts.php");
				}
				else{
					echo "Unable to enter your process!!";
				}
			}
			else
			{
			  echo "Fill All The Fields";
			}
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Add New Category</title>
</head>
<body>
	<form method="POST" name="form">
	<center>
	<h1>Add New Category</h1>
	<table>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="title" id="title"><br><br></td>
	</tr>
	<tr>
		<td>Content:</td>
		<td><textarea name="content" id="content" cols="22" rows="10"></textarea><br><br></td>
	</tr>	
	<tr>
		<td>URL:</td>
		<td><input type="text" name="url" id="url"><br><br></td>
	</tr>
	<tr>
		<td>Meta Title:</td>
		<td><input type="text" name="metatitle" id="metatitle"><br><br></td>
	</tr>
	<tr>
		<td>Parent Category:</td>
		<td>
			<select name="parentcategory" id="parentcategory">
			<option>Life Style</option>
			<option>Health</option>
			<option>Education</option>
			<option>Music</option>
			</select><br><br>
		</td>
	</tr>
	<tr>
		<td>Image:</td>
		<td><input type="file" name="image" id="image"><br><br></td>
	</tr>
	</table>
	<input type="submit" value="Submit">

</center>
</form>
</body>
</html>
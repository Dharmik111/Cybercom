<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Blog Post</title>
</head>
<body>
            <center>
            <h1>Add New Blog Post</h1>
            <form method="POST" enctype="multi/form-data">

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
            <td>Published At:</td>
            <td><input type="date" name="publishedat" id="publishedat"><br><br></td>
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
            <button>Submit</button>

            </form>
</center>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['publishedat']) && isset($_POST['parentcategory'])&&isset($_POST['image']))
    {       $title=$_POST['title'];
			$content = $_POST['content'];
			$url = $_POST['url'];
			$publishedat = $_POST['publishedat'];
			$parentcategory = $_POST['parentcategory'];
			$image = $_POST['image'];
			if(!empty($title)&&!empty($content) &&!empty($url)&&!empty($publishedat) && !empty($parentcategory) && !empty($image))
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
				
				$query = "INSERT INTO `blogtable`(`title`, `content`, `url`, `publishedat`,`image`) 
                                VALUES ('$title','$content','$url','$publishedat','$image')"; 
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
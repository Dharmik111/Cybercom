<!DOCTYPE html>
<html>
<head>
	<title>Second Page</title>
</head>
<body>
	 <form method="POST" name="form">
	 <h2><b>Your Profile Data</b></h2>
     <button formaction="managecategery.php">Go Back</button><br>
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
	<td>Profile</td><br>
	<table border="1">
		<th>Id</th>
		<th>Prefix</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Password</th>
		<th>Information</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Login At</th>

		<?php

		while($row=mysqli_fetch_array($con))
		{
	 	?>
		
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['prefix'];?></td>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['password_hash'];?></td>
				<td><?php echo $row['info'];?></td>
				<td><?php echo $row['createdat'];?></td>
				<td><?php echo $row['updatedat'];?></td>
				<td><?php echo $row['loginat'];?></td>
			</tr>
		<?php	
           }
        ?>
    </table>
</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="register.js"></script>
</head>
<body>
      <center>
       <form action="register.php" method="POST" name="form">
		  <div class="container">
		    <h1>Register</h1>
            <table>
		    <tr>
		    	<td>Prefix:</td>
		    	<td><select name="select">
		    		<option disabled selected>select</option>
		    	    <option value="Mr.">Mr.</option>
		    		<option value="Mrs.">Mrs.</option>
		    		<option value="Dr.">Dr.</option>
		    		<option value="Er.">Er.</option>
		        </select></td>
		    </tr>
            
            <tr>
                <td>First Name:</td>
            	<td><input type="text" placeholder="First Name" name="fname" id="fname" ></td>
            </tr>
             <tr>
                <td>Last Name:</td>
                <td><input type="text" placeholder="Last Name" name="lname" id="lname"></td>
		    </tr>
		     <tr>
                <td>Email:</td>
		        <td><input type="text" placeholder="Email" name="email" id="email"></td>
             </tr>
             <tr>
                <td>Mobile Number:</td>
		        <td><input type="text" placeholder="Mobile Number" name="number" id="number"></td>
             </tr>
             <tr>
                <td>Password:</td>
	            <td><input type="password" placeholder="Password" name="password1" id="password1"></td>
             </tr>
             <tr>
                <td>Confirm Password:</td>
		         <td><input type="password" placeholder="Confirm Password" name="password2" id="password2"></td>
              </tr>
              <tr>
                <td>Information:</td>
                <td><textarea rows="8"cols="40" name="info"></textarea></td>
            </tr>
            <tr>
                <td></td>
		      <td><input type="checkbox" name="btn" checked><label>Hereby,I Accept Terms & Conditions.</label></td>
		  </tr>
          <tr>
                <td></td>
		        <td><button type="submit" class="registerbtn"  onclick="return validation();">Register</button></td>
		    </tr>
		  </table>
		  </div>
</form>
</center>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['select']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password1'])&&isset($_POST['password2'])&&isset($_POST['info']))
    {       $select=$_POST['select'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$number = $_POST['number'];
			$pass_hash = $_POST['password1'];
			$password2 = $_POST['password2'];
			$info = $_POST['info'];
			
			if(!empty($select)&&!empty($fname) &&!empty($lname)&&!empty($email) && !empty($number) && !empty($pass_hash) && !empty($password2) && !empty($info))
			{
			   $conn_error = 'Could not connect.';
	            $mysql_host='localhost';
				$mysql_user='root';
				$mysql_pass='';
				$mysql_db='database';
				$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
				if(!$conn){
				die($conn_error);
				}
				
				$query = "INSERT INTO `userinfo`(`prefix`, `fname`, `lname`, `mobile`, `email`, `password_hash`,`info`) 
                                VALUES ('$prefix','$fname','$lname','$number','$email','$pass_hash','$info')"; 
				if(mysqli_query($conn,$query))
				{
					header("Location:login.php");
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
<!DOCTYPE html>
<html>

<head>
<title>Form4</title>
<script type="text/javascript" src="Form4_Practice.js"></script>
<style type="text/css">
			table {
			width: 400px;
			background-color: rgb(255, 222, 173);
			padding: 10px;
			}
			td{
				padding: 10px
			}
			.header,
			.footer {
			width: 393px;
			height: 50px;
			background-color:#ff9006;
			color: #002651;
			padding: 5px;
			}

			#submit {
			height: inherit;
			width: inherit;
			background: none;
			border: none;
			font-size: 30px;
			}

			form input {
			height: 30px;
			width: 350px;
			}
			</style>
</head>

<body>
     <center>
       <h1>Form 4 Practice</h1>
     </center>
     <center>
     <form action="Form4_Practice.php" method="POST" name="form" onsubmit="return checkelement();">
       <div class="header" style="border-radius: 20px 20px 0px 0px">
          <strong><h2>CONTACT US!</h2></strong>
       </div>
       <table>
           <tr colspan="2">
             <td><input type="text" name="name" id="name" placeholder="  Name..."></td>
           </tr>
           <tr colspan="2">
			<td><input type="text" name="email" id="email" placeholder="  Email..."></td>
	       </tr>
		<tr colspan="2">
			<td><input type="text" name="subject" id="subject" placeholder="  Subject..."></td>
		</tr>
		<tr colspan="2">
			<td><textarea name="message" id="message" placeholder="  Message..." rows="5" cols="48" maxlength="1000"></textarea></td>
		</tr>
		</table>
		<div class="footer" style="border-radius: 0px 0px 20px 20px">
			<input type="submit" name="submit" id="submit" value="SEND MESSAGE">
		</div>
	 </form>
	 </center>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
echo '<br><center><h2>Your Input:</h2></center><br>';
echo '<br><center>First Name: '.$name.'</center>';
echo '<br><center>Email: '.$email.'</center>';
echo '<br><center>Subject: '.$subject.'</center>';
echo '<br><center>Message: '.$message.'</center>';
} else {
echo "Fill All The Fields";
}
}
}
?>
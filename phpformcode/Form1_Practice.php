<!DOCTYPE html>
<html>
<head>
<title>Form 1</title>
<script src="Form1_Practice.js">
</script>
</head>
<body>
<center><h2>Form1 Practice.</h2></center>
<center>
<form action="Form1_Practice.php" method="POST" name="form" onsubmit="return checkelement();">
<table border="1px">
<tr style="background-color: yellow">
<th style="width:70" colspan="2">USER FORM</th>
</tr>
<tr>
<td style="background-color: skyblue">Enter Name</td>
<td style="background-color: skyblue"><input type="text" name="entername" maxlength="13" id="entername" style="background-color:orange"></td>
</tr>
<tr>
<td style="background-color: skyblue">Enter Password</td>
<td style="background-color: skyblue"><input type="password" name="enterpassword" id="enterpassword" maxlength="16" minlength="6" style="background-color:orange"></td>
</tr>
<tr>
<td style="background-color: skyblue">Enter Address</td>
<td style="background-color: skyblue">
<textarea name="enteraddress" id="enteraddress" rows="3" cols="30" maxlength="1000" style="background-color:orange" ></textarea>
</tr>
<tr>
<td style="background-color: skyblue">Select Game</td>
<td style="background-color: skyblue">
<input type="checkbox" id="hockey"name="game[]" value="Hockey"><label for="hockey">Hockey</label><br>
<input type="checkbox" name="game[]" value="Football" id="football"><label for="football">Football</label><br>
<input type="checkbox" name="game[]" value="badminton" id="badminton"><label for="badminton">Badminton</label><br>
<input type="checkbox" name="game[]" value="Cricket" id="cricket"><label for="cricket">Cricket</label><br>
<input type="checkbox" name="game[]" value="Volleyball" id="volleyball"><label for="volleyball">Vollyball</label><br></td>
</tr>
<tr>
<td style="background-color: skyblue">Gender</td>
<td style="background-color: skyblue">
<input type="radio" name="gender" value="Male" id="Male"><label for="male" >Male</label>
<input type="radio" name="gender" value="Female" id="Female"><label for="Female" >Female</label>
</td>
</tr>
<tr>
<td style="background-color: skyblue">Select ur age</td>
<td style="background-color: skyblue"><select name="select" >
<option disabled selected>select</option>
<option value="0-10 Age">0-10 Age</option>
<option value="10-20 Age">10-20 Age</option>
<option value="20-30 Age">20-30 Age</option>
<option value="30 Above Age">30 Above Age</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: skyblue" >
<input type="file" value="file" name="file" id="file" style="background-color:orange" ><br>
</td>
</tr>
<tr>
<td style="background-color: skyblue" width="300"colspan="2">
<input type="reset" value="Reset" style="background-color:orange">
<input type="submit" name="submit" value="Submit Form" style="background-color:orange">
</td>
</tr>
</table>
</form>
</center>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
//$name= $_FILES['file']['name'];
if(isset($_POST['entername']) && isset($_POST['enterpassword']) && isset($_POST['enteraddress']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['select'])){
 $name = $_POST['entername'];
 $pass = $_POST['enterpassword'];
 $addr = $_POST['enteraddress'];
 $games = $_POST['game'];
 $gender = $_POST['gender'];
$age = $_POST['select'];

if(!empty($name) && !empty($pass) && !empty($addr) && !empty($games) && !empty($gender) && !empty($age)){
echo '<br><h2>Your Input:</h2><br>';
echo 'Name: '.$name;
echo '<br>Password: '.$pass;
echo '<br>Address: '.$addr;
echo '<br>Games: '.json_encode($games);
echo '<br>Gender: '.$gender;
echo '<br>Age: '.$age;

}else{
echo "Fill All The Fields";
}
}
}
?>
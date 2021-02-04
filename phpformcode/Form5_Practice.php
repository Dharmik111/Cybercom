<!DOCTYPE html>
<html>
    <head>
        <title>Form 5</title>
        <script src="Form5_Practice.js"></script>
        <style>
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
            padding: 5px;
            }

            form input {
            height: 30px;
            width: 350px;
            }
</style>
    </head>
    <body>  
        <center>
         <form action="Form5_Practice.php" method="POST" name="form" onsubmit="return checkelement();">
            <div class="header" style="color: black; background-color: #FF0000; border-radius: 20px 20px 0px 0px">
                <center><h2><strong>Sign In</strong></h2></center>
            </div>
            <table>
                    <tr colspan="2"><td><b>E-mail address</b></td></tr>
                    <tr colspan="2"><td><input type="text" name="email" placeholder="mail@address.com"></td></tr>
                    <tr colspan="2"><td><b>Password</b></td></tr>
                    <tr colspan="2"><td><input type="password" name="password" placeholder="********"></td></tr>
            </table>
            <div class="footer" style="color: black;  background-color: #00FF00; border-radius: 0px 0px 20px 20px">
                <input type="submit" name="submit" id="submit" value="Sign in">
            </div>
        </form>
        </center>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
if (isset($_POST['email']) && isset($_POST['password'])) {
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
echo '<br><center><h2>Your Input:</h2></center><br>';
echo '<br><center>Email Id : '.$email.'</center>';
echo '<br><center>Password : '.$password.'</center>';
} else {
echo "Fill All The Fields";
}
}
}
?>
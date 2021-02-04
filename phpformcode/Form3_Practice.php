<!DOCTYPE html>
<html>
<head>
	<title>Form 3</title>
     <script src="Form3_Practice.js"></script>
     <style>
          table {
            padding: 10px 10px 10px 10px;
        }
        td{
                padding-top: 10px;
                padding-left: 10px;
        }    
        td~td{
                padding-right:70px;
            }    
     </style>
</head>
<body>
     <center><h2>Form3 Practice</h2></center>
     <form action="Form3_Practice.php" method="POST" name="form" onsubmit="return checkelement();" border="0">
     
     <center>
          <div style="color: yellow; background-color:rgb(230, 138, 0); width:431px; height:40px"><strong style="float:left; padding:10px 0px 0px 10px">Sign Up</strong></div>  
     <table style="background-color: black" border="0">
     	
         
     	<tr>
     		<td align="right" style=" color:yellow">First Name</td>
               <td><input type="text" name="firstname" placeholder="Enter First Name" id="firstname"></td>
     	</tr>
          <tr>
               <td align="right" style="  color:yellow">Last Name</td>
               <td><input type="text" name="lastname" placeholder="Enter Last Name" id="lastname"></td>
          </tr>
          <tr>
               <td align="right" style=" color:yellow">Date Of Birth</td>
               <td>
                    <select name="day">
                         <option disabled selected>Day</option>
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                         <option>6</option>
                         <option>7</option>
                         <option>8</option>
                         <option>9</option>
                         <option>10</option>
                         <option>11</option>
                         <option>12</option>
                         <option>13</option>
                         <option>14</option>
                         <option>15</option>
                         <option>16</option>
                         <option>17</option>
                         <option>18</option>
                         <option>19</option>
                         <option>20</option>
                         <option>21</option>
                         <option>22</option>
                         <option>23</option>
                         <option>24</option>
                         <option>25</option>
                         <option>26</option>
                         <option>27</option>
                         <option>28</option>
                         <option>29</option>
                         <option>30</option>
                         <option>31</option>
                    </select>
                    <select name="month">
                         <option disabled selected>Month</option>
                         <option>Jan</option>
                         <option>Feb</option>
                         <option>Mar</option>
                         <option>Apr</option>
                         <option>May</option>
                         <option>Jun</option>
                         <option>July</option>
                         <option>Aug</option>
                         <option>Sep</option>
                         <option>Oct</option>
                         <option>Nov</option>
                         <option>Dec</option>
                    </select>
                    <select name="year">
                         <option disabled selected>Year</option>
                         <option>1990</option>
                         <option>1991</option>
                         <option>1992</option>
                         <option>1993</option>
                         <option>1994</option>
                         <option>1995</option>
                         <option>1996</option>
                         <option>1997</option>
                         <option>1998</option>
                         <option>1999</option>
                         <option>2000</option>
                         <option>2001</option>
                         <option>2002</option>
                         <option>2003</option>
                         <option>2004</option>
                         <option>2005</option>
                         <option>2006</option>
                         <option>2007</option>
                         <option>2008</option>
                         <option>2009</option>
                         <option>2010</option>
                    </select>
               </td>
          </tr>
          <tr>
               <td align="right" style="  color:yellow ">Gender</td>
               <td style="  color:yellow ">
                    <input type="radio" name="gender" value="male" id="male">Male
                    <input type="radio" name="gender" value="female" id="female">Female<br>
               </td>
          </tr>
          <tr>
               <td align="right" style=" color:yellow ">Country</td>
               <td>
                   <select name="nation">
                        <option disabled selected>Country</option>
                        <option>India</option>
                        <option>Amreica</option>
                        <option>Dubai</option>
                        <option>UK</option>
                        <option>Japan</option>
                        <option>Russia</option>
                        <option>Europe</option>
                        <option>New zeland</option>
                        <option>Austrellia</option>
                        <option>Iraq</option>
                   </select> 
               </td>
          </tr>
          <tr>
               <td align="right" style="  color:yellow ">Email</td>
               <td><input type="text" name="email" placeholder="Enter E-mail"></td>
          </tr> 
          <tr>
               <td align="right" style="  color:yellow ">Phone</td>
               <td><input type="tel" name="phonenumber" placeholder="Enter Phone Number" ></td>
          </tr>    
          <tr>
               <td  align="right" style="  color:yellow ">Password</td>
               <td><input type="password" name="password1" id="password1"></td>
          </tr>
          <tr>
               <td align="right" style="  color:yellow ">Confirm Password</td>
               <td><input  type="password" name="password2" id="password2"></td>
          </tr>
          <tr>
               <td></td>
               <td style="color: yellow"><input type="checkbox" name="agree" id="agree" ><label>I Agree to the Terms of use</label></td>
          </tr>
         </table>
           <div style="color: red; background-color:rgb(230, 138, 0); width:431px; height:60px; align:center">
            <input type="reset" value="Cancel" style="background-color: red; color:white; border:0; height:40px; width:100px; float:right; margin:10px 20px 10px 10px; padding:10px 10px 10px 10px">
            <input type="submit" value="Submit" name="submit" style="background-color: green; color:white; border:0; height:40px; width:100px; float:right; margin:10px 0px 10px 10px;  padding:10px 10px 10px 10px">
            </div>
 </center>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
 if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['nation']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['agree'])){
    
$name = $_POST['firstname'];
$lname = $_POST['lastname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$nation = $_POST['nation'];
$email = $_POST['email'];
$num=$_POST['phonenumber'];
$pass1=$_POST['password1'];
$pass2=$_POST['password2'];
$agree=$_POST['agree'];
if(!empty($name) && !empty($lname) && !empty($day)&& !empty($month)&& !empty($year) && !empty($gender) && !empty($nation) && !empty($email)&& !empty($num)&& !empty($pass1)&& !empty($pass2)&&!empty($pass1==$pass2)&&!empty($agree)){
echo '<br><center><h2>Your Input:</h2></center><br>';
echo '<center>First Name: '.$name.'</center>';
echo '<br><center>Last Name: '.$lname.'</center>';
echo '<br><center>Date Of Birth:'.$day.'-'.$month.'-'.$year.'</center>';
echo '<br><center>Gender: '.$gender.'</center>';
echo '<br><center>Country: '.$nation.'</center>';
echo '<br><center>Email Id:'.$email.'</center>';
echo '<br><center>Phone:'.$num.'</center>';
echo '<br><center>Password:'.$pass1.'</center>';
echo '<br><center>Confirm Password:'.$pass2.'</center>';
}else{
echo "Fill All The Fields";
}
}
}
?>
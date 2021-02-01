<?php
/*
$find=array('alex','billy','dale');
$replace=array('a**x','b***y','d**e');

if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
    $user_input=$_POST['user_input'];
    $user_input_new=str_replace($find,$replace,$user_input);
    echo $user_input_new;
}
<form action="Php1FebCode.php" method="POST">
       <textarea name="user_input" rows="6" cols="30"><?php echo $user_input;?></textarea><br><br>
       <input type="submit" value="Submit">
</form>	
echo "<br>";
echo "<br>";

$offset=0;
if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){
	 $text=$_POST['text'];
     $search=$_POST['searchfor']; 
     $replace=$_POST['replacewith'];
 
    $search_length=strlen($search);

    if(!empty($text)&&!empty($search)&&!empty($replace)){
        while($strpos=strpos($text,$search,$offset)){
          $offset=$strpos+$search_length;
          $text=substr_replace($text,$replace,$strpos,$search_length);
        }
       echo $text; 
    }
}
/*
<form action="Php1FebCode.php" method="POST">
       <textarea name="text" rows="6" cols="30"></textarea><br><br>
       Search for:<br>
       <input type="text" name="searchfor"><br><br>
       Replace with:<br>
       <input type="text" name="replacewith"><br><br>
       <input type="submit" value="Find and Replace">
</form>	

echo "<br>";

$time=time();
$time_now=date('d m Y @  H:i:s',$time);
$time_modified=date('d m Y @  H:i:s',strtotime('+ 1 week 20hours 31seconds'));
echo 'The Time Now is:'.$time_now.'<br>'.'The Time Modified is:'.$time_modified; 
echo "<br>";

if(isset($_POST['Roll'])){
	$rand=rand(1,6);
	echo "You rolled at:".$rand;
}

<form action="Php1FebCode.php" method="POST">
	<input type="submit" name="Roll" value="Roll dice.">
</form>
echo "<br>";

$script_name=$_SERVER['SCRIPT_NAME'];
echo $script_name;
echo "<br>";

if(isset($_POST['submit'])){
	echo 'Process';
}
<form action="Php1FebCode.php" method="POST">
	<input type="submit" name="submit" value="Submit ">
</form>
echo "<br>";

require 'Php1FebFile2.php';
//echo '<img src="'.$images.'header.gif"/>'; 
echo "<br>";

$redirect_page='htttp://google.co.uk';
$redirect=true;

if($redirect==true)
	{
		header('Location: ',$redirect_page);
	} 
ob_end_flush();
/*
<?php
 ob_start();
?>
<h1>My Page</h1>
This is My Page.
echo "<br>";

$ip_address=$_SERVER['REMOTE_ADDR'];
$ip_blocked=array('127.0.0.1','100.100.100.100');

foreach($ip_blocked as $ip){
    
    if($ip == $ip_address){
      die("Your IP Address is blocked.".$ip);
    }
}
echo "<br>";


$http_client_ip=$_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr=$_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip)){
  $ip_address=$http_client_ip;
}elseif(!empty($http_x_forwarded_for)){
  $ip_address=$http_x_forwarded_for;
}else{
  $ip_address=$remote_addr;
}

echo $ip_address;
echo "<br>";


$browser=get_browser(null,true);
$browser=strtolower($browser['browser']);
echo $browser;
die();
if($browser!='chrome') {
  echo 'Your not using chrome.'.$browser;
}


if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])){
  $day=$_GET['day'];
  $date=$_GET['date'];
  $year=$_GET['year'];
   if(!empty($day)&&!empty($date)&&!empty($year))
   {
    echo "It is ".$day.' '.$date.' '.$year;
   }else{
    echo "Fill All The Fields";
   }
}
<form action="Php1FebCode.php" method="GET">
     Day:<br><input type="text" name="day"><br>
     Date:<br><input type="text" name="date"><br>
     Year:<br><input type="text" name="year"><br><br>
     <input type="submit" value="Submit">
</form>
$match='pass123';
if(isset($_POST['password'])){
   $password=$_POST['password'];
   if(!empty($password)){
   if($password==$match){
    echo "Correct!!";
   }else
   {
    echo "Incoreect";
   }
 }else
 {
  echo "Please enter your password";
 }
}
<form action="Php1FebCode.php" method="POST">

   Password:<br>
   <input type="password" name="password"><br><br>
   <input type="submit" value="Submit"> 
 </form>*/  

?>

<form action="">
  
</form>
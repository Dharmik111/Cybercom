<?php
$user_ip=$_SERVER['REMOTE_ADDR'];
function echo_ip(){
	global $user_ip;
	$string='Your IP address is:'.$user_ip;
	echo $string;
}
echo_ip();
echo "<br>";
echo "<br>";

$string='This is example string & This is tutorial.';
$string_word_count=str_word_count($string,1,'&.');

print_r($string_word_count); 
echo "<br>";

$string='This is example string.';
$string_reversed=strrev($string);
echo $string_reversed;
echo "<br>";

$string_one='This is my eassay.I\m going to talk php.';
$string_two='This is my books.I am will donate to subject php.';

similar_text($string_one, $string_two,$result);
echo 'The Similarity Between is:'.$result;
echo "<br>";
$string='This is An Example string.';
$string_length=strlen($string);
echo $string_length; 
echo "<br>";

$string=' This is An Example string. ';
$string_trimmed=trim($string);
echo $string_trimmed;
echo "<br>";

$string='This is <img src="image.jpg"> string.';
$string_slashes=htmlentities(addslashes($string));
echo $string_slashes;
echo "<br>";
echo "<br>";

$food=array('Pasta'=>300,'Pizza'=>1000,'Salad'=>150,'Vegetable'=>50);
echo $food['Pasta'];
//print_r($food);
echo "<br>";

$food=array('Healthy'=>array('Salad','Vegetable','Pasta'),
	'Unhealthy'=>array('Pizza','Ice_Cream'));
echo $food['Unhealthy'][0];
echo "<br>";


$food=array('Healthy'=>array('Salad','Vegetable','Pasta'),
	'Unhealthy'=>array('Pizza','Ice_Cream'));
foreach ($food as $element => $inner_array) {
	echo '<strong>'.$element.'</strong>'.'<br>';
	foreach ($inner_array as $item) {
	 	echo $item.'<br>';
	 } 
}
echo "<br>";
echo "<br>";

require 'Php31JanFile2.php';
echo $var1;
echo "<br>";

function has_space($string){
	if(preg_match('/ /',$string)){
		return true;
	}else{
        return false;
	}
}

$string='This does not Space.';
if(has_space($string)){
	echo 'Has at Least one space';
}else{
	echo 'Has no spaces';
}
echo "<br>";

$string='Alex';
$string_length=strlen($string);

for($x=1;$x<=$string_length;$x++){
	echo $x;
} 
echo "<br>";

$string='I Could Be Any Case.';

$string_lower=strtolower($string);
$string_upper=strtoupper($string);
echo $string_lower.'<br>';
echo $string_upper;
echo "<br>";
  
if(isset($_GET['user_name'])&&!empty($_GET['user_name'])){
	$user_name=$_GET['user_name'];
	$user_name_lo=strtolower($user_name);
	if($user_name_lo=='alex'){
       echo 'You are the best..'.$user_name;
	}
}
/*<form action="Php31JanCode.php" method="GET">
   Name:<input type="text" name="user_name"><br><br>
   <input type="submit"value="Submit">
</form>  */
echo "<br>";

$find='is';
$find_length=strlen($find);
$string='This is string, and it is an example..';

while($string_position=strpos($string,$find,$offset)){
   echo '<strong>'.$find.'</strong>'.'Found at '.$string_position.'<br>';
   $offset=$string_position+$find_length;
}
echo '<br>';

$find=array('is','job');
$replace=array('IS','hobby');
$string='this is job..';
$string_new=str_replace($find,$replace,$string);

echo $string_new; 

?>

 


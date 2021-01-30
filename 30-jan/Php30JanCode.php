<?php 
$name='Alex';
$age=21;
if(strtolower($name)==='alex')
{
	if($age>=21){
		echo 'Youre over 21';
	}
	else
	{
		echo 'Youre not 21 over..';
	}
}
else
{
	echo 'Youre not the alex!!!';
}
echo "<br>";

echo 'Hello World';
echo "<br>";
print 'Hello World';
echo "<br>";

echo '<input type="text" value="Hello..">';
//hello there this is comment section...
echo "<br>";

$day='Monday';
$date=23;
$year=2000;

echo 'Today is'.' '.$day.' '.$date.' '.$year;
echo "<br>";

$lname='smith';
echo 'My name is'.' '.$name.' '.$lname;
echo "<br>";

if(1)
{
	echo true;
}
else
{
	echo false;
}
echo "<br>";

$num=12 ;
if($num==10){
	echo "Equal to ten.";
}
elseif($num==11){
	echo "Equal to eleven.";
}
else{
	echo "Not Equal ...";
}

echo "<br>";

$num1=12;
$num1+=2;

echo "Result is :".' '.$num1;
echo "<br>";

$text='Hello';
$text .='World';
echo "String is :".' '.$text;
echo "<br>";

$num1=10;
$num2=9;

if($num1==$num2)
{
	echo "Given Number is Same..";
}
else
{
	echo "Given Number is Not Same..";
}
echo "<br>";
if($num1>$num2)
{
	echo "Given Number 1 Big..";
}
else
{
	echo "Given Number 2 Big..";
}
echo "<br>";

$password='password';
if($password=='password')
{
	echo "Correct!!";
}
else
{
	echo "Incorrect..";
}
echo "<br>";

$num1=100;
$num2=50;
$num3=2;
$result=($num1+$num2)/$num3;
echo $result;
echo "<br>";

$num1=1;
$num1++;
echo $num1;
echo "<br>";

$upper=1000;
$lower=500;
$num=654;
if($num>=$lower && $num<=$upper)
{
	echo "ok..";
}
echo "<br>";
if(!($num==$lower) && !($num==$upper))
{
	echo "ok..";
}
else
{
	echo 'Not ok..';
}
echo "<br>";

$num1='1';
$num2=1;
if($num1===$num2){
	echo "Equal..";
}else{
	echo "Not Equal...";
}
echo "<br>";

$count=1;
while ($count<=10) {
	echo 'Hello <br>';
	$count++;
}
echo "<br>";

$count=1;
do{
   echo "This is Always Show.<br>";
   $count++;
}while($count<=5);
echo "<br>";

for($count=10;$count>=1;$count--){
	echo $count.'<br>';
}
echo "<br>";
$num=4;
switch ($num) {
	case 1:
		echo "One";
		break;
	case 2:
		echo "Two";
		break;
	case 3:
		echo "Three";
		break;
	default:
		echo "Something Else..";
		break;
}
echo "<br>";
$day='Saturday';
switch ($day) {
	case 'Saturday':
	case 'Sunday':
	     echo "It is Weekend!!";
	     break;
	default:
		 echo "Not A Weekend..";
		break;
}
echo "<br>";

$string='This is a string..';

if(preg_match('/is/',$string)){
   echo "Match Found!!";
}else{
   echo "Match Not Found..";
}
echo "<br>";

$inum1=10;
$inum2=5;
function add1($num1,$num2){
    echo $num1+$num2; 
}

add1($inum1,$inum2);
echo "<br>";

function displayDate($day,$date,$year){
	echo $day.' '.$date.' '.$year;
}
displayDate('Friday',1,2003);

echo "<br>";
function add($num1,$num2){
      $result=$num1+$num2;
      return $result;
}
function divide($num1,$num2){
      $result=$num1/ $num2;
      return $result;
} 
$sum=divide(add(10,10),add(5,5));
echo $sum; 
?>
<?php
/*
if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])){
  $day=htmlentities($_GET['day']);
  $date=htmlentities($_GET['date']);
  $year=htmlentities($_GET['year']);
   if(!empty($day)&&!empty($date)&&!empty($year))
   {
    echo "It is ".$day.' '.$date.' '.$year;
   }else{
    echo "Fill All The Fields";
   }
} 
<form action="Php2FebCode.php" method="GET">
	 Day:<br><input type="text" name="day"><br>
	 Date:<br><input type="text" name="date"><br>
	 Year:<br><input type="text" name="year"><br><br>
	 <input type="submit" value="Submit">
</form> 


session_start();
00
$_SESSION['username']='alex';

$_SESSION['age']='21';


$time=time();

setcookie('username', 'alex', time()+1000);

setcookie('username', 'alex', time()-1000);

$handle=fopen('name.txt' ,'w'); 
fwrite($handle,'Alex'."\n");
fwrite($handle,'Billy.');
fclose($handle);
echo "Written.";

if(isset($_POST['name'])){
	$name=$_POST['name'];
	if(!empty($name)){
		$handle=fopen('name.txt','a');
		fwrite($handle,$name."\n");
		fclose($handle);

		echo "Current names in file:";
         $count=1;
		$readin=file('name.txt',);
		$readin_count=count($readin);
		foreach ($readin as $fname) {
			echo trim($fname);
			if($count<$readin_count){
				echo ", ";
			}$count++;
		}
	}else{
		echo "Please type a name..";
	}
}
<form action="Php2FebCode.php" method="POST">
	Name:<br><input type="text" name="name"><br><br>
	<input type="submit" value="Submit">
</form>

if(isset($_POST['name'])){
	$name=$_POST['name'];
	if(!empty($name)){
         $handle=fopen('name.txt','a');
         fwrite($handle,$name."\n");
         fclose($handle);
	}else{
		echo "Please type a name";
	}
}
<form action="Php2FebCode.php" method="POST">
	Name:<br><input type="text" name="name"><br><br>
	<input type="submit" value="Submit">
</form>

$filename='name.txt';
$handle=fopen($filename,'r');
$datain=fread($handle,filesize($filename));
$names_array=explode(',',$datain);

echo $names_array[0];



$names_array=array('Alex','Billy','Tom');
$string=implode(',', $names_array);

echo $string;


$directory='files';

if($handle=opendir($directory.'/')){
	echo 'Looking inside  \''.$directory.'\':<br>';
	while($file=readdir($handle)){
		if($file!='.'&&$file!='..'){
       echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
      }
	}
}

$filename='file.txt';
if(file_exists($filename)){
  echo "File Already Exists..";
}else{
    $handle=fopen($filename,'w');
    fwrite($handle,'Nothing');
    fclose($handle);
}

$filename='filedelete.txt';
if(@unlink('filedelete.txt')){
    echo "File <strong>".$filename."</strong> Has Been Deleted..";
}else{
   echo "Error";      
}

$filename='filerename.txt';
$rand=rand(10000,99999);

if(rename($filename,$rand.'.txt')){
	echo 'File <strong> '.$filename.'</strong> has been renamed to<strong> '.$rand.'txt</strong>';
}else{
	echo 'Error remaining';
}

$name=$_FILES['file']['name'];
$extension=strtolower(substr($name,strpos($name, '.')+1));

$type=$_FILES['file']['type'];

$size=$_FILES['file']['name'];
$max_size=100000;

$tmp_name=$_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
		if(($extension=='jpg'||$extension='jpeg')&&($type=='image/jpeg'&&$type=='image/jpg')&&$size<$max_size){
			$location='uploads/';
		if(move_uploaded_file($tmp_name,$location.$name)){
			echo "Uploaded";
		   }
		else{
			echo "There was an Error";
		   }
		}
        else{
 		 echo "File Must be jpg/jpeg and 2mb or less";
 	    }
 	}
}
<form action="Php2FebCode.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="Submit">
</form>
*/
$name=$_FILES['file']['name'];
$extension=strtolower(substr($name,strpos($name, '.')+1));

$type=$_FILES['file']['type'];

//$size=$_FILES['file']['name'];


$tmp_name=$_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
		 if(($extension=='jpg'||$extension=='jpeg')&&$type=='image/jpeg'){
		
			$location='uploads/';
		if(move_uploaded_file($tmp_name,$location.$name)){
			echo "Uploaded";
		   }
		else{
			echo "There was an Error";
		   }
		 }
		 else
		 {
             echo 'File must be jpg/jpeg.';
		 }
       } 
       else{
 		 echo "Please choose a File.";
 	     }
 }

?>
<form action="Php2FebCode.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="Submit">
</form>
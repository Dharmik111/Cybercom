<?php
/*
require 'connection.php';
?>
<form action="index.php" method="GET">
	Choose a Food type: 
  <select name="uh">
  	<option value="u">Unhealthy</option>
  	<option value="h">Healthy</option>
  </select><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php 

if(isset($_GET['uh'])&& !empty($_GET['uh'])){
		      $uh=strtolower($_GET['uh']);
		      
		      if($uh=='u'||$uh=='h'){
		$query="SELECT `food`,`caloriess`FROM `foodies` WHERE `healtys`='$uh'ORDER BY `id`";
		 
		if($query_run=mysqli_query($conn,$query)){
		  if(mysqli_num_rows($query_run)==NULL){
		     echo "No Results Found!!";
		  }else{
		  while ($query_row=mysqli_fetch_assoc($query_run)) {
		  	$food=$query_row['food'];
		  	$caloriess=$query_row['caloriess'];

		  	echo $food.' has '.$caloriess.' caloriess.<br>';
		  }
		}
		}else{
		   echo "Query Failed!!";
		}
     	}
	}

require 'connection.php';
$user_ip=$_SERVER['REMOTE_ADDR'];


function ip_exists($ip){
	global $conn;
    global $user_ip;
    $query="SELECT `ip` FROM `hits_ip`WHERE`ip`='$user_ip'";
    $result=mysqli_query($conn,$query) or die();
    $query_num_rows=mysqli_num_rows($result);
   
    if($query_num_rows==0){
    	return false;
    }else if($query_num_rows>=1){
        return true;
    }
}

function ip_add($ip){
	global $conn;
   $query="INSERT INTO `hits_ip`VALUES('$ip')";
   $query_run=mysqli_query($conn,$query);
}
/*function update_count(){
	global $conn;
   $query="SELECT `count` FROM `hits_count`";
   if(@$query_run=mysqli_query($conn,$query)){
      
      $count_inc=$count+1;

      $query_update="UPDATE `hits_count`SET `count`='$count_inc'";
      @$query_update_run=mysqli_query($conn,$query_update);
   }
}
ip_add($user_ip);
//update_count();
if(ip_exists($user_ip)){
	echo "Exists";
}else{
	echo "Doesn\'t Exists.";
}

require 'connection.php';

if(isset($_POST['search_name'])){
   $search_name=$_POST['search_name'];
   if(!empty($search_name)){
     $query="SELECT `name`FROM `names`WHERE`name`LIKE'%".mysqli_real_escape_string($search_name)."%'";
     $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>=1){
    	echo "Result Found:".'<br>';
       while($query_row=mysqli_fetch_assoc($query_run)){
        echo $query_row['name'].'<br>';

       }
    }
   }else{
   	echo "No Result Found..";
   }
}
<form action="index.php" method="POST">
	Name:<input type="text" name="search_name">&nbsp<input type="submit" name="search" value="Search">
</form>
*/
 
?>

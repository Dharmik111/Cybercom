<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];

function loggedin(){
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return true;
	}else{
		return false;
	}
}

function getuserfield($field){
    $query="SELECT `$field`FROM `users`WHERE `id`='".$_SESSION['user_id']."'";
    global $conn;
    if($query_run=mysqli_query($conn,$query)){
       if($query_result=mysqli_fetch_assoc($query_run)[$field]){
       	return $query_result;
       }
    }
}
?>
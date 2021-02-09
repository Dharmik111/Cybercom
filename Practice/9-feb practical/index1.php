<?php

require 'core1.php';
require 'connection1.php';

if(loggedin()){
	$firstname=getuserfield('firstname');
	$lastname=getuserfield('lastname');
    echo 'Youre logged in.'.$firstname.' '.$lastname.'.<a href="logout.php">Log out</a><br>';

}else{
      include 'loginform1.php';
}

?>


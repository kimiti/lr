<?php 
include 'core/init.php';

if ( empty($_post) === false) {
	$username = $_post['username'];
	$password = $_post['password'];

if (   empty($username)===true || empty($password)===true)
{
	$errors[] = '';
}else if ( user_exsits($username) === false  ) {
	$errors[] = 'sorry we can not find your username have you logged in';
}

}

	
 ?>
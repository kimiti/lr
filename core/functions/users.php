<?php 
function user_exsits($username){
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'");
}

 ?>
<?php

function UserLoginAction(){
	$userpost = $_POST['username'];
	$passpost = $_POST['password'];

	$connection = mysql_connect("localhost", "root", "", "jenk");
	// To protect injection
	$userpost = stripslashes($username);
	$passpost = stripslashes($password);
	$userpost = mysql_real_escape_string($username);
	$passpost = mysql_real_escape_string($password);

	if ($userpost == $username){
		$_SESSION['login_user'] = $username;
	}
}

function pia(){
	echo "we gaan naar piazza";
}
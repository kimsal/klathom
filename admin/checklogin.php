<?php

if (isset($_COOKIE['khlathom_username']) && isset($_COOKIE['khlathom_password'])){
	//echo $_COOKIE['khlathom_username'].'='.$_COOKIE['khlathom_password'];
	$checklogin=1;
	$username=$_COOKIE['khlathom_username'];
	$password=$_COOKIE['khlathom_password'];
	if($username==''){
		$checklogin=0;
	}		
}
else{
	$checklogin=0;
}

?>
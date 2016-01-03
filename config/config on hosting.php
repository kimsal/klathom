<?php
	$con=mysqli_connect("localhost","stopbore_kimsal","11101999sal");
	mysqli_select_db($con,"stopbore_007down");
	mysqli_query($con,"Set Names utf8");
	if (!$con) {
    		die('Error Connection ' . mysql_error());
	}

?>
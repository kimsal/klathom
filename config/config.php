<?php
	$con=mysqli_connect("localhost","root","P@ssw0rd");
	mysqli_select_db($con,"klathom");
	mysqli_query($con,"Set Names utf8");
?>
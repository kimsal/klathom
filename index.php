<?php
$domain="http://localhost:88/klathom/";
if(isset($_GET['single'])){
	include('single.php');
}
else if(isset($_GET['s'])){  //condition for search
	include('search.php');
}
/*
else if(isset($_GET['pagin'])){  //condition for pagin in category.php & pagin.php
	include('pagin.php');
}
*/

else if(isset($_GET['admin'])){
	if(isset($_GET['login'])){
		include('admin/login.php');	
	}
	else if(isset($_GET['logout'])){
		include('admin/logout.php');
	}
	else if(isset($_GET['info'])){
		include('admin/information.php');
	}
	else if(isset($_GET['page'])){
		include('admin/page.php');
	}
	else if(isset($_GET['category'])){
		include('admin/category.php');
	}
	else
		include('admin/admin.php');	
}
else if(isset($_GET['cat'])){
	include('categories.php');	
}
else if(isset($_GET['page'])){
	include('page.php');
}
else if(isset($_GET['single'])){
	include('single.php');
}
else if(isset($_GET['download'])){
	include('download.php');
}
else if(empty($_GET['cat']) && empty($_GET['pag'])){
		include('home.php');
}

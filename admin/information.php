<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="admin/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="admin/css/styles.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/logo.png" />
	</head>
	<body>
  <?php
    include('admin/checklogin.php');
    if($checklogin==0){
        ?>
        <script type="text/javascript">
           location.href = "<?php echo $domain; ?>?admin=1&login";
        </script>
        <?php
    }
?>
    
<?php
include('config/config.php');
$pagin=1;
if(isset($_GET['pagin']))
	$pagin=$_GET['pagin'];
$catid=0;
if(isset($_GET['cat']))
	$catid=$_GET['cat'];
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KHLATHOM.NET</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="<?php echo $domain; ?>?admin=1&logout">Log Out</a></li>
            <li><a href="#">Profile</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
</nav>

<div class="container-fluid">
      
      <div class="row row-offcanvas row-offcanvas-left">
        
         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           
            <ul class="nav nav-sidebar">
             <li class="active"><a href="<?php echo $domain; ?>">View site</a></li> 
             <li><a href="<?php echo $domain; ?>?admin=1">Dashboard</a></li> 
               <?php
			
                 $rs=mysqli_query($con,"Select * from tbcategory");
                  while($row=mysqli_fetch_array($rs)){
                    ?>
                    <li><a href="<?php echo $domain; ?>?admin=1&cat=<?php echo $row[0] ?>"> 
                        <?php echo $row[1]; ?>
                    </a></li>
                    <?php
                  }
                ?>
            </ul>   
        </div><!--/span-->
        
        <div class="col-sm-9 col-md-10 main">
          
        
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2016 ខ្លាធំ</p>
</footer>
        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
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
          <a class="navbar-brand" href="#">KHLATHOM.COM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="<?php echo $domain; ?>?admin=1&logout">Log Out</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
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
             <li class="active"><a href="<?php echo $domain; ?>?admin=1">Dashboard</a></li> 
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
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          <hr>

          <center><h2 class="sub-header"><u>Show data</h2></u></center>
          <a href="" class="btn btn-primary" style="float:right;">Add New</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Post Date</th>
                  <th>Post by</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
              <?php
			  if($catid==0){
              	$rs=mysqli_query($con,"Select tbdescription.des_id , tbdescription.title , tbdescription.post_date , tbuser.first_name,tbdescription.view from tbdescription INNER JOIN tbuser ON tbuser.uid = tbdescription.uid limit ".(($pagin-1)*20).",20");
			  }
			  else{
				  $rs=mysqli_query($con,"Select tbdescription.des_id , tbdescription.title , tbdescription.post_date , tbuser.first_name,tbdescription.view from tbdescription INNER JOIN tbuser ON tbuser.uid = tbdescription.uid where catid=".$catid." limit ".(($pagin-1)*20).",20"); 
			  }
			  while($row=mysqli_fetch_array($rs)){
				?>
                
				<tr>
                  <td>
                  	<?php echo $row[0]; ?>
                  </td>
                  <td><a href="">
             	    <?php echo $row[1]; ?>
                  </a></td>
                  <td>
                  	<?php echo $row[2]; ?>
                  </td>
                  <td>
                  	<?php echo $row[3]; ?>
                  </td>
                  <td>
                  	<?php echo $row[4]; ?>
                  </td>
                </tr>
                 
				<?php
			  }
				?>
                
              </tbody>
            </table>
            
          </div>
     
     <!--pagination-->
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
    <?php
      $last_pagin=1;
      if($catid==0)
         $rs=mysqli_query($con,"SELECT count(*) FROM tbdescription");
      else
        $rs=mysqli_query($con,"SELECT count(*) FROM tbdescription where catid=".$catid);
      while($row=mysqli_fetch_array($rs)){
        $last_pagin=$row[0];
        $last_pagin=ceil($last_pagin/20);
      }
      ?>
             <center>
               <ul class="pagination">
                <?php
                if($last_pagin<=1){

                }
                else if($last_pagin<=8){
                  for($i=1;$i<=$last_pagin;$i++){
                    if($i==$pagin){
                      ?>
                       <li class="active"><a href="#"><?php echo $i; ?></a></li>
                      <?php
                    }
                    else{
                    ?>
                    <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $i; ?>&cat=<?php echo $catid; ?>"><?php echo $i; ?></a></li>
                    <?php
                    }
                  }
                }
                else if($pagin>=($last_pagin-2)){
                  ?>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=1&cat=<?php echo $catid; ?>">1</a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=2&cat=<?php echo $catid; ?>">2</a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=3&cat=<?php echo $catid; ?>">3</a></li>
                  <li><a href="#">...</a></li>
                  <li <?php if($pagin==($last_pagin-2)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin-2; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-2; ?></a></li>
                 <li <?php if($pagin==($last_pagin-1)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-1; ?></a></li>
                 <li <?php if($pagin==($last_pagin)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin; ?></a></li>
                  
                  <?php
                }
                else if($pagin>8){
                  ?>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=1&cat=<?php echo $catid; ?>">1</a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=2&cat=<?php echo $catid; ?>">2</a></li>

                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $pagin-1; ?></a></li>
                  <li class="active"><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $pagin; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $pagin+1; ?>&cat=<?php echo $catid; ?>"><?php echo $pagin+1; ?></a></li>
                  <li><a href="#">...</a></li>

                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-1; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin; ?></a></li>
                  <?php
                }
                else{
                  for($i=1;$i<5;$i++){
                    if($i==$pagin){
                      ?>
                      <li class="active"><a href="#"><?php echo $i; ?></a></li>
                      <?php
                    }
                    else{
                      ?>
                      <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $i; ?>&cat=<?php echo $catid; ?>"><?php echo $i; ?></a></li>
                      <?php
                    }
                  }
                  ?>
                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin-2; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-2; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-1 ?></a></li>
                  <li><a href="<?php echo $domain; ?>?admin=1&pagin=<?php echo $last_pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin; ?></a></li>
                <?php 
                }
                ?>
                </ul>
            </center>
      </div>
    <!--End pagin-->

          
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2015 ខ្លាធំ</p>
</footer>
        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
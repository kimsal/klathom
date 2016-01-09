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
$catid='';
$catname='';
if(isset($_GET['catid'])){
  $catid=$_GET['catid'];
  $rs=mysqli_query($con,"Select * from tbcategory where catid=".$catid);
  while($row=mysqli_fetch_array($rs)){
      $catid=$row[0];
      $catname=$row[1]; 
  }
  //echo $catid.' - '.$catname;
}
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

<div class="container-fluid"  style="padding:0px;">
      
      <div class="row row-offcanvas row-offcanvas-left">
        
         <div class="col-sm-3 col-md-2" id="sidebar" role="navigation">
           
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
        <div class="col-sm-8 col-xs-12 col-md-7 col-lg-7">
           <h3><center><b>Category</b></center></h3><br/><br/>
            



            <form class="form-horizontal" method="post">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-10">
                  <input class="form-control" name="catname" placeholder="Category Name" type="text" <?php if($catname!='') echo 'value="'.$catname.'"' ?> required>
                  <input type="hidden" name="ch"/>
                </div>
              </div>
             
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default" onclick="getback();">Cancel</button>
                  <button type="submit" class="btn btn-primary">
                  <?php
                  if($catid=='')
                    echo 'Add Category';
                  else echo 'update';
                  ?>
                  </button>
                </div>
              </div>
            </fieldset>
          </form>
<script type="text/javascript">
function getback(){
  window.history.back();
}
</script>
<?php
if(isset($_POST['ch'])){
   include('config/config.php');
   if($catid==''){
     mysqli_query($con,"Insert into tbcategory(catname) values('".$_POST['catname']."')");
     echo '<center><b style="color:blue;">Added success !</b></center>';
  }
  else{
     mysqli_query($con,"update tbcategory set catname='".$_POST['catname']."' where catid=".$catid);
     echo '<center><b style="color:blue;">updated success !</b></center>';
  }
}
?>







        </div>
       <div class="col-sm-4 col-xs-12 col-md-5 col-lg-5">
         <h3><center><b>Category List</b></center></h3>
         <table class="table table-hover">
        
        <?php
        $rs=mysqli_query($con,"Select * from tbcategory");
        while($row=mysqli_fetch_array($rs)){
          ?>
           <tbody>
           <tr>
              <th><a href="<?php echo $domain; ?>?admin&category&catid=<?php echo $row[0]; ?>"><?php echo $row[1]; ?></a></th>
            </tr>
          </tbody>
          <?php
        }
        ?>

       
         
        </thead>
      </table>
       </div>

          
          
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
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name"description" content=""/>
<meta name"keywords" content=""/>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<script src="js/custome.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<link rel="shortcut icon" type="image/png" href="img/logo.png" />
<title>ខ្លាធំ​</title>

</head>
<body>
    <div id="scrolltop">
    <a href="">
        <img src="img/scrolltop.png" />
    </a>
</div>
      <!--facebook like page-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=416457965212700";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!--end of facebook like page-->
  
<?php
include('config/config.php');
?>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs" id="banner_top">
    <center>
        <img src="img/logo.png" class="img-responsive" style="height:90px;margin-top:10px;"/>
    </center> 

</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="banner_top">
    <img src="img/banner-468x60.jpg" class="img-responsive" style="height:90px;margin-top:10px;"/>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="menu_top1">
    <!--sart menu 1-->
    <nav class="navbar-default" role="navigation" style="background-color: #076AB8; width: 100%;">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav myover" >

                <li><a href="<?php echo $domain; ?>" style="color:#000;font-weight:bold;color: #ffffff" class="glyphicon glyphicon-home"></a></li>

                <?php
                 $rs=mysqli_query($con,"Select * from tbcategory");
                  while($row=mysqli_fetch_array($rs)){
                    ?>
                    <li><a href="<?php echo $domain; ?>?cat=<?php echo $row[0] ?>" style="color:white;font-weight:bold;
                    border-left:2px solid #E9EAED;
                    ">
                        <?php echo $row[1]; ?>
                    </a></li>
                    <?php
                  }
                ?>
                
            </ul>

        </div>
    </nav>
    <!--end of menu 1-->
</div>
<div style="clear: both;float: none;margin-top:50px;"></div>


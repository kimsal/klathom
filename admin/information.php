<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Information | Khlathom.net</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="admin/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="admin/css/styles.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/logo.png" />
    <script src="ckeditor/ckeditor.js"></script>

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
$type=$_GET['info'];
$title='';$description='';$image='';$sound='';$catid='';$catname='';$sound='';
if(isset($_GET['id'])){
  $des_id=$_GET['id'];
  if($type=='update'){
  $rs=mysqli_query($con,"Select tbdescription.title,tbdescription.description,tbdescription.image,tbdescription.catid,tbcategory.catname,tbdescription.sound from tbdescription INNER JOIN tbcategory ON tbcategory.catid=tbdescription.uid where des_id=".$des_id);
    while($row=mysqli_fetch_array($rs)){
       $title=$row[0];
       $description=$row[1];
       $image=$row[2];
       $catid=$row[3];
       $catname=$row[4];
       $sound=$row[5];
  }
  }
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

<div class="container-fluid">
      
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
            <div class="col-sm-11 col-xs-12 col-md-11 col-lg-11">
           <h3><center><b>Information page</b></center></h3><br/><br/>
            



            <form class="form-horizontal" method="post"  enctype="multipart/form-data">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-1 control-label">Title</label>
                <div class="col-lg-11">
                  <input class="form-control" name="title" placeholder="Title" type="text" value="<?php echo $title; ?>"required>
                  
                </div>
              </div>

               <div class="form-group">
                <label for="inputEmail" class="col-lg-1 control-label">Description</label>
                <div class="col-lg-11">
                  <textarea class="ckeditor" name="desc">
                    <?php
                    echo $description;
                     ?>
                  </textarea>
                </div>
              </div>
               <div class="form-group">
                <label for="inputEmail" class="col-lg-1 control-label">Image </label>
                <div class="col-lg-11">
                   <input type="file" name="img" class="img" id="img"/>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-1 control-label">Cagegory</label>
                <div class="col-lg-4 col-md-6 col-sm-5 col-xs-12">
                <select id="basic" name="category" class="selectpicker show-tick form-control col-xs-12 col-sm-6 col-md-6 col-lg-4">
                  
                  <?php
                  if($catname!=''){
                    ?>
                      <option value="<?php echo $catid; ?>"><?php echo $catname ?></option>
                    <?php
                  }
                 $rs=mysqli_query($con,"Select * from tbcategory");
                  while($row=mysqli_fetch_array($rs)){
                    ?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                    <?php
                  }
                ?>
                 
                </select>

                </div>
              </div>

               <div class="form-group">
                <label for="inputEmail" class="col-lg-1 control-label">Sound :</label>
                <div class="col-lg-11">
                  <input class="form-control" name="sound" placeholder="Sound code" type="text" value="<?php echo $sound; ?>">
                  <input type="hidden" name="ch"/>
                </div>
              </div>

              <input type="hidden" name="ch"/>
             
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                <?php
                if($type=='new'){
                  ?>
                  <input type="submit" class="btn btn-primary" value="Add New" name="btn">
                  <?php
                  }
                else{
                  ?>
                  <input type="submit" class="btn btn-primary" name="btn" value="Update" name="btn">
                  <input type="submit" class="btn btn-primary" value="Delete" name="btn" style="background-color:#900;font-weight:bold;">        
                   <?Php
                }
                  ?>
                  <button type="reset" class="btn btn-default" onclick="getback();">Cancel</button>
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
if($_POST['btn']!='Delete'){
  if($_FILES['img']['name']==''){
      $newimage=$image;
  }
  else
      $newimage=$_FILES['img']['name'];
  $newtitle=$_POST['title'];
  $newdes=$_POST['desc'];
  $newcatid=$_POST['category'];
  $uploadOk=1;

  $newsound=str_replace("<","&lt;",$_POST['sound']);
  $newsound=str_replace(">","&gt;",$newsound);
  //echo $newimage.'='.$newtitle.'='.$newdes.'='.$newcatid.'='.$newsound;
  if($newimage!=$image){
    $target_dir = "img/upload/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
if($uploadOk!=0){
  //echo $_COOKIE['khlathom_userid'];
  if($type=='new'){
    mysqli_query($con,"INSERT INTO tbdescription(title,description,image,catid,post_date,uid,sound,updated_date) values('".$newtitle."' , '".$newdes."','".$newimage."',".$newcatid.",now(),".$_COOKIE['khlathom_userid'].",'".$newsound."',now())");
    echo '<h3 style="color:blue">Inserted successfully</h3>';
  }
  else{
    mysqli_query($con,"update tbdescription set title='".$newtitle."',description='".$newdes."',image='".$newimage."',catid=".$newcatid.",uid=".$_COOKIE['khlathom_userid'].",sound='".$newsound."',updated_date=now() where des_id=".$des_id);
    echo '<h3 style="color:blue">Updated successfully</h3>';
  }
 }  
}
else{
      mysqli_query($con,"DELETE FROM tbdescription where des_id=".$des_id);
      ?>
      <script type="text/javascript">
      alert('Deletet successfully');
      location.href="<?php echo $domain.'?admin' ?>";
      </script>
      <?php
       
      
    }
}

?>







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
<?php
include('header.php');
?>

<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row" style="margin:0px;padding:0px; margin-top: 1px;">
            <div class=" col-sm-2 col-xs-12" style="padding:0px;background-color:#264C84; ">
                <h4 style=" text-align:center;color: #ffffff">Breaking News</h4>
            </div>
            <div class=" col-sm-9 col-xs-12 mymarq " >
                <marquee behavior="scroll" scrollamount="3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                    <ul style="margin-top: 7px; ">

                    	<?php
		                 $rs=mysqli_query($con,"Select des_id,title from tbdescription order by des_id limit 2");
		                  while($row=mysqli_fetch_array($rs)){
		                    ?>
			                  <li style="display: inline; margin-left: 2px;">
                                <a href="<?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
                                	<?php echo $row[1]; ?>
                                </a>
                            </li> - 
		                    <?php
		                  }
		                ?>
                    </ul>
                </marquee>

            </div>
            <div class="col-xs-12 col-sm-1 col-lg-1 col-md-1 hidden-xs"  style="padding:0px;background-color: #264C84">
                <h4 style=" text-align:center;color: #ffffff">ព័ត៏មានថ្មី</h4>
            </div>
        </div>
            
   
   
    <!--start of container 3 column-->
    <div class="col-xs-12 col-md-8 col-lg-8 col-sm-8 " style="padding:0px;">
    	<!--left side-->
        
        
        
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  hidden-xs slide-top">
 
        <!-- Slides Container -->
       	<div id="slider1_container" style="position: relative; width: 600px;
        height: 300px;">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 650px; height: 300px;margin-top:4px;
            overflow: hidden;">
            <?php
             $rs=mysqli_query($con,"Select des_id,title,image from tbdescription");
              while($row=mysqli_fetch_array($rs)){
              	?>
            	  <div>
            	  	<a href="<?php echo $domain ?>?single=<?php echo $row[0]; ?>" style="color:#FFF;">
	                <img u=image src="img/<?php echo $row[2]; ?>" />
	         	   </a>
	                <div u="thumb"></div>
	                <div u="caption" t="FADE" style="position: absolute; top: 215px; left: 0px;right:0px; min-width: 150px; min-height: 100px; color: #ffffff; font-size: 20px; text-align: left;padding:3px 10px;;background-image:url(img/2.png);">
	                <a href="<?php echo $domain ?>?single=<?php echo $row[0]; ?>" style="color:#FFF;">
	                	<?php echo $row[1]; ?>
	                </a>		
	                </div>
	            </div>
	            
              	<?php
              }
            ?>

           
         
            
        </div>

        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort09" style="position: absolute; bottom: 0px; left: 0px; height:60px; width:600px;">
            <div style="filter: alpha(opacity=40); opacity:0; position: absolute; display: block;
                background-color: #ffffff; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 60px; TOP: 0; LEFT: 0;">
                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#000; line-height: 60px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
       
       
       <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
       
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div>
        
        
    </div><!--End slide-->
        
        
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 left">
             <?php
                 $rs=mysqli_query($con,"Select des_id,title,description,image,post_date from tbdescription order by des_id limit 4");
                  while($row=mysqli_fetch_array($rs)){
                    ?>
                    <div class="box_left" title="Sumo aliquip pri cu. Facilisi temporibus">
                    
                      <div id="effect-5" class="effects clearfix">
                          <div class="img">
                                <img src="img/<?php echo $row[3]; ?>" alt="" class="img-responsive image_left"/>
                                <div class="overlay">
                                    <a href="#" class="expand">+</a>
                                    <a class="close-overlay hidden">-</a>
                                </div>
                          </div>
                      </div>
                      <a href="<?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
                        <div class="title_left">
                             <?php echo $row[1]; ?>
                        </div>
                        <div class="post_date_left">
                           <?php
                             $date=date_create($row[4]);
                             echo date_format($date,"y/m/d H:i:s"); 
                             ?>
                        </div>
                        <div class="description_left">
                        <?php
                            echo substr($row[2], 0, 370);
                        ?>
                        </div>
                    </a>
                    <div class="read_full">
                    <center>
                        <a href="#">
                            <span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                            Read Full Article
                         </a>
                    </center>
                    </div>
                </div><!--End box-->
                        <?php
                  }
                  ?>
        </div>
        <!--Center container-->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center">
        
          <?php
         $rs=mysqli_query($con,"Select des_id,title,description,image,post_date from tbdescription order by des_id limit 4,8");
          while($row=mysqli_fetch_array($rs)){
            ?>
            <!--center box-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
                <a href="<?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
                <div class="title_left" style="margin-bottom:10px;">
                  <?php echo $row[1]; ?>
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                    <img src="img/<?php echo $row[3]; ?>" class="img-responsive"/>
                </span>
                <span>  
                   <?php  echo substr($row[2], 0, 370); ?>
                </span>
                <div class="read_full">
                <center>
                    
                        <span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                        អាន
                     </a>
                </center>
                </div>
            </div>
            <!--End center box-->
            <?php
          }
          ?>
        	
            
           
            
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel_header">
                    <b> 
                        <span>ទស្សន:</span>
                    </b>
                </div>
                 <?php
         $rs=mysqli_query($con,"Select des_id,title,image,post_date from tbdescription where catid=11 order by des_id limit 4");
          while($row=mysqli_fetch_array($rs)){
            ?>
             <!--Box left small latest post-->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 latest_review_box">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 img_review">
                    <a href="<?php echo $domain;?>?single=<?php echo $row[0];?>">
                        <img class="img_latest img-responsive" src="img/<?php echo $row[2]; ?>"></a>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-8 com-lg-8 latest_review_box_title">
                    <a href="<?php echo $domain;?>?single=<?php echo $row[0];?>"><?php echo $row[1]; ?></a>
                    <div class="hidden-xs" style="color:#999;">
                        <?php
                         $date=date_create($row[3]);
                         echo date_format($date,"y/m/d H:i:s"); 
                        ?>
                    </div>
                </div>
            </div>
            
            <?php
            }
            ?>
               
               
            </div>
        </div>     
        
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 right">
    
    	<b class="btn btn-primary col-sm-12" style="cursor:default;">
        	ព័ត៍មានទាន់ហេតុការណ៍
        </b>
         <?php
         $rs=mysqli_query($con,"Select des_id,title,image,post_date from tbdescription order by des_id limit 12,6");
          while($row=mysqli_fetch_array($rs)){
            ?>
            <!--box right-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
                 <a href=" <?php echo $domain; ?>?single= <?php echo $row[0]; ?>">
                <span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
                
                <img src="img/<?php echo $row[2]; ?>" class="img-responsive"/>
                    
                     <div class="overlay">
                       
                    </div>
                </span>
                
                <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
                   <?php echo $row[1]; ?>
                </span>
                </a>
            </div>
            <!--End box right-->
            <?php
          }
          ?>


        <b class="btn btn-primary col-sm-12" style="cursor:default;">
            ចំរៀង
        </b>
         <?php
         $rs=mysqli_query($con,"Select des_id,title,image,post_date from tbdescription where catid=7 order by des_id limit 10");
          while($row=mysqli_fetch_array($rs)){
            ?>
            <!--box right-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
                 <a href=" <?php echo $domain; ?>?single= <?php echo $row[0]; ?>">
                <span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
                
                <img src="img/<?php echo $row[2]; ?>" class="img-responsive"/>
                    
                     <div class="overlay">
                       
                    </div>
                </span>
                
                <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
                   <?php echo $row[1]; ?>
                </span>
                </a>
            </div>
            <!--End box right-->
            <?php
          }
          ?>


          <b class="btn btn-primary col-sm-12" style="cursor:default;border:none;">
            កីឡា
        </b>
         <?php
         $rs=mysqli_query($con,"Select des_id,title,image,post_date from tbdescription where catid=10 order by des_id limit 6");
          while($row=mysqli_fetch_array($rs)){
            ?>
            <!--box right-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
                 <a href=" <?php echo $domain; ?>?single= <?php echo $row[0]; ?>">
                <span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
                
                <img src="img/<?php echo $row[2]; ?>" class="img-responsive"/>
                    
                     <div class="overlay">
                       
                    </div>
                </span>
                
                <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
                   <?php echo $row[1]; ?>
                </span>
                </a>
            </div>
            <!--End box right-->
            <?php
          }
          ?>
    	
        
        
        
        
        
    </div>
    <!--end of right side-->
   <!--pagination-->
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
    <?php
      $last_pagin=1;
      $pagin=1;
       $rs=mysqli_query($con,"SELECT count(*) FROM tbdescription");
      while($row=mysqli_fetch_array($rs)){
        $last_pagin=$row[0];
        $last_pagin=ceil($last_pagin/12);
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
                    <li><a href="<?php echo $domain; ?>?pagin=<?php echo $i; ?>&cat=0"><?php echo $i; ?></a></li>
                    <?php
                    }
                  }
                }
                else if($pagin>=($last_pagin-2)){
                  ?>
                  <li><a href="<?php echo $domain; ?>?pagin=1&cat=0">1</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=2&cat=0">2</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=3&cat=0">3</a></li>
                  <li><a href="#">...</a></li>
                  <li <?php if($pagin==($last_pagin-2)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-2; ?>0"><?php echo $last_pagin-2; ?></a></li>
                 <li <?php if($pagin==($last_pagin-1)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&cat=0"><?php echo $last_pagin-1; ?></a></li>
                 <li <?php if($pagin==($last_pagin)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&cat=0"><?php echo $last_pagin; ?></a></li>
                  
                  <?php
                }
                else if($pagin>8){
                  ?>
                  <li><a href="<?php echo $domain; ?>?pagin=1&cat=0">1</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=2&cat=0">2</a></li>

                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin-1; ?>&cat=0"><?php echo $pagin-1; ?></a></li>
                  <li class="active"><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin; ?>&cat=0"><?php echo $pagin; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin+1; ?>&cat=0"><?php echo $pagin+1; ?></a></li>
                  <li><a href="#">...</a></li>

                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&cat=0"><?php echo $last_pagin-1; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&cat=0"><?php echo $last_pagin; ?></a></li>
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
                      <li><a href="<?php echo $domain; ?>?pagin=<?php echo $i; ?>&cat=0"><?php echo $i; ?></a></li>
                      <?php
                    }
                  }
                  ?>
                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-2; ?>&cat=0"><?php echo $last_pagin-2; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&cat=0"><?php echo $last_pagin-1 ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&cat=0"><?php echo $last_pagin; ?></a></li>
                <?php 
                }
                ?>
                </ul>
            </center>
      </div>
    <!--End pagin-->



<?php
include('footer.php');
?>
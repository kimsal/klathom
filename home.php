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
        	<div class="box_left" title="Sumo aliquip pri cu. Facilisi temporibus">
            	<a href="#">
                  <div id="effect-5" class="effects clearfix">
                      <div class="img">
                            <img src="img/image-7.jpg" alt="" class="img-responsive image_left"/>
                            <div class="overlay">
                                <a href="#" class="expand">+</a>
                                <a class="close-overlay hidden">-</a>
                            </div>
                      </div>
                  </div>
                    
                    <div class="title_left">
                        
                         Sumo aliquip pri cu. Facilisi temporibus 
    
                    </div>
                    <div class="post_date_left">
                        11-Dec-2015 4:29PM
                    </div>
                    <div class="description_left">
                    Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi concludaturque his cu. Quodsi everti ancillae vim cu, qui ne lorem persius petentium...
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
            
            <div class="box_left" title="Sumo aliquip pri cu. Facilisi temporibus">
            	<a href="#">
                  <div id="effect-5" class="effects clearfix left_image">
                      <div class="img">
                            <img src="img/image-1.jpg" alt="" class="img-responsive image_left"/>
                            <div class="overlay">
                                <a href="#" class="expand">+</a>
                                <a class="close-overlay hidden">-</a>
                            </div>
                      </div>
                  </div>
                    
                    <div class="title_left">
                        
                         Sumo aliquip pri cu. Facilisi temporibus 
    
                    </div>
                    <div class="post_date_left">
                        11-Dec-2015 4:29PM
                    </div>
                    <div class="description_left">
                    Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi concludaturque his cu. Quodsi everti ancillae vim cu, qui ne lorem persius petentium...
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
            
            <div class="box_left" title="Sumo aliquip pri cu. Facilisi temporibus">
            	<a href="#">
                  <div id="effect-5" class="effects clearfix">
                      <div class="img">
                            <img src="img/image-7.jpg" alt="" class="img-responsive image_left"/>
                            <div class="overlay">
                                <a href="#" class="expand">+</a>
                                <a class="close-overlay hidden">-</a>
                            </div>
                      </div>
                  </div>
                    
                    <div class="title_left">
                        
                         Sumo aliquip pri cu. Facilisi temporibus 
    
                    </div>
                    <div class="post_date_left">
                        11-Dec-2015 4:29PM
                    </div>
                    <div class="description_left">
                    Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi concludaturque his cu. Quodsi everti ancillae vim cu, qui ne lorem persius petentium...
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
            
            <div class="box_left" title="Sumo aliquip pri cu. Facilisi temporibus">
            	<a href="#">
                  <div id="effect-5" class="effects clearfix">
                      <div class="img">
                            <img src="img/image-7.jpg" alt="" class="img-responsive image_left"/>
                            <div class="overlay">
                                <a href="#" class="expand">+</a>
                                <a class="close-overlay hidden">-</a>
                            </div>
                      </div>
                  </div>
                    
                    <div class="title_left">
                        
                         Sumo aliquip pri cu. Facilisi temporibus 
    
                    </div>
                    <div class="post_date_left">
                        11-Dec-2015 4:29PM
                    </div>
                    <div class="description_left">
                    Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi concludaturque his cu. Quodsi everti ancillae vim cu, qui ne lorem persius petentium...
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
        </div>
        <!--Center container-->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center">
        
        	<!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            <!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            <!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            <!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            <!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            <!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            <!--center box-->
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_center">
            	<div class="title_left" style="margin-bottom:10px;">
                	Sumo aliquip pri cu. Facilisi temporibus pri et
                </div>
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/image-7.jpg" class="img-responsive"/>
                </span>
                <span>	
                	Sumo aliquip pri cu. Facilisi temporibus pri et. In ubique aliquid pri, ipsum corpora id sea. Has dico invenire in. Everti maiorum voluptatum his in, omnes eligendi vim an, erroribus disputationi...
                
                </span>
                <div class="read_full">
                <center>
                	<a href="#">
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	Read Full Article
                     </a>
               	</center>
                </div>
            </div>
            <!--End center box-->
            
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel_header">
                    <b> 
                        <span>Latest review</span>
                    </b>
                </div>
                <!--Box left small latest post-->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 latest_review_box">
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 img_review">
                        <a href=""><img class="img_latest" src="img/latest-review-101.jpg"></a>
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-8 com-lg-8 latest_review_box_title">
                        <a href="#">they are title is here not too short</a>
                        <p class="desc_review hidden-xs">An d they sup rise us ag ain</p>
                        <span class="hidden-xs">Posted on 12-12-2015</span>
                    </div>
                </div>
                
                <!--Box left small latest post-->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 latest_review_box">
                
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 img_review">
                        <a href=""><img class="img_latest" src="img/latest-review-101.jpg"></a>
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-8 com-lg-8 latest_review_box_title">
                        <a href="#">they are title is here not too short</a>
                        <p class="desc_review hidden-xs">An d they sup rise us ag ain</p>
                        <span class="hidden-xs">Posted on 12-12-2015</span>
                    </div>
                </div>
            </div>
        </div>     
        
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 right">
    
    	<b class="btn btn-primary col-sm-12" style="cursor:default;">
        	General Knowlege
        </b>
    	<!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right--><!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        <!--box right-->
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
       		 <a href="#">
        	<span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
            
            <img src="img/image-7.jpg" class="img-responsive"/>
                
                 <div class="overlay">
                   
                </div>
            </span>
            
            <span class="col-xs-6 col-sm-7 col-md-7 col-lg-7 right_title">
            	Sumo aliquip pri cu. Facilisi temporibus pri.....
            </span>
			</a>
        </div>
        <!--End box right-->
        
        
        
        
    </div>
    <!--end of right side-->
    <!--pagination-->
    <div>
    	<center>
     		<ul class="pagination">
              <li><a href="#"> First </a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"> Last </a></li>
            </ul>
      	</center>
      </div>
    <!--End pagin-->



<?php
include('footer.php');
?>
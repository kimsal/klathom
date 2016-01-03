<?php
include('header.php');
$single=$_GET['single'];
?>
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row" style="margin:0px;padding:0px; margin-top: 1px;">
            <div class=" col-sm-2 col-xs-12" style="padding:0px;background-color:#264C84; ">
                <h4 style=" text-align:center;color: #ffffff">Breaking News</h4>
            </div>
            <div class=" col-sm-9 col-xs-12 mymarq " >
                <marquee behavior="scroll" scrollamount="3" direction="left">
                    <ul style="margin-top: 7px; ">

                    	<?php
		                 $rs=mysqli_query($con,"Select des_id,title from tbdescription order by des_id limit 10");
		                  while($row=mysqli_fetch_array($rs)){
		                    ?>
			                  <li style="display: inline; margin-left: 2px;">
                                <a href="<?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
                                	<?php echo $row[1]; ?>
                                </a>
                            </li>
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
        <?php
        $catid=1;
         $rs=mysqli_query($con,"Select * from tbdescription where des_id= ".$single);
          while($row=mysqli_fetch_array($rs)){
            $catid=$row[4];
            ?>
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 single_title">
                <?php echo $row[1]; ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 single_social">
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 single_content">
            <?php echo $row[2]; ?>
            <br/><br/>
            <img src="img/<?php echo $row[3]; ?>" title="<?php echo $row[1]; ?>" class="img-responsive"/>
            <br/><br/><br/>
            Posted date : <?php
                 $date=date_create($row[5]);
                    echo date_format($date,"y/m/d H:i:s"); ?>
            </div>
            <?php
          }
            ?>


            <!--related post-->
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
        <br/>
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
        
        
        
        
    </div>
    <!--end of right side-->
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
            <div class="row" style="margin:0px;padding:0px; margin-top: 1px;">
                <div class=" col-sm-2 col-xs-12" style="padding:0px;background-color:#264C84; ">
                    <h4 style="text-align:center;color:#ffffff;padding:0px;">Breaking News</h4>
                </div>
                <div class=" col-sm-9 col-xs-12 mymarq" >
                    <marquee behavior="scroll" scrollamount="3" direction="left">
                        <ul style="margin-top: 7px; ">
                            <li style="display: inline; margin-left: 2px;">
                                <a href="#">START Lorem ipsum dolor sit ametSTART Lorem ipsum dolor sit ame</a>
                            </li>
                            <li style="display: inline; margin-left: 2px;">
                                <a href="#">START Lorem ipsum dolor sit ametSTART Lorem ipsum dolor sit ame</a>
                            </li>
                            <li style="display: inline; margin-left: 2px;">
                                <a href="#">START Lorem ipsum dolor sit ametSTART Lorem ipsum dolor sit ame</a>
                            </li>
                            <li style="display: inline; margin-left: 2px;">
                                <a href="#">START Lorem ipsum dolor sit ametSTART Lorem ipsum dolor sit ame</a>
                            </li>
                            <li style="display: inline; margin-left: 2px;">
                                <a href="#">START Lorem ipsum dolor sit ametSTART Lorem ipsum dolor sit ame</a>
                            </li>

                        </ul>
                    </marquee>

                </div>
                <div class="col-xs-12 col-sm-1 col-lg-1 col-md-1 hidden-xs"  style="padding:0px;background-color: #264C84">
                    <h4 style=" text-align:center;color: #ffffff">ព័ត៏មានថ្មី</h4>
                </div>
            </div>













<?php
include('footer.php');
?>
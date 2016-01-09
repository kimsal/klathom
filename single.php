<?php
include('header.php');
$single=$_GET['single'];
?>
<div class="container" style="padding:0px">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row" style="margin:0px;padding:0px; margin-top: 1px;">
            <div class=" col-sm-2 col-xs-12" style="padding:0px;background-color:#264C84; ">
                <h4 style=" text-align:center;color: #ffffff">Breaking News</h4>
            </div>
            <div class=" col-sm-9 col-xs-12 mymarq " >
                <marquee behavior="scroll" scrollamount="3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                    <ul style="margin-top: 7px; ">

                    	<?php
		                 $rs=mysqli_query($con,"Select des_id,title from tbdescription order by des_id limit 10");
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
        <?php
        $catid=1;
         $rs=mysqli_query($con,"Select * from tbdescription where des_id= ".$single);
          while($row=mysqli_fetch_array($rs)){
            $catid=$row[4];
            $view=$row[9];
            ?>
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 single_title">
                <?php echo $row[1]; ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 single_social">
                
                 <span class="col-xs-4 col-sm-3 col-md-3 col-lg-3" style="color:#999;font-size:16px;padding:0px;margin:0px;">
                    <?php echo $view=$row[9]; ?> views
                </span>
                  <!--facebook like post-->
                <ol class="breadcrumb" style="line-height:0px;">
                     <div class="fb-like" data-href="<?php echo $domain.$_SERVER['REQUEST_URI']; ?>" data-width="100%" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
                 </ol>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <!--Sound-->
                <div style="position:relative;width:60%;height:35px;overflow:hidden;margin:7px;float:left;">
                  <div style="position:absolute;top:-270px;left:-5px;width:100%;" title="ស្តាប់">
                    <iframe style="width:100%;" height="300" 
                      src="https://www.youtube.com/embed/S9hVbVJNDyc"​ style="opacity:07;">
                    </iframe>
                  </div>
                </div>
                 
                 <img src="img/sound.png" alt="ស្តាប់" onclick="listen();" class="img-responsive" style="width:180px;height:45px;cursor:pointer;"/>
                <!--listen-->
                <script type="text/javascript">
                function listen(){
                  //  alert('HELLO');
                    //document.getElementById("vdo").click(); // Click 
                }
                </script>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 single_content">
            <?php echo $row[2]; ?>
            <br/><br/>
            <img src="img/upload/<?php echo $row[3]; ?>" title="<?php echo $row[1]; ?>" class="img-responsive"/>
            <br/><br/>

            ចុះ​ផ្សាយ​នៅ​ថ្ងៃ : <?php
                 $date=date_create($row[5]);
                 echo date_format($date,"y/m/d H:i:s"); 
                ?>
            </div>
            <?php
          }
            ?>


            <!--related post-->
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" style="margin-top:10px;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel_header">
                    <b> 
                        <span>ព័ត៍មានទាក់ទង</span>
                    </b>
                </div>
                <?php
                $rs=mysqli_query($con,"select des_id,title,description,image,post_date from tbdescription where catid=".$catid." order by des_id DESC limit 6");
                while($row=mysqli_fetch_array($rs)){
                    ?>
                     <!--Box left small latest post-->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 latest_review_box">
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 img_review">
                            <a href="<?php echo $domain; ?>?single=<?php echo $row[0]; ?>"><img class="img_latest img-responsive" src="img/upload/<?php echo $row[3]; ?>">
                        </div>
                        <div class="col-xs-6 col-sm-8 col-md-8 com-lg-8 latest_review_box_title">
                           <?php echo $row[1]; ?>
                           <!-- <p class="desc_review hidden-xs">An d they sup rise us ag ain</p> -->
                            <div class="hidden-xs" style="color:#999;font-size:12px;font-weight:200;">Posted on 
                                <?php
                                 $date=date_create($row[4]);
                                    echo date_format($date,"y/m/d H:i:s");
                                 ?>
                            </div>
                        </div>
                    </div>
                    </a>
                    <?php
                }
                ?>    
            </div>
        </div>      
        <!--facebook like page-->
    <div class="fb-comments" data-href="<?php echo $domain.$_SERVER['REQUEST_URI']; ?>" data-numposts="5" style="width:100%;"></div>

    </div>


    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 right">
        <br/>
        <b class="btn btn-primary col-sm-12" style="cursor:default;">
            ព័ត៍មានថ្មីៗ
        </b>
         <?php
        $rs=mysqli_query($con,"select des_id,title,description,image,post_date from tbdescription order by des_id DESC limit 6");
        while($row=mysqli_fetch_array($rs)){
            ?>
            <!--box right-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
                 <a href=" <?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
                <span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
                
                <img src="img/upload/<?php echo $row[3]; ?>" class="img-responsive"/>
                    
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
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
            <div class="row" style="margin:0px;padding:0px; margin-top: 1px;">
                <div class=" col-sm-2 col-xs-12" style="padding:0px;background-color:#264C84; ">
                    <h4 style="text-align:center;color:#ffffff;padding:0px;">Breaking News</h4>
                </div>
                <div class=" col-sm-9 col-xs-12 mymarq" >
                    <marquee behavior="scroll" scrollamount="3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                        <ul style="margin-top: 7px; ">
                          
                        <?php
                         $rs=mysqli_query($con,"Select des_id,title from tbdescription order by des_id limit 10");
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













<?php
mysqli_query($con,"update tbdescription set view=".($view+1)." where des_id=".$single);
include('footer.php');
?>
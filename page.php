<?php
include('header.php');
$pid=$_GET['page'];
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
         $rs=mysqli_query($con,"Select * from tbpage where pid= ".$pid);
          while($row=mysqli_fetch_array($rs)){
            ?>
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 single_title">
                <center>
                <?php echo $row[1]; ?>
                 </center>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 single_content">
            <?php echo $row[2]; ?>
            <br/><br/>
       
            </div>
            <?php
          }
            ?>
        
    </div>


    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 right">
        <br/>
        <b class="btn btn-primary col-sm-12" style="cursor:default;">
            ព័ត៍មានថ្មីៗ
        </b>
         <?php
        $rs=mysqli_query($con,"select des_id,title,description,image,post_date from tbdescription order by des_id DESC limit 4");
        while($row=mysqli_fetch_array($rs)){
            ?>
            <!--box right-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box_right" id="effect-6">
                 <a href=" <?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
                <span class="col-xs-6 col-sm-5 col-md-5 col-lg-5 right_image img">
                
                <img src="img/<?php echo $row[3]; ?>" class="img-responsive"/>
                    
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
include('footer.php');
?>
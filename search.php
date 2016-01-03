<?php
include('header.php');
if(isset($_GET['pagin']))
	$pagin=$_GET['pagin'];
else
	$pagin=1;
$search=$_GET['s'];
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
            
    	<?php
    	   $help=0;
         $check=0;
         $rs=mysqli_query($con,"Select des_id,title,image,description,post_date from tbdescription WHERE MATCH (title) AGAINST ('".$search."*' IN BOOLEAN MODE) limit ".(($pagin-1)*12).",12");
          while($row=mysqli_fetch_array($rs)){
            $check=1;
          	if($help==3){
          		?>
          		 <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 break-line">
            	</div>
          		<?php
          		$help=0;
          	}
          	$help++;

          	?>
          	<!--center box-->
        	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 box_center" style="border-bottom:none;padding:10px 15px;">
        		<a href="<?php echo $domain; ?>?single=<?php echo $row[0]; ?>">
            	<div class="title_left" style="margin-bottom:10px;">
                	<?php echo $row[1]; ?>
                </div>
           		 
                <span class="col-xs-12 col-sm-6 col-md-6 col-lg-5 center_image">
                	<img src="img/<?php echo $row[2]; ?>" class="img-responsive" title="<?php echo $row[1]; ?>"/>
                </span>
                <span>	
                	<?php
                		echo substr($row[3], 0, 370);
                	?>
                </span>

                <div class="read_full">
                <center>
                    	<span class="glyphicon glyphicon-search" style="margin-right:10px;"></span>
                    	អានលំអិត
               	</center>
                </div>
                </a>
            </div>
            <!--End center box-->
          	<?php
    	  }
        if($check==0){
          ?> 
         <p style="color:red;font-weight:bold;font-size:24px;">No result for " <?php echo $search; ?> ". </p>
        <br/>
        <p style="color:blue;font-size:20px;"><b>Suggestions:</b></p>
        <br/>
        <ul style="margin-left:10px;color:black;font-size:20px;">
          <li>Please check your spelling properly .</li>
          <li>Please try for other keywords.</li>
          <li>Make your keywords to be more shorter</li>
          <li>Make sure that it's keyword for downloading file like book,software,tempate...</li>
        </ul>
        <center>
            <img src="img/sorry.jpg" title="Sorry this page is not avaliable." class="img-responsive"/>
        </center>s
          <?php
        }
        else{
          ?>
          <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 break-line">
          </div>
          <?php
        }
      ?>
            
            
    
        
        
        
      
    <!--end of right side-->
    <!--pagination-->
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
    <?php
      $last_pagin=1;
       $rs=mysqli_query($con,"SELECT count(*) FROM tbdescription WHERE MATCH (title) AGAINST ('".$search."*' IN BOOLEAN MODE)");
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
                    <li><a href="<?php echo $domain; ?>?pagin=<?php echo $i; ?>&s=<?php echo $search; ?>"><?php echo $i; ?></a></li>
                    <?php
                    }
                  }
                }
                else if($pagin>=($last_pagin-2)){
                  ?>
                  <li><a href="<?php echo $domain; ?>?pagin=1&s=<?php echo $search; ?>">1</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=2&s=<?php echo $search; ?>">2</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=3&s=<?php echo $search; ?>">3</a></li>
                  <li><a href="#">...</a></li>
                  <li <?php if($pagin==($last_pagin-2)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-2; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin-2; ?></a></li>
                 <li <?php if($pagin==($last_pagin-1)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin-1; ?></a></li>
                 <li <?php if($pagin==($last_pagin)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin; ?></a></li>
                  
                  <?php
                }
                else if($pagin>8){
                  ?>
                  <li><a href="<?php echo $domain; ?>?pagin=1&s=<?php echo $search; ?>">1</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=2&s=<?php echo $search; ?>">2</a></li>

                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin-1; ?>&s=<?php echo $search; ?>"><?php echo $pagin-1; ?></a></li>
                  <li class="active"><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin; ?>&s=<?php echo $search; ?>"><?php echo $pagin; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin+1; ?>&s=<?php echo $search; ?>"><?php echo $pagin+1; ?></a></li>
                  <li><a href="#">...</a></li>

                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin-1; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin; ?></a></li>
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
                      <li><a href="<?php echo $domain; ?>?pagin=<?php echo $i; ?>&s=<?php echo $search; ?>"><?php echo $i; ?></a></li>
                      <?php
                    }
                  }
                  ?>
                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-2; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin-2; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin-1 ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&s=<?php echo $search; ?>"><?php echo $last_pagin; ?></a></li>
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

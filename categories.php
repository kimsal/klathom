<?php
include('header.php');
if(isset($_GET['pagin']))
	$pagin=$_GET['pagin'];
else
	$pagin=1;
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
            
    	<?php
    	$catid=$_GET['cat'];
    	$help=0;
         $rs=mysqli_query($con,"Select des_id,title,image,description,post_date from tbdescription where catid=".$catid.' limit '.(($pagin-1)*3).',3');
          while($row=mysqli_fetch_array($rs)){
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
      ?>
            
            
    
        
        
        
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 break-line">
        </div>

    <!--end of right side-->
    <!--pagination-->
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
    <?php
      $last_pagin=1;
       $rs=mysqli_query($con,"SELECT count(*) FROM tbdescription where catid=".$catid);
      while($row=mysqli_fetch_array($rs)){
        $last_pagin=$row[0];
        $last_pagin=ceil($last_pagin/3);
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
                    <li><a href="<?php echo $domain; ?>?pagin=<?php echo $i; ?>&cat=<?php echo $catid; ?>"><?php echo $i; ?></a></li>
                    <?php
                    }
                  }
                }
                else if($pagin>=($last_pagin-2)){
                  ?>
                  <li><a href="<?php echo $domain; ?>?pagin=1&cat=<?php echo $catid; ?>">1</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=2&cat=<?php echo $catid; ?>">2</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=3&cat=<?php echo $catid; ?>">3</a></li>
                  <li><a href="#">...</a></li>
                  <li <?php if($pagin==($last_pagin-2)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-2; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-2; ?></a></li>
                 <li <?php if($pagin==($last_pagin-1)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-1; ?></a></li>
                 <li <?php if($pagin==($last_pagin)){echo 'class="active"';} ?>><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin; ?></a></li>
                  
                  <?php
                }
                else if($pagin>8){
                  ?>
                  <li><a href="<?php echo $domain; ?>?pagin=1&cat=<?php echo $catid; ?>">1</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=2&cat=<?php echo $catid; ?>">2</a></li>

                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $pagin-1; ?></a></li>
                  <li class="active"><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $pagin; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $pagin+1; ?>&cat=<?php echo $catid; ?>"><?php echo $pagin+1; ?></a></li>
                  <li><a href="#">...</a></li>

                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-1; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin; ?></a></li>
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
                      <li><a href="<?php echo $domain; ?>?pagin=<?php echo $i; ?>&cat=<?php echo $catid; ?>"><?php echo $i; ?></a></li>
                      <?php
                    }
                  }
                  ?>
                  <li><a href="#">...</a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-2; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-2; ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin-1; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin-1 ?></a></li>
                  <li><a href="<?php echo $domain; ?>?pagin=<?php echo $last_pagin; ?>&cat=<?php echo $catid; ?>"><?php echo $last_pagin; ?></a></li>
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

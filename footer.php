  <div class="col-xs-12 col-md-12 col-sm-12 myfoot">
            <!--footer-->
           <div class="col-sm-4 col-xs-12  col-md-4">
               <label>Statement</label>
                <img class="img-responsive fbcon1" src="img/fbicon.png" />
               <img class="img-responsive fbcon1" src="img/linkedin.png" />
               <img class="img-responsive fbcon1" src="img/Twitterbird.png" />
           </div>
            <div class="col-sm-4 col-xs-12 col-md-4">

                <ul>
                    <li class="listfooter">
                        <label class="la1">Categories</label>
                    </li>

                     <?php
                     $rs=mysqli_query($con,"Select * from tbcategory");
                      while($row=mysqli_fetch_array($rs)){
                        ?>
                       <li class="listfooter">
                            <a href="<?php echo $domain; ?>?cat=<?php echo $row[0]; ?>">
                                <label id="leg1"><?php echo $row[1]; ?></label>
                            </a>
                        </li>
                        <?php
                      }
                    ?>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-12 col-md-4">
                <ul>
                 <?php
                 $rs=mysqli_query($con,"Select pid,pname from tbpage");
                  while($row=mysqli_fetch_array($rs)){
                    ?>
                   <li class="listfooter">
                        <a href="<?php echo $domain; ?>?page=<?php echo $row[0]; ?>">
                            <label id="leg1"><?php echo $row[1]; ?></label>
                        </a>
                    </li>
                    <?php
                  }
                ?>
                </ul>
            </div>
            <!--end of footer-->
        </div>
    </div>
</div>
</div>
<!--close containner-->
</div>
<?php
    mysqli_close($con);
?>
</body>
</html>
  <div class="col-xs-12 col-md-12 col-sm-12 myfoot">
            <!--footer-->
            <div class="col-sm-4 col-xs-12  col-md-4">
              <label>Statement</label>
                <img class="img-responsive fbcon1" src="img/fbicon.png" />
                <img class="img-responsive fbcon1" src="img/linkedin.png" />
                <img class="img-responsive fbcon1" src="img/Twitterbird.png" />
            </div>
            <script type="text/javascript">
$(document).ready(function(){
  $(".dropdown-toggle").dropdown();
});  
</script>
            <div class="col-sm-4 col-xs-12 col-md-4">
            
              <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Category<span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <?php
                    $rs=mysqli_query($con,"Select * from tbcategory");
                    while($row=mysqli_fetch_array($rs)){
                  ?>
                    <li>   
                      <a id="leg1" style="cursor:pointer;" href="<?php echo $domain; ?>?cat=<?php echo $row[0]; ?>">
                        <?php echo $row[1]; ?>
                      </a>
                    </li>
                  <?php
                    }
                  ?>
                </ul>
              </div>

            </div>
            <div class="col-sm-4 col-xs-12 col-md-4">
                <ul>
                 <?php
                 $rs=mysqli_query($con,"Select pid,pname from tbpage");
                  while($row=mysqli_fetch_array($rs)){
                    ?>
                   <li class="listfooter">
                        <a href="<?php echo $domain; ?>?page=<?php echo $row[0]; ?>">
                            <label id="leg1" style="cursor:pointer;"><?php echo $row[1]; ?></label>
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
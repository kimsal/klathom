f  <div class="col-xs-12 col-md-12 col-sm-12 myfoot">
            <!--footer-->
            <div class="col-sm-4 col-xs-12  col-md-4">
              <ul class="social-network social-circle">
                <li><a class="social" href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a class="social" href="https://www.facebook.com/khlathom.net/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a class="social" href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a class="social" href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="social" href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
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
                    <li >
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
                          <label id="leg1" style="cursor:pointer; color: #ffffff;"><?php echo $row[1]; ?></label>
                      </a>
                  </li>
                  <?php
                }
              ?>
              <li class="listfooter">
                    <a href="<?php echo $domain; ?>?admin">
                        <label id="leg1" style="cursor:pointer; color: #ffffff;">Login</label>
                    </a>
                </li>
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
<footer class="footer_area">
  <div class="footer_bottom ptb-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="single_footer widget_description">
            <div class="addresses_inner">
              <div class="single_address">
                <p>
                  <span> Address: </span> <span>3rd Floor, Taen Shopping complex  Old airport road, Opp Nitel office</span>
                </p> 

                <p>
                  <span> Phone: </span> <span>+234 8056 2519 23</span>
                </p>
              </div>
            </div>
            <div class="social__icon">
              <ul>
                <li>
                  <a class="facebook" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="google-plus" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>

                <li>
                  <a class="twitter" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="linkedin" href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="single_footer widget_description">
            <div class="map-area">
                <div id="googleMap" style="width:100%;height:200px;"></div>
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copyright_inner text-center">
            <p style="color: #000000;">Copyright &copy; 
              <?php 
                $startYear = 2019; 
                $currentYear = date('Y');
                echo $startYear . (($startYear != $currentYear) ? ' - ' . $currentYear : '');
              ?>
             All Right Reserved </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
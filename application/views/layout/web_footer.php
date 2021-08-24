<!-- Footer -->	
      <div class="container-fluid cloud-divider white">
         <!-- Clouds SVG Divider -->	
         <svg id="deco-clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z">
            </path>
         </svg>
      </div>
      <footer>
         <div class="container-fluid">           
            <!-- Newsletter -->
            <div class="col-lg-4 col-md-6 text-center res-margin">
               <h6 class="text-light">Signup for our Newsletters</h6>
               <!-- Form -->				
               <div>
                  
                  <?php echo flash_message_success('status_msg'); ?>
                  <?php echo flash_message_danger('status_msg_error'); ?>
                  <?php echo custom_validation_errors(); ?>


                     <?php
                        
                        //process form asynchronously using AJAX
                        $form_attributes = array("id" => "subscribe_newsletter_form");
                        echo form_open('home/subscribe_newsletter_ajax', $form_attributes); ?>
                           <div id="subscribe_status_msg" class="m-t-20"></div>
                           <div>
                               <div class="form-group">
                                 <input type="text" name="name" class="form-control input-field" placeholder="Name" > 
                              </div>
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control input-field" placeholder="Email">
                              </div>  
                              <div class="input-group-btn text-center">
                                  <button class="btn center-block">Subscribe</button>                                   
                              </div>                        
                           </div>
                           <!-- /mc_embed_signup_scroll -->
                  
                        <?php echo form_close(); ?>


                  <!-- /form ends -->
               </div>
               <!-- /mc_embed_signup -->		            
            </div>
            <!-- /col-lg-4 -->
            <!-- Bottom Credits -->
            <div class="col-lg-4 col-md-6 res-margin">
               <a href="<?php echo base_url(); ?>#page-top"><img src="<?php echo base_url(); ?>assets/img/Blooms_logo_yellow.png"  alt="" class="center-block"></a>
               <!-- social-icons -->	
               <div class="social-media">
                  <a href="https://youtube.com/channel/UCXKIz4y9ffrkj1l1q6pSVhQ" target="_blank" title=""><i class="fa fa-youtube"></i></a>
                  <a href="https://web.facebook.com/Blooms-n-Daisies-School-2068648803459026/" target="_blank" title=""><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/bloomsindaisies/" target="_blank" title=""><i class="fa fa-instagram"></i></a>
               </div>
            </div>
            <!-- /col-lg-4 -->
            <!-- Opening Hours -->
            <div class="col-lg-4 col-md-12 text-center">
               <!-- Sign-->
               <h6 class="text-light">Opening Hours:</h6>
               <!-- Table-->
               <table class="table">
                  <tbody>
                     <tr>
                        <td class="text-left">Preschoolers & Toddlers</td>
                        <td class="text-right">Mon - Fri</td>
                        <td class="text-center">7:30 - 2:30 pm</td>
                     </tr>
                     <tr>
                        <td class="text-left">Primary</td>
                        <td class="text-right">Mon - Fri</td>
                        <td class="text-center">7:30 - 3:00 pm</td>
                     </tr>
                     <tr>
                        <td class="text-left">Weekends / Holidays</td>
                        <td class="text-right"><span class="label label-danger">Closed</span></td>
                        <td class="text-center"></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- /col-lg-4 -->
         </div>
         <!-- / container -->
         <hr>
         <p>Copyright © 2021 / Powered by  <a href="<?php echo software_vendor_site ?>" target="_blank"><?php echo software_vendor ?></a></p>
         <!-- /container -->
         <!-- Go To Top Link -->
         <div class="page-scroll hidden-sm hidden-xs">
            <a href="<?php echo base_url(); ?>#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
         </div>
      </footer>
      <!-- /footer ends -->
	  </div> <!-- /page width -->
      <!-- Core JavaScript Files -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
      <!-- Isotope -->	  
      <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.js"></script>
      <!--Mail Chimp validator -->
      <script src='<?php echo base_url(); ?>assets/js/mc-validate.js'></script>
      <!--Other Plugins -->
      <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="<?php echo base_url(); ?>assets/js/prefixfree.js"></script>	  	  
      <!-- GreenSock -->
      <script src="<?php echo base_url(); ?>assets/layerslider/js/greensock.js" ></script>
      <!-- LayerSlider script files -->
      <script src="<?php echo base_url(); ?>assets/layerslider/js/layerslider.transitions.js" ></script>
      <script src="<?php echo base_url(); ?>assets/layerslider/js/layerslider.kreaturamedia.jquery.js" ></script>
      <!--Custom -->
      <script src="<?php echo base_url(); ?>assets/js/custom_script.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/login.js"></script>



    <script type="text/javascript">
        //pass base_url to js
        var base_url = "<?php echo base_url(); ?>";
    </script>


   </body>
</html>




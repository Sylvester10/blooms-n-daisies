 <br/>
 <br/>
 <br/>
                        <br/><br/>
                        <br/><br/>
                     
 <!-- Section Callout -->
      <section id="callout" class="small-section">
         <!-- Clouds background -->
         <div class="hidden-xs">
   			  <div class="cloud x1"></div>
   			  <div class="cloud x2"></div>
   			  <div class="cloud x3"></div>
   			  <div class="cloud x4"></div>
   			  <div class="cloud x5"></div>
   			  <div class="cloud x6"></div>
   			  <div class="cloud x7"></div>
		    </div>
         <!-- /Clouds ends -->
         <div class="containers">
            <!-- Animated Sun -->
            <div class="sun hidden-sm hidden-xs">
               <div class="sun-face">
                  <div class="sun-hlight"></div>
                  <div class="sun-leye"></div>
                  <div class="sun-reye"></div>
                  <div class="sun-lred"></div>
                  <div class="sun-rred"></div>
                  <div class="sun-smile"></div>
               </div>
               <!-- Sun rays -->
               <div class="sun-anime">
                  <div class="sun-ball"></div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
                  <div class="sun-light"><b></b><s></s>
                  </div>
               </div>
            </div>
            <!-- /Animated Sun -->
               
                  <br/><br/>
                  <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-6">
                        <div class="well">


                           <h5 class="widget-title"><i class="fa fa-lock" style="color: #08A2DE;"></i><b><span style="color: #08A2DE;"> Change Password </span></b></h5>

                               <?php if ( ! $valid_code ) { //invalid or expired code ?>
                                        <h4 class="text-danger">The password reset key is invalid or expired. If you submitted the password recovery request more than once, ensure you clicked on the reset link of the most recent mail sent to you.</h4> 
                                        
                                    <?php } else { //code is valid and not expired, show form ?>
                                    
                                       <?php
                                        //process form asynchronously using AJAX
                                        $form_attributes = array("id" => "change_password_form", "class" => "checkout-login-form");
                                        echo form_open('login/change_password_ajax', $form_attributes); ?>

                                            <div class="row">

                                                <input type="hidden" id="admin_id" value="<?php echo $y->id; ?>" />

                                                <div class="input-box col-md-12 col-12 mb--20">
                                                    <label>Email</label>
                                                    <input type="email" value="<?php echo $y->email; ?>" readonly />
                                                </div>

                                                <div class="input-box col-md-12 col-12 mb--20">
                                                     <label>Password</label>
                                                    <input type="password" name="password" placeholder="Password" required />
                                                </div>

                                                <div class="input-box col-md-12 col-12 mb--20">
                                                     <label>Confirm Password</label>
                                                    <input type="password" name="c_password" placeholder="Re-enter Password" required />
                                                </div>

                                                <div class="input-box col-12">
                                                    <div id="status_msg"></div>
                                                </div>

                                                <div class="input-box col-12">
                                                    <input type="submit" value="Change">
                                                </div>

                                            </div>

                                        <?php echo form_close(); ?>

                              <?php } ?>
       
                                <div class="row m-t-30">
                                 <div class="col-md-12">
                                    <h5 class="text-bold"><a href="<?php echo base_url('login'); ?>">Login</a>
                                    </h5>
                                 </div>
                                </div>
            
   			               </div>
                        </div>
                     </div><br/>
   			      <!-- /well -->

         </div>

      </div>
            <!-- /col-md-6 -->
   </div>
         <!-- /container-->
</section>
      <!-- Section Ends-->

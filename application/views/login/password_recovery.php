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


                           <h5 class="widget-title"><i class="fa fa-lock" style="color: #08A2DE;"></i><b><span style="color: #08A2DE;"> Secure Password Recovery </span></b></h5>

                            <?php echo flash_message_success('status_msg'); ?>
                            <?php echo flash_message_danger('status_msg_error'); ?>


                            <?php
                              //process form asynchronously using AJAX
                                $form_attributes = array("id" => "password_recovery_form");
                                echo form_open('login/password_recovery_ajax', $form_attributes); ?>
                                    <br/>
                                    <div class="input-box col-md-12 col-12 mb--20">
                                       <b>Enter the email address that is associated with your admin account.</b>
                                    </div><br/> 
                                 
                                    <div class = "form-group">
                                       <input type="email" name="email" class="form-control" placeholder="Email Address" required/>
                                    </div>


                                    <div class="input-box col-12">
                                       <div id="status_msg"></div>
                                    </div>

                                    <div class="form-group">
                                         <button class="btn btn-success btn-lg">Recover</button>
                                    </div>


                                <?php echo form_close(); ?>
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

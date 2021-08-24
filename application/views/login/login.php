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


               <?php 
                  //process form asynchronously using AJAX
                 $form_attributes = array("id" => "admin_login_form");
                 echo form_open('login/login_ajax', $form_attributes);
         			   
                     if ($this->session->is_requested) { ?>
                              
                        <input type="hidden" id="requested_page" value="<?php echo $this->session->requested_page;?>" />
                        <?php }

                     else { ?>
                           
                         <input type="hidden" id="requested_page" value="<?php echo base_url('admin'); ?>" />
                     <?php } ?>

                        <div class="well">
                           <h4 class="widget-title"><i class="fa fa-lock" style="color: #08A2DE;"></i><b><span style="color: #08A2DE;"> Admin Login </span></b></h4>

                           
                              <div>
                                 <label class="align-left">Email*</label>
                                 <br/>
                                 <input type="email" name="email" class="form-control input-field" placeholder="Email ID" required/>      
                                 <br/>
                                 <label class="form-control-label">Password*</label>
                                 <br/>
                                 <input type="password" name="password" class="form-control input-field" placeholder="Password" required/>                     
                              </div>
                              <br>
                              <div id="status_msg" class="m-t-20"></div>
                              <div> 
                                 <button type="submit" value="Submit" class="btn center-block">LOGIN</button>
                              </div><br/>
                              <div class="row m-t-30">
                                 <?php echo flash_message_success('status_msg'); ?>
                                 <?php echo flash_message_danger('status_msg_error'); ?>
                                 <div class="col-md-12">
                                       <h5 class="text-bold"><a href="<?php echo base_url('login/password_recovery'); ?>">Forgot Password?</a>
                                       </h5>
                                 </div>
                              </div>

                        </div>
                  <?php echo form_close(); ?>
   			       
                </div>
   			  <!-- /well -->

            </div><br/>

         </div>
            <!-- /col-md-6 -->
      </div>
         <!-- /container-->
   </section>
      <!-- Section Ends-->

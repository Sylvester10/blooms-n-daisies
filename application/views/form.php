
<!-- Parallax objects -->
      <div class="blog-object1 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
         data-100="transform:translatey(0%);"
         data-1025="transform:translatey(-80%);">
        <!-- Image -->
         <img src="<?php echo base_url(); ?>assets/img/blogobject1.png" alt="">
      </div>
     
      <div class="blog-object2 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
         data-100="transform:translatey(0%);"
         data-1025="transform:translatey(-80%);">
       <!-- Image -->
         <img src="<?php echo base_url(); ?>assets/img/blogobject2.png" alt="">
      </div>



 <!-- Section activities -->
      <section  id="services" class="color-section" style="margin-top: -80px !important;">
         <div class="container">
            <h6 style="margin-top: 50px !important; margin-bottom: 50px !important;" class="text-center">Please fill the admission form below, we will get back to you as soon possible</h6>

            <?php 
            $form_attributes = array("id" => "admission_form");
            echo form_open('form/form_ajax', $form_attributes); ?>

            <div class="form col-lg-12">

               <div class="col-lg-12">

                  <div class="col-lg-4 form_mar">
                     <label>Surname:</label>
                     <input type="text" name="surname" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-4 form_mar">
                     <label>First name:</label>
                     <input type="text" name="first_name" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-4 form_mar">
                     <label>Other name:</label>
                     <input type="text" name="other_name" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Date of Birth:</label>
                     <input type="date" name="dob" class="form-control input-field"  />
                  </div> 
                  
                  <div class="col-lg-6 form_mar">
                     <label>Place of Birth:</label>
                     <input type="text" name="pob" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-4 form_mar">
                     <label>Age:</label>
                     <input type="number" name="age" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-4 form_mar">
                     <label>Gender:</label>
                     <select class="form-control" name="gender">
                        <option value="">Select</option>
                        <option value="Male"> Male </option>
                        <option value="Female"> Female </option>
                     </select>  
                  </div>

                  <div class="col-lg-4 form_mar">
                     <label>State of Origin:</label>
                     <select class="form-control" name="state">
                        <option value="">Select</option>
                        <?php 
                        $states = nigerian_states();
                           foreach ($states as $state ) { ?>
                           <option value="<?php echo $state; ?>" > <?php echo $state; ?> </option>
                        <?php }
                        ?>
                     </select>  
                  </div>

                  <div class="col-lg-4 form_mar">
                     <label>Nationality:</label>
                     <select class="form-control" name="country">
                        <option value="">Select</option>
                        <?php 
                        $countries = countries();
                           foreach ($countries as $country ) { ?>
                           <option value="<?php echo $country; ?>" > <?php echo $country; ?> </option>
                        <?php }
                        ?>
                     </select>  
                  </div>

               </div>

               <div class="col-lg-12">

                  <div class="col-lg-12 form_mar">
                     <label>Class seaking admission:</label>
                     <br>
                     <br>
                     <br>
                     <label><input type="radio" name="class" value="Creche 8months - 2yrs" <?php echo set_radio('class', 'Creche 8months - 2yrs'); ?> > Creche</label>
                     <label class="radio_mar"><input type="radio" name="class" value="Preschool 1 (2yrs - 3yrs)" <?php echo set_radio('class', 'Preschool 1 (2yrs - 3yrs)'); ?>> Preschool 1</label>
                     <label class="radio_mar"><input type="radio" name="class" value="Preschool 2 (3yrs - 4yrs)" <?php echo set_radio('class', 'Preschool 2 (3yrs - 4yrs)'); ?>> Preschool 2</label>
                     <label class="radio_mar"><input type="radio" name="class" value="Transition (4yrs - 5yrs)" <?php echo set_radio('class', 'Transition (4yrs - 5yrs)'); ?>> Transition</label>
                  </div>

                  <div class="col-lg-8 form_mar">
                     <label>Parents name:</label>
                     <input type="text" name="parents_name" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Parents Number:</label>
                     <input type="number" name="phone_number" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Alternate Number:</label>
                     <input type="number" name="other_number" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-12 form_mar">
                     <label>Address:</label>
                     <input type="text" name="address" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-8 form_mar">
                     <label>Email:</label>
                     <input type="email" name="email" class="form-control input-field"  />
                  </div>

               </div>

               <div class="col-lg-12 form_mar">

                  <p><b><i> EMERGENCY CONTACT, IF YOU CANNOT BE REACHED </i></b></p>
                  <div class="col-lg-6 form_mar">
                     <label>Name:</label>
                     <input type="text" name="c_name" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Phone:</label>
                     <input type="number" name="c_number" class="form-control input-field"  />
                  </div>

               </div>

                <div class="col-lg-12 form_mar">

                  <p><b><i> OTHER PEOPLE AUTHORIZED TO PICKUP YOUR CHILD </i></b></p>
                  <div class="col-lg-6 form_mar">
                     <label>Name:</label>
                     <input type="text" name="aut_name" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Phone:</label>
                     <input type="number" name="aut_number" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-12 form_mar">
                     <label>Full Address:</label>
                     <input type="text" name="aut_address" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Name:</label>
                     <input type="text" name="aut_name2" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-6 form_mar">
                     <label>Phone:</label>
                     <input type="number" name="aut_number2" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-12 form_mar">
                     <label>Full Address:</label>
                     <input type="text" name="aut_address2" class="form-control input-field"  />
                  </div>

                  <div class="col-lg-12 form_mar">
                     <label>Any health conditions?:</label>
                     <input type="text" name="health" class="form-control input-field" height="500" placeholder="Any health conditions or allergies? (If yes, please explain)" />
                  </div>

               </div>       
               
            </div>

            <div class="col-lg-12 form_mar">
               <div id="status_msg"></div>

               <?php echo flash_message_success('status_msg'); ?>
               <?php echo flash_message_danger('status_msg_error'); ?> 
            </div>

            <div class="col-lg-12 form_mar">
               <button type="submit" value="Submit" class="btn center-block">Submit</button>  
            </div>     

            <?php echo form_close(); ?> 
            
 
         </div>
         <!-- /container -->
      </section>
      <!-- /Section ends -->

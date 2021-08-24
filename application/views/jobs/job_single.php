
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
<section id="about">
   <div class="container">


    <div class="row">

      <div class="col-lg-12 mt-10  pt-10">

        <div class="col-lg-12 col-md-12">

           <?php 
            $form_attributes = array("id" => "job");
            echo form_open('home/job_ajax', $form_attributes); ?>

            <div class="col-lg-12 col-md-12 form_mar">
               <label>Full Name:</label>
               <input type="text" name="fullname" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Email:</label>
               <input type="email" name="email" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Phone number:</label>
               <input type="text" name="number" class="form-control input-field" />
            </div>

            <div class="col-lg-12 col-md-12 form_mar">
              <label>Current Address:</label>
              <input type="text" name="c_address" class="form-control input-field" />
            </div>

            <div class="col-lg-12 col-md-12 form_mar">
              <label>Permanent Address:</label>
              <input type="text" name="p_address" class="form-control input-field" />
            </div>
          
            <div class="col-lg-6 col-md-6 form_mar">
               <label>Age:</label>
               <input type="text" name="age" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Gender:</label>
               <select class="form-control" name="gender" required >
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Nationality:</label>
               <select class="form-control" name="country">
                  <option selected value="">Select</option>
                  <?php 
                  $countries = countries();
                     foreach ($countries as $country ) { ?>
                     <option value="<?php echo $country; ?>" > <?php echo $country; ?> </option>
                  <?php }
                  ?>
               </select>  
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>State of Origin:</label>
                <select class="form-control" name="state" >
                  <option selected value="">Select</option>
                  <?php 
                  $states = nigerian_states();
                     foreach ($states as $state ) { ?>
                     <option value="<?php echo $state; ?>" > <?php echo $state; ?> </option>
                  <?php }
                  ?>
               </select>  
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Religion:</label>
               <select class="form-control" name="religion" required >
                <option value="">Select</option>
                  
                  <?php 
                  $religions = world_religions();
                  foreach ($religions as $religion ) { ?>
                    <option value="<?php echo $religion; ?>"><?php echo $religion; ?></option>
                  <?php } ?>

               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Religious volunteer group:</label>
               <input type="text" name="volunteer" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Position apllying for:</label>
               <select class="form-control" name="job_title" required >
                <option selected value="<?php echo $y->job_title; ?>"><?php echo $y->job_title; ?></option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Marital Status:</label>
               <select class="form-control" name="marriage" required >
                <option value="">Select</option>
                <option value="Single">Single</option>
                <option value="Engaged">Engaged</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Seperated">Seperated</option>
                <option value="Widowed">Widowed</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>Qualification:</label>
               <select class="form-control" name="qualification">
                <option value="">Select</option>
                <?php 
                $qualifications = staff_qualifications();
                foreach ($qualifications as $qualification) { ?>
                  <option value="<?php echo $qualification; ?>" <?php echo set_select('qualification', $qualification); ?> ><?php echo $qualification; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label>Experience:</label>
              <input type="text" name="experience" class="form-control input-field" />
            </div>

            <div class="col-lg-12 col-md-12 mt-10">
              <p style="margin-top: 50px !important; margin-bottom: 10px !important; font-size: 16px !important;"><b>Rate yourself</b></p>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label>I am a team player:</label>
               <select class="form-control" name="team" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I work well under pressure:</label>
               <select class="form-control" name="pressure" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I want to pursue a career in education:</label>
               <select class="form-control" name="career" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I love to teach young children:</label>
               <select class="form-control" name="teach" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I love to learn new things that help me improve in my job:</label>
               <select class="form-control" name="learn" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I manage my time and energy effectively:</label>
               <select class="form-control" name="manage" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I have good people skills and emotional intelligence:</label>
               <select class="form-control" name="people_skill" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I treat everyone fairly and equally without favouritism:</label>
               <select class="form-control" name="treat" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I have a neat and legible handwriting:</label>
               <select class="form-control" name="handwriting" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I can look for information online that will help do my job better:</label>
               <select class="form-control" name="information" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
               <label> I read books ( for education and for pleasure):</label>
               <select class="form-control" name="books" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-9 col-md-9 form_mar">
               <label> I am willing to invest my time and resources learn new skills that will help me in this career path:</label>
               <select class="form-control" name="invest" required >
                <option value="">Select</option>
                <option value="Strongly Disagree">Strongly Disagree</option>
                <option value="Disagree">Disagree</option>AgreeStrongly Agree
                <option value="Agree">Agree</option>
                <option value="Strongly Agree">Strongly Agree</option>
               </select>
            </div>

            <div class="col-lg-12 col-md-12 form_mar">
              <label>What other commitments do you have eg. church, mosque , clubs etc and when does it require your time:</label>
              <input type="text" name="commitments" class="form-control input-field" />
            </div>

            <div class="col-lg-12 col-md-12 form_mar">
              <label>Do you belong to any educational body or group even if it is on social media? Please provide the name?</label>
              <input type="text" name="edu_body" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label>Who is your role model in education?</label>
              <input type="text" name="role_model" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label>How many years are willing to put into this job if given the offer? </label>
              <input type="text" name="years" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label>What is your personal dream for yourself in the next 5 years?</label>
              <input type="text" name="dream" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label>What are your personal core values? </label>
              <input type="text" name="core_value" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label>Other than teaching, what other skills do you have? </label>
              <input type="text" name="skills" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label> If given this job, what subjects can you teach conveniently? </label>
              <input type="text" name="teaching" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label> What age of children do you prefer to work with?</label>
              <input type="text" name="preffered_age" class="form-control input-field" />
            </div>

            <div class="col-lg-6 col-md-6 form_mar">
              <label> What is your salary expectation? </label>
              <input type="text" name="salary" class="form-control input-field" />
            </div>

            <div class="col-lg-12 col-md-12 form_mar">
              <label>  Include your Instagram, Facebook, Twitter or LinkedIn address if you are on any of these social media platforms</label>
              <input type="text" name="socials" class="form-control input-field" />
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

      </div>  

    </div>
       
   </div>
   <!-- /container -->
</section>
<!-- /Section ends -->


	   
      <!-- Clouds SVG Divider -->
         <svg id="deco-clouds2" class="head hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
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
	  
      <!-- Page Content -->
      <div id="blog-page" class="single-page container">	   
         <!-- Blog Post -->
         <div class="col-md-12 blog-home">
           <!-- Content Row -->
			<div class="row">
			   <div class="blog-post post-main">
				  <h3><?php echo $y->title; ?></h3>
				  <!-- Post Info -->
				  <div class="post-info">
					 <p><i class="fa fa-clock-o"></i>Posted on <?php echo x_date_full($y->date); ?></p>
					 <p><i class="fa fa-user"></i>by <a href="#">Admin</a></p>
					 <!-- Post Comments -->
					 <p><i class="fa fa-comment"></i><?php echo $total_comments; ?> Comments</p>
				  </div>
				  <!-- Image -->
				  <img class="img-responsive" src="<?php echo base_url('assets/uploads/blog/'.$y->featured_image); ?>" alt="">
				  <!-- Post Content -->
				  <p><?php echo $y->body; ?></p>				  
			   </div>
			   <!-- /blog-post -->	
			   <!-- Comments Form -->
			   <div class="media">

               <?php 
                  $form_attributes = array("id" => "create_comment_form");
                  echo form_open('home/create_comment_ajax/'.$post_id, $form_attributes); ?>


               <h5>Leave a Comment:</h5>
                  <!-- Form Starts -->

                  <input type="hidden" id="post_id" value="<?php echo $post_id; ?>" />

                  <div class="form-group">
                     <input type="text" name="name" class="form-control input-field" placeholder="Name" required />                    
                     <input type="email" name="email" class="form-control input-field" placeholder="Email"  required />           
                  </div>

                  <textarea name="comment" id="message" class="textarea-field form-control" rows="4" placeholder="Enter your Comment"></textarea>

                  <input type="text" class="form-control" name="captcha_code" id="captcha_code" value="<?php echo mt_rand(111111, 999999); ?>" readonly />

                  <input type="text" class="form-control input-field" name="c_captcha_code" placeholder="Enter Captcha code" required />

                  <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                     <div id="status_msg"></div>
                  </div>

                  <button type="submit" value="Submit" class="btn center-block">Send Comment</button>
			   </div>

            <?php echo form_close(); ?>

			   <!-- Posted Comments -->
            <div class="comments-block">
              <h4 class="text-center">Comments</h4>
              <hr>

              <?php
                  if ($total_comments > 0) { 

                     foreach ($comments as $c) { ?>

			   
				  <!-- Comment -->
				  <div class="comment media">
					 <a href="#">
					 <img class="media-object  img-responsive img-circle" src="<?php echo user_avatar; ?>" alt="">
					 </a>
					 <div class="media-body">
						<a href="#">
						   <h6 class="media-heading"><?php echo $c->name; ?>
							  <small><?php echo x_date($c->date); ?> at <?php echo x_time_12hour($c->date); ?></small>
						   </h6>
						</a>
						<p><?php echo $c->comment; ?></p>
					 </div>
				  </div>
				  <!-- /media -->		

            <?php }

            } ?>

			   </div>
			   <!-- /comments block -->



            
			</div>
			<!-- /row -->
		</div>
		<!-- /blog-home -->

      </div>
      <!-- /blog-page -->
      
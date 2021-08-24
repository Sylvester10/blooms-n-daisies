
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


                        <?php
                            if ($total_records > 0) { ?>


                        <div class="col-lg-12 mt-4 pt-2">


                            <?php
                                foreach ($recent_jobs as $j) { ?>


                            <div class="job-list-box border jobs rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-9 col-md-9">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="<?php echo base_url('users/job_single/'.$j->id.'/'.$j->slug); ?>" class="text-dark"><?php echo $j->job_title; ?></a></h6>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i><?php echo time_ago($j->date_added); ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                                <span class="badge badge-success">Full-Time</span>

                                                <div class="mt-3">
                                                    <a href="<?php echo base_url('home/job_single/'.$j->id); ?>" class="btn btn-sm btn-primary">Apply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } //endforeach ?>


                        </div>
                        
                        <?php } else { ?>

                            <h3 class="text-danger text-center">No results found!</h3>

                        <?php } //endif ?>
                        
                       
                        <?php echo pagination_links($links, 'pagination'); ?>     

                    </div>
            
 
         </div>
         <!-- /container -->
      </section>
      <!-- /Section ends -->

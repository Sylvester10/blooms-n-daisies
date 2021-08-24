

<section id="about">
    <div class="container">


        
        <?php 
        if ( $total_records > 0) { ?>

            <!-- Start Our Event Area -->
            <div class="dcare__event__area bg--white">
                <div class="container">
                    <div class="row event-grid-page">

                        <?php
                        $count = 1;
                        foreach ($events as $y) { ?>
                            <div class="col-lg-4">
                                <!-- Start Single Event -->
                                 <div class="blog-previe">
                                    <!-- Blog image -->
                                     <img class="" src="<?php echo base_url('assets/img/calendar-icon.jpg'); ?>" alt="calendar icon">
                                    <div class="latest-caption text-center">
                                         <a href="<?php echo base_url('home/single_event/'.$y->id); ?>"> <h4><?php echo $y->caption; ?></h4> </a>
                                       <!-- Post Info -->
                                       <div class="post-info">
                                          <p><i class="fa fa-clock-o"></i><?php echo x_date_full($y->event_date); ?> at <?php echo x_time_24hour($y->time); ?></p>
                                          <p><i class="fa fa-home"></i> <?php echo $y->venue; ?></p>
                                          <!-- Post Comments -->
                                          <p></p>
                                       </div>
                                       <!-- Button-->
                                       <a class="btn" href="<?php echo base_url('home/single_event/'.$y->id); ?>">Learn More</a>
                                    </div>
                                 </div>
                             </div>
                             <!-- /blog-preview -->
                            <!-- End Single Event -->

                        <?php } //endforeach } ?>

                    </div>
                </div>
            </div>

        <?php } else { ?>

            <h3 class="text-danger">No event to show.</h3>

        <?php } ?>


        <?php echo pagination_links($links, 'pagination'); ?>
    

    </div>
    <!-- /container -->
</section>
<!-- /Section ends -->
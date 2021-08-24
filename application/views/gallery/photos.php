
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


        <?php
      if ( $total_records > 0 ) { ?>

         <div class="row galler__wrap mt--40">

           <!-- Gallery -->
            <div class="row">
               <div class="col-md-12">
                  <div id="lightbox">
                     <!-- Image 1 -->

                     <?php
                     foreach ($photos as $p) { ?>

                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="<?php echo base_url('assets/uploads/gallery/'.$p->photo); ?>" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="<?php echo base_url('assets/uploads/gallery/'.$p->photo); ?>" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                        </div>
                        <!-- Image 2 -->

                     <?php } //endforeach ?>
                        
                  </div>
                  <!-- /lightbox-->
               </div>
               <!-- /col-md-12-->
            </div>
            <!-- /row -->

         </div>

      <?php } else { ?>

         <h3 class="text-danger text-center">No gallery photo to show.</h3>

      <?php } //endif ?>

      
      <?php echo pagination_links($links, 'pagination'); ?>
                  

   </div>
   <!-- /container -->
</section>
<!-- /Section ends -->

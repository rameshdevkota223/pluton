 <!-- Start home section -->
 <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
            
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                   <!-- Start first slide -->
                        <?php  
                             $home_posttype_obj = new WP_Query(array('post_type'=>'homepost','posts_per_page'=>3));
                             if ($home_posttype_obj->have_posts()):
                                while($home_posttype_obj->have_posts()):
                                $home_posttype_obj->the_post();
                                ?>
                              <div class="da-slide">
                        <h2 class="fittext2"><?php the_title();?></h2>
                        <h4><?php the_field('home_subtitle');?></h4>
                        <p><?php the_content();?></p>
                        
                        <button id="showBtn" type="button"  data-backdrop="false" class="btn btn-primary" data-toggle="modal" data-target="#<?php the_ID(); ?>">
                        <a href="#" class="da-link button">Read more</a>
                        </button>
                        <div class="da-img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>"  width="320">
                        </div>
                         </div>
 
                      <?php 
                                endwhile;
                                  wp_reset_postdata();
                                  endif;
                        ?>
                      
                        <?php  
                          $home_posttype_obj = new WP_Query(array('post_type'=>'homepost','posts_per_page'=>3));
                          
                             if ($home_posttype_obj->have_posts()):
                                while($home_posttype_obj->have_posts()):
                                $home_posttype_obj->the_post(); ?>

    <div class="modal hide fade" id="<?php the_ID();?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black;"><?php the_title() ; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 style="color:black;"><?php echo get_the_content() ; ?></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php 
                                endwhile;
                                  wp_reset_postdata();
                                  endif;
                        ?>
                    
                    <!-- End first slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Button trigger modal -->

<!-- Modal -->

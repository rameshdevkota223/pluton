 <!-- Start home section -->
 <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                   <!-- Start first slide -->
                        <?php  
                             $home_posttype_obj = new WP_Query(array('post_type'=>'homepost'));
                             if ($home_posttype_obj->have_posts()):
                                while($home_posttype_obj->have_posts()):
                                $home_posttype_obj->the_post();
                                ?>
                              <div class="da-slide">
                        <h2 class="fittext2"><?php the_title();?></h2>
                        <h4><?php the_field('home_subtitle');?></h4>
                        <p><?php the_content();?></p>
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <a href="#" class="da-link button">Read more</a>
                        </button>
                        <div class="da-img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="image01" width="320">
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
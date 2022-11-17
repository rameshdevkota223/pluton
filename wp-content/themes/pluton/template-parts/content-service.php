<div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php the_field('service_title') ; ?></h1>
                    <!-- Section's title goes here -->
                    <p><?php the_field('service_subtitle') ; ?></p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <?php $query_custom_service_post = new WP_Query(array('post_type'=>'servicepost','posts_per_page'=>3));
                      if ($query_custom_service_post->have_posts()) :
                        while ($query_custom_service_post->have_posts()) :
                            $query_custom_service_post->the_post();?>
                          <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="<?php the_post_thumbnail_url();?>">
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                       </div>
                          
                        <?php
                       
                        endwhile;
                        wp_reset_postdata();
                      endif;
                      
                    ?>
                </div>
            </div>
        </div>

        <!-- Client section start -->

        <div id="clients">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1><?php the_field('client_title'); ?></h1>
                        <p><?php the_field('client_content'); ?></p>
                    </div>
                    <div class="row">
                        <?php  
                        $query_custom_client_post = new WP_Query(array('post_type'=>'client','posts_per_page'=>5,));
                            if ($query_custom_client_post->have_posts()) :
                            while ($query_custom_client_post->have_posts()) :
                            $query_custom_client_post->the_post(); ?>
                        <div class="span4">
                            <div class="testimonial">
                                <p><?php the_content(); ?>
                                </p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" class="centered">
                                    <strong>John Doe
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <?php
                         endwhile;
                         wp_reset_postdata();
                        endif;
                         ?>
                    </div> 
                    <p class="testimonial-text">
                    <?php the_field('client_body_content'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="section third-section">
            <div class="container centered">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Our Clients</h3>
                        </div>
                        <ul class="client-nav pull-right">
                            <li id="client-prev"></li>
                            <li id="client-next"></li>
                        </ul>
                    </div>
                    <ul class="row client-slider" id="clint-slider">
                    <?php  
                        $query_custom_ourclient_post = new WP_Query(array('post_type'=>'customer','posts_per_page'=>6,));
                            if ($query_custom_ourclient_post->have_posts()) :
                            while ($query_custom_ourclient_post->have_posts()) :
                            $query_custom_ourclient_post->the_post(); ?>

                        <li>
                            <a href="">
                                <img src="<?php echo the_post_thumbnail_url();?>">
                            </a>
                        </li>
                        <?php
                         endwhile;
                         wp_reset_postdata();
                        endif;
                         ?>

                    </ul>
                </div>
            </div>
        </div>
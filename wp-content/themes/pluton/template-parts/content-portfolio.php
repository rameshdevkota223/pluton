<!-- Portfolio section start -->
        
<div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1><?php the_field('portfolio_title') ; ?></h1>
                    <p><?php the_field('port_subtitle') ; ?></p>
                </div>
                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all">
                        <a href="#noAction">All</a>
                    </li>
                    <?php
                    $taxonomies = get_terms(array(
                  'taxonomy' => 'subject',
                 'hide_empty' => false,
                 ));
                 foreach ($taxonomies as $taxonomy) {
                  ?>
                  <li class="filter" data-filter="<?php echo $taxonomy->slug ?>">
                        <a href="#noAction"><?php echo $taxonomy->name; ?></a>
                 </li>
                  <?php
                  }
                ?>
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                       <?php 
                         $query_custom_portfolio_post = new WP_Query(array('post_type'=>'portfolio','posts_per_page'=>9,));
                         if ($query_custom_portfolio_post->have_posts()) :
                            while ($query_custom_portfolio_post->have_posts()) :
                                $query_custom_portfolio_post->the_post(); ?>

                      <div id="slidingDiv<?php echo get_the_ID();?>" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo the_post_thumbnail_url(); ?>"  />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php the_title(); ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Client</span><?php the_field('clients') ; ?></div>
                                    <div>
                                        <span>Date</span><?php the_time('F j, Y'); ; ?></div>
                                    <div>
                                        <span>Skills</span><?php the_field('skills') ; ?></div>
                                    <div>
                                        <span>Link</span><?php the_field('link') ; ?></div>
                                </div>
                                <p><?php the_content() ; ?></p>
                            </div>
                        </div>
                    </div> 
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                    
                    ?>
                    <!-- End details for portfolio project 1 -->
                        
                 
                    
                    <ul id="portfolio-grid" class="thumbnails row">
                        <?php 
                         $query_custom_portfolio_post = new WP_Query(array('post_type'=>'portfolio','posts_per_page'=>9,));
                         if ($query_custom_portfolio_post->have_posts()) :
                            while ($query_custom_portfolio_post->have_posts()) :
                                $query_custom_portfolio_post->the_post();?>
                                 <?php 
                         $termsArray = get_the_terms($post->ID, 'subject');
                         $termsSlug = $termsArray[0]->slug;?>

                        <li class="span4 mix <?php echo $termsSlug ?>">
                            <div class="thumbnail">
                                <img src="<?php echo the_post_thumbnail_url(); ?>">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo get_the_ID();?>">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3><?php the_field('thubnail_label') ; ?></h3>
                                <p><?php the_field('thumbnail_caption') ; ?></p>
                                <div class="mask"></div>
                            </div>
                        </li>
                         
                  <?php
                endwhile;?>
                </ul>
                <?php
                wp_reset_postdata();
            endif;
                ?>  
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
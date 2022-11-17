<!-- About us section start -->
<div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1><?php the_field('about_title') ; ?></h1>
                    <p><?php the_field('about_subtitle') ; ?></p>
                </div>
                <div class="row-fluid team">
                <?php 
                 $query_custom_about_post = new WP_Query(array('post_type'=>'about','posts_per_page'=>3,));
                 if ($query_custom_about_post->have_posts()) :
                 while ($query_custom_about_post->have_posts()) :
                 $query_custom_about_post->the_post(); ?>
                 <div class="span4" id="first-person">
                 <div class="thumbnail">
                 <img src="<?php  echo the_post_thumbnail_url();?>">
                 <h3>John Doe</h3>
                 <ul class="social">
                              <li>
                                  <a href="<?php echo get_theme_mod('facebook-setting') ?>"  target="_blank">
                                      <span class="icon-facebook-circled"></span>
                                   </a>
                             </li>
                             <li>
                                    <a href="<?php echo get_theme_mod('twitter-setting') ?>"  target="_blank">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod('linkin-setting') ?>"  target="_blank">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                 ?>

                </div>
                <div class="about-text centered">
                <?php 
                 $query_custom_about_post = new WP_Query(array('post_type'=>'centertext','posts_per_page'=>1,));
                 if ($query_custom_about_post->have_posts()) :
                 while ($query_custom_about_post->have_posts()) :
                 $query_custom_about_post->the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                   
                    <p><?php the_content(); ?></p>
                <?php endwhile;
                wp_reset_postdata();
                      endif;
                       ?>
                </div>
                <h3>Skills</h3>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="skills">
                        <?php 
                  $query_custom_skill_post = new WP_Query(array('post_type'=>'skill','posts_per_page'=>7,));
                  if ($query_custom_skill_post->have_posts()) :
                  while ($query_custom_skill_post->have_posts()) :
                  $query_custom_skill_post->the_post(); ?>
                            <li>
                                <span class="bar" data-width="<?php echo get_post_meta($post->ID, "card_icon_name", true); ?>"></span>
                                <h3> <?php the_title(); ?></h3>
                            </li>
                            <?php 
                           endwhile; 
                            wp_reset_postdata( );  
                       endif;
                            
                            ?>
                        </ul>
                    </div>
                    <div class="span6">
                        <div class="highlighted-box center">
                            <?php 
                            $query_custom_hire_post = new WP_Query(array('post_type'=>'hire','posts_per_page'=>5,));
                            if ($query_custom_hire_post->have_posts()) :
                            while ($query_custom_hire_post->have_posts()) :
                            $query_custom_hire_post->the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <button class="button button-sp">Join Us</button>
                            <?php
                             endwhile; 
                              wp_reset_postdata( );
                            endif;
                                 
                            
                            ; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text"><?php the_field('about_content') ; ?></p>
                <a href="#" class="button">Purshase now</a>
            </div>
        </div>
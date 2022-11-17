 
 <!-- Price section start -->
 <div id="price" class="section secondary-section">
     <div class="container">
         <div class="title">
             <h1><?php the_field('price_title') ; ?></h1>
             
             <p><?php the_field('price_subtitle') ; ?></p>
         </div>
         <div class="price-table row-fluid">
            <?php $query_custom_price_post = new WP_Query(array('post_type'=>'price','posts_per_page'=>'6'));
               if ($query_custom_price_post->have_posts()) :
                 while ($query_custom_price_post->have_posts()) :
                  $query_custom_price_post->the_post();?>
                    <div class="span4 price-column">
                        <h3><?php the_title() ; ?></h3>
                        <ul class="list">
                            <li class="price"><?php  the_field('price_doller') ; ?></li>
                            <li><strong><?php  the_field('price_setup') ; ?></strong> SetUp</li>
                            <li><strong><?php the_field('support') ; ?></strong> Support</li>
                            <li><strong><?php the_field('storage') ; ?></strong> File Stroage</li>
                        </ul>
                        <a href="#" class="button button-ps">BUY</a>
                    </div>
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                    ?>
         </div>
     
         <div class="centered">
             <p class="price-text"><?php the_field('price_footer') ; ?></p>
             <a href="#contact" class="button">Contact Us</a>
         </div>
     </div>
 </div>
            </div>
 <!-- Price section end -->


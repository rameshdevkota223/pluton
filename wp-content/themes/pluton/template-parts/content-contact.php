 <!-- Contact section start -->
 <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1><?php the_field('contact_title') ; ?></h1>
                        <p><p><?php the_field('contact_content') ; ?></p></p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Loading map...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Say Hello</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Well done!</strong>Your message has been sent.</div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <?php echo do_shortcode( '[contact-form-7 id="165" title="Contact form 1"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p><?php the_field('footer_location') ; ?></p>
                        <p class="info-mail"><?php  the_field('footer_email') ; ?></p>
                        <p><?php  the_field('phon_number_first') ; ?></p>
                        <p><?php  the_field('phon_number_second') ; ?></p>
                        <div class="title">
                            <h3><?php  the_field('social') ; ?></h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="<?php  the_field('facebook') ; ?>" target="_blank">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  the_field('twitter') ; ?>" target="_blank">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  the_field('linkin') ; ?>" target="_blank">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  the_field('pinterest') ; ?>" target="_blank">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  the_field('dribble') ; ?>" target="_blank">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  the_field('gplus') ; ?>" target="_blank">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
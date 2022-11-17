<!DOCTYPE html>
<html <?php language_attributes();?>>
    
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pluton Theme by BraphBerry.com</title>
		<?php wp_head(); ?>
    </head>
    
    <body <?php body_class();?>>
	<?php wp_body_open();?>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
						<?php 
                      $logo_image_link = get_header_image();
                    
					      ?>

                        <img src="<?php echo $logo_image_link;?>" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                        <div class="nav-collapse collapse pull-right">
                       
                       <?php 
                       wp_nav_menu( array(
                        'menu'=> 'nav-menu',
                        'menu_class' =>'nav',
                        'menu_id'=>'topnavigation',
                        'container' => false,
                     
                      
                    ) );
                       
                       ?>
                        
                        </div>
                </div>
            </div>
        </div>
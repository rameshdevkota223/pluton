<?php
/*
Header
*/
get_header();


/*
Slider start
*/
get_template_part('template-parts/content','home');

/*
Slider End
*/

/*
Service part start
*/
get_template_part('template-parts/content','service');

/*
Service part End
*/

/* portfolio start */  
get_template_part('template-parts/content','portfolio');

/* portfolio End*/  

/* about start */ 
get_template_part('template-parts/content','about');
/* about End */  

       
/* Client section Start */  
get_template_part('template-parts/content','client');

/*Client section End */  

 /* price section start*/  
 get_template_part('template-parts/content','price');

/* price section End */  
        
/* Newspaper section start */  
get_template_part('template-parts/content','newspaper');
/* Newspaper section end */ 


/* contact section start */  
get_template_part('template-parts/content','contact');

/* contact section End */  

/* footer part start */
get_footer(); 

/* footer part end */?>
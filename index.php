<?php
/**
 * 
 */
get_search_form();
get_header();
    if ( have_posts() ) : 
        while (have_posts() ) :
            the_post();
            get_template_part('template-parts/post/content');
            // do our stuff
        endwhile;
    endif;
get_footer();
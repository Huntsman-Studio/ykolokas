<?php
/**
 * Single page template.
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="sit-main">
        <?php
        while ( have_posts() ) : 
            the_post();
            // the_contenet();
            get_template_part('template-parts/post/content');
        endwhile;

        // if comments are enabled then we can show the commenets template.
        if ( comments_open() || get_comments_number() ) : 
            comments_template();
        endif;
        ?>
    </main>
</div>

<?php
get_footer();
?>

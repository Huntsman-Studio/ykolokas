<?php
/**
 * 
 */
get_header();
?>
<div id="primary" class="content-arrea">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) : 
            while (have_posts() ) :
                the_post();
                get_template_part('template-parts/post/content');
                // do our stuff
            endwhile;

            // pagination
            echo paginate_links( [
                'prev_text' => esc_html__('Prev', 'ykolokas'),
                'next_text' => esc_html__('Next', 'ykolokas'),
            ] );
        else :
            get_template_part('template-parts/page/content', 'none');
        endif;
        ?>
    </main>
</div>
<?php
get_footer();
<?php
/**
 * The template for dispalying archive pages.
 */
get_header();
?>

<div id="primary" class="content-arrea">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>
            <header class="archive-page-header w-100">
                <?php
                    // the_archive_title( '<h1 class="archive-title">', '</h1>' );
                    // the_archive_description( '<div class="archive-description">', '</div>' );
                    get_template_part( 'template-parts/header/content' );
                ?>
            </header>
            
            <?php
                // Start the loop
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/post/content' );
                endwhile;
                ?> <?php
                // pagination
                // echo paginate_links( [
                //     'prev_text' => esc_html__('Prev', 'ykolokas'),
                //     'next_text' => esc_html__('Next', 'ykolokas'),
                // ] );

            else :
            get_template_part('template-parts/page/content', 'none');
            ?>
        <?php endif; ?>
    </main>
</div>

<?php
get_footer();
?>
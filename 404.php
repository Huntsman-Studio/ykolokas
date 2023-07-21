<?php
/**
 * The part for displaying 404
 * @package Ykolokas
 */

get_header();
?>

<div id="primary" class="content-arrea">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Ooops! That page can&rsquo;t be found.', 'ykolokas' ) ?></h1>
            </header> <!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one by searching something', 'ykolokas' ) ?></p>
                
                <?php get_search_form(); ?>
            </div> <!-- .page-content -->
        </section> <!-- .error-404 -->
    </main> <!-- #main -->
</div> <!-- #primary -->

<?php
get_footer();
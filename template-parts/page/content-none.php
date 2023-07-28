<?php
/**
 * Template part for displaying a message that posts cannot be found
 */

?>
<section class="no-results not-found">
    <header class="page-header w-100">
        <!-- <h1 class="page-title"><?php // esc_html_e( 'Nothing Found', 'ykolokas' ) ?></h1> -->
        <?php get_template_part( 'template-parts/header/content' );  ?>
    </header>

    <div class="page-content">
        <?php
        if ( is_home() && current_user_can( 'publish_posts') ) :

            printf(
                '<p>'.wp_kses(
                    /* translators: 1: Link to WP admin new post page. */
                    __( 'Redy to publish your first post? <a href="%1$s">Get started here</a>.', 'ykolokas' ),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )

                ). '</p>',
                esc_url( admin_url( 'post-new.php' ) )
            );
        elseif ( is_search() ) : 
            ?>
            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords', 'ykolokas') ?></p>
            <?php
            get_search_form();
        
        else : 
            ?>
            <p><?php esc_html_e( 'It seems we can;t find what you\'re looking for. Perhaps searching can help', 'ykolokas' ) ?></p>
            <?php
            get_Search_form();
        endif;
        ?>
    </div>
</section>
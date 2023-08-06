<?php
/**
 * 
 */
get_header();
?>
<div id="primary" class="content-arrea">
    <main id="main" class="site-main grid justify-items-center w-full">
        <?php
        if ( have_posts() ) : 
            ?>
            <header class="archive-page-header w-full max-w-[1280px]">
                <?php
                    get_template_part( 'template-parts/header/content' );
                ?>
            </header>
            <div class="grid md:grid-cols-2 md:gap-8 px-4 pt-8 md:px-[72px] pb-20 w-full max-w-[1280px]">
            <?php
            while (have_posts() ) :
                the_post();
                get_template_part('template-parts/post/content');
                // do our stuff
            endwhile;
            ?>
            </div>
            <?php
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
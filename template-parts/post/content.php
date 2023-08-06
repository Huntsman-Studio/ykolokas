<?php
/**
 * Template part for displaying posts.
 */
?>

<article id="pst-<?php the_ID() ?>">
    <header class="entry-header">
        <?php 
        // if ( is_singular() ) :
        //     the_title('<h1 class="entry-title">', '</h1>');
        // else:
        //     the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">','</a></h2>' );
        // endif;
        // get_template_part( 'template-parts/header/content' );
        ?>
    </header>
    
    <div class="grid">
        <!-- Post thumbnail -->
        <div class="relative rounded-[20px] w-full h-[531px] hover:cursor-pointer hover:outline hover:outline-offset-8 outline-white">
            <?php
            if ( has_post_thumbnail() ) :
            ?> 
            <img class="w-full h-[531px] rounded-[20px]" src="<?php the_post_thumbnail_url() ?>" alt="" lazyload />
            <?php
                // Post content
                if ( is_home() || is_archive() ) :
                ?>
                    <div class="entry-content absolute top-6 left-4">
                        <a class="text-white text-[32px]" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        <p class="text-white"><?php echo get_the_excerpt(); ?></p>
                    </div>
                <?php
                // is_single()
                elseif ( is_single() ) : ?>
                <div class="entry-contet">
                    <?php the_excerpt(); ?>
                </div>
                <?php
                endif;
            ?>
            <?php
            endif;
            ?>
        </div>
    </div>

    <!-- Post content -->
    <?php //if ( is_home()  || is_archive()) : ?>
    <!-- <div class="entry-contet"> -->
        <?php //the_excerpt(); ?>
    <!-- </div> -->
    <?php //elseif ( is_single() ) : ?>
    <!-- <div class="entry-contet"> -->
        <?php 
            // the_content(); 

            // wp_link_pages( array(
            //     'before' => '<div class="page-links">'. esc_html__('Pages:', 'ninestarts'),
            //     'after' => '</div>'
            // ));
        ?>
    <!-- </div> -->
    <?php //endif; ?>

</article>
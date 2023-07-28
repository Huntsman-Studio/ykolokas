<?php
/**
 * Containf the header.
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
        <meta chraset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device, initial-scale=1">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> class="flex justify-center w-full">
        

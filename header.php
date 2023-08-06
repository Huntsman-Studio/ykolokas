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
        <link rel="stylesheet" href="https://unpkg.com/open-sans-all/css/open-sans.min.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> class="flex justify-center w-full">
        

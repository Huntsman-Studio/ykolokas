<?php
/**
 * Tempalte for home page
 */
?>
<section class="w-full flex justify-center">
    <div class="w-full max-w-[1280px] pt-[51px] lg:pt-[70px] px-6 md:px-[151px]">
        <div class="w-full text-center">
            <h1 class="text-[#8A0331] text-[90px] z-10">Hey!</h1>
            <h6 class="text-white text-2xl -mt-10 lg:-mt-12 font-normal z-0">I’m Yorgos Kolokas, a visual designer based in Thessaloniki</h6>
        </div>
        <div class="grid mt-[64px] lg:mt-[110px] gap-8 w-full">
            <div class="grid lg:flex gap-8 w-full">
                <div class="grid gap-6 w-full">
                    <!-- work -->
                    <div>
                        <?php get_template_part( 'template-parts/page/home/work' ); ?>
                    </div>
                    <div class="hidden lg:block">
                        <?php get_template_part( 'template-parts/page/home/contact' ); ?>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-3 w-full">
                    <!-- about -->
                    <div class="md:order-2 md:col-span-2">
                        <?php get_template_part( 'template-parts/page/home/about' ); ?>
                    </div>
                    <!-- social / contact -->
                    <div class="order-1 md:w-max lg:hidden">
                        <?php get_template_part( 'template-parts/page/home/contact' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
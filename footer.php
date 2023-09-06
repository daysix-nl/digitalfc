<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer>
    <section class="custom-block py-3 bg-blackBackground flex">
        <button class="button-contact-overlay mx-auto bg-roze h-[50px] px-2 text-16 leading-50 font-poppins font-medium text-white flex items-center clip-path-button">Start de wedstrijdbespreking</button>
    </section>
    <section class="custom-block bg-black">
        <div class="container grid grid-cols-4 py-6 md:w-[90%] gap-4 md:gap-0">
            <?php if( have_rows('footer_block' , 'option') ): ?>
                <?php while( have_rows('footer_block' , 'option') ): the_row(); ?>
                <div class="col-span-2 md:col-span-1 flex md:items-center flex-col">
                    <div class="w-full">
                    <h3 class="text-roze text-22 leading-32 mb-1 font-roboto font-medium"><?php the_sub_field('title' , 'option'); ?></h3>
                    <!-- Start-->
                    <?php if( have_rows('inner_block_footer' , 'option') ): ?>
                        <?php while( have_rows('inner_block_footer' , 'option') ): the_row(); ?>
                        <?php if(get_sub_field('url' , 'option')): ?> <a href="<?php the_sub_field('url'); ?>">  <?php endif; ?>
                           <p class="text-white text-16 leading-26 font-roboto font-normal hoverlink"><?php the_sub_field('name' , 'option'); ?></p>
                           <?php if(get_sub_field('url' , 'option')): ?>  </a> <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
                    <!-- end -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="custom-block bg-blackBackground">
        <div class="container grid md:grid-cols-2 pt-3 pb-2 gap-3 ">
            <div class="col-span-1 flex items-center justify-center md:justify-start">
                <p class="text-white text-14 font-roboto font-normal"><?php echo date("Y"); ?> © Digital FC. - All rights reserved.</p>
            </div>
            <div class="col-span-1 flex items-center justify-center md:justify-end gap-3">
                <a href="https://www.google.com/partners/agency?id=1649764326">
                <img src="/wp-content/themes/digitalfc/img/icons/google.svg" alt="Google Partner" class="h-7">
                </a>
                <a href="https://www.sortlist.com/nl/agency/digital-fc">
                <img src="/wp-content/themes/digitalfc/img/icons/sortlist.svg" alt="Best beoordeeld bureau Sortlist" class="h-4">
                </a>
                <a href="https://www.activecampaign.com/?_r=54YZUBN5">
                <img src="/wp-content/themes/digitalfc/img/icons/activecampaign.png" alt="Active Campaign Partner" class="h-6">
                </a>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>
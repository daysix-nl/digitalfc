<section class=" custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="col-span-1 pr-10">
            <h3 class="text-30 leading-30 md:text-45 md:leading-45 font-poppins font-bold text-black mb-1"><?php the_field('titel');?></h3>
            <p class="text-18 leading-28 font-roboto font-medium text-roze uppercase mb-3"><?php the_field('tekst');?></p>
            <div class="flex flex-col">
                <p class="text-25 leading-35 font-poppins font-bold text-black mb-1">DIGITAL FC.</p>
                <a href="tel:<?php the_field('telefoonnummer') ?>"><p class="text-16 leading-26 font-roboto font-normal text-black"><?php the_field('telefoonnummer') ?></p></a>
                <a href="mailto:<?php the_field('email') ?>"><p class="text-16 leading-26 font-roboto font-normal text-black"><?php the_field('email') ?></p></a>
                <p class="text-16 leading-26 font-roboto font-normal text-black"><?php the_field('kvk');?></p>
            </div>
            <div class="flex flex-row mt-4 contact">
                <?php if (get_field('facebook')): ?>
                    <a target="_blank" class="mr-[15px] footer-icons" href="<?php the_field('facebook') ?>">
                        <?php include get_template_directory() . '/img/icons/facebook.php'; ?>
                    </a>
                <?php endif; ?>
                <?php if (get_field('instagram')): ?>
                    <a target="_blank" class="mr-[15px] footer-icons" href="<?php the_field('instagram') ?>">
                        <?php include get_template_directory() . '/img/icons/instagram.php'; ?>
                    </a>
                <?php endif; ?>
                <?php if (get_field('linkedin')): ?>
                    <a target="_blank" class="footer-icons" href="<?php get_field('linkedin') ?>">
                        <?php include get_template_directory() . '/img/icons/linkedin.php'; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-span-1">
            <div class="">
                <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
            </div>
        </div>
    </div>
</section>
<menu class="button-hamburger-menu flex lg:hidden" id="button-hamburger-menu">
    <button class="button-hamburger h-[86px]">
        <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 include('wp-content/themes/digitalfc/img/icons/hamburger-close.php'); ?>
    </button>
</menu>

<div class="mobile-overlay bg-donkergrijs">
    <div class="mobile-overlay__main bg-donkergrijs pt-12 p-4 safari-padding-bottom flex flex-col justify-between overflow-scroll h-[100vh]">
        <nav class="flex justify-start gap-3 flex-col">
            <button 
                class="text-white text-30 leading-35 font-poppins font-bold flex button-diensten">
                <?php the_field('name_diensten', 'option'); ?>
            </button>
            <?php if(get_field('name_over_ons', 'option')): ?>
                <a href="<?php the_field('url_over_ons', 'option'); ?>"
                    class="text-white text-30 leading-35 font-poppins font-bold">
                    <?php the_field('name_over_ons', 'option'); ?>
                </a>
            <?php endif; ?>
            <?php if(get_field('name_werkwijze', 'option')): ?>
                <a href="<?php the_field('url_werkwijze', 'option'); ?>"
                    class="text-white text-30 leading-35 font-poppins font-bold">
                    <?php the_field('name_werkwijze', 'option'); ?>
                </a>
            <?php endif; ?>
            <?php if(get_field('name_cases', 'option')): ?>
                <a href="<?php the_field('url_cases', 'option'); ?>"
                    class="text-white text-30 leading-35 font-poppins font-bold">
                    <?php the_field('name_cases', 'option'); ?>
                </a>
            <?php endif; ?>
            <?php if(get_field('name_contact', 'option')): ?>
                <a href="<?php the_field('url_contact', 'option'); ?>" class="text-white text-30 flex leading-35 font-poppins font-bold"><?php the_field('name_contact', 'option'); ?></a>
            <?php endif; ?>
        </nav>
    </div>
</div>

<div class="mobile-overlay__second bg-donkergrijs p-4 pt-12 relative flex flex-col">
    <button class="button-diensten-close mb-2 absolute top-3 right-3 text-white text-18 leading-26">
            Stap terug
    </button>
    <p class="text-white text-30 leading-35 font-poppins font-bold flex mb-3">Diensten</p>
    <?php if( have_rows('diensten_repeater', 'option') ): ?>
        <?php $count = 0; while( have_rows('diensten_repeater', 'option') ): the_row(); ?>
            <button class="text-white text-16 leading-26 font-roboto font-normal button-advertentie mb-1 mr-auto button-advertentie-count-<?php echo $count ?>"><?php the_sub_field('title', 'option'); ?></button>
        <?php $count++; endwhile; ?>  
    <?php  endif; ?>

    </div>

    </div>

    <div class="overlay-advertenties-mobile bg-donkergrijs p-4 pt-12 relative">
        <button class="button-advertenties-close mb-2 absolute top-3 right-3 text-white text-18 leading-26">
                Stap terug
        </button>

        <?php $countInner = 0; if( have_rows('diensten_repeater', 'option') ): ?>
            <?php while( have_rows('diensten_repeater', 'option') ): the_row(); ?>

                <?php if( have_rows('diensten_repeater_repeater', 'option') ):  ?>
                <div class="inner-hamburger inner-hamburger-count-<?php echo $countInner ?> hidden">
                    <?php  while( have_rows('diensten_repeater_repeater', 'option') ): the_row(); ?>
                        <a href="<?php the_sub_field('url', 'option'); ?>">
                            <p class="text-16 leading-32 text-wit font-normal text-white"><?php the_sub_field('name', 'option'); ?></p>
                        </a>
                    <?php  endwhile; ?>
                </div>
                <?php $countInner++; endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>


    </div>
</div>

<div class="overlay-mobile-close hidden"></div>


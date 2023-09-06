<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container flex flex-col md:flex-row md:gap-3">
        <div class="hidden md:block w-full md:w-[40%] lg:w-[30%] relative-float">
            <div class="hidden float-block md:flex flex-col gap-2 pr-3">
                <p class="text-25 leading-35 text-roze font-poppins font-bold">Snel naar</p>
                <?php
                    // Check rows existexists.
                    if( have_rows('navigatie_repeater') ):
                        // Loop through rows.
                        while( have_rows('navigatie_repeater') ) : the_row(); ?>
                     <div>   <a class="float-block-inner" href="#<?php the_sub_field('anker');?>"><button class="w-full text-left text-roze bg-white hover:bg-roze hover:text-white duration-300 px-3 py-[17px] text-16 leading-16 font-roboto font-medium clip-path-button"><?php the_sub_field('titel');?></button></a></div>
                        <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                ?>
            </div>
        </div>
        <div class="w-full md:w-[60%] lg:w-[70%]">
            <div class="lg:pr-[25%]">
            <?php include get_template_directory() . '/componenten/innerblocks.php'; ?>
            </div>
        </div>
    </div>
</section>
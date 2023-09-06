<section id="<?php the_field('anchor_link'); ?>" class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-8">
            <?php
                // Check value exists.
                if( have_rows('stappen_repeater') ):
                    // Loop through rows.
                    while ( have_rows('stappen_repeater') ) : the_row();
                        // Case: Stappen.
                        if( get_row_layout() == 'stappen' ): ?>

                        <div class="col-span-1">
                            <div class="w-5 h-5">
                                <div class="bg-roze text-white text-25 leading-50 font-poppins font-extrabold clip-path-button text-center"><?php the_sub_field('nummer');?></div>
                            </div>
                            <h3 class="text-25 leading-25 font-poppins font-bold text-white py-3"><?php the_sub_field('titel');?></h3>
                            <p class="text-16 leading-26 font-roboto font-normal text-white pr-3"><?php the_sub_field('tekst');?></p>
                        </div>                       
                        <?php
                        endif;
                    // End loop.
                    endwhile;
                // No value.
                else :
                    // Do something...
                endif;
            ?>
    </div>
</section>
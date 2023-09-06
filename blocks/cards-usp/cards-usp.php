<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
            <ul class="grid grid-cols-3 gap-3">
            <?php
                // Check value exists.
                if( have_rows('usp_repeater') ):
                    // Loop through rows.
                    while ( have_rows('usp_repeater') ) : the_row();
                        // Case: USP.
                        if( get_row_layout() == 'usp' ): ?>
                        <li class="col-span-3 lg:col-span-1 clip-path flex flex-col hover:scale-105 duration-300 h-auto">
                            <div class="grid gap-3 px-4 pt-4 pb-6  bg-black duration-300 h-full">
                                <img src="/wp-content/themes/digitalfc/img/icons-acf/<?php the_sub_field('icoon');?>.svg"  />
                                <h3 class="text-white text-30 leading-35 font-poppins font-bold"><?php the_sub_field('titel');?></h3>
                                <p class="text-white text-16 leading-26 font-roboto font-medium"><?php the_sub_field('tekst');?></p>
                            </div>
                        </li>
                        <?php
                        endif;
                    // End loop.
                    endwhile;
                // No value.
                else :
                    // Do something...
                endif;
            ?>
            </ul>
    </div>
</section>
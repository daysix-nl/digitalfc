<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
            <ul class="grid grid-cols-3 gap-3">
            <?php
                // Check value exists.
                if( have_rows('werkwijze_repeater') ):
                    // Loop through rows.
                    while ( have_rows('werkwijze_repeater') ) : the_row();
                        // Case: USP.
                        if( get_row_layout() == 'werkwijze' ): ?>
                        <a href="<?php the_sub_field('link');?>" id="<?php the_sub_field('link_id');?>" class="col-span-3 lg:col-span-1 clip-path flex flex-col">
                            <div class="grid gap-3 px-4 pt-4 pb-6  bg-black h-full">
                                <img src="/wp-content/themes/digitalfc/img/icons-acf/<?php the_sub_field('icoon');?>.svg"  />
                                <h3 class="text-white text-25 leading-25 font-poppins font-bold"><?php the_sub_field('titel');?></h3>
                                <p class="text-white text-16 leading-26 font-roboto font-medium"><?php the_sub_field('tekst');?></p>
                            </div>
                            <div class="bg-roze text-white px-4 text-16 leading-26 font-roboto font-medium h-[50px] flex items-center mt-auto button-arrow">Lees meer</div>
                        </a>
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
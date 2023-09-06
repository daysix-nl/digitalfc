<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
            <h3 class="test-20 leading-30 font-roboto font-medium text-roze uppercase pb-2"><?php the_field('titel');?></h3>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            <?php
                // Check value exists.
                if( have_rows('tactieken_repeater') ):
                    // Loop through rows.
                    while ( have_rows('tactieken_repeater') ) : the_row(); 
                        // Case: Tactiek met link.
                        if( get_row_layout() == 'tactiek_met_link' ): ?>
                            <li class="col-span-1 clip-path-button flex flex-col h-auto tactiek">
                                <a href="<?php the_sub_field('link');?>" id="<?php the_sub_field('link_id');?>">
                                    <div class="grid gap-3 px-4 py-3  bg-lichtgrijs hover:bg-roze duration-300 h-full text-black hover:text-white relative">
                                        <p class="text-16 leading-16 font-poppins font-bold button-arrow"><?php the_sub_field('titel');?></p>
                                    </div>
                                </a>
                            </li>

                        <?php
                        // Case: Tactiek zonder link.
                        elseif( get_row_layout() == 'tactiek_zonder_link' ): ?>
                            <li class="col-span-1 clip-path-button flex flex-col h-auto tactiek">
                                <div class="grid gap-3 px-4 py-3  bg-lichtgrijs duration-300 h-full text-black relative">
                                    <p class="text-16 leading-16 font-poppins font-bold"><?php the_sub_field('titel');?></p>
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
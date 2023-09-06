<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="swiper-overflow-container">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                        // Check value exists.
                        if( have_rows('team_repeater') ):
                            // Loop through rows.
                            while ( have_rows('team_repeater') ) : the_row();
                                // Case: Team Member.
                                if( get_row_layout() == 'teamlid' ): ?>
                                    <div class="swiper-slide">
                                        <div class="clip-path flex flex-col h-full w-full case-item relative">
                                            <img src="<?php the_sub_field('pasfoto');?>" alt="<?php the_sub_field('pasfto_alt');?>">
                                            <div class="case-item-overlay bg-black absolute left-0 top-0 bottom-0 right-0 duration-500"></div>
                                            <div class="absolute px-4 pt-3 left-0 top-0">
                                                <p class="text-roze text-70 leading-70 font-poppins font-extrabold"><?php the_sub_field('rugnummer');?></p>
                                            </div>
                                            <div class="case-item-content grid gap-1 px-4 pt-4 pb-4 absolute left-0 bottom-0 right-0 duration-300">
                                                <p class="text-white text-14 leading-20 font-roboto font-normal case-item-content-second duration-300 pb-2"><?php the_sub_field('tekst');?></p>
                                                <h3 class="text-white text-22 leading-27 font-poppins font-bold "><?php the_sub_field('naam');?></h3>
                                                <p class="text-16 leading-26 text-white"><?php the_sub_field('functie');?></p>              
                                            </div>
                                        </div>
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
            </div>
        </div>
    </div>
</section>
<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper md:h-[350px]">
                <?php
                    // Check value exists.
                    if( have_rows('reviews_repeater') ):
                        // Loop through rows.
                        while ( have_rows('reviews_repeater') ) : the_row();
                            // Case: Review.
                            if( get_row_layout() == 'review' ): ?>
                                <div class="swiper-slide px-4 py-6 bg-black md:h-[350px]">
                                    <div class="flex flex-col md:flex-row gap-3">
                                        <div class="w-full md:w-[40%]">
                                            <h3 class="text-25 leading-35 font-poppins font-bold text-white"><?php the_sub_field('naam');?></h3>
                                            <h4 class="text-18 leading-28 font-roboto font-medium text-roze uppercase pt-1"><?php the_sub_field('bedrijf');?></h4>
                                        </div>
                                        <div class="w-full md:w-[60%]">
                                            <p class="text-16 leading-26 font-roboto font-normal text-white md:pr-8"><?php the_sub_field('tekst');?></p>
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
        <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper  clip-path-slider md:h-[50px] flex flex-col md:flex-row w-full">
                <?php
                    // Check value exists.
                    if( have_rows('reviews_repeater') ):
                        // Loop through rows.
                        while ( have_rows('reviews_repeater') ) : the_row();
                            // Case: Review.
                            if( get_row_layout() == 'review' ): ?>
                                <div class="relative swiper-slide w-full h-full clip-path-tabs-relative md:w-[33.33%]">
                                    <button class="text-16 leading-28 font-roboto font-normal px-4 h-5 absolute top-0 left-1 z-10 text-[#999999]"><?php the_sub_field('bedrijf');?></button>
                                    <div class="clip-path-tabs h-[50px]"></div>
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
</section>
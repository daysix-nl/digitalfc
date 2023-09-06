<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
            <ul class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-3">


                <?php

                // Check value exists.
                if( have_rows('repeater_cards_klanten') ):

                    // Loop through rows.
                    while ( have_rows('repeater_cards_klanten') ) : the_row();

                        // Case: Paragraph layout.
                        if( get_row_layout() == 'repeater_cards_klanten_klant' ):
                        $featured_posts = get_sub_field('repeater_cards_klanten_klant_post');
                         ?>
                   
                           <a class="ml-auto mt-auto button-klanten w-full" href="<?php print_r(get_field('url', $featured_posts))?>" id="#" target="_blank">
                                <div class="border clip-path-button relative">
                                    <span class="text-black px-2 md:px-4 text-16 leading-24 font-poppins font-medium flex justify-center items-center py-3">
                                        <img src="<?php print_r(get_field('logo_zwart', $featured_posts))?>" alt="Logo" >
                                    </span>
                                    <span class="bg-[#a8a8a8] clip-hoek"></span>
                                </div>
                            </a>
                      <?php

                        endif;

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif; ?>





            </ul>
    </div>
</section>
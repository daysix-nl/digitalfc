<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
            <h2 class="text-45 leading-45 font-poppins font-bold text-roze pb-3"><?php the_field('titel');?></h2>
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
                   

                            <a class="text-black px-2 md:px-4 text-16 leading-24 font-poppins font-medium flex justify-center items-center py-3" href="<?php print_r(get_field('url', $featured_posts))?>" id="" target="_blank">
                                <img src="<?php print_r(get_field('logo_wit', $featured_posts))?>" class="h-full" alt="Logo" >
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
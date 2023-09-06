<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container"> 
        <div class="grid grid-cols-1  md:grid-cols-3 gap-3">
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DECS',
                    'offset' => 0,
                )
                );
            ?>
         
            <?php while  ( $loop->have_posts()  ) : $loop->the_post(); $post_id = get_the_ID();  ?>

                <div class="h-full col-span-1 nieuws-item bg-lichtgrijs clip-path">
                    <a class="grid grid-cols-10 h-[225px] md:h-full  " href="<?php the_permalink() ?>">
                        <div class="col-span-4 md:col-span-10 overflow-hidden md:h-[250px]">
                            <img class="h-full w-full object-cover nieuws-item-bg duration-300" src="<?php the_post_thumbnail_url()?>" alt="">
                        </div>
                        <div class=" col-span-6 md:col-span-10 flex-col p-4 flex justify-between h-full">
                            <div class="">
                                 <h3 class="text-18 leading-28 font-roboto font-medium text-black"><?php the_title();?></h3>
                                <p class="text-black text-16 leading-26 font-roboto font-normal pt-1 md:pt-2 hidden md:block"><?php the_field('preview_text', $post_id);?></p>
                            </div>
                            <p class="text-roze text-16 leading-26 font-roboto font-medium button-arrow pt-1 md:pt-2 mt-auto">Lees meer</p>
                        </div>
                        
                    </a>
                </div>
            <?php  endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
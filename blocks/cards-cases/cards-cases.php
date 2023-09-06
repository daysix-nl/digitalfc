<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <?php
                        $aantal = get_field('aantal');
                        $loop = new WP_Query( array(
                            'post_type' => 'ptcases',
                            'posts_per_page' => $aantal,
                            'orderby' => 'date',
                            'order' => 'DECS'
                        )
                        );
                        ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                    <a href="<?php the_permalink() ?>">
                        <li class="col-span-1 lg:col-span-1 clip-path flex flex-col h-auto case-item aspect-square relative">
                            <div class="case-item-bg duration-300 h-full w-full bg-cover bg-no-repeat" style="background-image: url('<?php the_post_thumbnail_url()?>')"></div>
                            <div class="case-item-overlay bg-black absolute left-0 top-0 bottom-0 right-0 duration-500"></div>
                            <div class="case-item-content grid gap-1 px-4 pt-4 pb-4 absolute left-0 bottom-0 right-0 duration-300">
                                <h3 class="text-white text-22 leading-27 font-poppins font-bold case-item-content-first duration-300"><?php the_title();?></h3>
                                <p class="text-white text-16 leading-26 font-roboto font-medium case-item-content-second duration-300"><?php the_field('preview_tekst', $post_id );?></p>
                                <div class="pt-1 case-item-content-second duration-300">
                                    <?php include get_template_directory() . '/img/icons/arrow-right.svg'; ?>
                                </div>
                            </div>
                        </li>
                    </a>
                <?php endwhile; wp_reset_query(); ?>
            </ul>
    </div>
</section>
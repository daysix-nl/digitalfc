<div class="overlay-diensten pt-8 p-4 safari-padding-bottom">
    <button class="button-all text-white text-25">All</button>
    <nav class="pt-3">
        <?php if( have_rows('diensten_repeater', 'option') ): ?>
            <div class="content col-span-1">
            <?php while( have_rows('diensten_repeater', 'option') ): the_row(); ?>
                <h3 class="text-white text-30 leading-35 font-poppins font-bold"><?php the_sub_field('name', 'option'); ?></h3>
                <?php if( have_rows('link_inner', 'option') ): ?>
                    <?php while( have_rows('link_inner', 'option') ): the_row();  ?>
                            <a id="<?php the_sub_field('id', 'option'); ?>" class="hover-link" href="<?php the_sub_field('url', 'option'); ?>">
                                <p class="text-16 leading-32 text-white font-normal"><?php the_sub_field('name', 'option'); ?></p>
                            </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </nav>
</div>
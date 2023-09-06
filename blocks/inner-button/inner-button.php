

<div class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    
            <?php if(get_field('button_link')): ?>
                <a class="<?php the_field('buttontype');?> text-white bg-roze px-4 py-[13px] text-16 leading-50 font-poppins font-medium clip-path-button" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><?php the_field('button_tekst');?></a>
            <?php else: ?>
                    <button class="<?php the_field('buttontype');?> text-white bg-roze px-2 h-[50px] text-16 leading-50 font-poppins font-medium clip-path-button" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><?php the_field('button_tekst');?></button>
            <?php endif; ?>
</div>

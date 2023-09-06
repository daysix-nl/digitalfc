<!-- Dropdown About -->
<div class="dropdown-about drophidden">
    <div class="bordermenu border-t-2 border-lichtgrijs"></div>
    <div class="container pt-4 pb-6 grid  gap-5">
   <div class="col-span-1">
            <?php if( have_rows('diensten_repeater', 'option') ): ?>
                <nav class="content grid grid-cols-4 gap-3">
                <?php while( have_rows('diensten_repeater', 'option') ): the_row(); ?>
                <div class="col-span-1">
                <p class="text-18 leading-32 text-roze font-poppins font-bold"><?php the_sub_field('title', 'option'); ?></p>
                    <?php if( have_rows('diensten_repeater_repeater', 'option') ): ?>
               
                    <?php while( have_rows('diensten_repeater_repeater', 'option') ): the_row(); ?>
                        <a href="<?php the_sub_field('url', 'option'); ?>">
                            <p class="text-16 leading-32 text-wit font-normal hoverlink"><?php the_sub_field('name', 'option'); ?></p>
                        </a>
                    <?php endwhile; ?>
             
                <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                </nav>
            <?php endif; ?>
        </div>
       
<!--         <div class="col-span-1">
            <img src="http://digital-fc.local/wp-content/uploads/2022/12/DSC01506-scaled.jpg" alt="">
        </div>  -->
    </div>
   
</div>
<!-- Overlays -->
<div class="overlay-service drophidden"></div>
<div class="overlay-about drophidden"></div>
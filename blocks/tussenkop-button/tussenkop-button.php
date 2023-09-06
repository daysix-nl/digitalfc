<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-2 gap-3">
        <div class="col-span-2 md:col-span-1">
            <h2 class="text-30 leading-30 md:text-45 md:leading-45 font-poppins font-bold text-black mb-3"><?php the_field('title');?></h2>
            <h3 class="text-18 leading-28 font-roboto font-medium text-roze uppercase"><?php the_field('subtitle');?></h3>
        </div>
        <!-- <a class="ml-auto mt-auto button-black-white" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><div class="border clip-path-button h-[50px]"><span class="outer text-black px-4 text-16 leading-24 font-poppins font-medium h-[50px] flex items-center"><?php the_field('button_tekst');?></span></div></a> -->
        <a href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>" class="md:ml-auto mt-auto clip-path-button border-2 border-black relative text-black hover:bg-black hover:text-white duration-300 px-4 h-5 py-[13px] text-16 leading-50 font-poppins font-medium flex items-center w-max md:w-unset"><?php the_field('button_tekst');?><span class="bg-black clip-hoek"></span></a>
    </div>
</section>
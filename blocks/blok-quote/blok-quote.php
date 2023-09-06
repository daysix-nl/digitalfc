<section class="custom-block bg-about-me ">
    <div class="container grid grid-cols-2 gap-3">
        <div class="col-span-1 flex-col hidden md:flex relative">
            <img class="absolute bottom-0"  src="<?php the_field('afbeelding');?>" alt="<?php the_field('afbeelding_alt');?>" />
        </div>
        <div class="col-span-2 md:col-span-1 py-4 md:py-6">
            <?php include get_template_directory() . '/img/icons/aanhalingsteken.php'; ?>
            <p class="text-16 leading-26 font-roboto font-normal text-white"><?php the_field('tekst');?></p>
            <h3 class="text-25 leading-25 font-poppins font-bold text-white pt-4 pb-2"><?php the_field('naam');?></h3>
            <h4 class="text-18 leading-28 font-roboto font-medium text-roze uppercase"><?php the_field('functie');?></h4>
        </div>
    </div>
</section>
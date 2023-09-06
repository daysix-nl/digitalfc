<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-2 gap-3">
        <div class="col-span-2 md:col-span-1">
            <h2 class="text-30 leading-30 md:text-45 md:leading-45 font-poppins font-bold text-black mb-3"><?php the_field('title');?></h2>
            <h3 class="text-18 leading-28 font-roboto font-medium text-roze uppercase"><?php the_field('subtitle');?></h3>
        </div>
        <p class="text-16 leading-26 font-roboto font-normal text-black col-span-2 md:col-span-1"><?php the_field('text');?></p>
    </div>
</section>
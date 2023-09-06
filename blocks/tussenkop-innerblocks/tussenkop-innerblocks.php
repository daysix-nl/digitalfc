<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container flex flex-col md:flex-row gap-3">
        <div class="w-full md:w-[40%] lg:w-[30%]">
            <h2 class="text-30 leading-30 md:text-45 md:leading-45 font-poppins font-bold text-black"><?php the_field('title');?></h2>
        </div>
        <div class="w-full md:w-[60%] lg:w-[70%]">
            <?php include get_template_directory() . '/componenten/innerblocks.php'; ?>
        </div>
    </div>
</section>
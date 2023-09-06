<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container flex flex-col md:flex-row gap-3 text-p">
        <div class="w-full max-w-[800px] mx-auto">
            <?php include get_template_directory() . '/componenten/innerblocks.php'; ?>
        </div>
    </div>
</section>
<div id="<?php the_field('id');?>">
<div class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <h3 class="text-30 leading-30 text-roze font-poppins font-bold "><?php the_field('titel');?></h3>
    <?php include get_template_directory() . '/componenten/innerblocks.php'; ?>
</div>
</div>
<!-- Navbar desktop -->
<div id="navbar-desktop" class="nav hidden lg:flex text-wit px-4 py-2 justify-between items-center ">
    <div class="logo z-50"><a href="/"><?php include('wp-content/themes/digitalfc/img/icons/logo.php'); ?></a>
    </div>
    <nav class="menu items-center gap-4 flex z-50">
        <button 
            class="text-16 font-medium text-white show-modal-about drophidden relative">
            <?php the_field('name_diensten', 'option'); ?>
        </button>
        <?php if(get_field('name_over_ons', 'option')): ?>
            <a href="<?php the_field('url_over_ons', 'option'); ?>"
                class="text-16 font-medium text-white nodrop-service">
                <?php the_field('name_over_ons', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_werkwijze', 'option')): ?>
            <a href="<?php the_field('url_werkwijze', 'option'); ?>"
                class="text-16 font-medium text-white nodrop-service">
                <?php the_field('name_werkwijze', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_cases', 'option')): ?>
            <a href="<?php the_field('url_cases', 'option'); ?>"
                class="text-16 font-medium text-white nodrop-service">
                <?php the_field('name_cases', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_contact', 'option')): ?>
            <a href="<?php the_field('url_contact', 'option'); ?>" class="clip-path-button border-2 border-white relative text-white hover:bg-white hover:text-black duration-300 px-4 h-5 py-[13px] text-16 leading-50 font-poppins font-medium flex items-center"><?php the_field('name_contact', 'option'); ?> <span class="bg-white clip-hoek"></span></a>
        <?php endif; ?>
        
    </nav>
</div>
<div class="border-header hidden lg:block"></div>
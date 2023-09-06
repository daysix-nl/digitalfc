<section class="custom-block  bg-hero-home-under relative">
    <div class="bg-hero-home h-[100vh]">
    <div class="container flex justify-center flex-col h-full">
        <div class="max-w-[410px] md:max-w-[570px] xl:max-w-[570px] z-[1] pt-12">
            <h1 class="text-40 leading-50 md:text-65 md:leading-75 text-white font-poppins font-bold"><?php the_title() ?></h1>
            <p class="text-18 leading-28 md:text-20 md:leading-30 text-white font-roboto pr-5 md:pr-8 font-normal my-4"><?php the_field('subtitle'); ?></p>
            <button class="button-contact-overlay clip-path-button border-2 border-white relative text-white hover:bg-white hover:text-black duration-300 px-4 h-5 py-[13px] text-16 leading-50 font-poppins font-medium flex items-center">Start de wedstrijdbespreking <span class="bg-white clip-hoek"></span>
            </button>
        </div>
    </div>
    <?php 
    $image = get_field('image'); 
    $imagemobile = get_field('image_mobile'); ?>
        <img class="absolute right-0 bottom-0 hidden xl:flex max-w-[9000px] h-[85vh] w-auto mr-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <img class="absolute right-0 bottom-0 flex xl:hidden max-w-[9000px] h-[90vh] w-auto mr-3" src="<?php echo esc_url($imagemobile['url']); ?>" alt="<?php echo esc_attr($imagemobile['alt']); ?>" />

    <div class="absolute right-0 bottom-0 triangle"></div>
    </div>
</section>
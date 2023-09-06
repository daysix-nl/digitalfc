<div class="overlay-contact relative w-[85vw] md:w-[50vw] max-w-[550px]">
    <div class="absolute top-0 left-0 right-0 bottom-[70vh] contact-overlay-content"><img class="w-full h-full object-cover" src="<?php the_field('wedstrijd_afbeelding', 'options');?>" alt="<?php the_field('wedstrijd_afbeelding_alt', 'options');?>"></div>
    <button class="button-close text-white text-40 absolute top-3 right-3">
        <?php include('wp-content/themes/digitalfc/img/icons/close_contact.svg'); ?>
    </button>
    <div class="mt-[30vh] mx-3 grid gap-3">
        <h2 class="text-white text-30 leading-35 font-poppins font-bold pt-3"><?php the_field('wedstrijd_titel', 'options');?></h2>
        <p class="text-16 leading-26 font-roboto font-normal text-white"><?php the_field('wedstrijd_tekst', 'options');?></p>    
        <div class="pb-3 form-wedstrijdbespreking">
                <?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
            </div>
    </div>
</div>

<div class="overlay-contact-background"></div>
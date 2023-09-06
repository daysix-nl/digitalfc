<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Google Tag Manager --> 
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://ss.digitalfc.nl/rppdwiwy.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-N4Z8TSF');</script> 
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'page ' ); ?>>
	<!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://ss.digitalfc.nl/ns.html?id=GTM-N4Z8TSF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
<!-- End Google Tag Manager (noscript) --> 
    <header id="header-desktop" class="custom-block">
        <?php include get_template_directory() . '/componenten/header-desktop.php'; ?>
        <?php include get_template_directory() . '/componenten/header-mobile.php'; ?>
    </header>

    <?php include get_template_directory() . '/componenten/header-desktop-dropdown.php'; ?>
    <?php include get_template_directory() . '/componenten/header-mobile-overlay.php'; ?>
    <?php include get_template_directory() . '/componenten/contact-overlay.php'; ?>

    

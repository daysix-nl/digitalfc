<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
    wp_enqueue_script( 'count', get_template_directory_uri() . '/script/counter.js', array(), 1.1, true);
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'day_six_config', 0 );




/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Categorie
|--------------------------------------------------------------------------
*/
add_filter('block_categories_all', function ($categories) {

    array_unshift($categories,           
    [
        'slug'  => 'styling',
        'title' => 'styling',
        'icon'  => null
    ],  
    [
        'slug'  => 'hero',
        'title' => 'hero',
        'icon'  => null
    ],
    [
        'slug'  => 'tussenkoppen',
        'title' => 'Tussenkoppen',
        'icon'  => null
    ],
    [
        'slug'  => 'blokken',
        'title' => 'blokken',
        'icon'  => null
    ],

    [
        'slug'  => 'cards',
        'title' => 'cards',
        'icon'  => null
    ],
    [
        'slug'  => 'navigatie',
        'title' => 'navigatie',
        'icon'  => null
    ],
    [
        'slug'  => 'innerblocks',
        'title' => 'inner blocks',
        'icon'  => null
    ],
    [
        'slug'  => 'elements',
        'title' => 'elements',
        'icon'  => null
    ],
);

return $categories;
}, 10, 1);


/*
|--------------------------------------------------------------------------
| All allowed blocks
|--------------------------------------------------------------------------
*/
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    $blocks = get_blocks();
    $acf_blocks = []; 
    foreach ($blocks as $block) { 
        $acf_blocks[] = 'acf/' . $block;
    }

    $core_blocks = [
        // 'core/paragraph',
        // 'core/heading',
    ];

    return array_merge($acf_blocks, $core_blocks);
}, 10, 2);


/*
|--------------------------------------------------------------------------
| Register blocks
|--------------------------------------------------------------------------
*/
add_action( 'init', 'register_acf_blocks', 5 );
function register_acf_blocks() {

    $blocks = get_blocks();
    foreach ($blocks as $block) {
            register_block_type( __DIR__ . '/blocks/'.$block );
    }
}

/*
|--------------------------------------------------------------------------
| Get all blocks name from the folder name
|--------------------------------------------------------------------------
*/
function get_blocks() {
	$theme   = wp_get_theme();
	$blocks  = get_option( 'cwp_blocks' );
	$version = get_option( 'cwp_blocks_version' );
	if ( empty( $blocks ) || version_compare( $theme->get( 'Version' ), $version ) || ( function_exists( 'wp_get_environment_type' ) && 'production' !== wp_get_environment_type() ) ) {
		$blocks = scandir( get_template_directory() . '/blocks/' );
		$blocks = array_values( array_diff( $blocks, array( '..', '.', '.DS_Store', '_base-block' ) ) );

		update_option( 'cwp_blocks', $blocks );
		update_option( 'cwp_blocks_version', $theme->get( 'Version' ) );
	}
	return $blocks;
}



/*
|--------------------------------------------------------------------------
| Script for one block
|--------------------------------------------------------------------------
*/
function cwp_register_block_script() {
    $blocks = get_blocks();
    foreach ($blocks as $block) {
        wp_register_script( $block, get_template_directory_uri() . '/blocks/'.$block.'/script.js' );
    }

}
add_action( 'init', 'cwp_register_block_script' );
/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}


/*
|--------------------------------------------------------------------------
| Shortcode
|--------------------------------------------------------------------------
|
| 
| 
|
*/

add_shortcode('orange', function ($atts, $content = null) {
	return '<span class="text-orangje">' . $content . '</span>';
});

add_shortcode('light-blue', function ($atts, $content = null) {
	return '<span class="text-morning-glory">' . $content . '</span>';
});


/*
|--------------------------------------------------------------------------
| Custom Post Types
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*Register WordPress  Gutenberg CPT */
function cw_post_type_ptdiensten() {
    register_post_type( 'ptdiensten',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => _x('Diensten', 'plural'),
                'singular_name' => _x('Diensten', 'singular'),
                'menu_name' => _x('Diensten', 'admin menu'),
                'name_admin_bar' => _x('Diensten', 'admin bar'),
                'add_new' => _x('Nieuwe toevoegen', 'add new'),
                'add_new_item' => __('Voeg nieuwe Dienst toe'),
                'new_item' => __('Nieuwe Dienst'),
                'edit_item' => __('Wijzigen'),
                'view_item' => __('Bekijk'),
                'all_items' => __('Alle Diensten'),
                'search_items' => __('Zoek Dienst'),
                'not_found' => __('Geen Diensten gevonden.'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'exclude_from_search' => true,  // you should exclude it from search results
            'show_in_nav_menus' => false,
            'query_var' => true,
            'rewrite' => array('slug' => 'dienst'),
            'show_in_rest' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-insert',
            'supports' => array('editor','title', )
        )
    );
}
 
add_action( 'init', 'cw_post_type_ptdiensten' );

/*Register WordPress  Gutenberg CPT */
function cw_post_type_ptcases() {
    register_post_type( 'ptcases',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => _x('Cases', 'plural'),
                'singular_name' => _x('Cases', 'singular'),
                'menu_name' => _x('Cases', 'admin menu'),
                'name_admin_bar' => _x('Cases', 'admin bar'),
                'add_new' => _x('Nieuwe toevoegen', 'add new'),
                'add_new_item' => __('Voeg nieuwe Case toe'),
                'new_item' => __('Nieuwe Case'),
                'edit_item' => __('Wijzigen'),
                'view_item' => __('Bekijk'),
                'all_items' => __('Alle Cases'),
                'search_items' => __('Zoek Case'),
                'not_found' => __('Geen Cases gevonden.'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'exclude_from_search' => true,  // you should exclude it from search results
            'show_in_nav_menus' => false,
            'query_var' => true,
            'rewrite' => array('slug' => 'case'),
            'show_in_rest' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-insert',
            'supports' => array('editor','title', 'thumbnail')
        )
    );
}
 
add_action( 'init', 'cw_post_type_ptcases' );


/*Register WordPress  Gutenberg CPT */
function cw_post_type_ptklanten() {
    register_post_type( 'ptklanten',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => _x('Klanten', 'plural'),
                'singular_name' => _x('Klanten', 'singular'),
                'menu_name' => _x('Klanten', 'admin menu'),
                'name_admin_bar' => _x('Klanten', 'admin bar'),
                'add_new' => _x('Nieuwe toevoegen', 'add new'),
                'add_new_item' => __('Voeg nieuwe Klant toe'),
                'new_item' => __('Nieuwe Klant'),
                'edit_item' => __('Wijzigen'),
                'view_item' => __('Bekijk'),
                'all_items' => __('Alle Klanten'),
                'search_items' => __('Zoek Klant'),
                'not_found' => __('Geen Klant gevonden.'),
            ),
            'public' => false,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'exclude_from_search' => true,  // you should exclude it from search results
            'show_in_nav_menus' => false,
            'query_var' => true,
            'rewrite' => array('slug' => 'klant'),
            'show_in_rest' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-insert',
             'show_in_rest'      => false,
            'supports' => array('editor','title', )
        )
    );
}
 
add_action( 'init', 'cw_post_type_ptklanten' );

/*
|--------------------------------------------------------------------------
| Options - MENU
|--------------------------------------------------------------------------
|
| 
| 
|
*/



/*
|--------------------------------------------------------------------------
| Options - MENU
|--------------------------------------------------------------------------
|
| 
| 
|
*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Call to action',
		'menu_title'	=> 'Call to action',
		'parent_slug'	=> 'options',
	));

        acf_add_options_sub_page(array(
		'page_title' 	=> 'Start wedstrijdbespreking',
		'menu_title'	=> 'Wedstrijdbespreking',
		'parent_slug'	=> 'options',
	));
	
}




function custom_post_type() {

  // Labels
    $labels = array(
        'name'               => _x( 'Posts', 'post type general name' ),
        'singular_name'      => _x( 'Post', 'post type singular name' ),
        'menu_name'          => _x( 'Posts', 'admin menu' ),
        'name_admin_bar'     => _x( 'Post', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Post' ),
        'new_item'           => __( 'New Post' ),
        'edit_item'          => __( 'Edit Post' ),
        'view_item'          => __( 'View Post' ),
        'all_items'          => __( 'All Posts' ),
        'search_items'       => __( 'Search Posts' ),
        'parent_item_colon'  => __( 'Parent Posts:' ),
        'not_found'          => __( 'No posts found.' ),
        'not_found_in_trash' => __( 'No posts found in Trash.' )
    );

    // Register post type
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'post', $args );

}

add_action( 'init', 'custom_post_type' );



// function custom_post_type_slug( $args, $post_type ) {
//     if ( 'post' === $post_type ) {
//         $args['rewrite']['slug'] = 'blog';
//     }
//     return $args;
// }
// add_filter( 'register_post_type_args', 'custom_post_type_slug', 10, 2 );

  
/*
|--------------------------------------------------------------------------
| Wordpress menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function customize_dashboard_menu() {
    global $menu;

    // Vervang "super admin" door de gebruikersnaam die je wilt tonen.
    $allowed_user = 'kevin';

    // Haal de huidige ingelogde gebruiker op.
    $current_user = wp_get_current_user();
    $current_user_login = $current_user->user_login;

    // Verberg specifieke menu-onderdelen voor alle gebruikers behalve "kevin".
    if ($current_user_login !== $allowed_user) {
        // Hier kun je de volledige URL/querystrings vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_url = array(
            // 'edit.php',
            'edit.php?post_type=acf-field-group',
            'edit-comments.php',
            'themes.php',
            // 'plugins.php',
            // 'users.php',
            'options-general.php',
            'tools.php',
            'admin.php?page=ai1wm_export'
            // Voeg hier andere URL's/querystrings toe van de items die je wilt verbergen op basis van de URL.
        );

        // Hier kun je de classes vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_class = array(
            'toplevel_page_wppusher', 
            'toplevel_page_ai1wm_export',
            'menu-top toplevel_page_mlang',
            // 'toplevel_page_rank-math',
            'menu-top toplevel_page_smush',
            // Voeg hier andere classes toe van de items die je wilt verbergen op basis van de class.
        );

        foreach ($menu as $key => $item) {
            // Verberg op basis van URL/querystring.
            if (in_array($item[2], $hidden_menu_items_by_url)) {
                unset($menu[$key]);
            }

            // Verberg op basis van class.
            foreach ($hidden_menu_items_by_class as $class) {
                if (strpos($item[4], $class) !== false) {
                    unset($menu[$key]);
                    break;
                }
            }
        }
    }
}

add_action('admin_menu', 'customize_dashboard_menu');


/*
|--------------------------------------------------------------------------
| Wordpress topbar
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function add_custom_admin_bar_styles() {
    // Controleren of de gebruiker is ingelogd
    if (is_user_logged_in()) {
        // Gebruiker met de gebruikersnaam "xxx" uitsluiten
        $user = wp_get_current_user();
        if ($user->user_login === 'xxx') {
            return;
        }

        // Voeg hier de CSS-styling toe voor de menu-items die je wilt aanpassen
        $custom_styles = "
            #wp-admin-bar-comments { display: none !important; }
            #wp-admin-bar-customize { display: none !important; }
            #wp-admin-bar-new-content { display: none !important; }
            #wp-admin-bar-rank-math { display: none !important; }
            #dashboard_primary { display: none !important; }
            #dashboard_quick_press { display: none !important; }
            #dashboard_activity  { display: none !important; }
            #welcome-panel { display: none !important; }
            #dashboard_site_health { display: none !important; }
            #rg_forms_dashboard { display: none !important; }
            /* Voeg hier meer CSS-styling toe indien nodig */
        ";

        // Voeg de CSS-styling toe aan zowel de front-end als het WordPress-dashboard
        echo '<style type="text/css">' . $custom_styles . '</style>';
        echo '<style type="text/css" id="custom-admin-bar-styles">' . $custom_styles . '</style>';
    }
}
add_action('wp_head', 'add_custom_admin_bar_styles');
add_action('admin_head', 'add_custom_admin_bar_styles');



/*
|--------------------------------------------------------------------------
| Wordpress footer
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function vervang_dashboard_footer_tekst() {
    echo 'Digital FC';
}

add_filter('admin_footer_text', 'vervang_dashboard_footer_tekst');



/*
|--------------------------------------------------------------------------
| Wordpress admin URL
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Functie voor het doorverwijzen van "/backend" naar "/wp-login.php"
function redirect_backend_to_wp_login() {
    if ($_SERVER['REQUEST_URI'] == '/backend') {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('init', 'redirect_backend_to_wp_login');



/*
|--------------------------------------------------------------------------
| E-mailadres verzenden van mails
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_wp_mail_from($original_email_address) {
    // Vervang 'jouw@emailadres.com' door het gewenste specifieke e-mailadres
    return 'noreply@digitalfc.nl';
}

function custom_wp_mail_from_name($original_email_from) {
    // Vervang 'Jouw Naam' door de gewenste afzender naam
    return 'Digital FC';
}

add_filter('wp_mail_from', 'custom_wp_mail_from');
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');


/*
|--------------------------------------------------------------------------
| Hide Super Admin
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function exclude_user_kevin_from_users_list($query) {
    if (!is_admin()) {
        return; // We voeren deze actie alleen uit in de backend
    }

    $current_user = wp_get_current_user();

    // Controleer of de huidige gebruiker "super admin" is
    if ($current_user->user_login === 'kevin') {
        return; // "super admin" kan zijn eigen gebruikersgegevens zien
    }

    // Haal de huidige gebruiker op
    $current_user_id = $current_user->ID;

    // Haal de gebruiker "super admin" op
    $kevin_user = get_user_by('login', 'kevin');

    // Controleer of "super admin" bestaat en niet dezelfde is als de huidige gebruiker
    if ($kevin_user && $current_user_id !== $kevin_user->ID) {
        // Voeg een voorwaarde toe aan de gebruikersquery om "super admin" te verbergen voor andere gebruikers
        $query->query_vars['exclude'] = array($kevin_user->ID);
    }
}
add_action('pre_get_users', 'exclude_user_kevin_from_users_list');



/*
|--------------------------------------------------------------------------
| Hide auteur
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function verwijder_auteur_kolom($columns) {
    // Controleer of de 'auteur' kolom aanwezig is in de array van kolommen
    if (isset($columns['author'])) {
        // Verwijder de 'auteur' kolom uit de array
        unset($columns['author']);
    }
    return $columns;
}
add_filter('manage_posts_columns', 'verwijder_auteur_kolom');
add_filter('manage_pages_columns', 'verwijder_auteur_kolom');
// Voeg indien nodig filters toe voor aangepaste posttypes, bijv. 'book' => 'manage_book_columns'








<?php
/**
 * Author: Alejandro Castro Molina
 * URL: alcastromol.com
 * Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
    Quitando warnning's de php
\*------------------------------------*/

    ini_set('display_errors','Off');
    ini_set('error_reporting', E_ALL );
    define('WP_DEBUG', false);
    define('WP_DEBUG_DISPLAY', false);

/*------------------------------------*\
    Excerpt en paginas
\*------------------------------------*/

    add_post_type_support( 'page', 'excerpt' );

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

    if ( function_exists( 'add_theme_support' ) ) {

        add_theme_support( 'custom-logo' );

        // Add Thumbnail Theme Support.
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'large', 700, '', true ); // Large Thumbnail.
        add_image_size( 'medium', 250, '', true ); // Medium Thumbnail.
        add_image_size( 'small', 120, '', true ); // Small Thumbnail.
        add_image_size( 'custom-size', 700, 200, true ); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

        // Enables post and comment RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Enable HTML5 support.
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    }

/*------------------------------------*\
    CSS
\*------------------------------------*/

    function turquesa_styles() {

            wp_register_style( 'critico', get_template_directory_uri() . '/style.css', array(), '1.0' );
            wp_enqueue_style( 'critico' );

    }
    add_action( 'wp_enqueue_scripts', 'turquesa_styles' ); // Add Theme Stylesheet

/*------------------------------------*\
    Js's
\*------------------------------------*/

    function header_scripts() {
        if ( $GLOBALS['pagenow'] != 'wp-login.php' && ! is_admin() ) {
                // jQuery
                if(!is_admin()){
                    wp_deregister_script( 'jquery' );
                }
                
                // wp_register_script( 'jquery', get_template_directory_uri() . '/js/lib/jquery.js', array(), '1.11.1' );

                // Conditionizr
                // wp_register_script( 'conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0' );

                // // Modernizr
                // wp_register_script( 'modernizr', get_template_directory_uri() . '/js/lib/modernizr.js', array(), '2.8.3' );

                // Custom scripts
                wp_register_script(
                    'js',
                    get_template_directory_uri() . '/js/scripts.js', 
                    array(
                        // 'conditionizr',
                        // 'modernizr',
                        // 'jquery'
                    ),
                    '1.0.0' );

                // Enqueue Scripts
                wp_enqueue_script( 'js' );
        }
    }
    // Add Actions
    add_action( 'wp_enqueue_scripts', 'header_scripts' ); // Add Custom Scripts to wp_head

/*------------------------------------*\
    Menú
\*------------------------------------*/

    function register_html5_menu() {
        register_nav_menus( array( // Using array to specify more menus if needed
            'header-menu'  => esc_html( 'Header Menu', 'html5blank' ), // Main Navigation
            'extra-menu'   => esc_html( 'Extra Menu', 'html5blank' ) // Extra Navigation if needed (duplicate as many as you need!)
        ) );
    }
    add_action( 'init', 'register_html5_menu' ); // Add HTML5 Blank Menu

    function turquesa_nav() {
        wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="list-unstyled d-flex align-items-center">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
            )
        );
    }

/*------------------------------------*\
    Add page slug to body class
\*------------------------------------*/

    function add_slug_to_body_class( $classes ) {
        global $post;
        if ( is_home() ) {
            $key = array_search( 'blog', $classes, true );
            if ( $key > -1 ) {
                unset( $classes[$key] );
            }
        } elseif ( is_page() ) {
            $classes[] = sanitize_html_class( $post->post_name );
        } elseif ( is_singular() ) {
            $classes[] = sanitize_html_class( $post->post_name );
        }

        return $classes;
    }
    add_filter( 'body_class', 'add_slug_to_body_class' ); // Add slug to body class (Starkers build)

/*------------------------------------*\
    Remover / Arreglar header
\*------------------------------------*/

    remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
    remove_action( 'wp_head',             'wp_resource_hints',               2     );
    remove_action( 'wp_head',             'print_emoji_detection_script',     7    );
    remove_action( 'wp_head',             'wp_generator'                           );
    remove_action( 'wp_print_styles',     'print_emoji_styles'                     );
    remove_action( 'wp_head',                'wp_oembed_add_discovery_links'         );
    remove_action( 'wp_head',                'wp_oembed_add_host_js'                 );
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
    remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
    remove_action( 'wp_head', 'index_rel_link' ); // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
    remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
    /**
     * REMOVEMOS SCRIPTS DE HEDER Y LOS PONEMOS EN EL FOOTER
     */
    function footer_enqueue_scripts() {

         remove_action('wp_head', 'wp_print_scripts');
         remove_action('wp_head', 'wp_print_head_scripts', 1);
         remove_action('wp_head', 'wp_enqueue_scripts', 1);

         add_action('wp_footer', 'wp_print_scripts', 5);
         add_action('wp_footer', 'wp_enqueue_scripts', 5);
         add_action('wp_footer', 'wp_print_head_scripts', 5);

    }
    add_action('after_setup_theme', 'footer_enqueue_scripts');

    function my_deregister_styles()    { 
            wp_deregister_style( 'dashicons' );
            wp_deregister_style( 'wp-block-library' );
    }
    add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

    function remove_styles(){
        wp_deregister_style( 'wp-faq-schema-jquery-ui' );
    }
    add_action( 'wp_enqueue_scripts', 'remove_styles' ); // Add Theme Stylesheet

/*------------------------------------*\
    Remover fechas de yoast seo
\*------------------------------------*/
    if(in_array('wordpress-seo/wp-seo.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
       add_filter( 'wpseo_schema_webpage', 'remove_fecha_property_from_webpage', 11, 1 );
        function remove_fecha_property_from_webpage( $data ) {
            if (array_key_exists('breadcrumb', $data)) {
                unset($data['datePublished']);
                unset($data['dateModified']);
            }
            return $data;
        }
    }
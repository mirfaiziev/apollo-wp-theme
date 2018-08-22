<?php
/* ========================================================================================= */
function apollo_widgets_init()
{
    // unregisterd sidebar from parent theme
    unregister_sidebar('sidebar-1');

    // initialize same sidebar but with another class
    register_sidebar(
         array(
             'name'          => __( 'Main Sidebar', 'apollo' ),
             'id'            => 'sidebar-1',
             'before_widget' => '<aside id="%1$s" class="widget %2$s">',
             'after_widget'  => '</aside>',
             'before_title'  => '<h3 class="widget-title text-primary">',
             'after_title'   => '</h3>',
         )
    );

}
add_action( 'widgets_init', 'apollo_widgets_init', 11);

/* ========================================================================================= */
function remove_specific_widget( $sidebars_widgets ) {

    foreach( $sidebars_widgets as $widget_area => $widget_list ){

        foreach( $widget_list as $pos => $widget_id ){

            if ( $widget_id == 'search-2'){
                unset( $sidebars_widgets[$widget_area][$pos] );
            }
        }
    }

    return $sidebars_widgets;
}

add_filter( 'sidebars_widgets', 'remove_specific_widget' );




/* ========================================================================================= */
function theme_name_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery-slim', get_stylesheet_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js', array(), '3.2.1');
    wp_enqueue_script('bootstrap.min', get_stylesheet_directory_uri(). '/assets/js/bootstrap.min.js');

    wp_enqueue_style('bootstrap.min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('my_local_fonts', get_stylesheet_directory_uri() . '/assets/css/my_local_fonts.css');
    wp_enqueue_style('font-awesome-4.7.0', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');


<?php 
/** 
** activation theme 
**/ 
// pour ajouter une feuille de style, le parametre 15 permet de faire passer cette feuille de style après les autres (10 pour les autres) 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' ,1); 
function theme_enqueue_styles() { 
        // pour fixer la feuille de style parent 
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
        //pour fixer la feuille de style enfant 
        wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' ); 
}

add_action( 'wp_enqueue_scripts', 'envo_magazine_child_enqueue_styles' );
function envo_magazine_child_enqueue_styles() {

    $parent_style = 'envo-magazine-stylesheet';

        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css', array( 'bootstrap' ));
        wp_enqueue_style('envo-magazine-child-style',
                get_stylesheet_directory_uri() . '/style.css',
                array($parent_style),
                wp_get_theme()->get('Version')
        );


}

/**
 * Register Theme Info Page
 */
require_once( trailingslashit( get_template_directory() ) . 'lib/dashboard.php' );
/**
 * Register PRO notify
 */
require_once( trailingslashit( get_template_directory() ) . 'lib/customizer.php' );

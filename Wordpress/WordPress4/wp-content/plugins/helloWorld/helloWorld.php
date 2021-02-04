<?php

/*
Plugin Name: Hello World
Plugin URI:
Description: J'apprends juste a créer un plugin.
Author: Quentin
Version: 0.1.0
Author URI:
 */

class HelloWorld_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/helloClass.php';
        register_activation_hook(__FILE__, array('helloClass', 'install'));
        register_deactivation_hook(__FILE__, array('helloClass', 'uninstall'));
        add_action('admin_menu', array($this, 'add_admin_menu'),20);
        new HelloClass();
    }

    public function add_admin_menu() { 
        //on ajoute une page dans le menu administrateur 
        add_menu_page('Hello World', 'Hello World', 'manage_options', 'helloworld', array($this, 'menu_html')); 
    } 
    public function menu_html() { 
        echo '<h1>'.get_admin_page_title().'</h1>'; ?>
        <form method="post" action="options.php"> 
            <?php settings_fields('helloworld_settings') ?>
            <label>Couleur</label> 
            <input type="text" name="helloworld_couleur" value="<?php echo get_option("helloworld_couleur")?>"/> 
            <?php submit_button(); ?> 
        </form> <?php
    }
}
new HelloWorld_Plugin();

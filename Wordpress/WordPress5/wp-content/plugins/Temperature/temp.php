<?php

/*
Plugin Name: Plugin Qui affiche une image avec la temperature
Plugin URI:
Description: J'apprends juste a créer un plugin.
Author: Quentin
Version: 0.1.0
Author URI:
 */


class Temp_Plugin 
{
    public function __construct(){ 
        include_once plugin_dir_path(__FILE__).'/TempClass.php'; 
        new TempClass(); 
        add_action('admin_menu', array($this, 'add_admin_menu'),20);
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_admin_menu() { 
        //on ajoute une page dans le menu administrateur 
        add_menu_page('Temperature', 'Temperature', 'manage_options', 'Temperature', array($this, 'menu_html')); 
    } 
    public function menu_html() { 
        echo '<h1>'.get_admin_page_title().'</h1>'; 
        ?>
        <form method="post" action="options.php"> 
        <?php settings_fields('temp_settings'); ?>
        <label>Degres</label> 
            <input type="text" name="temp_degres" value="<?php echo get_option("temp_degres")?>" pattern ="[0-9]?[0-9]?"/> 
            <?php submit_button();?>
            </form><?php
    }

    public function register_settings() { 
        register_setting('temp_settings', 'temp_degres');
    }
}
new Temp_Plugin();

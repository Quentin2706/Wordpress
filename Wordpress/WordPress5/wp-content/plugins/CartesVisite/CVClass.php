<?php 
//on inclu la definition du widget 
include_once plugin_dir_path( __FILE__ ).'/CVWidget.php'; 
class CVClass{ 
    public function __construct()
    { // on déclare le widget 
        add_action('widgets_init', function(){
            register_widget('CVWidget');
            add_action('wp_enqueue_scripts',array($this,'persoCSS'),15);
            add_action('wp_footer',array($this,'persoJS'),15);

        }); 
    } 

    function persoCSS() { 
        wp_enqueue_style('CVcss', plugins_url('CartesVisite/design.css')); 
    }

    function persoJS() { 
        wp_enqueue_scripts('CVjs', plugins_url('CartesVisite/scriptCV.js')); 
    }

    public static function install() {
        //méthode déclenchée à l'activation du plug-in 
        global $wpdb; 
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}cartesVisite_Donnees (id INT AUTO_INCREMENT PRIMARY KEY, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL);"); 
    }

}   
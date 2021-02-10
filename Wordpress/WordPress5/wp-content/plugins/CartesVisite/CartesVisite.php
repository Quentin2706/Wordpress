<?php

/*
Plugin Name: Plugin Carte de visite
Plugin URI:
Description: J'apprends juste a créer un plugin.
Author: Quentin
Version: 0.1.0
Author URI:
 */


class CartesVisite_Plugin 
{
    public function __construct(){ 
        include_once plugin_dir_path(__FILE__).'/CVClass.php'; 
        new CVClass(); 
        add_action('admin_menu', array($this, 'add_admin_menu'),20);
        register_activation_hook(__FILE__, array('CVClass', 'install'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_admin_menu() { 
        //on ajoute une page dans le menu administrateur 
        add_menu_page('Cartes de visite', 'Cartes de visite', 'manage_options', 'CartesVisite', array($this, 'menu_html')); 
    } 
    public function menu_html() { 
        echo '<h1>'.get_admin_page_title().'</h1>'; 
        $user = CVWidget::getRowUser();
        ?>
        <form method="post" action="options.php"> 
        <?php settings_fields('cartesVisite_settings'); ?>
        <label>Couleur</label> 
            <input type="text" name="cartesVisite_couleur" value="<?php echo get_option("cartesVisite_couleur")?>"/> 
            <p>
                <label for="cartesvisites_nom">Nom :</label>
                <input id="cartesvisites_nom" name="cartesvisites_nom" type="texte" value="<?php echo $user->nom?>" required/>
            </p>
            <p>
                <label for="cartesvisites_prenom">Prenom :</label>
                <input id="cartesvisites_prenom" name="cartesvisites_prenom" type="texte" value="<?php echo $user->prenom?>" required/>
            </p>
            <p>
                <label for="cartesVisite_nomprenom">Nom et Prenom :</label>
                <input id="cartesVisite_nomprenom" name="cartesVisite_nomprenom" type="radio" value="on"/>
            </p>
            <p>
                <label for="cartesVisite_prenomnom">Prenom et Nom :</label>
                <input id="cartesVisite_prenomnom" name="cartesVisite_prenomnom" type="radio" value="on"/>
            </p>
            <p>
                <label for="cartesvisites_email">Email :</label>
                <input id="cartesvisites_email" name="cartesvisites_email" value="<?php echo $user->email?>" type="texte"/>
                <label for="cartesVisite_afficheemail">Afficher l'email</label>
                <input id="cartesVisite_afficheemail" name="cartesVisite_afficheemail" type="checkbox"/>
            </p>

            <p>
                <label for="cartesvisites_tel">Tel :</label>
                <input id="cartesvisites_tel" name="cartesvisites_tel" value="<?php echo $user->tel?>" type="texte"/>
                <label for="cartesVisite_affichetel">Afficher le tel</label>
                <input id="cartesVisite_affichetel" name="cartesVisite_affichetel" type="checkbox"/>
            </p>
            <?php submit_button();?>
            </form><?php
    }

    public function register_settings() { 
        register_setting('cartesVisite_settings', 'cartesVisite_couleur');
        register_setting('cartesVisite_settings', 'cartesVisite_prenomnom');
        register_setting('cartesVisite_settings', 'cartesVisite_nomprenom');
        register_setting('cartesVisite_settings', 'cartesVisite_afficheemail');
        register_setting('cartesVisite_settings', 'cartesVisite_affichetel');
    }
}
new CartesVisite_Plugin();

<?php 
class CVWidget extends WP_Widget { 
   public function __construct() { 
       parent::__construct('CartesVisite', 'Carte de visite', array('description' => 'Un plug-in qui affiche une carte de visite')); 
       add_action('wp_loaded', array($this, 'save_donnees'));
       
   } 
   public function getRowUser()
   {
       global $wpdb;
       return $wpdb->get_Row("SELECT * FROM {$wpdb->prefix}cartesvisite_donnees ORDER BY id DESC LIMIT 1");
   }

   public function save_donnees()
   {
       global $wpdb;
       $wpdb->insert("{$wpdb->prefix}cartesvisite_donnees", array("nom"=> $_POST["cartesvisites_nom"],"prenom"=> $_POST["cartesvisites_prenom"],"email"=> $_POST["cartesvisites_email"],"tel"=> $_POST["cartesvisites_tel"]));
   }
    public function widget($args, $instance) { 
       // formulaire afficher à l'écran pour l'utilisateur 
       // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées 
       echo $args['before_widget']; 
       echo $args['before_title']; 
       echo apply_filters('widget_title', $instance['title']);
       echo $args['after_title']; // corps du widget 
       $couleur = get_option('cartesVisite_couleur', 'black');
        $prenomNom = get_option('cartesVisite_prenomnom', 'OFF');
        $email = get_option('cartesVisite_afficheemail', 'OFF');
        $tel = get_option('cartesVisite_affichetel', 'OFF');



       $user = self::getRowUser();
       ?>
        <div style='background-color:<?php echo $couleur?>; border-radius:0.2em'>
        <?php
        
        if ($prenomNom == "on")
        {
            echo '<div>'.$user->prenom.' '.$user->nom.'</div>' ;
        } else {
            echo '<div>'.$user->nom.' '.$user->prenom.'</div>' ;
        }
        if ($email == "on")
        {
            echo '<div>'.$user->email.'</div>' ;
        }
        if ($tel == "on")
        {
            echo '<div>'.$user->tel.'</div>' ;
        }

        ?>
        </div>
        <?php echo $args['after_widget']; 
    }
}
    
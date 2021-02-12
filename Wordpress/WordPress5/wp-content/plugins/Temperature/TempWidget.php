<?php 
class TempWidget extends WP_Widget { 
   public function __construct() { 
       parent::__construct('Temperature', 'Temperature', array('description' => 'Un plug-in qui affiche Une photo avec la temperature saisie')); 
   } 
    public function widget($args, $instance) { 
       // formulaire afficher à l'écran pour l'utilisateur 
       // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées 
       echo $args['before_widget']; 
       echo $args['before_title']; 
       echo apply_filters('widget_title', $instance['title']);
       echo $args['after_title']; // corps du widget 
        $temp = get_option('temp_degres', "");
       ?>
        <?php
            switch ((int) $temp)
            {
                
                case $temp < 0: 
                    {
                        echo '<div><img src="'.plugins_url("Temperature/IMG/0.png").'"></div>' ;
                        break;
                    }
                case $temp < 10: 
                    {
                        echo '<div><img src="'.plugins_url("Temperature/IMG/1.png").'"></div>' ;
                        break;
                    }
                case $temp < 20: 
                    {
                        echo '<div><img src="'.plugins_url("Temperature/IMG/2.png").'"></div>' ;
                        break;
                    }
                case $temp >= 20: 
                    {
                        echo '<div><img src="'.plugins_url("Temperature/IMG/3.png").'"></div>' ;
                        break;
                    }

                default:  
                {
                    echo '<div>Aucune donnée à afficher </div>';
                    break;
                }        
            }
        ?>
        </div>
        <?php echo $args['after_widget']; 
    }
}
    
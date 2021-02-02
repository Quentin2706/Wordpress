<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vO[?DWrLDI$esbbXVW@3;QC~ShE-mwPq3LF9p-,eoL3thZ1E[#h+0sB_k&z_4-^p' );
define( 'SECURE_AUTH_KEY',  'A~HS6[qlG]4l<-4G%m#^#.K_2h$rO~y~ZwsVo_hpyrh6]T<_q=&p!19(WV8rD0?S' );
define( 'LOGGED_IN_KEY',    'PunWbFUXvR8mu7m;iDv|foY8VgWY3GX@JBU_Nxw`A}v[GIKJ)A3?wikez98:Hayb' );
define( 'NONCE_KEY',        '{aJ4(Q/ovYp[!|{yhjby<^;4MzKjX86J5EM$0:cE;KZ|4*vf/1>>{Ni.#Fp0Mv3=' );
define( 'AUTH_SALT',        '^rmR!J&/rhV2 1T1Vk1CX*N^*i?n9U<>!l:>j4*d`}<Q>-Ex/7),(kwm1XyOxt?7' );
define( 'SECURE_AUTH_SALT', '(8$i,}^(mbTt9^FSfBjOzllE=vU6,`0@1~v$m49%@f+oyqu#B}r|Vx;)2pIliE+C' );
define( 'LOGGED_IN_SALT',   'Pon,YnM)~qQnV8UKX6:r03L{v9@ Pi9a$+NO7=9RrNxIMIg5|=n4e@+dFHa=RBT2' );
define( 'NONCE_SALT',       'W%9aA*`^y|3fF%y>c#VX}wf!j<o:BX`rUr1$1>y %]O]N}xWjck)?T)K.64ih@Fr' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

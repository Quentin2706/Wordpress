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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         'cMDS.p$4dkeTA7Ur59,iR?]*-<t;zOqhP>mroYZj6n/Toe+7gQ_>O@@}M4C`@HG;' );
define( 'SECURE_AUTH_KEY',  'e]$PX;J-B{&9-Njyz|y3}9gT7xdK&n0Nb>9G+TUS&QZt,#IT?oP+Er%Q(fhNR=|>' );
define( 'LOGGED_IN_KEY',    '}umK:!A=^vO&pr0m=>nvN]E*Umdii95~vcQ^-|uGY`iqo.Q&g?6[.[CdCb6RA<ce' );
define( 'NONCE_KEY',        '~%Xp8YX16~],^I,7dG0#W1HlfKVOcf-y6rr`zl<yR&SHa<2+EclRDCdx#%FhEpu>' );
define( 'AUTH_SALT',        '*$x >nC+ pp>`e| G{o(zbw,snF@,qmO~/Lm/;oh28;1r8wm6HL5Cyn7q*A^|L|s' );
define( 'SECURE_AUTH_SALT', '1V}B|E4oLL PN!:pU`[v2U6F3>F=|jr^:YQynqz2v}oK8nS{^9}HBQ+WOTjA? K:' );
define( 'LOGGED_IN_SALT',   'nex6zEn_EKzbl>&w8kWqvHOL4^xLP}+,`QTqC*J 6W6Ux!_9P8xeN9NAQ#wO(L/l' );
define( 'NONCE_SALT',       '|i6@)-`1]v8O.*[kN-:h;x8*Y{z,lQ9Y4m)?x-{76Q-KSpOD/1p*82LeGL^?;On,' );
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

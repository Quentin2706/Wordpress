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
define( 'DB_NAME', 'wordpress5' );

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
define( 'AUTH_KEY',         'A7V53nF[Cb:Byu`p;?`{X3SBCe7$qm60GwFda`lhm}6Rn2sMw&@]]dR?!]W.F/IR' );
define( 'SECURE_AUTH_KEY',  '2xwU1T7f#7 j.HCrb/r{8[R@pIQ#)jU}GO}/M<YuqR{GyqDm~CF=Rb:`|S-~ovE6' );
define( 'LOGGED_IN_KEY',    '`-(dlYKX$-#WNyiHlaT8AJOeww<3||9q*c|;S5-aU{bv9q<:U!A$fz h&E,4&Pf+' );
define( 'NONCE_KEY',        '%gH3$l5~+>)7(4)4l)0iB%GhCz:~=:#hZbdS5msOQRZkRf6 N6Qym[|[m;IsMFKG' );
define( 'AUTH_SALT',        '|}tXO$R9V~~n:okT;7OM}J3MF!EA$:[HWMI[g{ev<0yUZijw|33l&t|V^E`5<Ai#' );
define( 'SECURE_AUTH_SALT', '_@_9Z&vo$iyP$[Na&M-A$FtEK@djH)6ht8LA4Z|PyfM:$HY5#,W5h`WA{JXd8>[0' );
define( 'LOGGED_IN_SALT',   '_S~NYrj(!2zHOranErSzGWf,n =&RM_Y a8;mpHrr[B+FQ}|Xb1~GGz~0t1( 2=Q' );
define( 'NONCE_SALT',       'bX8|RO)l5_6jTz)d(pR=0H5Uhtx?T2!M]hK6Ey;NyRyGz;*C53JXQb2V[VVG=J2N' );
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

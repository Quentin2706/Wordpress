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
define( 'AUTH_KEY',         '}(on>Z|{.Yz2GO[fJdx`RM[d|:Nu*ajDjpt(S^JBBDS`ac72^VCgTstGs1u%xb5E' );
define( 'SECURE_AUTH_KEY',  'aRt!(l!~]RurF&OE^(7jkOp)uaT?NSGipJZPG*c7nw+?Q-0D5si!Kst|Bc7I8K*6' );
define( 'LOGGED_IN_KEY',    '~23^[#n~.g1Yp$!Ph!vpW{k:mmbn=ofA#Y@1u9$l[XK=Yie|K!dA1?h{JoYNhh>5' );
define( 'NONCE_KEY',        'XEaV7YNrE|p bI[r(!G+n{z8tntOpQ1x%c165Uj@3f<>,L>dBt;r((P+e}3A4~N#' );
define( 'AUTH_SALT',        'pLx1zuo@O~m%0K,qZZA_!SR!37Ev5:EWJ7W47L.8Lv-GJxIZgNim;<n72Rfjz /Z' );
define( 'SECURE_AUTH_SALT', 'xokz (~he,!<cqXJ8l~gYauue&`38_DYzqE4-O`aBa#*5S(d8-7rTI/okDUS(FbI' );
define( 'LOGGED_IN_SALT',   '{B;!;MW>n*6PaV27-x&`]>,%h490Z>?V;5AIof<q.2_##>%H42K~x)JaV>$WsLJ)' );
define( 'NONCE_SALT',       '#>z-RN;om%`o59=e?.if<ah!S4n%gw33K1,$YjYr1gqC0iZrk:S7QH;E%?{c:4?u' );
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

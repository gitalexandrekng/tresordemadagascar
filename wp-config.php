<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'tresordemadagascar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7AC(hw7,8/NXt0~Sx_ef15NA;DRo{s<)NmH(2J!mO4zmV=ZKQ;Y:5Zo%0?{`)3[l');
define('SECURE_AUTH_KEY',  ')9g/.=GR_Js`?E(n3/ U/L:Y9J$mmRkP_t5+`kz/MdBO2eyqrw*sDx=c:wjU#hOU');
define('LOGGED_IN_KEY',    '0>^ zO@%J>03Hv5eAWR+V/M{W=Fh):)D}l12daA{#,gf{PK+i<M>};7#4Vkg!Va#');
define('NONCE_KEY',        '[jgte;Y+cX+!juCc=`J#rCl|Zc+oc<Cj7s>$F6-H6cRDaFaxq,EZep*_<WBl%UEB');
define('AUTH_SALT',        'YILWcQb7PE3l;ROpD7gS37vfo@L(O^j7mIS@;,9GHgF-eq-`sR$X8/z-T0-qC;cu');
define('SECURE_AUTH_SALT', 'HnF-b8y_GW:5QTI=<;`FOwNd%^CJ,pONK4Z][:_d=Dak77c &ntemyxP0KQ3B7=B');
define('LOGGED_IN_SALT',   '3vx?u,1rPlgOaV66{nSt# LK2<A[twU$}OAuaYu#*D7nd}b=qWC?=I5lUTP|>Sg ');
define('NONCE_SALT',       '*sMM,~39)!^:eul:%Fdogrk.*EMC$=+1ZO~H|sjuiyvnYIB@6~jm@tz!jvh$~Urb');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_tdm_2k17_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
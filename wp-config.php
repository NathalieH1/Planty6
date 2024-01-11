<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '~)sX0Soc/,YQjI2W(U J15?R1ZXMF?j^i(_Zh`tF6IFt~!Jw%,AT4SoGPpcZX.7o' );
define( 'SECURE_AUTH_KEY',  'j:#;o0 +d5Q$u~%bO</Q[4.V7K}m]n)DAQz-0g%-EUXhL-{hFHFFd,ni!5@x^ nM' );
define( 'LOGGED_IN_KEY',    'h1>fQ>SE-hlxwK1SAUbY2+;y:<^MDRmY+*:&r6+`4k/qElV,tuNh(FN7^OvfWWPv' );
define( 'NONCE_KEY',        'U=ZT1zn&}wC.i;B)SZ)Y@1itzr;O[XM[w7g[0|z./W[ms8xx6ihX<,<WgEf{QMp6' );
define( 'AUTH_SALT',        's{>&.]?4uv()8OFBK~O=ja=JVh%L)i(Eq|[v9iWIM^NR,(Ev9mE-61TSj`lMtPfX' );
define( 'SECURE_AUTH_SALT', '?2Y^*2m4qR~[%F!qVswB<sBCGCZ@X+|%0ZnBhfg(p-|@$I<SA4J9mGb(3`d+f]0g' );
define( 'LOGGED_IN_SALT',   '==m;V:(:Od3fs`1zkeW!,:fXF(K;wAPO_85TfNtAHOol/BPRtU]S+GSA+.+YUY_n' );
define( 'NONCE_SALT',       'mJ(mf-,`:.A$)zT00fI&0+,K[-mg$5qKFwFYpng1;^6MV^,&:Xz!YE7*DkBn7[X~' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

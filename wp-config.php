<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'frater');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r +95~U6*o|3R>gs90+Pu`cTC9[Xw{X.=m;-R6;bTl-B4Gd&lC;pn#W`VevZNy;o');
define('SECURE_AUTH_KEY',  'M EnaSj1M.2H!ES7HPr(5$AncrG]:.:0LkF+s(CK+-f[<s#P!u`W%Q3).-qyQh4?');
define('LOGGED_IN_KEY',    '$&mZ[G$N/k=vMWHzLNtA5nev~FN[E]f!AI/gn3I.e+.jmM6`<)r+l,Zf+Do-Pbkk');
define('NONCE_KEY',        '9*pf_iV+&[nCpR@#]l~qir1fi[E+>B_zE%JTHtt|{i6qWE76%l}G{u:$y1ozk Q@');
define('AUTH_SALT',        'k5jh`1Qd<+ZS$#J|sMOYjE 6Jvn6$]CXqw#9mIzSnuivvg{M2-tP5?{c=+LY9[5|');
define('SECURE_AUTH_SALT', 'OWuX2<-wcH}k&MgLa;q#?&tw{=W7wHeD0q({@ZXTzE-W</t5GaY6,][x+tpW:q-^');
define('LOGGED_IN_SALT',   ')~nJ`*!$66.DP]).N + `ezgz=XA{@BH*|r PQ.0d>L1Yq:q)86v8~O;8[2^Yq=[');
define('NONCE_SALT',       '?z9W8}HEj+xWR,*r8_PyD0~O{bohO`iY]BvLXLD3Z&lwi]% 9Qn-d.`3-+$v|C=$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
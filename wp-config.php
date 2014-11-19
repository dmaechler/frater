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
define('AUTH_KEY',         'Nzc*Vp,JXWr-ILFkE77>~erXNa[*:)>^Vn#XG-y!z{jrt=5mLs JH~0C!XFfs_OL');
define('SECURE_AUTH_KEY',  '3q<H2Sfh>L%:24f10&h_Oe 1ba8D-/NX@9*-<dt6rlR#,y67Z;42/W/D/12:sm/C');
define('LOGGED_IN_KEY',    'zK_)>+IZuEHH7]hC2K?wAIipzOPQij ePO,Z&]Zv^ptXs`WY`xA]CTAPU;5*n;&c');
define('NONCE_KEY',        '.+}an|+`$@{(#A(T/$0];-6zC29e)~f)SS_t{4lh~2eT?N|+5S7a;r:UnM?N}`Ei');
define('AUTH_SALT',        '/v|f/_Tcp#D((HAA@^`cr|<JxAJyQq3C(/#HF.N<E+#-RPQ~Xam1PX!,= Do60}l');
define('SECURE_AUTH_SALT', 'M3pKL.Mh0/qL@6[#Pwd_L+gK`}21v5Dkg>D/];lGO?N M*)QV!z?|.A+4eyV8vI1');
define('LOGGED_IN_SALT',   'nS$Tz`Ub55s+q>/1]NNN+V*xM-p-;)q &j.%FZIBsSslJkB|ei< !B[f=mSaOkRM');
define('NONCE_SALT',       'aY|$qrYgk#V(J^qpHiocrCTv9Jnf++U`;kd(|q=p-y(QIW=j9Z5H#B$k5`Xtv`2R');
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
define( 'WP_MEMORY_LIMIT', '96M' );

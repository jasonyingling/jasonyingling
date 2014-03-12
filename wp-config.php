<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'testdb');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L=S*MU(-iXI&V*ieyf/o:3+=4w=D5_eq?sdyfk|Pg}p{Ib@YDo2uV1<knBjhyCs3');
define('SECURE_AUTH_KEY',  ']STojx_A$d+|T!T3!|;!G=b_*4O2Zh^$Nu-:;q@Ir.7a*RX)DTRd$*IS3w<~oWh0');
define('LOGGED_IN_KEY',    'Z-JVC/?`S-[yvR^/#7A[kiFEz+[^Q` *G|)ji>0>aNLq-5M}d27sG4nJ^P$e~sa3');
define('NONCE_KEY',        '^eX^.[0D5b<ab5xx FK#*}V6MG.IBwjX+h3,dPgv<Z=-_i3H;X~2WE |gWz#GTQ=');
define('AUTH_SALT',        'f}y# V+dql_H`E-.(b4HucNEq(hFhKNmAzD/X=M2U|-M:Urn*Ljm{9m=:.3;s=YO');
define('SECURE_AUTH_SALT', 'eS!i5^Gmm-r7t1ZRK#|flM!FW9BE8PKbu4&O_$&-}=*O=#Ky5,8e.zY]6*mLhNS:');
define('LOGGED_IN_SALT',   '|`s{hB*]pRrfo$PJ]C%i=|X QprIu:-8-@Wjq9;;Pp&|jA=!sFJ[H|4_ybdGU[st');
define('NONCE_SALT',       'mbJ@.X%ds}aAMb~&v3$y+n$-tvLNEm^jdU7W=p^ReWz9s5_(iJttQMC0++WY)%bL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ying_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

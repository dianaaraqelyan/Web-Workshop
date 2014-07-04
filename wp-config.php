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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/_@>FTPOMr._VaNoc/A,/[137eh{_W:56fSG8?ZwWd]h-h{l$B$x2P.M[|dk#&gf');
define('SECURE_AUTH_KEY',  'fW~PJKz2fik(2DE<b@x)YQUNIt|gmtQDUY/WualZG5FMk==1k@V;UvqszQP#FgB?');
define('LOGGED_IN_KEY',    'oi!xp[3`^~$.+:(_R5tj.QfgA<703Y|r^F3zX0.33)fE6[i/U@ +1bY|GdNM+hLM');
define('NONCE_KEY',        '}OmmcT5]r?9a;,X1,3F@5un|jXS)rZG~-{ E Y@T{nWw>xk)r,v`r@f89gLxWCRi');
define('AUTH_SALT',        '|,9sy%a]RYDrs/H815#SXs:e^JC&0jVMmGg EpwF%)ZddD>P[p^7QAIJ(Z|ilrue');
define('SECURE_AUTH_SALT', ';nFw>JA-TY&,m4=j}.ts?fB)xIqk3&,2E9pO_Bm&y-T|1zD}&q6M?[+tNN sPyNN');
define('LOGGED_IN_SALT',   '.nZb3T`DppJa09ajcX^*fC5UwS|XcF8?ehh/v|J7]3+.wzAT1&`UNdm[hBmA5^#t');
define('NONCE_SALT',       'l!,u.jjs]b?xH}C26Mdr<t(q&#o|!,xKP-V!~a|*.+(chl${Z_-^9ml8A+0Hx|WH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp1');

/** MySQL database username */
define('DB_USER', 'usr');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7g~x9{F_4o7kw65W)T-gfJyj_h^&A%N0^Zx6zush0K(f`R EJYO|18f`9UKI8}%o');
define('SECURE_AUTH_KEY',  'UGUGcq[vNU]`bW!jReHkO!krqS0],qkF|{`z-sJ.ebfqMh%&^Z;0knQ<sC=0nP?M');
define('LOGGED_IN_KEY',    '9?/w_y0;$,v&>)!GR%HI})R@&J3k8bEPHv>[j.[^e`f$Z#}fhO:ugo[*Ru64k{U+');
define('NONCE_KEY',        '%y(q[cM08T?e?Xm:_vQm.eN_xGJudG !DzYiK<9U(}.[)OsLb1H[?q]AOkZyMUPh');
define('AUTH_SALT',        '+9Z}EpvwpvXWC4w<XF-|*pG^I75,~5PaF]r%Zqxcxw@)kwt<#24gI`WkVg;_|@Lq');
define('SECURE_AUTH_SALT', 'OLTj20cjhA(EwqCZI YTkG(UF?Sq/G9=a86,4W(1_y*K|1F!IhEdasHU2Ac#<ojG');
define('LOGGED_IN_SALT',   'lS*okj>|2Zrx2WDWc1v]:[&Aqk@rcxYpuxl P.;AoS=IjUxt%v,^(9#0L8I3fbx&');
define('NONCE_SALT',       'e_oD(8p!%NwX4.x[,<g>/!W6/.8._4#guK2ci&_4>4Anol/5q?Y7m!]*jsc?K@t`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

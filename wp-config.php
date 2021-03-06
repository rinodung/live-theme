<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'livetheme');

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

define( 'WP_MEMORY_LIMIT', '96M' );

set_time_limit(0);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',;-EI;;x ,%h~3V WXJ-~%f+gfFJQ$dbeIVgrQrV )}<g5uXGi%?kaGfRxd|b#;k');
define('SECURE_AUTH_KEY',  '^8#<Sc;25M|V]o3b,,)+^>pcRgXs<O+C5<Ve)Kq)s/9Ax0;21%;|&5)knOoOb~vY');
define('LOGGED_IN_KEY',    'RMpG)u*f-0dy?q/aJ8`hEZB5p|DEH)^{eL=#txB_?Hl +|(S&W/%=bvuZ)c?*49{');
define('NONCE_KEY',        'Ok/<gPseeVw YocE-P+>GWB?X-Z5 yf7$N%OT38;f8>TQ96?!qq+|bOuA )=>uhh');
define('AUTH_SALT',        '[}*!|Ki[OILdj[$y2c6hz]-O){aVEG?B ;cjgjY|50LD<2E x>[WGotF:+I8up~N');
define('SECURE_AUTH_SALT', 'J`<QU$l*v_|]nJYr*UjjTX,=z`ua.R-RH1bbyEic$XxZ2Z!hK:/s,2H=]H6r**Dk');
define('LOGGED_IN_SALT',   'Y|eR;&:st$lx9r:bz/m]nU5!@_crgy2,8Q6[+zr5zXN_|[F#}H/f.(20:bEB+fbk');
define('NONCE_SALT',       '|+TD~#t$)f(rFh/N7+%:4:Xy}Wa4pcU`b7l+ldCpo*N3I|ZUrGQ,)qh60Px<X+19');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'dev.livetheme.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

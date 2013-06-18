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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+~.i9o>sB`NbHUm*58`!{**U9csxC7l8$UOT+Owf~NP `0}wc6.[X4|A:+.[ni&8');
define('SECURE_AUTH_KEY',  '*^(D?SgVk/fitaxZTAW]7m&mGq1*mmj0l%?5J)aV+@DD=|ZsY47`6Om&H_nyu|Va');
define('LOGGED_IN_KEY',    'o6+}zgN}y=g0vH4@C%=e|/3|?^m|WcZxKkgf-;Z<IH}wc}zJK+/R7I;X68C;+XVb');
define('NONCE_KEY',        'W.rZnhn8oQ HdP]geMh>Iiu|XzPNXz8sEm7=^}|eYgl!Vb%..)8A,d)Nv<2-Y4X#');
define('AUTH_SALT',        '{S$Lp|tAjIO=W{!4Upa;1&%W{KS$( MI}TpTz]rRmTiVFGSx)^rY}Rbwp?4|_nPM');
define('SECURE_AUTH_SALT', 'r3hlY6q4^u1f=-rV]b(u<nPJ:<## Yone_N0^iBqL>+w$+n4dN60b;^R}VR:dVij');
define('LOGGED_IN_SALT',   ',|Nm;nFS:.Rz+Y)n-R?7OBtbNr/%1Al4A}rXmM-0w~.!ra]*&W^DoEmv9zP|+(qS');
define('NONCE_SALT',       'yDAY7o8Ls%1O{#!^T>|U`T{H^;7eR/>ryU^: l/Br^N_95KEV-JQ/ mdA-c31^hc');

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

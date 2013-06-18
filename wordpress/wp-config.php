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
define('DB_NAME', 'webdev-finalproject');

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
define('AUTH_KEY',         '3ob*R<?M-J4V.JkKwrT@+-wE6$=jlT[ix -DnHgX-^!A73`m8nnXF{Y?G28~;|9b');
define('SECURE_AUTH_KEY',  '}+~s$4o]6d&OcEB)8xMoKH|u=5M$7-+O{nZC#(f#p]p:hG5hZR}<#Vu<:[5qq)TV');
define('LOGGED_IN_KEY',    '75FlIGre5P=%c<?;CNKBiPA7qka++wh<AIUYN^V(+]qS 24gVB5].O-^N_K2 fn7');
define('NONCE_KEY',        'eX:7xC$@!=K1kLu0_AR5+0>AZI|#I|_2%!xtsRvh*SF}<gEC]Sa j 3+0$+Oi2pH');
define('AUTH_SALT',        '}1`lupL.LTy22Sx{l0O1h-m5%Q~] _.7!u[CGiSz+-U2adC!yDHC^<dLa}H+?WDb');
define('SECURE_AUTH_SALT', 'GBRSUiu$U:mUQ<+HJQHo77`}5im#Tr3Br`;[~}v+P@9[:-<)+?%LDP]+&eGCbz)A');
define('LOGGED_IN_SALT',   'o}U$B*/gA(Hg|@ t@F:aA8+3`f-pdu>#29+:Vxn!>A4 kk}}-)?Kp-i+5<-oRZ-R');
define('NONCE_SALT',       '^0c,$IjDZ9O.?v+a0K6#P-_TVg|h({E$4!Oz/M]p1-rT}-z|0!-;?h`4Utfo_ ky');

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

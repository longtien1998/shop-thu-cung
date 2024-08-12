<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings


// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2

define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
// END iThemes Security - Do not modify or remove this line



define( 'ITSEC_ENCRYPTION_KEY', 'ejdeNEErZTZfU1k6dipBbDk2Rz4/RVJkKyotKW5YfSNnQ11IZVNmZD4qVzpGN1ojN2c2cXpwfl05W2k4JjFAYQ==' );

define('WP_HOME','https://longtien1998.online');
define('WP_SITEURL','https://longtien1998.online');
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'FORCE_SSL_ADMIN', true );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ihkvbhqm_petcare' );

/** Database username */
define( 'DB_USER', 'ihkvbhqm' );

/** Database password */
define( 'DB_PASSWORD', '3IcCu3Wd09Gk+-' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X|:;9Nw&*oG.Fj(yq$^W.j_&lt)L?A&e[7*w `y7.~];MqK,*.{jUm`q5Usf_ac@' );
define( 'SECURE_AUTH_KEY',  'gp;4s9)6qP8azjV>m4w2FckvD~z1ZD9n<jFqz(%ZNtsYm%%+mJ8_RzY_&hTV@GFv' );
define( 'LOGGED_IN_KEY',    'i{V`&iF= Tdg6/RrdwK=TLc^#H0v8haV&qPv5/rfq8yVy[KEC0Zz6;_^Q3NW&_WT' );
define( 'NONCE_KEY',        '1;3+fT^ruVs<i.c[2|C<|sS7/tReSGkrWV&|ZbSwUxg1Jj5571>B!_;K1,n!05ZS' );
define( 'AUTH_SALT',        'h]#jbU.]d&Ne!*z,>-(URjt#cDb-wd1=[wz4%H<+E3F_ufzgICCJAm^uw%p~lxPe' );
define( 'SECURE_AUTH_SALT', '153yYTE$>yz]Mzf0I,Bo(+}-<UBZud!Y:iB786rEOera9zR#9Dfx=sIuPCm+/e !' );
define( 'LOGGED_IN_SALT',   '9:yP_@:@{Q{/+f%6!(6Ukskx}2Ou{AqB -}4(E}wW9m[+~!,HQt`2]K`:2De?*FG' );
define( 'NONCE_SALT',       ';qyT}_01@nhq8^<:mprbmt~Q&_V imQNTC!(h!`=X6nf0H*kae1(^KNsT~I];[<4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

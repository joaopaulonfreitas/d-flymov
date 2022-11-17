<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flymov' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'DWAf5@c5/:2t i3/7s23q`Tccu+1cOUTUCf#PsSj^Jo-5VV8v++[7u2X8]inh]IQ' );
define( 'SECURE_AUTH_KEY',  'gmI+J&hopy^Ebe?[d!j1g@Fz83]r}xA~2d7XM,iNZY4__lOnfP]R,!$S;r?K:dW&' );
define( 'LOGGED_IN_KEY',    'fqe:bM;Q8[mg*Jdc&4Tgs2VF1kL M7GVWPVBV$/D.$7tT!{[?|v=>z[PrCuQ7@Uu' );
define( 'NONCE_KEY',        'a? uWsF`p3>2NAdSkm1-l1)-!AaN9u;2->!T.Sl,[1dBZY2/p|C:h?[os_$J?hQ#' );
define( 'AUTH_SALT',        'g&k(W%iAWBe|vnF?J!Rr@1N~*S|u90_*|(vfBlr0u1P>|xe7Wq)]XyF@FF4_]<BP' );
define( 'SECURE_AUTH_SALT', 'dk`*T;M7b&<TrF*Dao=jWI:G@vY^$knqBkcJCdq@7wQ~$Eyd};R$+R9$h&).oD0|' );
define( 'LOGGED_IN_SALT',   '-qjdwcU3xPZ(HUlVR_,EmYq$g<$%y.Lp!CzQ}qT1f/o=6TNY,?>>]w~Lp(b#3qM}' );
define( 'NONCE_SALT',       'f]7Zm(b%Jb-:_n0f4Cw<!;{k7pQ`x+22Fqss^vyw@*t LxLS:#@_IDqB(tJ=l*g,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

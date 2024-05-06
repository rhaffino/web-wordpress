<?php
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'YT9W6QW<PUc/no9zZ7||gg>oLNY8>4Xf[_jlLMQYb%icg`,3KkLyU~Gx[cDbEm]:' );
define( 'SECURE_AUTH_KEY',  'z<huB@q$b2]wB|cpoXW2?o$]D.j=Wd~R$@D(P^H{zg1D+{3JHGpaZ;3|~zNs^]#@' );
define( 'LOGGED_IN_KEY',    'X+0i]4?^dGSA$Tb]V!Mh?lCJ^ZRpiv|>![Lk!UEY$Vt%npbU%JAPmzrGPiUQ-x_c' );
define( 'NONCE_KEY',        'JG_ce^Y:KJ|>AWb8[pfAS-$?(D]fCPOlDQ%C&EQ97aFFw>]b!U-rtGP{Q$.:P.=#' );
define( 'AUTH_SALT',        'I]qiSQjMRk7i7q!EK+^:J^bx(l+q9vp[U.5z7b(I;(,;#|if0`WqD;7Fe7fu_Dm#' );
define( 'SECURE_AUTH_SALT', '|^oaMu)oW8&}IlRQ.F.f7.rkEzK#yX)h~V~dm;<:mkv>;ipe|%gfF`2pM^sq6n?2' );
define( 'LOGGED_IN_SALT',   'fh/J|fi^TeugE{uwEqg&tB_RoO1&l)&U{[g;:,$E2)u*irU&744jZam7#6wNPi];' );
define( 'NONCE_SALT',       '%O|&wmhzFF5OlqQyYB~OE>r?1z7qC2zqbyJ.ZAe_Lwtnq(f@_q&e3Xo}Qcw0EaPR' );

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

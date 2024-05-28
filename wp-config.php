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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '7dGF5esEu-;`![<Gi</%wS7G~_.k4:np8.6OxFzBa`%;*{Op%,-9axBI#X.^-)S~' );
define( 'SECURE_AUTH_KEY',   '+v.`|:(y}0Fi!u#]:vec7TCRzP6NRzl8`YjgTi]a:Vs|QcKc[cP(j{xSaQ4~,5l[' );
define( 'LOGGED_IN_KEY',     'ffiMAW?iX&0B+>NIo6ZbhHf$A#&BEpy*b|6K$E-yhB7Yz}t(3lw@7+)xb1rkkL<h' );
define( 'NONCE_KEY',         'x:_x$5/uEnfSt0dL]gbgDfPj9xre:FZ6YcHKs}K 2tW8c?|$:FPD(h2hRt/0q0$|' );
define( 'AUTH_SALT',         '_HMqs$WfltGzR.$}7%7LH+gs>AF2T}7$,j3b*8$d, 6GpXz<#,n$I5zMfYr5;l/,' );
define( 'SECURE_AUTH_SALT',  'uCl.Y*nnDMCk _Wm|6%8v*/|P`rKc8t&Vce0!yg^2/;)[u:h{!C)[6[TRfv<aMZ-' );
define( 'LOGGED_IN_SALT',    'NEOFh!dDQI>Py{mV>8_/f#avd)x@sRhSAtXFw2}Et~]_sB`K?58eu ?jL&i9u+mJ' );
define( 'NONCE_SALT',        '=p=]u?.PQN0-Y~sm|h`8R9MaCAVDP#!UJ(I8-U*:`yyw-MNR[VyY%,X <zx)GPX~' );
define( 'WP_CACHE_KEY_SALT', '3>c<R?`V+0{7^/l&d;-jHn>tz`m) BG_(^XZUOkaV~d:BQZdS90WX$jI~Qum4hWg' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '*Bb#f4&v:q8FqY|6|+5R?ospgEM.dS$)P}JJ8;d:vmP)SBIDq)5pi_y!^,yO&[#P' );
define( 'SECURE_AUTH_KEY',  '*^y@.jRL]6*.-(Ki<h^kYX.4]g0E oXRFyP}|&bBh^z.{i,yWmFzX#sBfSf+3 <u' );
define( 'LOGGED_IN_KEY',    'M:oqcBek=`xI_3=_hTEZS[fSH*-=]iGHO>pn>O_=%7Ql@y`/ 8o#( T[u3qWP9N|' );
define( 'NONCE_KEY',        'vNPN4<sbP$<+kY}Qgr%t:(e(l.V&UiG6xN7{g}CLaR4JK3{P#8{5~bFONeI`=-qC' );
define( 'AUTH_SALT',        '8ejX,`fr&[H)M!fwACWczRosI5 %:BC;X`!-k;IcM`9J?7@<fr($Tp4u1Bzl?k O' );
define( 'SECURE_AUTH_SALT', 'x#t_Vly06V2S,Zk>4INTfN-LwSJ|1zMaKE= sgK:iH4-4a`|U*nO<C/y~M-u{ssX' );
define( 'LOGGED_IN_SALT',   'Gku6|j.QwPbZ`s$7X?]!J R+M@cv*|Z>Q6x/TdtXGj:. o^?y&dg`9(E8ZQkGu+#' );
define( 'NONCE_SALT',       'ymDZh$#{&Q6>Fxyrk}fO+bT hp =YfKGWJvkg!#ECh#c{gs_Uq+i_U:M,Ypwg,5L' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

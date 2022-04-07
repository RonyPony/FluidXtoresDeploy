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
define( 'DB_NAME', 'fluid_db' );

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
define( 'AUTH_KEY',         'GL.sFQh&7~I$X>?=NA/=K5G6|dz?*<^UyMoHj#Oh,cV8Y1!9^~fnBAM$d2.Za0{{' );
define( 'SECURE_AUTH_KEY',  'CL]iJeU5D=B,yqZsp*pnndTL%v4Yb V9?Z)tm!+WF$mlTXl7]#+R=3Wj0 X^MaB.' );
define( 'LOGGED_IN_KEY',    'x7gW[!60-SWKPF*~aqnl:]m&w^hB=tV~BkLJtoRyA-Mn4q@G`s%@1](/PHRW[DZ=' );
define( 'NONCE_KEY',        'A^(`Kdml[4&z$?PlzhS9%[)an.w&.hYLb<Y<j(%X_wssqb!^.}mFiPZyhVa.YMez' );
define( 'AUTH_SALT',        '$nk<4lPhN{d $$umluI$Y.Uy4MS2=<&mm*~6{EryVGj<aN6oM/NEnd^<*Tnv,}>}' );
define( 'SECURE_AUTH_SALT', 'X@Uk9LQ beW: +EW+U4<0rp)S0asO~2K:uM*%8l4i<MhPEP=2EN^_yH#1JkvyGJw' );
define( 'LOGGED_IN_SALT',   'oGb{y$FQsi)b|Q-)u%m2OG^;i]Xn}t=n!U1s6~]hr77wp(ink8R7-r|#s5u]F$q|' );
define( 'NONCE_SALT',       '8`_RIaBQds;X2BZdM$5Zl5Yvvt)g$%y*7D=5l|<_Yd$c6:i/?_D+T{66jhhmukf|' );

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

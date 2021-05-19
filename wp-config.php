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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vin_eWm_*J,.@DwJ|!iW$&(Qp29g`/ XBM>g:FqsDz^DV!#/Ra=>Gq|x~_pj=j9V' );
define( 'SECURE_AUTH_KEY',  '7G `vAzRw|ZBb)#>GG8ED:ye|.A{1>V(,v86pZ;4jH+fsv$.OCu^@#!=&-<J.7So' );
define( 'LOGGED_IN_KEY',    '1DrL}*=z:NCdJre[A}K4AGW7$&k-@7A1p3+EU?$.uvO=V1x1akGnXjYSXAp9vo9X' );
define( 'NONCE_KEY',        'KpzwzNW4 jsy`!5;A60~=bBi?DC2;jNS3W%QZD0t:fR.Bf`>bV[xnK:/*kE1D$s5' );
define( 'AUTH_SALT',        'oaAQsp?E^z& u5S`Ot=vHm{)1Ab5`uN6[l;Nz1xuH(G,c~x4MIS>/cug6dhC>-V6' );
define( 'SECURE_AUTH_SALT', '(+$Y` ^MyPGQ_-_R[dvU>lB0IQXvtg.PX8Mf_Fo`Ta/2Vi/I LSz.tE8eFE:7m!}' );
define( 'LOGGED_IN_SALT',   '[N.7o 0^wI](z2*/<s/W9X>S3tN5m*FZk -`lmm:2(NZCu${,2v)rn,#v]G+W@oT' );
define( 'NONCE_SALT',       '+T*M:=PvBwu#vKzc:%e{D?%NHG+)}`tIA9:oqS*vJe4BRNOH{_>=>MK6Hz]7pVZp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

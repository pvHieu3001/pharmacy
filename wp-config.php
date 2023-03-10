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
define( 'DB_NAME', 'salon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '7N7ApPCH_-5)EFXg`bo]fw=ZQr$S=D@=}mpkB-k&n^;Fl{at1+ C|lN_Ib(#@#ww' );
define( 'SECURE_AUTH_KEY',  'W~,pxU%2i`~QCV<E>4j]TCfIn_dIVp3~FVS!2_jbj>/V]qoo20kSTlPl*K4lS8j ' );
define( 'LOGGED_IN_KEY',    '+!*nfNc(cIA&f3aT_fc%mISsH`-Mx!dU.*M E$h[dv!8D&:!HPMwQ6?]Y+@/b6s0' );
define( 'NONCE_KEY',        'Q]HX`qC[iQ@&=~zIq~I4J G=42D~-#Qo>QY3t<St7&xtJM,+M!3JBefiGF>U:`WD' );
define( 'AUTH_SALT',        '$XD2K)EbjqNz0h0-LbdN~`3;g}m7!.NKg1hZw}I}Am4w(picCq `tWP#A8m-DYFr' );
define( 'SECURE_AUTH_SALT', 'B[uKS$BCOx%?U~ <~Xi;qZ[efV(%*5-GjSE!t:z n|!y/eA ;,ZlY)+])~1n6Z7I' );
define( 'LOGGED_IN_SALT',   ',fRZ{<!D56[PJ{!b%q6*&j,]>)rz^Uu F^%C@wlO^CeB<T3e<&]?zVz(1>DDqIZ ' );
define( 'NONCE_SALT',       'CS_= y9Ay#`_]V9~uB-?4yU%AOA_CC6y(+(zSp5nnb,4{2!lX4Lu3kEs2~;XxI`4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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

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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'r }mM|M`|&HNc<C4xXgy6@ypIroq1hd0mCHdw v:48a+VSUTjG/eK %a[7H+$0F,' );
define( 'SECURE_AUTH_KEY',  'eg4&QJ[@mR*D;p.<`pf}ac5K,]pu@tZsp~I) )12JgB>i],lehEBWK1B!t-nomjx' );
define( 'LOGGED_IN_KEY',    'k,u>s:_4k]i/8Lj,5fb7Da!2oY`b34T_:Ymg[yl*#hm_P gA8C!B)P.qgP%3@/9q' );
define( 'NONCE_KEY',        '{zxYr:)|KEVHA+BV%oky?h]Y@pfrr8Oi{E>)oQHRzLvSF(CZg9lqFZ4pN0VgR,u4' );
define( 'AUTH_SALT',        'jS0leX#thW):%A*<%ng/|E?K?tH{bB[:I~v/~Mv),ZK>dy:>BQ0|*(n5L<e7wlY{' );
define( 'SECURE_AUTH_SALT', '<<sY0xxp@;L??x3&)o K29FMEq@?cC>4nmn`~gR&Y}KIKu;bMW>lHNUe7w.<X{;X' );
define( 'LOGGED_IN_SALT',   '`y2?]iSa^Fxvwz$ADu7<YZG~>FEMBjiu%uI(Ax3@cn+Nr!=rJmX-.b=lJGiAM|,{' );
define( 'NONCE_SALT',       'ZC1-Y7-P]`7KDLXHEQN3hvytjT<D9%dJ_{ITkPToxSFu_vt.`;xbr]wRZ.kRUP[#' );

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

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
define( 'DB_NAME', 'bugagency_pluspaints' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']gUOZrZ[dG/7kv_o-sHRz>.UbR{%r?l*$_~71*ExFx:X|/T%d(%l.qTQL4JGsuA^' );
define( 'SECURE_AUTH_KEY',  'K>hWIxDP5OwhUJ,:73$%.=:lSrCjJ0T@[:xsDL?PVkG=H6kUx$[eULI%fU<A?3:5' );
define( 'LOGGED_IN_KEY',    'qQa&s[sMS:L#3zha[f$Wl610>c0umy LZb<HT]3l0ddC<2yG`[=fNMsiMx{DX(fq' );
define( 'NONCE_KEY',        'LcHvN,,W*/#{p4;*#f4pqp?H0JD|F!Qo3Z]bl4`TRoEMkv>l[rpM4p$)1^QUtq@G' );
define( 'AUTH_SALT',        'FI/tJ)YB#+Wi&ux(hr2At;PFQc%FRkPSp#4).z,4}C7$iA=Em6LiY?sU}E^5)WcZ' );
define( 'SECURE_AUTH_SALT', '/GpCTXcFd.lgV$nlh(ADa-wH{g^X<aGU;O<*X&2KVTWt0+~_*_={+3O+0uah*W6q' );
define( 'LOGGED_IN_SALT',   '`~sri 2`cY}BLuH[O<$La: 5t}`1q!?Uy)5pnRQ)p,I(w!;jm4eS-3Zb,OBPG2 P' );
define( 'NONCE_SALT',       '/9*PRLKsVQ:yu!;J+}de*[iGk!8=SB`a?!jinmWH:*L&!mqZ z1%/ZC3, tEhs3A' );

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

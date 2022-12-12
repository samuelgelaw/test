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
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         '18>yFL%03%pR}Y19t]U:}|AMA5@5M6~5GGf(0>y|rq`TZ$5u,uI61XF~jKDUfH3G' );
define( 'SECURE_AUTH_KEY',  'a:KVJf`({xb;sS@XdIb4q f_70 wEq;]CCz6pXOZnpZJHC./YM`x]tc$lLa*7b3p' );
define( 'LOGGED_IN_KEY',    '@t=y P|0Rz>0Ilcj/>>RGE] =EM>m5nhmX<N)- x+HG#CF$`_h4c2n+8vS:If|o|' );
define( 'NONCE_KEY',        'DKy@b(]I|XVXlWA@N^V&lm9J?BzePbG[R?fWL$s^i>(R&|`HAWNi0s^hOx0d9ZJ=' );
define( 'AUTH_SALT',        'EzABJ8*<Rb<lC*},j:/m3xfDacVRDRe5m3)VeQiLVE~1l^WQ%XqNgnMO?=.f3*Fu' );
define( 'SECURE_AUTH_SALT', '_NzC#IVKwbm|AOdp}893,4r| -&d2|2BM{ 1idyfti9z0!{hU1n:vBZ=)UEsP&la' );
define( 'LOGGED_IN_SALT',   'q G}>_XR:;o}S,=QdZ~aABjFQeZ~E5i024g{ju.Z|IYmEHT*4<y<1rNdSHzjOgwm' );
define( 'NONCE_SALT',       't]o>g|[`!.G-5j#jo&>8FC9am#]f3kV5,ZD4+I`bGX7owXg]UhTT.?dvbZbvsAV1' );

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

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
define( 'DB_NAME', 'revision' );

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
define( 'AUTH_KEY',         'a9s]qd?}t-Q|8~GQ[aGI9n-Fe/-d[4rHns{+lcZ$-~;$Zxy1|r6nm-#Mn*Y1nY04' );
define( 'SECURE_AUTH_KEY',  'hnw0HZmIogL=t;QA57JF|)1^szm(-90drn WfY{1Aa<fz*ioo22kCxz0AWzif&4S' );
define( 'LOGGED_IN_KEY',    'jx!V9kGtjppjl5ju`!:z?{Zoh@,Pm,G0VZo3tjJUEBCm1rgx0;[P~EMydzw#KcXZ' );
define( 'NONCE_KEY',        '1)e[o&7rb?Y}+rF|X->3N4WW}8 yq,I7 Z,7 WMoc|nthv:d]geJ`q|vI~N}xU1O' );
define( 'AUTH_SALT',        'NE{ dP{]2zeY*tL7Yi9^5qRR9/J,-#UIO*quG7v;tR?Qh>VT~m-U$>Rz?|vSEFt3' );
define( 'SECURE_AUTH_SALT', 'BM6e7~TaH7Mw_6hE=o= G:JY77f[g&Owcl96Rzkw&;f3Ru)=,f:$t8 ;| ,&b#[Y' );
define( 'LOGGED_IN_SALT',   'z}kvHK3BzQx.FmFuw3@Q&+xw#,$T`QT~Ph,^%uf0h>,tZxBUO/IxP5(F&RNOwZF=' );
define( 'NONCE_SALT',       '):MwQ4P-C;B[VRL|uAD,9i}LjM;Qx;~muy2j@J[L?)WOg?MvJeq3GA<`5*ehB0IB' );

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

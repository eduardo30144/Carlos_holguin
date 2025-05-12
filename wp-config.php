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
define( 'DB_NAME', 'prueba' );

/** Database username */
define( 'DB_USER', 'eduardo' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'yT?^`=pp)CqGt9IIw<DUKc7axDKb!1?rVm*4*Hq$sVf{R_;O/Q?$I3KW1>TfEK~f' );
define( 'SECURE_AUTH_KEY',  '#&jZTPt?`9DKyw=n}E@z13Vo>xtlyZ,`/Fe+BF,4>7(Vk$NdW!1l)J5qDwMHF6[;' );
define( 'LOGGED_IN_KEY',    'A=1[l6&R[U=g)A.I:+lAfLv5pV)/akVGkIX0a;B)a;9D^unH#V+mBef#H!n)9v6:' );
define( 'NONCE_KEY',        'Ve]MNF[A|^w]JpcbU8cZX&.f7Wzs&$3,&>:a4H5hA%~`}o3N:DX%aZHjb4UwEXR@' );
define( 'AUTH_SALT',        'nI9!d+NDnB{XT0*2D*P$Aa4?_Or~veFIu|fAkPdcd4nfo,J1b>F`WBH_ aUecjw[' );
define( 'SECURE_AUTH_SALT', '&O@jiD-i8VzhI2 FT0EK0,6vV_ oGC;*_$^#nw*/G6;tn~641z.uI9Q`|mb`q~M-' );
define( 'LOGGED_IN_SALT',   'J@s^@QW3oIj80`5Wb2@`VL]62_]<}Q KLY4-Hwqkz@xBdN$43&6B[aNG5`WGLR)H' );
define( 'NONCE_SALT',       '7X rkKZ3+~w66RMZ6.<c(]_>7a.Pv M`QO/(1+@oc@q UoO/MWnhO@3LaYzL4.R!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'pr_';

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

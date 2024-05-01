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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[u.va9f#Al9wr6n2tDPYLu=N(<uG4s5Bg|jwA?QrDXfp3dU:!Be2yPA=p?.4UHnX' );
define( 'SECURE_AUTH_KEY',  ')&ijb0mgOmcx/vRrF1u3IjL%+l%-M. 0ezd%u,U^TBMScF-K>!5 ]*vq^+UxE`a[' );
define( 'LOGGED_IN_KEY',    'kFa~[^OoIo0kke12qZK4`_Rw$/CP&51hiwLeqpQfUlJQM$Gf.xH_&dTDoJq1t)(>' );
define( 'NONCE_KEY',        'ATf%a/h[XF(yX{5N09FD=.aKTZ(sq!uK2K;N^SL{u1l_HV,|;LSyOAZm=(q9,6--' );
define( 'AUTH_SALT',        '%ONl:vR:X8KKL(ROx>v37h^:A7R^;=`8r3vw}`::T+; PD?Uo/rs)><<+_~8DHu{' );
define( 'SECURE_AUTH_SALT', '/-HJTC*)^O*q%| `k3pP6#gn>iw, ub@q*&^LsiAxD{X|,C)/r-F5H@][STSmQ{J' );
define( 'LOGGED_IN_SALT',   ' +Y.,zvvf6D`g{m#@mgg(UK^/01*hGOy& |SZv4=&ew24=Jy|,0l68%r;%]em4!&' );
define( 'NONCE_SALT',       'pF&=Q|Z^`I$J=dv`v^oku5&hY6|fe<wUY|:_cHbgV%uO<&jdU}0Fg-jSi@LJ`Q,W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

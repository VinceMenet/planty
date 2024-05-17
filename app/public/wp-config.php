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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'p[T13$OslB3e6`8Sqe7gw7Udf~QzW#N09^TPoWyl}7l =#V?1$xh_H+q>I-3.>0g' );
define( 'SECURE_AUTH_KEY',   '%2}[&4dL~N8P9aduq:V7BGRvH]]v41Wg APQ=>L3h9S ]D2HbpK{zjc|IyZLG-Ac' );
define( 'LOGGED_IN_KEY',     'G[~wItL*xN?b1!w$]Q}/p5>&O`B(9U=gXj9kuZn4#^(}rXF&9|JwkM5XosT8u.`l' );
define( 'NONCE_KEY',         'h`qt;y~YFy1U=OfHq]WoW_*.3K]~[29Yn=MFK[Hd05Uj.l*#:>2nJRs8C vev8F,' );
define( 'AUTH_SALT',         '`o|azRVHZXVA^%n%cGSk8+-5]CsQBlG-Z>OTU2l1g?*j{($)06{hN-!Lg;;qj%Z.' );
define( 'SECURE_AUTH_SALT',  '+jeHwm,/<(#(7#${<@**zPw@oE{CkNre# d-] =t-wBn%3KXllB66&,nhe@z-5sj' );
define( 'LOGGED_IN_SALT',    '8sV0!S!P,Gu&;,Ysdb$F<Kk;(/1KTt/}AX04SgGHf8L/Ii=M&iqERHO3Pb!wAh&f' );
define( 'NONCE_SALT',        'OoNIPj,sU ~.0F.l7aDAKSdu4?=!2Wi<aCfktbY1Wf[U6eJ)ysv?m,:Yn<(sC4wf' );
define( 'WP_CACHE_KEY_SALT', 'oVY?;&qyHw]Al(1>*Moj]2qM&o8@?!4rScj9fT]?RUH.UJnb4_ Ce@+8)/[I&R[o' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

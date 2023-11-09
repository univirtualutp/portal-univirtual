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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/**Actualiza el core de Wordpress */
define('WP_AUTO_UPDATE_CORE', true);
/** */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'W0rdpr3ss!' );

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
define( 'AUTH_KEY',         '~fj<XE2ble,T93{j};Ce/ rh]h>Cc$xI~,n+bP?3a6uCik18`kSbgxFHZukF+c&G' );
define( 'SECURE_AUTH_KEY',  '7$T@M0!D@.aBsc~9Y5;S|-NUIP)s^+7RYbSc>R={2o!)dJ.!vv^Z~cl&>suI9z*H' );
define( 'LOGGED_IN_KEY',    '2K)OEK8`FS!a70L>^Zbu&lz4tq8tg~Rc8-Ap;gdW*#|fz?;CltleX)l]ql8IuL?a' );
define( 'NONCE_KEY',        'JwX}))y2W j}p0NbeV76gn24?Df,Iybc0-2dCnz[xx6Ojn}Ra2~Z oCVRJ *q;*)' );
define( 'AUTH_SALT',        'ynln!m&]6=9g*r`lczr?vVQzhh<XXJvy#{9vV#WuvxU-RVzeMYJ#I]NFO$, `;Sl' );
define( 'SECURE_AUTH_SALT', 'vqf, GuW3dF!#;KL4<!`7kTS@=ir^S@c*wJJ|Re`/nqdH-QPoMKz`kaRC3}4XH:W' );
define( 'LOGGED_IN_SALT',   '7;zGv}Z>-isrY#fWJEJbUW]c w1oGdCvUnrbX%=gpi1#xG|n[?RuY]X&9*M$f8la' );
define( 'NONCE_SALT',       'rWl[05]hv(<sm:#=8XM<0jKjrPVF.|P#1G}43K5/Wh?7SqVbfzu,nuyG{{Ru9Zmw' );

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

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
define( 'AUTH_KEY',          '/ph%AwR^/PsjnTWoW24[5DX]29@c&2LKO@i 4G2Wx^k_mZ6c{^fMBUbr8H^pfDeI' );
define( 'SECURE_AUTH_KEY',   'gSrK$cf:/_GVZiyf:y7T@VEOB=~}x^`F9A=*2c7Qw|7<$[/Qnc$q|Ku/^!B]uQ6 ' );
define( 'LOGGED_IN_KEY',     'j:^+juy2|TwS:_rT3&Rt90E4,&.v8f4:|4by%^?RE&h<3FKFQu2umRF0`l?|6<j7' );
define( 'NONCE_KEY',         'm~,b~I~kcb6h!iLC~eS*qFIhmeZl2@/gOSY~?xA%.^;4.L@qeLU{U7W}mwS0i6B$' );
define( 'AUTH_SALT',         'M+&KP$s?t>)>xR~83djQ.XJH5!F^=7X~@Y0mKA]zWUzy)L*we;8p~9PB6;YO)M9K' );
define( 'SECURE_AUTH_SALT',  '/vRQT/9=g4e*(5,6M.FZ/60ddmnZx}w0P2j>mjNfi>PS9hCf5|wYf,?tj!PwLwca' );
define( 'LOGGED_IN_SALT',    '<a70o?Nyu%Ry1#u_:y{jab.0/2,T-mY6n=KD*PXr75K}<a8O2 bh@JB<t3+vW(FL' );
define( 'NONCE_SALT',        '=m.-spb8w 4vth([~0J%C:G:Du*aoF-W=3LD1XSg(=z](i!G{>m E<:@[s(qm1YC' );
define( 'WP_CACHE_KEY_SALT', 'CJI{u=&{^Q}-nE>h:p:,3a$L[KN5xD0;DCa1Bn_Xrs)zaW5&fb/-2$+J%#FN?skc' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'data-analytics-mastery.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'AUTH_KEY',          'F4nPDZx=]x-YJHH,Cm8j6{^G;qKWg_g#.G)X>,dBOTUYMT2`A-I`(yl,6[I{nWMN' );
define( 'SECURE_AUTH_KEY',   '&VMg$z_B8_]krx|g%I5H{5Ln3t<5d)6s5t3[8>%R>Q]/B#}=&I+H:e-a&aW1l4>)' );
define( 'LOGGED_IN_KEY',     'n[!q?Q^:bE:Vegi*6nlcF/AJy-c8~{3}WT$RBQ}/=4Cwjh]+P(JVFF`pZP?a&;m[' );
define( 'NONCE_KEY',         'O4dP{Nl:ep,lZ^-%$c=]nDpd,;0RAn%c^49e%gEYSUx 9<F,ljk%q9,/Dc~j9J;}' );
define( 'AUTH_SALT',         '7MDIq2wH@p|HL8#l*|,z%a>Z;i%^_z/3L>oK/,X ppA`s<rV-P7}3DXAI^]CL3_u' );
define( 'SECURE_AUTH_SALT',  '(A*5 {58F#_Z}P^62IUxb7nK*V4~O?6hp0@t`QPEl~/>iloPr{,V$jGV=Wsf0Ag^' );
define( 'LOGGED_IN_SALT',    '{AKIWpE.qhALT#(1*8z}-1y%^zpl^&;B&ZEZ)W[~BIkQ+G~u}V^Im?CG92ru(gM!' );
define( 'NONCE_SALT',        ':~ySE *(t=]ao*[8jDtYnZiV_w7%Q-M:!h776a2jGz@uza+:.!SA4)~b}f>nOWNz' );
define( 'WP_CACHE_KEY_SALT', 'z;F[#xyj[ePUg1ky7&k0uVwb#T+.Aze$dFq/5<$IkmB;&eU3UYPN##LP]o7rB<Ur' );


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

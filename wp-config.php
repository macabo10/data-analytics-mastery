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
define( 'DB_NAME', 'ml_course_web' );

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
define( 'AUTH_KEY',         'v[XiNc78%U-22m~h@jE>j|?d&osd,V1;)^U3!m(z{5u2<+CJm5.kgkoSLxfFreS_' );
define( 'SECURE_AUTH_KEY',  'DLxHdUc:?i?iC8t]RBBIl$94]NIekH;v&I@~:&6(:9%[5Eu3H/d{QLO~rNr^4Jj7' );
define( 'LOGGED_IN_KEY',    'OH<c:tuE<ZKg!-W&lQ~cW~KglUDjFK;o:Vk{kS]uZA8U,^vh t_Q~D!0Wi[BPY+U' );
define( 'NONCE_KEY',        '>k22>axen6-.MTD=v+^T+bd!7 #KcvW6$8j8C|!6^nIXxAbk(U>sz&zvq}<pLCo4' );
define( 'AUTH_SALT',        '48}5AKqs_G!+ocekby?uDPf|KOJ(Ad[Wx~{)Ew~7F,T)m;LScNBgoZ@nS7}ei*?-' );
define( 'SECURE_AUTH_SALT', 'uHg{~pu|K{cQBf.69ALCpVLUm^:x`}gAm,_fc00%&t,:i0eB($d70N>,T)fl?{QQ' );
define( 'LOGGED_IN_SALT',   'gy!^hHBF_I_3(g5##H2M M7msY,FmCJcLJ&Q_hC^1eUE|{|@FDNV2HRs>J^9jVdr' );
define( 'NONCE_SALT',       '#n:tDhB9[G]HDMG[M)%bjW9yj8d~_r1)h(:g0*P@Lqs<(=3y!OuNX3Wn(m^;^li4' );

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

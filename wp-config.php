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
define( 'DB_NAME', 'data_analytics_mastery' );

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
define( 'AUTH_KEY',         '@%`*H8h#)?l`:]Ue5}54eqmuYh_;j=Xy8^.~Cod{eQALNB<QGbjyxj03wydxa%M#' );
define( 'SECURE_AUTH_KEY',  '#7R9e8H4qO:ZNi:)`BvyD7 |IV|,S2xB(2!GNj8k?KGJ+]j*.cC9^)Fb[:c@w(X~' );
define( 'LOGGED_IN_KEY',    'gT{gklbDBVbj4r0C292ksEaSl>wXIU,ttkd/!8haG+pOw3t=eXSci}*Z==~YPp *' );
define( 'NONCE_KEY',        ';-<}L0ZWGM&.OxVvSy*S:-DZJW$beAsN/TWAC[C7F;=3|?1O^0qjNnn|ynoWs,qE' );
define( 'AUTH_SALT',        '6Yh$r(?gr[T[ ,xzO.A_:o&wF87BeRZ=xZenf~{pT(I[<LeU#m5x7y+7~iwP![<;' );
define( 'SECURE_AUTH_SALT', 'klIxV-{*,~/9g#tclZRWQy8,P-YeTWhq+w|<sfs&JDOt$/HM`9zh$]v)QA&BwSG[' );
define( 'LOGGED_IN_SALT',   '`JG{pS38W&zUHCv+>UfpxcjsYyS_<>7:<Kzls+!WboJTobbRI0a9[L6KG{8l)*eL' );
define( 'NONCE_SALT',       '3}eT*EZh^!{aw%S[U;-H.Rp3P|dYI&/_eDS&q2u8-Gj$^;45K:: bW-A,+fAacn9' );

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

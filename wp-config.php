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
define( 'DB_NAME', 'bd_ecommerce' );

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
define( 'AUTH_KEY',         'DkVphG]8sI_18t3|NQ258-T:Le_)2lfYVgw;Y+Yqexxm3wl>NmoaB5X.o}X_zDv5' );
define( 'SECURE_AUTH_KEY',  'f{kCrd/5qLNyKqO> L-^z-8DUymi)Z~7T?.nFfU0c@2?xQT]ON8:?w2/RND7,lV#' );
define( 'LOGGED_IN_KEY',    'q 81,>d.NAOL`YBN)C%6U:y2F;F7i|~5/X;/fK!#~E,!s|9 c ^+y8K%nFQ0b3U^' );
define( 'NONCE_KEY',        '.0;@B}7=b*9q{F?|>6r)1Y_Kf>AnPD<+C)i9 Y=+_!9=3|9xS-c: 92]g6;!x>a9' );
define( 'AUTH_SALT',        'Sh}jMJ53I9=C.VMa1;@<Rp+~ceN?%KP4lp6z9mT-xVYF086wbI4SV1V(O1Ar9[c+' );
define( 'SECURE_AUTH_SALT', 'CE?U:qxERMF1JNnx@=JhsOh0|^JhGQ`>MF3$/R%{KP{/Nx3P`Hpl!7 ;n{C%tqH@' );
define( 'LOGGED_IN_SALT',   '9iwdc=yOe<y$6ce!|C6qN7~FrhHNp+S3{*$kig3:0KB~%(lO#DdbBBg%4s`0Je1h' );
define( 'NONCE_SALT',       'PCM/c}Yre{bHsmGi plB<h6oyMCa9dW~1QuTW`4)@Z?:@SKyi8W7aX87>du/ma$-' );

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

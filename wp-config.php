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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '`/-7]Tv8dK]yi0Y).)`F7tK=Yg=dIONP$WfuRSh$vng:mix|(#dzA0^*{0}<}!F1' );
define( 'SECURE_AUTH_KEY',  'BM:Sv{cD-U|A[0QMAsiGyeQ 5u)EYD32>!$ng-|UaEGM0y8;zjOdQ1jW2tZj<1C+' );
define( 'LOGGED_IN_KEY',    'YUhpvu$3R5k8#TmX/}N6>Bv{i&u]9M`y%;`(/U9][yiCYL9,)%Y|Oq[VQVMcP-!Y' );
define( 'NONCE_KEY',        'V`/)QXuL%Wvxn>A2y#GuRxoRMO=m)UAv~98dU_lzsxX58Jy(=Z@fM&^kG=|GP|Cx' );
define( 'AUTH_SALT',        'ytbAStmf%NYt+.*@D[]{t#$TM#<M2_mbxeg+?#yez$%A:29jpqX:R{J{{Y],;Ndv' );
define( 'SECURE_AUTH_SALT', 'D_}IxZ+*ZX}oo=lSD 32KO<Bl/MY>8q.37!.$x[wq82<w{N8B9aAGkkAs>]u8pzR' );
define( 'LOGGED_IN_SALT',   'o%mZUO@Z6poS<`kZ*}8&02Y|MM4qm24fbA=jIS?LNdQxW9qJ#6(g)`Wtm^k^]T7q' );
define( 'NONCE_SALT',       'Y}r2}k_mx8,;tiH}[.=Y^nLQS9<hJX,n</r$k&iuQYqf%rc0ad`%c^Z#W%rpZz7=' );

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

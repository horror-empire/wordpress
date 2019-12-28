<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'horrorempire' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WQSajHnG!oF$/)y3k{!*.{qC]sCkHVHs^.f,*7Lal?wk$N Viou@3ks3THo1?KTD' );
define( 'SECURE_AUTH_KEY',  'Q94XVb)P+C5@Wc]@?De.@_H0gx3E(GbF;65|IW]YDfo13ZC ;eOe:MJkTO{W_wPb' );
define( 'LOGGED_IN_KEY',    'aqX!z9x8u;J^J)5Nb1c$8@$EwDtPYCFM8BiZreTP]eD68:nGP`)bg~v{#VlP6:;i' );
define( 'NONCE_KEY',        '2nVqwitNF^:nf%f?oq5xcx]+GBO?O ?k-LT$le| b3]m&{~}UcW<R[:W,Lc@nqV9' );
define( 'AUTH_SALT',        'gE4,9<Xw`O|12[>wdIFJ:]Kl @YkbN5]5WV~>QOFHoi{EowsB~[B.`_Es]D-jFmU' );
define( 'SECURE_AUTH_SALT', '~>m+7_yH{:mdZpQ9!mS~,]{x5UeH;].==G89bI4f>{OE!T_Tg&pv+sEx+k~k/KzI' );
define( 'LOGGED_IN_SALT',   '7F,yCGKJg^i0y%2,s0|Fs(MLgW=<d4O *t2v>.tBWM%0n3Co,`@%6@.ZO.Fd9<e%' );
define( 'NONCE_SALT',       'zLaVH>tzL-~vNpF$L +X@0@R(b5en.deX];S4q*q%C/Z3<vfr~qERcl<{W64(/oh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

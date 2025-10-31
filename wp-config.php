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
define( 'AUTH_KEY',          'z&ll(pvRhuAR]_[qunUQO13US =,U!<QOv4-z3ujC1j.= )ezkkMG98Qwl^)L{@(' );
define( 'SECURE_AUTH_KEY',   '}<_:8B4I6:sL]zYO/ZK1|E?o3])}H<O(d=p|ffYoU!i3R-)L;TA&2U[=e^s/d/Bp' );
define( 'LOGGED_IN_KEY',     '`gA,7U8N~xZg#y|)*~!)ex(DxkzmQ*-2MIn`MCCb: o|P43w[ Pro<qeLO=*8AMk' );
define( 'NONCE_KEY',         '=50C#B7uJi,Sc2Cc4!:eWT+o0/xVVM99NXhOGQrokAFG*?Q+#Mf4aXA8)tQ?]^OB' );
define( 'AUTH_SALT',         'N1,u2E5$6=<?V-HQ<C-h@Ly)x6eJ&nJx4(nF!tJ`%LE0l#xq1o} GI4daUtJAZM-' );
define( 'SECURE_AUTH_SALT',  'Vt,dv*S=hW&XQ[a$vx{_df|a(+RLbXy9=qX.ArGbBtdz0!OdZ%&6EODO>VYgHJXj' );
define( 'LOGGED_IN_SALT',    '%9xV.]1?K1)#kP9Ohl_y_2!@Ck{D%AH/l1@T1BY!,v!7SMZxFg`IDB;zv#6}7nss' );
define( 'NONCE_SALT',        'H>-!r45PMW%:@beiE).CSn3dW;12N2%Toe(dNOo8h^p~Lq|?qlwJ11#86|hnOe1x' );
define( 'WP_CACHE_KEY_SALT', ';7!c:M+G#N|P5:|*2_zFD6?ME3%/=Se#xfe_.0jDBBkyNaby-i21/|+83JU}DP*x' );


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

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
define( 'AUTH_KEY',          'o3~,nv<KlW*ACHHb1_h/AYqM0hsH*MGMsHY.c:)C#uKn[g5]m/@uT}fS=02jL/Y%' );
define( 'SECURE_AUTH_KEY',   'K|::-BHw`i9H0[EpH*+AG{#SJdyF#5O+(=7uQ4^oXXy`E2a2*H7{k^c2e>p?O,>Y' );
define( 'LOGGED_IN_KEY',     'kWM[i~H8^q@5Yn^Q4,1+$ZPD}h ^1oK8SdSZV:I)o)p141mi9IQWPkP5&45JI$>n' );
define( 'NONCE_KEY',         'IfrO#d&4djPRt=!Hgkc8eq8-0JBB^]3s=5wKsvq+M-g|)r)m-DIQdbUdk|vrI#jl' );
define( 'AUTH_SALT',         '(i<)4WsHxt!*>JI)}:b%p>xbH@HH_Bp/82Xvv;np_Zf/8[TeJuU3x>EPQAtH}mTc' );
define( 'SECURE_AUTH_SALT',  'ERaomzYSHN5~mVO|MlPAKh|XAyv>s*I!qZd17?CC%]m;YrtN^z{ReEP|m(xL=>~4' );
define( 'LOGGED_IN_SALT',    'Pe na;@k*N|~)YYb*(P9(}IAz,E/pL8uiuQ%E27EOvYtk=&&`8[`r,Kdp(f8*%(r' );
define( 'NONCE_SALT',        '2Idb%p#Y1ZCT/K1zV]BhvU^b)v8X)9Ly$JhPHKD3=p+) 9y0h6 SoNA{kj4m+Dl!' );
define( 'WP_CACHE_KEY_SALT', 'h+cQoso?=T|sM*!PZg_VyveOjw!RKC8Lv&z$!djb)}u`)5Q1gf,AnMVKpS;g:Bdr' );


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

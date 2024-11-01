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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'msp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'N0MuD1k-2021!' );

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
define( 'AUTH_KEY',         '~+|GX-=!3rW[;,DiZvuQ#,]h;tkrw)UwWL5:b<[o.`y=oQ7j<smYycY{$JYv;gzm' );
define( 'SECURE_AUTH_KEY',  'YZ$g~Za=bz7[ZZa}|Wo%(yyN^vqwC#@]_w4t`7{*[ Gn%-5^o+o/1;Ze0QuLlbo?' );
define( 'LOGGED_IN_KEY',    '9Iw}m}!5;9RG@KvGMR5+62k$/.S(tTI}$3pY[2@-e<}[)D8&)G63O+_({x.*,{qn' );
define( 'NONCE_KEY',        'LCItEp0K;Wxrk*(@4m|UFipyAL+D-MaDr&>[Ho6IgHy vgom)3I;qc(s]be]T-Q)' );
define( 'AUTH_SALT',        'F0Mrhh=}7Y=x%ykn%E#u4K>Zd1eB]ng2SdECq<&3/n^<ZMU<},~^48oe!w$qBP+v' );
define( 'SECURE_AUTH_SALT', '1)2*j3i)e-R]G.#K<+bCm0D3Qi=Pk_]TAA6EK4/vh/B)gizW]UG[6.pK{4@cfn3%' );
define( 'LOGGED_IN_SALT',   '>oG[C[`1(oA30c%#rfDG<ct)T_}e+q5!p#c:??!NEIuby]IoDL+X)CfhdV*?bYgZ' );
define( 'NONCE_SALT',       '|5c*@ke9~Wew6W*b Luh,s(QfTA?<xn=!vK,Xdug@Iop$7$][CObw+XBRYN*!>aX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'msp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG_LOG', true ); // Menyimpan log error ke file
define( 'WP_DEBUG_DISPLAY', false ); // Menonaktifkan tampilan error di halaman
@ini_set( 'display_errors', 0 ); // Menonaktifkan display errors
if (ob_get_length()) {
    ob_end_clean();
}


define( 'WP_MEMORY_LIMIT', '512M' );
define('WP_HOME', 'http://103.101.225.146/wordpress');
define('WP_SITEURL', 'http://103.101.225.146/wordpress');
define( 'SAVEQUERIES', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

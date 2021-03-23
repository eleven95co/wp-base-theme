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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'velmster5' );

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
define( 'AUTH_KEY',         '1*;/vA0J;~IwP:?eLy_8:v,e)?n~_%EN} QY24A+k>5oD+,~@& G%j|$>)pkBq}9' );
define( 'SECURE_AUTH_KEY',  'Zyl/%ZU1GF]iwW-SfP_k)Z2cx8FTgQ[7n-Gt#vYh2LZ$?cx=  *JbLB2>DUgUe--' );
define( 'LOGGED_IN_KEY',    '+ IyogB+:&RPF-z|C~&Fr4vWiysS/&3 v_~&0aB2jBG2GO>ak(tKW)%~He?-iPM/' );
define( 'NONCE_KEY',        ';E4k[e84oDL0(HsH< Ln%:E:v6(]=ux|&N5$# 5D$6Jm2XWo W7NKH%hxD1ZG+eD' );
define( 'AUTH_SALT',        '<e8!;D7%r61wN90qcMS?nxU*>#tJ8VSFcV1/JP.V[mD>=4nu6Rhtc-IVTtK6?jnx' );
define( 'SECURE_AUTH_SALT', ',Y<T&DHxj*-NiT LuM_LQFk0zm%DiydFpU}b}^K/0SSR!~t2mH#-G?SS<&E^D)dL' );
define( 'LOGGED_IN_SALT',   'ce62]~F*aP3`iCx0^Bgx0Xi=>8?DW^w9)jDS*8c74y<{.YCs<lt.{>p]<}#9u;a#' );
define( 'NONCE_SALT',       'NF>g[ut7*wl,99{2`7@[s@jhRd1+y10v<Re}g_)x2T;rCC[$7w3wne,UV~fw*g8 ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

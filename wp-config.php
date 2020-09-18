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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&(b{nT@kv^{{TuYthht?OHT?eZR${D%JNJ*arl<4nIr<i*IQrrHOKAMclA<,z@}y' );
define( 'SECURE_AUTH_KEY',  'AU<j?o^dDjGU;Icb}dZJ{cbS%v#[8/e(/5LyUo.zhC=`$Ih:&+2G^`LU9UsW9=?&' );
define( 'LOGGED_IN_KEY',    'X[p<02C=?|6|R(s}PdL[wJ_{`(#^J&5E&!Es5l4pG|>)_YCg4B[V??<K}n>B]JBV' );
define( 'NONCE_KEY',        'WX+&Bf]!%AFo/n@!UI7}t3 qqoOIaL=q5C^mXU$c<<<&-%9OS j|F#1ecXc>GRxB' );
define( 'AUTH_SALT',        '9+Ic_9Vt{q`|h>vu74RASaANO,q;c3g%{Zv;Z?|Y5`{lM{2v&.cJ9s4 0o)OUIuE' );
define( 'SECURE_AUTH_SALT', 'rmer>$^mEO]]ej^+jM{._2S)>1!,W^7J2#ay*j3_S@Ob@ +G>[by?yu5A^A)s?ir' );
define( 'LOGGED_IN_SALT',   'cQ<XQpYM2}sRv`TV_Bl.H_|OV3mD>`tm%`2ez/JlgcT`6/-:)vu@ADH4#[d[*&!O' );
define( 'NONCE_SALT',       'LL]K|ClM~xUP6+j)ANb8DW/F:@J@B}Cfg nx1,pf$t4wZ!3!:R(a*5.$gF>Zoz~8' );

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MyPortfolio' );

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
define( 'AUTH_KEY',         'g,@:S)R`$Zq4ay&u#Tej_9jy3o+C5d;;Nk+kxBECWS>jOkd~n&n[._yT{Qev/#5/' );
define( 'SECURE_AUTH_KEY',  '58^aw[=<H{f<9Cr9~M`=p|Qm/EFSFQCz7SIX(_e|~ %6o$^m6vV(glsw4f/jT(Co' );
define( 'LOGGED_IN_KEY',    '&-!bfn!-$Ec2^dj%)B=^EA]}ikTr;ynhh]WQl24deo9c9nPbu4O8C{394pDw*tzx' );
define( 'NONCE_KEY',        'HBlY5d<6QMrs.*X}UO)_Gm3`s*[Jzt)vrnh!{cZ&x?+ *^pd^ku72e]1aHg!?EVL' );
define( 'AUTH_SALT',        '^cAO}JI{lX)T1LjN42ZIWDL!RxPS|YMOCA/^M^oo@uP4feAG1d%A)D%lVrCgC6Zu' );
define( 'SECURE_AUTH_SALT', ':=dg;+L>R=?q(6rO/[6UE#1muVt4f;|L6RmNAVA|q$M=7-5B1Gfhn$a?=8Go.jm!' );
define( 'LOGGED_IN_SALT',   'nSG2J<ok.+,e+=S*3Csr<g1ob]DYZ%7#Y|YV*|{h|N<As/Uw@Jgy:uscIrc*R>j5' );
define( 'NONCE_SALT',       '%Wh1^v!Owg=^YrxTrug>gLM-RrLL-hPgI~wNqW`r*X&miKrYN}xVIj2EKg_9]}Ex' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '$l+kKr*R^ErOL^G{<=Qq-td<WQl#-6x?>(g7>MJDxt~ltF:u|f=Fbo;E^ggM|:Q2' );
define( 'SECURE_AUTH_KEY',  'AaWeWo5/OYG?_{K`]I~J@_crEh+AE~qeR5:3pdK0AqDJn4F]995BGfi`/ *TP?@Y' );
define( 'LOGGED_IN_KEY',    'pK/%f{iDuL2R^u31L)cnB<si?1:,tq:` apKD3.d.:>FD#un)1&-c|U4GlE%b^X|' );
define( 'NONCE_KEY',        'u6DzD@!mNP8>]2I/Q`_!XG.m(zAG?p{l.^Sj <hFv(iLs,#WH87T4$;iBbjIEt`*' );
define( 'AUTH_SALT',        'X5weV(WCu8hclV|^_y3DWUZ.2.Wj}gk*e228Tm6h_4Kd/.K55hW5X61_cX1 B5@I' );
define( 'SECURE_AUTH_SALT', 'wp0qADP+e<0s@6g=,@@kKMl2;JrJWPw,Z@p9q4tjxu}]x^6^1IzYs=qtf+yu|,;A' );
define( 'LOGGED_IN_SALT',   'Fuu !/YM,x]!3`=[m^2jOG^f-]3,bQ_$t;uR}94uoib?;u(JMA}hoD<h?f,@x BU' );
define( 'NONCE_SALT',       '=}MLGL:scs4J;QmV;5qKTwlL@9_9~Xo{9lm+yI,AAPQ}4?2Rw#=L8{nd]ZBBA,:a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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

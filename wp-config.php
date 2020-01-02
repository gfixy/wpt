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
define( 'DB_NAME', 'wpt_db' );

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
define( 'AUTH_KEY',         '}?JJdBGy/@-#+bhS+5o+.XPDn^f+|#GMvu|F/?#YH;h+dM,xQaskW-`EB[Nnv|#X' );
define( 'SECURE_AUTH_KEY',  'mo;H! L1A%iZ4JNQ_IUS*W}G~50^ef$nDa8zzD~8= ^4A8fNkQO+xF.Ze/}nia::' );
define( 'LOGGED_IN_KEY',    '-J@q&h1TW@}`]u;$FX^2Aku&]{b2qD=A%7.6[*a9GV=-o=w:fD=OmG@E}trmJpc7' );
define( 'NONCE_KEY',        ']8o4,_0{M$I7a*P_C/ZrcY#+&hHBXQyE6eOdY,v5$Wt dpd!c_GdL>jqv~{jRfaV' );
define( 'AUTH_SALT',        'r~H3?zY5>Sfq-9!ZXNg+XmhF<^Hn&`^W6ulyeD,7Y|]i<OA8y;JQy~-w%KXs/5K)' );
define( 'SECURE_AUTH_SALT', 'q#cF-|ccI/$H*KT#Vl5{Y<:y .nd+o[z$BW!LFbl]c`k&Od*$Ha(Oku)L5_@v04:' );
define( 'LOGGED_IN_SALT',   'b7me!8l|-g|HT#,NuQ@mbd`(|=b8H[S8|=%x0<SA5t!!D_c)^n@EvX_+]Mx hKPJ' );
define( 'NONCE_SALT',       '*Z:E&J8?2XaD3,al=6vGP%JptIT36r*/{C2HR%RDAg_wQfK]+UT|HWLvgAd`%9(A' );

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

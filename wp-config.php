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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{+75:5*0Deu++~&^.!/3>Nb7kh(mqER^eGd,M5^mGmg#2t8oQCC3>#,h,x8XxwTh' );
define( 'SECURE_AUTH_KEY',   '}5(1(3.[iXwiW23a]K|uTW|6^05*b+97:-b77UTQw.)x Y[av1Cm?XR#/AlA2*0w' );
define( 'LOGGED_IN_KEY',     'x~W4vyK8YnDhFFG5;c5E`*PIb.wIOK&r/]0ms{Zg~10k+^U#:4jEL]4$sI]zhsg0' );
define( 'NONCE_KEY',         'f6.|UyQvm}z2[e[nBa^CUoKz$oh|TCr_!Y9cse&z)H{(I=JrMR#zAj>D%R@lO87#' );
define( 'AUTH_SALT',         'r,hk69{o,@1o( )( aR_ctTJ1fK`|YCZG,3(`mvNzPka(`u%HE6V^:PK(JFATi5~' );
define( 'SECURE_AUTH_SALT',  'ABvk^:ZUKq3wjk>,x)]h/6NWzw-ZX&Xf;O=qq+RhC$=T>{=nO[CUK^v.hRB7BC3-' );
define( 'LOGGED_IN_SALT',    'sQo]`)xz}E]#_@pJ~+ O*.yd+zy@L.aBk}fK(( FT;WSs#B=tK9?(8*UP`-H%4jR' );
define( 'NONCE_SALT',        'Xd H*j_ih/l|vZ=U0k~R?A#g{}+=cmEnvp;p0Sy$qJHgJ9xT<rb}IGk$p1t06kJ#' );
define( 'WP_CACHE_KEY_SALT', ')aKco92uXtr)`ge]8=12c0axX[b#Bmhk`VdOE#c&OWgcmUVa{tyZYgl,e*3_:U<|' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

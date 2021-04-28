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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fpH|)DT{lwem}bU~Uk&:0U{bK[qkX]vL?fegDG*}*T7rZknc(sJ&+7kygQ4;:5Xo' );
define( 'SECURE_AUTH_KEY',  '&;8?S@l4J?U;%xw{keIqm9],2/*wh,fo vcp;WPjJ%JqdsOL;U_>x{8{aoEyn_^#' );
define( 'LOGGED_IN_KEY',    'Yo}ttmA<ynPFj~.IG3,t!y/P.]w5Y?b`.@yu ANmf+5Vbgm5hEi/Gn!STtQ|i+nh' );
define( 'NONCE_KEY',        'ym)6I>Y)GHY6)#5z|=o4XOW_1KB_.ouO_4.>K}E#[,3`$%R7^+yPDu}Xt5O_D%u5' );
define( 'AUTH_SALT',        ':]e6zmQ[csx2pE8>[R}V+c6g?TIbdp<w~)>}y_<3b/J{&a.A9Z/?wEQv@y2~t>ep' );
define( 'SECURE_AUTH_SALT', 'CITX]2f.i8`nIly1ik}]#6]p{P,+}p`|}qM?HhKtl-s{FEl;xiTBpsT:l^aK#}K4' );
define( 'LOGGED_IN_SALT',   '@@vBB)v0Yw>sXQR@-r[r~8#m#Acxmw=C%upt$hGqynb z;t)tq%NWNI0H&c(yd$%' );
define( 'NONCE_SALT',       'jaR:i0H)<CDd<e]hIRvpc*T6KJpvhS0KFU_Gmp]7e+J$Idk*+d^pC7Rv}=1%z9n?' );

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

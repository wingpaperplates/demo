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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':`rvK8kUkt;HU8-A8LnoSh3T7gA:P#^wAdz5p2$i?885[rxe^p6Yb)-M]T*3BF@|' );
define( 'SECURE_AUTH_KEY',  '^#X$nT-z]O$u$VbX?KP*N!1%1~ETeGY`cTta/2G!cU&,/ECEw$w#,%bc#UDss_Zx' );
define( 'LOGGED_IN_KEY',    '`s]7<h`W>k3#2I;Bd ^$3?/jh(26m-,7NB%+1!G2Z7w*6gV8?pck~ 03*.C(Xrir' );
define( 'NONCE_KEY',        '*cR72,zJ+n!MjY/U#mvGG9t]_Ci3q)T14|U${N3TT.B2Mc,0TI]Yw+4[^Khk#R7T' );
define( 'AUTH_SALT',        'XeoGJ@[,#,qX9PhKiU&i[FYW696p9:aS7=ly%><FZR!*FVX)D$,z05NJV$=O]U?%' );
define( 'SECURE_AUTH_SALT', '^aAY^(Be!_4=iqnZ[/f]D+.34XOolN:_T=HhdKF`!~0)0i3/x*1rVPI=?y3s!oXx' );
define( 'LOGGED_IN_SALT',   'Wt];!(#F>kq;<0nmT9?z|tnxbP,D_RD~$fWXG`GpS}+Yg#hC&@?65s1m7S)3=TAc' );
define( 'NONCE_SALT',       'L-9/ G:](itKfnj| Tk>XO^,)o0O.%DT${J~g6+0x5_O1r+]=YxNW8+KaE#bBsga' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
define( 'DB_NAME', 'sample' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gumUUz~-)E6F?cC6j+^qmw*6#2]h&oaWBS=&rNM#NqaMkCWtv?48Z[EJ1VpWWpm9' );
define( 'SECURE_AUTH_KEY',  'm|izz(_vyeKyqde!Y}#&6gy_=}5D*K`9yw@,<0UdlHo;W{6czx=Z1#^1_qfrQet}' );
define( 'LOGGED_IN_KEY',    'IKcYJbY}m`^L<7bQ2M!fs(Fx[q{A-h5HFa3u%f,f(puC?[bXgN6lY*Ju{l7uD4nL' );
define( 'NONCE_KEY',        'QX[B;}jVP~q[}$emjT}oIX;o3aseA@xlxK..^PpEe[<$o%iHygV noh+ysC^LP)`' );
define( 'AUTH_SALT',        'G?(5L|3I``C}8{_PuF5 yiT9I*ujzU)U}8~|^*#mHupF?S{|^}6vmt=~(N={JTiL' );
define( 'SECURE_AUTH_SALT', 'nl=yUjaaDK_~@yf{hDb-)Vcegt.`(_}~*{P7K1Snlt?LK0#w{H-xM)u{HXPp+B$m' );
define( 'LOGGED_IN_SALT',   'O~-XXQmQA?voMM~a4jd/ANnoK?&f0UYmr~#rx9nj:E@8ZQ$Od!>U2tJLT~p%Ay73' );
define( 'NONCE_SALT',       'BzFpUm4i6f@sz!Om`O=$o#?34DFP&-A0$/qy8c:_Hv|Yt1Ax6&bb^Q(5RK4jqq*5' );

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

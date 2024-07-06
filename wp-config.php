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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'citd' );

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
define( 'AUTH_KEY',         ' k^G!I=6nxture@NZpbKw|$VFrs.@=FEY}kpf`!f.(EaRw)RHTJySxJ[pKZn:cRG' );
define( 'SECURE_AUTH_KEY',  'YWIXX8_TQwAJ$gq!!`@BA0J0]l9p3(2T,=qyD=*NK2@|W5#p>?t:_U=T2iN`/aSI' );
define( 'LOGGED_IN_KEY',    'Ft8<8FF8Ptpha36JhF 9$YRsw0(Iez,Tv}W3=$t]n1<r|*83Z$ 9*Uy~H&4.q5mL' );
define( 'NONCE_KEY',        'o/qqNt/V[<%Ym>2:``M/$ywW<A^VE]YPx*;>C;f2G0j~ :r-U.,s|j~~s;9Hz)NH' );
define( 'AUTH_SALT',        '9[K|d1]_wzw%]7HB?P3bN*lQ.?.f|AN?ue|sI` UA63PkWWk{ykcR9/N`Z-x9Twu' );
define( 'SECURE_AUTH_SALT', '9W(9VOUbWT-{Op;L,C0aK9ABu8V&cE2V*Wde$)5]XWq#3ARZ@a.sq!<q*3TSbyfG' );
define( 'LOGGED_IN_SALT',   'vizlUMMj!eVsZhaxsw[#Z_u;0j|h7t2>lhTqR56Cxhz@Dm=*k]y&VIY T~bz<Gr:' );
define( 'NONCE_SALT',       'r6P9YUUlsS.[C<%5`a~)RWr8rQG(j#RwdhJul3O?ktVOF@zVep4.)X11Z-pIqHe-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

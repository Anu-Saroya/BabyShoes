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
define( 'DB_NAME', "babyshoes" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "Aton@123" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '?a:ucts~W`{;^O!8%%4*2o$9aZ.hHUuCIGeR5):$DbRJV?7[F6!:z!@H[Qn?5{m2' );
define( 'SECURE_AUTH_KEY',  '[4KO+0cKd<b(a#y:^O8R$}? @svvBW?0fj2l11426Wkuo_xTJ5O,62Kg:18n FOj' );
define( 'LOGGED_IN_KEY',    '+o*YxwrvJf]UH_5QEE@GB0[2@RYhzP;8Cv5U0aa-hc1tQ$#tpPbtro_glwF4ulZ9' );
define( 'NONCE_KEY',        ';yC{haHF!RRjj&NIDU8bFr`98E]1:4D)p{(0!a})&A:%hBg*n5=w2Pe##%2e<>Aw' );
define( 'AUTH_SALT',        'Ue!#Jjn)TzF!{+t}|)~oO=nF&]=8LYZ %a2b2fwTsdH!I7YQR.h&S]I=;deQ44IS' );
define( 'SECURE_AUTH_SALT', 'Jie2+c<vgXw#,xe}lAp^ucSg,42TQk^<Nc_8G,r[m:YhD`ch#%o5l.[O[7Q+-IO8' );
define( 'LOGGED_IN_SALT',   'qOaq)NJQ6`jnd3Tw[7[&U)s;w@$l6/cgj]bmJ_Yw%+RqQdM<yIdL<eF{{s.^L(qk' );
define( 'NONCE_SALT',       '4plG1Q}o]ES:9E]<e42L/H)PLh`>2ykWIHVd2e0*>#wvdePTPI[[-9^]rB;Fz`dn' );

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



define( 'WP_SITEURL', 'http://babyshoes.ddns.net/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

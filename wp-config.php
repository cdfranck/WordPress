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
define( 'DB_NAME', DATABASE_NAME );

/** Database username */
define( 'DB_USER', DATABASE_USERNAME );

/** Database password */
define( 'DB_PASSWORD', DATABASE_PASSWORD );

/** Database hostname */
define( 'DB_HOST', DATABASE_HOST );

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
define('AUTH_KEY',         'Q(5nZJ[>!iwX,352lcA++31qDa3zoYH-V--:XZ1$Yhy]n43hvjNO_R;Y3~bc=XMm');
define('SECURE_AUTH_KEY',  'SGFKWS/{eql#[:QQ0g>@f2==GXC|{ekebJ}t9TsX4+|H@Eg !+TggS89R)SMqjA4');
define('LOGGED_IN_KEY',    'R,V~e#y82hY}A_osy/PiF`(s7rcKM^tEnJ_YZ8Dk$`!a0@ n9-QCkg,b-LyWSWKf');
define('NONCE_KEY',        '*MS*7{(Bj@rCeq9q1O_![ZP%uDQMOf|KtX+y6@zP:rx]}D+,#}/c6*s`S)HO:>Ev');
define('AUTH_SALT',        '2z97{oMhqz~+Mm,Y1HwqBPv%)T)zL4I@;}sY/>k)Fu(NF@gv3L9<B}x$T&0d@,t#');
define('SECURE_AUTH_SALT', 'a%R0m~-7j>4iI@JNksK*:/CkSIMnuV6G|4;~R!!8]|,:r$wKA>-sro5sFkAE!w-+');
define('LOGGED_IN_SALT',   'sbF]:1ZEh1PJlKTRAZ5KZpVy%8ht:hh;+T88#Lv(*0s(Slk(/wNx;8d?5}m<_7)F');
define('NONCE_SALT',       '0_r]7Ab84zay{Ycu< xFN0zO(FNG}d<hy^$tX~/6`%]LYLD`;9N5(J+7RSm}WTjY');

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

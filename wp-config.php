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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'molakefa' );

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
define( 'AUTH_KEY',         '5,cu+Z5V1(/-:;t?A8B^9R!b}4^G92iV_fX3]Rw<_H#CC_+I<vgJ.Tk1t)|+n([l' );
define( 'SECURE_AUTH_KEY',  'E%PJ3QYlH|9jB*<E3NYke&f97b3:h%rU31[KBWe,gT %>%a3_JEUCvW6bLe|8-#s' );
define( 'LOGGED_IN_KEY',    'd:bRe~t1dr$*??hUHMY7E2vRJ3R5BY9}R~8dGyBqm?}Ozc0q2Qpg4FhHRB.BfV#o' );
define( 'NONCE_KEY',        'A3Y18{l0fQ,s?Bn*UABNj{u#(*_Q*7ffAS!+&AUe,R:!mUZ7DB6XX6P9lB:4m|0j' );
define( 'AUTH_SALT',        ')~)#^cHU9c.D>{5`b^]k@RzDYNtqoqyznc7~OrSjXBAU)1<&<5AoDPX[j%29ils?' );
define( 'SECURE_AUTH_SALT', '-;ko;QldinX5tyf*Mft6L$LOd+U18^ICyv[T>b[%k,[!So$/G3Y*g[_e)wa=4)T*' );
define( 'LOGGED_IN_SALT',   '@O=C9Yq8fl93>8krrTH_d#)ik6yv_JKG+7FhT=6t56O`0BP1?Le]<g+Y_~M>p,0U' );
define( 'NONCE_SALT',       ',JN=IhBRG~5Qx%!q^)3-_/uW,YO+n*m$NwtRe2ZhgwNB?`Fa$}pK]m(vMd[,$[)*' );

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

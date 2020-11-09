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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'jG67E%dqT0H~#draYX+0kA_97U;8.Vg0^1W?+>J>a,xM{~},1ri7>YDikpH%k}}n' );
define( 'SECURE_AUTH_KEY',  '46N(,}_Ew|R@E`U6uZHePUdv*AD6!x-3i>gW`RF@@FXWyQZw=Jy0A0l%~{N5*M7h' );
define( 'LOGGED_IN_KEY',    'wt4{TomoqC3ri yJX>r2g;6^c_=5^]X[O#u7T=@;T+xfp]vO,j9-zjw.vG| @&W9' );
define( 'NONCE_KEY',        'UhGz^nidJ*#C[#X+7m@3V3`#1xm+KTIqMo[2<>+$E62,2e6`8 ZiL^,AuF!G,~*D' );
define( 'AUTH_SALT',        'r%K.eTJ,1);eN|HX>)^iwjaeA_+4d6%-cKTDKA,`&,*{{(EW2yj!H,US*rfypc*&' );
define( 'SECURE_AUTH_SALT', ':aIOD7o7}|7^gQWs(w?ClDn6U ={TJgBec9zs0V_cxHeSs61hrFf65HRMY9(`UI@' );
define( 'LOGGED_IN_SALT',   'A$EQl9=t3v3I(i+ahX+Z=a9PYT2Kf$u+p#]rWEbq*4g5NrFBSO3s<fPHgC/}sqwh' );
define( 'NONCE_SALT',       'R[;#gZ(f_HHT~hC9bs+x|sVV_:KU`GB12M)e)cA4MI_|h4uXYl<T!-[PLkk6O:E$' );

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

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
define( 'DB_NAME', 'wordpress-practice' );

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
define( 'AUTH_KEY',         'cfk{g {4kI?n&it!n3idx!&Zi/{=HX;fl+ItD@y=f{adlgWB<X9/}aFI{_p5xwNk' );
define( 'SECURE_AUTH_KEY',  '!F?a -;!_ZJRDA,r6ZAkPM;Wk0WLB$el*9$hT/(SE:yLkT,7Vb1G)/`rlVO!wxoV' );
define( 'LOGGED_IN_KEY',    '#MMTXw/xA|M2nyresXGO=--GB:FFb{Dx&.0pF=;#kV-DLP!|ZZn#>^TA6zlofjry' );
define( 'NONCE_KEY',        'y(9p=P.j-fT]bsLusgnY_4g{5.NgjO%142/Z^ J3<3se.7|}ye&6!v5K1MG+rrX%' );
define( 'AUTH_SALT',        'i|!z3[k0Kn-D%y/1T%GadPPPd.kD/)k>tYjjnAY!btYp>M?:mHHRN.IRg3~`cbB(' );
define( 'SECURE_AUTH_SALT', 'U?J0*>lu) y %)|ZV ^^@~0jpfZz/^)L$k@@[]]-$,c{E;TEyb:idqB5bI8#9hI3' );
define( 'LOGGED_IN_SALT',   'Sq~QG0@dRdx@;2ovspobT5#7>6$;TTAE.J2Fn2`{ *:#[IL@,odwuhI6u6?.p om' );
define( 'NONCE_SALT',       '1zWN>}@0$eXmHPoq0wfl6[WGr|B2^^,K@kHrYzh}-#6qnA-JZOE|`cTs/(P^&AG.' );

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

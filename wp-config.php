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
define( 'DB_NAME', 'cars' );

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
define( 'AUTH_KEY',         'oC8L&l~Sh!i9rVAj[9Co#!PB[>-g]t8DKiT%TnidnCZ;5Z<WjP8)TG*sxq{V;K@#' );
define( 'SECURE_AUTH_KEY',  'OI]~qqTJ$TDWa7m#pA>(<?jbyr%U|Z7cNWp)~Ni?@5W4u4:Y^6[MpCP8c0OzYYlR' );
define( 'LOGGED_IN_KEY',    'xl/:J[O6;Z|Vk&j)9;?$Bq|vQjye|U[@f035c&dzip S5Qd`0P9Vf-d@#h4h Fd5' );
define( 'NONCE_KEY',        '(zMPu3DJ2v`Ke*M#64Gk1/Id6c[/}jl;IptBYTX}|48)2x}kHAL{M5TR(` |/zX ' );
define( 'AUTH_SALT',        '~)6G~4,hk`k,^l@>C0YNV7)/61u94^m^`!yEu;ZV4`oO}0<}2i+6~Z@/*gL9QAll' );
define( 'SECURE_AUTH_SALT', 'bVg/~1LS(@<X:cD=CpT~o,f8^8}d+*.|UE_kf)n}M(D.C5D8KauamY_12DUwW`y^' );
define( 'LOGGED_IN_SALT',   'ceU$Ca#(GN{{og_voc>]D/W6X`P&a1f7w8 q*c&eDnHwd3H,^:n?T:NCx#J@U@s`' );
define( 'NONCE_SALT',       '^Cdmj5V4Q[}b(srx `O:I1At_l Ggq$xN@?b79=[LZH)}|ZI7E8`uSv;i4l_@g@:' );

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

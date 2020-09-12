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
define( 'DB_NAME', 'cegame_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@pg QP57Ei1ZfX5>h%B9Aye}{J9RH$LX9*j[$Muj.7}Z7^7]VO;*csw#N=v?[U>}' );
define( 'SECURE_AUTH_KEY',  'isT0Ex w5%%|[?FSa]^syi-iXU|A]@Ss&oO3E<Viu0.]:E_qQ]PI3YA9&&k&TTt5' );
define( 'LOGGED_IN_KEY',    'SjZ4@`0X[KOpA_LU3AqF~H-7vi$_nPWgKT@tS!;mB`%`A&6 n2-_HyH[vTn|=lk9' );
define( 'NONCE_KEY',        '1BtulLHa<gx=*y3:UbihiXYzBvq(K[$`a9fm3@?pJe(@va9|.YGsWieqMEPZLL7&' );
define( 'AUTH_SALT',        'a??kyu(UsTW4-1AbiM?KswE@=l}*v7W$~}KlY6^K`TiBk8LO%uUuGO=[{+[-Ps-3' );
define( 'SECURE_AUTH_SALT', 'JKc+9qF ]]f-on6ye?>~|p6G5Jw19oe<[OoDF5&[}c0>A.ip%(_RT9Z#m4DQ+1:;' );
define( 'LOGGED_IN_SALT',   'K?&xAF[OX.qp&!P Y]btT_p1HMbTL wQ`HJ5&T *`;~&C$EaXavK%YV+AeYV+$Nv' );
define( 'NONCE_SALT',       ' ?}3o`hqP6Y7XN!xOO$(/gM78L!r;Jwz`,x!Zb8HcxU5}09;2^1=>*fK$_r9LGhi' );

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

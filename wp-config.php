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
define( 'AUTH_KEY',         'pXeWpdS}H]0K(He*_f3.k[FSg6-NZK5|GwiV&zZRd#KgK&(Lmb8OJvnKU_y$jw[C' );
define( 'SECURE_AUTH_KEY',  '=v[Itlp?VpvR+>GSX*X&:X^c8em~&qvw@@veD-<oz{X5g;h%nxKcdzS<X`(ES$,D' );
define( 'LOGGED_IN_KEY',    '^;&yu&pN0ABsr%:vWb1$BSS-_IgI|O~I_+Irlib@jFyY${kP-/~|m</}Ds|@ N3|' );
define( 'NONCE_KEY',        'x$ ovzYR;4}=xt,Il}s[|fL<;Plukf(T,De.%0ht<+;gIJ4i)&|P!pNbZllohzeN' );
define( 'AUTH_SALT',        '9FM1_b9.^|D1{$rDWil>-xnq$2JW8gcKf1i9$[~p]/`v BjnU.K{iH8Q6].3f?|`' );
define( 'SECURE_AUTH_SALT', ',42fVBihmd37}rn53WR6^?!JSf|4`[E`3[2|D[]JrOt_Rm:R,i*/w>vFqWS(%~vz' );
define( 'LOGGED_IN_SALT',   'PfP}^uULl@cEyYof76uM2 `|9d>k+vb5;OU;kpQ K jBZgFO%ZeB3nO`UCfGk]E<' );
define( 'NONCE_SALT',       'XP9VQ:r>|+1z :f1A45+C_!(a81,_|z&G-yC]rt9y1t`ePLB98wICe$`|<5[D@hC' );

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

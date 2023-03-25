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
define( 'DB_NAME', 'turquesa' );

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
define( 'AUTH_KEY',         'zU[e].J[Z<.pBnUQu)O$q{&)`+{,F.&SC,q+clp^`;n(kbU`e/^.d.8c= XI#fYj' );
define( 'SECURE_AUTH_KEY',  '{bO)>?1,5U:ce}i_Pcs(lTuTyDi?t_/AXNk }ymjZ|$?Kr0?7<6RV/8z*yEVC1DB' );
define( 'LOGGED_IN_KEY',    '}^0b7!]$//B)z$R,VXSM#uqk//~wLfIm15Fw<fNPOw,IV]:5k]Q|Q+<FRLfYU(LP' );
define( 'NONCE_KEY',        ')vk<@@kp[Re;]`?AV-+CAkDv-%)<.VpgLF}z6 $l`R9+~2E]RYb?(JeFQL0J[E|~' );
define( 'AUTH_SALT',        '!bH&AD{!c28vt<^<<mxQ;j!*NJTyF?K#(*,{odf..*y{G,[i8:|SO8RfM&cvPU0T' );
define( 'SECURE_AUTH_SALT', 'dO{*@_6N di|16xl+DS55U:no+y;:@gln.I`IGyD]j,(0Pd0esb66oTvs&^F,jV6' );
define( 'LOGGED_IN_SALT',   '7tX[e#9@Yo@42IB+;D~UR8o|9V6]pl#V%}:u7K2`AC%L`Q7kny66>H`M(A*!. #J' );
define( 'NONCE_SALT',       '0d^&#~.Ee]KV7[de98{u%EK@S!|xu_fS$CTT{UA#eN7F<{xYe6g)3&iIw(~fi4-^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tq_';

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

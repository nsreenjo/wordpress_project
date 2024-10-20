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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         'awQM/v{fmD*Hr,N}wfJL5 N9_/.<vSX,C}u>iK|[{n&*@(#>*OQm(EntO2u[pp!&' );
define( 'SECURE_AUTH_KEY',  'PJ7Wn]Ga]4mQ6h 9Gf]q.]]b59?,*BES*&GZZUxkTz7]$qGO[pFMnyt?/.snU;5X' );
define( 'LOGGED_IN_KEY',    'HPz; $&*A$S(6p+j;KLgKg~GJOP9FEM(8&/@F{hfylQi4*:K]QC}*~9t<?Om2AT2' );
define( 'NONCE_KEY',        '(&F6xTgE4JC`#+_9OD%xng,>9oe`s09I}VqUf2CpB<rQGx^ C^V8G4=#.$dcf8[b' );
define( 'AUTH_SALT',        'D[gYbp(EBlqZvA7I>X{# h`jT*t5c]JIu~dPv{N.9]W+W]>wOzL3FHN2_b<AKl1N' );
define( 'SECURE_AUTH_SALT', 'LrDO><+Vp^M6 C!r3Dr#>`Qe}P995sx]S_4y*<7B+QXj(QENlk#xNZxo5kU;b_82' );
define( 'LOGGED_IN_SALT',   ',R#Cdcx.v!meLM_19pVsZXT/D`UG6v|#7n3]ZLf2/MS<H0*)Xnm-4nt<zgBk[[vV' );
define( 'NONCE_SALT',       'O+&Y5K^{Cqil|yko*Sqck?KVRZAgq ];LCEQgh8&)Bm9OX}lJv]6h|@!h^dM:K}>' );

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

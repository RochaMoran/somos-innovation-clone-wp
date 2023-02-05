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
define( 'DB_NAME', 'somos_innovation_clone' );

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
define( 'AUTH_KEY',         '2Yt>__$t{5(j^HmN!GdgYsK812}Cc%l}RiE#Nn0]4.WWOhf#&w2PN=Lr0oze0iDU' );
define( 'SECURE_AUTH_KEY',  'wHt2k&?qxK@^U59M+Wa@USI7dF+1amT:FEd20G2U1#z4Z~t2R9T>b0<<M)NSA]o_' );
define( 'LOGGED_IN_KEY',    'oGDMh;6r2tlJ}.mE5`eyZ!brl!d-EA$Vt_PZ+Atrb*T##M2k>s;{!f7Y5s0c~LQM' );
define( 'NONCE_KEY',        '-@S`M)uMoaSRP9<W=D]bIk6UWR ,v]K`gHdHaZC@;U0}Of/ohDY;_Qps~=-D&pL/' );
define( 'AUTH_SALT',        '^kZb|y|]s/:usjguA-9<;o.=Dd*2gvEwb-Q,dk*BR]{DZJ]4<KL(gp=|MXC4-go@' );
define( 'SECURE_AUTH_SALT', 'bvmTu$Fx`c*qr+6/<JRYH$ M/1`L]f!}|b{{r-ey=-y1Af3OC<`5an^?UpMkJ!xP' );
define( 'LOGGED_IN_SALT',   ', J:c~NYNjw& w~^kIW l(W.S)kk(.=M!X-$K672lAXJR6OW+]5XYFm]hl3i(ITV' );
define( 'NONCE_SALT',       '-tr~eCKZQbaA1fE_T)b/M~P4x*h} }>sYe;xK+VfJ`fcE BELcwH&s!|MwemoEAx' );

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

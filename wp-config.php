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
define( 'DB_NAME', 'website-magang' );

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
define( 'AUTH_KEY',         ',:;B5Ve,D/oyp=Az7|*=km_EF?^D>`E80zvE{3B:}C)Rt%E$_%:Y#g&:[D/chE:F' );
define( 'SECURE_AUTH_KEY',  'Yk]DSj@U<AjhR-)8z<Ve-TaFEpyUFx]$ovC$FQ7Mm`0 $%#9?,Ifmp<<;r[Mm$5J' );
define( 'LOGGED_IN_KEY',    ')E^meN+Ff$(F>0|+8;V{.s,N|~YR4d6BbR:}|k`$haDAL=tW~at,,*0_/D_q:ND`' );
define( 'NONCE_KEY',        'cYCB-imTB2|SMQ$&+41!PVA[ecW6>O,4}$6Jt-0P`%g_fC}mdkzLEHJZNiI~yA(S' );
define( 'AUTH_SALT',        '[>cJ>fj)K_c8A}4Rf<s<@ vW>,Z*r/DW*kzJZc7/J(;rHndOK:zDd-}2s@=P#gMj' );
define( 'SECURE_AUTH_SALT', 'A`M:GBNAl`H;I3lIfbrG=u*FP[PSOIu#Uc<TcX}gNL<m.JtN#?[%M_x <x<hW[z#' );
define( 'LOGGED_IN_SALT',   'E1eiWCgMjDgFn*Ve}9l Rt++Xhme#&d?78z8_V!<j?P%.U};CbNB#j-X9mGf>!Vx' );
define( 'NONCE_SALT',       '{B;GeFT+_|>t+.Zdl78[t<=ron1c=C1~QS(^}Ghz [ME^w$*-Yp{O}}fepdwHAjh' );

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

// SMTP email settings
define( 'SMTP_USER', 'idris3097@gmail.com' );
define( 'SMTP_PASS', 'Idris2002.' );
define( 'SMTP_HOST', 'smtp.gmail.com' );
define( 'SMTP_FROM', 'idris3097@gmail.com' );
define( 'SMTP_NAME', 'Tony Florida' );
define( 'SMTP_PORT', '587' );
define( 'SMTP_SECURE', 'tls' );
define( 'SMTP_AUTH', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
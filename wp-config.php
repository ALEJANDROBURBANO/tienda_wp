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
define( 'DB_NAME', 'tienda' );

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
define( 'AUTH_KEY',         't{w__GF>~Y1s@gNC`1[rLDDWhcgCbCyWNbE8MCdUyW]$U.]H-Od +ise1b2pWqHA' );
define( 'SECURE_AUTH_KEY',  'u-!~H.d3C~Ak5dp2Xra<;F*gv!F$Qa?%6;HNK?a.{z&vOcZA6QjFUEu|&Y^/:=0M' );
define( 'LOGGED_IN_KEY',    'ib]}]M];}@$u_0Nk;1w!&!cjE?AO!{U_wF*Km8f[WQ~.Xue} 6MU]uJ#~j>lR(mV' );
define( 'NONCE_KEY',        '}q%@J2(aP<kmwW_,Qx?[d44G!#_pQ^75p*a%(OG_pGz4-up1_3m6=~bw_S_z0RVL' );
define( 'AUTH_SALT',        'XmTl8T%cAj`!(iX)r<opg?;n~ZHh}pfN|J~*aX/8{MLa#0#JvP[IHp|}u.l~FE#2' );
define( 'SECURE_AUTH_SALT', 'Lk(*RdxFDiJ:P>H2^4U3%~< 5%{6]2jVt i1i8<~AD46^>G+yH0kkN!reu4y}?N_' );
define( 'LOGGED_IN_SALT',   'CI|/{y|%lX58/ykfi|QEmnoVGQ6-8W_{nN,&@$^)08C*iP1Ln4_=[I|iw#%,p`CT' );
define( 'NONCE_SALT',       'g`y<xrBO`~@vHx;CCW[K3%8At8s,$}wJAw7I0QfF-U* 02{-r$MYMBEDi;jfd2L+' );

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

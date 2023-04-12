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
define( 'DB_NAME', 'agt_partners' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7;30@@ZoXmClCOm=$a-oX]bm-Q(nS{nH}d+#%Y6h%%<17:L]qwX4rIiO@<xFdMY+' );
define( 'SECURE_AUTH_KEY',  '-|;QACf+FI8tL_^@JyiKT)Lz.X[Ki{wH3qCBO5e*j3}w[y~+Z~9l~N&^)A$}#=y*' );
define( 'LOGGED_IN_KEY',    'eGdC[n0mj*EZ00(7BY#]OjYBw*C/tVrODHk4?;kr5k3507Lv:mz6Bp3Y%~%[V#nF' );
define( 'NONCE_KEY',        '1?OC@QX>jw{F[!NO;0mxCG@[Vt%s-f@QzH(l/cNZk[=NE+!IA1SA$@dGAWkO,*_Z' );
define( 'AUTH_SALT',        'RQQUQ5J.~d_xrdEUeR/6dmZYY@@tU}?B}EVQuLV.}BgSLBM4%BqnU#rx.74;Iu1j' );
define( 'SECURE_AUTH_SALT', 'z=0(>YgMrDsP$[[e>>.Ad<ipA5@4(_440ei[@ Cme}=5Y%f Kz}~aOez[>aBE~?(' );
define( 'LOGGED_IN_SALT',   ':7fI8uJ>EcU3ic6,x[$s9?XrxYPZsU-(L7M3-VXk$ej98|b RVPqP2%2/XT&tAC]' );
define( 'NONCE_SALT',       'rB1fJQ-lPq$~Jt>04.S<8G,ATP#jX=^)-<iZpgFVVroU/y@`.WiP W0eIDZd$<B(' );

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

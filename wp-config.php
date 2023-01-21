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
define( 'DB_NAME', 'iap23' );

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
define( 'AUTH_KEY',         'YW[2=1s(I?.K>?pvM;+#+Ps3s_{95>u-,C3jJsA H@HLK2FP?e~{KS;MEkyQHPC@' );
define( 'SECURE_AUTH_KEY',  '~AsjOML=Py;EtGJcOBPrKyB@1lILmWU/iMkIM:58&SaBr0n^nud9J/r2z8z92?#&' );
define( 'LOGGED_IN_KEY',    'rI0>mMgu8Isz.oc*~6@Uf^N&g&i,:8N1DGZGq*G}wOSf06S@L5=> F0C=L`iLu[1' );
define( 'NONCE_KEY',        '6DAT^l3NKTBi_vV0~Bw2p;%y$[[F}z!CpVxa/&,v,rW;0UQDj]>WK<70x{|DYxj2' );
define( 'AUTH_SALT',        'c-Q+$FKcmFc8mEMBGbtp><3siI_QZ]i#S;Q3TN0yf5{D1AA8q+7J(6`yaX0~Ppy`' );
define( 'SECURE_AUTH_SALT', 'hR<51n@g.,agbxKYbp82uA:zey<:2)WP2``y)cO$5cOlrPA;F(sW8 6,T%Qk]4c!' );
define( 'LOGGED_IN_SALT',   '[+J`?47HVi%ZR.(}v5TI385^^,m.F2CNfIimqrh$,$VO&&9b:mi[A^Y-/uk@A4?Q' );
define( 'NONCE_SALT',       'Sm2wr`X8B.DqE(,ZKG||k,E?/Z7?{Qxn}3N-w4?( zkZMUuP Pml: ?5N& )A[; ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iap23_';

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

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
define( 'DB_NAME', 'noman_db' );

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
define( 'AUTH_KEY',         '<)mt3jhC!Q_l>AQ61Q(2j~MyOi`?TDGz0=ugRD.3 *VhsX2S$dL{KYrP>w(9Y5Kp' );
define( 'SECURE_AUTH_KEY',  'qL ?&4=CsVFv^{0#HvK/2W)@eAE2h5<X/a|+tx4xx.M0fYKdf.w<vk<(?$g)Tn}@' );
define( 'LOGGED_IN_KEY',    '| 9(PSDMF)?-;Q/w;w<qc3@V5@05 JTBP>|9XQTEH>5):KfO;ECH;^YOp0<?S8cg' );
define( 'NONCE_KEY',        'PNNw;*/_T}V }:d/W]*#iW!Ec}@%4+6g}FVzdk% Cb:V(,5z@L&z{cHyE5yy6Y4i' );
define( 'AUTH_SALT',        'WO;=B?Jx2|+gPrMkO-1(M$J(T?9GLX|@5dkjr9&,^ i=0;U@P4gfPRFG)Zf|Q%}8' );
define( 'SECURE_AUTH_SALT', 'Z#]t{Uw;N:T?FfBj2xR]?kH)-V%+9)=F&#8#(2LgW[,J%/Fi[w2ZE~4-iUq{R2#-' );
define( 'LOGGED_IN_SALT',   'Q2`BK,_fuS/$adBbAYa~GTfL*vmPWK0,::u]0y5f#;<dUv]/uXK!:1@30E$#yiV9' );
define( 'NONCE_SALT',       '_Cc=FivE(=<3;Esr8n:E7C8q;Vh{$^@_pBS=Oz:2h^^;~kP7QO6KAPg<=l(L[1q_' );

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

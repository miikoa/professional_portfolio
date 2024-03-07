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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'developer_portfolio' );

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
define( 'AUTH_KEY',         'rxd_KY#I8kOL6b*kIvRuu9c@Q7Lq{go7eIBn?BZ-pa)KkUrq=l2B;?`4Z$Hy0~K6' );
define( 'SECURE_AUTH_KEY',  'HtY>u-XFZWor[W=OobPZ> C]_s:Ns2Y)/j4qRl*uGf1Oir:0o.w8H>{z8bg[-$G[' );
define( 'LOGGED_IN_KEY',    'iEX+m~pZuASI]P}iL[k2$oWs?nc:/7=V0SA0$P1yv/!>SIq^N~&]?E`W,RP(ySJj' );
define( 'NONCE_KEY',        '||9MLhSvT-!JkZf-&1=5@@Y{,_`3XN,stfl@ |+G6 ]5R7{F8YYozY_V7+iX[VVm' );
define( 'AUTH_SALT',        'YE#m`uuX/cF^L_`A6cmw@Lfw>qtX5#%p~cFSpc/[V*eZJr2lxIWWYN}T^h->JAG_' );
define( 'SECURE_AUTH_SALT', '*j3;5s$6Nofr2p$&5upqr$/p8a{OA:W.z.lo=M*eN7d5Pe+5/UZNf%J(Eid1#_kk' );
define( 'LOGGED_IN_SALT',   'j>;.R-cVXQ=BE^pG,fF|FlR0dGQ;ux1:]DolOwIwc3@(~n1uVU^4SV^4bi68m5Zc' );
define( 'NONCE_SALT',       'G .FYGzk~Y7f~FFYr!:f)m-C?:IZ?;ix<COhXU=JZqI3**d!=E}8[?jA-87f``vZ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

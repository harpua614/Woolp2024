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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'TGmy=L*%(]W@A,.RHfd$-iu$@5[uPf2I.Ak7_|A<{LBjH>G)xGXko;:Ik7?Vbqg{' );
define( 'SECURE_AUTH_KEY',   'i#oiE$*qr/>~4*1IeHT[@0sQ8p]npl#OV(mU :.z WRnolf4!FYc)-1&)((>c}u-' );
define( 'LOGGED_IN_KEY',     'o84I!!sh!@hp 4!9)W`Z/hdz![]Ri_yb-Wieb%P6BX0;6xL{M|eDQ{uYvzx^Ju[=' );
define( 'NONCE_KEY',         'fKMyYqthZZI/b{[cOXXsg]z7.wuNrBAwk8s*gvj|t]W1w!opUipSnv)-PZvfmeMn' );
define( 'AUTH_SALT',         'X61[=fsJ.A|zQ[4^7M>E<D.GIdeqXM3k~i6tZNAC_;:#GyolZ<ID(5j+(.}Vn1pT' );
define( 'SECURE_AUTH_SALT',  'ks)r0u!!1y7BfBXtBv{7fX9RE&smV(4HUdK#Jpki%_Sd<+2OVj;4,)6~~Yy-e@DG' );
define( 'LOGGED_IN_SALT',    't*=[Cih6Vt+g~{gC5K8p!`pIog}uXamprA*4#iEe};I>V$j6VPVRFQBi`(M0/4_R' );
define( 'NONCE_SALT',        '[{a,1Ete|%!jp|I*r8gF]!SlQ)<`pVt4R|pEAXX*/m JgtV mxlDNcUXz~d@&^U3' );
define( 'WP_CACHE_KEY_SALT', 'Aa9JbcaEvg}*f;m@Sof(yDAScoU(X:?3KRA89{I{/boDMv7yto87 qkxw7<~fqe-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

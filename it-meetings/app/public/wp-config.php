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
define( 'AUTH_KEY',          '44y:5=4C%W=]@RR?Fr9Lm@Lf7JrR(s}Bf>=^S(qS,{IqUg$Oi7Jt]2krL#M{fxa@' );
define( 'SECURE_AUTH_KEY',   '4%8GEUuf-d_fMk5*H:wYF,7kr@L4qS_yZ+T0vfxI5otZdtJ!TV1}{!!KYpahzj|;' );
define( 'LOGGED_IN_KEY',     'w>/+|C!U9h:*n17/|Q8zu?<cWJMq(W1>,y@*]29NK%81Mi3Wen4_n&VLkN(cyXJ;' );
define( 'NONCE_KEY',         'QC/w jb)h)ip{:AU _26IYJGcvb4:,1cgxEe%WHsivpvN;F{RX4Wyq4u)mB:]oAe' );
define( 'AUTH_SALT',         'lNb,x>.jj!m(Z7Z,A^B&Y:*>b,4GsOc.+wLO)&:dck~S9Re.=7-Dij)kK!vqa0w$' );
define( 'SECURE_AUTH_SALT',  '-SbuMd.`/)y-Ml`:^|td;H~3)ksg@-z1A=f0M)D`mVrNOG.5z_a)!3,`D;YrfW]<' );
define( 'LOGGED_IN_SALT',    'rS#Dy0yg3AjxGl6.;SH52bone*kJ-bJ6GsO{QhJe/t[>[ TYg9lEbpgZB#+3B$.d' );
define( 'NONCE_SALT',        '(#.y8jea^_.L9]/kk+.7j6FH+CUNv*D+xJ:vGcQa-1IVdOoi /m5d=0wmZ,DY52M' );
define( 'WP_CACHE_KEY_SALT', 'ePyY^q;R`o|5Ds3heE|go^JC:,+}Hv:l2!xViv3Q/s43?R1kXByPtn8QW5HLBL}<' );


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

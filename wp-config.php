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
define( 'DB_NAME', 'webshop' );

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
define( 'AUTH_KEY',         'MBOeeF,J@{Vd@]zP<q[iCP(Y,R1P}{[j1X|cg>,{59~6<VggzOdpUnV=4KBOIT+o' );
define( 'SECURE_AUTH_KEY',  '@^+F4.|5z4DrsFb&)7K`vpt^_DXt`Li#7sv3~@PR8vCpU-la7x;(` 0P@4A!9$iR' );
define( 'LOGGED_IN_KEY',    'Z$;2<Cs_(bX0ns^m._+N5Ncdgo@^.lX@2:+JV/0jikdxu-%O;/8av2g=,sJ?wX:u' );
define( 'NONCE_KEY',        'l*X-,C(5+xZ~9BXwOCSLNyu*I#asPnd_@up5l&#G>dZEUvMKIGLU<ccBxy~xX-xv' );
define( 'AUTH_SALT',        's-_]e#7vS(t+vB$]AUh,@R~I+JQVQL7UZ)8moq~4uu$[o=@04@Rsecr) D2Rx9fU' );
define( 'SECURE_AUTH_SALT', 'bJUddl$zG-c1vN3r.+8qEn%;d~4Ntleja!53*<8ZG_65N7v/P|Y~tILd_vTpA,:,' );
define( 'LOGGED_IN_SALT',   ')1Tay.+SP!88$LOi6_yeB^zwb3L1oAkN5&,CyC/wMAgO=/q6^>Fe}nwpn;hutM%a' );
define( 'NONCE_SALT',       'D|FBr7[G*ralJA.))5X:tC:2+/Ab(3zp[a{q:g!T2Bp(3#XdfqVs$ ~(%;$VEnLN' );

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

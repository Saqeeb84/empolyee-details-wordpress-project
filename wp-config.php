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
define( 'DB_NAME', 'empolyee' );

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
define( 'AUTH_KEY',         '!VW$& gz$mY{#38.<Upz/431vn7X YuS(o,12ZVmLM!?0 vF,75p&Iha1Mr=3O*v' );
define( 'SECURE_AUTH_KEY',  'y<a8ghRWQB3rJ+:G>3zXI+)+ZQ-}MQt:l~6Zw39-#kITN/x3EDdwFBl/y80+Z kF' );
define( 'LOGGED_IN_KEY',    'QyXyreKY)w Z5FK(mnXgDGiCE)=S$gUsgaQgtD+LpMYm.?~/<*ur$uyyJO{ !D ?' );
define( 'NONCE_KEY',        'tf[8fb5m[PFXPB3$Xv>;Kd~D#w-=j`gMM.|O2NLfy<QUBC8<e2#*vUst>2OAIn5(' );
define( 'AUTH_SALT',        'h(O:$cYjJq@,yi2Ko&gXuvN|Vf6E>PI?-[:#E=Onzro/+S?1?4:|Uu~GQ~n*?qo@' );
define( 'SECURE_AUTH_SALT', '$X%v=FR>,V3=A,2Wj/7(E,|Uq)jPtTI=)H$]v* #s:QR|)If)W^X;@p:H_|o-94h' );
define( 'LOGGED_IN_SALT',   'zfL)Ncp.e^e2FREuB{cFQCg<Wq^ixKeXFxIxV1fR}FBr:i;K#k@?^wZgZV Tj&Bt' );
define( 'NONCE_SALT',       'wYL[,7<s XV$,@5bln[}:LW($K%[&Z;fMD6>W/8^J8R.njN0F1?JTB)xzhp`32SR' );

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

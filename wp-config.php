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
define( 'DB_NAME', 'apiba' );

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
define( 'AUTH_KEY',         '8T[-h3u&s<W92Yduk/Dc573UZd+IB$9yODyA;zLp$6U:J|u{w!Mq.@V l=2.Z,H~' );
define( 'SECURE_AUTH_KEY',  'OwMWOb^B<j,$M6%J# rMJX.!Kl[rk q/-)=]ggrT6e;ubF5OHie]cIk4gxr}0J5X' );
define( 'LOGGED_IN_KEY',    'Ch`0Nszn(8FRq>sD/:<iPzA5,G>W6l=Xw01$Ar5EwK6$S-(=^x6YQ]Hg^go,j3qL' );
define( 'NONCE_KEY',        '](.4TMq_- k-(jFcPeH{bB}m!ug4h~m:k-)(1I[+>(Tawq^Dd/w2{)yZ^L9(mPF_' );
define( 'AUTH_SALT',        'F@6`2)6MzxYEp%SD_4-]E~ec!gX;-~E}blAc:_Ay)/,2G$rjj4`(lKa7w%Y_t:Wr' );
define( 'SECURE_AUTH_SALT', '[VqM<l,2vPmZe*agU42@16thQaA,5vcC3v8FpDC`l`dx6}@5p-g^tBN7WmCZ`wlK' );
define( 'LOGGED_IN_SALT',   'IOO4)6QWL/89^T`ctbLaBw]/NFJLp!HslsZ_V/#ZGm(/~_ePFjq|.7Ox0l>6i/@e' );
define( 'NONCE_SALT',       '@-4?^W%tpN.3lO@<Wm14#E4 $Z;!eZ6);UqSr=)6r/Lu!,ogQE(d%0yp,NTF=5hj' );

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

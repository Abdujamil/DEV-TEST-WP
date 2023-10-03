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
define( 'DB_NAME', "devTest" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         ',sY BcA!0zBxTc0IGnO>H?NgTPa@FVf{441PLZ_Ek9l;nK8F)Y,0-ys=|36p2/Fb' );
define( 'SECURE_AUTH_KEY',  '[M6aNOe4.9#u_tfaUii rybp:d6=7m*J(hYLy `~y)VLT|:>{syGnh|Oh~ewWwB(' );
define( 'LOGGED_IN_KEY',    '[[Y}(Td-&U.D:BOmvl+wFX9}1oD+:`ge<B/MlfFY(o_;(8_|tdS*]!.@r7R_gw5B' );
define( 'NONCE_KEY',        'nP5H~/Q !d`@Q)+Am>bwpBFrw_1}. Ibs7`BJ4Y#=:[GaY&x5nXq;8Zf?PBal_[}' );
define( 'AUTH_SALT',        '.Z^OHW*)tgk]&Uj18}r2:CY@`>Vf3X=}<c{0+k19 93Izy(@,@z0<z:P<niUq3UE' );
define( 'SECURE_AUTH_SALT', 'A,eXs|HfTS(gZ)ws=^;G6sQSRNEx8bh>^/iiu28hg-_Yt4hE6z+vlT;yxZUd#`(s' );
define( 'LOGGED_IN_SALT',   '/1|fb<>}<&TtJ*r0w2)`z$A-A[H%iIoG(%C&Z7R/^;_#bZp$/WT{aA]@U?nGJx.5' );
define( 'NONCE_SALT',       '1t#V56KM75|P!ebZr8f|UxGnJ!c$Ay!`KP8aqu4P-Rv+QrA7*Bbce41S9hRM-40)' );

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



define( 'WP_SITEURL', 'http://devtest/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

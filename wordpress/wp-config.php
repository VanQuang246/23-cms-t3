<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_uBHU[Mw~p#^Ydy/G/Io%i{ynO~`}:HZ;V&Q`S=$T3/;A?T3$0,1.cG%-)`At?RJ' );
define( 'SECURE_AUTH_KEY',  '(_Qk{<a?,cz5e<P@2^#~QKL{b#*FlF2%^0oYZ0-*.[O:7rii*@s1I-Ft,0{vHvJL' );
define( 'LOGGED_IN_KEY',    '9Vru(*Y`2D&&x@ioe[sV$~nu3~Ye]oHR5F#{?)-iDtrM{KSg*WH].NMv$z/y6fq7' );
define( 'NONCE_KEY',        '.RC>!c[fg5~_a~HE9BM5d$%b;.HQcZS<oH:),&sa0{s#I1<+Zh,*s8pw1k~@O2N`' );
define( 'AUTH_SALT',        'nytS`}x<=xt2kl7wfR@;PF5+Ore!-tbq2&X^hR,!<--|ubYOn+RX^$^T*qLCJp8)' );
define( 'SECURE_AUTH_SALT', 'gZ;p Qht4y!CehCymTwL&njk^=(G,yrfKGIALHAEVaN&RWr9&)lw/y05u~sT[@am' );
define( 'LOGGED_IN_SALT',   'F_13#-fau/bZLTT<[XLiFEetj72}a74lC0IVDHcZqEMW73J+{O]O9C=cWUKChHL,' );
define( 'NONCE_SALT',       '044~eY-(awt,D{VPuQYAwyAAdeA^9+,t5w6E~6^k*Atw34ho#C~@BzjwsN3i-qo{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

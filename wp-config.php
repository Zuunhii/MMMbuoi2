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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'manhdeptrai' );

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
define( 'AUTH_KEY',         '7tWwZZqkfI}w]5;?<?hN~Zs:__!rdiE:I [#/Lgm;8[coS(]dUOMcN(8rqPQ7du#' );
define( 'SECURE_AUTH_KEY',  'PRn(UxT#iaMWv9N^|*90,nG5PHA.6:}Ntv.Hm+Z/uv.9|-XXTtKisd{i30Bt:y$#' );
define( 'LOGGED_IN_KEY',    'uE/}J2?m*<op<lN>e>^d~]4?8`pP;(N0dN*pR(^*XOP8C~C+Yx$>}<QR6u1qjE%:' );
define( 'NONCE_KEY',        ':JD:peF`[>D7@3zLuh1}{|pQx&nn[q0dGZw@6/7]>BbUhtPT=uE<8739Up2ocbHc' );
define( 'AUTH_SALT',        '$gEnGfM)G}dAVwsU;JP*6pi^d>1 I3fSomHG<STLv]S-ntD)I|&c1<Ir^PUC%?kf' );
define( 'SECURE_AUTH_SALT', 'bM{vWc/.S0kJpjN%BNpN{7p]~x`%w)Y3n%``aT3[T;RPzbP$ Z58.ZvHl>r118zp' );
define( 'LOGGED_IN_SALT',   'Mf]YsE#y<rQb@#cP73k.S1ABWL2`vaN>eu|>4P>#i02?#F9c_4?oP=%d)wj8rV%i' );
define( 'NONCE_SALT',       'DOmwSDsBSaS_2!_:^F(CE4f:3B-FKk_JS>uekOUk/manlfofvp)ZfAEpGmNNEM3)' );

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

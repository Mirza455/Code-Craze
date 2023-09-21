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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         '^y~aq|5q8;rk98y1NJx!BXcc!>*7qz8EwH}Z:kL.33I_!dB|vPe.;{KC4)4AB2q_' );
define( 'SECURE_AUTH_KEY',  '~Tyu=gyuxo%)3E%$lC?VW<j|1R#bf9Zl-:P}?}%A^Fb=*&*7o4J#ofKV_TA=~m!-' );
define( 'LOGGED_IN_KEY',    'h{[{ItSX.7WyCK4B(V3e+x)R}2@2(;Y5PRZ1wi{y!7Yso3rKP==p6</e$iF,8qoT' );
define( 'NONCE_KEY',        'S,OL}wGr6bd(1R ~kDI;v:WN68?vgnF{yjDvleiX~J~2$Yc}9`1L2]FK8/dK5$LO' );
define( 'AUTH_SALT',        '-<62_N2/gWy&N{#tk;H !EBI6]-hVW9AULtrswBCThuNQ5IFMh%ZG]0cM2qU2ydW' );
define( 'SECURE_AUTH_SALT', 'IK+>u^%@NAWu s,3l=MYpb;r}2(0Ck,#@|A`{L9;T$3Y<G8)vjkV)?<XZgV_mjsl' );
define( 'LOGGED_IN_SALT',   ')tsxQt^JQXtJ8fosoaGr]@{.s45n_9OLE[c1E{xNs8X4+$za{)AP))Z6+g9D|<~~' );
define( 'NONCE_SALT',       'XT_EP`5$c|)k0}Uu<]8Ir/Cs<Pp|<G91Dy&8)ES0;XMnT2m2}^Wv%)hn^;Ec-epj' );

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

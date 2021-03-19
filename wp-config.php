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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce-experience.com' );

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
define( 'AUTH_KEY',         '/i6keD@KB48x]SdW7 &rr.G.r*zZ2hs8/ y82QF,]Y8T)sN9nWQ7*)oJG%pqH_.p' );
define( 'SECURE_AUTH_KEY',  'm[JNHgbILZe57BIu`I}H]?(d?v!8u.2h386HE!G`]LY0r^I@q}}/U6[u5H9/7F)e' );
define( 'LOGGED_IN_KEY',    '>J`&@z~ftv~xN/q~[.NieJ(iCY*$,2F@.m@.riqnkFjQ2&=Ev|{B+yn9X}/|_WP^' );
define( 'NONCE_KEY',        'M5GWaw#(pUd[txsst]TYy_ZZ+(n%gtc#3dFGGJLWGKV0wFH^7tO1e4=mb=}~DQij' );
define( 'AUTH_SALT',        '4=lGxOGakx_f#N0Lp7RpH[L$o<~AzG^3V,Q18~y2Uk;meyN2?1PG*#OEthu(!*j&' );
define( 'SECURE_AUTH_SALT', 'R]F8yA:XD9uy9vyAq]Ev1-9$]36O*jyg/{?!-94& 5}n]OrU42i*Y7_p]&Ey/)|a' );
define( 'LOGGED_IN_SALT',   'GGbh]r `?Y9]3_;@Ms;<8@Tkm|EO(_e#S)3>DCozCm1M):x||#3Woi2%jRkCsI!]' );
define( 'NONCE_SALT',       'y /P0HEaBQuG<+?jgQ3Po]<;c}2-&WX(rKb-(Sjo9UH1H(OF<VKD?Y25IGw;;9Yk' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

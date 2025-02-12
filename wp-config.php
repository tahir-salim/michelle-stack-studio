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
define( 'DB_NAME', 'michelle-stack-studio' );

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
define( 'AUTH_KEY',         '}EVa,(KH-?[K$kSMFW?<sS:2@(_NhIaNbs[6.2)blR`oWqS~5t2Sc4!Tpa7PR^K;' );
define( 'SECURE_AUTH_KEY',  '@]LhXr`c(4ZdJ/ZR]|1N&rI$g6p?!G)Os-t] NK/s|4,/oLy-.&c8tnfxELxBj!>' );
define( 'LOGGED_IN_KEY',    '^Ia=HKGl4<>=DBk;Hjxr<![}$~#|/bn44h?NWy)<>H?<k3Abfb{m[Lv6kDdk^Tp7' );
define( 'NONCE_KEY',        '#C;/);(OWz5ShVK#Hp|c]fHytBZB(z?^N_&@34B$N@S@IkNF^*sH*9&p$nb!^>OE' );
define( 'AUTH_SALT',        'lWo75@0x[X1FfZuN%tZ+;,l,>9502#tkKFap7(NDvgWq$KwL;%!Sh?GAJR-/fT2@' );
define( 'SECURE_AUTH_SALT', '&:M4AYQ]%~h~wuo*9ij-2&@1/Y-*fMA1UuqmM/pr:]~N,</QcED=BO1w4}Nn=@,r' );
define( 'LOGGED_IN_SALT',   ',wur.&U=H/*p(2x>8|@PPV/ZL(9HH`KE9Xt&pd%^eB)Z9yInBoP#Zs[a4#XR~nx@' );
define( 'NONCE_SALT',       's!6T3Zt2*g6-4{1a%AQ &v+F;@kqf7naxv7ppMF%Pw;eP[L*:g)IT6G%K%kC{!]^' );

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

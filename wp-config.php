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
define( 'DB_NAME', 'MAMP_WP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!}#F4gR*ur9MdjjN2kl9|6u[)NKyz42;=l2CfI pQ9CCPf&F=gq_GdMd+cxL/AOn' );
define( 'SECURE_AUTH_KEY',  'RdWnr_0BqkLkAY)z&K!vm~iY/h UTN1nZ<K_?^N$Q~bJ9H}B5TejYR}kQR2_yM)E' );
define( 'LOGGED_IN_KEY',    'R<Lw=7,ApK;yebpPuaJrKRGHg|x22E3_FVHM ^`DVcR|x3Xbnsv1/D5d6tt`y)34' );
define( 'NONCE_KEY',        'c(^;B3km6-|W=eNGxQqf*EX8wHcQZ9*%(zy>_gf&OtH-69 8jm%ydR[PL~MYq]!^' );
define( 'AUTH_SALT',        '#tjAJ.^[>;]A*:O$o& DUv2S15I[,7s1ShFC,2#8idT9ay,$h6`x^H3pQ*+C#+F)' );
define( 'SECURE_AUTH_SALT', 'mK6@oJOOnVU f;H|M3)F#U<o7$/|.N(_/?q;ozYAl4>y?ppg9b)IoQ=nW)<pNZ?T' );
define( 'LOGGED_IN_SALT',   'sV$m5sIu</w[!h,OtceM-NT%SoOFx_}BUe7?q&1NBI5IP?j]L=c%gR(J6!_LYATQ' );
define( 'NONCE_SALT',       '{Jtid2S05[7uuBVY[3dd|Pu@/vtGSDsN*,^GCM803e&~7+cj/7i`Z_c63VKvwO =' );

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

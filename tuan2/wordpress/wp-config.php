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
define( 'DB_NAME', 'nhanvien' );

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
define( 'AUTH_KEY',         'yr8%gd=LI-&PA0eR<vu,;Sx(_S(A;}jYNF<T1e GeDBc:6%,0/IHAQW,;;l:>9=o' );
define( 'SECURE_AUTH_KEY',  'QW5(F,spvy&rgm6(53S7pTkEE20jb3){_md~3cW sNeq`wd*x7pKr<>>ph=DcfVz' );
define( 'LOGGED_IN_KEY',    'OFpUtKs^5[Sha(D710d#/B|>:htnttKo3)&t/!pm{)+vJM 5c+arNqHuq3)~+dLz' );
define( 'NONCE_KEY',        'XMY`+=C.D>_eVt{i`Wei+3KDuy2/wR`L3jzqBJjAkKGzHzc-cLH{f4c81MPhD,KV' );
define( 'AUTH_SALT',        'Vy{*zL;nn;ulIPHwNnE{q(H!?s`Mp88^1ECp*#{fajzDLM%d(9*2csCN+G]ZD*ZE' );
define( 'SECURE_AUTH_SALT', 'felEm J&dbn^M^Se4w_]pK2Slw/P[&xZ_%~:t1o@q+qdj0IXuKjhQOI7NPl#Uip6' );
define( 'LOGGED_IN_SALT',   'fOyN$1yDW|VPV>|ym>tHLiZYM.F:lHcYXMmu|?:oJXGINoHs%(sP&$LD`:(Fa1Wt' );
define( 'NONCE_SALT',       'X?10ftS_3@WZ<v4~KT-f]XCksO|o6iKuWQ7[$W#m{KTM8md;5B{v9m:=s0iGWq~W' );

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

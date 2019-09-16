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
define( 'DB_NAME', 'hidrauturbo' );

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
define( 'AUTH_KEY',         'p,b)0%?7a ]vN4310,%O3KD15=2P4cSPcQq~kfi;!-ekYY0-30vFl#PCZXz}^ x>' );
define( 'SECURE_AUTH_KEY',  '0_UVj^k{MexNU#^W[rO*Y$:UZp$%Z!iefkiM<CmC,yePFm4*[^)&|{a(h7pBq0&e' );
define( 'LOGGED_IN_KEY',    'I>2We0$[tq4n -(-M8>y$I6<t*E!kXAKR*!387s&*RMsj>.%i~c?u|/{Az.v/F2v' );
define( 'NONCE_KEY',        '~DhyYkJ&2|/4X85z1o/#7w$o,^)ec@j#l2LtJncN]VD_,#mcK1/D$75T|.Wa.#Ro' );
define( 'AUTH_SALT',        'k6{>8r{_drA{mZ+!uWmtJgXH?>{7N;Sz+!p*d_v14&}*!4h.e<lQ7cM{6;*ZX){b' );
define( 'SECURE_AUTH_SALT', 'x>CxI+f1lP?DruC*u42Q^%X@A*@Re:/wOM)PTZO]?%?E,b>f/ju$/y8tGlAv9$3Q' );
define( 'LOGGED_IN_SALT',   'N/.#;]Lp|c:y92(azQA9+]-8B7`j_A/w[-}L4;!h$=oM5zk3W(KF5{eW#SN9~_Uk' );
define( 'NONCE_SALT',       'QIe7Cn.p^0vIXs,[&)AAh6s+3$vg=ZbUyZC$w,1,O-_GnU|^%~,01AyU{76W6^0!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hidrauturbo';

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

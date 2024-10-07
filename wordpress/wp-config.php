<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bosstek' );

/** Database username */
define( 'DB_USER', 'ngocanh' );

/** Database password */
define( 'DB_PASSWORD', '123456@a' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'h.]bS CQ?CjYO~xX+;0C4bEq{? F!(HrpinGY|r6~gFxBG2?J/Nc{6h_c&]Eyiw!' );
define( 'SECURE_AUTH_KEY',  '-@io(U#:Q,4ai*.)5%3[&2Nl0F:BMm4ZX)P< `51 g=IU*nA9IE/>JQ~yp>BK?!E' );
define( 'LOGGED_IN_KEY',    'i2a;n(kBN=6;MZvo#PxDq1I.n>wln!D DB,x&wQ0RI3o~USQ{m,pu.[h$MWz#_Ss' );
define( 'NONCE_KEY',        'qBYPfIj*y,Z*:uCbZ.Y|.`U5A`GC(%I> M(7|n+$kq|NYsj4d*QewH^F%]WCV7qB' );
define( 'AUTH_SALT',        'i?N2OeK:mUpun]UDi/)o&?JD;@sqR]gnv7Ly6KH#+-/&32oG_[e<~1`_hsh^;9@$' );
define( 'SECURE_AUTH_SALT', '5Dh6`H`L ~-BQu6)FHd6ni6;|f*2NTK:Zz:jI}.Eki_{Lt16 $7|~=XT(a#=YRYh' );
define( 'LOGGED_IN_SALT',   '62o!a0//7f U: 4CZG5xh:Q.uXrsRp=+:E|BR5]-K{_:KzfWeG}C<1>nv?2eLu~I' );
define( 'NONCE_SALT',       'q(!0SwG#.G(K(ujXGn]qm5Y}R-I/uunNq*3!`%Tb~gUP]^fr|#wB3Ao}^i%1tRaO' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

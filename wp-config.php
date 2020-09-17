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
define( 'DB_NAME', 'ujiwordpress' );

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
define( 'AUTH_KEY',         'cHdx>WBv@qbD26dM0l+b$9/bQ0>T+<Pt*!XRd j5?<E/Ok$Q6p%Lq5CC}6(vh}Q-' );
define( 'SECURE_AUTH_KEY',  'TuM,,j4<}*!{jgImv:J5~X.Os04L@ iQ&y%w1S5:c9jXuu$gcx39go{ !l0|b2:?' );
define( 'LOGGED_IN_KEY',    '[*#iznzulMoX`C/yATHcDJkqVY7~rg-?1~yrk2`ksaS[0J-a|7[&*BCu9?bpTyfo' );
define( 'NONCE_KEY',        'B jLXt/0zl4y^MlamP.SYkYR.(]Q7obH91h.xiEJv#+y6nV&]N9:FHWc[P/:rC$a' );
define( 'AUTH_SALT',        '3;D-6j.)l3[YVfxW3%wwHLq$=|[E XZ36.6auR,kJ]u.{:~v>9V3).OL[V26IaZQ' );
define( 'SECURE_AUTH_SALT', 'V|nfzWm4iQ%aoN04gcrer/.YN3[XX!uu^MX&>_jNNi5l~:/:::r]f<?DM^dhO-v9' );
define( 'LOGGED_IN_SALT',   '%B92VDtiz?(@l?#[oPwtiO6k(UzdkJ%{Vt=*5;iy7dE8=*3v>ryh+<j]m+OAvJYU' );
define( 'NONCE_SALT',       '0f1w;V${.o<}ZVvtH(%k.e<(+G}GwRjN>F<{1E8B%{LrPOLRc0L2q.lgY1*YOSj{' );

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

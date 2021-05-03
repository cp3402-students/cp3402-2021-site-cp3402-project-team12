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
define( 'DB_NAME', 'team12' );

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
define( 'AUTH_KEY',         'kSEQAu<CN(k+qZvYl~S>3wqk(!I3^B1dPY~!O+# AOjw7an`R6QxfbUj~tp{y6@5' );
define( 'SECURE_AUTH_KEY',  's`}X~K>ZOoHw9+0,,_y[85HCg(wYkCmIgFnVavQ}0$P4peBP%e$jNTMI..CLn~ev' );
define( 'LOGGED_IN_KEY',    '1:RHu.t5Y(7:R:i;W&@hx;W)j-GqtEt2W</SE?2i~RkY@(.yG7(BO9;p(CJeYIZF' );
define( 'NONCE_KEY',        '*!ddoHRgFSp3-,..tjHT-bPl/(K{Vf~^T$<Oq+eWi8iQc:W .A^S=0(Nq+LAW3^0' );
define( 'AUTH_SALT',        '|eH}p;a$iL:ex/9ns.QVQ?yN|%F ^2tmvDd9po=l5McrNV7YWvCXcIEyVhgpzu4<' );
define( 'SECURE_AUTH_SALT', 'a]}w#lMZh}w<B,KKiJ^,%#z~H6wC/5t~k0e:ugORil%c`y-OI1=E(^aY$O#~gOA}' );
define( 'LOGGED_IN_SALT',   'x<kJ`cEvvT$ZJjJ$W?%UQF=T{al9d3+4GT`EK5,=.5]Ve^pG~r7?T5].TU7S_]~-' );
define( 'NONCE_SALT',       'H|A*.9bM|BNl}iMQ}+)d,E4+aaQcWPQ[K[&9!a]7[Ljw@JY}:vKVwa(5!zn!Wz.k' );

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

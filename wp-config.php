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
define( 'DB_NAME', 'wp_store' );

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
define( 'AUTH_KEY',         '3SFL{@SJdY]BPm_Fn52ByR=&=9#<BPe;Y^f$~jE3HKo Nx1WZi2JCJ{Uu>}~xI=&' );
define( 'SECURE_AUTH_KEY',  'b4AN`-tBwxE.6Gi]XL!fB%A>d&>OfybWdVM9:E&MTc8B4CNcy@Vu%mR4&S|tb!HL' );
define( 'LOGGED_IN_KEY',    '4?&;c/3U3e880C!UIm2Xn)OwWIry<cg]r9Cy gES[yHKz*kD!_hDa )b`~I/|w#D' );
define( 'NONCE_KEY',        ' |2-3=| i(0ay*,4OOz&rK7d2a!:X:H_|HKu([Vq;PpHnY?Y8i/cy0?3)~$(&d$D' );
define( 'AUTH_SALT',        '!lt43x6O?g!4T;F*IZF5dz3L~/,)}E6jbrbEWY@53F]suKwvBrA0Gh+T][P_)gIn' );
define( 'SECURE_AUTH_SALT', 'kx_8&Q4MbR~qh5c-5p@@]7wo-K=W8Aj4/tc*a~R[E=@d72Gjxv_k0=+SE=gXwrR(' );
define( 'LOGGED_IN_SALT',   '5ozR~4kfAj3)|GoF.88^G%ZON|2PT|q7|C)n4N3: KMjd9#{9Hy#|d?:@VZZ_o?W' );
define( 'NONCE_SALT',       '1CckQ 3DL*6(eW528kOr`YG]VGsEuI#IC6@T;Wu63CJ,P9>Vh[~e0mg.Vz05)eOb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

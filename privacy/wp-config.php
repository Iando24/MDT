<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'umm10_wp462' );

/** MySQL database username */
define( 'DB_USER', 'umm10_wp462' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W4!7pYS8!h' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'upjtnmo2nsvkeym0aqgjzcf8ksygjhkzt0vhe0jiwej09ibp0p6m3osljh1fs8x3' );
define( 'SECURE_AUTH_KEY',  '4yayrivabnjdy1lnm8apohqlr8bgff2hcrewuuwdm9zy12dmrp2iqoiu1tlgaex1' );
define( 'LOGGED_IN_KEY',    'b3mvzairj7kzovkzxfgbvq4edebfev9ytyanrrnmvjy08k3tvibjiin8fqzszny9' );
define( 'NONCE_KEY',        'hkb5btyrypnao5khdj5sppkgsqgoyohlq7bt88mbrl2j6vwyh5zw1zl3lyjqiggb' );
define( 'AUTH_SALT',        'lrk5mwfy1zon0ln2gvyvzr4ioeokps7vkbxvyflswuii80fwpy5fln918qyx763z' );
define( 'SECURE_AUTH_SALT', 'xmg86e4jktnnv9dboxyu5hubn7ltstznmgczt6tbcghufi8zqyqd04wjbxwm7xvf' );
define( 'LOGGED_IN_SALT',   'jcjlbyjttcssopmu46ve4wzdr97rr2borjjneamijbsidknfy1oilzsqhn12dz1g' );
define( 'NONCE_SALT',       'wyhzzfid1xwua9wpvzslj9xhiogxcj98z7k2zcuufvlj8vwli1ggdnjff3giieei' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wply_';

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

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
define( 'DB_NAME', 'mivebeDBcncnq');

/** MySQL database username */
define( 'DB_USER', 'mivebeDBcncnq');

/** MySQL database password */
define( 'DB_PASSWORD', 'lI16ZLLqlW');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '*qieaWTLHD92;]#xuqmibXTPLHA62;].*+xumieaXP0}>^$zvrjfcYUMJFB7}>,$');
define( 'SECURE_AUTH_KEY', 'woldZVRKGC84:[|!-wshZWSOKG951:[_~-wslhdZVOKGC8bXTPIEA62;<.*+xqmie');
define( 'LOGGED_IN_KEY', 's[|~-wslhdZ+xuqiebXPLHEA6;]<.+xuqmeaXMIA62{.*+yumifbTPLIEA2;{.#_');
define( 'NONCE_KEY', '3}>,$zvrjfcRNFB840>,!@vrnkgYUQNJB740>plhdWSOKG951:[_~-wplhdZSOKG5');
define( 'AUTH_SALT', 'nfYUQMFB733{<.*yuqmjbXTPMEA62{.*+yqfbXUMIEA7{<.$yuqmfbXTMIEA64');
define( 'SECURE_AUTH_SALT', 'iaWTLHD92<.*+uqmibXTPLHA62;].*+xqmieieWSOLH951;]_~+xplheaSOKHD;]#');
define( 'LOGGED_IN_SALT', '$vnjKGC51:[_~-wolhdZROKGC51:[|wtplhZWSOKC951:#_~-splhZVSORNGC840[');
define( 'NONCE_SALT', '5:[_~-tpldZWOKGC;]#~-xplheWSOKD951]#_-wtpolhdVROGC84:[|!-wskhdZRN');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

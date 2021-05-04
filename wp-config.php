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
define( 'DB_NAME', 'godryosuke' );

/** MySQL database username */
define( 'DB_USER', 'godryosuke' );

/** MySQL database password */
define( 'DB_PASSWORD', 'euler3141' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X8ozDWWqigFzcebsTiTUPZ2H+8rEg+2gL+Jxao9Kc9ce+4fm2IHj7SOLNwOQNjyW+OU9iQFtuiIZByvu8f4Uvw==');
define('SECURE_AUTH_KEY',  'k3o+wRmee+z7Z08uMck3/ZJBImDlRv9R0NF33rGEW3xc+VEXvifHblv5jH79hc4WLsuiUp4QG083Kpe6EI3+Ww==');
define('LOGGED_IN_KEY',    'a+xXdXwU3h7eFTk/RgJbyqsuG8tjHfimL1U3HMGNzSAROYkPfkovXArLdQP71cZho5vNOOcSkdAXI/bqOcG1wA==');
define('NONCE_KEY',        'GBakkQE39LjyT9TjiysEXofAZNqaMgX+dsgVjxXsmy95El91tX5Xu2fAapY1M2rcyfM3CF6eqQYT9G6SR/biUA==');
define('AUTH_SALT',        'xYWcMT8sQ3bLqHcd9H9bExOG/8OLgnJT95gNY36eI1hHaSNlgmPY/YPUOdqfBbf9jmtGlcFFSEEkxmCiFgJo6g==');
define('SECURE_AUTH_SALT', 'Si9fmbZeG8lpW35Ei7ALacQfv7qt3d0ovQkxAbokRcepyB8I9sUe8QQ3dt+cJkZk7K8ThTTprJaOhoawm/0PNw==');
define('LOGGED_IN_SALT',   'abdllZCqZa23qKBMtsJedhe86385zFIQuvkibroZ+SKJ2Z9VU6IXsYzQv/Sm7x8FzFuSO53P5FBswQB8wzzDgA==');
define('NONCE_SALT',       'hdJYlUs9B68uOKSkF9s48Sj91RqbiVX3Ear8gYEwNNHiRWt016EzTNINmztvoTrG8uHUsbO5TIUGZWBGSUzjFg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

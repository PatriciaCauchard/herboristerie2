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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '+qUXJ9m6pg/wJkR6heSo6bFaUhqg85sM/5Avo0D9yIV/UaccbyTaHld4yRwq/3m7d70xLxPZ7OYtIhGdXJKu4w==');
define('SECURE_AUTH_KEY',  'eKIVywBB6BjpDxcdOnv6j3mjO48yYNYBnMlhUNaAOVZ/NYZS+atGaZQg9HVnLhnKQ/S/ukIHht2BARosZEh+BQ==');
define('LOGGED_IN_KEY',    '72v0cBnWkniIKb0aD0GERhsgRAhUA7OUByM2kAhz8FRegnZIdQeMj0c5mbkp2m44qnAnE80mwni0ZivLFdu3jQ==');
define('NONCE_KEY',        '1v7Z/eZdfCpXzIWEsHN6sq5J2OMVuw0XAU3H8p/23kAVbxml3gOYIm+FFZGLr2YeTM01nuTrDVzHYDuE5fHM9w==');
define('AUTH_SALT',        'KKZfaR8/BLUn+oTqnTEdiy/vAGP6mDLx7/tgiavvflq5atcWr8HSD6jJ35XCE+Tv3jaeqsACCDcJ80XWOR+XOA==');
define('SECURE_AUTH_SALT', 'uI+QQRvz+RW+5A7XkTuRL2yQBK0jT1xThPgWYAtaTKwYRcJc6WdVnKsjWxc8Ej7rKxNe/suVr9fQtd25VkVx9g==');
define('LOGGED_IN_SALT',   'UEs3DRNnw/KRY2f63xK0XlHop5ZXjsemHbUCCC1Kk0svOgUhxPUH+g5+4ViWBa9IFK7aI6T7YtBQHmjtO5hckw==');
define('NONCE_SALT',       'U9RhzTv4RaamAIYR9yjnVvoruJknW1euVXnpIblNwj7AMy1+RMDv72h0jyE16/fqoDHIvq3TI3SYwhGDCEXkOQ==');

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

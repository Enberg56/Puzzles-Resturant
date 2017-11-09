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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'lM98GZuwIvdI4Rq3dd3pPhkgQO/b16ntLtjHowJy58qSf3rTqtRI8wzesjUW60LiIwH0fqG5UPdrAzNF6J6VUg==');
define('SECURE_AUTH_KEY',  '26x5G2hrmulUCzfOKUym72gmzmN/6ttmsQ5NRPXXRTjxzWzywGM8ESuaVWw1T7WBP7ZdehDXUPf8sj5f2oRGXQ==');
define('LOGGED_IN_KEY',    'GYxtFQZ5Ue105v06dKYouDtZgzz6PwJDEsKKp6TUQYSUPfrqQxtCgkQF5KAjOp7qBH5wcHSnX7f3rr6n8GTndg==');
define('NONCE_KEY',        '9yChHABzZ+F8mnEGyQJBpwuIl0yRpUpi8GDkfwr1oRDX8YleTVfOQ4lrz7T0FXYcaJmCQxbuY3yqWHyAT0SIbA==');
define('AUTH_SALT',        '7ORCiY2fVWwDICCJrS1uXKz6NtL5DWbAmMLUweq91o19YiXCDZbkVOvUJpAImM3L4bX2du8KFzXjiU+LAeeO6w==');
define('SECURE_AUTH_SALT', 'h4g8QJqPghXwPfEC280dKrdPd1O1KuCA413tTKPEOStL6H9KQtn9zUkm6gyGLEZJGAxXUIxedmbfaFKCgATmeQ==');
define('LOGGED_IN_SALT',   'iWe4ETM7TYhBs/Bfj3zVRSkkOO5qXB1Ouj5MhmNZzoqWNIjr1vvaG9zLF72gmE+hDgmIuJCOOFDKKJEJKhdaUQ==');
define('NONCE_SALT',       'F8ytqSkz4E8pIWVvEq3X3gUuONC6HJkOLT4egn5hsvuRXXUkj7JcuxomvdI2KcmcEQqHscjKOxcp+JH6P1fdXg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

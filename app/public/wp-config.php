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
define('AUTH_KEY',         'RxYGF5opAo8qKjOok1Q7jK9dcrQxt7AkJFjBolHOakxlrQDi0CUZ73rPG96m0SIk3DjVZvwh2aejE5nQ/CGYfQ==');
define('SECURE_AUTH_KEY',  'x65IElp7ZzIqm2ZjFmMmB5jfhFjxhbnnTmkwVvbMS3jVJLwIN4LtU5AuvGsFO/lw6OWC834kw40gtRRfJjdPDQ==');
define('LOGGED_IN_KEY',    'h7BfzmUzdmQwPtPc6zGwsngiXVNIi7U+Hy06hLKn8SPycgvddeWYetupt9fxH6rUH9RYtVe5UXJ6Yz8XneFYAQ==');
define('NONCE_KEY',        'mQIPd20rr+q3Dq0J/d9Q6EA5aFhaYWcBCGtVGCr1GvN9E35CX/EeGG/EgTnp5MjHIv9xiku76EFanurDYmMKvw==');
define('AUTH_SALT',        '0GERgLOzxwHZnOyLTBliPimcQJw/lAVoPZ0TEllPZLduxqxTOG7l5FcWzwI0ozFp0RLoyeTeGSmiquC0j5hukw==');
define('SECURE_AUTH_SALT', 'KLCbQEdOpVve+JoTxgUuW5IQYqLpcBj8YGasJ+8H5eu6i4SxiY7o7pD/Ij26BVhU9WvXXFi6dORASUelbqdBYw==');
define('LOGGED_IN_SALT',   '70nBm+GWjVZwakGEHDxlmlo3t29f/8O7FDhaW2DHxtEp1DpNdyxEOqaulcXkdinY9OggD5K/V9U93X6iKVoNcw==');
define('NONCE_SALT',       '0J/jS5aYVRfb3lHLUK2ixhv3v6REPa6LmGw5M92HDEkRISaxY6kZUf4aX6vOGic++OLjE0dg/swB7704Crj5sg==');

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

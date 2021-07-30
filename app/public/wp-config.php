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
define('AUTH_KEY',         'ICCrymX6r1UIhiJ32FZegKeOVb0VS2DZydgkYSiKBVDwQOGr1gAcgbortacaUstbRa0HbirSasm1EMeBe02idA==');
define('SECURE_AUTH_KEY',  '0WZPsxNsI2W/gSH9P/YEFclng8RHfZ32E5yOhla+9Jqp+bG2kTArGBun6WU6MFYiouMIh6Owkzq3sMwE/gYbgw==');
define('LOGGED_IN_KEY',    'I0y2Yucba0mrbyf/iamfu6Yhr5KglhX9Q/ySgnoKR3wN1JOHRuXMQpTwim42tPFHBbFxkr/RlpgeiRB8tvjWnQ==');
define('NONCE_KEY',        'eo7pUVF1THLwuUViQHqJOxyy9Aa96kIXP0Lt90+n96nDktGsI/8FGjByqDU91oJyVfUmkw3FsEQfs/G8dRt9Xg==');
define('AUTH_SALT',        'SGl9w6QFU2s99CS8EQJdkP7j6wXNjMg/e6M4huy+pnEippfyLpQWB8BHzdbxsr5vZ/9NpZNtvKS7jBuhwg0VYA==');
define('SECURE_AUTH_SALT', 'ubYAP+r1JRvAfo1dfgO5HrnYnrek3K1KpmS6DtKy12NfcK4A99lhYKNjGv0/FSOLQEUFcrg2G2Sj3Vqj02rnaQ==');
define('LOGGED_IN_SALT',   'bivWmOSLFCdgrkdub5Wk3hBw6nd97I4IK2JZBMGikb0dWFy/FFPTjj74R1RqAB4XCnGv/ukE3fz0RwvNQvZgMw==');
define('NONCE_SALT',       'EH0jMRLfbKNh7weHDOY9/6JqQkG/mVGNI2Hgs8OucfAcGwmTQMWx8kytyhhs96obRV1WvvnmwlsufpGg+l/sXA==');

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

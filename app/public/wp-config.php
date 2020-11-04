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
define('AUTH_KEY',         'Gn6YLy5iI0cKVj1sBlL/leMaphwZiMmnhQmOufKeoLJAKqgc/SJlpHYPxaP52ZPi/2GRcS/HqvteYHf1/7tNcw==');
define('SECURE_AUTH_KEY',  'B397lbmYmt5I+gxGwcNBQ4V2GiwJMmecPkDlu9iVsPSuXcCLohfJeJgVcOKUI2WXZKj0/iwbUcZR90ITCGpTTA==');
define('LOGGED_IN_KEY',    '2P/jIEIpNL8M4L03htO4/8c8irjEA3xJfImsIqWVhewSY+ii+t/8JyaOXyeifSSRvi3xyCnUeU74RY91EvA18A==');
define('NONCE_KEY',        'hDD532wTVXwR5a/RCVTh/Oi+ArLf9GTWuyChDWcdqeNmllMM4HZ66XaEh6Ir96DjnoW2HGfzV658uNt9/5cCgg==');
define('AUTH_SALT',        '7ufD3VQN2zjqB95oJfNxKWTf5Z+TkPCstNxI8/UktBtKU1e096gxcXtrJVMGsYq+Eq6uFqM6rak0XVSEYs/W2A==');
define('SECURE_AUTH_SALT', 'V2RCzpCFozdOAS23nrrr3tQmls4ZjNCPd20+pvRdyMgDijB4nqwBimjDnTi9Tyh8J7f8I8LktpH19DepqG6W8A==');
define('LOGGED_IN_SALT',   'xVIyWF0eXwroxsZNXtoEYyvsPuncbdtWdKk8c6gIKB9z1FRGC9P9uL7DohoR0gpZyEoDXNYkbfEbRDwtVneMWw==');
define('NONCE_SALT',       'phumUQ9OL8ntlMXUZd9nIr5OmVC0BkL1Z4F+39/mKdH/+/xyAeNwuYIVXCwRiDJLQ9e0d6M0Ui9/TAFK+3Jd4w==');

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

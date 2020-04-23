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
define('AUTH_KEY',         'zYchDhVmH8X4s0zqeHaqg5lICCJjdavtuFNFokCbLgAHZTC1g1sYvZPI0ade0Pta9BusbxOLzd1r+s+0gueWkg==');
define('SECURE_AUTH_KEY',  'hhR/j2/d9qxsvN+buvf6ZhCPXxz1YSkOapKEcfxgr/+N0H9jXUu0PX00cPViS6wBaHcGvhQ5uMXKACGIJYU2uA==');
define('LOGGED_IN_KEY',    'wC+vRFM+WoDFZWFVLUke0PvArZ622gS7KybMqaLkhgtDAPWrHwPOpD2IVqI43OEipM/fmIO4So0yniSGH2LIsA==');
define('NONCE_KEY',        'slAjZJuiBhI+mgRu3qE2WYmhUJ9zLHh5e+mogusJmQEoXzzjWurndrMGb9oICYcn9p31uWGcgRdMZu5SoViZoA==');
define('AUTH_SALT',        'Ap+TGbCbHhCWk3ILs6G3rL7pqDic9IPkTTqTpQ08G+dZYAgxPm0rX+lNHIAgDH0ZONeQJ2avI4Pmo5hf8OGOvw==');
define('SECURE_AUTH_SALT', 'rS8E83ekpy/+obbbkpQIs7zD1UohhKnpYjRUO9DqDegGCon56Lbi/u5gL0Yg05rVEQVRKzNyhLntn1CnpEZ5wg==');
define('LOGGED_IN_SALT',   'VS6Q5kUv/+f63zQrsz+yxMHWl+znVMzkd0aXkwq0ZWVBXTO4ESO6+sCNi6bFlIZ4obuKMW/+lPiayAh20frbew==');
define('NONCE_SALT',       'R48jza87+ei1pz5kqS1jemlYJ+ZAWTvRL7hmelobs/mcwxn5Q5/9bABydXz3F+8Jy9fmchKRS6BI/gJgJGzCrA==');

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

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
define('AUTH_KEY',         'Za7bismOEcDHnfvsIR/8wQlrOoS/Hb5Kzgy7TAx4d+CkueRYjBAmJTpOL6Lq6hkkxrftApAT3d7BtT2S7vhRXA==');
define('SECURE_AUTH_KEY',  'tsNRdlTI1qOQFwjo8Nt9Vkq9gVGG4FFx9NutUqGXIiJxiJn7VFMbudEwAMfJ+SDlf5L0QL8/U69KX/gBbISt6Q==');
define('LOGGED_IN_KEY',    'ulFBq6xZUpXwouL0yup8UeMUyhglP8/fHaAwDARcp6dnDlOG96CIMktfXMOx6GAIIJCWGBCHfFfqev5C/b/A3A==');
define('NONCE_KEY',        'fYU18aTBSCUmR7lJbjhNF6+iIGyiWamPOJseiCU6e/Ff2NVuvRfzzhSGFXYz67vG8j5OL1980C1Psh7NNnkCvA==');
define('AUTH_SALT',        'rEa50jkJVfXisFdydah89HW/FQY1lOMJi3v7gUOTc44AtwC2UOBMEWmf0rDgtADnkEAQh0GDPVn5bSnW7B04lQ==');
define('SECURE_AUTH_SALT', '6a3YAL91kVd4F/NQB8eK7xnNrSQ25XYPdrf57aWGBjOijT7Az8Wmkpc22pr/1WgNyqZYnItQ8RBFTgGHguGNQw==');
define('LOGGED_IN_SALT',   'jTh1gw9+G0VkG4DsTk9DRYJVAWiuQInHTWMp7qz4PULKY+f828Q+PqaYS3xKoh3/4xw8CKqaYq8/13qhdaZ+5g==');
define('NONCE_SALT',       'qAMqt0OcgCgeRa+2hy5kLPOooAWdRHkMg8OMTbRDSNVOb4BRUOLAwojg2SLol4pWfGsuUVvHl36oKiK98iMvGQ==');

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

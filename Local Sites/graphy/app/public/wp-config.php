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
define('AUTH_KEY',         'DVCVohmWaTtG4ZuNqhnvTA7morqoy1YFwYNo/yZ1980onI1w1+TPYR9+XqcthelRu0bIxgg34rk9o9w2S6wLrA==');
define('SECURE_AUTH_KEY',  'EGn3CTyED+1JrwOb/6XnMyyXnAs1keJDDQeTPVs6gDYxt3h4GuSXTHNzhoCfKN57SbUc0OpdklJ86tUrC39uYA==');
define('LOGGED_IN_KEY',    'OFFSydqz6NmCBEXNFKakqPnsWH/WbfLN+piGivMUjQtEBzPKt1GRaS34Tzc6jxd6limRzTp+d+dgnYf3cG1v4g==');
define('NONCE_KEY',        'UhnOGq37lcCNF+YgbzdTTMqscygAD0wGJn65UKXlxvfGTcFTN3lfIMmxJ4RhI5BJDzWqwqXPqBZQ8cX3hbusww==');
define('AUTH_SALT',        'NrCPM6RJEgl1J57CjtTbEVI7YgDFKO3fUGYzUH37vWTZRTSN+tV+iiriZaYTLmV3AWobNSu4VG0gHvYaStYlNw==');
define('SECURE_AUTH_SALT', '2/Z2Qv0UHz4J4Saw11xuLyKUeMU5WJMtWrMZwPC6WNPsCdgGODmHJ7S+GM94McRY3sJ8gMRY8aiugnOmCUwMiw==');
define('LOGGED_IN_SALT',   'X14foCowh1YgjO6XnAC4VTCEINh0NV+NBpvcThIsczOsujrmKBvfs1JlrUnEeszcgy7MVa+Bkvw2U4CUKR/dVA==');
define('NONCE_SALT',       'VbGU/sj7QmOp2+IQY0QNg0osSpswW9oxsX2BYZ/7k0ZnnP0C3MXwxB+XxHrv5pa2rIRZiiPnuTT6jj57U+eW0g==');

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

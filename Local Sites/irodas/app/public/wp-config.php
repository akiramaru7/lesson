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
define('AUTH_KEY',         'LS8sEcp7dIW+2oFwmm39Xji1Kno5RqGGzny43nCvlMkOBbzy0EgjGChtD3yDVcqRJGlOyDRHo5mBqvhcserS0A==');
define('SECURE_AUTH_KEY',  'jyqvfY3e3DPEpggoMz5mzvi7Mjh2Y7/DuKNXsAJC5Mg6lmS14LmaUgeT+Irff/V5vjjSy9ktEXSDnfPdWVnnSA==');
define('LOGGED_IN_KEY',    '2BS5FzhqQ3nEsqxB6rbSd6KguO7dQvYCmVCD6HMqQWtRD3ThyBNmBnTCLA+Gbtms4Lb2Fo0WvAI6lG00WwjYSg==');
define('NONCE_KEY',        'vjz79IqBeg4nAwelbnbCFvo7CXf+cVRiibL3CLtMaOevHw7QPsl4s3QOApYMsnOAVYTX1qvPVmJZQxZeUA3PvA==');
define('AUTH_SALT',        'nfEtxfblHQCe9FL678eMO+vGLybnD+4gLrydXxHyT5FbdtJiTEbR4y0tw9u5qOTQaCo3z49VNOufgr1A+tAicg==');
define('SECURE_AUTH_SALT', 'qIpGQZCazdEPE6a6DG/A427Q/nFAkqUWYS2aDjXdN+kV4XVTQQGE0DYlH/rQUFFttbDBdnHJAzVzLyUY0VPEeA==');
define('LOGGED_IN_SALT',   'VY+FaKd3wl9byo5f7dBd+x+TUxQPKqKR8tlkGwyVzJL7uDnYf/quRiRSiBhodrS1ABMUbf/K3MlEtaA0qq4sGg==');
define('NONCE_SALT',       '2T8llQL9352cux9xyM5yUL4dCwEnBlUVSHwUCocExPydUDlukutibAcwgSVuYBUV/A8jM6nw5q3bY3bu67KIpQ==');

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

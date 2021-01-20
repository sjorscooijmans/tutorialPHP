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

if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbuakoi7aql82a' );
	define( 'DB_USER', 'u1wmgjiaueqgm' );
	define( 'DB_PASSWORD', 'GoogleBAE' );
	define( 'DB_HOST', '127.0.0.1' );
}


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
define('AUTH_KEY',         'xlBHsaZiu7YnEp21GjwhdIVUFgvPssrRb5YTHRfNTksGBHPzu7o6mUfjJRX4+Xq+lfykeftm1RAi96wxHpA0OQ==');
define('SECURE_AUTH_KEY',  '5oMlV2Kl4X1RfNX+Ts57s4Su6aYL4N4/qTILbqCNnzFhqA5Vs9Pl/u4vfzg4tc6mEhvlVrDuEKJiqvPLq8JkrA==');
define('LOGGED_IN_KEY',    'mHijyxblYcI3D5uzYCRJ234CJwBAGJL4W4KTd3f9vNTHAW+ocrUQrbna4I41B7u7KZrWCRs452prZE0b5zH3UA==');
define('NONCE_KEY',        'geyLNLRy/AsyHVZ594lVn8GbuGCLIg4HnEy9TxHZjrToKVhqHn7WvbUuLDULIHlHvOuW8a3ot98vG94czLt/CA==');
define('AUTH_SALT',        'UR/nRz36Tbxx8WcClBTUAQAVFFHwWQD054b1Dm5iheM5spbRf/xsJaYlIEO7hT/I6uIGRtDefXAkpT4eP6lArg==');
define('SECURE_AUTH_SALT', 'WZM/5MD1E538htey70SW2bvlzlVYg2BbGlRKEiyuFwafqZjL6H/L0SzkaI+UySFHELQ5EKOa4CChzk+QEgz4xg==');
define('LOGGED_IN_SALT',   'Mm2THj0llQc0sg5fR+RI3zRYlN/UStONJMWDURWd922iDndI/5DNzPgiT59ogwARi1MkyrKIpJCEvR7KJZbQtQ==');
define('NONCE_SALT',       'suiH6P4fCX3Q3zBft1qlM+rfyojKwP2JyoxqepL/R0PkfSsvY9IeLMBnPjtZZ52CLsGEJT1/NhnL/2opR5vdOQ==');

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

<?php
define( 'WP_CACHE', true );
/** Enable W3 Total Cache */
 // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', "tesla_copy" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'erqkynorktpsdzucisdtr750un5nmc1x5t4mta2romd200uobjqodavpivyuc6f1' );
define( 'SECURE_AUTH_KEY',  'lolfgichixm0eewne3iq8o8sfu2qrb3yaau6nud1cducmsxtcqmnpbengbxtb1oi' );
define( 'LOGGED_IN_KEY',    'gyi47ruxfow5ib9fihy8ayeyooi1bo6uitg2xzyfdgsufhphh8sh3fxro2pubwrk' );
define( 'NONCE_KEY',        'wfaftplit9jlhndrqycxyv0tki2ef13swymfpdtkasj1icwqynlf48gm0atvwaxy' );
define( 'AUTH_SALT',        'ktlunnb9wku4irg2o5fwijjk9v3ahsuzayjicmmxmyr3knhqz6cxke01avhlfxrl' );
define( 'SECURE_AUTH_SALT', '4bcmui6wkiqutibobnxn5diz5aep5erqcwroro0f3ueuztqtgtwgzw2cwfgxlwtj' );
define( 'LOGGED_IN_SALT',   'cf51xzijoagb9vpkf0skfwsl2awwlyovenjfuoj1wqcjmyk6ikqiykkf6q9tuqao' );
define( 'NONCE_SALT',       'muetxch5wabscqoocwlvhsc8n9mbvtzu7wsswv0mxdsxus3pyvzv0fuwmd8rzp1n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi8_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* Multisite */
define( 'MULTISITE', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/tesla-copy/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* added to solve problem There has been a critical error on this website. by ahmed sobhy*/

define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );


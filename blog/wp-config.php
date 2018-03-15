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
define('DB_NAME', 'i2343348_wp1');

/** MySQL database username */
define('DB_USER', 'i2343348_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'L~5wMn&2bf1b&Ovg^8(55(@5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bcANje53oYCLKQ9aB58Hn20j5Kc1um4OCbJFmRRrQzLlhinWGjxdVVVMUqQHPJFI');
define('SECURE_AUTH_KEY',  'NQcspYiNgvDTCoP4LK8VKvPgKgYHggIVJJjvbPkq1BBf46bZN7k3IjHypqUITqqI');
define('LOGGED_IN_KEY',    'Ylf77rm3QRA0ieF9D0l7IrhyWm1xTOCAQgx2KnpSiEpmlXamkvcv2t7EhsjOQoZI');
define('NONCE_KEY',        'hN87sMY3z26ARp67J51Gw6LjcZAQTARlGMU9td7uHMZZ5KzWb5jS4bAfJBE4p0AO');
define('AUTH_SALT',        'guPgX0eW7tJ2YZlAoGsP1V9czqIOOcbWEaTdNcml2hX5qP3bfYAkthWwmnTPZFWP');
define('SECURE_AUTH_SALT', 'u1dHVp3fyqZZUUIBj5QXt9GYGbXA2WPl7OrMaxrK9y0i9m6N0WFHbiRNjz8VJugF');
define('LOGGED_IN_SALT',   '7ahlKXBWcVZdM5X1AFxY5lsWiZsHGEK41YOex9P14Wu9rwrQ5wPKPdUCc6jlh2jW');
define('NONCE_SALT',       'lIKaFnyweUBj8kkAycwdEzQo3pRZ2NcwPfyMlhQ2hjkSGEMMeCfow2f4dDUD6Xm1');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

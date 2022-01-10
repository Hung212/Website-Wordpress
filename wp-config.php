<?php
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
define( 'DB_NAME', 'h5uc8imz_wp335' );

/** MySQL database username */
define( 'DB_USER', 'h5uc8imz_wp335' );

/** MySQL database password */
define( 'DB_PASSWORD', '@4p]S5374S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'r1qrv9e5dt5fl0jpv5z1qgycwj9pkv6eccqkwffkhho6hl1erhrvhkzggz19agwf' );
define( 'SECURE_AUTH_KEY',  'nva3pcllwcnpwcxvbocbirvvpbgwxj0pst3ckmr2jlrwp4ugpbf0z3ssidenpcno' );
define( 'LOGGED_IN_KEY',    'qhwabfd5ckjqvxhstn7rbstx5u8v3vuqxek7lg9wbf5vnwiy92htwlhoyd8500rs' );
define( 'NONCE_KEY',        'kceh30cqi8maycdnaehrsbxknbyj9rfm3uy7nefuth8gtldwkfkynjg4zwddu051' );
define( 'AUTH_SALT',        'wcmdhdphrrrf6blrxz5qojr8gj11mqccvpo6s1tachxfhlhiesaekkstp3wj7zu9' );
define( 'SECURE_AUTH_SALT', 'ewoe0ozewhwht2pk3tfyytpubfqwgxu0wlb6b9xdeibryudj4fxnr4hsl78fjfgh' );
define( 'LOGGED_IN_SALT',   '9tp83wmu0ocqde8vnhxketybby499981ko6nwhp6iqidw2zbb8pkt6ihxkw2jqqt' );
define( 'NONCE_SALT',       'pccczuqgkpnjupcuajapcfszhngahipnxe6zalwfsaprlyuwkz8uryavxtms0xes' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpny_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

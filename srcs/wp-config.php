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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}IJoU+$TdGUr5)pxX~<;axEzw/R+/%;#EC^&EECXk&J0.*iDi{;uZ&B+d5aGkU9(');
define('SECURE_AUTH_KEY',  '-$y[S$Spo JzEdOh,L>qyc$?4ersY+- ;|r=Ze*Z$l#9$:Q#gl_N6}QUkO?U!;j9');
define('LOGGED_IN_KEY',    'A`ofzr)b2U8vB |+lvsxVs#.A|_^!6Ls]Ua|`9gx=jWN6t:6@;qC|||]_(Yp]>Q@');
define('NONCE_KEY',        '<h?o7[Y+srhS8.Guw6`QykO]Ih3RvNcL2+GSVX3#iAj-hrI.FA87_j<cg%@-uNh ');
define('AUTH_SALT',        '$>v-+$jMh2J@-M+^ 7!B_}EpZl.R#7b``2jpLbeC[-^l 0+^dt9*:NjJ0wex3<KN');
define('SECURE_AUTH_SALT', 'Q>rz^~)K+>,|~?zDj?]-+f;m7#PRjTrsN+T4SC0^c%s-DqPkM|E0y0kv~;R)1rT6');
define('LOGGED_IN_SALT',   'XNQcR#>FH Jyp6!f5!UgZ6zx`{KBR xOkFb+d-$kwusRT3&d0Alr%<|Fa?+}>_7J');
define('NONCE_SALT',       'r`rGU.1+cx2UvprYfmhgm>tjJMPDc5IfN2^YBJth<3z}xZQ|eVy|A9qy?Yn,Hi2p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

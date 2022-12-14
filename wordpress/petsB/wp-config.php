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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'petsb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '2&%D]~yl5?$V,:0%P>M& I)#O<](B#[9MM5Wspc4jXlAU&Q88r>(mDq+THid6CyC' );
define( 'SECURE_AUTH_KEY',  'Q7#{WX`pa<7:z!?ymv3DuI+@T0=VGhfe]I&JS11P2qe#U@9YROW.S?KxEeQ`]C/w' );
define( 'LOGGED_IN_KEY',    '6dKbK31mR7V[uwLLx=0T5>5sA,4gJfmuJW~pvw0*j>nH>:$0jV@03+v;0k]5oP3!' );
define( 'NONCE_KEY',        'et`Z_^DisCXVn#fkNO+R^eQ8S5hAK/@Y%Y7/B.bKvW&w7Lvz02VLE)()Uq;{j#V2' );
define( 'AUTH_SALT',        '^T=<Jf~&^v2a@,tO]K(8vaKW;.3^Sq 783*:}#,yfK`rf3{0QNK?f+3CLz@v%>`T' );
define( 'SECURE_AUTH_SALT', '12~j8]tb|E,/Y/UJ0Q#Hm${3 x*l/z+TR8<#FF8}A1}<GwZ:_6CpFMC^:fXdCNHA' );
define( 'LOGGED_IN_SALT',   ')= N_$V:U~3kIoWH+4U^VB:CrI3UK>(qwZGjh)XVZFEJtI6*<ajL7s:.K!g02f?O' );
define( 'NONCE_SALT',       'W+#Baz2#JAw:6r+ltI@1i.K?iC&W?[9enk}NSgT|tHn!Jo.Hcc>X;ZWLGFIl%c>N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rp_';

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

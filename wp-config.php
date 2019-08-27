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
define( 'DB_NAME', 'prasaka_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'myzisnumber1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '|Np16S;MID@imOi7lnZt1ZCgCq1!v%3+7Pu{]=PazphJqhilwc919juO?et,#F}h' );
define( 'SECURE_AUTH_KEY',  '~,M`12-BD}E9Z%Vi6>K+?p!C9c%F)4f<NJUK%u =Oe?gt{5>Dj{M<4T5r)EUGWqR' );
define( 'LOGGED_IN_KEY',    '=S9wwB^eXF<(M~@uY3TB|*UfuWppm__p>ffx2r/<YzpOqVpU..G+}M^:O|X^vY1i' );
define( 'NONCE_KEY',        'fKr`-*Y[*48 tCrlt;>>OE)h$TBsC6kv+db%J3O.2)c*9[(/|x%C<k%yNR`u)Y//' );
define( 'AUTH_SALT',        'o@s c!/w_+p0r`BH.N [<ekq?cGIa^3dei H?}0_GqP^}:~k `HJm0mMT-[cbJqo' );
define( 'SECURE_AUTH_SALT', '-x7BhVu^y313y{y|p}.-qH4P`F@5dfcX80},f7%3HY S&73Xeh_2~h]K.;e4/RCU' );
define( 'LOGGED_IN_SALT',   'xFhc!^3*}_/M^T9Q3Mc3pT~t(~5Re2]]5k)0-h]{@Src90d)k+hqgHe.Z_@&{v>.' );
define( 'NONCE_SALT',       'h10,26LLcsrx/Cj^8H6:Oi$:unW:}?p-Rvh&&A_WWvGZ0SdDX]w?+#N8f)8f.,-B' );
// define( 'WP_HOME', 'http://www.prasaka.test' );
// define( 'WP_SITEURL', 'http://www.prasaka.test' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

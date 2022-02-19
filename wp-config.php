<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'abhi_database' );

/** MySQL database username */
define( 'DB_USER', 'abhi_database' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Abhi@321!' );

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
define( 'AUTH_KEY',         'tbfuNuQvU~ ^;,;n{$`cr4 CR=N,`AW,2(P3wg#R;|,~e^:>Z-!PLm5P{^[ST^_,' );
define( 'SECURE_AUTH_KEY',  'xnE` onunse(azsn}(M7>pOuc(Gj_e&e+pxN%t=9Y<v aMC:*!)[{EMUV$E<Q{I0' );
define( 'LOGGED_IN_KEY',    'u&B}]f#w&y-(R1hAM&E_sOv1N`Rvd~Nn{Chak#snp3Y}fbVi3](nwFbm94!Be>r7' );
define( 'NONCE_KEY',        '6~=qL(fE|f9x/){50Ff{@GVtTvSpCw~a!>UR=hS1=ub?&t_95-M3gi&ZokDR}<#@' );
define( 'AUTH_SALT',        'de)b$u!a}of)!%}bP!2VD{8>|m3RR4wX?Zn2z6EutkZ-9;&cu+s4}UI&Dkk(;LPL' );
define( 'SECURE_AUTH_SALT', '9{=W/>o8Ys(0%cCyKIvN{q[1-dY<yd5,/`ApQNF&Gw{|X@?{>kv0y9wVdtZloq$R' );
define( 'LOGGED_IN_SALT',   '2de)TYcw-@W[VSy@ /d{LDR96EPULWS6CL3h(VFVRz6zsS}(.s*nNWn3P.QDb}Jd' );
define( 'NONCE_SALT',       'm.&GPYjH4/zX}H/{%Y7`$%kEQ!j<^[$^:qvD8IiGboqkqOKJyxp)-z)5QB<xk+Q3' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

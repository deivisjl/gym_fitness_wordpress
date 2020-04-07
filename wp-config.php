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
define( 'DB_NAME', 'gym' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'm;`T<1N,F)oq9(dPbBC4.~#pZUD0=zBMRnefN>LeN>}7s]<N/epP_qR7ZrgOkL=<' );
define( 'SECURE_AUTH_KEY',  '][_w;EaHZy~covFu*O5IhJ`v{S,#J8 1Vb!;B8`Vsk6n=^v}?Kt~,oz:M4uvAtH}' );
define( 'LOGGED_IN_KEY',    'A9kJ@kYf<G0`SMRwvwowX1Py,RN}{>z%z_?Qza@FUg=ms^{gx=p;T@NzABa1vLJ/' );
define( 'NONCE_KEY',        'DXa2SD-=4[$vpQrzV}S($G=dJG6ml(5_q]FYpw<-+=RLVNtAMfYHAN<Qy>g)mI}D' );
define( 'AUTH_SALT',        'ZUkY%%SN7 4ed&dqwINH6mASw@H;oe#dGnRoMlwZ3izz=E{[-%S5?EqK!hAC*@ 9' );
define( 'SECURE_AUTH_SALT', 'cHU6rKjw2G.rhlI-Nu5Im{(N==>Z:UO@=.p]5n/F*2BMtsQGrR0,q{D<s^G}1M%L' );
define( 'LOGGED_IN_SALT',   '(B,X.ae!I$TneckYoAW|%iM,TzwAX!|j+]9rsyn:[WVmzDOHgCyj]OTn}h&Z=V{J' );
define( 'NONCE_SALT',       'k>u/Ka5-`bPW3)qFjf]%[<,~{+dDOtFXKpPw2*zd?{{Jv0wdn/]V(M- uA t&(y?' );

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

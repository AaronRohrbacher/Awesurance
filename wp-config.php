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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '=pHO]Dep)LP8{M!sg604!IlQ H:erhVWm.^8C|Y^bzuuvqh[5Kx))opRZ8A.{Jo^');
define('SECURE_AUTH_KEY',  '`;j<~IXZrN+ MIm-%KkJGp&YFoPQ0q?TSnxL .@+REH0/>L:gwReU<>X{sFl5loY');
define('LOGGED_IN_KEY',    'grpXdES_<#t89i~A>mze+5%Cg=#?02>wBY`FJ&WRAFPGd_~4FCx*x}Z*;~Sg/zGf');
define('NONCE_KEY',        '|my_SFEPJn9pS/&`)EeeHgf$uA->|zF?q^o/?CQsY35}Y((zp`/+<mmUig::ie3z');
define('AUTH_SALT',        'T/Dl]q+(:L ,T-W*]>_HIbbh)||5cpQ;lT/cwS][)J%l&>Ly,f^Y-*[(uM(qjrw/');
define('SECURE_AUTH_SALT', 'yz$/eW9^OJ&Rqh<SfpBze;s=hvFuwTzwDA8w=n]:k;g[).Bca%EQ-Vu0+c;rp/HL');
define('LOGGED_IN_SALT',   ':E9+@&#S%,<gKs@D6ZD$kiu 1_6YSoI5I^.B=o1QDu-a6L!8(2F9qIki29nN6z|Y');
define('NONCE_SALT',       'Seyy^76m^;-8`JclA0$XMFl4Jl>><~XQgb]KVVW@l;NKrF6E7Z]tmw<GYg)0_kRK');

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

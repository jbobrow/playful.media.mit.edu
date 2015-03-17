<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'playful');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '72[xR&sMMO+_$Y+d.zxIyw^?a-Fh;12H)|{lA?~T5s:_jK8RxiPl?<L@ x_v{|{e');
define('SECURE_AUTH_KEY',  'zR#Zy`ftV>Qf-?Ii~WG2+en[]F}+~f]i[%0WIbK(QodqFmWsF!GAn+]:+F-WEc[!');
define('LOGGED_IN_KEY',    'NQ~TDOkF` y[YWwsZpZvQ8_Vd:VJhCqDX%P#9-tj9Dy;D%k D<|CA1CpG1Tz A=E');
define('NONCE_KEY',        'msP|FN}jVwAN ?BLkr@ 7f-q=;A187t+|m$n*LVWKY+|VAo(Vx7kyp}V%7s|08H7');
define('AUTH_SALT',        '~Tw$Bz?bJUI=<v$*!V^cF0J4&GrM_O9RK%2rlo7<{9RR7xbWRV8 i#T.Ag~r1aje');
define('SECURE_AUTH_SALT', '`V@i%_KjwP~Wz  CVbvXS-Y!)l7em&O:LL,{/J<3cV8$$8HfEQ d`&4P[el1g &)');
define('LOGGED_IN_SALT',   '??xli96@z+pT4//]D%1<,S|ZY4,ze_{O@ %J$GMr2SbkXXxp-MAbv|.Mw9z+,8 /');
define('NONCE_SALT',       'Shk$}%fKa^c>k>7K-.GBPbPGG,cSd:+ZiK+Vi+`|-J>0yR3{kvupIT%Mz&I43|3@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_playful_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

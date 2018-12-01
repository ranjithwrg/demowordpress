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
define('DB_NAME', 'demowordpress');

/** MySQL database username */
define('DB_USER', 'demowordpress');

/** MySQL database password */
define('DB_PASSWORD', 'demowordpress');

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
define('AUTH_KEY',         ' XH?m|{0FFCwI?Km}=vjO`_&ah*k/aH?d%[FK]uCI%s@_zd^w:$o&T@y(*`3A)#|');
define('SECURE_AUTH_KEY',  'NQl.F>(py}J`.D0N<C2~|k!>]uJta roH9_`b>$J??X%P7hv!)-:[A3wwhlwN]J6');
define('LOGGED_IN_KEY',    'is2jdtZCu}FWSYZ~tf`{nZC(#QCe&4.cmn tIsuCd<!1?tuz3>?*o;&b=nY_Gbr$');
define('NONCE_KEY',        '|&Xl#(yL*4+3lG9$ymRgs1b!%tS(+:!.~@nBfkwh b<-_#*]$*k!M2A_.,h[va0a');
define('AUTH_SALT',        'kV;F;#ff5d4]FFA]@H1m>GRbWWuSNI=wN$iXcqi%uAZ<u%Yd@PMrE<=ucQ:[C .0');
define('SECURE_AUTH_SALT', 'dv9VvN]qy1*PC[:F!FaHDVZ,2{YTGbw:-bh_0.:<Wb(Pa!ra!zu@G6SaF1=tL1MX');
define('LOGGED_IN_SALT',   '6&.yfoEaQv;+S5k!!9Uk~/~B$xCY ykJVH36MVN81qJ-lQ,3.yWij#{<)WwQ{PEE');
define('NONCE_SALT',       '*IFQ bbp<&l1+BxT _%=;`qj]s|v0I)h@ErD]3Km{xZ  s/T#x0$(ly>hzYhhe5Y');

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

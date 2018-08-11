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
define('DB_NAME', 'puerto natura');

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
define('AUTH_KEY',         '<<SJSg3kJ4:V}%EQPl4Nht9j[>,P:a/6CcCj$mDy&% )F$Lm$vv7)B#t,j$O:o7}');
define('SECURE_AUTH_KEY',  '1-t25|x;p,C;.th)c3%[aJ7%wvkNW-u_i!HQYfxzHrpBKnQt()/$h;?]g:^jwDwq');
define('LOGGED_IN_KEY',    'g}4F!=F*LO%eDZ#zX;Z?5/4Th*l#Z_J=Y)q(i$&zIfwepA?ePzB6Jc=)3 tzKhg&');
define('NONCE_KEY',        'BE6z(D`B@&&sF;kimO}Rtfg6j}mOPv?5>F~PwYU{c{O2+x7Qe<s-Q)95@V*Q.KG5');
define('AUTH_SALT',        '&Qy+$A< -4J>;IZ<dBnl@5E%QANb.K@|(xuybxPjom|0i(Us1K#k..@g0ohumSCf');
define('SECURE_AUTH_SALT', '*TR6l,ON8WC([IcN9$a*!|oWa)-6.4WX3IEf%x!ycb,FTp=*:r3%oqns+0m]PQ(L');
define('LOGGED_IN_SALT',   '266}OOg!*7L<>>(^zU5ur4bUcU[Ti.BGUF(3:iqy6~w4bq8IrV`~*B`XR`EU<V!D');
define('NONCE_SALT',       '/3jGcsXDt^2-Lp W34i+1MtEHo&5ZuZ}$^l/&](#S/0g4aE<a|$+@A,;kCmS;z)D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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

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
define('DB_NAME', 'nexitia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'SqRvV_V^ .%qiuRY #<q(Epn-Yf~u6^H_]}oy+i:Wmu+E{c)Bd;{tyGnB7c5>W+5');
define('SECURE_AUTH_KEY',  'N2eq=D0W.Nb$xh;Ramem7q{J*BlzM]{L f_3Ls;1KOJWP~];>]A#Z~^WP?SxVN+7');
define('LOGGED_IN_KEY',    '{VG.vm`H2rz2)4}!;.4|$HWfXkR`h3&5-QBwq7oP2[q9Gtj>z$aKOJl&I.X(aQzT');
define('NONCE_KEY',        '+6nc*4>Z)9`q?1Cl@t&<hHh9|tlB!8t_:s#FX%)C,V7WlCQUA0W2X!_~m7mV7QJa');
define('AUTH_SALT',        'xW>6={uJc+}n`IQdYJlTy[0p9ID!Jaz>c|IG %E7{Io&k=4q(K0jaSMo7q}F*]X,');
define('SECURE_AUTH_SALT', '4EBdTiH^io/I); MCKZ21:,_hhnFz7=F,ft5A:zwqB:[T$syEo]k%-E<A! JMRLQ');
define('LOGGED_IN_SALT',   '839e@5Y(V]pLWl)Ot{kty;0D[COskjZ$KAJaQLywlG,is53)gw^YX&0I>cxI>zL;');
define('NONCE_SALT',       'W :C*}km-}|%*dwBLD}ANC=LJ$EQFS/;7LpcR^OIsK(9BF4]43U1p#7#2yU1N{e`');

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

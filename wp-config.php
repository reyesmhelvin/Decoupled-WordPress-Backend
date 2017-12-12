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
define('DB_NAME', 'headlesswordpress');

/** MySQL database username */
define('DB_USER', 'headlesswordpress');

/** MySQL database password */
define('DB_PASSWORD', 'headlesswordpress');

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
define('AUTH_KEY',         '|Pt;p19xLg9E]l4P[[Z8p7^/5[hs=I!Lh6Gb9xh=|R6_9-4+BwiKoj5hS;X*Nz 2');
define('SECURE_AUTH_KEY',  'K85_LVA=ft+!NThjXdV##6_=(0?HUkgL^YC-*0:7R+8^g~H6m)p)P@P /TX.ll$i');
define('LOGGED_IN_KEY',    'd9gJ%LaoivI|u/E+wqON]xw}@0 #P$cbEC}WSyz_[;R>%UcM>%xX7%baMe6F?)rZ');
define('NONCE_KEY',        '-@6p{Q-G2uew6H~B{(TjE{*VR#t8=Rhk2~rCP6:jDudf<O|6eDGg0!;>M]g1m; ;');
define('AUTH_SALT',        'b&xH-bgjL<JL0okVPa_0)>dd]f0-v1}U^5wcE<%gD/n;X+qk>v>DM>NW!nN>TB([');
define('SECURE_AUTH_SALT', 'qYEv!Oqn8V3}r%%D5ec,E:8M3:(y6r.oc~<BGlA?@;48U|_82tU$MSv|FGd1}:_*');
define('LOGGED_IN_SALT',   'K!Miz_,X0iEC]RT/]_KU8&rQ0p.gF:798.uC<4ySp?w!Q:L8 wQ%V8}#$nzYQnBi');
define('NONCE_SALT',       'S~ZpuP*G@H7n/rcU|_&[HNf^1`*Uf>-l{=gj2{.|e/h>[nMWzJ6vH/5i8z9LOYQS');

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

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
define( 'DB_NAME', 'battrup_dk' );

/** MySQL database username */
define( 'DB_USER', 'battrup_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lrj1645' );

/** MySQL hostname */
define( 'DB_HOST', 'battrup.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '^-;$eTQ*]}-@p+_QqfK4/bs~e=+vKUixv}s7EDI)P+=C.og)9PN>V@re#h}@>3eB');
define('SECURE_AUTH_KEY',  '-.g _[`7SG{,Q-6jPMXD+R>LmXk?Qy8^yeae2Uk_<2tjn2+z$cq+h&RNx1oTTR#5');
define('LOGGED_IN_KEY',    'g0s5f;p+inaOtb$>bV&;qro.w$5fZ<HQXhh><8tJJk n3`}yCk1YGFz:-Jw<l&m)');
define('NONCE_KEY',        'XtJ)}fm+^DU@-x#MptCMVlR F{v.DLR-V83{-FjHxq%|}Ok!_iFs{=|Oya6`e(`q');
define('AUTH_SALT',        'eh^|U``|W!WslEw{fq#*ZGiEluM#+e[1#z<l;gLvB`QP.C.Q)nCKiB+1whf?w:|3');
define('SECURE_AUTH_SALT', 'tl9]emHoC~>.Tg5ZpR|h?!tj-+>xxKD?_M%-JioD;.SD?+WOA.5|:0);0`^4&h[v');
define('LOGGED_IN_SALT',   '.D*r_^bAGP:3|J()aL)a]a2Z*,(EB,Gj&.Q7DT[W9fiEw&.1Qz^nMq}bbv2Iy;vs');
define('NONCE_SALT',       'nv;t@O]9L1VmJi~)7+uK(+zyiWJcEb/ucu}2j&OWQdH/Sqx{VPs694T+s%_`|@uP');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'basicwordpress_';
#Husk altid at ændre prefix






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

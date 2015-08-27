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
define('DB_NAME', 'customposttaxly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         'kPjgQ&Y :C6PV42|/vQ<9^O!{=jtD]`nIrwS$&L(ksGP.Z-/<c&wmmy~h@z|GdN#');
define('SECURE_AUTH_KEY',  'y;%!hv nZ&n/=xUiYn!F+_Z~0]YzSJ2*(~W1bf^i.l@J3@mp{+3H&Hv/A8fb|KAE');
define('LOGGED_IN_KEY',    't3IO?m1B339<fqZ!20kdjd8|@?Q{|6f+)})Sp12P%(/O}/;>EsW;WA[EL-GLeI?Q');
define('NONCE_KEY',        'x:`<b9e/]P=DKDR|6Qa[gVe&Qto[YN#UaPN6C79.m{ -yvV&!zRLtrX/n#OA&^|E');
define('AUTH_SALT',        '0-743;JdbwVNyc|+>2r+%>h/L@mxIp&:tjoD 1[,;#%,N(eXC?<!6o5]!M8m!:!u');
define('SECURE_AUTH_SALT', '%uA5[pCZPA6/$kmCLM<9-CM) h89Pm]_)=H38J&QoiVwj?Y54y-Z[/_Up))%IOG+');
define('LOGGED_IN_SALT',   '#Q4:nidyzZ>@yV%pX8=)L]]=MUc$^3TO,5[x={+orw;D_Xp`|y.#DsUn[r/::7^9');
define('NONCE_SALT',       'yj=2it0y8Acp BXcr(.~_?a7NvX`_?vaog(Mgf+C7cN:%}STH$l|@ZfJB-3Cb|H-');

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

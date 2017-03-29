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
define('DB_NAME', 'tex');

/** MySQL database username */
define('DB_USER', 'kornylo');

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
define('AUTH_KEY',         'jwZ!-FQRu>/iBAe4h 1_tFP$hZrj4c Y4(4Z;F^A&tL+H6umSOytE1N.:00(,dV)');
define('SECURE_AUTH_KEY',  '}`.H]V9Fjlq^]>Tx_rx2ba%9&/6}= 3]98mz3*z/cd<|TbFX,o7I QshC1s`q)sZ');
define('LOGGED_IN_KEY',    'S(hSEH$>h>~F#ETY3{3y^bRZMkQ1}G;UGA@p|XYc}&IO&?iPg:;x~cAYvG_AU:Ix');
define('NONCE_KEY',        '7^.Pv0*TV2*~#~ )w8D+:#*#]nE]i`^z^4*sI]#B0AhDpAX&, V:UO]i1KtwX.xx');
define('AUTH_SALT',        'uYbgCW,y+^A0 Scz@Xa4mPLoe~CoCagp]^Et9@Pl0d;au9~TDll70BaouFMwXN:,');
define('SECURE_AUTH_SALT', 'UhV-5:>=l5W3+a|{x>E`>~375i|q$}6uga|Kx6iE0?2/u*C]nb3%^;XpmD@^OLFk');
define('LOGGED_IN_SALT',   'dtN(]{UY6w4 gwmUu1?ZNN,D]i,>B12j^*!SCG6N>7mac!KS|i/JDB%Ypy6 dhLN');
define('NONCE_SALT',       'M{{2_1)clmwvi!oY^O*8S`lwF9jhd.*@l|bj05Rfb9f/o&F/&qcbV(Zk9JDV:l9>');

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

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
define('DB_NAME', 'hivos');

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
define('AUTH_KEY',         'm%f_sq AbPDp?v!i0au>5+wHA[WTnF@Y3Prb:L:|o=tn7HOZ)[>hI*aNf6-7bfb[');
define('SECURE_AUTH_KEY',  ':WS+4%L>.~V3?2vz_kSC+3>W:z/n<BGwwrUV87hbinz[,b0i#Mj=@!NGS-b{3Vt$');
define('LOGGED_IN_KEY',    '!.A-sfM6SoRfsgUmM)riWtIT-B*_E^kS8<qwx|TOzJ;#*WR!M?#zxx;[/aO,5B}2');
define('NONCE_KEY',        'qDe|c,H&M2f>tc}TzBcK-pgCn+ b8vI(kTP&#k_A}dTSh/AQYXcM?w>Vyni;>|]>');
define('AUTH_SALT',        '<hp +hX1gyth*HV**Y=DAe(-#rD1AS0*8%`eNm9,m].:r0T6-/!#;2$Q?c+psk-d');
define('SECURE_AUTH_SALT', '$[-al.P`Y>`v!-Wd%CN9Ew;9Kg{J]J,(L145;eU-G6=rxIoBKBQ0b)<{w5XHah|8');
define('LOGGED_IN_SALT',   '+&|dS|M$sF5zb4t5f,[-=*&$cp[0Yz62x<ST:Kv_g|s`Z6[ME-qg-Y{M|?G*5ary');
define('NONCE_SALT',       '!4dy%Pcaun~pn9T@jH~!kP1mtEuF]Grag*<+,2l{Ixel3}fdY=Bp]MD50zbK21uk');

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

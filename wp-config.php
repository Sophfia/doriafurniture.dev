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
define('DB_NAME', 'doriafurDB5kkbk');

/** MySQL database username */
define('DB_USER', 'doriafurDB5kkbk');

/** MySQL database password */
define('DB_PASSWORD', 'BT66VeqHKW');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'lSSD;+2;*p<mWLiTXH2PE;*$mXITI26{I<yj,ufQnXbMAYI<$,,{rfjznrfIMnMU');
define('SECURE_AUTH_KEY',  '8K[~_w#[~dSZlZhG5CODK]~#1#]~hl#pthHOpSWL;1S59;x+6*_xWe.iqeEAE<IP');
define('LOGGED_IN_KEY',    'gKC!|ksC8S[5#wh_tZOaOS]:O;_]p;2+ptqPWLaeH6D.]L;2+qx.{*embquXLT6AP');
define('NONCE_KEY',        '!}0|kYgsgkNCFVJR0|}@swZNRhVZC14K8C|-~:_|-dh_lpdCKlKSG#:O:_#p];_lp');
define('AUTH_SALT',        'EX6{;P26{uy3$*iXfqymPT6XbE3A.<I{ynu^>$bjXnrUIQ7MBI>,37^v$cckJQ');
define('SECURE_AUTH_SALT', '~#xaetilaDHiLP2#;9H6*.m<]tiqPWxXeT6APEL;2<6A.y*em<quXLTfmbAI{MQ3A');
define('LOGGED_IN_SALT',   'bjI7EQYM{3>7B,y^fn>rvYMUgUcBJ}NU3B0z@}!,nckVcR4B!>J}0zos!w@ckZosV');
define('NONCE_SALT',       'aD];iyiXMEA3E$m<yXMQnbB3UF,y^7$rvf^fUYMjJ7B0N}@r>z@rQocN8VcN}@8C');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

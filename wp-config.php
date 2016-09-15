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
define('DB_NAME', 'gonano');

/** MySQL database username */
define('DB_USER', 'nanobox');

/** MySQL database password */
define('DB_PASSWORD', $_ENV['DATA_DB_NANOBOX_PASS']);

/** MySQL hostname */
define('DB_HOST', $_ENV['DATA_DB_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** debugging */
define( 'WP_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kEt17 _UCK!RVuUT~!fV0F@v++|Z@ F]Xw{fJ;dxr>3n7!{p#~|JXv9)9~@rAu7S');
define('SECURE_AUTH_KEY',  '</{8WAuK4/#oK~6egllJ)P=ma&x+JyEY;8eAGhB#p+v@k9ZCZ=`OvQ3W;oF-#<uW');
define('LOGGED_IN_KEY',    '|}<ua]*lKEKVn7fxNd-Vo4b Vy{IxiS|b+^%KK_<_K^FS9;v |@3lduxjVcor^+Z');
define('NONCE_KEY',        'riJdc<&kcg8D`Z}pI[ QNYEz3l?}H9jj_x`Y(bqG+KyH?)[#%-8P&wAM4dY-ry[O');
define('AUTH_SALT',        'WY|xeh&<,Q}9gZWe.X5y4ZR-Bqi6orHa.Yn)>$SV$=1X?#7m]^D1+XUDY<A^-tjW');
define('SECURE_AUTH_SALT', ',fjk8pw3?-fC%<^]Hfma&3(]$e8_#Ir)HoC]Q.0Yn>y|YKUE$<T6LV,+{ki+h;Qq');
define('LOGGED_IN_SALT',   'Eo]ydLr/p([yudtJg%n;c$bHBgJ4dK.VH_W8&f{d;%89URV^|+m<pPE:~C46Lj,K');
define('NONCE_SALT',       'Tz twy|?v/IAaCZ$(,n)ztOgHXZEL7C(1EW`0J)oWL1MCw7-4^pN)nY8aJDf0Px-');

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

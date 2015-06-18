<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'dentolo');

/** MySQL database password */
define('DB_PASSWORD', 'RobinHealth#0301%');

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

define('AUTH_KEY',         'U@WPp1$)JNJF84hRE`qr/DZ*YCsx+VFHGo}P_;4@S4V_NK6zlFQx|e4%^?t--W9=');
define('SECURE_AUTH_KEY',  '<Y`^,ZjMW2GvM,B#-PsUHn0^I@!W+Hh$]TopPTwi@U,Et~,UWtin{(z%~4d#G@&^');
define('LOGGED_IN_KEY',    ']QFTHK537_T-FJtEuPP!t-A1@~*Zo&zw2qwR?12rl16R8UUJJ)5Hhz$Rz3&I{HQt');
define('NONCE_KEY',        'H2~D/+{8]2gRc]~M/+Ymh{gw|<%u>W|&)6mL8qWVZf1IIGs#,_/)SLdfc)(~b/+f');
define('AUTH_SALT',        'x {jsg CD/z=DhTx>Df$X;|GAn@&An$UuQjuQBh>hB>I~=[$V]6M?EoAwd6#~W+;');
define('SECURE_AUTH_SALT', '>r-H)%#D[ow|**VO.e0Uh5)i)kYe8w+.c[X7nUV,2sOvfl1:u7r/bo8?EL` :uZY');
define('LOGGED_IN_SALT',   '%KJsPE]7Lv&%tc/z5kHe9$O3||bIc61zAdx5f&1!pM~T+N.]a3NJ-Op)xl3< ~]I');
define('NONCE_SALT',       '7k8pwWiDPpD3*`ExO29N15Ce?W&&HFxWG+#~7j0z]7Bi9( /xR,C:AKXonk~{2h*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

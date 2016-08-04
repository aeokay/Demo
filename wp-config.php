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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'I>:~#;j:sK RT*`TjWs$NcHm>0L&GV2sWhwk_</W5|kJs%$riveD*cq6jv7uxk0W');
define('SECURE_AUTH_KEY',  'Q2hLIa&EaT7,HE=$,PrK@yomwzwE>j@fQXF@81`|XHXJtajr[:Zi`*qfD*H%|6[S');
define('LOGGED_IN_KEY',    '|lUHYjkm;Z(f`:y:j(@P?/>;S8Z?E(iMFL[Ejg;40w4JZ4/5tF](_s3i@N`DI0$E');
define('NONCE_KEY',        'm(}(){@jFq/F,$J-ksj j?G0+~M30<b,n;F!@4@E3F1pFvi!3<DKlTiZL$qJR`oA');
define('AUTH_SALT',        'NdHRRsy-8L;5i)@#ACP[V#ZWx%eAAd Y+^A^gm5k9!1ONg*R-(^:O, LT>FPjl|X');
define('SECURE_AUTH_SALT', '`o53&vW~OzNK,MUiytE3xQFJ|3PbvSG%fLfok7UgTYEhRtz9^zyuMZYJLlVdWH?.');
define('LOGGED_IN_SALT',   '5XOHnasZ%ffUfP#[d0bt?ud|r=pexX.<0w1=>&V+V$sDcU~AK,c/4K!yTxy3bcK5');
define('NONCE_SALT',       '<lp@*:J}]JdOK6@>T0-^YmS{&{Ru5LPBTfDi>bcSN,{XDg|(6@2|&/NU<dDBxZ12');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

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

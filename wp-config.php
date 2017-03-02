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
define('DB_NAME', 'ucfx');

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
define('AUTH_KEY',         '$>;J43WV|Wk6sOVhxm+7DEL>xki_eEf#w%@:feskV<Fj/DK`J:#qp850)rwVh:[?');
define('SECURE_AUTH_KEY',  'pJ:|4up$L/3NDaMMEL$`ZACq5.TLtnJS)4a.&Q|Z.bLrJ2zE/Uv}Y- Dx53zQlhf');
define('LOGGED_IN_KEY',    '+mgba9cdKLRiXaoUL _q$@f3Gv2Dkx+JLioNpE)R/XWb:*Ys`dIwXvnxsX--_g{}');
define('NONCE_KEY',        '5f*Gl*mK<buGpEas&{0&$f@#RSmR8X4IRl)b/rP2JFN6`hgUFTZ#z^KZnD8U6mB1');
define('AUTH_SALT',        'UKtwJsO<|kB=G8!x^+XU8pR7%b~:{BX[Bo|z?oKS9nc!=US?K<d^b^+MZNo:^:D3');
define('SECURE_AUTH_SALT', 'nl+?m3 [*Ym2.J$!,+9m.EB|PuYjC;(K.s;Ub*RyWw#>:pBp@4]fr@K/fH51R@z-');
define('LOGGED_IN_SALT',   'E=g{.n#}(KW<=E]Qwl/4,Ub#5,1B_r-Y;7g2OMh#OE)(+;TjF@tyJrAf.K:#LQhD');
define('NONCE_SALT',       'uK*z+B=meRg}SA$flwsgQ;dps!YU.8FbHHz.bL22OQN151^y:WJYzDDms<[Hkb)t');

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

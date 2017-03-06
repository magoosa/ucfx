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
define('DB_NAME', 'wordpress145');

/** MySQL database username */
define('DB_USER', 'wordpressuser145');

/** MySQL database password */
define('DB_PASSWORD', '#a^VVdc-K3DL');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'x3j4To>:6`rLA=p](XQ%lY#2 )}5m2&B(9/R9 jTtw6bZh#x8hOGR{fBwIPI&mk9');
define('SECURE_AUTH_KEY',  '7y{0Y.KYz*<V q-yR;Gt)Pm<2SLohSPg[_Y[!Da@}XrdoV2+xM=4887ex%yLq~o-');
define('LOGGED_IN_KEY',    '<5slE uW.Wnu3=VR9q/a.{]R-,9gKs{e)F_DYge<2fA73;i+4zp+9jRAKWY_x:KW');
define('NONCE_KEY',        '?W23!)]:qTF)kah=Q]UXV5,7P_`AS;OzKhMdV1URwE59L|/o-3YAKTL7l9Dwb:C0');
define('AUTH_SALT',        'hgR!=n_4>CSPw,^|>?OxYPUb4 .ZHnuf0atw,>*[G@bN,wO,50u`XV5c@PgxcZ&t');
define('SECURE_AUTH_SALT', '!nS`m#kghBtWGcjxGnt+6njcor=LG,t(%~mw|;=o aiBt^Ui.*WOIV3J};L+S@%4');
define('LOGGED_IN_SALT',   '/LXovvm?y|[P(cF$TgQ<K>+/cd/{HIn@Fb^2RsKf_8g~`oxunQ,HN!YJC)H10mu^');
define('NONCE_SALT',       '!mf5++khd}/FBf <9=}ttZsi!?I#zP+V7[Zlr}C^Ju@[Z@|l~$cByV#{8nObg^Y2');

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

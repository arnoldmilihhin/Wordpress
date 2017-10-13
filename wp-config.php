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
define('DB_NAME', 'arnoldmi_test3');

/** MySQL database username */
define('DB_USER', 'arnoldmiliktkhk');

/** MySQL database password */
define('DB_PASSWORD', 'Qwerty123');

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
define('AUTH_KEY',         'YILmQd-JGpw.FnU}Yr;.%n8B[QeV..g.Uz~Xok`.un~(|{fM-RdBI_)WREqnOZ;3');
define('SECURE_AUTH_KEY',  'rF@q]e pr;RL8iZa[Ic94p{u1&8K4tr^&cQ/M;YRVt6):x}n3`Ns|I3rSg##+8<u');
define('LOGGED_IN_KEY',    '9<TgLU;Co3>kkRJsQ*sdvqjc6EV-Z-3i+}ib:wjk8/XX8.Zc9h`XE++a+{u;|L+3');
define('NONCE_KEY',        '&|UIIU#Z{=6/XL|tq+u]}MG,?FoY<FOqXuf6Vf+9Dze44rq2o#C1gABh{4UTA56k');
define('AUTH_SALT',        'hzro ]~ErykiX^|1v58xG EV(vZcdGz~h3ORV&+P^j,U*cBs<WsxPb+;&BJU%Q}-');
define('SECURE_AUTH_SALT', '? EM3My|;F?@V|.#FQ.%iTG1|VD6&_*]cCc<%*l2|Zy:NzWG|LxtUP/@sJEXV|gF');
define('LOGGED_IN_SALT',   'y-2pnR<BS#%r2^%<Y!|[(Ji~Pn2n5^cIZ7bI.+5Gd9[]YOdv4HGQb#=Qx<mCp|S8');
define('NONCE_SALT',       '9Y-(:Vt77tGl)y}eKzU803+Mys0VqpdN)N3o>!RX`}{w=,m$;3[YKNb[WPx07I~B');

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

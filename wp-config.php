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
define('DB_NAME', 'wp14poltava');

/** MySQL database username */
define('DB_USER', 'wp14poltava');

/** MySQL database password */
define('DB_PASSWORD', '6D3t1V3m');

/** MySQL hostname */
define('DB_HOST', '5.9.150.48');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


// transferred wp-content dir . перемещение папки content
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content-transferred/wp-content');
define('WP_CONTENT_URL', 'http://wp14poltava.it-dev-lab.com/wp-content-transferred/wp-content');


//define('WP_HOME','http://wp14poltava.it-dev-lab.com');
//define('WP_SITEURL','http://wp14poltava.it-dev-lab.com');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'O/B=`z1<(1xG0qe9L^ro9*xy.&uM4y9F[4#{YQEL=L8tMXL6UBL_cg4TJZB]|G]I');
define('SECURE_AUTH_KEY', '&},z8uuu9iBjuPCv/u0k4?;(RWR_SP2|K0o?60i0AO`qwP~]}=[n{8$W^>ypeON@');
define('LOGGED_IN_KEY', 'fC)qrTPG/NB,<|LZXZ a6ia,AC&sWSu}W>%oSNku?+omiD I%{>W#}N@z^R/`X!5');
define('NONCE_KEY', 'LwQ.=`[AD?%;lNQN1^pRCM,<n4)U/W:P-Z7:;!A&dM4}f&|]w]#J}f3ZT,e0SXJ#');
define('AUTH_SALT', 'k@AZPYFra+~5fEBoyd=q}K;FAH26o/rh(0>x2el9KS&I9v[at1A+zBn!`z,!D+gv');
define('SECURE_AUTH_SALT', 'kD6@_h`xN#P5-WQCED@&.?AHV#VjZ?lG1n*N%Nqd=%ps9>ey+h*)g.]U:*L1P{K8');
define('LOGGED_IN_SALT', '>z;ywY=df^Qr! >Zd~{t/I(1P^:iIBmA&izdTp/.D$sI7Uj]`AwjY~qEL]%n&/7@');
define('NONCE_SALT', '2:as3>|+~m0T~%_{i,IZ)[2&R@|+) 9zACR7~C+ZF]$/k(!TpXNiu9fhqXKPzTj8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

// Сохранение запросов к БД
define( 'SAVEQUERIES', true );

// Запрет редактирования файлов тем и плагинов
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

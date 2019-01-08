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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/stevenhorkey/Sites/everything-in-all/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'everything-in-all-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'yekroh');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// Direct FTP for localhost
define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VPr~ 5$-<*C9H]P(y*:|<B^6{FH GM@Cm0SVKz% AGBmRqfn958wf>.P$[dO&h!k');
define('SECURE_AUTH_KEY',  'ubUkn5D#Fk~UVo.x._`+([|2Ayxbr0yYeVE19}fe+Q[;D:,4F.FB7<XYEL:5y(mL');
define('LOGGED_IN_KEY',    'J!#mI2_?v,A.I5etJ[hU88SL9kot$r#<vCbE&v<V,p~{@m7(EYls)l!(l&Io6*gy');
define('NONCE_KEY',        '7LrT7%jGak&O^oY0/V0@WQ1s`kPsN[]zJ^hHp*=Bi^~9I<`bVA.]:.1B#Xnkg5yU');
define('AUTH_SALT',        'zJCzRqy`AeHT{*n.g-2/KN0?=/e?u7.^zm%9$/a. UH>H9+)>.-~mD_, V%A(pwn');
define('SECURE_AUTH_SALT', '-@W5.Ujacrlpw7<$YDeeBFhRg<Q.0;kt*@g)by@SEr`M3g!J;^n,0*qgHz;@S1-Q');
define('LOGGED_IN_SALT',   '~9zDxRF6XhG `YGd2CL%`+^QeOEf@BSt&b%70S{an)LSbMldo<rQtiyCV]VG!*qK');
define('NONCE_SALT',       '`~V@Nby2I(2-XNiSz0}DI<U?BE1M$nb/=hpz[5X(,cCmW4BMuE824xm>e KRJRYZ');

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
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
ini_set( 'error_log', WP_CONTENT_DIR . '/debug.log' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

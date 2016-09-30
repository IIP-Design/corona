<?php

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('CORONA_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('CORONA_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('CORONA_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('CORONA_DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',          getenv('CORONA_AUTH_KEY'));
define('SECURE_AUTH_KEY',   getenv('CORONA_SECURITY_AUTH_KEY'));
define('LOGGED_IN_KEY',     getenv('CORONA_LOGGED_IN_KEY'));
define('NONCE_KEY',         getenv('CORONA_NONCE_KEY'));
define('AUTH_SALT',         getenv('CORONA_AUTH_SALT'));
define('SECURE_AUTH_SALT',  getenv('CORONA_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',    getenv('CORONA_LOGGED_IN_SALT'));
define('NONCE_SALT',        getenv('CORONA_NONCE_SALT'));


$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', true );
define( 'WP_DEBUG', false );
define( 'FORCE_SSL_ADMIN', false );
define( 'SAVEQUERIES', false );


define('WP_CONTENT_DIR', __DIR__ . '/wp-content');

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    define('WP_CONTENT_URL', 'https://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('WP_SITEURL', 'https://' . $_SERVER['SERVER_NAME'] . '/wp');
    define('WP_HOME', 'https://' . $_SERVER['SERVER_NAME']);
        $_SERVER['HTTPS']='on';
} else {
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
}

define('WP_DEFAULT_THEME', 'corona');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

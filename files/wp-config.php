<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'imicrobe_wordpress');

/** MySQL database username */
define('DB_USER', 'imicrobe');

/** MySQL database password */
define('DB_PASSWORD', 'XgDeeWTAw4pI.');

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
define('AUTH_KEY',         '`OBTCAXJbU0>pu9hS`h]>/+yqSpGi(U@&^g.+L9>(OHe~/>ap=j@},/moc6L{dks');
define('SECURE_AUTH_KEY',  'l)1%.k%-cEm5B3 cG3h^BF+D>IN:amLjW_+=&<! t%Z1oY}&G#UA&qN7Rdps[|(+');
define('LOGGED_IN_KEY',    'Oa.4R^Qil-XCU^w+f<Rt5y+--y%m!y$:RHWT6CC%Fuh2+q-UfNo{Rg014T-J?P3&');
define('NONCE_KEY',        'KB5A9-#|+@sSC+RB?|Zcw$|-9p&MjW>=-n3TfrpV{&Z5q=-m+Cz04G~gV6o7^f+2');
define('AUTH_SALT',        '9y<T|bOV|/f1Ys|9OuKCU*i-A}po<.6qgGM<ueHsYW]8:_,2#7bStSmx9kU^;ic4');
define('SECURE_AUTH_SALT', 'M)br_z{Vy!-zDa ^y&;_0||ydR)}##^z 0A|.,=%NI8i_Q^^Mc7K^7eH;Pz0Q)p:');
define('LOGGED_IN_SALT',   ':}!mE7L/5>`p}m5::}r,S&omFAQ=cjr~/8Y%(eF(]eH%@~r~Kio-@-XvB{g0LPET');
define('NONCE_SALT',       '{,h{QG%E~G a+1 r@v*}Od~$`s6@<FmF-It$B}eBg#UQs<&,#<B{^2*A|k{^q(%(');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

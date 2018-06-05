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
define('DB_NAME', 'houseworkspace');

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
define('AUTH_KEY',         '-GzP8)YA6!Fwuhy]0K1faH]-iM-x[BfbY 9nGdKRKXS*1sH8(:;90dp!gk=mTmA@');
define('SECURE_AUTH_KEY',  '|P!BBc:}ZRpL&SJk2 1i0vUHTl1kD|gL+.~[nKadm~+d]p:^hydE=FNzV(Xr6E/$');
define('LOGGED_IN_KEY',    'G_DG+XCme1CC$-<s5.z~<:,?*v*XLaeFyLc`2c?0r/i1C~p1d-z2;J#xrsVP?bqx');
define('NONCE_KEY',        'BSp8^kK+(h=wY{/<r7]X<Ax9iG%@m%&}Cp.>+qg++~UNuM<yqt>FD6te#9.fAZ&y');
define('AUTH_SALT',        'jtY@b+A.VHqc`QGZTArr!76M[4]&>Kb%p.Oz:CAr2}o[g8@3dbb8EHx<f1)aqrxC');
define('SECURE_AUTH_SALT', 'S}x1`)V>^Fjgwf}io7v.hJ0K*f.OqfQITJA[{o(v>%$P=X`o[f5l?[1IVq: P;eL');
define('LOGGED_IN_SALT',   '8BW5!;D7;tWC|e$DV3((oV+T%_[VJGY?G3f^O8.1zhN>umgroHqstXC2mtG`]zHO');
define('NONCE_SALT',       'vDx,>k&%7qV@R0S^An*l%ms# {_|i5unMQ8qpGFH6ROLTSqn-?QDd$!<dys?Xy|M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hw_';

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

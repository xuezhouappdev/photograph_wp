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
define('DB_NAME', 'lens_wp');

/** MySQL database username */
define('DB_USER', 'lens_admin');

/** MySQL database password */
define('DB_PASSWORD', 'SnMLTx2dM5ebUs4a');

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

define('AUTH_KEY',         ' Hy^`.T9&[X-Tn-B,qb+()B+Z76z(@H9gOp=frR_n9G&i=J4I7.-fs%1QI9q[Xc<');
define('SECURE_AUTH_KEY',  ']XKd&XboLM5/w>nM[pz%?|j>*B4Lt]}|Ik!`-+WC8O$V;wI3_J1%q~yV Ssqq~P>');
define('LOGGED_IN_KEY',    '9EP )H;<aTN|^K*yh{`?)a.D4+jVc}C!tv)^m/xza|=mJx5|HXkyhv3FW7O)J2/0');
define('NONCE_KEY',        'q4-@GN5uE`lTfvFwN.!R*l9AG*m0[8$J{>s :h>3*z~1wD^)pK$}]@/)7Qm$C8kJ');
define('AUTH_SALT',        '=pYQlS[t)h- H<on1v|0]lT<,C|u%J%SL16`Y^R0^[}#o5og459lQMGf,T-):z;M');
define('SECURE_AUTH_SALT', 'Of<6yP@wEki#/#p)|s{_8S)<0`_IbGBZ=>+N>>)hG_gn};QsZ.| 5 QeSoYVevlv');
define('LOGGED_IN_SALT',   'VR2/Z]Ub=`@8dn&A(%*Fekd!t+lb,.2fq6^7X!+Wl,tuk>L=PD:0:%JUK+SDx(e;');
define('NONCE_SALT',       'XZ_koA/XQ`I8;5v><vFhZHC=8*VyZcYjne+m~Wu>p!&U2#{9}-T*-.+{-JR[4UNG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dblens_';

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

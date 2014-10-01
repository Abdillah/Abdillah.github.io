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
define('DB_NAME', 'b5_15209720_wordpress');

/** MySQL database username */
define('DB_USER', 'abdillah');

/** MySQL database password */
define('DB_PASSWORD', '@Codelatte96');

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
define('AUTH_KEY',         'ahcnvOMI=8I3b=laSSe|GaY pCr-u||bg#s3lqJO!Fi;a!e6M8?4@`SC};HY|X1A');
define('SECURE_AUTH_KEY',  'lQ`&+[`<iqL<1|^R McC<WjdAS];D&=&@RbMhR1}x%JPetTE<-cXP_:o&Xv.n^T&');
define('LOGGED_IN_KEY',    '>^YC&bg|GczhA:Gzg*qIYIQlbt&g}?@#f+p(&1~INuxCE[gXOh)14&DhST<IV/S~');
define('NONCE_KEY',        'J+MUVG-g6qJlb X_%EgsMMAZK;n;/G+F/W;Sysf99>m8vL5E%qiEM+)z~g_-TBx<');
define('AUTH_SALT',        '=s|/#-haz+NDBj-V*?WDos yo0ho-nJ-u6uMQ.+~6sj;Q|:5t|nKHg9v6P2BHn S');
define('SECURE_AUTH_SALT', '=eMEBTj2c(~;um<,_$o)nPt?2>F3##e3,F?&0loUc#ej:VDTP&]GJP<~7FH3Ko-L');
define('LOGGED_IN_SALT',   'iSWBESZ#i:(0;n=-SJC16z[T3Gyrv:[.R~F36`pJuCb|AA8}6Nfc9+Oc+&f<fh])');
define('NONCE_SALT',       'sp)`a/O~L7G#-1/d$S$/`;(Gs0YM-T]]6_NG2o{1=SY$}{9Mx=|=5>9}8w*[`b8|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_microbenotes';

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

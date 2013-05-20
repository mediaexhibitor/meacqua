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
define('DB_NAME', 'modxfram_meacqua');

/** MySQL database username */
define('DB_USER', 'modxfram_meacqua');

/** MySQL database password */
define('DB_PASSWORD', 'Pass@12345');

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
define('AUTH_KEY',         'u%kAv)Zq4<xM+Rc[%$g1]@w9.A%}*+Dh)hTyuFLg+B(vnE I|*x@1MY:@Qj/&Df4');
define('SECURE_AUTH_KEY',  '2leqmj+c_;9)01J1=j*xpzxo.L6ks8RKR-X3Z%C(#L-!M%+pc,.-||ZIexTD5a=[');
define('LOGGED_IN_KEY',    '?2.9$${p| $tjS:;++$BC~K|3aW^L [u|rN8F8P9p;Xx+}v!B3dl>RB1&H(c9/;/');
define('NONCE_KEY',        'Hb|zfaAs<dOl<JwI[?^2K[pl{Nfl|y16y#}HRCp[7WX/BdA@iSBVetff@+<QPRp/');
define('AUTH_SALT',        '{nP(nUxP-+`%desWt(F^%f?1Z3R]OVIXoeAmBAt;p@g-vg;m||g}L/oTQQ?7P63-');
define('SECURE_AUTH_SALT', '%K[l9gjqg7n0Wn8e@mkz^P,0t&]u_h29(8|+I6h|o81-HY;l]utD[8yve6t tk1?');
define('LOGGED_IN_SALT',   'MM%<`I}}eDVh9J+CPdrs?!tSC3Q|xxcPu5dbwH$<>$6i@(c/BlTuaRobBg}~:^(d');
define('NONCE_SALT',       '~$1^P_~Kn( fM0>s)cX8ePP-AI>!+0<H/Pb&{6I)nv}B|g7j-yi*C-%o3.TR-?.D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '79vettee');

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
define('AUTH_KEY',         '2D.GSY.4~Xmqe|H<po tSR;#E0gz8Ll+u4?P,e3+ef+qE16FmYL~m%OW8l#bV8+~');
define('SECURE_AUTH_KEY',  'uImz:9<8:jDukMh1y=9D]>owt^fnZAZM#( P85caC&inbx;?i6Jx(ME3_$Nhqb6M');
define('LOGGED_IN_KEY',    '9e6.8 )[$~(>fwXx$<|lmzxLF^giOMtZ^Z}p$S|?%{R)?/*,bG&W[SF{%S=2dADU');
define('NONCE_KEY',        'f{,t3I%`%`+Wf!,6g!F>_vd}CzeV?L1krY@%J?bMp6V1tK3>kQpz*@T|wst 94%e');
define('AUTH_SALT',        'oNpGJ D3f>:[P969Eh eGP6u%x^;X&0V+waw5sq^qAkV?]$cfO_u5mfXCe!*%E16');
define('SECURE_AUTH_SALT', 'g~GQc{++Vv:kn26a?t2d%#<;|<26Q.g0oY`Yi]UNm#N< P&Qbzx#DHzeX}|Ha~S-');
define('LOGGED_IN_SALT',   'hc MK7mJ#7|31s-7D|<?h]wnTL0.+j0aH?U]nM+6M4%9Ed+QS ~}R_2?uAz>-Rnf');
define('NONCE_SALT',       'T.,y&VuyEP[Yp/)HNS@x,:;I!m5MFh].B{i67??|$=r=w_+;mrj8)W4[0!`hXEw9');

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

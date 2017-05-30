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
define('DB_NAME', 'luv2travel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KdIRC.-u:4$!WX!UGRH!reSP-pV%,&8x t}<l!uzqS<>`8}/:;!S:vy$H}I9H4I4');
define('SECURE_AUTH_KEY',  ' k9,9vp^0=3.8,Y @v=fx$dm}m@XQO:x=0.`<*i:0WHRY7XQ=9G2-0+bz=w%I:Gw');
define('LOGGED_IN_KEY',    'LOl=4>rwjtE3J]~%Ow6M6J Do^.9*M @q{?Fi>CI_6/+{dvi73%%e93;5e7~k>4P');
define('NONCE_KEY',        'T=*s-MDDpN-yJD_;fEN;@07)~H>6><o,JKcB i.]KzQI7}.U@^BOE<9F|_qeys:V');
define('AUTH_SALT',        '+/L~*L*(>kmqT,n2#LB79W*Tscdr @(iYH*exYU:]+p?rRu^x>1VX*80^,QCqV/1');
define('SECURE_AUTH_SALT', 'VER)%v=|<4t&<o6$_oYPdUedKFN^DTc&wrbLhsB,|(7Htp}LYHX_/_/ iUdwu]uW');
define('LOGGED_IN_SALT',   'wA6U(:_:H3 qo&*zsJys;CB.1DQ O:iz4+fiMXwSe^.XTZ DxgcgWYq`Vh0$&)Hb');
define('NONCE_SALT',       'z&lVtAjS6#uf=&2nJfze(9jwXMamqu}ibM}`/A!loAJjEO*qBE4,T24qc~Ayrhk4');

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

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
define('DB_NAME', 'claremont');

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
define('AUTH_KEY',         'yQ~}+@NQdel`~)rp&T1!GZ=! 4(WCV<4EmU!Az-5i93Do1[I2%eS{{l]/x_J0Vn0');
define('SECURE_AUTH_KEY',  'wLw{/Y/ajs9e@&7fo#!,o>Ql,>RN3(uO~U/[M25aSka<&gk3xDt,rjZ@#n%)#E^a');
define('LOGGED_IN_KEY',    'cN+z&DW}EU*NAGk[MTQ7 kuj-Aa{`T;Hk%g/t;s4OYoWZVJ) e8,9<<+G%|Jg{a,');
define('NONCE_KEY',        'AY33P_O}&.mzN.c|s[O072;Fj@-sbcDnKNq4},S5Z`{lNc<8{+;%=P_6>FNSkwK}');
define('AUTH_SALT',        'PzUnb@Ip4!Okz_ANAr8tx+O_qnTrt}m@5tMn:HJ%34:i@:]N!h Rd&8*XXWh9#mk');
define('SECURE_AUTH_SALT', '2+$b#O }+;2*N{?IQ7~Ghr-gAFd}{IA_)x0LWBi2,=@UnjndKLg%C8?mzW8dl|Ih');
define('LOGGED_IN_SALT',   '6<WZX~t:6!0p5H?di.Yh[ Rn$rsGiQ1>[MEX6^[5~k A]tU!3r#.* _IS-A-!F2$');
define('NONCE_SALT',       'LEo}gf3Mv92=^Ab ZYC!SIP%~8&te@Qwl|3?8 zB@lgSe[v^*G%8]Mr[(=1]HL+|');

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Learning-management-system' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vd/[RcIZ+,|5|v#5XF>m]epW%1)3(aA~N{]q/LTD.$cy2I^X&~/.e!HzG+;m3a_o' );
define( 'SECURE_AUTH_KEY',  '5Z_2*^4#9T2lVyc^lNUx?[>^+Rt 2>ye@8Q;Fgv@; uz8<Y{;D_C,GDG{sM2/(aK' );
define( 'LOGGED_IN_KEY',    '<Rz~G1wOaU&E6wf?&T02tT`0TOtJ0$}#i2@iah#H]9KE[FK^7v3B#xd/$-HK$H^J' );
define( 'NONCE_KEY',        'Sl6})+T0tH09N (4bN7W| +WeeCn512j!sJ@rnK;lECM&i(2Dm>@6kz8a*O:1|sk' );
define( 'AUTH_SALT',        'M+gsSa?@o<IG^WDJ280694&Nx6}Of9Am^k ,7jVOK;d_],C&%K_V{U/p.QSoPuo~' );
define( 'SECURE_AUTH_SALT', 'g#E&m*1IIM;r&hc$zdF!.42[30eUJ+IsTulp6Of6~6~,z4%6iQApJZR{!tkT/ZYo' );
define( 'LOGGED_IN_SALT',   'i4f ZVN_m:6u9FV~T$R*%2YawYlNMC||Ci}iIsV/9|}waLN>?pJHwqqhyzy^~6@i' );
define( 'NONCE_SALT',       'NjR D`kM)zCMn4V?WD?%m5}k8)N/}Pt|v@oYJ]9H3xU*56*mMp228c9}rs!n%PI5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

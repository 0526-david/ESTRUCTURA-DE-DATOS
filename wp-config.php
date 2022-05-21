<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'estructura' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|>9f1%E,p00LiU<~]<$ZZ#{Xa=6@NUp}O*1wgB5R 5sNSyf$?npq>/TaS>Nn<6R0' );
define( 'SECURE_AUTH_KEY',  'Mag4=i_}d;KDE |<~#G-M@6d|T*D||h~oJ45UOPQ{`3&,~.UN#B,x_ng!Ojxve<C' );
define( 'LOGGED_IN_KEY',    'x0tgyx+o3H<$Whg|,cIzT4<q:v#m,U|FIm%<7[TlEn.j w9>&8)th%VJ@T$9#dw3' );
define( 'NONCE_KEY',        'Zk(u8iELWZK%@P{9d-mL[aC/4]YsjapcjV-5x2!QxfcRtIG:h<ZLB$~W>EHc#]>r' );
define( 'AUTH_SALT',        'VyZ.H6u&5ZbGugPlc$_.O{sI2aZoceN&E0a%Ez(Kf^F[!qI4]J+#vBk,>#6SWGLc' );
define( 'SECURE_AUTH_SALT', '7FgZ.~!-&qoz*z^@nfaGtNdr4S<U(XZss}3(U|;caot}IYT:i+=B~%>z?c$~:=Wb' );
define( 'LOGGED_IN_SALT',   '8M)dRk :@X$=R]Vr#y;F91oYluA3hHv3U/4tbZ2V7Fu_IT&(QgGscsvS ngIK3&?' );
define( 'NONCE_SALT',       'Qg/U2X;>IoQ#J_$_TEkOU1]dqg8KmP!5*X&sN7TO>I_r^_ugKg#V1HcvOeJQjw`(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'est_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

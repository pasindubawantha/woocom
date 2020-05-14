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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',         '2A$@LSr;Su^qPO?8in/5xT(h*YXT9(tgtuHU^gI%gCD$ddz+ixSw.NTx], Z5E[x' );
define( 'SECURE_AUTH_KEY',  ']^tv4jSht=ESBA)sv?MUj9fHzS*Uk;ocQ3M:Mxl,_{MnmQURq~nJhMS*b7WG@N)i' );
define( 'LOGGED_IN_KEY',    'ot:f3<$b]}qyh+twpP&`hD#@tobxp1 ZSY-0v .1Yc(XOe7-#!+eELayRRPPrL 8' );
define( 'NONCE_KEY',        '5>AU%2oQO]_!m_Uu)6.5&(7w}m}ByVpA5cfq9&NdF0}Zz0??1}e:0DJ9w`F!QI9(' );
define( 'AUTH_SALT',        'm4fn}}J14yj$i$Y-hu<y)0.)q =DF?@/h./}P1R&O)(.sCE)@Fl{ekf%9~w15K3p' );
define( 'SECURE_AUTH_SALT', 'G%P8aF~BR%JZ$N_OE*]B3Z%zWnFyk8Y?xY!UVHj5Ca7E{9J/-//-$AUK7@>533Hr' );
define( 'LOGGED_IN_SALT',   '3o~HPjO#3V)sq%Pc_1f-^U=}>dH/I^WQ2{Y9+wNc#;+H[Uu1}TF4){c]61V_8/UD' );
define( 'NONCE_SALT',       '%d+%wQ9cjhU*EAn$r#~z:}wv%g9YI;a:N(8LLX0pvNd5Da*ZjEI])ZW:(X@NbEf0' );

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
define( 'WP_CONTENT_DIR', '/wp-content' );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define( 'WP_DEBUG_LOG', '/errors.log' );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

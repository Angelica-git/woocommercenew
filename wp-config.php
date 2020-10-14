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
define( 'DB_NAME', 'testangelica' );

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
define( 'AUTH_KEY',         'W`8RA$;%]Cr$6c0GdV 3O?6_}j(PTHHZ6q^Ma6FsW=kK J18=`aX7*i-K@/>!!,#' );
define( 'SECURE_AUTH_KEY',  'x-ngCu910n5TAiuiAhcv]jN-R}:_a&v$lIaL(4j]e9^Un$vhex`w!P7P>/+5-([)' );
define( 'LOGGED_IN_KEY',    'eN@mou![lR8>_~heX9yb8dUu$Wr5Yic#S6(H3}AGrre/0F#&3?f(J`O5YQ4Q?UFT' );
define( 'NONCE_KEY',        'x<^zDbVv(^52g52^BG}z6w, n:BvG|M-fVe{/2F3T:_MlzvOyseux#O~tG[U;,<0' );
define( 'AUTH_SALT',        'hQ.9-0<Fcg$gC2Im80qF1K@}u1*mCEkfS&KG>TXdd|X0p3d{4R[`?$Ay)CzB3{2r' );
define( 'SECURE_AUTH_SALT', '+6QuEYu9id/sDTPe%m%vDRaWex>-V*Muz-~Lv%tYuUGswg(ghd*VJdzfLv/jF:qD' );
define( 'LOGGED_IN_SALT',   ';Hz|mo>xzC?TY`*S@l9;$tD39,1|9[kl0g>S~;#h4Sa=BvvjL*KHHfP$>p1cbQG&' );
define( 'NONCE_SALT',       '1@WT^UA?qcx^WtCE0<p}gx,[Tl^Sh3f^U&-b+pYkilpUZW;lk6!El7HG_HI0j]az' );

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
